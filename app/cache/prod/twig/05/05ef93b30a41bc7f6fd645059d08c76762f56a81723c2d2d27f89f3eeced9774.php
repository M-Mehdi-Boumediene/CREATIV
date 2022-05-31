<?php

/* CosanitBundle:Default:devis.html.twig */
class __TwigTemplate_a632919d0753ad23c9f40c654f566e61867889cb249f307695e9bb076f02fba5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CosanitBundle:Default:devis.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CosanitBundle:Default:devis.html.twig"));

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

<header class=\"header\" id=\"header\">

    <div class=\"content header-content\">
        <a href=\"index.html\"><img src=\"asset/img/logo.svg\" alt=\"CREATIV\" class=\"header-logo\"></a>

        <nav class=\"nav\">
            <div class=\"nav-item\">
                <span class=\"nav-item-link\">NOTRE SOCIÉTÉ</span>
                <div class=\"nav-item-menu\">
                    <div class=\"nav-item-menu-item\">
                        <a href=\"societe-2.html\" class=\"nav-item-menu-item-link\">Qui sommes nous ?</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"nav-item-menu-item-link\">Où sommes nous ?</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"audit-marketing-gratuit.html\" class=\"nav-item-menu-item-link\">Audit en ligne</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"#\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"societe-2/foire-aux-questions.html\" class=\"nav-item-menu-item-link\">Foire aux questions</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"references/nos-partenaires.html\" class=\"nav-item-menu-item-link\">Nos partenaires</a>
                    </div>
                </div>
            </div>
            <div class=\"nav-item\">
                <a href=\"references.html\" class=\"nav-item-link \">RÉFÉRENCES</a>
            </div>
            <div class=\"nav-item\">
                <span class=\"nav-item-link\">GALERIE</span>
                <div class=\"nav-item-menu\">
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/studio-de-creation.html\" class=\"nav-item-menu-item-link\">Studio de création</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/imprimerie.html\" class=\"nav-item-menu-item-link\">Imprimerie</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/enseignes-habillages.html\" class=\"nav-item-menu-item-link\">Enseignes & habillages</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/marquages-decoration.html\" class=\"nav-item-menu-item-link\">Marquages & décoration</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/marquage-vehicule.html\" class=\"nav-item-menu-item-link\">Marquage véhicule</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/signaletique-panneaux.html\" class=\"nav-item-menu-item-link\">Signalétique & panneaux</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/site-internet.html\" class=\"nav-item-menu-item-link\">Site internet</a>
                    </div>
                </div>
            </div>
            <div class=\"nav-item\">
                <a href=\"nous-contacter.html\" class=\"nav-item-link \">CONTACT</a>
            </div>
        </nav>

        <div class=\"header-socials\">
            <a href=\"https://web.facebook.com/creativ.agence.web\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden></i></a>
            <a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\" aria-hidden></i></a>
        </div>

        <div class=\"header-btn-menu\" id=\"header-btn-menu\">
            <div class=\"header-btn-menu-line-1\"></div>
            <div class=\"header-btn-menu-line-2\"></div>
        </div>

        <div class=\"menu-mobile\">
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Notre société
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <a href=\"societe-2.html\" class=\"menu-mobile-sub-menu-link\">Qui sommes nous ?</a>
                    <a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"menu-mobile-sub-menu-link\">Où sommes nous ?</a>
                    <a href=\"audit-marketing-gratuit.html\" class=\"menu-mobile-sub-menu-link\">Audit en ligne</a>
                    <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
                    <a href=\"#\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
                    <a href=\"societe-2/foire-aux-questions.html\" class=\"menu-mobile-sub-menu-link\">Foire aux questions</a>
                    <a href=\"references/nos-partenaires.html\" class=\"menu-mobile-sub-menu-link\">Nos partenaires</a>
                </div>
            </div>
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Nos produits
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Création
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/agence-de-communication-publicite-nord.html\" class=\"menu-mobile-sub-menu-link\">Notre stratégie</a>
                            <a href=\"produits-3/agence-de-communication-publicite-nord/creation-de-logo-gratuit.html\" class=\"menu-mobile-sub-menu-link\">Création de logo</a>
                            <a href=\"produits-3/agence-de-communication-publicite-nord/charte-graphique-refonte-logo.html\" class=\"menu-mobile-sub-menu-link\">Charte graphique</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Imprimerie
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/imprimerie.html\" class=\"menu-mobile-sub-menu-link\">Imprimerie</a>
                            <a href=\"produits-3/imprimerie/carte-de-visite.html\" class=\"menu-mobile-sub-menu-link\">Carte de visite</a>
                            <a href=\"produits-3/imprimerie/office-papeterie.html\" class=\"menu-mobile-sub-menu-link\">Office / Papeterie</a>
                            <a href=\"produits-3/imprimerie/flyer-depliant.html\" class=\"menu-mobile-sub-menu-link\">Flyer / Dépliant</a>
                            <a href=\"produits-3/imprimerie/plaquette-commerciale.html\" class=\"menu-mobile-sub-menu-link\">Plaquette commerciale</a>
                            <a href=\"produits-3/imprimerie/brochure.html\" class=\"menu-mobile-sub-menu-link\">Brochure</a>
                            <a href=\"produits-3/imprimerie/hotel-restaurant.html\" class=\"menu-mobile-sub-menu-link\">Hôtel restaurant</a>
                            <a href=\"produits-3/imprimerie/affiche.html\" class=\"menu-mobile-sub-menu-link\">Affiche</a>
                            <a href=\"produits-3/imprimerie/autocopiant.html\" class=\"menu-mobile-sub-menu-link\">Autocopiant</a>
                            <a href=\"produits-3/imprimerie/blocs-post-it-sous-mains.html\" class=\"menu-mobile-sub-menu-link\">Blocs / Post-it / Sous-mains</a>
                            <a href=\"produits-3/imprimerie/calendrier-agenda.html\" class=\"menu-mobile-sub-menu-link\">Calendrier / Agenda</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Enseigne & habillage
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/enseignes-habillages/enseigne-bandeau-2.html\" class=\"menu-mobile-sub-menu-link\">Enseigne bandeau</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-drapeau.html\" class=\"menu-mobile-sub-menu-link\">Enseigne drapeau (caisson)</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-toit.html\" class=\"menu-mobile-sub-menu-link\">Enseigne de toit</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-lumineuse-magasin.html\" class=\"menu-mobile-sub-menu-link\">Enseigne et éclairage</a>
                            <a href=\"produits-3/enseignes-habillages/eclairage-leds.html\" class=\"menu-mobile-sub-menu-link\">Éclairage leds</a>
                            <a href=\"produits-3/enseignes-habillages/habillage-de-facade.html\" class=\"menu-mobile-sub-menu-link\">Habillage de façade</a>
                            <a href=\"produits-3/enseignes-habillages.html\" class=\"menu-mobile-sub-menu-link\">Enseigne et habillage</a>
                            <a href=\"produits-3/enseigne-corporative-croix-pharmacie.html\" class=\"menu-mobile-sub-menu-link\">Enseigne corporative</a>
                            <a href=\"produits-3/enseignes-habillages/lettres-decoupees-enseignes.html\" class=\"menu-mobile-sub-menu-link\">Lettres découpées</a>
                            <a href=\"produits-3/enseignes-habillages/lettres-boitiers-enseignes.html\" class=\"menu-mobile-sub-menu-link\">Lettres boîtiers</a>
                            <a href=\"produits-3/enseignes-habillages/store-banne-magasin.html\" class=\"menu-mobile-sub-menu-link\">Store banne</a>
                            <a href=\"produits-3/enseignes-habillages/depannage-et-maintenance.html\" class=\"menu-mobile-sub-menu-link\">Dépannage et maintenance</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Marquage
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vehicule.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration véhicule</a>
                            <a href=\"produits-3/marquage-decoration/lettrage-total-et-semi-covering.html\" class=\"menu-mobile-sub-menu-link\">Lettrage véhicule / covering</a>
                            <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vitrines.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration vitrines</a>
                            <a href=\"produits-3/marquage-decoration/decoration-de-remorques-lettrage.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration de remorques</a>
                            <a href=\"produits-3/marquage-decoration/decoration-interieur-stickers-autocollant.html\" class=\"menu-mobile-sub-menu-link\">Stickers et décoration</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Signalétique
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/signaletique-panneaux/panneaux-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Panneaux</a>
                            <a href=\"produits-3/signaletique-panneaux/4x3-et-pre-enseigne.html\" class=\"menu-mobile-sub-menu-link\">4x3 et pré-enseigne</a>
                            <a href=\"produits-3/signaletique-panneaux/plaques-professionnelles-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Plaques professionnelles</a>
                            <a href=\"produits-3/signaletique-panneaux/mats-bi-mats.html\" class=\"menu-mobile-sub-menu-link\">Mâts / bi-mâts</a>
                            <a href=\"produits-3/signaletique-panneaux/totems.html\" class=\"menu-mobile-sub-menu-link\">Totems</a>
                            <a href=\"produits-3/signaletique-panneaux/caissons.html\" class=\"menu-mobile-sub-menu-link\">Caissons</a>
                            <a href=\"produits-3/signaletique-panneaux/signaletique-interieure.html\" class=\"menu-mobile-sub-menu-link\">Signalétique intérieure</a>
                            <a href=\"produits-3/signaletique-panneaux/stop-trottoir-chevalet.html\" class=\"menu-mobile-sub-menu-link\">Stop trottoir</a>
                            <a href=\"produits-3/covid-19.html\" class=\"menu-mobile-sub-menu-link\">Produits COVID-19</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Salon
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/stands-portatif-roll-up.html\" class=\"menu-mobile-sub-menu-link\">Stands</a>
                            <a href=\"produits-3/enrouleurs.html\" class=\"menu-mobile-sub-menu-link\">Enrouleurs</a>
                            <a href=\"produits-3/salon-evenement-totems.html\" class=\"menu-mobile-sub-menu-link\">Totems</a>
                            <a href=\"produits-3/drapeaux.html\" class=\"menu-mobile-sub-menu-link\">Drapeaux</a>
                            <a href=\"produits-3/outdoor.html\" class=\"menu-mobile-sub-menu-link\">Outdoor</a>
                            <a href=\"produits-3/plv-signaletique.html\" class=\"menu-mobile-sub-menu-link\">PLV / signalétique</a>
                            <a href=\"produits-3/comptoirs.html\" class=\"menu-mobile-sub-menu-link\">Comptoirs</a>
                            <a href=\"produits-3/murs-images.html\" class=\"menu-mobile-sub-menu-link\">Murs d’images</a>
                            <a href=\"produits-3/billetterie-ticket.html\" class=\"menu-mobile-sub-menu-link\">Billetterie / ticket</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Affiches
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/marquage-decoration/kits-adhesifs.html\" class=\"menu-mobile-sub-menu-link\">Adhésifs découpés</a>
                            <a href=\"produits-3/stands-portatif-roll-up/adhesifs-imprimes.html\" class=\"menu-mobile-sub-menu-link\">Adhésifs imprimés</a>
                            <a href=\"produits-3/stands-portatif-roll-up/affiches.html\" class=\"menu-mobile-sub-menu-link\">Affiches</a>
                            <a href=\"produits-3/stands-portatif-roll-up/baches.html\" class=\"menu-mobile-sub-menu-link\">Bâches</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Site internet
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/site-internet.html\" class=\"menu-mobile-sub-menu-link\">Site internet</a>
                            <a href=\"produits-3/site-internet/creation-site-vitrine.html\" class=\"menu-mobile-sub-menu-link\">Site vitrine</a>
                            <a href=\"produits-3/site-internet/creation-site-catalogue.html\" class=\"menu-mobile-sub-menu-link\">Site catalogue</a>
                            <a href=\"produits-3/site-internet/developpement-site-e-commerce.html\" class=\"menu-mobile-sub-menu-link\">Site e-commerce</a>
                            <a href=\"produits-3/site-internet/referencement-seo.html\" class=\"menu-mobile-sub-menu-link\">Référencement SEO</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Accessoires
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/accessoires-objets-publicitaires/tampons.html\" class=\"menu-mobile-sub-menu-link\">Tampons</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Stylos publicitaires</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/clefs-usb.html\" class=\"menu-mobile-sub-menu-link\">Clefs USB</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/porte-clefs.html\" class=\"menu-mobile-sub-menu-link\">Porte clefs</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/etiquettes-adhesive-stickers.html\" class=\"menu-mobile-sub-menu-link\">Etiquettes divers</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/sacs-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Sacs publicitaires</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Packaging
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/packaging.html\" class=\"menu-mobile-sub-menu-link\">Packaging</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"references.html\" class=\"menu-mobile-link\">Références</a>
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Galerie
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <a href=\"galerie/studio-de-creation.html\" class=\"menu-mobile-sub-menu-link\">Studio de création</a>
                    <a href=\"galerie/imprimerie.html\" class=\"menu-mobile-sub-menu-link\">Imprimerie</a>
                    <a href=\"galerie/enseignes-habillages.html\" class=\"menu-mobile-sub-menu-link\">Enseignes & habillages</a>
                    <a href=\"galerie/marquages-decoration.html\" class=\"menu-mobile-sub-menu-link\">Marquages & décoration</a>
                    <a href=\"galerie/marquage-vehicule.html\" class=\"menu-mobile-sub-menu-link\">Marquage véhicule</a>
                    <a href=\"galerie/signaletique-panneaux.html\" class=\"menu-mobile-sub-menu-link\">Signalétique & panneaux</a>
                    <a href=\"galerie/site-internet.html\" class=\"menu-mobile-sub-menu-link\">Site internet</a>
                </div>
            </div>
            <a href=\"nous-contacter.html\" class=\"menu-mobile-link\">Contact</a>
        </div>
    </div>

    <div class=\"menu\">
        <div class=\"content\">
            <div class=\"menu-items\">
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Création</div>
                    <div class=\"menu-item-sub menu-item-sub-01\">
                        <a href=\"produits-3/agence-de-communication-publicite-nord.html\" class=\"menu-item-sub-link\">Notre stratégie</a>
                        <a href=\"produits-3/agence-de-communication-publicite-nord/creation-de-logo-gratuit.html\" class=\"menu-item-sub-link\">Création de logo</a>
                        <a href=\"produits-3/agence-de-communication-publicite-nord/charte-graphique-refonte-logo.html\" class=\"menu-item-sub-link\">Charte graphique</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Imprimerie</div>
                    <div class=\"menu-item-sub menu-item-sub-02\">
                        <a href=\"produits-3/imprimerie.html\" class=\"menu-item-sub-link\">Imprimerie</a>
                        <a href=\"produits-3/imprimerie/carte-de-visite.html\" class=\"menu-item-sub-link\">Carte de visite</a>
                        <a href=\"produits-3/imprimerie/office-papeterie.html\" class=\"menu-item-sub-link\">Office / Papeterie</a>
                        <a href=\"produits-3/imprimerie/flyer-depliant.html\" class=\"menu-item-sub-link\">Flyer / Dépliant</a>
                        <a href=\"produits-3/imprimerie/plaquette-commerciale.html\" class=\"menu-item-sub-link\">Plaquette commerciale</a>
                        <a href=\"produits-3/imprimerie/brochure.html\" class=\"menu-item-sub-link\">Brochure</a>
                        <a href=\"produits-3/imprimerie/hotel-restaurant.html\" class=\"menu-item-sub-link\">Hôtel restaurant</a>
                        <a href=\"produits-3/imprimerie/affiche.html\" class=\"menu-item-sub-link\">Affiche</a>
                        <a href=\"produits-3/imprimerie/autocopiant.html\" class=\"menu-item-sub-link\">Autocopiant</a>
                        <a href=\"produits-3/imprimerie/blocs-post-it-sous-mains.html\" class=\"menu-item-sub-link\">Blocs / Post-it / Sous-mains</a>
                        <a href=\"produits-3/imprimerie/calendrier-agenda.html\" class=\"menu-item-sub-link\">Calendrier / Agenda</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Enseigne & habillage</div>
                    <div class=\"menu-item-sub menu-item-sub-03\">
                        <a href=\"produits-3/enseignes-habillages/enseigne-bandeau-2.html\" class=\"menu-item-sub-link\">Enseigne bandeau</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-drapeau.html\" class=\"menu-item-sub-link\">Enseigne drapeau (caisson)</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-toit.html\" class=\"menu-item-sub-link\">Enseigne de toit</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-lumineuse-magasin.html\" class=\"menu-item-sub-link\">Enseigne et éclairage</a>
                        <a href=\"produits-3/enseignes-habillages/eclairage-leds.html\" class=\"menu-item-sub-link\">Éclairage leds</a>
                        <a href=\"produits-3/enseignes-habillages/habillage-de-facade.html\" class=\"menu-item-sub-link\">Habillage de façade</a>
                        <a href=\"produits-3/enseignes-habillages.html\" class=\"menu-item-sub-link\">Enseigne et habillage</a>
                        <a href=\"produits-3/enseigne-corporative-croix-pharmacie.html\" class=\"menu-item-sub-link\">Enseigne corporative</a>
                        <a href=\"produits-3/enseignes-habillages/lettres-decoupees-enseignes.html\" class=\"menu-item-sub-link\">Lettres découpées</a>
                        <a href=\"produits-3/enseignes-habillages/lettres-boitiers-enseignes.html\" class=\"menu-item-sub-link\">Lettres boîtiers</a>
                        <a href=\"produits-3/enseignes-habillages/store-banne-magasin.html\" class=\"menu-item-sub-link\">Store banne</a>
                        <a href=\"produits-3/enseignes-habillages/depannage-et-maintenance.html\" class=\"menu-item-sub-link\">Dépannage et maintenance</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Marquage</div>
                    <div class=\"menu-item-sub menu-item-sub-04\">
                        <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vehicule.html\" class=\"menu-item-sub-link\">Lettrage et décoration véhicule</a>
                        <a href=\"produits-3/marquage-decoration/lettrage-total-et-semi-covering.html\" class=\"menu-item-sub-link\">Lettrage véhicule / covering</a>
                        <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vitrines.html\" class=\"menu-item-sub-link\">Lettrage et décoration vitrines</a>
                        <a href=\"produits-3/marquage-decoration/decoration-de-remorques-lettrage.html\" class=\"menu-item-sub-link\">Lettrage et décoration de remorques</a>
                        <a href=\"produits-3/marquage-decoration/decoration-interieur-stickers-autocollant.html\" class=\"menu-item-sub-link\">Stickers et décoration</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Signalétique</div>
                    <div class=\"menu-item-sub menu-item-sub-05\">
                        <a href=\"produits-3/signaletique-panneaux/panneaux-publicitaires.html\" class=\"menu-item-sub-link\">Panneaux</a>
                        <a href=\"produits-3/signaletique-panneaux/4x3-et-pre-enseigne.html\" class=\"menu-item-sub-link\">4x3 et pré-enseigne</a>
                        <a href=\"produits-3/signaletique-panneaux/plaques-professionnelles-publicitaires.html\" class=\"menu-item-sub-link\">Plaques professionnelles</a>
                        <a href=\"produits-3/signaletique-panneaux/mats-bi-mats.html\" class=\"menu-item-sub-link\">Mâts / bi-mâts</a>
                        <a href=\"produits-3/signaletique-panneaux/totems.html\" class=\"menu-item-sub-link\">Totems</a>
                        <a href=\"produits-3/signaletique-panneaux/caissons.html\" class=\"menu-item-sub-link\">Caissons</a>
                        <a href=\"produits-3/signaletique-panneaux/signaletique-interieure.html\" class=\"menu-item-sub-link\">Signalétique intérieure</a>
                        <a href=\"produits-3/signaletique-panneaux/stop-trottoir-chevalet.html\" class=\"menu-item-sub-link\">Stop trottoir</a>
                        <a href=\"produits-3/covid-19.html\" class=\"menu-item-sub-link\">Produits COVID-19</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Salon</div>
                    <div class=\"menu-item-sub menu-item-sub-06\">
                        <a href=\"produits-3/stands-portatif-roll-up.html\" class=\"menu-item-sub-link\">Stands</a>
                        <a href=\"produits-3/enrouleurs.html\" class=\"menu-item-sub-link\">Enrouleurs</a>
                        <a href=\"produits-3/salon-evenement-totems.html\" class=\"menu-item-sub-link\">Totems</a>
                        <a href=\"produits-3/drapeaux.html\" class=\"menu-item-sub-link\">Drapeaux</a>
                        <a href=\"produits-3/outdoor.html\" class=\"menu-item-sub-link\">Outdoor</a>
                        <a href=\"produits-3/plv-signaletique.html\" class=\"menu-item-sub-link\">PLV / signalétique</a>
                        <a href=\"produits-3/comptoirs.html\" class=\"menu-item-sub-link\">Comptoirs</a>
                        <a href=\"produits-3/murs-images.html\" class=\"menu-item-sub-link\">Murs d’images</a>
                        <a href=\"produits-3/billetterie-ticket.html\" class=\"menu-item-sub-link\">Billetterie / ticket</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Affiches</div>
                    <div class=\"menu-item-sub menu-item-sub-07\">
                        <a href=\"produits-3/marquage-decoration/kits-adhesifs.html\" class=\"menu-item-sub-link\">Adhésifs découpés</a>
                        <a href=\"produits-3/stands-portatif-roll-up/adhesifs-imprimes.html\" class=\"menu-item-sub-link\">Adhésifs imprimés</a>
                        <a href=\"produits-3/stands-portatif-roll-up/affiches.html\" class=\"menu-item-sub-link\">Affiches</a>
                        <a href=\"produits-3/stands-portatif-roll-up/baches.html\" class=\"menu-item-sub-link\">Bâches</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Site internet</div>
                    <div class=\"menu-item-sub menu-item-sub-08\">
                        <a href=\"produits-3/site-internet.html\" class=\"menu-item-sub-link\">Site internet</a>
                        <a href=\"produits-3/site-internet/creation-site-vitrine.html\" class=\"menu-item-sub-link\">Site vitrine</a>
                        <a href=\"produits-3/site-internet/creation-site-catalogue.html\" class=\"menu-item-sub-link\">Site catalogue</a>
                        <a href=\"produits-3/site-internet/developpement-site-e-commerce.html\" class=\"menu-item-sub-link\">Site e-commerce</a>
                        <a href=\"produits-3/site-internet/referencement-seo.html\" class=\"menu-item-sub-link\">Référencement SEO</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Accessoires</div>
                    <div class=\"menu-item-sub menu-item-sub-09\">
                        <a href=\"produits-3/accessoires-objets-publicitaires/tampons.html\" class=\"menu-item-sub-link\">Tampons</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"menu-item-sub-link\">Stylos publicitaires</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/clefs-usb.html\" class=\"menu-item-sub-link\">Clefs USB</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/porte-clefs.html\" class=\"menu-item-sub-link\">Porte clefs</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/etiquettes-adhesive-stickers.html\" class=\"menu-item-sub-link\">Etiquettes divers</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/sacs-publicitaires.html\" class=\"menu-item-sub-link\">Sacs publicitaires</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Packaging</div>
                    <div class=\"menu-item-sub menu-item-sub-10\">
                        <a href=\"produits-3/packaging.html\" class=\"menu-item-sub-link\">Packaging</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class=\"header-overflow\" id=\"header-overflow\"></div>
