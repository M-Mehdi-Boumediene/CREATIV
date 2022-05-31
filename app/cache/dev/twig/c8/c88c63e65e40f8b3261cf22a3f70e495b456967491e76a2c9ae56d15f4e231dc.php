<?php

/* HttplugBundle:script:httplug.js.twig */
class __TwigTemplate_de384521deb5c08a716bdccf7db77b173fa0625ac51ec90b3c744f15b8e7c016 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HttplugBundle:script:httplug.js.twig"));

        // line 1
        echo "/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('httplug-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.httplug-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.httplug-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HttplugBundle:script:httplug.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Toggle visibility on elements.
 */
document.addEventListener(\"DOMContentLoaded\", function() {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toggle'), function (source) {
        source.addEventListener('click', function() {
            Array.prototype.forEach.call(document.querySelectorAll(source.getAttribute('data-toggle')), function (target) {
                target.classList.toggle('httplug-hidden');
            });
        });
    });
});

/**
 * Copy as cURL.
 */
document.addEventListener(\"DOMContentLoaded\", function () {
    Array.prototype.forEach.call(document.getElementsByClassName('httplug-toolbar'), function (toolbar) {
        var button = toolbar.querySelector('.httplug-copy-as-curl>button');
        button.addEventListener('click', function() {
            var input = toolbar.querySelector('.httplug-copy-as-curl>input');
            input.select();
            document.execCommand('copy');
            input.setSelectionRange(0, 0);
       });
    });
})
", "HttplugBundle:script:httplug.js.twig", "D:\\xampp\\htdocs\\CREATIV\\vendor\\php-http\\httplug-bundle/Resources/views/script/httplug.js.twig");
    }
}
