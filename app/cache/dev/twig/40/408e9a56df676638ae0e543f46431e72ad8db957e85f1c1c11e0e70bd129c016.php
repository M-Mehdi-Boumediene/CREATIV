<?php

/* @Cosanit/Default/immobytypes.html.twig */
class __TwigTemplate_c09dbe90eadb3fc0efbcb4c11a21b54f009b12e05df32b26b9db46f80c5c9711 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/immobytypes.html.twig", 2);
        $this->blocks = array(
            'ogurl' => array($this, 'block_ogurl'),
            'ogimg' => array($this, 'block_ogimg'),
            'title' => array($this, 'block_title'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/immobytypes.html.twig"));

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

        echo "Location - vente  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 5, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "  Algerie  Oran Alger | GLS Immobilier  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Location")) {
                echo " à louer   ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Vente")) {
                echo " à vendre  %} ";
            }
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", array()), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            } else {
                echo " Prix ​​sur demande ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <style>
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
        // line 101
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
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                    <nav class=\"main_menu drop_down right\">
                                        <ul id=\"menu-main-navigation\" class=\"\">
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                            <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                            <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                            <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                            <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                            <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                            <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                        </ul>
                                    </nav>
                                    <nav class=\"mobile_menu\">
                                        <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                            <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 134
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
        // line 167
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search")));
        echo "
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 17px;\"><a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\">

                                                        <img class=\"normal\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"        width: 100%;
    margin-top: -26px;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>
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


                                                        ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                        ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 202, $this->source); })()), "categories", array()), 'errors');
        echo "

                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->source); })()), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 206, $this->source); })()), "ref", array()), 'errors');
        echo "
                                                        </div>

                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-1\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section id=\"section-bar-2\">
                                                    <div class=\"multi-inner\">


                                                        ";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 220, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "multi-wrap ")));
        echo "
                                                        ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 221, $this->source); })()), "types", array()), 'errors');
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
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->source); })()), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                                            <span>DA</span>
                                                        </div>

                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->source); })()), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->source); })()), "prixmax", array()), 'errors');
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
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 257, $this->source); })()), "surfacemin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->source); })()), "surfacemin", array()), 'errors');
        echo "
                                                            <span><span class=\"superscript\">2</span>m</span>
                                                        </div>
                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 262, $this->source); })()), "surfacemax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->source); })()), "surfacemax", array()), 'errors');
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
        // line 277
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 277, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                ";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 278, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                                                ";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 280, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                                ";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 281, $this->source); })()), "duree", array()), 'errors');
        echo "

                                                            </div>
                                                            <div class=\"right-col\">
                                                                <p><span class=\"order-num\">2</span>Nombre de chambres</p>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de chambres</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-inner\">
                                                                            ";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->source); })()), "nc", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                                            ";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->source); })()), "nc", array()), 'errors');
        echo "

                                                                        </div>




                                                                    </div>
                                                                </div>
                                                                <div class=\"row-wrap\">
                                                                    <label>Nombre de pièces</label>
                                                                    <div class=\"multi-sel\">
                                                                        <div class=\"multi-wrap\">
                                                                            ";
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 304, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                                            ";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->source); })()), "np", array()), 'errors');
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
        // line 325
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 325, $this->source); })()), 'form_end');
        echo "

                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"title_outer title_without_animation\" data-height=\"0\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(";
        // line 334
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 334, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
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
    margin-bottom: 0;\">";
        // line 348
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 348, $this->source); })()), 0, array(), "array"), "nom", array()), "html", null, true);
        echo "</h1>
                                                                <h2 style=\"    font-family: 'Lato', sans-serif;    font-size: 24px;
    color: #fff;
    line-height: 1.4;
    margin-bottom: 70px;\">";
        // line 352
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 352, $this->source); })()), 0, array(), "array"), "texte", array()), "html", null, true);
        echo "</h2>
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
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 2, thumbnailNavigation: 'disabled', skinsPath: '";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
        echo "'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                    <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; ; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                        <img src=\"";
        // line 383
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 383, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new Twig_Error_Runtime('Variable "villes" does not exist.', 383, $this->source); })()), 0, array(), "array"), "photo", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: visible;\">
                                        <div class=\"ls-gpuhack\"></div>
                                    </div>



                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
                    </div>
                    <div class=\"mf-advanced-search--mobile\" id=\"search-mobile\" style=\"display: none;\">
                        <div class=\"mf-advanced-search--mobile--header\">
                            <a class=\"link-left\" id=\"back-search\" href=\"#\">Fermer</a>
                            <a id=\"refresh-form\" class=\"link-right reset-search-mobile\">Reset</a>
                        </div>
                        <div class=\"mf-advanced-search--mobile--body\">
                            ";
        // line 397
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 397, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "class" => "cbp-mc-form")));
        echo "

                            <div class=\"cbp-mc-column\">
                                <p><span class=\"order-num\">1</span>City</p>
                                ";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 401, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                ";
        // line 402
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 402, $this->source); })()), "categories", array()), 'errors');
        echo "

                                ";
        // line 404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 404, $this->source); })()), "ref", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 405
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 405, $this->source); })()), "ref", array()), 'errors');
        echo "


                                <p><span class=\"order-num\">2</span>Type de bien</p>
                                <div class=\"multi-inner two-cols\">

                                    <div class=\"multi-wrap\">

                                        ";
        // line 413
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 413, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                        ";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 414, $this->source); })()), "types", array()), 'errors');
        echo "
                                    </div>

                                </div>
                                <p><span class=\"order-num\">3</span>Budget</p>
                                <div class=\"multi-sel two-cols\">


                                    <div class=\"unit-wrap\">
                                        ";
        // line 423
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 423, $this->source); })()), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 424
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 424, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                        <span>DA</span>
                                    </div>

                                    <div class=\"unit-wrap\">
                                        ";
        // line 429
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 429, $this->source); })()), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 430
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 430, $this->source); })()), "prixmax", array()), 'errors');
        echo "
                                        <span>DA</span>
                                    </div>

                                </div>

                                <p><span class=\"order-num\">4</span>Surface</p>
                                <div class=\"multi-sel two-cols\">

                                    <div class=\"unit-wrap\">
                                        ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 440, $this->source); })()), "surfacemin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 441
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 441, $this->source); })()), "surfacemin", array()), 'errors');
        echo "
                                        <span><span class=\"superscript\">2</span>m</span>
                                    </div>
                                    <div class=\"unit-wrap\">
                                        ";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 445, $this->source); })()), "surfacemax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 446, $this->source); })()), "surfacemax", array()), 'errors');
        echo "
                                        <span><span class=\"superscript\">2</span>m</span>
                                    </div>
                                </div>

                            </div>

                            <div class=\"cbp-mc-column\">
                                <div class=\"multi-sel\">
                                    <p><span class=\"order-num\">5</span>Type de transaction</p>
                                    ";
        // line 456
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 456, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                    ";
        // line 457
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 457, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                    ";
        // line 459
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 459, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "multi-wrap")));
        echo "
                                    ";
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 460, $this->source); })()), "duree", array()), 'errors');
        echo "
                                </div>
                                <div class=\"clearfix\"></div>
                                <p style=\"display: inline-block; margin-top: 20px;\"><span class=\"order-num\">6</span>Nombre de chambres</p>
                                <div class=\"multi-sel three-col\">


                                    <label>Nombre de chambres</label>
                                    <div class=\"cbp-mc-column\">
                                        <div class=\"multi-wrap\">
                                            ";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 470, $this->source); })()), "nc", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                            ";
        // line 471
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 471, $this->source); })()), "nc", array()), 'errors');
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
        // line 484
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 484, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                            ";
        // line 485
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 485, $this->source); })()), "np", array()), 'errors');
        echo "
                                        </div>

                                    </div>

                                </div>

                                <div class=\"clearfix\"></div>


                            </div>



                        </div>


                        <div class=\"cbp-mc-submit-wrap\"><input class=\"cbp-mc-submit cbp-mc-btn\" type=\"submit\" value=\"Rechercher\"></div>

                        ";
        // line 504
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formmobile"]) || array_key_exists("formmobile", $context) ? $context["formmobile"] : (function () { throw new Twig_Error_Runtime('Variable "formmobile" does not exist.', 504, $this->source); })()), 'form_end');
        echo "

                    </div>
                    <a class=\"btn-open-search-mobile\" id=\"btn-open-search-mobile\" href=\"#\">Filtre</a>

                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">



                            <!-- Title Row -->
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\">
                                <div class=\"section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">
                                        <div class=\"vc_col-sm-4 wpb_column vc_column_container \">
                                            <div class=\"wpb_wrapper\">

                                                <div class=\"title-block left-title-block\">

                                                    <span class=\"results\">";
        // line 523
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 523, $this->source); })())), "html", null, true);
        echo " Résultats</span>
                                                    <a href=\"";
        // line 524
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
        // line 562
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 562, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 563
            echo "
                                            <div class=\"vc_col-sm-4 vc_col-xs-6 wpb_column vc_column_container clearfix result-item\">
                                                <div class=\"wpb_wrapper\">

                                                    <div class=\"offer-list-item\">

                                                        <div class=\"oli-image\" style=\"background-image:url(";
            // line 569
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
            echo ");\">
                                                            <a title=\"";
            // line 570
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                            </a>


                                                        </div>


                                                        <div class=\"oli-details oli-details--normal\">
                                                            <div class=\"oli-caption\">
                                                                <div class=\"oli-ref\">Réf ";
            // line 579
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "ref", array()), "html", null, true);
            echo "</div>
                                                                <div class=\"oli-photos-count\">";
            // line 580
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array())), "html", null, true);
            echo " photos</div>

                                                            </div>
                                                            <a href=\"";
            // line 583
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">
                                                                <h3 class=\"oli-title\">
                                                                    ";
            // line 585
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "titre", array()), "html", null, true);
            echo "
                                                                </h3>
                                                            </a>
                                                            <a href=\"";
            // line 588
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", array()))), "html", null, true);
            echo "\">";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "type", array()) == "Location")) {
                echo " Location ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "duree", array()), "html", null, true);
                echo " ";
            } else {
                echo " Vente";
            }
            echo "</a>

                                                            <div class=\"oli-description\">
                                                                ";
            // line 591
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
            // line 595
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array())) {
                // line 596
                echo "                                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
                echo "


                                                                ";
            } else {
                // line 600
                echo "
                                                                    Prix ​​sur demande
                                                                ";
            }
            // line 603
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
        // line 617
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
                                                <p>Recevez par email toutes les informations et <br> dernières annonces Global Luxury Services.</p>
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
        return "@Cosanit/Default/immobytypes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1028 => 617,  1009 => 603,  1004 => 600,  996 => 596,  994 => 595,  977 => 591,  963 => 588,  957 => 585,  952 => 583,  946 => 580,  942 => 579,  928 => 570,  924 => 569,  916 => 563,  912 => 562,  871 => 524,  867 => 523,  845 => 504,  823 => 485,  819 => 484,  803 => 471,  799 => 470,  786 => 460,  782 => 459,  777 => 457,  773 => 456,  760 => 446,  756 => 445,  749 => 441,  745 => 440,  732 => 430,  728 => 429,  720 => 424,  716 => 423,  704 => 414,  700 => 413,  689 => 405,  685 => 404,  680 => 402,  676 => 401,  669 => 397,  650 => 383,  640 => 376,  613 => 352,  606 => 348,  589 => 334,  577 => 325,  554 => 305,  550 => 304,  534 => 291,  530 => 290,  518 => 281,  514 => 280,  509 => 278,  505 => 277,  488 => 263,  484 => 262,  477 => 258,  473 => 257,  455 => 242,  451 => 241,  443 => 236,  439 => 235,  422 => 221,  418 => 220,  401 => 206,  397 => 205,  391 => 202,  387 => 201,  355 => 172,  350 => 170,  344 => 167,  308 => 134,  304 => 133,  300 => 132,  296 => 131,  292 => 130,  288 => 129,  284 => 128,  277 => 124,  272 => 122,  268 => 121,  264 => 120,  260 => 119,  256 => 118,  252 => 117,  247 => 115,  241 => 112,  221 => 101,  127 => 9,  121 => 8,  82 => 6,  68 => 5,  54 => 4,  42 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block ogurl %}  {% endblock %}
{% block ogimg %} {{ absolute_url(asset('img/gls.jpg')) }} {% endblock %}
{% block title %}Location - vente  {{ villes[0].nom }}  Algerie  Oran Alger | GLS Immobilier  {% endblock %}
{% block description %}{% for produit in produits %} {{ produit.type }} {{ produit.titre }} {% if produit.type == 'Location'  %} à louer   {% endif %} {% if produit.type == 'Vente'  %} à vendre  %} {% endif %} à {{ produit.categories }} {% if produit.prix %}{{ produit.prix }}{% else %} Prix ​​sur demande {% endif %}{% endfor %} {% endblock %}