<main>
    <div class=\"content\">
        <div class=\"website_title\">Quel prix pour un site internet professionnel ? </div>
        <div class=\"website_etape-content\">
            <div class=\"website_etape\" id=\"website_etape\">Site internet</div>
        </div>
        <div class=\"website\" id=\"website\">
            <div class=\"website_type\" id=\"website_type\">
                <div class=\"website_type-title\">Quel type de site internet souhaitez-vous ?</div>
                <div id=\"website_type-items\">
                <a href=\"";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_devisid", array("id" => "vitrine"));
        echo "\">
                    <div class=\"website_type-item\" data-id=\"1\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Site vitrine : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site internet “clé en main”<br /> Qualité, originalité, design actuel et surtout hébergement sécurisé tels sont les objectifs que nous nous fixons au quotidien pour satisfaire nos clients. Notre studio graphique,
                            fort de son expérience en création web et conception de sites depuis plusieurs années, vous offrira un site au design soigné, basé sur votre identité visuelle et optimisé pour votre activité. Pour plus de confort, nous gérons
                            en interne le développement et l'hébergement de votre site pour un service totalement “clé en main” ! </div>
                    </div>
                </a>


                    <div class=\"website_type-item\" data-id=\"2\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Site e-commerce : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site e-commerce “clé en main”<br /> Un site e-commerce est un site internet qui permet de créer sa boutique en ligne et de proposer ses produits et services directement à la vente avec paiement en ligne. Il permet
                            soit de compléter votre activité, soit de vous lancer directement sur le web en pure-player ! </div>
                    </div>

                    <div class=\"website_type-item\" data-id=\"3\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Application web : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site e-commerce “clé en main”<br /> Un site e-commerce est un site internet qui permet de créer sa boutique en ligne et de proposer ses produits et services directement à la vente avec paiement en ligne. Il permet
                            soit de compléter votre activité, soit de vous lancer directement sur le web en pure-player ! </div>
                    </div>

                </div>


            </div>

            <div class=\"website_end\" id=\"website_end\">
                <div class=\"website_end-title\">Voici l’estimation tarifaire pour la création de votre site web : Site vitrine</div>
                <div class=\"website_end-table-content\">
                    <table class=\"website_end-table\" id=\"website_end-table\"></table>
                </div>
                <div class=\"website_end-price\">TOTAL HT : <span id=\"website_end-price\"></span> euros</div>
            </div>


        </div>
    </div>

