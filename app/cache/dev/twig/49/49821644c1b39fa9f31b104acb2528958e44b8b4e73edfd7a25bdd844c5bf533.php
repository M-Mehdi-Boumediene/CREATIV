<?php

/* :statestiques:index.html.twig */
class __TwigTemplate_bad7b47a235d893a176154643f8070e100753ca6ed14ffffcfd63e9b9cffbf29 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":statestiques:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>Chart JS Graph Examples | Gentellela Alela! by Colorlib</title>

    <!-- Bootstrap -->

    <link rel='stylesheet' id='global-css' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel='stylesheet' id='global-css' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- NProgress -->
    <link rel='stylesheet' id='global-css' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\">


    <link rel='stylesheet' id='global-css' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\">
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

                <!-- menu profile quick info -->
                <div class=\"profile\">
                    <div class=\"profile_pic\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">

                    </div>
                    <div class=\"profile_info\">
                        ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                            <h2> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 45
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
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\">Tout les produits</a></li>
                                    <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_new");
        echo "\">Ajouter un produit</a></li>
                                    <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parents_index");
        echo "\">Catégories</a></li>
                                    <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Sous catégories</a></li>

                                </ul>
                            </li>

                            <li><a><i class=\"fa fa-certificate\"></i>Garantie <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Activations_index");
        echo "\">Demandes d'activations</a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_messagerie_edit", array("id" => 1));
        echo "\">Paramétres</a></li>
                                    <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_statestique");
        echo "\">Statistiques</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-question-circle\"></i>Á propos <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_apropos_edit", array("id" => 1));
        echo "\">Modifier le text</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-male\"></i>Partenaires <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logos_index");
        echo "\">Ajouter un partenaire</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-users\"></i>Utilisateurs <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Tout les utilisateurs</a></li>
                                    <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_new");
        echo "\">Ajouter un utilisateur</a></li>
                                </ul>
                            </li>
                            </li>
                            <li><a><i class=\"fa fa-barcode\"></i>Numéros de séries <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\" style=\"\">
                                    <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_index");
        echo "\">Tout les numéros de séries</a></li>
                                    <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_serials_new");
        echo "\">Ajouter en masse </a></li>
                                    <li><a href=\"";
        // line 99
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
                        <h3>Statestiques</h3>
                    </div>

                    <div class=\"title_right\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">

                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>

                <div class=\"row\">


                    <div class=\"col-md-7 col-sm-6 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Activations graph </h2>

                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <canvas id=\"mybarChart\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"row\">



                </div>
                <div class=\"clearfix\"></div>
                <div class=\"row\">


                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                C O S A N I T - Admin Panel by <a href=\"#\">Linkom</a>
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->



<script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>


<!-- Chart.js -->
<script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    // Line chart

    // Bar chart
    var ctx = document.getElementById(\"mybarChart\");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\",\"Aout\",\"Septembre\",\"Octoble\",\"Nouvembre\",\"Décembre\"],
            datasets: [{
                label: '# of Votes',
                backgroundColor: \"#26B99A\",
                data: [51, 30, 40, 28, 92, 50, 45]
            }, {
                label: '# of Votes',
                backgroundColor: \"#03586A\",
                data: [0, 0, 0, 0, 0, 0, 0]
            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
<!-- /Chart.js -->
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":statestiques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 223,  340 => 222,  336 => 221,  332 => 220,  328 => 219,  324 => 218,  244 => 141,  240 => 140,  236 => 139,  227 => 133,  190 => 99,  186 => 98,  182 => 97,  173 => 91,  169 => 90,  160 => 84,  151 => 78,  143 => 73,  139 => 72,  135 => 71,  125 => 64,  121 => 63,  117 => 62,  113 => 61,  95 => 45,  89 => 43,  87 => 42,  80 => 38,  60 => 21,  54 => 18,  49 => 16,  44 => 14,  36 => 9,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>Chart JS Graph Examples | Gentellela Alela! by Colorlib</title>

    <!-- Bootstrap -->

    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\">
    <!-- NProgress -->
    <link rel='stylesheet' id='global-css' href=\"{{ asset('vendors/nprogress/nprogress.css') }}\">


    <link rel='stylesheet' id='global-css' href=\"{{ asset('build/css/custom.min.css') }}\">
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
                        <h3>Statestiques</h3>
                    </div>

                    <div class=\"title_right\">
                        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">

                        </div>
                    </div>
                </div>

                <div class=\"clearfix\"></div>

                <div class=\"row\">


                    <div class=\"col-md-7 col-sm-6 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_title\">
                                <h2>Activations graph </h2>

                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">
                                <canvas id=\"mybarChart\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
                <div class=\"row\">



                </div>
                <div class=\"clearfix\"></div>
                <div class=\"row\">


                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                C O S A N I T - Admin Panel by <a href=\"#\">Linkom</a>
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->



<script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('vendors/Chart.js/dist/Chart.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('build/js/custom.min.js') }}\"></script>


<!-- Chart.js -->
<script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    // Line chart

    // Bar chart
    var ctx = document.getElementById(\"mybarChart\");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [\"Janvier\", \"Février\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\",\"Aout\",\"Septembre\",\"Octoble\",\"Nouvembre\",\"Décembre\"],
            datasets: [{
                label: '# of Votes',
                backgroundColor: \"#26B99A\",
                data: [51, 30, 40, 28, 92, 50, 45]
            }, {
                label: '# of Votes',
                backgroundColor: \"#03586A\",
                data: [0, 0, 0, 0, 0, 0, 0]
            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
<!-- /Chart.js -->
</body>
</html>", ":statestiques:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/statestiques/index.html.twig");
    }
}
