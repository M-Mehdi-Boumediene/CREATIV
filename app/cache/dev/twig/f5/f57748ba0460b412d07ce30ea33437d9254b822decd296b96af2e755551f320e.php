<?php

/* @Cosanit/Default/immobilier.html.twig */
class __TwigTemplate_92accec63c3eb5be735a279d735a8d6960b78a33f52b3dc8d80b6a02bfaf07d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/immobilier.html.twig", 2);
        $this->blocks = array(
            'ogurl' => array($this, 'block_ogurl'),
            'ogimg' => array($this, 'block_ogimg'),
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/immobilier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_ogurl($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogurl"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_ogimg($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogimg"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gls.jpg")), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Immobilier Oran Alger | Location / Vente  Appartement, Villas - Algérie ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " Immobilier Oran Algérie Algé location & vente appratement F2 F3 F4 F5 F6, location / villa, duplex, loft Alger Oran algerie   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 8
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<style>

    .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
        color: #000;
    }
    .home_header_search_box {
        max-width: 747px;
        margin: 0 auto;
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
        // line 40
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
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 73
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


            <div class=\"content \">
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

                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2016/03/hero-about.jpg);height:0px;\">
                            <div class=\"title_holder\" style=\"     padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">
                                                        <hgroup>
                                                            <h1>Immobilier de prestige</h1>
                                                            <h2>Global Luxury Services vous propose une sélection de biens immobiliers de prestige à Oran, à Alger et à l’international</h2>
                                                        </hgroup>
                                                    </div>

                                                    <div class=\"home_header_search_box\">
                                                        <div class=\"mf-form\">
                                                            <div id=\"loader\" ></div>

                                                            ";
        // line 121
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "method" => "POST")));
        echo "

                                                            ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "transaction")));
        echo "
                                                            ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 124, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                                            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "duree")));
        echo "
                                                            ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->source); })()), "duree", array()), 'errors');
        echo "

                                                            ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "ou")));
        echo "
                                                            ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 130, $this->source); })()), "categories", array()), 'errors');
        echo "

                                                            ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "quoi", array()), 'widget', array("attr" => array("class" => "Ngawass")));
        echo "
                                                            ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "quoi", array()), 'errors');
        echo "


                                                            <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\">
                                                            ";
        // line 137
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        echo "
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 2, thumbnailNavigation: 'disabled', skinsPath: '";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Bannieres/"), "html", null, true);
        echo "'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">


                                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new Twig_Error_Runtime('Variable "banners" does not exist.', 155, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 156
            echo "
                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Bannieres/" . twig_get_attribute($this->env, $this->source, $context["banner"], "path", array()))), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Bannieres/" . twig_get_attribute($this->env, $this->source, $context["banner"], "path", array()))), "html", null, true);
            echo "\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: hidden;\">
                                            <div class=\"ls-gpuhack\"></div>
                                        </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "

                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
                    </div>
                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">

                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\"><div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                    <div class=\"wpb_text_column wpb_content_element \">
                                                        <div class=\"wpb_wrapper\">
                                                            <div class=\"home-info less-padding\" style=\"    padding: 0px 20px;\">
                                                                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["apropos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["apropos"]) {
            // line 175
            echo "                                                                    <h2 class=\"red-text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["apropos"], "titre", array()), "html", null, true);
            echo "</h2>
                                                                    <p>";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["apropos"], "text", array()), "html", null, true);
            echo "</p>
                                                                    <div class=\"vc_col-lg-6 vc_col-md-12 vc_col-sm-12 vc_col-xs-12\"><a class=\"btn-readmore\" href=\"";
            // line 177
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_apropos");
            echo "\" title=\"A propos de GLS \">Qui sommes nous ?</a></div>
                                                                    <div class=\"vc_col-lg-6 vc_col-md-12 vc_col-sm-12 vc_col-xs-12\"><a class=\"btn-readmore btn-search\" href=\"";
            // line 178
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_recrutement");
            echo "\" title=\"GLS Recrutement\" target=\"_blank\" rel=\"noopener\">Nous recrutons</a></div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apropos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                                                            </div>

                                                        </div>
                                                    </div>

                                                </div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\"><a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_produits_villes", array("ville" => "oran"));
        echo "\" title=\"Immobilier Oran\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\" img-box-large=\"\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/f81bf09b30ee304735843b43f68a6cb2acb42ec8.jpeg"), "html", null, true);
        echo "); height: 450px\"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\" style=\"    font-size: 30px;\">Oran</h3><p></p>
                                                                <p class=\"subtitle\">Oran vous dévoile ses meilleurs atouts dans les plus beaux quartiers</p>
                                                                <p class=\"learn-more\">En savoir plus sur nos biens à Oran</p>
                                                                <p></p></div></div></a></div></div></div></div></div></div>

                            <div class=\"home-separator-4\"></div>

                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\"><a  href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\" title=\"Immobilier International\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/International.jpg"), "html", null, true);
        echo "); \"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\">international</h3><p></p>
                                                                <p class=\"subtitle\">Découvrez Lyon, Alicante, Paris, Marseille…</p>
                                                                <p class=\"learn-more\">Voir les biens</p>
                                                                <p></p></div></div></a></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \">
                                                <div class=\"wpb_wrapper\"><a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\" title=\"Immobilier Programes Neufs\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\" style=\"background-image: url(https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2015/07/shoootin-photo-15.jpg); \"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\">Programmes Neufs</h3><p></p>
                                                                <p class=\"subtitle\">Les programmes neufs les plus séduisants du marché</p>
                                                                <p class=\"learn-more\">Voir les biens</p>
                                                                <p></p></div></div></a></div>
                                            </div></div>
                                        ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 203
            echo "

                                                <div class=\"wpb_column vc_column_container vc_col-sm-4\">
                                                    <div class=\"vc_column-inner \">
                                                        <div class=\"wpb_wrapper\">
                                                            <a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_produits_types", array("id" => twig_get_attribute($this->env, $this->source, $context["type"], "slug", array()))), "html", null, true);
            echo "\" title=\"Immobilier Vente ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "nom", array()), "html", null, true);
            echo "\" class=\"img-box mf_image_box mf-table\" style=\"    padding-bottom: 45px;\">
                                                                <div class=\"img-box mf_image_box \" style=\"background-image: url(";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["type"], "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
            echo "); \">

                                                                    <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\">
                                                                            <h3 class=\"all-caps\" style=\"font-size: 30px;\" >";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "nom", array()), "html", null, true);
            echo "</h3>
                                                                            <p class=\"subtitle\"  >";
            // line 213
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "texte", array()), 0, 60) . "..."), "html", null, true);
            echo "</p>
                                                                            <p class=\"learn-more\">Voir les biens</p>
                                                                        </div></div></div></a></div></div></div>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "

                                    </div></div></div>

                            <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\">

                                        <div class=\"home-separator-4\"></div>

                                        <!-- Title Row -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">

                                                                    ";
        // line 237
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 237, $this->source); })())), "html", null, true);
        echo " Résultats

                                                                </span>
                                                                <a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_alert");
        echo "\"><span class=\"create-alert\">Créer une alerte</span></a>


                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block center-title-block\">
                                                                <h2>Nos offres exclusives</h2>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block right-title-block\">

                                                                <a href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_search", array("ville" => "all", "transaction" => "all", "duree" => "all", "types" => "Array", "exclusiv" => "oui")), "html", null, true);
        echo "\"><span class=\"all-offers\">Toutes les offres</span></a>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Row with offers 2 -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">

                                                    ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 279, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exclusive"]) {
            // line 280
            echo "
                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url(";
            // line 286
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                                        <a title=\"";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "  Algérie\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf ";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "ref", array()), "html", null, true);
            echo "</div>
                                                                            <div class=\"oli-photos-count\">
                                                                                ";
            // line 298
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array())), "html", null, true);
            echo "   photos
                                                                                </div>

                                                                        </div>
                                                                        <a title=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "  Algérie\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">
                                                                            <h3 class=\"oli-title\">
                                                                                ";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "
                                                                            </h3>
                                                                        </a>
                                                                        <a title=\"";
            // line 307
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "  Algérie\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">";
            if ((twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()) == "Location")) {
                echo " Location ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "duree", array()), "html", null, true);
            } else {
                echo " Vente ";
            }
            echo "</a>


                                                                        <div class=\"oli-description\">
                                                                            ";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "types", array()), "html", null, true);
            echo ", <span class=\"mf-city\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exclusive"], "categories", array()), "nom", array()), "html", null, true);
            echo "</span>, ";
            if (twig_get_attribute($this->env, $this->source, $context["exclusive"], "surface", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "surface", array()), "html", null, true);
                echo " m<sup>2</sup>  ";
            }
            echo "             <br>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "text2", array()), "html", null, true);
            echo "                 </div>



                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array())) {
                // line 317
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array()), "html", null, true);
                echo "

                                                                            ";
            } else {
                // line 320
                echo "
                                                                                Prix ​​sur demande
                                                                            ";
            }
            // line 323
            echo "

                                                                        </div>



                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exclusive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "




                                                </div>
                                            </div>
                                        </div>


                                        <!-- Title Row -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">";
        // line 356
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 356, $this->source); })())), "html", null, true);
        echo " Résultats</span>
                                                                <a href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_alert");
        echo "\"><span class=\"create-alert\">Créer une alerte</span></a>


                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block center-title-block\">
                                                                <h2>Nos dernières annonces</h2>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block right-title-block\">

                                                                <a href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_search", array("ville" => "all", "transaction" => "all", "duree" => "all", "types" => "Array", "exclusiv" => "all")), "html", null, true);
        echo "\"><span class=\"all-offers\">Toutes les offres</span></a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row with offers 2 -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">

                                                    ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 393, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 394
            echo "
                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url(";
            // line 400
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                                        <a title=\"";
            // line 401
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo " Algérie\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf ";
            // line 410
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "ref", array()), "html", null, true);
            echo "</div>
                                                                            <div class=\"oli-photos-count\">";
            // line 411
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array())), "html", null, true);
            echo " photos</div>

                                                                        </div>
                                                                        <a title=\"";
            // line 414
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">
                                                                            <h3 class=\"oli-title\">
                                                                                ";
            // line 416
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "
                                                                            </h3>
                                                                        </a>
                                                                        <a title=\"";
            // line 419
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\" rel=\"canonical\">";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Location")) {
                echo " Location ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "duree", array()), "html", null, true);
                echo " ";
            } else {
                echo " Vente ";
            }
            echo "</a>

                                                                        <div class=\"oli-description\">
                                                                            ";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "types", array()), "html", null, true);
            echo ", <span class=\"mf-city\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "nom", array()), "html", null, true);
            echo "</span>, ";
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "surface", array())) {
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "surface", array()), "html", null, true);
                echo " m<sup>2</sup>  ";
            }
            echo "                     <br>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "text2", array()), "html", null, true);
            echo "           </div>


                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            ";
            // line 426
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array())) {
                // line 427
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
                echo "


                                                                            ";
            } else {
                // line 431
                echo "
                                                                                Prix ​​sur demande
                                                                            ";
            }
            // line 434
            echo "

                                                                        </div>



                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        echo "




                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>


                            <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                            <h2 class=\"margin-top\">Nos Réseaux Sociaux</h2>
                                        </div>
                                        <center>
                                            <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">

                                                <a href=\"https://www.facebook.com/glsoran/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.jpg"), "html", null, true);
        echo ")\">
                                                    <div class=\"readmore\"><i class=\"fa fa-facebook fa-6\" aria-hidden=\"true\"></i></div>


                                                    <div class=\"overlay\"></div>
                                                </a>

                                            </div>


                                            <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                                <a href=\"https://www.instagram.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 487
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
        // line 497
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
        // line 507
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

                            *
                            <div class=\"home-separator-4\"></div>
                            <!-- Newsletter / Rcruitment -->
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section nl_rc\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">

                                                <div class=\"newsletter-block mf-table\">
                                                    <div class=\"mf-table-cell\" style=\"    text-align: center;\">
                                                        <h2>Newsletter</h2>
                                                        <p>Recevez par email toutes les informations et <br> dernières annonces Global Luxury Services.</p>
                                                        <!-- MailChimp for WordPress v2.3.18 - https://wordpress.org/plugins/mailchimp-for-wp/ --><div id=\"mc4wp-form-1\" class=\"form mc4wp-form\"><form method=\"post\"><input class=\"nl-email\" type=\"email\" name=\"EMAIL\" placeholder=\"Email\" required=\"required\">

                                                                <input class=\"nl-btn\" type=\"submit\" value=\"OK\"><div style=\"display: none;\"><input type=\"text\" name=\"_mc4wp_ho_b22713e89e30cb18669337f81df50424\" value=\"\" tabindex=\"-1\" autocomplete=\"off\"></div><input type=\"hidden\" name=\"_mc4wp_timestamp\" value=\"1518977793\"><input type=\"hidden\" name=\"_mc4wp_form_id\" value=\"0\"><input type=\"hidden\" name=\"_mc4wp_form_element_id\" value=\"mc4wp-form-1\"><input type=\"hidden\" name=\"_mc4wp_form_submit\" value=\"1\"><input type=\"hidden\" name=\"_mc4wp_form_nonce\" value=\"9ef3b8b7a9\"></form></div><!-- / MailChimp for WordPress Plugin -->\t                \t</div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"recruitment-block mf-table\">
                                                    <a  target=\"_blank\" class=\"mf-table-cell\">
                                                        <h2>Découvrez notre<br> catalogue interactif</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"home-separator-4\"></div>





                        </div>
                    </div>
                    <div class=\"content_bottom\">
                    </div>

                </div>
            </div>
        </div>









    </div>

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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){

            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
            jQuery(\".transaction\").select2({

                allowClear: false,
                minimumResultsForSearch: Infinity
            });

            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
            jQuery(\".duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });



            jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"175px\"  } );
            jQuery(window).resize(function(){

                if (jQuery(window).width() <= 480) {

                    jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"100%\"  } );


                }else {
                    jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"175px\"  } );

                }

            });

            jQuery('#searchban2_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#searchban2_duree').next(\".select2-container\").show('easing');
                    jQuery('.home_header_search_box').css( {\"max-width\":\"935px\"} );

                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#searchban2_duree').next(\".select2-container\").hide();
                    jQuery('.home_header_search_box').css( {\"max-width\":\"747px\"} );
                }

            });
        })



    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Cosanit/Default/immobilier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  955 => 507,  942 => 497,  929 => 487,  915 => 476,  885 => 448,  866 => 434,  861 => 431,  853 => 427,  851 => 426,  832 => 422,  812 => 419,  806 => 416,  795 => 414,  789 => 411,  785 => 410,  769 => 401,  765 => 400,  757 => 394,  753 => 393,  736 => 379,  711 => 357,  707 => 356,  686 => 337,  667 => 323,  662 => 320,  655 => 317,  653 => 316,  634 => 311,  616 => 307,  610 => 304,  601 => 302,  594 => 298,  589 => 296,  573 => 287,  569 => 286,  561 => 280,  557 => 279,  538 => 263,  512 => 240,  506 => 237,  485 => 218,  474 => 213,  470 => 212,  464 => 209,  458 => 208,  451 => 203,  447 => 202,  439 => 197,  430 => 193,  417 => 185,  410 => 180,  402 => 178,  398 => 177,  394 => 176,  389 => 175,  385 => 174,  372 => 163,  359 => 158,  355 => 156,  351 => 155,  344 => 151,  327 => 137,  320 => 133,  316 => 132,  311 => 130,  307 => 129,  302 => 127,  298 => 126,  293 => 124,  289 => 123,  284 => 121,  233 => 73,  229 => 72,  225 => 71,  221 => 70,  217 => 69,  213 => 68,  209 => 67,  202 => 63,  197 => 61,  193 => 60,  189 => 59,  185 => 58,  181 => 57,  177 => 56,  172 => 54,  166 => 51,  146 => 40,  115 => 11,  109 => 10,  101 => 8,  95 => 7,  83 => 6,  71 => 5,  57 => 4,  43 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block ogurl %} {{ absolute_url(path('cosanit_immobilier')) }} {% endblock %}
{% block ogimg %} {{ absolute_url(asset('img/gls.jpg')) }} {% endblock %}
{% block title %}Immobilier Oran Alger | Location / Vente  Appartement, Villas - Algérie {% endblock %}
{% block description %} Immobilier Oran Algérie Algé location & vente appratement F2 F3 F4 F5 F6, location / villa, duplex, loft Alger Oran algerie   {% endblock %}
{% block canonical %}

