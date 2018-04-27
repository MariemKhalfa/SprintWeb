<?php

/* MedecinBundle:Front:rechercherMedecin.html.twig */
class __TwigTemplate_0044f8cbd8ea20a88cf9e0671260a757b9cc08257ec4302262bda92bfad4a9c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MedecinBundle:Front:rechercherMedecin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Front:rechercherMedecin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Front:rechercherMedecin.html.twig"));

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
                         <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Rechercher Medecin </span></h2>
                         <p>Trouver un Médecin pour vos enfants </p>
                     </div>
                 </div>
             </div>
             <div class=\"row jn__welcome__wrapper align-items-center\">
                 <div class=\"col-md-12 col-lg-6 col-sm-12\">
                     <div class=\"welcome__juniro__inner\">
                         <h3>Médecins<span class=\"theme-color\">All</span><span>For</span>Kids</h3>
                         <p>All For Kids est l'unique plateforme en Tunisie destinée aux parents qui veulent
                             proposer des médecins pour des enfants </p>
                         <div class=\"single__widget search\">
                             <h4>Trouver</h4>
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                         </div>
                         <div class=\"wel__btn\">
                             <a class=\"dcare__btn\" href=\"about-us.html\"><span class=\"fa fa-search\"></span></a>
                         </div>
                         ";
        // line 65
        echo "                     </div>
                 </div>
                 <div class=\"col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40\">
                     <div class=\"jnr__Welcome__thumb\">
                         <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medecin.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fullwidth\">
                         <a class=\"play__btn\" href=\"https://www.youtube.com/watch?v=YXynlliFyC8\"><i class=\"fa fa-play\"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <div id=\"div\">

     </div>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(\"#rechercheV_adresse\").keyup(
        function(){
            var adresse=\$(\"#rechercheV_adresse\").val();

            var Data='adresse=' + adresse;
            console.log(Data);
            \$.ajax({
                type:\"POST\",
                url: \"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_rechercher");
        echo "\",
                data: Data,
                success:function(data){
                    console.log(data);

                    \$(\"#div\").html(\"<ul id='res'>\" +
                        \"</ul>\");

                    \$.each(data,function (k,e1) {
                        console.log(e1);
                        \$(\"#div\").html(\"<table id='res' class=\\\"col-sm-12\\\"><table id=\\\"bootstrap-data-table\\\" class=\\\"table table-striped table-bordered dataTable no-footer\\\" role=\\\"grid\\\" aria-describedby=\\\"bootstrap-data-table_info\\\">\" +
                            \"<td>Nom</td><td>Email</td><td>Telephone</td><td>Specialite </td><td>Details</td></table>\");
                        \$.each(data,function (k,e1) {


                            \$(\"#bootstrap-data-table\").append(
                                \"<tr>\"+
                                \"<td>\"+e1.nom+\"</td>\"+
                                \"<td>\"+e1.email+\"</td>\"+
                                \"<td>\"+e1.telephone+\"</td>\"+
                                \"<td>\"+e1.specialite+\"</td>\"+
                                \"<td>\"+
                                \"<a href='";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_details", array("id" => "+e1.id+"));
        echo "'>Details\"+
                                \"</a>\"+
                                \"</td>\"+
                                \"</tr>\");


                        });

                    });
                }
            });

        });



</script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MedecinBundle:Front:rechercherMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 111,  110 => 89,  97 => 79,  84 => 69,  78 => 65,  70 => 22,  49 => 3,  40 => 2,  11 => 1,);
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
                         <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Rechercher Medecin </span></h2>
                         <p>Trouver un Médecin pour vos enfants </p>
                     </div>
                 </div>
             </div>
             <div class=\"row jn__welcome__wrapper align-items-center\">
                 <div class=\"col-md-12 col-lg-6 col-sm-12\">
                     <div class=\"welcome__juniro__inner\">
                         <h3>Médecins<span class=\"theme-color\">All</span><span>For</span>Kids</h3>
                         <p>All For Kids est l'unique plateforme en Tunisie destinée aux parents qui veulent
                             proposer des médecins pour des enfants </p>
                         <div class=\"single__widget search\">
                             <h4>Trouver</h4>
                            {{ form(form) }}
                         </div>
                         <div class=\"wel__btn\">
                             <a class=\"dcare__btn\" href=\"about-us.html\"><span class=\"fa fa-search\"></span></a>
                         </div>
                         {# <section>
                              <div class=\"container\">
                                  <div class=\"row\">
                                      {% for c in covs %}
                                          <div class=\"col-sm-6 col-md-4\">
                                              <div class=\"item\">
                                                  <div class=\"campaign bg-white maxwidth500 mb-30\">
                                                      <div class=\"thumb\">
                                                          <img src=\"{{ asset('images/mariem/6.png') }}\" alt=\"\" class=\"img-fullwidth\">
                                                          <div class=\"campaign-overlay\"></div>
                                                      </div>

                                                      <div class=\"course-details clearfix p-20 pt-15\">
                                                          <h4 class=\"price-tag\">Nouveau</h4>
                                                          <h3 class=\"mt-0\"><a class=\"text-theme-color-green\" href=\"#\">{{ c.titre }}</a></h3>

                                                          <ul class=\"review_text list-inline\">

                                                          </ul>
                                                          <p>C{{ c.description }} ... <a
                                                                      class=\"text-theme-colored ml-5\" href=\"{{ path('reserver_cov',{\"id\":c.id}) }}\"> →</a></p>
                                                          <div class=\"course-details-bottom mt-15\">

                                                              <ul class=\"list-inline\">
                                                                  <li>Capacité<span>{{  c.nbPlaces}}</span></li>
                                                                  <li>Horaires<span>{{ c.heureDep|date(\"h:i\")}}</span></li>
                                                                  <li>Date<span>{{ c.date |date(\"d/m/y\")}}</span></li>
                                                              </ul>
                                                          </div>
                                                      </div>

                                                  </div>
                                              </div>
                                          </div>
                                      {% endfor %}
                                  </div>
                              </div>
                          </section>#}
                     </div>
                 </div>
                 <div class=\"col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40\">
                     <div class=\"jnr__Welcome__thumb\">
                         <img src=\"{{ asset('images/medecin.png') }}\" alt=\"\" class=\"img-fullwidth\">
                         <a class=\"play__btn\" href=\"https://www.youtube.com/watch?v=YXynlliFyC8\"><i class=\"fa fa-play\"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <div id=\"div\">

     </div>
    <script src=\"{{ asset('jquery-3.2.1.js') }}\"></script>
<script>
    \$(\"#rechercheV_adresse\").keyup(
        function(){
            var adresse=\$(\"#rechercheV_adresse\").val();

            var Data='adresse=' + adresse;
            console.log(Data);
            \$.ajax({
                type:\"POST\",
                url: \"{{ path('medecin_rechercher') }}\",
                data: Data,
                success:function(data){
                    console.log(data);

                    \$(\"#div\").html(\"<ul id='res'>\" +
                        \"</ul>\");

                    \$.each(data,function (k,e1) {
                        console.log(e1);
                        \$(\"#div\").html(\"<table id='res' class=\\\"col-sm-12\\\"><table id=\\\"bootstrap-data-table\\\" class=\\\"table table-striped table-bordered dataTable no-footer\\\" role=\\\"grid\\\" aria-describedby=\\\"bootstrap-data-table_info\\\">\" +
                            \"<td>Nom</td><td>Email</td><td>Telephone</td><td>Specialite </td><td>Details</td></table>\");
                        \$.each(data,function (k,e1) {


                            \$(\"#bootstrap-data-table\").append(
                                \"<tr>\"+
                                \"<td>\"+e1.nom+\"</td>\"+
                                \"<td>\"+e1.email+\"</td>\"+
                                \"<td>\"+e1.telephone+\"</td>\"+
                                \"<td>\"+e1.specialite+\"</td>\"+
                                \"<td>\"+
                                \"<a href='{{ path('garderie_details',{'id':\"+e1.id+\"}) }}'>Details\"+
                                \"</a>\"+
                                \"</td>\"+
                                \"</tr>\");


                        });

                    });
                }
            });

        });



</script>
 {% endblock %}
", "MedecinBundle:Front:rechercherMedecin.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\MedecinBundle/Resources/views/Front/rechercherMedecin.html.twig");
    }
}
