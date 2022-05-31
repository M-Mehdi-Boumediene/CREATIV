<?php

/* apropos/show.html.twig */
class __TwigTemplate_1f3fdf1da25860a8432bfd63627d19e49413b033b96bb3ffce85b0f54fb86c47 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "apropos/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "apropos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Apropos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre1</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 14, $this->source); })()), "titre1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 18, $this->source); })()), "text1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre2</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 22, $this->source); })()), "titre2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 26, $this->source); })()), "text2", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_about_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_about_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["apropo"]) || array_key_exists("apropo", $context) ? $context["apropo"] : (function () { throw new Twig_Error_Runtime('Variable "apropo" does not exist.', 36, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "apropos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Apropos</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ apropo.id }}</td>
            </tr>
            <tr>
                <th>Titre1</th>
                <td>{{ apropo.titre1 }}</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>{{ apropo.text1 }}</td>
            </tr>
            <tr>
                <th>Titre2</th>
                <td>{{ apropo.titre2 }}</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>{{ apropo.text2 }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_about_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_about_edit', { 'id': apropo.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "apropos/show.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\apropos\\show.html.twig");
    }
}
