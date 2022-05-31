<?php

/* activations/show.html.twig */
class __TwigTemplate_a03b654967a011328da909c710ff31c860662fddd21aa6dd717ef836cf12c9fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "activations/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "activations/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Activations</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 14, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 18, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wilaya</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 22, $this->source); })()), "wilaya", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 26, $this->source); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Email</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activation"]) || array_key_exists("activation", $context) ? $context["activation"] : (function () { throw new Twig_Error_Runtime('Variable "activation" does not exist.', 32, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <form  method=\"POST\" ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 41, $this->source); })()), "nom", array()), 'label', array("label" => "Nom  : "));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 42, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 43, $this->source); })()), "nom", array()), 'errors');
        echo "

            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 45, $this->source); })()), "adresse", array()), 'label', array("label" => "Adrésse  : "));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 46, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 47, $this->source); })()), "adresse", array()), 'errors');
        echo "

            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 49, $this->source); })()), "wilaya", array()), 'label', array("label" => "Wilaya  : "));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 50, $this->source); })()), "wilaya", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 51, $this->source); })()), "wilaya", array()), 'errors');
        echo "

            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), "reference", array()), 'label', array("label" => "Réference  : "));
        echo "
            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 54, $this->source); })()), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 55, $this->source); })()), "reference", array()), 'errors');
        echo "


        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "tel", array()), 'label', array("label" => "Tel  : "));
        echo "
            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 63, $this->source); })()), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 64, $this->source); })()), "tel", array()), 'errors');
        echo "


            ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 67, $this->source); })()), "date", array()), 'label');
        echo "
            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 68, $this->source); })()), "date", array()), 'widget', array("attr" => array("class" => "datetime")));
        echo "
            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 69, $this->source); })()), "date", array()), 'errors');
        echo "



            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 73, $this->source); })()), "photo", array()), 'label', array("label" => " "));
        echo "
            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("scans/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 74, $this->source); })()), "photo", array()), "vars", array()), "data", array()), "path", array()))), "html", null, true);
        echo "\" width=\"233\">
            ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 75, $this->source); })()), "photo", array()), 'widget', array("attr" => array("class" => "photo")));
        echo "
            ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 76, $this->source); })()), "photo", array()), 'errors');
        echo "



        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
            ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "email", array()), 'label', array("label" => "Email  : "));
        echo "
            ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 83, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 84, $this->source); })()), "email", array()), 'errors');
        echo "

            ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 86, $this->source); })()), "message", array()), 'label', array("label" => "Remarque  : "));
        echo "
            ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 87, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 88, $this->source); })()), "message", array()), 'errors');
        echo "


            <button type=\"submit\" class=\"btn btn-success\">Modifier</button>

        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 96, $this->source); })()), "etat", array()), 'label', array("label" => "Activation  : "));
        echo "
            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 97, $this->source); })()), "etat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 98, $this->source); })()), "etat", array()), 'errors');
        echo "
        </div>


    </div>

    ";
        // line 104
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
    ";
        // line 105
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 105, $this->source); })()), 'form_start');
        echo "
    <input class=\"btn btn-danger\"  type=\"submit\" value=\"Supprimer le produit\">
    ";
        // line 107
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 107,  264 => 105,  260 => 104,  251 => 98,  247 => 97,  243 => 96,  232 => 88,  228 => 87,  224 => 86,  219 => 84,  215 => 83,  211 => 82,  202 => 76,  198 => 75,  194 => 74,  190 => 73,  183 => 69,  179 => 68,  175 => 67,  169 => 64,  165 => 63,  161 => 62,  151 => 55,  147 => 54,  143 => 53,  138 => 51,  134 => 50,  130 => 49,  125 => 47,  121 => 46,  117 => 45,  112 => 43,  108 => 42,  104 => 41,  97 => 37,  89 => 32,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Activations</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ activation.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ activation.nom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ activation.adresse }}</td>
            </tr>
            <tr>
                <th>Wilaya</th>
                <td>{{ activation.wilaya }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ activation.tel }}</td>
            </tr>


            <tr>
                <th>Email</th>
                <td>{{ activation.email }}</td>
            </tr>
        </tbody>
    </table>

    <form  method=\"POST\" {{ form_start(edit_form) }}
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            {{ form_label(edit_form.nom, \"Nom  : \") }}
            {{ form_widget(edit_form.nom,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.nom) }}

            {{ form_label(edit_form.adresse, \"Adrésse  : \") }}
            {{ form_widget(edit_form.adresse,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.adresse) }}

            {{ form_label(edit_form.wilaya, \"Wilaya  : \") }}
            {{ form_widget(edit_form.wilaya,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.wilaya) }}

            {{ form_label(edit_form.reference, \"Réference  : \") }}
            {{ form_widget(edit_form.reference,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.reference) }}


        </div>

        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            {{ form_label(edit_form.tel, \"Tel  : \") }}
            {{ form_widget(edit_form.tel,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.tel) }}


            {{ form_label(edit_form.date, \"\") }}
            {{ form_widget(edit_form.date,{'attr': {'class': 'datetime'}}) }}
            {{ form_errors(edit_form.date) }}



            {{ form_label(edit_form.photo, \" \") }}
            <img src=\"{{ asset('scans/' ~ edit_form.photo.vars.data.path)}}\" width=\"233\">
            {{ form_widget(edit_form.photo,{'attr': {'class': 'photo'}}) }}
            {{ form_errors(edit_form.photo) }}



        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">
            {{ form_label(edit_form.email, \"Email  : \") }}
            {{ form_widget(edit_form.email,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.email) }}

            {{ form_label(edit_form.message, \"Remarque  : \") }}
            {{ form_widget(edit_form.message,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.message) }}


            <button type=\"submit\" class=\"btn btn-success\">Modifier</button>

        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

            {{ form_label(edit_form.etat, \"Activation  : \") }}
            {{ form_widget(edit_form.etat,{'attr': {'class': 'form-control'}}) }}
            {{ form_errors(edit_form.etat) }}
        </div>


    </div>

    {{ form_end(edit_form) }}
    {{ form_start(delete_form) }}
    <input class=\"btn btn-danger\"  type=\"submit\" value=\"Supprimer le produit\">
    {{ form_end(delete_form) }}
    </form>
{% endblock %}
", "activations/show.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\activations\\show.html.twig");
    }
}
