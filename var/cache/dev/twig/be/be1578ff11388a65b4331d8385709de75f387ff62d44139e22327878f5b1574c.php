<?php

/* GarderieBundle:Back:espaceGarderie.html.twig */
class __TwigTemplate_204ba5e994cd46e8a31958f1e72d1f03896a4fac6fe50db9d03254b78a449892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GarderieBundle::GarderieBase.html.twig", "GarderieBundle:Back:espaceGarderie.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GarderieBundle::GarderieBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:espaceGarderie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:espaceGarderie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-png/6.png"), "html", null, true);
        echo "\" alt=\"bradcaump images\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Espace Garderie</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/brad.png"), "html", null, true);
        echo "\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Espace Garderie</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <section class=\"htc__checkout bg--white section-padding--lg\">
        <!-- Checkout Section Start-->
        <div class=\"checkout-section\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12 mb-30\">

                        <!-- Checkout Accordion Start -->
                        <div id=\"checkout-accordion\">

                            <!-- Checkout Method -->
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_ajout");
        echo "\">1. Ajouter Garderie</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_liste");
        echo "\">2. Consulter  mes garderies</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_inscriptionListe");
        echo "\">3. Consulter ma liste d'inscription</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_stat");
        echo "\">4. Consulter les statistiques</a>
                            </div>





                        </div>
                    </div>
                    <!-- Order Details -->
                    <div class=\"col-lg-6 col-12 mb-30\">
                        <!-- Start Our Gallery Area -->
                        <div class=\"junior__gallery__area gallery-page-one gallery__masonry__activation gallery--3 bg-image--25 section-padding--lg\">
                            <div class=\"container\">

                                <div class=\"row galler__wrap masonry__wrap mt--80\">

                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/gl-page-one/2.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/big-img/1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery-details.html"), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--2\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/gl-page-one/3.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/big-img/1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery-details.html"), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/gl-page-one/2.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/big-img/1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery-details.html"), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/gl-page-one/2.jpg"), "html", null, true);
        echo "\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gallery/big-img/1.jpg"), "html", null, true);
        echo "\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("gallery-details.html"), "html", null, true);
        echo "\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->

                                </div>
                            </div>
                        </div>
                        <!-- End Our Gallery Area -->


                    </div>

                </div>
            </div>
        </div><!-- Checkout Section End-->
    </section>
    <!-- Start Subscribe Area -->
    <section class=\"bcare__subscribe bg-image--7 subscrive--2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-lg-12\">
                    <div class=\"subscribe__inner\">
                        <h2>Subscribe To Our Newsletter</h2>
                        <div class=\"newsletter__form\">
                            <div class=\"input__box\">
                                <div id=\"mc_embed_signup\">
                                    <form action=\"http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                                        <div id=\"mc_embed_signup_scroll\" class=\"htc__news__inner\">
                                            <div class=\"news__input\">
                                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter Your E-mail\" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_6bbb9b6f5827bd842d9640c82_05d85f18ef\" tabindex=\"-1\" value=\"\"></div>
                                            <div class=\"clearfix subscribe__btn\"><input type=\"submit\" value=\"Send Now\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"bst__btn btn--white__color\">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->
    <!-- /Row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Back:espaceGarderie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 132,  227 => 131,  218 => 125,  203 => 113,  199 => 112,  190 => 106,  175 => 94,  171 => 93,  162 => 87,  147 => 75,  143 => 74,  134 => 68,  109 => 46,  103 => 43,  97 => 40,  91 => 37,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'GarderieBundle::GarderieBase.html.twig' %}
{% block container %}
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <img src=\"{{ asset('images/bg-png/6.png') }}\" alt=\"bradcaump images\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Espace Garderie</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"{{ asset('images/icons/brad.png') }}\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Espace Garderie</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <section class=\"htc__checkout bg--white section-padding--lg\">
        <!-- Checkout Section Start-->
        <div class=\"checkout-section\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-6 col-12 mb-30\">

                        <!-- Checkout Accordion Start -->
                        <div id=\"checkout-accordion\">

                            <!-- Checkout Method -->
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"{{ path('garderie_ajout') }}\">1. Ajouter Garderie</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"{{ path('garderie_liste') }}\">2. Consulter  mes garderies</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"{{ path('garderie_inscriptionListe') }}\">3. Consulter ma liste d'inscription</a>
                            </div>
                            <div class=\"single-accordion\" >
                                <a class=\"accordion-head\" class=\"collapse show\"  href=\"{{ path('garderie_stat') }}\">4. Consulter les statistiques</a>
                            </div>





                        </div>
                    </div>
                    <!-- Order Details -->
                    <div class=\"col-lg-6 col-12 mb-30\">
                        <!-- Start Our Gallery Area -->
                        <div class=\"junior__gallery__area gallery-page-one gallery__masonry__activation gallery--3 bg-image--25 section-padding--lg\">
                            <div class=\"container\">

                                <div class=\"row galler__wrap masonry__wrap mt--80\">

                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/gallery/gl-page-one/2.jpg') }}\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"{{ asset('images/gallery/big-img/1.jpg') }}\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"{{ asset('gallery-details.html') }}\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--2\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/gallery/gl-page-one/3.jpg') }}\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"{{ asset('images/gallery/big-img/1.jpg') }}\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"{{ asset('gallery-details.html') }}\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/gallery/gl-page-one/2.jpg') }}\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"{{ asset('images/gallery/big-img/1.jpg') }}\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"{{ asset('gallery-details.html') }}\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->
                                    <!-- Start Single Gallery -->
                                    <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1\">
                                        <div class=\"gallery\">
                                            <div class=\"gallery__thumb\">
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('images/gallery/gl-page-one/2.jpg') }}\" alt=\"gallery images\">
                                                </a>
                                            </div>
                                            <div class=\"gallery__hover__inner\">
                                                <div class=\"gallery__hover__action\">
                                                    <ul class=\"gallery__zoom\">
                                                        <li><a href=\"{{ asset('images/gallery/big-img/1.jpg') }}\" data-lightbox=\"grportimg\" data-title=\"My caption\"><i class=\"fa fa-search\"></i></a></li>
                                                        <li><a href=\"{{ asset('gallery-details.html') }}\"><i class=\"fa fa-link\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Gallery -->

                                </div>
                            </div>
                        </div>
                        <!-- End Our Gallery Area -->


                    </div>

                </div>
            </div>
        </div><!-- Checkout Section End-->
    </section>
    <!-- Start Subscribe Area -->
    <section class=\"bcare__subscribe bg-image--7 subscrive--2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-lg-12\">
                    <div class=\"subscribe__inner\">
                        <h2>Subscribe To Our Newsletter</h2>
                        <div class=\"newsletter__form\">
                            <div class=\"input__box\">
                                <div id=\"mc_embed_signup\">
                                    <form action=\"http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                                        <div id=\"mc_embed_signup_scroll\" class=\"htc__news__inner\">
                                            <div class=\"news__input\">
                                                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter Your E-mail\" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_6bbb9b6f5827bd842d9640c82_05d85f18ef\" tabindex=\"-1\" value=\"\"></div>
                                            <div class=\"clearfix subscribe__btn\"><input type=\"submit\" value=\"Send Now\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"bst__btn btn--white__color\">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->
    <!-- /Row -->
{% endblock  %}", "GarderieBundle:Back:espaceGarderie.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Back/espaceGarderie.html.twig");
    }
}
