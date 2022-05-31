<?php

/* CosanitBundle:Default:produits-categorie.html.twig */
class __TwigTemplate_9bbeeb3a2fe8e387a48081771bcf4ccbfc76a85d938d7200b99c3ccd48625648 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:produits-categorie.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:produits-categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " SADJIACERAM | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 2, $this->source); })()), "nom", array()), "html", null, true);
        echo " Algérie";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 5
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 10
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "

<div class=\"header-overflow\" id=\"header-overflow\"></div>


<div class=\"module-slide\">
    <div id=\"slider1_container\" style=\"position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1349px; height: 505.875px; overflow: hidden;\">

        <div style=\"position: absolute; top: 0px; left: 0px; width: 1600px; height: 600px; transform-origin: 0px 0px; transform: scale(0.843125);\">
            <div class=\"\" style=\"position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1600px; height: 600px; overflow: visible;\">
            
                <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 1600px; height: 600px; overflow: hidden; z-index: 0;\">
                    
                       ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["produit"], "image1", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 30
                echo "
             <div style=\"width: 1600px; height: 600px; top: 0px; left: 0; position: absolute; overflow: hidden; transform: perspective(2000px);\"><img u=\"image\" src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", array()))), "html", null, true);
                echo "\" alt=\"pack web présence\" border=\"0\" style=\"width: 1600px; height: 600px; top: 0px; left: 0px; transform: perspective(2000px); position: absolute;\">
                
                    </div>
       
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            

          
                </div>
             
            </div>
        </div><span u=\"arrowleft\" class=\"jssora21l\" style=\"width: 55px; height: 55px; top: 225.438px; left: 8px; display: none;\"></span><span u=\"arrowright\" class=\"jssora21r\" style=\"width: 55px; height: 55px; top: 225.438px; right: 8px; display: none;\"></span>
        <div
            u=\"navigator\" class=\"jssorb17\" style=\"position: absolute; bottom: 16px; right: 6px; width: 121px; height: 16px; left: 614px;\">

            <div u=\"prototype\" style=\"position: absolute; width: 16px; height: 16px; left: 0px; top: 0px;\" class=\"av\"></div>
      
    </div>
</div>
</div>


     
<main>
       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 57
            echo "
       ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["produit"], "text2", array());
            echo "
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:produits-categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  162 => 58,  159 => 57,  155 => 56,  134 => 37,  128 => 36,  117 => 31,  114 => 30,  109 => 29,  105 => 28,  90 => 15,  84 => 14,  76 => 10,  70 => 9,  61 => 5,  55 => 4,  41 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block titre %} SADJIACERAM | {{ categorie.nom }} Algérie{% endblock %}

{% block description %}


{% endblock %}

    {% block canonical %}

    {% endblock %}


{% block body %}


<div class=\"header-overflow\" id=\"header-overflow\"></div>


<div class=\"module-slide\">
    <div id=\"slider1_container\" style=\"position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1349px; height: 505.875px; overflow: hidden;\">

        <div style=\"position: absolute; top: 0px; left: 0px; width: 1600px; height: 600px; transform-origin: 0px 0px; transform: scale(0.843125);\">
            <div class=\"\" style=\"position: relative; margin: 0px auto; top: 0px; left: 0px; width: 1600px; height: 600px; overflow: visible;\">
            
                <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 1600px; height: 600px; overflow: hidden; z-index: 0;\">
                    
                       {% for produit in produits %}
              {% for image in produit.image1 %}

             <div style=\"width: 1600px; height: 600px; top: 0px; left: 0; position: absolute; overflow: hidden; transform: perspective(2000px);\"><img u=\"image\" src=\"{{ asset('photos_produits/'~image.path) }}\" alt=\"pack web présence\" border=\"0\" style=\"width: 1600px; height: 600px; top: 0px; left: 0px; transform: perspective(2000px); position: absolute;\">
                
                    </div>
       
            {% endfor %}
              {% endfor %}
            

          
                </div>
             
            </div>
        </div><span u=\"arrowleft\" class=\"jssora21l\" style=\"width: 55px; height: 55px; top: 225.438px; left: 8px; display: none;\"></span><span u=\"arrowright\" class=\"jssora21r\" style=\"width: 55px; height: 55px; top: 225.438px; right: 8px; display: none;\"></span>
        <div
            u=\"navigator\" class=\"jssorb17\" style=\"position: absolute; bottom: 16px; right: 6px; width: 121px; height: 16px; left: 614px;\">

            <div u=\"prototype\" style=\"position: absolute; width: 16px; height: 16px; left: 0px; top: 0px;\" class=\"av\"></div>
      
    </div>
</div>
</div>


     
<main>
       {% for produit in produits %}

       {{produit.text2|raw()}}
         
        {% endfor %}

</main>
{% endblock %}", "CosanitBundle:Default:produits-categorie.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/produits-categorie.html.twig");
    }
}
