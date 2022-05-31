<?php

/* :partenaires:new.html.twig */
class __TwigTemplate_56cfb4f6abea730e09e91a12bd3163734fe62bee23aebd338fc12330521c5d31 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":partenaires:new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":partenaires:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
        .add_tag_link{
            padding: 8px;
            background: #00b180;
            color: white;

        }
    </style>
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Nouveau produit</h3>
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
                    <form action=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_new");
        echo "\" method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'form_start');
        echo "

                    <div class=\"x_panel\">
                        <div class=\"x_title\">

                            <div class=\"row\">


                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Categorie </label> <span class=\"requis\" style=\"color:#ff3224;\">*</span>

                                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "types", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "types", array()), 'errors');
        echo "
                                </div>

                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Offre exclusive </label>

                                    ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "exclusive", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "exclusive", array()), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Titre   </label>
                                    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "titre", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous-titre   </label>
                                    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "text1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "text1", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Description  </label>
                                    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "text2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "text2", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Texte gauche  </label>
                                    ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "text3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "text3", array()), 'errors');
        echo "
                                </div>
                            </div>







                            <div class=\"row\">
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <ul class=\"tags\"  data-prototype=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->source); })()), "image1", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                        ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "image1", array()), 'widget');
        echo "
                                        ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "image1", array()), 'errors');
        echo "

                                    </ul>

                                </div>

                            </div>


                            <br><br>
                            <div class=\"del\"></div>
                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">


                                <br><br>

                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_partenaires_index");
        echo "\"> ou Annuler</a>
                            </div>
                            <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">


                            </div>

                        </div>
                        ";
        // line 123
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        echo "






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
            © 2020 ‐ NDWI Tout droits réservés.

        </div>
        <div class=\"clearfix\"></div>
    </footer>


    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>



    <script>
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$(' <br><a href=\"#\" class=\"add_tag_link\"><i class=\"fa fa-plus\"></i> Ajouter une photo</a>');
        var \$newLinkLi2 = \$('<div></div>').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('ul.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$('.del').append(\$newLinkLi2);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

            \$addTagLink2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm2(\$collectionHolder2, \$newLinkLi2);
            });

            \$collectionHolder2.find('ul.tags').each(function() {
                addTagFormDeleteLink2(\$(this));
            });

        });

        function addTagForm2(\$collectionHolder2, \$newLinkLi2) {
            // Get the data-prototype explained earlier
            var prototype2 = \$collectionHolder2.data('prototype');

            // get the new index
            var index2 = \$collectionHolder2.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm2 = prototype2.replace(/__name__/g, index2);

            // increase the index with one for the next item
            \$collectionHolder2.data('index', index2 + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi2 = \$('<div></div>').append(newForm2);
            \$newLinkLi2.before(\$newFormLi2);

            addTagFormDeleteLink2(\$newFormLi2);
        }

        function addTagFormDeleteLink2(\$tagFormLi2) {
            var \$removeFormA2 = \$('<a href=\"#\" style=\"color: red;\">supprimer</a>');
            \$tagFormLi2.append(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>

    <script>



        \$('#produits_duree,.duree').hide();
        \$('label.lab').hide();

        \$('#produits_type').change(function(){
            if(\$(this).val() == 'Location'){ // or this.value == 'volvo'

                \$('#produits_duree,.duree').show();
                \$('label.lab').show();

            }
            if(\$(this).val() == 'Vente'){ // or this.value == 'volvo'

                \$('#produits_duree,.duree').hide();
                \$('label.lab').hide();

            }
            if(\$('#produits_type').val() == 'Vente'){ // or this.value == 'volvo'
                \$('#produits_type').val() == null;
                \$('#produits_duree,.duree').hide();
                \$('label.lab').hide();

            }
        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":partenaires:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 156,  219 => 123,  208 => 115,  188 => 98,  184 => 97,  179 => 95,  164 => 83,  160 => 82,  153 => 78,  149 => 77,  142 => 73,  138 => 72,  131 => 68,  127 => 67,  115 => 58,  111 => 57,  101 => 50,  97 => 49,  80 => 37,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <style>
        .add_tag_link{
            padding: 8px;
            background: #00b180;
            color: white;

        }
    </style>
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Nouveau produit</h3>
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
                    <form action=\"{{ path('admin_partenaires_new') }}\" method=\"POST\" {{ form_start(form) }}

                    <div class=\"x_panel\">
                        <div class=\"x_title\">

                            <div class=\"row\">


                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Categorie </label> <span class=\"requis\" style=\"color:#ff3224;\">*</span>

                                    {{ form_widget(form.types,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.types) }}
                                </div>

                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Offre exclusive </label>

                                    {{ form_widget(form.exclusive,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.exclusive) }}
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Titre   </label>
                                    {{ form_widget(form.titre,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.titre) }}
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous-titre   </label>
                                    {{ form_widget(form.text1,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.text1) }}
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Description  </label>
                                    {{ form_widget(form.text2,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.text2) }}
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Texte gauche  </label>
                                    {{ form_widget(form.text3,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.text3) }}
                                </div>
                            </div>







                            <div class=\"row\">
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <ul class=\"tags\"  data-prototype=\"{{ form_widget(form.image1.vars.prototype)|e('html_attr') }}\">

                                        {{ form_widget(form.image1) }}
                                        {{ form_errors(form.image1) }}

                                    </ul>

                                </div>

                            </div>


                            <br><br>
                            <div class=\"del\"></div>
                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">


                                <br><br>

                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                <a href=\"{{ path('admin_partenaires_index') }}\"> ou Annuler</a>
                            </div>
                            <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">


                            </div>

                        </div>
                        {{ form_end(form) }}






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
            © 2020 ‐ NDWI Tout droits réservés.

        </div>
        <div class=\"clearfix\"></div>
    </footer>


    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>



    <script>
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$(' <br><a href=\"#\" class=\"add_tag_link\"><i class=\"fa fa-plus\"></i> Ajouter une photo</a>');
        var \$newLinkLi2 = \$('<div></div>').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('ul.tags');

            // add the \"add a tag\" anchor and li to the tags ul
            \$('.del').append(\$newLinkLi2);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

            \$addTagLink2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm2(\$collectionHolder2, \$newLinkLi2);
            });

            \$collectionHolder2.find('ul.tags').each(function() {
                addTagFormDeleteLink2(\$(this));
            });

        });

        function addTagForm2(\$collectionHolder2, \$newLinkLi2) {
            // Get the data-prototype explained earlier
            var prototype2 = \$collectionHolder2.data('prototype');

            // get the new index
            var index2 = \$collectionHolder2.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm2 = prototype2.replace(/__name__/g, index2);

            // increase the index with one for the next item
            \$collectionHolder2.data('index', index2 + 1);

            // Display the form in the page in an li, before the \"Add a tag\" link li
            var \$newFormLi2 = \$('<div></div>').append(newForm2);
            \$newLinkLi2.before(\$newFormLi2);

            addTagFormDeleteLink2(\$newFormLi2);
        }

        function addTagFormDeleteLink2(\$tagFormLi2) {
            var \$removeFormA2 = \$('<a href=\"#\" style=\"color: red;\">supprimer</a>');
            \$tagFormLi2.append(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>

    <script>



        \$('#produits_duree,.duree').hide();
        \$('label.lab').hide();

        \$('#produits_type').change(function(){
            if(\$(this).val() == 'Location'){ // or this.value == 'volvo'

                \$('#produits_duree,.duree').show();
                \$('label.lab').show();

            }
            if(\$(this).val() == 'Vente'){ // or this.value == 'volvo'

                \$('#produits_duree,.duree').hide();
                \$('label.lab').hide();

            }
            if(\$('#produits_type').val() == 'Vente'){ // or this.value == 'volvo'
                \$('#produits_type').val() == null;
                \$('#produits_duree,.duree').hide();
                \$('label.lab').hide();

            }
        });


    </script>
{% endblock %}





", ":partenaires:new.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/partenaires/new.html.twig");
    }
}