</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CosanitBundle:Default:devis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 409,  97 => 9,  91 => 8,  84 => 7,  78 => 6,  70 => 4,  64 => 3,  53 => 2,  15 => 1,);
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


<header class=\"header\" id=\"header\">

    <div class=\"content header-content\">
        <a href=\"index.html\"><img src=\"asset/img/logo.svg\" alt=\"CREATIV\" class=\"header-logo\"></a>

        <nav class=\"nav\">
            <div class=\"nav-item\">
                <span class=\"nav-item-link\">NOTRE SOCIÉTÉ</span>
                <div class=\"nav-item-menu\">
                    <div class=\"nav-item-menu-item\">
                        <a href=\"societe-2.html\" class=\"nav-item-menu-item-link\">Qui sommes nous ?</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"nav-item-menu-item-link\">Où sommes nous ?</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"audit-marketing-gratuit.html\" class=\"nav-item-menu-item-link\">Audit en ligne</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"#\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"societe-2/foire-aux-questions.html\" class=\"nav-item-menu-item-link\">Foire aux questions</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"references/nos-partenaires.html\" class=\"nav-item-menu-item-link\">Nos partenaires</a>
                    </div>
                </div>
            </div>
            <div class=\"nav-item\">
                <a href=\"references.html\" class=\"nav-item-link \">RÉFÉRENCES</a>
            </div>
            <div class=\"nav-item\">
                <span class=\"nav-item-link\">GALERIE</span>
                <div class=\"nav-item-menu\">
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/studio-de-creation.html\" class=\"nav-item-menu-item-link\">Studio de création</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/imprimerie.html\" class=\"nav-item-menu-item-link\">Imprimerie</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/enseignes-habillages.html\" class=\"nav-item-menu-item-link\">Enseignes & habillages</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/marquages-decoration.html\" class=\"nav-item-menu-item-link\">Marquages & décoration</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/marquage-vehicule.html\" class=\"nav-item-menu-item-link\">Marquage véhicule</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/signaletique-panneaux.html\" class=\"nav-item-menu-item-link\">Signalétique & panneaux</a>
                    </div>
                    <div class=\"nav-item-menu-item\">
                        <a href=\"galerie/site-internet.html\" class=\"nav-item-menu-item-link\">Site internet</a>
                    </div>
                </div>
            </div>
            <div class=\"nav-item\">
                <a href=\"nous-contacter.html\" class=\"nav-item-link \">CONTACT</a>
            </div>
        </nav>

        <div class=\"header-socials\">
            <a href=\"https://web.facebook.com/creativ.agence.web\" target=\"_blank\"><i class=\"fab fa-facebook-f\" aria-hidden></i></a>
            <a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\" aria-hidden></i></a>
        </div>

        <div class=\"header-btn-menu\" id=\"header-btn-menu\">
            <div class=\"header-btn-menu-line-1\"></div>
            <div class=\"header-btn-menu-line-2\"></div>
        </div>

        <div class=\"menu-mobile\">
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Notre société
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <a href=\"societe-2.html\" class=\"menu-mobile-sub-menu-link\">Qui sommes nous ?</a>
                    <a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"menu-mobile-sub-menu-link\">Où sommes nous ?</a>
                    <a href=\"audit-marketing-gratuit.html\" class=\"menu-mobile-sub-menu-link\">Audit en ligne</a>
                    <a href=\"https://web.facebook.com/creativ.agence.web\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
                    <a href=\"#\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
                    <a href=\"societe-2/foire-aux-questions.html\" class=\"menu-mobile-sub-menu-link\">Foire aux questions</a>
                    <a href=\"references/nos-partenaires.html\" class=\"menu-mobile-sub-menu-link\">Nos partenaires</a>
                </div>
            </div>
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Nos produits
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Création
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/agence-de-communication-publicite-nord.html\" class=\"menu-mobile-sub-menu-link\">Notre stratégie</a>
                            <a href=\"produits-3/agence-de-communication-publicite-nord/creation-de-logo-gratuit.html\" class=\"menu-mobile-sub-menu-link\">Création de logo</a>
                            <a href=\"produits-3/agence-de-communication-publicite-nord/charte-graphique-refonte-logo.html\" class=\"menu-mobile-sub-menu-link\">Charte graphique</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Imprimerie
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/imprimerie.html\" class=\"menu-mobile-sub-menu-link\">Imprimerie</a>
                            <a href=\"produits-3/imprimerie/carte-de-visite.html\" class=\"menu-mobile-sub-menu-link\">Carte de visite</a>
                            <a href=\"produits-3/imprimerie/office-papeterie.html\" class=\"menu-mobile-sub-menu-link\">Office / Papeterie</a>
                            <a href=\"produits-3/imprimerie/flyer-depliant.html\" class=\"menu-mobile-sub-menu-link\">Flyer / Dépliant</a>
                            <a href=\"produits-3/imprimerie/plaquette-commerciale.html\" class=\"menu-mobile-sub-menu-link\">Plaquette commerciale</a>
                            <a href=\"produits-3/imprimerie/brochure.html\" class=\"menu-mobile-sub-menu-link\">Brochure</a>
                            <a href=\"produits-3/imprimerie/hotel-restaurant.html\" class=\"menu-mobile-sub-menu-link\">Hôtel restaurant</a>
                            <a href=\"produits-3/imprimerie/affiche.html\" class=\"menu-mobile-sub-menu-link\">Affiche</a>
                            <a href=\"produits-3/imprimerie/autocopiant.html\" class=\"menu-mobile-sub-menu-link\">Autocopiant</a>
                            <a href=\"produits-3/imprimerie/blocs-post-it-sous-mains.html\" class=\"menu-mobile-sub-menu-link\">Blocs / Post-it / Sous-mains</a>
                            <a href=\"produits-3/imprimerie/calendrier-agenda.html\" class=\"menu-mobile-sub-menu-link\">Calendrier / Agenda</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Enseigne & habillage
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/enseignes-habillages/enseigne-bandeau-2.html\" class=\"menu-mobile-sub-menu-link\">Enseigne bandeau</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-drapeau.html\" class=\"menu-mobile-sub-menu-link\">Enseigne drapeau (caisson)</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-toit.html\" class=\"menu-mobile-sub-menu-link\">Enseigne de toit</a>
                            <a href=\"produits-3/enseignes-habillages/enseigne-lumineuse-magasin.html\" class=\"menu-mobile-sub-menu-link\">Enseigne et éclairage</a>
                            <a href=\"produits-3/enseignes-habillages/eclairage-leds.html\" class=\"menu-mobile-sub-menu-link\">Éclairage leds</a>
                            <a href=\"produits-3/enseignes-habillages/habillage-de-facade.html\" class=\"menu-mobile-sub-menu-link\">Habillage de façade</a>
                            <a href=\"produits-3/enseignes-habillages.html\" class=\"menu-mobile-sub-menu-link\">Enseigne et habillage</a>
                            <a href=\"produits-3/enseigne-corporative-croix-pharmacie.html\" class=\"menu-mobile-sub-menu-link\">Enseigne corporative</a>
                            <a href=\"produits-3/enseignes-habillages/lettres-decoupees-enseignes.html\" class=\"menu-mobile-sub-menu-link\">Lettres découpées</a>
                            <a href=\"produits-3/enseignes-habillages/lettres-boitiers-enseignes.html\" class=\"menu-mobile-sub-menu-link\">Lettres boîtiers</a>
                            <a href=\"produits-3/enseignes-habillages/store-banne-magasin.html\" class=\"menu-mobile-sub-menu-link\">Store banne</a>
                            <a href=\"produits-3/enseignes-habillages/depannage-et-maintenance.html\" class=\"menu-mobile-sub-menu-link\">Dépannage et maintenance</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Marquage
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vehicule.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration véhicule</a>
                            <a href=\"produits-3/marquage-decoration/lettrage-total-et-semi-covering.html\" class=\"menu-mobile-sub-menu-link\">Lettrage véhicule / covering</a>
                            <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vitrines.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration vitrines</a>
                            <a href=\"produits-3/marquage-decoration/decoration-de-remorques-lettrage.html\" class=\"menu-mobile-sub-menu-link\">Lettrage et décoration de remorques</a>
                            <a href=\"produits-3/marquage-decoration/decoration-interieur-stickers-autocollant.html\" class=\"menu-mobile-sub-menu-link\">Stickers et décoration</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Signalétique
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/signaletique-panneaux/panneaux-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Panneaux</a>
                            <a href=\"produits-3/signaletique-panneaux/4x3-et-pre-enseigne.html\" class=\"menu-mobile-sub-menu-link\">4x3 et pré-enseigne</a>
                            <a href=\"produits-3/signaletique-panneaux/plaques-professionnelles-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Plaques professionnelles</a>
                            <a href=\"produits-3/signaletique-panneaux/mats-bi-mats.html\" class=\"menu-mobile-sub-menu-link\">Mâts / bi-mâts</a>
                            <a href=\"produits-3/signaletique-panneaux/totems.html\" class=\"menu-mobile-sub-menu-link\">Totems</a>
                            <a href=\"produits-3/signaletique-panneaux/caissons.html\" class=\"menu-mobile-sub-menu-link\">Caissons</a>
                            <a href=\"produits-3/signaletique-panneaux/signaletique-interieure.html\" class=\"menu-mobile-sub-menu-link\">Signalétique intérieure</a>
                            <a href=\"produits-3/signaletique-panneaux/stop-trottoir-chevalet.html\" class=\"menu-mobile-sub-menu-link\">Stop trottoir</a>
                            <a href=\"produits-3/covid-19.html\" class=\"menu-mobile-sub-menu-link\">Produits COVID-19</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Salon
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/stands-portatif-roll-up.html\" class=\"menu-mobile-sub-menu-link\">Stands</a>
                            <a href=\"produits-3/enrouleurs.html\" class=\"menu-mobile-sub-menu-link\">Enrouleurs</a>
                            <a href=\"produits-3/salon-evenement-totems.html\" class=\"menu-mobile-sub-menu-link\">Totems</a>
                            <a href=\"produits-3/drapeaux.html\" class=\"menu-mobile-sub-menu-link\">Drapeaux</a>
                            <a href=\"produits-3/outdoor.html\" class=\"menu-mobile-sub-menu-link\">Outdoor</a>
                            <a href=\"produits-3/plv-signaletique.html\" class=\"menu-mobile-sub-menu-link\">PLV / signalétique</a>
                            <a href=\"produits-3/comptoirs.html\" class=\"menu-mobile-sub-menu-link\">Comptoirs</a>
                            <a href=\"produits-3/murs-images.html\" class=\"menu-mobile-sub-menu-link\">Murs d’images</a>
                            <a href=\"produits-3/billetterie-ticket.html\" class=\"menu-mobile-sub-menu-link\">Billetterie / ticket</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Affiches
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/marquage-decoration/kits-adhesifs.html\" class=\"menu-mobile-sub-menu-link\">Adhésifs découpés</a>
                            <a href=\"produits-3/stands-portatif-roll-up/adhesifs-imprimes.html\" class=\"menu-mobile-sub-menu-link\">Adhésifs imprimés</a>
                            <a href=\"produits-3/stands-portatif-roll-up/affiches.html\" class=\"menu-mobile-sub-menu-link\">Affiches</a>
                            <a href=\"produits-3/stands-portatif-roll-up/baches.html\" class=\"menu-mobile-sub-menu-link\">Bâches</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Site internet
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/site-internet.html\" class=\"menu-mobile-sub-menu-link\">Site internet</a>
                            <a href=\"produits-3/site-internet/creation-site-vitrine.html\" class=\"menu-mobile-sub-menu-link\">Site vitrine</a>
                            <a href=\"produits-3/site-internet/creation-site-catalogue.html\" class=\"menu-mobile-sub-menu-link\">Site catalogue</a>
                            <a href=\"produits-3/site-internet/developpement-site-e-commerce.html\" class=\"menu-mobile-sub-menu-link\">Site e-commerce</a>
                            <a href=\"produits-3/site-internet/referencement-seo.html\" class=\"menu-mobile-sub-menu-link\">Référencement SEO</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Accessoires
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/accessoires-objets-publicitaires/tampons.html\" class=\"menu-mobile-sub-menu-link\">Tampons</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Stylos publicitaires</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/clefs-usb.html\" class=\"menu-mobile-sub-menu-link\">Clefs USB</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/porte-clefs.html\" class=\"menu-mobile-sub-menu-link\">Porte clefs</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/etiquettes-adhesive-stickers.html\" class=\"menu-mobile-sub-menu-link\">Etiquettes divers</a>
                            <a href=\"produits-3/accessoires-objets-publicitaires/sacs-publicitaires.html\" class=\"menu-mobile-sub-menu-link\">Sacs publicitaires</a>
                        </div>
                    </div>
                    <div class=\"menu-mobile-sub\">
                        <div class=\"menu-mobile-sub-title\">
                            Packaging
                            <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                        </div>
                        <div class=\"menu-mobile-sub-menu\">
                            <a href=\"produits-3/packaging.html\" class=\"menu-mobile-sub-menu-link\">Packaging</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"references.html\" class=\"menu-mobile-link\">Références</a>
            <div class=\"menu-mobile-sub\">
                <div class=\"menu-mobile-sub-title\">
                    Galerie
                    <div class=\"menu-mobile-sub-title-icon\"><i class=\"fas fa-plus\"></i></div>
                </div>
                <div class=\"menu-mobile-sub-menu\">
                    <a href=\"galerie/studio-de-creation.html\" class=\"menu-mobile-sub-menu-link\">Studio de création</a>
                    <a href=\"galerie/imprimerie.html\" class=\"menu-mobile-sub-menu-link\">Imprimerie</a>
                    <a href=\"galerie/enseignes-habillages.html\" class=\"menu-mobile-sub-menu-link\">Enseignes & habillages</a>
                    <a href=\"galerie/marquages-decoration.html\" class=\"menu-mobile-sub-menu-link\">Marquages & décoration</a>
                    <a href=\"galerie/marquage-vehicule.html\" class=\"menu-mobile-sub-menu-link\">Marquage véhicule</a>
                    <a href=\"galerie/signaletique-panneaux.html\" class=\"menu-mobile-sub-menu-link\">Signalétique & panneaux</a>
                    <a href=\"galerie/site-internet.html\" class=\"menu-mobile-sub-menu-link\">Site internet</a>
                </div>
            </div>
            <a href=\"nous-contacter.html\" class=\"menu-mobile-link\">Contact</a>
        </div>
    </div>

    <div class=\"menu\">
        <div class=\"content\">
            <div class=\"menu-items\">
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Création</div>
                    <div class=\"menu-item-sub menu-item-sub-01\">
                        <a href=\"produits-3/agence-de-communication-publicite-nord.html\" class=\"menu-item-sub-link\">Notre stratégie</a>
                        <a href=\"produits-3/agence-de-communication-publicite-nord/creation-de-logo-gratuit.html\" class=\"menu-item-sub-link\">Création de logo</a>
                        <a href=\"produits-3/agence-de-communication-publicite-nord/charte-graphique-refonte-logo.html\" class=\"menu-item-sub-link\">Charte graphique</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Imprimerie</div>
                    <div class=\"menu-item-sub menu-item-sub-02\">
                        <a href=\"produits-3/imprimerie.html\" class=\"menu-item-sub-link\">Imprimerie</a>
                        <a href=\"produits-3/imprimerie/carte-de-visite.html\" class=\"menu-item-sub-link\">Carte de visite</a>
                        <a href=\"produits-3/imprimerie/office-papeterie.html\" class=\"menu-item-sub-link\">Office / Papeterie</a>
                        <a href=\"produits-3/imprimerie/flyer-depliant.html\" class=\"menu-item-sub-link\">Flyer / Dépliant</a>
                        <a href=\"produits-3/imprimerie/plaquette-commerciale.html\" class=\"menu-item-sub-link\">Plaquette commerciale</a>
                        <a href=\"produits-3/imprimerie/brochure.html\" class=\"menu-item-sub-link\">Brochure</a>
                        <a href=\"produits-3/imprimerie/hotel-restaurant.html\" class=\"menu-item-sub-link\">Hôtel restaurant</a>
                        <a href=\"produits-3/imprimerie/affiche.html\" class=\"menu-item-sub-link\">Affiche</a>
                        <a href=\"produits-3/imprimerie/autocopiant.html\" class=\"menu-item-sub-link\">Autocopiant</a>
                        <a href=\"produits-3/imprimerie/blocs-post-it-sous-mains.html\" class=\"menu-item-sub-link\">Blocs / Post-it / Sous-mains</a>
                        <a href=\"produits-3/imprimerie/calendrier-agenda.html\" class=\"menu-item-sub-link\">Calendrier / Agenda</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Enseigne & habillage</div>
                    <div class=\"menu-item-sub menu-item-sub-03\">
                        <a href=\"produits-3/enseignes-habillages/enseigne-bandeau-2.html\" class=\"menu-item-sub-link\">Enseigne bandeau</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-drapeau.html\" class=\"menu-item-sub-link\">Enseigne drapeau (caisson)</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-toit.html\" class=\"menu-item-sub-link\">Enseigne de toit</a>
                        <a href=\"produits-3/enseignes-habillages/enseigne-lumineuse-magasin.html\" class=\"menu-item-sub-link\">Enseigne et éclairage</a>
                        <a href=\"produits-3/enseignes-habillages/eclairage-leds.html\" class=\"menu-item-sub-link\">Éclairage leds</a>
                        <a href=\"produits-3/enseignes-habillages/habillage-de-facade.html\" class=\"menu-item-sub-link\">Habillage de façade</a>
                        <a href=\"produits-3/enseignes-habillages.html\" class=\"menu-item-sub-link\">Enseigne et habillage</a>
                        <a href=\"produits-3/enseigne-corporative-croix-pharmacie.html\" class=\"menu-item-sub-link\">Enseigne corporative</a>
                        <a href=\"produits-3/enseignes-habillages/lettres-decoupees-enseignes.html\" class=\"menu-item-sub-link\">Lettres découpées</a>
                        <a href=\"produits-3/enseignes-habillages/lettres-boitiers-enseignes.html\" class=\"menu-item-sub-link\">Lettres boîtiers</a>
                        <a href=\"produits-3/enseignes-habillages/store-banne-magasin.html\" class=\"menu-item-sub-link\">Store banne</a>
                        <a href=\"produits-3/enseignes-habillages/depannage-et-maintenance.html\" class=\"menu-item-sub-link\">Dépannage et maintenance</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Marquage</div>
                    <div class=\"menu-item-sub menu-item-sub-04\">
                        <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vehicule.html\" class=\"menu-item-sub-link\">Lettrage et décoration véhicule</a>
                        <a href=\"produits-3/marquage-decoration/lettrage-total-et-semi-covering.html\" class=\"menu-item-sub-link\">Lettrage véhicule / covering</a>
                        <a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vitrines.html\" class=\"menu-item-sub-link\">Lettrage et décoration vitrines</a>
                        <a href=\"produits-3/marquage-decoration/decoration-de-remorques-lettrage.html\" class=\"menu-item-sub-link\">Lettrage et décoration de remorques</a>
                        <a href=\"produits-3/marquage-decoration/decoration-interieur-stickers-autocollant.html\" class=\"menu-item-sub-link\">Stickers et décoration</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Signalétique</div>
                    <div class=\"menu-item-sub menu-item-sub-05\">
                        <a href=\"produits-3/signaletique-panneaux/panneaux-publicitaires.html\" class=\"menu-item-sub-link\">Panneaux</a>
                        <a href=\"produits-3/signaletique-panneaux/4x3-et-pre-enseigne.html\" class=\"menu-item-sub-link\">4x3 et pré-enseigne</a>
                        <a href=\"produits-3/signaletique-panneaux/plaques-professionnelles-publicitaires.html\" class=\"menu-item-sub-link\">Plaques professionnelles</a>
                        <a href=\"produits-3/signaletique-panneaux/mats-bi-mats.html\" class=\"menu-item-sub-link\">Mâts / bi-mâts</a>
                        <a href=\"produits-3/signaletique-panneaux/totems.html\" class=\"menu-item-sub-link\">Totems</a>
                        <a href=\"produits-3/signaletique-panneaux/caissons.html\" class=\"menu-item-sub-link\">Caissons</a>
                        <a href=\"produits-3/signaletique-panneaux/signaletique-interieure.html\" class=\"menu-item-sub-link\">Signalétique intérieure</a>
                        <a href=\"produits-3/signaletique-panneaux/stop-trottoir-chevalet.html\" class=\"menu-item-sub-link\">Stop trottoir</a>
                        <a href=\"produits-3/covid-19.html\" class=\"menu-item-sub-link\">Produits COVID-19</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Salon</div>
                    <div class=\"menu-item-sub menu-item-sub-06\">
                        <a href=\"produits-3/stands-portatif-roll-up.html\" class=\"menu-item-sub-link\">Stands</a>
                        <a href=\"produits-3/enrouleurs.html\" class=\"menu-item-sub-link\">Enrouleurs</a>
                        <a href=\"produits-3/salon-evenement-totems.html\" class=\"menu-item-sub-link\">Totems</a>
                        <a href=\"produits-3/drapeaux.html\" class=\"menu-item-sub-link\">Drapeaux</a>
                        <a href=\"produits-3/outdoor.html\" class=\"menu-item-sub-link\">Outdoor</a>
                        <a href=\"produits-3/plv-signaletique.html\" class=\"menu-item-sub-link\">PLV / signalétique</a>
                        <a href=\"produits-3/comptoirs.html\" class=\"menu-item-sub-link\">Comptoirs</a>
                        <a href=\"produits-3/murs-images.html\" class=\"menu-item-sub-link\">Murs d’images</a>
                        <a href=\"produits-3/billetterie-ticket.html\" class=\"menu-item-sub-link\">Billetterie / ticket</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Affiches</div>
                    <div class=\"menu-item-sub menu-item-sub-07\">
                        <a href=\"produits-3/marquage-decoration/kits-adhesifs.html\" class=\"menu-item-sub-link\">Adhésifs découpés</a>
                        <a href=\"produits-3/stands-portatif-roll-up/adhesifs-imprimes.html\" class=\"menu-item-sub-link\">Adhésifs imprimés</a>
                        <a href=\"produits-3/stands-portatif-roll-up/affiches.html\" class=\"menu-item-sub-link\">Affiches</a>
                        <a href=\"produits-3/stands-portatif-roll-up/baches.html\" class=\"menu-item-sub-link\">Bâches</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Site internet</div>
                    <div class=\"menu-item-sub menu-item-sub-08\">
                        <a href=\"produits-3/site-internet.html\" class=\"menu-item-sub-link\">Site internet</a>
                        <a href=\"produits-3/site-internet/creation-site-vitrine.html\" class=\"menu-item-sub-link\">Site vitrine</a>
                        <a href=\"produits-3/site-internet/creation-site-catalogue.html\" class=\"menu-item-sub-link\">Site catalogue</a>
                        <a href=\"produits-3/site-internet/developpement-site-e-commerce.html\" class=\"menu-item-sub-link\">Site e-commerce</a>
                        <a href=\"produits-3/site-internet/referencement-seo.html\" class=\"menu-item-sub-link\">Référencement SEO</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Accessoires</div>
                    <div class=\"menu-item-sub menu-item-sub-09\">
                        <a href=\"produits-3/accessoires-objets-publicitaires/tampons.html\" class=\"menu-item-sub-link\">Tampons</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"menu-item-sub-link\">Stylos publicitaires</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/clefs-usb.html\" class=\"menu-item-sub-link\">Clefs USB</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/porte-clefs.html\" class=\"menu-item-sub-link\">Porte clefs</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/etiquettes-adhesive-stickers.html\" class=\"menu-item-sub-link\">Etiquettes divers</a>
                        <a href=\"produits-3/accessoires-objets-publicitaires/sacs-publicitaires.html\" class=\"menu-item-sub-link\">Sacs publicitaires</a>
                    </div>
                </div>
                <div class=\"menu-item\">
                    <div class=\"menu-item-link\">Packaging</div>
                    <div class=\"menu-item-sub menu-item-sub-10\">
                        <a href=\"produits-3/packaging.html\" class=\"menu-item-sub-link\">Packaging</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class=\"header-overflow\" id=\"header-overflow\"></div>
