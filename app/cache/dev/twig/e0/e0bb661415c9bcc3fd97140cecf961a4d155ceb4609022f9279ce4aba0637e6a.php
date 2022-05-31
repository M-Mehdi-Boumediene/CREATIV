<?php

/* types/new.html.twig */
class __TwigTemplate_f6de3d825fc07b09bf951ab4a7550e4649c529ac005bc4bf5f2d2c58955f5875 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "types/new.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "types/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        #types_texte{
            margin: 0px -353px 10px 0px;
            width: 686px;
            height: 173px;
        }
    </style>
    <body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">


            <!-- page content -->
            <div class=\"right_col\" role=\"main\">
                <div class=\"\">
                    <div class=\"page-title\">



                        <div class=\"title_right\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                                <div class=\"input-group\">

                    <span class=\"input-group-btn\">

                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Nouveau type de bien </h2>

                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"x_content\">





                                    <form action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_types_new");
        echo "\"method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "nom", array()), 'errors');
        echo "

                                            ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "texte", array()), 'label', array("label" => "Description"));
        echo "
                                            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "texte", array()), 'errors');
        echo "

                                            <ul class=\"tags\"  data-prototype=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "photo", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "photo", array()), 'widget');
        echo "
                                                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "photo", array()), 'errors');
        echo "

                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>

                                        </div>


                                    </div>

                                    ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                                    </form>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>



    <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter photo</a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('ul.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addTagLink.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi = \$('<li></li>').append(newForm);
            \$newLinkLi.before(\$newFormLi);
        }




    </script>

    </body>
    </html>












";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "types/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 108,  151 => 78,  138 => 68,  134 => 67,  129 => 65,  124 => 63,  120 => 62,  116 => 61,  111 => 59,  107 => 58,  103 => 57,  94 => 53,  44 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <style>
        #types_texte{
            margin: 0px -353px 10px 0px;
            width: 686px;
            height: 173px;
        }
    </style>
    <body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">


            <!-- page content -->
            <div class=\"right_col\" role=\"main\">
                <div class=\"\">
                    <div class=\"page-title\">



                        <div class=\"title_right\">
                            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                                <div class=\"input-group\">

                    <span class=\"input-group-btn\">

                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"clearfix\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12 col-sm-12 col-xs-12\">

                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>Nouveau type de bien </h2>

                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"x_content\">





                                    <form action=\"{{ path('admin_types_new') }}\"method=\"POST\" {{ form_start(form) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            {{ form_label(form.nom, \"Nom\") }}
                                            {{ form_widget(form.nom,{'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.nom) }}

                                            {{ form_label(form.texte, \"Description\") }}
                                            {{ form_widget(form.texte,{'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.texte) }}

                                            <ul class=\"tags\"  data-prototype=\"{{ form_widget(form.photo.vars.prototype)|e('html_attr') }}\">

                                                {{ form_widget(form.photo) }}
                                                {{ form_errors(form.photo) }}

                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>

                                        </div>


                                    </div>

                                    {{ form_end(form) }}
                                    </form>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class=\"pull-right\">

        </div>
        <div class=\"clearfix\"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>



    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>

    <script>
        var \$collectionHolder;

        // setup an \"add a tag\" link
        var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter photo</a>');
        var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder = \$('ul.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder.append(\$newLinkLi);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

            \$addTagLink.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm(\$collectionHolder, \$newLinkLi);
            });
        });

        function addTagForm(\$collectionHolder, \$newLinkLi) {
            // Get the data-prototype explained earlier
            var prototype = \$collectionHolder.data('prototype');

            // get the new index
            var index = \$collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            \$collectionHolder.data('index', index + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi = \$('<li></li>').append(newForm);
            \$newLinkLi.before(\$newFormLi);
        }




    </script>

    </body>
    </html>












{% endblock %}


", "types/new.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\types\\new.html.twig");
    }
}
