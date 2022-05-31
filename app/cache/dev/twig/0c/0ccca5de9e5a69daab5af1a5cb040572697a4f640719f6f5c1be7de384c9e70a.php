<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.twig */
class __TwigTemplate_8efc8aeb6553401eebf45babc7653f0780b8c45ad5c3d29e56c84b15f76e6c2c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'place_autocomplete_widget' => array($this, 'block_place_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        // line 2
        echo "    ";
        echo $this->extensions['Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension']->render((isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 2, $this->source); })()), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 2, $this->source); })()));
        echo "
    ";
        // line 3
        if ((isset($context["api"]) || array_key_exists("api", $context) ? $context["api"] : (function () { throw new Twig_Error_Runtime('Variable "api" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        ";
            echo $this->extensions['Ivory\GoogleMapBundle\Twig\ApiExtension']->render(array(0 => (isset($context["autocomplete"]) || array_key_exists("autocomplete", $context) ? $context["autocomplete"] : (function () { throw new Twig_Error_Runtime('Variable "autocomplete" does not exist.', 4, $this->source); })())));
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  44 => 3,  39 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block place_autocomplete_widget %}
    {{ ivory_google_place_autocomplete(autocomplete, attr) }}
    {% if api %}
        {{ ivory_google_api([autocomplete]) }}
    {% endif %}
{% endblock %}
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.twig", "D:\\xampp\\htdocs\\CREATIV\\vendor\\egeloen\\google-map-bundle\\Resources\\views\\Form\\place_autocomplete_widget.html.twig");
    }
}
