<?php

/* :parents:index.html.twig */
class __TwigTemplate_3f5b27c9312f0ce662e1a8ac82675ee1b2a571d285df2bfddc7079163bf679b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":parents:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":parents:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<!-- page content -->
<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Catégories</h3>
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
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "

                <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <div class=\"x_panel\">

                    <div class=\"x_content\">

                        <form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parents_new");
        echo "\"method=\"POST\" ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">

                                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "nom", array()), 'label', array("label" => "nom  "));
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "nom", array()), 'errors');
        echo "
                                <ul class=\"tags\"  data-prototype=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "image", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">

                                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "image", array()), 'widget');
        echo "
                                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "image", array()), 'errors');
        echo "

                                </ul>

                                <button type=\"submit\" class=\"btn btn-success\">Créer</button>

                            </div>


                        </div>

                        ";
        // line 66
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
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
                                <th>Parent</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parents"]) || array_key_exists("parents", $context) ? $context["parents"] : (function () { throw new Twig_Error_Runtime('Variable "parents" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
            // line 99
            echo "                                <tr>
                                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parent"], "nom", array()), "html", null, true);
            echo "</td>

                                    <td><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parents_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["parent"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </tbody>
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
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        © 2020 ‐ NDWI Tout droits réservés.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>



    <script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
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

    <script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>



    <link rel='stylesheet' type='text/css' href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/css/fileinput.min.css"), "html", null, true);
        echo "\">

    <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
         This must be loaded before fileinput.min.js -->
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
         This must be loaded before fileinput.min.js -->
    <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/sortable.min.js"), "html", null, true);
        echo "\"></script>

    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
         This must be loaded before fileinput.min.js -->

    <script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/plugins/purify.min.js"), "html", null, true);
        echo "\"></script>
    <!-- the main fileinput plugin file -->

    <script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/fileinput.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/js/locales/fr.js"), "html", null, true);
        echo "\"></script>

    <!-- optionally if you need a theme like font awesome theme you can include
        it as mentioned below -->
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("karik/themes/fa/theme.js"), "html", null, true);
        echo "\"></script>
    <!-- optionally if you need translation for your language then include
        locale file as mentioned below -->






    <script>
        \$(document).ready(function() {


// with plugin options
            \$( \"input:file\" ).fileinput({'showUpload':false,'language':'fr', 'previewFileType':'any'});

            \$('#produits_image1_name').val('image1')
            \$('#produits_image2_name').val('image2')
            \$('#produits_image3_name').val('image3')
            \$('#produits_image4_name').val('image4')

            var handleDataTableButtons = function() {
                if (\$(\"#datatable-buttons\").length) {
                    \$(\"#datatable-buttons\").DataTable({
                        dom: \"Bfrtip\",
                        buttons: [
                            {
                                extend: \"copy\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"csv\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"excel\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"pdfHtml5\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"print\",
                                className: \"btn-sm\"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                \"use strict\";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            \$('#datatable').dataTable();
            \$('#datatable-keytable').DataTable({
                keys: true
            });

            \$('#datatable-responsive').DataTable();

            \$('#datatable-scroller').DataTable({
                ajax: \"js/datatables/json/scroller-demo.json\",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            TableManageButtons.init();
        });
    </script>
    <!-- bootstrap-daterangepicker -->
    <script>
        \$(document).ready(function() {
            \$('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_4\"
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
        \$(document).ready(function() {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
                \$.each(fonts, function(idx, fontName) {
                    fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
                });
                \$('a[title]').tooltip({
                    container: 'body'
                });
                \$('.dropdown-menu input').click(function() {
                    return false;
                })
                    .change(function() {
                        \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        \$(this).change();
                    });

                \$('[data-role=magic-overlay]').each(function() {
                    var overlay = \$(this),
                        target = \$(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });

                if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
                    var editorOffset = \$('#editor').offset();

                    \$('.voiceBtn').css('position', 'absolute').offset({
                        top: editorOffset.top,
                        left: editorOffset.left + \$('#editor').innerWidth() - 35
                    });
                } else {
                    \$('.voiceBtn').hide();
                }
            }

            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') {
                    msg = \"Unsupported format \" + detail;
                } else {
                    console.log(\"error uploading file\", reason, detail);
                }
                \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            }

            initToolbarBootstrapBindings();

            \$('#editor').wysiwyg({
                fileUploadError: showErrorAlert
            });

            window.prettyPrint;
            prettyPrint();
        });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
        \$(document).ready(function() {
            \$(\".select2_single\").select2({
                placeholder: \"Select a state\",
                allowClear: true
            });
            \$(\".select2_group\").select2({});
            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 4,
                placeholder: \"With Max Selection limit 4\",
                allowClear: true
            });
        });
    </script>
    <!-- /Select2 -->

    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert(\"Added a tag: \" + tag);
        }

        function onRemoveTag(tag) {
            alert(\"Removed a tag: \" + tag);
        }

        function onChangeTag(input, tag) {
            alert(\"Changed a tag: \" + tag);
        }

        \$(document).ready(function() {
            \$('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Parsley -->
    <script>
        \$(document).ready(function() {
            \$.listen('parsley:field:validate', function() {
                validateFront();
            });
            \$('#demo-form .btn').on('click', function() {
                \$('#demo-form').parsley().validate();
                validateFront();
            });
            var validateFront = function() {
                if (true === \$('#demo-form').parsley().isValid()) {
                    \$('.bs-callout-info').removeClass('hidden');
                    \$('.bs-callout-warning').addClass('hidden');
                } else {
                    \$('.bs-callout-info').addClass('hidden');
                    \$('.bs-callout-warning').removeClass('hidden');
                }
            };
        });

        \$(document).ready(function() {
            \$.listen('parsley:field:validate', function() {
                validateFront();
            });
            \$('#demo-form2 .btn').on('click', function() {
                \$('#demo-form2').parsley().validate();
                validateFront();
            });
            var validateFront = function() {
                if (true === \$('#demo-form2').parsley().isValid()) {
                    \$('.bs-callout-info').removeClass('hidden');
                    \$('.bs-callout-warning').addClass('hidden');
                } else {
                    \$('.bs-callout-info').addClass('hidden');
                    \$('.bs-callout-warning').removeClass('hidden');
                }
            };
        });
        try {
            hljs.initHighlightingOnLoad();
        } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
        \$(document).ready(function() {
            autosize(\$('.resizable_textarea'));
        });
    </script>
    <!-- /Autosize -->

    <!-- jQuery autocomplete -->
    <script>
        \$(document).ready(function() {
            var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

            var countriesArray = \$.map(countries, function(value, key) {
                return {
                    value: value,
                    data: key
                };
            });

            // initialize autocomplete with custom appendTo
            \$('#autocomplete-custom-append').autocomplete({
                lookup: countriesArray
            });
        });
    </script>
    <!-- /jQuery autocomplete -->

    <!-- Starrr -->
    <script>
        \$(document).ready(function() {
            \$(\".stars\").starrr();

            \$('.stars-existing').starrr({
                rating: 4
            });

            \$('.stars').on('starrr:change', function (e, value) {
                \$('.stars-count').html(value);
            });

            \$('.stars-existing').on('starrr:change', function (e, value) {
                \$('.stars-count-existing').html(value);
            });
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":parents:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 248,  459 => 244,  455 => 243,  449 => 240,  441 => 235,  435 => 232,  428 => 228,  421 => 224,  417 => 223,  413 => 222,  409 => 221,  405 => 220,  401 => 219,  397 => 218,  393 => 217,  389 => 216,  385 => 215,  381 => 214,  377 => 213,  373 => 212,  369 => 211,  365 => 210,  361 => 209,  304 => 155,  300 => 154,  296 => 153,  292 => 152,  288 => 151,  284 => 150,  280 => 149,  276 => 148,  272 => 147,  268 => 146,  264 => 145,  260 => 144,  256 => 143,  252 => 142,  248 => 141,  244 => 140,  240 => 139,  236 => 138,  201 => 105,  192 => 102,  187 => 100,  184 => 99,  180 => 98,  145 => 66,  131 => 55,  127 => 54,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  101 => 45,  92 => 38,  82 => 34,  75 => 29,  71 => 28,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}

<!-- page content -->
<div class=\"right_col\" role=\"main\">
    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Catégories</h3>
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
            {% for flash_message in app.session.flashBag.get('notice') %}


                <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                    {{ flash_message }}
                </div>

            {% endfor %}

            <div class=\"col-md-12 col-sm-12 col-xs-12\">

                <div class=\"x_panel\">

                    <div class=\"x_content\">

                        <form action=\"{{ path('admin_parents_new') }}\"method=\"POST\" {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 col-sm-12 col-xs-12 form-group\">

                                {{ form_label(form.nom, \"nom  \") }}
                                {{ form_widget(form.nom,{'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(form.nom) }}
                                <ul class=\"tags\"  data-prototype=\"{{ form_widget(form.image.vars.prototype)|e('html_attr') }}\">

                                    {{ form_widget(form.image) }}
                                    {{ form_errors(form.image) }}

                                </ul>

                                <button type=\"submit\" class=\"btn btn-success\">Créer</button>

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
                                <th>Parent</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for parent in parents %}
                                <tr>
                                    <td>{{ parent.nom }}</td>

                                    <td><a href=\"{{ path('admin_parents_edit', { 'id' : parent.id }) }}\"><i class=\"fa fa-edit\" style=\"color: #169f85;\"></i> Modifier</a></td>
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
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class=\"pull-right\">
        © 2020 ‐ NDWI Tout droits réservés.
    </div>
    <div class=\"clearfix\"></div>
</footer>
<!-- /footer content -->
</div>
</div>



    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/iCheck/icheck.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/moment/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/datepicker/daterangepicker.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery.hotkeys/jquery.hotkeys.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/google-code-prettify/src/prettify.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/switchery/dist/switchery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/select2/dist/js/select2.full.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/parsleyjs/dist/parsley.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/autosize/dist/autosize.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/starrr/dist/starrr.js') }}\"></script>


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

    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net/js/jquery.dataTables.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.flash.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.html5.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-buttons/js/buttons.print.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/custom.min.js') }}\"></script>



    <link rel='stylesheet' type='text/css' href=\"{{ asset('karik/css/fileinput.min.css') }}\">

    <!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
         This must be loaded before fileinput.min.js -->
    <script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/canvas-to-blob.min.js') }}\"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
         This must be loaded before fileinput.min.js -->
    <script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/sortable.min.js') }}\"></script>

    <!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
         This must be loaded before fileinput.min.js -->

    <script type=\"text/javascript\" src=\"{{ asset('karik/js/plugins/purify.min.js') }}\"></script>
    <!-- the main fileinput plugin file -->

    <script type=\"text/javascript\" src=\"{{ asset('karik/js/fileinput.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('karik/js/locales/fr.js') }}\"></script>

    <!-- optionally if you need a theme like font awesome theme you can include
        it as mentioned below -->
    <script type=\"text/javascript\" src=\"{{ asset('karik/themes/fa/theme.js') }}\"></script>
    <!-- optionally if you need translation for your language then include
        locale file as mentioned below -->






    <script>
        \$(document).ready(function() {


// with plugin options
            \$( \"input:file\" ).fileinput({'showUpload':false,'language':'fr', 'previewFileType':'any'});

            \$('#produits_image1_name').val('image1')
            \$('#produits_image2_name').val('image2')
            \$('#produits_image3_name').val('image3')
            \$('#produits_image4_name').val('image4')

            var handleDataTableButtons = function() {
                if (\$(\"#datatable-buttons\").length) {
                    \$(\"#datatable-buttons\").DataTable({
                        dom: \"Bfrtip\",
                        buttons: [
                            {
                                extend: \"copy\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"csv\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"excel\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"pdfHtml5\",
                                className: \"btn-sm\"
                            },
                            {
                                extend: \"print\",
                                className: \"btn-sm\"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                \"use strict\";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            \$('#datatable').dataTable();
            \$('#datatable-keytable').DataTable({
                keys: true
            });

            \$('#datatable-responsive').DataTable();

            \$('#datatable-scroller').DataTable({
                ajax: \"js/datatables/json/scroller-demo.json\",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });

            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            TableManageButtons.init();
        });
    </script>
    <!-- bootstrap-daterangepicker -->
    <script>
        \$(document).ready(function() {
            \$('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_4\"
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- bootstrap-wysiwyg -->
    <script>
        \$(document).ready(function() {
            function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'
                    ],
                    fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
                \$.each(fonts, function(idx, fontName) {
                    fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
                });
                \$('a[title]').tooltip({
                    container: 'body'
                });
                \$('.dropdown-menu input').click(function() {
                    return false;
                })
                    .change(function() {
                        \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function() {
                        this.value = '';
                        \$(this).change();
                    });

                \$('[data-role=magic-overlay]').each(function() {
                    var overlay = \$(this),
                        target = \$(overlay.data('target'));
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });

                if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
                    var editorOffset = \$('#editor').offset();

                    \$('.voiceBtn').css('position', 'absolute').offset({
                        top: editorOffset.top,
                        left: editorOffset.left + \$('#editor').innerWidth() - 35
                    });
                } else {
                    \$('.voiceBtn').hide();
                }
            }

            function showErrorAlert(reason, detail) {
                var msg = '';
                if (reason === 'unsupported-file-type') {
                    msg = \"Unsupported format \" + detail;
                } else {
                    console.log(\"error uploading file\", reason, detail);
                }
                \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
            }

            initToolbarBootstrapBindings();

            \$('#editor').wysiwyg({
                fileUploadError: showErrorAlert
            });

            window.prettyPrint;
            prettyPrint();
        });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
        \$(document).ready(function() {
            \$(\".select2_single\").select2({
                placeholder: \"Select a state\",
                allowClear: true
            });
            \$(\".select2_group\").select2({});
            \$(\".select2_multiple\").select2({
                maximumSelectionLength: 4,
                placeholder: \"With Max Selection limit 4\",
                allowClear: true
            });
        });
    </script>
    <!-- /Select2 -->

    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert(\"Added a tag: \" + tag);
        }

        function onRemoveTag(tag) {
            alert(\"Removed a tag: \" + tag);
        }

        function onChangeTag(input, tag) {
            alert(\"Changed a tag: \" + tag);
        }

        \$(document).ready(function() {
            \$('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Parsley -->
    <script>
        \$(document).ready(function() {
            \$.listen('parsley:field:validate', function() {
                validateFront();
            });
            \$('#demo-form .btn').on('click', function() {
                \$('#demo-form').parsley().validate();
                validateFront();
            });
            var validateFront = function() {
                if (true === \$('#demo-form').parsley().isValid()) {
                    \$('.bs-callout-info').removeClass('hidden');
                    \$('.bs-callout-warning').addClass('hidden');
                } else {
                    \$('.bs-callout-info').addClass('hidden');
                    \$('.bs-callout-warning').removeClass('hidden');
                }
            };
        });

        \$(document).ready(function() {
            \$.listen('parsley:field:validate', function() {
                validateFront();
            });
            \$('#demo-form2 .btn').on('click', function() {
                \$('#demo-form2').parsley().validate();
                validateFront();
            });
            var validateFront = function() {
                if (true === \$('#demo-form2').parsley().isValid()) {
                    \$('.bs-callout-info').removeClass('hidden');
                    \$('.bs-callout-warning').addClass('hidden');
                } else {
                    \$('.bs-callout-info').addClass('hidden');
                    \$('.bs-callout-warning').removeClass('hidden');
                }
            };
        });
        try {
            hljs.initHighlightingOnLoad();
        } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
        \$(document).ready(function() {
            autosize(\$('.resizable_textarea'));
        });
    </script>
    <!-- /Autosize -->

    <!-- jQuery autocomplete -->
    <script>
        \$(document).ready(function() {
            var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

            var countriesArray = \$.map(countries, function(value, key) {
                return {
                    value: value,
                    data: key
                };
            });

            // initialize autocomplete with custom appendTo
            \$('#autocomplete-custom-append').autocomplete({
                lookup: countriesArray
            });
        });
    </script>
    <!-- /jQuery autocomplete -->

    <!-- Starrr -->
    <script>
        \$(document).ready(function() {
            \$(\".stars\").starrr();

            \$('.stars-existing').starrr({
                rating: 4
            });

            \$('.stars').on('starrr:change', function (e, value) {
                \$('.stars-count').html(value);
            });

            \$('.stars-existing').on('starrr:change', function (e, value) {
                \$('.stars-count-existing').html(value);
            });
        });
    </script>


{% endblock %}












", ":parents:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/parents/index.html.twig");
    }
}
