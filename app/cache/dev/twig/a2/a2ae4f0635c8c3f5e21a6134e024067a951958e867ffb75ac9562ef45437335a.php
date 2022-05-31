<?php

/* :categories:edit.html.twig */
class __TwigTemplate_bee673caec8746d6d8d3db3b572c0a5a39b3f043173ace078efed30e5811ee8c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":categories:edit.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categories:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        #categories_texte{
            width: 642px;
            height: 144px;
        }
    </style>
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Modifier Catégorie</h3>
                </div>


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
                    ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

                    <div class=\"x_panel\">
                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 47, $this->source); })()), "nom", array()), 'label', array("label" => "Nom "));
        echo "
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 48, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 49, $this->source); })()), "nom", array()), 'errors');
        echo "


                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 52, $this->source); })()), "titre", array()), 'label', array("label" => "Sous titre"));
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 54, $this->source); })()), "titre", array()), 'errors');
        echo "



                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 58, $this->source); })()), "texte", array()), 'label', array("label" => "Description"));
        echo "
                                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 59, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 60, $this->source); })()), "texte", array()), 'errors');
        echo "

                                <ul class=\"tags\"  data-prototype=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "photo", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                    ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 64, $this->source); })()), "photo", array()), 'widget');
        echo "
                                    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 65, $this->source); })()), "photo", array()), 'errors');
        echo "

                                </ul>


                                <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>
                                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\" class=\"btn btn-default\">Annuler</a>
                            </div>


                        </div>
                        ";
        // line 76
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "



                        <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                            ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 81, $this->source); })()), 'form_start');
        echo "
                            <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer </button>
                            ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
                        </div>



                    </div>



                </div>
                </form>
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
            © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
            Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
        </div>
        <div class=\"clearfix\"></div>
    </footer>


    <script type=\"text/javascript\" src=\"";
        // line 114
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":categories:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 114,  173 => 83,  168 => 81,  160 => 76,  152 => 71,  143 => 65,  139 => 64,  134 => 62,  129 => 60,  125 => 59,  121 => 58,  114 => 54,  110 => 53,  106 => 52,  100 => 49,  96 => 48,  92 => 47,  78 => 36,  44 => 4,  38 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <style>
        #categories_texte{
            width: 642px;
            height: 144px;
        }
    </style>
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Modifier Catégorie</h3>
                </div>


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
                    {{ form_start(edit_form) }}

                    <div class=\"x_panel\">
                        <div class=\"x_title\">


                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">

                                {{ form_label(edit_form.nom, \"Nom \") }}
                                {{ form_widget(edit_form.nom,{'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(edit_form.nom) }}


                                {{ form_label(edit_form.titre, \"Sous titre\") }}
                                {{ form_widget(edit_form.titre,{'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(edit_form.titre) }}



                                {{ form_label(edit_form.texte, \"Description\") }}
                                {{ form_widget(edit_form.texte,{'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(edit_form.texte) }}

                                <ul class=\"tags\"  data-prototype=\"{{ form_widget(edit_form.photo.vars.prototype)|e('html_attr') }}\">

                                    {{ form_widget(edit_form.photo) }}
                                    {{ form_errors(edit_form.photo) }}

                                </ul>


                                <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>
                                <a href=\"{{ path('admin_categories_index')}}\" class=\"btn btn-default\">Annuler</a>
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
                </form>
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
            © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
            Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
        </div>
        <div class=\"clearfix\"></div>
    </footer>


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

{% endblock %}























", ":categories:edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/categories/edit.html.twig");
    }
}
