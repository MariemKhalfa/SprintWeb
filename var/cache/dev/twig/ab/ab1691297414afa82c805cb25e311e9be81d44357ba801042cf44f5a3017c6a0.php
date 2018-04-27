<?php

/* @Medecin/Front/afficherListesMedecins.html.twig */
class __TwigTemplate_3f496d03cdbd4a1bd6be96612ad6fc31da1bea72cb105f394ff252a658984a38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Medecin/Front/afficherListesMedecins.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Medecin/Front/afficherListesMedecins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Medecin/Front/afficherListesMedecins.html.twig"));

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
        echo "    <section class=\"junior__welcome__area bg-image--26\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Nos medecins</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--40\">
                <!-- Start Single Team -->
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medecin"] ?? $this->getContext($context, "medecin")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 16
            echo "                <div class=\"col-lg-4 col-md-6 col-sm-6 col-12\">
                    <div class=\"team__style--3 team--4 hover-color-2\">
                        <div class=\"team__thumb\">
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["m"], "image", array()))), "html", null, true);
            echo "\" alt=\"team images\">
                        </div>
                        <div class=\"team__hover__action\">
                            <div class=\"team__details\">
                                <div class=\"team__info\">
                                    <h6><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_details", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
            echo "</a></h6>
                                    <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "specialite", array()), "html", null, true);
            echo "</span>
                                    <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "</span>
                                </div>
                                <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresse", array()), "html", null, true);
            echo "</p>
                                <ul class=\"dacre__social__link--2 d-flex justify-content-center\">
                                    <li class=\"facebook\"><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li class=\"twitter\"><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"vimeo\"><a href=\"https://vimeo.com/\"><i class=\"fa fa-vimeo\"></i></a></li>
                                    <li class=\"pinterest\"><a href=\"https://www.pinterest.com/\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\"><div class=\"dcare__pagination mt--80\">

                    <div class=\"dcare__page__list d-flex justify-content-center\">
                        ";
        // line 48
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["medecin"] ?? $this->getContext($context, "medecin")));
        echo "
                    </div>
                </div>
            </div></div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Medecin/Front/afficherListesMedecins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  116 => 41,  97 => 28,  92 => 26,  88 => 25,  80 => 24,  72 => 19,  67 => 16,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"junior__welcome__area bg-image--26\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Nos medecins</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class=\"row mt--40\">
                <!-- Start Single Team -->
                {% for m in medecin %}
                <div class=\"col-lg-4 col-md-6 col-sm-6 col-12\">
                    <div class=\"team__style--3 team--4 hover-color-2\">
                        <div class=\"team__thumb\">
                            <img src=\"{{ asset('uploads/images/'~ m.image ) }}\" alt=\"team images\">
                        </div>
                        <div class=\"team__hover__action\">
                            <div class=\"team__details\">
                                <div class=\"team__info\">
                                    <h6><a href=\"{{ path('medecin_details',{'id':m.id}) }}\">{{ m.nom }} {{ m.prenom }}</a></h6>
                                    <span>{{ m.specialite}}</span>
                                    <span>{{ m.email}}</span>
                                </div>
                                <p>{{ m.adresse }}</p>
                                <ul class=\"dacre__social__link--2 d-flex justify-content-center\">
                                    <li class=\"facebook\"><a href=\"https://www.facebook.com/\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li class=\"twitter\"><a href=\"https://twitter.com/\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"vimeo\"><a href=\"https://vimeo.com/\"><i class=\"fa fa-vimeo\"></i></a></li>
                                    <li class=\"pinterest\"><a href=\"https://www.pinterest.com/\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
                    {% endfor %}

            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\"><div class=\"dcare__pagination mt--80\">

                    <div class=\"dcare__page__list d-flex justify-content-center\">
                        {{ knp_pagination_render(medecin) }}
                    </div>
                </div>
            </div></div>
    </section>
{% endblock %}", "@Medecin/Front/afficherListesMedecins.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\MedecinBundle\\Resources\\views\\Front\\afficherListesMedecins.html.twig");
    }
}
