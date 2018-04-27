<?php

/* ELearningBundle:Enseignant:AfficherEnseignant.html.twig */
class __TwigTemplate_33b50ae4759fe062c93725b84d618cb1cf3b9dbb5971d14cf6323b6ce5076681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ELearningBundle:Enseignant:AfficherEnseignant.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ELearningBundle:Enseignant:AfficherEnseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ELearningBundle:Enseignant:AfficherEnseignant.html.twig"));

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
        echo "    <section class=\"dcare__team__area pb--150 bg--white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 col-md-12\">
                <div class=\"section__title text-center\">
                    <h2 class=\"title__line\">Out Teachers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                </div>
            </div>
        </div>
        <div class=\"row mt--40\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Enseignant"] ?? $this->getContext($context, "Enseignant")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 15
            echo "        <div class=\"col-lg-4 col-md-6 col-sm-6 col-12\">
            <div class=\"team__style--3 team--4 hover-color-2\">
                <div class=\"team__thumb\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["m"], "photo", array())), "html", null, true);
            echo "\" alt=\"team images\">
                </div>
                <div class=\"team__hover__action\">
                    <div class=\"team__details\">
                        <div class=\"team__info\">
                            <h6><a href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
            echo "</a></h6>
                            <span>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "specialite", array()), "html", null, true);
            echo "</span>
                        </div>
                        <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "<br>
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "telephone", array()), "html", null, true);
            echo "<br></p>
                    </div>
                </div>
            </div>
        ";
            // line 32
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 33
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("e_learning_affecterEnfant", array("idm" => $this->getAttribute($context["m"], "id", array()), "idp" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-block\" style=\"color:white\" >Inscrire mon enfant</a>
        </div>

            ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        </div>
    </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ELearningBundle:Enseignant:AfficherEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 38,  115 => 37,  107 => 33,  105 => 32,  98 => 28,  94 => 27,  90 => 26,  85 => 24,  79 => 23,  71 => 18,  66 => 15,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"dcare__team__area pb--150 bg--white\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 col-md-12\">
                <div class=\"section__title text-center\">
                    <h2 class=\"title__line\">Out Teachers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
                </div>
            </div>
        </div>
        <div class=\"row mt--40\">
    {% for m in Enseignant %}
        <div class=\"col-lg-4 col-md-6 col-sm-6 col-12\">
            <div class=\"team__style--3 team--4 hover-color-2\">
                <div class=\"team__thumb\">
                    <img src=\"{{ asset(m.photo) }}\" alt=\"team images\">
                </div>
                <div class=\"team__hover__action\">
                    <div class=\"team__details\">
                        <div class=\"team__info\">
                            <h6><a href=\"#\">{{ m.nom }} {{ m.prenom }}</a></h6>
                            <span>{{ m.specialite }}</span>
                        </div>
                        <p>{{ m.description }}</p>
                        <p>{{ m.email }}<br>
                            {{ m.telephone }}<br></p>
                    </div>
                </div>
            </div>
        {% if is_granted('ROLE_USER') %}
                <a href=\"{{ path('e_learning_affecterEnfant',{'idm':m.id ,'idp':app.user.id }) }}\" class=\"btn btn-success btn-block\" style=\"color:white\" >Inscrire mon enfant</a>
        </div>

            {% endif %}
    {% endfor %}

        </div>
    </div>
    </section>
{% endblock %}", "ELearningBundle:Enseignant:AfficherEnseignant.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\ELearningBundle/Resources/views/Enseignant/AfficherEnseignant.html.twig");
    }
}
