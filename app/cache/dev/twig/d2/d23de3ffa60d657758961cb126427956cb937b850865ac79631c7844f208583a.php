<?php

/* :activations:edit.html.twig */
class __TwigTemplate_59bb046e2780fc51a1d19cdae4a6acfc71638a9d0d0edb947586fab96543f254 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":activations:edit.html.twig"));

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

    <title>ADMINISTRATION | </title>



    <link rel='stylesheet' id='global-css' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\">

    <link rel='stylesheet' id='global-css' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet' id='global-css' href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel='stylesheet' id='global-css' href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
        echo "\">

    <style>

        #activations_date{
            display: none;
        }
        #activations_nom{
            display: none;
        }
        #activations_nom{
            display: none;
        }
        #activations_adresse{
            display: none;
        }
        #activations_wilaya{
            display: none;
        }

        #activations_tel{
            display: none;
        }

        #activations_email{
            display: none;
        }
        #activations_photo{
            display: none;
        }
        #activations_reference {
            display: none;
        }
        #activations_serial {
            display: none;
        }
        #activations_dateactive {
            display: none;
        }
    </style>


</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"\" class=\"site_title\"><span style=\"font-size: 20px;\">Administration</span></a>
            </div>

                <div class=\"clearfix\"></div>

                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">

                    </div>
                    <div class=\"profile_info\">

                        ";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 90
            echo "                            <h2> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 92
        echo "                    </div>
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
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\">Tout les produits</a></li>
                                    <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_new");
        echo "\">Ajouter un produit</a></li>
                                    <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parents_index");
        echo "\">Catégories</a></li>
                                    <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Sous catégories</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-certificate\"></i>Garantie <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Activations_index");
        echo "\">Demandes d'activations</a></li>
                                    <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messagerie_edit", array("id" => 1));
        echo "\">Paramétres</a></li>
                                    <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_statestique");
        echo "\">Statistiques</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-question-circle\"></i>Á propos <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_apropos_edit", array("id" => 1));
        echo "\">Modifier le text</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-male\"></i>Partenaires <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logos_index");
        echo "\">Ajouter un partenaire</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-users\"></i>Utilisateurs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Tout les utilisateurs</a></li>
                                    <li><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_new");
        echo "\">Ajouter un utilisateur</a></li>
                                </ul>
                            </li>
                            </li>
                            <li><a><i class=\"fa fa-barcode\"></i>Numéros de séries <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_index");
        echo "\">Tout les numéros de séries</a></li>
                                    <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_new");
        echo "\">Ajouter en masse </a></li>
                                    <li><a href=\"";
        // line 146
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


                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\" href=\"\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
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
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">

                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">

                                <li><a href=\"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" target=\"_blank\"><i class=\"fa fa-sign-out pull-right\"></i> Voir le site</a></li>
                                <li><a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Changer mot de passe</a></li>
                                <li><a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Se déconnecter</a></li>
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
                        <h3>Activations</h3>
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
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 226, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-activation-edit"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 227
            echo "

                        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                            </button>
                            ";
            // line 232
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">

                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Modifier L'activation</h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\">Settings 1</a>
                                            </li>
                                            <li><a href=\"#\">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                    </li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <form  method=\"POST\" ";
        // line 261
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 261, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">



                                        <p> <b>Nom:</b> ";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 267, $this->source); })()), "nom", array()), "html", null, true);
        echo "</p>

                                        <p> <b> Email: </b>  ";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 269, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Adresse:</b> ";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 271, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Wilaya: </b>   ";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 273, $this->source); })()), "wilaya", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Tel: </b>    ";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 275, $this->source); })()), "tel", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Numéro de serie : </b>  ";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 277, $this->source); })()), "serial", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Revendeur : </b>  ";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 279, $this->source); })()), "reference", array()), "html", null, true);
        echo "</p>

                                        <p> <b>Date de la demande: </b>  ";
        // line 281
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 281, $this->source); })()), "date", array()), "d-m-Y à H:i:s"), "html", null, true);
        echo "</p>


                                        <p> <b>Activé le: </b>
                                            ";
        // line 285
        if ((twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 285, $this->source); })()), "etat", array()) == 1)) {
            // line 286
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 286, $this->source); })()), "dateactive", array()), "d-m-Y à H:i:s"), "html", null, true);
            echo "
                                            ";
        }
        // line 288
        echo "                                        </p>


                                        ";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 291, $this->source); })()), "dateactive", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 292
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 292, $this->source); })()), "dateactive", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 293
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 293, $this->source); })()), "dateactive", array()), 'errors');
        echo "



                                        ";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 297, $this->source); })()), "nom", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 298, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 299, $this->source); })()), "nom", array()), 'errors');
        echo "

                                        ";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 301, $this->source); })()), "adresse", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 302
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 302, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 303, $this->source); })()), "adresse", array()), 'errors');
        echo "

                                        ";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 305, $this->source); })()), "wilaya", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 306
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 306, $this->source); })()), "wilaya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 307, $this->source); })()), "wilaya", array()), 'errors');
        echo "

                                        ";
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 309, $this->source); })()), "reference", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 310, $this->source); })()), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 311, $this->source); })()), "reference", array()), 'errors');
        echo "


                                    </div>

                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                        ";
        // line 318
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 318, $this->source); })()), "message", array()), 'label', array("label" => "Remarque  : "));
        echo "
                                        ";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 319, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 320
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 320, $this->source); })()), "message", array()), 'errors');
        echo "


                                        ";
        // line 323
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 323, $this->source); })()), "etat", array()), 'label', array("label" => "Activation  : "));
        echo "
                                        ";
        // line 324
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 324, $this->source); })()), "etat", array()), 'widget');
        echo "
                                        ";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 325, $this->source); })()), "etat", array()), 'errors');
        echo "
                                        <br>  <br>  <br>

                                        <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                                        <a href=\"";
        // line 329
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Activations_index");
        echo "\" class=\"btn btn-default\">Retour</a>

                                        ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 331, $this->source); })()), "tel", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 332, $this->source); })()), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 333, $this->source); })()), "tel", array()), 'errors');
        echo "


                                        ";
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 336, $this->source); })()), "date", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 337, $this->source); })()), "date", array()), 'widget', array("attr" => array("class" => "datetime")));
        echo "
                                        ";
        // line 338
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 338, $this->source); })()), "date", array()), 'errors');
        echo "



                                        ";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 342, $this->source); })()), "photo", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 343, $this->source); })()), "photo", array()), 'widget', array("attr" => array("class" => "photo")));
        echo "
                                        ";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 344, $this->source); })()), "photo", array()), 'errors');
        echo "

                                        ";
        // line 346
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 346, $this->source); })()), "serial", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 347
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 347, $this->source); })()), "serial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 348
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 348, $this->source); })()), "serial", array()), 'errors');
        echo "


                                    </div>
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                                        ";
        // line 353
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 353, $this->source); })()), "email", array()), 'label', array("label" => " "));
        echo "
                                        ";
        // line 354
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 354, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 355
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 355, $this->source); })()), "email", array()), 'errors');
        echo "





                                    </div>
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                    </div>


                                </div>

                                ";
        // line 369
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 369, $this->source); })()), 'form_end');
        echo "

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
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        Fantazia - Admin Panel by <a href=\"#\">Linkom</a>
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>



