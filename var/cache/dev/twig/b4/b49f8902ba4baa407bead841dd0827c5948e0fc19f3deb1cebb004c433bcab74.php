<?php

/* EvenementBundle:Default:index.html.twig */
class __TwigTemplate_1f4bd875512b5c47e03e06bd6e6b78c21b6ff08dc349d26a2f58ab0237d9550d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EvenementBundle:Default:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

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
        echo "     <div class=\"ht__bradcaump__area\">
         <div class=\"ht__bradcaump__container\">
             <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/wejdene/cover.jpg"), "html", null, true);
        echo "\" alt=\"bradcaump images\">
             <div class=\"container\">
                 <div class=\"row\">
                     <div class=\"col-lg-12\">
                         <div class=\"bradcaump__inner text-center\">
                             <h2 class=\"bradcaump-title\">Nos Evenements</h2>
                             <nav class=\"bradcaump-inner\">
                                 <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                 <span class=\"brd-separetor\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/icons/brad.png"), "html", null, true);
        echo "\" alt=\"separator images\"></span>
                                 <span class=\"breadcrumb-item active\">Nos Evenements</span>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>









     <div class=\"junior__service bg-image--1 service--2 section-padding--bottom section--padding--xlg--top\">



         <!-- Start Our Service Area -->


         <div class=\"container\">

             <div class=\"row align-items-center copyright__wrapper justify-content-center\">





                 <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60\" >
                     <div class=\"service border__color border__color--6 bg__cat--5\">
                         <div class=\"service__icon\" align=\"right\">
                             <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/wejdene/Parents.png"), "html", null, true);
        echo "\" alt=\"icon images\">
                         </div>
                         <div class=\"service__details\">
                             <h6><a href=\"single-service.html\">parents</a></h6>
                             <p>Dans cette rubrique vous allez trouver tous les evenements qui interessents les parents</p>
                             <div class=\"service__btn\">
                                 <a class=\"dcare__btn btn__f1f1f1 hover__444 min__height-btn\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_parent");
        echo "\">Consulter</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- End Single Service -->
                 <!-- Start Single Service -->
                 <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60\" align=\"\">
                     <div class=\"service border__color border__color--7 bg__cat--6\">
                         <div class=\"service__icon\" align=\"left\">
                             <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/wejdene/Kids-Zone-Logo_tpTHVSiHTT93QIW66UFK-1000x421.png"), "html", null, true);
        echo "\" alt=\"icon images\">
                         </div>
                         <div class=\"service__details\">
                             <h6><a href=\"single-service.html\">Enfants</a></h6>
                             <p>Dans cette rubrique vous allez trouver tous les evenements qui interessents les enfants</p>
                             <div class=\"service__btn\">
                                 <a class=\"dcare__btn btn__f1f1f1 hover__444 min__height-btn\" href=\"single-service.html\">Consulter</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- End Our Service Area -->

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  112 => 55,  103 => 49,  64 => 13,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
     <div class=\"ht__bradcaump__area\">
         <div class=\"ht__bradcaump__container\">
             <img src=\"{{ asset('images/wejdene/cover.jpg') }}\" alt=\"bradcaump images\">
             <div class=\"container\">
                 <div class=\"row\">
                     <div class=\"col-lg-12\">
                         <div class=\"bradcaump__inner text-center\">
                             <h2 class=\"bradcaump-title\">Nos Evenements</h2>
                             <nav class=\"bradcaump-inner\">
                                 <a class=\"breadcrumb-item\" href=\"index-2.html\">Home</a>
                                 <span class=\"brd-separetor\"><img src=\"{{ asset('images/icons/brad.png') }}\" alt=\"separator images\"></span>
                                 <span class=\"breadcrumb-item active\">Nos Evenements</span>
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>









     <div class=\"junior__service bg-image--1 service--2 section-padding--bottom section--padding--xlg--top\">



         <!-- Start Our Service Area -->


         <div class=\"container\">

             <div class=\"row align-items-center copyright__wrapper justify-content-center\">





                 <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60\" >
                     <div class=\"service border__color border__color--6 bg__cat--5\">
                         <div class=\"service__icon\" align=\"right\">
                             <img src=\"{{ asset('images/wejdene/Parents.png') }}\" alt=\"icon images\">
                         </div>
                         <div class=\"service__details\">
                             <h6><a href=\"single-service.html\">parents</a></h6>
                             <p>Dans cette rubrique vous allez trouver tous les evenements qui interessents les parents</p>
                             <div class=\"service__btn\">
                                 <a class=\"dcare__btn btn__f1f1f1 hover__444 min__height-btn\" href=\"{{ path('evenement_parent') }}\">Consulter</a>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- End Single Service -->
                 <!-- Start Single Service -->
                 <div class=\"col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60\" align=\"\">
                     <div class=\"service border__color border__color--7 bg__cat--6\">
                         <div class=\"service__icon\" align=\"left\">
                             <img src=\"{{ asset('images/wejdene/Kids-Zone-Logo_tpTHVSiHTT93QIW66UFK-1000x421.png') }}\" alt=\"icon images\">
                         </div>
                         <div class=\"service__details\">
                             <h6><a href=\"single-service.html\">Enfants</a></h6>
                             <p>Dans cette rubrique vous allez trouver tous les evenements qui interessents les enfants</p>
                             <div class=\"service__btn\">
                                 <a class=\"dcare__btn btn__f1f1f1 hover__444 min__height-btn\" href=\"single-service.html\">Consulter</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- End Our Service Area -->

 {% endblock %}

", "EvenementBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\EvenementBundle/Resources/views/Default/index.html.twig");
    }
}
