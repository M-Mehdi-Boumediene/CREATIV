<?php

/* CosanitBundle:Default:recrutement.html.twig */
class __TwigTemplate_3cad18b398290dce2b89c56ca81ce0fa0470417a9689c44255f24be1ceabd282 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:recrutement.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:recrutement.html.twig"));

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
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .home .title_outer .has_background.title .title_holder, .single-universe .title_outer .has_background.title .title_holder{
            background: none;
        }

        #search_types {
            background: #fff;
            border: 1px solid #dfdfdf;
            padding: 0 15px;
            outline: none;
            width: 260px !important;
            min-height: 50px;
            line-height: 50px;
            font-size: 16px;
            color: #7b7b7b;
            transition: .3s ease;
            margin-bottom: 15px;


        }
        #search_transaction {
            background: #fff;
            border: 1px solid #dfdfdf;
            padding: 0 15px;
            outline: none;
            width: 260px !important;
            min-height: 50px;
            line-height: 50px;
            font-size: 16px;
            color: #7b7b7b;
            transition: .3s ease;
            margin-bottom: 15px;


        }
        .filter-bar .select2-container {
            width: 215px;
            min-height: 50px;
            padding: 0px;
        }
        .filter-bar .select2-container--default .select2-selection--single .select2-selection__arrow b {
            background: none;
            height: 8px;
        }
        .filter-bar.auto .select2-selection {
            box-sizing: border-box;
            border: 1px solid #dfdfdf;
            border-radius: 0;
            padding: 0;
            width: 260px;
            min-height: 52px;
        }
        .multi-inner {
            max-width: 990px;
            display: table;
            flex-wrap: wrap;
            padding: 25px;
        }
        p {
            color: #000;
            font-size: 16px;
            line-height: 30px;
            text-align: justify;
        }
         .contact_detail {
            background-color: #f7f7f7;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        #contact_nom, #contact_prenom, #contact_adresse, #contact_codepostal, #contact_ville,#contact_telephone,#contact_email{
            height: 50px;
            font-size: 16px;
            padding: 0 29px;
            width: 100%;
        }
        .wpcf7-form .row-submit {
            border-top: 1px solid #e7e7e7;
            padding-top: 0;
        }

        .contact_page .contact-agency p {
            text-transform: none;
        }
        h2 {
            font-size: 30px;
            margin-bottom: 0;
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
    </style>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/greensock.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/layerslider.transitions.js'></script>

    <div class=\"wrapper\">
        <div class=\"wrapper_inner\">

            <header class=\"page_header   regular  light  scroll_header_top_area\" style=\" position: absolute;\">
                <div class=\"header_inner clearfix\">

                    <div class=\"header_top_bottom_holder\">
                        <div class=\"header_bottom clearfix\" style=\" background-color:#fff; border-color:#fff;\">
                            <div class=\"container\">
                                <div class=\"container_inner clearfix\">
                                    <div class=\"header_inner_left\">
                                        <div class=\"mobile_menu_button\">
                                            <div class=\"mobile_menu_button_hamburger\">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class=\"logo_wrapper\">
                                            <div class=\"q_logo\"><a href=\"/\" style=\"height: 75px; visibility: visible;\"><img class=\"normal\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"height: auto;\"><img class=\"light\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"height: auto;\"><img class=\"dark\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"height: auto;\" ><img class=\"sticky\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"height: auto;\"></a></div>

                                        </div>
                                    </div>
                                    <div class=\"header_inner_right\">
                                        <div class=\"side_menu_button_wrapper right\">
                                            <div class=\"side_menu_button\">

                                            </div>
                                        </div>
                                    </div>
                                    <a title=\"GLS immobilier contact\" href=\"";
        // line 388
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 391
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 393
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 394
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 395
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 396
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 397
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 398
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 400
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 404
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 406
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 407
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 408
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 410
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\"title=\"Global Lxury Services contact\"  class=\"\"><span>Nous contacter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        </ul>\t\t\t\t\t</nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <a id=\"back_to_top\" href=\"#\" class=\"off\">
\t\t\t<span class=\"fa-stack\">
\t\t\t\t<i class=\"fa fa-angle-up \" style=\"\"></i>
\t\t\t</span>
            </a>


            <div class=\"content \" style=\"min-height: 163px; padding-top: 3px; \">
                <div class=\"content_inner  \">
                    <style type=\"text/css\">
                        .header_top .left .inner > div,
                        .header_top .left .inner > div:last-child,
                        .header_top .right .inner > div:first-child,
                        .header_top .right .inner > div,
                        header .header_top .q_social_icon_holder,
                        .header_menu_bottom
                        { border-color:rgba(234, 234, 234, 0); }

                    </style>


                    <div class=\"title_outer title_without_animation mobile-hide\" data-height=\"280\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url( ";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/recrutement.jpg"), "html", null, true);
        echo " );height:280px; z-index: 0\">
                            <div class=\"image not_responsive\"><img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/recrutement.jpg"), "html", null, true);
        echo "\" alt=\"Global Luxury Services\"> </div>
                            <div class=\"title_holder mobile-hide\" style=\"padding-top:0px;height:280px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"title_subtitle_holder\">
                                            <div class=\"title_subtitle_holder_inner\">
                                                <h1 style=\"    font-size: 38px;
    font-weight: bold;
    text-align: center;
    color: #fff;
    line-height: 47px;
    height: 50px; margin-top: -160px;\">

                                                    <span>RECRUTEMENT IMMOBILER</span>

                                                </h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"home-separator-3\"></div>


                    <div class=\"container_inner\">
                 <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"contact_agency-details wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_text_column wpb_content_element \">
                                                <div class=\"wpb_wrapper\">
                                                    <h2 class=\"red-text\" style=\"text-align:left;\">Global Luxury Services recrute</h2>
                                                   <br>
                                                    <p>Vous aimez l’immobilier ? Vous voulez mettre votre talent et votre énergie au service d’un

                                                        projet passionnant ? Vous êtes alors au bon endroit !


                                                    </p>
                                                    <p class=\"first-paragraph\">
                                                        En créant Global Luxury Services, nous avons voulu répondre aux nouveaux enjeux de ce
                                                        marché, innover, et bâtir une offre de nouvelle génération ! Pour nous, la révolution
                                                        numérique est une opportunité ! Les bouleversements du marché sont une occasion de
                                                        nous remettre en question pour inventer les métiers immobiliers de demain et répondre

                                                        aux différents projets de nos clients tout au long de leur vie. <br>

                                                        Faites nous part ici de votre envie de nous rejoindre, parlez-nous un peu de vous.

                                                        Nous saurons vous répondre rapidement !


                                                    </p>

                                                </div>
                                            </div>

                                            <div class=\"separator  normal center  \" style=\"\"></div>

                                            <div class=\"wpb_text_column wpb_content_element \">

                                                <div class=\"wpb_wrapper\">
                                                    <br>
                                                    <h2 class=\"red-text\" style=\"text-align:left;\">À la recherche d’un nouveau job ?</h2>
                                                    <br>
                                                    <p>Et si vous nous en disiez un peu plus sur vos ambitions ?</p>
                                                        <p>Dites-nous ici comment, quand et où vous aimeriez travailler !</p>


                                                </div>

                                            </div>
                                        </div></div></div>


                                <div class=\"contact_agency-details wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_single_image wpb_content_element vc_align_right\">
                                                <div>
                                                    <div class=\"wpb_wrapper\">

                                                        <div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"    text-align: center;        width: 100%;\">

                                                            <img class=\"vc_single_image-img \" src=\"/img/recrutement2.jpg\" alt=\"agency-details\" title=\"agency-details\" width=\"100%;\">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div> </div></div></div></div></div>

                        <div class=\"home-separator-4\"></div>


                    </div>


                    <div class=\"content_bottom\">
                    </div>

                </div>
                <div class=\"contact_detail\" style=\"    \">

                    <div class=\"container_inner\">
                        <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f61463-p70666-o1\" lang=\"fr-FR\" dir=\"ltr\">
                            <div class=\"screen-reader-response\"></div>


                            <form action=\"/contact\" method=\"POST\" class=\"wpcf7-form\" novalidate=\"novalidate\" <form=\"\" name=\"contact\">
                            <div style=\"display: none;\">
                                <input type=\"hidden\" name=\"_wpcf7\" value=\"61463\">
                                <input type=\"hidden\" name=\"_wpcf7_version\" value=\"4.2.2\">
                                <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"fr_FR\">
                                <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f61463-p70666-o1\">
                                <input type=\"hidden\" name=\"_wpnonce\" value=\"ef50679eda\">
                            </div>

                            <p><span class=\"wpcf7-form-control-wrap gender\"><span class=\"wpcf7-form-control wpcf7-radio\"><span class=\"wpcf7-list-item first\"><label><input type=\"radio\" name=\"gender\" value=\"Mr\">&nbsp;<span class=\"wpcf7-list-item-label\">Mr</span></label></span><span class=\"wpcf7-list-item\"><label><input type=\"radio\" name=\"gender\" value=\"Mme\">&nbsp;<span class=\"wpcf7-list-item-label\">Mme</span></label></span><span class=\"wpcf7-list-item last\"><label><input type=\"radio\" name=\"gender\" value=\"Melle\">&nbsp;<span class=\"wpcf7-list-item-label\">Melle</span></label></span></span></span></p>
                            <div class=\"vc_row vc_row_contact input-container\">
                                <div class=\"vc_col-md-8 col-md-8-contact\">
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap last-name\">


                                                    <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"contact[nom]\" placeholder=\"Nom\">


                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap first-name\">

                                              <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"contact[prenom]\" required=\"required\" placeholder=\"Prénom \">


                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap address\">
                                              <input type=\"text\" class=\"form-control\" id=\"contact_adresse\" name=\"contact[adresse]\" required=\"required\" placeholder=\"Adresse\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap postal-code\">
                                              <input type=\"text\" class=\"form-control\" id=\"contact_codepostal\" name=\"contact[codepostal]\" required=\"required\" placeholder=\"Code postal\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-12\">
                                        <span class=\"wpcf7-form-control-wrap city\">
                                             <input type=\"text\" class=\"form-control\" id=\"contact_ville\" name=\"contact[ville]\" required=\"required\" placeholder=\"Ville\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap phone\">
                                            <input type=\"text\" class=\"form-control\" id=\"contact_telephone\" name=\"contact[telephone]\" required=\"required\" placeholder=\"Téléphone\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">

                                        <span class=\"wpcf7-form-control-wrap email\">
                                                    <input type=\"email\" class=\"form-control\" id=\"contact_email\" name=\"contact[email]\" required=\"required\" placeholder=\"Email\">

                                        </span>
                                    </div>
                                </div>
                                <div class=\"vc_col-md-4\">
                                    <span class=\"wpcf7-form-control-wrap your-message\">
                                        <div class=\"dropzone\">

                                        </div>

                                    </span>
                                </div>
                            </div>
                            <div class=\"row-submit\">
                                <span class=\"wpcf7-form-control-wrap recaptcha-179\"></span><br>
                                <input type=\"submit\" value=\"Envoyer\" class=\"wpcf7-form-control wpcf7-submit btn\"><img class=\"ajax-loader\" src=\"https://www.marcfoujols.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif\" alt=\"Envoi en cours ...\" style=\"visibility: hidden;\">
                            </div>

                            <input type=\"hidden\" class=\"form-control\" id=\"contact__token\" name=\"contact[_token]\" value=\"GbYzgXhL0RvAEbme9bM7g9NOKdjJ1V4bGHLTfcR2Nmg\"></form>

                        </div>
                    </div>

                </div>
                <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                    <div class=\"section_inner clearfix\">
                        <div class=\"section_inner_margin clearfix\">
                            <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                <h2 class=\"margin-top\">Nos Réseaux Sociaux</h2>
                                <br>
                            </div>
                            <center>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">

                                    <a href=\"https://www.facebook.com/glsoran/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.jpg"), "html", null, true);
        echo ")\">
                                        <div class=\"readmore\"><i class=\"fa fa-facebook fa-6\" aria-hidden=\"true\"></i></div>


                                        <div class=\"overlay\"></div>
                                    </a>

                                </div>


                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://www.instagram.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram.jpg"), "html", null, true);
        echo ")\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-instagram fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://www.pinterest.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/pinterest.jpg"), "html", null, true);
        echo ")\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-pinterest fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://twitter.com/GLS_Oran\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/twitter.jpg"), "html", null, true);
        echo ")\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-twitter fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>

                            </center>


                        </div><!-- section_inner_margin -->
                    </div>
                </div><!-- news -->


                <div class=\"home-separator-4\"></div>
            </div>




            <script type='text/javascript'>
                /* <![CDATA[ */
                var yith_infs = {\"navSelector\":\"nav.pagination\",\"nextSelector\":\"nav.pagination a.next\",\"itemSelector\":\".result-item\",\"contentSelector\":\"#infinite-scroll-container\",\"loader\":\"https:\\/\\/www.marcfoujols.com\\/wp-content\\/uploads\\/2015\\/08\\/preloader_mf.gif\",\"shop\":\"\"};
                /* ]]> */
            </script>
            <script type='text/javascript'>
                /* <![CDATA[ */
                var mfLike = {\"ajaxurl\":\"https:\\/\\/www.marcfoujols.com\\/wp-admin\\/admin-ajax.php\"};
                /* ]]> */
            </script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js\"></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2.min.js'></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/plugins.js'></script>
            <script type='text/javascript' src='https://www.marcfoujols.com/wp-content/themes/marcfoujols/js/default_dynamic.php'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/default.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/marc_foujols.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/custom_js.php'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2-fr.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/i18n/fr.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/autoNumeric-min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/cbpFWTabs.js'></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-search.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/classie.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/modalEffects.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/light-gallery/lightgallery-all.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/jquery.mousewheel.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/comment-reply.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/js_composer-4.11/assets/js/dist/js_composer_front.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/core.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/position.min.js'></script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer\" defer=\"defer\"></script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js\"></script>

            <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>
            <script>
                // init,configure dropzone
                Dropzone.autoDiscover = false;
                var dropzone_default = new Dropzone(\".dropzone\", {
                    url: '#' ,
                    maxFiles: 2,
                    dictMaxFilesExceeded: 'Only 2 Files can be uploaded',
                    dictDefaultMessage: \"Déposez votre CV et LM (pièces jointes)\",
                    maxFilesize: 3,  // in Mb
                    addRemoveLinks: true,
                    init: function () {
                        this.on(\"maxfilesexceeded\", function(file) {
                            this.removeFile(file);
                        });
                        this.on(\"sending\", function(file, xhr, formData) {
                            // send additional data with the file as POST data if needed.
                            // formData.append(\"key\", \"value\");
                        });
                        this.on(\"success\", function(file, response) {
                            if (response.uploaded)
                                alert('File Uploaded: ' + response.fileName);
                        });
                    }
                });
            </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:recrutement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  848 => 731,  785 => 671,  772 => 661,  759 => 651,  745 => 640,  543 => 441,  539 => 440,  506 => 410,  502 => 409,  498 => 408,  494 => 407,  490 => 406,  486 => 405,  482 => 404,  475 => 400,  470 => 398,  466 => 397,  462 => 396,  458 => 395,  454 => 394,  450 => 393,  445 => 391,  439 => 388,  419 => 377,  44 => 4,  38 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <style>
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .home .title_outer .has_background.title .title_holder, .single-universe .title_outer .has_background.title .title_holder{
            background: none;
        }

        #search_types {
            background: #fff;
            border: 1px solid #dfdfdf;
            padding: 0 15px;
            outline: none;
            width: 260px !important;
            min-height: 50px;
            line-height: 50px;
            font-size: 16px;
            color: #7b7b7b;
            transition: .3s ease;
            margin-bottom: 15px;


        }
        #search_transaction {
            background: #fff;
            border: 1px solid #dfdfdf;
            padding: 0 15px;
            outline: none;
            width: 260px !important;
            min-height: 50px;
            line-height: 50px;
            font-size: 16px;
            color: #7b7b7b;
            transition: .3s ease;
            margin-bottom: 15px;


        }
        .filter-bar .select2-container {
            width: 215px;
            min-height: 50px;
            padding: 0px;
        }
        .filter-bar .select2-container--default .select2-selection--single .select2-selection__arrow b {
            background: none;
            height: 8px;
        }
        .filter-bar.auto .select2-selection {
            box-sizing: border-box;
            border: 1px solid #dfdfdf;
            border-radius: 0;
            padding: 0;
            width: 260px;
            min-height: 52px;
        }
        .multi-inner {
            max-width: 990px;
            display: table;
            flex-wrap: wrap;
            padding: 25px;
        }
        p {
            color: #000;
            font-size: 16px;
            line-height: 30px;
            text-align: justify;
        }
         .contact_detail {
            background-color: #f7f7f7;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        #contact_nom, #contact_prenom, #contact_adresse, #contact_codepostal, #contact_ville,#contact_telephone,#contact_email{
            height: 50px;
            font-size: 16px;
            padding: 0 29px;
            width: 100%;
        }
        .wpcf7-form .row-submit {
            border-top: 1px solid #e7e7e7;
            padding-top: 0;
        }

        .contact_page .contact-agency p {
            text-transform: none;
        }
        h2 {
            font-size: 30px;
            margin-bottom: 0;
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
    </style>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/greensock.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/LayerSlider/static/js/layerslider.transitions.js'></script>

    <div class=\"wrapper\">
        <div class=\"wrapper_inner\">

            <header class=\"page_header   regular  light  scroll_header_top_area\" style=\" position: absolute;\">
                <div class=\"header_inner clearfix\">

                    <div class=\"header_top_bottom_holder\">
                        <div class=\"header_bottom clearfix\" style=\" background-color:#fff; border-color:#fff;\">
                            <div class=\"container\">
                                <div class=\"container_inner clearfix\">
                                    <div class=\"header_inner_left\">
                                        <div class=\"mobile_menu_button\">
                                            <div class=\"mobile_menu_button_hamburger\">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class=\"logo_wrapper\">
                                            <div class=\"q_logo\"><a href=\"/\" style=\"height: 75px; visibility: visible;\"><img class=\"normal\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"height: auto;\"><img class=\"light\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"height: auto;\"><img class=\"dark\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"height: auto;\" ><img class=\"sticky\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"height: auto;\"></a></div>

                                        </div>
                                    </div>
                                    <div class=\"header_inner_right\">
                                        <div class=\"side_menu_button_wrapper right\">
                                            <div class=\"side_menu_button\">

                                            </div>
                                        </div>
                                    </div>
                                    <a title=\"GLS immobilier contact\" href=\"{{ path('cosanit_contact') }}\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_homepage') }}\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_immobilier') }}\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"{{ path('cosanit_achats') }}\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_ventes') }}  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_location') }} \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_investissement') }}\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_internationals') }} \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_contact') }}\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_achats') }}\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_ventes') }}\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_location') }}\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_investissement') }}\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_internationals') }}\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"{{ asset('img/algeria.png') }}\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_contact') }}\"title=\"Global Lxury Services contact\"  class=\"\"><span>Nous contacter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        </ul>\t\t\t\t\t</nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <a id=\"back_to_top\" href=\"#\" class=\"off\">
