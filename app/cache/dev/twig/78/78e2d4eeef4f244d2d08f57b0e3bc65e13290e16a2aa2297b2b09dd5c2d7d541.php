<?php

/* @Cosanit/Default/intershow.html.twig */
class __TwigTemplate_ce77a2a831b5ea5b7421e7b29aa296905f97b6fae2f44f0c876301e248f8bf1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/intershow.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/intershow.html.twig"));

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
        .select2-container{
            width: 188px !important;
        }
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }

        .home_header_search_box {
            max-width: 771px;
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
        // line 38
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
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 71
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
                        .home .top_slider {
                            background: url(";
        // line 98
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 98, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo ") no-repeat 50% 50%;
                            background-size: cover;
                        }
                    </style>

                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(";
        // line 104
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 104, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo ");height:0px;\">
                            <div class=\"title_holder\" style=\"     padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">
                                                        <hgroup>
                                                            <h1>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 114, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "</h1>
                                                            <h2>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 115, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo "</h2>
                                                        </hgroup>
                                                    </div>

                                                    <div class=\"home_header_search_box\">
                                                        <div class=\"mf-form\">
                                                            <div id=\"loader\" ></div>

                                                            ";
        // line 123
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "method" => "POST")));
        echo "

                                                            ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 125, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "transaction")));
        echo "
                                                            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                                            ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "duree")));
        echo "
                                                            ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 129, $this->source); })()), "duree", array()), 'errors');
        echo "

                                                            ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "ou")));
        echo "
                                                            ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->source); })()), "categories", array()), 'errors');
        echo "

                                                            ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->source); })()), "quoi", array()), 'widget', array("attr" => array("class" => "quoi")));
        echo "
                                                            ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), "quoi", array()), 'errors');
        echo "


                                                            <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\">
                                                            ";
        // line 139
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
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
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        echo "'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 160, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 160, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: hidden;\">
                                            <div class=\"ls-gpuhack\"></div>
                                        </div>




                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
                    </div>



                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">



                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-lg-4 vc_col-md-4 vc_col-sm-4 vc_col-xs-12 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"universe_text\">
                                                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 184
            echo "
                                                        <h2 class=\"red-text\">";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", array()), "html", null, true);
            echo "</h2>
                                                        <div class=\"description\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "texte", array()), "html", null, true);
            echo "<br>

                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "
                                                </div><!-- universe_text -->

                                            </div>
                                        </div>
                                        <div class=\"vc_col-lg-8 vc_col-md-8 vc_col-sm-8 vc_col-xs-12 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div id=\"universe-gallery\" class=\"universe-gallery\">
                                                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 198, $this->source); })()), 0, array(), "array"), "photo", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 199
            echo "                                                        ";
            $context["number"] = 0;
            // line 200
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                // line 201
                echo "                                                            <div class=\"two-cols\">
                                                                <div id=\"img-";
                // line 202
                echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 202, $this->source); })()), "html", null, true);
                echo "\" class=\"img-item\" style=\"background: url('";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
                echo "') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>See the photos</p></div>
                                                                </div>

                                                            </div>
                                                        ";
            } else {
                // line 208
                echo "                                                            <div class=\"four-cols \">
                                                                <div id=\"img-";
                // line 209
                echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 209, $this->source); })()), "html", null, true);
                echo "\" class=\"img-item\" style=\"background: url('";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
                echo "') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>See the photos</p></div>
                                                                </div>



                                                            </div>



                                                        ";
            }
            // line 220
            echo "                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "


                                                    <ul id=\"light-gallery\" class=\"gallery\">

                                                        ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 226, $this->source); })()), 0, array(), "array"), "photo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 227
            echo "                                                            <li data-src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
            echo "\" data-sub-html=\"\">
                                                                <a href=\"#\"><img src=\"";
            // line 228
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 228, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo "\"></a>
                                                            </li>

                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- Latest Exclusive block -->
                            <div class=\"home-separator-3\"></div>

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
        // line 264
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 264, $this->source); })())), "html", null, true);
        echo " Résultats

                                                                </span>
                                                                <a href=\"";
        // line 267
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_alert");
        echo "\"><span class=\"create-alert\">Créer une alerte</span></a>


                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block center-title-block\">
                                                                <h2>Coups de coeur</h2>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block right-title-block\">

                                                                <a href=\"";
        // line 290
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
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 306, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exclusive"]) {
            // line 307
            echo "
                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url(";
            // line 313
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                                        <a title=\"";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "categories", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf ";
            // line 323
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "ref", array()), "html", null, true);
            echo "</div>
                                                                            <div class=\"oli-photos-count\">
                                                                                ";
            // line 325
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array())), "html", null, true);
            echo "   photos
                                                                            </div>

                                                                        </div>
                                                                        <a href=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">
                                                                            <h3 class=\"oli-title\">
                                                                                ";
            // line 331
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "
                                                                            </h3>
                                                                        </a>
                                                                        <a href=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()) == "Location")) {
                echo " à louer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "duree", array()), "html", null, true);
            } else {
                echo " en vente ";
            }
            echo "</a>


                                                                        <div class=\"oli-description\">
                                                                            ";
            // line 338
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
            echo "                          </div>



                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            ";
            // line 343
            if (twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array())) {
                // line 344
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array()), "html", null, true);
                echo "


                                                                            ";
            } else {
                // line 348
                echo "
                                                                                Prix ​​sur demande
                                                                            ";
            }
            // line 351
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
        // line 365
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
        // line 384
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 384, $this->source); })())), "html", null, true);
        echo " Résultats</span>
                                                                <a href=\"";
        // line 385
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
        // line 407
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
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 421, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 422
            echo "
                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url(";
            // line 428
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                                        <a title=\"";
            // line 429
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf ";
            // line 438
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "ref", array()), "html", null, true);
            echo "</div>
                                                                            <div class=\"oli-photos-count\">";
            // line 439
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array())), "html", null, true);
            echo " photos</div>

                                                                        </div>
                                                                        <a href=\"";
            // line 442
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                                            <h3 class=\"oli-title\">
                                                                                ";
            // line 444
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "
                                                                            </h3>
                                                                        </a>
                                                                        <a href=\"";
            // line 447
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Location")) {
                echo " à louer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "duree", array()), "html", null, true);
                echo " ";
            } else {
                echo " en vente";
            }
            echo "</a>

                                                                        <div class=\"oli-description\">
                                                                            ";
            // line 450
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
            echo "                          </div>


                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            ";
            // line 454
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array())) {
                // line 455
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
                echo "


                                                                            ";
            } else {
                // line 459
                echo "
                                                                                Prix ​​sur demande
                                                                            ";
            }
            // line 462
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
        // line 476
        echo "




                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>








                        </div>



                    </div>


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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){

            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: false,


                minimumResultsForSearch: Infinity
            });



            jQuery(\".transaction\").select2({

                allowClear: false,
                minimumResultsForSearch: Infinity
            });

            jQuery(\".duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });

            jQuery('#internationalban_duree').next(\".select2-container\").css( { display: \"none\",width: \"771px\"  } );

            jQuery('#internationalban_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#internationalban_duree').next(\".select2-container\").show('easing');
                    jQuery('.home_header_search_box').css( {\"max-width\":\"959px\"} );

                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#internationalban_duree').next(\".select2-container\").hide();
                    jQuery('.home_header_search_box').css( {\"max-width\":\"771px\"} );
                }

            });

            jQuery('.ou' ).val(";
        // line 642
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 642, $this->source); })()), 0, array(), "array"), "id", array()), "html", null, true);
        echo ").trigger(\"change\");
        })



    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Cosanit/Default/intershow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1023 => 642,  855 => 476,  836 => 462,  831 => 459,  823 => 455,  821 => 454,  804 => 450,  790 => 447,  784 => 444,  779 => 442,  773 => 439,  769 => 438,  751 => 429,  747 => 428,  739 => 422,  735 => 421,  718 => 407,  693 => 385,  689 => 384,  668 => 365,  649 => 351,  644 => 348,  636 => 344,  634 => 343,  617 => 338,  603 => 334,  597 => 331,  592 => 329,  585 => 325,  580 => 323,  562 => 314,  558 => 313,  550 => 307,  546 => 306,  527 => 290,  501 => 267,  495 => 264,  461 => 232,  449 => 228,  444 => 227,  440 => 226,  433 => 221,  419 => 220,  403 => 209,  400 => 208,  389 => 202,  386 => 201,  383 => 200,  380 => 199,  363 => 198,  353 => 190,  343 => 186,  339 => 185,  336 => 184,  332 => 183,  304 => 160,  294 => 153,  277 => 139,  270 => 135,  266 => 134,  261 => 132,  257 => 131,  252 => 129,  248 => 128,  243 => 126,  239 => 125,  234 => 123,  223 => 115,  219 => 114,  206 => 104,  197 => 98,  167 => 71,  163 => 70,  159 => 69,  155 => 68,  151 => 67,  147 => 66,  143 => 65,  136 => 61,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  111 => 54,  106 => 52,  100 => 49,  80 => 38,  44 => 4,  38 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <style>
        .select2-container{
            width: 188px !important;
        }
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }

        .home_header_search_box {
            max-width: 771px;
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
                        .home .top_slider {
                            background: url({{ asset('photos_produits/')~villes[0].photo[0].path }}) no-repeat 50% 50%;
                            background-size: cover;
                        }
                    </style>

                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url({{ asset('photos_produits/')~villes[0].photo[0].path }});height:0px;\">
                            <div class=\"title_holder\" style=\"     padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">
                                                        <hgroup>
                                                            <h1>{{ villes[0].nom }}</h1>
                                                            <h2>{{ villes[0].titre }}</h2>
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

                                                            {{ form_widget(form.quoi,{'attr': {'class': 'quoi',}}) }}
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
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 2, thumbnailNavigation: 'disabled', skinsPath: '{{ asset('images/') }}'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"{{ asset('photos_produits/')~villes[0].photo[0].path  }}\" data-src=\"{{ asset('photos_produits/')~villes[0].photo[0].path }}\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: hidden;\">
                                            <div class=\"ls-gpuhack\"></div>
                                        </div>




                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
                    </div>



                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">



                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-lg-4 vc_col-md-4 vc_col-sm-4 vc_col-xs-12 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"universe_text\">
                                                    {% for ville in villes %}

                                                        <h2 class=\"red-text\">{{ ville.nom }}</h2>
                                                        <div class=\"description\">{{ ville.texte }}<br>

                                                        </div>
                                                    {% endfor %}

                                                </div><!-- universe_text -->

                                            </div>
                                        </div>
                                        <div class=\"vc_col-lg-8 vc_col-md-8 vc_col-sm-8 vc_col-xs-12 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div id=\"universe-gallery\" class=\"universe-gallery\">
                                                    {% for produit in villes[0].photo %}
                                                        {% set number = 0 %}
                                                        {% if loop.first %}
                                                            <div class=\"two-cols\">
                                                                <div id=\"img-{{ number }}\" class=\"img-item\" style=\"background: url('{{ asset('photos_produits/')~produit.path }}') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>See the photos</p></div>
                                                                </div>

                                                            </div>
                                                        {% else %}
                                                            <div class=\"four-cols \">
                                                                <div id=\"img-{{ number }}\" class=\"img-item\" style=\"background: url('{{ asset('photos_produits/')~produit.path }}') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>See the photos</p></div>
                                                                </div>



                                                            </div>



                                                        {% endif %}
                                                    {% endfor %}



                                                    <ul id=\"light-gallery\" class=\"gallery\">

                                                        {% for produit in villes[0].photo %}
                                                            <li data-src=\"{{ asset('photos_produits/')~produit.path }}\" data-sub-html=\"\">
                                                                <a href=\"#\"><img src=\"{{ asset('photos_produits/')~produit.path }}\" data-description=\"{{ villes[0].nom }}\"></a>
                                                            </li>

                                                        {% endfor %}
                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- Latest Exclusive block -->
                            <div class=\"home-separator-3\"></div>

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
                                                                <h2>Coups de coeur</h2>
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
                                                                        <a title=\"{{ exclusive.type }} {{ exclusive.titre }} {{ exclusive.categories }}\" href=\"{{ path('cosanit_show', { 'id': exclusive.slug }) }}\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf {{ exclusive.ref }}</div>
                                                                            <div class=\"oli-photos-count\">
                                                                                {{ exclusive.image1|length }}   photos
                                                                            </div>

                                                                        </div>
                                                                        <a href=\"{{ path('cosanit_show', { 'id': exclusive.slug }) }}\">
                                                                            <h3 class=\"oli-title\">
                                                                                {{ exclusive.titre }}
                                                                            </h3>
                                                                        </a>
                                                                        <a href=\"{{ path('cosanit_show', { 'id': exclusive.slug }) }}\">{% if exclusive.type == 'Location' %} à louer {{ exclusive.duree }}{% else %} en vente {% endif %}</a>


                                                                        <div class=\"oli-description\">
                                                                            {{ exclusive.type }}  {{ exclusive.types }}, <span class=\"mf-city\">{{ exclusive.categories.nom }}</span>, {% if exclusive.surface %}{{ exclusive.surface }} m<sup>2</sup>  {% endif %}                          </div>



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
                                                                        <a title=\"{{ produit.type }} {{ produit.titre }} {{ produit.categories }}\" href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf {{ produit.ref }}</div>
                                                                            <div class=\"oli-photos-count\">{{ produit.image1|length }} photos</div>

                                                                        </div>
                                                                        <a href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">
                                                                            <h3 class=\"oli-title\">
                                                                                {{ produit.titre }}
                                                                            </h3>
                                                                        </a>
                                                                        <a href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">{% if produit.type == 'Location' %} à louer {{ produit.duree }} {% else %} en vente{% endif %}</a>

                                                                        <div class=\"oli-description\">
                                                                            {{ produit.type }}  {{ produit.types }}, <span class=\"mf-city\">{{ produit.categories.nom }}</span>, {% if produit.surface %}  {{ produit.surface }} m<sup>2</sup>  {% endif %}                          </div>


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








                        </div>



                    </div>


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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){

            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: false,


                minimumResultsForSearch: Infinity
            });



            jQuery(\".transaction\").select2({

                allowClear: false,
                minimumResultsForSearch: Infinity
            });

            jQuery(\".duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });

            jQuery('#internationalban_duree').next(\".select2-container\").css( { display: \"none\",width: \"771px\"  } );

            jQuery('#internationalban_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#internationalban_duree').next(\".select2-container\").show('easing');
                    jQuery('.home_header_search_box').css( {\"max-width\":\"959px\"} );

                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#internationalban_duree').next(\".select2-container\").hide();
                    jQuery('.home_header_search_box').css( {\"max-width\":\"771px\"} );
                }

            });

            jQuery('.ou' ).val({{ villes[0].id }}).trigger(\"change\");
        })



    </script>


{% endblock %}", "@Cosanit/Default/intershow.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\intershow.html.twig");
    }
}
