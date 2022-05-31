<?php

/* activations/index.html.twig */
class __TwigTemplate_5c728fb587fbc5098152f82bf2ff8e001db474cf04360b8684ee2639810d1694 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "activations/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "activations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

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
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-activation"), "method"));
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
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-activation-edit"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 42
            echo "

                            <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                </button>
                                ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                        <div class=\"x_title\">
                            <h4>Liste des demandes d'activations</h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">
                            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Wilaya</th>

                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Serial</th>
                                    <th>Scan Facture</th>

                                    <th>Activation</th>
                                    <th>Remarque</th>
                                    <th>Modifier</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activations"]) || array_key_exists("activations", $context) ? $context["activations"] : (function () { throw new Twig_Error_Runtime('Variable "activations" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activation"]) {
            // line 80
            echo "                                    <tr>

                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "wilaya", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "tel", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "email", array()), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "date", array()), "d-m-Y à H:i:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "serial", array()), "html", null, true);
            echo "</td>
                                        <td><a class=\"fancybox\" rel=\"group\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("scans/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activation"], "photo", array()), "path", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-picture\" aria-hidden=\"true\" style=\"font-size:20px; color: #26b99a;\"></span></a></td>
                                        <td>
                                            ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, $context["activation"], "etat", array()) == 1)) {
                // line 91
                echo "                                                <div class=\"etat\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "etat", array()), "html", null, true);
                echo "</div>
                                                <div class=\"\">
                                                    <label>
                                                        <input type=\"checkbox\" checked class=\"js-switch\" disabled=\"disabled\" value=\" ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "id", array()), "html", null, true);
                echo "\">
                                                    </label>
                                                </div>
                                            ";
            } else {
                // line 98
                echo "                                                <div class=\"off\">
                                                    <label>
                                                        <input type=\"checkbox\" class=\"js-switch\" value=\" ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "id", array()), "html", null, true);
                echo "\">
                                                    </label>
                                                </div>

                                            ";
            }
            // line 105
            echo "
                                        </td>

                                        <td> ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activation"], "message", array()), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Activations_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["activation"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                </tbody>
                            </table>





                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 113,  223 => 109,  219 => 108,  214 => 105,  206 => 100,  202 => 98,  195 => 94,  188 => 91,  186 => 90,  181 => 88,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  161 => 83,  157 => 82,  153 => 80,  149 => 79,  126 => 59,  116 => 51,  106 => 47,  99 => 42,  94 => 41,  84 => 37,  77 => 32,  73 => 31,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}


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
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\" >
                        {% for flash_message in app.session.flashBag.get('notice-activation') %}


                            <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                </button>
                                {{ flash_message }}
                            </div>

                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('notice-activation-edit') %}


                            <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                </button>
                                {{ flash_message }}
                            </div>

                        {% endfor %}

                        <div class=\"x_title\">
                            <h4>Liste des demandes d'activations</h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">
                            <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Wilaya</th>

                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Serial</th>
                                    <th>Scan Facture</th>

                                    <th>Activation</th>
                                    <th>Remarque</th>
                                    <th>Modifier</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for activation in activations %}
                                    <tr>

                                        <td>{{ activation.nom }}</td>
                                        <td>{{ activation.wilaya }}</td>
                                        <td>{{ activation.tel }}</td>
                                        <td>{{ activation.email }}</td>
                                        <td> {{ activation.date|date('d-m-Y à H:i:s')}}</td>
                                        <td>{{ activation.serial }}</td>
                                        <td><a class=\"fancybox\" rel=\"group\" href=\"{{ asset('scans/' ~ activation.photo.path)}}\"><span class=\"glyphicon glyphicon-picture\" aria-hidden=\"true\" style=\"font-size:20px; color: #26b99a;\"></span></a></td>
                                        <td>
                                            {% if activation.etat == 1 %}
                                                <div class=\"etat\">{{ activation.etat }}</div>
                                                <div class=\"\">
                                                    <label>
                                                        <input type=\"checkbox\" checked class=\"js-switch\" disabled=\"disabled\" value=\" {{ activation.id }}\">
                                                    </label>
                                                </div>
                                            {% else %}
                                                <div class=\"off\">
                                                    <label>
                                                        <input type=\"checkbox\" class=\"js-switch\" value=\" {{ activation.id }}\">
                                                    </label>
                                                </div>

                                            {% endif %}

                                        </td>

                                        <td> {{ activation.message }}</td>
                                        <td><a href=\"{{ path('admin_Activations_edit', { 'id' : activation.id }) }}\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>

                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>





                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "activations/index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\activations\\index.html.twig");
    }
}
