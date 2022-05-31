<?php

/* @Cosanit/Default/envoisoffre.html.twig */
class __TwigTemplate_7076603e7a4caa34ccd45cc3e813075775e092e408d2c67b1ee7d18d9601c1da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/envoisoffre.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/envoisoffre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        .elementor-26 .elementor-element.elementor-element-52c606e>.elementor-element-populated{
            margin: 0;
        }
        label{
            color: #131033 !important;
            font-size: 16px;
        }
        body, .sidebar ul li a, body.blog, body.single-post, body.page, body.search.search-results {
            color: #131033;
        }
        input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #acb7c5 !important;
            opacity: 1; /* Firefox */
            font-size: 18px;
        }
        #appbundle_devisautos_dure::placeholder{
            color: #acb7c5 !important;
            font-size: 18px;
        }
        option[selected] {
            color: #acb7c5 !important;
            font-size: 18px;
        }
        input, select{

            border-style: solid !important;

            border-color: #9ea3a9  !important;

        }
        .formulaire{
            width:50% !important;
        }
        .row{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .form-control:focus {
            border-style: solid !important;
            border-width: 0 0 3px 0 !important;
            border-color: #d32f2f !important;
            box-shadow: none !important;
            border-radius: 0 !important;
        }
        .metform-btn {
            background-color:#ed2789;
            border: none;
            box-shadow: none;
            color: white;
            display: inline-block;
            padding: 16px 40px;
            font-size: 16px;
            border-radius: 2px;
            cursor: pointer;
        }

        #devisautos_defences{
            display: none;
        }
        #devisautos_assistance2{
            display: none;
        }
        #devisautos_assistance3{
            display: none;
        }
        .dropzone, .dropzone * {
            box-sizing: border-box;
        }
        .dropzone {
            min-height: 150px;
            border: 1px solid #dfdfdf;
            background: white;
            padding: 54px 54px;
        }
        .dropzone.dz-clickable {
            cursor: pointer;
        }
        .dropzone.dz-clickable * {
            cursor: default;
        }
        .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
            cursor: pointer;
            color: #e82e89;
        }
        .dropzone.dz-started .dz-message {
            display: none;
        }
        .dropzone.dz-drag-hover {
            border-style: solid;
        }
        .dropzone.dz-drag-hover .dz-message {
            opacity: 0.5;
        }
        .dropzone .dz-message {
            text-align: center;
            margin: 2em 0;
        }
        .dropzone .dz-preview {
            position: relative;
            display: inline-block;
            vertical-align: top;
            margin: 16px;
            min-height: 100px;
        }
        .dropzone .dz-preview:hover {
            z-index: 1000;
        }
        .dropzone .dz-preview:hover .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview.dz-file-preview .dz-image {
            border-radius: 20px;
            background: #999;
            background: linear-gradient(to bottom, #eee, #ddd);
        }
        .dropzone .dz-preview.dz-file-preview .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview.dz-image-preview {
            background: white;
        }
        .dropzone .dz-preview.dz-image-preview .dz-details {
            -webkit-transition: opacity 0.2s linear;
            -moz-transition: opacity 0.2s linear;
            -ms-transition: opacity 0.2s linear;
            -o-transition: opacity 0.2s linear;
            transition: opacity 0.2s linear;
        }
        .dropzone .dz-preview .dz-remove {
            font-size: 14px;
            text-align: center;
            display: block;
            cursor: pointer;
            border: none;
        }
        .dropzone .dz-preview .dz-remove:hover {
            text-decoration: underline;
        }
        .dropzone .dz-preview:hover .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview .dz-details {
            z-index: 20;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            font-size: 13px;
            min-width: 100%;
            max-width: 100%;
            padding: 2em 1em;
            text-align: center;
            color: rgba(0, 0, 0, 0.9);
            line-height: 150%;
        }
        .dropzone .dz-preview .dz-details .dz-size {
            margin-bottom: 1em;
            font-size: 16px;
        }
        .dropzone .dz-preview .dz-details .dz-filename {
            white-space: nowrap;
        }
        .dropzone .dz-preview .dz-details .dz-filename:hover span {
            border: 1px solid rgba(200, 200, 200, 0.8);
            background-color: rgba(255, 255, 255, 0.8);
        }
        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
            border: 1px solid transparent;
        }
        .dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
            background-color: rgba(255, 255, 255, 0.4);
            padding: 0 0.4em;
            border-radius: 3px;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(8px);
            filter: blur(8px);
        }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 120px;
            height: 120px;
            position: relative;
            display: block;
            z-index: 10;
        }
        .dropzone .dz-preview .dz-image img {
            display: block;
        }
        .dropzone .dz-preview.dz-success .dz-success-mark {
            -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .dropzone .dz-preview.dz-error .dz-error-mark {
            opacity: 1;
            -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
            pointer-events: none;
            opacity: 0;
            z-index: 500;
            position: absolute;
            display: block;
            top: 50%;
            left: 50%;
            margin-left: -27px;
            margin-top: -27px;
        }
        .dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
            display: block;
            width: 54px;
            height: 54px;
        }
        .dropzone .dz-preview.dz-processing .dz-progress {
            opacity: 1;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .dropzone .dz-preview.dz-complete .dz-progress {
            opacity: 0;
            -webkit-transition: opacity 0.4s ease-in;
            -moz-transition: opacity 0.4s ease-in;
            -ms-transition: opacity 0.4s ease-in;
            -o-transition: opacity 0.4s ease-in;
            transition: opacity 0.4s ease-in;
        }
        .dropzone .dz-preview:not(.dz-processing) .dz-progress {
            -webkit-animation: pulse 6s ease infinite;
            -moz-animation: pulse 6s ease infinite;
            -ms-animation: pulse 6s ease infinite;
            -o-animation: pulse 6s ease infinite;
            animation: pulse 6s ease infinite;
        }
        .dropzone .dz-preview .dz-progress {
            opacity: 1;
            z-index: 1000;
            pointer-events: none;
            position: absolute;
            height: 16px;
            left: 50%;
            top: 50%;
            margin-top: -8px;
            width: 80px;
            margin-left: -40px;
            background: rgba(255, 255, 255, 0.9);
            -webkit-transform: scale(1);
            border-radius: 8px;
            overflow: hidden;
        }
        .dropzone .dz-preview .dz-progress .dz-upload {
            background: #333;
            background: linear-gradient(to bottom, #666, #444);
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0;
            -webkit-transition: width 300ms ease-in-out;
            -moz-transition: width 300ms ease-in-out;
            -ms-transition: width 300ms ease-in-out;
            -o-transition: width 300ms ease-in-out;
            transition: width 300ms ease-in-out;
        }
        .dropzone .dz-preview.dz-error .dz-error-message {
            display: block;
        }
        .dropzone .dz-preview.dz-error:hover .dz-error-message {
            opacity: 1;
            pointer-events: auto;
        }
        .dropzone .dz-preview .dz-error-message {
            pointer-events: none;
            z-index: 1000;
            position: absolute;
            display: block;
            display: none;
            opacity: 0;
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
            border-radius: 8px;
            font-size: 13px;
            top: 130px;
            left: -10px;
            width: 140px;
            background: #be2626;
            background: linear-gradient(to bottom, #be2626, #a92222);
            padding: 0.5em 1.2em;
            color: white;
        }
        .dropzone .dz-preview .dz-error-message:after {
            content:'';
            position: absolute;
            top: -6px;
            left: 64px;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #be2626;
        }
        .butt{
            line-height: 2.4 !important;
            letter-spacing: 0px;
            font-weight: bold;
            color: white;!important;
        }
        .butt:hover{
            color: white;
        }
        .elementor-widget-google_maps iframe {
            height: 468px;
        }
        @media (max-width: 767px){
            .elementor-26 .elementor-element.elementor-element-121aa97 {
                margin-top: 0;
                margin-bottom: 0;
                padding: 20px 0 20px 0;
                display: none;
            }
            .elementor-7 .elementor-element.elementor-element-d90ba89>.elementor-element-populated {
                margin: 0 0 0 0;
                padding: 0 15px 50px 15px;
                display: none;
            }
        }

        .cat{
            margin: 5px;
        }

        .ekit-wid-con .elementskit-post-image-card{
            background: white;
        }
        .cattitle{
            text-align: center;
            color: #131033;
            font-size: 26px;

        }
        .cattext{
            text-align: center;
            color: #131033 !important;
        }

        element.style {
        }
        .ekit-wid-con .elementskit-post-image-card .elementskit-post-body {
            padding: 20px 20px 20px;
            margin-bottom: 20px;
        }
        .elementor-7 .elementor-element.elementor-element-d90ba89>.elementor-element-populated {
            transition: background 0.3s,border 0.3s,border-radius 0.3s,box-shadow 0.3s;
            margin: -252px 0 0 0;
            padding: 0 0 0 15px;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap p {
            color: #131033;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .section-title {
            color: #131033;
            margin: 0 0 25px 0;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .btn.btn-primary {
            background: #ed2789;
            font-family: \"Open Sans\",Sans-serif;
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0 0 0;
        }
        .intro-wrap .section-title {
            text-transform: capitalize;
        }
        .entry-header .entry-title a, .post .entry-header .entry-title a, article.page .entry-header .entry-title a, .sidebar .widget .widget-title a, h1, h2, h3, h4, h5, h6, .sidebar .widget .entry-title a, .related-post-area .ts-title a, .sidebar ul li a.url, .sidebar ul li a.rsswidget {
            color: #131033;
        }
        .ts-title.md {
            font-size: 23px;
            line-height: 32px;
            letter-spacing: -1.72px;
            text-transform: none;
            font-weight: 400;

        }

        .ts-feature-box.style2 .media-body p {
            color:#131033;
        }
        .elementor-26 .elementor-element.elementor-element-5116ce0:not(.elementor-motion-effects-element-type-background), .elementor-26 .elementor-element.elementor-element-5116ce0>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #131033;
        }
        .elementor-26 .elementor-element.elementor-element-010ec24 {
            margin-top: -35px;
            margin-bottom: -35px;
            padding: 0 0 0 0;
            z-index: 222;
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .elementor-26 .elementor-element.elementor-element-010ec24 {
                margin-top: 0;
                margin-bottom: -35px;
                padding: 0 0 0 0;
                z-index: 222;
            }
        }
        .elementor-26 .elementor-element.elementor-element-d2e5690 .ekit_navSidebar-button, .elementor-26 .elementor-element.elementor-element-d2e5690 .ekit_social_media ul>li:last-child {
            padding: 4px 7px 5px 7px;
            width: 214px;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .btn.btn-primary:hover {
            background: #ed2789;
        }
        .ekit-wid-con .btn-primary {
            color: #fff;
            background-color: #ed2789;
            border: none;
        }
        .elementor-176 .elementor-element.elementor-element-efa6ebe:not(.elementor-motion-effects-element-type-background), .elementor-176 .elementor-element.elementor-element-efa6ebe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #131033;
        }
        input#envoisoffre_scanpermis_0_file{
            border: none !important;
            padding-top: 10px;
        }
        input#envoisoffre_scanpermis_1_file{
            border: none !important;
            padding-top: 10px;
        }

#envoisoffre_scanpermis{
    display: none;
}
    </style>


    <div class=\"ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"26\" class=\"elementor elementor-26\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"elementor-element elementor-element-010ec24 main-nav elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"010ec24\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-52c606e elementor-column elementor-col-100 elementor-top-column\" data-id=\"52c606e\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <section class=\"elementor-element elementor-element-5116ce0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section\" data-id=\"5116ce0\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_sticky&quot;:&quot;top&quot;,&quot;ekit_sticky_on&quot;:[&quot;desktop&quot;],&quot;ekit_sticky_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;ekit_sticky_effect_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}\">
                                                <div class=\"elementor-container elementor-column-gap-default\">
                                                    <div class=\"elementor-row\">
                                                        <div class=\"elementor-element elementor-element-430c3a2 elementor-column elementor-col-33 elementor-inner-column\" data-id=\"430c3a2\" data-element_type=\"column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-032e77b elementor-widget elementor-widget-ekit-nav-menu\" data-id=\"032e77b\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"ekit-nav-menu.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ekit-wid-con\">

                                                                                <div id=\"ekit-megamenu-main-menu\" class=\"elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no\">


                                                                                    <ul id=\"main-menu\" class=\"elementskit-navbar-nav elementskit-menu-po-left\">
                                                                                        <a href=\"";
        // line 487
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\"><img width=\"120\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logon.svg"), "html", null, true);
        echo "\"> </a>


                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Nos services de comparaison<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 494
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_devisauto");
        echo "\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Automobile</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">   Multirisques habitation</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Assurances voyage</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>



                                                                                        <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                            <a href=\"#\" class=\" dropdown-item\">
                                                                                                Espace entreprises
                                                                                            </a>
                                                                                        </li>
                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Actualités<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        Nos packs promos
                                                                                                    </a>
                                                                                                </li>


                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        Espace publicité
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>



                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">À propos de N comparer<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 546
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_apropos");
        echo "\" class=\" dropdown-item\">
                                                                                                        Qui sommes nous ?
                                                                                                    </a>
                                                                                                </li>


                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 553
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_commment");
        echo "\" class=\" dropdown-item\">
                                                                                                        Comment ça marche ?
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 558
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_garantie");
        echo "\" class=\" dropdown-item\">
                                                                                                        Mentions légales
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 563
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\" dropdown-item\">
                                                                                                        Nous contacter
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class=\"elementskit-nav-identity-panel\">
                                                                                        <div class=\"elementskit-site-title\">
                                                                                            <a class=\"elementskit-nav-logo\" href=\"";
        // line 574
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" target=\"_self\" rel=\"\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logon.svg"), "html", null, true);
        echo "\" alt=\"\"> </a>
                                                                                        </div>
                                                                                        <button class=\"elementskit-menu-close elementskit-menu-toggler\" type=\"button\">X</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>


    <section class=\"forulaire elementor-element elementor-element-4640a8d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section elementskit-parallax-multi-container\" data-id=\"4640a8d\" data-element_type=\"section\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-row\">
                <div class=\"elementor-element elementor-element-c64951c elementor-column elementor-col-100 elementor-top-column\" data-id=\"c64951c\" data-element_type=\"column\">
                    <div class=\"elementor-column-wrap elementor-element-populated\">
                        <div class=\"elementor-widget-wrap\">

                            <br>
                            <div class=\"elementor-col-100 \">
                                <h3>Souscrire à l'offre</h3>
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                        <h6 class=\"titre\">Assurance: <span style=\"color: #000\">";
        // line 613
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cateogrie"]) || array_key_exists("cateogrie", $context) ? $context["cateogrie"] : (function () { throw new Twig_Error_Runtime('Variable "cateogrie" does not exist.', 613, $this->source); })()), "nom", array()), "html", null, true);
        echo "</span>   <img class=\"gwt-Image\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cateogrie"]) || array_key_exists("cateogrie", $context) ? $context["cateogrie"] : (function () { throw new Twig_Error_Runtime('Variable "cateogrie" does not exist.', 613, $this->source); })()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
        echo "\" ></h6>

                                    </div>

                                    <div class=\"col-md-3\">
                                        <h6 class=\"titre\">Garantie: <span style=\"color: #000\">";
        // line 618
        echo twig_escape_filter($this->env, (isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 618, $this->source); })()), "html", null, true);
        echo "</span>  </h6>
                                        <h6 class=\"titre\">Durée: <span style=\"color: #000\">";
        // line 619
        echo twig_escape_filter($this->env, (isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 619, $this->source); })()), "html", null, true);
        echo "</span>  </h6>
                                    </div>
                                    ";
        // line 621
        if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 621, $this->source); })()) == 0)) {
            // line 622
            echo "
                                    ";
        } else {
            // line 624
            echo "
                                        <div class=\"col-md-3\">
                                            <h6 class=\"titre\">Puissance: <span style=\"color: #000\">";
            // line 626
            echo twig_escape_filter($this->env, (isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 626, $this->source); })()), "html", null, true);
            echo "</span>  </h6>
                                            ";
            // line 627
            if (((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new Twig_Error_Runtime('Variable "valeur" does not exist.', 627, $this->source); })()) == 0)) {
                // line 628
                echo "
                                            ";
            } else {
                // line 630
                echo "                                                <h6 class=\"titre\">Valeur: <span style=\"color: #000\">";
                echo twig_escape_filter($this->env, (isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new Twig_Error_Runtime('Variable "valeur" does not exist.', 630, $this->source); })()), "html", null, true);
                echo "</span>  </h6>
                                            ";
            }
            // line 632
            echo "
                                        </div>

                                    ";
        }
        // line 636
        echo "                                </div>

                                ";
        // line 638
        if (((isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 638, $this->source); })()) == "Tout risque")) {
            // line 639
            echo "
                                    ";
        } else {
            // line 641
            echo "                                        ";
            if (((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new Twig_Error_Runtime('Variable "vols" does not exist.', 641, $this->source); })()) == 0)) {
                // line 642
                echo "
                                        ";
            } else {
                // line 644
                echo "                                            <h6 class=\"titre\">Vols: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 646
            echo "
                                        ";
            // line 647
            if (((isset($context["incendies"]) || array_key_exists("incendies", $context) ? $context["incendies"] : (function () { throw new Twig_Error_Runtime('Variable "incendies" does not exist.', 647, $this->source); })()) == 0)) {
                // line 648
                echo "
                                        ";
            } else {
                // line 650
                echo "                                            <h6 class=\"titre\">Incendies: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 652
            echo "
                                        ";
            // line 653
            if (((isset($context["bris"]) || array_key_exists("bris", $context) ? $context["bris"] : (function () { throw new Twig_Error_Runtime('Variable "bris" does not exist.', 653, $this->source); })()) == 0)) {
                // line 654
                echo "
                                        ";
            } else {
                // line 656
                echo "                                            <h6 class=\"titre\">Bris de glace: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 658
            echo "
                                        ";
            // line 659
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 659, $this->source); })()) == 0)) {
                // line 660
                echo "
                                        ";
            } else {
                // line 662
                echo "                                            <h6 class=\"titre\">Assistance1: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 664
            echo "

                                        ";
            // line 666
            if (((isset($context["assistance2"]) || array_key_exists("assistance2", $context) ? $context["assistance2"] : (function () { throw new Twig_Error_Runtime('Variable "assistance2" does not exist.', 666, $this->source); })()) == 0)) {
                // line 667
                echo "
                                        ";
            } else {
                // line 669
                echo "                                            <h6 class=\"titre\">Assistance2: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 671
            echo "

                                        ";
            // line 673
            if (((isset($context["assistance3"]) || array_key_exists("assistance3", $context) ? $context["assistance3"] : (function () { throw new Twig_Error_Runtime('Variable "assistance3" does not exist.', 673, $this->source); })()) == 0)) {
                // line 674
                echo "
                                        ";
            } else {
                // line 676
                echo "                                            <h6 class=\"titre\">Assistance3: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 678
            echo "


                                        ";
            // line 681
            if (((isset($context["defences"]) || array_key_exists("defences", $context) ? $context["defences"] : (function () { throw new Twig_Error_Runtime('Variable "defences" does not exist.', 681, $this->source); })()) == 0)) {
                // line 682
                echo "
                                        ";
            } else {
                // line 684
                echo "                                            <h6 class=\"titre\">Défences et recours: <span style=\"color: #000\">Oui</span>  </h6>
                                        ";
            }
            // line 686
            echo "

                                ";
        }
        // line 689
        echo "


                                    ";
        // line 692
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 692, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <p class=\"alert alert-info small-alert\" style=\"color:#ed2789;
    font-size: 15px;
   margin-top: 2px;\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.6em;margin-bottom: 5px;color: #ed2789;\"></i>  Veuillez remplir le formulaire suivant, notre équipe commerciale vous contactera dans les plus brefs délais.</p>


                                    <div class=\"col-md-6\">

                                        ";
        // line 701
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 701, $this->source); })()), "datepermis", array()), 'label', array("label" => "Date d'obtention (permis)"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 702
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 702, $this->source); })()), "datepermis", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 703
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 703, $this->source); })()), "datepermis", array()), 'errors');
        echo "

                                        <br>
                                        ";
        // line 706
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 706, $this->source); })()), "wilaya", array()), 'label', array("label" => "Wilaya"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 707
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 707, $this->source); })()), "wilaya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 708
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 708, $this->source); })()), "wilaya", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 710
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 710, $this->source); })()), "npermis", array()), 'label', array("label" => "N° permis"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 711
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 711, $this->source); })()), "npermis", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 712
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 712, $this->source); })()), "npermis", array()), 'errors');
        echo "

                                        <br>
                                        ";
        // line 715
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 715, $this->source); })()), "catpermis", array()), 'label', array("label" => "Catégorie permis (A , B est....)"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 716
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 716, $this->source); })()), "catpermis", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 717
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 717, $this->source); })()), "catpermis", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 719
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 719, $this->source); })()), "genre", array()), 'label', array("label" => "Genre"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 720
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 720, $this->source); })()), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 721
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 721, $this->source); })()), "genre", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 723
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 723, $this->source); })()), "matricule", array()), 'label', array("label" => "Matricule"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 724
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 724, $this->source); })()), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 725
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 725, $this->source); })()), "matricule", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 727
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 727, $this->source); })()), "nserie", array()), 'label', array("label" => "N° série"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 728
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 728, $this->source); })()), "nserie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 729
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 729, $this->source); })()), "nserie", array()), 'errors');
        echo "
                                        <br>

                                        ";
        // line 732
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 732, $this->source); })()), "ntype", array()), 'label', array("label" => "N° type"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 733
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 733, $this->source); })()), "ntype", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 734
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 734, $this->source); })()), "ntype", array()), 'errors');
        echo "
                                        <br>

                                        ";
        // line 737
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 737, $this->source); })()), "anneecircule", array()), 'label', array("label" => "Année de mise en circulation"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 738
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 738, $this->source); })()), "anneecircule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 739
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 739, $this->source); })()), "anneecircule", array()), 'errors');
        echo "
                                        <br>

                                        ";
        // line 742
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 742, $this->source); })()), "marque", array()), 'label', array("label" => "Marque"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 743
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 743, $this->source); })()), "marque", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 744
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 744, $this->source); })()), "marque", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 746
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 746, $this->source); })()), "modele", array()), 'label', array("label" => "Modele"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 747
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 747, $this->source); })()), "modele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 748
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 748, $this->source); })()), "modele", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 750
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 750, $this->source); })()), "usage", array()), 'label', array("label" => "Usage"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 751
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 751, $this->source); })()), "usage", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 752
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 752, $this->source); })()), "usage", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 754
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 754, $this->source); })()), "nbplace", array()), 'label', array("label" => "Nombre de places du véhicule"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 755
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 755, $this->source); })()), "nbplace", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 756
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 756, $this->source); })()), "nbplace", array()), 'errors');
        echo "

                                    </div>
                                    <div class=\"col-md-6\">

                                        ";
        // line 761
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 761, $this->source); })()), "nom", array()), 'label', array("label" => "Nom et prénom (carte grise)"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 762
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 762, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 763
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 763, $this->source); })()), "nom", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 765
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 765, $this->source); })()), "adresse", array()), 'label', array("label" => "Adresse (carte grise) / ville"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 766
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 766, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 767
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 767, $this->source); })()), "adresse", array()), 'errors');
        echo "
                                        <br>
                                        ";
        // line 769
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 769, $this->source); })()), "telephone", array()), 'label', array("label" => "Téléphone"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 770
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 770, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 771
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 771, $this->source); })()), "telephone", array()), 'errors');
        echo "

                                        <br>

                                        ";
        // line 775
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 775, $this->source); })()), "email", array()), 'label', array("label" => "Votre E-mail"));
        echo " <span style=\"color: red;\">*</span> <br>
                                        ";
        // line 776
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 776, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 777
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 777, $this->source); })()), "email", array()), 'errors');
        echo "

                                        <br>
                                        <label for=\"envoisoffre_email\" class=\"required\">Photo permis  <span style=\"color: red;\">*</span> </label>
                                        <div class=\"dropzone\">

                                        </div>
                                        <br>
                                        <br>
                                        <label for=\"envoisoffre_email\" class=\"required\">Photo carte grise  <span style=\"color: red;\">*</span> </label>
                                        <div class=\"dropzone dropzone2\">

                                        </div>


                                    </div>



                                </div>





                                    <br>
                                    <div class=\"elementor-element elementor-element-a752ce9 elementor-widget elementor-widget-mf-button\" data-id=\"a752ce9\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"mf-button.default\">
                                        <div class=\"elementor-widget-container\">
                                            <div class=\"mf-btn-wraper\">
                                                <button type=\"submit\" class=\"metform-btn \"> Confirmer votre demande </button>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 811
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 811, $this->source); })()), 'form_end');
        echo "
                                    <input type=\"hidden\" id=\"linked_ID\">
                                    <input type=\"hidden\" id=\"fileName\">




                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script
            src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>

    <script src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/iziToast.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>

    <script>
    // init,configure dropzone
    Dropzone.autoDiscover = false;
    var dropzone_default = new Dropzone(\".dropzone\", {
        url: '";
        // line 842
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_uploads");
        echo "' ,
        maxFiles: 8,
        dictMaxFilesExceeded: 'Seulement 8 images peuvent être téléchargées.',
        dictDefaultMessage: \"<i class=\\\"fas fa-download\\\" style='font-size: 25px;'></i> <br> Veuillez déposer la photo du permis\",
        acceptedFiles: 'image/*',
        maxFilesize: 3,  // in Mb
        addRemoveLinks: true,
        dictRemoveFile: 'Remove',
        init: function () {
            this.on(\"maxfilesexceeded\", function(file) {
                this.removeFile(file);
            });
            this.on(\"sending\", function(file, xhr, formData) {
                // send additional data with the file as POST data.
                formData.append(\"key\", \"value\");
            });
            this.on(\"success\", function(file, response) {

                // set the id,filename from the response
                \$('#fileName').val(response.fileName);
                \$('#linked_ID').val(response.mediaEntityId);
            });
            this.on(\"removedfile\", function(file) {
                console.log(\"test\");
                var fileName = \$('#fileName').val();
                var linkedId = \$('#linked_ID').val();
                // Delete file from server
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 871
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_del_uploads");
        echo "',
                    data: {
                        id: linkedId,
                        fileName: fileName
                    },
                    dataType: 'json'
                }).done(function (resp) {
                    if (resp.deleted) {

                    } else if (resp.error) {

                    }
                }).fail(function(resp) {
                    console.error('xhr failed', resp);
                    return false;
                });
            });
            // this event is required only to debug errors
            this.on(\"error\", function(file, errorMessage) {
                console.error('Error', errorMessage);

            });
        }
    });
