<?php

/* CmsWebSiteBundle:WebSite/default/settings/templates:initTemplate.html.twig */
class __TwigTemplate_96b4197a89fbc979d306e3f94accd89b1e574d84df5590c908122890835d146a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::settings.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::settings.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <p>get template<p>
\t

  <form method=\"POST\"  enctype=\"multipart/form-data\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"), 'label');
        echo "
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"), 'errors');
        echo "
\t\t
\t\t";
        // line 12
        $context["i"] = 0;
        // line 13
        echo "\t\t<ul>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["assetsField"]) {
            // line 15
            echo "\t\t\t<li>
\t\t\t\t";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assets"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assets"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["assetsField"]) ? $context["assetsField"] : $this->getContext($context, "assetsField")), 'errors');
            echo "
\t\t\t\t";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["assetsField"]) ? $context["assetsField"] : $this->getContext($context, "assetsField")), 'widget');
            echo "
\t\t\t\t";
            // line 20
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 21
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assetsField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</ul>
\t\t<hr>
\t\t<br>
\t\t";
        // line 26
        $context["i"] = 0;
        // line 27
        echo "\t\t<ul>
\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 29
            echo "\t\t\t<li>
\t\t\t\t";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t is variable : 
\t\t\t\t";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesIsVar"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesIsVar"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'errors');
            echo "
\t\t\t\t";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'widget');
            echo "
\t\t\t\t";
            // line 37
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 38
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</ul>
\t\t<hr>
\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"), 'label');
        echo "
\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"), 'errors');
        echo "

\t\t<ul>
\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"));
        foreach ($context['_seq'] as $context["_key"] => $context["varField"]) {
            // line 47
            echo "\t\t\t<li>
\t\t\t\t";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varField"]) ? $context["varField"] : $this->getContext($context, "varField")), 'errors');
            echo "
\t\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varField"]) ? $context["varField"] : $this->getContext($context, "varField")), 'widget');
            echo "
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t</ul>
\t\t
\t\t
\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
\t\t<hr>
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<hr>
\t</form>

";
        // line 64
        echo "\t\t
";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "\t<script>
\t\$(document).ready(function(){
\t\t";
        // line 70
        $context["i"] = 0;
        // line 71
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 72
            echo "\t\t\tif (\$(\"#form_imagesIsVar_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('checked')){
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t\t\$(\"#form_images_";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t}else{
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t\t\$(\"#form_images_";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t}
\t\t\t";
            // line 79
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 80
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t
\t\t";
        // line 82
        $context["i"] = 0;
        // line 83
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 84
            echo "\t\t\$(\"#form_imagesIsVar_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").change(function(){
\t\t\tif (\$(\"#form_imagesIsVar_";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('checked')){
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t\t\$(\"#form_images_";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t}else{
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t\t\$(\"#form_images_";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t}
\t\t});
\t\t\t";
            // line 93
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 94
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/settings/templates:initTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 95,  280 => 94,  272 => 90,  263 => 87,  259 => 86,  255 => 85,  250 => 84,  245 => 83,  234 => 80,  232 => 79,  223 => 76,  218 => 74,  202 => 70,  198 => 68,  195 => 67,  190 => 64,  178 => 55,  160 => 48,  153 => 46,  126 => 36,  118 => 34,  97 => 34,  127 => 27,  76 => 20,  77 => 18,  65 => 32,  113 => 56,  90 => 4,  84 => 15,  58 => 32,  34 => 5,  114 => 33,  110 => 35,  104 => 8,  81 => 21,  53 => 13,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 93,  268 => 89,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 73,  177 => 65,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 82,  240 => 81,  238 => 85,  235 => 74,  230 => 82,  227 => 77,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 42,  135 => 53,  119 => 42,  102 => 29,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  38 => 8,  94 => 30,  89 => 24,  85 => 24,  75 => 19,  68 => 33,  56 => 14,  87 => 25,  21 => 2,  26 => 3,  93 => 26,  88 => 23,  78 => 13,  46 => 10,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 32,  142 => 59,  138 => 39,  136 => 30,  121 => 46,  117 => 44,  105 => 30,  91 => 18,  62 => 23,  49 => 17,  24 => 3,  25 => 1,  19 => 1,  79 => 20,  72 => 34,  69 => 18,  47 => 10,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 47,  145 => 46,  139 => 40,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 28,  96 => 6,  83 => 25,  74 => 9,  66 => 16,  55 => 14,  52 => 24,  50 => 10,  43 => 8,  41 => 10,  35 => 7,  32 => 4,  29 => 3,  209 => 72,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 52,  168 => 72,  164 => 49,  162 => 57,  154 => 33,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 37,  125 => 44,  122 => 35,  116 => 57,  112 => 42,  109 => 31,  106 => 25,  103 => 24,  99 => 7,  95 => 27,  92 => 31,  86 => 38,  82 => 21,  80 => 22,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 20,  51 => 12,  48 => 12,  45 => 9,  42 => 9,  39 => 9,  36 => 6,  33 => 4,  30 => 10,);
    }
}
