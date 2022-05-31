<?php

/* CosanitBundle:Default:index.html.twig */
class __TwigTemplate_707a23ca5953d44ffe5c7102dc6c789cc89a62e984e441ec0f67a52ab7a35f58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
            'ldjson' => array($this, 'block_ldjson'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "CREATIV | Développement web et Commmunication digitale ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 4
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_ldjson($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ldjson"));

        // line 7
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

  
<div class=\"header-overflow\" id=\"header-overflow\"></div>
<main>
    <div id=\"slider\" data-timer=\"3000\">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new Twig_Error_Runtime('Variable "banners" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["banniere"]) {
            // line 17
            echo "               
                
                <div class=\"slider-item\" id=\"slider-item-";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banniere"], "id", array()), "html", null, true);
            echo "\">
                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Bannieres/" . twig_get_attribute($this->env, $this->source, $context["banniere"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banniere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
      
        <div class=\"slider-item\" id=\"slider-item-2\">
            <img src=\"asset/tmp/slider/33.jpg\" alt=\"\">
        </div>
    <div class=\"slider-item\" id=\"slider-item-3\">
        <img src=\"asset/tmp/slider/44.jpg\" alt=\"\">
    </div>
        <div class=\"slider-item\" id=\"slider-item-4\">
            <img src=\"asset/tmp/slider/55.jpg\" alt=\"\">
        </div>
        <div class=\"slider-item\" id=\"slider-item-5\">
            <img src=\"asset/tmp/slider/66.jpg\" alt=\"\">
        </div>
        <div class=\"slider-item\" id=\"slider-item-6\">
            <img src=\"asset/tmp/slider/idg-slides-accueil-2020-logos-747-986.jpg\" alt=\"\">
        </div>

        <div class=\"slider-item\" id=\"slider-item-7\">
            <img src=\"asset/tmp/slider/3.jpg\" alt=\"\">
        </div>

        <div class=\"slider-item\" id=\"slider-item-8\">
            <img src=\"asset/tmp/slider/idg-slides-accueil-2020-flyers-227-172.jpg\" alt=\"\">
        </div>



    </div>


    <div class=\"index-1\">
        <div class=\"index-1-content\">
            <div class=\"index-1-btn\" id=\"index-1-btn\">
                <div class=\"index-1-top-title\">Quelques mots à propos de</div>
                <div class=\"index-1-middle-title\"><span>Notre</span> entreprise</div>
            </div>
   
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["apropos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["apropos"]) {
            // line 62
            echo "
            ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["apropos"], "text1", array());
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apropos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            
        </div>
    </div>



    <div class=\"index-3\">
        <div class=\"index-3-items\">

        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 77
            echo "         

                  <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_produits_categorie", array("id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", array()))), "html", null, true);
            echo "\" class=\"index-3-item index-3-item-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"index-3-item-img\">
                    <img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorie"], "photo", array()), 0, array(), "array"), "path", array()))), "html", null, true);
            echo "\" alt=\"Site internet sur-mesure\">
                    <div class=\"index-3-item-img-plus\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"index-3-item-active\">
                    <div class=\"index-3-item-active-content\">
                        <h2 class=\"index-3-item-title\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", array()), "html", null, true);
            echo "</h2>
                        <h3 class=\"index-3-item-subtitle\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "titre", array()), "html", null, true);
            echo "</h3>
                        <h4 class=\"index-3-item-text\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", array()), "html", null, true);
            echo "</h4>
                        <div class=\"index-3-item-plus\">En savoir +</div>
                    </div>
                </div>
            </a>\t\t\t\t

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
          
        </div>
    </div>

    <div class=\"index-4\">
        <div class=\"index-4-left\">
            <h5 class=\"index-4-left-title\"> Votre devis en 5 minutes ! <span>Calculez le coût de réalisation de votre site internet, au plus juste, en moins de 5 minutes !</span></h5>
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_devis");
        echo "\" class=\"index-4-left-link\">DEVIS EN LIVE, cliquez ICI</a>
            <img src=\"asset/tmp/inspiration/5-minutes-logo-668.png\" alt=\"Le Catalogue des supports de communication\" class=\"index-4-left-img\">
        </div>
        <div class=\"index-4-right\">
            <h5 class=\"index-4-right-title\">Du conseil et des idées <br> pour tous les budgets !</h5>
            <p class=\"index-4-right-text\">Notre réactivité, notre esprit de service, nos idées novatrices, <br> nos tarifs compétitifs et il faut le dire, notre bonne humeur <br> nous ont permis de travailler depuis longtemps avec de fidèles clients.</p>
            <a href=\"asset/core/du-conseil-et-des-idees.html\" class=\"index-4-right-link quickmodal-link\" data-url=\"/asset/core/du-conseil-et-des-idees.php\">En savoir +</a>
        </div>
    </div>

    <div class=\"index-5\">
        <div class=\"index-5-left\">
            <img src=\"asset/img/2-minutes.png\" alt=\"2 minutes\" class=\"index-5-left-img\">
            <h5 class=\"index-5-left-title\">2 minutes pour réaliser le <br> diagnostic-santé de votre comm’</h5>
            <div class=\"index-5-left-text\">Où en êtes-vous en matière de marketing ? <br> Evaluez votre stratégie grâce à notre questionnaire exclusif : <br> répondez à 10 questions et découvrez quelle est votre “note marketing”... <br> Un moyen efficace pour faire le point en 2 minutes.</div>
            <a href=\"audit-marketing-gratuit.html\" class=\"index-5-left-link\">Faire le test</a>
        </div>
        <div class=\"index-5-right\">
            <div class=\"index-5-right-title\">Retrouvez-nous sur <strong>Facebook</strong> <br> et suivez toute l’actualité creativ web :</div>
            <div class=\"index-5-right-text\">Chantiers en cours, nouveaux produits, photos de réalisations, <br> témoignages clients, promotions, etc...</div>
            <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"index-5-right-link\" target=\"_blank\">
                <img src=\"asset/img/suivez-nous-sur-facebook.png\" alt=\"Suivez-nous sur Facebook\" class=\"index-5-right-img\">
            </a>
            <div class=\"index-5-right-flex\">
                <div class=\"index-5-right-flex-left\">
                    <i class=\"fas fa-thumbs-up\"></i>
                    <div><strong>1999</strong> personnes aiment <strong>CREATIV</strong></div>
                </div>
                <div class=\"index-5-right-flex-right\">
                    <i class=\"far fa-check-circle\"></i>
                    <div><strong>2070</strong> personnes sont abonnées</div>
                </div>
            </div>
        </div>
    </div>

    </main>

    <div class=\"bubble-question\" id=\"bubble-question\">
        <span class=\"bubble-question-tooltip\">VOUS AVEZ DES QUESTIONS ?</span>
        <div class=\"bubble-question-content\" id=\"bubble-question-content\">
            <div class=\"bubble-question-content-title\">VOUS AVEZ DES QUESTIONS ?</div>
            <div class=\"bubble-question-content-close\" id=\"bubble-question-content-close\">&times;</div>
            <div class=\"bubble-question-container-1\" id=\"bubble-question-container-1\">
                <div class=\"bubble-question-container-1-line bubble-question-container-1-line-1\">
                    Téléphonez-nous :<br>0554 29 35 40
                    <i class=\"fas fa-phone\" aria-hidden></i>
                </div>
                <div class=\"bubble-question-container-1-line bubble-question-container-1-line-2\" id=\"bubble-question-container-1-line-2\">
                    Cliquez ici pour nous<br>laisser un message
                    <i class=\"fas fa-envelope\" aria-hidden></i>
                </div>
            </div>
            <div class=\"bubble-question-container-2\" id=\"bubble-question-container-2\">
                <label for=\"bubble-input-1\">Nom :</label>
                <input type=\"text\" name=\"name\" id=\"bubble-input-1\" autocomplete=\"off\">
                <label for=\"bubble-input-2\">Email :</label>
                <input type=\"text\" name=\"email\" id=\"bubble-input-2\" autocomplete=\"off\">
                <label for=\"bubble-input-3\">Message :</label>
                <textarea name=\"content\" id=\"bubble-input-3\"></textarea>
                <div class=\"bubble-btn\" id=\"bubble-btn\" data-link=\"/asset/core/live-contact.php\">Envoyer</div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 103,  239 => 95,  226 => 88,  222 => 87,  218 => 86,  210 => 81,  203 => 79,  199 => 77,  195 => 76,  183 => 66,  174 => 63,  171 => 62,  167 => 61,  127 => 23,  118 => 20,  114 => 19,  110 => 17,  106 => 16,  97 => 9,  91 => 8,  84 => 7,  78 => 6,  70 => 4,  64 => 3,  53 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}{% block titre %}CREATIV | Développement web et Commmunication digitale {% endblock %}
{% block description %}{% endblock %}
    {% block canonical %}

    {% endblock %}
    {% block ldjson %}
    {% endblock %}
{% block body %}


  
<div class=\"header-overflow\" id=\"header-overflow\"></div>
<main>
    <div id=\"slider\" data-timer=\"3000\">

                {% for banniere in banners %}
               
                
                <div class=\"slider-item\" id=\"slider-item-{{ banniere.id }}\">
                <img src=\"{{ asset('Bannieres/'~banniere.path) }}\" alt=\"\">
                </div>
                 {% endfor %}

      
        <div class=\"slider-item\" id=\"slider-item-2\">
            <img src=\"asset/tmp/slider/33.jpg\" alt=\"\">
        </div>
    <div class=\"slider-item\" id=\"slider-item-3\">
        <img src=\"asset/tmp/slider/44.jpg\" alt=\"\">
    </div>
        <div class=\"slider-item\" id=\"slider-item-4\">
            <img src=\"asset/tmp/slider/55.jpg\" alt=\"\">
        </div>
        <div class=\"slider-item\" id=\"slider-item-5\">
            <img src=\"asset/tmp/slider/66.jpg\" alt=\"\">
        </div>
        <div class=\"slider-item\" id=\"slider-item-6\">
            <img src=\"asset/tmp/slider/idg-slides-accueil-2020-logos-747-986.jpg\" alt=\"\">
        </div>

        <div class=\"slider-item\" id=\"slider-item-7\">
            <img src=\"asset/tmp/slider/3.jpg\" alt=\"\">
        </div>

        <div class=\"slider-item\" id=\"slider-item-8\">
            <img src=\"asset/tmp/slider/idg-slides-accueil-2020-flyers-227-172.jpg\" alt=\"\">
        </div>



    </div>


    <div class=\"index-1\">
        <div class=\"index-1-content\">
            <div class=\"index-1-btn\" id=\"index-1-btn\">
                <div class=\"index-1-top-title\">Quelques mots à propos de</div>
                <div class=\"index-1-middle-title\"><span>Notre</span> entreprise</div>
            </div>
   
            {% for apropos in apropos %}

            {{ apropos.text1|raw }}

            {% endfor %}

            
        </div>
    </div>



    <div class=\"index-3\">
        <div class=\"index-3-items\">

        {% for categorie in categories  %}
         

                  <a href=\"{{ path('cosanit_produits_categorie', { 'id': categorie.slug }) }}\" class=\"index-3-item index-3-item-{{ categorie.id }}\">
                <div class=\"index-3-item-img\">
                    <img src=\"{{ asset('photos_produits/'~categorie.photo[0].path) }}\" alt=\"Site internet sur-mesure\">
                    <div class=\"index-3-item-img-plus\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"index-3-item-active\">
                    <div class=\"index-3-item-active-content\">
                        <h2 class=\"index-3-item-title\">{{ categorie.nom }}</h2>
                        <h3 class=\"index-3-item-subtitle\">{{ categorie.titre }}</h3>
                        <h4 class=\"index-3-item-text\">{{ categorie.nom }}</h4>
                        <div class=\"index-3-item-plus\">En savoir +</div>
                    </div>
                </div>
            </a>\t\t\t\t

        {% endfor %}

          
        </div>
    </div>

    <div class=\"index-4\">
        <div class=\"index-4-left\">
            <h5 class=\"index-4-left-title\"> Votre devis en 5 minutes ! <span>Calculez le coût de réalisation de votre site internet, au plus juste, en moins de 5 minutes !</span></h5>
            <a href=\"{{path('cosanit_devis')}}\" class=\"index-4-left-link\">DEVIS EN LIVE, cliquez ICI</a>
            <img src=\"asset/tmp/inspiration/5-minutes-logo-668.png\" alt=\"Le Catalogue des supports de communication\" class=\"index-4-left-img\">
        </div>
        <div class=\"index-4-right\">
            <h5 class=\"index-4-right-title\">Du conseil et des idées <br> pour tous les budgets !</h5>
            <p class=\"index-4-right-text\">Notre réactivité, notre esprit de service, nos idées novatrices, <br> nos tarifs compétitifs et il faut le dire, notre bonne humeur <br> nous ont permis de travailler depuis longtemps avec de fidèles clients.</p>
            <a href=\"asset/core/du-conseil-et-des-idees.html\" class=\"index-4-right-link quickmodal-link\" data-url=\"/asset/core/du-conseil-et-des-idees.php\">En savoir +</a>
        </div>
    </div>

    <div class=\"index-5\">
        <div class=\"index-5-left\">
            <img src=\"asset/img/2-minutes.png\" alt=\"2 minutes\" class=\"index-5-left-img\">
            <h5 class=\"index-5-left-title\">2 minutes pour réaliser le <br> diagnostic-santé de votre comm’</h5>
            <div class=\"index-5-left-text\">Où en êtes-vous en matière de marketing ? <br> Evaluez votre stratégie grâce à notre questionnaire exclusif : <br> répondez à 10 questions et découvrez quelle est votre “note marketing”... <br> Un moyen efficace pour faire le point en 2 minutes.</div>
            <a href=\"audit-marketing-gratuit.html\" class=\"index-5-left-link\">Faire le test</a>
        </div>
        <div class=\"index-5-right\">
            <div class=\"index-5-right-title\">Retrouvez-nous sur <strong>Facebook</strong> <br> et suivez toute l’actualité creativ web :</div>
            <div class=\"index-5-right-text\">Chantiers en cours, nouveaux produits, photos de réalisations, <br> témoignages clients, promotions, etc...</div>
            <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"index-5-right-link\" target=\"_blank\">
                <img src=\"asset/img/suivez-nous-sur-facebook.png\" alt=\"Suivez-nous sur Facebook\" class=\"index-5-right-img\">
            </a>
            <div class=\"index-5-right-flex\">
                <div class=\"index-5-right-flex-left\">
                    <i class=\"fas fa-thumbs-up\"></i>
                    <div><strong>1999</strong> personnes aiment <strong>CREATIV</strong></div>
                </div>
                <div class=\"index-5-right-flex-right\">
                    <i class=\"far fa-check-circle\"></i>
                    <div><strong>2070</strong> personnes sont abonnées</div>
                </div>
            </div>
        </div>
    </div>

    </main>

    <div class=\"bubble-question\" id=\"bubble-question\">
        <span class=\"bubble-question-tooltip\">VOUS AVEZ DES QUESTIONS ?</span>
        <div class=\"bubble-question-content\" id=\"bubble-question-content\">
            <div class=\"bubble-question-content-title\">VOUS AVEZ DES QUESTIONS ?</div>
            <div class=\"bubble-question-content-close\" id=\"bubble-question-content-close\">&times;</div>
            <div class=\"bubble-question-container-1\" id=\"bubble-question-container-1\">
                <div class=\"bubble-question-container-1-line bubble-question-container-1-line-1\">
                    Téléphonez-nous :<br>0554 29 35 40
                    <i class=\"fas fa-phone\" aria-hidden></i>
                </div>
                <div class=\"bubble-question-container-1-line bubble-question-container-1-line-2\" id=\"bubble-question-container-1-line-2\">
                    Cliquez ici pour nous<br>laisser un message
                    <i class=\"fas fa-envelope\" aria-hidden></i>
                </div>
            </div>
            <div class=\"bubble-question-container-2\" id=\"bubble-question-container-2\">
                <label for=\"bubble-input-1\">Nom :</label>
                <input type=\"text\" name=\"name\" id=\"bubble-input-1\" autocomplete=\"off\">
                <label for=\"bubble-input-2\">Email :</label>
                <input type=\"text\" name=\"email\" id=\"bubble-input-2\" autocomplete=\"off\">
                <label for=\"bubble-input-3\">Message :</label>
                <textarea name=\"content\" id=\"bubble-input-3\"></textarea>
                <div class=\"bubble-btn\" id=\"bubble-btn\" data-link=\"/asset/core/live-contact.php\">Envoyer</div>
            </div>
        </div>
    </div>

{% endblock %}", "CosanitBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/index.html.twig");
    }
}
