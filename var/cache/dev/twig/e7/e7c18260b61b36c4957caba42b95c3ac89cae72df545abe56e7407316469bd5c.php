<?php

/* GarderieBundle:Front:Inscription.html.twig */
class __TwigTemplate_36d5fba49af87661d3faffe467ccaff28615a57535c665df0cf36103d17ddea9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GarderieBundle:Front:Inscription.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:Inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GarderieBundle:Front:Inscription.html.twig"));

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
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
            // line 4
            echo "        <div class=\"alert alert-success\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </div>
    ";
        }
        // line 10
        echo "

    <section class=\"page__contact bg--white pb--150 pt--180\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4\">
                    <div class=\"address location\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-home\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>Our Location</h2>
                            <p></p>
                            <ul>
                                <li>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["garderie"] ?? $this->getContext($context, "garderie")), "adresse", array()), "html", null, true);
        echo "</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60\">
                    <div class=\"address phone\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-phone\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>Phone Number</h2>
                            <p></p>
                            <ul>

                                <li><a href=\"tell:+08097-654321\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["garderie"] ?? $this->getContext($context, "garderie")), "telephone", array()), "html", null, true);
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60\">
                    <div class=\"address email\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>E-mail Address</h2>

                            <ul>
                                <li><a href=\"mailto:+08097-654321\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["garderie"] ?? $this->getContext($context, "garderie")), "email", array()), "html", null, true);
        echo "</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
            </div>
        </div>
    </section>

    <!-- Start Contact Form -->
    <section class=\"contact__box section-padding--lg bg-image--27\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Inscription</h2>
                    </div>
                </div>
            </div>

        <form method=\"Post\" >

                <div class=\"single-contact-form name\">

                    <label>entrez votre nom</label>
                    <input id=\"idparent\" type=\"text\" name=\"idparent\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " \" class=\"form-control\">

                </div>
            <div class=\"single-contact-form name\">
                   <label>entrez le nom de votre enfant </label>
                    <select name=\"idenfant1\" id=\"idenfant1\" class=\"form-control\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enfant1"] ?? $this->getContext($context, "enfant1")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 92
            echo "                            hhhhh
                            <option value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pseudonyme", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "pseudonyme", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "</select>
            </div>



                            <div class=\"single-contact-form name\">
                                <div class=\"col col-md-2\">
                                    <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                </div>
                                <input type=\"date\" id=\"jourArriv\" name=\"jourArriv\" placeholder=\"jourArriv\">
                            </div>

            <div class=\"single-contact-form name\">
                <label>Nurserie</label>
                <select name=\"nurserie\" id=\"nurserie\" class=\"form-control\">

                    <option value=\"oui\">oui</option>
                    <option value=\"non\">non</option>

                </select><br></div>
            <div class=\"single-contact-form name\">
                <label>Repas</label>
                <select name=\"repas\" id=\"repas\" class=\"form-control\">
                    <option value=\"oui\">oui</option>
                    <option value=\"non\">non</option>

                </select>
            </div>
            <div class=\"single-contact-form name\">
                <label>Adresse</label>
                <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\">
            </div>

            <div class=\"single-contact-form name\">

                    <textarea id=\"commentaires\" name=\"commentaires\"  placeholder=\"Type your message here..\"></textarea>

            </div>


            <input type=\"submit\" value=\"submit\" class=\"dcare__btn\">

        </form>



        </div>

        <script type=\"text/javascript\">
            \$('#date').datetimepicker({
                format: 'yyyy-MM-dd hh:mm:ss',
                language: 'en'
            });
        </script>
    </section>
    <!-- End Contact Form -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_script($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 152
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Front:Inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 152,  251 => 151,  185 => 94,  175 => 93,  172 => 92,  168 => 91,  159 => 85,  129 => 58,  110 => 42,  90 => 25,  73 => 10,  69 => 8,  60 => 6,  56 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
    {% if app.session.flashBag.has('notice') %}
        <div class=\"alert alert-success\">
            {% for msg in app.session.flashBag.get('notice') %}
                {{ msg }}
            {% endfor %}
        </div>
    {% endif %}


    <section class=\"page__contact bg--white pb--150 pt--180\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4\">
                    <div class=\"address location\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-home\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>Our Location</h2>
                            <p></p>
                            <ul>
                                <li>{{ garderie.adresse }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60\">
                    <div class=\"address phone\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-phone\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>Phone Number</h2>
                            <p></p>
                            <ul>

                                <li><a href=\"tell:+08097-654321\">{{ garderie.telephone }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class=\"col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60\">
                    <div class=\"address email\">
                        <div class=\"ct__icon\">
                            <i class=\"fa fa-envelope\"></i>
                        </div>
                        <div class=\"address__inner\">
                            <h2>E-mail Address</h2>

                            <ul>
                                <li><a href=\"mailto:+08097-654321\">{{ garderie.email }}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
            </div>
        </div>
    </section>

    <!-- Start Contact Form -->
    <section class=\"contact__box section-padding--lg bg-image--27\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Inscription</h2>
                    </div>
                </div>
            </div>

        <form method=\"Post\" >

                <div class=\"single-contact-form name\">

                    <label>entrez votre nom</label>
                    <input id=\"idparent\" type=\"text\" name=\"idparent\" value=\"{{ app.user.username }} \" class=\"form-control\">

                </div>
            <div class=\"single-contact-form name\">
                   <label>entrez le nom de votre enfant </label>
                    <select name=\"idenfant1\" id=\"idenfant1\" class=\"form-control\">
                        {% for m in enfant1 %}
                            hhhhh
                            <option value=\"{{ m.pseudonyme}}\">{{ m.pseudonyme }}</option>
                        {%  endfor %}</select>
            </div>



                            <div class=\"single-contact-form name\">
                                <div class=\"col col-md-2\">
                                    <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                </div>
                                <input type=\"date\" id=\"jourArriv\" name=\"jourArriv\" placeholder=\"jourArriv\">
                            </div>

            <div class=\"single-contact-form name\">
                <label>Nurserie</label>
                <select name=\"nurserie\" id=\"nurserie\" class=\"form-control\">

                    <option value=\"oui\">oui</option>
                    <option value=\"non\">non</option>

                </select><br></div>
            <div class=\"single-contact-form name\">
                <label>Repas</label>
                <select name=\"repas\" id=\"repas\" class=\"form-control\">
                    <option value=\"oui\">oui</option>
                    <option value=\"non\">non</option>

                </select>
            </div>
            <div class=\"single-contact-form name\">
                <label>Adresse</label>
                <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\">
            </div>

            <div class=\"single-contact-form name\">

                    <textarea id=\"commentaires\" name=\"commentaires\"  placeholder=\"Type your message here..\"></textarea>

            </div>


            <input type=\"submit\" value=\"submit\" class=\"dcare__btn\">

        </form>



        </div>

        <script type=\"text/javascript\">
            \$('#date').datetimepicker({
                format: 'yyyy-MM-dd hh:mm:ss',
                language: 'en'
            });
        </script>
    </section>
    <!-- End Contact Form -->
{% endblock %}
{% block script %}


{% endblock %}", "GarderieBundle:Front:Inscription.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\GarderieBundle/Resources/views/Front/Inscription.html.twig");
    }
}
