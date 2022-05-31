<?php

/* CosanitBundle:Default:internationals.html.twig */
class __TwigTemplate_4f50f128034a5b869da623467094f4d5caf21c25835b314d945168edeef0b6b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:internationals.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:internationals.html.twig"));

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
        .title_subtitle_holder_inner {
            position: relative;
            text-align: center;
            margin-top: -160px;
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
        // line 37
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
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"header-contactLink-mobile\">Nous contacter</a>
                            <nav class=\"main_menu drop_down right\">
                                <ul id=\"menu-main-navigation\" class=\"\">
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" title=\"GlS Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Accueil</span></a></li>

                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_immobilier");
        echo "\" title=\"Location & Vente Immobilier Algérie\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Immobilier</span></a></li>
                                    <li id=\"nav-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a  href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Vente Immobilier  Algérie \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Acheter</span></a></li>
                                    <li id=\"nav-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "  \"title=\"Immobilier Algérie vendre\"  class=\"\"><i class=\"menu_icon fa blank\"></i><span>Vendre</span></a></li>
                                    <li id=\"nav-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo " \" title=\"Immobilier Location Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Louer</span></a></li>
                                    <li id=\"nav-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"  title=\"Immobilier Programe neuf Algérie\" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Programmes Neufs</span></a></li>
                                    <li id=\"nav-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo " \"  title=\"Immobilier International \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>International</span></a></li>

                                    <li id=\"nav-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page  narrow\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" title=\"Global Lxury Services Contact \" class=\"\"><i class=\"menu_icon fa blank\"></i><span>Nous contacter</span></a></li>
                                </ul>
                            </nav>
                            <nav class=\"mobile_menu\">
                                <ul id=\"menu-main-navigation-1\" class=\"\"><li id=\"mobile-menu-item-61438\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_achats");
        echo "\" title=\"Immobilier Achat Vente Algérie \" class=\"\"><span>Acheter</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70754\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_ventes");
        echo "\" title=\"Immobilier vendre Algérie \"class=\"\"><span>Vendre</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-3554598\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_location");
        echo "\"  title=\"Immobilier Location Algérie \" class=\"\"><span>Louer</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70763\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_investissement");
        echo "\"title=\"Immobilier Programme Neuf Algérie \"  class=\"\"><span>Programmes Neufs</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70777\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals");
        echo "\"title=\"Immobilier International\"  class=\"\"><span>International</span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-8222\" class=\"qtranxs-lang-menu qtranxs-lang-menu-en menu-item menu-item-type-custom menu-item-object-custom \"><a title=\"Arabic\" href=\"\" class=\"\"><span><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/algeria.png"), "html", null, true);
        echo "\" alt=\"Arabic\"></span><span class=\"mobile_arrow\"><i class=\"fa fa-angle-right\"></i><i class=\"fa fa-angle-down\"></i></span></a></li>
                                    <li id=\"mobile-menu-item-70761\" class=\"menu-item menu-item-type-post_type menu-item-object-page \"><a href=\"";
        // line 70
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
                                            <a data-hover=\"Login\" href=\"https://www.marcfoujols.com/login/\">
                                                Login            </a>
                                            |
                                            <a data-hover=\"Register\" href=\"https://www.marcfoujols.com/enregistrer/\">
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





                    <div class=\"title_outer title_without_animation\" data-height=\"280\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url(";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/International.jpg"), "html", null, true);
        echo ");height:280px;\">
                            <div class=\"image not_responsive\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/International.jpg"), "html", null, true);
        echo "\" alt=\"&nbsp;\"> </div>
                            <div class=\"title_holder\" style=\"padding-top:0px;height:280px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"title_subtitle_holder\">
                                            <div class=\"title_subtitle_holder_inner\">
                                                <h1>

                                                    <span style=\"font-size: 60px;text-align: center;font-weight: normal;color: #fff;line-height: 47px; height: 50px;\">International</span>

                                                </h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"container\">
                        <div class=\"container_inner clearfix\">
                            <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                <div class=\"wpb_text_column wpb_content_element \">
                                                    <div class=\"wpb_wrapper\">
                                                        <hgroup class=\"mf-cat-title\">
                                                            <h2>Une sélection de biens de prestige dans les quatre coins du mondes</h2>
                                                            <h5>Découvrez des biens d’exception au caractère sans pareil</h5>
                                                        </hgroup>

                                                    </div>
                                                </div>
                                            </div></div></div></div></div>
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" padding-top:30px; text-align:left;\">
                                <div class=\" section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">

                                                          ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 189
            echo "
                                        <div class=\"wpb_column vc_column_container vc_col-sm-4\">
                                            <div class=\"vc_column-inner \">
                                                <div class=\"wpb_wrapper\">
                                                    <a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_internationals_show", array("id" => twig_get_attribute($this->env, $this->source, $context["ville"], "slug", array()))), "html", null, true);
            echo "\" class=\"img-box mf_image_box mf-table\" style=\"    padding-bottom: 45px;\">
                                                        <div class=\"img-box mf_image_box \" style=\"background-image: url(";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ville"], "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
            echo "); \">

                                                            <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\">
                                                                    <h3 class=\"all-caps\" style=\"font-size: 30px;\" >";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "nom", array()), "html", null, true);
            echo "</h3>
                                                                </div></div></div></a></div></div></div>
                                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "

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
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.jpg"), "html", null, true);
        echo ")\">
                                                    <div class=\"readmore\"><i class=\"fa fa-facebook fa-6\" aria-hidden=\"true\"></i></div>


                                                    <div class=\"overlay\"></div>
                                                </a>

                                            </div>


                                            <div class=\"vc_col-lg-3 vc_col-md-6 vc_col-sm-6 vc_col-xs-12 wpb_column vc_column_container \">
                                                <a href=\"https://www.instagram.com/globalluxuryservices/\" target=\"_blank\" class=\"mf-col-inner news-item\" style=\"background-image: url(";
        // line 229
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
        // line 239
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
        // line 249
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
        return "CosanitBundle:Default:internationals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 249,  369 => 239,  356 => 229,  342 => 218,  322 => 200,  313 => 197,  307 => 194,  303 => 193,  297 => 189,  293 => 188,  253 => 151,  249 => 150,  166 => 70,  162 => 69,  158 => 68,  154 => 67,  150 => 66,  146 => 65,  142 => 64,  135 => 60,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  114 => 54,  110 => 53,  105 => 51,  99 => 48,  79 => 37,  44 => 4,  38 => 3,  15 => 2,);
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
                                            <a data-hover=\"Login\" href=\"https://www.marcfoujols.com/login/\">
                                                Login            </a>
                                            |
                                            <a data-hover=\"Register\" href=\"https://www.marcfoujols.com/enregistrer/\">
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





                    <div class=\"title_outer title_without_animation\" data-height=\"280\">
                        <div class=\"title title_size_small position_left has_background\" style=\"background-size:1920px auto;background-image:url({{ asset('img/International.jpg') }});height:280px;\">
                            <div class=\"image not_responsive\"><img src=\"{{ asset('img/International.jpg') }}\" alt=\"&nbsp;\"> </div>
                            <div class=\"title_holder\" style=\"padding-top:0px;height:280px;\">
                                <div class=\"container\">
                                    <div class=\"container_inner clearfix\">
                                        <div class=\"title_subtitle_holder\">
                                            <div class=\"title_subtitle_holder_inner\">
                                                <h1>

                                                    <span style=\"font-size: 60px;text-align: center;font-weight: normal;color: #fff;line-height: 47px; height: 50px;\">International</span>

                                                </h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"container\">
                        <div class=\"container_inner clearfix\">
                            <div class=\"vc_row wpb_row vc_row-fluid\" style=\" text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                                <div class=\"wpb_text_column wpb_content_element \">
                                                    <div class=\"wpb_wrapper\">
                                                        <hgroup class=\"mf-cat-title\">
                                                            <h2>Une sélection de biens de prestige dans les quatre coins du mondes</h2>
                                                            <h5>Découvrez des biens d’exception au caractère sans pareil</h5>
                                                        </hgroup>

                                                    </div>
                                                </div>
                                            </div></div></div></div></div>
                            <div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" padding-top:30px; text-align:left;\">
                                <div class=\" section_inner clearfix\">
                                    <div class=\"section_inner_margin clearfix\">

                                                          {% for ville in categories %}

                                        <div class=\"wpb_column vc_column_container vc_col-sm-4\">
                                            <div class=\"vc_column-inner \">
                                                <div class=\"wpb_wrapper\">
                                                    <a href=\"{{ path('cosanit_internationals_show',{id: ville.slug}) }}\" class=\"img-box mf_image_box mf-table\" style=\"    padding-bottom: 45px;\">
                                                        <div class=\"img-box mf_image_box \" style=\"background-image: url({{ asset('photos_produits/'~ville.photo[0].path) }}); \">

                                                            <div class=\"bkg-overlay mf-table\"><div class=\"mf-table-cell\">
                                                                    <h3 class=\"all-caps\" style=\"font-size: 30px;\" >{{ ville.nom }}</h3>
                                                                </div></div></div></a></div></div></div>
                                                     {% endfor %}


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


                            <div class=\"home-separator-4\"></div>
                <div class=\"content_bottom\">
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




{% endblock %}", "CosanitBundle:Default:internationals.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/internationals.html.twig");
    }
}
