<?php

/* :logos:index.html.twig */
class __TwigTemplate_a54e9268b0699ef3f8b1d225323db3187ec32121a288b54184e43b71da6dbc10 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":logos:index.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":logos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <div class=\"\">
                <div class=\"page-title\">
                    <div class=\"title_left\">
                        <h3>Clients / Partenaires</h3>
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-logo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "

                        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                            </button>
                            ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">

                        <div class=\"x_panel\">
                            <div class=\"x_title\">


                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">


                                <form action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logos_new");
        echo "\" method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">


                                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "name", array()), 'label', array("label" => "Nom  : "));
        echo "
                                        ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "name", array()), 'errors');
        echo "

                                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "file", array()), 'label', array("label" => "Logo  : "));
        echo "
                                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "file", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                                        <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "file", array()), 'errors');
        echo "






                                    </div>






                                </div>

                                ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                                </form>




                            </div>



                        </div>
                    </div>
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
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new Twig_Error_Runtime('Variable "logos" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
            // line 110
            echo "                                        <tr>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logo"], "name", array()), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["logo"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                    </tbody>
                                </table>





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
        © 2020 ‐ NDWI Tout droits réservés.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->



    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":logos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 145,  210 => 115,  201 => 112,  197 => 111,  194 => 110,  190 => 109,  156 => 78,  137 => 62,  132 => 60,  128 => 59,  123 => 57,  119 => 56,  115 => 55,  105 => 50,  91 => 38,  81 => 34,  74 => 29,  70 => 28,  44 => 4,  38 => 3,  15 => 2,);
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
                        <h3>Clients / Partenaires</h3>
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
                    {% for flash_message in app.session.flashBag.get('notice-logo') %}


                        <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                            </button>
                            {{ flash_message }}
                        </div>

                    {% endfor %}

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">

                        <div class=\"x_panel\">
                            <div class=\"x_title\">


                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">


                                <form action=\"{{ path('admin_logos_new') }}\" method=\"POST\" {{ form_start(form) }}
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">


                                        {{ form_label(form.name, \"Nom  : \") }}
                                        {{ form_widget(form.name,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.name) }}

                                        {{ form_label(form.file, \"Logo  : \") }}
                                        {{ form_widget(form.file,{'attr': {'class': ''}}) }}
                                        <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
                                        {{ form_errors(form.file) }}






                                    </div>






                                </div>

                                {{ form_end(form) }}
                                </form>




                            </div>



                        </div>
                    </div>
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
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for logo in logos %}
                                        <tr>
                                            <td>{{ logo.name}}</td>
                                            <td><a href=\"{{ path('admin_logos_edit', { 'id' : logo.id }) }}\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
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
    </div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        © 2020 ‐ NDWI Tout droits réservés.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->



    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>

{% endblock %}



", ":logos:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/logos/index.html.twig");
    }
}
