<?php

/* :default:backLogin_content.html.twig */
class __TwigTemplate_90cb874b5ec7f51692184416fec41e4418609d6c2a0a90dfefb688f30dfe5733 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:backLogin_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:backLogin_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div id=\"error_login\"></div>
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login_check");
        echo "\" id=\"login_form_back\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <div class=\"form-group\">
    <label class=\"control-label mb-10\" for=\"exampleInputEmail_2\">Username</label>
    <input type=\"text\" class=\"form-control\"  id=\"exampleInputEmail_2\" placeholder=\"Username   \" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
    </div>
    </div>

    <div class=\"form-group\">
        <label class=\"control-label mb-10\" for=\"exampleInputpwd_2\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputpwd_2\" placeholder=\"Enter pwd\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
    </div>
    <div class=\"form-group\">
        <div class=\"checkbox checkbox-success pr-10 pull-left\">
    <input type=\"checkbox\" id=\"checkbox_2\" name=\"_remember_me\" value=\"on\" />
    <label for=\"checkbox_2\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
    </div>
    <div class=\"form-group\">
    <input type=\"submit\" class=\"btn btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":default:backLogin_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  69 => 24,  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div id=\"error_login\"></div>
<form action=\"{{ path(\"admin_login_check\") }}\" id=\"login_form_back\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div class=\"form-group\">
    <label class=\"control-label mb-10\" for=\"exampleInputEmail_2\">Username</label>
    <input type=\"text\" class=\"form-control\"  id=\"exampleInputEmail_2\" placeholder=\"Username   \" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
    </div>
    </div>

    <div class=\"form-group\">
        <label class=\"control-label mb-10\" for=\"exampleInputpwd_2\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputpwd_2\" placeholder=\"Enter pwd\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
    </div>
    <div class=\"form-group\">
        <div class=\"checkbox checkbox-success pr-10 pull-left\">
    <input type=\"checkbox\" id=\"checkbox_2\" name=\"_remember_me\" value=\"on\" />
    <label for=\"checkbox_2\">{{ 'Remember me'|trans }}</label>
        </div>
    </div>
    <div class=\"form-group\">
    <input type=\"submit\" class=\"btn btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Sign in'|trans }}\" />
    </div>
</form>
", ":default:backLogin_content.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app/Resources\\views/default/backLogin_content.html.twig");
    }
}
