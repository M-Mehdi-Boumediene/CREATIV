<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // cosanit_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_cosanit_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'cosanit_homepage');
            }

            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_cosanit_homepage;
            }

            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cosanit_homepage',);
        }
        not_cosanit_homepage:

        if (0 === strpos($pathinfo, '/devis-prix-')) {
            // cosanit_devis
            if ('/devis-prix-création-site-web-algérie-2022' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_devis;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::devisAction',  '_route' => 'cosanit_devis',);
            }
            not_cosanit_devis:

            // cosanit_devisid
            if (0 === strpos($pathinfo, '/devis-prix-site-web') && preg_match('#^/devis\\-prix\\-site\\-web\\-(?P<id>[^/\\-]++)\\-algérie\\-2022$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_devisid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_devisid')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::devisidAction',));
            }
            not_cosanit_devisid:

        }

        if (0 === strpos($pathinfo, '/algérie')) {
            // cosanit_produits
            if ('/algérie/granite/céramique/marbre' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cosanit_produits;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cosanit_produits');
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::produitsAction',  '_route' => 'cosanit_produits',);
            }
            not_cosanit_produits:

            // cosanit_produits_categorie
            if (0 === strpos($pathinfo, '/algérie/2022') && preg_match('#^/algérie/2022/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cosanit_produits_categorie;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cosanit_produits_categorie');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_produits_categorie;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_produits_categorie')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::produitscategorieAction',));
            }
            not_cosanit_produits_categorie:

        }

        if (0 === strpos($pathinfo, '/c')) {
            // cosanit_services
            if ('/céramique/algérie/projets360' === $pathinfo) {
                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::servicesAction',  '_route' => 'cosanit_services',);
            }

            // cosanit_contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::contactAction',  '_route' => 'cosanit_contact',);
            }

        }

        // cosanit_apropos
        if ('/apropos' === $pathinfo) {
            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::aproposAction',  '_route' => 'cosanit_apropos',);
        }

        // cosanit_alert
        if ('/creer-alerte' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_cosanit_alert;
            }

            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::alertAction',  '_route' => 'cosanit_alert',);
        }
        not_cosanit_alert:

        // cosanit_show
        if (0 === strpos($pathinfo, '/algérie/céramique') && preg_match('#^/algérie/céramique/(?P<categorie>[^/]++)/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_cosanit_show;
            } else {
                return $this->redirect($rawPathinfo.'/', 'cosanit_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::showAction',));
        }
        not_cosanit_show:

        // cosanit_neufshow
        if (0 === strpos($pathinfo, '/céramique/algérie/projets360') && preg_match('#^/céramique/algérie/projets360/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_cosanit_neufshow;
            } else {
                return $this->redirect($rawPathinfo.'/', 'cosanit_neufshow');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_neufshow')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\InvestissementsController::showAction',));
        }
        not_cosanit_neufshow:

        // cosanit_partenaires_categorie
        if (0 === strpos($pathinfo, '/partenaires') && preg_match('#^/partenaires\\-(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_cosanit_partenaires_categorie;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_partenaires_categorie')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::partenairescategorieAction',));
        }
        not_cosanit_partenaires_categorie:

        // cosanit_garantie
        if ('/mentionslégales' === $pathinfo) {
            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::mentionsAction',  '_route' => 'cosanit_garantie',);
        }

        if (0 === strpos($pathinfo, '/Assurance-')) {
            // cosanit_packs
            if ('/Assurance-Automobile-algérie' === $pathinfo) {
                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::packsAction',  '_route' => 'cosanit_packs',);
            }

            // cosanit_entreprise
            if ('/Assurance-voyages-algérie' === $pathinfo) {
                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::entrepriseAction',  '_route' => 'cosanit_entreprise',);
            }

        }

        // cosanit_commment
        if ('/comparateur-assurances-algérie' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_cosanit_commment;
            } else {
                return $this->redirect($rawPathinfo.'/', 'cosanit_commment');
            }

            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefaultController::docsAction',  '_route' => 'cosanit_commment',);
        }
        not_cosanit_commment:

        // cosanit_recrutement
        if ('/recrutement' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_cosanit_recrutement;
            }

            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\RecrutementController::indexAction',  '_route' => 'cosanit_recrutement',);
        }
        not_cosanit_recrutement:

        if (0 === strpos($pathinfo, '/devis/automobile')) {
            // cosanit_devisauto
            if ('/devis/automobile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cosanit_devisauto;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cosanit_devisauto');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_devisauto;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DevisautosController::indexAction',  '_route' => 'cosanit_devisauto',);
            }
            not_cosanit_devisauto:

            // cosanit_resultdevisauto
            if (preg_match('#^/devis/automobile/(?P<nom>[^/]++)/(?P<telephone>[^/]++)/(?P<garantie>[^/]++)/(?P<duree>[^/]++)/(?P<puissance>[^/]++)/(?P<valeur>[^/]++)/(?P<vols>[^/]++)/(?P<incendies>[^/]++)/(?P<bris>[^/]++)/(?P<assistance1>[^/]++)/(?P<assistance2>[^/]++)/(?P<assistance3>[^/]++)/(?P<defences>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_resultdevisauto;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_resultdevisauto')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DevisautosController::resultAction',));
            }
            not_cosanit_resultdevisauto:

            // cosanit_envoisoffre
            if (0 === strpos($pathinfo, '/devis/automobile/envois') && preg_match('#^/devis/automobile/envois/(?P<assurance>[^/]++)/(?P<nom>[^/]++)/(?P<telephone>[^/]++)/(?P<garantie>[^/]++)/(?P<duree>[^/]++)/(?P<puissance>[^/]++)/(?P<valeur>[^/]++)/(?P<vols>[^/]++)/(?P<incendies>[^/]++)/(?P<bris>[^/]++)/(?P<assistance1>[^/]++)/(?P<assistance2>[^/]++)/(?P<assistance3>[^/]++)/(?P<defences>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_envoisoffre;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cosanit_envoisoffre')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DevisautosController::envoisoffreAction',));
            }
            not_cosanit_envoisoffre:

        }

        if (0 === strpos($pathinfo, '/immobilier/vendre/uploads')) {
            // cosanit_uploads
            if ('/immobilier/vendre/uploads' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cosanit_uploads;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cosanit_uploads');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_uploads;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VentesController::uploadtofsAction',  '_route' => 'cosanit_uploads',);
            }
            not_cosanit_uploads:

            // cosanit_del_uploads
            if ('/immobilier/vendre/uploads/del' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_cosanit_del_uploads;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'cosanit_del_uploads');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_del_uploads;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VentesController::deleteresourceAction',  '_route' => 'cosanit_del_uploads',);
            }
            not_cosanit_del_uploads:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_bannieres_index
            if ('/admin' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_admin_bannieres_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'admin_bannieres_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_bannieres_index;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BannieresController::indexAction',  '_route' => 'admin_bannieres_index',);
            }
            not_admin_bannieres_index:

            // admin_bannieres_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_bannieres_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bannieres_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BannieresController::showAction',));
            }
            not_admin_bannieres_show:

            // admin_bannieres_new
            if ('/admin/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_bannieres_new;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BannieresController::newAction',  '_route' => 'admin_bannieres_new',);
            }
            not_admin_bannieres_new:

            // admin_bannieres_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_bannieres_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bannieres_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BannieresController::editAction',));
            }
            not_admin_bannieres_edit:

            // admin_bannieres_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_bannieres_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bannieres_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BannieresController::deleteAction',));
            }
            not_admin_bannieres_delete:

            if (0 === strpos($pathinfo, '/admin/neufs')) {
                // admin_neufs_index
                if ('/admin/neufs' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_neufs_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_neufs_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_neufs_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::indexAction',  '_route' => 'admin_neufs_index',);
                }
                not_admin_neufs_index:

                // admin_neufs_show
                if (preg_match('#^/admin/neufs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_neufs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_neufs_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::showAction',));
                }
                not_admin_neufs_show:

                // admin_neufs_new
                if ('/admin/neufs/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_neufs_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::newAction',  '_route' => 'admin_neufs_new',);
                }
                not_admin_neufs_new:

                // admin_neufs_edit
                if (preg_match('#^/admin/neufs/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_neufs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_neufs_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::editAction',));
                }
                not_admin_neufs_edit:

                // admin_neufs_delete
                if (preg_match('#^/admin/neufs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_neufs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_neufs_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::deleteAction',));
                }
                not_admin_neufs_delete:

                // admin_neufs_envois
                if ('/admin/neufs/envois' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_neufs_envois;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\NeufsController::envoisAction',  '_route' => 'admin_neufs_envois',);
                }
                not_admin_neufs_envois:

            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // admin_produits_index
                if ('/admin/produits' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_produits_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_produits_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_produits_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ProduitsController::indexAction',  '_route' => 'admin_produits_index',);
                }
                not_admin_produits_index:

                // admin_produits_show
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_produits_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ProduitsController::showAction',));
                }
                not_admin_produits_show:

                // admin_produits_new
                if ('/admin/produits/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_produits_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ProduitsController::newAction',  '_route' => 'admin_produits_new',);
                }
                not_admin_produits_new:

                // admin_produits_edit
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_produits_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ProduitsController::editAction',));
                }
                not_admin_produits_edit:

                // admin_produits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_produits_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ProduitsController::deleteAction',));
                }
                not_admin_produits_delete:

            }

            if (0 === strpos($pathinfo, '/admin/medias')) {
                // admin_medias_index
                if ('/admin/medias' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_medias_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_medias_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_medias_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MediaController::indexAction',  '_route' => 'admin_medias_index',);
                }
                not_admin_medias_index:

                // admin_medias_show
                if (preg_match('#^/admin/medias/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_medias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_medias_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MediaController::showAction',));
                }
                not_admin_medias_show:

                // admin_medias_new
                if ('/admin/medias/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_medias_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MediaController::newAction',  '_route' => 'admin_medias_new',);
                }
                not_admin_medias_new:

                // admin_medias_edit
                if (preg_match('#^/admin/medias/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_medias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_medias_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MediaController::editAction',));
                }
                not_admin_medias_edit:

                // admin_medias_delete
                if (preg_match('#^/admin/medias/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_medias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_medias_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MediaController::deleteAction',));
                }
                not_admin_medias_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categories')) {
                // admin_categories_index
                if ('/admin/categories' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_categories_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_categories_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_categories_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'admin_categories_index',);
                }
                not_admin_categories_index:

                // admin_categories_show
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_categories_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\CategoriesController::showAction',));
                }
                not_admin_categories_show:

                // admin_categories_new
                if ('/admin/categories/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_categories_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\CategoriesController::newAction',  '_route' => 'admin_categories_new',);
                }
                not_admin_categories_new:

                // admin_categories_edit
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_categories_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\CategoriesController::editAction',));
                }
                not_admin_categories_edit:

                // admin_categories_delete
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_categories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\CategoriesController::deleteAction',));
                }
                not_admin_categories_delete:

            }

            if (0 === strpos($pathinfo, '/admin/parents')) {
                // admin_parents_index
                if ('/admin/parents' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_parents_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_parents_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_parents_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ParentsController::indexAction',  '_route' => 'admin_parents_index',);
                }
                not_admin_parents_index:

                // admin_parents_show
                if (preg_match('#^/admin/parents/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_parents_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_parents_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ParentsController::showAction',));
                }
                not_admin_parents_show:

                // admin_parents_new
                if ('/admin/parents/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_parents_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ParentsController::newAction',  '_route' => 'admin_parents_new',);
                }
                not_admin_parents_new:

                // admin_parents_edit
                if (preg_match('#^/admin/parents/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_parents_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_parents_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ParentsController::editAction',));
                }
                not_admin_parents_edit:

                // admin_parents_delete
                if (preg_match('#^/admin/parents/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_parents_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_parents_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ParentsController::deleteAction',));
                }
                not_admin_parents_delete:

            }

            if (0 === strpos($pathinfo, '/admin/activations')) {
                // admin_Activations_index
                if ('/admin/activations' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_Activations_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_Activations_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_Activations_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ActivationsController::indexAction',  '_route' => 'admin_Activations_index',);
                }
                not_admin_Activations_index:

                // admin_Activations_show
                if (preg_match('#^/admin/activations/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_Activations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Activations_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ActivationsController::showAction',));
                }
                not_admin_Activations_show:

                // admin_Activations_new
                if ('/admin/activations/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_Activations_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ActivationsController::newAction',  '_route' => 'admin_Activations_new',);
                }
                not_admin_Activations_new:

                // admin_Activations_edit
                if (preg_match('#^/admin/activations/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_Activations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Activations_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ActivationsController::editAction',));
                }
                not_admin_Activations_edit:

                // admin_Activations_delete
                if (preg_match('#^/admin/activations/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_Activations_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Activations_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\ActivationsController::deleteAction',));
                }
                not_admin_Activations_delete:

            }

            if (0 === strpos($pathinfo, '/admin/types')) {
                // admin_types_index
                if ('/admin/types' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_types_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_types_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_types_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TypesController::indexAction',  '_route' => 'admin_types_index',);
                }
                not_admin_types_index:

                // admin_types_show
                if (preg_match('#^/admin/types/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_types_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_types_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TypesController::showAction',));
                }
                not_admin_types_show:

                // admin_types_new
                if ('/admin/types/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_types_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TypesController::newAction',  '_route' => 'admin_types_new',);
                }
                not_admin_types_new:

                // admin_types_edit
                if (preg_match('#^/admin/types/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_types_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_types_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TypesController::editAction',));
                }
                not_admin_types_edit:

                // admin_types_delete
                if (preg_match('#^/admin/types/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_types_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_types_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TypesController::deleteAction',));
                }
                not_admin_types_delete:

            }

            if (0 === strpos($pathinfo, '/admin/messagerie')) {
                // admin_messagerie_index
                if ('/admin/messagerie' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_messagerie_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_messagerie_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_messagerie_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MessagerieController::indexAction',  '_route' => 'admin_messagerie_index',);
                }
                not_admin_messagerie_index:

                // admin_messagerie_show
                if (preg_match('#^/admin/messagerie/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_messagerie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_messagerie_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MessagerieController::showAction',));
                }
                not_admin_messagerie_show:

                // admin_messagerie_new
                if ('/admin/messagerie/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_messagerie_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MessagerieController::newAction',  '_route' => 'admin_messagerie_new',);
                }
                not_admin_messagerie_new:

                // admin_messagerie_edit
                if (preg_match('#^/admin/messagerie/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_messagerie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_messagerie_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MessagerieController::editAction',));
                }
                not_admin_messagerie_edit:

                // admin_messagerie_delete
                if (preg_match('#^/admin/messagerie/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_messagerie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_messagerie_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MessagerieController::deleteAction',));
                }
                not_admin_messagerie_delete:

            }

            if (0 === strpos($pathinfo, '/admin/serials')) {
                // admin_serials_index
                if ('/admin/serials' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_serials_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_serials_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_serials_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\SerialsController::indexAction',  '_route' => 'admin_serials_index',);
                }
                not_admin_serials_index:

                // admin_serials_show
                if (preg_match('#^/admin/serials/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_serials_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serials_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\SerialsController::showAction',));
                }
                not_admin_serials_show:

                // admin_serials_new
                if ('/admin/serials/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_serials_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\SerialsController::newAction',  '_route' => 'admin_serials_new',);
                }
                not_admin_serials_new:

                // admin_serials_edit
                if (preg_match('#^/admin/serials/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_serials_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serials_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\SerialsController::editAction',));
                }
                not_admin_serials_edit:

                // admin_serials_delete
                if (preg_match('#^/admin/serials/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_serials_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_serials_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\SerialsController::deleteAction',));
                }
                not_admin_serials_delete:

            }

            if (0 === strpos($pathinfo, '/admin/partenaires')) {
                // admin_partenaires_index
                if ('/admin/partenaires' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_partenaires_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_partenaires_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_partenaires_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PartenairesController::indexAction',  '_route' => 'admin_partenaires_index',);
                }
                not_admin_partenaires_index:

                // admin_partenaires_show
                if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_partenaires_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partenaires_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PartenairesController::showAction',));
                }
                not_admin_partenaires_show:

                // admin_partenaires_new
                if ('/admin/partenaires/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_partenaires_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PartenairesController::newAction',  '_route' => 'admin_partenaires_new',);
                }
                not_admin_partenaires_new:

                // admin_partenaires_edit
                if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_partenaires_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partenaires_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PartenairesController::editAction',));
                }
                not_admin_partenaires_edit:

                // admin_partenaires_delete
                if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_partenaires_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partenaires_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PartenairesController::deleteAction',));
                }
                not_admin_partenaires_delete:

            }

            if (0 === strpos($pathinfo, '/admin/about')) {
                // admin_about_index
                if ('/admin/about' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_about_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_about_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_about_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposController::indexAction',  '_route' => 'admin_about_index',);
                }
                not_admin_about_index:

                // admin_about_show
                if (preg_match('#^/admin/about/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_about_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_about_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposController::showAction',));
                }
                not_admin_about_show:

                // admin_about_new
                if ('/admin/about/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_about_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposController::newAction',  '_route' => 'admin_about_new',);
                }
                not_admin_about_new:

                // admin_about_edit
                if (preg_match('#^/admin/about/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_about_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_about_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposController::editAction',));
                }
                not_admin_about_edit:

                // admin_about_delete
                if (preg_match('#^/admin/about/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_about_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_about_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposController::deleteAction',));
                }
                not_admin_about_delete:

            }

            if (0 === strpos($pathinfo, '/admin/logos')) {
                // admin_logos_index
                if ('/admin/logos' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_logos_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_logos_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logos_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\LogosController::indexAction',  '_route' => 'admin_logos_index',);
                }
                not_admin_logos_index:

                // admin_logos_show
                if (preg_match('#^/admin/logos/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_logos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logos_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\LogosController::showAction',));
                }
                not_admin_logos_show:

                // admin_logos_new
                if ('/admin/logos/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_logos_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\LogosController::newAction',  '_route' => 'admin_logos_new',);
                }
                not_admin_logos_new:

                // admin_logos_edit
                if (preg_match('#^/admin/logos/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_logos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logos_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\LogosController::editAction',));
                }
                not_admin_logos_edit:

                // admin_logos_delete
                if (preg_match('#^/admin/logos/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_logos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_logos_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\LogosController::deleteAction',));
                }
                not_admin_logos_delete:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // admin_users_index
                if ('/admin/users' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_users_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_users_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_users_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_users_index',);
                }
                not_admin_users_index:

                // admin_users_show
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_users_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\UserController::showAction',));
                }
                not_admin_users_show:

                // admin_users_new
                if ('/admin/users/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_users_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\UserController::newAction',  '_route' => 'admin_users_new',);
                }
                not_admin_users_new:

                // admin_users_edit
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_users_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\UserController::editAction',));
                }
                not_admin_users_edit:

                // admin_users_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_users_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_users_delete:

            }

            if (0 === strpos($pathinfo, '/admin/apropos')) {
                // admin_apropos_index
                if ('/admin/apropos' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_apropos_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_apropos_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_apropos_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposblockController::indexAction',  '_route' => 'admin_apropos_index',);
                }
                not_admin_apropos_index:

                // admin_apropos_show
                if (preg_match('#^/admin/apropos/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_apropos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apropos_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposblockController::showAction',));
                }
                not_admin_apropos_show:

                // admin_apropos_new
                if ('/admin/apropos/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_apropos_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposblockController::newAction',  '_route' => 'admin_apropos_new',);
                }
                not_admin_apropos_new:

                // admin_apropos_edit
                if (preg_match('#^/admin/apropos/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_apropos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apropos_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposblockController::editAction',));
                }
                not_admin_apropos_edit:

                // admin_apropos_delete
                if (preg_match('#^/admin/apropos/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_apropos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_apropos_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\AproposblockController::deleteAction',));
                }
                not_admin_apropos_delete:

            }

            // cosanit_statestique
            if ('/admin/statestiques' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cosanit_statestique;
                }

                return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\StatestiquesController::indexAction',  '_route' => 'cosanit_statestique',);
            }
            not_cosanit_statestique:

            if (0 === strpos($pathinfo, '/admin/trs')) {
                // admin_trs_index
                if ('/admin/trs' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_trs_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_trs_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_trs_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TrsController::indexAction',  '_route' => 'admin_trs_index',);
                }
                not_admin_trs_index:

                // admin_trs_show
                if (preg_match('#^/admin/trs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_trs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TrsController::showAction',));
                }
                not_admin_trs_show:

                // admin_trs_new
                if ('/admin/trs/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_trs_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TrsController::newAction',  '_route' => 'admin_trs_new',);
                }
                not_admin_trs_new:

                // admin_trs_edit
                if (preg_match('#^/admin/trs/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_trs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TrsController::editAction',));
                }
                not_admin_trs_edit:

                // admin_trs_delete
                if (preg_match('#^/admin/trs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_trs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\TrsController::deleteAction',));
                }
                not_admin_trs_delete:

                if (0 === strpos($pathinfo, '/admin/trs2')) {
                    // admin_trs2_index
                    if ('/admin/trs2' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_trs2_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_trs2_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_trs2_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs2Controller::indexAction',  '_route' => 'admin_trs2_index',);
                    }
                    not_admin_trs2_index:

                    // admin_trs2_show
                    if (preg_match('#^/admin/trs2/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_trs2_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs2_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs2Controller::showAction',));
                    }
                    not_admin_trs2_show:

                    // admin_trs2_new
                    if ('/admin/trs2/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_trs2_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs2Controller::newAction',  '_route' => 'admin_trs2_new',);
                    }
                    not_admin_trs2_new:

                    // admin_trs2_edit
                    if (preg_match('#^/admin/trs2/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_trs2_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs2_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs2Controller::editAction',));
                    }
                    not_admin_trs2_edit:

                    // admin_trs2_delete
                    if (preg_match('#^/admin/trs2/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_trs2_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs2_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs2Controller::deleteAction',));
                    }
                    not_admin_trs2_delete:

                }

                if (0 === strpos($pathinfo, '/admin/trs3')) {
                    // admin_trs3_index
                    if ('/admin/trs3' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_trs3_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_trs3_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_trs3_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs3Controller::indexAction',  '_route' => 'admin_trs3_index',);
                    }
                    not_admin_trs3_index:

                    // admin_trs3_show
                    if (preg_match('#^/admin/trs3/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_trs3_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs3_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs3Controller::showAction',));
                    }
                    not_admin_trs3_show:

                    // admin_trs3_new
                    if ('/admin/trs3/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_trs3_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs3Controller::newAction',  '_route' => 'admin_trs3_new',);
                    }
                    not_admin_trs3_new:

                    // admin_trs3_edit
                    if (preg_match('#^/admin/trs3/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_trs3_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs3_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs3Controller::editAction',));
                    }
                    not_admin_trs3_edit:

                    // admin_trs3_delete
                    if (preg_match('#^/admin/trs3/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_trs3_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_trs3_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Trs3Controller::deleteAction',));
                    }
                    not_admin_trs3_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/dc')) {
                if (0 === strpos($pathinfo, '/admin/dc10')) {
                    // admin_dc10_index
                    if ('/admin/dc10' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_dc10_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_dc10_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc10_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc10Controller::indexAction',  '_route' => 'admin_dc10_index',);
                    }
                    not_admin_dc10_index:

                    // admin_dc10_show
                    if (preg_match('#^/admin/dc10/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc10_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc10_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc10Controller::showAction',));
                    }
                    not_admin_dc10_show:

                    // admin_dc10_new
                    if ('/admin/dc10/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc10_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc10Controller::newAction',  '_route' => 'admin_dc10_new',);
                    }
                    not_admin_dc10_new:

                    // admin_dc10_edit
                    if (preg_match('#^/admin/dc10/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc10_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc10_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc10Controller::editAction',));
                    }
                    not_admin_dc10_edit:

                    // admin_dc10_delete
                    if (preg_match('#^/admin/dc10/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_dc10_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc10_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc10Controller::deleteAction',));
                    }
                    not_admin_dc10_delete:

                }

                if (0 === strpos($pathinfo, '/admin/dc20')) {
                    // admin_dc20_index
                    if ('/admin/dc20' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_dc20_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_dc20_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc20_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc20Controller::indexAction',  '_route' => 'admin_dc20_index',);
                    }
                    not_admin_dc20_index:

                    // admin_dc20_show
                    if (preg_match('#^/admin/dc20/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc20_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc20_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc20Controller::showAction',));
                    }
                    not_admin_dc20_show:

                    // admin_dc20_new
                    if ('/admin/dc20/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc20_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc20Controller::newAction',  '_route' => 'admin_dc20_new',);
                    }
                    not_admin_dc20_new:

                    // admin_dc20_edit
                    if (preg_match('#^/admin/dc20/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc20_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc20_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc20Controller::editAction',));
                    }
                    not_admin_dc20_edit:

                    // admin_dc20_delete
                    if (preg_match('#^/admin/dc20/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_dc20_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc20_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc20Controller::deleteAction',));
                    }
                    not_admin_dc20_delete:

                }

                if (0 === strpos($pathinfo, '/admin/dc30')) {
                    // admin_dc30_index
                    if ('/admin/dc30' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_dc30_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_dc30_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc30_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc30Controller::indexAction',  '_route' => 'admin_dc30_index',);
                    }
                    not_admin_dc30_index:

                    // admin_dc30_show
                    if (preg_match('#^/admin/dc30/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc30_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc30_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc30Controller::showAction',));
                    }
                    not_admin_dc30_show:

                    // admin_dc30_new
                    if ('/admin/dc30/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc30_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc30Controller::newAction',  '_route' => 'admin_dc30_new',);
                    }
                    not_admin_dc30_new:

                    // admin_dc30_edit
                    if (preg_match('#^/admin/dc30/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc30_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc30_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc30Controller::editAction',));
                    }
                    not_admin_dc30_edit:

                    // admin_dc30_delete
                    if (preg_match('#^/admin/dc30/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_dc30_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc30_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc30Controller::deleteAction',));
                    }
                    not_admin_dc30_delete:

                }

                if (0 === strpos($pathinfo, '/admin/dc50')) {
                    // admin_dc50_index
                    if ('/admin/dc50' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_dc50_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_dc50_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc50_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc50Controller::indexAction',  '_route' => 'admin_dc50_index',);
                    }
                    not_admin_dc50_index:

                    // admin_dc50_show
                    if (preg_match('#^/admin/dc50/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc50_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc50_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc50Controller::showAction',));
                    }
                    not_admin_dc50_show:

                    // admin_dc50_new
                    if ('/admin/dc50/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc50_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc50Controller::newAction',  '_route' => 'admin_dc50_new',);
                    }
                    not_admin_dc50_new:

                    // admin_dc50_edit
                    if (preg_match('#^/admin/dc50/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc50_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc50_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc50Controller::editAction',));
                    }
                    not_admin_dc50_edit:

                    // admin_dc50_delete
                    if (preg_match('#^/admin/dc50/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_dc50_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc50_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc50Controller::deleteAction',));
                    }
                    not_admin_dc50_delete:

                }

                if (0 === strpos($pathinfo, '/admin/dc40')) {
                    // admin_dc40_index
                    if ('/admin/dc40' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_dc40_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_dc40_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc40_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc40Controller::indexAction',  '_route' => 'admin_dc40_index',);
                    }
                    not_admin_dc40_index:

                    // admin_dc40_show
                    if (preg_match('#^/admin/dc40/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dc40_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc40_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc40Controller::showAction',));
                    }
                    not_admin_dc40_show:

                    // admin_dc40_new
                    if ('/admin/dc40/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc40_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc40Controller::newAction',  '_route' => 'admin_dc40_new',);
                    }
                    not_admin_dc40_new:

                    // admin_dc40_edit
                    if (preg_match('#^/admin/dc40/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_dc40_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc40_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc40Controller::editAction',));
                    }
                    not_admin_dc40_edit:

                    // admin_dc40_delete
                    if (preg_match('#^/admin/dc40/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_dc40_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_dc40_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Dc40Controller::deleteAction',));
                    }
                    not_admin_dc40_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/venals')) {
                // admin_venals_index
                if ('/admin/venals' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_venals_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_venals_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_venals_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VenalsController::indexAction',  '_route' => 'admin_venals_index',);
                }
                not_admin_venals_index:

                // admin_venals_show
                if (preg_match('#^/admin/venals/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_venals_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_venals_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VenalsController::showAction',));
                }
                not_admin_venals_show:

                // admin_venals_new
                if ('/admin/venals/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_venals_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VenalsController::newAction',  '_route' => 'admin_venals_new',);
                }
                not_admin_venals_new:

                // admin_venals_edit
                if (preg_match('#^/admin/venals/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_venals_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_venals_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VenalsController::editAction',));
                }
                not_admin_venals_edit:

                // admin_venals_delete
                if (preg_match('#^/admin/venals/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_venals_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_venals_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VenalsController::deleteAction',));
                }
                not_admin_venals_delete:

            }

            if (0 === strpos($pathinfo, '/admin/rc')) {
                if (0 === strpos($pathinfo, '/admin/rc3')) {
                    // admin_rc3_index
                    if ('/admin/rc3' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_rc3_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_rc3_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc3_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc3Controller::indexAction',  '_route' => 'admin_rc3_index',);
                    }
                    not_admin_rc3_index:

                    // admin_rc3_show
                    if (preg_match('#^/admin/rc3/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc3_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc3_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc3Controller::showAction',));
                    }
                    not_admin_rc3_show:

                    // admin_rc3_new
                    if ('/admin/rc3/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc3_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc3Controller::newAction',  '_route' => 'admin_rc3_new',);
                    }
                    not_admin_rc3_new:

                    // admin_rc3_edit
                    if (preg_match('#^/admin/rc3/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc3_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc3_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc3Controller::editAction',));
                    }
                    not_admin_rc3_edit:

                    // admin_rc3_delete
                    if (preg_match('#^/admin/rc3/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_rc3_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc3_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc3Controller::deleteAction',));
                    }
                    not_admin_rc3_delete:

                }

                if (0 === strpos($pathinfo, '/admin/rc5')) {
                    // admin_rc5_index
                    if ('/admin/rc5' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_rc5_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_rc5_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc5_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc5Controller::indexAction',  '_route' => 'admin_rc5_index',);
                    }
                    not_admin_rc5_index:

                    // admin_rc5_show
                    if (preg_match('#^/admin/rc5/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc5_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc5_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc5Controller::showAction',));
                    }
                    not_admin_rc5_show:

                    // admin_rc5_new
                    if ('/admin/rc5/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc5_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc5Controller::newAction',  '_route' => 'admin_rc5_new',);
                    }
                    not_admin_rc5_new:

                    // admin_rc5_edit
                    if (preg_match('#^/admin/rc5/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc5_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc5_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc5Controller::editAction',));
                    }
                    not_admin_rc5_edit:

                    // admin_rc5_delete
                    if (preg_match('#^/admin/rc5/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_rc5_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc5_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc5Controller::deleteAction',));
                    }
                    not_admin_rc5_delete:

                }

                if (0 === strpos($pathinfo, '/admin/rc7')) {
                    // admin_rc7_index
                    if ('/admin/rc7' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_rc7_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_rc7_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc7_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc7Controller::indexAction',  '_route' => 'admin_rc7_index',);
                    }
                    not_admin_rc7_index:

                    // admin_rc7_show
                    if (preg_match('#^/admin/rc7/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_rc7_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc7_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc7Controller::showAction',));
                    }
                    not_admin_rc7_show:

                    // admin_rc7_new
                    if ('/admin/rc7/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc7_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc7Controller::newAction',  '_route' => 'admin_rc7_new',);
                    }
                    not_admin_rc7_new:

                    // admin_rc7_edit
                    if (preg_match('#^/admin/rc7/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_rc7_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc7_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc7Controller::editAction',));
                    }
                    not_admin_rc7_edit:

                    // admin_rc7_delete
                    if (preg_match('#^/admin/rc7/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_rc7_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc7_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc7Controller::deleteAction',));
                    }
                    not_admin_rc7_delete:

                }

                if (0 === strpos($pathinfo, '/admin/rc1')) {
                    if (0 === strpos($pathinfo, '/admin/rc10')) {
                        // admin_rc10_index
                        if ('/admin/rc10' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_admin_rc10_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'admin_rc10_index');
                            }

                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_rc10_index;
                            }

                            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc10Controller::indexAction',  '_route' => 'admin_rc10_index',);
                        }
                        not_admin_rc10_index:

                        // admin_rc10_show
                        if (preg_match('#^/admin/rc10/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_rc10_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc10_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc10Controller::showAction',));
                        }
                        not_admin_rc10_show:

                        // admin_rc10_new
                        if ('/admin/rc10/new' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_rc10_new;
                            }

                            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc10Controller::newAction',  '_route' => 'admin_rc10_new',);
                        }
                        not_admin_rc10_new:

                        // admin_rc10_edit
                        if (preg_match('#^/admin/rc10/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_rc10_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc10_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc10Controller::editAction',));
                        }
                        not_admin_rc10_edit:

                        // admin_rc10_delete
                        if (preg_match('#^/admin/rc10/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_rc10_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc10_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc10Controller::deleteAction',));
                        }
                        not_admin_rc10_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/rc15')) {
                        // admin_rc15_index
                        if ('/admin/rc15' === rtrim($pathinfo, '/')) {
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                                goto not_admin_rc15_index;
                            } else {
                                return $this->redirect($rawPathinfo.'/', 'admin_rc15_index');
                            }

                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_rc15_index;
                            }

                            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc15Controller::indexAction',  '_route' => 'admin_rc15_index',);
                        }
                        not_admin_rc15_index:

                        // admin_rc15_show
                        if (preg_match('#^/admin/rc15/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_admin_rc15_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc15_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc15Controller::showAction',));
                        }
                        not_admin_rc15_show:

                        // admin_rc15_new
                        if ('/admin/rc15/new' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_rc15_new;
                            }

                            return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc15Controller::newAction',  '_route' => 'admin_rc15_new',);
                        }
                        not_admin_rc15_new:

                        // admin_rc15_edit
                        if (preg_match('#^/admin/rc15/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_admin_rc15_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc15_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc15Controller::editAction',));
                        }
                        not_admin_rc15_edit:

                        // admin_rc15_delete
                        if (preg_match('#^/admin/rc15/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_admin_rc15_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rc15_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Rc15Controller::deleteAction',));
                        }
                        not_admin_rc15_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/vols')) {
                // admin_vols_index
                if ('/admin/vols' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_vols_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_vols_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_vols_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VolsController::indexAction',  '_route' => 'admin_vols_index',);
                }
                not_admin_vols_index:

                // admin_vols_show
                if (preg_match('#^/admin/vols/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_vols_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vols_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VolsController::showAction',));
                }
                not_admin_vols_show:

                // admin_vols_new
                if ('/admin/vols/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_vols_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VolsController::newAction',  '_route' => 'admin_vols_new',);
                }
                not_admin_vols_new:

                // admin_vols_edit
                if (preg_match('#^/admin/vols/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_vols_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vols_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VolsController::editAction',));
                }
                not_admin_vols_edit:

                // admin_vols_delete
                if (preg_match('#^/admin/vols/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_vols_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_vols_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\VolsController::deleteAction',));
                }
                not_admin_vols_delete:

            }

            if (0 === strpos($pathinfo, '/admin/incendies')) {
                // admin_incendies_index
                if ('/admin/incendies' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_incendies_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_incendies_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_incendies_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\IncendiesController::indexAction',  '_route' => 'admin_incendies_index',);
                }
                not_admin_incendies_index:

                // admin_incendies_show
                if (preg_match('#^/admin/incendies/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_incendies_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_incendies_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\IncendiesController::showAction',));
                }
                not_admin_incendies_show:

                // admin_incendies_new
                if ('/admin/incendies/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_incendies_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\IncendiesController::newAction',  '_route' => 'admin_incendies_new',);
                }
                not_admin_incendies_new:

                // admin_incendies_edit
                if (preg_match('#^/admin/incendies/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_incendies_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_incendies_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\IncendiesController::editAction',));
                }
                not_admin_incendies_edit:

                // admin_incendies_delete
                if (preg_match('#^/admin/incendies/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_incendies_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_incendies_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\IncendiesController::deleteAction',));
                }
                not_admin_incendies_delete:

            }

            if (0 === strpos($pathinfo, '/admin/defences')) {
                // admin_defences_index
                if ('/admin/defences' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_defences_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_defences_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_defences_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefencesController::indexAction',  '_route' => 'admin_defences_index',);
                }
                not_admin_defences_index:

                // admin_defences_show
                if (preg_match('#^/admin/defences/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_defences_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_defences_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefencesController::showAction',));
                }
                not_admin_defences_show:

                // admin_defences_new
                if ('/admin/defences/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_defences_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefencesController::newAction',  '_route' => 'admin_defences_new',);
                }
                not_admin_defences_new:

                // admin_defences_edit
                if (preg_match('#^/admin/defences/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_defences_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_defences_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefencesController::editAction',));
                }
                not_admin_defences_edit:

                // admin_defences_delete
                if (preg_match('#^/admin/defences/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_defences_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_defences_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DefencesController::deleteAction',));
                }
                not_admin_defences_delete:

            }

            if (0 === strpos($pathinfo, '/admin/bris')) {
                // admin_bris_index
                if ('/admin/bris' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_bris_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_bris_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_bris_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BrisController::indexAction',  '_route' => 'admin_bris_index',);
                }
                not_admin_bris_index:

                // admin_bris_show
                if (preg_match('#^/admin/bris/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_bris_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bris_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BrisController::showAction',));
                }
                not_admin_bris_show:

                // admin_bris_new
                if ('/admin/bris/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_bris_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BrisController::newAction',  '_route' => 'admin_bris_new',);
                }
                not_admin_bris_new:

                // admin_bris_edit
                if (preg_match('#^/admin/bris/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_bris_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bris_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BrisController::editAction',));
                }
                not_admin_bris_edit:

                // admin_bris_delete
                if (preg_match('#^/admin/bris/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_bris_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_bris_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\BrisController::deleteAction',));
                }
                not_admin_bris_delete:

            }

            if (0 === strpos($pathinfo, '/admin/assistance')) {
                if (0 === strpos($pathinfo, '/admin/assistance1')) {
                    // admin_assistance1_index
                    if ('/admin/assistance1' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_assistance1_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_assistance1_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assistance1_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance1Controller::indexAction',  '_route' => 'admin_assistance1_index',);
                    }
                    not_admin_assistance1_index:

                    // admin_assistance1_show
                    if (preg_match('#^/admin/assistance1/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assistance1_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance1_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance1Controller::showAction',));
                    }
                    not_admin_assistance1_show:

                    // admin_assistance1_new
                    if ('/admin/assistance1/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_assistance1_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance1Controller::newAction',  '_route' => 'admin_assistance1_new',);
                    }
                    not_admin_assistance1_new:

                    // admin_assistance1_edit
                    if (preg_match('#^/admin/assistance1/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_assistance1_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance1_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance1Controller::editAction',));
                    }
                    not_admin_assistance1_edit:

                    // admin_assistance1_delete
                    if (preg_match('#^/admin/assistance1/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_assistance1_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance1_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance1Controller::deleteAction',));
                    }
                    not_admin_assistance1_delete:

                }

                if (0 === strpos($pathinfo, '/admin/assistance2')) {
                    // admin_assistance2_index
                    if ('/admin/assistance2' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_admin_assistance2_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'admin_assistance2_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assistance2_index;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance2Controller::indexAction',  '_route' => 'admin_assistance2_index',);
                    }
                    not_admin_assistance2_index:

                    // admin_assistance2_show
                    if (preg_match('#^/admin/assistance2/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assistance2_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance2_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance2Controller::showAction',));
                    }
                    not_admin_assistance2_show:

                    // admin_assistance2_new
                    if ('/admin/assistance2/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_assistance2_new;
                        }

                        return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance2Controller::newAction',  '_route' => 'admin_assistance2_new',);
                    }
                    not_admin_assistance2_new:

                    // admin_assistance2_edit
                    if (preg_match('#^/admin/assistance2/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_admin_assistance2_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance2_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance2Controller::editAction',));
                    }
                    not_admin_assistance2_edit:

                    // admin_assistance2_delete
                    if (preg_match('#^/admin/assistance2/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_assistance2_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance2_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance2Controller::deleteAction',));
                    }
                    not_admin_assistance2_delete:

                }

                // admin_assistance3_index
                if ('/admin/assistance' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_assistance3_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_assistance3_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_assistance3_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance3Controller::indexAction',  '_route' => 'admin_assistance3_index',);
                }
                not_admin_assistance3_index:

                // admin_assistance3_show
                if (preg_match('#^/admin/assistance/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_assistance3_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance3_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance3Controller::showAction',));
                }
                not_admin_assistance3_show:

                // admin_assistance3_new
                if ('/admin/assistance/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_assistance3_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance3Controller::newAction',  '_route' => 'admin_assistance3_new',);
                }
                not_admin_assistance3_new:

                // admin_assistance3_edit
                if (preg_match('#^/admin/assistance/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_assistance3_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance3_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance3Controller::editAction',));
                }
                not_admin_assistance3_edit:

                // admin_assistance3_delete
                if (preg_match('#^/admin/assistance/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_assistance3_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assistance3_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\Assistance3Controller::deleteAction',));
                }
                not_admin_assistance3_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pubs')) {
                // admin_pubs_index
                if ('/admin/pubs' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_pubs_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_pubs_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pubs_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PubsController::indexAction',  '_route' => 'admin_pubs_index',);
                }
                not_admin_pubs_index:

                // admin_pubs_show
                if (preg_match('#^/admin/pubs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pubs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pubs_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PubsController::showAction',));
                }
                not_admin_pubs_show:

                // admin_pubs_new
                if ('/admin/pubs/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_pubs_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PubsController::newAction',  '_route' => 'admin_pubs_new',);
                }
                not_admin_pubs_new:

                // admin_pubs_edit
                if (preg_match('#^/admin/pubs/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_pubs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pubs_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PubsController::editAction',));
                }
                not_admin_pubs_edit:

                // admin_pubs_delete
                if (preg_match('#^/admin/pubs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_pubs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pubs_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\PubsController::deleteAction',));
                }
                not_admin_pubs_delete:

            }

            if (0 === strpos($pathinfo, '/admin/entreprise')) {
                // admin_entreprise_index
                if ('/admin/entreprise' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_entreprise_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_entreprise_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_entreprise_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\EntreprisesController::indexAction',  '_route' => 'admin_entreprise_index',);
                }
                not_admin_entreprise_index:

                // admin_entreprise_show
                if (preg_match('#^/admin/entreprise/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_entreprise_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_entreprise_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\EntreprisesController::showAction',));
                }
                not_admin_entreprise_show:

                // admin_entreprise_new
                if ('/admin/entreprise/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_entreprise_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\EntreprisesController::newAction',  '_route' => 'admin_entreprise_new',);
                }
                not_admin_entreprise_new:

                // admin_entreprise_edit
                if (preg_match('#^/admin/entreprise/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_entreprise_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_entreprise_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\EntreprisesController::editAction',));
                }
                not_admin_entreprise_edit:

                // admin_entreprise_delete
                if (preg_match('#^/admin/entreprise/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_entreprise_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_entreprise_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\EntreprisesController::deleteAction',));
                }
                not_admin_entreprise_delete:

            }

            if (0 === strpos($pathinfo, '/admin/doncs')) {
                // admin_docs_index
                if ('/admin/doncs' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_docs_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_docs_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_docs_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DocsController::indexAction',  '_route' => 'admin_docs_index',);
                }
                not_admin_docs_index:

                // admin_docs_show
                if (preg_match('#^/admin/doncs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_docs_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_docs_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DocsController::showAction',));
                }
                not_admin_docs_show:

                // admin_docs_new
                if ('/admin/doncs/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_docs_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DocsController::newAction',  '_route' => 'admin_docs_new',);
                }
                not_admin_docs_new:

                // admin_docs_edit
                if (preg_match('#^/admin/doncs/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_docs_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_docs_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DocsController::editAction',));
                }
                not_admin_docs_edit:

                // admin_docs_delete
                if (preg_match('#^/admin/doncs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_docs_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_docs_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\DocsController::deleteAction',));
                }
                not_admin_docs_delete:

            }

            if (0 === strpos($pathinfo, '/admin/mentions')) {
                // admin_mentions_index
                if ('/admin/mentions' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_admin_mentions_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'admin_mentions_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_mentions_index;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MentionsController::indexAction',  '_route' => 'admin_mentions_index',);
                }
                not_admin_mentions_index:

                // admin_mentions_show
                if (preg_match('#^/admin/mentions/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_mentions_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mentions_show')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MentionsController::showAction',));
                }
                not_admin_mentions_show:

                // admin_mentions_new
                if ('/admin/mentions/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_mentions_new;
                    }

                    return array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MentionsController::newAction',  '_route' => 'admin_mentions_new',);
                }
                not_admin_mentions_new:

                // admin_mentions_edit
                if (preg_match('#^/admin/mentions/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_mentions_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mentions_edit')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MentionsController::editAction',));
                }
                not_admin_mentions_edit:

                // admin_mentions_delete
                if (preg_match('#^/admin/mentions/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_mentions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mentions_delete')), array (  '_controller' => 'Cosanit\\CosanitBundle\\Controller\\MentionsController::deleteAction',));
                }
                not_admin_mentions_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
            }

            // elfinder
            if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
