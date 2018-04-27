<?php

/* ::base.html.twig */
class __TwigTemplate_5cd92683081629bf3dfee6ad7350627c1a63d76af99a8823fc2e2624565dc0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>All For Kids</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\">
    <!-- Google font (font-family: 'Dosis', Roboto;) -->
    <link href=\"https://fonts.googleapis.com/css?family=Dosis:400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700\" rel=\"stylesheet\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <script
            src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

    <!-- Modernizer js -->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
    <!---Mariem -->
    <!-- Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/animate.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/css-plugin-collections.css\" rel=\"stylesheet"), "html", null, true);
        echo "\"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id=\"menuzord-menu-skins\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/menuzord-skins/menuzord-rounded-boxed.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\"/>
    <!-- CSS | Main style file -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/style-main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Preloader Styles -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/preloader.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/custom-bootstrap-margin-padding.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Responsive media queries -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/js/revolution-slider/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/js/revolution-slider/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/js/revolution-slider/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\"/>

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css\"/>

    <!-- Inline CSS based on choices in \"Settings\" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: #24a4be
        }

        .bootstrap-iso form button, .bootstrap-iso form button:hover {
            color: #ffffff !important;
        }

        .bootstrap-iso .btn-custom {
            background: #33b77e
        }

        .bootstrap-iso .btn-custom:hover {
            background: #1fa36a;
        }

        .asteriskField {
            color: red;
        }</style>

    ";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 83
        echo "    <!-- CSS | Theme Color -->
    <link href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/css/colors/theme-skin-color-set-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!---Mariem -->
</head>
<body>
<!--[if lte IE 9]>
<![endif]-->

<!-- Add your site or application content here -->

<!-- <div class=\"fakeloader\"></div> -->

