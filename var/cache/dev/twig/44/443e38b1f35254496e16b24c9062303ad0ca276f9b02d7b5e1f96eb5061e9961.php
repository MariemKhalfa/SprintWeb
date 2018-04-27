<?php

/* CovoiturageBundle:Default:index.html.twig */
class __TwigTemplate_d33a26364e3c308f1d7229ecb64f32bb355b4453bd498c9ba85f5a222004b525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CovoiturageBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CovoiturageBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CovoiturageBundle:Default:index.html.twig"));

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
   <section>
         <div class=\"container\">
             <div class=\"section-content\">
                 <div class=\"row\">
                     <div class=\"container\">
                         <h2 class=\"text-theme-color-sky line-bottom\">Vous cherchez <span class=\"text-theme-color-red\">un covoiturage</span>
                             pour votre enfant ? <br> <span class=\"text-theme-color-red\">All For Kids </span>vous aide à
                             touver le meilleur covoiturage pour votre enfant !</h2>
                         <h4 class=\"text-theme-color-blue\">Trouver et proposer un covoiturage pour les enfants est
                             désormais un jeu d'enfants! !</h4>
                         <p>En effet, All For Kids est l'unnique plateforme en Tunisie destinée aux parents qui veulent
                             proposer des covoiturages pour des enfants et qui cherchent à leur tour des covoiturages
                             pour leurs enfants.</p>
                         <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_cov");
        echo "\" class=\"btn btn-flat btn-colored btn-theme-color-blue mt-15 mr-15\">Proposer un
                             covoiturage</a><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chercher_cov");
        echo "\" class=\"btn btn-flat btn-colored btn-theme-color-yellow mt-15\">Chercher
                             Covoiturage</a>
                     </div>

                 </div>
             </div>
         </div>
         <div>
             <img alt=\" \" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/f2.png\" class=\"img-responsive img-fullwidth"), "html", null, true);
        echo "\">
         </div>
     </section>
