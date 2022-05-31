<?php

/* CosanitBundle:Default:immobyvilles.html.twig */
class __TwigTemplate_7ed2d36dcb69cc161bf75a3ebdf9cb07400e9eeb735270a168c39eb303625741 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:immobyvilles.html.twig", 2);
        $this->blocks = array(
            'ogurl' => array($this, 'block_ogurl'),
            'ogimg' => array($this, 'block_ogimg'),
            'title' => array($this, 'block_title'),
            'canonical' => array($this, 'block_canonical'),
            'description' => array($this, 'block_description'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:immobyvilles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_ogurl($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogurl"));

        echo "  ";
        
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

        echo "Immobilier ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 5, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo " - Algérie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 7
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_produits_villes", array("ville" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 7, $this->source); })()), 0, array(), "array"), "slug", array()))), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " immobilier ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 9, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo " Algérie location  appartement, villa, duplex, terrains... f2 f3 f4 f5 à vendre ou à louer achat / vente immobilier Oran.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <style>
        .two-cols .img-item {
            height: 280px;
            background-size: cover !important;
            background-repeat: no-repeat;
            position: relative;
        }
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .filter-bar .select2-container {
            width: 215px;
            min-height: 50px;
            padding: 8px;
            margin-bottom: 20px;
            /* padding-bottom: 20px; */
        }
        #search_type2_types {
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
        #search_type2_nc {
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
        #search_type2_np {
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
        #search_type2_transaction{
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
        #search_type2_duree{
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
        #search_type2_categories{
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
            padding: 0px;
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
        // line 166
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
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 183
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 199
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
                    <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 61px;\">
                        <div class=\"mf-advanced-search mobile-hide \">
                            <div class=\"filter-bar auto\">
                                <div class=\"filter-bar-inner\">
                                    <section>

                                        ";
        // line 232
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "methode" => "GET")));
        echo "
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 2px;\"><a href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\">

                                                        <img class=\"normal\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"       width: 95px;
    margin-top: -9px;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    ";
        // line 251
        if (((isset($context["trans"]) || array_key_exists("trans", $context) ? $context["trans"] : (function () { throw new Twig_Error_Runtime('Variable "trans" does not exist.', 251, $this->source); })()) == "Louer: ")) {
            // line 252
            echo "                                                        <li><a href=\"#section-bar-6\" class=\"plus\"><span>Durée</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    ";
        }
        // line 254
        echo "                                                    <li><a href=\"#section-bar-2\" class=\"type\"><span>Type de bien</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-3\" class=\"budget\"><span>Budget</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-4\" class=\"surface\"><span>Surface</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-5\" class=\"plus\"><span>Plus</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                </ul>
                                                <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\"/>



                                            </nav>
                                            <div class=\"content-wrap\">
                                                <section id=\"section-bar-1\">
                                                    <div class=\"two-input-wrap\">


                                                        ";
        // line 269
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 269, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                        ";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->source); })()), "categories", array()), 'errors');
        echo "
                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->source); })()), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->source); })()), "ref", array()), 'errors');
        echo "
                                                        </div>




                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                ";
        // line 285
        if (((isset($context["trans"]) || array_key_exists("trans", $context) ? $context["trans"] : (function () { throw new Twig_Error_Runtime('Variable "trans" does not exist.', 285, $this->source); })()) == "Louer: ")) {
            // line 286
            echo "                                                    <section id=\"section-bar-6\">
                                                        <div class=\"two-input-wrap\">

                                                            ";
            // line 289
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 289, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
            echo "
                                                            ";
            // line 290
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->source); })()), "duree", array()), 'errors');
            echo "
                                                            <div class=\"button-wrap\">
                                                                <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                                <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                            </div>
                                                        </div>
                                                    </section>
                                                ";
        }
        // line 298
        echo "                                                <section id=\"section-bar-2\">
                                                    <div class=\"two-input-wrap\">


                                                        ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "multi-wrap ")));
        echo "
                                                        ";
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->source); })()), "types", array()), 'errors');
        echo "


                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-3\">
                                                    <div class=\"two-input-wrap\">


                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 317
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->source); })()), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 318, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                                            <span>DA</span>
                                                        </div>

                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 323, $this->source); })()), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 324, $this->source); })()), "prixmax", array()), 'errors');
        echo "
                                                            <span>DA</span>
                                                        </div>



                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-3\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-4\">
                                                    <div class=\"two-input-wrap\">
                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 339, $this->source); })()), "surfacemin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 340, $this->source); })()), "surfacemin", array()), 'errors');
        echo "
                                                            <span><span class=\"superscript\">2</span>m</span>
                                                        </div>
                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 344, $this->source); })()), "surfacemax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 345
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 345, $this->source); })()), "surfacemax", array()), 'errors');
        echo "
                                                            <span><span class=\"superscript\">2</span>m</span>
                                                        </div>
                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-4\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-5\">
                                                    <div class=\"inner-wrap\">
                                                        <div class=\"row-wrapper\">
                                                            <div class=\"left-col\">
                                                                <p><span class=\"order-num\">1</span>Type de transaction</p>
                                                                ";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 359, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                ";
        // line 360
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 360, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                                                ";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 362, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                ";
        // line 363
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 363, $this->source); })()), "duree", array()), 'errors');
        echo "
                                                            </div>
                                                            <div class=\"right-col\">
                                                                <p><span class=\"order-num\">2</span>Nombre de chambres</p>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de chambres</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-inner\">
                                                                            ";
        // line 371
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 371, $this->source); })()), "nc", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                                            ";
        // line 372
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 372, $this->source); })()), "nc", array()), 'errors');
        echo "

                                                                        </div>




                                                                    </div>
                                                                </div>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de pièces</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-wrap\">
                                                                            ";
        // line 385
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 385, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                                            ";
        // line 386
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 386, $this->source); })()), "np", array()), 'errors');
        echo "

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-5\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>

                                                </section>
                                            </div><!-- /content -->
                                        </div><!-- /tabs -->
                                        ";
        // line 406
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 406, $this->source); })()), 'form_end');
        echo "

                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(";
        // line 415
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 415, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo ");height:0px;\">
                            <div class=\"title_holder\" style=\"padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">


                                                                <hgroup>
                                                                <h1 style=\"    font-family: 'Lato', sans-serif;     font-size: 60px;
    color: #fff;
    margin-bottom: 0;\">Immobilier ";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 429, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "</h1>
                                                                <h2 style=\"    font-family: 'Lato', sans-serif;    font-size: 24px;
    color: #fff;
    line-height: 1.4;
    margin-bottom: 70px;\">";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 433, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo " vous dévoile ses meilleurs atouts dans les plus beaux quartiers</h2>
                                                                </hgroup>


                                                    </div>

                                                    <div class=\"home_header_search_box\">
                                                        <div class=\"mf-form\">
                                                            <div id=\"loader\" style=\"display: none;\"></div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"mf-advanced-search--mobile\" id=\"search-mobile\" style=\"display: none;\">
                            <div class=\"mf-advanced-search--mobile--header\">
                                <a class=\"link-left\" id=\"back-search\" href=\"#\">Fermer</a>
                                <a id=\"refresh-form\" class=\"link-right reset-search-mobile\">Reset</a>
                            </div>
                            <div class=\"mf-advanced-search--mobile--body\">
                                ";
        // line 461
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 461, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "class" => "cbp-mc-form")));
        echo "

                                <div class=\"cbp-mc-column\">
                                    <p><span class=\"order-num\">1</span>City</p>
                                    ";
        // line 465
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 465, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                    ";
        // line 466
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 466, $this->source); })()), "categories", array()), 'errors');
        echo "

                                    ";
        // line 468
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 468, $this->source); })()), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 469, $this->source); })()), "ref", array()), 'errors');
        echo "


                                    <p><span class=\"order-num\">2</span>Type de bien</p>
                                    <div class=\"multi-inner two-cols\">

                                        <div class=\"multi-wrap\">

                                            ";
        // line 477
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 477, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                            ";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 478, $this->source); })()), "types", array()), 'errors');
        echo "
                                        </div>

                                    </div>
                                    <p><span class=\"order-num\">3</span>Budget</p>
                                    <div class=\"multi-sel two-cols\">


                                        <div class=\"unit-wrap\">
                                            ";
        // line 487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 487, $this->source); })()), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 488
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 488, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                            <span>DA</span>
                                        </div>

                                        <div class=\"unit-wrap\">
                                            ";
        // line 493
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 493, $this->source); })()), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 494
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 494, $this->source); })()), "prixmax", array()), 'errors');
        echo "
                                            <span>DA</span>
                                        </div>

                                    </div>

                                    <p><span class=\"order-num\">4</span>Surface</p>
                                    <div class=\"multi-sel two-cols\">

                                        <div class=\"unit-wrap\">
                                            ";
        // line 504
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 504, $this->source); })()), "surfacemin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 505
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 505, $this->source); })()), "surfacemin", array()), 'errors');
        echo "
                                            <span><span class=\"superscript\">2</span>m</span>
                                        </div>
                                        <div class=\"unit-wrap\">
                                            ";
        // line 509
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 509, $this->source); })()), "surfacemax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 510
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 510, $this->source); })()), "surfacemax", array()), 'errors');
        echo "
                                            <span><span class=\"superscript\">2</span>m</span>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"cbp-mc-column\">
                                    <div class=\"multi-sel\">
                                        <p><span class=\"order-num\">5</span>Type de transaction</p>
                                        ";
        // line 520
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 520, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                        ";
        // line 521
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 521, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                        ";
        // line 523
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 523, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "multi-wrap")));
        echo "
                                        ";
        // line 524
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 524, $this->source); })()), "duree", array()), 'errors');
        echo "
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <p style=\"display: inline-block; margin-top: 20px;\"><span class=\"order-num\">6</span>Nombre de chambres</p>
                                    <div class=\"multi-sel three-col\">


                                        <label>Nombre de chambres</label>
                                        <div class=\"cbp-mc-column\">
                                            <div class=\"multi-wrap\">
                                                ";
        // line 534
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 534, $this->source); })()), "nc", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                ";
        // line 535
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 535, $this->source); })()), "nc", array()), 'errors');
        echo "
                                            </div>

                                        </div>

                                    </div>
                                    <div class=\"clearfix\"></div>


                                    <div class=\"multi-sel three-col\">
                                        <label>Nombre de pièces</label>
                                        <div class=\"cbp-mc-column\">
                                            <div class=\"multi-wrap\">
                                                ";
        // line 548
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 548, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                ";
        // line 549
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 549, $this->source); })()), "np", array()), 'errors');
        echo "
                                            </div>

                                        </div>

                                    </div>

                                    <div class=\"clearfix\"></div>


                                </div>



                            </div>


                            <div class=\"cbp-mc-submit-wrap\"><input class=\"cbp-mc-submit cbp-mc-btn\" type=\"submit\" value=\"Rechercher\"></div>

                            ";
        // line 568
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 568, $this->source); })()), 'form_end');
        echo "

                        </div>
                        <a class=\"btn-open-search-mobile\" id=\"btn-open-search-mobile\" href=\"#\">Filtre</a>
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 1, thumbnailNavigation: 'disabled', skinsPath: '";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        echo "'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"";
        // line 581
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 581, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 581, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: visible;\">
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

                                                        <div class=\"description\" style=\"text-align: justify;\">";
        // line 600
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 600, $this->source); })()), 0, array(), "array"), "texte", array()), "html", null, true);
        echo "<br>
                                                        <br>
                                                   </div>


                                                </div><!-- universe_text -->

                                            </div>
                                        </div>
                                        <div class=\"vc_col-lg-8 vc_col-md-8 vc_col-sm-8 vc_col-xs-12 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div id=\"universe-gallery\" class=\"universe-gallery\">
                                                    ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 612, $this->source); })()), 0, array(), "array"), "photo", array()));
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
            // line 613
            echo "                                                        ";
            $context["number"] = 0;
            // line 614
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                // line 615
                echo "                                                            <div class=\"two-cols\">
                                                                <div id=\"img-";
                // line 616
                echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 616, $this->source); })()), "html", null, true);
                echo "\" class=\"img-item\" style=\"background: url('";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
                echo "') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>Voir les photos</p></div>
                                                                </div>

                                                            </div>
                                                        ";
            } else {
                // line 622
                echo "                                                            <div class=\"four-cols \">
                                                                <div id=\"img-";
                // line 623
                echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new Twig_Error_Runtime('Variable "number" does not exist.', 623, $this->source); })()), "html", null, true);
                echo "\" class=\"img-item\" style=\"background: url('";
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
                echo "') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>Voir les photos</p></div>
                                                                </div>



                                                            </div>



                                                        ";
            }
            // line 634
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
        // line 635
        echo "


                                                    <ul id=\"light-gallery\" class=\"gallery\">

                                                        ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 640, $this->source); })()), 0, array(), "array"), "photo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 641
            echo "                                                            <li data-src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
            echo "\" data-sub-html=\"\">
                                                                <a href=\"#\"><img src=\"";
            // line 642
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, $context["produit"], "path", array())), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 642, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
            echo "\"></a>
                                                            </li>

                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                                        <!-- Latest Exclusive block -->
                                        <div class=\"home-separator-3\"></div>

                            <!-- Title Row -->
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">

                                                <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">

                                                                    ";
        // line 674
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 674, $this->source); })())), "html", null, true);
        echo " Résultats

                                                                </span>
                                                    <a href=\"";
        // line 677
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
        // line 700
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
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exclusives"]) || array_key_exists("exclusives", $context) ? $context["exclusives"] : (function () { throw new Twig_Error_Runtime('Variable "exclusives" does not exist.', 716, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exclusive"]) {
            // line 717
            echo "
                                            <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                <div class=\"wpb_wrapper\">

                                                    <div class=\"offer-list-item\">

                                                        <div class=\"oli-image\" style=\"background-image:url(";
            // line 723
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                            <a title=\"";
            // line 724
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo " Oran Algérie\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">
                                                            </a>


                                                        </div>


                                                        <div class=\"oli-details oli-details--normal\">
                                                            <div class=\"oli-caption\">
                                                                <div class=\"oli-ref\">Réf ";
            // line 733
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "ref", array()), "html", null, true);
            echo "</div>
                                                                <div class=\"oli-photos-count\">
                                                                    ";
            // line 735
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "image1", array())), "html", null, true);
            echo "   photos
                                                                </div>

                                                            </div>
                                                            <a href=\"";
            // line 739
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">
                                                                <h3 class=\"oli-title\">
                                                                    ";
            // line 741
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "titre", array()), "html", null, true);
            echo "
                                                                </h3>
                                                            </a>
                                                            <a href=\"";
            // line 744
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["exclusive"], "slug", array()))), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()) == "Location")) {
                echo " à louer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "duree", array()), "html", null, true);
            } else {
                echo " en vente ";
            }
            echo "</a>


                                                            <p class=\"oli-description\">
                                                                Immobilier <span class=\"mf-city\">";
            // line 748
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exclusive"], "categories", array()), "nom", array()), "html", null, true);
            echo "</span>, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "type", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "types", array()), "html", null, true);
            echo ", ";
            if (twig_get_attribute($this->env, $this->source, $context["exclusive"], "surface", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "surface", array()), "html", null, true);
                echo " m<sup>2</sup>  ";
            }
            // line 749
            echo "                                                            <br>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "text2", array()), "html", null, true);
            echo "
                                                            </p>



                                                            <div class=\"oli-price oli-price-euro lower\">
                                                                ";
            // line 755
            if (twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array())) {
                // line 756
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exclusive"], "prix", array()), "html", null, true);
                echo "

                                                                ";
            } else {
                // line 759
                echo "
                                                                    Prix ​​sur demande
                                                                ";
            }
            // line 762
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
        // line 776
        echo "




                                    </div>
                                </div>
                            </div>

                            <div class=\"home-separator-3\"></div>


                                        <!-- Title Row -->
                                        <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                            <div class=\"section_inner clearfix\">
                                                <div class=\"section_inner_margin clearfix\">
                                                    <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                                        <div class=\"wpb_wrapper\">

                                                            <div class=\"title-block left-title-block\">

                                                                <span class=\"results\">";
        // line 797
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 797, $this->source); })())), "html", null, true);
        echo " Résultats</span>
                                                                <a href=\"";
        // line 798
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

                                                                <a href=\"\"><span class=\"all-offers\">Toutes les offres</span></a>

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
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 836, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 837
            echo "
                                                        <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                            <div class=\"wpb_wrapper\">

                                                                <div class=\"offer-list-item\">

                                                                    <div class=\"oli-image\" style=\"background-image:url(";
            // line 843
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                                        <a title=\"";
            // line 844
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                                        </a>


                                                                    </div>


                                                                    <div class=\"oli-details oli-details--normal\">
                                                                        <div class=\"oli-caption\">
                                                                            <div class=\"oli-ref\">Réf ";
            // line 853
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "ref", array()), "html", null, true);
            echo "</div>
                                                                            <div class=\"oli-photos-count\">";
            // line 854
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array())), "html", null, true);
            echo " photos</div>

                                                                        </div>
                                                                        <a href=\"";
            // line 857
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                                            <h3 class=\"oli-title\">
                                                                                ";
            // line 859
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "
                                                                            </h3>
                                                                        </a>
                                                                        <a href=\"";
            // line 862
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Location")) {
                echo " à louer ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "duree", array()), "html", null, true);
                echo " ";
            } else {
                echo " Vente ";
            }
            echo "</a>

                                                                        <p class=\"oli-description\">
                                                                          Immobilier <span class=\"mf-city\">";
            // line 865
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "nom", array()), "html", null, true);
            echo "</span>,  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "types", array()), "html", null, true);
            echo ", ";
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "surface", array())) {
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "surface", array()), "html", null, true);
                echo " m<sup>2</sup>  ";
            }
            echo "         <br>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "text2", array()), "html", null, true);
            echo "                 </p>


                                                                        <div class=\"oli-price oli-price-euro lower\">
                                                                            ";
            // line 869
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array())) {
                // line 870
                echo "                                                                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
                echo "


                                                                            ";
            } else {
                // line 874
                echo "
                                                                                Prix ​​sur demande
                                                                            ";
            }
            // line 877
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
        // line 891
        echo "




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
                                                        <p>Recevez par email toutes les informations et <br> dernières annonces Luxury Global Service.</p>
                                                        <!-- MailChimp for WordPress v2.3.18 - https://wordpress.org/plugins/mailchimp-for-wp/ --><div id=\"mc4wp-form-1\" class=\"form mc4wp-form\"><form method=\"post\"><input class=\"nl-email\" type=\"email\" name=\"EMAIL\" placeholder=\"Email\" required=\"required\">

                                                                <input class=\"nl-btn\" type=\"submit\" value=\"OK\"><div style=\"display: none;\"><input type=\"text\" name=\"_mc4wp_ho_b22713e89e30cb18669337f81df50424\" value=\"\" tabindex=\"-1\" autocomplete=\"off\"></div><input type=\"hidden\" name=\"_mc4wp_timestamp\" value=\"1518977793\"><input type=\"hidden\" name=\"_mc4wp_form_id\" value=\"0\"><input type=\"hidden\" name=\"_mc4wp_form_element_id\" value=\"mc4wp-form-1\"><input type=\"hidden\" name=\"_mc4wp_form_submit\" value=\"1\"><input type=\"hidden\" name=\"_mc4wp_form_nonce\" value=\"9ef3b8b7a9\"></form></div><!-- / MailChimp for WordPress Plugin -->\t                \t</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"recruitment-block mf-table\">
                                                    <a href=\"\" target=\"_blank\" class=\"mf-table-cell\">
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
    <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(){
            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: true
            });
            jQuery(\".transaction\").select2({

                allowClear: false
            });
            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: true
            });

        })
        jQuery(document).ready(function(){

            jQuery('#search_type2_duree').hide();
            jQuery('#search_type2_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#search_type2_duree').show();


                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#search_type2_duree').hide();


                }

            });
        })

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:immobyvilles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1452 => 891,  1433 => 877,  1428 => 874,  1420 => 870,  1418 => 869,  1399 => 865,  1385 => 862,  1379 => 859,  1374 => 857,  1368 => 854,  1364 => 853,  1350 => 844,  1346 => 843,  1338 => 837,  1334 => 836,  1293 => 798,  1289 => 797,  1266 => 776,  1247 => 762,  1242 => 759,  1235 => 756,  1233 => 755,  1223 => 749,  1212 => 748,  1198 => 744,  1192 => 741,  1187 => 739,  1180 => 735,  1175 => 733,  1159 => 724,  1155 => 723,  1147 => 717,  1143 => 716,  1124 => 700,  1098 => 677,  1092 => 674,  1062 => 646,  1050 => 642,  1045 => 641,  1041 => 640,  1034 => 635,  1020 => 634,  1004 => 623,  1001 => 622,  990 => 616,  987 => 615,  984 => 614,  981 => 613,  964 => 612,  949 => 600,  925 => 581,  915 => 574,  906 => 568,  884 => 549,  880 => 548,  864 => 535,  860 => 534,  847 => 524,  843 => 523,  838 => 521,  834 => 520,  821 => 510,  817 => 509,  810 => 505,  806 => 504,  793 => 494,  789 => 493,  781 => 488,  777 => 487,  765 => 478,  761 => 477,  750 => 469,  746 => 468,  741 => 466,  737 => 465,  730 => 461,  699 => 433,  692 => 429,  675 => 415,  663 => 406,  640 => 386,  636 => 385,  620 => 372,  616 => 371,  605 => 363,  601 => 362,  596 => 360,  592 => 359,  575 => 345,  571 => 344,  564 => 340,  560 => 339,  542 => 324,  538 => 323,  530 => 318,  526 => 317,  509 => 303,  505 => 302,  499 => 298,  488 => 290,  484 => 289,  479 => 286,  477 => 285,  462 => 273,  458 => 272,  453 => 270,  449 => 269,  432 => 254,  428 => 252,  426 => 251,  409 => 237,  404 => 235,  398 => 232,  362 => 199,  358 => 198,  354 => 197,  350 => 196,  346 => 195,  342 => 194,  338 => 193,  331 => 189,  326 => 187,  322 => 186,  318 => 185,  314 => 184,  310 => 183,  306 => 182,  301 => 180,  295 => 177,  275 => 166,  120 => 13,  114 => 12,  99 => 9,  89 => 7,  83 => 6,  69 => 5,  55 => 4,  43 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block ogurl %}  {% endblock %}
{% block ogimg %} {{ absolute_url(asset('img/gls.jpg')) }} {% endblock %}
{% block title %}Immobilier {{ villes[0].nom }} - Algérie{% endblock %}
{% block canonical %}
    <link rel=\"canonical\" href=\"{{ path('cosanit_produits_villes',{ville: villes[0].slug }) }}\" />
{% endblock %}
{% block description %} immobilier {{ villes[0].nom }} Algérie location  appartement, villa, duplex, terrains... f2 f3 f4 f5 à vendre ou à louer achat / vente immobilier Oran.
{% endblock %}

