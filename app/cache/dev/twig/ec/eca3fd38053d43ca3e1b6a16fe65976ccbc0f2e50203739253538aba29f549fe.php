<?php

/* @Cosanit/Default/show.html.twig */
class __TwigTemplate_2b1699b7cd8d1f69ddaf316486859d1ce0b590e32eb58e953f2fd64b027c180e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Cosanit/Default/show.html.twig", 2);
        $this->blocks = array(
            'ogurl' => array($this, 'block_ogurl'),
            'ogimg' => array($this, 'block_ogimg'),
            'ogdesc' => array($this, 'block_ogdesc'),
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'canonical' => array($this, 'block_canonical'),
            'facebook' => array($this, 'block_facebook'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cosanit/Default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_ogurl($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogurl"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_ogimg($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogimg"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 4, $this->source); })()), 0, array(), "array"), "image1", array()), 0, array(), "array"), "path", array())))), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_ogdesc($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ogdesc"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " NDWI | ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 6, $this->source); })()), 0, array(), "array"), "categories", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 6, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo " Oran, Alger ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_canonical($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical"));

        // line 9
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_facebook($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook"));

        // line 12
        echo "
        <meta property=\"fb:app_id\" content=\"2426167164288678\" />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:site_name\" content=\"ndwi-dz.com\" />
        <meta property=\"og:url\" content=\"https://ndwi-dz.com";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 16, $this->source); })()), 0, array(), "array"), "categories", array()), "slug", array()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 16, $this->source); })()), 0, array(), "array"), "slug", array()))), "html", null, true);
        echo "\"/>
        <meta property=\"og:title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 17, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo "\"/>
        <meta property=\"og:image\" content=\"https://ndwi-dz.com";
        // line 18
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 18, $this->source); })()), 0, array(), "array"), "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\" />
        <meta property=\"og:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 19, $this->source); })()), 0, array(), "array"), "text1", array()), "html", null, true);
        echo "\" />
        <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org/\",
      \"@type\": \"Product\",
      \"name\": \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 24, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo "\",
      \"image\": [
        \"https://ndwi-dz.com";
        // line 26
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos_produits/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 26, $this->source); })()), 0, array(), "array"), "image1", array()), 0, array(), "array"), "path", array())), "html", null, true);
        echo "\"

       ],
      \"description\": \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 29, $this->source); })()), 0, array(), "array"), "text1", array()), "html", null, true);
        echo "\",
      \"sku\": \"0446310786\",
      \"mpn\": \"925872\",
      \"brand\": {
        \"@type\": \"Brand\",
        \"name\": \"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 34, $this->source); })()), 0, array(), "array"), "categories", array()), "nom", array()), "html", null, true);
        echo "\"
      },
      \"review\": {
        \"@type\": \"Review\",
        \"reviewRating\": {
          \"@type\": \"Rating\",
          \"ratingValue\": \"4\",
          \"bestRating\": \"5\"
        },
        \"author\": {
          \"@type\": \"Person\",
          \"name\": \"NDWI \"
        }
      },
      \"aggregateRating\": {
        \"@type\": \"AggregateRating\",
        \"ratingValue\": \"4.4\",
        \"reviewCount\": \"89\"
      },
      \"offers\": {
        \"@type\": \"Offer\",
        \"url\": \"https://ndwi-dz.com\",
        \"priceCurrency\": \"DA\",
        \"price\": \"1\",
        \"priceValidUntil\": \"2020-05-08\",
        \"itemCondition\": \"https://schema.org/UsedCondition\",
        \"availability\": \"https://schema.org/InStock\",
        \"seller\": {
          \"@type\": \"Organization\",
          \"name\": \"Executive Objects\"
        }
      }
    }
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "    <style>
        .why-us.layout-1 {
            background-color: #000000;
        }
        .our-subscribe {
            position: relative;
            overflow: hidden;
            background-color: #000000;
            color: #ffffff;
        }
        .box-item.box-item-2 .box-info .title {
            font-size: 1.286em;
            color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .box-item.box-item-2 .box-info > .text {
            text-align: left;
            color: #ffffff;
        }
        th>img{
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='penci-style-css'  href='";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "' type='text/css' media='all' />

    <style>
        .penci-col-12 {
            padding: 0;
        }
        .penci-block-vc {

            padding-left: 0;
            padding-right: 0;

        }
        th {
            padding: 12px;
            font-weight: 100;
            font-size: 13px;
            text-align: center;
            border: none;
            border-bottom: 1px solid #000;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: auto;
            margin-bottom: 22px;
            margin: auto;
        }
        .tg .tg-c3ow {
            border: none;
            padding: 10px 0px;
            text-align: center;
            font-weight: bold;
            font-size: 11.4px;
        }
        td {
            padding: 12px;
            border: none;
            border-bottom: 1px solid #000000;
            text-align: center;
        }
    </style>
    <header>

        <div class=\"bg-white header header-in-page header-fixed fadeInDown animated header-sourcecode header-layout-6 header-sourcecode \">
            <div class=\"header-main\" id=\"nav\">
                <div class=\"read-more-nav\" style=\" height: 48px; margin-bottom: 20px;\">
                    <div class=\"container\" style=\" margin-top: -9px;\">
                        <div class=\"info-basic\">
                            <div class=\"pull-left\">
                                <ul class=\"info-contact list-unstyled\">
                                    <li class=\"icon phone\"><a title=\"Fabricant algérien de carreaux en céramique\" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" class=\"alab-map\"><span> Fabricantion / Production  carreaux & carrelages en céramique. Algérie</span></a></li>
                                    <li class=\"icon phone hidden-xs\"><a href=\"javascript:;\" class=\"alab-mail\"><span>commercial@sadjiaceram.com</span></a></li>
                                    <li class=\"icon  hidden-xs\"><a href=\"javascript:;\" class=\"alab-phone\"><span>+ 213 (0) 558 49 49 49</span></a></li>
                                </ul>
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"socials list-unstyled hidden-xs\">
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"https://webmail.world.planethoster.net/\" class=\"link\" target=\"_blank\"><i class=\"fa fa-envelope\"></i> Web mail</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"header-main-wrapper\">
                        <div class=\"hamburger-menu\">
                            <div class=\"hamburger-menu-wrapper\">
                                <span>Menu</span>
                                <div class=\"icons\">
                                    <span class=\"line-menu line-top\"></span>
                                    <span class=\"line-menu line-middle\"></span><span class=\"line-menu line-bottom\"></span></div>
                            </div>
                        </div>
                        <div class=\"navbar-header\">
                            <div class=\"logo lrg-logo\">
                                <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" class=\"header-logo\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logow.svg"), "html", null, true);
        echo "\" alt=\"SADJIACERAM\" style=\" width: 155px; margin-top: -6px;margin-left: 50px;\" class=\"logo-1 \">
                                    <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logo2.svg"), "html", null, true);
        echo "\" class=\"logo-2\" alt=\"SADJIACERAM\"  style=\" width: 140px; margin-top: 3px;margin-left: 20px;display: inline;
}\" /></a>
                            </div>
                        </div>
                        <nav class=\"navigation\">

                            <div class=\"navigation-pc\">
                                <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" class=\"logo-brand-menu hidden-lg hidden-md\"><img src=\"assets/img/logo/logo2.svg\" alt=\"SADJIACERAM\" class=\"logo-1 hidden-xs\">
                                </a>

                                <ul class=\"nav-links nav navbar-nav hidden-xs\">
                                    <li class=\"item-dropdown-1 active\"><a title=\"Fabricant algérien de carreaux en céramique Algérie\" href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\" class=\"main-menu\"><span class=\"text\">SADJIACERAM</span><br><span class=\"text2\">Bienvenue</span></a> </li>
                                    <li class=\"item-dropdown-1\"><a title=\"Carreaux Carrelages céramique en 360 3D Algérie\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_services");
        echo "\" class=\"main-menu\"><span class=\"text\">VISITE VIRTUELLE </span><br><span class=\"text2\">360° 3D</span></a>

                                    </li>
                                    <li class=\"dropdown\"><a title=\"Carreaux carrelages céramique Algérie\"  href=\"#\" class=\"main-menu\"><span class=\"text\">NOS PRODUITS</span><br><span class=\"text2\">Céramique</span></a>

                                    </li>
                                    <li class=\"dropdown\"><a title=\"SADJIACERAM | À propos de sadjiaceram Algérie \" href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_apropos");
        echo "\" class=\"main-menu\"><span class=\"text\">QUI SOMMES-NOUS ?</span><br><span class=\"text2\">À propos de sadjiaceram</span></a>

                                    </li>

                                    <li><a title=\"SADJIACERAM | Contact\" href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_contact");
        echo "\" class=\"main-menu\"><span class=\"text\">Contact</span><br><span class=\"text2\">Coordonnées</span></a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class=\"page-title layout-3 page-service \" style=\"background-image: url('";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos_produits/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 210, $this->source); })()), 0, array(), "array"), "image1", array()), 0, array(), "array"), "path", array()))), "html", null, true);
        echo "'); background-position: center;\">
        <div class=\"page-title-wrapper\">
            <div class=\"page-title-content \" style=\"    background: rgba(0,0,0,0.7);\">
                <div class=\"container\">


                    <div class=\"group-content\">
                        <br> <br><br>
                        <div class=\"group-title group-title-1 group-heading \" style=\"text-align: center; \">
                            <h1 class=\"main-title\" style=\"color:#fff;\">";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 219, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo " Algérie</h1>
                            <ol class=\"breadcrumb\">
                                <li><a style=\"color:#fff;\" href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_homepage");
        echo "\">Accueil</a></li>
                                <li class=\"\" style=\"color:#fff;\">
                                    <a style=\"color:#fff;\" href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_produits_categorie", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 223, $this->source); })()), 0, array(), "array"), "categories", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 223, $this->source); })()), 0, array(), "array"), "categories", array()), "nom", array()), "html", null, true);
        echo "</a>


                                </li>
                                <li class=\"active\" style=\"color:#fff;\">
                                <a style=\"color:#fff;\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cosanit_show", array("categorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 228, $this->source); })()), 0, array(), "array"), "categories", array()), "slug", array()), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 228, $this->source); })()), 0, array(), "array"), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 228, $this->source); })()), 0, array(), "array"), "titre", array()), "html", null, true);
        echo "</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id=\"wrapper-content\">
        <!-- PAGE WRAPPER-->
        <div id=\"page-wrapper\">
            <!-- MAIN CONTENT-->
            <div class=\"main-content\">

                <section class=\"what-we-do layout-2 padding-top-100 padding-bottom-100\" style=\"background: #ffffff;\">
                    <div class=\"box-content-wrap\">
                        <div class=\"container\">

                            <div class=\"service-provide-wrapper\">
                                <div class=\"row\">

                                    <div id=\"penci_image_box__80688757\" class=\"penci-block-vc penci-image-box  columns-3 style-title-1 style-title-left penci-link-filter-hidden penci-empty-block-title penci-vc-column-3 vc_custom_1580368466815\">
                                        <div class=\"penci-block-heading\">
                                        </div>
                                        <div class=\"penci-block_content\">
                                            <div class=\"penci-image-box__cotnent penci-row\">


                                                ";
        // line 257
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 257, $this->source); })()), 0, array(), "array"), "text2", array());
        echo "


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clearfix\"> </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>


                </section>




            </div>
        </div>
    </div>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60a50ff7437ae4d0\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Cosanit/Default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 257,  428 => 228,  418 => 223,  413 => 221,  408 => 219,  396 => 210,  383 => 200,  376 => 196,  367 => 190,  363 => 189,  356 => 185,  346 => 178,  342 => 177,  338 => 176,  304 => 145,  251 => 95,  224 => 70,  218 => 69,  176 => 34,  168 => 29,  162 => 26,  157 => 24,  149 => 19,  145 => 18,  141 => 17,  137 => 16,  131 => 12,  125 => 11,  117 => 9,  111 => 8,  99 => 7,  83 => 6,  71 => 5,  57 => 4,  45 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block ogurl %} {% endblock %}
{% block ogimg %} {{ absolute_url(asset('photos_produits/'~produits[0].image1[0].path)) }} {% endblock %}
{% block ogdesc %} {% endblock %}
{% block title %} NDWI | {{ produits[0].categories.nom|capitalize }} {{ produits[0].titre }} Oran, Alger {% endblock %}
{% block description %}  {% endblock %}
{% block canonical %}