{% block body %}
    <style>
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

                                        {{ form_start(form, {'attr': {'id': 'prop-search'} }) }}
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 17px;\"><a href=\"{{ path('cosanit_homepage') }}\">

                                                        <img class=\"normal\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"        width: 100%;
    margin-top: -26px;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>
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

                                                <section id=\"section-bar-2\">
                                                    <div class=\"multi-inner\">


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
    margin-bottom: 0;\">{{ villes[0].nom }}</h1>
                                                                <h2 style=\"    font-family: 'Lato', sans-serif;    font-size: 24px;
    color: #fff;
    line-height: 1.4;
    margin-bottom: 70px;\">{{ villes[0].texte }}</h2>
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
                        <div class=\"q_slider top_slider\">
                            <div class=\"q_slider_inner\">
                                <script data-cfasync=\"false\" type=\"text/javascript\">var lsjQuery = jQuery;</script><script data-cfasync=\"false\" type=\"text/javascript\"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == \"undefined\") { lsShowNotice('layerslider_6','jquery'); } else { lsjQuery(\"#layerslider_6\").layerSlider({responsive: true, pauseOnHover: false, firstSlide: 2, thumbnailNavigation: 'disabled', skinsPath: '{{ asset('images/') }}'}) } }); </script>
                                <div id=\"layerslider_6\" class=\"ls-wp-container ls-container ls-v5\" style=\"width: 100%; height: 560px; margin: 0px auto; visibility: visible;\">




                                    <div class=\"ls-slide\" data-ls=\"transition2d:5;\" style=\"width: 0px; height: 560px; visibility: visible; ; left: 0px; right: auto; top: 0px; bottom: auto;\">
                                        <img src=\"{{ asset('photos_produits/')~villes[0].photo[0].path }}\" data-src=\"{{ asset('photos_produits/')~villes[0].photo[0].path }}\" class=\"ls-bg ls\" alt=\"128A1650\" style=\"width: 1920px; height: 1280px; margin-left: -277px; margin-top: -360px; visibility: visible;\">
                                        <div class=\"ls-gpuhack\"></div>
                                    </div>



                                    <div class=\"ls-circle-timer\" style=\"display: block;\"><div class=\"ls-ct-left\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(1, 0, 0, 1, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-right\"><div class=\"ls-ct-rotate\" style=\"transform: matrix(-0.99479, 0.10192, -0.10192, -0.99479, 0, 0);\"><div class=\"ls-ct-hider\"><div class=\"ls-ct-half\"></div></div></div></div><div class=\"ls-ct-center\"></div></div></div><div class=\"ls-loading-container\" style=\"z-index: -1; display: none;\"><div class=\"ls-loading-indicator\"></div></div><a class=\"ls-nav-prev\" href=\"#\" style=\"display: none; visibility: visible;\"></a><a class=\"ls-nav-next\" href=\"#\" style=\"display: none; visibility: visible;\"></a><div class=\"ls-bottom-nav-wrapper\" style=\"visibility: visible;\"><a class=\"ls-nav-start ls-nav-start-active\" href=\"#\"></a><span class=\"ls-bottom-slidebuttons\"><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"ls-nav-active\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a><a href=\"#\" class=\"\"></a></span><a class=\"ls-nav-stop\" href=\"#\"></a></div><div class=\"ls-shadow\"></div></div>\t\t\t\t</div>
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

                    <div class=\"container\">
                        <div class=\"home_container_space clearfix\">



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
                                                            <a href=\"{{ path('cosanit_show', { 'id': produit.slug }) }}\">{% if produit.type == 'Location' %} Location {{ produit.duree }} {% else %} Vente{% endif %}</a>

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
{% endblock %}", "@Cosanit/Default/immobytypes.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\immobytypes.html.twig");
    }
}
