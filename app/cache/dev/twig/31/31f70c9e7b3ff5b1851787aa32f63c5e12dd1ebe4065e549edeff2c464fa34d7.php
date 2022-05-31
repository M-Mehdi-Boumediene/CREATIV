<?php

/* FMElfinderBundle:Elfinder:elfinder_type.html.twig */
class __TwigTemplate_fd7b24d2d891b89739daf1dfdf7d79a7f696ce6249e3c5e2700c39358a2f3cda extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:elfinder_type.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 15, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 15, $this->source); })()))), "html", null, true);
        echo "',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 17
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new Twig_Error_Runtime('Variable "onlyMimes" does not exist.', 17, $this->source); })());
        echo ",
            getFileCallback: function(file) {
                ";
        // line 19
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new Twig_Error_Runtime('Variable "relative_path" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                    window.opener.setValue('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "pathPrefix" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "\");
                ";
        } else {
            // line 22
            echo "                    window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\");
                ";
        }
        // line 24
        echo "                window.close();
            }
        });


    ";
        // line 29
        if ((isset($context["fullscreen"]) || array_key_exists("fullscreen", $context) ? $context["fullscreen"] : (function () { throw new Twig_Error_Runtime('Variable "fullscreen" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    \$window.resize();
    ";
        }
        // line 39
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 39,  96 => 30,  94 => 29,  87 => 24,  81 => 22,  71 => 20,  69 => 19,  64 => 17,  60 => 16,  56 => 15,  51 => 12,  45 => 10,  43 => 9,  39 => 7,  33 => 5,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% if includeAssets %}
        {{ include(\"@FMElfinder/Elfinder/helper/assets_css.html.twig\") }}
    {% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '{{path('ef_connect', { 'instance': instance, 'homeFolder': homeFolder } )}}',
            lang : '{{locale}}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback: function(file) {
                {% if relative_path %}
                    window.opener.setValue('{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\"), \"{{ id }}\");
                {% else %}
                    window.opener.setValue(file.url, \"{{ id }}\");
                {% endif %}
                window.close();
            }
        });


    {% if fullscreen %}
    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    \$window.resize();
    {% endif %}
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:elfinder_type.html.twig", "D:\\xampp\\htdocs\\CREATIV\\vendor\\helios-ag\\fm-elfinder-bundle\\src/Resources/views/Elfinder/elfinder_type.html.twig");
    }
}
