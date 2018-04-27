<?php

/* ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig */
class __TwigTemplate_141d703b9d7bad4b6c9626e731a75d3b7fe38c1d8f1d11963ef85607589a9c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'java' => array($this, 'block_java'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-sm-12\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">Enseignant</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                     <code>La table des Enseignants :</code>
                    <a href=\"\" class=\"btn\" value=\"Ajouter un enseignant\" style=\"color: #0e3e70;\">Ajouter un enseignant</a>
                    <div class=\"table-wrap mt-40\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered mb-0\">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Username</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numero Telephone</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Specialite</th>
                                    <th class=\"text-nowrap\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Enseignant"] ?? $this->getContext($context, "Enseignant")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 33
            echo "                                <tr>
                                    <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["m"], "photo", array())), "html", null, true);
            echo "\" width=\"100px\" height=\"100px\"></td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "telephone", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "specialite", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-nowrap\"><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("e_learning_modifBackEnseignant", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"  class=\"mr-25\" data-toggle=\"tooltip\" data-original-title=\"Edit\"> <i class=\"fa fa-pencil text-inverse m-r-10\"></i> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("e_learning_suppBackEnseignant", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" > <i class=\"fa fa-close text-danger\"></i> </a> </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        // line 54
        $this->displayBlock('java', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_java($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "java"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "java"));

        // line 55
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/peity-data.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  160 => 55,  142 => 54,  131 => 45,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  85 => 33,  81 => 32,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backBase.html.twig' %}
{% block body %}
    <div class=\"col-sm-12\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">Enseignant</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                     <code>La table des Enseignants :</code>
                    <a href=\"\" class=\"btn\" value=\"Ajouter un enseignant\" style=\"color: #0e3e70;\">Ajouter un enseignant</a>
                    <div class=\"table-wrap mt-40\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered mb-0\">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Username</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numero Telephone</th>
                                    <th>Email</th>
                                    <th>Description</th>
                                    <th>Specialite</th>
                                    <th class=\"text-nowrap\">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for m in Enseignant %}
                                <tr>
                                    <td><img src=\"{{ asset(m.photo) }}\" width=\"100px\" height=\"100px\"></td>
                                    <td>{{ m.username }}</td>
                                    <td>{{ m.nom }}</td>
                                    <td>{{ m.prenom }}</td>
                                    <td>{{ m.telephone}}</td>
                                    <td>{{ m.email }}</td>
                                    <td>{{ m.description }}</td>
                                    <td>{{ m.specialite }}</td>
                                    <td class=\"text-nowrap\"><a href=\"{{ path('e_learning_modifBackEnseignant',{'id':m.id }) }}\"  class=\"mr-25\" data-toggle=\"tooltip\" data-original-title=\"Edit\"> <i class=\"fa fa-pencil text-inverse m-r-10\"></i> </a> <a href=\"{{ path('e_learning_suppBackEnseignant',{'id':m.id  }) }}\" > <i class=\"fa fa-close text-danger\"></i> </a> </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% block java %}
    <script src=\"{{ asset('vendors/bower_components/peity/jquery.peity.min.js') }}\"></script>
    <script src=\"{{ asset('dist/js/peity-data.js') }}\"></script>

    {% endblock %}
{% endblock %}", "ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\ELearningBundle/Resources/views/Enseignant/AfficherBackEnseignant.html.twig");
    }
}
