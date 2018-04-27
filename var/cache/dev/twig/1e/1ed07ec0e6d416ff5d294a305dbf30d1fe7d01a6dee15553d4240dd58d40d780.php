<?php

/* GarderieBundle:Front:GarderiesDetails.html.twig */
class __TwigTemplate_4baee3187f908d2b76faa6093927881c51f80133f83e51775c23151ccdaaed8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GarderieBundle:Front:GarderiesDetails.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:GarderiesDetails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:GarderiesDetails.html.twig"));

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
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Details Garderie </span></h2>

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

                                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                <div style=\"display: none\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idGarderie", array()), 'widget');
        echo "</div>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rating", array()), 'widget');
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Noter", array()), 'widget', array("attr" => array("class" => "dcare__btn btn__f6f6f6")));
        echo "
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                                <div class=\"blog__content\">
                                    <h2 ><a href=\"blog-details.html\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "nom", array()), "html", null, true);
        echo "</a></h2>
                                    <ul class=\"bl__post\">
                                        <li>Date d'ouverture: ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "dateOuverture", array()), "d/m/y"), "html", null, true);
        echo "</li>
                                        <br>
                                        <li>Date  de fermeture: ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "dateFermeture", array()), "d/m/y"), "html", null, true);
        echo "</li>
                                        <li>Heure  debut: ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "heureDeb", array()), "H:i:s"), "html", null, true);
        echo " </li>
                                        <li>Heure  fin: ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo " </li>

                                    </ul><p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "descriptif", array()), "html", null, true);
        echo "</p>
                                   <p>Email:   ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "email", array()), "html", null, true);
        echo "</p>
                                    <p>Cout:    ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "cout", array()), "html", null, true);
        echo ".</p>
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
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "longitude", array()), "html", null, true);
        echo ">
                        <input type=\"hidden\" id=\"latitude\" value=";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "latitude", array()), "html", null, true);
        echo ">
                        <input type=\"hidden\" id=\"ville\" value=";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modele"] ?? $this->getContext($context, "modele")), "adresse", array()), "html", null, true);
        echo ">
                        <!-- Single Widget -->
                        <div class=\"single__widget search\">
                            <h4>Search</h4>
                            <form method=\"post\">
                                <input type=\"text\" id=\"search\" placeholder=\"Search keyword\">
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
                        <div class=\"single__widget recent__post\">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li>
                                    <a href=\"blog-details.html\"><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/blog/sm-img/1.jpg"), "html", null, true);
        echo "\" alt=\"post images\"></a>
                                    <div class=\"post__content\">
                                        <h6><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_meilleur");
        echo "\">Nos meilleurs garderies</a></h6>

                                    </div>
                                </li>


                            </ul>
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
";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 147
        echo "    <div id=\"div\"></div>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"#search\").keyup(
            function(){
                var serie=\$(\"#search\").val();
                var Data='serie=' + serie;
                console.log(Data);
                \$.ajax({
                    type:\"POST\",
                    url: \"";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_details");
        echo "\",
                    data: Data,
                    success:function(data){
                        console.log(data)

                        \$(\"#div\").html(\"<table id='res'>\" +
                            \"<td>Nos Garderies</td>\");
                        \$.each(data,function (k,e1) {


                            \$(\"#res\").append(
                                \"<tr>\"+
                                \"<td>\"+e1.nom+\"</td>\"+

                                \"</tr>\");


                        });
                    }
                });

            }

        );

    </script>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Front:GarderiesDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 157,  276 => 148,  273 => 147,  255 => 146,  194 => 88,  189 => 86,  162 => 62,  158 => 61,  154 => 60,  137 => 46,  133 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  106 => 36,  101 => 34,  94 => 33,  90 => 32,  83 => 28,  68 => 16,  63 => 14,  50 => 3,  41 => 2,  11 => 1,);
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
                 <h2 class=\"title__line\"><span class=\"text-theme-color-blue\">Details Garderie </span></h2>

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

                                {{ form_start(form) }}
                                <div style=\"display: none\">{{ form_widget(form.idGarderie) }}</div>{{ form_widget(form.rating) }}{{ form_widget(form.Noter,{attr: {class:'dcare__btn btn__f6f6f6'} }) }}
{{ form_end(form) }}
                                <div class=\"blog__content\">
                                    <h2 ><a href=\"blog-details.html\">{{ modele.nom }}</a></h2>
                                    <ul class=\"bl__post\">
                                        <li>Date d'ouverture: {{ modele.dateOuverture|date(\"d/m/y\") }}</li>
                                        <br>
                                        <li>Date  de fermeture: {{ modele.dateFermeture|date(\"d/m/y\") }}</li>
                                        <li>Heure  debut: {{ modele.heureDeb|date('H:i:s') }} </li>
                                        <li>Heure  fin: {{ modele.heureFin|date('H:i:s') }} </li>

                                    </ul><p>{{ modele.descriptif }}</p>
                                   <p>Email:   {{ modele.email }}</p>
                                    <p>Cout:    {{ modele.cout }}.</p>
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
                                <input type=\"text\" id=\"search\" placeholder=\"Search keyword\">
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
                        <div class=\"single__widget recent__post\">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li>
                                    <a href=\"blog-details.html\"><img src=\"{{ asset('images/blog/sm-img/1.jpg') }}\" alt=\"post images\"></a>
                                    <div class=\"post__content\">
                                        <h6><a href=\"{{ path('garderie_meilleur') }}\">Nos meilleurs garderies</a></h6>

                                    </div>
                                </li>


                            </ul>
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
{% block content %}
    <div id=\"div\"></div>
    <script src=\"{{ asset('jquery-3.2.1.js') }}\"></script>
    <script>
        \$(\"#search\").keyup(
            function(){
                var serie=\$(\"#search\").val();
                var Data='serie=' + serie;
                console.log(Data);
                \$.ajax({
                    type:\"POST\",
                    url: \"{{ path('garderie_details') }}\",
                    data: Data,
                    success:function(data){
                        console.log(data)

                        \$(\"#div\").html(\"<table id='res'>\" +
                            \"<td>Nos Garderies</td>\");
                        \$.each(data,function (k,e1) {


                            \$(\"#res\").append(
                                \"<tr>\"+
                                \"<td>\"+e1.nom+\"</td>\"+

                                \"</tr>\");


                        });
                    }
                });

            }

        );

    </script>
    </section>
{% endblock %}
{% endblock %}", "GarderieBundle:Front:GarderiesDetails.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Front/GarderiesDetails.html.twig");
    }
}