\t\t\t<span class=\"fa-stack\">
\t\t\t\t<i class=\"fa fa-angle-up \" style=\"\"></i>
\t\t\t</span>
            </a>


            <div class=\"content \" style=\"min-height: 163px; padding-top: 3px; \">
                <div class=\"content_inner  \">
                    <style type=\"text/css\">
                        .header_top .left .inner > div,
                        .header_top .left .inner > div:last-child,
                        .header_top .right .inner > div:first-child,
                        .header_top .right .inner > div,
                        header .header_top .q_social_icon_holder,
                        .header_menu_bottom
                        { border-color:rgba(234, 234, 234, 0); }

                    </style>


                    <div class=\"title_outer title_without_animation mobile-hide\" data-height=\"280\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url( {{ asset('img/recrutement.jpg') }} );height:280px; z-index: 0\">
                            <div class=\"image not_responsive\"><img src=\"{{ asset('img/recrutement.jpg') }}\" alt=\"Global Luxury Services\"> </div>
                            <div class=\"title_holder mobile-hide\" style=\"padding-top:0px;height:280px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"title_subtitle_holder\">
                                            <div class=\"title_subtitle_holder_inner\">
                                                <h1 style=\"    font-size: 38px;
    font-weight: bold;
    text-align: center;
    color: #fff;
    line-height: 47px;
    height: 50px; margin-top: -160px;\">

                                                    <span>RECRUTEMENT IMMOBILER</span>

                                                </h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"home-separator-3\"></div>


                    <div class=\"container_inner\">
                 <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"contact_agency-details wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_text_column wpb_content_element \">
                                                <div class=\"wpb_wrapper\">
                                                    <h2 class=\"red-text\" style=\"text-align:left;\">Global Luxury Services recrute</h2>
                                                   <br>
                                                    <p>Vous aimez l’immobilier ? Vous voulez mettre votre talent et votre énergie au service d’un

                                                        projet passionnant ? Vous êtes alors au bon endroit !


                                                    </p>
                                                    <p class=\"first-paragraph\">
                                                        En créant Global Luxury Services, nous avons voulu répondre aux nouveaux enjeux de ce
                                                        marché, innover, et bâtir une offre de nouvelle génération ! Pour nous, la révolution
                                                        numérique est une opportunité ! Les bouleversements du marché sont une occasion de
                                                        nous remettre en question pour inventer les métiers immobiliers de demain et répondre

                                                        aux différents projets de nos clients tout au long de leur vie. <br>

                                                        Faites nous part ici de votre envie de nous rejoindre, parlez-nous un peu de vous.

                                                        Nous saurons vous répondre rapidement !


                                                    </p>

                                                </div>
                                            </div>

                                            <div class=\"separator  normal center  \" style=\"\"></div>

                                            <div class=\"wpb_text_column wpb_content_element \">

                                                <div class=\"wpb_wrapper\">
                                                    <br>
                                                    <h2 class=\"red-text\" style=\"text-align:left;\">À la recherche d’un nouveau job ?</h2>
                                                    <br>
                                                    <p>Et si vous nous en disiez un peu plus sur vos ambitions ?</p>
                                                        <p>Dites-nous ici comment, quand et où vous aimeriez travailler !</p>


                                                </div>

                                            </div>
                                        </div></div></div>


                                <div class=\"contact_agency-details wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_single_image wpb_content_element vc_align_right\">
                                                <div>
                                                    <div class=\"wpb_wrapper\">

                                                        <div class=\"vc_single_image-wrapper   vc_box_border_grey\" style=\"    text-align: center;        width: 100%;\">

                                                            <img class=\"vc_single_image-img \" src=\"/img/recrutement2.jpg\" alt=\"agency-details\" title=\"agency-details\" width=\"100%;\">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div> </div></div></div></div></div>

                        <div class=\"home-separator-4\"></div>


                    </div>


                    <div class=\"content_bottom\">
                    </div>

                </div>
                <div class=\"contact_detail\" style=\"    \">

                    <div class=\"container_inner\">
                        <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f61463-p70666-o1\" lang=\"fr-FR\" dir=\"ltr\">
                            <div class=\"screen-reader-response\"></div>


                            <form action=\"/contact\" method=\"POST\" class=\"wpcf7-form\" novalidate=\"novalidate\" <form=\"\" name=\"contact\">
                            <div style=\"display: none;\">
                                <input type=\"hidden\" name=\"_wpcf7\" value=\"61463\">
                                <input type=\"hidden\" name=\"_wpcf7_version\" value=\"4.2.2\">
                                <input type=\"hidden\" name=\"_wpcf7_locale\" value=\"fr_FR\">
                                <input type=\"hidden\" name=\"_wpcf7_unit_tag\" value=\"wpcf7-f61463-p70666-o1\">
                                <input type=\"hidden\" name=\"_wpnonce\" value=\"ef50679eda\">
                            </div>

                            <p><span class=\"wpcf7-form-control-wrap gender\"><span class=\"wpcf7-form-control wpcf7-radio\"><span class=\"wpcf7-list-item first\"><label><input type=\"radio\" name=\"gender\" value=\"Mr\">&nbsp;<span class=\"wpcf7-list-item-label\">Mr</span></label></span><span class=\"wpcf7-list-item\"><label><input type=\"radio\" name=\"gender\" value=\"Mme\">&nbsp;<span class=\"wpcf7-list-item-label\">Mme</span></label></span><span class=\"wpcf7-list-item last\"><label><input type=\"radio\" name=\"gender\" value=\"Melle\">&nbsp;<span class=\"wpcf7-list-item-label\">Melle</span></label></span></span></span></p>
                            <div class=\"vc_row vc_row_contact input-container\">
                                <div class=\"vc_col-md-8 col-md-8-contact\">
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap last-name\">


                                                    <input type=\"text\" class=\"form-control\" id=\"contact_nom\" name=\"contact[nom]\" placeholder=\"Nom\">


                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap first-name\">

                                              <input type=\"text\" class=\"form-control\" id=\"contact_prenom\" name=\"contact[prenom]\" required=\"required\" placeholder=\"Prénom \">


                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap address\">
                                              <input type=\"text\" class=\"form-control\" id=\"contact_adresse\" name=\"contact[adresse]\" required=\"required\" placeholder=\"Adresse\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap postal-code\">
                                              <input type=\"text\" class=\"form-control\" id=\"contact_codepostal\" name=\"contact[codepostal]\" required=\"required\" placeholder=\"Code postal\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-12\">
                                        <span class=\"wpcf7-form-control-wrap city\">
                                             <input type=\"text\" class=\"form-control\" id=\"contact_ville\" name=\"contact[ville]\" required=\"required\" placeholder=\"Ville\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">
                                        <span class=\"wpcf7-form-control-wrap phone\">
                                            <input type=\"text\" class=\"form-control\" id=\"contact_telephone\" name=\"contact[telephone]\" required=\"required\" placeholder=\"Téléphone\">

                                        </span>
                                    </div>
                                    <div class=\"vc_col-md-6\">

                                        <span class=\"wpcf7-form-control-wrap email\">
                                                    <input type=\"email\" class=\"form-control\" id=\"contact_email\" name=\"contact[email]\" required=\"required\" placeholder=\"Email\">

                                        </span>
                                    </div>
                                </div>
                                <div class=\"vc_col-md-4\">
                                    <span class=\"wpcf7-form-control-wrap your-message\">
                                        <div class=\"dropzone\">

                                        </div>

                                    </span>
                                </div>
                            </div>
                            <div class=\"row-submit\">
                                <span class=\"wpcf7-form-control-wrap recaptcha-179\"></span><br>
                                <input type=\"submit\" value=\"Envoyer\" class=\"wpcf7-form-control wpcf7-submit btn\"><img class=\"ajax-loader\" src=\"https://www.marcfoujols.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif\" alt=\"Envoi en cours ...\" style=\"visibility: hidden;\">
                            </div>

                            <input type=\"hidden\" class=\"form-control\" id=\"contact__token\" name=\"contact[_token]\" value=\"GbYzgXhL0RvAEbme9bM7g9NOKdjJ1V4bGHLTfcR2Nmg\"></form>

                        </div>
                    </div>

                </div>
                <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                    <div class=\"section_inner clearfix\">
                        <div class=\"section_inner_margin clearfix\">
                            <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                <h2 class=\"margin-top\">Nos Réseaux Sociaux</h2>
                                <br>
                            </div>
                            <center>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">

                                    <a href=\"https://www.facebook.com/glsoran/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url({{ asset('img/facebook.jpg') }})\">
                                        <div class=\"readmore\"><i class=\"fa fa-facebook fa-6\" aria-hidden=\"true\"></i></div>


                                        <div class=\"overlay\"></div>
                                    </a>

                                </div>


                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://www.instagram.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url({{ asset('img/instagram.jpg') }})\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-instagram fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://www.pinterest.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url({{ asset('img/pinterest.jpg') }})\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-pinterest fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>
                                <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                    <a href=\"https://twitter.com/GLS_Oran\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url({{ asset('img/twitter.jpg') }})\">
                                        <div class=\"readmore\">
                                            <i class=\"fa fa-twitter fa-6\" aria-hidden=\"true\"></i>
                                        </div>


                                        <div class=\"overlay\"></div>
                                    </a>
                                </div>

                            </center>


                        </div><!-- section_inner_margin -->
                    </div>
                </div><!-- news -->


                <div class=\"home-separator-4\"></div>
            </div>




            <script type='text/javascript'>
                /* <![CDATA[ */
                var yith_infs = {\"navSelector\":\"nav.pagination\",\"nextSelector\":\"nav.pagination a.next\",\"itemSelector\":\".result-item\",\"contentSelector\":\"#infinite-scroll-container\",\"loader\":\"https:\\/\\/www.marcfoujols.com\\/wp-content\\/uploads\\/2015\\/08\\/preloader_mf.gif\",\"shop\":\"\"};
                /* ]]> */
            </script>
            <script type='text/javascript'>
                /* <![CDATA[ */
                var mfLike = {\"ajaxurl\":\"https:\\/\\/www.marcfoujols.com\\/wp-admin\\/admin-ajax.php\"};
                /* ]]> */
            </script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js\"></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2.min.js'></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/plugins.js'></script>
            <script type='text/javascript' src='https://www.marcfoujols.com/wp-content/themes/marcfoujols/js/default_dynamic.php'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/default.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/marc_foujols.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/custom_js.php'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2-fr.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/i18n/fr.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/autoNumeric-min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/cbpFWTabs.js'></script>

            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-search.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/classie.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/modalEffects.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/light-gallery/lightgallery-all.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/jquery.mousewheel.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/comment-reply.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/js_composer-4.11/assets/js/dist/js_composer_front.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/core.min.js'></script>
            <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/position.min.js'></script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer\" defer=\"defer\"></script>
            <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js\"></script>

            <script src=\"{{ asset('js/dropzone.js') }}\"></script>
            <script>
                // init,configure dropzone
                Dropzone.autoDiscover = false;
                var dropzone_default = new Dropzone(\".dropzone\", {
                    url: '#' ,
                    maxFiles: 2,
                    dictMaxFilesExceeded: 'Only 2 Files can be uploaded',
                    dictDefaultMessage: \"Déposez votre CV et LM (pièces jointes)\",
                    maxFilesize: 3,  // in Mb
                    addRemoveLinks: true,
                    init: function () {
                        this.on(\"maxfilesexceeded\", function(file) {
                            this.removeFile(file);
                        });
                        this.on(\"sending\", function(file, xhr, formData) {
                            // send additional data with the file as POST data if needed.
                            // formData.append(\"key\", \"value\");
                        });
                        this.on(\"success\", function(file, response) {
                            if (response.uploaded)
                                alert('File Uploaded: ' + response.fileName);
                        });
                    }
                });
            </script>

{% endblock %}", "CosanitBundle:Default:recrutement.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/recrutement.html.twig");
    }
}
