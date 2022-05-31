<?php

/* FMElfinderBundle:Elfinder/helper:assets_css.html.twig */
class __TwigTemplate_6a4310795c7651403e00cb071e119402f7b949d2dfc6db4f5d4602881b5a5e37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 1, $this->source); })()) . "/jquery-ui/themes/") . (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 1, $this->source); })())) . "/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 2, $this->source); })()) . "/elfinder/dist/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 3, $this->source); })()) . "/elfinder/dist/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  31 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset(\"#{prefix}/jquery-ui/themes/#{theme}/jquery-ui.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/dist/css/elfinder.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/dist/css/theme.css\") }}\" rel=\"stylesheet\" type=\"text/css\">

", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig", "D:\\xampp\\htdocs\\CREATIV\\vendor\\helios-ag\\fm-elfinder-bundle\\src/Resources/views/Elfinder/helper/assets_css.html.twig");
    }
}
