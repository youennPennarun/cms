<?php

/* CmsWebSiteBundle:WebSite/default/settings:uploadImage.html.twig */
class __TwigTemplate_f6a454b75a8f39b598eca0f1be31b7d2a012a9f418bfba825b02ca09081b294c extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t <h1>Upload images</h1>
\t<form method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), 'widget', array("full_name" => "form[images][]"));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t</form>
\t";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "\t";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/settings:uploadImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  286 => 95,  280 => 94,  272 => 90,  263 => 87,  259 => 86,  255 => 85,  250 => 84,  245 => 83,  234 => 80,  232 => 79,  223 => 76,  218 => 74,  202 => 70,  198 => 68,  195 => 67,  190 => 64,  178 => 55,  160 => 48,  153 => 46,  126 => 36,  118 => 34,  97 => 34,  127 => 27,  76 => 20,  77 => 18,  65 => 32,  113 => 56,  90 => 4,  84 => 15,  58 => 32,  34 => 5,  114 => 33,  110 => 35,  104 => 8,  81 => 21,  53 => 11,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 93,  268 => 89,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 73,  177 => 65,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 82,  240 => 81,  238 => 85,  235 => 74,  230 => 82,  227 => 77,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 42,  135 => 53,  119 => 42,  102 => 29,  71 => 18,  67 => 17,  63 => 15,  59 => 15,  38 => 8,  94 => 30,  89 => 24,  85 => 24,  75 => 19,  68 => 33,  56 => 13,  87 => 25,  21 => 2,  26 => 3,  93 => 26,  88 => 23,  78 => 13,  46 => 10,  27 => 4,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 32,  142 => 59,  138 => 39,  136 => 30,  121 => 46,  117 => 44,  105 => 30,  91 => 18,  62 => 14,  49 => 10,  24 => 3,  25 => 1,  19 => 1,  79 => 20,  72 => 34,  69 => 18,  47 => 10,  40 => 6,  37 => 7,  22 => 2,  246 => 90,  157 => 47,  145 => 46,  139 => 40,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 28,  96 => 6,  83 => 25,  74 => 9,  66 => 16,  55 => 12,  52 => 24,  50 => 11,  43 => 9,  41 => 10,  35 => 4,  32 => 3,  29 => 2,  209 => 72,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 52,  168 => 72,  164 => 49,  162 => 57,  154 => 33,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 37,  125 => 44,  122 => 35,  116 => 57,  112 => 42,  109 => 31,  106 => 25,  103 => 24,  99 => 7,  95 => 27,  92 => 31,  86 => 38,  82 => 21,  80 => 22,  73 => 19,  64 => 17,  60 => 15,  57 => 14,  54 => 12,  51 => 11,  48 => 12,  45 => 9,  42 => 8,  39 => 9,  36 => 6,  33 => 4,  30 => 10,);
    }
}