</script>
    <script>
        // init,configure dropzone
        Dropzone.autoDiscover = false;
        var dropzone_default = new Dropzone(\".dropzone2\", {
            url: '";
        // line 900
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_uploads");
        echo "' ,
            maxFiles: 8,
            dictMaxFilesExceeded: 'Seulement 8 images peuvent être téléchargées.',
            acceptedFiles: 'image/*',
            dictDefaultMessage: \"<i class=\\\"fas fa-download\\\" style='font-size: 25px;'></i> <br> Veuillez déposer la photo de la carte grise\",
            maxFilesize: 3,  // in Mb
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            init: function () {
                this.on(\"maxfilesexceeded\", function(file) {
                    this.removeFile(file);
                });
                this.on(\"sending\", function(file, xhr, formData) {
                    // send additional data with the file as POST data.
                    formData.append(\"key\", \"value\");
                });
                this.on(\"success\", function(file, response) {

                    // set the id,filename from the response
                    \$('#fileName').val(response.fileName);
                    \$('#linked_ID').val(response.mediaEntityId);
                });
                this.on(\"removedfile\", function(file) {
                    console.log(\"test\");
                    var fileName = \$('#fileName').val();
                    var linkedId = \$('#linked_ID').val();
                    // Delete file from server
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 929
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_del_uploads");
        echo "',
                        data: {
                            id: linkedId,
                            fileName: fileName
                        },
                        dataType: 'json'
                    }).done(function (resp) {
                        if (resp.deleted) {

                        } else if (resp.error) {

                        }
                    }).fail(function(resp) {
                        console.error('xhr failed', resp);
                        return false;
                    });
                });
                // this event is required only to debug errors
                this.on(\"error\", function(file, errorMessage) {
                    console.error('Error', errorMessage);

                });
            }
        });
    </script>
    <script>
        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('');
        var \$newLinkLi = \$('<div></div>').append(\$addTagLink);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
            addTagForm(\$collectionHolder, \$newLinkLi);
            addTagForm(\$collectionHolder, \$newLinkLi);

            \$addTagLink.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            if(index == 0){
                var \$newFormLi = \$('<label> Photo du Permis <span style=\"color: red;\">*</span></label><br><br>').append(newForm);
            }
            if(index == 1){
                var \$newFormLi = \$('<label> Photo de la Carte grise <span style=\"color: red;\">*</span></label><br>').append(newForm);
            }

            \$newLinkLi.before(\$newFormLi);
        }




    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Cosanit/Default/envoisoffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1255 => 929,  1223 => 900,  1191 => 871,  1159 => 842,  1150 => 836,  1146 => 835,  1119 => 811,  1082 => 777,  1078 => 776,  1074 => 775,  1067 => 771,  1063 => 770,  1059 => 769,  1054 => 767,  1050 => 766,  1046 => 765,  1041 => 763,  1037 => 762,  1033 => 761,  1025 => 756,  1021 => 755,  1017 => 754,  1012 => 752,  1008 => 751,  1004 => 750,  999 => 748,  995 => 747,  991 => 746,  986 => 744,  982 => 743,  978 => 742,  972 => 739,  968 => 738,  964 => 737,  958 => 734,  954 => 733,  950 => 732,  944 => 729,  940 => 728,  936 => 727,  931 => 725,  927 => 724,  923 => 723,  918 => 721,  914 => 720,  910 => 719,  905 => 717,  901 => 716,  897 => 715,  891 => 712,  887 => 711,  883 => 710,  878 => 708,  874 => 707,  870 => 706,  864 => 703,  860 => 702,  856 => 701,  844 => 692,  839 => 689,  834 => 686,  830 => 684,  826 => 682,  824 => 681,  819 => 678,  815 => 676,  811 => 674,  809 => 673,  805 => 671,  801 => 669,  797 => 667,  795 => 666,  791 => 664,  787 => 662,  783 => 660,  781 => 659,  778 => 658,  774 => 656,  770 => 654,  768 => 653,  765 => 652,  761 => 650,  757 => 648,  755 => 647,  752 => 646,  748 => 644,  744 => 642,  741 => 641,  737 => 639,  735 => 638,  731 => 636,  725 => 632,  719 => 630,  715 => 628,  713 => 627,  709 => 626,  705 => 624,  701 => 622,  699 => 621,  694 => 619,  690 => 618,  680 => 613,  636 => 574,  622 => 563,  614 => 558,  606 => 553,  596 => 546,  541 => 494,  529 => 487,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        .elementor-26 .elementor-element.elementor-element-52c606e>.elementor-element-populated{
            margin: 0;
        }
        label{
            color: #131033 !important;
            font-size: 16px;
        }
        body, .sidebar ul li a, body.blog, body.single-post, body.page, body.search.search-results {
            color: #131033;
        }
        input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #acb7c5 !important;
            opacity: 1; /* Firefox */
            font-size: 18px;
        }
        #appbundle_devisautos_dure::placeholder{
            color: #acb7c5 !important;
            font-size: 18px;
        }
        option[selected] {
            color: #acb7c5 !important;
            font-size: 18px;
        }
        input, select{

            border-style: solid !important;

            border-color: #9ea3a9  !important;

        }
        .formulaire{
            width:50% !important;
        }
        .row{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .form-control:focus {
            border-style: solid !important;
            border-width: 0 0 3px 0 !important;
            border-color: #d32f2f !important;
            box-shadow: none !important;
            border-radius: 0 !important;
        }
        .metform-btn {
            background-color:#ed2789;
            border: none;
            box-shadow: none;
            color: white;
            display: inline-block;
            padding: 16px 40px;
            font-size: 16px;
            border-radius: 2px;
            cursor: pointer;
        }

        #devisautos_defences{
            display: none;
        }
        #devisautos_assistance2{
            display: none;
        }
        #devisautos_assistance3{
            display: none;
        }
        .dropzone, .dropzone * {
            box-sizing: border-box;
        }
        .dropzone {
            min-height: 150px;
            border: 1px solid #dfdfdf;
            background: white;
            padding: 54px 54px;
        }
        .dropzone.dz-clickable {
            cursor: pointer;
        }
        .dropzone.dz-clickable * {
            cursor: default;
        }
        .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
            cursor: pointer;
            color: #e82e89;
        }
        .dropzone.dz-started .dz-message {
            display: none;
        }
        .dropzone.dz-drag-hover {
            border-style: solid;
        }
        .dropzone.dz-drag-hover .dz-message {
            opacity: 0.5;
        }
        .dropzone .dz-message {
            text-align: center;
            margin: 2em 0;
        }
        .dropzone .dz-preview {
            position: relative;
            display: inline-block;
            vertical-align: top;
            margin: 16px;
            min-height: 100px;
        }
        .dropzone .dz-preview:hover {
            z-index: 1000;
        }
        .dropzone .dz-preview:hover .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview.dz-file-preview .dz-image {
            border-radius: 20px;
            background: #999;
            background: linear-gradient(to bottom, #eee, #ddd);
        }
        .dropzone .dz-preview.dz-file-preview .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview.dz-image-preview {
            background: white;
        }
        .dropzone .dz-preview.dz-image-preview .dz-details {
            -webkit-transition: opacity 0.2s linear;
            -moz-transition: opacity 0.2s linear;
            -ms-transition: opacity 0.2s linear;
            -o-transition: opacity 0.2s linear;
            transition: opacity 0.2s linear;
        }
        .dropzone .dz-preview .dz-remove {
            font-size: 14px;
            text-align: center;
            display: block;
            cursor: pointer;
            border: none;
        }
        .dropzone .dz-preview .dz-remove:hover {
            text-decoration: underline;
        }
        .dropzone .dz-preview:hover .dz-details {
            opacity: 1;
        }
        .dropzone .dz-preview .dz-details {
            z-index: 20;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            font-size: 13px;
            min-width: 100%;
            max-width: 100%;
            padding: 2em 1em;
            text-align: center;
            color: rgba(0, 0, 0, 0.9);
            line-height: 150%;
        }
        .dropzone .dz-preview .dz-details .dz-size {
            margin-bottom: 1em;
            font-size: 16px;
        }
        .dropzone .dz-preview .dz-details .dz-filename {
            white-space: nowrap;
        }
        .dropzone .dz-preview .dz-details .dz-filename:hover span {
            border: 1px solid rgba(200, 200, 200, 0.8);
            background-color: rgba(255, 255, 255, 0.8);
        }
        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
            border: 1px solid transparent;
        }
        .dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
            background-color: rgba(255, 255, 255, 0.4);
            padding: 0 0.4em;
            border-radius: 3px;
        }
        .dropzone .dz-preview:hover .dz-image img {
            -webkit-transform: scale(1.05, 1.05);
            -moz-transform: scale(1.05, 1.05);
            -ms-transform: scale(1.05, 1.05);
            -o-transform: scale(1.05, 1.05);
            transform: scale(1.05, 1.05);
            -webkit-filter: blur(8px);
            filter: blur(8px);
        }
        .dropzone .dz-preview .dz-image {
            border-radius: 20px;
            overflow: hidden;
            width: 120px;
            height: 120px;
            position: relative;
            display: block;
            z-index: 10;
        }
        .dropzone .dz-preview .dz-image img {
            display: block;
        }
        .dropzone .dz-preview.dz-success .dz-success-mark {
            -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
            animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .dropzone .dz-preview.dz-error .dz-error-mark {
            opacity: 1;
            -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
            animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
            pointer-events: none;
            opacity: 0;
            z-index: 500;
            position: absolute;
            display: block;
            top: 50%;
            left: 50%;
            margin-left: -27px;
            margin-top: -27px;
        }
        .dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
            display: block;
            width: 54px;
            height: 54px;
        }
        .dropzone .dz-preview.dz-processing .dz-progress {
            opacity: 1;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        .dropzone .dz-preview.dz-complete .dz-progress {
            opacity: 0;
            -webkit-transition: opacity 0.4s ease-in;
            -moz-transition: opacity 0.4s ease-in;
            -ms-transition: opacity 0.4s ease-in;
            -o-transition: opacity 0.4s ease-in;
            transition: opacity 0.4s ease-in;
        }
        .dropzone .dz-preview:not(.dz-processing) .dz-progress {
            -webkit-animation: pulse 6s ease infinite;
            -moz-animation: pulse 6s ease infinite;
            -ms-animation: pulse 6s ease infinite;
            -o-animation: pulse 6s ease infinite;
            animation: pulse 6s ease infinite;
        }
        .dropzone .dz-preview .dz-progress {
            opacity: 1;
            z-index: 1000;
            pointer-events: none;
            position: absolute;
            height: 16px;
            left: 50%;
            top: 50%;
            margin-top: -8px;
            width: 80px;
            margin-left: -40px;
            background: rgba(255, 255, 255, 0.9);
            -webkit-transform: scale(1);
            border-radius: 8px;
            overflow: hidden;
        }
        .dropzone .dz-preview .dz-progress .dz-upload {
            background: #333;
            background: linear-gradient(to bottom, #666, #444);
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 0;
            -webkit-transition: width 300ms ease-in-out;
            -moz-transition: width 300ms ease-in-out;
            -ms-transition: width 300ms ease-in-out;
            -o-transition: width 300ms ease-in-out;
            transition: width 300ms ease-in-out;
        }
        .dropzone .dz-preview.dz-error .dz-error-message {
            display: block;
        }
        .dropzone .dz-preview.dz-error:hover .dz-error-message {
            opacity: 1;
            pointer-events: auto;
        }
        .dropzone .dz-preview .dz-error-message {
            pointer-events: none;
            z-index: 1000;
            position: absolute;
            display: block;
            display: none;
            opacity: 0;
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
            border-radius: 8px;
            font-size: 13px;
            top: 130px;
            left: -10px;
            width: 140px;
            background: #be2626;
            background: linear-gradient(to bottom, #be2626, #a92222);
            padding: 0.5em 1.2em;
            color: white;
        }
        .dropzone .dz-preview .dz-error-message:after {
            content:'';
            position: absolute;
            top: -6px;
            left: 64px;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #be2626;
        }
        .butt{
            line-height: 2.4 !important;
            letter-spacing: 0px;
            font-weight: bold;
            color: white;!important;
        }
        .butt:hover{
            color: white;
        }
        .elementor-widget-google_maps iframe {
            height: 468px;
        }
        @media (max-width: 767px){
            .elementor-26 .elementor-element.elementor-element-121aa97 {
                margin-top: 0;
                margin-bottom: 0;
                padding: 20px 0 20px 0;
                display: none;
            }
            .elementor-7 .elementor-element.elementor-element-d90ba89>.elementor-element-populated {
                margin: 0 0 0 0;
                padding: 0 15px 50px 15px;
                display: none;
            }
        }

        .cat{
            margin: 5px;
        }

        .ekit-wid-con .elementskit-post-image-card{
            background: white;
        }
        .cattitle{
            text-align: center;
            color: #131033;
            font-size: 26px;

        }
        .cattext{
            text-align: center;
            color: #131033 !important;
        }

        element.style {
        }
        .ekit-wid-con .elementskit-post-image-card .elementskit-post-body {
            padding: 20px 20px 20px;
            margin-bottom: 20px;
        }
        .elementor-7 .elementor-element.elementor-element-d90ba89>.elementor-element-populated {
            transition: background 0.3s,border 0.3s,border-radius 0.3s,box-shadow 0.3s;
            margin: -252px 0 0 0;
            padding: 0 0 0 15px;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap p {
            color: #131033;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .section-title {
            color: #131033;
            margin: 0 0 25px 0;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .btn.btn-primary {
            background: #ed2789;
            font-family: \"Open Sans\",Sans-serif;
            font-size: 14px;
            font-weight: 600;
            margin: 10px 0 0 0;
        }
        .intro-wrap .section-title {
            text-transform: capitalize;
        }
        .entry-header .entry-title a, .post .entry-header .entry-title a, article.page .entry-header .entry-title a, .sidebar .widget .widget-title a, h1, h2, h3, h4, h5, h6, .sidebar .widget .entry-title a, .related-post-area .ts-title a, .sidebar ul li a.url, .sidebar ul li a.rsswidget {
            color: #131033;
        }
        .ts-title.md {
            font-size: 23px;
            line-height: 32px;
            letter-spacing: -1.72px;
            text-transform: none;
            font-weight: 400;

        }

        .ts-feature-box.style2 .media-body p {
            color:#131033;
        }
        .elementor-26 .elementor-element.elementor-element-5116ce0:not(.elementor-motion-effects-element-type-background), .elementor-26 .elementor-element.elementor-element-5116ce0>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #131033;
        }
        .elementor-26 .elementor-element.elementor-element-010ec24 {
            margin-top: -35px;
            margin-bottom: -35px;
            padding: 0 0 0 0;
            z-index: 222;
        }
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .elementor-26 .elementor-element.elementor-element-010ec24 {
                margin-top: 0;
                margin-bottom: -35px;
                padding: 0 0 0 0;
                z-index: 222;
            }
        }
        .elementor-26 .elementor-element.elementor-element-d2e5690 .ekit_navSidebar-button, .elementor-26 .elementor-element.elementor-element-d2e5690 .ekit_social_media ul>li:last-child {
            padding: 4px 7px 5px 7px;
            width: 214px;
        }
        .elementor-7 .elementor-element.elementor-element-21e2e7d .intro-wrap .btn.btn-primary:hover {
            background: #ed2789;
        }
        .ekit-wid-con .btn-primary {
            color: #fff;
            background-color: #ed2789;
            border: none;
        }
        .elementor-176 .elementor-element.elementor-element-efa6ebe:not(.elementor-motion-effects-element-type-background), .elementor-176 .elementor-element.elementor-element-efa6ebe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #131033;
        }
        input#envoisoffre_scanpermis_0_file{
            border: none !important;
            padding-top: 10px;
        }
        input#envoisoffre_scanpermis_1_file{
            border: none !important;
            padding-top: 10px;
        }

