<?php

/* :bannieres:index.html.twig */
class __TwigTemplate_f3c41fcc2beeb6a73bbf8163e11bd6f2d827631c2e0da76ca57e046007796193 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", ":bannieres:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":bannieres:index.html.twig"));

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
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"title_left\">
                    <h3>Bannières</h3>
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
                    <div class=\"x_panel\" >





                        <div class=\"x_title\">
                            <h4><a class=\"data btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#form\" data-whatever=\"@mdo\" href=\"#\" >Nouvelle bannière</a></h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">



                            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), 'form_start', array("id" => "form"));
        echo "
                            <div class=\"bd-example1\">

                                <div class=\"modal fade\" id=\"form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"description\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img style=\"width: 50%;\" class=\"logo img-responsive1\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.svg"), "html", null, true);
        echo "\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">


                                                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "titre", array()), 'label', array("label" => "Titre "));
        echo "
                                                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "titre", array()), 'errors');
        echo "

                                                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "texte", array()), 'label', array("label" => "Texte "));
        echo "
                                                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "texte", array()), 'errors');
        echo "

                                                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "file", array()), 'label', array("label" => "Image (1500x835) "));
        echo "
                                                ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "file", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), "file", array()), 'errors');
        echo "

                                            </div>
                                            <div class=\"modal-footer\">
                                                <a> <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button></a>
                                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 82
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "




                            ";
        // line 87
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 87, $this->source); })()), 'form_start', array("id" => "edit_form"));
        echo "
                            <div  class=\"bd-example2\">

                                <div class=\"modal fade\" id=\"formedit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"description2\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img style=\"width: 50%;\" class=\"logo img-responsive1\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.svg"), "html", null, true);
        echo "\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">


                                                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 103, $this->source); })()), "titre", array()), 'label', array("label" => "Titre "));
        echo "
                                                ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 104, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 105, $this->source); })()), "titre", array()), 'errors');
        echo "

                                                ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 107, $this->source); })()), "texte", array()), 'label', array("label" => "Texte "));
        echo "
                                                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 108, $this->source); })()), "texte", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 109, $this->source); })()), "texte", array()), 'errors');
        echo "

                                                ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 111, $this->source); })()), "file", array()), 'label', array("label" => "Image(1500x835) "));
        echo "
                                                ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 112, $this->source); })()), "file", array()), 'widget', array("attr" => array("class" => "form-control text")));
        echo "
                                                ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 113, $this->source); })()), "file", array()), 'errors');
        echo "


                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 126
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
                            ";
        // line 127
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 127, $this->source); })()), 'form_start', array("id" => "delete_form"));
        echo "
                            <div  class=\"bd-example2\">

                                <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img class=\"logo img-responsive1\"  src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.svg"), "html", null, true);
        echo "\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">

                                                ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 142, $this->source); })()), 'widget', array("id" => "delete_form"));
        echo "
                                                <h4 style=\"color: red;\">Êtes-vous sûr de vouloir supprimer définitivement?</h4>


                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 156
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 156, $this->source); })()), 'form_end');
        echo "

                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Texte</th>
                                    <th>image</th>
                                    <th>Date d'upload</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banns"]) || array_key_exists("banns", $context) ? $context["banns"] : (function () { throw new Twig_Error_Runtime('Variable "banns" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["banniere"]) {
            // line 171
            echo "                                    <tr>
                                        <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "titre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 173
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "texte", array()), 0, 70) . "..."), "html", null, true);
            echo "</td>
                                        <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "path", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 175
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "updateAt", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a  class=\"btn btn-info btn-xs\" href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bannieres_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["banniere"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\" style=\"color: #ffffff;\"></i> Modifier</a>
                                            <a  data-toggle=\"modal\" data-target=\"#delete\" data-whatever=\"@mdo\" href=\"\" id=\"";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "id", array()), "html", null, true);
            echo "\" class=\"modif btn btn-danger btn-xs\" titre=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "titre", array()), "html", null, true);
            echo "\" texte=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banniere"], "texte", array());
            echo "\" path=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "path", array()), "html", null, true);
            echo "\"><i class=\"fa fa-times\"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banniere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                                </tbody>
                            </table>




                            <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>



                            <script>
                                \$('#deletebannieres_id').val(\$('.modif').attr('id'))
                            </script>



                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":bannieres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 189,  342 => 183,  325 => 178,  321 => 177,  316 => 175,  312 => 174,  308 => 173,  304 => 172,  301 => 171,  297 => 170,  280 => 156,  263 => 142,  255 => 137,  242 => 127,  238 => 126,  222 => 113,  218 => 112,  214 => 111,  209 => 109,  205 => 108,  201 => 107,  196 => 105,  192 => 104,  188 => 103,  179 => 97,  166 => 87,  158 => 82,  143 => 70,  139 => 69,  135 => 68,  130 => 66,  126 => 65,  122 => 64,  117 => 62,  113 => 61,  109 => 60,  100 => 54,  87 => 44,  44 => 3,  38 => 2,  15 => 1,);
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
                    <h3>Bannières</h3>
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
                    <div class=\"x_panel\" >





                        <div class=\"x_title\">
                            <h4><a class=\"data btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#form\" data-whatever=\"@mdo\" href=\"#\" >Nouvelle bannière</a></h4>

                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">



                            {{ form_start(form, {'id': 'form'}) }}
                            <div class=\"bd-example1\">

                                <div class=\"modal fade\" id=\"form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"description\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img style=\"width: 50%;\" class=\"logo img-responsive1\" src=\"{{ asset('img/logo.svg') }}\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">


                                                {{ form_label(form.titre, \"Titre \") }}
                                                {{ form_widget(form.titre,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(form.titre) }}

                                                {{ form_label(form.texte, \"Texte \") }}
                                                {{ form_widget(form.texte,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(form.texte) }}

                                                {{ form_label(form.file, \"Image (1500x835) \") }}
                                                {{ form_widget(form.file,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(form.file) }}

                                            </div>
                                            <div class=\"modal-footer\">
                                                <a> <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button></a>
                                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ form_end(form) }}




                            {{ form_start(edit_form, {'id': 'edit_form'}) }}
                            <div  class=\"bd-example2\">

                                <div class=\"modal fade\" id=\"formedit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"description2\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img style=\"width: 50%;\" class=\"logo img-responsive1\" src=\"{{ asset('img/logo.svg') }}\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">


                                                {{ form_label(edit_form.titre, \"Titre \") }}
                                                {{ form_widget(edit_form.titre,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(edit_form.titre) }}

                                                {{ form_label(edit_form.texte, \"Texte \") }}
                                                {{ form_widget(edit_form.texte,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(edit_form.texte) }}

                                                {{ form_label(edit_form.file, \"Image(1500x835) \") }}
                                                {{ form_widget(edit_form.file,{'attr': {'class': 'form-control text'}}) }}
                                                {{ form_errors(edit_form.file) }}


                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ form_end(edit_form) }}
                            {{ form_start(delete_form, {'id': 'delete_form'}) }}
                            <div  class=\"bd-example2\">

                                <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                                <img class=\"logo img-responsive1\"  src=\"{{ asset('img/logo.svg') }}\" alt=\"J'@i l'impression\" width=\"42%\">

                                            </div>
                                            <div class=\"modal-body\">

                                                {{ form_widget(delete_form, {'id': 'delete_form'}) }}
                                                <h4 style=\"color: red;\">Êtes-vous sûr de vouloir supprimer définitivement?</h4>


                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" style=\"background-color: rgb(156, 156, 156); color: #ffffff;\">Annuler</button>
                                                <button type=\"submit\" class=\"btn btn-primary\">Supprimer</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{ form_end(delete_form) }}

                            <table id=\"datatable-buttons\"  class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Texte</th>
                                    <th>image</th>
                                    <th>Date d'upload</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for banniere in banns %}
                                    <tr>
                                        <td>{{ banniere.titre }}</td>
                                        <td>{{ banniere.texte|slice(0, 70) ~ '...' }}</td>
                                        <td>{{ banniere.path }}</td>
                                        <td>{{ banniere.updateAt|date(\"m/d/Y\") }}</td>
                                        <td>
                                            <a  class=\"btn btn-info btn-xs\" href=\"{{ path('admin_bannieres_edit', { 'id' : banniere.id }) }}\"><i class=\"fa fa-pencil\" style=\"color: #ffffff;\"></i> Modifier</a>
                                            <a  data-toggle=\"modal\" data-target=\"#delete\" data-whatever=\"@mdo\" href=\"\" id=\"{{ banniere.id }}\" class=\"modif btn btn-danger btn-xs\" titre=\"{{ banniere.titre }}\" texte=\"{{ banniere.texte| raw }}\" path=\"{{ banniere.path }}\"><i class=\"fa fa-times\"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>




                            <script type=\"text/javascript\" src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>



                            <script>
                                \$('#deletebannieres_id').val(\$('.modif').attr('id'))
                            </script>



                            <!-- price element -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}


", ":bannieres:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app/Resources\\views/bannieres/index.html.twig");
    }
}
