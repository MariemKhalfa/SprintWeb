<?php

/* @Covoiturage/Covoiturage/front/details_cov.html.twig */
class __TwigTemplate_0a9b3c9a5e57ff58a5333da26b2f4953f3fedd43c07929c948df7c2a71bca4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Covoiturage/Covoiturage/front/details_cov.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/details_cov.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Covoiturage/Covoiturage/front/details_cov.html.twig"));

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

    <div class=\"main-content\">
        <section class=\"inner-header divider parallax layer-overlay overlay-dark-5\" data-bg-img=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariem//bg/bg3.jpg"), "html", null, true);
        echo "\">
        </section>
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 blog-pull-right\">
                        <div class=\"single-service\">

                            <ul class=\"review_text list-inline\">

                            </ul>
                            <h3 class=\"line-bottom mt-20 mb-20 text-theme-color-red\">Détails covoiturage</h3>
                            <table class=\"table table-bordered\">
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cov"] ?? $this->getContext($context, "cov")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "                                <tr>
                                    <td class=\"text-center font-16 font-weight-600 bg-theme-color-blue text-white\" colspan=\"4\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", array()), "html", null, true);
            echo "</td>
                                </tr>
                                <tbody>
                                <tr> <td><i class=\"fa fa-calendar text-theme-color-red pr-20\"></i>Date</td> <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "d/m/y"), "html", null, true);
            echo "</td> </tr>
                                <tr> <td class=\"bg-theme-color-yellow text-white\"><i class=\"fa fa-birthday-cake text-theme-color-blue pr-20\"></i>Moyenne d'age</td> <td class=\"bg-theme-color-green text-white\">5-6 ans</td> </tr>
                                <tr> <td><i class=\"fa fa-users text-theme-color-red pr-20\"></i>Nombre de places</td> <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nbPlaces", array()), "html", null, true);
            echo "</td> </tr>
                                <tr> <td class=\"bg-theme-color-red text-white\"><i class=\"fa fa-map-marker text-theme-color-yellow pr-20\"></i>Adresse de départ</td> <td class=\"bg-theme-color-sky text-white\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "lieuDep", array()), "html", null, true);
            echo "</td> </tr>
                                <tr> <td><i class=\"fa fa-fighter-jet text-theme-color-red pr-20\"></i>Adresse destination</td> <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "lieuDest", array()), "html", null, true);
            echo "</td> </tr>
                                <tr> <td class=\"bg-theme-color-lemon text-white\"><i class=\"fa fa-clock-o text-theme-color-red pr-20\"></i>Heure départ</td> <td class=\"bg-theme-color-orange text-white\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "heureDep", array()), "h:i"), "html", null, true);
            echo "</td> </tr>
                                <tr> <td><i class=\"fa fa-euro text-theme-color-red pr-20\"></i>Frais</td> <td>Gratuit</td> </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!---- MAP --->
                    <div class=\"col-sm-12 col-md-4\">
                        <p><br><br><br></p>
                        <div class=\"sidebar sidebar-left mt-sm-30\">
                            <div class=\"event_map_marker\">
                                <div id=\"evnetmap\"></div>
                            </div>
                        </div>
                        <br>
                        <div class=\"form-group\">
                            <div class=\" mt-5\">
                                <a class=\"btn btn-flat btn-dark btn-theme-color-green \" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_cov", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                                <a class=\"btn btn-flat btn-dark btn-theme-color-red \" color=\"white\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_cov", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
            </div>
        </section>
    </div>
    <!---- MAP --->

    <!-- JS Files -->
    <script src=\"js/vendor/jquery-3.2.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>

    <!-- Google Map js -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo\"></script>
    <script>

        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(36.8762, 10.1143), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles:
                    [

                        {
                            \"featureType\": \"administrative\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"off\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"poi\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road\",
                            \"elementType\": \"labels\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"water\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"transit\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"landscape\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.highway\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"off\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.local\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"on\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.highway\",
                            \"elementType\": \"geometry\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"on\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"water\",
                            \"stylers\": [
                                {
                                    \"color\": \"#84afa3\"
                                },
                                {
                                    \"lightness\": 52
                                }
                            ]
                        },
                        {
                            \"stylers\": [
                                {
                                    \"saturation\": -17
                                },
                                {
                                    \"gamma\": 0.36
                                }
                            ]
                        },
                        {
                            \"featureType\": \"transit.line\",
                            \"elementType\": \"geometry\",
                            \"stylers\": [
                                {
                                    \"color\": \"#3f518c\"
                                }
                            ]
                        }
                    ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id=\"map\" seen below in the <body>
            var mapElement = document.getElementById('evnetmap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            /* var marker = new google.maps.Marker({
                 position: new google.maps.LatLng(36.862499,10.195556),
                 map: map,
                 title: 'Dcare!',
                 icon: 'images/icons/map-2.png',
                 animation:google.maps.Animation.BOUNCE

             });*/
        }
    </script>



    <script src=\"js/plugins.js\"></script>
    <script src=\"js/active.js\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Covoiturage/Covoiturage/front/details_cov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  126 => 49,  122 => 48,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  83 => 24,  77 => 21,  74 => 20,  70 => 19,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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


    <div class=\"main-content\">
        <section class=\"inner-header divider parallax layer-overlay overlay-dark-5\" data-bg-img=\"{{ asset('images/mariem//bg/bg3.jpg')}}\">
        </section>
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 blog-pull-right\">
                        <div class=\"single-service\">

                            <ul class=\"review_text list-inline\">

                            </ul>
                            <h3 class=\"line-bottom mt-20 mb-20 text-theme-color-red\">Détails covoiturage</h3>
                            <table class=\"table table-bordered\">
                                {% for c in cov %}
                                <tr>
                                    <td class=\"text-center font-16 font-weight-600 bg-theme-color-blue text-white\" colspan=\"4\">{{ c.titre }}</td>
                                </tr>
                                <tbody>
                                <tr> <td><i class=\"fa fa-calendar text-theme-color-red pr-20\"></i>Date</td> <td>{{ c.date |date(\"d/m/y\")}}</td> </tr>
                                <tr> <td class=\"bg-theme-color-yellow text-white\"><i class=\"fa fa-birthday-cake text-theme-color-blue pr-20\"></i>Moyenne d'age</td> <td class=\"bg-theme-color-green text-white\">5-6 ans</td> </tr>
                                <tr> <td><i class=\"fa fa-users text-theme-color-red pr-20\"></i>Nombre de places</td> <td>{{ c.nbPlaces }}</td> </tr>
                                <tr> <td class=\"bg-theme-color-red text-white\"><i class=\"fa fa-map-marker text-theme-color-yellow pr-20\"></i>Adresse de départ</td> <td class=\"bg-theme-color-sky text-white\">{{ c.lieuDep }}</td> </tr>
                                <tr> <td><i class=\"fa fa-fighter-jet text-theme-color-red pr-20\"></i>Adresse destination</td> <td>{{ c.lieuDest }}</td> </tr>
                                <tr> <td class=\"bg-theme-color-lemon text-white\"><i class=\"fa fa-clock-o text-theme-color-red pr-20\"></i>Heure départ</td> <td class=\"bg-theme-color-orange text-white\">{{ c.heureDep|date('h:i') }}</td> </tr>
                                <tr> <td><i class=\"fa fa-euro text-theme-color-red pr-20\"></i>Frais</td> <td>Gratuit</td> </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!---- MAP --->
                    <div class=\"col-sm-12 col-md-4\">
                        <p><br><br><br></p>
                        <div class=\"sidebar sidebar-left mt-sm-30\">
                            <div class=\"event_map_marker\">
                                <div id=\"evnetmap\"></div>
                            </div>
                        </div>
                        <br>
                        <div class=\"form-group\">
                            <div class=\" mt-5\">
                                <a class=\"btn btn-flat btn-dark btn-theme-color-green \" href=\"{{ path('modifier_cov', {\"id\":c.id}) }}\">Modifier</a>
                                <a class=\"btn btn-flat btn-dark btn-theme-color-red \" color=\"white\" href=\"{{ path('supprimer_cov', {\"id\":c.id}) }}\">Supprimer</a></div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </section>
    </div>
    <!---- MAP --->

    <!-- JS Files -->
    <script src=\"js/vendor/jquery-3.2.1.min.js\"></script>
    <script src=\"js/popper.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>

    <!-- Google Map js -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo\"></script>
    <script>

        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(36.8762, 10.1143), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles:
                    [

                        {
                            \"featureType\": \"administrative\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"off\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"poi\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road\",
                            \"elementType\": \"labels\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"water\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"transit\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"landscape\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"simplified\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.highway\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"off\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.local\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"on\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"road.highway\",
                            \"elementType\": \"geometry\",
                            \"stylers\": [
                                {
                                    \"visibility\": \"on\"
                                }
                            ]
                        },
                        {
                            \"featureType\": \"water\",
                            \"stylers\": [
                                {
                                    \"color\": \"#84afa3\"
                                },
                                {
                                    \"lightness\": 52
                                }
                            ]
                        },
                        {
                            \"stylers\": [
                                {
                                    \"saturation\": -17
                                },
                                {
                                    \"gamma\": 0.36
                                }
                            ]
                        },
                        {
                            \"featureType\": \"transit.line\",
                            \"elementType\": \"geometry\",
                            \"stylers\": [
                                {
                                    \"color\": \"#3f518c\"
                                }
                            ]
                        }
                    ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id=\"map\" seen below in the <body>
            var mapElement = document.getElementById('evnetmap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            /* var marker = new google.maps.Marker({
                 position: new google.maps.LatLng(36.862499,10.195556),
                 map: map,
                 title: 'Dcare!',
                 icon: 'images/icons/map-2.png',
                 animation:google.maps.Animation.BOUNCE

             });*/
        }
    </script>



    <script src=\"js/plugins.js\"></script>
    <script src=\"js/active.js\"></script>


{% endblock %}", "@Covoiturage/Covoiturage/front/details_cov.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\CovoiturageBundle\\Resources\\views\\Covoiturage\\front\\details_cov.html.twig");
    }
}
