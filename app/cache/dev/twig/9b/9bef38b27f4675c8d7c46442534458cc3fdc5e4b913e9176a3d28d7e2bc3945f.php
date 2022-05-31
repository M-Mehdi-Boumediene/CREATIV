<?php

/* base.html.twig */
class __TwigTemplate_c941a43672ef83dab4169e62d5edc13f5a6292f43833f17a9b042e70d86424ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
            'facebook' => array($this, 'block_facebook'),
            'ldjson' => array($this, 'block_ldjson'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<title>
\t\t\t";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        // line 6
        echo "\t\t</title>
\t\t<meta charset=\"UTF-8\">

\t\t<meta name=\"keywords\" content=\"Création site web Algérie, agence de communication Algérie, agence de publicité Algérie, prix enseigne magasin Algérie, agence de publicité béthune, boite de pub Lens Algérie, création de logo Algérie, creation enseigne publicitaire en ligne Algérie, création de logos gratuit Algérie, créer un logo Algérie, relookage de logo, refonte d'identité Algérie, création de flyers Algérie, flyer Algérie, affiches Algérie, carte commerciale pas cher Algérie, création en ligne Algérie, agence de pub Algérie, agence de communication digitale algérie, agence de développement web algérie , agence de communication algérie, agence événementielle algérie, agence de marketing algérie, boite de communication algérie, entreprise de communication, entreprise de publicité algérie, société de publicité , agence de com algérie, création de site internet Algérie, studio de conception, maquette, logo en ligne, relookage publicité, agence de web algérie, impression pas cher algérie, impression numérique, création d'application web algérie, erp algérie, crm algérie , flyer, flyers, tract, carte, affiches, brochure, carte de visite, plaquette commerciale, pochette à rabats, dépliant publicitaire algérie, menu de restaurant algérie, imprimerie france, devis imprimerie en ligne, tarif imprimerie, devis imprimerie, impression d affiche, impression de flyers, impression prospectus, impression publicitaire, tarif impression, carte de visite pas cher, carte commerciale, tarif impression 62, noeux, calendrier pour entreprise, impression grand format, impression sur toile, bache, flyer pas cher, imprimer en ligne, lettrage adhésif pour voiture, habillage camion, véhicule, installation enseigne magasin, devis en ligne site web algréie, prix site web algerie, développement web algérie, oran, tlemcen, mostaganem, belabes, alger\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
\t\t<meta property=\"og:title\" content=\"CREATIV | Développement web\"/><meta property=\"og:site_name\" content=\"creativdz.com\"/><meta property=\"og:url\" content=\"//www.creativdz.com/\"/><meta property=\"og:type\" content=\"Agence de communication\"/><meta property=\"og:image\" content=\"asset/img/idgraphique.jpg\"/><meta property=\"og:language\" content=\"fr\"/>
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.1.0/css/all.css\" integrity=\"sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style4a7a.css?id=e558a6c2cedb34986798"), "html", null, true);
        echo "\">

\t\t<meta name=\"description\" content=\"";
        // line 15
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
\t\t<meta name=\"theme-color\" content=\"#000\">
\t\t<meta name=\"msapplication-navbutton-color\" content=\"#000\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#000\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

