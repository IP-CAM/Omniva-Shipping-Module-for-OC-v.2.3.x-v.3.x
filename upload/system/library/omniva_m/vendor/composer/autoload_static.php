<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41b12ed3fa537a036fa01257c427da10
{
    public static $files = array (
        'e1af0acb87348aa51d89cfb77fc80e82' => __DIR__ . '/..' . '/mijora/omniva-api/overrides/tcpdf/tcpdf_config.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'M' => 
        array (
            'Mijora\\Omniva\\' => 14,
            'Mijora\\OmnivaOpencart\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'Mijora\\Omniva\\' => 
        array (
            0 => __DIR__ . '/..' . '/mijora/omniva-api/src',
        ),
        'Mijora\\OmnivaOpencart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'Mijora\\OmnivaOpencart\\CourierCall' => __DIR__ . '/../..' . '/src/CourierCall.php',
        'Mijora\\OmnivaOpencart\\Helper' => __DIR__ . '/../..' . '/src/Helper.php',
        'Mijora\\OmnivaOpencart\\Order' => __DIR__ . '/../..' . '/src/Order.php',
        'Mijora\\OmnivaOpencart\\Params' => __DIR__ . '/../..' . '/src/Params.php',
        'Mijora\\OmnivaOpencart\\Price' => __DIR__ . '/../..' . '/src/Price.php',
        'Mijora\\Omniva\\Helper' => __DIR__ . '/..' . '/mijora/omniva-api/src/Helper.php',
        'Mijora\\Omniva\\Locations\\PickupPoints' => __DIR__ . '/..' . '/mijora/omniva-api/src/Locations/PickupPoints.php',
        'Mijora\\Omniva\\OmnivaException' => __DIR__ . '/..' . '/mijora/omniva-api/src/OmnivaException.php',
        'Mijora\\Omniva\\PowerBi\\OmnivaPowerBi' => __DIR__ . '/..' . '/mijora/omniva-api/src/PowerBi/OmnivaPowerBi.php',
        'Mijora\\Omniva\\Request' => __DIR__ . '/..' . '/mijora/omniva-api/src/Request.php',
        'Mijora\\Omniva\\ServicePackageHelper\\PackageItem' => __DIR__ . '/..' . '/mijora/omniva-api/src/ServicePackageHelper/PackageItem.php',
        'Mijora\\Omniva\\ServicePackageHelper\\ServicePackageHelper' => __DIR__ . '/..' . '/mijora/omniva-api/src/ServicePackageHelper/ServicePackageHelper.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\AdditionalServiceInterface' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/AdditionalServiceInterface.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\CodService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/CodService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\DeliveryToAnAdultService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/DeliveryToAnAdultService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\DeliveryToSpecificPersonService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/DeliveryToSpecificPersonService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\DocumentReturnService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/DocumentReturnService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\FragileService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/FragileService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\InsuranceService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/InsuranceService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\LetterDeliveryToASpecificPersonService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/LetterDeliveryToASpecificPersonService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\RegisteredAdviceOfDeliveryService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/RegisteredAdviceOfDeliveryService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\SameDayDeliveryService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/SameDayDeliveryService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\SecondDeliveryAttemptOnSaturdayService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/SecondDeliveryAttemptOnSaturdayService.php',
        'Mijora\\Omniva\\Shipment\\AdditionalService\\StandardAdviceOfDeliveryService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/AdditionalService/StandardAdviceOfDeliveryService.php',
        'Mijora\\Omniva\\Shipment\\CallCourier' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/CallCourier.php',
        'Mijora\\Omniva\\Shipment\\Label' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Label.php',
        'Mijora\\Omniva\\Shipment\\Manifest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Manifest.php',
        'Mijora\\Omniva\\Shipment\\Order' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Order.php',
        'Mijora\\Omniva\\Shipment\\Package\\AdditionalService' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/AdditionalService.php',
        'Mijora\\Omniva\\Shipment\\Package\\Address' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Address.php',
        'Mijora\\Omniva\\Shipment\\Package\\Cod' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Cod.php',
        'Mijora\\Omniva\\Shipment\\Package\\Contact' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Contact.php',
        'Mijora\\Omniva\\Shipment\\Package\\Measures' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Measures.php',
        'Mijora\\Omniva\\Shipment\\Package\\Notification' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Notification.php',
        'Mijora\\Omniva\\Shipment\\Package\\Package' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/Package.php',
        'Mijora\\Omniva\\Shipment\\Package\\ServicePackage' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Package/ServicePackage.php',
        'Mijora\\Omniva\\Shipment\\Request\\CallCourierOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/CallCourierOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Request\\CancelCourierOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/CancelCourierOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Request\\CustomOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/CustomOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Request\\EventsOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/EventsOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Request\\OmxRequestInterface' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/OmxRequestInterface.php',
        'Mijora\\Omniva\\Shipment\\Request\\PackageLabelOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/PackageLabelOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Request\\ShipmentOmxRequest' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Request/ShipmentOmxRequest.php',
        'Mijora\\Omniva\\Shipment\\Shipment' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Shipment.php',
        'Mijora\\Omniva\\Shipment\\ShipmentHeader' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/ShipmentHeader.php',
        'Mijora\\Omniva\\Shipment\\Tracking' => __DIR__ . '/..' . '/mijora/omniva-api/src/Shipment/Tracking.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
        'setasign\\Fpdi\\FpdfTpl' => __DIR__ . '/..' . '/setasign/fpdi/src/FpdfTpl.php',
        'setasign\\Fpdi\\FpdfTplTrait' => __DIR__ . '/..' . '/setasign/fpdi/src/FpdfTplTrait.php',
        'setasign\\Fpdi\\FpdfTrait' => __DIR__ . '/..' . '/setasign/fpdi/src/FpdfTrait.php',
        'setasign\\Fpdi\\Fpdi' => __DIR__ . '/..' . '/setasign/fpdi/src/Fpdi.php',
        'setasign\\Fpdi\\FpdiException' => __DIR__ . '/..' . '/setasign/fpdi/src/FpdiException.php',
        'setasign\\Fpdi\\FpdiTrait' => __DIR__ . '/..' . '/setasign/fpdi/src/FpdiTrait.php',
        'setasign\\Fpdi\\GraphicsState' => __DIR__ . '/..' . '/setasign/fpdi/src/GraphicsState.php',
        'setasign\\Fpdi\\Math\\Matrix' => __DIR__ . '/..' . '/setasign/fpdi/src/Math/Matrix.php',
        'setasign\\Fpdi\\Math\\Vector' => __DIR__ . '/..' . '/setasign/fpdi/src/Math/Vector.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\AbstractReader' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/AbstractReader.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\CrossReference' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/CrossReference.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\CrossReferenceException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/CrossReferenceException.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\FixedReader' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/FixedReader.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\LineReader' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/LineReader.php',
        'setasign\\Fpdi\\PdfParser\\CrossReference\\ReaderInterface' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/CrossReference/ReaderInterface.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\Ascii85' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/Ascii85.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\Ascii85Exception' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/Ascii85Exception.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\AsciiHex' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/AsciiHex.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\FilterException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/FilterException.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\FilterInterface' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/FilterInterface.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\Flate' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/Flate.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\FlateException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/FlateException.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\Lzw' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/Lzw.php',
        'setasign\\Fpdi\\PdfParser\\Filter\\LzwException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Filter/LzwException.php',
        'setasign\\Fpdi\\PdfParser\\PdfParser' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/PdfParser.php',
        'setasign\\Fpdi\\PdfParser\\PdfParserException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/PdfParserException.php',
        'setasign\\Fpdi\\PdfParser\\StreamReader' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/StreamReader.php',
        'setasign\\Fpdi\\PdfParser\\Tokenizer' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Tokenizer.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfArray' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfArray.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfBoolean' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfBoolean.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfDictionary' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfDictionary.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfHexString' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfHexString.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfIndirectObject' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfIndirectObject.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfIndirectObjectReference' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfIndirectObjectReference.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfName' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfName.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfNull' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfNull.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfNumeric' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfNumeric.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfStream' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfStream.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfString' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfString.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfToken' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfToken.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfType' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfType.php',
        'setasign\\Fpdi\\PdfParser\\Type\\PdfTypeException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfParser/Type/PdfTypeException.php',
        'setasign\\Fpdi\\PdfReader\\DataStructure\\Rectangle' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfReader/DataStructure/Rectangle.php',
        'setasign\\Fpdi\\PdfReader\\Page' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfReader/Page.php',
        'setasign\\Fpdi\\PdfReader\\PageBoundaries' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfReader/PageBoundaries.php',
        'setasign\\Fpdi\\PdfReader\\PdfReader' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfReader/PdfReader.php',
        'setasign\\Fpdi\\PdfReader\\PdfReaderException' => __DIR__ . '/..' . '/setasign/fpdi/src/PdfReader/PdfReaderException.php',
        'setasign\\Fpdi\\TcpdfFpdi' => __DIR__ . '/..' . '/setasign/fpdi/src/TcpdfFpdi.php',
        'setasign\\Fpdi\\Tcpdf\\Fpdi' => __DIR__ . '/..' . '/setasign/fpdi/src/Tcpdf/Fpdi.php',
        'setasign\\Fpdi\\Tfpdf\\FpdfTpl' => __DIR__ . '/..' . '/setasign/fpdi/src/Tfpdf/FpdfTpl.php',
        'setasign\\Fpdi\\Tfpdf\\Fpdi' => __DIR__ . '/..' . '/setasign/fpdi/src/Tfpdf/Fpdi.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41b12ed3fa537a036fa01257c427da10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41b12ed3fa537a036fa01257c427da10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41b12ed3fa537a036fa01257c427da10::$classMap;

        }, null, ClassLoader::class);
    }
}