<script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>




<script type=\"text/javascript\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>



<link rel='stylesheet' type='text/css' href=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/css/fileinput.min.css"), "html", null, true);
        echo "\">

<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
     This must be loaded before fileinput.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/sortable.min.js"), "html", null, true);
        echo "\"></script>

<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
     This must be loaded before fileinput.min.js -->

<script type=\"text/javascript\" src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/purify.min.js"), "html", null, true);
        echo "\"></script>
<!-- the main fileinput plugin file -->

<script type=\"text/javascript\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/fileinput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/locales/fr.js"), "html", null, true);
        echo "\"></script>

<!-- optionally if you need a theme like font awesome theme you can include
    it as mentioned below -->
<script type=\"text/javascript\" src=\"";
        // line 465
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
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

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
        return ":activations:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  867 => 465,  860 => 461,  856 => 460,  850 => 457,  842 => 452,  836 => 449,  829 => 445,  822 => 441,  818 => 440,  814 => 439,  810 => 438,  806 => 437,  802 => 436,  798 => 435,  794 => 434,  790 => 433,  786 => 432,  782 => 431,  778 => 430,  774 => 429,  770 => 428,  766 => 427,  762 => 426,  754 => 421,  750 => 420,  746 => 419,  742 => 418,  738 => 417,  734 => 416,  730 => 415,  726 => 414,  722 => 413,  718 => 412,  714 => 411,  710 => 410,  706 => 409,  702 => 408,  698 => 407,  694 => 406,  690 => 405,  686 => 404,  648 => 369,  631 => 355,  627 => 354,  623 => 353,  615 => 348,  611 => 347,  607 => 346,  602 => 344,  598 => 343,  594 => 342,  587 => 338,  583 => 337,  579 => 336,  573 => 333,  569 => 332,  565 => 331,  560 => 329,  553 => 325,  549 => 324,  545 => 323,  539 => 320,  535 => 319,  531 => 318,  521 => 311,  517 => 310,  513 => 309,  508 => 307,  504 => 306,  500 => 305,  495 => 303,  491 => 302,  487 => 301,  482 => 299,  478 => 298,  474 => 297,  467 => 293,  463 => 292,  459 => 291,  454 => 288,  448 => 286,  446 => 285,  439 => 281,  434 => 279,  429 => 277,  424 => 275,  419 => 273,  414 => 271,  409 => 269,  404 => 267,  395 => 261,  368 => 236,  358 => 232,  351 => 227,  347 => 226,  306 => 188,  302 => 187,  298 => 186,  289 => 180,  252 => 146,  248 => 145,  244 => 144,  235 => 138,  231 => 137,  222 => 131,  213 => 125,  205 => 120,  201 => 119,  197 => 118,  186 => 110,  182 => 109,  178 => 108,  174 => 107,  157 => 92,  151 => 90,  149 => 89,  141 => 84,  81 => 27,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  26 => 1,);
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

    <style>

        #activations_date{
            display: none;
        }
        #activations_nom{
            display: none;
        }
        #activations_nom{
            display: none;
        }
        #activations_adresse{
            display: none;
        }
        #activations_wilaya{
            display: none;
        }

        #activations_tel{
            display: none;
        }

        #activations_email{
            display: none;
        }
        #activations_photo{
            display: none;
        }
        #activations_reference {
            display: none;
        }
        #activations_serial {
            display: none;
        }
        #activations_dateactive {
            display: none;
        }
    </style>


