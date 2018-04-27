<?php

/* @Covoiturage/Covoiturage/admin/list_cov_admin.html.twig */
class __TwigTemplate_d825615922cc65378fe5b9e25071b9cbe3cc77d5c27d9f942366e6541f16211c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "@Covoiturage/Covoiturage/admin/list_cov_admin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/admin/list_cov_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/admin/list_cov_admin.html.twig"));

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

    <div class=\"row heading-bg bg-pink\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Covoiturage</span></a></li>
                <li class=\"active\"><span>Liste des covoiturages</span></li>
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



    <!-- Main Content -->
    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->

            <!-- /Title -->

            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">

                </div><form role=\"search\" action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_cov_admin");
        echo "\" >
                    <div class=\"input-group mb-15\" >
                        <input width=\"20px\" type=\"text\" id=\"example-input1-group2\" name=\"filter\" class=\"form-control\" placeholder=\"chercher par covoitureur\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn  btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </div>

                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"panel panel-default card-view\">
                        <div class=\"panel-heading\">

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"panel-wrapper collapse in\">
                            <div class=\"panel-body\">
                                <div class=\"table-wrap\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table display product-overview\" id=\"statement\">
                                            <thead>
                                            <tr role=\"row\">
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Titre</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">";
        // line 68
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["covoitureur"] ?? $this->getContext($context, "covoitureur")), "Covoitureur", "m.nom");
        echo "</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Date</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Heure départ</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Lieu départ</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Lieu destination</th>

                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Nombre de places</th>
                                                ";
        // line 76
        echo "
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["covoitureur"] ?? $this->getContext($context, "covoitureur")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 81
            echo "                                                <tr>
                                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "covoitureur", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "d-m-y"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "heureDep", array()), "h:i"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "lieuDep", array()), "html", null, true);
            echo "</td>

                                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "lieuDest", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPlaces", array()), "html", null, true);
            echo "</td>
                                                    ";
            // line 93
            echo "
                                                    ";
            // line 96
            echo "                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
                                            ";
        // line 108
        echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"navigation text-center\">
        ";
        // line 123
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["covoitureur"] ?? $this->getContext($context, "covoitureur")));
        echo "
    </div>
    </div><!-- .animated -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Covoiturage/Covoiturage/admin/list_cov_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 123,  202 => 108,  199 => 98,  192 => 96,  189 => 93,  185 => 89,  181 => 88,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  157 => 81,  153 => 80,  147 => 76,  137 => 68,  107 => 41,  87 => 23,  78 => 22,  50 => 3,  41 => 2,  11 => 1,);
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


    <div class=\"row heading-bg bg-pink\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Covoiturage</span></a></li>
                <li class=\"active\"><span>Liste des covoiturages</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
{% endblock %}
{% block body %}




    <!-- Main Content -->
    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->

            <!-- /Title -->

            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">

                </div><form role=\"search\" action=\"{{ path('list_cov_admin') }}\" >
                    <div class=\"input-group mb-15\" >
                        <input width=\"20px\" type=\"text\" id=\"example-input1-group2\" name=\"filter\" class=\"form-control\" placeholder=\"chercher par covoitureur\">
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn  btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    </div>

                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"panel panel-default card-view\">
                        <div class=\"panel-heading\">

                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"panel-wrapper collapse in\">
                            <div class=\"panel-body\">
                                <div class=\"table-wrap\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table display product-overview\" id=\"statement\">
                                            <thead>
                                            <tr role=\"row\">
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Titre</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">{{ knp_pagination_sortable(covoitureur,'Covoitureur','m.nom') }}</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Date</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Heure départ</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Lieu départ</th>
                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Lieu destination</th>

                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Nombre de places</th>
                                                {#                                                <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Options</th>#}

                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for c in covoitureur %}
                                                <tr>
                                                    <td>{{ c.titre }}</td>
                                                    <td>{{ c.covoitureur }}</td>
                                                    <td>{{ c.date|date(\"d-m-y\")}}</td>
                                                    <td>{{ c.heureDep|date('h:i') }}</td>
                                                    <td>{{ c.lieuDep }}</td>

                                                    <td>{{ c.lieuDest}}</td>
                                                    <td>{{ c.nbPlaces }}</td>
                                                    {#<td>
                                                        <span class=\"label label-primary font-weight-100\">fee</span>
                                                    </td>#}

                                                    {# <td> <a  class='btn btn-primary btn-success' href=\"{{ path('medecin_modifier',{'id':m.id}) }}\" >Modifier </a></td>
                                                     <td><a class='btn btn-info' href=\"{{ path('medecin_supprimer',{'id':m.id}) }}\" >supprimer</a><td>#}
                                                </tr>
                                            {% endfor %}

                                            {#     <td>
                                                     <span class=\"label label-primary font-weight-100\">fee</span>
                                                 </td>
                                                 <td>
                                                     <span class=\"label label-danger font-weight-100\">refund</span>
                                                 </td>
                                                 <td>
                                                     <span class=\"label label-info font-weight-100\">support</span>
                                                 </td>#}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(covoitureur) }}
    </div>
    </div><!-- .animated -->

{% endblock %}", "@Covoiturage/Covoiturage/admin/list_cov_admin.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle\\Resources\\views\\Covoiturage\\admin\\list_cov_admin.html.twig");
    }
}
