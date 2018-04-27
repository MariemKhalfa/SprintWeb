<?php

/* @Medecin/Front/DetailsMedecins.html.twig */
class __TwigTemplate_be9d529987e6e03ff2428494d28d81cdd8d63845d5c372398f2c3228166d9d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Medecin/Front/DetailsMedecins.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Medecin/Front/DetailsMedecins.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Medecin/Front/DetailsMedecins.html.twig"));

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
                     <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Details Médecin </span></h2>

                 </div>
             </div>
         </div>
         <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
         <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
         <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>

         <div class=\"row\">
             <div class=\"col-lg-9\">
                 <!-- Start Blogs -->
                 <div class=\"row\">
                        <!-- Start Single BLog -->
                        <div class=\"col-12\">
                            <article class=\"blog__single sticky__blog\">
                                <div class=\"blog__thumb\">
                                    <a href=\"blog-details.html\">

                                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "image", array()))), "html", null, true);
        echo "\" alt=\"blog images\" >
                                    </a>
                                </div>


                                <div class=\"blog__content\">
                                    <h2 ><a href=\"blog-details.html\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "nom", array()), "html", null, true);
        echo "</a></h2>
                                    <ul class=\"bl__post\">
                                        <li>Email: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "email", array()), "html", null, true);
        echo "</li>
                                        <br>
                                        <li>Telephone: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "telephone", array()), "html", null, true);
        echo "</li>
                                        <li>Specialite: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "specialite", array()), "html", null, true);
        echo " </li>

                                    </ul><p>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "adresse", array()), "html", null, true);
        echo "</p>

                                </div>
                            </article>
                        </div>
                        <!-- End Single BLog -->



                    </div>
                    <!-- End Blogs -->
                </div>
                <!-- Start Sidebar -->
                <div class=\"col-lg-3\">
                    <div class=\"sidebar__widgets sidebar--right\">
                        <input type=\"hidden\" id=\"longitude\" value=";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "longitude", array()), "html", null, true);
        echo ">
                        <input type=\"hidden\" id=\"latitude\" value=";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "latitude", array()), "html", null, true);
        echo ">
                        <input type=\"hidden\" id=\"ville\" value=";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "adresse", array()), "html", null, true);
        echo ">
                        <!-- Single Widget -->
                        <div class=\"single__widget search\">
                            <h4>Search</h4>
                            <form method=\"post\">
                           ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                        <!-- End Widget -->




                        <!-- Single Widget -->
                        <div class=\"single__widget recent__comment\">
                            <div id=\"map\" style=\"width:300px;height: 400px;\"></div>
                        </div>
                        <!-- End Widget -->
                        <!-- Single Widget -->
                        <div class=\"single__widget recent__post\" id=\"div\">

                        </div>
                        <!-- End Widget -->

                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Blog Grid Area -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBvq8htYVhOZs03ZuJEm6qiGPzfM_7O5x4\" type=\"text/javascript\"
    ></script>
    <script>



        function initialize()
        {   var k=parseFloat(\$(\"#latitude\").val());
            var j=parseFloat(\$(\"#longitude\").val());

            var w=\$(\"#ville\").val();

            var mapoptions={
                zoom:8,
                center:{lat:k,lng:j}
            }
            var map=new google.maps.Map(document.getElementById('map'),mapoptions);

            var myLating=new google.maps.LatLng(k,j);
            var mapoptions={
                Zoom:4,
                center:myLating

            };
            var map=new google.maps.Map(document.getElementById('map'),mapoptions);
            var marker=new google.maps.Marker({
                position:{lat:k,lng:j},
                map:map,

            });
            var infowindow=new google.maps.InfoWindow({
                content:w
            });
            marker.addListener('click',function (){
                infowindow.open(map,marker);
            });


        }
        google.maps.event.addDomListener(window,'load',initialize());
    </script>
     </section>
";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "
    <script src=\"";
        // line 134
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
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_details", array("id" => $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "id", array()))), "html", null, true);
        echo "\",
                    data: Data,
                    success:function(data){
                        console.log(data);

                        \$(\"#div\").html(\"<ul id='res'>\" +
                            \"</ul>\");

                        \$.each(data,function (k,e1) {
                            console.log(e1);

                            \$(\"#res\").append(
                                \"<li>\"+
                          +
                               \" <div class='post__content'>\"+
                                \"<h6>\"+
                               \" <a href='";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_meilleur");
        echo "'>\"+e1.nom+\"</a>\"+
                                \"</h6>\"+

                            \"</div>\"+
                            \"</li>\"
                        );

                        });
                    }
                });

            });


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Medecin/Front/DetailsMedecins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 160,  255 => 144,  242 => 134,  239 => 133,  230 => 132,  219 => 175,  217 => 132,  145 => 63,  137 => 58,  133 => 57,  129 => 56,  111 => 41,  106 => 39,  102 => 38,  97 => 36,  92 => 34,  83 => 28,  68 => 16,  63 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
                     <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Details Médecin </span></h2>

                 </div>
             </div>
         </div>
         <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
         <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
         <script src=\"{{ asset('bundles/starrating/js/rating.js') }}\"></script>

         <div class=\"row\">
             <div class=\"col-lg-9\">
                 <!-- Start Blogs -->
                 <div class=\"row\">
                        <!-- Start Single BLog -->
                        <div class=\"col-12\">
                            <article class=\"blog__single sticky__blog\">
                                <div class=\"blog__thumb\">
                                    <a href=\"blog-details.html\">

                                        <img src=\"{{ asset('uploads/images/'~ modele.image ) }}\" alt=\"blog images\" >
                                    </a>
                                </div>


                                <div class=\"blog__content\">
                                    <h2 ><a href=\"blog-details.html\">{{ modele.nom }}</a></h2>
                                    <ul class=\"bl__post\">
                                        <li>Email: {{ modele.email }}</li>
                                        <br>
                                        <li>Telephone: {{ modele.telephone }}</li>
                                        <li>Specialite: {{ modele.specialite}} </li>

                                    </ul><p>{{ modele.adresse }}</p>

                                </div>
                            </article>
                        </div>
                        <!-- End Single BLog -->



                    </div>
                    <!-- End Blogs -->
                </div>
                <!-- Start Sidebar -->
                <div class=\"col-lg-3\">
                    <div class=\"sidebar__widgets sidebar--right\">
                        <input type=\"hidden\" id=\"longitude\" value={{ modele.longitude }}>
                        <input type=\"hidden\" id=\"latitude\" value={{ modele.latitude }}>
                        <input type=\"hidden\" id=\"ville\" value={{ modele.adresse }}>
                        <!-- Single Widget -->
                        <div class=\"single__widget search\">
                            <h4>Search</h4>
                            <form method=\"post\">
                           {{ form(form) }}
                                <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </form>
                        </div>
                        <!-- End Widget -->




                        <!-- Single Widget -->
                        <div class=\"single__widget recent__comment\">
                            <div id=\"map\" style=\"width:300px;height: 400px;\"></div>
                        </div>
                        <!-- End Widget -->
                        <!-- Single Widget -->
                        <div class=\"single__widget recent__post\" id=\"div\">

                        </div>
                        <!-- End Widget -->

                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Blog Grid Area -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBvq8htYVhOZs03ZuJEm6qiGPzfM_7O5x4\" type=\"text/javascript\"
    ></script>
    <script>



        function initialize()
        {   var k=parseFloat(\$(\"#latitude\").val());
            var j=parseFloat(\$(\"#longitude\").val());

            var w=\$(\"#ville\").val();

            var mapoptions={
                zoom:8,
                center:{lat:k,lng:j}
            }
            var map=new google.maps.Map(document.getElementById('map'),mapoptions);

            var myLating=new google.maps.LatLng(k,j);
            var mapoptions={
                Zoom:4,
                center:myLating

            };
            var map=new google.maps.Map(document.getElementById('map'),mapoptions);
            var marker=new google.maps.Marker({
                position:{lat:k,lng:j},
                map:map,

            });
            var infowindow=new google.maps.InfoWindow({
                content:w
            });
            marker.addListener('click',function (){
                infowindow.open(map,marker);
            });


        }
        google.maps.event.addDomListener(window,'load',initialize());
    </script>
     </section>
{% block content %}

    <script src=\"{{ asset('jquery-3.2.1.js') }}\"></script>
    <script>
        \$(\"#rechercheV_adresse\").keyup(
            function(){
                var adresse=\$(\"#rechercheV_adresse\").val();

                var Data='adresse=' + adresse;
                console.log(Data);
                \$.ajax({
                    type:\"POST\",
                    url: \"{{ path('medecin_details',{ 'id': modele.id }) }}\",
                    data: Data,
                    success:function(data){
                        console.log(data);

                        \$(\"#div\").html(\"<ul id='res'>\" +
                            \"</ul>\");

                        \$.each(data,function (k,e1) {
                            console.log(e1);

                            \$(\"#res\").append(
                                \"<li>\"+
                          +
                               \" <div class='post__content'>\"+
                                \"<h6>\"+
                               \" <a href='{{ path('garderie_meilleur') }}'>\"+e1.nom+\"</a>\"+
                                \"</h6>\"+

                            \"</div>\"+
                            \"</li>\"
                        );

                        });
                    }
                });

            });


        {% endblock %}
    </script>
{% endblock %}", "@Medecin/Front/DetailsMedecins.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\MedecinBundle\\Resources\\views\\Front\\DetailsMedecins.html.twig");
    }
}
