<?php

/* publicite/new.html.twig */
class __TwigTemplate_0e60819ce47b19ab3301d26ce4c6cc947f5893e14f469c9984401ca4d6e37064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "publicite/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "publicite/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-sm-12\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "


<div class=\"row\">
    <div class=\"col-sm-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">
                                    <div class=\"panel-heading\">
                                    <div class=\"pull-left\">
                                        <h6 class=\"panel-title txt-dark\">Crée votre publicite</h6>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputuname_1\">Nom de la Publicite</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"ti-blackboard\"></i></div>
                                      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "", "id" => "exampleInputuname_1")));
        echo "
                                    </div>
                                </div>
                                    <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputEmail_1\">Nom Du magasin</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"icon-pencil\"></i></div>
                                      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomEnsegne", array()), 'widget', array("attr" => array("class" => "", "id" => "exampleInputuname_1")));
        echo "
                                    </div>
                                    </div>
                                <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputpwd_1\">Image de la publicite</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"icon-picture\"></i></div>
                                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagePub", array()), 'widget', array("attr" => array("class" => "", "id" => "exampleInputuname_1")));
        echo "
                                    </div>
                                </div>
                             </div>
                            <input type=\"submit\" value=\"Create\" class=\"btn btn-success  mr-10\" id=\"succ\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicite_index");
        echo "\">Back to the list</a>
        ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


    <script>
    \$('#succ').click( function() { alert('ajouter avec succeé'); });
    </script>

    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendors/bower_components/dropify/dist/js/dropify.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/form-file-upload-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll JavaScript -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publicite/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 75,  146 => 72,  140 => 69,  134 => 66,  128 => 63,  117 => 55,  113 => 54,  96 => 40,  86 => 33,  76 => 26,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backBase.html.twig' %}

{% block body %}
    <div class=\"col-sm-12\">
    {{ form_start(form) }}


<div class=\"row\">
    <div class=\"col-sm-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">
                                    <div class=\"panel-heading\">
                                    <div class=\"pull-left\">
                                        <h6 class=\"panel-title txt-dark\">Crée votre publicite</h6>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputuname_1\">Nom de la Publicite</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"ti-blackboard\"></i></div>
                                      {{ form_widget(form.intitule, { 'attr': {'class': '', 'id':'exampleInputuname_1'}} ) }}
                                    </div>
                                </div>
                                    <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputEmail_1\">Nom Du magasin</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"icon-pencil\"></i></div>
                                      {{ form_widget(form.nomEnsegne, { 'attr': {'class': '', 'id':'exampleInputuname_1'}} ) }}
                                    </div>
                                    </div>
                                <div class=\"form-group\">
                                <label class=\"control-label mb-10\" for=\"exampleInputpwd_1\">Image de la publicite</label>
                                    <div class=\"input-group\">
                                        <div class=\"input-group-addon\"><i class=\"icon-picture\"></i></div>
                                      {{ form_widget(form.imagePub, { 'attr': {'class': '' , 'id':'exampleInputuname_1'}} ) }}
                                    </div>
                                </div>
                             </div>
                            <input type=\"submit\" value=\"Create\" class=\"btn btn-success  mr-10\" id=\"succ\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <a class=\"label label-info capitalize-font inline-block ml-10\" href=\"{{ path('publicite_index') }}\">Back to the list</a>
        {{ form_end(form) }}
    </div>


    <script>
    \$('#succ').click( function() { alert('ajouter avec succeé'); });
    </script>

    <script src=\"{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src=\"{{ asset('vendors/bower_components/dropify/dist/js/dropify.min.js') }}\"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script src=\"{{ asset('dist/js/form-file-upload-data.js') }}\"></script>

    <!-- Slimscroll JavaScript -->
    <script src=\"{{ asset('dist/js/jquery.slimscroll.js') }}\"></script>


{% endblock %}
", "publicite/new.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\app\\Resources\\views\\publicite\\new.html.twig");
    }
}
