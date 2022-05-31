<?php

/* aproposblock/edit.html.twig */
class __TwigTemplate_c3c61dc5f08c63154e2e33555e5e8fd5cb5187e81b3ebf0543bef38e39b66664 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "aproposblock/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aproposblock/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        textarea.form-control {
            height: 180px;
        }
    </style>

    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>L’Assurance Automobile</h3>
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

                    <div class=\"x_panel\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice-apropos-edit"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 40
            echo "

                            <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                </button>
                                ";
            // line 45
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">

                            ";
        // line 56
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">

                                    ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 60, $this->source); })()), "text", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 61, $this->source); })()), "text", array()), 'errors');
        echo "

                                </div>

                                    <br><br>
                                    <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>


                            </div>


                            ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "







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
        return "aproposblock/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  124 => 61,  120 => 60,  113 => 56,  104 => 49,  94 => 45,  87 => 40,  83 => 39,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
    <style>
        textarea.form-control {
            height: 180px;
        }
    </style>

    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>L’Assurance Automobile</h3>
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

                    <div class=\"x_panel\">
                        {% for flash_message in app.session.flashBag.get('notice-apropos-edit') %}


                            <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                </button>
                                {{ flash_message }}
                            </div>

                        {% endfor %}
                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">

                            {{ form_start(edit_form) }}
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">

                                    {{ form_widget(edit_form.text,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.text) }}

                                </div>

                                    <br><br>
                                    <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>


                            </div>


                            {{ form_end(edit_form) }}







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




















", "aproposblock/edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\aproposblock\\edit.html.twig");
    }
}
