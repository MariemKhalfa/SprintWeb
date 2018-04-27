<?php

/* MedecinBundle:Back:ModifierMedecin.html.twig */
class __TwigTemplate_3f66616cfa70bb8476959c6176f0c75447836d09ccfdb67d0962a6dbfb7b45d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "MedecinBundle:Back:ModifierMedecin.html.twig", 1);
        $this->blocks = array(
            'btitle' => array($this, 'block_btitle'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Back:ModifierMedecin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MedecinBundle:Back:ModifierMedecin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_btitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "btitle"));

        // line 3
        echo "

    <div class=\"row heading-bg bg-blue\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Medecins</span></a></li>
                <li class=\"active\"><span>Modifier Médecin</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <!-- Main Content -->
    <div class=\"page-wrapper\">
    <div class=\"container-fluid\">



    <!-- Row -->
    <div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">Ajouter Medecin</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">


                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Nom*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i class=\"icon-user\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Prenom*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i class=\"icon-user\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputEmail_4\" class=\"col-sm-3 control-label\">Email*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i class=\"icon-envelope-open\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Telephone</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Adresse</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">photo</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Specialite</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'widget', array("attr" => array("class" => "select2 select2-multiple")));
        echo "


                                        </div>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class=\"form-group mb-0\">
                                    <div class=\"col-sm-offset-3 col-sm-9\">

                                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Modifier", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MedecinBundle:Back:ModifierMedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 131,  210 => 121,  195 => 109,  182 => 99,  169 => 89,  155 => 78,  143 => 69,  131 => 60,  119 => 51,  87 => 23,  78 => 22,  50 => 3,  41 => 2,  11 => 1,);
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
{% block btitle %}


    <div class=\"row heading-bg bg-blue\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids admin</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Medecins</span></a></li>
                <li class=\"active\"><span>Modifier Médecin</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
{% endblock %}
{% block body %}
    {{ form_start(form) }}
    <!-- Main Content -->
    <div class=\"page-wrapper\">
    <div class=\"container-fluid\">



    <!-- Row -->
    <div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">Ajouter Medecin</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">


                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Nom*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.nom,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i class=\"icon-user\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Prenom*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.prenom,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i class=\"icon-user\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputEmail_4\" class=\"col-sm-3 control-label\">Email*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.email,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i class=\"icon-envelope-open\"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Telephone</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.telephone,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Adresse</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.adresse,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">photo</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.image,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Specialite</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.specialite,{attr: {class: 'select2 select2-multiple'} }) }}


                                        </div>
                                    </div>

                                </div>
                                <br>
                                <br>
                                <div class=\"form-group mb-0\">
                                    <div class=\"col-sm-offset-3 col-sm-9\">

                                        {{ form_widget(form.Modifier,{attr: {class: 'btn btn-info' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}



{% endblock %}", "MedecinBundle:Back:ModifierMedecin.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\MedecinBundle/Resources/views/Back/ModifierMedecin.html.twig");
    }
}
