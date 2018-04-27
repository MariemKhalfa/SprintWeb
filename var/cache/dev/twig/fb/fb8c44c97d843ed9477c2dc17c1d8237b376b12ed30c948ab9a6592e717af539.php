<?php

/* ActiviteBundle:pages:AfficherFrontActivite.html.twig */
class __TwigTemplate_4909a7714d72bed67efae8842c18cc79a91db4b93f0a1756cda15fa3052d3f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ActiviteBundle:pages:AfficherFrontActivite.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:pages:AfficherFrontActivite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:pages:AfficherFrontActivite.html.twig"));

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
                            <h2 class=\"bradcaump-title\">Nos Activités</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/brad.png"), "html", null, true);
        echo "\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Nos Activités</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Our Event Area -->
    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">

                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activite"] ?? $this->getContext($context, "activite")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 29
            echo "                    <!-- Start Single Event -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"dcare__event\">
                            <div class=\"event__content\">
                                <div class=\"event__pub\">
                                    <div class=\"event__date\">
                                        <span class=\"date\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d"), "html", null, true);
            echo "</span><span>th</span>
                                    </div>
                                    <ul class=\"event__time\">
                                        <li>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "M"), "html", null, true);
            echo ", <i class=\"fa fa-clock-o\"></i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "heure", array()), "H:i"), "html", null, true);
            echo " </li>
                                        <li><i class=\"fa fa-home\"></i>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "type", array()), "html", null, true);
            echo "</li>
                                    </ul>
                                </div>
                                <div class=\"event__inner\">
                                    <p><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactUs");
            echo "\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "adresse", array()), "html", null, true);
            echo "</a></p>
                                </div>
                                <ul class=\"event__btn\">

                                </ul>
                            </div>
                            <div class=\"event__thumb\">
                                <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_detailsActivite");
            echo "\">
                                    <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["a"], "image", array()))), "html", null, true);
            echo "\" width=\"200%\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Event -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </div>
        </div>

    </div><!-- .animated -->
    <!-- End Our Event Area -->
    <!-- End Bradcaump area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:pages:AfficherFrontActivite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 58,  129 => 51,  125 => 50,  113 => 43,  106 => 39,  100 => 38,  94 => 35,  86 => 29,  82 => 28,  65 => 14,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block container %}
    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <img src=\"{{ asset('images/bg-png/6.png') }}\" alt=\"bradcaump images\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Nos Activités</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"{{ asset('images/icons/brad.png') }}\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Nos Activités</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Our Event Area -->
    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">

                {% for a in activite %}
                    <!-- Start Single Event -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"dcare__event\">
                            <div class=\"event__content\">
                                <div class=\"event__pub\">
                                    <div class=\"event__date\">
                                        <span class=\"date\">{{ a.date|date('d') }}</span><span>th</span>
                                    </div>
                                    <ul class=\"event__time\">
                                        <li>{{ a.date|date('M') }}, <i class=\"fa fa-clock-o\"></i>{{ a.heure|date('H:i') }} </li>
                                        <li><i class=\"fa fa-home\"></i>{{ a.type }}</li>
                                    </ul>
                                </div>
                                <div class=\"event__inner\">
                                    <p><a href=\"{{ path('contactUs') }}\"\">{{ a.adresse }}</a></p>
                                </div>
                                <ul class=\"event__btn\">

                                </ul>
                            </div>
                            <div class=\"event__thumb\">
                                <a href=\"{{ path('activite_detailsActivite') }}\">
                                    <img src=\"{{ asset('uploads/images/'~ a.image ) }}\" width=\"200%\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Event -->
                {% endfor %}
            </div>
        </div>

    </div><!-- .animated -->
    <!-- End Our Event Area -->
    <!-- End Bradcaump area -->
{% endblock %}", "ActiviteBundle:pages:AfficherFrontActivite.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\ActiviteBundle/Resources/views/pages/AfficherFrontActivite.html.twig");
    }
}
