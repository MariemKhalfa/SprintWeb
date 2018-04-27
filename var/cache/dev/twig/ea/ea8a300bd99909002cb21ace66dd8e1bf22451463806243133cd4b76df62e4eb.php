<?php

/* backBase.html.twig */
class __TwigTemplate_542804662639f57a0b169a96da47997333baddd16190cdfb676bd0e9d8d29b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'btitle' => array($this, 'block_btitle'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backBase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <meta name=\"description\" content=\"Kenny is a Dashboard & Admin Site Responsive Template by hencework.\" />


    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

    <!-- Data table CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/datatables/media/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
</head>

<body>
<!--Preloader-->
<div class=\"preloader-it\">
    <div class=\"la-anim-1\"></div>
</div>
<!--/Preloader-->
<div class=\"wrapper\">

    <!-- Top Menu Items -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <a id=\"toggle_nav_btn\" class=\"toggle-left-nav-btn inline-block mr-20 pull-left\" href=\"javascript:void(0);\"><i class=\"fa fa-bars\"></i></a>
        <a href=\"index.html\"><img class=\"brand-img pull-left\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/logo-sm.png"), "html", null, true);
        echo "\" alt=\"brand\"/></a>
        <ul class=\"nav navbar-right top-nav pull-right\">
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#site_navbar_search\">
                    <i class=\"fa fa-search top-nav-icon\"></i>
                </a>
            </li>
            <li>
                <a id=\"open_right_sidebar\" href=\"javascript:void(0);\"><i class=\"fa fa-cog top-nav-icon\"></i></a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-th top-nav-icon\"></i></a>
                <ul class=\"dropdown-menu app-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <ul class=\"app-icon-wrap\">
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-umbrella txt-info\"></i>
                                    <span class=\"block\">weather</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-mail-open-file txt-success\"></i>
                                    <span class=\"block\">e-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-date txt-primary\"></i>
                                    <span class=\"block\">calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-map txt-danger\"></i>
                                    <span class=\"block\">map</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-comment txt-warning\"></i>
                                    <span class=\"block\">chat</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-notebook\"></i>
                                    <span class=\"block\">contact</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"divider\"></li>
                    <li class=\"text-center\"><a href=\"#\">More</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell top-nav-icon\"></i><span class=\"top-nav-icon-badge\">5</span></a>
                <ul  class=\"dropdown-menu alert-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <div class=\"streamline message-box message-nicescroll-bar\">
                            <div class=\"sl-item\">
                                <div class=\"sl-avatar avatar avatar-sm avatar-circle\">
                                    <img class=\"img-responsive img-circle\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user.png"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">Sandy Doe</a>
                                    <span class=\"inline-block font-12  pull-right\">12/10/16</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est!</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-spotify\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">
                                        2 voice mails</a>
                                    <span class=\"inline-block font-12  pull-right\">2pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-whatsapp\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">8 voice messanger</a>
                                    <span class=\"inline-block font-12 pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>8 texts</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-envelope\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">2 new messages</a>
                                    <span class=\"inline-block font-12  pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>ashjs@gmail.com</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"sl-avatar avatar avatar-sm avatar-circle\">
                                    <img class=\"img-responsive img-circle\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user4.png"), "html", null, true);
        echo "\" alt=\"avatar\"/>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">Sandy Doe</a>
                                    <span class=\"inline-block font-12  pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle pr-0\" data-toggle=\"dropdown\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/user1.png"), "html", null, true);
        echo "\" alt=\"user_auth\" class=\"user-auth-img img-circle\"/><span class=\"user-online-status\"></span></a>
                <ul class=\"dropdown-menu user-auth-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> </a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-credit-card-alt\"></i> my balance</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class=\"collapse navbar-search-overlap\" id=\"site_navbar_search\">
            <form role=\"search\">
                <div class=\"form-group mb-0\">
                    <div class=\"input-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"overlay_search\" name=\"overlay-search\" class=\"form-control pl-30\" placeholder=\"Search\">
                            <span class=\"input-group-addon pr-30\">
