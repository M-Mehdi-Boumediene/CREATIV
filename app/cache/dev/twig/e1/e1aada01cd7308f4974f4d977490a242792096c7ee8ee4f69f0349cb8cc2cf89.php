<?php

/* neufs/emailing.html.twig */
class __TwigTemplate_54de01c52bfc97f32d3b9067e12167b231dd016fb81b31d7452fdca9a9fce847 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "neufs/emailing.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <style>
        /* CONFIG STYLES Please do not delete and edit CSS styles below */
        /* IMPORTANT THIS STYLES MUST BE ON FINAL EMAIL */
        #outlook a {
            padding: 0;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;

        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        /*
        END OF IMPORTANT
        */
        html,
        body {
            width: 100%;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse;
            border-spacing: 0px;
        }

        table td,
        html,
        body,
        .es-wrapper {
            padding: 0;
            Margin: 0;
        }

        .es-content,
        .es-header,
        .es-footer {
            table-layout: fixed !important;
            width: 100%;
        }

        img {
            display: block;
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        table tr {
            border-collapse: collapse;
        }

        p,
        hr {
            Margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            Margin: 0;
            line-height: 120%;
            mso-line-height-rule: exactly;
            font-family: tahoma, verdana, segoe, sans-serif;
        }

        p,
        ul li,
        ol li,
        a {

            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
        }

        .es-left {
            float: left;
        }

        .es-right {
            float: right;
        }

        .es-p5 {
            padding: 5px;
        }

        .es-p5t {
            padding-top: 5px;
        }

        .es-p5b {
            padding-bottom: 5px;
        }

        .es-p5l {
            padding-left: 5px;
        }

        .es-p5r {
            padding-right: 5px;
        }

        .es-p10 {
            padding: 10px;
        }

        .es-p10t {
            padding-top: 10px;
        }

        .es-p10b {
            padding-bottom: 10px;
        }

        .es-p10l {
            padding-left: 10px;
        }

        .es-p10r {
            padding-right: 10px;
        }

        .es-p15 {
            padding: 15px;
        }

        .es-p15t {
            padding-top: 15px;
        }

        .es-p15b {
            padding-bottom: 15px;
        }

        .es-p15l {
            padding-left: 15px;
        }

        .es-p15r {
            padding-right: 15px;
        }

        .es-p20 {
            padding: 20px;
        }

        .es-p20t {
            padding-top: 20px;
        }

        .es-p20b {
            padding-bottom: 20px;
        }

        .es-p20l {
            padding-left: 20px;
        }

        .es-p20r {
            padding-right: 20px;
        }

        .es-p25 {
            padding: 25px;
        }

        .es-p25t {
            padding-top: 25px;
        }

        .es-p25b {
            padding-bottom: 25px;
        }

        .es-p25l {
            padding-left: 25px;
        }

        .es-p25r {
            padding-right: 25px;
        }

        .es-p30 {
            padding: 30px;
        }

        .es-p30t {
            padding-top: 30px;
        }

        .es-p30b {
            padding-bottom: 30px;
        }

        .es-p30l {
            padding-left: 30px;
        }

        .es-p30r {
            padding-right: 30px;
        }

        .es-p35 {
            padding: 35px;
        }

        .es-p35t {
            padding-top: 35px;
        }

        .es-p35b {
            padding-bottom: 35px;
        }

        .es-p35l {
            padding-left: 35px;
        }

        .es-p35r {
            padding-right: 35px;
        }

        .es-p40 {
            padding: 40px;
        }

        .es-p40t {
            padding-top: 40px;
        }

        .es-p40b {
            padding-bottom: 40px;
        }

        .es-p40l {
            padding-left: 40px;
        }

        .es-p40r {
            padding-right: 40px;
        }

        .es-menu td {
            border: 0;
        }

        .es-menu td a img {
            display: inline-block !important;
        }

        /* END CONFIG STYLES */
        a {
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            font-size: 14px;
            text-decoration: none;
        }

        h1 {
            font-size: 30px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h1 a {
            font-size: 30px;
        }

        h2 {
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h2 a {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h3 a {
            font-size: 20px;
        }

        p,
        ul li,
        ol li {
            font-size: 14px;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            line-height: 150%;
        }

        ul li,
        ol li {
            Margin-bottom: 15px;
        }

        .es-menu td a {
            text-decoration: none;
            display: block;
        }

        .es-wrapper {
            width: 100%;
            height: 100%;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-wrapper-color {
            background-color: #e4e5e7;
        }

        .es-content-body {
            background-color: #ffffff;
        }

        .es-content-body p,
        .es-content-body ul li,
        .es-content-body ol li {
            color: #333333;
        }

        .es-content-body a {
            color: #ffffff;
        }

        .es-header {
            background-color: transparent;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-header-body {
            background-color: #34265f;
        }

        .es-header-body p,
        .es-header-body ul li,
        .es-header-body ol li {
            color: #ffffff;
            font-size: 14px;
        }

        .es-header-body a {
            color: #ffffff;
            font-size: 14px;
        }

        .es-footer {
            background-color: transparent;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-footer-body {
            background-color: transparent;
        }

        .es-footer-body p,
        .es-footer-body ul li,
        .es-footer-body ol li {
            color: #333333;
            font-size: 12px;
        }

        .es-footer-body a {
            color: #000000;
            font-size: 12px;
        }

        .es-infoblock,
        .es-infoblock p,
        .es-infoblock ul li,
        .es-infoblock ol li {
            line-height: 120%;
            font-size: 12px;
            color: #999999;
        }

        .es-infoblock a {
            font-size: 12px;
            color: #999999;
        }

        a.es-button {
            border-style: solid;
            border-color: #34265f;
            border-width: 10px 20px 10px 20px;
            display: block;
            background: #34265f;
            border-radius: 5px;
            font-size: 18px;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            font-weight: normal;
            font-style: normal;
            line-height: 120%;
            color: #ffffff;
            text-decoration: none;
            width: auto;
            text-align: center;
        }

        .es-button-border {
            border-style: solid solid solid solid;
            border-color: transparent transparent transparent transparent;
            background: #2cb543;
            border-width: 0px 0px 0px 0px;
            display: inline-block;
            border-radius: 5px;
            width: auto;
        }

        /* RESPONSIVE STYLES Please do not delete and edit CSS styles below. If you don't need responsive layout, please delete this section. */
        @media only screen and (max-width: 600px) {

            p,
            ul li,
            ol li,
            a {
                font-size: 16px !important;
                line-height: 150% !important;
            }

            h1 {
                font-size: 30px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h2 {
                font-size: 26px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h3 {
                font-size: 20px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h1 a {
                font-size: 30px !important;
            }

            h2 a {
                font-size: 26px !important;
            }

            h3 a {
                font-size: 20px !important;
            }

            .es-menu td a {
                font-size: 16px !important;
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 16px !important;
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 16px !important;
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important;
            }

            *[class=\"gmail-fix\"] {
                display: none !important;
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important;
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important;
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important;
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important;
            }

            .es-button-border {
                display: block !important;
            }

            a.es-button {
                font-size: 20px !important;
                display: block !important;
                border-left-width: 0px !important;
                border-right-width: 0px !important;
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important;
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important;
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important;
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important;
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important;
            }

            @media only screen and (max-width: 768px) {
                .adapt-img {
                    width: 200px !important;
                    height: auto !important;
                }
            }

            .es-m-p0 {
                padding: 0px !important;
            }

            .es-m-p0r {
                padding-right: 0px !important;
            }

            .es-m-p0l {
                padding-left: 0px !important;
            }

            .es-m-p0t {
                padding-top: 0px !important;
            }

            .es-m-p0b {
                padding-bottom: 0 !important;
            }

            .es-m-p20b {
                padding-bottom: 20px !important;
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important;
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important;
            }

            .es-desk-menu-hidden {
                display: table-cell !important;
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important;
            }

            table.es-social {
                display: inline-block !important;
            }

            table.es-social td {
                display: inline-block !important;
            }
        }

        /* END RESPONSIVE STYLES */
    </style>

</head>

<body>
<div class=\"es-wrapper-color\">
    <!--[if gte mso 9]>
    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
        <v:fill type=\"tile\" color=\"#e4e5e7\"></v:fill>
    </v:background>
    <![endif]-->

    <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
        <tbody>
        <tr>
            <td class=\"esd-email-paddings\" valign=\"top\">
                <table class=\"es-content esd-header-popover\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" align=\"center\">
                            <table class=\"es-content-body\" style=\"background-color: rgb(237, 237, 237);\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ededed\" align=\"center\">
                                <tbody>
                                <tr>
                                    <td class=\"esd-structure\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame esd-checked\" width=\"600\" valign=\"top\" align=\"center\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: #000000 ; background-position: center top; background-repeat: no-repeat;\" >
                                                        <tbody>
                                                        <tr>
                                                            <td align=\"left\" class=\"esd-block-text\">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-image\" align=\"center\"><a target=\"_blank\"><img class=\"adapt-img\" src=\"https://ndwi-dz.com/logondwi.jpg\" alt width=\"120\" style=\"display: block;\"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-text\">
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\">FABRICATION DE CUISINES, CHAMBRES, MEUBLES ET BUREAUX DE QUALIT?? EXCEPTIONNELLE.</p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"esd-structure\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame\" width=\"600\" valign=\"top\" align=\"center\">
                                                    <table style=\"background-color: rgb(255, 255, 255);\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
                                                        <tbody>

                                                        <tr>
                                                            <td class=\"esd-block-text es-p10b es-p40r es-p40l\" align=\"center\">
                                                                <br>
                                                                ";
        // line 746
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 746, $this->source); })());
        echo "
                                                         ??
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" esd-custom-block-id=\"4864\" align=\"center\">
                            <table class=\"es-content-body\" style=\"background-color: rgb(237, 237, 237);\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ededed\" align=\"center\">
                                <tbody>

                                <tr>
                                    <td class=\"esd-structure es-p20t es-p20r es-p20l\" align=\"left\" bgcolor=\"#34265f\" style=\"background-color: rgb(0,0,0);\">
                                        <!--[if mso]><table width=\"560\" cellpadding=\"0\" cellspacing=\"0\"><tr><td width=\"342\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" align=\"left\">
                                            <tbody>
                                            <tr>
                                                <td width=\"342\" class=\"es-m-p20b esd-container-frame\" align=\"left\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                        <tbody>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-image\"><a target=\"_blank\"><img class=\"adapt-img\" src=\"https://ndwi-dz.com/logondwi.jpg\" alt style=\"display: block;\" width=\"60\"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-text\">
                                                                <p style=\"color: #ffffff; font-size: 13px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 13px;\">&nbsp;FABRICATION DE CUISINES, CHAMBRES, MEUBLES ET BUREAUX DE QUALIT?? EXCEPTIONNELLE EN ALGERIE.

                                                                </p>
                                                                <p style=\"color: #ffffff; text-align: center;\"><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--[if mso]></td><td width=\"20\"></td><td width=\"198\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\">
                                            <tbody>
                                            <tr>
                                                <td class=\"es-m-p20b esd-container-frame\" width=\"198\" align=\"left\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tbody>
                                                        <tr>
                                                            <td class=\"esd-block-text es-p5t\" align=\"right\">
                                                                <p style=\"color: #ffffff; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">N??37, cit?? des villas militaires, Bir Djir Oran - Alg??rie</p>
                                                                <p style=\"color: #ffffff; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">Tel: +213 (0) 555.535.106</p>
                                                                <p style=\"color: #ffffff !important; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">Email: info@ndwi.com</p>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-social es-p15t es-m-txt-c\" align=\"center\">
                                                                <table class=\"es-table-not-adapt es-social\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class=\" es-p15r\" valign=\"top\" align=\"center\"><a target=\"_blank\" href><img title=\"Facebook\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/facebook-rounded-white.png\" alt=\"Fb\" width=\"32\" height=\"32\"></a></td>
                                                                        <td class=\" es-p15r\" valign=\"top\" align=\"center\"><a target=\"_blank\" href><img title=\"Twitter\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/twitter-rounded-white.png\" alt=\"Tw\" width=\"32\" height=\"32\"></a></td>
                                                                        <td valign=\"top\" align=\"center\"><a target=\"_blank\" href=\"\"><img title=\"Linkedin\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/linkedin-rounded-white.png\" alt=\"In\" width=\"32\" height=\"32\"></a></td>
                                                                        <br><br>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" class=\"esd-block-text\">

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class=\"es-footer esd-footer-popover\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" esd-custom-block-id=\"4862\" align=\"center\">
                            <table class=\"es-footer-body\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                <tbody>
                                <tr>
                                    <td class=\"esd-structure es-p20t es-p20r es-p20l\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame\" width=\"560\" valign=\"top\" align=\"center\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tbody>
                                                        <tr>
                                                            <td class=\"esd-block-text es-p10\" align=\"center\">
                                                                <p><a target=\"_blank\" href=\"https://ndwi-dz.com/\">?? 2020 NEW DESIGN WOOD INDUSTRY  </a> | <a target=\"_blank\" href>Tous droits r??serv??s.</a></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-spacer es-p5t es-p5b es-p20r es-p20l\" align=\"center\">
                                                                <table width=\"100%\" height=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style=\"border-bottom: 1px solid #cccccc; background:none; height:1px; width:100%; margin:0px 0px 0px 0px;\"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>


</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "neufs/emailing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 746,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <style>
        /* CONFIG STYLES Please do not delete and edit CSS styles below */
        /* IMPORTANT THIS STYLES MUST BE ON FINAL EMAIL */
        #outlook a {
            padding: 0;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;

        }

        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }

        /*
        END OF IMPORTANT
        */
        html,
        body {
            width: 100%;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse;
            border-spacing: 0px;
        }

        table td,
        html,
        body,
        .es-wrapper {
            padding: 0;
            Margin: 0;
        }

        .es-content,
        .es-header,
        .es-footer {
            table-layout: fixed !important;
            width: 100%;
        }

        img {
            display: block;
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        table tr {
            border-collapse: collapse;
        }

        p,
        hr {
            Margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            Margin: 0;
            line-height: 120%;
            mso-line-height-rule: exactly;
            font-family: tahoma, verdana, segoe, sans-serif;
        }

        p,
        ul li,
        ol li,
        a {

            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
        }

        .es-left {
            float: left;
        }

        .es-right {
            float: right;
        }

        .es-p5 {
            padding: 5px;
        }

        .es-p5t {
            padding-top: 5px;
        }

        .es-p5b {
            padding-bottom: 5px;
        }

        .es-p5l {
            padding-left: 5px;
        }

        .es-p5r {
            padding-right: 5px;
        }

        .es-p10 {
            padding: 10px;
        }

        .es-p10t {
            padding-top: 10px;
        }

        .es-p10b {
            padding-bottom: 10px;
        }

        .es-p10l {
            padding-left: 10px;
        }

        .es-p10r {
            padding-right: 10px;
        }

        .es-p15 {
            padding: 15px;
        }

        .es-p15t {
            padding-top: 15px;
        }

        .es-p15b {
            padding-bottom: 15px;
        }

        .es-p15l {
            padding-left: 15px;
        }

        .es-p15r {
            padding-right: 15px;
        }

        .es-p20 {
            padding: 20px;
        }

        .es-p20t {
            padding-top: 20px;
        }

        .es-p20b {
            padding-bottom: 20px;
        }

        .es-p20l {
            padding-left: 20px;
        }

        .es-p20r {
            padding-right: 20px;
        }

        .es-p25 {
            padding: 25px;
        }

        .es-p25t {
            padding-top: 25px;
        }

        .es-p25b {
            padding-bottom: 25px;
        }

        .es-p25l {
            padding-left: 25px;
        }

        .es-p25r {
            padding-right: 25px;
        }

        .es-p30 {
            padding: 30px;
        }

        .es-p30t {
            padding-top: 30px;
        }

        .es-p30b {
            padding-bottom: 30px;
        }

        .es-p30l {
            padding-left: 30px;
        }

        .es-p30r {
            padding-right: 30px;
        }

        .es-p35 {
            padding: 35px;
        }

        .es-p35t {
            padding-top: 35px;
        }

        .es-p35b {
            padding-bottom: 35px;
        }

        .es-p35l {
            padding-left: 35px;
        }

        .es-p35r {
            padding-right: 35px;
        }

        .es-p40 {
            padding: 40px;
        }

        .es-p40t {
            padding-top: 40px;
        }

        .es-p40b {
            padding-bottom: 40px;
        }

        .es-p40l {
            padding-left: 40px;
        }

        .es-p40r {
            padding-right: 40px;
        }

        .es-menu td {
            border: 0;
        }

        .es-menu td a img {
            display: inline-block !important;
        }

        /* END CONFIG STYLES */
        a {
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            font-size: 14px;
            text-decoration: none;
        }

        h1 {
            font-size: 30px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h1 a {
            font-size: 30px;
        }

        h2 {
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h2 a {
            font-size: 24px;
        }

        h3 {
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }

        h3 a {
            font-size: 20px;
        }

        p,
        ul li,
        ol li {
            font-size: 14px;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            line-height: 150%;
        }

        ul li,
        ol li {
            Margin-bottom: 15px;
        }

        .es-menu td a {
            text-decoration: none;
            display: block;
        }

        .es-wrapper {
            width: 100%;
            height: 100%;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-wrapper-color {
            background-color: #e4e5e7;
        }

        .es-content-body {
            background-color: #ffffff;
        }

        .es-content-body p,
        .es-content-body ul li,
        .es-content-body ol li {
            color: #333333;
        }

        .es-content-body a {
            color: #ffffff;
        }

        .es-header {
            background-color: transparent;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-header-body {
            background-color: #34265f;
        }

        .es-header-body p,
        .es-header-body ul li,
        .es-header-body ol li {
            color: #ffffff;
            font-size: 14px;
        }

        .es-header-body a {
            color: #ffffff;
            font-size: 14px;
        }

        .es-footer {
            background-color: transparent;

            background-repeat: repeat;
            background-position: center top;
        }

        .es-footer-body {
            background-color: transparent;
        }

        .es-footer-body p,
        .es-footer-body ul li,
        .es-footer-body ol li {
            color: #333333;
            font-size: 12px;
        }

        .es-footer-body a {
            color: #000000;
            font-size: 12px;
        }

        .es-infoblock,
        .es-infoblock p,
        .es-infoblock ul li,
        .es-infoblock ol li {
            line-height: 120%;
            font-size: 12px;
            color: #999999;
        }

        .es-infoblock a {
            font-size: 12px;
            color: #999999;
        }

        a.es-button {
            border-style: solid;
            border-color: #34265f;
            border-width: 10px 20px 10px 20px;
            display: block;
            background: #34265f;
            border-radius: 5px;
            font-size: 18px;
            font-family: 'arial', 'helvetica neue', 'helvetica', 'sans-serif';
            font-weight: normal;
            font-style: normal;
            line-height: 120%;
            color: #ffffff;
            text-decoration: none;
            width: auto;
            text-align: center;
        }

        .es-button-border {
            border-style: solid solid solid solid;
            border-color: transparent transparent transparent transparent;
            background: #2cb543;
            border-width: 0px 0px 0px 0px;
            display: inline-block;
            border-radius: 5px;
            width: auto;
        }

        /* RESPONSIVE STYLES Please do not delete and edit CSS styles below. If you don't need responsive layout, please delete this section. */
        @media only screen and (max-width: 600px) {

            p,
            ul li,
            ol li,
            a {
                font-size: 16px !important;
                line-height: 150% !important;
            }

            h1 {
                font-size: 30px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h2 {
                font-size: 26px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h3 {
                font-size: 20px !important;
                text-align: center;
                line-height: 120% !important;
            }

            h1 a {
                font-size: 30px !important;
            }

            h2 a {
                font-size: 26px !important;
            }

            h3 a {
                font-size: 20px !important;
            }

            .es-menu td a {
                font-size: 16px !important;
            }

            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 16px !important;
            }

            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 16px !important;
            }

            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important;
            }

            *[class=\"gmail-fix\"] {
                display: none !important;
            }

            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important;
            }

            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important;
            }

            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important;
            }

            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important;
            }

            .es-button-border {
                display: block !important;
            }

            a.es-button {
                font-size: 20px !important;
                display: block !important;
                border-left-width: 0px !important;
                border-right-width: 0px !important;
            }

            .es-btn-fw {
                border-width: 10px 0px !important;
                text-align: center !important;
            }

            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
                width: 100% !important;
            }

            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important;
            }

            .es-adapt-td {
                display: block !important;
                width: 100% !important;
            }

            .adapt-img {
                width: 100% !important;
                height: auto !important;
            }

            @media only screen and (max-width: 768px) {
                .adapt-img {
                    width: 200px !important;
                    height: auto !important;
                }
            }

            .es-m-p0 {
                padding: 0px !important;
            }

            .es-m-p0r {
                padding-right: 0px !important;
            }

            .es-m-p0l {
                padding-left: 0px !important;
            }

            .es-m-p0t {
                padding-top: 0px !important;
            }

            .es-m-p0b {
                padding-bottom: 0 !important;
            }

            .es-m-p20b {
                padding-bottom: 20px !important;
            }

            .es-mobile-hidden,
            .es-hidden {
                display: none !important;
            }

            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important;
            }

            .es-desk-menu-hidden {
                display: table-cell !important;
            }

            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important;
            }

            table.es-social {
                display: inline-block !important;
            }

            table.es-social td {
                display: inline-block !important;
            }
        }

        /* END RESPONSIVE STYLES */
    </style>

