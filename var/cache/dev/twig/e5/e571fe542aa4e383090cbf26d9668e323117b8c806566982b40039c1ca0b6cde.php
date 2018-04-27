<?php

/* @Covoiturage/Covoiturage/front/modifier_cov.html.twig */
class __TwigTemplate_3be611243b1caf41913abd374ba25c9aba3aaece3e96b1b970766348e20f998c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Covoiturage/Covoiturage/front/modifier_cov.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/modifier_cov.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/modifier_cov.html.twig"));

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
        echo "     <!-- Start Contact Form -->
     <section>
     <div class=\"container\">
         <div class=\"section-content\">
             <div class=\"row\">
                 <div class=\"container\">
                     <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Modification de covoiturage</span>
                     </h2>
                     <h4 class=\"text-theme-color-blue\">Vous êtes sur le point de modifier votre covoiturage</h4>
                     <p>En remplissant le formulaire ci-dessous, toutes les informations pécédentes seront changées.</p>
                     <p>Veuillez vérifier vos changements avant de confirmer la modification .</p>
                 </div>

             </div>
         </div>
     </div>

     ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

     <section class=\"htc__checkout bg--white \">
         <!-- Checkout Section Start-->
         <div class=\"checkout-section\">
             <div class=\"container\">
                 <div class=\"row\">
                     <div class=\"col-lg-8 col-12 \">
                         <a class=\"accordion-head\" data-toggle=\"collapse\" data-parent=\"#checkout-accordion\"
                            href=\"#checkout-method\"> ";
        // line 29
        echo twig_escape_filter($this->env, ($context["tit"] ?? $this->getContext($context, "tit")), "html", null, true);
        echo "</a>

                         <div id=\"checkout-method\" class=\"collapse show\">
                             <div class=\"checkout-method accordion-body fix\">
                                 <form action=\"#\" class=\"\">


                                     ";
        // line 44
        echo "

                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-4\">
                                             <label for=\"text-input\" class=\" form-control-label\">Date </label>
                                         </div>
                                         <div class=\"form-group\">
                                             <div class='input-group date' id='timepicker'>";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                 <span class=\"input-group-addon\">
                                                                     <span class=\"fa fa-calendar\"></span>
                                                             </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-4\">
                                             <label for=\"text-input\" class=\" form-control-label\">Heure de départ</label>
                                         </div>
                                         <div class=\"form-group\">
                                             <div class='input-group date' id='timepicker'>";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDep", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                                 <span class=\"input-group-addon\">
                                                                     <span class=\"fa fa-clock-o\"></span>
                                                             </span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class=\"row form-group\">

                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Départ </label>
                                         </div>

                                         <div class=\"col-12 col-md-9\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuDep", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                                         </div>
                                     </div>
                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Destination </label>
                                         </div>

                                         <div class=\"col-12 col-md-9\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieuDest", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "


                                         </div>
                                     </div>


                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Places  </label></div>
                                         <div class=\"col-12 col-md-9\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPlaces", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                                     </div>

                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Description  </label></div>
                                         <div class=\"col-12 col-md-9\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
                                         <br><br><br>
                                     </div>
                                     <div class=\"input-box col-md-6 col-12 mb--20\">
                                         ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "dcare__btn")));
        echo "

                                     </div>


                                 </form>


                                 ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                             </div>
                         </div>



                     </div>
                 </div>
             </div>

         </div><!-- Checkout Section End-->
     </section>

     <!-- Billing Method -->
     <!-- End Contact Form -->
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Covoiturage/Covoiturage/front/modifier_cov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 111,  169 => 103,  162 => 99,  154 => 94,  142 => 85,  130 => 76,  114 => 63,  99 => 51,  90 => 44,  80 => 29,  68 => 20,  49 => 3,  40 => 2,  11 => 1,);
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
     <!-- Start Contact Form -->
     <section>
     <div class=\"container\">
         <div class=\"section-content\">
             <div class=\"row\">
                 <div class=\"container\">
                     <h2 class=\"text-theme-color-sky line-bottom\"><span class=\"text-theme-color-red\">Modification de covoiturage</span>
                     </h2>
                     <h4 class=\"text-theme-color-blue\">Vous êtes sur le point de modifier votre covoiturage</h4>
                     <p>En remplissant le formulaire ci-dessous, toutes les informations pécédentes seront changées.</p>
                     <p>Veuillez vérifier vos changements avant de confirmer la modification .</p>
                 </div>

             </div>
         </div>
     </div>

     {{ form_start(form) }}

     <section class=\"htc__checkout bg--white \">
         <!-- Checkout Section Start-->
         <div class=\"checkout-section\">
             <div class=\"container\">
                 <div class=\"row\">
                     <div class=\"col-lg-8 col-12 \">
                         <a class=\"accordion-head\" data-toggle=\"collapse\" data-parent=\"#checkout-accordion\"
                            href=\"#checkout-method\"> {{ tit }}</a>

                         <div id=\"checkout-method\" class=\"collapse show\">
                             <div class=\"checkout-method accordion-body fix\">
                                 <form action=\"#\" class=\"\">


                                     {# <div class=\" row form-group\">
                                          <label for=\"text-input\" class=\" form-control-label\">Date Covoiturage </label>
                                       <div class='input-group date'
                                            id='datetimepicker1'>{{ form_widget(form.date,{attr: {class: 'form-control'} }) }}
                                           <span class=\"input-group-addon\">
                                                 <span class=\"fa fa-calendar\"></span>
                                           </span></div>
                                       </div>#}


                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-4\">
                                             <label for=\"text-input\" class=\" form-control-label\">Date </label>
                                         </div>
                                         <div class=\"form-group\">
                                             <div class='input-group date' id='timepicker'>{{ form_widget(form.date,{attr: {class: 'form-control'} }) }}
                                                 <span class=\"input-group-addon\">
                                                                     <span class=\"fa fa-calendar\"></span>
                                                             </span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-4\">
                                             <label for=\"text-input\" class=\" form-control-label\">Heure de départ</label>
                                         </div>
                                         <div class=\"form-group\">
                                             <div class='input-group date' id='timepicker'>{{ form_widget(form.heureDep,{attr: {class: 'form-control'} }) }}
                                                 <span class=\"input-group-addon\">
                                                                     <span class=\"fa fa-clock-o\"></span>
                                                             </span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class=\"row form-group\">

                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Départ </label>
                                         </div>

                                         <div class=\"col-12 col-md-9\">{{ form_widget(form.lieuDep,{attr: {class: 'form-control'} }) }}


                                         </div>
                                     </div>
                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Destination </label>
                                         </div>

                                         <div class=\"col-12 col-md-9\">{{ form_widget(form.lieuDest,{attr: {class: 'form-control'} }) }}


                                         </div>
                                     </div>


                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Places  </label></div>
                                         <div class=\"col-12 col-md-9\">{{ form_widget(form.nbPlaces,{attr: {class: 'form-control'} }) }}</div>
                                     </div>

                                     <div class=\"row form-group\">
                                         <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Description  </label></div>
                                         <div class=\"col-12 col-md-9\">{{ form_widget(form.description,{attr: {class: 'form-control'} }) }}</div>
                                         <br><br><br>
                                     </div>
                                     <div class=\"input-box col-md-6 col-12 mb--20\">
                                         {{ form_widget(form.Modifier,{attr: {class: 'dcare__btn'}}) }}

                                     </div>


                                 </form>


                                 {{ form_end(form) }}
                             </div>
                         </div>



                     </div>
                 </div>
             </div>

         </div><!-- Checkout Section End-->
     </section>

     <!-- Billing Method -->
     <!-- End Contact Form -->
 {% endblock %}", "@Covoiturage/Covoiturage/front/modifier_cov.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle\\Resources\\views\\Covoiturage\\front\\modifier_cov.html.twig");
    }
}
