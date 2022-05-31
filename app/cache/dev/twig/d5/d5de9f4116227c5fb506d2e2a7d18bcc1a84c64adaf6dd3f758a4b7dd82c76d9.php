<?php

/* categories/index.html.twig */
class __TwigTemplate_0ba22706d7f64d1cbce70aaf7b4c203817370e1016ed73bea8ede8b5659ba693 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "categories/index.html.twig", 2);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categories/index.html.twig"));

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
        #categories_texte{
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
                                <h2>Nouvelle categorie</h2>

                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <form action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_new");
        echo "\"method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                                        ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "nom", array()), 'errors');
        echo "

                                        ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "titre", array()), 'label', array("label" => "Sous titre"));
        echo "
                                        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "titre", array()), 'errors');
        echo "


                                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "texte", array()), 'label', array("label" => "Description"));
        echo "
                                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "texte", array()), 'errors');
        echo "

                                        <ul class=\"tags\"  data-prototype=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "photo", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "photo", array()), 'widget');
        echo "
                                            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "photo", array()), 'errors');
        echo "

                                        </ul>




                                        <button type=\"submit\" class=\"btn btn-success\">Sauvegarder</button>

                                    </div>


                                </div>

                                ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
                                </form>





                            </div>



                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\" >
                            <div class=\"x_title\">


                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"x_content\">

                                <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                    <thead>
                                    <tr>
                                        <th>Categories</th>

                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 117
            echo "                                        <tr>
                                            <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", array()), "html", null, true);
            echo "</td>


                                            <td><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                    </tbody>
                                </table>





                                <!-- price element -->
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
        © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
        Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->




<script type=\"text/javascript\" src=\"";
        // line 157
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
        return "categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 157,  224 => 125,  214 => 121,  208 => 118,  205 => 117,  201 => 116,  165 => 83,  148 => 69,  144 => 68,  139 => 66,  134 => 64,  130 => 63,  126 => 62,  120 => 59,  116 => 58,  112 => 57,  107 => 55,  103 => 54,  99 => 53,  90 => 49,  44 => 5,  38 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'baseAdmin.html.twig' %}

{% block body %}
    <style>
        #categories_texte{
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
                                <h2>Nouvelle categorie</h2>

                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"x_content\">

                                <form action=\"{{ path('admin_categories_new') }}\"method=\"POST\" {{ form_start(form) }}
                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                        {{ form_label(form.nom, \"Nom\") }}
                                        {{ form_widget(form.nom,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.nom) }}

                                        {{ form_label(form.titre, \"Sous titre\") }}
                                        {{ form_widget(form.titre,{'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.titre) }}


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
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\" >
                            <div class=\"x_title\">


                                <div class=\"clearfix\"></div>
                            </div>

                            <div class=\"x_content\">

                                <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                    <thead>
                                    <tr>
                                        <th>Categories</th>

                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for category in categories %}
                                        <tr>
                                            <td>{{ category.nom }}</td>


                                            <td><a href=\"{{ path('admin_categories_edit', { 'id' : category.id }) }}\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>





                                <!-- price element -->
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
        © 2021 ‐ SADJIACERAM Tout droits réservés.<br>
        Développement web: <a href=\"https://creativdz.com\" target=\"_blank\">CREATIV</a>
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->




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


", "categories/index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\categories\\index.html.twig");
    }
}
