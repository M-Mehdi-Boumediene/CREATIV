<?php

/* :types:edit.html.twig */
class __TwigTemplate_d5ba3aeda9fb52a5f94b38915ba78473e655df7fceb8a73253d65ea0adf7689e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":types:edit.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":types:edit.html.twig"));

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
                                    <h2>Modifier type de bien </h2>

                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"x_content\">





                                 ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 57, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 58, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 59, $this->source); })()), "nom", array()), 'errors');
        echo "

                                            ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 61, $this->source); })()), "texte", array()), 'label', array("label" => "Description"));
        echo "
                                            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 63, $this->source); })()), "texte", array()), 'errors');
        echo "

                                            <ul class=\"tags\"  data-prototype=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 65, $this->source); })()), "photo", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 67, $this->source); })()), "photo", array()), 'widget');
        echo "
                                                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 68, $this->source); })()), "photo", array()), 'errors');
        echo "

                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>

                                        </div>



                                    </div>

                                    ";
        // line 79
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "



                                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                        ";
        // line 84
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 84, $this->source); })()), 'form_start');
        echo "
                                        <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer </button>
                                        ";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
                                    </div>

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
        // line 116
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
        return ":types:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 116,  163 => 86,  158 => 84,  150 => 79,  136 => 68,  132 => 67,  127 => 65,  122 => 63,  118 => 62,  114 => 61,  109 => 59,  105 => 58,  101 => 57,  94 => 53,  44 => 5,  38 => 4,  15 => 2,);
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
                                    <h2>Modifier type de bien </h2>

                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"x_content\">





                                 {{ form_start(edit_form) }}
                                    <div class=\"row\">
                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            {{ form_label(edit_form.nom, \"Nom\") }}
                                            {{ form_widget(edit_form.nom,{'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(edit_form.nom) }}

                                            {{ form_label(edit_form.texte, \"Description\") }}
                                            {{ form_widget(edit_form.texte,{'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(edit_form.texte) }}

                                            <ul class=\"tags\"  data-prototype=\"{{ form_widget(edit_form.photo.vars.prototype)|e('html_attr') }}\">

                                                {{ form_widget(edit_form.photo) }}
                                                {{ form_errors(edit_form.photo) }}

                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>

                                        </div>



                                    </div>

                                    {{ form_end(edit_form) }}



                                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                        {{ form_start(delete_form) }}
                                        <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer </button>
                                        {{ form_end(delete_form) }}
                                    </div>

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


", ":types:edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/types/edit.html.twig");
    }
}
