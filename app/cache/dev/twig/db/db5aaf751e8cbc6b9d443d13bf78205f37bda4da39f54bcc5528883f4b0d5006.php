<?php

/* CosanitBundle:Default:index2.html.twig */
class __TwigTemplate_f9b083689b106895ec202ebfe7a4ddbc30e9ffe0a9800610359023b81c6536d2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:index2.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <style>
        .principal-cta, .secondary-cta, .fake-cta {
            border-bottom: 3px solid;
            color: white;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.125rem;
            line-height: 3.25rem;
            margin-bottom: 10px;
            outline: none;
            padding: 0 10px 0 1.0rem !important;
            position: relative;
            text-decoration: none;
            text-align: left;
        }
        .gwt-Button{
            border:none !important;
        }
        .toggle-view .cell-container .cell-informations .cell-tarif-card .cell-top {
            margin-top: 0;
            font-size: 40px !important;
        }
        #preloader {
            background-color: #fff;
        }
        .spinner {
            width: 200px;
            height: 130px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
    </style>
    <div id=\"preloader\">
        <div class=\"spinner\">
            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logos.gif"), "html", null, true);
        echo "\" width=\"200\" height=\"130\">
        </div>
        <div class=\"preloader-cancel-btn-wraper\"> <span class=\"btn btn-primary preloader-cancel-btn\">Cancel Preloader</span></div>
    </div>
    <div class=\"ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"26\" class=\"elementor elementor-26\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"hidden-sm elementor-element elementor-element-121aa97 ts-topbar topbar-bg elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"121aa97\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-08a4ead elementor-column elementor-col-33 elementor-top-column\" data-id=\"08a4ead\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-3fb9687 elementor-widget elementor-widget-elementskit-social-media\" data-id=\"3fb9687\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-social-media.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <ul class=\"ekit_social_media\">
                                                            <li class=\"elementor-repeater-item-0099aa1\">
                                                                <a href=\"https://facebook.com/\" class=\"facebook\"> <i class=\"icon icon-facebook\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-f6eb7ef\">
                                                                <a href=\"https://facebook.com/\" class=\"twitter\"> <i class=\"icon icon-twitter\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-95105d3\">
                                                                <a href=\"https://facebook.com/\" class=\"linkedin\"> <i class=\"icon icon-linkedin\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-ca58922\">
                                                                <a href=\"https://facebook.com/\" class=\"1\"> <i class=\"icon icon-instagram-1\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\" elementor-element elementor-element-a4032c0 elementor-column elementor-col-66 elementor-top-column\" data-id=\"a4032c0\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f265490 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-icon-list\" data-id=\"f265490\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items elementor-inline-items\">

                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"\"> <span class=\"elementor-icon-list-text\">Publicité</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"\"> <span class=\"elementor-icon-list-text\">Actualités</span> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"elementor-element elementor-element-84fde99 elementor-section-content-middle header-top-info elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"84fde99\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-9742e77 elementor-column elementor-col-25 elementor-top-column\" data-id=\"9742e77\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f2f60b1 elementor-widget elementor-widget-instive-logo\" data-id=\"f2f60b1\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-logo.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"instive-widget-logo\">
                                                        <a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2019/09/logo.svg"), "html", null, true);
        echo "\" alt=\"Instive\"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ddeb951 elementor-column elementor-col-25 elementor-top-column\" data-id=\"ddeb951\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f48a41b elementor-widget elementor-widget-elementskit-icon-box\" data-id=\"f48a41b\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-icon-box.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media \">
                                                            <div class=\"elementskit-box-header elementor-animation-\">
                                                                <div class=\"elementskit-info-box-icon text-center\"> <i class=\"fa fa-envelope-open elementkit-infobox-icon\" aria-hidden=\"true\"></i></div>
                                                            </div>
                                                            <div class=\"box-body\">
                                                                <h3 class=\"elementskit-info-box-title\"> info@ncomparer.com</h3>
                                                                <p>Écrivez-nous</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-e0c929a elementor-column elementor-col-25 elementor-top-column\" data-id=\"e0c929a\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-67eb265 elementor-widget elementor-widget-elementskit-icon-box\" data-id=\"67eb265\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-icon-box.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media \">
                                                            <div class=\"elementskit-box-header elementor-animation-\">
                                                                <div class=\"elementskit-info-box-icon text-center\"> <i class=\"fa fa-phone elementkit-infobox-icon\" aria-hidden=\"true\"></i></div>
                                                            </div>
                                                            <div class=\"box-body\">
                                                                <h3 class=\"elementskit-info-box-title\">+ 213 (0) 561 630 322</h3>
                                                                <p>Appellez-nous</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-0b040db elementor-column elementor-col-25 elementor-top-column\" data-id=\"0b040db\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-baf44ee elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button\" data-id=\"baf44ee\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"button.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-button-wrapper\">
                                                        <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_devisauto");
        echo "\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\"> <span class=\"elementor-button-content-wrapper\"> <span class=\"elementor-button-icon elementor-align-icon-left\"> <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 16 16\"><title>get_a_qoute</title><link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Rubik%3A500%2C400%2C700%2C900%7COpen%20Sans%3A800%2C%2C400%2C700%2C900%7CRubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i%26amp%3Bdisplay%3Dswap%7COpen%20Sans%3A300%2C300i%2C400%2C400i%2C700%2C700i%2C800%2C900%2C900i%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A400%7COpen%20Sans%3A700%2C800%2C400%2C600&amp;display=swap\" /><path d=\"M14,0H2A2,2,0,0,0,0,2V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V2A2,2,0,0,0,14,0ZM13,9H3V7H13ZM9,13H3V11H9Zm4-8H3V3H13Z\"></path></svg> </span> <span class=\"elementor-button-text\">Obtenez un devis</span> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                                                                        <li id=\"menu-item-13\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-13 nav-item elementskit-dropdown-has elementskit-mobile-builder-content active\">
                                                                                            <a href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle active\">
                                                                                                Accueil</a>

                                                                                        </li>
                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Assurances<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_devisauto");
        echo "\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Comparer les <br>assurances auto</button>
                                                                                                    </a>
                                                                                                </li>



                                                                                            </ul>
                                                                                        </li>

                                                                                        <li id=\"menu-item-103\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Actualités<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">
                                                                                                <li id=\"menu-item-3034\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3034 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\" dropdown-item\">Notre actualité</a>
                                                                                                <li id=\"menu-item-3033\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-3033 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\" dropdown-item\">Espace publicité</a></ul>
                                                                                        </li>


                                                                                        <li id=\"menu-item-2628\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2628 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Qui sommes nous ?<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">
                                                                                                <li id=\"menu-item-2631\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2631 nav-item elementskit-mobile-builder-content\"><a href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_apropos");
        echo "\" class=\" dropdown-item\">Présentation</a>
                                                                                                <li id=\"menu-item-3134\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3134 nav-item elementskit-mobile-builder-content\"><a href=\"#\" class=\" dropdown-item\">Nos partenaires</a>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li id=\"menu-item-106\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-106 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link\">Contact</a></li>
                                                                                    </ul>
                                                                                    <div class=\"elementskit-nav-identity-panel\">
                                                                                        <div class=\"elementskit-site-title\">
                                                                                            <a class=\"elementskit-nav-logo\" href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" target=\"_self\" rel=\"\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2019/08/logo.svg"), "html", null, true);
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
                                                        <div class=\"elementor-element elementor-element-8652702 elementor-column elementor-col-33 elementor-inner-column\" data-id=\"8652702\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-7e45152 elementor-widget elementor-widget-instive-search\" data-id=\"7e45152\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-search.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ts-search-box\">
                                                                                <form method=\"get\" action=\"http://demo.themewinter.com/wp/instive/\" class=\"instive-serach xs-search-group\">
                                                                                    <div class=\"input-group\">
                                                                                        <input type=\"search\" class=\"form-control\" name=\"s\" placeholder=\"Search...\" value=\"\">
                                                                                        <button class=\"input-group-btn search-button\"><i class=\"fa fa-search\"></i></button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"elementor-element elementor-element-f2ecfec elementor-column elementor-col-33 elementor-inner-column\" data-id=\"f2ecfec\" data-element_type=\"column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-d2e5690 elementor-widget elementor-widget-elementskit-header-offcanvas\" data-id=\"d2e5690\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-header-offcanvas.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ekit-wid-con\">
                                                                                <div class=\"ekit-offcanvas-toggle-wraper\">
                                                                                    <a href=\"#\" class=\"ekit_navSidebar-button ekit_offcanvas-sidebar\"> <i class=\"icon icon-menu-9\" aria-hidden=\"true\"></i> </a>
                                                                                </div>
                                                                                <div class=\"ekit-sidebar-group info-group\">
                                                                                    <div class=\"ekit-overlay ekit-bg-black\"></div>
                                                                                    <div class=\"ekit-sidebar-widget\">
                                                                                        <div class=\"ekit_sidebar-widget-container\">
                                                                                            <div class=\"ekit_widget-heading\">
                                                                                                <a href=\"#\" class=\"ekit_close-side-widget\"> <i aria-hidden=\"true\" class=\"fas fa-times\"></i> </a>
                                                                                            </div>
                                                                                            <div class=\"ekit_sidebar-textwidget\">
                                                                                                <div class=\"widgetarea_warper widgetarea_warper_editable\" data-elementskit-widgetarea-key=\"1708bef\" data-elementskit-widgetarea-index=\"99\">
                                                                                                    <div class=\"widgetarea_warper_edit\" data-elementskit-widgetarea-key=\"1708bef\" data-elementskit-widgetarea-index=\"99\"> <i class=\"eicon-edit\" aria-hidden=\"true\"></i> <span class=\"elementor-screen-only\">Edit</span></div>
                                                                                                    <div class=\"elementor-widget-container\">
                                                                                                        <div data-elementor-type=\"wp-post\" data-elementor-id=\"968\" class=\"elementor elementor-968\" data-elementor-settings=\"[]\">
                                                                                                            <div class=\"elementor-inner\">
                                                                                                                <div class=\"elementor-section-wrap\">
                                                                                                                    <section class=\"elementor-element elementor-element-8077bdd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"8077bdd\" data-element_type=\"section\">
                                                                                                                        <div class=\"elementor-container elementor-column-gap-default\">
                                                                                                                            <div class=\"elementor-row\">
                                                                                                                                <div class=\"elementor-element elementor-element-f79e31b elementor-column elementor-col-100 elementor-top-column\" data-id=\"f79e31b\" data-element_type=\"column\">
                                                                                                                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                                                                                        <div class=\"elementor-widget-wrap\">
                                                                                                                                            <div class=\"elementor-element elementor-element-83d6c1e elementor-widget elementor-widget-image\" data-id=\"83d6c1e\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"image.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"elementor-image\">
                                                                                                                                                        <a href=\"\" data-elementor-open-lightbox=\"\"> <img width=\"356\" height=\"92\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2019/09/logo.svg"), "html", null, true);
        echo "\" class=\"attachment-full size-full\" alt=\"\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2019/09/logo.svg"), "html", null, true);
        echo " 356w, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2019/09/logo.svg"), "html", null, true);
        echo " 300w\" sizes=\"(max-width: 356px) 100vw, 356px\" /> </a>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-1bfc3c7 elementor-widget elementor-widget-heading\" data-id=\"1bfc3c7\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">À PROPOS</h2></div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-3f6da04 elementor-widget elementor-widget-text-editor\" data-id=\"3f6da04\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                                                                                                                        <p>Nous sommes une société de courtage d'assurance et gestion des risques, agréée par arrêté du ministaire des finances de puis 1988 et nous disposons d'une équipe pluridisciplinaire spécialisée dans la gestion des risques d'entreprises.</p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-021b604 elementor-widget elementor-widget-elementskit-button\" data-id=\"021b604\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-button.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"ekit-wid-con\">
                                                                                                                                                        <div class=\"ekit-btn-wraper\"> <a href=\"#\" target=\"_blank\" rel=\"nofollow\" class=\"elementskit-btn \"> Contactez-nous </a></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-b32bb6c elementor-widget elementor-widget-heading\" data-id=\"b32bb6c\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">Contact</h2></div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-6ae0212 elementor-align-left elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"6ae0212\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <ul class=\"elementor-icon-list-items\">
                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fab fa-telegram-plane\"></i> </span> <span class=\"elementor-icon-list-text\">contact@wafassurance.com</span></li>

                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">33,Rue DJELLAT Habib Oran Algérie</span></li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\">
                                                                                                                                                            <a href=\"tel:+213560287112\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\">+213 (0) 560 287 112</span> </a>
                                                                                                                                                        </li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">39, Rue de la Madeleine Hydra Alger Algérie</span></li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\">
                                                                                                                                                            <a href=\"tel:+213561630322\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\">+213 (0) 561 630 322</span> </a>
                                                                                                                                                        </li>
                                                                                                                                                    </ul>
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
    <div data-elementor-type=\"wp-page\" data-elementor-id=\"7\" class=\"elementor elementor-7\" data-elementor-settings=\"[]\">
        <div class=\"elementor-inner\">
            <div class=\"elementor-section-wrap\">





                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"filters-wrapper\">
                                ";
        // line 380
        echo twig_escape_filter($this->env, (isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 380, $this->source); })()), "html", null, true);
        echo "
                                <div class=\"filters-message content\"> <span style=\"color:#003478;\">Voici les <strong>6 meilleures offres</strong> pour votre <strong>vehicule</strong>, classées par prix croissants et de façon impartiale.&nbsp;</span> <span class=\"gwt-InlineHTML\"></span> </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">

                        ";
        // line 388
        if ((((isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 388, $this->source); })()) == "Tout risque") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 388, $this->source); })()) == "3mois"))) {
            // line 389
            echo "
                            ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trs3mois"]) || array_key_exists("trs3mois", $context) ? $context["trs3mois"] : (function () { throw new Twig_Error_Runtime('Variable "trs3mois" does not exist.', 390, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 391
                echo "                                ";
                $context["total"] = (((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new Twig_Error_Runtime('Variable "valeur" does not exist.', 391, $this->source); })()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                // line 392
                echo "
                                <div class=\"formule-container \" id=\"assu2000-2-container\">
                                    <div class=\"cell-container col-md-6\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 398
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 398, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / 3mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "
                        ";
        } elseif (((        // line 424
(isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 424, $this->source); })()) == "Tout risque") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 424, $this->source); })()) == "6mois"))) {
            // line 425
            echo "
                            ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trs6mois"]) || array_key_exists("trs6mois", $context) ? $context["trs6mois"] : (function () { throw new Twig_Error_Runtime('Variable "trs6mois" does not exist.', 426, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 427
                echo "                                ";
                $context["total"] = (((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new Twig_Error_Runtime('Variable "valeur" does not exist.', 427, $this->source); })()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                // line 428
                echo "
                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 432
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 434
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 434, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / 6mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "
                        ";
        } elseif (((        // line 460
(isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 460, $this->source); })()) == "Tout risque") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 460, $this->source); })()) == "1an"))) {
            // line 461
            echo "
                            ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["trs1an"]) || array_key_exists("trs1an", $context) ? $context["trs1an"] : (function () { throw new Twig_Error_Runtime('Variable "trs1an" does not exist.', 462, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 463
                echo "                                ";
                $context["total"] = (((isset($context["valeur"]) || array_key_exists("valeur", $context) ? $context["valeur"] : (function () { throw new Twig_Error_Runtime('Variable "valeur" does not exist.', 463, $this->source); })()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                // line 464
                echo "
                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 468
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 470
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 470, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            echo "

                        ";
        } elseif (((        // line 497
(isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 497, $this->source); })()) == "DommageCollision10000DA") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 497, $this->source); })()) == "3mois"))) {
            // line 498
            echo "
                            ";
            // line 499
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 499, $this->source); })()) == "3a4CH")) {
                // line 500
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 501
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc33mois"]) || array_key_exists("rc33mois", $context) ? $context["rc33mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc33mois" does not exist.', 501, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 502
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 503
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 504
                echo "                            ";
            }
            // line 505
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 505, $this->source); })()) == "5a6CH")) {
                // line 506
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 507
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc53mois"]) || array_key_exists("rc53mois", $context) ? $context["rc53mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc53mois" does not exist.', 507, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 508
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 509
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 510
                echo "                            ";
            }
            // line 511
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 511, $this->source); })()) == "7a10CH")) {
                // line 512
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 513
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc73mois"]) || array_key_exists("rc73mois", $context) ? $context["rc73mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc73mois" does not exist.', 513, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 514
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 515
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 516
                echo "                            ";
            }
            // line 517
            echo "
                            ";
            // line 518
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 518, $this->source); })()) == "10a14CH")) {
                // line 519
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 520
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc103mois"]) || array_key_exists("rc103mois", $context) ? $context["rc103mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc103mois" does not exist.', 520, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 521
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 522
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 523
                echo "                            ";
            }
            // line 524
            echo "
                            ";
            // line 525
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 525, $this->source); })()) == "15etplus")) {
                // line 526
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 527
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc153mois"]) || array_key_exists("rc153mois", $context) ? $context["rc153mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc153mois" does not exist.', 527, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 528
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 529
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 530
                echo "                            ";
            }
            // line 531
            echo "
                            ";
            // line 532
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 532, $this->source); })()) == 0)) {
                // line 533
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 534
                echo "                                ";
                $context["totalrc5"] = 0;
                // line 535
                echo "                                ";
                $context["totalrc7"] = 0;
                // line 536
                echo "                                ";
                $context["totalrc10"] = 0;
                // line 537
                echo "                                ";
                $context["totalrc15"] = 0;
                // line 538
                echo "
                            ";
            }
            // line 540
            echo "


                            ";
            // line 543
            if (((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new Twig_Error_Runtime('Variable "vols" does not exist.', 543, $this->source); })()) == 1)) {
                // line 544
                echo "                                ";
                $context["totalvols"] = 0;
                // line 545
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vols3mois"]) || array_key_exists("vols3mois", $context) ? $context["vols3mois"] : (function () { throw new Twig_Error_Runtime('Variable "vols3mois" does not exist.', 545, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 546
                    echo "                                    ";
                    $context["totalvols"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 547
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 548
                echo "
                            ";
            } else {
                // line 550
                echo "                                ";
                $context["totalvols"] = 0;
                // line 551
                echo "                            ";
            }
            // line 552
            echo "
                            ";
            // line 553
            if (((isset($context["incendies"]) || array_key_exists("incendies", $context) ? $context["incendies"] : (function () { throw new Twig_Error_Runtime('Variable "incendies" does not exist.', 553, $this->source); })()) == 1)) {
                // line 554
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 555
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["incendies3mois"]) || array_key_exists("incendies3mois", $context) ? $context["incendies3mois"] : (function () { throw new Twig_Error_Runtime('Variable "incendies3mois" does not exist.', 555, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 556
                    echo "                                    ";
                    $context["totalincendies"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 557
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 558
                echo "                            ";
            } else {
                // line 559
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 560
                echo "                            ";
            }
            // line 561
            echo "
                            ";
            // line 562
            if (((isset($context["bris"]) || array_key_exists("bris", $context) ? $context["bris"] : (function () { throw new Twig_Error_Runtime('Variable "bris" does not exist.', 562, $this->source); })()) == 1)) {
                // line 563
                echo "                                ";
                $context["totalbris"] = 0;
                // line 564
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bris3mois"]) || array_key_exists("bris3mois", $context) ? $context["bris3mois"] : (function () { throw new Twig_Error_Runtime('Variable "bris3mois" does not exist.', 564, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 565
                    echo "                                    ";
                    $context["totalbris"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 566
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 567
                echo "                            ";
            } else {
                // line 568
                echo "                                ";
                $context["totalbris"] = 0;
                // line 569
                echo "                            ";
            }
            // line 570
            echo "
                            ";
            // line 571
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 571, $this->source); })()) == 1)) {
                // line 572
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 573
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance13mois"]) || array_key_exists("assistance13mois", $context) ? $context["assistance13mois"] : (function () { throw new Twig_Error_Runtime('Variable "assistance13mois" does not exist.', 573, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 574
                    echo "                                    ";
                    $context["totalassistance1"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 575
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 576
                echo "                            ";
            } else {
                // line 577
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 578
                echo "                            ";
            }
            // line 579
            echo "
                            ";
            // line 580
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 580, $this->source); })()) == 1)) {
                // line 581
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 582
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance23mois"]) || array_key_exists("assistance23mois", $context) ? $context["assistance23mois"] : (function () { throw new Twig_Error_Runtime('Variable "assistance23mois" does not exist.', 582, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 583
                    echo "                                    ";
                    $context["totalassistance2"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 584
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 585
                echo "                            ";
            } else {
                // line 586
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 587
                echo "                            ";
            }
            // line 588
            echo "
                            ";
            // line 589
            if (((isset($context["defences"]) || array_key_exists("defences", $context) ? $context["defences"] : (function () { throw new Twig_Error_Runtime('Variable "defences" does not exist.', 589, $this->source); })()) == 1)) {
                // line 590
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 591
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["defences3mois"]) || array_key_exists("defences3mois", $context) ? $context["defences3mois"] : (function () { throw new Twig_Error_Runtime('Variable "defences3mois" does not exist.', 591, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 592
                    echo "                                    ";
                    $context["totaldefences"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100);
                    // line 593
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 594
                echo "                            ";
            } else {
                // line 595
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 596
                echo "                            ";
            }
            // line 597
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dc103mois"]) || array_key_exists("dc103mois", $context) ? $context["dc103mois"] : (function () { throw new Twig_Error_Runtime('Variable "dc103mois" does not exist.', 597, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 598
                echo "

                                ";
                // line 600
                $context["total"] = (((((((((twig_get_attribute($this->env, $this->source, $context["tr"], "valeur3mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux3mois", array()), 1)) / 100) + (isset($context["totalrc3"]) || array_key_exists("totalrc3", $context) ? $context["totalrc3"] : (function () { throw new Twig_Error_Runtime('Variable "totalrc3" does not exist.', 600, $this->source); })())) + (isset($context["totalvols"]) || array_key_exists("totalvols", $context) ? $context["totalvols"] : (function () { throw new Twig_Error_Runtime('Variable "totalvols" does not exist.', 600, $this->source); })())) + (isset($context["totalincendies"]) || array_key_exists("totalincendies", $context) ? $context["totalincendies"] : (function () { throw new Twig_Error_Runtime('Variable "totalincendies" does not exist.', 600, $this->source); })())) + (isset($context["totalbris"]) || array_key_exists("totalbris", $context) ? $context["totalbris"] : (function () { throw new Twig_Error_Runtime('Variable "totalbris" does not exist.', 600, $this->source); })())) + (isset($context["totalassistance1"]) || array_key_exists("totalassistance1", $context) ? $context["totalassistance1"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance1" does not exist.', 600, $this->source); })())) + (isset($context["totalassistance2"]) || array_key_exists("totalassistance2", $context) ? $context["totalassistance2"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance2" does not exist.', 600, $this->source); })())) + (isset($context["totaldefences"]) || array_key_exists("totaldefences", $context) ? $context["totaldefences"] : (function () { throw new Twig_Error_Runtime('Variable "totaldefences" does not exist.', 600, $this->source); })()));
                // line 601
                echo "
                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 605
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 607
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 607, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 634
            echo "
                        ";
        } elseif (((        // line 635
(isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 635, $this->source); })()) == "DommageCollision10000DA") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 635, $this->source); })()) == "6mois"))) {
            // line 636
            echo "
                            ";
            // line 637
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 637, $this->source); })()) == "3a4CH")) {
                // line 638
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 639
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc36mois"]) || array_key_exists("rc36mois", $context) ? $context["rc36mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc36mois" does not exist.', 639, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 640
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 641
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 642
                echo "                            ";
            }
            // line 643
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 643, $this->source); })()) == "5a6CH")) {
                // line 644
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 645
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc56mois"]) || array_key_exists("rc56mois", $context) ? $context["rc56mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc56mois" does not exist.', 645, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 646
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 647
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 648
                echo "                            ";
            }
            // line 649
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 649, $this->source); })()) == "7a10CH")) {
                // line 650
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 651
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc76mois"]) || array_key_exists("rc76mois", $context) ? $context["rc76mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc76mois" does not exist.', 651, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 652
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 653
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 654
                echo "                            ";
            }
            // line 655
            echo "
                            ";
            // line 656
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 656, $this->source); })()) == "10a14CH")) {
                // line 657
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 658
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc106mois"]) || array_key_exists("rc106mois", $context) ? $context["rc106mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc106mois" does not exist.', 658, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 659
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 660
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 661
                echo "                            ";
            }
            // line 662
            echo "
                            ";
            // line 663
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 663, $this->source); })()) == "15etplus")) {
                // line 664
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 665
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc156mois"]) || array_key_exists("rc156mois", $context) ? $context["rc156mois"] : (function () { throw new Twig_Error_Runtime('Variable "rc156mois" does not exist.', 665, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 666
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 667
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 668
                echo "                            ";
            }
            // line 669
            echo "
                            ";
            // line 670
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 670, $this->source); })()) == 0)) {
                // line 671
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 672
                echo "                                ";
                $context["totalrc5"] = 0;
                // line 673
                echo "                                ";
                $context["totalrc7"] = 0;
                // line 674
                echo "                                ";
                $context["totalrc10"] = 0;
                // line 675
                echo "                                ";
                $context["totalrc15"] = 0;
                // line 676
                echo "
                            ";
            }
            // line 678
            echo "


                            ";
            // line 681
            if (((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new Twig_Error_Runtime('Variable "vols" does not exist.', 681, $this->source); })()) == 1)) {
                // line 682
                echo "                                ";
                $context["totalvols"] = 0;
                // line 683
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vols6mois"]) || array_key_exists("vols6mois", $context) ? $context["vols6mois"] : (function () { throw new Twig_Error_Runtime('Variable "vols6mois" does not exist.', 683, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 684
                    echo "                                    ";
                    $context["totalvols"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 685
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 686
                echo "
                            ";
            } else {
                // line 688
                echo "                                ";
                $context["totalvols"] = 0;
                // line 689
                echo "                            ";
            }
            // line 690
            echo "
                            ";
            // line 691
            if (((isset($context["incendies"]) || array_key_exists("incendies", $context) ? $context["incendies"] : (function () { throw new Twig_Error_Runtime('Variable "incendies" does not exist.', 691, $this->source); })()) == 1)) {
                // line 692
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 693
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["incendies6mois"]) || array_key_exists("incendies6mois", $context) ? $context["incendies6mois"] : (function () { throw new Twig_Error_Runtime('Variable "incendies6mois" does not exist.', 693, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 694
                    echo "                                    ";
                    $context["totalincendies"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 695
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 696
                echo "                            ";
            } else {
                // line 697
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 698
                echo "                            ";
            }
            // line 699
            echo "
                            ";
            // line 700
            if (((isset($context["bris"]) || array_key_exists("bris", $context) ? $context["bris"] : (function () { throw new Twig_Error_Runtime('Variable "bris" does not exist.', 700, $this->source); })()) == 1)) {
                // line 701
                echo "                                ";
                $context["totalbris"] = 0;
                // line 702
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bris6mois"]) || array_key_exists("bris6mois", $context) ? $context["bris6mois"] : (function () { throw new Twig_Error_Runtime('Variable "bris6mois" does not exist.', 702, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 703
                    echo "                                    ";
                    $context["totalbris"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 704
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 705
                echo "                            ";
            } else {
                // line 706
                echo "                                ";
                $context["totalbris"] = 0;
                // line 707
                echo "                            ";
            }
            // line 708
            echo "
                            ";
            // line 709
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 709, $this->source); })()) == 1)) {
                // line 710
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 711
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance16mois"]) || array_key_exists("assistance16mois", $context) ? $context["assistance16mois"] : (function () { throw new Twig_Error_Runtime('Variable "assistance16mois" does not exist.', 711, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 712
                    echo "                                    ";
                    $context["totalassistance1"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 713
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 714
                echo "                            ";
            } else {
                // line 715
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 716
                echo "                            ";
            }
            // line 717
            echo "
                            ";
            // line 718
            if (((isset($context["assistance2"]) || array_key_exists("assistance2", $context) ? $context["assistance2"] : (function () { throw new Twig_Error_Runtime('Variable "assistance2" does not exist.', 718, $this->source); })()) == 1)) {
                // line 719
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 720
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance26mois"]) || array_key_exists("assistance26mois", $context) ? $context["assistance26mois"] : (function () { throw new Twig_Error_Runtime('Variable "assistance26mois" does not exist.', 720, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 721
                    echo "                                    ";
                    $context["totalassistance2"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 722
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 723
                echo "                            ";
            } else {
                // line 724
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 725
                echo "                            ";
            }
            // line 726
            echo "
                            ";
            // line 727
            if (((isset($context["defences"]) || array_key_exists("defences", $context) ? $context["defences"] : (function () { throw new Twig_Error_Runtime('Variable "defences" does not exist.', 727, $this->source); })()) == 1)) {
                // line 728
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 729
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["defences6mois"]) || array_key_exists("defences6mois", $context) ? $context["defences6mois"] : (function () { throw new Twig_Error_Runtime('Variable "defences6mois" does not exist.', 729, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 730
                    echo "                                    ";
                    $context["totaldefences"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100);
                    // line 731
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 732
                echo "                            ";
            } else {
                // line 733
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 734
                echo "                            ";
            }
            // line 735
            echo "
                            ";
            // line 736
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dc106mois"]) || array_key_exists("dc106mois", $context) ? $context["dc106mois"] : (function () { throw new Twig_Error_Runtime('Variable "dc106mois" does not exist.', 736, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 737
                echo "

                                ";
                // line 739
                $context["total"] = (((((((((twig_get_attribute($this->env, $this->source, $context["tr"], "valeur6mois", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux6mois", array()), 1)) / 100) + (isset($context["totalrc3"]) || array_key_exists("totalrc3", $context) ? $context["totalrc3"] : (function () { throw new Twig_Error_Runtime('Variable "totalrc3" does not exist.', 739, $this->source); })())) + (isset($context["totalvols"]) || array_key_exists("totalvols", $context) ? $context["totalvols"] : (function () { throw new Twig_Error_Runtime('Variable "totalvols" does not exist.', 739, $this->source); })())) + (isset($context["totalincendies"]) || array_key_exists("totalincendies", $context) ? $context["totalincendies"] : (function () { throw new Twig_Error_Runtime('Variable "totalincendies" does not exist.', 739, $this->source); })())) + (isset($context["totalbris"]) || array_key_exists("totalbris", $context) ? $context["totalbris"] : (function () { throw new Twig_Error_Runtime('Variable "totalbris" does not exist.', 739, $this->source); })())) + (isset($context["totalassistance1"]) || array_key_exists("totalassistance1", $context) ? $context["totalassistance1"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance1" does not exist.', 739, $this->source); })())) + (isset($context["totalassistance2"]) || array_key_exists("totalassistance2", $context) ? $context["totalassistance2"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance2" does not exist.', 739, $this->source); })())) + (isset($context["totaldefences"]) || array_key_exists("totaldefences", $context) ? $context["totaldefences"] : (function () { throw new Twig_Error_Runtime('Variable "totaldefences" does not exist.', 739, $this->source); })()));
                // line 740
                echo "
                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 744
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 746
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 746, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 773
            echo "

                        ";
        } elseif (((        // line 775
(isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 775, $this->source); })()) == "DommageCollision10000DA") && ((isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 775, $this->source); })()) == "1an"))) {
            // line 776
            echo "
                            ";
            // line 777
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 777, $this->source); })()) == "3a4CH")) {
                // line 778
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 779
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc31an"]) || array_key_exists("rc31an", $context) ? $context["rc31an"] : (function () { throw new Twig_Error_Runtime('Variable "rc31an" does not exist.', 779, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 780
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 781
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 782
                echo "                            ";
            }
            // line 783
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 783, $this->source); })()) == "5a6CH")) {
                // line 784
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 785
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc51an"]) || array_key_exists("rc51an", $context) ? $context["rc51an"] : (function () { throw new Twig_Error_Runtime('Variable "rc51an" does not exist.', 785, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 786
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 787
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 788
                echo "                            ";
            }
            // line 789
            echo "                            ";
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 789, $this->source); })()) == "7a10CH")) {
                // line 790
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 791
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc71an"]) || array_key_exists("rc71an", $context) ? $context["rc71an"] : (function () { throw new Twig_Error_Runtime('Variable "rc71an" does not exist.', 791, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 792
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 793
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 794
                echo "                            ";
            }
            // line 795
            echo "
                            ";
            // line 796
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 796, $this->source); })()) == "10a14CH")) {
                // line 797
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 798
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc101an"]) || array_key_exists("rc101an", $context) ? $context["rc101an"] : (function () { throw new Twig_Error_Runtime('Variable "rc101an" does not exist.', 798, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 799
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 800
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 801
                echo "                            ";
            }
            // line 802
            echo "
                            ";
            // line 803
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 803, $this->source); })()) == "15etplus")) {
                // line 804
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 805
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["rc151an"]) || array_key_exists("rc151an", $context) ? $context["rc151an"] : (function () { throw new Twig_Error_Runtime('Variable "rc151an" does not exist.', 805, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 806
                    echo "                                    ";
                    $context["totalrc3"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 807
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 808
                echo "                            ";
            }
            // line 809
            echo "
                            ";
            // line 810
            if (((isset($context["puissance"]) || array_key_exists("puissance", $context) ? $context["puissance"] : (function () { throw new Twig_Error_Runtime('Variable "puissance" does not exist.', 810, $this->source); })()) == 0)) {
                // line 811
                echo "                                ";
                $context["totalrc3"] = 0;
                // line 812
                echo "                                ";
                $context["totalrc5"] = 0;
                // line 813
                echo "                                ";
                $context["totalrc7"] = 0;
                // line 814
                echo "                                ";
                $context["totalrc10"] = 0;
                // line 815
                echo "                                ";
                $context["totalrc15"] = 0;
                // line 816
                echo "
                            ";
            }
            // line 818
            echo "


                            ";
            // line 821
            if (((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new Twig_Error_Runtime('Variable "vols" does not exist.', 821, $this->source); })()) == 1)) {
                // line 822
                echo "                                ";
                $context["totalvols"] = 0;
                // line 823
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vols1an"]) || array_key_exists("vols1an", $context) ? $context["vols1an"] : (function () { throw new Twig_Error_Runtime('Variable "vols1an" does not exist.', 823, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 824
                    echo "                                    ";
                    $context["totalvols"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 825
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 826
                echo "
                            ";
            } else {
                // line 828
                echo "                                ";
                $context["totalvols"] = 0;
                // line 829
                echo "                            ";
            }
            // line 830
            echo "
                            ";
            // line 831
            if (((isset($context["incendies"]) || array_key_exists("incendies", $context) ? $context["incendies"] : (function () { throw new Twig_Error_Runtime('Variable "incendies" does not exist.', 831, $this->source); })()) == 1)) {
                // line 832
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 833
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["incendies1an"]) || array_key_exists("incendies1an", $context) ? $context["incendies1an"] : (function () { throw new Twig_Error_Runtime('Variable "incendies1an" does not exist.', 833, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 834
                    echo "                                    ";
                    $context["totalincendies"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 835
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 836
                echo "                            ";
            } else {
                // line 837
                echo "                                ";
                $context["totalincendies"] = 0;
                // line 838
                echo "                            ";
            }
            // line 839
            echo "
                            ";
            // line 840
            if (((isset($context["bris"]) || array_key_exists("bris", $context) ? $context["bris"] : (function () { throw new Twig_Error_Runtime('Variable "bris" does not exist.', 840, $this->source); })()) == 1)) {
                // line 841
                echo "                                ";
                $context["totalbris"] = 0;
                // line 842
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["bris1an"]) || array_key_exists("bris1an", $context) ? $context["bris1an"] : (function () { throw new Twig_Error_Runtime('Variable "bris1an" does not exist.', 842, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 843
                    echo "                                    ";
                    $context["totalbris"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 844
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 845
                echo "                            ";
            } else {
                // line 846
                echo "                                ";
                $context["totalbris"] = 0;
                // line 847
                echo "                            ";
            }
            // line 848
            echo "
                            ";
            // line 849
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 849, $this->source); })()) == 1)) {
                // line 850
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 851
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance11an"]) || array_key_exists("assistance11an", $context) ? $context["assistance11an"] : (function () { throw new Twig_Error_Runtime('Variable "assistance11an" does not exist.', 851, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 852
                    echo "                                    ";
                    $context["totalassistance1"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 853
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 854
                echo "                            ";
            } else {
                // line 855
                echo "                                ";
                $context["totalassistance1"] = 0;
                // line 856
                echo "                            ";
            }
            // line 857
            echo "
                            ";
            // line 858
            if (((isset($context["assistance2"]) || array_key_exists("assistance2", $context) ? $context["assistance2"] : (function () { throw new Twig_Error_Runtime('Variable "assistance2" does not exist.', 858, $this->source); })()) == 1)) {
                // line 859
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 860
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assistance21an"]) || array_key_exists("assistance21an", $context) ? $context["assistance21an"] : (function () { throw new Twig_Error_Runtime('Variable "assistance21an" does not exist.', 860, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 861
                    echo "                                    ";
                    $context["totalassistance2"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 862
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 863
                echo "                            ";
            } else {
                // line 864
                echo "                                ";
                $context["totalassistance2"] = 0;
                // line 865
                echo "                            ";
            }
            // line 866
            echo "
                            ";
            // line 867
            if (((isset($context["defences"]) || array_key_exists("defences", $context) ? $context["defences"] : (function () { throw new Twig_Error_Runtime('Variable "defences" does not exist.', 867, $this->source); })()) == 1)) {
                // line 868
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 869
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["defences1an"]) || array_key_exists("defences1an", $context) ? $context["defences1an"] : (function () { throw new Twig_Error_Runtime('Variable "defences1an" does not exist.', 869, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                    // line 870
                    echo "                                    ";
                    $context["totaldefences"] = (( +twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100);
                    // line 871
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 872
                echo "                            ";
            } else {
                // line 873
                echo "                                ";
                $context["totaldefences"] = 0;
                // line 874
                echo "                            ";
            }
            // line 875
            echo "
                            ";
            // line 876
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dc101an"]) || array_key_exists("dc101an", $context) ? $context["dc101an"] : (function () { throw new Twig_Error_Runtime('Variable "dc101an" does not exist.', 876, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tr"]) {
                // line 877
                echo "

                                ";
                // line 879
                $context["total"] = (((((((((twig_get_attribute($this->env, $this->source, $context["tr"], "valeur1an", array()) * twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tr"], "taux1an", array()), 1)) / 100) + (isset($context["totalrc3"]) || array_key_exists("totalrc3", $context) ? $context["totalrc3"] : (function () { throw new Twig_Error_Runtime('Variable "totalrc3" does not exist.', 879, $this->source); })())) + (isset($context["totalvols"]) || array_key_exists("totalvols", $context) ? $context["totalvols"] : (function () { throw new Twig_Error_Runtime('Variable "totalvols" does not exist.', 879, $this->source); })())) + (isset($context["totalincendies"]) || array_key_exists("totalincendies", $context) ? $context["totalincendies"] : (function () { throw new Twig_Error_Runtime('Variable "totalincendies" does not exist.', 879, $this->source); })())) + (isset($context["totalbris"]) || array_key_exists("totalbris", $context) ? $context["totalbris"] : (function () { throw new Twig_Error_Runtime('Variable "totalbris" does not exist.', 879, $this->source); })())) + (isset($context["totalassistance1"]) || array_key_exists("totalassistance1", $context) ? $context["totalassistance1"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance1" does not exist.', 879, $this->source); })())) + (isset($context["totalassistance2"]) || array_key_exists("totalassistance2", $context) ? $context["totalassistance2"] : (function () { throw new Twig_Error_Runtime('Variable "totalassistance2" does not exist.', 879, $this->source); })())) + (isset($context["totaldefences"]) || array_key_exists("totaldefences", $context) ? $context["totaldefences"] : (function () { throw new Twig_Error_Runtime('Variable "totaldefences" does not exist.', 879, $this->source); })()));
                // line 880
                echo "
                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"";
                // line 884
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tr"], "categories", array()), "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
                echo "\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">";
                // line 886
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 886, $this->source); })()), 2, ",", " "), "html", null, true);
                echo " <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 913
            echo "                        ";
        } else {
            // line 914
            echo "
                            Aucune offre ne répond à votre besoin.

                        ";
        }
        // line 918
        echo "
                    </div>


                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            1 of 2
                        </div>
                        <div class=\"col-md-3\">
                            2 of 2
                        </div>
                        <div class=\"col-md-3\">
                            2 of 2
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class=\"ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"176\" class=\"elementor elementor-176\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"elementor-element elementor-element-2216195 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"2216195\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-e9e7883 elementor-column elementor-col-25 elementor-top-column\" data-id=\"e9e7883\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-1027f00 elementor-widget elementor-widget-heading\" data-id=\"1027f00\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Notre compagnie</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-0a7f838 elementor-align-left blo-list-icon-center elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"0a7f838\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Présentation</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Actualités</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Services</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Notre équipe</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Nos partenaires</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Contact</span> </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-4743411 elementor-column elementor-col-25 elementor-top-column\" data-id=\"4743411\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-b4e25b9 elementor-widget elementor-widget-heading\" data-id=\"b4e25b9\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Assurances</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-5febffe elementor-align-left blo-list-icon-center elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"5febffe\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Assurance automobile</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Assurance voyage</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Catastrophe naturelle</span> </a>
                                                        </li>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ea19f28 elementor-column elementor-col-25 elementor-top-column\" data-id=\"ea19f28\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-66e1559 elementor-widget elementor-widget-heading\" data-id=\"66e1559\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Contactez-nous</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-6f5e985 elementor-widget elementor-widget-text-editor\" data-id=\"6f5e985\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>Nous sommes ici pour vous:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-b1cfbc7 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"b1cfbc7\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">33,Rue DJELLAT Habib Oran Algérie</span></li>
                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">39, Rue de la Madeleine Hydra Alger Algérie</span></li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"tel:+213560287112\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\"><b>+213 (0) 560 287 112</b></span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"tel:+213561630322\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\"><b>+213 (0) 561 630 322</b></span> </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-655c699 elementor-column elementor-col-25 elementor-top-column\" data-id=\"655c699\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-402e214 elementor-widget elementor-widget-heading\" data-id=\"402e214\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Newsletter</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-64e5550 elementor-widget elementor-widget-text-editor\" data-id=\"64e5550\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>Recevez toute l'actualité de waffassurance. Vous pouvez annuler à tout moment.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-03dd3ad text-center elementor-widget elementor-widget-elementskit-mail-chimp\" data-id=\"03dd3ad\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-mail-chimp.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"ekit-mail-chimp\">
                                                            <form method=\"post\" class=\"ekit-mailChimpForm\" data-listed=\"\" data-success-message=\"Successfully listed this email\">
                                                                <div class=\"ekit-mail-message\"></div>
                                                                <div class=\"elementskit_form_wraper \">
                                                                    <div class=\"ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container\">
                                                                        <div class=\"elementskit_form_group\">
                                                                            <div class=\"elementskit_input_element_container \">
                                                                                <input type=\"email\" name=\"email\" class=\"ekit_mail_email ekit_form_control \" placeholder=\"Votre Email\" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ekit_submit_input_holder elementskit_input_wraper\">
                                                                        <button type=\"submit\" class=\"ekit-mail-submit\" name=\"ekit_mail_chimp\"> <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Abonnez-vous maintenant</button>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                    <section class=\"elementor-element elementor-element-efa6ebe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"efa6ebe\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-bc20519 elementor-column elementor-col-33 elementor-top-column\" data-id=\"bc20519\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-07a9809 elementor-widget elementor-widget-text-editor\" data-id=\"07a9809\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>© 2020, WAFASSURANCE
                                                            All Rights Reserved. <br />Développement web : CREATIV</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-b09610a elementor-column elementor-col-33 elementor-top-column\" data-id=\"b09610a\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-dbd7d8f elementor-widget elementor-widget-image\" data-id=\"dbd7d8f\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"image.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-image\">
                                                        <a href=\"index.html\" data-elementor-open-lightbox=\"\"> <img width=\"230\"  src=\"wp-content/uploads/2019/09/logo2.svg\" alt=\"\" /> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ae83954 elementor-column elementor-col-33 elementor-top-column\" data-id=\"ae83954\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-88a1f97 elementor-widget elementor-widget-elementskit-social-media\" data-id=\"88a1f97\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-social-media.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <ul class=\"ekit_social_media\">
                                                            <li class=\"elementor-repeater-item-a318456\">
                                                                <a href=\"https://facebook.com/\" class=\"facebook\"> <i class=\"icon icon-facebook\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-15d420d\">
                                                                <a href=\"https://facebook.com/\" class=\"linkedin\"> <i class=\"icon icon-linkedin\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-41ad09b\">
                                                                <a href=\"https://facebook.com/\" class=\"v\"> <i class=\"icon icon-youtube-v\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-6756370\">
                                                                <a href=\"https://facebook.com/\" class=\"envelope1\"> <i class=\"icon icon-envelope1\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"elementor-element elementor-element-ed87453 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"ed87453\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-no\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-5e9c433 elementor-column elementor-col-100 elementor-top-column\" data-id=\"5e9c433\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-ee3f72b elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-instive-back-to-top\" data-id=\"ee3f72b\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-back-to-top.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ts-scroll-box\">
                                                        <div class=\"scroll-button\">
                                                            <a href=\"#\" class=\"scroll-top\" aria-hidden=\"true\"> <i class=\"tsicon tsicon-arrow-up\"></i> </a>
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1829 => 918,  1823 => 914,  1820 => 913,  1787 => 886,  1782 => 884,  1776 => 880,  1774 => 879,  1770 => 877,  1766 => 876,  1763 => 875,  1760 => 874,  1757 => 873,  1754 => 872,  1748 => 871,  1745 => 870,  1740 => 869,  1737 => 868,  1735 => 867,  1732 => 866,  1729 => 865,  1726 => 864,  1723 => 863,  1717 => 862,  1714 => 861,  1709 => 860,  1706 => 859,  1704 => 858,  1701 => 857,  1698 => 856,  1695 => 855,  1692 => 854,  1686 => 853,  1683 => 852,  1678 => 851,  1675 => 850,  1673 => 849,  1670 => 848,  1667 => 847,  1664 => 846,  1661 => 845,  1655 => 844,  1652 => 843,  1647 => 842,  1644 => 841,  1642 => 840,  1639 => 839,  1636 => 838,  1633 => 837,  1630 => 836,  1624 => 835,  1621 => 834,  1616 => 833,  1613 => 832,  1611 => 831,  1608 => 830,  1605 => 829,  1602 => 828,  1598 => 826,  1592 => 825,  1589 => 824,  1584 => 823,  1581 => 822,  1579 => 821,  1574 => 818,  1570 => 816,  1567 => 815,  1564 => 814,  1561 => 813,  1558 => 812,  1555 => 811,  1553 => 810,  1550 => 809,  1547 => 808,  1541 => 807,  1538 => 806,  1533 => 805,  1530 => 804,  1528 => 803,  1525 => 802,  1522 => 801,  1516 => 800,  1513 => 799,  1508 => 798,  1505 => 797,  1503 => 796,  1500 => 795,  1497 => 794,  1491 => 793,  1488 => 792,  1483 => 791,  1480 => 790,  1477 => 789,  1474 => 788,  1468 => 787,  1465 => 786,  1460 => 785,  1457 => 784,  1454 => 783,  1451 => 782,  1445 => 781,  1442 => 780,  1437 => 779,  1434 => 778,  1432 => 777,  1429 => 776,  1427 => 775,  1423 => 773,  1390 => 746,  1385 => 744,  1379 => 740,  1377 => 739,  1373 => 737,  1369 => 736,  1366 => 735,  1363 => 734,  1360 => 733,  1357 => 732,  1351 => 731,  1348 => 730,  1343 => 729,  1340 => 728,  1338 => 727,  1335 => 726,  1332 => 725,  1329 => 724,  1326 => 723,  1320 => 722,  1317 => 721,  1312 => 720,  1309 => 719,  1307 => 718,  1304 => 717,  1301 => 716,  1298 => 715,  1295 => 714,  1289 => 713,  1286 => 712,  1281 => 711,  1278 => 710,  1276 => 709,  1273 => 708,  1270 => 707,  1267 => 706,  1264 => 705,  1258 => 704,  1255 => 703,  1250 => 702,  1247 => 701,  1245 => 700,  1242 => 699,  1239 => 698,  1236 => 697,  1233 => 696,  1227 => 695,  1224 => 694,  1219 => 693,  1216 => 692,  1214 => 691,  1211 => 690,  1208 => 689,  1205 => 688,  1201 => 686,  1195 => 685,  1192 => 684,  1187 => 683,  1184 => 682,  1182 => 681,  1177 => 678,  1173 => 676,  1170 => 675,  1167 => 674,  1164 => 673,  1161 => 672,  1158 => 671,  1156 => 670,  1153 => 669,  1150 => 668,  1144 => 667,  1141 => 666,  1136 => 665,  1133 => 664,  1131 => 663,  1128 => 662,  1125 => 661,  1119 => 660,  1116 => 659,  1111 => 658,  1108 => 657,  1106 => 656,  1103 => 655,  1100 => 654,  1094 => 653,  1091 => 652,  1086 => 651,  1083 => 650,  1080 => 649,  1077 => 648,  1071 => 647,  1068 => 646,  1063 => 645,  1060 => 644,  1057 => 643,  1054 => 642,  1048 => 641,  1045 => 640,  1040 => 639,  1037 => 638,  1035 => 637,  1032 => 636,  1030 => 635,  1027 => 634,  994 => 607,  989 => 605,  983 => 601,  981 => 600,  977 => 598,  972 => 597,  969 => 596,  966 => 595,  963 => 594,  957 => 593,  954 => 592,  949 => 591,  946 => 590,  944 => 589,  941 => 588,  938 => 587,  935 => 586,  932 => 585,  926 => 584,  923 => 583,  918 => 582,  915 => 581,  913 => 580,  910 => 579,  907 => 578,  904 => 577,  901 => 576,  895 => 575,  892 => 574,  887 => 573,  884 => 572,  882 => 571,  879 => 570,  876 => 569,  873 => 568,  870 => 567,  864 => 566,  861 => 565,  856 => 564,  853 => 563,  851 => 562,  848 => 561,  845 => 560,  842 => 559,  839 => 558,  833 => 557,  830 => 556,  825 => 555,  822 => 554,  820 => 553,  817 => 552,  814 => 551,  811 => 550,  807 => 548,  801 => 547,  798 => 546,  793 => 545,  790 => 544,  788 => 543,  783 => 540,  779 => 538,  776 => 537,  773 => 536,  770 => 535,  767 => 534,  764 => 533,  762 => 532,  759 => 531,  756 => 530,  750 => 529,  747 => 528,  742 => 527,  739 => 526,  737 => 525,  734 => 524,  731 => 523,  725 => 522,  722 => 521,  717 => 520,  714 => 519,  712 => 518,  709 => 517,  706 => 516,  700 => 515,  697 => 514,  692 => 513,  689 => 512,  686 => 511,  683 => 510,  677 => 509,  674 => 508,  669 => 507,  666 => 506,  663 => 505,  660 => 504,  654 => 503,  651 => 502,  646 => 501,  643 => 500,  641 => 499,  638 => 498,  636 => 497,  632 => 495,  601 => 470,  596 => 468,  590 => 464,  587 => 463,  583 => 462,  580 => 461,  578 => 460,  575 => 459,  544 => 434,  539 => 432,  533 => 428,  530 => 427,  526 => 426,  523 => 425,  521 => 424,  518 => 423,  487 => 398,  482 => 396,  476 => 392,  473 => 391,  469 => 390,  466 => 389,  464 => 388,  453 => 380,  358 => 292,  292 => 231,  281 => 223,  259 => 204,  248 => 196,  216 => 167,  156 => 112,  85 => 44,  44 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}

    <style>
        .principal-cta, .secondary-cta, .fake-cta {
            border-bottom: 3px solid;
            color: white;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.125rem;
            line-height: 3.25rem;
            margin-bottom: 10px;
            outline: none;
            padding: 0 10px 0 1.0rem !important;
            position: relative;
            text-decoration: none;
            text-align: left;
        }
        .gwt-Button{
            border:none !important;
        }
        .toggle-view .cell-container .cell-informations .cell-tarif-card .cell-top {
            margin-top: 0;
            font-size: 40px !important;
        }
        #preloader {
            background-color: #fff;
        }
        .spinner {
            width: 200px;
            height: 130px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
    </style>
    <div id=\"preloader\">
        <div class=\"spinner\">
            <img src=\"{{ asset('logos.gif') }}\" width=\"200\" height=\"130\">
        </div>
        <div class=\"preloader-cancel-btn-wraper\"> <span class=\"btn btn-primary preloader-cancel-btn\">Cancel Preloader</span></div>
    </div>
    <div class=\"ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"26\" class=\"elementor elementor-26\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"hidden-sm elementor-element elementor-element-121aa97 ts-topbar topbar-bg elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"121aa97\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-08a4ead elementor-column elementor-col-33 elementor-top-column\" data-id=\"08a4ead\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-3fb9687 elementor-widget elementor-widget-elementskit-social-media\" data-id=\"3fb9687\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-social-media.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <ul class=\"ekit_social_media\">
                                                            <li class=\"elementor-repeater-item-0099aa1\">
                                                                <a href=\"https://facebook.com/\" class=\"facebook\"> <i class=\"icon icon-facebook\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-f6eb7ef\">
                                                                <a href=\"https://facebook.com/\" class=\"twitter\"> <i class=\"icon icon-twitter\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-95105d3\">
                                                                <a href=\"https://facebook.com/\" class=\"linkedin\"> <i class=\"icon icon-linkedin\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-ca58922\">
                                                                <a href=\"https://facebook.com/\" class=\"1\"> <i class=\"icon icon-instagram-1\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\" elementor-element elementor-element-a4032c0 elementor-column elementor-col-66 elementor-top-column\" data-id=\"a4032c0\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f265490 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-icon-list\" data-id=\"f265490\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items elementor-inline-items\">

                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"\"> <span class=\"elementor-icon-list-text\">Publicité</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"\"> <span class=\"elementor-icon-list-text\">Actualités</span> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"elementor-element elementor-element-84fde99 elementor-section-content-middle header-top-info elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"84fde99\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-9742e77 elementor-column elementor-col-25 elementor-top-column\" data-id=\"9742e77\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f2f60b1 elementor-widget elementor-widget-instive-logo\" data-id=\"f2f60b1\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-logo.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"instive-widget-logo\">
                                                        <a href=\"{{ path('cosanit_homepage') }}\"> <img src=\"{{ asset('wp-content/uploads/2019/09/logo.svg') }}\" alt=\"Instive\"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ddeb951 elementor-column elementor-col-25 elementor-top-column\" data-id=\"ddeb951\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-f48a41b elementor-widget elementor-widget-elementskit-icon-box\" data-id=\"f48a41b\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-icon-box.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media \">
                                                            <div class=\"elementskit-box-header elementor-animation-\">
                                                                <div class=\"elementskit-info-box-icon text-center\"> <i class=\"fa fa-envelope-open elementkit-infobox-icon\" aria-hidden=\"true\"></i></div>
                                                            </div>
                                                            <div class=\"box-body\">
                                                                <h3 class=\"elementskit-info-box-title\"> info@ncomparer.com</h3>
                                                                <p>Écrivez-nous</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-e0c929a elementor-column elementor-col-25 elementor-top-column\" data-id=\"e0c929a\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-67eb265 elementor-widget elementor-widget-elementskit-icon-box\" data-id=\"67eb265\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-icon-box.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"elementskit-infobox text-left icon-lef-right-aligin elementor-animation- media \">
                                                            <div class=\"elementskit-box-header elementor-animation-\">
                                                                <div class=\"elementskit-info-box-icon text-center\"> <i class=\"fa fa-phone elementkit-infobox-icon\" aria-hidden=\"true\"></i></div>
                                                            </div>
                                                            <div class=\"box-body\">
                                                                <h3 class=\"elementskit-info-box-title\">+ 213 (0) 561 630 322</h3>
                                                                <p>Appellez-nous</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-0b040db elementor-column elementor-col-25 elementor-top-column\" data-id=\"0b040db\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-baf44ee elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-button\" data-id=\"baf44ee\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"button.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-button-wrapper\">
                                                        <a href=\"{{ path('cosanit_devisauto') }}\" class=\"elementor-button-link elementor-button elementor-size-sm\" role=\"button\"> <span class=\"elementor-button-content-wrapper\"> <span class=\"elementor-button-icon elementor-align-icon-left\"> <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 16 16\"><title>get_a_qoute</title><link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Rubik%3A500%2C400%2C700%2C900%7COpen%20Sans%3A800%2C%2C400%2C700%2C900%7CRubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i%26amp%3Bdisplay%3Dswap%7COpen%20Sans%3A300%2C300i%2C400%2C400i%2C700%2C700i%2C800%2C900%2C900i%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A400%7COpen%20Sans%3A700%2C800%2C400%2C600&amp;display=swap\" /><path d=\"M14,0H2A2,2,0,0,0,0,2V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V2A2,2,0,0,0,14,0ZM13,9H3V7H13ZM9,13H3V11H9Zm4-8H3V3H13Z\"></path></svg> </span> <span class=\"elementor-button-text\">Obtenez un devis</span> </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                                                                        <li id=\"menu-item-13\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-13 nav-item elementskit-dropdown-has elementskit-mobile-builder-content active\">
                                                                                            <a href=\"{{ path('cosanit_homepage') }}\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle active\">
                                                                                                Accueil</a>

                                                                                        </li>
                                                                                        <li id=\"menu-item-2620\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2620 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"#\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Assurances<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">

                                                                                                <li id=\"menu-item-2625\" class=\"menu-item menu-item-type-post_type menu-item-object-instive-insurance menu-item-2624 nav-item elementskit-mobile-builder-content\">
                                                                                                    <a href=\"{{ path('cosanit_devisauto') }}\" class=\" dropdown-item\">
                                                                                                        <button type=\"submit\" class=\"ekit-mail-submit butt\" name=\"ekit_mail_chimp\">  Comparer les <br>assurances auto</button>
                                                                                                    </a>
                                                                                                </li>



                                                                                            </ul>
                                                                                        </li>

                                                                                        <li id=\"menu-item-103\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-103 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Actualités<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">
                                                                                                <li id=\"menu-item-3034\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3034 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\" dropdown-item\">Notre actualité</a>
                                                                                                <li id=\"menu-item-3033\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-3033 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\" dropdown-item\">Espace publicité</a></ul>
                                                                                        </li>


                                                                                        <li id=\"menu-item-2628\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2628 nav-item elementskit-dropdown-has elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link ekit-menu-dropdown-toggle\">Qui sommes nous ?<i class=\"elementskit-submenu-indicator\"></i></a>
                                                                                            <ul class=\"elementskit-dropdown elementskit-submenu-panel\">
                                                                                                <li id=\"menu-item-2631\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-2631 nav-item elementskit-mobile-builder-content\"><a href=\"{{ path('cosanit_apropos') }}\" class=\" dropdown-item\">Présentation</a>
                                                                                                <li id=\"menu-item-3134\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-3134 nav-item elementskit-mobile-builder-content\"><a href=\"#\" class=\" dropdown-item\">Nos partenaires</a>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li id=\"menu-item-106\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-106 nav-item elementskit-mobile-builder-content\"><a href=\"\" class=\"ekit-menu-nav-link\">Contact</a></li>
                                                                                    </ul>
                                                                                    <div class=\"elementskit-nav-identity-panel\">
                                                                                        <div class=\"elementskit-site-title\">
                                                                                            <a class=\"elementskit-nav-logo\" href=\"{{ path('cosanit_homepage') }}\" target=\"_self\" rel=\"\"> <img src=\"{{ asset('wp-content/uploads/2019/08/logo.svg') }}\" alt=\"\"> </a>
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
                                                        <div class=\"elementor-element elementor-element-8652702 elementor-column elementor-col-33 elementor-inner-column\" data-id=\"8652702\" data-element_type=\"column\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-7e45152 elementor-widget elementor-widget-instive-search\" data-id=\"7e45152\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-search.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ts-search-box\">
                                                                                <form method=\"get\" action=\"http://demo.themewinter.com/wp/instive/\" class=\"instive-serach xs-search-group\">
                                                                                    <div class=\"input-group\">
                                                                                        <input type=\"search\" class=\"form-control\" name=\"s\" placeholder=\"Search...\" value=\"\">
                                                                                        <button class=\"input-group-btn search-button\"><i class=\"fa fa-search\"></i></button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"elementor-element elementor-element-f2ecfec elementor-column elementor-col-33 elementor-inner-column\" data-id=\"f2ecfec\" data-element_type=\"column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-d2e5690 elementor-widget elementor-widget-elementskit-header-offcanvas\" data-id=\"d2e5690\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-header-offcanvas.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"ekit-wid-con\">
                                                                                <div class=\"ekit-offcanvas-toggle-wraper\">
                                                                                    <a href=\"#\" class=\"ekit_navSidebar-button ekit_offcanvas-sidebar\"> <i class=\"icon icon-menu-9\" aria-hidden=\"true\"></i> </a>
                                                                                </div>
                                                                                <div class=\"ekit-sidebar-group info-group\">
                                                                                    <div class=\"ekit-overlay ekit-bg-black\"></div>
                                                                                    <div class=\"ekit-sidebar-widget\">
                                                                                        <div class=\"ekit_sidebar-widget-container\">
                                                                                            <div class=\"ekit_widget-heading\">
                                                                                                <a href=\"#\" class=\"ekit_close-side-widget\"> <i aria-hidden=\"true\" class=\"fas fa-times\"></i> </a>
                                                                                            </div>
                                                                                            <div class=\"ekit_sidebar-textwidget\">
                                                                                                <div class=\"widgetarea_warper widgetarea_warper_editable\" data-elementskit-widgetarea-key=\"1708bef\" data-elementskit-widgetarea-index=\"99\">
                                                                                                    <div class=\"widgetarea_warper_edit\" data-elementskit-widgetarea-key=\"1708bef\" data-elementskit-widgetarea-index=\"99\"> <i class=\"eicon-edit\" aria-hidden=\"true\"></i> <span class=\"elementor-screen-only\">Edit</span></div>
                                                                                                    <div class=\"elementor-widget-container\">
                                                                                                        <div data-elementor-type=\"wp-post\" data-elementor-id=\"968\" class=\"elementor elementor-968\" data-elementor-settings=\"[]\">
                                                                                                            <div class=\"elementor-inner\">
                                                                                                                <div class=\"elementor-section-wrap\">
                                                                                                                    <section class=\"elementor-element elementor-element-8077bdd elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"8077bdd\" data-element_type=\"section\">
                                                                                                                        <div class=\"elementor-container elementor-column-gap-default\">
                                                                                                                            <div class=\"elementor-row\">
                                                                                                                                <div class=\"elementor-element elementor-element-f79e31b elementor-column elementor-col-100 elementor-top-column\" data-id=\"f79e31b\" data-element_type=\"column\">
                                                                                                                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                                                                                        <div class=\"elementor-widget-wrap\">
                                                                                                                                            <div class=\"elementor-element elementor-element-83d6c1e elementor-widget elementor-widget-image\" data-id=\"83d6c1e\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"image.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"elementor-image\">
                                                                                                                                                        <a href=\"\" data-elementor-open-lightbox=\"\"> <img width=\"356\" height=\"92\" src=\"{{ asset('wp-content/uploads/2019/09/logo.svg') }}\" class=\"attachment-full size-full\" alt=\"\" srcset=\"{{ asset('wp-content/uploads/2019/09/logo.svg') }} 356w, {{ asset('wp-content/uploads/2019/09/logo.svg') }} 300w\" sizes=\"(max-width: 356px) 100vw, 356px\" /> </a>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-1bfc3c7 elementor-widget elementor-widget-heading\" data-id=\"1bfc3c7\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">À PROPOS</h2></div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-3f6da04 elementor-widget elementor-widget-text-editor\" data-id=\"3f6da04\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                                                                                                                        <p>Nous sommes une société de courtage d'assurance et gestion des risques, agréée par arrêté du ministaire des finances de puis 1988 et nous disposons d'une équipe pluridisciplinaire spécialisée dans la gestion des risques d'entreprises.</p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-021b604 elementor-widget elementor-widget-elementskit-button\" data-id=\"021b604\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-button.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <div class=\"ekit-wid-con\">
                                                                                                                                                        <div class=\"ekit-btn-wraper\"> <a href=\"#\" target=\"_blank\" rel=\"nofollow\" class=\"elementskit-btn \"> Contactez-nous </a></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-b32bb6c elementor-widget elementor-widget-heading\" data-id=\"b32bb6c\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">Contact</h2></div>
                                                                                                                                            </div>
                                                                                                                                            <div class=\"elementor-element elementor-element-6ae0212 elementor-align-left elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"6ae0212\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                                                                                                                <div class=\"elementor-widget-container\">
                                                                                                                                                    <ul class=\"elementor-icon-list-items\">
                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fab fa-telegram-plane\"></i> </span> <span class=\"elementor-icon-list-text\">contact@wafassurance.com</span></li>

                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">33,Rue DJELLAT Habib Oran Algérie</span></li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\">
                                                                                                                                                            <a href=\"tel:+213560287112\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\">+213 (0) 560 287 112</span> </a>
                                                                                                                                                        </li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">39, Rue de la Madeleine Hydra Alger Algérie</span></li>
                                                                                                                                                        <li class=\"elementor-icon-list-item\">
                                                                                                                                                            <a href=\"tel:+213561630322\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\">+213 (0) 561 630 322</span> </a>
                                                                                                                                                        </li>
                                                                                                                                                    </ul>
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
    <div data-elementor-type=\"wp-page\" data-elementor-id=\"7\" class=\"elementor elementor-7\" data-elementor-settings=\"[]\">
        <div class=\"elementor-inner\">
            <div class=\"elementor-section-wrap\">





                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"filters-wrapper\">
                                {{ garantie }}
                                <div class=\"filters-message content\"> <span style=\"color:#003478;\">Voici les <strong>6 meilleures offres</strong> pour votre <strong>vehicule</strong>, classées par prix croissants et de façon impartiale.&nbsp;</span> <span class=\"gwt-InlineHTML\"></span> </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"row\">

                        {% if garantie == 'Tout risque' and duree == '3mois' %}

                            {% for tr in trs3mois %}
                                {% set total = valeur * tr.taux3mois|number_format(1) / 100  %}

                                <div class=\"formule-container \" id=\"assu2000-2-container\">
                                    <div class=\"cell-container col-md-6\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / 3mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                        {% elseif garantie == 'Tout risque' and duree == '6mois' %}

                            {% for tr in trs6mois %}
                                {% set total = valeur * tr.taux3mois|number_format(1) / 100  %}

                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / 6mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                        {% elseif garantie == 'Tout risque' and duree == '1an' %}

                            {% for tr in trs1an %}
                                {% set total = valeur * tr.taux3mois|number_format(1) / 100  %}

                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}


                        {% elseif garantie == 'DommageCollision10000DA' and duree == '3mois' %}

                            {% if puissance == '3a4CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc33mois %}
                                    {% set totalrc3 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '5a6CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc53mois %}
                                    {% set totalrc3 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '7a10CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc73mois %}
                                    {% set totalrc3 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '10a14CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc103mois %}
                                    {% set totalrc3 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '15etplus' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc153mois %}
                                    {% set totalrc3 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == 0 %}
                                {% set totalrc3 = 0 %}
                                {% set totalrc5 = 0 %}
                                {% set totalrc7 = 0 %}
                                {% set totalrc10 = 0 %}
                                {% set totalrc15 = 0 %}

                            {% endif %}



                            {% if vols == 1 %}
                                {% set totalvols = 0 %}
                                {% for tr in vols3mois %}
                                    {% set totalvols =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}

                            {% else %}
                                {% set totalvols = 0 %}
                            {% endif %}

                            {% if incendies == 1 %}
                                {% set totalincendies = 0 %}
                                {% for tr in incendies3mois %}
                                    {% set totalincendies =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalincendies = 0 %}
                            {% endif %}

                            {% if bris == 1 %}
                                {% set totalbris = 0 %}
                                {% for tr in bris3mois %}
                                    {% set totalbris =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalbris = 0 %}
                            {% endif %}

                            {% if assistance1 == 1 %}
                                {% set totalassistance1 = 0 %}
                                {% for tr in assistance13mois %}
                                    {% set totalassistance1 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance1 = 0 %}
                            {% endif %}

                            {% if assistance1 == 1 %}
                                {% set totalassistance2 = 0 %}
                                {% for tr in assistance23mois %}
                                    {% set totalassistance2 =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance2 = 0 %}
                            {% endif %}

                            {% if defences == 1 %}
                                {% set totaldefences = 0 %}
                                {% for tr in defences3mois %}
                                    {% set totaldefences =+ tr.valeur3mois * tr.taux3mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totaldefences = 0 %}
                            {% endif %}
                            {% for tr in dc103mois %}


                                {% set total = tr.valeur3mois * tr.taux3mois|number_format(1) / 100 + totalrc3 + totalvols + totalincendies + totalbris + totalassistance1 + totalassistance2 + totaldefences %}

                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            {% endfor %}

                        {% elseif garantie == 'DommageCollision10000DA' and duree == '6mois' %}

                            {% if puissance == '3a4CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc36mois %}
                                    {% set totalrc3 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '5a6CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc56mois %}
                                    {% set totalrc3 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '7a10CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc76mois %}
                                    {% set totalrc3 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '10a14CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc106mois %}
                                    {% set totalrc3 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '15etplus' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc156mois %}
                                    {% set totalrc3 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == 0 %}
                                {% set totalrc3 = 0 %}
                                {% set totalrc5 = 0 %}
                                {% set totalrc7 = 0 %}
                                {% set totalrc10 = 0 %}
                                {% set totalrc15 = 0 %}

                            {% endif %}



                            {% if vols == 1 %}
                                {% set totalvols = 0 %}
                                {% for tr in vols6mois %}
                                    {% set totalvols =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}

                            {% else %}
                                {% set totalvols = 0 %}
                            {% endif %}

                            {% if incendies == 1 %}
                                {% set totalincendies = 0 %}
                                {% for tr in incendies6mois %}
                                    {% set totalincendies =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalincendies = 0 %}
                            {% endif %}

                            {% if bris == 1 %}
                                {% set totalbris = 0 %}
                                {% for tr in bris6mois %}
                                    {% set totalbris =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalbris = 0 %}
                            {% endif %}

                            {% if assistance1 == 1 %}
                                {% set totalassistance1 = 0 %}
                                {% for tr in assistance16mois %}
                                    {% set totalassistance1 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance1 = 0 %}
                            {% endif %}

                            {% if assistance2 == 1 %}
                                {% set totalassistance2 = 0 %}
                                {% for tr in assistance26mois %}
                                    {% set totalassistance2 =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance2 = 0 %}
                            {% endif %}

                            {% if defences == 1 %}
                                {% set totaldefences = 0 %}
                                {% for tr in defences6mois %}
                                    {% set totaldefences =+ tr.valeur6mois * tr.taux6mois|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totaldefences = 0 %}
                            {% endif %}

                            {% for tr in dc106mois %}


                                {% set total = tr.valeur6mois * tr.taux6mois|number_format(1) / 100 + totalrc3 + totalvols + totalincendies + totalbris + totalassistance1 + totalassistance2 + totaldefences %}

                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            {% endfor %}


                        {% elseif garantie == 'DommageCollision10000DA' and duree == '1an' %}

                            {% if puissance == '3a4CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc31an %}
                                    {% set totalrc3 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '5a6CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc51an %}
                                    {% set totalrc3 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}
                            {% if puissance == '7a10CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc71an %}
                                    {% set totalrc3 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '10a14CH' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc101an %}
                                    {% set totalrc3 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == '15etplus' %}
                                {% set totalrc3 = 0 %}
                                {% for tr in rc151an %}
                                    {% set totalrc3 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% endif %}

                            {% if puissance == 0 %}
                                {% set totalrc3 = 0 %}
                                {% set totalrc5 = 0 %}
                                {% set totalrc7 = 0 %}
                                {% set totalrc10 = 0 %}
                                {% set totalrc15 = 0 %}

                            {% endif %}



                            {% if vols == 1 %}
                                {% set totalvols = 0 %}
                                {% for tr in vols1an %}
                                    {% set totalvols =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}

                            {% else %}
                                {% set totalvols = 0 %}
                            {% endif %}

                            {% if incendies == 1 %}
                                {% set totalincendies = 0 %}
                                {% for tr in incendies1an %}
                                    {% set totalincendies =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalincendies = 0 %}
                            {% endif %}

                            {% if bris == 1 %}
                                {% set totalbris = 0 %}
                                {% for tr in bris1an%}
                                    {% set totalbris =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalbris = 0 %}
                            {% endif %}

                            {% if assistance1 == 1 %}
                                {% set totalassistance1 = 0 %}
                                {% for tr in assistance11an %}
                                    {% set totalassistance1 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance1 = 0 %}
                            {% endif %}

                            {% if assistance2 == 1 %}
                                {% set totalassistance2 = 0 %}
                                {% for tr in assistance21an %}
                                    {% set totalassistance2 =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totalassistance2 = 0 %}
                            {% endif %}

                            {% if defences == 1 %}
                                {% set totaldefences = 0 %}
                                {% for tr in defences1an %}
                                    {% set totaldefences =+ tr.valeur1an * tr.taux1an|number_format(1) / 100 %}
                                {% endfor %}
                            {% else %}
                                {% set totaldefences = 0 %}
                            {% endif %}

                            {% for tr in dc101an%}


                                {% set total = tr.valeur1an * tr.taux1an|number_format(1) / 100 + totalrc3 + totalvols + totalincendies + totalbris + totalassistance1 + totalassistance2 + totaldefences %}

                                <div class=\"formule-container\" id=\"assu2000-2-container\">
                                    <div class=\"cell-container\">
                                        <div class=\"cell-informations\"><span class=\"inline-block cell-assureur cell\">
                                                <img class=\"gwt-Image\" src=\"{{ asset('photos_produits/'~tr.categories.photo[0].path) }}\" title=\"Formule F120\"></span>
                                            <div class=\"cell-tarif-card cell\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">{{ total|number_format(2, ',', ' ') }} <strong>DA</strong></span><span class=\"split\"> / an</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineLabel prime-details\">Frais de dossier gratuits</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-tarif-card cell\" aria-hidden=\"true\" style=\"display: none;\">
                                                <div class=\"cell-top\"><span class=\"gwt-InlineHTML\">58 <strong>DA</strong></span><span class=\"split\"> / mois</span></div>
                                                <div class=\"cell-bottom\"><span class=\"gwt-InlineHTML cell-bottom\">Tarif annuel : 658 DA</span>
                                                    <button type=\"button\" class=\"gwt-Button details-formule icon-lesfurets after \" id=\"assu2000-2-details-over\"><span>Plus de détails <i class=\"fa fa-chevron-down\"></i></span></button>
                                                </div>
                                            </div>
                                            <div class=\"cell-card-tick cell cell-assistance-panne\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">50</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> km</span></span><span class=\"gwt-InlineHTML cell-bottom\">Assistance panne</span></div>
                                            <div class=\"cell-card-tick cell disabled\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Véhicule de remplacement</span></div>
                                            <div class=\"cell-card-tick cell\"><span class=\"gwt-InlineLabel icon-lesfurets icon-tick cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Bris de glace</span></div>
                                            <div class=\"cell-franchise-card cell\"><span class=\"inline-block cell-top\"><span class=\"gwt-InlineLabel cell-franchise\">170</span><span class=\"gwt-InlineLabel cell-franchise-suffix\"> DA</span></span><span class=\"gwt-InlineLabel cell-bottom\">Franchise vol et incendie</span></div>
                                            <div class=\"cell-card-tick cell disabled\" aria-hidden=\"true\" style=\"display: none;\"><span class=\"gwt-InlineLabel icon-lesfurets icon-close cell-top\"></span><span class=\"gwt-InlineHTML cell-bottom\">Protection du conducteur</span></div>
                                        </div>
                                        <div class=\"cell-actions\"><span class=\"inline-block cell-ctas cell\" id=\"assu2000-2\"><button type=\"button\" class=\"gwt-Button icon-lesfurets principal-cta deux-lignes \" id=\"assu2000-2-SOUSC\" data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"SOUSC\" data-galabel=\"assu2000\">Poursuivre sur le site de l'assureur <i class=\"fa fa-chevron-right\"></i></span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-RAPPEL\" data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"RAPPEL\" data-galabel=\"assu2000\"><i class=\"fa fa-phone\"></i> Être rappelé par l'assureur</span></button>
                                <button type=\"button\" class=\"gwt-Button icon-lesfurets link-cta \" id=\"assu2000-2-DEVIS\" data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><span data-gacategory=\"PPS_auto\" data-gaaction=\"DEVIS\" data-galabel=\"assu2000\"><i class=\"fa fa-envelope\"></i> Devis par email</span></button>
                                </span>
                                        </div>
                                    </div>
                                </div>


                            {% endfor %}
                        {% else %}

                            Aucune offre ne répond à votre besoin.

                        {% endif %}

                    </div>


                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            1 of 2
                        </div>
                        <div class=\"col-md-3\">
                            2 of 2
                        </div>
                        <div class=\"col-md-3\">
                            2 of 2
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class=\"ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support\">
        <div data-elementor-type=\"wp-post\" data-elementor-id=\"176\" class=\"elementor elementor-176\" data-elementor-settings=\"[]\">
            <div class=\"elementor-inner\">
                <div class=\"elementor-section-wrap\">
                    <section class=\"elementor-element elementor-element-2216195 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"2216195\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-e9e7883 elementor-column elementor-col-25 elementor-top-column\" data-id=\"e9e7883\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-1027f00 elementor-widget elementor-widget-heading\" data-id=\"1027f00\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Notre compagnie</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-0a7f838 elementor-align-left blo-list-icon-center elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"0a7f838\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Présentation</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Actualités</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Services</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Notre équipe</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Nos partenaires</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Contact</span> </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-4743411 elementor-column elementor-col-25 elementor-top-column\" data-id=\"4743411\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-b4e25b9 elementor-widget elementor-widget-heading\" data-id=\"b4e25b9\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Assurances</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-5febffe elementor-align-left blo-list-icon-center elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"5febffe\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Assurance automobile</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Assurance voyage</span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"#\"> <span class=\"elementor-icon-list-icon\"> </span> <span class=\"elementor-icon-list-text\">Catastrophe naturelle</span> </a>
                                                        </li>

                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ea19f28 elementor-column elementor-col-25 elementor-top-column\" data-id=\"ea19f28\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-66e1559 elementor-widget elementor-widget-heading\" data-id=\"66e1559\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Contactez-nous</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-6f5e985 elementor-widget elementor-widget-text-editor\" data-id=\"6f5e985\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>Nous sommes ici pour vous:</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-b1cfbc7 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list\" data-id=\"b1cfbc7\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"icon-list.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <ul class=\"elementor-icon-list-items\">
                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">33,Rue DJELLAT Habib Oran Algérie</span></li>
                                                        <li class=\"elementor-icon-list-item\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"far fa-building\"></i> </span> <span class=\"elementor-icon-list-text\">39, Rue de la Madeleine Hydra Alger Algérie</span></li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"tel:+213560287112\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\"><b>+213 (0) 560 287 112</b></span> </a>
                                                        </li>
                                                        <li class=\"elementor-icon-list-item\">
                                                            <a href=\"tel:+213561630322\"> <span class=\"elementor-icon-list-icon\"> <i aria-hidden=\"true\" class=\"fas fa-phone-alt\"></i> </span> <span class=\"elementor-icon-list-text\"><b>+213 (0) 561 630 322</b></span> </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-655c699 elementor-column elementor-col-25 elementor-top-column\" data-id=\"655c699\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-402e214 elementor-widget elementor-widget-heading\" data-id=\"402e214\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"heading.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <h3 class=\"elementor-heading-title elementor-size-default\">Newsletter</h3></div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-64e5550 elementor-widget elementor-widget-text-editor\" data-id=\"64e5550\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>Recevez toute l'actualité de waffassurance. Vous pouvez annuler à tout moment.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"elementor-element elementor-element-03dd3ad text-center elementor-widget elementor-widget-elementskit-mail-chimp\" data-id=\"03dd3ad\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-mail-chimp.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <div class=\"ekit-mail-chimp\">
                                                            <form method=\"post\" class=\"ekit-mailChimpForm\" data-listed=\"\" data-success-message=\"Successfully listed this email\">
                                                                <div class=\"ekit-mail-message\"></div>
                                                                <div class=\"elementskit_form_wraper \">
                                                                    <div class=\"ekit-mail-chimp-email elementskit_input_wraper elementskit_input_container\">
                                                                        <div class=\"elementskit_form_group\">
                                                                            <div class=\"elementskit_input_element_container \">
                                                                                <input type=\"email\" name=\"email\" class=\"ekit_mail_email ekit_form_control \" placeholder=\"Votre Email\" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"ekit_submit_input_holder elementskit_input_wraper\">
                                                                        <button type=\"submit\" class=\"ekit-mail-submit\" name=\"ekit_mail_chimp\"> <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Abonnez-vous maintenant</button>
                                                                    </div>
                                                                </div>
                                                            </form>
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
                    <section class=\"elementor-element elementor-element-efa6ebe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"efa6ebe\" data-element_type=\"section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\">
                        <div class=\"elementor-container elementor-column-gap-default\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-bc20519 elementor-column elementor-col-33 elementor-top-column\" data-id=\"bc20519\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-07a9809 elementor-widget elementor-widget-text-editor\" data-id=\"07a9809\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"text-editor.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                        <p>© 2020, WAFASSURANCE
                                                            All Rights Reserved. <br />Développement web : CREATIV</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-b09610a elementor-column elementor-col-33 elementor-top-column\" data-id=\"b09610a\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-dbd7d8f elementor-widget elementor-widget-image\" data-id=\"dbd7d8f\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"image.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"elementor-image\">
                                                        <a href=\"index.html\" data-elementor-open-lightbox=\"\"> <img width=\"230\"  src=\"wp-content/uploads/2019/09/logo2.svg\" alt=\"\" /> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"elementor-element elementor-element-ae83954 elementor-column elementor-col-33 elementor-top-column\" data-id=\"ae83954\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-88a1f97 elementor-widget elementor-widget-elementskit-social-media\" data-id=\"88a1f97\" data-element_type=\"widget\" data-settings=\"{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"elementskit-social-media.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ekit-wid-con\">
                                                        <ul class=\"ekit_social_media\">
                                                            <li class=\"elementor-repeater-item-a318456\">
                                                                <a href=\"https://facebook.com/\" class=\"facebook\"> <i class=\"icon icon-facebook\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-15d420d\">
                                                                <a href=\"https://facebook.com/\" class=\"linkedin\"> <i class=\"icon icon-linkedin\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-41ad09b\">
                                                                <a href=\"https://facebook.com/\" class=\"v\"> <i class=\"icon icon-youtube-v\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                            <li class=\"elementor-repeater-item-6756370\">
                                                                <a href=\"https://facebook.com/\" class=\"envelope1\"> <i class=\"icon icon-envelope1\" aria-hidden=\"true\"></i> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"elementor-element elementor-element-ed87453 elementor-section-full_width elementor-hidden-phone elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\" data-id=\"ed87453\" data-element_type=\"section\">
                        <div class=\"elementor-container elementor-column-gap-no\">
                            <div class=\"elementor-row\">
                                <div class=\"elementor-element elementor-element-5e9c433 elementor-column elementor-col-100 elementor-top-column\" data-id=\"5e9c433\" data-element_type=\"column\">
                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                        <div class=\"elementor-widget-wrap\">
                                            <div class=\"elementor-element elementor-element-ee3f72b elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-instive-back-to-top\" data-id=\"ee3f72b\" data-element_type=\"widget\" data-settings=\"{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}\" data-widget_type=\"instive-back-to-top.default\">
                                                <div class=\"elementor-widget-container\">
                                                    <div class=\"ts-scroll-box\">
                                                        <div class=\"scroll-button\">
                                                            <a href=\"#\" class=\"scroll-top\" aria-hidden=\"true\"> <i class=\"tsicon tsicon-arrow-up\"></i> </a>
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

{% endblock %}
", "CosanitBundle:Default:index2.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/index2.html.twig");
    }
}