{% endblock %}
    {% block facebook %}

        <meta property=\"fb:app_id\" content=\"2426167164288678\" />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:site_name\" content=\"ndwi-dz.com\" />
        <meta property=\"og:url\" content=\"https://ndwi-dz.com{{ path('cosanit_show',{ 'categorie': produits[0].categories.slug , 'id': produits[0].slug }) }}\"/>
        <meta property=\"og:title\" content=\"{{ produits[0].titre }}\"/>
        <meta property=\"og:image\" content=\"https://ndwi-dz.com{{asset('photos_produits/')~ produits[0].image1[0].path}}\" />
        <meta property=\"og:description\" content=\"{{ produits[0].text1 }}\" />
        <script type=\"application/ld+json\">
    {
      \"@context\": \"https://schema.org/\",
      \"@type\": \"Product\",
      \"name\": \"{{ produits[0].titre }}\",
      \"image\": [
        \"https://ndwi-dz.com{{asset('photos_produits/')~ produits[0].image1[0].path}}\"

       ],
      \"description\": \"{{ produits[0].text1 }}\",
      \"sku\": \"0446310786\",
      \"mpn\": \"925872\",
      \"brand\": {
        \"@type\": \"Brand\",
        \"name\": \"{{ produits[0].categories.nom }}\"
      },
      \"review\": {
        \"@type\": \"Review\",
        \"reviewRating\": {
          \"@type\": \"Rating\",
          \"ratingValue\": \"4\",
          \"bestRating\": \"5\"
        },
        \"author\": {
          \"@type\": \"Person\",
          \"name\": \"NDWI \"
        }
      },
      \"aggregateRating\": {
        \"@type\": \"AggregateRating\",
        \"ratingValue\": \"4.4\",
        \"reviewCount\": \"89\"
      },
      \"offers\": {
        \"@type\": \"Offer\",
        \"url\": \"https://ndwi-dz.com\",
        \"priceCurrency\": \"DA\",
        \"price\": \"1\",
        \"priceValidUntil\": \"2020-05-08\",
        \"itemCondition\": \"https://schema.org/UsedCondition\",
        \"availability\": \"https://schema.org/InStock\",
        \"seller\": {
          \"@type\": \"Organization\",
          \"name\": \"Executive Objects\"
        }
      }
    }
    </script>
    {% endblock %}
{% block body %}
    <style>
        .why-us.layout-1 {
            background-color: #000000;
        }
        .our-subscribe {
            position: relative;
            overflow: hidden;
            background-color: #000000;
            color: #ffffff;
        }
        .box-item.box-item-2 .box-info .title {
            font-size: 1.286em;
            color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .box-item.box-item-2 .box-info > .text {
            text-align: left;
            color: #ffffff;
        }
        th>img{
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='penci-style-css'  href='{{ asset('style.css') }}' type='text/css' media='all' />

    <style>
        .penci-col-12 {
            padding: 0;
        }
        .penci-block-vc {

            padding-left: 0;
            padding-right: 0;

        }
        th {
            padding: 12px;
            font-weight: 100;
            font-size: 13px;
            text-align: center;
            border: none;
            border-bottom: 1px solid #000;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: auto;
            margin-bottom: 22px;
            margin: auto;
        }
        .tg .tg-c3ow {
            border: none;
            padding: 10px 0px;
            text-align: center;
            font-weight: bold;
            font-size: 11.4px;
        }
        td {
            padding: 12px;
            border: none;
            border-bottom: 1px solid #000000;
            text-align: center;
        }
    </style>
    <header>

        <div class=\"bg-white header header-in-page header-fixed fadeInDown animated header-sourcecode header-layout-6 header-sourcecode \">
            <div class=\"header-main\" id=\"nav\">
                <div class=\"read-more-nav\" style=\" height: 48px; margin-bottom: 20px;\">
                    <div class=\"container\" style=\" margin-top: -9px;\">
                        <div class=\"info-basic\">
                            <div class=\"pull-left\">
                                <ul class=\"info-contact list-unstyled\">
                                    <li class=\"icon phone\"><a title=\"Fabricant algérien de carreaux en céramique\" href=\"{{ path('cosanit_homepage') }}\" class=\"alab-map\"><span> Fabricantion / Production  carreaux & carrelages en céramique. Algérie</span></a></li>
                                    <li class=\"icon phone hidden-xs\"><a href=\"javascript:;\" class=\"alab-mail\"><span>commercial@sadjiaceram.com</span></a></li>
                                    <li class=\"icon  hidden-xs\"><a href=\"javascript:;\" class=\"alab-phone\"><span>+ 213 (0) 558 49 49 49</span></a></li>
                                </ul>
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"socials list-unstyled hidden-xs\">
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"javascript:;\" class=\"link\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li class=\"icon-2\"><a href=\"https://webmail.world.planethoster.net/\" class=\"link\" target=\"_blank\"><i class=\"fa fa-envelope\"></i> Web mail</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"header-main-wrapper\">
                        <div class=\"hamburger-menu\">
                            <div class=\"hamburger-menu-wrapper\">
                                <span>Menu</span>
                                <div class=\"icons\">
                                    <span class=\"line-menu line-top\"></span>
                                    <span class=\"line-menu line-middle\"></span><span class=\"line-menu line-bottom\"></span></div>
                            </div>
                        </div>
                        <div class=\"navbar-header\">
                            <div class=\"logo lrg-logo\">
                                <a href=\"{{ path('cosanit_homepage') }}\" class=\"header-logo\">
                                    <img src=\"{{ asset('assets/img/logo/logow.svg') }}\" alt=\"SADJIACERAM\" style=\" width: 155px; margin-top: -6px;margin-left: 50px;\" class=\"logo-1 \">
                                    <img src=\"{{asset('assets/img/logo/logo2.svg')}}\" class=\"logo-2\" alt=\"SADJIACERAM\"  style=\" width: 140px; margin-top: 3px;margin-left: 20px;display: inline;
}\" /></a>
                            </div>
                        </div>
                        <nav class=\"navigation\">

                            <div class=\"navigation-pc\">
                                <a href=\"{{ path('cosanit_homepage') }}\" class=\"logo-brand-menu hidden-lg hidden-md\"><img src=\"assets/img/logo/logo2.svg\" alt=\"SADJIACERAM\" class=\"logo-1 hidden-xs\">
                                </a>

                                <ul class=\"nav-links nav navbar-nav hidden-xs\">
                                    <li class=\"item-dropdown-1 active\"><a title=\"Fabricant algérien de carreaux en céramique Algérie\" href=\"{{ path('cosanit_homepage') }}\" class=\"main-menu\"><span class=\"text\">SADJIACERAM</span><br><span class=\"text2\">Bienvenue</span></a> </li>
                                    <li class=\"item-dropdown-1\"><a title=\"Carreaux Carrelages céramique en 360 3D Algérie\" href=\"{{ path('cosanit_services') }}\" class=\"main-menu\"><span class=\"text\">VISITE VIRTUELLE </span><br><span class=\"text2\">360° 3D</span></a>

                                    </li>
                                    <li class=\"dropdown\"><a title=\"Carreaux carrelages céramique Algérie\"  href=\"#\" class=\"main-menu\"><span class=\"text\">NOS PRODUITS</span><br><span class=\"text2\">Céramique</span></a>

                                    </li>
                                    <li class=\"dropdown\"><a title=\"SADJIACERAM | À propos de sadjiaceram Algérie \" href=\"{{ path('cosanit_apropos') }}\" class=\"main-menu\"><span class=\"text\">QUI SOMMES-NOUS ?</span><br><span class=\"text2\">À propos de sadjiaceram</span></a>

                                    </li>

                                    <li><a title=\"SADJIACERAM | Contact\" href=\"{{ path('cosanit_contact') }}\" class=\"main-menu\"><span class=\"text\">Contact</span><br><span class=\"text2\">Coordonnées</span></a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class=\"page-title layout-3 page-service \" style=\"background-image: url('{{ asset('photos_produits/'~produits[0].image1[0].path) }}'); background-position: center;\">
        <div class=\"page-title-wrapper\">
            <div class=\"page-title-content \" style=\"    background: rgba(0,0,0,0.7);\">
                <div class=\"container\">


                    <div class=\"group-content\">
                        <br> <br><br>
                        <div class=\"group-title group-title-1 group-heading \" style=\"text-align: center; \">
                            <h1 class=\"main-title\" style=\"color:#fff;\">{{ produits[0].titre }} Algérie</h1>
                            <ol class=\"breadcrumb\">
                                <li><a style=\"color:#fff;\" href=\"{{ path('cosanit_homepage') }}\">Accueil</a></li>
                                <li class=\"\" style=\"color:#fff;\">
                                    <a style=\"color:#fff;\" href=\"{{ path('cosanit_produits_categorie', { 'id': produits[0].categories.slug }) }}\">{{ produits[0].categories.nom }}</a>


                                </li>
                                <li class=\"active\" style=\"color:#fff;\">
                                <a style=\"color:#fff;\" href=\"{{ path('cosanit_show', { 'categorie': produits[0].categories.slug,'id': produits[0].slug }) }}\">{{ produits[0].titre }}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id=\"wrapper-content\">
        <!-- PAGE WRAPPER-->
        <div id=\"page-wrapper\">
            <!-- MAIN CONTENT-->
            <div class=\"main-content\">

                <section class=\"what-we-do layout-2 padding-top-100 padding-bottom-100\" style=\"background: #ffffff;\">
                    <div class=\"box-content-wrap\">
                        <div class=\"container\">

                            <div class=\"service-provide-wrapper\">
                                <div class=\"row\">

                                    <div id=\"penci_image_box__80688757\" class=\"penci-block-vc penci-image-box  columns-3 style-title-1 style-title-left penci-link-filter-hidden penci-empty-block-title penci-vc-column-3 vc_custom_1580368466815\">
                                        <div class=\"penci-block-heading\">
                                        </div>
                                        <div class=\"penci-block_content\">
                                            <div class=\"penci-image-box__cotnent penci-row\">


                                                {{ produits[0].text2|raw }}


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clearfix\"> </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>


                </section>




            </div>
        </div>
    </div>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60a50ff7437ae4d0\"></script>

{% endblock %}
", "@Cosanit/Default/show.html.twig", "D:\\xampp\\htdocs\\CREATIV\\src\\Cosanit\\CosanitBundle\\Resources\\views\\Default\\show.html.twig");
    }
}
