<?php

/* user/new.html.twig */
class __TwigTemplate_b581f0916efeaf853213c12d17e888edf8e4c96598c76d1f61a9c8c74d8ecc43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>ADMINISTRATION | </title>

    <link rel='stylesheet' id='global-css' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\">

    <link rel='stylesheet' id='global-css' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel='stylesheet' id='global-css' href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
        echo "\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
<div class=\"main_container\">
<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"\" class=\"site_title\"> <span style=\"font-size: 20px;\">Administration</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_pic\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">

            </div>
            <div class=\"profile_info\">
                ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "                    <h2> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</h2>
                ";
        }
        // line 48
        echo "

            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <br><br><br><br>
                <ul class=\"nav side-menu\">
                    <li><a><i class=\"fa fa-newspaper-o\"></i>Produits <span class=\"fa fa-chevron-down\"></span></a>

                        <ul class=\"nav child_menu\">
                            <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\">Tout les produits</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_new");
        echo "\">Ajouter un produit</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parents_index");
        echo "\">Cat??gories</a></li>
                            <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Sous cat??gories</a></li>


                        </ul>
                    </li>

                    <li><a><i class=\"fa fa-certificate\"></i>Garantie <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Activations_index");
        echo "\">Demandes d'activations</a></li>
                            <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messagerie_edit", array("id" => 1));
        echo "\">Param??tres</a></li>
                            <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_statestique");
        echo "\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-question-circle\"></i>?? propos <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_apropos_edit", array("id" => 1));
        echo "\">Modifier le text</a></li>

                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-male\"></i>Partenaires <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logos_index");
        echo "\">Ajouter un partenaire</a></li>

                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-users\"></i>Utilisateurs <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Tout les utilisateurs</a></li>
                            <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_new");
        echo "\">Ajouter un utilisateur</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a><i class=\"fa fa-barcode\"></i>Num??ros de s??ries <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_index");
        echo "\">Tout les num??ros de s??ries</a></li>
                            <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_new");
        echo "\">Ajouter en masse </a></li>
                            <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_admin_supp_serials");
        echo "\">Supprimer en masse </a></li>
                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class=\"sidebar-footer hidden-small\">

        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">

                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">

                        <li><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" target=\"_blank\"><i class=\"fa fa-sign-out pull-right\"></i> Voir le site</a></li>
                        <li><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Changer mot de passe</a></li>
                        <li><a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Se d??connecter</a></li>
                    </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">


                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
            </div>


            <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                    <div class=\"input-group\">

                    <span class=\"input-group-btn\">

                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 179, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 180
            echo "

                <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                    </button>
                    ";
            // line 185
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\" >
                    <div class=\"x_title\">
                        <h4>Ajouter un utilisateur</h4>

                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                        ";
        // line 201
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 202, $this->source); })()), 'widget');
        echo "
                        ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 203, $this->source); })()), 'errors');
        echo "

                        <button type=\"submit\" class=\"btn btn-success\">Cr??er</button>

                        ";
        // line 207
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->source); })()), 'form_end');
        echo "
                                <br>
                        <a href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Retour ?? la liste</a>



                        </div>





                        <!-- price element -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        ?? 2018 ??? Global Luxury Services Tout droits r??serv??s.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>



<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>




<script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>



<link rel='stylesheet' type='text/css' href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/css/fileinput.min.css"), "html", null, true);
        echo "\">

<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/sortable.min.js"), "html", null, true);
        echo "\"></script>

<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
     This must be loaded before fileinput.min.js -->

<script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/purify.min.js"), "html", null, true);
        echo "\"></script>
<!-- the main fileinput plugin file -->

<script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/fileinput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/locales/fr.js"), "html", null, true);
        echo "\"></script>

<!-- optionally if you need a theme like font awesome theme you can include
    it as mentioned below -->
<script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/themes/fa/theme.js"), "html", null, true);
        echo "\"></script>
<!-- optionally if you need translation for your language then include
    locale file as mentioned below -->