\t\t\t\t\t\t\t\t\t<a  href=\"javascript:void(0)\" class=\"close-input-overlay\" data-target=\"#site_navbar_search\" data-toggle=\"collapse\" aria-label=\"Close\" aria-expanded=\"true\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class=\"fixed-sidebar-left\">
        <ul class=\"nav navbar-nav side-nav nicescroll-bar\">
            <li>
                <a   href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#dashboard_dr\"><i class=\"icon-grid mr-10\"></i>Bonne Affaires <span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"dashboard_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_index");
        echo "\">Gestion Publicité</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupons_index");
        echo "\">Gestion Coupons</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promotions_index");
        echo "\">Gestion Promotion</a>
                    </li>
                 </ul>
                <li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#app_dr\"><i class=\"icon-grid mr-10\"></i>Garderies <span class=\"pull-right\"><span class=\"label label-info mr-10\">2</span><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"app_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_afficher2");
        echo "\">Gestion Demandes</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("garderie_statistiques2");
        echo "\">Statistiques Garderies</a>
                    </li>

                </ul>
            <li>
                <a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("e_learning_afficherBackEnseignant");
        echo "\" data-toggle=\"collapse\" data-target=\"#app_dr\"><i class=\"icon-grid mr-10\"> Gestion Enseignants</i> <span class=\"pull-right\"><span class=\"label label-info mr-10\"></span></span></a>

                <a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activite_afficherActivite");
        echo "\" data-toggle=\"collapse\" data-target=\"#ui_dr\"><i class=\"icon-vector mr-10\"> Gestion Activités</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>


            </li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#table_dr\"><i class=\"icon-list mr-10\">  Medecins</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"table_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_ajout");
        echo "\">Ajouter Medecin</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 239
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medecin_liste");
        echo "\">Afficher medecins</a>
                    </li>

                </ul>
            </li>
            <li>


            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#form_dr\"><i class=\" icon-flag mr-10\"> Evenements</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"form_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_ajout");
        echo "\">Ajouter un Evenement</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_list");
        echo "\">Afficher la liste des Evenements</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#cov_dr\"><i class=\" pe-7s-car mr-10\"></i> Covoiturage<span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>

                <ul id=\"cov_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"#\">Statistiques covoiturages</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 267
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_cov_admin");
        echo "\">Liste des covoiturages</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des covoitureurs</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des participations</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#bab_dr\"><i class=\"pe-7s-cart mr-10\"></i> Babysitting<span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>

                <ul id=\"bab_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"#\">Statistiques babysittings</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des babysittings</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des babysitteurs</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des réservations</a>
                    </li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->



    <!-- Main Content -->

    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->
            ";
        // line 309
        $this->displayBlock('btitle', $context, $blocks);
        // line 317
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 319
        echo "            <!-- /Title -->

            ";
        // line 321
        $this->displayBlock('footer', $context, $blocks);
        // line 339
        echo "<!-- /Footer -->


        </div>
        <!-- /Main Content -->

    </div>
</div>

    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Data table JavaScript -->
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll JavaScript -->
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- simpleWeather JavaScript -->
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/simpleweather-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/Counter-Up/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Fancy Dropdown JS -->
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/dropdown-bootstrap-extended.js"), "html", null, true);
        echo "\"></script>

    <!-- Sparkline JavaScript -->
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/jquery.sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

    <!-- ChartJS JavaScript -->
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/morris-data.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Init JavaScript -->
    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/init.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/dashboard-data.js"), "html", null, true);
        echo "\"></script>


