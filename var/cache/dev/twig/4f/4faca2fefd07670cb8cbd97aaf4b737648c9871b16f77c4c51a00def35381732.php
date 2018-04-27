<?php

/* @Covoiturage/Covoiturage/front/lister_mes_cov.html.twig */
class __TwigTemplate_844bf976a6062b247b301b70a85504ce4173ad31a7827792dfd14d42f5d31511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Covoiturage/Covoiturage/front/lister_mes_cov.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/lister_mes_cov.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/lister_mes_cov.html.twig"));

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
        echo "    <section>
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"container\">
                        <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Liste de mes covoiturages proposés</span>
                        </h2>
                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["covs"] ?? $this->getContext($context, "covs")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "                        <div class=\"col-sm-6 col-md-4\">
                            <div class=\"item\">
                                <div class=\"campaign bg-white maxwidth500 mb-30\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/6.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-fullwidth\">
                                        <div class=\"campaign-overlay\"></div>
                                    </div>

                                    <div class=\"course-details clearfix p-20 pt-15\">
                                        <h4 class=\"price-tag\">Nouveau</h4>
                                        <h3 class=\"mt-0\"><a class=\"text-theme-color-orange\" href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", array()), "html", null, true);
            echo "</a></h3>

                                        <ul class=\"review_text list-inline\">

                                        </ul>
                                        <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo " ... <a
                                                    class=\"text-theme-colored ml-5\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_cov", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\"> →</a></p>
                                        <div class=\"course-details-bottom mt-15\">
                                            <ul class=\"list-inline\">
                                                <li>Nombre de places<span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPlaces", array()), "html", null, true);
            echo "</span></li>
                                                <li>Heure de départ<span>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "heureDep", array()), "h:i"), "html", null, true);
            echo "</span></li>
                                                <li>Date<span>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "d/m/y"), "html", null, true);
            echo "</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>
        </section>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Covoiturage/Covoiturage/front/lister_mes_cov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  112 => 41,  108 => 40,  104 => 39,  98 => 36,  94 => 35,  86 => 30,  77 => 24,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block container %}
    <section>
        <div class=\"container\">
            <div class=\"section-content\">
                <div class=\"row\">
                    <div class=\"container\">
                        <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Liste de mes covoiturages proposés</span>
                        </h2>
                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class=\"container\">
                <div class=\"row\">
                    {% for c in covs %}
                        <div class=\"col-sm-6 col-md-4\">
                            <div class=\"item\">
                                <div class=\"campaign bg-white maxwidth500 mb-30\">
                                    <div class=\"thumb\">
                                        <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                        <div class=\"campaign-overlay\"></div>
                                    </div>

                                    <div class=\"course-details clearfix p-20 pt-15\">
                                        <h4 class=\"price-tag\">Nouveau</h4>
                                        <h3 class=\"mt-0\"><a class=\"text-theme-color-orange\" href=\"#\">{{ c.titre }}</a></h3>

                                        <ul class=\"review_text list-inline\">

                                        </ul>
                                        <p>{{ c.description }} ... <a
                                                    class=\"text-theme-colored ml-5\" href=\"{{ path('details_cov',{\"id\":c.id}) }}\"> →</a></p>
                                        <div class=\"course-details-bottom mt-15\">
                                            <ul class=\"list-inline\">
                                                <li>Nombre de places<span>{{  c.nbPlaces}}</span></li>
                                                <li>Heure de départ<span>{{ c.heureDep|date(\"h:i\")}}</span></li>
                                                <li>Date<span>{{ c.date |date(\"d/m/y\")}}</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>
    </section>

{% endblock %}
", "@Covoiturage/Covoiturage/front/lister_mes_cov.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle\\Resources\\views\\Covoiturage\\front\\lister_mes_cov.html.twig");
    }
}
