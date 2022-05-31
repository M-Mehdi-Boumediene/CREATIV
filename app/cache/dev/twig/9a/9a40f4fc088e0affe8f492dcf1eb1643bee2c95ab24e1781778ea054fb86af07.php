<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_244137db04dc3c35f666d64f657ddf400b4d5a7e9cb121f215c0097921ffbabc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"\" class=\"site_title\"> <span style=\"font-size: 20px;\"></span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">

                    </div>
                    <div class=\"profile_info\" style=\"margin-left: -16px; font-size: 12px;\">

                        ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                            <p> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 55
        echo "                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <br><br><br><br>
                        <ul class=\"nav side-menu\">

                            <li><a><i class=\"fa fa-newspaper-o\"></i>Site web <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">

                                    <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bannieres_index");
        echo "\">Bannieres PUB Accueil</a></li>
                                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Categories</a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\">Produits </a></li>
                                    <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_index");
        echo "\">Visite Virtuel</a></li>

                                    <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_about_edit", array("id" => 1));
        echo "\">Á propos</a></li>




                                </ul>
                            </li>



                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">


                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
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
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">

                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">


                                <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" target=\"_blank\"><i class=\"fa fa-sign-out pull-right\"></i> Voir le site</a></li>
                                <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Changer mot de passe</a></li>
                                <li><a href=\"";
        // line 124
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



";
        // line 140
        $this->displayBlock('body', $context, $blocks);
        // line 144
        echo "    </div>
</div>
<footer>
    <div class=\"pull-right\">

    </div>
    <div class=\"clearfix\"></div>
</footer>
</div>
</div>

