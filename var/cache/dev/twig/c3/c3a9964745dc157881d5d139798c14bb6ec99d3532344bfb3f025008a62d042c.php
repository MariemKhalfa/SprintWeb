<?php

/* EvenementBundle::ajout.html.twig */
class __TwigTemplate_a65e61acaaa35f3d0b310b51eeb06de26bf922a8e45721920e56d1b8656a70fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backBase.html.twig", "EvenementBundle::ajout.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle::ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <!-- Main Content -->
    <div class=\"page-wrapper\">
    <div class=\"container-fluid\">

    <!-- Title -->
    <div class=\"row heading-bg bg-pink\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Evenements</span></a></li>
                <li class=\"active\"><span>Ajouter un Evenement</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
    <!-- /Title -->

    <!-- Row -->
    <center>
    <div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">AJOUTER UN EVENEMENT</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">


                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Intitule*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "intitule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Participants*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbParticipants", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Budget</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "budget", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Date</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i class=\"icon-calendar\" ></i></div>

                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Adresse</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">image</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Categorie</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'widget', array("attr" => array("class" => "select2 select2-multiple")));
        echo "


                                        </div>
                                    </div>
                                </div>



                                <br>
                                <br>
                                <div class=\"form-group mb-0\">
                                    <div class=\"col-sm-offset-3 col-sm-9\">

                                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
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
    </center>
    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle::ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 133,  194 => 122,  177 => 108,  164 => 98,  151 => 88,  137 => 77,  125 => 68,  113 => 59,  101 => 50,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

    {{ form_start(form) }}
    <!-- Main Content -->
    <div class=\"page-wrapper\">
    <div class=\"container-fluid\">

    <!-- Title -->
    <div class=\"row heading-bg bg-pink\">
        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
            <h5 class=\"txt-light\">All For Kids</h5>
        </div>

        <!-- Breadcrumb -->
        <div class=\"col-lg-9 col-sm-8 col-md-8 col-xs-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"index.html\">Dashboard</a></li>
                <li><a href=\"#\"><span>Evenements</span></a></li>
                <li class=\"active\"><span>Ajouter un Evenement</span></li>
            </ol>
        </div>
        <!-- /Breadcrumb -->

    </div>
    <!-- /Title -->

    <!-- Row -->
    <center>
    <div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"panel panel-default card-view\">
            <div class=\"panel-heading\">
                <div class=\"pull-left\">
                    <h6 class=\"panel-title txt-dark\">AJOUTER UN EVENEMENT</h6>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"panel-wrapper collapse in\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <div class=\"form-wrap\">


                                <div class=\"form-group\">
                                    <label for=\"exampleInputuname_4\" class=\"col-sm-3 control-label\">Intitule*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.intitule,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Participants*</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.nbParticipants,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Budget</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.budget,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Date</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.date,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i class=\"icon-calendar\" ></i></div>

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
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">image</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.image,{attr: {class: 'form-control'} }) }}
                                            <div class=\"input-group-addon\"><i ></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"exampleInputweb_41\" class=\"col-sm-3 control-label\">Categorie</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.categorie,{attr: {class: 'select2 select2-multiple'} }) }}


                                        </div>
                                    </div>
                                </div>



                                <br>
                                <br>
                                <div class=\"form-group mb-0\">
                                    <div class=\"col-sm-offset-3 col-sm-9\">

                                        {{ form_widget(form.Ajouter,{attr: {class: 'btn btn-info' }}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
    {{ form_end(form) }}


{% endblock %}", "EvenementBundle::ajout.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\EvenementBundle/Resources/views/ajout.html.twig");
    }
}
