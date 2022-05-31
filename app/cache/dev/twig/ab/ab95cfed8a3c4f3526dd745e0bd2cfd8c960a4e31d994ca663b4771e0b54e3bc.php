<?php

/* :neufs:index.html.twig */
class __TwigTemplate_3cdb0e513b12b4070fe66e2220686e00ac399ba29121c9f0922a97ff2c021412 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":neufs:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":neufs:index.html.twig"));

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

    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Visite virtuelle 360° 3D</h3>
                </div>
                <a class=\"data btn btn-success btn-sm\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_new");
        echo "\">Nouveau projet</a>

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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 32
            echo "

                    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                        </button>
                        ";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >
                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">

                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Nom</th>

                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["neufs"]) || array_key_exists("neufs", $context) ? $context["neufs"] : (function () { throw new Twig_Error_Runtime('Variable "neufs" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["neuf"]) {
            // line 62
            echo "                                    <tr>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["neuf"], "titre", array()), "html", null, true);
            echo "</td>

                                        <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["neuf"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['neuf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tbody>
                            </table>


                            <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>


                            <!-- price element -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- footer content -->
    <footer>
        <div class=\"pull-right\">
            © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
            Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
        </div>
        <div class=\"clearfix\"></div>
    </footer>
    <!-- /footer content -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":neufs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  139 => 68,  130 => 65,  125 => 63,  122 => 62,  118 => 61,  96 => 41,  86 => 37,  79 => 32,  75 => 31,  55 => 14,  44 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'baseAdmin.html.twig' %}

{% block body %}


    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Visite virtuelle 360° 3D</h3>
                </div>
                <a class=\"data btn btn-success btn-sm\" href=\"{{ path('admin_neufs_new') }}\">Nouveau projet</a>

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
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                        </button>
                        {{ flash_message }}
                    </div>

                {% endfor %}
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >
                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">

                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Nom</th>

                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for neuf in neufs %}
                                    <tr>
                                        <td>{{ neuf.titre }}</td>

                                        <td><a href=\"{{ path('admin_neufs_edit', { 'id' : neuf.id }) }}\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>


                            <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>


                            <!-- price element -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- footer content -->
    <footer>
        <div class=\"pull-right\">
            © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
            Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
        </div>
        <div class=\"clearfix\"></div>
    </footer>
    <!-- /footer content -->



{% endblock %}






", ":neufs:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/neufs/index.html.twig");
    }
}