{% endblock %}
{% block body %}
<style>

    .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
        color: #000;
    }
    .home_header_search_box {
        max-width: 747px;
        margin: 0 auto;
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


            <div class=\"content \">
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

                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2016/03/hero-about.jpg);height:0px;\">
                            <div class=\"title_holder\" style=\"     padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">
                                                        <hgroup>
                                                            <h1>Immobilier de prestige</h1>
                                                            <h2>Global Luxury Services vous propose une sélection de biens immobiliers de prestige à Oran, à Alger et à l’international</h2>
                                                        </hgroup>
                                                    </div>

                                                    <div class=\"home_header_search_box\">
                                                        <div class=\"mf-form\">
                                                            <div id=\"loader\" ></div>

                                                            {{ form_start(form, {'attr': {'id': 'prop-search', 'method': 'POST'} }) }}

                                                            {{ form_widget(form.transaction,{'attr': {'class': 'transaction',}}) }}
                                                            {{ form_errors(form.transaction) }}

                                                            {{ form_widget(form.duree,{'attr': {'class': 'duree',}}) }}
                                                            {{ form_errors(form.duree) }}

                                                            {{ form_widget(form.categories,{'attr': {'class': 'ou',}}) }}
                                                            {{ form_errors(form.categories) }}

                                                            {{ form_widget(form.quoi,{'attr': {'class': 'Ngawass',}}) }}
                                                            {{ form_errors(form.quoi) }}


                                                            <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\">
                                                            {{ form_end(form) }}
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 2, thumbnailNavigation: 'disabled', skinsPath: '{{ asset('Bannieres/') }}'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">


                                    {% for banner in banners %}

                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"{{ asset('Bannieres/'~banner.path) }}\" data-src=\"{{ asset('Bannieres/'~banner.path) }}\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: hidden;\">
                                            <div class=\"ls-gpuhack\"></div>
                                        </div>

                                    {% endfor %}


                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
                    </div>
                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">

                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\"><div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                    <div class=\"wpb_text_column wpb_content_element \">
                                                        <div class=\"wpb_wrapper\">
                                                            <div class=\"home-info less-padding\" style=\"    padding: 0px 20px;\">
                                                                {% for apropos in apropos %}
                                                                    <h2 class=\"red-text\">{{ apropos.titre }}</h2>
                                                                    <p>{{ apropos.text }}</p>
                                                                    <div class=\"vc_col-lg-6 vc_col-md-12 vc_col-sm-12 vc_col-xs-12\"><a class=\"btn-readmore\" href=\"{{ path('cosanit_apropos') }}\" title=\"A propos de GLS \">Qui sommes nous ?</a></div>
                                                                    <div class=\"vc_col-lg-6 vc_col-md-12 vc_col-sm-12 vc_col-xs-12\"><a class=\"btn-readmore btn-search\" href=\"{{ path('cosanit_recrutement') }}\" title=\"GLS Recrutement\" target=\"_blank\" rel=\"noopener\">Nous recrutons</a></div>
                                                                {% endfor %}
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-6\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\"><a href=\"{{ path('cosanit_produits_villes',{ville: 'oran'}) }}\" title=\"Immobilier Oran\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\" img-box-large=\"\" style=\"background-image: url({{ asset('photos_produits/f81bf09b30ee304735843b43f68a6cb2acb42ec8.jpeg') }}); height: 450px\"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\" style=\"    font-size: 30px;\">Oran</h3><p></p>
                                                                <p class=\"subtitle\">Oran vous dévoile ses meilleurs atouts dans les plus beaux quartiers</p>
                                                                <p class=\"learn-more\">En savoir plus sur nos biens à Oran</p>
                                                                <p></p></div></div></a></div></div></div></div></div></div>

                            <div class=\"home-separator-4\"></div>

                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\"><a  href=\"{{ path('cosanit_internationals') }}\" title=\"Immobilier International\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\"  style=\"background-image: url({{ asset('img/International.jpg') }}); \"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\">international</h3><p></p>
                                                                <p class=\"subtitle\">Découvrez Lyon, Alicante, Paris, Marseille…</p>
                                                                <p class=\"learn-more\">Voir les biens</p>
                                                                <p></p></div></div></a></div></div></div><div class=\"wpb_column vc_column_container vc_col-sm-4\"><div class=\"vc_column-inner \">
                                                <div class=\"wpb_wrapper\"><a href=\"{{ path('cosanit_investissement') }}\" title=\"Immobilier Programes Neufs\" class=\"img-box mf_image_box mf-table <div class=\" img-box=\"\" mf_image_box=\"\" style=\"background-image: url(https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/uploads/2015/07/shoootin-photo-15.jpg); \"> <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\"><h3 class=\"all-caps\">Programmes Neufs</h3><p></p>
                                                                <p class=\"subtitle\">Les programmes neufs les plus séduisants du marché</p>
                                                                <p class=\"learn-more\">Voir les biens</p>
                                                                <p></p></div></div></a></div>
                                            </div></div>
                                        {% for type in types %}


                                                <div class=\"wpb_column vc_column_container vc_col-sm-4\">
                                                    <div class=\"vc_column-inner \">
                                                        <div class=\"wpb_wrapper\">
                                                            <a href=\"{{ path('cosanit_produits_types',{id: type.slug}) }}\" title=\"Immobilier Vente {{ type.nom }}\" class=\"img-box mf_image_box mf-table\" style=\"    padding-bottom: 45px;\">
                                                                <div class=\"img-box mf_image_box \" style=\"background-image: url({{ asset('photos_produits/'~type.photo[0].path) }}); \">

                                                                    <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\">
                                                                            <h3 class=\"all-caps\" style=\"font-size: 30px;\" >{{ type.nom }}</h3>
                                                                            <p class=\"subtitle\"  >{{ type.texte[:60] ~ '...'  }}</p>
                                                                            <p class=\"learn-more\">Voir les biens</p>
                                                                        </div></div></div></a></div></div></div>

                                        {% endfor %}


                                    </div></div></div>

                            <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\">

                                        <div class=\"home-separator-4\"></div>

                                        <!-- Title Row -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">

                                                                    {{ exclusives|length }} Résultats

                                                                </span>
                                                                <a href=\"{{ path('cosanit_alert') }}\"><span class=\"create-alert\">Créer une alerte</span></a>


                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block center-title-block\">
                                                                <h2>Nos offres exclusives</h2>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block right-title-block\">

                                                                <a href=\"{{ path('cosanit_search',{ 'ville': 'all','transaction': 'all','duree': 'all' ,'types': 'Array','exclusiv':'oui'}) }}\"><span class=\"all-offers\">Toutes les offres</span></a>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Row with offers 2 -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">

                                                    {% for exclusive in exclusives %}

                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url({{ asset('photos_produits/')~ exclusive.image1[0].path }});\">
                                                                        <a title=\"{{ exclusive.type }} {{ exclusive.titre }}  Algérie\" href=\"{{ path('cosanit_show', { 'id': exclusive.slug }) }}\" rel=\"canonical\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf {{ exclusive.ref }}</div>
                                                                            <div class=\"oli-photos-count\">
                                                                                {{ exclusive.image1|length }}   photos
                                                                                </div>

                                                                        </div>
                                                                        <a title=\"{{ exclusive.type }} {{ exclusive.titre }}  Algérie\" href=\"{{ path('cosanit_show', {'id': exclusive.slug }) }}\" rel=\"canonical\">
                                                                            <h3 class=\"oli-title\">
                                                                                {{ exclusive.titre }}
                                                                            </h3>
                                                                        </a>
                                                                        <a title=\"{{ exclusive.type }} {{ exclusive.titre }}  Algérie\" href=\"{{ path('cosanit_show', {'id': exclusive.slug }) }}\" rel=\"canonical\">{% if exclusive.type == 'Location' %} Location {{ exclusive.duree }}{% else %} Vente {% endif %}</a>


                                                                        <div class=\"oli-description\">
                                                                            {{ exclusive.type }}  {{ exclusive.types }}, <span class=\"mf-city\">{{ exclusive.categories.nom }}</span>, {% if exclusive.surface %}{{ exclusive.surface }} m<sup>2</sup>  {% endif %}             <br>  {{ exclusive.text2 }}                 </div>



                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            {% if exclusive.prix %}
                                                                                {{ exclusive.prix }}

                                                                            {% else %}

                                                                                Prix ​​sur demande
                                                                            {% endif %}


                                                                        </div>



                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    {% endfor %}





                                                </div>
                                            </div>
                                        </div>


                                        <!-- Title Row -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">{{ produits|length }} Résultats</span>
                                                                <a href=\"{{ path('cosanit_alert') }}\"><span class=\"create-alert\">Créer une alerte</span></a>


                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block center-title-block\">
                                                                <h2>Nos dernières annonces</h2>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block right-title-block\">

                                                                <a href=\"{{ path('cosanit_search',{ 'ville': 'all','transaction': 'all','duree': 'all' ,'types': 'Array','exclusiv':'all'}) }}\"><span class=\"all-offers\">Toutes les offres</span></a>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row with offers 2 -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">

                                                    {% for produit in produits %}

                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url({{ asset('photos_produits/')~ produit.image1[0].path }});\">
                                                                        <a title=\"{{ produit.type }} {{ produit.titre }} Algérie\" href=\"{{ path('cosanit_show',{'id':produit.slug}) }}\" rel=\"canonical\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf {{ produit.ref }}</div>
                                                                            <div class=\"oli-photos-count\">{{ produit.image1|length }} photos</div>

                                                                        </div>
                                                                        <a title=\"{{ produit.type }} {{ produit.titre }} {{ produit.categories }}\" href=\"{{ path('cosanit_show', {'id': produit.slug }) }}\" rel=\"canonical\">
                                                                            <h3 class=\"oli-title\">
                                                                                {{ produit.titre }}
                                                                            </h3>
                                                                        </a>
                                                                        <a title=\"{{ produit.type }} {{ produit.titre }} {{ produit.categories}}\" href=\"{{ path('cosanit_show', {'id': produit.slug }) }}\" rel=\"canonical\">{% if produit.type == 'Location' %} Location {{ produit.duree }} {% else %} Vente {% endif %}</a>

                                                                        <div class=\"oli-description\">
                                                                            {{ produit.type }}  {{ produit.types }}, <span class=\"mf-city\">{{ produit.categories.nom }}</span>, {% if produit.surface %}  {{ produit.surface }} m<sup>2</sup>  {% endif %}                     <br>  {{ produit.text2 }}           </div>


                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            {% if produit.prix %}
                                                                                {{ produit.prix }}


                                                                            {% else %}

                                                                                Prix ​​sur demande
                                                                            {% endif %}


                                                                        </div>



                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    {% endfor %}





                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>


                            <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                            <h2 class=\"margin-top\">Nos Réseaux Sociaux</h2>
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

                            *
                            <div class=\"home-separator-4\"></div>
                            <!-- Newsletter / Rcruitment -->
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section nl_rc\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">

                                                <div class=\"newsletter-block mf-table\">
                                                    <div class=\"mf-table-cell\" style=\"    text-align: center;\">
                                                        <h2>Newsletter</h2>
                                                        <p>Recevez par email toutes les informations et <br> dernières annonces Global Luxury Services.</p>
                                                        <!-- MailChimp for WordPress v2.3.18 - https://wordpress.org/plugins/mailchimp-for-wp/ --><div id=\"mc4wp-form-1\" class=\"form mc4wp-form\"><form method=\"post\"><input class=\"nl-email\" type=\"email\" name=\"EMAIL\" placeholder=\"Email\" required=\"required\">

                                                                <input class=\"nl-btn\" type=\"submit\" value=\"OK\"><div style=\"display: none;\"><input type=\"text\" name=\"_mc4wp_ho_b22713e89e30cb18669337f81df50424\" value=\"\" tabindex=\"-1\" autocomplete=\"off\"></div><input type=\"hidden\" name=\"_mc4wp_timestamp\" value=\"1518977793\"><input type=\"hidden\" name=\"_mc4wp_form_id\" value=\"0\"><input type=\"hidden\" name=\"_mc4wp_form_element_id\" value=\"mc4wp-form-1\"><input type=\"hidden\" name=\"_mc4wp_form_submit\" value=\"1\"><input type=\"hidden\" name=\"_mc4wp_form_nonce\" value=\"9ef3b8b7a9\"></form></div><!-- / MailChimp for WordPress Plugin -->\t                \t</div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"recruitment-block mf-table\">
                                                    <a  target=\"_blank\" class=\"mf-table-cell\">
                                                        <h2>Découvrez notre<br> catalogue interactif</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"home-separator-4\"></div>





                        </div>
                    </div>
                    <div class=\"content_bottom\">
                    </div>

                </div>
            </div>
        </div>









    </div>

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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){

            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
            jQuery(\".transaction\").select2({

                allowClear: false,
                minimumResultsForSearch: Infinity
            });

            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
            jQuery(\".duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });



            jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"175px\"  } );
            jQuery(window).resize(function(){

                if (jQuery(window).width() <= 480) {

                    jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"100%\"  } );


                }else {
                    jQuery('#searchban2_duree').next(\".select2-container\").css( { display: \"none\",width: \"175px\"  } );

                }

            });

            jQuery('#searchban2_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#searchban2_duree').next(\".select2-container\").show('easing');
                    jQuery('.home_header_search_box').css( {\"max-width\":\"935px\"} );

                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#searchban2_duree').next(\".select2-container\").hide();
                    jQuery('.home_header_search_box').css( {\"max-width\":\"747px\"} );
                }

            });
        })



    </script>

{% endblock %}", "@Cosanit/Default/immobilier.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\immobilier.html.twig");
    }
}
