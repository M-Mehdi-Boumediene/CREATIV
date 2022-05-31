<?php

/* :partenaires:index.html.twig */
class __TwigTemplate_cb58e56196dfb418bd441cab8f0ad8406092c6d2aa09af56075bca178cf26b27 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":partenaires:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":partenaires:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Partenaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Countviews</th>
                <th>Exclusive</th>
                <th>Titre</th>
                <th>Text1</th>
                <th>Text2</th>
                <th>Text3</th>
                <th>Alaune</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new Twig_Error_Runtime('Variable "partenaires" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_show", array("id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "countViews", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "exclusive", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "text1", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "text2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "text3", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["partenaire"], "alaune", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "slug", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_show", array("id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_new");
        echo "\">Create a new partenaire</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":partenaires:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  134 => 45,  122 => 39,  116 => 36,  109 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  71 => 24,  68 => 23,  64 => 22,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Partenaires list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Countviews</th>
                <th>Exclusive</th>
                <th>Titre</th>
                <th>Text1</th>
                <th>Text2</th>
                <th>Text3</th>
                <th>Alaune</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for partenaire in partenaires %}
            <tr>
                <td><a href=\"{{ path('admin_partenaires_show', { 'id': partenaire.id }) }}\">{{ partenaire.id }}</a></td>
                <td>{{ partenaire.countViews }}</td>
                <td>{{ partenaire.exclusive }}</td>
                <td>{{ partenaire.titre }}</td>
                <td>{{ partenaire.text1 }}</td>
                <td>{{ partenaire.text2 }}</td>
                <td>{{ partenaire.text3 }}</td>
                <td>{% if partenaire.alaune %}Yes{% else %}No{% endif %}</td>
                <td>{{ partenaire.slug }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_partenaires_show', { 'id': partenaire.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_partenaires_edit', { 'id': partenaire.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_partenaires_new') }}\">Create a new partenaire</a>
        </li>
    </ul>
{% endblock %}
", ":partenaires:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/partenaires/index.html.twig");
    }
}
