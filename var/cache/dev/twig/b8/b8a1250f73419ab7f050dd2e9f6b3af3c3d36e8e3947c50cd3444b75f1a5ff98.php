<?php

/* @Front/register.html.twig */
class __TwigTemplate_3652b825897ed7ffe575c00427d5c0ae85f1d2589eeb10768573f2f1280020e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Front/register.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/register.html.twig"));

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
        echo "     <div class=\"accountbox__inner\" >
         <h4>continue to register</h4>
         <div class=\"accountbox__login\" >
             ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("fos_user.registration.controller:registerAction"));
        echo "
             <form action=\"#\">

                 <div class=\"accountbox-login__others text-center\">
                     <h6>or register with</h6>
                     <ul class=\"dacre__social__link d-flex justify-content-center\">
                         <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                         <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                         <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                     </ul>
                 </div>
             </form>
         </div>
         <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
     </div>
     <h3>Have an account ? Login Fast</h3>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
 {% block container %}
     <div class=\"accountbox__inner\" >
         <h4>continue to register</h4>
         <div class=\"accountbox__login\" >
             {{ render(controller('fos_user.registration.controller:registerAction')) }}
             <form action=\"#\">

                 <div class=\"accountbox-login__others text-center\">
                     <h6>or register with</h6>
                     <ul class=\"dacre__social__link d-flex justify-content-center\">
                         <li class=\"facebook\"><a target=\"_blank\" href=\"https://www.facebook.com/\"><span class=\"ti-facebook\"></span></a></li>
                         <li class=\"twitter\"><a target=\"_blank\" href=\"https://twitter.com/\"><span class=\"ti-twitter\"></span></a></li>
                         <li class=\"pinterest\"><a target=\"_blank\" href=\"#\"><span class=\"ti-google\"></span></a></li>
                     </ul>
                 </div>
             </form>
         </div>
         <span class=\"accountbox-close-button\"><i class=\"zmdi zmdi-close\"></i></span>
     </div>
     <h3>Have an account ? Login Fast</h3>
 {% endblock %}", "@Front/register.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\FrontBundle\\Resources\\views\\register.html.twig");
    }
}
