<?php

/* MedecinBundle:Back:listesMedecins.html.twig */
class __TwigTemplate_bae0b667f0f2e19d8b724d969cb3ae03883ff0828707114dc90b407e800fafa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "MedecinBundle:Back:listesMedecins.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Back:listesMedecins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Back:listesMedecins.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_btitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        // line 5
        echo "

        <div class=\"row heading-bg bg-blue\">
            <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                <h5 class=\"txt-light\">All For Kids admin</h5>
            </div>

            <!-- Breadcrumb -->
            <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\">Dashboard</a></li>
                    <li><a href=\"#\"><span>Médecins</span></a></li>
                    <li class=\"active\"><span>Liste des médecins</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->

        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
        <div class=\"card\">
            <div class=\"card-header\">

            </div>
            <div class=\"card-body\">

            </div><form role=\"search\" action=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_liste");
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
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">prenom</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["medecin"] ?? $this->getContext($context, "medecin")), "nom", "m.nom");
        echo "</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Adresse</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Email</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Telephone</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Specialite</th>

                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Image</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Options</th>

                </tr>    </thead>
                <tbody>









                <tbody>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medecin"] ?? $this->getContext($context, "medecin")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 65
            echo "                    <tr>
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresse", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "telephone", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "specialite", array()), "html", null, true);
            echo "</td>
                        <td><img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["m"], "image", array()))), "html", null, true);
            echo "\" width=\"100%\"></td>

                        <td> <a  class='btn btn-primary btn-success' href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_modifier", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >Modifier </a></td>
                        <td><a class='btn btn-info' href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_supprimer", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >supprimer</a><td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["medecin"] ?? $this->getContext($context, "medecin")));
        echo "
    </div>
    </div><!-- .animated -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MedecinBundle:Back:listesMedecins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 87,  184 => 79,  175 => 76,  171 => 75,  166 => 73,  162 => 72,  157 => 70,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  138 => 65,  134 => 64,  110 => 43,  96 => 32,  87 => 25,  78 => 24,  50 => 5,  41 => 4,  11 => 1,);
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
                    <li><a href=\"#\"><span>Médecins</span></a></li>
                    <li class=\"active\"><span>Liste des médecins</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->

        </div>
    {% endblock %}
    {% block body %}

        <div class=\"card\">
            <div class=\"card-header\">

            </div>
            <div class=\"card-body\">

            </div><form role=\"search\" action=\"{{ path('medecin_liste') }}\" >
                <div class=\"input-group mb-15\" >
                    <input width=\"20px\" type=\"text\" id=\"example-input1-group2\" name=\"filter\" class=\"form-control\" placeholder=\"Search\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn  btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                </div>
            </form></div></div><div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                <thead>
                <tr role=\"row\">
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">prenom</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">{{ knp_pagination_sortable(medecin,'nom','m.nom') }}</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Adresse</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Email</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Telephone</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Specialite</th>

                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Image</th>
                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Options</th>

                </tr>    </thead>
                <tbody>









                <tbody>
                {% for m in medecin %}
                    <tr>
                        <td>{{ m.prenom }}</td>
                        <td>{{ m.nom }}</td>
                        <td>{{ m.adresse}}</td>
                        <td>{{ m.email }}</td>
                        <td>{{ m.telephone }}</td>

                        <td>{{ m.specialite}}</td>
                        <td><img src=\"{{ asset('uploads/images/'~ m.image ) }}\" width=\"100%\"></td>

                        <td> <a  class='btn btn-primary btn-success' href=\"{{ path('medecin_modifier',{'id':m.id}) }}\" >Modifier </a></td>
                        <td><a class='btn btn-info' href=\"{{ path('medecin_supprimer',{'id':m.id}) }}\" >supprimer</a><td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>
</div>

    <div class=\"navigation text-center\">
        {{ knp_pagination_render(medecin) }}
    </div>
    </div><!-- .animated -->
{% endblock %}", "MedecinBundle:Back:listesMedecins.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\MedecinBundle/Resources/views/Back/listesMedecins.html.twig");
    }
}