\t\t<script type=\"application/ld+json\">
\t\t\t{
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@context\": \"https://schema.org\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"@type\": \"Organization\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"name\": \"CREATIV\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"logo\": \"https://www.creativdz.com/asset/img/logo.png\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"url\": \"https://www.creativdz.com\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"alternateName\": \"Développement web et communication digitale Algérie\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t,\"description\": \"Confiez la création de votre site web, application, charte graphique, à CREATIV et profitez d'une étude gratuite\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"address\": {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"@type\": \"PostalAddress\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"streetAddress\": \"12 rue Bel hocine rachid Oran\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"postalCode\": \"31000\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"addressLocality\": \"Oran\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        \"addressRegion\": \"Algérie\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \"contactPoint\": [
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"@type\": \"ContactPoint\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"contactType\": \"Customer service\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"telephone\": \"+213 553 04 82 76\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"availableLanguage\": \"French\",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            \"email\": \"contact@creativdz.com\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ]
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t</script>

\t\t<style>
\t\t\t.index-1-bottom-title {
\t\t\t\tposition: relative;
\t\t\t\tfont-weight: 300;
\t\t\t\tfont-size: 16px;
\t\t\t\tcolor: #333333;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 40px 0 0;
\t\t\t}
\t\t\t.header-logo {
\t\t\t\theight: 58px;
\t\t\t}
\t\t\t.header {
\t\t\t\tbackground: black;
\t\t\t}
\t\t\t.menu {
\t\t\t\tbackground: #000;
\t\t\t}
\t\t</style>
\t</head>
\t<body>

\t\t";
        // line 72
        $this->displayBlock('canonical', $context, $blocks);
        // line 73
        echo "\t\t";
        $this->displayBlock('facebook', $context, $blocks);
        // line 74
        echo "

\t\t";
        // line 76
        $this->displayBlock('ldjson', $context, $blocks);
        // line 77
        echo "\t\t<style>
\t\t\t.header .header-main {
\t\t\t\tbackground: transparent;
\t\t\t\tposition: fixed;
\t\t\t}


\t\t\t.fadeInDown {
\t\t\t\tbackground: white;
\t\t\t\tcolor: black;
\t\t\t}

\t\t\t.title-menu {
\t\t\t\tpadding-top: 10px;
\t\t\t\tfont-size: 18px;
\t\t\t\tcolor: white;
\t\t\t\tfont-weight: 100;
\t\t\t\tpadding-bottom: 18px;
\t\t\t\tfont-family: \"Roboto\", Helvetica, Arial, sans-serif;
\t\t\t}

\t\t\t.logo-2 {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.dropdown-menu {
\t\t\t\tbackground: #191919;
\t\t\t}

\t\t\t.bg-secondary {
\t\t\t\tbackground-color: #000;
\t\t\t\tcolor: #ffffff;
\t\t\t}
\t\t\t.read-more-nav {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.btn-wrapper.back-to-top {
\t\t\t\tbottom: 150px;
\t\t\t}
\t\t</style>
\t\t<style>
\t\t\t.header .header-main {
\t\t\t\tbackground: #000000eb !important;
\t\t\t\tposition: fixed;
\t\t\t}
\t\t\t.header-layout-6 .read-more-nav {
\t\t\t\tbackground: #bd3218;
\t\t\t\tmargin-top: -9px;
\t\t\t}
\t\t\t.header.header-fixed .navigation .nav-links li .main-menu,
\t\t\t.header.header-fixed .button-search .main-menu {
\t\t\t\tline-height: 19px;
\t\t\t\tcolor: white !important;
\t\t\t}
\t\t\t.text {
\t\t\t\tfont-size: 14px;
\t\t\t\tfont-weight: 100;
\t\t\t}
\t\t\tlogo-container {
\t\t\t\tpadding: 10px;

\t\t\t}
\t\t\t.preload .logo-container .logo-curtain div {
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tdisplay: block;
\t\t\t\tposition: absolute;
\t\t\t\ttop: 100%;
\t\t\t\tbackground-color: #000000;
\t\t\t}
\t\t\t.preload .logo-container .logo-curtain {
\t\t\t\tposition: absolute;
\t\t\t\tright: 1px;
\t\t\t\tleft: 1px;
\t\t\t\tbottom: 1%;
\t\t\t\ttop: 1px;
\t\t\t\tz-index: 9001;
\t\t\t\toverflow: hidden;
\t\t\t\topacity: 0;
\t\t\t\tbackground-color: #fff;

\t\t\t}


\t\t\t@media only screen and(max-width: 768px) {
\t\t\t\t.hamburger-menu {
\t\t\t\t\tdisplay: inline-block !important;

\t\t\t\t}
\t\t\t\t.read-more-nav {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t\t.logo-1 {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t}
\t\t\t.header-layout-6 .read-more-nav .info-contact a:hover {
\t\t\t\tcolor: white;
\t\t\t}
\t\t\t.header-layout-6 .read-more-nav .socials a:hover {
\t\t\t\tcolor: white;
\t\t\t}
\t\t</style>
\t</body>
</html></head><div id=\"fb-root\"></div><script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0&appId=2426167164288678&autoLogAppEvents=1\"></script><body>
<header class=\"header\" id=\"header\">

\t<div class=\"content header-content\">
\t\t<a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/logo.svg"), "html", null, true);
        echo "\" alt=\"CREATIV développement web\" class=\"header-logo\"></a>

\t\t<nav class=\"nav\">
\t\t\t<div class=\"nav-item\">
\t\t\t\t<span class=\"nav-item-link\">NOTRE SOCIÉTÉ</span>
\t\t\t\t<div class=\"nav-item-menu\">
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"societe-2.html\" class=\"nav-item-menu-item-link\">Qui sommes nous ?</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"nav-item-menu-item-link\">Où sommes nous ?</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"audit-marketing-gratuit.html\" class=\"nav-item-menu-item-link\">Audit en ligne</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"https://web.facebook.com/creativ.agence.web\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"nav-item-menu-item-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"societe-2/foire-aux-questions.html\" class=\"nav-item-menu-item-link\">Foire aux questions</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav-item-menu-item\">
\t\t\t\t\t\t<a href=\"references/nos-partenaires.html\" class=\"nav-item-menu-item-link\">Nos partenaires</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-item\">
\t\t\t\t<a href=\"references.html\" class=\"nav-item-link \">RÉFÉRENCES</a>
\t\t\t</div>

\t\t\t<div class=\"nav-item\">
\t\t\t\t<a href=\"nous-contacter.html\" class=\"nav-item-link \">CONTACT</a>
\t\t\t</div>
\t\t</nav>

\t\t<div class=\"header-socials\">
\t\t\t<a href=\"https://web.facebook.com/creativ.agence.web\" target=\"_blank\">
\t\t\t\t<i class=\"fab fa-facebook-f\" aria-hidden></i>
\t\t\t</a>
\t\t\t<a href=\"#\" target=\"_blank\">
\t\t\t\t<i class=\"fab fa-twitter\" aria-hidden></i>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"header-btn-menu\" id=\"header-btn-menu\">
\t\t\t<div class=\"header-btn-menu-line-1\"></div>
\t\t\t<div class=\"header-btn-menu-line-2\"></div>
\t\t</div>

\t\t<div class=\"menu-mobile\">
\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\tNotre société
\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t<a href=\"societe-2.html\" class=\"menu-mobile-sub-menu-link\">Qui sommes nous ?</a>
\t\t\t\t\t<a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"menu-mobile-sub-menu-link\">Où sommes nous ?</a>
\t\t\t\t\t<a href=\"audit-marketing-gratuit.html\" class=\"menu-mobile-sub-menu-link\">Audit en ligne</a>
\t\t\t\t\t<a href=\"https://web.facebook.com/creativ.agence.web\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Facebook</a>
\t\t\t\t\t<a href=\"#\" class=\"menu-mobile-sub-menu-link\" target=\"_blank\">Suivez-nous sur Twitter</a>
\t\t\t\t\t<a href=\"societe-2/foire-aux-questions.html\" class=\"menu-mobile-sub-menu-link\">Foire aux questions</a>
\t\t\t\t\t<a href=\"references/nos-partenaires.html\" class=\"menu-mobile-sub-menu-link\">Nos partenaires</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\tNos produits
\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Notre stratégie</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Création de logo</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Charte graphique</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Carte de visite</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Flyer / Dépliant</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Affiche</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Packaging</a>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\t\t\tSite internet
\t\t\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site internet</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site vitrine</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site catalogue</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site e-commerce</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Référencement SEO</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Hébergement web</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\t\t\tLogiciel en ligne
\t\t\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Facturation
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion locative
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">ERP</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Caisse
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion commerciale</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">CRM</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion de stock</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\t\t\tPlateforme web
\t\t\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Immobilier</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Médical et Santé</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">hôtellerie et tourisme</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">E-learning / Éducation</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Réstaurants / Salons</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Loisirs / Voyages</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu-mobile-sub\">
\t\t\t\t\t\t<div class=\"menu-mobile-sub-title\">
\t\t\t\t\t\t\tMarketing web
\t\t\t\t\t\t\t<div class=\"menu-mobile-sub-title-icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"menu-mobile-sub-menu\">
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">E-mailing</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Sponsoring réseaux sociaux</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Publicité Google / Youtube</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion des réseaux sociaux</a>
\t\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Mapping / Géolocalisation google</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"references.html\" class=\"menu-mobile-link\">Références</a>

\t\t\t<a href=\"nous-contacter.html\" class=\"menu-mobile-link\">Contact</a>
\t\t</div>
\t</div>

\t<div class=\"menu\">
\t\t<div class=\"content\">
\t\t\t<div class=\"menu-items\">
\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t<div class=\"menu-item-link\">Création</div>
\t\t\t\t\t<div class=\"menu-item-sub menu-item-sub-01\">
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Notre stratégie</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Création de logo</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Charte graphique</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Carte de visite</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Flyer / Dépliant</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Affiche</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Packaging</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t<div class=\"menu-item-link\">Site internet</div>
\t\t\t\t\t<div class=\"menu-item-sub menu-item-sub-08\">
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site internet</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site vitrine</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site catalogue</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Site e-commerce</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Référencement SEO</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Hébergement web</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t<div class=\"menu-item-link\">Logiciel en ligne</div>
\t\t\t\t\t<div class=\"menu-item-sub menu-item-sub-03\">
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Facturation
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion locative
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">ERP</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Caisse
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion commerciale</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">CRM</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion de stock</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t<div class=\"menu-item-link\">Plateforme web</div>
\t\t\t\t\t<div class=\"menu-item-sub menu-item-sub-05\">
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Immobilier</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Médical et Santé</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">hôtellerie et tourisme</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">E-learning / Éducation</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Réstaurants / Salons</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Loisirs / Voyages</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-item\">
\t\t\t\t\t<div class=\"menu-item-link\">Marketing web</div>
\t\t\t\t\t<div class=\"menu-item-sub menu-item-sub-04\">
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">E-mailing</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Sponsoring réseaux sociaux</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Publicité Google / Youtube</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Gestion des réseaux sociaux</a>
\t\t\t\t\t\t<a href=\"\" class=\"menu-item-sub-link\">Mapping / Géolocalisation google</a>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
</header>
<div id=\"app\"> ";
        // line 429
        $this->displayBlock('body', $context, $blocks);
        // line 430
        echo "

\t<footer class=\"footer\">

\t\t<div class=\"footer-content\">
\t\t\t<div class=\"footer-cols\">
\t\t\t\t<div class=\"footer-col\">

\t\t\t\t\t<div class=\"footer-col-title\">
\t\t\t\t\t\t<span>Notre</span>
\t\t\t\t\t\tsociété</div>
\t\t\t\t\t<a href=\"societe-2.html\" class=\"footer-col-link\">Qui sommes-nous ?</a><br>
\t\t\t\t\t<a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"footer-col-link\">Où sommes nous ?</a><br>
\t\t\t\t\t<a href=\"https://web.facebook.com/creativ.agence.web\" target=\"_blank\" rel=\"nofollow\" class=\"footer-col-link\">Quoi de neuf ?</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>
\t\t\t\t\t<a href=\"https://web.facebook.com/creativ.agence.web\" title=\"Suivez-nous sur Facebook\" target=\"_blank\" rel=\"nofollow\" class=\"footer-col-link\">Suivez-nous sur Facebook</a><br>
\t\t\t\t\t<a href=\"#\" title=\"Suivez-nous sur Twitter\" target=\"_blank\" rel=\"nofollow\" class=\"footer-col-link\">Suivez-nous sur Twitter</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>
\t\t\t\t\t<a href=\"societe-2/foire-aux-questions.html\" class=\"footer-col-link\">Foire aux questions</a><br>
\t\t\t\t\t<a href=\"references/nos-partenaires.html\" class=\"footer-col-link\">Nos partenaires</a><br>
\t\t\t\t\t<a href=\"nous-contacter/mentions-legales.html\" class=\"footer-col-link\">Mentions légales</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col\">

\t\t\t\t\t<div class=\"footer-col-title\">
\t\t\t\t\t\t<span>Nos</span>
\t\t\t\t\t\tservices</div>
\t\t\t\t\t<a href=\"societe-2/createurs-dentreprises.html\" class=\"footer-col-link\">Créateur d’entreprise ?</a><br>
\t\t\t\t\t<a href=\"produits-3/agence-de-communication-publicite-nord/creation-de-logo-gratuit.html\" class=\"footer-col-link\">Logo gratuit</a><br>
\t\t\t\t\t<a href=\"audit-marketing-gratuit.html\" class=\"footer-col-link\">Audit gratuit en ligne</a><br>
\t\t\t\t\t<a href=\"website.html\" class=\"footer-col-link\">Calculateur devis site web</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>
\t\t\t\t\t<a href=\"produits-3/enseignes-habillages/depannage-et-maintenance.html\" class=\"footer-col-link\">Dépannage et maintenance</a><br>
\t\t\t\t\t<a href=\"deroulement-dune-commande.html\" class=\"footer-col-link\">Déroulement d’une commande</a><br>


\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col\">

\t\t\t\t\t<div class=\"footer-col-title\">
\t\t\t\t\t\t<span>Nos</span>
\t\t\t\t\t\tproduits</div>
\t\t\t\t\t<a href=\"produits-3/agence-de-communication-publicite-nord.html\" class=\"footer-col-link\">Développement web</a><br>
\t\t\t\t\t<a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vehicule.html\" class=\"footer-col-link\">Site internet</a><br>
\t\t\t\t\t<a href=\"produits-3/marquage-decoration/lettrage-et-decoration-vitrines.html\" class=\"footer-col-link\">Site vitrine</a><br>
\t\t\t\t\t<a href=\"produits-3/signaletique-panneaux/panneaux-publicitaires.html\" class=\"footer-col-link\">Site catalogue</a><br>
\t\t\t\t\t<a href=\"produits-3/stands-portatif-roll-up.html\" class=\"footer-col-link\">Site e-commerce</a><br>
\t\t\t\t\t<a href=\"produits-3/site-internet.html\" class=\"footer-col-link\">Référencement SEO</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de facturation</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de gestion locative</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">ERP</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de caisse</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de gestion commerciale</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">CRM</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de gestion de stock</a><br>
\t\t\t\t\t<a href=\"produits-3/accessoires-objets-publicitaires/stylos-publicitaires.html\" class=\"footer-col-link\">Logiciel de facturation</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>

\t\t\t\t\t<a href=\"produits-3/packaging.html\" class=\"footer-col-link\">E-mailing</a><br>
\t\t\t\t\t<a href=\"produits-3/packaging.html\" class=\"footer-col-link\">Sponsoring réseaux sociaux</a><br>
\t\t\t\t\t<a href=\"produits-3/packaging.html\" class=\"footer-col-link\">Publicité Google / Youtube</a><br>
\t\t\t\t\t<a href=\"produits-3/packaging.html\" class=\"footer-col-link\">Gestion des réseaux sociaux</a><br>
\t\t\t\t\t<a href=\"produits-3/packaging.html\" class=\"footer-col-link\">Mapping / Géolocalisation
\t\t\t\t\t</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>


\t\t\t\t</div>
\t\t\t\t<div class=\"footer-col\">

\t\t\t\t\t<div class=\"footer-col-title\">
\t\t\t\t\t\t<span>Nous</span>
\t\t\t\t\t\tcontacter</div>
\t\t\t\t\t<a href=\"\" class=\"footer-col-link\">Nous contacter</a><br>
\t\t\t\t\t<a href=\"\" class=\"footer-col-link\">Obtenir un R.D.V.</a><br>
\t\t\t\t\t<a href=\"\" class=\"footer-col-link\">Obtenir un devis</a><br>
\t\t\t\t\t<span class=\"footer-col-space\">&nbsp;</span><br>

\t\t\t\t\t<a href=\"nous-contacter/plan-acces-idgraphique.html\" class=\"footer-col-link\">Plan d’accès</a><br>
\t\t\t\t\t<a href=\"nous-contacter/plan-du-site.html\" class=\"footer-col-link\">Plan du site</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

\t<div class=\"sous-footer\">
\t\t<div class=\"content\">
\t\t\t<p class=\"p1\">
\t\t\t\t<a href=\"index.html\">Accueil</a>
\t\t\t\t<a href=\"societe-2.html\">Notre société</a>
\t\t\t\t<a href=\"produits-3.html\">Nos produits</a>
\t\t\t\t<a href=\"nous-contacter.html\">Nous contacter</a>
\t\t\t\t<a href=\"asset/conditions-generales-de-vente-2017.pdf\" target=\"_blank\">CGV</a>
\t\t\t</p>
\t\t\t<p class=\"p2\">INTERVENTION en Algérie : Oran - Tlemcen - Mostaganem - Sidi Bel Abbès - Mascara - Alger - Annaba - Constantine - Tizi Ouzou - Chlef - Relizane - Béjaïa - Blida - Aïn Témouchent...
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"https://www.facebook.com/creativ.agence.web\" target=\"_blank\" rel=\"nofollow\"><img src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/facebook.png"), "html", null, true);
        echo "\" alt=\"Facebook\"></a>
\t\t\t\t<a href=\"#\" target=\"_blank\" rel=\"nofollow\"><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/twitter.png"), "html", null, true);
        echo "\" alt=\"Twitter\"></a>
\t\t\t</p>
\t\t</div>
\t</div>

\t<div class=\"mots-clefs\">
\t\t<p>Création graphique - agence de communication - agence de publicité  - Meilleur agence de publicité algérie 2022 - boite de pub Lens - création de logo  - meilleur agence de communication 2022- création de sites web - création - site internet - tarifs site web - gestion réseaux sociaux -  sponsoring facebook - mapping geolocalisation - création de logos gratuit - créer un logo - relookage de logo - refonte d'identité - création de flyers - flyer - affiches - carte de visite pas cher - création en ligne - agence de pub - agence de communication digitale - agence de communication design - agence de communication algérie - meileurs site internet 2022 - agence de marketing web algerie - boite de communication - entreprise de communication - entreprise de publicité - société de publicité - agence de com algérie- studio de création graphique - studio de conception - maquette - logo en ligne - relookage publicité - agence de graphisme  - flyer - flyers - carte - affiches - brochure - carte de visite - plaquette commerciale - dépliant publicitaire - menu de restaurant  - carte de visite pas cher - carte commerciale - tarif impression - impression grand format - flyer pas cher  - creation de site web - site internet prix - développement web algérie - référencement - création de site vitrine prix - site catalogue prix - site e-commerce - création de portails web - création de logiciels - applications web - plateforme web - prix création sites internet - devis en ligne - prix site web algérie -  devis - prix - pas cher - algérie - alger - oran - tlemcen - Creativ web - zone d’intervention : Oran - Tlemcen - Alger - Blida - Chlef - Béjaïa - Tizi Ouzou - Sétif - Sidi Bel Abbès - Annaba - Guelma - Constantine - Médéa - Mostaganem - Mascara - Boumerdès - Tindouf - Mila - Aïn Témouchent - Ghardaïa - Relizane - Timimoun - Algérie - Adrar - Laghouat - Oum El Bouaghi - Batna - Biskra - Béchar - Bouira - Tamanrasset - Tébessa - Tiaret - Djelfa - Jijel - Saïda - Skikda - M'Sila - Ouargla - El Bayadh - Bordj Bou Arreridj - El Tarf - Tissemsilt - El Oued - Khenchela - Souk Ahras - Tipaza - Aïn Defla - Naâma - Bordj Badji Mokhtar - Ouled Djellal - Béni Abbès - In Salah  - Touggourt  - Djanet - El M'Ghair - El Meniaa
\t\t</p>
\t\t<p class=\"footer-by\">Site internet créé par
\t\t\t<a href=\"";
        // line 538
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\">CREATIV</a>
\t\t</p>
\t</div>

</div>
<script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.min38d1.js?id=534d2bccc6f75be47b39"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/min/app.minc61c.js?id=e8617fbfb7694bb14a80514d77aa7472ab6376a1"), "html", null, true);
        echo "\" async></script>


