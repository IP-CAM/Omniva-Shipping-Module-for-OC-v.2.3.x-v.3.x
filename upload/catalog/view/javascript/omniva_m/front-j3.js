const OMNIVA_M_J3 = {
    mainNode: null,
    strings: null,
    currentCountryId: null,

    observe: function () {
        const targetNode = document.body;

        const config = { attributes: false, childList: true, subtree: true };

        const callback = function (mutationsList, observer) {
            try {
                // check if country changed, if so make sure previous node is removed
                if (OMNIVA_M_J3.mainNode && window._QuickCheckout && _QuickCheckout.order_data.shipping_country_id !== OMNIVA_M_J3.currentCountryId) {
                    console.log('Omniva_m country change detected');
                    OMNIVA_M_J3.mainNode.remove();
                    OMNIVA_M_J3.currentCountryId = _QuickCheckout.order_data.shipping_country_id;
                    OMNIVA_M_J3.init();
                    return;
                }
            } catch (error) { }

            if (
                document.querySelector('input[value^="omniva_m.terminal_"]')
                && !document.querySelector('input[value^="omniva_m.terminal_"][data-initialized="omniva_m"]')
            ) {
                console.log('Omniva_m initializing terminals');
                document.querySelector('input[value^="omniva_m.terminal_"]').dataset.initialized = 'omniva_m';
                OMNIVA_M_J3.currentCountryId = _QuickCheckout.order_data.shipping_country_id;
                OMNIVA_M_J3.init();
            }
        };

        const observer = new MutationObserver(callback);
        observer.observe(targetNode, config);
    },

    init: function () {
        if (window._QuickCheckout || window._QuickCheckoutData) {
            window.omniva_m_status = false;
            if (window._QuickCheckout.shipping_methods.omniva_m) {
                window.omniva_m_status = true;
            }

            /* Not used but placeholders just in case*/
            window.omniva_m_country_code = 'LT';
            window.omniva_m_js_translation = {};
            window.omniva_m_ajax_url = 'index.php?route=extension/module/omniva_m/ajax';

            // one of variables to make sure there is terminals selector
            window.omniva_m_terminal_price = OMNIVA_M_J3.getPriceFromJournal();
        }

        if (typeof omniva_m_status !== 'boolean' || !omniva_m_status || window.omniva_m_terminal_price === false) {
            return;
        }

        console.log('Omniva_m starting');

        let clone = null;
        let firstEl = null;
        document.querySelectorAll('input[value^="omniva_m.terminal_"]').forEach((el, index) => {
            if (index === 0) { firstEl = el; }
            el.closest('.radio').classList.add('hidden');
        });

        clone = firstEl.closest('.radio').cloneNode(true);
        OMNIVA_M_J3.mainNode = clone;
        clone.classList.remove('hidden');
        clone.style.flexDirection = 'column';
        clone.querySelector('label').classList.remove('hidden');
        let cloneTitle = clone.querySelector('.shipping-quote-title');
        cloneTitle.textContent = cloneTitle.textContent.replace(/:.*-/, ' -').replace('Omniva', 'Omniva Parcel Terminal');
        let select = document.createElement('select');
        select.classList.add('form-control');
        select.style.margin = '0.25em 0';

        let keys = Object.keys(window._QuickCheckout.shipping_methods.omniva_m.quote);
        let selectHtml = '<option value="0" disabled>- Select terminal -</option>';
        keys.forEach((key) => {
            if (key === 'courier') { return; }
            let optionData = window._QuickCheckout.shipping_methods.omniva_m.quote[key];
            selectHtml += `<option value="${optionData.code}">${optionData.title.replace('Omniva:', '').trim()}</option>`;
        });

        select.innerHTML = selectHtml;
        select.value = '0';
        clone.append(select);

        setTimeout(function () {
            try {
                fetch(omniva_m_ajax_url + '&action=getFrontTrans')
                    .then(response => response.json())
                    .then(parsed => {
                        if (!parsed.data) {
                            console.warning('Omniva_m: Could not load translations');
                            return;
                        }

                        OMNIVA_M_J3.strings = parsed.data;
                        OMNIVA_M_J3.updateStrings();
                    });
            } catch (error) {
                console.log('OMNIVA_M:', error);
            }
        }, 1);

        firstEl.closest('.radio').parentNode.append(clone);

        let cloneInput = clone.querySelector('input[name="shipping_method"]');
        cloneInput.value = '';

        window.omniva_m_j_data = { selected: null };

        cloneInput.addEventListener('change', function (e) {
            if (e.target.checked) {
                if (window._QuickCheckout.order_data.shipping_code != e.target.value) {
                    _QuickCheckout.forceLoadingOverlay();
                }
                window._QuickCheckout.order_data.shipping_code = e.target.value;
            }
        });

        select.addEventListener('change', function (e) {
            window.omniva_m_j_data.selected = e.target.value;
            cloneInput.value = e.target.value;
            cloneInput.checked = true;
            window._QuickCheckout.order_data.shipping_code = e.target.value;
            _QuickCheckout.forceLoadingOverlay();
        });

        /* handles validation on main checkout button presss */
        function _onAjaxReq(options, originalOptions, jqXhr) {
            if (/checkout\/save\&confirm=true/.test(options.url) && (options.dataType == "json" || !options.dataType)) {
                const selected_node = $("input[name=\"shipping_method\"]:checked");
                if (selected_node.length && selected_node.val().startsWith('omniva_m.terminal') && (!select.value || select.value == '0')) {
                    jqXhr.abort();
                    if (OMNIVA_M_J3.strings && OMNIVA_M_J3.strings['omniva_m_select_option_warning']) {
                        alert(OMNIVA_M_J3.strings['omniva_m_select_option_warning']);
                    } else {
                        alert('Please select Omniva parcel terminal!');
                    }
                    $("html, body").animate({ scrollTop: $(select).offset().top }, 1e3);
                    $(".journal-loading-overlay").hide();
                    $("#quick-checkout-button-confirm").button("reset")
                    return false
                }
            }
        }

        /* handles selector value chosen upon page load or ajax calls */
        function _onAjaxComplete(event, xhr, settings) {
            const selected_node = $("input[name=\"shipping_method\"]:checked");
            if (selected_node.length && selected_node.val().startsWith('omniva_m.terminal')) {
                if (window.omniva_m_j_data.selected == selected_node.val() && selected_node[0].isSameNode(cloneInput)) { return; }
                select.value = selected_node.val();
                window.omniva_m_j_data.selected = selected_node.val();
                cloneInput.value = selected_node.val();
                cloneInput.checked = true;
            }
        }

        _onAjaxComplete();

        $.ajaxPrefilter(_onAjaxReq);
        $(document).ajaxComplete(_onAjaxComplete);

        clone.closest('.shippings').classList.remove('hidden');
    },

    getPriceFromJournal: function () {
        let keys = Object.keys(window._QuickCheckout.shipping_methods.omniva_m.quote);

        for (let i = 0; i < keys.length; ++i) {
            if (keys[i] !== 'courier') {
                return window._QuickCheckout.shipping_methods.omniva_m.quote[keys[i]].text;
            }
        }

        return false;
    },

    unhideTest: function () {
        OMNIVA_M_J3.mainNode.closest('.shippings').classList.remove('hidden');
    },

    updateStrings: function () {
        if (!OMNIVA_M_J3.mainNode || !OMNIVA_M_J3.strings) {
            return;
        }

        const titleTag = OMNIVA_M_J3.mainNode.querySelector('.shipping-quote-title');

        if (titleTag && OMNIVA_M_J3.strings['omniva_m_shipping_option_title']) {
            titleTag.textContent = titleTag.textContent.replace('Omniva Parcel Terminal', OMNIVA_M_J3.strings['omniva_m_shipping_option_title']);
        }

        const optionTag = OMNIVA_M_J3.mainNode.querySelector('select option[value="0"]');
        if (optionTag && OMNIVA_M_J3.strings['omniva_m_select_option']) {
            optionTag.textContent = OMNIVA_M_J3.strings['omniva_m_select_option'];
        }
    }
};

document.addEventListener('DOMContentLoaded', function (e) {
    OMNIVA_M_J3.observe();
});