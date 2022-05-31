<?php

/* produits/edit.html.twig */
class __TwigTemplate_92e1c343c39f3505ffb0b585a5faa81b174c43b7c8f4a23867620cd7e9a71599 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "produits/edit.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produits/edit.html.twig"));

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
                    <h3>Modifier le produit</h3>
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
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->source); })()), 'form_start');
        echo "

                    <div class=\"x_panel\">
                        <div class=\"x_title\">

                            <div class=\"row\">

                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Lieu </label> <span class=\"requis\" style=\"color:#ff3224;\">*</span>

                                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 48, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 49, $this->source); })()), "categories", array()), 'errors');
        echo "
                                </div>



                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Offre exclusive </label>

                                    ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 58, $this->source); })()), "exclusive", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 59, $this->source); })()), "exclusive", array()), 'errors');
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
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 68, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 69, $this->source); })()), "titre", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous-titre   </label>
                                    ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 73, $this->source); })()), "text1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 74, $this->source); })()), "text1", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Description  </label>
                                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 78, $this->source); })()), "text2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 79, $this->source); })()), "text2", array()), 'errors');
        echo "
                                </div>

                            </div>





                            <div class=\"row\">
                                    <br>
                                    <div class=\"tags\"  data-prototype=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 90, $this->source); })()), "image1", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">



                                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 94, $this->source); })()), "image1", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
            // line 95
            echo "                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            <div class=\"forms\">
                                                <img width=\"300\"  src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 98, $this->source); })()), "image1", array()), $context["key"], array(), "array"), "path", array()))), "html", null, true);
            echo "\" />
                                                ";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["tag"], 'row');
            echo "
                                            </div>
                                            <div class=\"remove\"></div>
                                            <br>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "

                                    </div>




                            </div>

                            <br><br>
                            <div class=\"del\"></div>

                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">




                                <br><br>
                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\"> ou Annuler</a>
                            </div>


                        </div>
                        ";
        // line 129
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 129, $this->source); })()), 'form_end');
        echo "



                        <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                            ";
        // line 134
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 134, $this->source); })()), 'form_start');
        echo "
                            <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer le produit </button>
                            ";
        // line 136
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 136, $this->source); })()), 'form_end');
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
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>


    <script>
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$('<br><a href=\"#\" class=\"add_tag_link\"><i class=\"fa fa-plus\"></i> Ajouter une photo</a> ');
        var \$newLinkLi2 = \$('.del').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('div.tags');

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

            \$collectionHolder2.find('.forms').each(function() {
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
            var \$removeFormA2 = \$('<a class=\"suppphoto\" href=\"#\" style=\"color:#b23929;\">Supprimer cette photo</a><br>');
            \$tagFormLi2.prepend(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>
    <script>




        \$('#produits_type').change(function(){
            if(\$(this).val() == 'Location'){ // or this.value == 'volvo'

                \$('#produits_duree').show();
                \$('label.lab').show();

            }
            if(\$(this).val() == 'Vente'){ // or this.value == 'volvo'

                \$('#produits_duree').hide();
                \$('label.lab').hide();

            }
            if(\$('#produits_type').val() == 'Vente'){ // or this.value == 'volvo'
                \$('#produits_type').val() == null;
                \$('#produits_duree').hide();
                \$('label.lab').hide();

            }
        });


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produits/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 167,  240 => 136,  235 => 134,  227 => 129,  219 => 124,  198 => 105,  186 => 99,  182 => 98,  177 => 95,  173 => 94,  166 => 90,  152 => 79,  148 => 78,  141 => 74,  137 => 73,  130 => 69,  126 => 68,  114 => 59,  110 => 58,  98 => 49,  94 => 48,  80 => 37,  44 => 3,  38 => 2,  15 => 1,);
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
                    <h3>Modifier le produit</h3>
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

                            <div class=\"row\">

                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Lieu </label> <span class=\"requis\" style=\"color:#ff3224;\">*</span>

                                    {{ form_widget(edit_form.categories,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.categories) }}
                                </div>



                                <div class=\"col-md-2 col-sm-12 col-xs-12 form-group\">

                                    <label for=\"factures_lieu\">Offre exclusive </label>

                                    {{ form_widget(edit_form.exclusive,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.exclusive) }}
                                </div>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Titre   </label>
                                    {{ form_widget(edit_form.titre,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.titre) }}
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous-titre   </label>
                                    {{ form_widget(edit_form.text1,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.text1) }}
                                </div>
                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Description  </label>
                                    {{ form_widget(edit_form.text2,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(edit_form.text2) }}
                                </div>

                            </div>





                            <div class=\"row\">
                                    <br>
                                    <div class=\"tags\"  data-prototype=\"{{ form_widget(edit_form.image1.vars.prototype)|e('html_attr') }}\">



                                        {% for key, tag in edit_form.image1 %}
                                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">

                                            <div class=\"forms\">
                                                <img width=\"300\"  src=\"{{ asset('photos_produits/' ~ produit.image1[key].path)}}\" />
                                                {{ form_row(tag) }}
                                            </div>
                                            <div class=\"remove\"></div>
                                            <br>
                                        </div>
                                        {% endfor %}


                                    </div>




                            </div>

                            <br><br>
                            <div class=\"del\"></div>

                            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">




                                <br><br>
                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                <a href=\"{{ path('admin_produits_index') }}\"> ou Annuler</a>
                            </div>


                        </div>
                        {{ form_end(edit_form) }}



                        <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                            {{ form_start(delete_form) }}
                            <button type=\"submit\" class=\"btn btn-danger pull-right \">Supprimer le produit </button>
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
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$('<br><a href=\"#\" class=\"add_tag_link\"><i class=\"fa fa-plus\"></i> Ajouter une photo</a> ');
        var \$newLinkLi2 = \$('.del').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('div.tags');

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

            \$collectionHolder2.find('.forms').each(function() {
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
            var \$removeFormA2 = \$('<a class=\"suppphoto\" href=\"#\" style=\"color:#b23929;\">Supprimer cette photo</a><br>');
            \$tagFormLi2.prepend(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>
    <script>




        \$('#produits_type').change(function(){
            if(\$(this).val() == 'Location'){ // or this.value == 'volvo'

                \$('#produits_duree').show();
                \$('label.lab').show();

            }
            if(\$(this).val() == 'Vente'){ // or this.value == 'volvo'

                \$('#produits_duree').hide();
                \$('label.lab').hide();

            }
            if(\$('#produits_type').val() == 'Vente'){ // or this.value == 'volvo'
                \$('#produits_type').val() == null;
                \$('#produits_duree').hide();
                \$('label.lab').hide();

            }
        });


    </script>
{% endblock %}





", "produits/edit.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\produits\\edit.html.twig");
    }
}
