<?php

/* :neufs:show.html.twig */
class __TwigTemplate_d731bc030ad055d18bb925d84ad8db29facc1327eac563abf48ed412097006a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":neufs:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":neufs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Neufs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 14, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Exclusive</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 18, $this->source); })()), "exclusive", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typebien</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 22, $this->source); })()), "typebien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ref</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 26, $this->source); })()), "ref", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 30, $this->source); })()), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 34, $this->source); })()), "text1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 38, $this->source); })()), "text2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 42, $this->source); })()), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surface</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 46, $this->source); })()), "surface", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pieces</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 50, $this->source); })()), "pieces", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chambres</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 54, $this->source); })()), "chambres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ascenseur</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 58, $this->source); })()), "ascenseur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gardien</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 62, $this->source); })()), "gardien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Interphone</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 66, $this->source); })()), "interphone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sdb</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 70, $this->source); })()), "sdb", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chauffage</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 74, $this->source); })()), "chauffage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Construction</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 78, $this->source); })()), "construction", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mecanisme</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 82, $this->source); })()), "mecanisme", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stationnement</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 86, $this->source); })()), "stationnement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 90, $this->source); })()), "annee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surfacet</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 94, $this->source); })()), "surfacet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Saledebain</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 98, $this->source); })()), "saledebain", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Terrasse</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 102, $this->source); })()), "terrasse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 106, $this->source); })()), "disponible", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 106, $this->source); })()), "disponible", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Garages</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 110, $this->source); })()), "garages", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Standing</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 114, $this->source); })()), "standing", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anneeconst</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 118, $this->source); })()), "anneeconst", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Consommation</th>
                <td>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 122, $this->source); })()), "consommation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 126, $this->source); })()), "etage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wc</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 130, $this->source); })()), "wc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cuisine</th>
                <td>";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 134, $this->source); })()), "cuisine", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Piscine</th>
                <td>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 138, $this->source); })()), "piscine", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mandat</th>
                <td>";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 142, $this->source); })()), "mandat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rcs</th>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 146, $this->source); })()), "rcs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alaune</th>
                <td>";
        // line 150
        if (twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 150, $this->source); })()), "alaune", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["neuf"]) || array_key_exists("neuf", $context) ? $context["neuf"] : (function () { throw new Twig_Error_Runtime('Variable "neuf" does not exist.', 160, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 163
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 163, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 165
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 165, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":neufs:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 165,  325 => 163,  319 => 160,  313 => 157,  299 => 150,  292 => 146,  285 => 142,  278 => 138,  271 => 134,  264 => 130,  257 => 126,  250 => 122,  243 => 118,  236 => 114,  229 => 110,  220 => 106,  213 => 102,  206 => 98,  199 => 94,  192 => 90,  185 => 86,  178 => 82,  171 => 78,  164 => 74,  157 => 70,  150 => 66,  143 => 62,  136 => 58,  129 => 54,  122 => 50,  115 => 46,  108 => 42,  101 => 38,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  66 => 18,  59 => 14,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Neufs</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ neuf.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ neuf.titre }}</td>
            </tr>
            <tr>
                <th>Exclusive</th>
                <td>{{ neuf.exclusive }}</td>
            </tr>
            <tr>
                <th>Typebien</th>
                <td>{{ neuf.typebien }}</td>
            </tr>
            <tr>
                <th>Ref</th>
                <td>{{ neuf.ref }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ neuf.type }}</td>
            </tr>
            <tr>
                <th>Text1</th>
                <td>{{ neuf.text1 }}</td>
            </tr>
            <tr>
                <th>Text2</th>
                <td>{{ neuf.text2 }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ neuf.prix }}</td>
            </tr>
            <tr>
                <th>Surface</th>
                <td>{{ neuf.surface }}</td>
            </tr>
            <tr>
                <th>Pieces</th>
                <td>{{ neuf.pieces }}</td>
            </tr>
            <tr>
                <th>Chambres</th>
                <td>{{ neuf.chambres }}</td>
            </tr>
            <tr>
                <th>Ascenseur</th>
                <td>{{ neuf.ascenseur }}</td>
            </tr>
            <tr>
                <th>Gardien</th>
                <td>{{ neuf.gardien }}</td>
            </tr>
            <tr>
                <th>Interphone</th>
                <td>{{ neuf.interphone }}</td>
            </tr>
            <tr>
                <th>Sdb</th>
                <td>{{ neuf.sdb }}</td>
            </tr>
            <tr>
                <th>Chauffage</th>
                <td>{{ neuf.chauffage }}</td>
            </tr>
            <tr>
                <th>Construction</th>
                <td>{{ neuf.construction }}</td>
            </tr>
            <tr>
                <th>Mecanisme</th>
                <td>{{ neuf.mecanisme }}</td>
            </tr>
            <tr>
                <th>Stationnement</th>
                <td>{{ neuf.stationnement }}</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>{{ neuf.annee }}</td>
            </tr>
            <tr>
                <th>Surfacet</th>
                <td>{{ neuf.surfacet }}</td>
            </tr>
            <tr>
                <th>Saledebain</th>
                <td>{{ neuf.saledebain }}</td>
            </tr>
            <tr>
                <th>Terrasse</th>
                <td>{{ neuf.terrasse }}</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>{% if neuf.disponible %}{{ neuf.disponible|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Garages</th>
                <td>{{ neuf.garages }}</td>
            </tr>
            <tr>
                <th>Standing</th>
                <td>{{ neuf.standing }}</td>
            </tr>
            <tr>
                <th>Anneeconst</th>
                <td>{{ neuf.anneeconst }}</td>
            </tr>
            <tr>
                <th>Consommation</th>
                <td>{{ neuf.consommation }}</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>{{ neuf.etage }}</td>
            </tr>
            <tr>
                <th>Wc</th>
                <td>{{ neuf.wc }}</td>
            </tr>
            <tr>
                <th>Cuisine</th>
                <td>{{ neuf.cuisine }}</td>
            </tr>
            <tr>
                <th>Piscine</th>
                <td>{{ neuf.piscine }}</td>
            </tr>
            <tr>
                <th>Mandat</th>
                <td>{{ neuf.mandat }}</td>
            </tr>
            <tr>
                <th>Rcs</th>
                <td>{{ neuf.rcs }}</td>
            </tr>
            <tr>
                <th>Alaune</th>
                <td>{% if neuf.alaune %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_neufs_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_neufs_edit', { 'id': neuf.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":neufs:show.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/neufs/show.html.twig");
    }
}
