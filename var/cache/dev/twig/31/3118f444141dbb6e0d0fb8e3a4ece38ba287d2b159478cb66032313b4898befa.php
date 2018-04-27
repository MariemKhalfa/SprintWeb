<?php

/* @Jeux/Default/memory.html.twig */
class __TwigTemplate_c41a323c674f8d6e05e24042f94899fc3d932c8aaad437133c8a0fbaef3fdb4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Jeux/Default/memory.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Jeux/Default/memory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Jeux/Default/memory.html.twig"));

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
                        <h2 class=\"title__line\">Jeux de Memoire pour enfants</h2>
                        <p>Les jeux de mémoire ne sont pas que pour les gens qui sont distraits ! Non, ils sont également super importants pour les enfants dont le cerveau grandit. Ils permettent en effet de faire travailler les méninges. </p>
                    </div>
                </div>
            </div>
<html>
<head>

    <style>
        div#memory_board{
            background:#3399ff;
            border:#999 1px solid;
            width:1350px;
            height:540px;
            padding:24px;
            margin:0px auto;
        }
        div#memory_board > div{
            background: url(tile_bg.jpg) no-repeat;
            border:#000 1px solid;
            width:30px;
            height:30px;
            float:left;
            margin:10px;
            padding:70px;
            font-size:30px;
            cursor:pointer;
            text-align:center;
        }
    </style>
    <script>

        var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
        var memory_values = [];
        var memory_tile_ids = [];
        var tiles_flipped = 0;
        Array.prototype.memory_tile_shuffle = function(){
            var i = this.length, j, temp;
            while(--i > 0){
                j = Math.floor(Math.random() * (i+1));
                temp = this[j];
                this[j] = this[i];
                this[i] = temp;
            }
        }
        function newBoard(){
            tiles_flipped = 0;
            var output = '';
            memory_array.memory_tile_shuffle();
            for(var i = 0; i < memory_array.length; i++){
                output += '<div id=\"tile_'+i+'\" onclick=\"memoryFlipTile(this,\\''+memory_array[i]+'\\')\"></div>';
            }
            document.getElementById('memory_board').innerHTML = output;
        }
        function memoryFlipTile(tile,val){
            if(tile.innerHTML == \"\" && memory_values.length < 2){
                tile.style.background = '#FFF';
                tile.innerHTML = val;
                if(memory_values.length == 0){
                    memory_values.push(val);
                    memory_tile_ids.push(tile.id);
                } else if(memory_values.length == 1){
                    memory_values.push(val);
                    memory_tile_ids.push(tile.id);
                    if(memory_values[0] == memory_values[1]){
                        tiles_flipped += 2;
                        // Clear both arrays
                        memory_values = [];
                        memory_tile_ids = [];
                        // Check to see if the whole board is cleared
                        if(tiles_flipped == memory_array.length){
                            alert(\"Board cleared... generating new board\");
                            document.getElementById('memory_board').innerHTML = \"\";
                            newBoard();
                        }
                    } else {
                        function flip2Back(){
                            // Flip the 2 tiles back over
                            var tile_1 = document.getElementById(memory_tile_ids[0]);
                            var tile_2 = document.getElementById(memory_tile_ids[1]);
                            tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_1.innerHTML = \"\";
                            tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_2.innerHTML = \"\";
                            // Clear both arrays
                            memory_values = [];
                            memory_tile_ids = [];
                        }
                        setTimeout(flip2Back, 700);
                    }
                }
            }
        }
    </script>

</head>
<body>
<div id=\"memory_board\"></div>
<script>newBoard();</script>
</body>
</html>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Jeux/Default/memory.html.twig";
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
                        <h2 class=\"title__line\">Jeux de Memoire pour enfants</h2>
                        <p>Les jeux de mémoire ne sont pas que pour les gens qui sont distraits ! Non, ils sont également super importants pour les enfants dont le cerveau grandit. Ils permettent en effet de faire travailler les méninges. </p>
                    </div>
                </div>
            </div>
<html>
<head>

    <style>
        div#memory_board{
            background:#3399ff;
            border:#999 1px solid;
            width:1350px;
            height:540px;
            padding:24px;
            margin:0px auto;
        }
        div#memory_board > div{
            background: url(tile_bg.jpg) no-repeat;
            border:#000 1px solid;
            width:30px;
            height:30px;
            float:left;
            margin:10px;
            padding:70px;
            font-size:30px;
            cursor:pointer;
            text-align:center;
        }
    </style>
    <script>

        var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
        var memory_values = [];
        var memory_tile_ids = [];
        var tiles_flipped = 0;
        Array.prototype.memory_tile_shuffle = function(){
            var i = this.length, j, temp;
            while(--i > 0){
                j = Math.floor(Math.random() * (i+1));
                temp = this[j];
                this[j] = this[i];
                this[i] = temp;
            }
        }
        function newBoard(){
            tiles_flipped = 0;
            var output = '';
            memory_array.memory_tile_shuffle();
            for(var i = 0; i < memory_array.length; i++){
                output += '<div id=\"tile_'+i+'\" onclick=\"memoryFlipTile(this,\\''+memory_array[i]+'\\')\"></div>';
            }
            document.getElementById('memory_board').innerHTML = output;
        }
        function memoryFlipTile(tile,val){
            if(tile.innerHTML == \"\" && memory_values.length < 2){
                tile.style.background = '#FFF';
                tile.innerHTML = val;
                if(memory_values.length == 0){
                    memory_values.push(val);
                    memory_tile_ids.push(tile.id);
                } else if(memory_values.length == 1){
                    memory_values.push(val);
                    memory_tile_ids.push(tile.id);
                    if(memory_values[0] == memory_values[1]){
                        tiles_flipped += 2;
                        // Clear both arrays
                        memory_values = [];
                        memory_tile_ids = [];
                        // Check to see if the whole board is cleared
                        if(tiles_flipped == memory_array.length){
                            alert(\"Board cleared... generating new board\");
                            document.getElementById('memory_board').innerHTML = \"\";
                            newBoard();
                        }
                    } else {
                        function flip2Back(){
                            // Flip the 2 tiles back over
                            var tile_1 = document.getElementById(memory_tile_ids[0]);
                            var tile_2 = document.getElementById(memory_tile_ids[1]);
                            tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_1.innerHTML = \"\";
                            tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
                            tile_2.innerHTML = \"\";
                            // Clear both arrays
                            memory_values = [];
                            memory_tile_ids = [];
                        }
                        setTimeout(flip2Back, 700);
                    }
                }
            }
        }
    </script>

</head>
<body>
<div id=\"memory_board\"></div>
<script>newBoard();</script>
</body>
</html>
    </section>
{% endblock %}", "@Jeux/Default/memory.html.twig", "C:\\xampp\\htdocs\\SprintWeb\\src\\JeuxBundle\\Resources\\views\\Default\\memory.html.twig");
    }
}
