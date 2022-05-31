<?php

/* CosanitBundle:Mails:mail.html.twig */
class __TwigTemplate_8e85e6506b6304d8fb9cfdae74707ad35268dd01f2cf185c3c0b20afd374dfdb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Mails:mail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">



</head>

<body>
<table style=\"border:1px solid rgb(221,221,221);background-color:rgb(255,255,255);margin-left: auto; margin-right: auto;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
    <tbody style=\"background-color:#fff\">
    <tr>
        <td style=\"border-collapse:collapse;background-color:#fff\" align=\"center\" valign=\"top\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\" style=\"background-color:#fff;\" >
                <tbody>
                <tr>
                    <td style=\"border-collapse:collapse;background-color:rgb(255,255,255)\" valign=\"top\">
                        <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"background-color:#fff;border-collapse:collapse\" valign=\"top\">
                                    <div style=\"color:rgb(80,80,80);font-family:helvetica,serif,Arial;font-size:12px;line-height:150%;text-align:left\">
                                        <h2>Demande de devi </h2>
                                        <p><b>Nom et prénom (carte grise): </b>  ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "        </p>
                                        <p>   <b>Adresse (carte grise) / ville: </b>  ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new Twig_Error_Runtime('Variable "adresse" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "  </p>
                                        <p>   <b>Téléphone: </b>  ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "  </p>
                                        <p>   <b>E-mail: </b>  ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "  </p>
                                        <p>    <b>Assurance: </b>  ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cateogrie"]) || array_key_exists("cateogrie", $context) ? $context["cateogrie"] : (function () { throw new Twig_Error_Runtime('Variable "cateogrie" does not exist.', 33, $this->source); })()), "nom", array()), "html", null, true);
        echo "</p>
                                        <p>   <b>Formule: </b>  ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Durée: </b>  ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["duree"]) || array_key_exists("duree", $context) ? $context["duree"] : (function () { throw new Twig_Error_Runtime('Variable "duree" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Date d'obtention (permis): </b>  ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["datepermis"]) || array_key_exists("datepermis", $context) ? $context["datepermis"] : (function () { throw new Twig_Error_Runtime('Variable "datepermis" does not exist.', 36, $this->source); })()), "m/d/Y"), "html", null, true);
        echo "</p>
                                        <p>    <b>Wilaya: </b>  ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["wilaya"]) || array_key_exists("wilaya", $context) ? $context["wilaya"] : (function () { throw new Twig_Error_Runtime('Variable "wilaya" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>N° permis: </b>  ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["npermis"]) || array_key_exists("npermis", $context) ? $context["npermis"] : (function () { throw new Twig_Error_Runtime('Variable "npermis" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Catégorie permis: </b>  ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["catpermis"]) || array_key_exists("catpermis", $context) ? $context["catpermis"] : (function () { throw new Twig_Error_Runtime('Variable "catpermis" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Genre: </b>  ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new Twig_Error_Runtime('Variable "genre" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Matricule: </b>  ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["matricule"]) || array_key_exists("matricule", $context) ? $context["matricule"] : (function () { throw new Twig_Error_Runtime('Variable "matricule" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>N° serie: </b>  ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nserie"]) || array_key_exists("nserie", $context) ? $context["nserie"] : (function () { throw new Twig_Error_Runtime('Variable "nserie" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>N° type: </b>  ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["ntype"]) || array_key_exists("ntype", $context) ? $context["ntype"] : (function () { throw new Twig_Error_Runtime('Variable "ntype" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Année de mise en circulation: </b>  ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["anneecircule"]) || array_key_exists("anneecircule", $context) ? $context["anneecircule"] : (function () { throw new Twig_Error_Runtime('Variable "anneecircule" does not exist.', 44, $this->source); })()), "m/d/Y"), "html", null, true);
        echo "</p>
                                        <p>    <b>Marque: </b>  ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["marque"]) || array_key_exists("marque", $context) ? $context["marque"] : (function () { throw new Twig_Error_Runtime('Variable "marque" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Modele: </b>  ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["modele"]) || array_key_exists("modele", $context) ? $context["modele"] : (function () { throw new Twig_Error_Runtime('Variable "modele" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Usage: </b>  ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["usage"]) || array_key_exists("usage", $context) ? $context["usage"] : (function () { throw new Twig_Error_Runtime('Variable "usage" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</p>
                                        <p>    <b>Nombre de places du véhicule: </b>  ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["nbplace"]) || array_key_exists("nbplace", $context) ? $context["nbplace"] : (function () { throw new Twig_Error_Runtime('Variable "nbplace" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</p>


                                        ";
        // line 51
        if (((isset($context["garantie"]) || array_key_exists("garantie", $context) ? $context["garantie"] : (function () { throw new Twig_Error_Runtime('Variable "garantie" does not exist.', 51, $this->source); })()) == "Tout risque")) {
            // line 52
            echo "
                                        ";
        } else {
            // line 54
            echo "                                            ";
            if (((isset($context["vols"]) || array_key_exists("vols", $context) ? $context["vols"] : (function () { throw new Twig_Error_Runtime('Variable "vols" does not exist.', 54, $this->source); })()) == 0)) {
                // line 55
                echo "
                                            ";
            } else {
                // line 57
                echo "                                                <p><b>Vols:</b> Oui  </p>
                                            ";
            }
            // line 59
            echo "
                                            ";
            // line 60
            if (((isset($context["incendies"]) || array_key_exists("incendies", $context) ? $context["incendies"] : (function () { throw new Twig_Error_Runtime('Variable "incendies" does not exist.', 60, $this->source); })()) == 0)) {
                // line 61
                echo "
                                            ";
            } else {
                // line 63
                echo "                                                <p> <b>Incendies:</b> Oui  </p>
                                            ";
            }
            // line 65
            echo "
                                            ";
            // line 66
            if (((isset($context["bris"]) || array_key_exists("bris", $context) ? $context["bris"] : (function () { throw new Twig_Error_Runtime('Variable "bris" does not exist.', 66, $this->source); })()) == 0)) {
                // line 67
                echo "
                                            ";
            } else {
                // line 69
                echo "                                                <p><b>Bris de glace:</b> Oui </p>
                                            ";
            }
            // line 71
            echo "
                                            ";
            // line 72
            if (((isset($context["assistance1"]) || array_key_exists("assistance1", $context) ? $context["assistance1"] : (function () { throw new Twig_Error_Runtime('Variable "assistance1" does not exist.', 72, $this->source); })()) == 0)) {
                // line 73
                echo "
                                            ";
            } else {
                // line 75
                echo "                                                <p> <b>Assistance1: </b>Oui  </p>
                                            ";
            }
            // line 77
            echo "

                                            ";
            // line 79
            if (((isset($context["assistance2"]) || array_key_exists("assistance2", $context) ? $context["assistance2"] : (function () { throw new Twig_Error_Runtime('Variable "assistance2" does not exist.', 79, $this->source); })()) == 0)) {
                // line 80
                echo "
                                            ";
            } else {
                // line 82
                echo "                                                <p> <b>Assistance2: </b>Oui  </p>
                                            ";
            }
            // line 84
            echo "

                                            ";
            // line 86
            if (((isset($context["assistance3"]) || array_key_exists("assistance3", $context) ? $context["assistance3"] : (function () { throw new Twig_Error_Runtime('Variable "assistance3" does not exist.', 86, $this->source); })()) == 0)) {
                // line 87
                echo "
                                            ";
            } else {
                // line 89
                echo "                                                <p> <b>Assistance3: </b>Oui  </p>
                                            ";
            }
            // line 91
            echo "


                                            ";
            // line 94
            if (((isset($context["defences"]) || array_key_exists("defences", $context) ? $context["defences"] : (function () { throw new Twig_Error_Runtime('Variable "defences" does not exist.', 94, $this->source); })()) == 0)) {
                // line 95
                echo "
                                            ";
            } else {
                // line 97
                echo "
                                                <p> <b>Défences et recours: </b>Oui  </p>
                                            ";
            }
            // line 100
            echo "

                                        ";
        }
        // line 103
        echo "







                                        <table style=\"width:550px;margin-top:11px;background-color:#f7f7f7;border-top:1px solid #ddd;padding:14px 10px 13px 10px\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
                                            <tbody><tr>

                                                <td style=\"text-align:left;padding-left:8px;font-size:11px;line-height:19px;color:#888888\">

                                                    Envoyé depuis le site
                                                    <br>

                                                    <a style=\"text-decoration:none;color:#888888\" href=\"https://ncomparer.com\" target=\"blank\" data-saferedirecturl=\"\">ncomparer.com</a>

                                                </td>

                                                <td style=\"text-align:right;color:#707070;font-size:11px\">



                                                </td>

                                            </tr>
                                            </tbody></table>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    </tbody>
</table>




</body>


</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Mails:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 103,  238 => 100,  233 => 97,  229 => 95,  227 => 94,  222 => 91,  218 => 89,  214 => 87,  212 => 86,  208 => 84,  204 => 82,  200 => 80,  198 => 79,  194 => 77,  190 => 75,  186 => 73,  184 => 72,  181 => 71,  177 => 69,  173 => 67,  171 => 66,  168 => 65,  164 => 63,  160 => 61,  158 => 60,  155 => 59,  151 => 57,  147 => 55,  144 => 54,  140 => 52,  138 => 51,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">



</head>

<body>
<table style=\"border:1px solid rgb(221,221,221);background-color:rgb(255,255,255);margin-left: auto; margin-right: auto;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
    <tbody style=\"background-color:#fff\">
    <tr>
        <td style=\"border-collapse:collapse;background-color:#fff\" align=\"center\" valign=\"top\">
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\" style=\"background-color:#fff;\" >
                <tbody>
                <tr>
                    <td style=\"border-collapse:collapse;background-color:rgb(255,255,255)\" valign=\"top\">
                        <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                            <tbody>
                            <tr>
                                <td style=\"background-color:#fff;border-collapse:collapse\" valign=\"top\">
                                    <div style=\"color:rgb(80,80,80);font-family:helvetica,serif,Arial;font-size:12px;line-height:150%;text-align:left\">
                                        <h2>Demande de devi </h2>
                                        <p><b>Nom et prénom (carte grise): </b>  {{ nom }}        </p>
                                        <p>   <b>Adresse (carte grise) / ville: </b>  {{ adresse }}  </p>
                                        <p>   <b>Téléphone: </b>  {{ telephone }}  </p>
                                        <p>   <b>E-mail: </b>  {{ email }}  </p>
                                        <p>    <b>Assurance: </b>  {{ cateogrie.nom }}</p>
                                        <p>   <b>Formule: </b>  {{ garantie }}</p>
                                        <p>    <b>Durée: </b>  {{ duree }}</p>
                                        <p>    <b>Date d'obtention (permis): </b>  {{ datepermis|date(\"m/d/Y\") }}</p>
                                        <p>    <b>Wilaya: </b>  {{ wilaya }}</p>
                                        <p>    <b>N° permis: </b>  {{ npermis }}</p>
                                        <p>    <b>Catégorie permis: </b>  {{ catpermis }}</p>
                                        <p>    <b>Genre: </b>  {{ genre }}</p>
                                        <p>    <b>Matricule: </b>  {{ matricule }}</p>
                                        <p>    <b>N° serie: </b>  {{ nserie }}</p>
                                        <p>    <b>N° type: </b>  {{ ntype }}</p>
                                        <p>    <b>Année de mise en circulation: </b>  {{ anneecircule|date(\"m/d/Y\") }}</p>
                                        <p>    <b>Marque: </b>  {{ marque }}</p>
                                        <p>    <b>Modele: </b>  {{ modele }}</p>
                                        <p>    <b>Usage: </b>  {{ usage }}</p>
                                        <p>    <b>Nombre de places du véhicule: </b>  {{ nbplace }}</p>


                                        {% if garantie == 'Tout risque' %}

                                        {% else %}
                                            {% if  vols == 0 %}

                                            {% else %}
                                                <p><b>Vols:</b> Oui  </p>
                                            {% endif %}

                                            {% if  incendies == 0 %}

                                            {% else %}
                                                <p> <b>Incendies:</b> Oui  </p>
                                            {% endif %}

                                            {% if  bris == 0 %}

                                            {% else %}
                                                <p><b>Bris de glace:</b> Oui </p>
                                            {% endif %}

                                            {% if  assistance1 == 0 %}

                                            {% else %}
                                                <p> <b>Assistance1: </b>Oui  </p>
                                            {% endif %}


                                            {% if  assistance2 == 0 %}

                                            {% else %}
                                                <p> <b>Assistance2: </b>Oui  </p>
                                            {% endif %}


                                            {% if  assistance3 == 0 %}

                                            {% else %}
                                                <p> <b>Assistance3: </b>Oui  </p>
                                            {% endif %}



                                            {% if  defences == 0 %}

                                            {% else %}

                                                <p> <b>Défences et recours: </b>Oui  </p>
                                            {% endif %}


                                        {% endif %}








                                        <table style=\"width:550px;margin-top:11px;background-color:#f7f7f7;border-top:1px solid #ddd;padding:14px 10px 13px 10px\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
                                            <tbody><tr>

                                                <td style=\"text-align:left;padding-left:8px;font-size:11px;line-height:19px;color:#888888\">

                                                    Envoyé depuis le site
                                                    <br>

                                                    <a style=\"text-decoration:none;color:#888888\" href=\"https://ncomparer.com\" target=\"blank\" data-saferedirecturl=\"\">ncomparer.com</a>

                                                </td>

                                                <td style=\"text-align:right;color:#707070;font-size:11px\">



                                                </td>

                                            </tr>
                                            </tbody></table>

                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    </tbody>
</table>




</body>


</html>
", "CosanitBundle:Mails:mail.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Mails/mail.html.twig");
    }
}