<!-- Main wrapper -->
<div class=\"wrapper\" id=\"wrapper\">

    <!-- Header -->
    <header id=\"header\" class=\"jnr__header header--one clearfix\">
        <!-- Start Header Top Area -->
        <div class=\"junior__header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-lg-6 col-sm-12\">
                        <div class=\"jun__header__top__left\">
                            <ul class=\"top__address d-flex justify-content-start align-items-center flex-wrap flex-lg-nowrap flex-md-nowrap\">
                                <li><i class=\"fa fa-envelope\"></i><a href=\"#\">allforkids.codeminers@gmail.com </a></li>
                                <li><i class=\"fa fa-phone\"></i><span>Contacter maintenant :</span><a href=\"#\">+21652225148</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-lg-6 col-sm-3 col-12\">
                        <div class=\"jun__header__top__right\">
                            <ul class=\"accounting d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center\">

                                ";
        // line 116
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 117
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array())), "html", null, true);
            echo " \" width=\"50px\" height=\"50px\" style=\"margin-right: 15px\"/>

                                    <li style=\"display: block\"><a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "<br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</a></li>
                                    <li><a  href=\"";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">logout</a></li>
                                ";
        } else {
            // line 122
            echo "                                    <li><a class=\"login-trigger\" href=\"#\">Se connecter</a></li>
                                    <li><a  href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Créer un compte</a></li>
                                ";
        }
        // line 125
        echo "

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->
        <!-- Start Mainmenu Area -->
        <div class=\"mainmenu__wrapper bg__cat--1 poss-relative header_top_line sticky__header\">
            <div class=\"container\">
                <div class=\"row d-none d-lg-flex\">
                    <div class=\"col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1\">
                        <div class=\"logo\">
                            <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/kids2.png"), "html", null, true);
        echo "\" alt=\"logo images\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2\">
                        <div class=\"mainmenu__wrap\">
                            <nav class=\"mainmenu__nav\">
                                <ul class=\"mainmenu\">
                                    <li class=\"drop\"><a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>

                                    </li>

                                    <li class=\"drop\"><a href=\"#\">Medecins</a>
                                        <ul class=\"dropdown__menu\">
                                            ";
        // line 155
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 156
            echo "                                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_affichageFront");
            echo "\">Nos Medecins</a></li>
                                                <li><a href=\"";
            // line 157
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_rechercher");
            echo "\">Trouver un medecin</a></li>
                                            ";
        }
        // line 159
        echo "
                                        </ul>
                                    </li>

                                    <li class=\"drop\"><a href=\"#\">Garderies</a>
                                        <ul class=\"dropdown__menu\">
                                            ";
        // line 165
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 166
            echo "                                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_listeFront2");
            echo "\">Nos Garderies</a></li>
                                                <li><a href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_rechercher");
            echo "\">Trouver une garderie</a></li>
                                            ";
        }
        // line 169
        echo "
                                        </ul>
                                    </li>

                                    <li class=\"drop\"><a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("covoiturage_homepage");
        echo "\">Covoiturage</a>
                                        ";
        // line 174
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 175
            echo "                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"";
            // line 176
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher_cov");
            echo "\">Trouver un covoiturage</a></li>
                                            <li><a href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_cov");
            echo "\">Proposer un covoiturage</a></li>
                                            <li><a href=\"";
            // line 178
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_des_cov");
            echo "\">Covoiturages potentiels</a></li>
                                            <li><a href=\"";
            // line 179
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_mes_cov");
            echo "\">Mes covoiturages</a></li>
                                            <li><a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_cov");
            echo "\">Historique covoiturages</a></li>

                                        </ul> ";
        }
        // line 183
        echo "                                    </li>
                                    <li class=\"drop\"><a href=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("babysitting_homepage");
        echo "\">Babysitting</a>
                                        ";
        // line 185
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 186
            echo "                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"";
            // line 187
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher_babysitting");
            echo "\">Trouver un babysitting</a></li>
                                            <li><a href=\"";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_babysitting");
            echo "\">Proposer un babysitting</a></li>
                                            <li><a href=\"";
            // line 189
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister_mes_babysittings");
            echo "\">Afficher mes babysittings</a></li>
                                            <li><a href=\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_babysitting");
            echo "\">Historique babysitting</a></li>

                                        </ul> ";
        }
        // line 193
        echo "                                    </li>
                                    <li class=\"drop\"><a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\">Evènements</a>

                                    </li>
                                    ";
        // line 197
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ENSEIGNANT")) {
            // line 198
            echo "                                    <li class=\"drop\"><a href=\"\">Classe</a>
                                        ";
        } else {
            // line 200
            echo "                                    <li class=\"drop\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("e_learning_afficherEnseignant");
            echo "\">E-learning</a>
                                        ";
        }
        // line 202
        echo "                                    <li class=\"drop\"><a>Jeux</a>
                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeu_memoire");
        echo "\">Jeu de mémoire</a></li>
                                            <li><a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jeu_math");
        echo "\">Quizz pour enfants </a></li>


                                        </ul>
                                    </li>
                                    <li class=\"drop\"><a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_list");
        echo "\">Activités</a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    ";
        // line 218
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PARENT")) {
            // line 219
            echo "                        <div class=\"col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3\">
                            <div class=\"shopbox d-flex justify-content-end align-items-center\">
                                <a class=\"minicart-trigger\">
                                    <i class=\"fa fa-envelope\"></i>
                                </a>
                                <a href=\"";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_notif2");
            echo "\">View</a>
                                <span>";
            // line 225
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->countUnseenNotifications($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
            echo " ";
            echo "</span>
                            </div>
                        </div>
                    ";
        }
        // line 229
        echo "                </div>
                <!-- Mobile Menu -->
                <div class=\"mobile-menu d-block d-lg-none\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/kids2.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>
                    <a class=\"minicart-trigger\" href=\"#\">
                        <i class=\"fa fa-envelope\"></i>
                    </a>

                </div>
                <!-- Mobile Menu -->
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- //Header -->
    ";
        // line 246
        $this->displayBlock('container', $context, $blocks);
        // line 247
        echo "    <!-- Footer Area -->
    <!-- Footer Area -->
    <footer id=\"footer\" class=\"footer-area footer--2\">
        <div class=\"footer__wrapper bg-image--10 section-padding--lg\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"footer__widget\">
                            <div class=\"ft__logo\">
                                <a href=\"index-2.html\">
                                    <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/kids2.png"), "html", null, true);
        echo "\" alt=\"logo images\">
                                </a>
                            </div>
                            <div class=\"ftr__details\">
                                <p>All For Kids est comme son nom l'indique, est une application destinée aux parents et à leurs enfants afin de facilicter la vie aux prents en les aidant à trouver le meilleur pour leurs enfants..</p>
                            </div>
                            <div class=\"ftr__address__inner\">
                                <div class=\"footer__social__icon\">
                                    <ul class=\"dacre__social__link--2 d-flex justify-content-start\">
                                        <li class=\"facebook\"><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li class=\"twitter\"><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li class=\"vimeo\"><a href=\"https://vimeo.com/\"><i class=\"fa fa-vimeo\"></i></a></li>
                                        <li class=\"pinterest\"><a href=\"https://www.pinterest.com/\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                    </ul>
                                </div>
                                <div class=\"ft__btm__title\">
                                    <h4>About Us</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>Latest Blog</h4>
                            <div class=\"footer__innner\">
                                <div class=\"ftr__latest__post\">
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/post-img/2.jpg"), "html", null, true);
        echo "\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day is near! so lets get ready soon</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/images/blog/post-img/3.jpg"), "html", null, true);
        echo "\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day Celebration</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>21th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"images/blog/post-img/4.jpg\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day Celebration</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>10th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Wedget -->

                    <!-- End Single Wedget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>Twitter Widget</h4>
                            <div class=\"footer__innner\">
                                <div class=\"dcare__twit__wrap\">
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  consect ietur adipisicing sed  eiipsa<a href=\"#\"># twitter .com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  consect ietur adipisicing sed  eiipsa<a href=\"#\"># twitter .com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>11 Avril, 2018</span>
                                            <span><i class=\"fa fa-calendar\"></i>11 Avril, 2018</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
            <div class=\"ft__bottom__images--1 wow flipInX\" data-wow-delay=\"0.6s\">
                <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner/mid-img/ft.png"), "html", null, true);
        echo "\" alt=\"footer images\">
            </div>
            <div class=\"ft__bottom__images--2 wow fadeInRight\" data-wow-delay=\"0.6s\">
                <img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner/mid-img/ft-2.png"), "html", null, true);
        echo "\" alt=\"footer images\">
            </div>
        </div>
        <!-- .Start Footer Contact Area -->
        <div class=\"footer__contact__area bg__cat--2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer__contact__wrapper d-flex flex-wrap justify-content-between\">
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-home\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p> All For Kids </p>
                                    <p>Lac 2, 10 Rue les Jardins - Tunis 1053</p>
                                </div>
                            </div>
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-phone\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p><a href=\"#\">+216 52 22 51 48</a></p>
                                    <p><a href=\"#\">+216 58 12 77 39</a></p>
                                </div>
                            </div>
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-envelope\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p><a href=\"#\">allforkids.codeminers@gmail.com</a></p>
                                    <p><a href=\"#\">allforkids@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .End Footer Contact Area -->
        <!-- .End Footer Contact Area -->
        <div class=\"copyright  bg--theme\">
            <div class=\"container\">
                <div class=\"row align-items-center copyright__wrapper justify-content-center\">
                    <div class=\"col-lg-12 col-sm-12 col-md-12\">
                        <div class=\"coppy__right__inner text-center\">
                            <p><i class=\"fa fa-copyright\"></i>All Right Reserved.<a href=\"https://allforkids.codeminers.com\"> CodeMiners</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->

    <!-- //Cartbox -->


    <!-- Register Form -->
    <div class=\"accountbox-wrapper\">
        <div class=\"accountbox\">
            <div class=\"accountbox__inner\" >
                <h4>continue to register</h4>
                <div class=\"accountbox__login\" >
                    ";
        // line 440
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("fos_user.registration.controller:registerAction"));
        echo "
                    <form action=\"#\">

                        <div class=\"accountbox-login__others text-center\">
                            <h6>or register with</h6>
                            <ul class=\"dacre__social__link d-flex justify-content-center\">
                                <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                                <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                                <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
            </div>
            <h3>Have an account ? Login Fast</h3>
        </div>
    </div><!-- //Register Form -->

    <!-- Login Form -->
    <div class=\"login-wrapper\">
        <div class=\"accountbox\">
            <div class=\"accountbox__inner\">
                <h4>Login to Continue</h4>
                <div class=\"accountbox__login\">
                    ";
        // line 465
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:login"), array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        echo "
                    <form action=\"#\">
                        <div class=\"accountbox-login__others text-center\">
                            <ul class=\"dacre__social__link d-flex justify-content-center\">
                                <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                                <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                                <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
            </div>
            <h3>Have an account ? Login Fast</h3>
        </div>
    </div><!-- //Login Form -->

