<?php

/* @Covoiturage/Covoiturage/front/ajouter_cov.html.twig */
class __TwigTemplate_677893a9a98cdb8a8ff8ee187f49ede08a982f8de7defd79d92b22fbe1499af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Covoiturage/Covoiturage/front/ajouter_cov.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/ajouter_cov.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/ajouter_cov.html.twig"));

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
     <section class=\"contact__box bg-image--27\">

         <div class=\"container\">

             <div class=\"section-content\">
                 <div class=\"row\">
                     <div class=\"container\">
                         <h2 class=\"text-theme-color-sky line-bottom\">Formulaire d'ajout d'un <span
                                     class=\"text-theme-color-red\">covoiturage</span></h2>
                         </h2>
                         <h4 class=\"text-theme-color-blue\">Vous êtes sur le point de proposer un covoiturage</h4>
                         <p>En remplissant le formulaire ci-dessous, vous vous engagez à offrir un covoiturage à tout
                             enfant dont le parent a effectué une reservation .</p>
                         <p>Veuillez remplir tous les champs .</p>
                     </div>

                 </div>
             </div>

             <form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_cov");
        echo "\" method=\"post\">
                 <div class=\"container\">
                     <div class=\"row mt--80\">
                         <div class=\"col-lg-12\">
                             <div class=\"contact-form-wrap\">
                                 <form id=\"contact-form\" action=\"https://devitems.com/preview/junior/mail.php\"
                                       method=\"post\">
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                         </div>
                                         <input type=\"date\" id=\"date\" name=\"date\" placeholder=\"date du covoiturage\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Heure départ</label>
                                         </div>
                                         <input type=\"time\" id=\"heureDep\" name=\"heureDep\" placeholder=\"heure début\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Lieu de départ</label>
                                         </div>
                                         <input type=\"text\" id=\"lieuDep\" name=\"lieuDep\" placeholder=\"adresse de départ\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Lieu de destination</label>
                                         </div>
                                         <input type=\"text\" id=\"lieuDest\" name=\"lieuDest\" placeholder=\"adresse de destination\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Nombre d'enfants</label>
                                         </div>
                                         <input type=\"number\" id=\"nbr\" name=\"nbr\"
                                                placeholder=\"nombre de places proposés\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Description</label>
                                         </div>
                                         <textarea name=\"description\" id=\"description\" placeholder=\"description de l'annonce de babysitting..\"></textarea>
                                     </div>
                                     <div class=\"contact-btn\">
                                         <button type=\"submit\" class=\"dcare__btn\">Ajouter</button>
                                     </div>
                                 </form>
                             </div>

                         </div>
                     </div>
                 </div>
                 ";
        // line 77
        echo "             </form>
         </div>
     </section>
     <!-- End Contact Form -->
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Covoiturage/Covoiturage/front/ajouter_cov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 77,  71 => 23,  49 => 3,  40 => 2,  11 => 1,);
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

     <section class=\"contact__box bg-image--27\">

         <div class=\"container\">

             <div class=\"section-content\">
                 <div class=\"row\">
                     <div class=\"container\">
                         <h2 class=\"text-theme-color-sky line-bottom\">Formulaire d'ajout d'un <span
                                     class=\"text-theme-color-red\">covoiturage</span></h2>
                         </h2>
                         <h4 class=\"text-theme-color-blue\">Vous êtes sur le point de proposer un covoiturage</h4>
                         <p>En remplissant le formulaire ci-dessous, vous vous engagez à offrir un covoiturage à tout
                             enfant dont le parent a effectué une reservation .</p>
                         <p>Veuillez remplir tous les champs .</p>
                     </div>

                 </div>
             </div>

             <form action=\"{{ path('ajouter_cov') }}\" method=\"post\">
                 <div class=\"container\">
                     <div class=\"row mt--80\">
                         <div class=\"col-lg-12\">
                             <div class=\"contact-form-wrap\">
                                 <form id=\"contact-form\" action=\"https://devitems.com/preview/junior/mail.php\"
                                       method=\"post\">
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                         </div>
                                         <input type=\"date\" id=\"date\" name=\"date\" placeholder=\"date du covoiturage\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Heure départ</label>
                                         </div>
                                         <input type=\"time\" id=\"heureDep\" name=\"heureDep\" placeholder=\"heure début\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Lieu de départ</label>
                                         </div>
                                         <input type=\"text\" id=\"lieuDep\" name=\"lieuDep\" placeholder=\"adresse de départ\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Lieu de destination</label>
                                         </div>
                                         <input type=\"text\" id=\"lieuDest\" name=\"lieuDest\" placeholder=\"adresse de destination\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Nombre d'enfants</label>
                                         </div>
                                         <input type=\"number\" id=\"nbr\" name=\"nbr\"
                                                placeholder=\"nombre de places proposés\">
                                     </div>
                                     <div class=\"single-contact-form name\">
                                         <div class=\"col col-md-2\">
                                             <label for=\"text-input\" class=\" form-control-label\">Description</label>
                                         </div>
                                         <textarea name=\"description\" id=\"description\" placeholder=\"description de l'annonce de babysitting..\"></textarea>
                                     </div>
                                     <div class=\"contact-btn\">
                                         <button type=\"submit\" class=\"dcare__btn\">Ajouter</button>
                                     </div>
                                 </form>
                             </div>

                         </div>
                     </div>
                 </div>
                 {#  {{ form_end(form) }}#}
             </form>
         </div>
     </section>
     <!-- End Contact Form -->
 {% endblock %}




", "@Covoiturage/Covoiturage/front/ajouter_cov.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle\\Resources\\views\\Covoiturage\\front\\ajouter_cov.html.twig");
    }
}
