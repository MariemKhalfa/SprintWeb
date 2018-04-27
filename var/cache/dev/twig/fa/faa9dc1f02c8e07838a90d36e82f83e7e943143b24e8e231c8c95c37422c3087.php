<?php

/* EvenementBundle::list.html.twig */
class __TwigTemplate_276e22653ddebfa8f6f4ff4092a8edee8df3f3aa1039b7375cf40c505d80db69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "EvenementBundle::list.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::list.html.twig"));

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
    <!-- Main Content -->
    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->
            <div class=\"row heading-bg bg-pink\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h5 class=\"txt-light\">All For Kids</h5>
                </div>

                <!-- Breadcrumb -->
                <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Dashboard</a></li>
                        <li><a href=\"#\"><span>Evenements</span></a></li>
                        <li class=\"active\"><span>Modifier Evenement</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->

            </div>
            <!-- /Title -->

            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">

                </div><form role=\"search\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_list");
        echo "\" >
                    <div class=\"input-group mb-15\" >
                        <input width=\"20px\" type=\"text\" id=\"example-input1-group2\" name=\"filter\" class=\"form-control\" placeholder=\"Search\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn  btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </div>
                </form></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                    <thead>
                    <tr role=\"row\">

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">";
        // line 44
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["evenement"] ?? $this->getContext($context, "evenement")), "intitule", "e.intitule");
        echo "</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">nombre de participants</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Budget</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">adresse</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Date</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Categorie</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Image</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Options</th>

                    </tr>    </thead>
                    <tbody>









                    <tbody>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 66
            echo "                        <tr>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "intitule", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nbParticipants", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "budget", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["e"], "date", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "categorie", array()), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["e"], "image", array()))), "html", null, true);
            echo "\" width=\"100%\"></td>

                            <td> <a  class='btn btn-primary btn-success' href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Evenement_modifier", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" >Modifier </a></td>
                            <td><a class='btn btn-info' href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Evenement_supprimer", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\" >supprimer</a><td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"navigation text-center\">
        ";
        // line 87
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["evenement"] ?? $this->getContext($context, "evenement")));
        echo "
    </div>
    </div><!-- .animated -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle::list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 87,  168 => 79,  159 => 76,  155 => 75,  150 => 73,  146 => 72,  142 => 71,  138 => 70,  134 => 69,  130 => 68,  126 => 67,  123 => 66,  119 => 65,  95 => 44,  81 => 33,  49 => 3,  40 => 2,  11 => 1,);
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

    <!-- Main Content -->
    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->
            <div class=\"row heading-bg bg-pink\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h5 class=\"txt-light\">All For Kids</h5>
                </div>

                <!-- Breadcrumb -->
                <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Dashboard</a></li>
                        <li><a href=\"#\"><span>Evenements</span></a></li>
                        <li class=\"active\"><span>Modifier Evenement</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->

            </div>
            <!-- /Title -->

            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">

                </div><form role=\"search\" action=\"{{ path('evenement_list') }}\" >
                    <div class=\"input-group mb-15\" >
                        <input width=\"20px\" type=\"text\" id=\"example-input1-group2\" name=\"filter\" class=\"form-control\" placeholder=\"Search\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn  btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </div>
                </form></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                    <thead>
                    <tr role=\"row\">

                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">{{ knp_pagination_sortable(evenement,'intitule','e.intitule') }}</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">nombre de participants</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Budget</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">adresse</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Date</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Categorie</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Image</th>
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Options</th>

                    </tr>    </thead>
                    <tbody>









                    <tbody>
                    {% for e in evenement %}
                        <tr>
                            <td>{{ e.intitule }}</td>
                            <td>{{ e.nbParticipants}}</td>
                            <td>{{ e.budget}}</td>
                            <td>{{ e.adresse }}</td>
                            <td>{{ e.date|date }}</td>
                            <td>{{ e.categorie}}</td>
                            <td><img src=\"{{ asset('uploads/images/'~ e.image ) }}\" width=\"100%\"></td>

                            <td> <a  class='btn btn-primary btn-success' href=\"{{ path('Evenement_modifier',{'id':e.id}) }}\" >Modifier </a></td>
                            <td><a class='btn btn-info' href=\"{{ path('Evenement_supprimer',{'id':e.id}) }}\" >supprimer</a><td>
                        </tr>
                    {% endfor %}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(evenement) }}
    </div>
    </div><!-- .animated -->
{% endblock %}", "EvenementBundle::list.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\EvenementBundle/Resources/views/list.html.twig");
    }
}
