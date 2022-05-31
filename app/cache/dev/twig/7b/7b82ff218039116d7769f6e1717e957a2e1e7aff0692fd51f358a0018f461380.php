<?php

/* neufs/new.html.twig */
class __TwigTemplate_96cb0f8148b3fc43cbf22ff5609ff070c71d796f7c7ecd702e51d06a9d976976 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "neufs/new.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "neufs/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_neufs_new");
        echo "\" method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Nouveau Projet</h3>
                </div>

            </div>

            <div class=\"clearfix\"></div>

            <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"x_panel\">

                        <div class=\"x_content\">
                            <div class=\"row\">

                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Titre   </label>
                                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "titre", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">date</label>
                                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "disponible", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "disponible", array()), 'errors');
        echo "
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous titre   </label>
                                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "soustitre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "soustitre", array()), 'errors');
        echo "
                                </div>

                            </div>


                        </div>







                    </div>



                </div>

            </div>

        </div>



        <div class=\"\">

            <div class=\"clearfix\"></div>
            <div class=\"x_panel\">

                <div class=\"x_content\">

                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        <label for=\"factures_type\" class=\"required\">Description  </label>
                        ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "text2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "text2", array()), 'errors');
        echo "
                    </div>
                </div>







            </div>
            <div class=\"\">

                <div class=\"clearfix\"></div>
                <div class=\"x_panel\">
                    <div class=\"x_title\">

                        <h2>Photos</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                            <ul class=\"tags\"  data-prototype=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "image1", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), "image1", array()), 'widget');
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->source); })()), "image1", array()), 'errors');
        echo "

                            </ul>

                        </div>

                    </div>







                </div>


            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">



                <br><br>

                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\"> ou Annuler</a>
            </div>

        </div>



        </div>


        ";
        // line 135
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        echo "

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
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <script
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAF2iP6B2-TwzV5QFeJJpnWlNSbVF__BeA&callback=initMap\"   async defer>
    </script>

    <script>
        function initMap() {
            var latlng = new google.maps.LatLng(35.705447,-0.6357861000000185);
            var map = new google.maps.Map(document.getElementById(\"gmap\"),{
                    zoom:10,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

            });
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: \"Bougez ce curseur\",
                draggable: true
            });
            var geocoder = new google.maps.Geocoder();

            google.maps.event.addListener(marker,'drag',function () {
                setPosition(marker);

            });

            \$('#neufs_name').keypress(function (e) {
                if(e.keyCode == 13){

                    var request = {
                        address: \$(this).val()

                    }

                    geocoder.geocode(request,function (results,status) {

                        if(status == google.maps.GeocoderStatus.OK){

                            var pos = results[0].geometry.location;
                            map.setCenter(pos);
                            marker.setPosition(pos);
                            setPosition(marker);
                        }
                    });
                    return false;


                }

            });
        };

        function setPosition(marker) {
          var pos =  marker.getPosition();
          \$('#neufs_lat').val(pos.lat());
            \$('#neufs_lng').val(pos.lng());
        }

    </script>

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
    <script>
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter photo</a>');
        var \$newLinkLi2 = \$('<div></div>').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('div.tags2');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder2.append(\$newLinkLi2);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

            \$addTagLink2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm2(\$collectionHolder2, \$newLinkLi2);
            });

            \$collectionHolder2.find('.tags2').each(function() {
                addTagFormDeleteLink2(\$(this));
            });

        });

        function addTagForm2(\$collectionHolder2, \$newLinkLi) {
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
            var \$removeFormA2 = \$('<a href=\"#\">delete this tag</a>');
            \$tagFormLi2.append(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "neufs/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 152,  219 => 135,  206 => 125,  178 => 100,  174 => 99,  169 => 97,  144 => 75,  140 => 74,  102 => 39,  98 => 38,  91 => 34,  87 => 33,  80 => 29,  76 => 28,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <form action=\"{{ path('admin_neufs_new') }}\" method=\"POST\" {{ form_start(form) }}

        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Nouveau Projet</h3>
                </div>

            </div>

            <div class=\"clearfix\"></div>

            <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">

                    <div class=\"x_panel\">

                        <div class=\"x_content\">
                            <div class=\"row\">

                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Titre   </label>
                                    {{ form_widget(form.titre,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.titre) }}
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">date</label>
                                    {{ form_widget(form.disponible,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.disponible) }}
                                </div>
                                <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                                    <label for=\"factures_type\" class=\"required\">Sous titre   </label>
                                    {{ form_widget(form.soustitre,{'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.soustitre) }}
                                </div>

                            </div>


                        </div>







                    </div>



                </div>

            </div>

        </div>



        <div class=\"\">

            <div class=\"clearfix\"></div>
            <div class=\"x_panel\">

                <div class=\"x_content\">

                    <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                        <label for=\"factures_type\" class=\"required\">Description  </label>
                        {{ form_widget(form.text2,{'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.text2) }}
                    </div>
                </div>







            </div>
            <div class=\"\">

                <div class=\"clearfix\"></div>
                <div class=\"x_panel\">
                    <div class=\"x_title\">

                        <h2>Photos</h2>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"col-md-4 col-sm-12 col-xs-12 form-group\">
                            <ul class=\"tags\"  data-prototype=\"{{ form_widget(form.image1.vars.prototype)|e('html_attr') }}\">

                                {{ form_widget(form.image1) }}
                                {{ form_errors(form.image1) }}

                            </ul>

                        </div>

                    </div>







                </div>


            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 form-group\">



                <br><br>

                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                <a href=\"{{ path('admin_produits_index') }}\"> ou Annuler</a>
            </div>

        </div>



        </div>


        {{ form_end(form) }}

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

    <script
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAF2iP6B2-TwzV5QFeJJpnWlNSbVF__BeA&callback=initMap\"   async defer>
    </script>

    <script>
        function initMap() {
            var latlng = new google.maps.LatLng(35.705447,-0.6357861000000185);
            var map = new google.maps.Map(document.getElementById(\"gmap\"),{
                    zoom:10,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP

            });
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: \"Bougez ce curseur\",
                draggable: true
            });
            var geocoder = new google.maps.Geocoder();

            google.maps.event.addListener(marker,'drag',function () {
                setPosition(marker);

            });

            \$('#neufs_name').keypress(function (e) {
                if(e.keyCode == 13){

                    var request = {
                        address: \$(this).val()

                    }

                    geocoder.geocode(request,function (results,status) {

                        if(status == google.maps.GeocoderStatus.OK){

                            var pos = results[0].geometry.location;
                            map.setCenter(pos);
                            marker.setPosition(pos);
                            setPosition(marker);
                        }
                    });
                    return false;


                }

            });
        };

        function setPosition(marker) {
          var pos =  marker.getPosition();
          \$('#neufs_lat').val(pos.lat());
            \$('#neufs_lng').val(pos.lng());
        }

    </script>

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
    <script>
        var \$collectionHolder2;

        // setup an \"add a tag\" link
        var \$addTagLink2 = \$('<a href=\"#\" class=\"add_tag_link\">Ajouter photo</a>');
        var \$newLinkLi2 = \$('<div></div>').append(\$addTagLink2);

        jQuery(document).ready(function() {
            // Get the ul that holds the collection of tags
            \$collectionHolder2 = \$('div.tags2');

            // add the \"add a tag\" anchor and li to the tags ul
            \$collectionHolder2.append(\$newLinkLi2);

            // count the current form inputs we have (e.g. 2), use that as the new
            // index when inserting a new item (e.g. 2)
            \$collectionHolder2.data('index', \$collectionHolder2.find(':input').length);

            \$addTagLink2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // add a new tag form (see next code block)
                addTagForm2(\$collectionHolder2, \$newLinkLi2);
            });

            \$collectionHolder2.find('.tags2').each(function() {
                addTagFormDeleteLink2(\$(this));
            });

        });

        function addTagForm2(\$collectionHolder2, \$newLinkLi) {
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
            var \$removeFormA2 = \$('<a href=\"#\">delete this tag</a>');
            \$tagFormLi2.append(\$removeFormA2);

            \$removeFormA2.on('click', function(e) {
                // prevent the link from creating a \"#\" on the URL
                e.preventDefault();

                // remove the li for the tag form
                \$tagFormLi2.remove();
            });
        }


    </script>
{% endblock %}





", "neufs/new.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\neufs\\new.html.twig");
    }
}