<main>
    <div class=\"content\">
        <div class=\"website_title\">Quel prix pour un site internet professionnel ? </div>
        <div class=\"website_etape-content\">
            <div class=\"website_etape\" id=\"website_etape\">Site internet</div>
        </div>
        <div class=\"website\" id=\"website\">
            <div class=\"website_type\" id=\"website_type\">
                <div class=\"website_type-title\">Quel type de site internet souhaitez-vous ?</div>
                <div id=\"website_type-items\">
                <a href=\"{{ path('cosanit_devisid', { 'id': 'vitrine' }) }}\">
                    <div class=\"website_type-item\" data-id=\"1\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Site vitrine : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site internet “clé en main”<br /> Qualité, originalité, design actuel et surtout hébergement sécurisé tels sont les objectifs que nous nous fixons au quotidien pour satisfaire nos clients. Notre studio graphique,
                            fort de son expérience en création web et conception de sites depuis plusieurs années, vous offrira un site au design soigné, basé sur votre identité visuelle et optimisé pour votre activité. Pour plus de confort, nous gérons
                            en interne le développement et l'hébergement de votre site pour un service totalement “clé en main” ! </div>
                    </div>
                </a>


                    <div class=\"website_type-item\" data-id=\"2\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Site e-commerce : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site e-commerce “clé en main”<br /> Un site e-commerce est un site internet qui permet de créer sa boutique en ligne et de proposer ses produits et services directement à la vente avec paiement en ligne. Il permet
                            soit de compléter votre activité, soit de vous lancer directement sur le web en pure-player ! </div>
                    </div>

                    <div class=\"website_type-item\" data-id=\"3\" data-price=\"200\">
                        <div class=\"website_type-item-title\">Application web : Cliquez ICI</div>
                        <div class=\"website_type-item-desc\">Offrez-vous un site e-commerce “clé en main”<br /> Un site e-commerce est un site internet qui permet de créer sa boutique en ligne et de proposer ses produits et services directement à la vente avec paiement en ligne. Il permet
                            soit de compléter votre activité, soit de vous lancer directement sur le web en pure-player ! </div>
                    </div>

                </div>


            </div>

            <div class=\"website_end\" id=\"website_end\">
                <div class=\"website_end-title\">Voici l’estimation tarifaire pour la création de votre site web : Site vitrine</div>
                <div class=\"website_end-table-content\">
                    <table class=\"website_end-table\" id=\"website_end-table\"></table>
                </div>
                <div class=\"website_end-price\">TOTAL HT : <span id=\"website_end-price\"></span> euros</div>
            </div>


        </div>
    </div>

</main>

{% endblock %}", "CosanitBundle:Default:devis.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle/Resources/views/Default/devis.html.twig");
    }
}