";
        // line 29
        $this->displayBlock('contenu', $context, $blocks);
        // line 30
        echo "  <section>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["covs"] ?? $this->getContext($context, "covs")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 34
            echo "                <div class=\"col-sm-6 col-md-4\">
                    <div class=\"item\">
                        <div class=\"campaign bg-white maxwidth500 mb-30\">
                            <div class=\"thumb\">
                                <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem/6.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-fullwidth\">
                                <div class=\"campaign-overlay\"></div>
                            </div>

                            <div class=\"course-details clearfix p-20 pt-15\">
                                <h4 class=\"price-tag\">Nouveau</h4>
                                <h3 class=\"mt-0\"><a class=\"text-theme-color-red\" href=\"#\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", array()), "html", null, true);
            echo "</a></h3>

                                <ul class=\"review_text list-inline\">

                                </ul>
                                <p>C";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo " ... <a
                                            class=\"text-theme-colored ml-5\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserver_cov", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\"> →</a></p>
                                <div class=\"course-details-bottom mt-15\">
                                    <ul class=\"list-inline\">
                                        <li>Capacité<span>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPlaces", array()), "html", null, true);
            echo "</span></li>
                                        <li>Horaires<span>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "heureDep", array()), "h:i"), "html", null, true);
            echo "</span></li>
                                        <li>Date<span>";
            // line 55
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
        // line 64
        echo "            </div>
        </div>
    </section>
     ";
        // line 253
        echo "

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "CovoiturageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 29,  159 => 253,  154 => 64,  139 => 55,  135 => 54,  131 => 53,  125 => 50,  121 => 49,  113 => 44,  104 => 38,  98 => 34,  94 => 33,  89 => 30,  87 => 29,  81 => 26,  70 => 18,  66 => 17,  50 => 3,  41 => 2,  11 => 1,);
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
                         <h2 class=\"text-theme-color-sky line-bottom\">Vous cherchez <span class=\"text-theme-color-red\">un covoiturage</span>
                             pour votre enfant ? <br> <span class=\"text-theme-color-red\">All For Kids </span>vous aide à
                             touver le meilleur covoiturage pour votre enfant !</h2>
                         <h4 class=\"text-theme-color-blue\">Trouver et proposer un covoiturage pour les enfants est
                             désormais un jeu d'enfants! !</h4>
                         <p>En effet, All For Kids est l'unnique plateforme en Tunisie destinée aux parents qui veulent
                             proposer des covoiturages pour des enfants et qui cherchent à leur tour des covoiturages
                             pour leurs enfants.</p>
                         <a href=\"{{ path('ajouter_cov') }}\" class=\"btn btn-flat btn-colored btn-theme-color-blue mt-15 mr-15\">Proposer un
                             covoiturage</a><a href=\"{{ path('chercher_cov') }}\" class=\"btn btn-flat btn-colored btn-theme-color-yellow mt-15\">Chercher
                             Covoiturage</a>
                     </div>

                 </div>
             </div>
         </div>
         <div>
             <img alt=\" \" src=\"{{ asset('images/mariem/f2.png\" class=\"img-responsive img-fullwidth') }}\">
         </div>
     </section>
{% block contenu %} {% endblock %}
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
                                <h3 class=\"mt-0\"><a class=\"text-theme-color-red\" href=\"#\">{{ c.titre }}</a></h3>

                                <ul class=\"review_text list-inline\">

                                </ul>
                                <p>C{{ c.description }} ... <a
                                            class=\"text-theme-colored ml-5\" href=\"{{ path('reserver_cov',{\"id\":c.id}) }}\"> →</a></p>
                                <div class=\"course-details-bottom mt-15\">
                                    <ul class=\"list-inline\">
                                        <li>Capacité<span>{{  c.nbPlaces}}</span></li>
                                        <li>Horaires<span>{{ c.heureDep|date(\"h:i\")}}</span></li>
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
     {#
     <section>
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>


                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-red\" href=\"#\">Raoued vers Mnihla</a></h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 5.00 out of 5\"><span data-width=\"100%\">5.00</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Maman de deux fillettes agées de 5 et 6 ans, je propose à tout parent intéressé un
                                     covoiturage pour leurs enfants dans la zone Raoued/Mnihla.. <a
                                             class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacité<span>3 enfants</span></li>
                                         <li>Horaires<span>17:50</span></li>
                                         <li>Age<span>5ans - 6ans</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>
                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-lemon\" href=\"#\">Ennasr vers Menzah4</a>
                                 </h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 4.50 out of 5\"><span data-width=\"90%\">4.50</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Covoiturage pour enfants dans la zone Ennasr/Menzah pour tout information... <a
                                             class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacité<span>4 enfants</span></li>
                                         <li>Horaires<span>08:00 - 18:00</span></li>
                                         <li>Ages<span>3ans - 6ans</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>
                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-sky\" href=\"#\">Sidi Bou/Carthage</a></h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 5.00 out of 5\"><span data-width=\"100%\">5.00</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Propose covoiturage pour des enfants agés de moins de six ans ... <a
                                             class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacité<span>4 enfants</span></li>
                                         <li>Horaires<span>07:00 - 19:00</span></li>
                                         <li>Ages<span> moins de 6 ans</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>
                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-green\" href=\"#\">Nabeul vers Tunis</a></h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 4.50 out of 5\"><span data-width=\"90%\">4.50</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing
                                     elit quossit <a class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacité<span>20 kids</span></li>
                                         <li>Horaires<span>45 min</span></li>
                                         <li>Ages<span>5y - 6y</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>
                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-orange\" href=\"#\">Radès vers Mégrine</a>
                                 </h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 5.00 out of 5\"><span data-width=\"100%\">5.00</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing
                                     elit quossit <a class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacity<span>20 kids</span></li>
                                         <li>Duration<span>45 min</span></li>
                                         <li>Age<span>5y - 6y</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class=\"col-sm-6 col-md-4\">
                     <div class=\"item\">
                         <div class=\"campaign bg-white maxwidth500 mb-30\">
                             <div class=\"thumb\">
                                 <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                 <div class=\"campaign-overlay\"></div>
                             </div>
                             <div class=\"course-details clearfix p-20 pt-15\">
                                 <h4 class=\"price-tag\">Nouveau</h4>
                                 <h3 class=\"mt-0\"><a class=\"text-theme-color-red\" href=\"#\">Ariana vers Tunis</a></h3>
                                 <ul class=\"review_text list-inline\">
                                     <li>
                                         <div class=\"star-rating\" title=\"Rated 5.00 out of 5\"><span data-width=\"100%\">5.00</span>
                                         </div>
                                     </li>
                                 </ul>
                                 <p>Lorem ipsum dolor adipisicing elit. Praesent quossit sit amet consect adipisicing
                                     elit quossit <a class=\"text-theme-colored ml-5\" href=\"#\"> →</a></p>
                                 <div class=\"course-details-bottom mt-15\">
                                     <ul class=\"list-inline\">
                                         <li>Capacité<span>2 enfants</span></li>
                                         <li>Duration<span>45 min</span></li>
                                         <li>Age<span>5y - 6y</span></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>#}


 {% endblock %}", "CovoiturageBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle/Resources/views/Default/index.html.twig");
    }
}