</head>

<body>
<div class=\"es-wrapper-color\">
    <!--[if gte mso 9]>
    <v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">
        <v:fill type=\"tile\" color=\"#e4e5e7\"></v:fill>
    </v:background>
    <![endif]-->

    <table class=\"es-wrapper\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
        <tbody>
        <tr>
            <td class=\"esd-email-paddings\" valign=\"top\">
                <table class=\"es-content esd-header-popover\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" align=\"center\">
                            <table class=\"es-content-body\" style=\"background-color: rgb(237, 237, 237);\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ededed\" align=\"center\">
                                <tbody>
                                <tr>
                                    <td class=\"esd-structure\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame esd-checked\" width=\"600\" valign=\"top\" align=\"center\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"background: #000000 ; background-position: center top; background-repeat: no-repeat;\" >
                                                        <tbody>
                                                        <tr>
                                                            <td align=\"left\" class=\"esd-block-text\">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-image\" align=\"center\"><a target=\"_blank\"><img class=\"adapt-img\" src=\"https://ndwi-dz.com/logondwi.jpg\" alt width=\"120\" style=\"display: block;\"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-text\">
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\">FABRICATION DE CUISINES, CHAMBRES, MEUBLES ET BUREAUX DE QUALIT?? EXCEPTIONNELLE.</p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 12px;\"><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"esd-structure\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame\" width=\"600\" valign=\"top\" align=\"center\">
                                                    <table style=\"background-color: rgb(255, 255, 255);\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
                                                        <tbody>

                                                        <tr>
                                                            <td class=\"esd-block-text es-p10b es-p40r es-p40l\" align=\"center\">
                                                                <br>
                                                                {{ message|raw }}
                                                         ??
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class=\"es-content\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" esd-custom-block-id=\"4864\" align=\"center\">
                            <table class=\"es-content-body\" style=\"background-color: rgb(237, 237, 237);\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ededed\" align=\"center\">
                                <tbody>

                                <tr>
                                    <td class=\"esd-structure es-p20t es-p20r es-p20l\" align=\"left\" bgcolor=\"#34265f\" style=\"background-color: rgb(0,0,0);\">
                                        <!--[if mso]><table width=\"560\" cellpadding=\"0\" cellspacing=\"0\"><tr><td width=\"342\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" align=\"left\">
                                            <tbody>
                                            <tr>
                                                <td width=\"342\" class=\"es-m-p20b esd-container-frame\" align=\"left\">
                                                    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                        <tbody>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-image\"><a target=\"_blank\"><img class=\"adapt-img\" src=\"https://ndwi-dz.com/logondwi.jpg\" alt style=\"display: block;\" width=\"60\"></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\" class=\"esd-block-text\">
                                                                <p style=\"color: #ffffff; font-size: 13px;\"><br></p>
                                                                <p style=\"color: #ffffff; font-size: 13px;\">&nbsp;FABRICATION DE CUISINES, CHAMBRES, MEUBLES ET BUREAUX DE QUALIT?? EXCEPTIONNELLE EN ALGERIE.

                                                                </p>
                                                                <p style=\"color: #ffffff; text-align: center;\"><br></p>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--[if mso]></td><td width=\"20\"></td><td width=\"198\" valign=\"top\"><![endif]-->
                                        <table cellpadding=\"0\" cellspacing=\"0\" class=\"es-right\" align=\"right\">
                                            <tbody>
                                            <tr>
                                                <td class=\"es-m-p20b esd-container-frame\" width=\"198\" align=\"left\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tbody>
                                                        <tr>
                                                            <td class=\"esd-block-text es-p5t\" align=\"right\">
                                                                <p style=\"color: #ffffff; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">N??37, cit?? des villas militaires, Bir Djir Oran - Alg??rie</p>
                                                                <p style=\"color: #ffffff; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">Tel: +213 (0) 555.535.106</p>
                                                                <p style=\"color: #ffffff !important; font-family: 'source sans pro', 'helvetica neue', helvetica, arial, sans-serif; font-size: 13px; line-height: 150%; text-align: center;\">Email: info@ndwi.com</p>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-social es-p15t es-m-txt-c\" align=\"center\">
                                                                <table class=\"es-table-not-adapt es-social\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class=\" es-p15r\" valign=\"top\" align=\"center\"><a target=\"_blank\" href><img title=\"Facebook\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/facebook-rounded-white.png\" alt=\"Fb\" width=\"32\" height=\"32\"></a></td>
                                                                        <td class=\" es-p15r\" valign=\"top\" align=\"center\"><a target=\"_blank\" href><img title=\"Twitter\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/twitter-rounded-white.png\" alt=\"Tw\" width=\"32\" height=\"32\"></a></td>
                                                                        <td valign=\"top\" align=\"center\"><a target=\"_blank\" href=\"\"><img title=\"Linkedin\" src=\"https://fizhoa.stripocdn.email/content/assets/img/social-icons/rounded-white/linkedin-rounded-white.png\" alt=\"In\" width=\"32\" height=\"32\"></a></td>
                                                                        <br><br>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" class=\"esd-block-text\">

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--[if mso]></td></tr></table><![endif]-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class=\"es-footer esd-footer-popover\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                    <tbody>
                    <tr>
                        <td class=\"esd-stripe\" esd-custom-block-id=\"4862\" align=\"center\">
                            <table class=\"es-footer-body\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
                                <tbody>
                                <tr>
                                    <td class=\"esd-structure es-p20t es-p20r es-p20l\" align=\"left\">
                                        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td class=\"esd-container-frame\" width=\"560\" valign=\"top\" align=\"center\">
                                                    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tbody>
                                                        <tr>
                                                            <td class=\"esd-block-text es-p10\" align=\"center\">
                                                                <p><a target=\"_blank\" href=\"https://ndwi-dz.com/\">?? 2020 NEW DESIGN WOOD INDUSTRY  </a> | <a target=\"_blank\" href>Tous droits r??serv??s.</a></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"esd-block-spacer es-p5t es-p5b es-p20r es-p20l\" align=\"center\">
                                                                <table width=\"100%\" height=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style=\"border-bottom: 1px solid #cccccc; background:none; height:1px; width:100%; margin:0px 0px 0px 0px;\"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>


</html>
", "neufs/emailing.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\neufs\\emailing.html.twig");
    }
}
