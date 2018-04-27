<?php

/* GarderieBundle:Back:listeInscription.html.twig */
class __TwigTemplate_26d0025c43a44c8f812995baa7de2b37ad11729ca051a994af91ca3cc6f46318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GarderieBundle::GarderieBase.html.twig", "GarderieBundle:Back:listeInscription.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GarderieBundle::GarderieBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:listeInscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Back:listeInscription.html.twig"));

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

    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg-png/6.png"), "html", null, true);
        echo "\" alt=\"bradcaump images\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Espace Garderie</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/brad.png"), "html", null, true);
        echo "\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Listes Inscription</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <div class=\"card\">
    <div class=\"card-header\">
        <h2 class=\"bradcaump-title\">Listes Inscriptions</h2>
    </div>
    <div class=\"card-body\">
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
     <div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                        <thead>
                        <tr role=\"row\">

                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">nomParent</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Adresse</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">JourArriv</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Nurserie</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Repas</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Etat</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">options</th>


                        </tr>    </thead>
                        <tbody>









                        <tbody>
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscription"] ?? $this->getContext($context, "inscription")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 58
            echo "                            <tr>

                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomparent", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "jourArriv", array()), "d/m/y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nurserie", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "repas", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etat", array()), "html", null, true);
            echo "</td>


                                <td> <a  class='btn btn-primary btn-sccess' href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_approuver", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\" >Accepter</a></td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            </div>
    </div><!-- .animated -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Back:listeInscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 73,  148 => 68,  142 => 65,  138 => 64,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  118 => 58,  114 => 57,  85 => 31,  67 => 16,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'GarderieBundle::GarderieBase.html.twig' %}
{% block container %}


    <!-- Start Bradcaump area -->
    <div class=\"ht__bradcaump__area\">
        <div class=\"ht__bradcaump__container\">
            <img src=\"{{ asset('images/bg-png/6.png') }}\" alt=\"bradcaump images\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"bradcaump__inner text-center\">
                            <h2 class=\"bradcaump-title\">Espace Garderie</h2>
                            <nav class=\"bradcaump-inner\">
                                <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                <span class=\"brd-separetor\"><img src=\"{{ asset('images/icons/brad.png') }}\" alt=\"separator images\"></span>
                                <span class=\"breadcrumb-item active\">Listes Inscription</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <div class=\"card\">
    <div class=\"card-header\">
        <h2 class=\"bradcaump-title\">Listes Inscriptions</h2>
    </div>
    <div class=\"card-body\">
        {{ form(form) }}
     <div class=\"row\"><div class=\"col-sm-12\"><table id=\"bootstrap-data-table\" class=\"table table-striped table-bordered dataTable no-footer\" role=\"grid\" aria-describedby=\"bootstrap-data-table_info\">
                        <thead>
                        <tr role=\"row\">

                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">nomParent</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Adresse</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">JourArriv</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Nurserie</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Repas</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">Etat</th>
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"bootstrap-data-table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\" style=\"width: 66px;\">options</th>


                        </tr>    </thead>
                        <tbody>









                        <tbody>
                        {% for m in inscription %}
                            <tr>

                                <td>{{ m.nomparent }}</td>
                                <td>{{ m.adresse}}</td>
                                <td>{{ m.jourArriv |date(\"d/m/y\")}}</td>
                                <td>{{ m.nurserie }}</td>
                                <td>{{ m.repas}}</td>
                                <td>{{ m.etat}}</td>


                                <td> <a  class='btn btn-primary btn-sccess' href=\"{{ path('garderie_approuver',{'id':m.id}) }}\" >Accepter</a></td>


                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            </div>
    </div><!-- .animated -->

{% endblock  %}", "GarderieBundle:Back:listeInscription.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Back/listeInscription.html.twig");
    }
}
