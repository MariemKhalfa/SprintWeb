<?php

/* :default:layoutLoginBack.html.twig */
class __TwigTemplate_94e650e943c38fc5d2cf7228fa45086af9291bf941a8b9b441609a22dbf7af68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layoutLoginBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layoutLoginBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <title>Kenny I Fast build Admin dashboard for any platform</title>
    <meta name=\"description\" content=\"Kenny is a Dashboard & Admin Site Responsive Template by hencework.\" />
    <meta name=\"keywords\" content=\"admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application\" />
    <meta name=\"author\" content=\"hencework\"/>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- vector map CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>



    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<!--Preloader-->
<div class=\"preloader-it\">
    <div class=\"la-anim-1\"></div>
</div>
<!--/Preloader-->

<div class=\"wrapper pa-0\">

    <!-- Main Content -->
    <div class=\"page-wrapper pa-0 ma-0\">
        <div class=\"container-fluid\">
            <!-- Row -->
            <div class=\"table-struct full-width full-height\">
                <div class=\"table-cell vertical-align-middle\">
                    <div class=\"auth-form  ml-auto mr-auto no-float\">
                        <div class=\"panel panel-default card-view mb-0\">
                            <div class=\"panel-heading\">
                                <div class=\"pull-left\">
                                    <h6 class=\"panel-title txt-dark\">Sign In</h6>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"panel-wrapper collapse in\">
                                <div class=\"panel-body\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12 col-xs-12\">
                                            <div class=\"form-wrap\">
                                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:adminLogin", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->
<!-- JavaScript -->
<!-- jQuery -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Slimscroll JavaScript -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

<!-- Fancy Dropdown JS -->
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/dropdown-bootstrap-extended.js"), "html", null, true);
        echo "\"></script>

<!-- Init JavaScript -->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/init.js"), "html", null, true);
        echo "\"></script>
</body>
";
        // line 85
        $this->displayBlock('js', $context, $blocks);
        // line 86
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":default:layoutLoginBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 85,  141 => 86,  139 => 85,  134 => 83,  128 => 80,  122 => 77,  116 => 74,  112 => 73,  106 => 70,  84 => 51,  51 => 21,  43 => 16,  26 => 1,);
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
    <title>Kenny I Fast build Admin dashboard for any platform</title>
    <meta name=\"description\" content=\"Kenny is a Dashboard & Admin Site Responsive Template by hencework.\" />
    <meta name=\"keywords\" content=\"admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application\" />
    <meta name=\"author\" content=\"hencework\"/>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

    <!-- vector map CSS -->
    <link href=\"{{ asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>



    <!-- Custom CSS -->
    <link href=\"{{ asset('dist/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<!--Preloader-->
<div class=\"preloader-it\">
    <div class=\"la-anim-1\"></div>
</div>
<!--/Preloader-->

<div class=\"wrapper pa-0\">

    <!-- Main Content -->
    <div class=\"page-wrapper pa-0 ma-0\">
        <div class=\"container-fluid\">
            <!-- Row -->
            <div class=\"table-struct full-width full-height\">
                <div class=\"table-cell vertical-align-middle\">
                    <div class=\"auth-form  ml-auto mr-auto no-float\">
                        <div class=\"panel panel-default card-view mb-0\">
                            <div class=\"panel-heading\">
                                <div class=\"pull-left\">
                                    <h6 class=\"panel-title txt-dark\">Sign In</h6>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                            <div class=\"panel-wrapper collapse in\">
                                <div class=\"panel-body\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-12 col-xs-12\">
                                            <div class=\"form-wrap\">
                                                {{ render (controller('AppBundle:Default:adminLogin' , {'request' : app.request})) }}                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->
<!-- JavaScript -->
<!-- jQuery -->
<script src=\"{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}\"></script>

<!-- Slimscroll JavaScript -->
<script src=\"{{ asset('dist/js/jquery.slimscroll.js') }}\"></script>

<!-- Fancy Dropdown JS -->
<script src=\"{{ asset('dist/js/dropdown-bootstrap-extended.js') }}\"></script>

<!-- Init JavaScript -->
<script src=\"{{ asset('dist/js/init.js') }}\"></script>
</body>
{% block js %}{% endblock %}

</html>
", ":default:layoutLoginBack.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app/Resources\\views/default/layoutLoginBack.html.twig");
    }
}
