<?php

/* bannieres/edit.html.twig */
class __TwigTemplate_c011ce80489efe174f6ac7d657099cae899f7250f40f43da511edcebb5d44115 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "bannieres/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bannieres/edit.html.twig"));

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
    textarea#textarea.form-control{
        height: 113px;
    }
</style>

    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Bannieres</h3>
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
                            <h4>Èditer la Bannière </h4>

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">


                            <img  src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Bannieres/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banniere"]) || array_key_exists("banniere", $context) ? $context["banniere"] : (function () { throw new Twig_Error_Runtime('Variable "banniere" does not exist.', 50, $this->source); })()), "path", array()), "html", null, true);
        echo "\" width=\"100%\" />


                            <br><br>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 56
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 57, $this->source); })()), "file", array()), 'label', array("label" => "Image (1500x835) "));
        echo "
                                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 58, $this->source); })()), "file", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 59, $this->source); })()), "file", array()), 'errors');
        echo "

                                    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 61, $this->source); })()), "titre", array()), 'label', array("label" => "Titre "));
        echo "
                                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 63, $this->source); })()), "titre", array()), 'errors');
        echo "

                                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 65, $this->source); })()), "texte", array()), 'label', array("label" => "Texte "));
        echo "
                                    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 66, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 67, $this->source); })()), "texte", array()), 'errors');
        echo "
                                    <br>
                                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bannieres_index");
        echo "\"><button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button></a>
                                    <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                    ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "

                                </div>

                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    ";
        // line 76
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
                                    <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer la bannière</button>
                                    ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                                </div>



                            </div>







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
        return "bannieres/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 78,  160 => 76,  152 => 71,  147 => 69,  142 => 67,  138 => 66,  134 => 65,  129 => 63,  125 => 62,  121 => 61,  116 => 59,  112 => 58,  108 => 57,  104 => 56,  94 => 50,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
<style>
    textarea#textarea.form-control{
        height: 113px;
    }
</style>

    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Bannieres</h3>
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
                            <h4>Èditer la Bannière </h4>

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">


                            <img  src=\"{{ asset('Bannieres/') }}{{ banniere.path}}\" width=\"100%\" />


                            <br><br>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{ form_start(edit_form) }}
                                    {{ form_label(edit_form.file, \"Image (1500x835) \") }}
                                    {{ form_widget(edit_form.file,{'attr': {'class': 'form-control text'}}) }}
                                    {{ form_errors(edit_form.file) }}

                                    {{ form_label(edit_form.titre, \"Titre \") }}
                                    {{ form_widget(edit_form.titre,{'attr': {'class': 'form-control text'}}) }}
                                    {{ form_errors(edit_form.titre) }}

                                    {{ form_label(edit_form.texte, \"Texte \") }}
                                    {{ form_widget(edit_form.texte,{'attr': {'class': 'form-control text'}}) }}
                                    {{ form_errors(edit_form.texte) }}
                                    <br>
                                    <a href=\"{{ path('admin_bannieres_index') }}\"><button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button></a>
                                    <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                    {{ form_end(edit_form) }}

                                </div>

                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    {{ form_start(delete_form) }}
                                    <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer la bannière</button>
                                    {{ form_end(delete_form) }}
                                </div>



                            </div>







                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "bannieres/edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\bannieres\\edit.html.twig");
    }
}