{% block body %}
    <style>
        .two-cols .img-item {
            height: 280px;
            background-size: cover !important;
            background-repeat: no-repeat;
            position: relative;
        }
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .filter-bar .select2-container {
            width: 215px;
            min-height: 50px;
            padding: 8px;
            margin-bottom: 20px;
            /* padding-bottom: 20px; */
        }
        #search_type2_types {
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
        #search_type2_nc {
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
        #search_type2_np {
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
        #search_type2_transaction{
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
        #search_type2_duree{
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
        #search_type2_categories{
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
            padding: 0px;
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
                    <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 61px;\">
                        <div class=\"mf-advanced-search mobile-hide \">
                            <div class=\"filter-bar auto\">
                                <div class=\"filter-bar-inner\">
                                    <section>

                                        {{ form_start(form, {'attr': {'id': 'prop-search','methode': 'GET'} }) }}
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 2px;\"><a href=\"{{ path('cosanit_homepage') }}\">

                                                        <img class=\"normal\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"       width: 95px;
    margin-top: -9px;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    {% if trans == 'Louer: ' %}
                                                        <li><a href=\"#section-bar-6\" class=\"plus\"><span>Durée</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    {% endif %}
                                                    <li><a href=\"#section-bar-2\" class=\"type\"><span>Type de bien</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-3\" class=\"budget\"><span>Budget</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-4\" class=\"surface\"><span>Surface</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                    <li><a href=\"#section-bar-5\" class=\"plus\"><span>Plus</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                </ul>
                                                <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\"/>



                                            </nav>
                                            <div class=\"content-wrap\">
                                                <section id=\"section-bar-1\">
                                                    <div class=\"two-input-wrap\">


                                                        {{ form_widget(form.categories,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                        {{ form_errors(form.categories) }}
                                                        <div class=\"unit-wrap\">
                                                            {{ form_widget(form.ref,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.ref) }}
                                                        </div>




                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                {% if trans == 'Louer: ' %}
                                                    <section id=\"section-bar-6\">
                                                        <div class=\"two-input-wrap\">

                                                            {{ form_widget(form.duree,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                            {{ form_errors(form.duree) }}
                                                            <div class=\"button-wrap\">
                                                                <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                                <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                            </div>
                                                        </div>
                                                    </section>
                                                {% endif %}
                                                <section id=\"section-bar-2\">
                                                    <div class=\"two-input-wrap\">


                                                        {{ form_widget(form.types,{'attr': {'class': 'multi-wrap '}}) }}
                                                        {{ form_errors(form.types) }}


                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-3\">
                                                    <div class=\"two-input-wrap\">


                                                        <div class=\"unit-wrap\">
                                                            {{ form_widget(form.prixmin,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.prixmin) }}
                                                            <span>DA</span>
                                                        </div>

                                                        <div class=\"unit-wrap\">
                                                            {{ form_widget(form.prixmax,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.prixmax) }}
                                                            <span>DA</span>
                                                        </div>



                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-3\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-4\">
                                                    <div class=\"two-input-wrap\">
                                                        <div class=\"unit-wrap\">
                                                            {{ form_widget(form.surfacemin,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.surfacemin) }}
                                                            <span><span class=\"superscript\">2</span>m</span>
                                                        </div>
                                                        <div class=\"unit-wrap\">
                                                            {{ form_widget(form.surfacemax,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.surfacemax) }}
                                                            <span><span class=\"superscript\">2</span>m</span>
                                                        </div>
                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-4\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id=\"section-bar-5\">
                                                    <div class=\"inner-wrap\">
                                                        <div class=\"row-wrapper\">
                                                            <div class=\"left-col\">
                                                                <p><span class=\"order-num\">1</span>Type de transaction</p>
                                                                {{ form_widget(form.transaction,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                                {{ form_errors(form.transaction) }}

                                                                {{ form_widget(form.duree,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                                {{ form_errors(form.duree) }}
                                                            </div>
                                                            <div class=\"right-col\">
                                                                <p><span class=\"order-num\">2</span>Nombre de chambres</p>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de chambres</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-inner\">
                                                                            {{ form_widget(form.nc,{'attr': {'class': ' multi-wrap'}}) }}
                                                                            {{ form_errors(form.nc) }}

                                                                        </div>




                                                                    </div>
                                                                </div>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de pièces</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-wrap\">
                                                                            {{ form_widget(form.np,{'attr': {'class': ' multi-wrap'}}) }}
                                                                            {{ form_errors(form.np) }}

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-5\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>

                                                </section>
                                            </div><!-- /content -->
                                        </div><!-- /tabs -->
                                        {{ form_end(form) }}

                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url({{ asset('photos_produits/')~villes[0].photo[0].path }});height:0px;\">
                            <div class=\"title_holder\" style=\"padding-top:0px;height:0px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"container_inner clearfix\">
                                            <div class=\"title_subtitle_holder\">
                                                <div class=\"title_subtitle_holder_inner\">

                                                    <div class=\"home_header_box\">


                                                                <hgroup>
                                                                <h1 style=\"    font-family: 'Lato', sans-serif;     font-size: 60px;
    color: #fff;
    margin-bottom: 0;\">Immobilier {{ villes[0].nom }}</h1>
                                                                <h2 style=\"    font-family: 'Lato', sans-serif;    font-size: 24px;
    color: #fff;
    line-height: 1.4;
    margin-bottom: 70px;\">{{ villes[0].nom }} vous dévoile ses meilleurs atouts dans les plus beaux quartiers</h2>
                                                                </hgroup>


                                                    </div>

                                                    <div class=\"home_header_search_box\">
                                                        <div class=\"mf-form\">
                                                            <div id=\"loader\" style=\"display: none;\"></div>


                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"mf-advanced-search--mobile\" id=\"search-mobile\" style=\"display: none;\">
                            <div class=\"mf-advanced-search--mobile--header\">
                                <a class=\"link-left\" id=\"back-search\" href=\"#\">Fermer</a>
                                <a id=\"refresh-form\" class=\"link-right reset-search-mobile\">Reset</a>
                            </div>
                            <div class=\"mf-advanced-search--mobile--body\">
                                {{ form_start(formmobile, {'attr': {'id': 'prop-search','class':'cbp-mc-form'} }) }}

                                <div class=\"cbp-mc-column\">
                                    <p><span class=\"order-num\">1</span>City</p>
                                    {{ form_widget(formmobile.categories,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                    {{ form_errors(formmobile.categories) }}

                                    {{ form_widget(formmobile.ref,{'attr': {'class': 'form-control',}}) }}
                                    {{ form_errors(formmobile.ref) }}


                                    <p><span class=\"order-num\">2</span>Type de bien</p>
                                    <div class=\"multi-inner two-cols\">

                                        <div class=\"multi-wrap\">

                                            {{ form_widget(formmobile.types,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus'}}) }}
                                            {{ form_errors(formmobile.types) }}
                                        </div>

                                    </div>
                                    <p><span class=\"order-num\">3</span>Budget</p>
                                    <div class=\"multi-sel two-cols\">


                                        <div class=\"unit-wrap\">
                                            {{ form_widget(formmobile.prixmin,{'attr': {'class': 'form-control',}}) }}
                                            {{ form_errors(formmobile.prixmin) }}
                                            <span>DA</span>
                                        </div>

                                        <div class=\"unit-wrap\">
                                            {{ form_widget(formmobile.prixmax,{'attr': {'class': 'form-control',}}) }}
                                            {{ form_errors(formmobile.prixmax) }}
                                            <span>DA</span>
                                        </div>

                                    </div>

                                    <p><span class=\"order-num\">4</span>Surface</p>
                                    <div class=\"multi-sel two-cols\">

                                        <div class=\"unit-wrap\">
                                            {{ form_widget(formmobile.surfacemin,{'attr': {'class': 'form-control',}}) }}
                                            {{ form_errors(formmobile.surfacemin) }}
                                            <span><span class=\"superscript\">2</span>m</span>
                                        </div>
                                        <div class=\"unit-wrap\">
                                            {{ form_widget(formmobile.surfacemax,{'attr': {'class': 'form-control',}}) }}
                                            {{ form_errors(formmobile.surfacemax) }}
                                            <span><span class=\"superscript\">2</span>m</span>
                                        </div>
                                    </div>

                                </div>

                                <div class=\"cbp-mc-column\">
                                    <div class=\"multi-sel\">
                                        <p><span class=\"order-num\">5</span>Type de transaction</p>
                                        {{ form_widget(formmobile.transaction,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                        {{ form_errors(formmobile.transaction) }}

                                        {{ form_widget(formmobile.duree,{'attr': {'class': 'multi-wrap',}}) }}
                                        {{ form_errors(formmobile.duree) }}
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <p style=\"display: inline-block; margin-top: 20px;\"><span class=\"order-num\">6</span>Nombre de chambres</p>
                                    <div class=\"multi-sel three-col\">


                                        <label>Nombre de chambres</label>
                                        <div class=\"cbp-mc-column\">
                                            <div class=\"multi-wrap\">
                                                {{ form_widget(formmobile.nc,{'attr': {'class': ' multi-wrap'}}) }}
                                                {{ form_errors(formmobile.nc) }}
                                            </div>

                                        </div>

                                    </div>
                                    <div class=\"clearfix\"></div>


                                    <div class=\"multi-sel three-col\">
                                        <label>Nombre de pièces</label>
                                        <div class=\"cbp-mc-column\">
                                            <div class=\"multi-wrap\">
                                                {{ form_widget(formmobile.np,{'attr': {'class': ' multi-wrap'}}) }}
                                                {{ form_errors(formmobile.np) }}
                                            </div>

                                        </div>

                                    </div>

                                    <div class=\"clearfix\"></div>


                                </div>



                            </div>


                            <div class=\"cbp-mc-submit-wrap\"><input class=\"cbp-mc-submit cbp-mc-btn\" type=\"submit\" value=\"Rechercher\"></div>

                            {{ form_end(formmobile) }}

                        </div>
                        <a class=\"btn-open-search-mobile\" id=\"btn-open-search-mobile\" href=\"#\">Filtre</a>
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 1, thumbnailNavigation: 'disabled', skinsPath: '{{ asset('images/') }}'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                        <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; display: none; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                            <img src=\"{{ asset('photos_produits/')~villes[0].photo[0].path }}\" data-src=\"{{ asset('photos_produits/')~villes[0].photo[0].path }}\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: visible;\">
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

                                                        <div class=\"description\" style=\"text-align: justify;\">{{ villes[0].texte }}<br>
                                                        <br>
                                                   </div>


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
                                                                    <div class=\"img-overlay\"><p>Voir les photos</p></div>
                                                                </div>

                                                            </div>
                                                        {% else %}
                                                            <div class=\"four-cols \">
                                                                <div id=\"img-{{ number }}\" class=\"img-item\" style=\"background: url('{{ asset('photos_produits/')~produit.path }}') no-repeat center center;\">
                                                                    <div class=\"img-overlay\"><p>Voir les photos</p></div>
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
                                                            <a title=\"{{ exclusive.type }} {{ exclusive.titre }} Oran Algérie\" href=\"{{ path('cosanit_show', { 'id': exclusive.slug }) }}\">
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


                                                            <p class=\"oli-description\">
                                                                Immobilier <span class=\"mf-city\">{{ exclusive.categories.nom }}</span>, {{ exclusive.type }}  {{ exclusive.types }}, {% if exclusive.surface %}{{ exclusive.surface }} m<sup>2</sup>  {% endif %}
                                                            <br>  {{ exclusive.text2 }}
                                                            </p>



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

                            <div class=\"home-separator-3\"></div>


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

                                                                <a href=\"\"><span class=\"all-offers\">Toutes les offres</span></a>

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
                                                                        <a title=\"{{ produit.titre }}\" href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">
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
                                                                        <a href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">{% if produit.type == 'Location' %} à louer {{ produit.duree }} {% else %} Vente {% endif %}</a>

                                                                        <p class=\"oli-description\">
                                                                          Immobilier <span class=\"mf-city\">{{ produit.categories.nom }}</span>,  {{ produit.type }}  {{ produit.types }}, {% if produit.surface %}  {{ produit.surface }} m<sup>2</sup>  {% endif %}         <br>  {{ produit.text2 }}                 </p>


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
                                                        <p>Recevez par email toutes les informations et <br> dernières annonces Luxury Global Service.</p>
                                                        <!-- MailChimp for WordPress v2.3.18 - https://wordpress.org/plugins/mailchimp-for-wp/ --><div id=\"mc4wp-form-1\" class=\"form mc4wp-form\"><form method=\"post\"><input class=\"nl-email\" type=\"email\" name=\"EMAIL\" placeholder=\"Email\" required=\"required\">

                                                                <input class=\"nl-btn\" type=\"submit\" value=\"OK\"><div style=\"display: none;\"><input type=\"text\" name=\"_mc4wp_ho_b22713e89e30cb18669337f81df50424\" value=\"\" tabindex=\"-1\" autocomplete=\"off\"></div><input type=\"hidden\" name=\"_mc4wp_timestamp\" value=\"1518977793\"><input type=\"hidden\" name=\"_mc4wp_form_id\" value=\"0\"><input type=\"hidden\" name=\"_mc4wp_form_element_id\" value=\"mc4wp-form-1\"><input type=\"hidden\" name=\"_mc4wp_form_submit\" value=\"1\"><input type=\"hidden\" name=\"_mc4wp_form_nonce\" value=\"9ef3b8b7a9\"></form></div><!-- / MailChimp for WordPress Plugin -->\t                \t</div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class=\"vc_col-sm-6 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">
                                                <div class=\"recruitment-block mf-table\">
                                                    <a href=\"\" target=\"_blank\" class=\"mf-table-cell\">
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
    <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(){
            jQuery(\".quoi\").select2({
                placeholder: \"Quoi\",
                allowClear: true
            });
            jQuery(\".transaction\").select2({

                allowClear: false
            });
            jQuery(\".ou\").select2({
                placeholder: \"Où\",
                allowClear: true
            });

        })
        jQuery(document).ready(function(){

            jQuery('#search_type2_duree').hide();
            jQuery('#search_type2_transaction').change(function() {
                if(jQuery(this).val() == 'Location'){

                    jQuery('#search_type2_duree').show();


                }

                if(jQuery(this).val() == 'Vente'){

                    jQuery('#search_type2_duree').hide();


                }

            });
        })

    </script>

{% endblock %}", "CosanitBundle:Default:immobyvilles.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/immobyvilles.html.twig");
    }
}
