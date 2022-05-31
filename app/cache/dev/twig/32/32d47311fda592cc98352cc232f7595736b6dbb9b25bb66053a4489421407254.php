<?php

/* partenaires/show.html.twig */
class __TwigTemplate_0a8203aa4ed20e97c78ddc6320f2bd22fb716c1ae2fad123437f90c238742d55 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "partenaires/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partenaires/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Partenaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Countviews</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 14, $this->source); })()), "countViews", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Exclusive</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 18, $this->source); })()), "exclusive", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 22, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 26, $this->source); })()), "text1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 30, $this->source); })()), "text2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text3</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 34, $this->source); })()), "text3", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alaune</th>
                <td>";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 38, $this->source); })()), "alaune", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 42, $this->source); })()), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["partenaire"]) || array_key_exists("partenaire", $context) ? $context["partenaire"] : (function () { throw new Twig_Error_Runtime('Variable "partenaire" does not exist.', 52, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partenaires/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  134 => 55,  128 => 52,  122 => 49,  112 => 42,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Partenaire</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ partenaire.id }}</td>
            </tr>
            <tr>
                <th>Countviews</th>
                <td>{{ partenaire.countViews }}</td>
            </tr>
            <tr>
                <th>Exclusive</th>
                <td>{{ partenaire.exclusive }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ partenaire.titre }}</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>{{ partenaire.text1 }}</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>{{ partenaire.text2 }}</td>
            </tr>
            <tr>
                <th>Text3</th>
                <td>{{ partenaire.text3 }}</td>
            </tr>
            <tr>
                <th>Alaune</th>
                <td>{% if partenaire.alaune %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{ partenaire.slug }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_partenaires_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_partenaires_edit', { 'id': partenaire.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "partenaires/show.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\partenaires\\show.html.twig");
    }
}