<script>
    \$(document).ready(function() {


// with plugin options
        \$( \"input:file\" ).fileinput({'showUpload':false,'language':'fr', 'previewFileType':'any'});

        \$('#produits_image1_name').val('image1')
        \$('#produits_image2_name').val('image2')
        \$('#produits_image3_name').val('image3')
        \$('#produits_image4_name').val('image4')

        var handleDataTableButtons = function() {
            if (\$(\"#datatable-buttons\").length) {
                \$(\"#datatable-buttons\").DataTable({
                    dom: \"Bfrtip\",
                    buttons: [
                        {
                            extend: \"copy\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"csv\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"excel\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"pdfHtml5\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"print\",
                            className: \"btn-sm\"
                        },
                    ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function() {
            \"use strict\";
            return {
                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        \$('#datatable').dataTable();
        \$('#datatable-keytable').DataTable({
            keys: true
        });

        \$('#datatable-responsive').DataTable();

        \$('#datatable-scroller').DataTable({
            ajax: \"js/datatables/json/scroller-demo.json\",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = \$('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>
<!-- bootstrap-daterangepicker -->
<script>
    \$(document).ready(function() {
        \$('#birthday').daterangepicker({
            singleDatePicker: true,
            calender_style: \"picker_4\"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- bootstrap-wysiwyg -->
<script>
    \$(document).ready(function() {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
            \$.each(fonts, function(idx, fontName) {
                fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
            });
            \$('a[title]').tooltip({
                container: 'body'
            });
            \$('.dropdown-menu input').click(function() {
                return false;
            })
                    .change(function() {
                        \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        \$(this).change();
                    });

            \$('[data-role=magic-overlay]').each(function() {
                var overlay = \$(this),
                        target = \$(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });

            if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
                var editorOffset = \$('#editor').offset();

                \$('.voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + \$('#editor').innerWidth() - 35
                });
            } else {
                \$('.voiceBtn').hide();
            }
        }

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = \"Unsupported format \" + detail;
            } else {
                console.log(\"error uploading file\", reason, detail);
            }
            \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        \$('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
    });
</script>
<!-- /bootstrap-wysiwyg -->

<!-- Select2 -->
<script>
    \$(document).ready(function() {
        \$(\".select2_single\").select2({
            placeholder: \"Select a state\",
            allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
            maximumSelectionLength: 4,
            placeholder: \"With Max Selection limit 4\",
            allowClear: true
        });
    });
</script>
<!-- /Select2 -->

<!-- jQuery Tags Input -->
<script>
    function onAddTag(tag) {
        alert(\"Added a tag: \" + tag);
    }

    function onRemoveTag(tag) {
        alert(\"Removed a tag: \" + tag);
    }

    function onChangeTag(input, tag) {
        alert(\"Changed a tag: \" + tag);
    }

    \$(document).ready(function() {
        \$('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /jQuery Tags Input -->

<!-- Parsley -->
<script>
    \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
            validateFront();
        });
        \$('#demo-form .btn').on('click', function() {
            \$('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === \$('#demo-form').parsley().isValid()) {
                \$('.bs-callout-info').removeClass('hidden');
                \$('.bs-callout-warning').addClass('hidden');
            } else {
                \$('.bs-callout-info').addClass('hidden');
                \$('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
            validateFront();
        });
        \$('#demo-form2 .btn').on('click', function() {
            \$('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === \$('#demo-form2').parsley().isValid()) {
                \$('.bs-callout-info').removeClass('hidden');
                \$('.bs-callout-warning').addClass('hidden');
            } else {
                \$('.bs-callout-info').addClass('hidden');
                \$('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {}
</script>
<!-- /Parsley -->

<!-- Autosize -->
<script>
    \$(document).ready(function() {
        autosize(\$('.resizable_textarea'));
    });
</script>
<!-- /Autosize -->

<!-- jQuery autocomplete -->
<script>
    \$(document).ready(function() {
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"??land Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barth??lemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"C??te d???Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"R??union\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"S??o Tom?? and Pr??ncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

        var countriesArray = \$.map(countries, function(value, key) {
            return {
                value: value,
                data: key
            };
        });

        // initialize autocomplete with custom appendTo
        \$('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray
        });
    });
</script>
<!-- /jQuery autocomplete -->

<!-- Starrr -->
<script>
    \$(document).ready(function() {
        \$(\".stars\").starrr();

        \$('.stars-existing').starrr({
            rating: 4
        });

        \$('.stars').on('starrr:change', function (e, value) {
            \$('.stars-count').html(value);
        });

        \$('.stars-existing').on('starrr:change', function (e, value) {
            \$('.stars-count-existing').html(value);
        });
    });
</script>
</body>
</html>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 306,  571 => 302,  567 => 301,  561 => 298,  553 => 293,  547 => 290,  540 => 286,  533 => 282,  529 => 281,  525 => 280,  521 => 279,  517 => 278,  513 => 277,  509 => 276,  505 => 275,  501 => 274,  497 => 273,  493 => 272,  489 => 271,  485 => 270,  481 => 269,  477 => 268,  473 => 267,  465 => 262,  461 => 261,  457 => 260,  453 => 259,  449 => 258,  445 => 257,  441 => 256,  437 => 255,  433 => 254,  429 => 253,  425 => 252,  421 => 251,  417 => 250,  413 => 249,  409 => 248,  405 => 247,  401 => 246,  397 => 245,  358 => 209,  353 => 207,  346 => 203,  342 => 202,  338 => 201,  324 => 189,  314 => 185,  307 => 180,  303 => 179,  262 => 141,  258 => 140,  254 => 139,  245 => 133,  212 => 103,  208 => 102,  204 => 101,  195 => 95,  191 => 94,  182 => 88,  173 => 82,  165 => 77,  161 => 76,  157 => 75,  146 => 67,  142 => 66,  138 => 65,  134 => 64,  116 => 48,  110 => 46,  108 => 45,  101 => 41,  81 => 24,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  37 => 10,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>ADMINISTRATION | </title>

    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/nprogress/nprogress.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\">

    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\">
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\">

    <link rel='stylesheet' id='global-css' href=\"{{ asset('build/css/custom.css') }}\">
</head>

<body class=\"nav-md\">
<div class=\"container body\">
<div class=\"main_container\">
<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">
        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"\" class=\"site_title\"> <span style=\"font-size: 20px;\">Administration</span></a>
        </div>

        <div class=\"clearfix\"></div>

        <!-- menu profile quick info -->
        <div class=\"profile\">
            <div class=\"profile_pic\">
                <img src=\"{{ asset('images/img.jpg')}}\" alt=\"...\" class=\"img-circle profile_img\">

            </div>
            <div class=\"profile_info\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <h2> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</h2>
                {% endif %}


            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
            <div class=\"menu_section\">
                <br><br><br><br>
                <ul class=\"nav side-menu\">
                    <li><a><i class=\"fa fa-newspaper-o\"></i>Produits <span class=\"fa fa-chevron-down\"></span></a>

                        <ul class=\"nav child_menu\">
                            <li><a href=\"{{ path('admin_produits_index')}}\">Tout les produits</a></li>
                            <li><a href=\"{{ path('admin_produits_new')}}\">Ajouter un produit</a></li>
                            <li><a href=\"{{ path('admin_parents_index')}}\">Cat??gories</a></li>
                            <li><a href=\"{{ path('admin_categories_index')}}\">Sous cat??gories</a></li>


                        </ul>
                    </li>

                    <li><a><i class=\"fa fa-certificate\"></i>Garantie <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"{{ path('admin_Activations_index')}}\">Demandes d'activations</a></li>
                            <li><a href=\"{{ path('admin_messagerie_edit', { 'id': 1 })}}\">Param??tres</a></li>
                            <li><a href=\"{{ path('cosanit_statestique')}}\">Statistiques</a></li>
                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-question-circle\"></i>?? propos <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"{{ path('admin_apropos_edit', { 'id': 1 })}}\">Modifier le text</a></li>

                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-male\"></i>Partenaires <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"{{ path('admin_logos_index')}}\">Ajouter un partenaire</a></li>

                        </ul>
                    </li>
                    <li><a><i class=\"fa fa-users\"></i>Utilisateurs <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"{{ path('admin_users_index')}}\">Tout les utilisateurs</a></li>
                            <li><a href=\"{{ path('admin_users_new')}}\">Ajouter un utilisateur</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a><i class=\"fa fa-barcode\"></i>Num??ros de s??ries <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"\">
                            <li><a href=\"{{ path('admin_serials_index')}}\">Tout les num??ros de s??ries</a></li>
                            <li><a href=\"{{ path('admin_serials_new')}}\">Ajouter en masse </a></li>
                            <li><a href=\"{{ path('cosanit_admin_supp_serials')}}\">Supprimer en masse </a></li>
                        </ul>
                    </li>

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class=\"sidebar-footer hidden-small\">

        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav>
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"{{ asset('images/img.jpg')}}\" alt=\"\">

                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">

                        <li><a href=\"{{ path('cosanit_homepage') }}\" target=\"_blank\"><i class=\"fa fa-sign-out pull-right\"></i> Voir le site</a></li>
                        <li><a href=\"{{ path('fos_user_change_password') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Changer mot de passe</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Se d??connecter</a></li>
                    </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">


                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

<!-- page content -->
<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Utilisateurs</h3>
            </div>


            <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                    <div class=\"input-group\">

                    <span class=\"input-group-btn\">

                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            {% for flash_message in app.session.flashBag.get('notice') %}


                <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                    </button>
                    {{ flash_message }}
                </div>

            {% endfor %}
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\" >
                    <div class=\"x_title\">
                        <h4>Ajouter un utilisateur</h4>

                        <div class=\"clearfix\"></div>
                    </div>

                    <div class=\"x_content\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                        {{ form_start(form) }}
                        {{ form_widget(form) }}
                        {{ form_errors(form) }}

                        <button type=\"submit\" class=\"btn btn-success\">Cr??er</button>

                        {{ form_end(form) }}
                                <br>
                        <a href=\"{{ path('admin_users_index') }}\">Retour ?? la liste</a>



                        </div>





                        <!-- price element -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        ?? 2018 ??? Global Luxury Services Tout droits r??serv??s.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>



<script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/iCheck/icheck.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/moment/moment.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/datepicker/daterangepicker.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/jquery.hotkeys/jquery.hotkeys.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/google-code-prettify/src/prettify.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/switchery/dist/switchery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/select2/dist/js/select2.full.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/parsleyjs/dist/parsley.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/autosize/dist/autosize.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/starrr/dist/starrr.js') }}\"></script>




<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net/js/jquery.dataTables.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.flash.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.html5.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.print.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/jszip/dist/jszip.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/custom.min.js') }}\"></script>



<link rel='stylesheet' type='text/css' href=\"{{ asset('karik/css/fileinput.min.css') }}\">

<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/canvas-to-blob.min.js') }}\"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/sortable.min.js') }}\"></script>

<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
     This must be loaded before fileinput.min.js -->

<script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/purify.min.js') }}\"></script>
<!-- the main fileinput plugin file -->

<script type=\"text/javascript\" src=\"{{ asset('karik/js/fileinput.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('karik/js/locales/fr.js') }}\"></script>

<!-- optionally if you need a theme like font awesome theme you can include
    it as mentioned below -->
<script type=\"text/javascript\" src=\"{{ asset('karik/themes/fa/theme.js') }}\"></script>
<!-- optionally if you need translation for your language then include
    locale file as mentioned below -->






<script>
    \$(document).ready(function() {


// with plugin options
        \$( \"input:file\" ).fileinput({'showUpload':false,'language':'fr', 'previewFileType':'any'});

        \$('#produits_image1_name').val('image1')
        \$('#produits_image2_name').val('image2')
        \$('#produits_image3_name').val('image3')
        \$('#produits_image4_name').val('image4')

        var handleDataTableButtons = function() {
            if (\$(\"#datatable-buttons\").length) {
                \$(\"#datatable-buttons\").DataTable({
                    dom: \"Bfrtip\",
                    buttons: [
                        {
                            extend: \"copy\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"csv\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"excel\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"pdfHtml5\",
                            className: \"btn-sm\"
                        },
                        {
                            extend: \"print\",
                            className: \"btn-sm\"
                        },
                    ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function() {
            \"use strict\";
            return {
                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        \$('#datatable').dataTable();
        \$('#datatable-keytable').DataTable({
            keys: true
        });

        \$('#datatable-responsive').DataTable();

        \$('#datatable-scroller').DataTable({
            ajax: \"js/datatables/json/scroller-demo.json\",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = \$('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>
<!-- bootstrap-daterangepicker -->
<script>
    \$(document).ready(function() {
        \$('#birthday').daterangepicker({
            singleDatePicker: true,
            calender_style: \"picker_4\"
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- bootstrap-wysiwyg -->
<script>
    \$(document).ready(function() {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
            \$.each(fonts, function(idx, fontName) {
                fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
            });
            \$('a[title]').tooltip({
                container: 'body'
            });
            \$('.dropdown-menu input').click(function() {
                return false;
            })
                    .change(function() {
                        \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        \$(this).change();
                    });

            \$('[data-role=magic-overlay]').each(function() {
                var overlay = \$(this),
                        target = \$(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });

            if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
                var editorOffset = \$('#editor').offset();

                \$('.voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + \$('#editor').innerWidth() - 35
                });
            } else {
                \$('.voiceBtn').hide();
            }
        }

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = \"Unsupported format \" + detail;
            } else {
                console.log(\"error uploading file\", reason, detail);
            }
            \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        \$('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
    });
</script>
<!-- /bootstrap-wysiwyg -->

<!-- Select2 -->
<script>
    \$(document).ready(function() {
        \$(\".select2_single\").select2({
            placeholder: \"Select a state\",
            allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
            maximumSelectionLength: 4,
            placeholder: \"With Max Selection limit 4\",
            allowClear: true
        });
    });
</script>
<!-- /Select2 -->

<!-- jQuery Tags Input -->
<script>
    function onAddTag(tag) {
        alert(\"Added a tag: \" + tag);
    }

    function onRemoveTag(tag) {
        alert(\"Removed a tag: \" + tag);
    }

    function onChangeTag(input, tag) {
        alert(\"Changed a tag: \" + tag);
    }

    \$(document).ready(function() {
        \$('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /jQuery Tags Input -->

<!-- Parsley -->
<script>
    \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
            validateFront();
        });
        \$('#demo-form .btn').on('click', function() {
            \$('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === \$('#demo-form').parsley().isValid()) {
                \$('.bs-callout-info').removeClass('hidden');
                \$('.bs-callout-warning').addClass('hidden');
            } else {
                \$('.bs-callout-info').addClass('hidden');
                \$('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
            validateFront();
        });
        \$('#demo-form2 .btn').on('click', function() {
            \$('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function() {
            if (true === \$('#demo-form2').parsley().isValid()) {
                \$('.bs-callout-info').removeClass('hidden');
                \$('.bs-callout-warning').addClass('hidden');
            } else {
                \$('.bs-callout-info').addClass('hidden');
                \$('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {}
</script>
<!-- /Parsley -->

<!-- Autosize -->
<script>
    \$(document).ready(function() {
        autosize(\$('.resizable_textarea'));
    });
</script>
<!-- /Autosize -->

<!-- jQuery autocomplete -->
<script>
    \$(document).ready(function() {
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"??land Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barth??lemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"C??te d???Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"R??union\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"S??o Tom?? and Pr??ncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

        var countriesArray = \$.map(countries, function(value, key) {
            return {
                value: value,
                data: key
            };
        });

        // initialize autocomplete with custom appendTo
        \$('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray
        });
    });
</script>
<!-- /jQuery autocomplete -->

<!-- Starrr -->
<script>
    \$(document).ready(function() {
        \$(\".stars\").starrr();

        \$('.stars-existing').starrr({
            rating: 4
        });

        \$('.stars').on('starrr:change', function (e, value) {
            \$('.stars-count').html(value);
        });

        \$('.stars-existing').on('starrr:change', function (e, value) {
            \$('.stars-count-existing').html(value);
        });
    });
</script>
</body>
</html>









", "user/new.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\user\\new.html.twig");
    }
}