</div><!-- //Main wrapper -->

<!-- JS Files -->
<script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>
</body>
<script language=\"JavaScript\">
    \$('#login_form_back').submit(function (e) {
        e.preventDefault();
        \$('#error_login').hide();
        \$.ajax({
            type: \$('#login_form_back').attr('method'),
            url: \$('#login_form_back').attr('action'),
            data: \$('#login_form_back').serialize(),
            success: function (data, status, object) {
                if (data.success == false) {
                    \$('#error_login').html(data.message);
                    \$('#error_login').show();
                } else {
                    window.location.href = data.targetUrl;
                }
            }
        });
    });
</script>
";
        // line 510
        $this->displayBlock('script', $context, $blocks);
        // line 512
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 510
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 510,  806 => 246,  789 => 82,  778 => 512,  776 => 510,  752 => 489,  748 => 488,  744 => 487,  740 => 486,  736 => 485,  713 => 465,  685 => 440,  616 => 374,  610 => 371,  539 => 303,  523 => 290,  488 => 258,  475 => 247,  473 => 246,  455 => 233,  449 => 229,  441 => 225,  437 => 224,  430 => 219,  428 => 218,  417 => 210,  409 => 205,  405 => 204,  401 => 202,  395 => 200,  391 => 198,  389 => 197,  383 => 194,  380 => 193,  374 => 190,  370 => 189,  366 => 188,  362 => 187,  359 => 186,  357 => 185,  353 => 184,  350 => 183,  344 => 180,  340 => 179,  336 => 178,  332 => 177,  328 => 176,  325 => 175,  323 => 174,  319 => 173,  313 => 169,  308 => 167,  303 => 166,  301 => 165,  293 => 159,  288 => 157,  283 => 156,  281 => 155,  272 => 149,  261 => 141,  257 => 140,  240 => 125,  235 => 123,  232 => 122,  227 => 120,  219 => 119,  213 => 117,  211 => 116,  176 => 84,  173 => 83,  171 => 82,  138 => 52,  134 => 51,  130 => 50,  122 => 45,  117 => 43,  112 => 41,  107 => 39,  101 => 36,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  78 => 28,  72 => 25,  66 => 22,  62 => 21,  58 => 20,  53 => 18,  44 => 12,  40 => 11,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>All For Kids</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Favicons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon.ico') }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('images/icon.png') }}\">
    <!-- Google font (font-family: 'Dosis', Roboto;) -->
    <link href=\"https://fonts.googleapis.com/css?family=Dosis:400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700\" rel=\"stylesheet\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <script
            src=\"{{ asset('jquery-3.2.1.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('css/plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">

    <!-- Modernizer js -->
    <script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js') }}\"></script>
    <!---Mariem -->
    <!-- Stylesheet -->
    <link href=\"{{ asset('images/mariem/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css') }}\">
    <link href=\"{{ asset('images/mariem/css/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css') }}\">
    <link href=\"{{ asset('images/mariem/css/animate.css\" rel=\"stylesheet\" type=\"text/css') }}\">
    <link href=\"{{ asset('images/mariem/css/css-plugin-collections.css\" rel=\"stylesheet') }}\"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id=\"menuzord-menu-skins\" href=\"{{ asset('images/mariem/css/menuzord-skins/menuzord-rounded-boxed.css') }}\"
          rel=\"stylesheet\"/>
    <!-- CSS | Main style file -->
    <link href=\"{{ asset('images/mariem/css/style-main.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Preloader Styles -->
    <link href=\"{{ asset('images/mariem/css/preloader.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href=\"{{ asset('images/mariem/css/custom-bootstrap-margin-padding.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Responsive media queries -->
    <link href=\"{{ asset('images/mariem/css/responsive.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href=\"{{ asset('images/mariem/js/revolution-slider/css/settings.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('images/mariem/js/revolution-slider/css/layers.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('images/mariem/js/revolution-slider/css/navigation.css') }}\" rel=\"stylesheet\"
          type=\"text/css\"/>

    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/bootstrap-iso.css\"/>

    <!--Font Awesome (added because you use icons in your prepend/append)-->
    <link rel=\"stylesheet\" href=\"https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css\"/>

    <!-- Inline CSS based on choices in \"Settings\" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: #24a4be
        }

        .bootstrap-iso form button, .bootstrap-iso form button:hover {
            color: #ffffff !important;
        }

        .bootstrap-iso .btn-custom {
            background: #33b77e
        }

        .bootstrap-iso .btn-custom:hover {
            background: #1fa36a;
        }

        .asteriskField {
            color: red;
        }</style>

    {% block stylesheets %}{% endblock %}
    <!-- CSS | Theme Color -->
    <link href=\"{{ asset('images/mariem/css/colors/theme-skin-color-set-1.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <!---Mariem -->
