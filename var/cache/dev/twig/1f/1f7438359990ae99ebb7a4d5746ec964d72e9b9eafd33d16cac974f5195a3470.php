<?php

/* GarderieBundle:Front:MeilleursGarderies.html.twig */
class __TwigTemplate_785f72defaf02564a8aeeda4ab62d279c59ad472b979d364b78700b61734c96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GarderieBundle:Front:MeilleursGarderies.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:MeilleursGarderies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:MeilleursGarderies.html.twig"));

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
     <section class=\"junior__welcome__area bg-image--26\">
     <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-lg-12\">
             <div class=\"section__title text-center\">
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Meilleurs Garderies </span></h2>

             </div>
         </div>
     </div>
<!-- End Bradcaump area -->


            <!-- End Single Blog -->


            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["First"] ?? $this->getContext($context, "First")), "image", array()))), "html", null, true);
        echo "\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°1:";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["First"] ?? $this->getContext($context, "First")), "nom", array()), "html", null, true);
        echo "</a></h2>
                            <div class=\"bl__meta\">
                                <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["First"] ?? $this->getContext($context, "First")), "descriptif", array()), "html", null, true);
        echo "</p>
                            </div>
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gold_medal.png"), "html", null, true);
        echo "\" width=\"200px\">

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["Second"] ?? $this->getContext($context, "Second")), "image", array()))), "html", null, true);
        echo "\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°2:";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Second"] ?? $this->getContext($context, "Second")), "nom", array()), "html", null, true);
        echo "</a></h2>
                            <div class=\"bl__meta\">
                                <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Second"] ?? $this->getContext($context, "Second")), "descriptif", array()), "html", null, true);
        echo "</p>
                            </div>
                            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/silver.png"), "html", null, true);
        echo "\" width=\"200px\" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["Third"] ?? $this->getContext($context, "Third")), "image", array()))), "html", null, true);
        echo "\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°3:";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Third"] ?? $this->getContext($context, "Third")), "nom", array()), "html", null, true);
        echo "</a></h2>
                            <div class=\"bl__meta\">
                                <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Third"] ?? $this->getContext($context, "Third")), "descriptif", array()), "html", null, true);
        echo "</p>
                            </div>
                            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bronze_medal.png"), "html", null, true);
        echo "\" width=\"200px\" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->


    </div>


</section>
<!-- End Blog Area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Front:MeilleursGarderies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 75,  151 => 73,  146 => 71,  138 => 66,  124 => 55,  119 => 53,  114 => 51,  106 => 46,  91 => 34,  86 => 32,  81 => 30,  73 => 25,  49 => 3,  40 => 2,  11 => 1,);
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

     <section class=\"junior__welcome__area bg-image--26\">
     <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-lg-12\">
             <div class=\"section__title text-center\">
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Meilleurs Garderies </span></h2>

             </div>
         </div>
     </div>
<!-- End Bradcaump area -->


            <!-- End Single Blog -->


            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"{{ asset('uploads/images/'~ First.image ) }}\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°1:{{ First.nom }}</a></h2>
                            <div class=\"bl__meta\">
                                <p>{{ First.descriptif }}</p>
                            </div>
                            <img src=\"{{ asset('images/gold_medal.png') }}\" width=\"200px\">

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"{{ asset('uploads/images/'~ Second.image ) }}\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°2:{{ Second.nom }}</a></h2>
                            <div class=\"bl__meta\">
                                <p>{{ Second.descriptif }}</p>
                            </div>
                            <img src=\"{{ asset('images/silver.png') }}\" width=\"200px\" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
            <!-- Start Single Blog -->
            <div class=\"col-lg-4 col-md-6 col-sm-12\">
                <div class=\"blog__2\">
                    <div class=\"blog__thumb\">
                        <a href=\"blog-details.html\">
                            <img src=\"{{ asset('uploads/images/'~ Third.image ) }}\" alt=\"blog images\" >
                        </a>
                    </div>
                    <div class=\"blog__inner\">
                        <div class=\"blog__hover__inner\">
                            <h2><a href=\"blog-details.html\">Garderie n°3:{{ Third.nom }}</a></h2>
                            <div class=\"bl__meta\">
                                <p>{{ Third.descriptif }}</p>
                            </div>
                            <img src=\"{{ asset('images/bronze_medal.png') }}\" width=\"200px\" >
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->


    </div>


</section>
<!-- End Blog Area -->
{% endblock %}", "GarderieBundle:Front:MeilleursGarderies.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Front/MeilleursGarderies.html.twig");
    }
}
