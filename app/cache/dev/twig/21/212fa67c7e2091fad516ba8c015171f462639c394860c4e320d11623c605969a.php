<?php

/* CosanitBundle:Default:alert.html.twig */
class __TwigTemplate_8abd141e4ea6070b1e21dc7ff8d03a883a664a7c02b6e2440a5ad2a849de223a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:alert.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:alert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    .light nav.main_menu>ul>li>a, .light nav.main_menu>ul>li>a:hover, .light nav.main_menu>ul>li.active>a {
        color: #000;
    }
    .home .title_outer .has_background.title .title_holder, .single-universe .title_outer .has_background.title .title_holder{
        background: none;
    }
    .title_subtitle_holder_inner {
        position: relative;
        text-align: center;
        margin-top: -160px;
    }
    .multi-inner {
        max-width: 990px;
        padding: 0;
        display: grid;
        flex-wrap: wrap;
    }
    #alert_np{
        display: -webkit-box;
    }
    .form-simple .form-control {
        height: 50px;
        font-size: 16px;
        padding: 0 15px;
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid #dfdfdf;
    }
</style>
<div class=\"wrapper\">
    <div class=\"wrapper_inner\">


        <header class=\"page_header   regular  light  scroll_header_top_area\">
            <div class=\"header_inner clearfix\">

                <div class=\"header_top_bottom_holder\">
                    <div class=\"header_bottom clearfix\" style=\" background-color:#fff;     border-bottom: solid 1px #e5e5e5;\">                        <div class=\"container\">
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
                                        <div class=\"q_logo\"><a href=\"/\" style=\"height: 75px; visibility: visible;\"><img class=\"normal\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"light\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"dark\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"sticky\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"></a></div>

                                    </div>
                                </div>
                                <div class=\"header_inner_right\">
                                    <div class=\"side_menu_button_wrapper right\">
                                        <div class=\"side_menu_button\">

                                        </div>
                                    </div>
                                </div>
                                <a href=\"/contact\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                <nav class=\"main_menu drop_down right\">
                                    <ul id=\"menu-main-navigation\" class=\"\">
                                        <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Immobilier Ventes Algérie Oran\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                        <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats", array("id" => 1));
        echo "\" title=\"Immobilier Achats Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                        <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Ventes Algérie Oran\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                        <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location", array("id" => 1));
        echo " \" title=\"Immobilier Location Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                        <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Investissement Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                        <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>
                                    </ul>\t\t\t\t\t\t</nav>
                                <nav class=\"mobile_menu\">
                                    <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats", array("id" => 1));
        echo "\" title=\"Immobilier Achats Algérie Oran\" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes", array("id" => 1));
        echo "\" title=\"Immobilier Ventes Algérie Oran\"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location", array("id" => 1));
        echo "\"  title=\"Immobilier Location Algérie Oran\" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Investissement Algérie Oran\"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International Algérie Oran\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\"title=\"Immobilier Contact Algérie Oran\"  class=\"\"><span>Nous contacter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    </ul>\t\t\t\t\t</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <a id=\"back_to_top\" href=\"#\" class=\"on\">
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


                <div class=\"about_us_page\">

                    <div class=\"container\">
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
                            <br>
                            <button id=\"modal-trigger\" class=\"md-trigger\" data-modal=\"modal-1\"></button>

                            <div class=\"md-modal md-effect-1\" id=\"modal-1\">
                                <div class=\"md-content\">
                                    <h3>
                                        Message    </h3>
                                    <div>
                                        <ul>
                                            <li id=\"login\">
                                                <p>
                                                    Merci de vous connecter à votre compte pour créer une alerte.          </p>
                                                <div class=\"cl-effect-21 effect-links\" id=\"cl-effect-21\">
                                                    <a data-hover=\"Login\" >
                                                        Login            </a>
                                                    |
                                                    <a data-hover=\"Register\" >
                                                        Register            </a>
                                                </div>
                                            </li>

                                            <li id=\"duplicate\">
                                                <p>
                                                    Vous avez déjà une alerte avec ces critères. Merci de modifier vos critères.          </p>
                                            </li>

                                            <li id=\"success\">
                                                <p>
                                                    Vous avez ajouté une nouvelle alerte avec succès.          </p>
                                            </li>

                                            <li id=\"limit\">
                                                <p>
                                                    Vous avez atteind le maximum de 10 alertes par utilisateur.          </p>
                                            </li>

                                            <li id=\"error\">
                                                <p>
                                                    Une erreur s’est produite lors de la modification de votre alerte.          </p>
                                            </li>
                                        </ul>
                                        <button class=\"md-close\">Fermer</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"container\">
                                <div class=\"container_inner \">


                                    <div class=\"vc_row content-alert\">

                                        <div class=\"vc_col-md-8\">
                                            <div class=\"title-container\">
                                                <h1>Créer une alerte</h1>
                                                <p>L’inscription est gratuite et rapide. Vous pourrez stopper les envois d’annonces en cliquant sur un simple lien situé au bas des emails Alerte Immo.</p>
                                            </div>
                                            <div class=\"alert-form\">
                                                ";
        // line 180
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->source); })()), 'form_start', array("attr" => array("id" => "manual-alert", "class" => "form-simple")));
        echo "

                                                    <div class=\"form-separator first-form-separator\">
                                                        <span class=\"separator-value\">1</span>
                                                        <span class=\"separator-label\">Type de transaction</span>
                                                    </div>

                                                    <div class=\"form-group deal\">

                                                        ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->source); })()), "transaction", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus", "id" => "deal")));
        echo "
                                                        ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->source); })()), "transaction", array()), 'errors');
        echo "

                                                    </div>

                                                <div class=\"form-group deal\">

                                                    ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus duree", "id" => "deal2")));
        echo "
                                                    ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->source); })()), "duree", array()), 'errors');
        echo "
                                                </div>
                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">2</span>
                                                        <span class=\"separator-label\">Type de bien</span>
                                                    </div>

                                                    <div class=\"input-container\">

                                                        <div class=\"vc_row vc_row-categories\">

                                                            <div class=\"vc_col-md-12\">
                                                                <div class=\"multi-inner\">
                                                                    ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "multi-wrap ")));
        echo "
                                                                    ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 211, $this->source); })()), "types", array()), 'errors');
        echo "

                                                                </div>
                                                            </div>


                                                        </div>


                                                        <div class=\"vc_row rooms\" id=\"number-of-rooms\">
                                                            <div class=\"vc_col-md-3 form-label-container\">
                                                                <div class=\"form-label\">Nombre de chambres</div>
                                                            </div>
                                                            <div class=\"vc_col-md-1\">
                                                                <div class=\"big-checkbox\">
                                                                    ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 226, $this->source); })()), "np", array()), 'widget', array("attr" => array("class" => " multi-wrap")));
        echo "
                                                                    ";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 227, $this->source); })()), "np", array()), 'errors');
        echo "
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">3</span>
                                                        <span class=\"separator-label\">Budget</span>
                                                    </div>

                                                    <div class=\"vc_row\">
                                                        <div class=\"vc_col-md-5\">
                                                            ";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 242, $this->source); })()), "prixmin", array()), 'widget');
        echo "
                                                            ";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 243, $this->source); })()), "prixmin", array()), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"vc_col-md-5\">
                                                            ";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 246, $this->source); })()), "prixmax", array()), 'widget');
        echo "
                                                            ";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 247, $this->source); })()), "prixmax", array()), 'errors');
        echo "
                                                        </div>
                                                    </div>


                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">4</span>
                                                        <span class=\"separator-label\">Surface</span>
                                                    </div>

                                                    <div class=\"vc_row\">
                                                        <div class=\"vc_col-md-5\">
                                                            ";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 259, $this->source); })()), "surfacemin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 260, $this->source); })()), "surfacemin", array()), 'errors');
        echo "
                                                        </div>
                                                        <div class=\"vc_col-md-5\">
                                                            ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 263, $this->source); })()), "surfacemax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                            ";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->source); })()), "surfacemax", array()), 'errors');
        echo "
                                                        </div>
                                                    </div>

                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">5</span>
                                                        <span class=\"separator-label\">Code postal, région</span>
                                                    </div>
                                                    <div class=\"form-group city\">
                                                        ";
        // line 273
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "select2 select2-container select2-container--default select2-container--focus", "id" => "deal")));
        echo "
                                                        ";
        // line 274
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->source); })()), "categories", array()), 'errors');
        echo "
                                                    </div>



                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">6</span>
                                                        <span class=\"separator-label\">Critères avancés</span>
                                                    </div>

                                                <div class=\"vc_row vc_row-categories\">

                                                    <div class=\"vc_col-md-12\">
                                                        <div class=\"multi-inner\">
                                                            ";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 288, $this->source); })()), "criteres", array()), 'widget', array("attr" => array("class" => "multi-wrap ")));
        echo "
                                                            ";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 289, $this->source); })()), "criteres", array()), 'errors');
        echo "

                                                        </div>
                                                    </div>


                                                </div>


                                                    <div class=\"submit-container\">
                                                        <input id=\"add-alert\" class=\"btn-search\" type=\"submit\" value=\"Confirmer l'alerte\">
                                                    </div>

                                                ";
        // line 302
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->source); })()), 'form_end');
        echo "
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"content_bottom\">
                            </div>

                        </div>

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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){


            jQuery(\"#alert_transaction\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\"#alert_categories\").select2({
                placeholder: \"Où\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\"#alert_duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });


            jQuery('#alert_duree').next(\".select2-container\").css( { display: \"none\"  } );



            jQuery('#alert_transaction').change(function(){
                if(jQuery(this).val() == 'Location'){ // or this.value == 'volvo'

                    jQuery('#alert_duree').next(\".select2-container\").show('easing');


                }

                if(jQuery('#alert_transaction').val() == 'Vente'){ // or this.value == 'volvo'
                    jQuery('#alert_transaction').val() == null;

                    jQuery('#alert_duree').next(\".select2-container\").hide();


                }
            });


        })


    </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 302,  427 => 289,  423 => 288,  406 => 274,  402 => 273,  390 => 264,  386 => 263,  380 => 260,  376 => 259,  361 => 247,  357 => 246,  351 => 243,  347 => 242,  329 => 227,  325 => 226,  307 => 211,  303 => 210,  287 => 197,  283 => 196,  274 => 190,  270 => 189,  258 => 180,  155 => 80,  151 => 79,  147 => 78,  143 => 77,  139 => 76,  135 => 75,  129 => 72,  125 => 71,  121 => 70,  117 => 69,  113 => 68,  109 => 67,  44 => 4,  38 => 3,  15 => 2,);
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
    .title_subtitle_holder_inner {
        position: relative;
        text-align: center;
        margin-top: -160px;
    }
    .multi-inner {
        max-width: 990px;
        padding: 0;
        display: grid;
        flex-wrap: wrap;
    }
    #alert_np{
        display: -webkit-box;
    }
    .form-simple .form-control {
        height: 50px;
        font-size: 16px;
        padding: 0 15px;
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid #dfdfdf;
    }
</style>
<div class=\"wrapper\">
    <div class=\"wrapper_inner\">


        <header class=\"page_header   regular  light  scroll_header_top_area\">
            <div class=\"header_inner clearfix\">

                <div class=\"header_top_bottom_holder\">
                    <div class=\"header_bottom clearfix\" style=\" background-color:#fff;     border-bottom: solid 1px #e5e5e5;\">                        <div class=\"container\">
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
                                        <div class=\"q_logo\"><a href=\"/\" style=\"height: 75px; visibility: visible;\"><img class=\"normal\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"light\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"dark\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"><img class=\"sticky\" src=\"/img/logo2.svg\" alt=\"Logo\" style=\"height: 100%;\"></a></div>

                                    </div>
                                </div>
                                <div class=\"header_inner_right\">
                                    <div class=\"side_menu_button_wrapper right\">
                                        <div class=\"side_menu_button\">

                                        </div>
                                    </div>
                                </div>
                                <a href=\"/contact\" class=\"header-contactLink-mobile\">Nous contacter</a>
                                <nav class=\"main_menu drop_down right\">
                                    <ul id=\"menu-main-navigation\" class=\"\">
                                        <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_immobilier') }}\" title=\"Immobilier Ventes Algérie Oran\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                        <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"{{ path('cosanit_achats',{ 'id':1}) }}\" title=\"Immobilier Achats Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                        <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_ventes') }}  \"title=\"Immobilier Ventes Algérie Oran\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                        <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_location',{ 'id': 1 }) }} \" title=\"Immobilier Location Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                        <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_investissement') }}\"  title=\"Immobilier Investissement Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                        <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"{{ path('cosanit_internationals') }} \"  title=\"Immobilier International Algérie Oran\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>
                                    </ul>\t\t\t\t\t\t</nav>
                                <nav class=\"mobile_menu\">
                                    <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_achats',{ 'id': 1 }) }}\" title=\"Immobilier Achats Algérie Oran\" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_ventes',{ 'id':1 }) }}\" title=\"Immobilier Ventes Algérie Oran\"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_location',{ 'id': 1 }) }}\"  title=\"Immobilier Location Algérie Oran\" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_investissement') }}\"title=\"Immobilier Investissement Algérie Oran\"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_internationals') }}\"title=\"Immobilier International Algérie Oran\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                        <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"{{ path('cosanit_contact') }}\"title=\"Immobilier Contact Algérie Oran\"  class=\"\"><span>Nous contacter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    </ul>\t\t\t\t\t</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <a id=\"back_to_top\" href=\"#\" class=\"on\">
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


                <div class=\"about_us_page\">

                    <div class=\"container\">
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
                            <br>
                            <button id=\"modal-trigger\" class=\"md-trigger\" data-modal=\"modal-1\"></button>

                            <div class=\"md-modal md-effect-1\" id=\"modal-1\">
                                <div class=\"md-content\">
                                    <h3>
                                        Message    </h3>
                                    <div>
                                        <ul>
                                            <li id=\"login\">
                                                <p>
                                                    Merci de vous connecter à votre compte pour créer une alerte.          </p>
                                                <div class=\"cl-effect-21 effect-links\" id=\"cl-effect-21\">
                                                    <a data-hover=\"Login\" >
                                                        Login            </a>
                                                    |
                                                    <a data-hover=\"Register\" >
                                                        Register            </a>
                                                </div>
                                            </li>

                                            <li id=\"duplicate\">
                                                <p>
                                                    Vous avez déjà une alerte avec ces critères. Merci de modifier vos critères.          </p>
                                            </li>

                                            <li id=\"success\">
                                                <p>
                                                    Vous avez ajouté une nouvelle alerte avec succès.          </p>
                                            </li>

                                            <li id=\"limit\">
                                                <p>
                                                    Vous avez atteind le maximum de 10 alertes par utilisateur.          </p>
                                            </li>

                                            <li id=\"error\">
                                                <p>
                                                    Une erreur s’est produite lors de la modification de votre alerte.          </p>
                                            </li>
                                        </ul>
                                        <button class=\"md-close\">Fermer</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"container\">
                                <div class=\"container_inner \">


                                    <div class=\"vc_row content-alert\">

                                        <div class=\"vc_col-md-8\">
                                            <div class=\"title-container\">
                                                <h1>Créer une alerte</h1>
                                                <p>L’inscription est gratuite et rapide. Vous pourrez stopper les envois d’annonces en cliquant sur un simple lien situé au bas des emails Alerte Immo.</p>
                                            </div>
                                            <div class=\"alert-form\">
                                                {{ form_start(form, {'attr': {'id': 'manual-alert','class': 'form-simple'} }) }}

                                                    <div class=\"form-separator first-form-separator\">
                                                        <span class=\"separator-value\">1</span>
                                                        <span class=\"separator-label\">Type de transaction</span>
                                                    </div>

                                                    <div class=\"form-group deal\">

                                                        {{ form_widget(form.transaction,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus','id':'deal'}}) }}
                                                        {{ form_errors(form.transaction) }}

                                                    </div>

                                                <div class=\"form-group deal\">

                                                    {{ form_widget(form.duree,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus duree','id':'deal2'}}) }}
                                                    {{ form_errors(form.duree) }}
                                                </div>
                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">2</span>
                                                        <span class=\"separator-label\">Type de bien</span>
                                                    </div>

                                                    <div class=\"input-container\">

                                                        <div class=\"vc_row vc_row-categories\">

                                                            <div class=\"vc_col-md-12\">
                                                                <div class=\"multi-inner\">
                                                                    {{ form_widget(form.types,{'attr': {'class': 'multi-wrap '}}) }}
                                                                    {{ form_errors(form.types) }}

                                                                </div>
                                                            </div>


                                                        </div>


                                                        <div class=\"vc_row rooms\" id=\"number-of-rooms\">
                                                            <div class=\"vc_col-md-3 form-label-container\">
                                                                <div class=\"form-label\">Nombre de chambres</div>
                                                            </div>
                                                            <div class=\"vc_col-md-1\">
                                                                <div class=\"big-checkbox\">
                                                                    {{ form_widget(form.np,{'attr': {'class': ' multi-wrap'}}) }}
                                                                    {{ form_errors(form.np) }}
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">3</span>
                                                        <span class=\"separator-label\">Budget</span>
                                                    </div>

                                                    <div class=\"vc_row\">
                                                        <div class=\"vc_col-md-5\">
                                                            {{ form_widget(form.prixmin) }}
                                                            {{ form_errors(form.prixmin) }}
                                                        </div>
                                                        <div class=\"vc_col-md-5\">
                                                            {{ form_widget(form.prixmax) }}
                                                            {{ form_errors(form.prixmax) }}
                                                        </div>
                                                    </div>


                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">4</span>
                                                        <span class=\"separator-label\">Surface</span>
                                                    </div>

                                                    <div class=\"vc_row\">
                                                        <div class=\"vc_col-md-5\">
                                                            {{ form_widget(form.surfacemin,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.surfacemin) }}
                                                        </div>
                                                        <div class=\"vc_col-md-5\">
                                                            {{ form_widget(form.surfacemax,{'attr': {'class': 'form-control',}}) }}
                                                            {{ form_errors(form.surfacemax) }}
                                                        </div>
                                                    </div>

                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">5</span>
                                                        <span class=\"separator-label\">Code postal, région</span>
                                                    </div>
                                                    <div class=\"form-group city\">
                                                        {{ form_widget(form.categories,{'attr': {'class': 'select2 select2-container select2-container--default select2-container--focus','id':'deal'}}) }}
                                                        {{ form_errors(form.categories) }}
                                                    </div>



                                                    <div class=\"form-separator\">
                                                        <span class=\"separator-value\">6</span>
                                                        <span class=\"separator-label\">Critères avancés</span>
                                                    </div>

                                                <div class=\"vc_row vc_row-categories\">

                                                    <div class=\"vc_col-md-12\">
                                                        <div class=\"multi-inner\">
                                                            {{ form_widget(form.criteres,{'attr': {'class': 'multi-wrap '}}) }}
                                                            {{ form_errors(form.criteres) }}

                                                        </div>
                                                    </div>


                                                </div>


                                                    <div class=\"submit-container\">
                                                        <input id=\"add-alert\" class=\"btn-search\" type=\"submit\" value=\"Confirmer l'alerte\">
                                                    </div>

                                                {{ form_end(form) }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"content_bottom\">
                            </div>

                        </div>

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

    <script type=\"text/javascript\">
        jQuery(document).ready(function(){


            jQuery(\"#alert_transaction\").select2({
                placeholder: \"Quoi\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\"#alert_categories\").select2({
                placeholder: \"Où\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });
            jQuery(\"#alert_duree\").select2({
                placeholder: \"Durée\",
                allowClear: false,
                minimumResultsForSearch: Infinity

            });


            jQuery('#alert_duree').next(\".select2-container\").css( { display: \"none\"  } );



            jQuery('#alert_transaction').change(function(){
                if(jQuery(this).val() == 'Location'){ // or this.value == 'volvo'

                    jQuery('#alert_duree').next(\".select2-container\").show('easing');


                }

                if(jQuery('#alert_transaction').val() == 'Vente'){ // or this.value == 'volvo'
                    jQuery('#alert_transaction').val() == null;

                    jQuery('#alert_duree').next(\".select2-container\").hide();


                }
            });


        })


    </script>
        {% endblock %}
", "CosanitBundle:Default:alert.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/alert.html.twig");
    }
}
