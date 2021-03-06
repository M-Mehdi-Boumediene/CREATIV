<?php

/* @Cosanit/Default/investissements.html.twig */
class __TwigTemplate_00e829fbd63ac6c186705725e560a51794db3810afb9ca81676a23a41426a440 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/investissements.html.twig", 2);
        $this->blocks = array(
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/investissements.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    GLS Immobilier | Programmes Neufs  Alg??rie
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 7
        echo "
    Le Cabinet Global Luxury Services vous d??voile une s??lection de programmes neufs les plus s??duisants du march?? national.

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <style>
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .mf-cat-title h5, .mf-cat-title h5:last-child {
            margin-bottom: 16px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }
        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
            color: #c1002c;
        }
        .result-image-container:hover {
            background-color: transparent;
            cursor: pointer;
        }
        h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover {
            color: #c1002c;
        }
        .description {
            color: #3d3d3d;
            font-size: 16px;
            line-height: 30px;
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
        // line 58
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
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                            <nav class=\"main_menu drop_down right\">
                                <ul id=\"menu-main-navigation\" class=\"\">
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Alg??rie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Alg??rie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                    <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Alg??rie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Alg??rie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                    <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Alg??rie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                    <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Alg??rie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                    <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                    <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                </ul>
                            </nav>
                            <nav class=\"mobile_menu\">
                                <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Alg??rie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Alg??rie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Alg??rie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Alg??rie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\"title=\"Global Lxury Services contact\"  class=\"\"><span>Nous contacter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                </ul>\t\t\t\t\t</nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
            <a id=\"back_to_top\" href=\"#\">
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
                        .filter-bar .select2-container {
                            width: 215px;
                            min-height: 40px;
                            padding: 8px;
                        }
                        .mf-cat-title h2 {
                            margin-top: 49px;
                            margin-bottom: 18px;
                        }
                    </style>



                    <div id=\"sticky-wrapper\" class=\"sticky-wrapper mobile-hide\" style=\"height: 61px;\">
                        <div class=\"mf-advanced-search mobile-hide \">
                            <div class=\"filter-bar auto\">
                                <div class=\"filter-bar-inner\">
                                    <section>

                                        ";
        // line 135
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), 'form_start', array("attr" => array("id" => "prop-search", "methode" => "GET")));
        echo "
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 17px;\"><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\">

                                                        <img class=\"normal\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"    width: 100%;
       margin-top: -26px;;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>

                                                    <li><a href=\"#section-bar-3\" class=\"budget\"><span>Budget</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                </ul>
                                                <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\"/>



                                            </nav>
                                            <div class=\"content-wrap\">
                                                <section id=\"section-bar-1\">
                                                    <div class=\"two-input-wrap\">


                                                        ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus")));
        echo "
                                                        ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->source); })()), "categories", array()), 'errors');
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
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->source); })()), "prixmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 185, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                                            <span>DA</span>
                                                        </div>

                                                        <div class=\"unit-wrap\">
                                                            ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->source); })()), "prixmax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->source); })()), "prixmax", array()), 'errors');
        echo "
                                                            <span>DA</span>
                                                        </div>



                                                        <div class=\"button-wrap\">
                                                            <a class=\"g-btn\" id=\"clear-tab-3\" href=\"\">Supprimer</a>
                                                            <input type=\"submit\" class=\"red-btn\" value=\"Nouvelle recherche\"/>
                                                        </div>
                                                    </div>
                                                </section>


                                            </div><!-- /content -->
                                        </div><!-- /tabs -->
                                        ";
        // line 207
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->source); })()), 'form_end');
        echo "

                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>

                    <nav class=\"pagination\" style=\"display:none;\">
                        <a class=\"next\" href=\"?nextpage=2\">Next</a>
                    </nav>
                    <div class=\"container_inner news\">
                        <div class=\"vc_row wpb_row vc_row-fluid\">
                            <div class=\"vc_col-sm-12\">
                                <div class=\"mf-cat-title\">
                                    <h1 style=\"color: #c1002c;margin-top: 49px;margin-bottom: 18px; font-size: 30px; text-align: center;\">Programmes neufs</h1>
                                    <h2 style=\"color: black; font-size: 17px;     margin-top: 0;\">Les programmes neufs les plus s??duisants du march??</h2>
                                </div>
                                <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                    <div class=\"wpb_text_column wpb_content_element \">
                                                        <div class=\"wpb_wrapper\">
                                                            <p style=\"text-align: center; color: black; font-size: 17px;\">Le Cabinet Global Luxury Services vous d??voile une s??lection de programmes

                                                                neufs les plus s??duisants du march?? national.</p>
                                                            <p style=\"text-align: center;  color: black; font-size: 17px; \">Venez d??couvrir nos programmes qui ont ??t?? minutieusement s??lectionn??s pour
                                                                les investisseurs??: <br>investissements plaisir, investissements ?? fort rendements

                                                                    locatifs???</p>
                                                            <p style=\"text-align: center;  color: black; font-size: 17px;\">Nous vous conseillons au sein de notre cabinet tous en vous accompagnons dans

                                                                le choix de votre investissement.</p>

                                                        </div>
                                                    </div>
                                                    <div class=\"separator  normal center  \" style=\"background-color: #b2b2b2;\"></div>
                                                </div></div></div></div></div>

                                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["neufs"]) || array_key_exists("neufs", $context) ? $context["neufs"] : (function () { throw new Twig_Error_Runtime('Variable "neufs" does not exist.', 245, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["neuf"]) {
            // line 246
            echo "                                <div id=\"infinite-scroll-container\">
                                    <div class=\"large-result-item result-item\">
                                        <div class=\"result-image-container vc_col-md-6 col-sm-12\">
                                            <a title=\"";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_neufshow", array("id" => twig_get_attribute($this->env, $this->source, $context["neuf"], "slug", array()))), "html", null, true);
            echo "\" class=\"result-image\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["neuf"], "banniere1", array()), "path", array())), "html", null, true);
            echo "');\">
                                            </a>
                                        </div>
                                        <div class=\"result-content vc_col-md-6 col-sm-12\">
                                            <div class=\"result-content-inner\">
                                                <div class=\"location\"></div>
                                                <h1 style=\"  color: #c1002c;  font-size: 29px;\"><a title=\"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_neufshow", array("id" => twig_get_attribute($this->env, $this->source, $context["neuf"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "titre", array()), "html", null, true);
            echo "</a></h1>
                                                <p>";
            // line 256
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "text2", array()), 170, 480);
            echo " ...</p>
                                                <a title=\"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_neufshow", array("id" => twig_get_attribute($this->env, $this->source, $context["neuf"], "slug", array()))), "html", null, true);
            echo "\" class=\"more-info\">+ Plus d???informations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- infinite-scroll-container -->
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neuf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "


                            </div>
                        </div>
                    </div>

                    <div class=\"home-separator-4\"></div>
                    <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                        <div class=\"section_inner clearfix\">
                            <div class=\"section_inner_margin clearfix\">
                                <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                    <h2 class=\"margin-top\">Nos R??seaux Sociaux</h2>
                                </div>
                                <center>
                                    <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">

                                        <a href=\"https://www.facebook.com/glsoran/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.jpg"), "html", null, true);
        echo ")\">
                                            <div class=\"readmore\"><i class=\"fa fa-facebook fa-6\" aria-hidden=\"true\"></i></div>


                                            <div class=\"overlay\"></div>
                                        </a>

                                    </div>


                                    <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                        <a href=\"https://www.instagram.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 291
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
        // line 301
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
        // line 311
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
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-like.js'></script>
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
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer' defer='defer'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js'></script>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Cosanit/Default/investissements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 311,  492 => 301,  479 => 291,  465 => 280,  446 => 263,  432 => 257,  428 => 256,  420 => 255,  407 => 249,  402 => 246,  398 => 245,  357 => 207,  338 => 191,  334 => 190,  326 => 185,  322 => 184,  303 => 168,  299 => 167,  269 => 140,  264 => 138,  258 => 135,  211 => 91,  207 => 90,  203 => 89,  199 => 88,  195 => 87,  191 => 86,  187 => 85,  180 => 81,  175 => 79,  171 => 78,  167 => 77,  163 => 76,  159 => 75,  155 => 74,  150 => 72,  144 => 69,  124 => 58,  76 => 12,  70 => 11,  60 => 7,  54 => 6,  46 => 4,  40 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block title %}
    GLS Immobilier | Programmes Neufs  Alg??rie
{% endblock %}
{% block description %}

    Le Cabinet Global Luxury Services vous d??voile une s??lection de programmes neufs les plus s??duisants du march?? national.