#envoisoffre_scanpermis{
    display: none;
}
    </style>


    <div class=\"ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"26\" class=\"elementor elementor-26\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"elementor-element elementor-element-010ec24 main-nav elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"010ec24\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-52c606e elementor-column elementor-col-100 elementor-top-column\" data-id=\"52c606e\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <section class=\"elementor-element elementor-element-5116ce0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section\" data-id=\"5116ce0\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_sticky&quot;:&quot;top&quot;,&quot;ekit_sticky_on&quot;:[&quot;desktop&quot;],&quot;ekit_sticky_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;ekit_sticky_effect_offset&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]}}\">
                                                <div class=\"elementor-container elementor-column-gap-default\">
                                                    <div class=\"elementor-row\">
                                                        <div class=\"elementor-element elementor-element-430c3a2 elementor-column elementor-col-33 elementor-inner-column\" data-id=\"430c3a2\" data-element_type=\"column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-032e77b elementor-widget elementor-widget-ekit-nav-menu\" data-id=\"032e77b\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"ekit-nav-menu.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ekit-wid-con\">

                                                                                <div id=\"ekit-megamenu-main-menu\" class=\"elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_line_arrow ekit-nav-menu-one-page-no\">


                                                                                    <ul id=\"main-menu\" class=\"elementskit-navbar-nav elementskit-menu-po-left\">
                                                                                        <a href=\"{{ path('cosanit_homepage') }}\"><img width=\"120\" src=\"{{ asset('logon.svg') }}\"> </a>


                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Nos services de comparaison<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_devisauto') }}\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Automobile</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">   Multirisques habitation</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Assurances voyage</button>
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>



                                                                                        <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                            <a href=\"#\" class=\" dropdown-item\">
                                                                                                Espace entreprises
                                                                                            </a>
                                                                                        </li>
                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Actualités<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        Nos packs promos
                                                                                                    </a>
                                                                                                </li>


                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"#\" class=\" dropdown-item\">
                                                                                                        Espace publicité
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>



                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">À propos de N comparer<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_apropos') }}\" class=\" dropdown-item\">
                                                                                                        Qui sommes nous ?
                                                                                                    </a>
                                                                                                </li>


                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_commment') }}\" class=\" dropdown-item\">
                                                                                                        Comment ça marche ?
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_garantie') }}\" class=\" dropdown-item\">
                                                                                                        Mentions légales
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_contact') }}\" class=\" dropdown-item\">
                                                                                                        Nous contacter
                                                                                                    </a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class=\"elementskit-nav-identity-panel\">
                                                                                        <div class=\"elementskit-site-title\">
                                                                                            <a class=\"elementskit-nav-logo\" href=\"{{ path('cosanit_homepage') }}\" target=\"_self\" rel=\"\"> <img src=\"{{ asset('logon.svg') }}\" alt=\"\"> </a>
                                                                                        </div>
                                                                                        <button class=\"elementskit-menu-close elementskit-menu-toggler\" type=\"button\">X</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>


    <section class=\"forulaire elementor-element elementor-element-4640a8d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section elementskit-parallax-multi-container\" data-id=\"4640a8d\" data-element_type=\"section\">
        <div class=\"elementor-container elementor-column-gap-default\">
            <div class=\"elementor-row\">
                <div class=\"elementor-element elementor-element-c64951c elementor-column elementor-col-100 elementor-top-column\" data-id=\"c64951c\" data-element_type=\"column\">
                    <div class=\"elementor-column-wrap elementor-element-populated\">
                        <div class=\"elementor-widget-wrap\">

                            <br>
                            <div class=\"elementor-col-100 \">
                                <h3>Souscrire à l'offre</h3>
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                        <h6 class=\"titre\">Assurance: <span style=\"color: #000\">{{ cateogrie.nom }}</span>   <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~cateogrie.photo[0].path) }}\" ></h6>

                                    </div>

                                    <div class=\"col-md-3\">
                                        <h6 class=\"titre\">Garantie: <span style=\"color: #000\">{{ garantie }}</span>  </h6>
                                        <h6 class=\"titre\">Durée: <span style=\"color: #000\">{{ duree }}</span>  </h6>
                                    </div>
                                    {% if  puissance == 0 %}

                                    {% else %}

                                        <div class=\"col-md-3\">
                                            <h6 class=\"titre\">Puissance: <span style=\"color: #000\">{{ puissance }}</span>  </h6>
                                            {% if  valeur == 0 %}

                                            {% else %}
                                                <h6 class=\"titre\">Valeur: <span style=\"color: #000\">{{ valeur }}</span>  </h6>
                                            {% endif %}

                                        </div>

                                    {% endif %}
                                </div>

                                {% if garantie == 'Tout risque' %}

                                    {% else %}
                                        {% if  vols == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Vols: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}

                                        {% if  incendies == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Incendies: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}

                                        {% if  bris == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Bris de glace: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}

                                        {% if  assistance1 == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Assistance1: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}


                                        {% if  assistance2 == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Assistance2: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}


                                        {% if  assistance3 == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Assistance3: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}



                                        {% if  defences == 0 %}

                                        {% else %}
                                            <h6 class=\"titre\">Défences et recours: <span style=\"color: #000\">Oui</span>  </h6>
                                        {% endif %}


                                {% endif %}



                                    {{ form_start(form) }}
                                <div class=\"row\">
                                    <p class=\"alert alert-info small-alert\" style=\"color:#ed2789;
    font-size: 15px;
   margin-top: 2px;\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.6em;margin-bottom: 5px;color: #ed2789;\"></i>  Veuillez remplir le formulaire suivant, notre équipe commerciale vous contactera dans les plus brefs délais.</p>


                                    <div class=\"col-md-6\">

                                        {{ form_label(form.datepermis, \"Date d'obtention (permis)\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.datepermis, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.datepermis) }}

                                        <br>
                                        {{ form_label(form.wilaya, \"Wilaya\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.wilaya, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.wilaya) }}
                                        <br>
                                        {{ form_label(form.npermis, \"N° permis\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.npermis, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.npermis) }}

                                        <br>
                                        {{ form_label(form.catpermis, \"Catégorie permis (A , B est....)\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.catpermis, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.catpermis) }}
                                        <br>
                                        {{ form_label(form.genre, \"Genre\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.genre, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.genre) }}
                                        <br>
                                        {{ form_label(form.matricule, \"Matricule\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.matricule, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.matricule) }}
                                        <br>
                                        {{ form_label(form.nserie, \"N° série\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.nserie, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.nserie) }}
                                        <br>

                                        {{ form_label(form.ntype, \"N° type\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.ntype, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.ntype) }}
                                        <br>

                                        {{ form_label(form.anneecircule, \"Année de mise en circulation\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.anneecircule, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.anneecircule) }}
                                        <br>

                                        {{ form_label(form.marque, \"Marque\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.marque, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.marque) }}
                                        <br>
                                        {{ form_label(form.modele, \"Modele\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.modele, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.modele) }}
                                        <br>
                                        {{ form_label(form.usage, \"Usage\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.usage, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.usage) }}
                                        <br>
                                        {{ form_label(form.nbplace, \"Nombre de places du véhicule\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.nbplace, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.nbplace) }}

                                    </div>
                                    <div class=\"col-md-6\">

                                        {{ form_label(form.nom, \"Nom et prénom (carte grise)\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.nom) }}
                                        <br>
                                        {{ form_label(form.adresse, \"Adresse (carte grise) / ville\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.adresse, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.adresse) }}
                                        <br>
                                        {{ form_label(form.telephone, \"Téléphone\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.telephone, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.telephone) }}

                                        <br>

                                        {{ form_label(form.email, \"Votre E-mail\") }} <span style=\"color: red;\">*</span> <br>
                                        {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
                                        {{ form_errors(form.email) }}

                                        <br>
                                        <label for=\"envoisoffre_email\" class=\"required\">Photo permis  <span style=\"color: red;\">*</span> </label>
                                        <div class=\"dropzone\">

                                        </div>
                                        <br>
                                        <br>
                                        <label for=\"envoisoffre_email\" class=\"required\">Photo carte grise  <span style=\"color: red;\">*</span> </label>
                                        <div class=\"dropzone dropzone2\">

                                        </div>


                                    </div>



                                </div>





                                    <br>
                                    <div class=\"elementor-element elementor-element-a752ce9 elementor-widget elementor-widget-mf-button\" data-id=\"a752ce9\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"mf-button.default\">
                                        <div class=\"elementor-widget-container\">
                                            <div class=\"mf-btn-wraper\">
                                                <button type=\"submit\" class=\"metform-btn \"> Confirmer votre demande </button>
                                            </div>
                                        </div>
                                    </div>

                                    {{ form_end(form) }}
                                    <input type=\"hidden\" id=\"linked_ID\">
                                    <input type=\"hidden\" id=\"fileName\">




                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script
            src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>

    <script src=\"{{ asset('js/iziToast.min.js') }}\"></script>
    <script src=\"{{ asset('js/dropzone.js') }}\"></script>

    <script>
    // init,configure dropzone
    Dropzone.autoDiscover = false;
    var dropzone_default = new Dropzone(\".dropzone\", {
        url: '{{ path('cosanit_uploads') }}' ,
        maxFiles: 8,
        dictMaxFilesExceeded: 'Seulement 8 images peuvent être téléchargées.',
        dictDefaultMessage: \"<i class=\\\"fas fa-download\\\" style='font-size: 25px;'></i> <br> Veuillez déposer la photo du permis\",
        acceptedFiles: 'image/*',
        maxFilesize: 3,  // in Mb
        addRemoveLinks: true,
        dictRemoveFile: 'Remove',
        init: function () {
            this.on(\"maxfilesexceeded\", function(file) {
                this.removeFile(file);
            });
            this.on(\"sending\", function(file, xhr, formData) {
                // send additional data with the file as POST data.
                formData.append(\"key\", \"value\");
            });
            this.on(\"success\", function(file, response) {

                // set the id,filename from the response
                \$('#fileName').val(response.fileName);
                \$('#linked_ID').val(response.mediaEntityId);
            });
            this.on(\"removedfile\", function(file) {
                console.log(\"test\");
                var fileName = \$('#fileName').val();
                var linkedId = \$('#linked_ID').val();
                // Delete file from server
                \$.ajax({
                    type: 'POST',
                    url: '{{ path('cosanit_del_uploads') }}',
                    data: {
                        id: linkedId,
                        fileName: fileName
                    },
                    dataType: 'json'
                }).done(function (resp) {
                    if (resp.deleted) {

                    } else if (resp.error) {

                    }
                }).fail(function(resp) {
                    console.error('xhr failed', resp);
                    return false;
                });
            });
            // this event is required only to debug errors
            this.on(\"error\", function(file, errorMessage) {
                console.error('Error', errorMessage);

            });
        }
    });
</script>
    <script>
        // init,configure dropzone
        Dropzone.autoDiscover = false;
        var dropzone_default = new Dropzone(\".dropzone2\", {
            url: '{{ path('cosanit_uploads') }}' ,
            maxFiles: 8,
            dictMaxFilesExceeded: 'Seulement 8 images peuvent être téléchargées.',
            acceptedFiles: 'image/*',
            dictDefaultMessage: \"<i class=\\\"fas fa-download\\\" style='font-size: 25px;'></i> <br> Veuillez déposer la photo de la carte grise\",
            maxFilesize: 3,  // in Mb
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            init: function () {
                this.on(\"maxfilesexceeded\", function(file) {
                    this.removeFile(file);
                });
                this.on(\"sending\", function(file, xhr, formData) {
                    // send additional data with the file as POST data.
                    formData.append(\"key\", \"value\");
                });
                this.on(\"success\", function(file, response) {

                    // set the id,filename from the response
                    \$('#fileName').val(response.fileName);
                    \$('#linked_ID').val(response.mediaEntityId);
                });
                this.on(\"removedfile\", function(file) {
                    console.log(\"test\");
                    var fileName = \$('#fileName').val();
                    var linkedId = \$('#linked_ID').val();
                    // Delete file from server
                    \$.ajax({
                        type: 'POST',
                        url: '{{ path('cosanit_del_uploads') }}',
                        data: {
                            id: linkedId,
                            fileName: fileName
                        },
                        dataType: 'json'
                    }).done(function (resp) {
                        if (resp.deleted) {

                        } else if (resp.error) {

                        }
                    }).fail(function(resp) {
                        console.error('xhr failed', resp);
                        return false;
                    });
                });
                // this event is required only to debug errors
                this.on(\"error\", function(file, errorMessage) {
                    console.error('Error', errorMessage);

                });
            }
        });
    </script>
    <script>
        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('');
        var \$newLinkLi = \$('<div></div>').append(\$addTagLink);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
            addTagForm(\$collectionHolder, \$newLinkLi);
            addTagForm(\$collectionHolder, \$newLinkLi);

            \$addTagLink.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            if(index == 0){
                var \$newFormLi = \$('<label> Photo du Permis <span style=\"color: red;\">*</span></label><br><br>').append(newForm);
            }
            if(index == 1){
                var \$newFormLi = \$('<label> Photo de la Carte grise <span style=\"color: red;\">*</span></label><br>').append(newForm);
            }

            \$newLinkLi.before(\$newFormLi);
        }




    </script>
{% endblock %}
", "@Cosanit/Default/envoisoffre.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\envoisoffre.html.twig");
    }
}