</body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " <title>All For kids admin interface</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_btitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        // line 310
        echo "            <div class=\"row heading-bg  bg-blue\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h5 class=\"txt-light\"> All For kids admin </h5>
                </div>

            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 317
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 318
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 321
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 322
        echo "            <!-- Footer -->

            <footer class=\"footer container-fluid pl-30 pr-30\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <a href=\"index.html\" class=\"brand mr-30\"><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/img/logo-sm.png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
                        <ul class=\"footer-link nav navbar-nav\">
                            <li class=\"logo-footer\"><a href=\"#\">help</a></li>
                            <li class=\"logo-footer\"><a href=\"#\">terms</a></li>
                            <li class=\"logo-footer\"><a href=\"#\">privacy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-7 text-right\">
                        <p>2018 &copy; All For Kids All rights reserved</p>
                    </div>
                </div>
            </footer>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 327,  608 => 322,  599 => 321,  589 => 318,  580 => 317,  564 => 310,  555 => 309,  537 => 6,  519 => 392,  515 => 391,  509 => 388,  504 => 386,  500 => 385,  496 => 384,  490 => 381,  484 => 378,  478 => 375,  472 => 372,  468 => 371,  462 => 368,  458 => 367,  454 => 366,  448 => 363,  442 => 360,  436 => 357,  430 => 354,  413 => 339,  411 => 321,  407 => 319,  404 => 317,  402 => 309,  357 => 267,  341 => 254,  335 => 251,  320 => 239,  314 => 236,  303 => 228,  298 => 226,  290 => 221,  284 => 218,  273 => 210,  267 => 207,  261 => 204,  213 => 159,  196 => 145,  144 => 96,  77 => 32,  60 => 18,  54 => 15,  48 => 12,  44 => 11,  38 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    {% block title %} <title>All For kids admin interface</title> {% endblock %}
    <meta name=\"description\" content=\"Kenny is a Dashboard & Admin Site Responsive Template by hencework.\" />


    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\">
    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\">

    <!-- Data table CSS -->
    <link href=\"{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>

    <!-- Custom CSS -->
    <link href=\"{{ asset('dist/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\">
</head>

<body>
<!--Preloader-->
<div class=\"preloader-it\">
    <div class=\"la-anim-1\"></div>
</div>
<!--/Preloader-->
<div class=\"wrapper\">

    <!-- Top Menu Items -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <a id=\"toggle_nav_btn\" class=\"toggle-left-nav-btn inline-block mr-20 pull-left\" href=\"javascript:void(0);\"><i class=\"fa fa-bars\"></i></a>
        <a href=\"index.html\"><img class=\"brand-img pull-left\" src=\"{{ asset('dist/img/logo-sm.png') }}\" alt=\"brand\"/></a>
        <ul class=\"nav navbar-right top-nav pull-right\">
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#site_navbar_search\">
                    <i class=\"fa fa-search top-nav-icon\"></i>
                </a>
            </li>
            <li>
                <a id=\"open_right_sidebar\" href=\"javascript:void(0);\"><i class=\"fa fa-cog top-nav-icon\"></i></a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-th top-nav-icon\"></i></a>
                <ul class=\"dropdown-menu app-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <ul class=\"app-icon-wrap\">
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-umbrella txt-info\"></i>
                                    <span class=\"block\">weather</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-mail-open-file txt-success\"></i>
                                    <span class=\"block\">e-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-date txt-primary\"></i>
                                    <span class=\"block\">calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-map txt-danger\"></i>
                                    <span class=\"block\">map</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-comment txt-warning\"></i>
                                    <span class=\"block\">chat</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"connection-item\">
                                    <i class=\"pe-7s-notebook\"></i>
                                    <span class=\"block\">contact</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"divider\"></li>
                    <li class=\"text-center\"><a href=\"#\">More</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell top-nav-icon\"></i><span class=\"top-nav-icon-badge\">5</span></a>
                <ul  class=\"dropdown-menu alert-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <div class=\"streamline message-box message-nicescroll-bar\">
                            <div class=\"sl-item\">
                                <div class=\"sl-avatar avatar avatar-sm avatar-circle\">
                                    <img class=\"img-responsive img-circle\" src=\"{{ asset('dist/img/user.png') }}\" alt=\"avatar\"/>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">Sandy Doe</a>
                                    <span class=\"inline-block font-12  pull-right\">12/10/16</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est!</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-spotify\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">
                                        2 voice mails</a>
                                    <span class=\"inline-block font-12  pull-right\">2pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-whatsapp\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">8 voice messanger</a>
                                    <span class=\"inline-block font-12 pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>8 texts</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-envelope\"></i>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">2 new messages</a>
                                    <span class=\"inline-block font-12  pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>ashjs@gmail.com</p>
                                </div>
                            </div>
                            <hr/>
                            <div class=\"sl-item\">
                                <div class=\"sl-avatar avatar avatar-sm avatar-circle\">
                                    <img class=\"img-responsive img-circle\" src=\"{{ asset('dist/img/user4.png') }}\" alt=\"avatar\"/>
                                </div>
                                <div class=\"sl-content\">
                                    <a href=\"javascript:void(0)\" class=\"inline-block capitalize-font  pull-left\">Sandy Doe</a>
                                    <span class=\"inline-block font-12  pull-right\">1pm</span>
                                    <div class=\"clearfix\"></div>
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle pr-0\" data-toggle=\"dropdown\"><img src=\"{{ asset('dist/img/user1.png') }}\" alt=\"user_auth\" class=\"user-auth-img img-circle\"/><span class=\"user-online-status\"></span></a>
                <ul class=\"dropdown-menu user-auth-dropdown\" data-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> </a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-credit-card-alt\"></i> my balance</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-envelope\"></i> Inbox</a>
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-gear\"></i> Settings</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class=\"collapse navbar-search-overlap\" id=\"site_navbar_search\">
            <form role=\"search\">
                <div class=\"form-group mb-0\">
                    <div class=\"input-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" id=\"overlay_search\" name=\"overlay-search\" class=\"form-control pl-30\" placeholder=\"Search\">
                            <span class=\"input-group-addon pr-30\">
