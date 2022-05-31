<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a571610657cff8bb57f9d6883f181e4d8e65366e8a80b08f37000b0226a7c986 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "
    <div>

        <a class=\"hiddenanchor\" id=\"signup\"></a>
        <a class=\"hiddenanchor\" id=\"signin\"></a>
        <div class=\"box\">

            <div class=\"content-wrap\">
                ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                    <b  class=\"erreur\" style=\"color: #FF1200; float: right\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</b>
                ";
        }
        // line 16
        echo "                <h6>Connexion</h6>



                <div class=\"login_wrapper\">
                    <div class=\"animate form login_form\">
                        <section class=\"login_con ent\">


                            <form class=\"new_user_session\" id=\"new_user_session\" action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">


                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" />

                                <label for=\"user_session_login\">Adresse email ou identifiant</label>
                                <input type=\"text\"  class=\"form-control\"  id=\"user_session_login\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Email ou identifiant\"  required=\"required\" />

                                <label for=\"user_session_password\">Mot de passe</label>
                                <input type=\"password\"  class=\"form-control\" id=\"user_session_password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                <div class=\"remember\">

                                    <label for=\"user_session_remember_me\">Se souvenir de moi

                                        <input type=\"checkbox\" id=\"user_session_remember_me\" name=\"_remember_me\" value=\"on\" />
                                    </label>
                                </div>

                                <input type=\"submit\" name=\"commit\" value=\"Se connecter\" class=\"btn-glow primary login\">



                                <br><br>
                                <a class=\"\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié </a>



                            </form>

                        </section>
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
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  91 => 34,  85 => 31,  79 => 28,  73 => 25,  62 => 16,  56 => 14,  54 => 13,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}
{% block fos_user_content %}

    <div>

        <a class=\"hiddenanchor\" id=\"signup\"></a>
        <a class=\"hiddenanchor\" id=\"signin\"></a>
        <div class=\"box\">

            <div class=\"content-wrap\">
                {% if error %}
                    <b  class=\"erreur\" style=\"color: #FF1200; float: right\">{{ error.messageKey|trans(error.messageData, 'security') }}</b>
                {% endif %}
                <h6>Connexion</h6>



                <div class=\"login_wrapper\">
                    <div class=\"animate form login_form\">
                        <section class=\"login_con ent\">


                            <form class=\"new_user_session\" id=\"new_user_session\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">


                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                                <label for=\"user_session_login\">Adresse email ou identifiant</label>
                                <input type=\"text\"  class=\"form-control\"  id=\"user_session_login\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Email ou identifiant\"  required=\"required\" />

                                <label for=\"user_session_password\">Mot de passe</label>
                                <input type=\"password\"  class=\"form-control\" id=\"user_session_password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans }}\" />
                                <div class=\"remember\">

                                    <label for=\"user_session_remember_me\">Se souvenir de moi

                                        <input type=\"checkbox\" id=\"user_session_remember_me\" name=\"_remember_me\" value=\"on\" />
                                    </label>
                                </div>

                                <input type=\"submit\" name=\"commit\" value=\"Se connecter\" class=\"btn-glow primary login\">



                                <br><br>
                                <a class=\"\" href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié </a>



                            </form>

                        </section>
                    </div>


                </div>

            </div>
        </div>
    </div>

{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
