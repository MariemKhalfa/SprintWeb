<?php

/* GarderieBundle:Back:traiterDemandes.html.twig */
class __TwigTemplate_b1ea5de6440f177bf3482b0bf94768d9959bd6033c3263c4380a2c06ccb1f047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "GarderieBundle:Back:traiterDemandes.html.twig", 1);
        $this->blocks = array(
            'btitle' => array($this, 'block_btitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:traiterDemandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:traiterDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_btitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        // line 3
        echo "

    <div class=\"row heading-bg bg-blue\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Garderies</span></a></li>
                <li class=\"active\"><span>Liste des demandes</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "

            <div class=\"card\">
                <div class=\"card-header\">

                </div>

              </div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                    <thead>
                    <tr role=\"row\">


                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">id</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Etat</th>

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">NomGarderie</th>

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Accepter</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Annuler</th>


                    </tr>    </thead>
                    <tbody>









                    <tbody>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demande"] ?? $this->getContext($context, "demande")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 57
            echo "                        <tr>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etat", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idGarderie", array()), "nom", array()), "html", null, true);
            echo "</td>



                            <td> <a  class='btn btn-primary btn-success' href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_accepter2", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >Accepter </a></td>
                            <td> <a  class='btn btn-info' href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_supprimer2", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >Annuler </a></td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Back:traiterDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  148 => 65,  144 => 64,  137 => 60,  133 => 59,  129 => 58,  126 => 57,  122 => 56,  87 => 23,  78 => 22,  50 => 3,  41 => 2,  11 => 1,);
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
{% block btitle %}


    <div class=\"row heading-bg bg-blue\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Garderies</span></a></li>
                <li class=\"active\"><span>Liste des demandes</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
{% endblock %}
{% block body %}


            <div class=\"card\">
                <div class=\"card-header\">

                </div>

              </div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                    <thead>
                    <tr role=\"row\">


                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">id</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Etat</th>

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">NomGarderie</th>

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Accepter</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Annuler</th>


                    </tr>    </thead>
                    <tbody>









                    <tbody>
                    {% for m in demande %}
                        <tr>
                            <td>{{ m.id}}</td>
                            <td>{{ m.etat }}</td>
                            <td>{{ m.idGarderie.nom}}</td>



                            <td> <a  class='btn btn-primary btn-success' href=\"{{ path('demande_accepter2',{'id':m.id}) }}\" >Accepter </a></td>
                            <td> <a  class='btn btn-info' href=\"{{ path('demande_supprimer2',{'id':m.id}) }}\" >Annuler </a></td>

                        </tr>
                    {% endfor %}

                    </tbody>
                </table>
            </div>
        </div>
    </div>



{% endblock %}", "GarderieBundle:Back:traiterDemandes.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Back/traiterDemandes.html.twig");
    }
}