";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 294
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SADJIACERAM";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel='stylesheet' id='global-css' href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' id='global-css' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
        echo "\">
        <style>
            .etat{
                display: none;
            }
        </style>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/lib/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox -->
    <link rel='stylesheet' href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\">

    <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->

    <link rel='stylesheet' href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/helpers/jquery.fancybox-buttons.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/helpers/jquery.fancybox-buttons.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/helpers/jquery.fancybox-media.js"), "html", null, true);
        echo "\"></script>

    <link rel='stylesheet' href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/helpers/jquery.fancybox-thumbs.css"), "html", null, true);
        echo "\">

    <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fancybox/source/helpers/jquery.fancybox-thumbs.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"document\").ready(function(){
            \$('input.js-switch').click(function(){

                \$.ajax({
                    type:'GET',
                    url:'http://cosanit.net/admin/active/'+\$(this).val(),
                    success: function (data) {

                    }
                });
            });

        });

    </script>


    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".fancybox\").fancybox();
        });
    </script>
    <script>
        \$(document).ready(function() {
            var handleDataTableButtons = function() {
                if (\$(\"#datatable-buttons\").length) {
                    \$(\"#datatable-buttons\").DataTable({
                        dom: \"Bfrtip\",
                        bSort: true,
                        order : [ [ 4, \"desc\" ] ],
                        pageLength : 50,
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
                scroller: true,

            });

            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true,


            });

            TableManageButtons.init();
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 196,  441 => 194,  437 => 193,  433 => 192,  429 => 191,  425 => 190,  421 => 189,  417 => 188,  413 => 187,  409 => 186,  405 => 185,  401 => 184,  397 => 183,  393 => 182,  389 => 181,  385 => 180,  381 => 179,  376 => 177,  371 => 175,  366 => 173,  362 => 172,  358 => 171,  351 => 167,  346 => 165,  341 => 163,  335 => 160,  331 => 159,  327 => 158,  323 => 156,  317 => 155,  308 => 141,  302 => 140,  286 => 21,  282 => 20,  278 => 19,  274 => 18,  270 => 17,  266 => 16,  262 => 15,  258 => 14,  254 => 13,  250 => 12,  246 => 11,  241 => 10,  235 => 9,  223 => 7,  214 => 294,  212 => 155,  199 => 144,  197 => 140,  178 => 124,  174 => 123,  170 => 122,  160 => 115,  138 => 96,  114 => 75,  109 => 73,  105 => 72,  101 => 71,  97 => 70,  80 => 55,  74 => 53,  72 => 52,  64 => 47,  45 => 30,  43 => 9,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}SADJIACERAM{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/nprogress/nprogress.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/switchery/dist/switchery.min.css') }}\">
        <link rel='stylesheet' id='global-css' href=\"{{ asset('build/css/custom.css') }}\">
        <style>
            .etat{
                display: none;
            }
        </style>


    {% endblock %}

</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"\" class=\"site_title\"> <span style=\"font-size: 20px;\"></span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        <img src=\"{{ asset('images/img.jpg')}}\" alt=\"...\" class=\"img-circle profile_img\">

                    </div>
                    <div class=\"profile_info\" style=\"margin-left: -16px; font-size: 12px;\">

                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <p> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</p>
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

                            <li><a><i class=\"fa fa-newspaper-o\"></i>Site web <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">

                                    <li><a href=\"{{ path('admin_bannieres_index') }}\">Bannieres PUB Accueil</a></li>
                                    <li><a href=\"{{ path('admin_categories_index') }}\">Categories</a></li>
                                    <li><a href=\"{{ path('admin_produits_index') }}\">Produits </a></li>
                                    <li><a href=\"{{ path('admin_neufs_index') }}\">Visite Virtuel</a></li>

                                    <li><a href=\"{{ path('admin_about_edit', { 'id': 1 }) }}\">Á propos</a></li>




                                </ul>
                            </li>



                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">


                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Se déconnecter\" href=\"{{ path('fos_user_security_logout') }}\">
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



{% block body %}


{% endblock %}
    </div>
</div>
<footer>
    <div class=\"pull-right\">

    </div>
    <div class=\"clearfix\"></div>
</footer>
</div>
</div>

{% block javascripts %}


    <script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type=\"text/javascript\" src=\"{{ asset('fancybox/lib/jquery.mousewheel-3.0.6.pack.js') }}\"></script>
    <!-- Add fancyBox -->
    <link rel='stylesheet' href=\"{{ asset('fancybox/source/jquery.fancybox.css') }}\">

    <script type=\"text/javascript\" src=\"{{ asset('fancybox/source/jquery.fancybox.pack.js') }}\"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->

    <link rel='stylesheet' href=\"{{ asset('fancybox/source/helpers/jquery.fancybox-buttons.css') }}\">
    <script type=\"text/javascript\" src=\"{{ asset('fancybox/source/helpers/jquery.fancybox-buttons.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('fancybox/source/helpers/jquery.fancybox-media.js') }}\"></script>

    <link rel='stylesheet' href=\"{{ asset('fancybox/source/helpers/jquery.fancybox-thumbs.css') }}\">

    <script type=\"text/javascript\" src=\"{{ asset('fancybox/source/helpers/jquery.fancybox-thumbs.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/switchery/dist/switchery.min.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('build/js/custom.min.js') }}\"></script>
    <script>
        \$(\"document\").ready(function(){
            \$('input.js-switch').click(function(){

                \$.ajax({
                    type:'GET',
                    url:'http://cosanit.net/admin/active/'+\$(this).val(),
                    success: function (data) {

                    }
                });
            });

        });

    </script>


    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\".fancybox\").fancybox();
        });
    </script>
    <script>
        \$(document).ready(function() {
            var handleDataTableButtons = function() {
                if (\$(\"#datatable-buttons\").length) {
                    \$(\"#datatable-buttons\").DataTable({
                        dom: \"Bfrtip\",
                        bSort: true,
                        order : [ [ 4, \"desc\" ] ],
                        pageLength : 50,
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
                scroller: true,

            });

            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true,


            });

            TableManageButtons.init();
        });
    </script>


{% endblock %}
</body>
</html>
", "::baseAdmin.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/baseAdmin.html.twig");
    }
}
