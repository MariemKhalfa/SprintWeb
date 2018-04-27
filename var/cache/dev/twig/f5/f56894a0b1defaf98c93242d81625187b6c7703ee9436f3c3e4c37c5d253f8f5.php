<?php

/* publicite/show.html.twig */
class __TwigTemplate_9ac441caa75c6a76bed18861215d51ff08a4489538d7693ac3089ba8a8409a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "publicite/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/show.html.twig"));

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

    <div class=\"col-lg-6 col-sm-6 col-xs-12\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">La publicite : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "intitule", array()), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body task-panel\">
                    <div class=\"list-group mb-0\">
                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge badge-info\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "id", array()), "html", null, true);
        echo "</span>
                            <i class=\" icon-target\"></i> Id de la publicite
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "intitule", array()), "html", null, true);
        echo "</span>
                            <i class=\"ti-blackboard\"></i> Nom de la publicite
                        </a>

                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "nomEnsegne", array()), "html", null, true);
        echo "</span>
                            <i class=\"icon-pencil\"></i> Nom di magasin
                        </a>

                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\"> <img style=\"width:40px \" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "imagePub", array()))), "html", null, true);
        echo "\"> </span>
                            <i class=\"icon-picture\"></i> Image du magasin
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div






    <ul>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_edit", array("id" => $this->getAttribute(($context["publicite"] ?? $this->getContext($context, "publicite")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publicite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 58,  124 => 56,  118 => 53,  112 => 50,  91 => 32,  83 => 27,  75 => 22,  68 => 18,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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


    <div class=\"col-lg-6 col-sm-6 col-xs-12\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">La publicite : {{ publicite.intitule }}</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body task-panel\">
                    <div class=\"list-group mb-0\">
                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge badge-info\">{{ publicite.id }}</span>
                            <i class=\" icon-target\"></i> Id de la publicite
                        </a>
                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\">{{ publicite.intitule }}</span>
                            <i class=\"ti-blackboard\"></i> Nom de la publicite
                        </a>

                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\">{{ publicite.nomEnsegne }}</span>
                            <i class=\"icon-pencil\"></i> Nom di magasin
                        </a>

                        <a href=\"#\" class=\"list-group-item\">
                            <span class=\"badge  badge-success\"> <img style=\"width:40px \" src=\"{{ asset('uploads/brochures/'~publicite.imagePub) }}\"> </span>
                            <i class=\"icon-picture\"></i> Image du magasin
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div






    <ul>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_edit', { 'id': publicite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "publicite/show.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app\\Resources\\views\\publicite\\show.html.twig");
    }
}