\t\t\t\t\t\t\t\t\t<a  href=\"javascript:void(0)\" class=\"close-input-overlay\" data-target=\"#site_navbar_search\" data-toggle=\"collapse\" aria-label=\"Close\" aria-expanded=\"true\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t\t</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class=\"fixed-sidebar-left\">
        <ul class=\"nav navbar-nav side-nav nicescroll-bar\">
            <li>
                <a   href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#dashboard_dr\"><i class=\"icon-grid mr-10\"></i>Bonne Affaires <span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"dashboard_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"{{ path('publicite_index') }}\">Gestion Publicité</a>
                    </li>
                    <li>
                        <a href=\"{{ path('coupons_index') }}\">Gestion Coupons</a>
                    </li>
                    <li>
                        <a href=\"{{ path('promotions_index') }}\">Gestion Promotion</a>
                    </li>
                 </ul>
                <li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#app_dr\"><i class=\"icon-grid mr-10\"></i>Garderies <span class=\"pull-right\"><span class=\"label label-info mr-10\">2</span><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"app_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"{{ path('demande_afficher2') }}\">Gestion Demandes</a>
                    </li>
                    <li>
                        <a href=\"{{ path('garderie_statistiques2') }}\">Statistiques Garderies</a>
                    </li>

                </ul>
            <li>
                <a href=\"{{ path('e_learning_afficherBackEnseignant') }}\" data-toggle=\"collapse\" data-target=\"#app_dr\"><i class=\"icon-grid mr-10\"> Gestion Enseignants</i> <span class=\"pull-right\"><span class=\"label label-info mr-10\"></span></span></a>

                <a href=\"{{ path('activite_afficherActivite') }}\" data-toggle=\"collapse\" data-target=\"#ui_dr\"><i class=\"icon-vector mr-10\"> Gestion Activités</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>


            </li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#table_dr\"><i class=\"icon-list mr-10\">  Medecins</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"table_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"{{ path('medecin_ajout') }}\">Ajouter Medecin</a>
                    </li>
                    <li>
                        <a href=\"{{ path('medecin_liste') }}\">Afficher medecins</a>
                    </li>

                </ul>
            </li>
            <li>


            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#form_dr\"><i class=\" icon-flag mr-10\"> Evenements</i><span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>
                <ul id=\"form_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"{{ path('evenement_ajout') }}\">Ajouter un Evenement</a>
                    </li>
                    <li>
                        <a href=\"{{ path('evenement_list') }}\">Afficher la liste des Evenements</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#cov_dr\"><i class=\" pe-7s-car mr-10\"></i> Covoiturage<span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>

                <ul id=\"cov_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"#\">Statistiques covoiturages</a>
                    </li>
                    <li>
                        <a href=\"{{ path('list_cov_admin') }}\">Liste des covoiturages</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des covoitureurs</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des participations</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href=\"javascript:void(0);\" data-toggle=\"collapse\" data-target=\"#bab_dr\"><i class=\"pe-7s-cart mr-10\"></i> Babysitting<span class=\"pull-right\"><i class=\"fa fa-fw fa-angle-down\"></i></span></a>

                <ul id=\"bab_dr\" class=\"collapse collapse-level-1\">
                    <li>
                        <a href=\"#\">Statistiques babysittings</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des babysittings</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des babysitteurs</a>
                    </li>
                    <li>
                        <a href=\"#\">Liste des réservations</a>
                    </li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
    <!-- /Left Sidebar Menu -->



    <!-- Main Content -->

    <div class=\"page-wrapper\">
        <div class=\"container-fluid\">

            <!-- Title -->
            {% block btitle %}
            <div class=\"row heading-bg  bg-blue\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h5 class=\"txt-light\"> All For kids admin </h5>
                </div>

            </div>
            {% endblock %}
            {% block body %}
            {% endblock %}
            <!-- /Title -->

            {% block footer %}
            <!-- Footer -->

            <footer class=\"footer container-fluid pl-30 pr-30\">
                <div class=\"row\">
                    <div class=\"col-sm-5\">
                        <a href=\"index.html\" class=\"brand mr-30\"><img src=\"{{ asset('dist/img/logo-sm.png') }}\" alt=\"logo\"/></a>
                        <ul class=\"footer-link nav navbar-nav\">
                            <li class=\"logo-footer\"><a href=\"#\">help</a></li>
                            <li class=\"logo-footer\"><a href=\"#\">terms</a></li>
                            <li class=\"logo-footer\"><a href=\"#\">privacy</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-7 text-right\">
                        <p>2018 &copy; All For Kids All rights reserved</p>
                    </div>
                </div>
            </footer>
            {% endblock %}<!-- /Footer -->


        </div>
        <!-- /Main Content -->

    </div>
