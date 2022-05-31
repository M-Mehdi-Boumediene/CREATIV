<?php

/* CosanitBundle:Default:ventes.html.twig */
class __TwigTemplate_cc904fa2e161573dec8c59db434a57f27982b08d2908c9b607f0f207cf7caaba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:ventes.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:ventes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <link rel='stylesheet'  href='";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/iziToast.min.css"), "html", null, true);
        echo "' type='text/css' media='all' />

    <style>

    #estimimmo_np,#estimimmo_surfaceh,#estimimmo_surfacet,
    #estimimmo_ville,#estimimmo_codepostal,#estimimmo_nom,
    #estimimmo_prenom,#estimimmo_adresse,#estimimmo_cpostal,
    #estimimmo_ville2,#estimimmo_tel,#estimimmo_email,#estimimmo_en,#estimimmo_type

    {
        height: 50px;
        font-size: 16px;
        padding: 0 29px;
        width: 100%;
    }
    .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
        color: #000;
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
        // line 303
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
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                            <nav class=\"main_menu drop_down right\">
                                <ul id=\"menu-main-navigation\" class=\"\">
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                    <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                    <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 322
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                    <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 323
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                    <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                    <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                </ul>
                            </nav>
                            <nav class=\"mobile_menu\">
                                <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 330
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 331
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 334
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 336
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


            <div class=\"content \" style=\"min-height: 163px;\">
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


                    <div class=\"sell_page\">
                        <div class=\"hero\">
                            <img src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2015/10/hero-sell.jpg\" class=\"hero-background\">
                            <div class=\"hero-content-wrapper\">
                                <div class=\"hero-table\">
                                    <div class=\"hero-center\">
                                        <div class=\"hero-content\">
                                            ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 372, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-mail"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 373
            echo "
                                                        <p class=\"hero-text\" style=\"color: #4caf50;\">  ";
            // line 374
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                                            <p class=\"hero-text\" >Avec Global Luxury Services, vendre un bien n’a jamais été aussi simple</p>



                                            <a class=\"hero-link btn-red\" href=\"#\" id=\"scroll-sell\">Obtenir une estimation</a>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"container\" id=\"sell-container\">
                            <div class=\"container contact_extra\">
                                <div class=\"container_inner\">
                                    <div class=\"vc_row sell-content\">

                                        <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\">
                                                <div class=\"wpb_column vc_column_container vc_col-sm-8\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                            <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f70682-o1\" lang=\"fr-FR\" dir=\"ltr\">
                                                                <div class=\"screen-reader-response\"></div>

                                                                <form action=\"";
        // line 400
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" method=\"POST\" class=\"wpcf7-form\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 400, $this->source); })()), 'form_start');
        echo "


                                                                    <div class=\"form-separator first-form-separator\">

                                                                        <span class=\"separator-value\">1</span> <span class=\"separator-label\">Description du bien</span>
                                                                    </div>
                                                                    <div class=\"vc_row input-container\">
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Mettre en
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap type-sell\">

                                                                                    <span class=\"select2 select2-container select2-container--default\" dir=\"ltr\" style=\"width: 342px;\">
                                                                                     ";
        // line 416
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 416, $this->source); })()), "en", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                                        ";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 417, $this->source); })()), "en", array()), 'errors');
        echo "
                                                                                        <span class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Type de bien
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap typer-room\">
                                                                                    <span class=\"select2 select2-container select2-container--default\" dir=\"ltr\" style=\"width: 342px;\">
                                                                                    ";
        // line 428
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 428, $this->source); })()), "type", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                                        ";
        // line 429
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 429, $this->source); })()), "type", array()), 'errors');
        echo "
                                                                                    </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Nombres de pièces
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap rooms-number\">
                                                                                    ";
        // line 439
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 439, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number")));
        echo "
                                                                                    ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 440, $this->source); })()), "np", array()), 'errors');
        echo "
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Surface habitable (m2)
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap surface-liveable\">
                                                                                   ";
        // line 450
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 450, $this->source); })()), "surfaceh", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number")));
        echo "
                                                                                    ";
        // line 451
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 451, $this->source); })()), "surfaceh", array()), 'errors');
        echo "
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Surface terrain
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                    <span class=\"wpcf7-form-control-wrap surface-liveable\">
                                                                                   ";
        // line 461
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 461, $this->source); })()), "surfacet", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number")));
        echo "
                                                                                        ";
        // line 462
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 462, $this->source); })()), "surfacet", array()), 'errors');
        echo "
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Ville
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap city-property\">

                                                                                   ";
        // line 473
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 473, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required")));
        echo "
                                                                                        ";
        // line 474
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 474, $this->source); })()), "ville", array()), 'errors');
        echo "

                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Code postal
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap postal-code-property\">
                                                                                    ";
        // line 485
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 485, $this->source); })()), "codepostal", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required")));
        echo "
                                                                                    ";
        // line 486
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 486, $this->source); })()), "codepostal", array()), 'errors');
        echo "
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Précisions
                                                                            </div>
                                                                            <div class=\"vc_col-md-8\">
                                                                                <span class=\"wpcf7-form-control-wrap details\">
                                                                                    ";
        // line 496
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 496, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-textarea", "cols" => "40", "rows" => "10")));
        echo "
                                                                                    ";
        // line 497
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 497, $this->source); })()), "message", array()), 'errors');
        echo "
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class=\"form-separator\">
                                                                    <span class=\"separator-value\">2</span> <span class=\"separator-label\">Photos du bien</span>
                                                                </div>
                                                                <p><span class=\"wpcf7-form-control-wrap gender\">
                                                                        <span class=\"wpcf7-form-control wpcf7-radio\">
                                                                            <div class=\"dropzone\">

                                                                            </div>

                                                                         </span></span></p><br>
                                                                    <div class=\"form-separator\">
                                                                        <span class=\"separator-value\">3</span> <span class=\"separator-label\">Vos coordonnées</span>
                                                                    </div>
                                                                    <p><span class=\"wpcf7-form-control-wrap gender\">
                                                                        <span class=\"wpcf7-form-control wpcf7-radio\">
                                                                            <span class=\"wpcf7-list-item first\">
                                                                                <label>

                                                                                    ";
        // line 520
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 520, $this->source); })()), "mr", array()), 'widget', array("attr" => array("checked" => "checked")));
        echo "
                                                                                    ";
        // line 521
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 521, $this->source); })()), "mr", array()), 'errors');
        echo "
                                                                                    &nbsp; <span class=\"wpcf7-list-item-label\">Mr</span>
                                                                                </label>
                                                                            </span>


                                                                            <span class=\"wpcf7-list-item last\">

                                                                                <label>
                                                                                       ";
        // line 530
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 530, $this->source); })()), "mme", array()), 'widget');
        echo "
                                                                                    ";
        // line 531
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 531, $this->source); })()), "mme", array()), 'errors');
        echo "
                                                                                    &nbsp;<span class=\"wpcf7-list-item-label\">Mme</span>
                                                                                </label></span>
                                                                            <span class=\"wpcf7-list-item last\">
                                                                                <label>
                                                                                           ";
        // line 536
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 536, $this->source); })()), "melle", array()), 'widget');
        echo "
                                                                                    ";
        // line 537
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 537, $this->source); })()), "melle", array()), 'errors');
        echo "
                                                                                    &nbsp;<span class=\"wpcf7-list-item-label\">Melle</span>
                                                                                </label>
                                                                            </span></span></span></p>
                                                                    <div class=\"vc_row input-container\">
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap first-name\">
                                                                                     ";
        // line 544
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 544, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Nom")));
        echo "
                                                                                ";
        // line 545
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 545, $this->source); })()), "nom", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap last-name\">
                                                                                     ";
        // line 550
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 550, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Prénom")));
        echo "
                                                                                ";
        // line 551
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 551, $this->source); })()), "prenom", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap address\">
                                                                                       ";
        // line 556
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 556, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Adresse")));
        echo "
                                                                                ";
        // line 557
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 557, $this->source); })()), "adresse", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap postal-code\">
                                                                                  ";
        // line 562
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 562, $this->source); })()), "cpostal", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Code postal")));
        echo "
                                                                                ";
        // line 563
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 563, $this->source); })()), "cpostal", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <span class=\"wpcf7-form-control-wrap city\">
                                                                            ";
        // line 568
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 568, $this->source); })()), "ville2", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Ville")));
        echo "
                                                                            ";
        // line 569
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 569, $this->source); })()), "ville2", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap phone\">

                                                                                ";
        // line 575
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 575, $this->source); })()), "tel", array()), 'widget', array("attr" => array("required" => "true", "class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Téléphone")));
        echo "
                                                                                ";
        // line 576
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 576, $this->source); })()), "tel", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap email\">

                                                                                ";
        // line 582
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 582, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "wpcf7-form-control wpcf7-text wpcf7-validates-as-required", "size" => "40", "placeholder" => "Email")));
        echo "
                                                                                ";
        // line 583
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 583, $this->source); })()), "email", array()), 'errors');
        echo "
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"submit-container\">
                                                                        <input type=\"submit\" value=\"Envoyer\" class=\"wpcf7-form-control wpcf7-submit btn\"><img class=\"ajax-loader\" src=\"https://www.marcfoujols.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif\" alt=\"Envoi en cours ...\" style=\"visibility: hidden;\">
                                                                    </div>

                                                                ";
        // line 591
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 591, $this->source); })()), 'form_end');
        echo "
                                                                <input type=\"hidden\" id=\"linked_ID\">
                                                                <input type=\"hidden\" id=\"fileName\">
                                                            </div>

                                                        </div></div></div>
                                                <div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                            <div class=\"wpb_text_column wpb_content_element \">
                                                                <div class=\"wpb_wrapper\">
                                                                    <div class=\"sidebar-block\">
                                                                        <p class=\"sidebar-block-content\">
                                                                            Un bien à vendre ou louer en Algérie ou à l’étranger ? Déposez ici votre demande
                                                                            d’estimation, pour un traitement simple et rapide.</p>
                                                                        <p class=\"sidebar-block-text\">Le cabinet Global Luxury Services est spécialisé dans les transactions immobilières
                                                                            et automobiles de prestige, à Oran, à Alger et à l’international.</p>
                                                                        <p class=\"sidebar-block-text\">Nous offrons à nos clients un service d’estimation immobilière de qualité.<br>
                                                                            Nos estimations sont calculées à partir des données du marchés et de nos ventes
                                                                            réalisées récemment.<br>
                                                                            Nos consultants immobiliers sont des professionnels compétents, expérimentés et

                                                                            régulièrement formés.<br>
                                                                            Pour mieux vous servir, nous misons sur la discrétion, la performance et

                                                                            l’expérience de notre équipe.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div></div></div>
                                            </div></div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    <script
            src=\"http://code.jquery.com/jquery-3.3.1.min.js\"
            integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
            crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/iziToast.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dropzone.js"), "html", null, true);
        echo "\"></script>

            <script>
                // init,configure dropzone
                Dropzone.autoDiscover = false;
                var dropzone_default = new Dropzone(\".dropzone\", {
                    url: '";
        // line 644
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_uploads");
        echo "' ,
                    maxFiles: 8,
                    dictMaxFilesExceeded: 'Seulement 8 images peuvent être téléchargées.',
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
        // line 672
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:ventes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 672,  881 => 644,  872 => 638,  868 => 637,  819 => 591,  808 => 583,  804 => 582,  795 => 576,  791 => 575,  782 => 569,  778 => 568,  770 => 563,  766 => 562,  758 => 557,  754 => 556,  746 => 551,  742 => 550,  734 => 545,  730 => 544,  720 => 537,  716 => 536,  708 => 531,  704 => 530,  692 => 521,  688 => 520,  662 => 497,  658 => 496,  645 => 486,  641 => 485,  627 => 474,  623 => 473,  609 => 462,  605 => 461,  592 => 451,  588 => 450,  575 => 440,  571 => 439,  558 => 429,  554 => 428,  540 => 417,  536 => 416,  515 => 400,  490 => 377,  481 => 374,  478 => 373,  474 => 372,  435 => 336,  431 => 335,  427 => 334,  423 => 333,  419 => 332,  415 => 331,  411 => 330,  404 => 326,  399 => 324,  395 => 323,  391 => 322,  387 => 321,  383 => 320,  379 => 319,  374 => 317,  368 => 314,  348 => 303,  47 => 5,  44 => 4,  38 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}

    <link rel='stylesheet'  href='{{ asset('css/iziToast.min.css') }}' type='text/css' media='all' />

    <style>

    #estimimmo_np,#estimimmo_surfaceh,#estimimmo_surfacet,
    #estimimmo_ville,#estimimmo_codepostal,#estimimmo_nom,
    #estimimmo_prenom,#estimimmo_adresse,#estimimmo_cpostal,
    #estimimmo_ville2,#estimimmo_tel,#estimimmo_email,#estimimmo_en,#estimimmo_type

    {
        height: 50px;
        font-size: 16px;
        padding: 0 29px;
        width: 100%;
    }
    .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
        color: #000;
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


            <div class=\"content \" style=\"min-height: 163px;\">
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


                    <div class=\"sell_page\">
                        <div class=\"hero\">
                            <img src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2015/10/hero-sell.jpg\" class=\"hero-background\">
                            <div class=\"hero-content-wrapper\">
                                <div class=\"hero-table\">
                                    <div class=\"hero-center\">
                                        <div class=\"hero-content\">
                                            {% for flash_message in app.session.flashBag.get('notice-mail') %}

                                                        <p class=\"hero-text\" style=\"color: #4caf50;\">  {{ flash_message }}</p>

                                            {% endfor %}
                                            <p class=\"hero-text\" >Avec Global Luxury Services, vendre un bien n’a jamais été aussi simple</p>



                                            <a class=\"hero-link btn-red\" href=\"#\" id=\"scroll-sell\">Obtenir une estimation</a>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"container\" id=\"sell-container\">
                            <div class=\"container contact_extra\">
                                <div class=\"container_inner\">
                                    <div class=\"vc_row sell-content\">

                                        <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\">
                                                <div class=\"wpb_column vc_column_container vc_col-sm-8\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                            <div role=\"form\" class=\"wpcf7\" id=\"wpcf7-f70682-o1\" lang=\"fr-FR\" dir=\"ltr\">
                                                                <div class=\"screen-reader-response\"></div>

                                                                <form action=\"{{ path('cosanit_ventes') }}\" method=\"POST\" class=\"wpcf7-form\" {{ form_start(form) }}


                                                                    <div class=\"form-separator first-form-separator\">

                                                                        <span class=\"separator-value\">1</span> <span class=\"separator-label\">Description du bien</span>
                                                                    </div>
                                                                    <div class=\"vc_row input-container\">
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Mettre en
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap type-sell\">

                                                                                    <span class=\"select2 select2-container select2-container--default\" dir=\"ltr\" style=\"width: 342px;\">
                                                                                     {{ form_widget(form.en,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                                                        {{ form_errors(form.en) }}
                                                                                        <span class=\"dropdown-wrapper\" aria-hidden=\"true\"></span></span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Type de bien
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap typer-room\">
                                                                                    <span class=\"select2 select2-container select2-container--default\" dir=\"ltr\" style=\"width: 342px;\">
                                                                                    {{ form_widget(form.type,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                                                        {{ form_errors(form.type) }}
                                                                                    </span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Nombres de pièces
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap rooms-number\">
                                                                                    {{ form_widget(form.np,{'attr': {'class': 'wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number',}}) }}
                                                                                    {{ form_errors(form.np) }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Surface habitable (m2)
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap surface-liveable\">
                                                                                   {{ form_widget(form.surfaceh,{'attr': {'class': 'wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number',}}) }}
                                                                                    {{ form_errors(form.surfaceh) }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Surface terrain
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                    <span class=\"wpcf7-form-control-wrap surface-liveable\">
                                                                                   {{ form_widget(form.surfacet,{'attr': {'class': 'wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number',}}) }}
                                                                                        {{ form_errors(form.surfacet) }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Ville
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap city-property\">

                                                                                   {{ form_widget(form.ville,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',}}) }}
                                                                                        {{ form_errors(form.ville) }}

                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Code postal
                                                                            </div>
                                                                            <div class=\"vc_col-md-6\">
                                                                                <span class=\"wpcf7-form-control-wrap postal-code-property\">
                                                                                    {{ form_widget(form.codepostal,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',}}) }}
                                                                                    {{ form_errors(form.codepostal) }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <div class=\"vc_col-md-4\">
                                                                                Précisions
                                                                            </div>
                                                                            <div class=\"vc_col-md-8\">
                                                                                <span class=\"wpcf7-form-control-wrap details\">
                                                                                    {{ form_widget(form.message,{'attr': {'class': 'wpcf7-form-control wpcf7-textarea','cols':'40','rows':'10'}}) }}
                                                                                    {{ form_errors(form.message) }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class=\"form-separator\">
                                                                    <span class=\"separator-value\">2</span> <span class=\"separator-label\">Photos du bien</span>
                                                                </div>
                                                                <p><span class=\"wpcf7-form-control-wrap gender\">
                                                                        <span class=\"wpcf7-form-control wpcf7-radio\">
                                                                            <div class=\"dropzone\">

                                                                            </div>

                                                                         </span></span></p><br>
                                                                    <div class=\"form-separator\">
                                                                        <span class=\"separator-value\">3</span> <span class=\"separator-label\">Vos coordonnées</span>
                                                                    </div>
                                                                    <p><span class=\"wpcf7-form-control-wrap gender\">
                                                                        <span class=\"wpcf7-form-control wpcf7-radio\">
                                                                            <span class=\"wpcf7-list-item first\">
                                                                                <label>

                                                                                    {{ form_widget(form.mr,{'attr': {'checked': 'checked'}})}}
                                                                                    {{ form_errors(form.mr) }}
                                                                                    &nbsp; <span class=\"wpcf7-list-item-label\">Mr</span>
                                                                                </label>
                                                                            </span>


                                                                            <span class=\"wpcf7-list-item last\">

                                                                                <label>
                                                                                       {{ form_widget(form.mme)}}
                                                                                    {{ form_errors(form.mme) }}
                                                                                    &nbsp;<span class=\"wpcf7-list-item-label\">Mme</span>
                                                                                </label></span>
                                                                            <span class=\"wpcf7-list-item last\">
                                                                                <label>
                                                                                           {{ form_widget(form.melle)}}
                                                                                    {{ form_errors(form.melle) }}
                                                                                    &nbsp;<span class=\"wpcf7-list-item-label\">Melle</span>
                                                                                </label>
                                                                            </span></span></span></p>
                                                                    <div class=\"vc_row input-container\">
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap first-name\">
                                                                                     {{ form_widget(form.nom,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Nom'}}) }}
                                                                                {{ form_errors(form.nom) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap last-name\">
                                                                                     {{ form_widget(form.prenom,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Prénom'}}) }}
                                                                                {{ form_errors(form.prenom) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap address\">
                                                                                       {{ form_widget(form.adresse,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Adresse'}}) }}
                                                                                {{ form_errors(form.adresse) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap postal-code\">
                                                                                  {{ form_widget(form.cpostal,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Code postal'}}) }}
                                                                                {{ form_errors(form.cpostal) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-12\">
                                                                            <span class=\"wpcf7-form-control-wrap city\">
                                                                            {{ form_widget(form.ville2,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Ville'}}) }}
                                                                            {{ form_errors(form.ville2) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap phone\">

                                                                                {{ form_widget(form.tel,{'attr': {'required':'true','class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Téléphone'}}) }}
                                                                                {{ form_errors(form.tel) }}
                                                                            </span>
                                                                        </div>
                                                                        <div class=\"vc_col-md-6\">
                                                                            <span class=\"wpcf7-form-control-wrap email\">

                                                                                {{ form_widget(form.email,{'attr': {'class': 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required','size': '40','placeholder': 'Email'}}) }}
                                                                                {{ form_errors(form.email) }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"submit-container\">
                                                                        <input type=\"submit\" value=\"Envoyer\" class=\"wpcf7-form-control wpcf7-submit btn\"><img class=\"ajax-loader\" src=\"https://www.marcfoujols.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif\" alt=\"Envoi en cours ...\" style=\"visibility: hidden;\">
                                                                    </div>

                                                                {{ form_end(form) }}
                                                                <input type=\"hidden\" id=\"linked_ID\">
                                                                <input type=\"hidden\" id=\"fileName\">
                                                            </div>

                                                        </div></div></div>
                                                <div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                            <div class=\"wpb_text_column wpb_content_element \">
                                                                <div class=\"wpb_wrapper\">
                                                                    <div class=\"sidebar-block\">
                                                                        <p class=\"sidebar-block-content\">
                                                                            Un bien à vendre ou louer en Algérie ou à l’étranger ? Déposez ici votre demande
                                                                            d’estimation, pour un traitement simple et rapide.</p>
                                                                        <p class=\"sidebar-block-text\">Le cabinet Global Luxury Services est spécialisé dans les transactions immobilières
                                                                            et automobiles de prestige, à Oran, à Alger et à l’international.</p>
                                                                        <p class=\"sidebar-block-text\">Nous offrons à nos clients un service d’estimation immobilière de qualité.<br>
                                                                            Nos estimations sont calculées à partir des données du marchés et de nos ventes
                                                                            réalisées récemment.<br>
                                                                            Nos consultants immobiliers sont des professionnels compétents, expérimentés et

                                                                            régulièrement formés.<br>
                                                                            Pour mieux vous servir, nous misons sur la discrétion, la performance et

                                                                            l’expérience de notre équipe.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div></div></div>
                                            </div></div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    <script
            src=\"http://code.jquery.com/jquery-3.3.1.min.js\"
            integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
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

{% endblock %}", "CosanitBundle:Default:ventes.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/ventes.html.twig");
    }
}
