<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_25bbd8da210b6683f47dc92056fd2a53ed99bec3c0dbdcb923133ce6c0984983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
<div class=\"form-group\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CIN", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNaissance", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rue", array()), 'row');
        echo "
</div>
<div class=\"single-input\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'row');
        echo "
</div>
<div class=\"single-input\">
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", array()), 'row');
        echo "
</div>
<div class=\"single-input\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
</div>
<div class=\"single-input\">
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "babysitter", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "covoiturage", array()), 'row');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreEnfants", array()), 'row');
        echo "
</div>
<div  class=\"single-input text-center\">
    <input type=\"submit\" class=\"sign__btn\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>

";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 56,  129 => 53,  123 => 50,  117 => 47,  111 => 44,  105 => 41,  99 => 38,  93 => 35,  87 => 32,  81 => 29,  75 => 26,  69 => 23,  63 => 20,  57 => 17,  51 => 14,  45 => 11,  39 => 8,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
<div class=\"form-group\">
    {{ form_row(form.CIN) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.nom) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.prenom) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.sexe) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.dateNaissance) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.rue) }}
</div>
<div class=\"single-input\">
    {{ form_row(form.ville) }}
</div>
<div class=\"single-input\">
    {{ form_row(form.codePostal) }}
</div>
<div class=\"single-input\">
    {{ form_row(form.telephone) }}
</div>
<div class=\"single-input\">
    {{ form_row(form.username) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.email) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.plainPassword) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.roles) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.babysitter) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.covoiturage) }}
</div>
<div class=\"form-group\">
    {{ form_row(form.nbreEnfants) }}
</div>
<div  class=\"single-input text-center\">
    <input type=\"submit\" class=\"sign__btn\" value=\"{{ 'Sign up'|trans }}\" />
</div>

{{ form_end(form) }}

", "FOSUserBundle:Registration:register_content.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
