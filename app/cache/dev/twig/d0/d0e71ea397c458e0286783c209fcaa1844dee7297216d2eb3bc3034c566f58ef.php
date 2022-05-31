<?php

/* CosanitBundle:Mails:contact.html.twig */
class __TwigTemplate_b53c5f4ffba83a9dd65334e746f30f68839456b5d3f89503b2753faa21461953 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Mails:contact.html.twig"));

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
    <tbody style=\"background-color:#fff;\">
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

                                        <p>
                                            <b>Nom: </b>  ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new Twig_Error_Runtime('Variable "nom" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "
                                        </p>

                                        <p>
                                            <b>  Téléphone : </b>  ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "
                                        </p>
                                        <p>
                                            <b> Email : </b>  ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "
                                        </p>
                                        <p>
                                            <b>  Message : </b>  ";
        // line 41
        echo (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 41, $this->source); })());
        echo "
                                        </p>





                                        <table style=\"width:550px;margin-top:11px;background-color:#f7f7f7;border-top:1px solid #ddd;padding:14px 10px 13px 10px\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
                                            <tbody>
                                            <tr>

                                                <td style=\"text-align:left;padding-left:8px;font-size:11px;line-height:19px;color:#000;\">

                                                    Envoyé depuis le site
                                                    <br>

                                                    <a style=\"text-decoration:none;color:#c1002c;\" href=\"https://sadjiaceram.com\" target=\"_blank\" data-saferedirecturl=\"\">sadjiaceram.com</a>

                                                </td>
                                                <td style=\"text-align: right;\" >
                                                    <a style=\"border:0\" href=\"https://sadjiaceram.com\" target=\"_blank\" data-saferedirecturl=\"\">

                                                    </a>
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
        return "CosanitBundle:Mails:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 41,  71 => 38,  65 => 35,  58 => 31,  26 => 1,);
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
    <tbody style=\"background-color:#fff;\">
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

                                        <p>
                                            <b>Nom: </b>  {{ nom }}
                                        </p>

                                        <p>
                                            <b>  Téléphone : </b>  {{ telephone }}
                                        </p>
                                        <p>
                                            <b> Email : </b>  {{ email }}
                                        </p>
                                        <p>
                                            <b>  Message : </b>  {{ message|raw }}
                                        </p>





                                        <table style=\"width:550px;margin-top:11px;background-color:#f7f7f7;border-top:1px solid #ddd;padding:14px 10px 13px 10px\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"550\">
                                            <tbody>
                                            <tr>

                                                <td style=\"text-align:left;padding-left:8px;font-size:11px;line-height:19px;color:#000;\">

                                                    Envoyé depuis le site
                                                    <br>

                                                    <a style=\"text-decoration:none;color:#c1002c;\" href=\"https://sadjiaceram.com\" target=\"_blank\" data-saferedirecturl=\"\">sadjiaceram.com</a>

                                                </td>
                                                <td style=\"text-align: right;\" >
                                                    <a style=\"border:0\" href=\"https://sadjiaceram.com\" target=\"_blank\" data-saferedirecturl=\"\">

                                                    </a>
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
", "CosanitBundle:Mails:contact.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Mails/contact.html.twig");
    }
}
