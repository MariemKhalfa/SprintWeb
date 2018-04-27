<?php

/* GarderieBundle:Front:afficherListesGarderies.html.twig */
class __TwigTemplate_7fd8fdaf13963af8978cee46e18f605f248fd3f73b1df2e8d00d7fddbd841efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GarderieBundle:Front:afficherListesGarderies.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:afficherListesGarderies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:afficherListesGarderies.html.twig"));

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
     <section class=\"junior__welcome__area bg-image--26\">
     <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-lg-12\">
             <div class=\"section__title text-center\">
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Nos Garderies</span></h2>

             </div>
         </div>
     </div>

            <div class=\"row event-grid-page\">

               ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["garderie"] ?? $this->getContext($context, "garderie")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 18
            echo "                <!-- Start Single Event -->
                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"dcare__event\">
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateOuverture", array()), "d"), "html", null, true);
            echo "</span><span>th</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>December, <i class=\"fa fa-clock-o\"></i>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "heureDeb", array()), "H:i:s"), "html", null, true);
            echo " am ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "heureFin", array()), "H:i:s"), "html", null, true);
            echo " pm</li>
                                    <li><i class=\"fa fa-home\"></i>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</li>
                                </ul>
                            </div>
                            <div class=\"event__inner\">
                                <p><a href=\"event-details.html\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descriptif", array()), "html", null, true);
            echo "</a></p>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_inscription", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">S'inscrire</a></li>
                                <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_details", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Details</a></li>
                            </ul>
                        </div>
                        <div class=\"event__thumb\">
                            <a href=\"event-details.html\">
                                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["m"], "image", array()))), "html", null, true);
            echo "\" width=\"200%\">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Single Event -->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
        <div class=\"row\">
            <div class=\"col-lg-12\"><div class=\"dcare__pagination mt--80\">

                    <div class=\"dcare__page__list d-flex justify-content-center\">
                        ";
        // line 54
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["garderie"] ?? $this->getContext($context, "garderie")));
        echo "
                    </div>
                </div>
            </div></div>
    </div><!-- .animated -->
    <!-- End Our Event Area -->
    <!-- End Bradcaump area -->
     </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Front:afficherListesGarderies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  127 => 48,  114 => 41,  106 => 36,  102 => 35,  96 => 32,  89 => 28,  83 => 27,  77 => 24,  69 => 18,  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
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
         <div class=\"col-lg-12\">
             <div class=\"section__title text-center\">
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Nos Garderies</span></h2>

             </div>
         </div>
     </div>

            <div class=\"row event-grid-page\">

               {% for m in garderie %}
                <!-- Start Single Event -->
                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                    <div class=\"dcare__event\">
                        <div class=\"event__content\">
                            <div class=\"event__pub\">
                                <div class=\"event__date\">
                                    <span class=\"date\">{{ m.dateOuverture|date('d') }}</span><span>th</span>
                                </div>
                                <ul class=\"event__time\">
                                    <li>December, <i class=\"fa fa-clock-o\"></i>{{ m.heureDeb|date('H:i:s') }} am {{ m.heureFin|date('H:i:s') }} pm</li>
                                    <li><i class=\"fa fa-home\"></i>{{ m.nom }}</li>
                                </ul>
                            </div>
                            <div class=\"event__inner\">
                                <p><a href=\"event-details.html\">{{ m.descriptif }}</a></p>
                            </div>
                            <ul class=\"event__btn\">
                                <li><a href=\"{{ path('garderie_inscription',{'id':m.id}) }}\">S'inscrire</a></li>
                                <li><a href=\"{{ path('garderie_details',{'id':m.id}) }}\">Details</a></li>
                            </ul>
                        </div>
                        <div class=\"event__thumb\">
                            <a href=\"event-details.html\">
                                <img src=\"{{ asset('uploads/images/'~ m.image ) }}\" width=\"200%\">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Single Event -->
              {% endfor %}
        </div>
    </div>
        <div class=\"row\">
            <div class=\"col-lg-12\"><div class=\"dcare__pagination mt--80\">

                    <div class=\"dcare__page__list d-flex justify-content-center\">
                        {{ knp_pagination_render(garderie) }}
                    </div>
                </div>
            </div></div>
    </div><!-- .animated -->
    <!-- End Our Event Area -->
    <!-- End Bradcaump area -->
     </section>
{% endblock %}", "GarderieBundle:Front:afficherListesGarderies.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Front/afficherListesGarderies.html.twig");
    }
}