</head>
<body>
<!--[if lte IE 9]>
<![endif]-->

<!-- Add your site or application content here -->

<!-- <div class=\"fakeloader\"></div> -->

<!-- Main wrapper -->
<div class=\"wrapper\" id=\"wrapper\">

    <!-- Header -->
    <header id=\"header\" class=\"jnr__header header--one clearfix\">
        <!-- Start Header Top Area -->
        <div class=\"junior__header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-lg-6 col-sm-12\">
                        <div class=\"jun__header__top__left\">
                            <ul class=\"top__address d-flex justify-content-start align-items-center flex-wrap flex-lg-nowrap flex-md-nowrap\">
                                <li><i class=\"fa fa-envelope\"></i><a href=\"#\">allforkids.codeminers@gmail.com </a></li>
                                <li><i class=\"fa fa-phone\"></i><span>Contacter maintenant :</span><a href=\"#\">+21652225148</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-lg-6 col-sm-3 col-12\">
                        <div class=\"jun__header__top__right\">
                            <ul class=\"accounting d-flex justify-content-lg-end justify-content-md-end justify-content-start align-items-center\">

                                {% if is_granted('ROLE_USER') %}
                                    <img src=\"{{ asset(app.user.photo) }} \" width=\"50px\" height=\"50px\" style=\"margin-right: 15px\"/>

                                    <li style=\"display: block\"><a href=\"{{ path('fos_user_profile_edit') }}\">{{ app.user.nom}}<br> {{ app.user.prenom }}</a></li>
                                    <li><a  href=\"{{ path('fos_user_security_logout') }}\">logout</a></li>
                                {% else %}
                                    <li><a class=\"login-trigger\" href=\"#\">Se connecter</a></li>
                                    <li><a  href=\"{{ path('user_register') }}\">Créer un compte</a></li>
                                {% endif %}


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->
        <!-- Start Mainmenu Area -->
        <div class=\"mainmenu__wrapper bg__cat--1 poss-relative header_top_line sticky__header\">
            <div class=\"container\">
                <div class=\"row d-none d-lg-flex\">
                    <div class=\"col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1\">
                        <div class=\"logo\">
                            <a href=\"{{ path('homepage') }}\">
                                <img src=\"{{ asset('images/kids2.png') }}\" alt=\"logo images\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2\">
                        <div class=\"mainmenu__wrap\">
                            <nav class=\"mainmenu__nav\">
                                <ul class=\"mainmenu\">
                                    <li class=\"drop\"><a href=\"{{ path('homepage') }}\">Accueil</a>

                                    </li>

                                    <li class=\"drop\"><a href=\"#\">Medecins</a>
                                        <ul class=\"dropdown__menu\">
                                            {% if is_granted('ROLE_PARENT')  %}
                                                <li><a href=\"{{ path('medecin_affichageFront') }}\">Nos Medecins</a></li>
                                                <li><a href=\"{{ path('medecin_rechercher') }}\">Trouver un medecin</a></li>
                                            {% endif %}

                                        </ul>
                                    </li>

                                    <li class=\"drop\"><a href=\"#\">Garderies</a>
                                        <ul class=\"dropdown__menu\">
                                            {% if is_granted('ROLE_PARENT')  %}
                                                <li><a href=\"{{ path('garderie_listeFront2') }}\">Nos Garderies</a></li>
                                                <li><a href=\"{{ path('garderie_rechercher') }}\">Trouver une garderie</a></li>
                                            {% endif %}

                                        </ul>
                                    </li>

                                    <li class=\"drop\"><a href=\"{{ path('covoiturage_homepage') }}\">Covoiturage</a>
                                        {% if is_granted('ROLE_PARENT')  %}
                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"{{ path('chercher_cov') }}\">Trouver un covoiturage</a></li>
                                            <li><a href=\"{{ path('ajouter_cov') }}\">Proposer un covoiturage</a></li>
                                            <li><a href=\"{{ path('lister_des_cov') }}\">Covoiturages potentiels</a></li>
                                            <li><a href=\"{{ path('lister_mes_cov') }}\">Mes covoiturages</a></li>
                                            <li><a href=\"{{ path('historique_cov') }}\">Historique covoiturages</a></li>

                                        </ul> {% endif %}
                                    </li>
                                    <li class=\"drop\"><a href=\"{{ path('babysitting_homepage') }}\">Babysitting</a>
                                        {% if is_granted('ROLE_PARENT')  %}
                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"{{ path('chercher_babysitting') }}\">Trouver un babysitting</a></li>
                                            <li><a href=\"{{ path('ajouter_babysitting') }}\">Proposer un babysitting</a></li>
                                            <li><a href=\"{{ path('lister_mes_babysittings') }}\">Afficher mes babysittings</a></li>
                                            <li><a href=\"{{ path('historique_babysitting') }}\">Historique babysitting</a></li>

                                        </ul> {% endif %}
                                    </li>
                                    <li class=\"drop\"><a href=\"{{ path('evenement_homepage') }}\">Evènements</a>

                                    </li>
                                    {% if is_granted('ROLE_ENSEIGNANT') %}
                                    <li class=\"drop\"><a href=\"\">Classe</a>
                                        {% else %}
                                    <li class=\"drop\"><a href=\"{{ path('e_learning_afficherEnseignant') }}\">E-learning</a>
                                        {% endif %}
                                    <li class=\"drop\"><a>Jeux</a>
                                        <ul class=\"dropdown__menu\">
                                            <li><a href=\"{{ path('jeu_memoire') }}\">Jeu de mémoire</a></li>
                                            <li><a href=\"{{ path('jeu_math') }}\">Quizz pour enfants </a></li>


                                        </ul>
                                    </li>
                                    <li class=\"drop\"><a href=\"{{ path('activite_list') }}\">Activités</a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    {% if is_granted('ROLE_PARENT')  %}
                        <div class=\"col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3\">
                            <div class=\"shopbox d-flex justify-content-end align-items-center\">
                                <a class=\"minicart-trigger\">
                                    <i class=\"fa fa-envelope\"></i>
                                </a>
                                <a href=\"{{ path('garderie_notif2') }}\">View</a>
                                <span>{{ mgilet_notification_unseen_count(app.user) }} {# unseen notifications #}</span>
                            </div>
                        </div>
                    {% endif %}
                </div>
                <!-- Mobile Menu -->
                <div class=\"mobile-menu d-block d-lg-none\">
                    <div class=\"logo\">
                        <a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('images/kids2.png') }}\" alt=\"logo\"></a>
                    </div>
                    <a class=\"minicart-trigger\" href=\"#\">
                        <i class=\"fa fa-envelope\"></i>
                    </a>

                </div>
                <!-- Mobile Menu -->
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- //Header -->
    {% block container %} {% endblock %}
    <!-- Footer Area -->
    <!-- Footer Area -->
    <footer id=\"footer\" class=\"footer-area footer--2\">
        <div class=\"footer__wrapper bg-image--10 section-padding--lg\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"footer__widget\">
                            <div class=\"ft__logo\">
                                <a href=\"index-2.html\">
                                    <img src=\"{{ asset('images/kids2.png')}}\" alt=\"logo images\">
                                </a>
                            </div>
                            <div class=\"ftr__details\">
                                <p>All For Kids est comme son nom l'indique, est une application destinée aux parents et à leurs enfants afin de facilicter la vie aux prents en les aidant à trouver le meilleur pour leurs enfants..</p>
                            </div>
                            <div class=\"ftr__address__inner\">
                                <div class=\"footer__social__icon\">
                                    <ul class=\"dacre__social__link--2 d-flex justify-content-start\">
                                        <li class=\"facebook\"><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li class=\"twitter\"><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li class=\"vimeo\"><a href=\"https://vimeo.com/\"><i class=\"fa fa-vimeo\"></i></a></li>
                                        <li class=\"pinterest\"><a href=\"https://www.pinterest.com/\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                    </ul>
                                </div>
                                <div class=\"ft__btm__title\">
                                    <h4>About Us</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>Latest Blog</h4>
                            <div class=\"footer__innner\">
                                <div class=\"ftr__latest__post\">
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"{{ asset('images/blog/post-img/2.jpg')}}\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day is near! so lets get ready soon</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"{{ asset('images/images/blog/post-img/3.jpg')}}\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day Celebration</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>21th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"images/blog/post-img/4.jpg\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day Celebration</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>10th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Wedget -->

                    <!-- End Single Wedget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>Twitter Widget</h4>
                            <div class=\"footer__innner\">
                                <div class=\"dcare__twit__wrap\">
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  consect ietur adipisicing sed  eiipsa<a href=\"#\"># twitter .com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  consect ietur adipisicing sed  eiipsa<a href=\"#\"># twitter .com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>11 Avril, 2018</span>
                                            <span><i class=\"fa fa-calendar\"></i>11 Avril, 2018</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
            <div class=\"ft__bottom__images--1 wow flipInX\" data-wow-delay=\"0.6s\">
                <img src=\"{{ asset('images/banner/mid-img/ft.png')}}\" alt=\"footer images\">
            </div>
            <div class=\"ft__bottom__images--2 wow fadeInRight\" data-wow-delay=\"0.6s\">
                <img src=\"{{ asset('images/banner/mid-img/ft-2.png')}}\" alt=\"footer images\">
            </div>
        </div>
        <!-- .Start Footer Contact Area -->
        <div class=\"footer__contact__area bg__cat--2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer__contact__wrapper d-flex flex-wrap justify-content-between\">
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-home\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p> All For Kids </p>
                                    <p>Lac 2, 10 Rue les Jardins - Tunis 1053</p>
                                </div>
                            </div>
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-phone\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p><a href=\"#\">+216 52 22 51 48</a></p>
                                    <p><a href=\"#\">+216 58 12 77 39</a></p>
                                </div>
                            </div>
                            <div class=\"single__footer__address\">
                                <div class=\"ft__contact__icon\">
                                    <i class=\"fa fa-envelope\"></i>
                                </div>
                                <div class=\"ft__contact__details\">
                                    <p><a href=\"#\">allforkids.codeminers@gmail.com</a></p>
                                    <p><a href=\"#\">allforkids@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .End Footer Contact Area -->
        <!-- .End Footer Contact Area -->
        <div class=\"copyright  bg--theme\">
            <div class=\"container\">
                <div class=\"row align-items-center copyright__wrapper justify-content-center\">
                    <div class=\"col-lg-12 col-sm-12 col-md-12\">
                        <div class=\"coppy__right__inner text-center\">
                            <p><i class=\"fa fa-copyright\"></i>All Right Reserved.<a href=\"https://allforkids.codeminers.com\"> CodeMiners</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->

    <!-- //Cartbox -->


    <!-- Register Form -->
    <div class=\"accountbox-wrapper\">
        <div class=\"accountbox\">
            <div class=\"accountbox__inner\" >
                <h4>continue to register</h4>
                <div class=\"accountbox__login\" >
                    {{ render(controller('fos_user.registration.controller:registerAction')) }}
                    <form action=\"#\">

                        <div class=\"accountbox-login__others text-center\">
                            <h6>or register with</h6>
                            <ul class=\"dacre__social__link d-flex justify-content-center\">
                                <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                                <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                                <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
            </div>
            <h3>Have an account ? Login Fast</h3>
        </div>
    </div><!-- //Register Form -->

    <!-- Login Form -->
    <div class=\"login-wrapper\">
        <div class=\"accountbox\">
            <div class=\"accountbox__inner\">
                <h4>Login to Continue</h4>
                <div class=\"accountbox__login\">
                    {{ render(controller('AppBundle:Default:login'),{ 'request' : app.request }) }}
                    <form action=\"#\">
                        <div class=\"accountbox-login__others text-center\">
                            <ul class=\"dacre__social__link d-flex justify-content-center\">
                                <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                                <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                                <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
            </div>
            <h3>Have an account ? Login Fast</h3>
        </div>
    </div><!-- //Login Form -->

</div><!-- //Main wrapper -->

<!-- JS Files -->
<script src=\"{{ asset('js/vendor/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/active.js') }}\"></script>
</body>
<script language=\"JavaScript\">
    \$('#login_form_back').submit(function (e) {
        e.preventDefault();
        \$('#error_login').hide();
        \$.ajax({
            type: \$('#login_form_back').attr('method'),
            url: \$('#login_form_back').attr('action'),
            data: \$('#login_form_back').serialize(),
            success: function (data, status, object) {
                if (data.success == false) {
                    \$('#error_login').html(data.message);
                    \$('#error_login').show();
                } else {
                    window.location.href = data.targetUrl;
                }
            }
        });
    });
</script>
{% block script %}
{% endblock %}

</html>", "::base.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app/Resources\\views/base.html.twig");
    }
}