<noscript id=\"deferred-styles\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,400italic,700\"/>
</noscript>
<script>
\tvar loadDeferredStyles = function () {
var addStylesNode = document.getElementById(\"deferred-styles\");
var replacement = document.createElement(\"div\");
replacement.innerHTML = addStylesNode.textContent;
document.body.appendChild(replacement)
addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) 
raf(function () {
window.setTimeout(loadDeferredStyles, 0);
});
 else 
window.addEventListener('load', loadDeferredStyles);
</script></body></html>
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 15
    public function block_description($context, array $blocks = array())
    {
    }

    // line 72
    public function block_canonical($context, array $blocks = array())
    {
    }

    // line 73
    public function block_facebook($context, array $blocks = array())
    {
    }

    // line 76
    public function block_ldjson($context, array $blocks = array())
    {
    }

    // line 429
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  666 => 429,  661 => 76,  656 => 73,  651 => 72,  646 => 15,  641 => 5,  614 => 544,  610 => 543,  602 => 538,  590 => 529,  586 => 528,  486 => 430,  484 => 429,  235 => 185,  125 => 77,  123 => 76,  119 => 74,  116 => 73,  114 => 72,  58 => 19,  51 => 15,  46 => 13,  37 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "D:\\xampp\\htdocs\\CREATIV\\app\\Resources\\views\\base.html.twig");
    }
}