{% endblock %}
{% block body %}
    <style>
        .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
            color: #000;
        }
        .mf-cat-title h5, .mf-cat-title h5:last-child {
            margin-bottom: 16px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }
        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
            color: #c1002c;
        }
        .result-image-container:hover {
            background-color: transparent;
            cursor: pointer;
        }
        h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover {
            color: #c1002c;
        }
        .description {
            color: #3d3d3d;
            font-size: 16px;
            line-height: 30px;
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
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_homepage') }}\" title=\"GlS Location & Vente Immobilier Alg??rie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_immobilier') }}\" title=\"Location & Vente Immobilier Alg??rie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                    <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"{{ path('cosanit_achats') }}\" title=\"Vente Immobilier  Alg??rie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_ventes') }}  \"title=\"Immobilier Alg??rie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                    <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_location') }} \" title=\"Immobilier Location Alg??rie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                    <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_investissement') }}\"  title=\"Immobilier Programe neuf Alg??rie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                    <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_internationals') }} \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                    <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_contact') }}\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                </ul>
                            </nav>
                            <nav class=\"mobile_menu\">
                                <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_achats') }}\" title=\"Immobilier Achat Vente Alg??rie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_ventes') }}\" title=\"Immobilier vendre Alg??rie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_location') }}\"  title=\"Immobilier Location Alg??rie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_investissement') }}\"title=\"Immobilier Programme Neuf Alg??rie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
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
            <a id=\"back_to_top\" href=\"#\">
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
                        .filter-bar .select2-container {
                            width: 215px;
                            min-height: 40px;
                            padding: 8px;
                        }
                        .mf-cat-title h2 {
                            margin-top: 49px;
                            margin-bottom: 18px;
                        }
                    </style>



                    <div id=\"sticky-wrapper\" class=\"sticky-wrapper mobile-hide\" style=\"height: 61px;\">
                        <div class=\"mf-advanced-search mobile-hide \">
                            <div class=\"filter-bar auto\">
                                <div class=\"filter-bar-inner\">
                                    <section>

                                        {{ form_start(form, {'attr': {'id': 'prop-search','methode': 'GET'} }) }}
                                        <div class=\"tabs tabs-style-bar\">
                                            <nav>
                                                <div class=\"logo-search\" style=\"    margin-top: 17px;\"><a href=\"{{ path('cosanit_homepage') }}\">

                                                        <img class=\"normal\" src=\"{{ asset('img/logo2.svg') }}\" alt=\"Logo\" style=\"    width: 100%;
       margin-top: -26px;;\">

                                                    </a>






                                                </div>
                                                <ul>

                                                    <li><a href=\"#section-bar-1\" class=\"city\"><span>Rechercher par secteur</span><i class=\"fa fa-chevron-down\"></i></a></li>

                                                    <li><a href=\"#section-bar-3\" class=\"budget\"><span>Budget</span><i class=\"fa fa-chevron-down\"></i></a></li>
                                                </ul>
                                                <input class=\"btn-search\" type=\"submit\" value=\"Rechercher\"/>



                                            </nav>
                                            <div class=\"content-wrap\">
                                                <section id=\"section-bar-1\">
                                                    <div class=\"two-input-wrap\">


                                                        {{ form_widget(form.categories,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus',}}) }}
                                                        {{ form_errors(form.categories) }}


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


                                            </div><!-- /content -->
                                        </div><!-- /tabs -->
                                        {{ form_end(form) }}

                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>

                    <nav class=\"pagination\" style=\"display:none;\">
                        <a class=\"next\" href=\"?nextpage=2\">Next</a>
                    </nav>
                    <div class=\"container_inner news\">
                        <div class=\"vc_row wpb_row vc_row-fluid\">
                            <div class=\"vc_col-sm-12\">
                                <div class=\"mf-cat-title\">
                                    <h1 style=\"color: #c1002c;margin-top: 49px;margin-bottom: 18px; font-size: 30px; text-align: center;\">Programmes neufs</h1>
                                    <h2 style=\"color: black; font-size: 17px;     margin-top: 0;\">Les programmes neufs les plus s??duisants du march??</h2>
                                </div>
                                <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                    <div class=\"wpb_text_column wpb_content_element \">
                                                        <div class=\"wpb_wrapper\">
                                                            <p style=\"text-align: center; color: black; font-size: 17px;\">Le Cabinet Global Luxury Services vous d??voile une s??lection de programmes

                                                                neufs les plus s??duisants du march?? national.</p>
                                                            <p style=\"text-align: center;  color: black; font-size: 17px; \">Venez d??couvrir nos programmes qui ont ??t?? minutieusement s??lectionn??s pour
                                                                les investisseurs??: <br>investissements plaisir, investissements ?? fort rendements

                                                                    locatifs???</p>
                                                            <p style=\"text-align: center;  color: black; font-size: 17px;\">Nous vous conseillons au sein de notre cabinet tous en vous accompagnons dans

                                                                le choix de votre investissement.</p>

                                                        </div>
                                                    </div>
                                                    <div class=\"separator  normal center  \" style=\"background-color: #b2b2b2;\"></div>
                                                </div></div></div></div></div>

                                    {% for neuf in neufs %}
                                <div id=\"infinite-scroll-container\">
                                    <div class=\"large-result-item result-item\">
                                        <div class=\"result-image-container vc_col-md-6 col-sm-12\">
                                            <a title=\"{{ neuf.titre }}\" href=\"{{ path('cosanit_neufshow',{'id': neuf.slug}) }}\" class=\"result-image\" style=\"background-image:url('{{ asset('photos_produits/')~ neuf.banniere1.path }}');\">
                                            </a>
                                        </div>
                                        <div class=\"result-content vc_col-md-6 col-sm-12\">
                                            <div class=\"result-content-inner\">
                                                <div class=\"location\"></div>
                                                <h1 style=\"  color: #c1002c;  font-size: 29px;\"><a title=\"{{ neuf.titre }}\" href=\"{{ path('cosanit_neufshow',{'id': neuf.slug}) }}\">{{ neuf.titre }}</a></h1>
                                                <p>{{ neuf.text2|slice(170, 480)|raw  }} ...</p>
                                                <a title=\"{{ neuf.titre }}\" href=\"{{ path('cosanit_neufshow',{'id': neuf.slug}) }}\" class=\"more-info\">+ Plus d???informations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- infinite-scroll-container -->
                                {% endfor %}



                            </div>
                        </div>
                    </div>

                    <div class=\"home-separator-4\"></div>
                    <div class=\"vc_row wpb_row vc_row-fluid grid_section news social-blocks\">
                        <div class=\"section_inner clearfix\">
                            <div class=\"section_inner_margin clearfix\">
                                <div class=\"vc_col-lg-12 wpb_column vc_column_container \">
                                    <h2 class=\"margin-top\">Nos R??seaux Sociaux</h2>
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
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-like.js'></script>
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
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer' defer='defer'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js'></script>




{% endblock %}", "@Cosanit/Default/investissements.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\investissements.html.twig");
    }
}