</div>

    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src=\"{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

    <!-- Data table JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}\"></script>

    <!-- Slimscroll JavaScript -->
    <script src=\"{{ asset('dist/js/jquery.slimscroll.js') }}\"></script>

    <!-- simpleWeather JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}\"></script>
    <script src=\"{{ asset('dist/js/simpleweather-data.js') }}\"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('vendors/bower_components/Counter-Up/jquery.counterup.min.js') }}\"></script>

    <!-- Fancy Dropdown JS -->
    <script src=\"{{ asset('dist/js/dropdown-bootstrap-extended.js') }}\"></script>

    <!-- Sparkline JavaScript -->
    <script src=\"{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}\"></script>

    <!-- ChartJS JavaScript -->
    <script src=\"{{ asset('vendors/chart.js/Chart.min.js') }}\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/raphael/raphael.min.js') }}\"></script>
    <script src=\"{{ asset('vendors/bower_components/morris.js/morris.min.js') }}\"></script>
    <script src=\"{{ asset('dist/js/morris-data.js') }}\"></script>

    <script src=\"{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}\"></script>

    <!-- Init JavaScript -->
    <script src=\"{{ asset('dist/js/init.js') }}\"></script>
    <script src=\"{{ asset('dist/js/dashboard-data.js') }}\"></script>


</body>


</html>
", "backBase.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app\\Resources\\views\\backBase.html.twig");
    }
}
