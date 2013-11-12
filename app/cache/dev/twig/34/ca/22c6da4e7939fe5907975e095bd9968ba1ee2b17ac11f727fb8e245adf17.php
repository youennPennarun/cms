<?php

/* CmsWebSiteBundle:WebSite/default/includes:newPageForm.html.twig */
class __TwigTemplate_34ca22c6da4e7939fe5907975e095bd9968ba1ee2b17ac11f727fb8e245adf17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            echo "\t
\t<form method=\"POST\" ";
            // line 3
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " id=\"form\">
\t";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageName"), 'row');
            echo "
\t";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preview"), 'row');
            echo "
\t";
            // line 6
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row', array("id" => "saveButton"));
            echo "
\t<div style=\"display: none;\">
\t\t<div id=\"var\">
\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "varList"));
            foreach ($context['_seq'] as $context["_key"] => $context["varForm"]) {
                // line 10
                echo "\t\t\t-<br>
\t\t\t<p>bla";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</p>
\t\t\t";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'label');
                echo "
\t\t\t";
                // line 13
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'errors');
                echo "
\t\t\t";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'widget', array("id" => ("form-" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "class" => "variable"));
                echo "
\t\t\t--<br>
\t\t\t";
                // line 16
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 17
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\talert(\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\");
\t\t</div>
\t</div>\t
\t\t";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
\t</form>
\t<script>
\t\$(document).ready(function(){
\t\t\$( \"a\" ).click(function( event ) {
\t\t  event.preventDefault();
\t\t});
\t\t\$(\"#form\").submit(function(){
\t\t\t";
            // line 29
            $context["i"] = 0;
            // line 30
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "varList"));
            foreach ($context['_seq'] as $context["_key"] => $context["varForm"]) {
                // line 31
                echo "\t\t\t\tif(\$(\"#val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").attr(\"class\") == \"ckeditor\"){
\t\t\t\t\t\$(\"#form-";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").val(CKEDITOR.instances['val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "'].getData());
\t\t\t\t}else if(\$(\"#[cmsId = 'val-";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"cmsClass\") == \"editable-img\"){
\t\t\t\t\t\$(\"#form-";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").val(\"<img src=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"src\")+\" id=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"id\")+\" class=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"class\")+\" width=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"width\")+\" height=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"height\")+\" >\");
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t";
                // line 37
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 38
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/includes:newPageForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 33,  104 => 32,  81 => 21,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 30,  89 => 20,  85 => 25,  75 => 17,  68 => 17,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 21,  46 => 10,  27 => 2,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 39,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 8,  69 => 7,  47 => 10,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 18,  66 => 16,  55 => 6,  52 => 21,  50 => 10,  43 => 9,  41 => 21,  35 => 7,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 37,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 10,  51 => 5,  48 => 4,  45 => 17,  42 => 9,  39 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
