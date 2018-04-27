<?php

/* @Babysitting/Babysitting/front/lister_mes_babysittings.html.twig */
class __TwigTemplate_1789a95d0a44bf50458448f327a4fe217cddeaed6fa14a14ddae05b9741fc91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Babysitting/Babysitting/front/lister_mes_babysittings.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Babysitting/Babysitting/front/lister_mes_babysittings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Babysitting/Babysitting/front/lister_mes_babysittings.html.twig"));

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
                        <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Liste de mes babysittings proposés</span>
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
        $context['_seq'] = twig_ensure_traversable(($context["bab"] ?? $this->getContext($context, "bab")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 20
            echo "                        <div class=\"col-sm-6 col-md-4\">
                            <div class=\"item\">
                                <div class=\"campaign bg-white maxwidth500 mb-30\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/b1.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-fullwidth\">
                                        <div class=\"campaign-overlay\"></div>
                                    </div>

                                    <div class=\"course-details clearfix p-20 pt-15\">
                                        <h4 class=\"price-tag\">Nouveau</h4>
                                        <h3 class=\"mt-0\"><a class=\"text-theme-color-orange\" href=\"#\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "titre", array()), "html", null, true);
            echo "</a></h3>

                                        <ul class=\"review_text list-inline\">

                                        </ul>
                                        <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "description", array()), "html", null, true);
            echo " ... <a
                                                    class=\"text-theme-colored ml-5\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("details_babysitting", array("id" => $this->getAttribute($context["b"], "id", array()))), "html", null, true);
            echo "\"> →</a></p>
                                        <div class=\"course-details-bottom mt-15\">
                                            <ul class=\"list-inline\">
                                                <li>Nombre de places<span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "nbrEnfants", array()), "html", null, true);
            echo "</span></li>
                                                <li>Horaires<span>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["b"], "heureDeb", array()), "h:i"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["b"], "heureFin", array()), "h:i"), "html", null, true);
            echo "</span></li>
                                                <li>Date<span>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["b"], "date", array()), "d/m/y"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
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
        return "@Babysitting/Babysitting/front/lister_mes_babysittings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  114 => 41,  108 => 40,  104 => 39,  98 => 36,  94 => 35,  86 => 30,  77 => 24,  71 => 20,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
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
                        <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Liste de mes babysittings proposés</span>
                        </h2>
                    </div>

                </div>
            </div>
        </div>

        <section>
            <div class=\"container\">
                <div class=\"row\">
                    {% for b in bab %}
                        <div class=\"col-sm-6 col-md-4\">
                            <div class=\"item\">
                                <div class=\"campaign bg-white maxwidth500 mb-30\">
                                    <div class=\"thumb\">
                                        <img src=\"{{ asset('images/mariem/b1.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                        <div class=\"campaign-overlay\"></div>
                                    </div>

                                    <div class=\"course-details clearfix p-20 pt-15\">
                                        <h4 class=\"price-tag\">Nouveau</h4>
                                        <h3 class=\"mt-0\"><a class=\"text-theme-color-orange\" href=\"#\">{{ b.titre }}</a></h3>

                                        <ul class=\"review_text list-inline\">

                                        </ul>
                                        <p>{{ b.description }} ... <a
                                                    class=\"text-theme-colored ml-5\" href=\"{{ path('details_babysitting',{\"id\":b.id}) }}\"> →</a></p>
                                        <div class=\"course-details-bottom mt-15\">
                                            <ul class=\"list-inline\">
                                                <li>Nombre de places<span>{{  b.nbrEnfants}}</span></li>
                                                <li>Horaires<span>{{ b.heureDeb|date(\"h:i\")}} - {{ b.heureFin|date(\"h:i\")}}</span></li>
                                                <li>Date<span>{{ b.date |date(\"d/m/y\")}}</span></li>
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

", "@Babysitting/Babysitting/front/lister_mes_babysittings.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\BabysittingBundle\\Resources\\views\\Babysitting\\front\\lister_mes_babysittings.html.twig");
    }
}