</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"\" class=\"site_title\"><span style=\"font-size: 20px;\">Administration</span></a>
            </div>

                <div class=\"clearfix\"></div>

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
                                    <li><a href=\"{{ path('admin_parents_index')}}\">Catégories</a></li>
                                    <li><a href=\"{{ path('admin_categories_index')}}\">Sous catégories</a></li>


                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-certificate\"></i>Garantie <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"{{ path('admin_Activations_index')}}\">Demandes d'activations</a></li>
                                    <li><a href=\"{{ path('admin_messagerie_edit', { 'id': 1 })}}\">Paramétres</a></li>
                                    <li><a href=\"{{ path('cosanit_statestique')}}\">Statistiques</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-question-circle\"></i>Á propos <span class=\"fa fa-chevron-down\"></span></a>
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
                            <li><a><i class=\"fa fa-barcode\"></i>Numéros de séries <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"{{ path('admin_serials_index')}}\">Tout les numéros de séries</a></li>
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


                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\" href=\"\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
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
                                <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i> Se déconnecter</a></li>
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
                        <h3>Activations</h3>
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
                    {% for flash_message in app.session.flashBag.get('notice-activation-edit') %}


                        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                            </button>
                            {{ flash_message }}
                        </div>

                    {% endfor %}

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">

                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Modifier L'activation</h2>
                                <ul class=\"nav navbar-right panel_toolbox\">
                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\">Settings 1</a>
                                            </li>
                                            <li><a href=\"#\">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                    </li>
                                </ul>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <form  method=\"POST\" {{ form_start(edit_form) }}
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">



                                        <p> <b>Nom:</b> {{ activation.nom }}</p>

                                        <p> <b> Email: </b>  {{ activation.email }}</p>

                                        <p> <b>Adresse:</b> {{ activation.adresse }}</p>

                                        <p> <b>Wilaya: </b>   {{ activation.wilaya }}</p>

                                        <p> <b>Tel: </b>    {{ activation.tel }}</p>

                                        <p> <b>Numéro de serie : </b>  {{ activation.serial }}</p>

                                        <p> <b>Revendeur : </b>  {{ activation.reference }}</p>

                                        <p> <b>Date de la demande: </b>  {{ activation.date|date('d-m-Y à H:i:s')  }}</p>


                                        <p> <b>Activé le: </b>
                                            {% if activation.etat == 1 %}
                                            {{ activation.dateactive|date('d-m-Y à H:i:s')  }}
                                            {% endif %}
                                        </p>


                                        {{ form_label(edit_form.dateactive, \" \") }}
                                        {{ form_widget(edit_form.dateactive,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.dateactive) }}



                                        {{ form_label(edit_form.nom, \" \") }}
                                        {{ form_widget(edit_form.nom,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.nom) }}

                                        {{ form_label(edit_form.adresse, \" \") }}
                                        {{ form_widget(edit_form.adresse,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.adresse) }}

                                        {{ form_label(edit_form.wilaya, \" \") }}
                                        {{ form_widget(edit_form.wilaya,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.wilaya) }}

                                        {{ form_label(edit_form.reference, \" \") }}
                                        {{ form_widget(edit_form.reference,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.reference) }}


                                    </div>

                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                        {{ form_label(edit_form.message, \"Remarque  : \") }}
                                        {{ form_widget(edit_form.message,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.message) }}


                                        {{ form_label(edit_form.etat, \"Activation  : \") }}
                                        {{ form_widget(edit_form.etat) }}
                                        {{ form_errors(edit_form.etat) }}
                                        <br>  <br>  <br>

                                        <button type=\"submit\" class=\"btn btn-success\">Valider</button>
                                        <a href=\"{{ path('admin_Activations_index')}}\" class=\"btn btn-default\">Retour</a>

                                        {{ form_label(edit_form.tel, \" \") }}
                                        {{ form_widget(edit_form.tel,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.tel) }}


                                        {{ form_label(edit_form.date, \" \") }}
                                        {{ form_widget(edit_form.date,{'attr': {'class': 'datetime'}}) }}
                                        {{ form_errors(edit_form.date) }}



                                        {{ form_label(edit_form.photo, \" \") }}
                                        {{ form_widget(edit_form.photo,{'attr': {'class': 'photo'}}) }}
                                        {{ form_errors(edit_form.photo) }}

                                        {{ form_label(edit_form.serial, \" \") }}
                                        {{ form_widget(edit_form.serial,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.serial) }}


                                    </div>
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
                                        {{ form_label(edit_form.email, \" \") }}
                                        {{ form_widget(edit_form.email,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(edit_form.email) }}





                                    </div>
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                    </div>


                                </div>

                                {{ form_end(edit_form) }}

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
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        Fantazia - Admin Panel by <a href=\"#\">Linkom</a>
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
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

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















", ":activations:edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/activations/edit.html.twig");
    }
}
