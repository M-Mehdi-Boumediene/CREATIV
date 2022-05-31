<?php

/* CosanitBundle:Default:login.html.twig */
class __TwigTemplate_d516ee25ffa944501a02f702da88e48b688553ab5d8ca10e6743aad052d3779a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CosanitBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 8, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "


    <div class=\"content \">
        <div class=\"content_inner  \">
            <style type=\"text/css\">
                .header_top .left .inner > div,
                .header_top .left .inner > div:last-child,
                .header_top .right .inner > div:first-child,
                .header_top .right .inner > div,
                header .header_top .q_social_icon_holder,
                .header_menu_bottom
                { border-color:rgba(234, 234, 234, 0); }

            </style>


            <div class=\"container\">
                <div class=\"container_inner clearfix\" style=\"    width: 100%;
    position: relative;
    margin-top: 85px;\">


                    <div class=\"vc_row wpb_row vc_row-fluid\" style=\" padding-bottom:0px; text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \" style=\"padding: 0;\"><div class=\"wpb_wrapper\">
                                        <div class=\"wpb_raw_code wpb_content_element wpb_raw_html\">
                                            <div class=\"wpb_wrapper\">
                                                <div style=\"background-image: url(";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/login.jpg"), "html", null, true);
        echo "); height: 240px;width: 100%;background-repeat: no-repeat; background-position: 50% 50%;background-size: cover;\"></div>
                                            </div>
                                        </div>
                                    </div></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\"><div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_text_column wpb_content_element \">
                                                <div class=\"wpb_wrapper\">
                                                    <div class=\"login-container\">
                                                        <h1>Connexion</h1>
                                                        <style type=\"text/css\"></style><div id=\"ewd-feup-login-form-div\"><div class=\"alert-label\"><span class=\"separator-value\">1</span><span class=\"separator-label\">Mes identifiants de connexion</span></div>
                                                            <form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"ewd-feup-login-form\" class=\"pure-form pure-form-aligned\">
                                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" />
                                                                <div class=\"feup-pure-control-group\">
                                                                    <label for=\"Username\" id=\"ewd-feup-login-username-div\" class=\"ewd-feup-field-label\">Email: </label>
                                                                    <input type=\"email\"  class=\"ewd-feup-text-input\"  id=\"username\" name=\"Username\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email...\"  required=\"required\" />
                                                                </div>
                                                                <div class=\"feup-pure-control-group\">
                                                                    <label for=\"Password\" id=\"ewd-feup-login-password-div\" class=\"ewd-feup-field-label\">Mot de passe: </label
                                                                    >
                                                                    <input type=\"password\"  class=\"ewd-feup-text-input\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />

                                                                </div>
                                                                <hr class=\"gray-line\"><div class=\"feup-pure-control-group\">
                                                                    <label for=\"Submit\"></label>
                                                                    <input type=\"submit\" class=\"ewd-feup-submit feup-pure-button feup-pure-button-primary\" name=\"Login_Submit\" value=\"Login\">
                                                                </div></form></div>
                                                        <div class=\"login-forgot\"><a href=\"/mot-de-passe-oublie/\">Mot de passe oublié ?</a> Je n’ai pas de compte, <a href=\"/enregistrer/\">je voudrais créer un compte</a></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div></div></div></div></div></div>



                </div>
            </div>
            <div class=\"content_bottom\">
            </div>

        </div>
    </div>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_infs = {\"navSelector\":\"nav.pagination\",\"nextSelector\":\"nav.pagination a.next\",\"itemSelector\":\".result-item\",\"contentSelector\":\"#infinite-scroll-container\",\"loader\":\"https:\\/\\/www.marcfoujols.com\\/wp-content\\/uploads\\/2015\\/08\\/preloader_mf.gif\",\"shop\":\"\"};
        /* ]]> */
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mfLike = {\"ajaxurl\":\"https:\\/\\/www.marcfoujols.com\\/wp-admin\\/admin-ajax.php\"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-like.js'></script>
    <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js\"></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2.min.js'></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/plugins.js'></script>
    <script type='text/javascript' src='https://www.marcfoujols.com/wp-content/themes/marcfoujols/js/default_dynamic.php'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/default.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/marc_foujols.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/custom_js.php'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2-fr.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/i18n/fr.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/autoNumeric-min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/cbpFWTabs.js'></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-search.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/classie.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/modalEffects.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/light-gallery/lightgallery-all.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/comment-reply.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/js_composer-4.11/assets/js/dist/js_composer_front.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/position.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer' defer='defer'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js'></script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  97 => 46,  93 => 45,  81 => 36,  53 => 10,  47 => 8,  44 => 7,  38 => 6,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}


{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}



    <div class=\"content \">
        <div class=\"content_inner  \">
            <style type=\"text/css\">
                .header_top .left .inner > div,
                .header_top .left .inner > div:last-child,
                .header_top .right .inner > div:first-child,
                .header_top .right .inner > div,
                header .header_top .q_social_icon_holder,
                .header_menu_bottom
                { border-color:rgba(234, 234, 234, 0); }

            </style>


            <div class=\"container\">
                <div class=\"container_inner clearfix\" style=\"    width: 100%;
    position: relative;
    margin-top: 85px;\">


                    <div class=\"vc_row wpb_row vc_row-fluid\" style=\" padding-bottom:0px; text-align:left;\"><div class=\" clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \" style=\"padding: 0;\"><div class=\"wpb_wrapper\">
                                        <div class=\"wpb_raw_code wpb_content_element wpb_raw_html\">
                                            <div class=\"wpb_wrapper\">
                                                <div style=\"background-image: url({{ asset('images/login.jpg') }}); height: 240px;width: 100%;background-repeat: no-repeat; background-position: 50% 50%;background-size: cover;\"></div>
                                            </div>
                                        </div>
                                    </div></div></div></div></div><div class=\"vc_row wpb_row vc_row-fluid grid_section\" style=\" text-align:left;\"><div class=\" section_inner clearfix\"><div class=\"section_inner_margin clearfix\"><div class=\"wpb_column vc_column_container vc_col-sm-12\"><div class=\"vc_column-inner \"><div class=\"wpb_wrapper\">
                                            <div class=\"wpb_text_column wpb_content_element \">
                                                <div class=\"wpb_wrapper\">
                                                    <div class=\"login-container\">
                                                        <h1>Connexion</h1>
                                                        <style type=\"text/css\"></style><div id=\"ewd-feup-login-form-div\"><div class=\"alert-label\"><span class=\"separator-value\">1</span><span class=\"separator-label\">Mes identifiants de connexion</span></div>
                                                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" id=\"ewd-feup-login-form\" class=\"pure-form pure-form-aligned\">
                                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                                                <div class=\"feup-pure-control-group\">
                                                                    <label for=\"Username\" id=\"ewd-feup-login-username-div\" class=\"ewd-feup-field-label\">Email: </label>
                                                                    <input type=\"email\"  class=\"ewd-feup-text-input\"  id=\"username\" name=\"Username\" value=\"{{ last_username }}\" placeholder=\"Email...\"  required=\"required\" />
                                                                </div>
                                                                <div class=\"feup-pure-control-group\">
                                                                    <label for=\"Password\" id=\"ewd-feup-login-password-div\" class=\"ewd-feup-field-label\">Mot de passe: </label
                                                                    >
                                                                    <input type=\"password\"  class=\"ewd-feup-text-input\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />

                                                                </div>
                                                                <hr class=\"gray-line\"><div class=\"feup-pure-control-group\">
                                                                    <label for=\"Submit\"></label>
                                                                    <input type=\"submit\" class=\"ewd-feup-submit feup-pure-button feup-pure-button-primary\" name=\"Login_Submit\" value=\"Login\">
                                                                </div></form></div>
                                                        <div class=\"login-forgot\"><a href=\"/mot-de-passe-oublie/\">Mot de passe oublié ?</a> Je n’ai pas de compte, <a href=\"/enregistrer/\">je voudrais créer un compte</a></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div></div></div></div></div></div>



                </div>
            </div>
            <div class=\"content_bottom\">
            </div>

        </div>
    </div>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var yith_infs = {\"navSelector\":\"nav.pagination\",\"nextSelector\":\"nav.pagination a.next\",\"itemSelector\":\".result-item\",\"contentSelector\":\"#infinite-scroll-container\",\"loader\":\"https:\\/\\/www.marcfoujols.com\\/wp-content\\/uploads\\/2015\\/08\\/preloader_mf.gif\",\"shop\":\"\"};
        /* ]]> */
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mfLike = {\"ajaxurl\":\"https:\\/\\/www.marcfoujols.com\\/wp-admin\\/admin-ajax.php\"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-like.js'></script>
    <script type=\"text/javascript\" src=\"https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js\"></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2.min.js'></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/plugins.js'></script>
    <script type='text/javascript' src='https://www.marcfoujols.com/wp-content/themes/marcfoujols/js/default_dynamic.php'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/default.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/marc_foujols.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/custom_js.php'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/select2-fr.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/i18n/fr.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/autoNumeric-min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/cbpFWTabs.js'></script>

    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/mf-search.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/classie.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/modal/modalEffects.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/light-gallery/lightgallery-all.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/themes/marcfoujols/js/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/comment-reply.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/js_composer-4.11/assets/js/dist/js_composer_front.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/jquery/ui/position.min.js'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-content/plugins/popup-maker/assets/js/site.min.js?defer' defer='defer'></script>
    <script type='text/javascript' src='https://4a1diu2l2oz9sztxw2o2majb-wpengine.netdna-ssl.com/wp-includes/js/wp-embed.min.js'></script>



{% endblock fos_user_content %}
", "CosanitBundle:Default:login.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/login.html.twig");
    }
}
