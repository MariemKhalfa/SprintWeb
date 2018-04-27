<?php

/* JeuxBundle:Default:quiz.html.twig */
class __TwigTemplate_1f04b85217f24f58477a2d6d1b40bb60fbde9617b7624341d77060413ea228a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "JeuxBundle:Default:quiz.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuxBundle:Default:quiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuxBundle:Default:quiz.html.twig"));

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
    <section class=\"dcare__team__area pb--150 bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Calcul mathématique pour enfants</h2>
                        <p>Les jeux de mémoire ne sont pas que pour les gens qui sont distraits ! Non, ils sont également super importants pour les enfants dont le cerveau grandit. Ils permettent en effet de faire travailler les méninges. </p>
                    </div>
                </div>
            </div>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset=\"UTF-8\">
                <style>
                    div#test{ border:#000 1px solid; padding:10px 40px 40px 40px; }
                </style>
                <script>
                    var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
                    var questions = [
                        [ \"Que donne 10 + 4?\", \"12\", \"14\", \"16\", \"B\" ],
                        [ \"WQue donne 20 - 9?\", \"7\", \"13\", \"11\", \"C\" ],
                        [ \"Que donne 7 x 3?\", \"21\", \"24\", \"25\", \"A\" ],
                        [ \"Que donne 8 / 2?\", \"10\", \"2\", \"4\", \"C\" ]
                    ];
                    function _(x){
                        return document.getElementById(x);
                    }
                    function renderQuestion(){
                        test = _(\"test\");
                        if(pos >= questions.length){
                            test.innerHTML = \"<h2>You got \"+correct+\" of \"+questions.length+\" questions correct</h2>\";
                            _(\"test_status\").innerHTML = \"Test Completed\";
                            pos = 0;
                            correct = 0;
                            return false;
                        }
                        _(\"test_status\").innerHTML = \"Question \"+(pos+1)+\" of \"+questions.length;
                        question = questions[pos][0];
                        chA = questions[pos][1];
                        chB = questions[pos][2];
                        chC = questions[pos][3];
                        test.innerHTML = \"<h3>\"+question+\"</h3>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='A'> \"+chA+\"<br>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='B'> \"+chB+\"<br>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='C'> \"+chC+\"<br><br>\";
                        test.innerHTML += \"<button onclick='checkAnswer()'>Submit Answer</button>\";
                    }
                    function checkAnswer(){
                        choices = document.getElementsByName(\"choices\");
                        for(var i=0; i<choices.length; i++){
                            if(choices[i].checked){
                                choice = choices[i].value;
                            }
                        }
                        if(choice == questions[pos][4]){
                            correct++;
                        }
                        pos++;
                        renderQuestion();
                    }
                    window.addEventListener(\"load\", renderQuestion, false);
                </script>
            </head>
            <body>
            <h2 id=\"test_status\"></h2>
            <div id=\"test\"></div>
            </body>
            </html>
</html>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuxBundle:Default:quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block container %}

    <section class=\"dcare__team__area pb--150 bg--white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-sm-12 col-md-12\">
                    <div class=\"section__title text-center\">
                        <h2 class=\"title__line\">Calcul mathématique pour enfants</h2>
                        <p>Les jeux de mémoire ne sont pas que pour les gens qui sont distraits ! Non, ils sont également super importants pour les enfants dont le cerveau grandit. Ils permettent en effet de faire travailler les méninges. </p>
                    </div>
                </div>
            </div>
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset=\"UTF-8\">
                <style>
                    div#test{ border:#000 1px solid; padding:10px 40px 40px 40px; }
                </style>
                <script>
                    var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
                    var questions = [
                        [ \"Que donne 10 + 4?\", \"12\", \"14\", \"16\", \"B\" ],
                        [ \"WQue donne 20 - 9?\", \"7\", \"13\", \"11\", \"C\" ],
                        [ \"Que donne 7 x 3?\", \"21\", \"24\", \"25\", \"A\" ],
                        [ \"Que donne 8 / 2?\", \"10\", \"2\", \"4\", \"C\" ]
                    ];
                    function _(x){
                        return document.getElementById(x);
                    }
                    function renderQuestion(){
                        test = _(\"test\");
                        if(pos >= questions.length){
                            test.innerHTML = \"<h2>You got \"+correct+\" of \"+questions.length+\" questions correct</h2>\";
                            _(\"test_status\").innerHTML = \"Test Completed\";
                            pos = 0;
                            correct = 0;
                            return false;
                        }
                        _(\"test_status\").innerHTML = \"Question \"+(pos+1)+\" of \"+questions.length;
                        question = questions[pos][0];
                        chA = questions[pos][1];
                        chB = questions[pos][2];
                        chC = questions[pos][3];
                        test.innerHTML = \"<h3>\"+question+\"</h3>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='A'> \"+chA+\"<br>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='B'> \"+chB+\"<br>\";
                        test.innerHTML += \"<input type='radio' name='choices' value='C'> \"+chC+\"<br><br>\";
                        test.innerHTML += \"<button onclick='checkAnswer()'>Submit Answer</button>\";
                    }
                    function checkAnswer(){
                        choices = document.getElementsByName(\"choices\");
                        for(var i=0; i<choices.length; i++){
                            if(choices[i].checked){
                                choice = choices[i].value;
                            }
                        }
                        if(choice == questions[pos][4]){
                            correct++;
                        }
                        pos++;
                        renderQuestion();
                    }
                    window.addEventListener(\"load\", renderQuestion, false);
                </script>
            </head>
            <body>
            <h2 id=\"test_status\"></h2>
            <div id=\"test\"></div>
            </body>
            </html>
</html>
    </section>
{% endblock %}", "JeuxBundle:Default:quiz.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\JeuxBundle/Resources/views/Default/quiz.html.twig");
    }
}
