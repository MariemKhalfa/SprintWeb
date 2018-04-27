<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // back_office_homepage
                if ('/admin/home' === $pathinfo) {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
                }

                if (0 === strpos($pathinfo, '/admin/promotion')) {
                    // promotions_index
                    if ('/admin/promotion' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_promotions_index;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\PromotionsController::indexAction',  '_route' => 'promotions_index',);
                    }
                    not_promotions_index:

                    // promotions_show
                    if (preg_match('#^/admin/promotion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_promotions_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotions_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PromotionsController::showAction',));
                    }
                    not_promotions_show:

                    // promotions_new
                    if ('/admin/promotion/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_promotions_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\PromotionsController::newAction',  '_route' => 'promotions_new',);
                    }
                    not_promotions_new:

                    // promotions_edit
                    if (preg_match('#^/admin/promotion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_promotions_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotions_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PromotionsController::editAction',));
                    }
                    not_promotions_edit:

                    // promotions_delete
                    if (preg_match('#^/admin/promotion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_promotions_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'promotions_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PromotionsController::deleteAction',));
                    }
                    not_promotions_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/publicite')) {
                    // publicite_index
                    if ('/admin/publicite' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_publicite_index;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\PubliciteController::indexAction',  '_route' => 'publicite_index',);
                    }
                    not_publicite_index:

                    // publicite_show
                    if (preg_match('#^/admin/publicite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_publicite_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicite_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PubliciteController::showAction',));
                    }
                    not_publicite_show:

                    // publicite_new
                    if ('/admin/publicite/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_publicite_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\PubliciteController::newAction',  '_route' => 'publicite_new',);
                    }
                    not_publicite_new:

                    // publicite_edit
                    if (preg_match('#^/admin/publicite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_publicite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicite_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PubliciteController::editAction',));
                    }
                    not_publicite_edit:

                    // publicite_delete
                    if (preg_match('#^/admin/publicite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_publicite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicite_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\PubliciteController::deleteAction',));
                    }
                    not_publicite_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/coupons')) {
                    // coupons_index
                    if ('/admin/coupons' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_coupons_index;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\couponsController::indexAction',  '_route' => 'coupons_index',);
                    }
                    not_coupons_index:

                    // coupons_show
                    if (preg_match('#^/admin/coupons/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_coupons_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupons_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\couponsController::showAction',));
                    }
                    not_coupons_show:

                    // coupons_new
                    if ('/admin/coupons/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_coupons_new;
                        }

                        return array (  '_controller' => 'BackOfficeBundle\\Controller\\couponsController::newAction',  '_route' => 'coupons_new',);
                    }
                    not_coupons_new:

                    // coupons_edit
                    if (preg_match('#^/admin/coupons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_coupons_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupons_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\couponsController::editAction',));
                    }
                    not_coupons_edit:

                    // coupons_delete
                    if (preg_match('#^/admin/coupons/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_coupons_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coupons_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\couponsController::deleteAction',));
                    }
                    not_coupons_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // admin_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminLoginAction',  '_route' => 'admin_login',);
                    }

                    // admin_login_check
                    if ('/admin/login_check' === $pathinfo) {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'admin_login_check',);
                    }

                }

                // admin_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'admin_logout',);
                }

                // admin
                if ('/admin' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::amdinAction',  '_route' => 'admin',);
                }

            }

            elseif (0 === strpos($pathinfo, '/activite')) {
                // activite_viewActivite
                if ('/activite/view' === $pathinfo) {
                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::afficheBackAction',  '_route' => 'activite_viewActivite',);
                }

                // activite_detailsActivite
                if ('/activite/details' === $pathinfo) {
                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::ActiviteDetailsAction',  '_route' => 'activite_detailsActivite',);
                }

                // activite_deleteActivite
                if (0 === strpos($pathinfo, '/activite/delete') && preg_match('#^/activite/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_deleteActivite')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::deleteActiviteAction',));
                }

                // activite_list
                if ('/activite/liste' === $pathinfo) {
                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::listFrontAction',  '_route' => 'activite_list',);
                }

                // activite_createActivite
                if ('/activite/create' === $pathinfo) {
                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::createActiviteAction',  '_route' => 'activite_createActivite',);
                }

                if (0 === strpos($pathinfo, '/activite/affich')) {
                    // activite_afficherActivite
                    if ('/activite/afficher' === $pathinfo) {
                        return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::afficheBackAction',  '_route' => 'activite_afficherActivite',);
                    }

                    // activite_afficherFrontctivite
                    if ('/activite/affich' === $pathinfo) {
                        return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::viewActiviteAction',  '_route' => 'activite_afficherFrontctivite',);
                    }

                }

                // activite_updateActivite
                if (0 === strpos($pathinfo, '/activite/update') && preg_match('#^/activite/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_updateActivite')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::updateActiviteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/aff')) {
                // e_learning_afficherEnseignant
                if ('/affichEnseignant' === $pathinfo) {
                    return array (  '_controller' => 'ELearningBundle\\Controller\\DefaultController::afficheAction',  '_route' => 'e_learning_afficherEnseignant',);
                }

                // e_learning_afficherBackEnseignant
                if ('/affichbackEnseignant' === $pathinfo) {
                    return array (  '_controller' => 'ELearningBundle\\Controller\\DefaultController::afficheBackAction',  '_route' => 'e_learning_afficherBackEnseignant',);
                }

                // e_learning_affecterEnfant
                if (0 === strpos($pathinfo, '/affecterEnseignant') && preg_match('#^/affecterEnseignant/(?P<idm>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_learning_affecterEnfant')), array (  '_controller' => 'ELearningBundle\\Controller\\EnfantMaladeController::ajoutAction',));
                }

            }

            // front_aboutUsPage
            if ('/aboutUs' === $pathinfo) {
                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::aboutUsAction',  '_route' => 'front_aboutUsPage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/jeu')) {
            // jeux_homepage
            if ('/jeux' === $pathinfo) {
                return array (  '_controller' => 'JeuxBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeux_homepage',);
            }

            // jeu_memoire
            if ('/jeu/memory' === $pathinfo) {
                return array (  '_controller' => 'JeuxBundle\\Controller\\JeuxController::memoryAction',  '_route' => 'jeu_memoire',);
            }

            // jeu_math
            if ('/jeu/mathquiz' === $pathinfo) {
                return array (  '_controller' => 'JeuxBundle\\Controller\\JeuxController::mathAction',  '_route' => 'jeu_math',);
            }

        }

        // activite_homepage
        if ('/homepage' === $pathinfo) {
            return array (  '_controller' => 'ActiviteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'activite_homepage',);
        }

        if (0 === strpos($pathinfo, '/Modifi')) {
            // activite_modifBackEnseignant
            if (0 === strpos($pathinfo, '/ModificationActivite') && preg_match('#^/ModificationActivite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite_modifBackEnseignant')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::updateActiviteAction',));
            }

            // e_learning_modifBackEnseignant
            if ('/ModificationEnseignant' === $pathinfo) {
                return array (  '_controller' => 'ELearningBundle\\Controller\\DefaultController::modifAction',  '_route' => 'e_learning_modifBackEnseignant',);
            }

            // Evenement_modifier
            if ('/ModifierEvenement' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::UpdateAction',  '_route' => 'Evenement_modifier',);
            }

        }

        elseif (0 === strpos($pathinfo, '/e')) {
            // evenement_homepage
            if ('/evenements' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
            }

            // evenement_parent
            if ('/evenementParent' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::listFrontAction',  '_route' => 'evenement_parent',);
            }

            // recette_homepage
            if ('/es' === $pathinfo) {
                return array (  '_controller' => 'RecetteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'recette_homepage',);
            }

        }

        // evenement_ajout
        if ('/AjoutEvenement' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ajoutAction',  '_route' => 'evenement_ajout',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // evenement_list
            if ('/listesEvenements' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::listAction',  '_route' => 'evenement_list',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // Evenement_supprimer
        if ('/SupprimerEvenement' === $pathinfo) {
            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::DeleteAction',  '_route' => 'Evenement_supprimer',);
        }

        // e_learning_suppBackEnseignant
        if ('/SupprimerEnseignant' === $pathinfo) {
            return array (  '_controller' => 'ELearningBundle\\Controller\\DefaultController::suppAction',  '_route' => 'e_learning_suppBackEnseignant',);
        }

        if (0 === strpos($pathinfo, '/babysitting')) {
            // babysitting_homepage
            if ('/babysitting' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'babysitting_homepage');
                }

                return array (  '_controller' => 'BabysittingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'babysitting_homepage',);
            }

            // ajouter_babysitting
            if ('/babysitting/ajouterBabysitting' === $pathinfo) {
                return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::ajouterBabysittingAction',  '_route' => 'ajouter_babysitting',);
            }

            // modifier_babysitting
            if (0 === strpos($pathinfo, '/babysitting/modifierBabysitting') && preg_match('#^/babysitting/modifierBabysitting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_babysitting')), array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::modifierBabysittingAction',));
            }

            if (0 === strpos($pathinfo, '/babysitting/list')) {
                // lister_mes_babysittings
                if ('/babysitting/listerMesBabysittings' === $pathinfo) {
                    return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::listerMesBabysittingsAction',  '_route' => 'lister_mes_babysittings',);
                }

                // lister_des_babysittings
                if ('/babysitting/listerDesBabysittings' === $pathinfo) {
                    return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::listerDesBabysittingsAction',  '_route' => 'lister_des_babysittings',);
                }

                // list_babysittings_admin
                if ('/babysitting/listBabysittingsAdmin' === $pathinfo) {
                    return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::listBabysittingsAdminAction',  '_route' => 'list_babysittings_admin',);
                }

                // list_babysitters_admin
                if ('/babysitting/listBabysittersAdmin' === $pathinfo) {
                    return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::listBabysittersAdminAction',  '_route' => 'list_babysitters_admin',);
                }

            }

            // historique_babysitting
            if ('/babysitting/historiqueBabysitting' === $pathinfo) {
                return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::historiqueBabysittingAction',  '_route' => 'historique_babysitting',);
            }

            // chercher_babysitting
            if ('/babysitting/chercherBabysitting' === $pathinfo) {
                return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::chercherBabysittingAction',  '_route' => 'chercher_babysitting',);
            }

            // distance_babysitting
            if ('/babysitting/distanceBabysitting' === $pathinfo) {
                return array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::distanceBabysittingAction',  '_route' => 'distance_babysitting',);
            }

            // details_babysitting
            if (0 === strpos($pathinfo, '/babysitting/detailsBabysitting') && preg_match('#^/babysitting/detailsBabysitting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_babysitting')), array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::detailsBabysittingAction',));
            }

            // supprimer_babysitting
            if (0 === strpos($pathinfo, '/babysitting/supprimerBabysitting') && preg_match('#^/babysitting/supprimerBabysitting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_babysitting')), array (  '_controller' => 'BabysittingBundle\\Controller\\BabysittingController::supprimerBabysittingAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/medecin')) {
            // medecin_homepage
            if ('/medecin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'medecin_homepage');
                }

                return array (  '_controller' => 'MedecinBundle\\Controller\\DefaultController::indexAction',  '_route' => 'medecin_homepage',);
            }

            // medecin_ajout
            if ('/medecin/Ajoutmedecin' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::ajoutAction',  '_route' => 'medecin_ajout',);
            }

            // demande_accepter2
            if ('/medecin/AccepterDemande' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::AccepterDemandeAction',  '_route' => 'demande_accepter2',);
            }

            // medecin_liste
            if ('/medecin/listesmedecins' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::listAction',  '_route' => 'medecin_liste',);
            }

            // demande_afficher2
            if ('/medecin/listesgarderiesFront' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::listeDemandesAction',  '_route' => 'demande_afficher2',);
            }

            // medecin_modifier
            if ('/medecin/Modifiermedecins' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::UpdateAction',  '_route' => 'medecin_modifier',);
            }

            if (0 === strpos($pathinfo, '/medecin/S')) {
                // medecin_supprimer
                if ('/medecin/Supprimermedecin' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::DeleteAction',  '_route' => 'medecin_supprimer',);
                }

                // demande_supprimer2
                if ('/medecin/SupprimerDemande' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::DeleteDemandeAction',  '_route' => 'demande_supprimer2',);
                }

                // garderie_statistiques2
                if ('/medecin/StatistiquesGarderie' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::StatistiquesAction',  '_route' => 'garderie_statistiques2',);
                }

            }

            elseif (0 === strpos($pathinfo, '/medecin/garderie')) {
                // garderie_listeFront2
                if ('/medecin/garderieList' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::listFrontAction',  '_route' => 'garderie_listeFront2',);
                }

                // garderie_details
                if ('/medecin/garderiedetails' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::DetailsGarderiesAction',  '_route' => 'garderie_details',);
                }

                // garderie_inscription
                if ('/medecin/garderieinscription' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::InscriptionAction',  '_route' => 'garderie_inscription',);
                }

                // garderie_meilleur
                if ('/medecin/garderieMeilleur' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::RatingGarderiesAction',  '_route' => 'garderie_meilleur',);
                }

            }

            // medecin_affichageFront
            if ('/medecin/affichageFront' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::listMedecinFrontAction',  '_route' => 'medecin_affichageFront',);
            }

            // medecin_details
            if ('/medecin/detailsmedecin' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::DetailsMedecinsAction',  '_route' => 'medecin_details',);
            }

            // garderie_notif2
            if ('/medecin/notif2' === $pathinfo) {
                return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::notifAction',  '_route' => 'garderie_notif2',);
            }

            if (0 === strpos($pathinfo, '/medecin/rechercher')) {
                // garderie_rechercher
                if ('/medecin/rechercher' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::rechercherAction',  '_route' => 'garderie_rechercher',);
                }

                // medecin_rechercher
                if ('/medecin/rechercherMedecin' === $pathinfo) {
                    return array (  '_controller' => 'MedecinBundle\\Controller\\MedecinController::rechercherMedecinAction',  '_route' => 'medecin_rechercher',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/covoiturage')) {
            // covoiturage_homepage
            if ('/covoiturage' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'covoiturage_homepage');
                }

                return array (  '_controller' => 'CovoiturageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'covoiturage_homepage',);
            }

            // ajout_voiture
            if ('/covoiturage/ajoutVoiture' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\VoitureController::ajoutVoitureAction',  '_route' => 'ajout_voiture',);
            }

            // ajouter_cov
            if ('/covoiturage/ajouterCov' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::ajouterCovAction',  '_route' => 'ajouter_cov',);
            }

            if (0 === strpos($pathinfo, '/covoiturage/d')) {
                // detail_voiture
                if ('/covoiturage/detailVoiture' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\VoitureController::detailVoitureAction',  '_route' => 'detail_voiture',);
                }

                // details_cov
                if (0 === strpos($pathinfo, '/covoiturage/detailsCov') && preg_match('#^/covoiturage/detailsCov/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_cov')), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::detailsCovAction',));
                }

                // distance_cov
                if ('/covoiturage/distanceCov' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::distanceCovAction',  '_route' => 'distance_cov',);
                }

            }

            // supprimer_voiture
            if ('/covoiturage/supprimerVoiture' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\VoitureController::supprimerVoitureAction',  '_route' => 'supprimer_voiture',);
            }

            // supprimer_cov
            if (0 === strpos($pathinfo, '/covoiturage/supprimerCov') && preg_match('#^/covoiturage/supprimerCov/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_cov')), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::supprimerCovAction',));
            }

            if (0 === strpos($pathinfo, '/covoiturage/m')) {
                // modifier_voiture
                if ('/covoiturage/modifierVoiture' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\VoitureController::modifierVoitureAction',  '_route' => 'modifier_voiture',);
                }

                // modifier_cov
                if (0 === strpos($pathinfo, '/covoiturage/modifierCov') && preg_match('#^/covoiturage/modifierCov/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_cov')), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::modifierCovAction',));
                }

                // matching_cov
                if ('/covoiturage/matchingCov' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::matchingCovAction',  '_route' => 'matching_cov',);
                }

            }

            elseif (0 === strpos($pathinfo, '/covoiturage/list')) {
                // lister_mes_cov
                if ('/covoiturage/listerMesCov' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::listerMesCovAction',  '_route' => 'lister_mes_cov',);
                }

                // lister_des_cov
                if ('/covoiturage/listerDesCov' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::listerDesCovAction',  '_route' => 'lister_des_cov',);
                }

                // list_cov_admin
                if ('/covoiturage/listCovAdmin' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::listCovAdminAction',  '_route' => 'list_cov_admin',);
                }

                // list_covoitureurs_admin
                if ('/covoiturage/listCovoitureursAdmin' === $pathinfo) {
                    return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::listCovoitureursAdminAction',  '_route' => 'list_covoitureurs_admin',);
                }

            }

            // historique_cov
            if ('/covoiturage/historiqueCov' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::historiqueCovAction',  '_route' => 'historique_cov',);
            }

            // chercher_cov
            if ('/covoiturage/chercherCov' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::chercherCovAction',  '_route' => 'chercher_cov',);
            }

            // reserver_cov
            if (0 === strpos($pathinfo, '/covoiturage/reserverCov') && preg_match('#^/covoiturage/reserverCov/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserver_cov')), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::reserverCovAction',));
            }

        }

        // contactUs
        if ('/contactUs' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ContactUsAction',  '_route' => 'contactUs',);
        }

        if (0 === strpos($pathinfo, '/garderie')) {
            // garderie_homepage
            if ('/garderie/garderie' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\DefaultController::indexAction',  '_route' => 'garderie_homepage',);
            }

            // garderie_ajout
            if ('/garderie/Ajoutgarderie' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::ajoutAction',  '_route' => 'garderie_ajout',);
            }

            // garderie_liste
            if ('/garderie/listesgarderies' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::listAction',  '_route' => 'garderie_liste',);
            }

            // garderie_modifier
            if ('/garderie/ModifierGarderie' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::UpdateAction',  '_route' => 'garderie_modifier',);
            }

            // garderie_supprimer
            if ('/garderie/SupprimerGarderie' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::DeleteAction',  '_route' => 'garderie_supprimer',);
            }

            // garderie_inscriptionListe
            if ('/garderie/InscriptionListes' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::listesInscriptionAction',  '_route' => 'garderie_inscriptionListe',);
            }

            // garderie_approuver
            if ('/garderie/InscriptionApprouver' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::ApprouverAction',  '_route' => 'garderie_approuver',);
            }

            // garderie_stat
            if ('/garderie/stat' === $pathinfo) {
                return array (  '_controller' => 'GarderieBundle\\Controller\\GarderiesController::StatistiquesInscripionAction',  '_route' => 'garderie_stat',);
            }

        }

        // e_learning_homepage
        if ('/Ens' === $pathinfo) {
            return array (  '_controller' => 'ELearningBundle\\Controller\\DefaultController::indexAction',  '_route' => 'e_learning_homepage',);
        }

        // front_homepage
        if ('/user' === $pathinfo) {
            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
        }

        // front_contactpage
        if ('/ContactUs' === $pathinfo) {
            return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::contactUsAction',  '_route' => 'front_contactpage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
