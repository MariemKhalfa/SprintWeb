<?php

/* GarderieBundle::GarderieBase.html.twig */
class __TwigTemplate_5ca877b49bb67abbf31925eeba38bafcf826f2bf324eaf99cb7b504f47bca957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle::GarderieBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle::GarderieBase.html.twig"));

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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\">
    <!-- Google font (font-family: 'Dosis', Roboto;) -->
    <link href=\"https://fonts.googleapis.com/css?family=Dosis:400,500,600,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700\" rel=\"stylesheet\">

    <!-- Stylesheets -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <script
            src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">

    <!-- Cusom css -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

    <!-- Modernizer js -->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
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
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 61
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "photo", array())), "html", null, true);
            echo " \" width=\"50px\" height=\"50px\" style=\"margin-right: 15px\"/>

                                    <li style=\"display: block\"><a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "<br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</a></li>
                                    <li><a  href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">logout</a></li>
                                ";
        } else {
            // line 66
            echo "                                    <li><a class=\"login-trigger\" href=\"#\">Se connecter</a></li>
                                    <li><a class=\"accountbox-trigger\" href=\"#\">Créer un compte</a></li>
                                ";
        }
        // line 69
        echo "

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->

    </header>
    <!-- //Header -->
    ";
        // line 81
        $this->displayBlock('container', $context, $blocks);
        // line 82
        echo "    <!-- Footer Area -->
    <footer id=\"footer\" class=\"footer-area\">
        <div class=\"footer__wrapper poss-relative ftr__btm__image section-padding--lg bg--white\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"footer__widget\">
                            <div class=\"ft__logo\">
                                <a href=\"index-2.html\">
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo/2.png"), "html", null, true);
        echo "\" alt=\"logo images\">
                                </a>
                            </div>
                            <div class=\"ftr__details\">
                                <p>All For Kids est une application destinée aux parents afin de leur facilicter leur tâches en les aidant à trouver le meilleur pour leurs enfants.</p>
                                <p>Les enfants aussi peuvent trouver leur bonheur grâce aux jeux et quiz.</p>
                            </div>
                            <div class=\"ftr__address__inner\">
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-home\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p>Uttara, Zamzam Tower</p>
                                        <p>Road # 12, Sec #13, 5th Floor</p>
                                    </div>
                                </div>
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-phone\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p><a href=\"#\">+21652225148</a></p>
                                    </div>
                                </div>
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p><a href=\"#\">allforkids.codeminers@gmail.com</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 sm-mt-40\">

                        <div class=\"footer__widget\">
                            <h4>Latest Blog</h4>
                            <div class=\"footer__innner\">
                                <div class=\"ftr__latest__post\">
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/post-img/1.jpg"), "html", null, true);
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
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/post-img/5.jpg"), "html", null, true);
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
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/post-img/6.jpg"), "html", null, true);
        echo "\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day is near! so lets get ready soon</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
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
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>From Gallery</h4>
                            <div class=\"footer__innner\">
                                <div class=\"dcare__twit__wrap\">
                                    <ul class=\"sm__gallery__list d-flex flex-wrap\">
                                        <li><a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/1.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/2.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/3.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/4.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/5.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/6.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/7.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/8.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/sm-gallery/9.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row align-items-center copyright__wrapper\">
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"coppy__right__inner\">
                            <p><i class=\"fa fa-copyright\"></i>Copyright, 2018 <a href=\"https://devitems.com/\" target=\"_blank\"> allforkids.codeminers.com</a></p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"ftr__social__icon\">
                            <ul class=\"dacre__social__link d-flex justify-content-center justify-content-md-end justify-content-lg-end\">
                                <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo\"></i></a></li>
                                <li class=\"pinterest\"><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->
    <!-- Cartbox -->
    <div class=\"cartbox-wrap\">
        <div class=\"cartbox text-right\">
            <button class=\"cartbox-close\"><i class=\"zmdi zmdi-close\"></i></button>
            <div class=\"cartbox__inner text-left\">
                <div class=\"cartbox__items\">
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-pro/1.jpg"), "html", null, true);
        echo "\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">brown jacket</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$15</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div>
                    <!-- //Cartbox Single Item -->
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-pro/2.jpg"), "html", null, true);
        echo "\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">long sleeve t-shirt</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$25</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div><!-- //Cartbox Single Item -->
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/sm-pro/3.jpg"), "html", null, true);
        echo "\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">black polo shirt</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$30</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div>
                    <!-- //Cartbox Single Item -->
                </div>
                <div class=\"cartbox__total\">
                    <ul>
                        <li><span class=\"cartbox__total__title\">Subtotal</span><span class=\"price\">\$70</span></li>
                        <li class=\"shipping-charge\"><span class=\"cartbox__total__title\">Shipping Charge</span><span class=\"price\">\$05</span></li>
                        <li class=\"grandtotal\">Total<span class=\"price\">\$75</span></li>
                    </ul>
                </div>
                <div class=\"cartbox__buttons\">
                    <a class=\"dcare__btn\" href=\"cart.html\"><span>View cart</span></a>
                    <a class=\"dcare__btn\" href=\"checkout.html\"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- //Cartbox -->


    <!-- Register Form -->
    <div class=\"accountbox-wrapper\">
        <div class=\"accountbox\">
            <div class=\"accountbox__inner\" >
                <h4>continue to register</h4>
                <div class=\"accountbox__login\" >
                    ";
        // line 353
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
        // line 378
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
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
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


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 81
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

    public function getTemplateName()
    {
        return "GarderieBundle::GarderieBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 81,  541 => 402,  537 => 401,  533 => 400,  529 => 399,  525 => 398,  502 => 378,  474 => 353,  434 => 316,  415 => 300,  395 => 283,  349 => 240,  345 => 239,  341 => 238,  337 => 237,  333 => 236,  329 => 235,  325 => 234,  321 => 233,  317 => 232,  249 => 167,  233 => 154,  217 => 141,  165 => 92,  153 => 82,  151 => 81,  137 => 69,  132 => 66,  127 => 64,  119 => 63,  113 => 61,  111 => 60,  77 => 29,  71 => 26,  65 => 23,  61 => 22,  57 => 21,  52 => 19,  43 => 13,  39 => 12,  26 => 1,);
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
                                    <li><a class=\"accountbox-trigger\" href=\"#\">Créer un compte</a></li>
                                {% endif %}


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top Area -->

    </header>
    <!-- //Header -->
    {% block container %} {% endblock %}
    <!-- Footer Area -->
    <footer id=\"footer\" class=\"footer-area\">
        <div class=\"footer__wrapper poss-relative ftr__btm__image section-padding--lg bg--white\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12\">
                        <div class=\"footer__widget\">
                            <div class=\"ft__logo\">
                                <a href=\"index-2.html\">
                                    <img src=\"{{ asset('images/logo/2.png') }}\" alt=\"logo images\">
                                </a>
                            </div>
                            <div class=\"ftr__details\">
                                <p>All For Kids est une application destinée aux parents afin de leur facilicter leur tâches en les aidant à trouver le meilleur pour leurs enfants.</p>
                                <p>Les enfants aussi peuvent trouver leur bonheur grâce aux jeux et quiz.</p>
                            </div>
                            <div class=\"ftr__address__inner\">
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-home\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p>Uttara, Zamzam Tower</p>
                                        <p>Road # 12, Sec #13, 5th Floor</p>
                                    </div>
                                </div>
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-phone\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p><a href=\"#\">+21652225148</a></p>
                                    </div>
                                </div>
                                <div class=\"ftr__address\">
                                    <div class=\"ftr_icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </div>
                                    <div class=\"ftr__contact\">
                                        <p><a href=\"#\">allforkids.codeminers@gmail.com</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 sm-mt-40\">

                        <div class=\"footer__widget\">
                            <h4>Latest Blog</h4>
                            <div class=\"footer__innner\">
                                <div class=\"ftr__latest__post\">
                                    <!-- Start Single -->
                                    <div class=\"single__ftr__post d-flex\">
                                        <div class=\"ftr__post__thumb\">
                                            <a href=\"blog-details.html\">
                                                <img src=\"{{ asset('images/blog/post-img/1.jpg') }}\" alt=\"post images\">
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
                                                <img src=\"{{ asset('images/blog/post-img/5.jpg') }}\" alt=\"post images\">
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
                                                <img src=\"{{ asset('images/blog/post-img/6.jpg') }}\" alt=\"post images\">
                                            </a>
                                        </div>
                                        <div class=\"ftr__post__details\">
                                            <h6><a href=\"blog-details.html\">Sports Day is near! so lets get ready soon</a></h6>
                                            <span><i class=\"fa fa-calendar\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
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
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                    <!-- Start Single -->
                                    <div class=\"dcare__twit d-flex\">
                                        <div class=\"dcare__twit__icon\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </div>
                                        <div class=\"dcare__twit__details\">
                                            <p>Lorem ipsum dolor sit  co<a href=\"#\"># twitter.com?web/lnk/statement</a></p>
                                            <span><i class=\"fa fa-clock-o\"></i>30th Dec, 2017</span>
                                        </div>
                                    </div>
                                    <!-- End Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class=\"col-lg-3 col-md-6 col-sm-12 md-mt-40 sm-mt-40\">
                        <div class=\"footer__widget\">
                            <h4>From Gallery</h4>
                            <div class=\"footer__innner\">
                                <div class=\"dcare__twit__wrap\">
                                    <ul class=\"sm__gallery__list d-flex flex-wrap\">
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/1.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/2.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/3.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/4.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/5.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/6.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/7.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/8.jpg') }}\" alt=\"gallery images\"></a></li>
                                        <li><a href=\"#\"><img src=\"{{ asset('images/gallery/sm-gallery/9.jpg') }}\" alt=\"gallery images\"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row align-items-center copyright__wrapper\">
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"coppy__right__inner\">
                            <p><i class=\"fa fa-copyright\"></i>Copyright, 2018 <a href=\"https://devitems.com/\" target=\"_blank\"> allforkids.codeminers.com</a></p>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"ftr__social__icon\">
                            <ul class=\"dacre__social__link d-flex justify-content-center justify-content-md-end justify-content-lg-end\">
                                <li class=\"facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li class=\"twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo\"></i></a></li>
                                <li class=\"pinterest\"><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->
    <!-- Cartbox -->
    <div class=\"cartbox-wrap\">
        <div class=\"cartbox text-right\">
            <button class=\"cartbox-close\"><i class=\"zmdi zmdi-close\"></i></button>
            <div class=\"cartbox__inner text-left\">
                <div class=\"cartbox__items\">
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"{{ asset('images/product/sm-pro/1.jpg') }}\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">brown jacket</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$15</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div>
                    <!-- //Cartbox Single Item -->
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"{{ asset('images/product/sm-pro/2.jpg') }}\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">long sleeve t-shirt</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$25</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div><!-- //Cartbox Single Item -->
                    <!-- Cartbox Single Item -->
                    <div class=\"cartbox__item\">
                        <div class=\"cartbox__item__thumb\">
                            <a href=\"shop-single.html\">
                                <img src=\"{{ asset('images/product/sm-pro/3.jpg') }}\" alt=\"small thumbnail\">
                            </a>
                        </div>
                        <div class=\"cartbox__item__content\">
                            <h5><a href=\"shop-single.html\" class=\"product-name\">black polo shirt</a></h5>
                            <p>Qty: <span>01</span></p>
                            <span class=\"price\">\$30</span>
                        </div>
                        <button class=\"cartbox__item__remove\">
                            <i class=\"fa fa-trash\"></i>
                        </button>
                    </div>
                    <!-- //Cartbox Single Item -->
                </div>
                <div class=\"cartbox__total\">
                    <ul>
                        <li><span class=\"cartbox__total__title\">Subtotal</span><span class=\"price\">\$70</span></li>
                        <li class=\"shipping-charge\"><span class=\"cartbox__total__title\">Shipping Charge</span><span class=\"price\">\$05</span></li>
                        <li class=\"grandtotal\">Total<span class=\"price\">\$75</span></li>
                    </ul>
                </div>
                <div class=\"cartbox__buttons\">
                    <a class=\"dcare__btn\" href=\"cart.html\"><span>View cart</span></a>
                    <a class=\"dcare__btn\" href=\"checkout.html\"><span>Checkout</span></a>
                </div>
            </div>
        </div>
    </div>
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


</html>", "GarderieBundle::GarderieBase.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/GarderieBase.html.twig");
    }
}
