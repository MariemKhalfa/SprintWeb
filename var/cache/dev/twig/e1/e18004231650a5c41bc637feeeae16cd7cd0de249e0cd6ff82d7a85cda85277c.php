<?php

/* publicite/index.html.twig */
class __TwigTemplate_1fedb47907b4dffba56c02c69db1eac894908586fd93aff4ecabfae273d6ea8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "publicite/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/index.html.twig"));

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
        echo "    <h1>Publicites list</h1>

<div class=\"panel panel-default card-view\">
    <table class=\"jsgrid-table\">
        <tbody>
        <tr class=\"jsgrid-header-row\">

            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\"></th>
            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\">Id</th>
            <th class=\"jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable\" style=\"width: 250px;\">Intitule</th>
            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 250px;\">Image Publicité</th>
            <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 250px;\">Ensegne</th>
            <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 200px;\">Actions</th>


            <th class=\"jsgrid-header-cell jsgrid-control-field jsgrid-align-center\" style=\"width: 50px;\">

            </th>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publicites"] ?? $this->getContext($context, "publicites")));
        foreach ($context['_seq'] as $context["_key"] => $context["publicite"]) {
            // line 24
            echo "            <tr>
                <td></td>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "intitule", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promotions_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\"><img style=\"width:60px \" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["publicite"], "ImagePub", array()))), "html", null, true);
            echo "\"></a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["publicite"], "nomEnsegne", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_show", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_edit", array("id" => $this->getAttribute($context["publicite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>


</div>
    <ul>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_new");
        echo "\">Create a new publicite</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publicite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  119 => 42,  107 => 36,  101 => 33,  94 => 29,  88 => 28,  84 => 27,  78 => 26,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Publicites list</h1>

<div class=\"panel panel-default card-view\">
    <table class=\"jsgrid-table\">
        <tbody>
        <tr class=\"jsgrid-header-row\">

            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\"></th>
            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 100px;\">Id</th>
            <th class=\"jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable\" style=\"width: 250px;\">Intitule</th>
            <th class=\"jsgrid-header-cell jsgrid-header-sortable\" style=\"width: 250px;\">Image Publicité</th>
            <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 250px;\">Ensegne</th>
            <th class=\"jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable\" style=\"width: 200px;\">Actions</th>


            <th class=\"jsgrid-header-cell jsgrid-control-field jsgrid-align-center\" style=\"width: 50px;\">

            </th>
        <tbody>
        {% for publicite in publicites %}
            <tr>
                <td></td>
                <td><a href=\"{{ path('publicite_show', { 'id': publicite.id }) }}\">{{ publicite.id }}</a></td>
                <td>{{ publicite.intitule }}</td>
                <td><a href=\"{{ path('promotions_show', { 'id': publicite.id }) }}\"><img style=\"width:60px \" src=\"{{ asset('uploads/brochures/'~publicite.ImagePub) }}\"></a></td>
                <td>{{ publicite.nomEnsegne }}</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_show', { 'id': publicite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_edit', { 'id': publicite.id }) }}\">edit</a>
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
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_new') }}\">Create a new publicite</a>
        </li>
    </ul>
{% endblock %}
", "publicite/index.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app\\Resources\\views\\publicite\\index.html.twig");
    }
}
