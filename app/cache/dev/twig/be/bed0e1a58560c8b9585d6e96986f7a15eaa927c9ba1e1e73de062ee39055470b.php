<?php

/* :services:index.html.twig */
class __TwigTemplate_a188edc38a9d0b233e0cb30ecf766939653447d34804a750857904a500c3a095 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":services:index.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":services:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Services</h3>
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
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >





                        <div class=\"x_title\">
                            <h4><a class=\"data btn btn-success btn-sm\"  href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_services_new");
        echo "\" >Nouveau service</a></h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">




                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Texte</th>
                                    <th>image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 59
            echo "                                    <tr>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "titre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "texte", array()), 0, 70) . "..."), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "image", array()), "path", array()), "html", null, true);
            echo "</td>

                                        <td>
                                            <a  class=\"btn btn-info btn-xs\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_services_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\" style=\"color: #ffffff;\"></i> Modifier</a>
                                            <a  data-toggle=\"modal\" data-target=\"#delete\" data-whatever=\"@mdo\" href=\"\" id=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", array()), "html", null, true);
            echo "\" class=\"modif btn btn-danger btn-xs\" titre=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "titre", array()), "html", null, true);
            echo "\" texte=\"";
            echo twig_get_attribute($this->env, $this->source, $context["service"], "texte", array());
            echo "\" path=\"\"><i class=\"fa fa-times\"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                </tbody>
                            </table>




                            <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>



                            <script>
                                \$('#deletebannieres_id').val(\$('.modif').attr('id'))
                            </script>



                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class=\"pull-right\">
            © 2018 ‐ J'@i l'impression Tout droits réservés.

        </div>
        <div class=\"clearfix\"></div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":services:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 78,  147 => 72,  132 => 67,  128 => 66,  122 => 63,  118 => 62,  114 => 61,  110 => 60,  107 => 59,  103 => 58,  78 => 36,  44 => 4,  38 => 3,  15 => 2,);
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
                    <h3>Services</h3>
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
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >





                        <div class=\"x_title\">
                            <h4><a class=\"data btn btn-success btn-sm\"  href=\"{{ path('admin_services_new') }}\" >Nouveau service</a></h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">




                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Texte</th>
                                    <th>image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for service in services %}
                                    <tr>
                                        <td>{{ service.id }}</td>
                                        <td>{{ service.titre }}</td>
                                        <td>{{ service.texte|slice(0, 70) ~ '...' }}</td>
                                        <td>{{ service.image.path }}</td>

                                        <td>
                                            <a  class=\"btn btn-info btn-xs\" href=\"{{ path('admin_services_edit', { 'id' : service.id }) }}\"><i class=\"fa fa-pencil\" style=\"color: #ffffff;\"></i> Modifier</a>
                                            <a  data-toggle=\"modal\" data-target=\"#delete\" data-whatever=\"@mdo\" href=\"\" id=\"{{ service.id }}\" class=\"modif btn btn-danger btn-xs\" titre=\"{{ service.titre }}\" texte=\"{{ service.texte| raw }}\" path=\"\"><i class=\"fa fa-times\"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>




                            <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>



                            <script>
                                \$('#deletebannieres_id').val(\$('.modif').attr('id'))
                            </script>



                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class=\"pull-right\">
            © 2018 ‐ J'@i l'impression Tout droits réservés.

        </div>
        <div class=\"clearfix\"></div>
    </footer>
{% endblock %}




", ":services:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/services/index.html.twig");
    }
}
