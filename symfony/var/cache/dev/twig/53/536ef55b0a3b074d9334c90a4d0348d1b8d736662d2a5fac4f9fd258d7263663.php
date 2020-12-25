<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* FrontEnd/hello.html.twig */
class __TwigTemplate_76dfa3b0a21d9c60268d41265098e954381f0388254d38ccf08d887d7f824050 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FrontEnd/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontEnd/hello.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontEnd/hello.html.twig"));

        $this->parent = $this->loadTemplate("FrontEnd/base.html.twig", "FrontEnd/hello.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>Hello
\t\t";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "!</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-md-5 bg-info rounded p-2\">

\t\t\t\t<p class=\"btn btn-primary m-1\" onclick=\"moduleDetailes(1)\">Module1 Add h1 Text .</p>
\t\t\t\t<input id=\"module1\" type=\"text\" placeholder=\"Module 1\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(1);\"/>
\t\t\t\t<p class=\"btn btn-success m-1\" onclick=\"moduleDetailes(2)\">Module2 Add p Text</p>
\t\t\t\t<input id=\"module2\" type=\"text\" placeholder=\"Module 2\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(2);\"/>
\t\t\t\t<p class=\"btn btn-dark m-1\" onclick=\"moduleDetailes(3)\">Module3 Add li Text</p>
\t\t\t\t<input id=\"module3\" type=\"text\" placeholder=\"Module 3\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(3);\"/>

\t\t\t</div>
\t\t\t<div class=\"col-md-5 bg-success rounded\" style=\"minheight: 250px\" id=\"phone\"></div>
\t\t</div>

\t\t<html>
\t\t\t<head>
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/vue/dist/vue.js\"></script>
\t\t\t\t<style>
\t\t\t\t\t.droptarget {
\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\twidth: 100px;
\t\t\t\t\t\theight: 35px;
\t\t\t\t\t\tmargin: 15px;
\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\tborder: 1px solid #aaaaaa;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t</head>
\t\t</html>
\t</style>
</head>
<body>
\t<div id=\"app\">
\t\t<p>Drag the p element back and forth between the two rectangles:</p>
\t\t<div class=\"droptarget\" v-on:drop=\"drop\" v-on:dragover=\"allowDrop\">
\t\t\t<p v-on:dragstart=\"dragStart\" v-on:drag=\"dragging\" draggable=\"true\" id=\"dragtarget\">
\t\t\t\tDrag me!
\t\t\t</p>
\t\t</div>

\t\t<div class=\"droptarget\" v-on:drop=\"drop\" v-on:dragover=\"allowDrop\"></div>

\t\t<p style=\"clear:both;\">
\t\t\t<strong>Note:</strong>
\t\t\tdrag events are not supported in Internet
\t\t\t            Explorer 8 and earlier versions or Safari 5.1 and earlier versions.
\t\t</p>

\t\t<p id=\"demo\"></p>
\t</div>
\t<script>
\t\tvar app = new Vue({
el: \"#app\",

methods: {
dragStart: function (event) {
event.dataTransfer.setData(\"Text\", event.target.id);
},
dragging: function (event) {
document.getElementById(\"demo\").innerHTML = \"The p element is being dragged\";
},
allowDrop: function (event) {
event.preventDefault();
},
drop: function (event) {
event.preventDefault();
var data = event.dataTransfer.getData(\"Text\");
event.target.appendChild(document.getElementById(data));
document.getElementById(\"demo\").innerHTML = \"The p element was dropped\";
}

}
});
\t</script>
</body></html><script>
import draggable from \"@/vuedraggable\";
export default {
name: \"two-lists\",
display: \"Two Lists\",
order: 1,
components: {
draggable
},
data() {
return {
list1: [
{
name: \"John\",
id: 1
}, {
name: \"Joao\",
id: 2
}, {
name: \"Jean\",
id: 3
}, {
name: \"Gerard\",
id: 4
}
],
list2: [
{
name: \"Juan\",
id: 5
}, {
name: \"Edgard\",
id: 6
}, {
name: \"Johnson\",
id: 7
}
]
};
},
methods: {
add: function () {
this.list.push({name: \"Juan\"});
},
replace: function () {
this.list = [{
name: \"Edgard\"
}];
},
clone: function (el) {
return {
name: el.name + \" cloned\"
};
},
log: function (evt) {
window.console.log(evt);
}
}
};</script><script src=\"./js/module.js\"></script><script src=\"//cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.min.js\"></script><!-- CDNJS :: Sortable (https://cdnjs.com/) --><script src=\"//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js\"></script><!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) --><script src=\"//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FrontEnd/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontEnd/base.html.twig' %}

{% block body %}
\t<h1>Hello
\t\t{{ name }}!</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-between\">
\t\t\t<div class=\"col-md-5 bg-info rounded p-2\">

\t\t\t\t<p class=\"btn btn-primary m-1\" onclick=\"moduleDetailes(1)\">Module1 Add h1 Text .</p>
\t\t\t\t<input id=\"module1\" type=\"text\" placeholder=\"Module 1\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(1);\"/>
\t\t\t\t<p class=\"btn btn-success m-1\" onclick=\"moduleDetailes(2)\">Module2 Add p Text</p>
\t\t\t\t<input id=\"module2\" type=\"text\" placeholder=\"Module 2\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(2);\"/>
\t\t\t\t<p class=\"btn btn-dark m-1\" onclick=\"moduleDetailes(3)\">Module3 Add li Text</p>
\t\t\t\t<input id=\"module3\" type=\"text\" placeholder=\"Module 3\" class=\"form-control\" style=\"display:none;\" onkeyup=\"addModule(3);\"/>

\t\t\t</div>
\t\t\t<div class=\"col-md-5 bg-success rounded\" style=\"minheight: 250px\" id=\"phone\"></div>
\t\t</div>

\t\t<html>
\t\t\t<head>
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/vue/dist/vue.js\"></script>
\t\t\t\t<style>
\t\t\t\t\t.droptarget {
\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\twidth: 100px;
\t\t\t\t\t\theight: 35px;
\t\t\t\t\t\tmargin: 15px;
\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\tborder: 1px solid #aaaaaa;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t</head>
\t\t</html>
\t</style>
</head>
<body>
\t<div id=\"app\">
\t\t<p>Drag the p element back and forth between the two rectangles:</p>
\t\t<div class=\"droptarget\" v-on:drop=\"drop\" v-on:dragover=\"allowDrop\">
\t\t\t<p v-on:dragstart=\"dragStart\" v-on:drag=\"dragging\" draggable=\"true\" id=\"dragtarget\">
\t\t\t\tDrag me!
\t\t\t</p>
\t\t</div>

\t\t<div class=\"droptarget\" v-on:drop=\"drop\" v-on:dragover=\"allowDrop\"></div>

\t\t<p style=\"clear:both;\">
\t\t\t<strong>Note:</strong>
\t\t\tdrag events are not supported in Internet
\t\t\t            Explorer 8 and earlier versions or Safari 5.1 and earlier versions.
\t\t</p>

\t\t<p id=\"demo\"></p>
\t</div>
\t<script>
\t\tvar app = new Vue({
el: \"#app\",

methods: {
dragStart: function (event) {
event.dataTransfer.setData(\"Text\", event.target.id);
},
dragging: function (event) {
document.getElementById(\"demo\").innerHTML = \"The p element is being dragged\";
},
allowDrop: function (event) {
event.preventDefault();
},
drop: function (event) {
event.preventDefault();
var data = event.dataTransfer.getData(\"Text\");
event.target.appendChild(document.getElementById(data));
document.getElementById(\"demo\").innerHTML = \"The p element was dropped\";
}

}
});
\t</script>
</body></html><script>
import draggable from \"@/vuedraggable\";
export default {
name: \"two-lists\",
display: \"Two Lists\",
order: 1,
components: {
draggable
},
data() {
return {
list1: [
{
name: \"John\",
id: 1
}, {
name: \"Joao\",
id: 2
}, {
name: \"Jean\",
id: 3
}, {
name: \"Gerard\",
id: 4
}
],
list2: [
{
name: \"Juan\",
id: 5
}, {
name: \"Edgard\",
id: 6
}, {
name: \"Johnson\",
id: 7
}
]
};
},
methods: {
add: function () {
this.list.push({name: \"Juan\"});
},
replace: function () {
this.list = [{
name: \"Edgard\"
}];
},
clone: function (el) {
return {
name: el.name + \" cloned\"
};
},
log: function (evt) {
window.console.log(evt);
}
}
};</script><script src=\"./js/module.js\"></script><script src=\"//cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.min.js\"></script><!-- CDNJS :: Sortable (https://cdnjs.com/) --><script src=\"//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js\"></script><!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) --><script src=\"//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js\"></script>{% endblock %}
", "FrontEnd/hello.html.twig", "/var/www/symfony/templates/FrontEnd/hello.html.twig");
    }
}
