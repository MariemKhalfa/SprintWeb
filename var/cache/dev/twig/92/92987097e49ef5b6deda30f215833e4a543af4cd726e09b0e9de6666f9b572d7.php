<?php

/* ActiviteBundle:pages:AfficherBackActivite.html.twig */
class __TwigTemplate_73e9e267a21224c3683277b9767ac6001445badb0a9e6e059eaefda38bed9e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "ActiviteBundle:pages:AfficherBackActivite.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:pages:AfficherBackActivite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActiviteBundle:pages:AfficherBackActivite.html.twig"));

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
        echo "

    <div class=\"col-sm-12\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">Activités</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 16
            echo "                        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["success_message"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                     <code>La table des Activités :</code>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_createActivite");
        echo "\" class=\"btn\" value=\"Ajouter une activite\" style=\"color: #0e3e70;\">Ajouter une activité </a>
                    <div class=\"table-wrap mt-70\">
                        <div class=\"table-responsive    \">
                            <table class=\"table table-hover \">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Adresse</th>
                                    <th>Date       </th>
                                    <th>Heure</th>
                                    <th>Age minimal</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Activite"] ?? $this->getContext($context, "Activite")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 40
            echo "                                <tr>


                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "type", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "adresse", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "heure", array()), "H:i"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ageMin", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "description", array()), "html", null, true);
            echo "</td>
                                    <td><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["a"], "image", array()))), "html", null, true);
            echo "\" width=\"50%\"></td>

                                    <td class=\"text-nowrap\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_updateActivite", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\"  class=\"mr-25\" data-toggle=\"tooltip\" data-original-title=\"Edit\"> <i class=\"fa fa-pencil text-inverse m-r-10\"></i> </a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_deleteActivite", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
            echo "\" > <i class=\"fa fa-close text-danger\"></i> </a> </td>


                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                                    <tr>
                                        <td>
                                            Pas d'activités !
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        // line 71
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

        // line 72
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/peity-data.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ActiviteBundle:pages:AfficherBackActivite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 73,  194 => 72,  176 => 71,  165 => 62,  154 => 56,  142 => 51,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  108 => 40,  103 => 39,  81 => 20,  77 => 18,  68 => 16,  64 => 15,  50 => 3,  41 => 2,  11 => 1,);
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
                    <h6 class=\"panel-title txt-dark\">Activités</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    {% for success_message in app.session.flashbag.get('message') %}
                        <div class=\"alert alert-success\">{{ success_message }}</div>
                    {% endfor %}

                     <code>La table des Activités :</code>
                    <a href=\"{{ path('activite_createActivite') }}\" class=\"btn\" value=\"Ajouter une activite\" style=\"color: #0e3e70;\">Ajouter une activité </a>
                    <div class=\"table-wrap mt-70\">
                        <div class=\"table-responsive    \">
                            <table class=\"table table-hover \">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Adresse</th>
                                    <th>Date       </th>
                                    <th>Heure</th>
                                    <th>Age minimal</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody>
                                {% for a in Activite %}
                                <tr>


                                    <td>{{ a.type }}</td>
                                    <td>{{ a.adresse }}</td>
                                    <td>{{ a.date | date('d-m-y')}}</td>
                                    <td>{{ a.heure | date('H:i') }}</td>
                                    <td>{{ a.ageMin }}</td>
                                    <td>{{ a.description }}</td>
                                    <td><img src=\"{{ asset('uploads/images/'~ a.image ) }}\" width=\"50%\"></td>

                                    <td class=\"text-nowrap\"><a href=\"{{ path('activite_updateActivite',{'id':a.id }) }}\"  class=\"mr-25\" data-toggle=\"tooltip\" data-original-title=\"Edit\"> <i class=\"fa fa-pencil text-inverse m-r-10\"></i> </a> <a href=\"{{ path('activite_deleteActivite',{'id':a.id  }) }}\" > <i class=\"fa fa-close text-danger\"></i> </a> </td>


                                </tr>
                                {% else %}
                                    <tr>
                                        <td>
                                            Pas d'activités !
                                        </td>
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
{% endblock %}", "ActiviteBundle:pages:AfficherBackActivite.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\ActiviteBundle/Resources/views/pages/AfficherBackActivite.html.twig");
    }
}
