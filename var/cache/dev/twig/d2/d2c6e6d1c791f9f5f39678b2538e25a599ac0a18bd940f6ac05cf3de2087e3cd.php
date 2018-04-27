<?php

/* coupons/index.html.twig */
class __TwigTemplate_f8e38f970513929698a2bcb185785dad6a85d48998604ee5894afcbab860b3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "coupons/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupons/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coupons/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Coupons list</h1>
<div class=\"panel panel-default card-view\">
    <table class=\"jsgrid-table\">
    <tbody>
    <tr class=\"jsgrid-header-row\">
        <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 50px;\">Id</th>
        <th class=\"jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable\" style=\"width: 100px;\">Intitule</th>
        <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\">Imagecoupon</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Ensegne</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Description</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Datedebut</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Datefin</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Valeur</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Codepromo</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Actions</th>
        <th class=\"jsgrid-header-cell jsgrid-control-field jsgrid-align-center\" style=\"width: 50px;\">

        </th>

    </tr>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? $this->getContext($context, "coupons")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupons_show", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "intitule", array()), "html", null, true);
            echo "</td>
                <td><img style=\"width:60px \" align=\"center\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["coupon"], "imageCoupon", array()))), "html", null, true);
            echo "\"</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "ensegne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["coupon"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["coupon"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["coupon"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["coupon"], "dateFin", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "valeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "codePromo", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupons_show", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupons_edit", array("id" => $this->getAttribute($context["coupon"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>





</div>

    <ul>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupons_new");
        echo "\"> New Coupon</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coupons/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  144 => 50,  132 => 44,  126 => 41,  118 => 36,  114 => 35,  108 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  80 => 28,  77 => 27,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Coupons list</h1>
<div class=\"panel panel-default card-view\">
    <table class=\"jsgrid-table\">
    <tbody>
    <tr class=\"jsgrid-header-row\">
        <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 50px;\">Id</th>
        <th class=\"jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable\" style=\"width: 100px;\">Intitule</th>
        <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\">Imagecoupon</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Ensegne</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Description</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Datedebut</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Datefin</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Valeur</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Codepromo</th>
        <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 100px;\">Actions</th>
        <th class=\"jsgrid-header-cell jsgrid-control-field jsgrid-align-center\" style=\"width: 50px;\">

        </th>

    </tr>
        <tbody>
        {% for coupon in coupons %}
            <tr>
                <td><a href=\"{{ path('coupons_show', { 'id': coupon.id }) }}\">{{ coupon.id }}</a></td>
                <td>{{ coupon.intitule }}</td>
                <td><img style=\"width:60px \" align=\"center\" src=\"{{ asset('uploads/brochures/'~coupon.imageCoupon) }}\"</td>
                <td>{{ coupon.ensegne }}</td>
                <td>{{ coupon.description }}</td>
                <td>{% if coupon.dateDebut %}{{ coupon.dateDebut|date('Y-m-d') }}{% endif %}</td>
                <td>{% if coupon.dateFin %}{{ coupon.dateFin|date('Y-m-d') }}{% endif %}</td>
                <td>{{ coupon.valeur }}</td>
                <td>{{ coupon.codePromo }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('coupons_show', { 'id': coupon.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('coupons_edit', { 'id': coupon.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>





</div>

    <ul>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('coupons_new') }}\"> New Coupon</a>
        </li>
    </ul>
{% endblock %}
", "coupons/index.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app\\Resources\\views\\coupons\\index.html.twig");
    }
}
