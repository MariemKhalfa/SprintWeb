<?php

/* EvenementBundle::parentsFront.html.twig */
class __TwigTemplate_329103a6081f264a86f35fe159b24034536c39bd8df6df15dee3539cf6c3f827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EvenementBundle::parentsFront.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::parentsFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::parentsFront.html.twig"));

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
        echo "

    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">

                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 10
            echo "                    ";
            if (($this->getAttribute($context["e"], "categorie", array()) == "parent")) {
                // line 11
                echo "                    <!-- Start Single Event -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"dcare__event\">
                            <div class=\"event__content\">
                                <div class=\"event__pub\">
                                    <div class=\"event__date\">
                                        <span class=\"date\">";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date", array()), "d"), "html", null, true);
                echo "</span><span>th</span>
                                    </div>
                                    <ul class=\"event__time\">
                                        <li>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date", array()), "M-Y"), "html", null, true);
                echo ", <i class=\"fa fa-clock-o\"></i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date", array()), "H:i"), "html", null, true);
                echo " </li>
                                        <li><i class=\"fa fa-home\"></i>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
                echo "</li>
                                    </ul>
                                </div>
                                <div class=\"event__inner\">
                                    <p><a>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "intitule", array()), "html", null, true);
                echo "</a></p>
                                </div>
                                <ul class=\"event__btn\">

                                </ul>
                            </div>
                            <div class=\"event__thumb\">
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("")), "html", null, true);
                echo "app_dev.php/activite/show/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">
                                    <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["e"], "image", array()))), "html", null, true);
                echo "\" width=\"200%\">

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Event -->
                    ";
            }
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "EvenementBundle::parentsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  118 => 41,  107 => 33,  101 => 32,  91 => 25,  84 => 21,  78 => 20,  72 => 17,  64 => 11,  61 => 10,  57 => 9,  49 => 3,  40 => 2,  11 => 1,);
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


    <div class=\"dcare__event__area bg--white section-padding--lg\">
        <div class=\"container\">
            <div class=\"row event-grid-page\">

                {% for e in evenement %}
                    {% if e.categorie== \"parent\" %}
                    <!-- Start Single Event -->
                    <div class=\"col-lg-4 col-md-6 col-sm-12\">
                        <div class=\"dcare__event\">
                            <div class=\"event__content\">
                                <div class=\"event__pub\">
                                    <div class=\"event__date\">
                                        <span class=\"date\">{{ e.date|date('d') }}</span><span>th</span>
                                    </div>
                                    <ul class=\"event__time\">
                                        <li>{{ e.date|date('M-Y') }}, <i class=\"fa fa-clock-o\"></i>{{ e.date|date('H:i') }} </li>
                                        <li><i class=\"fa fa-home\"></i>{{ e.adresse}}</li>
                                    </ul>
                                </div>
                                <div class=\"event__inner\">
                                    <p><a>{{ e.intitule }}</a></p>
                                </div>
                                <ul class=\"event__btn\">

                                </ul>
                            </div>
                            <div class=\"event__thumb\">
                                <a href=\"{{ absolute_url(asset('')) }}app_dev.php/activite/show/{{ e.id }}\">
                                    <img src=\"{{ asset('uploads/images/'~ e.image ) }}\" width=\"200%\">

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Event -->
                    {% endif %}
                {% endfor %}
            </div>
        </div>

    </div><!-- .animated -->
    <!-- End Our Event Area -->
    <!-- End Bradcaump area -->
{% endblock %}", "EvenementBundle::parentsFront.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\EvenementBundle/Resources/views/parentsFront.html.twig");
    }
}
