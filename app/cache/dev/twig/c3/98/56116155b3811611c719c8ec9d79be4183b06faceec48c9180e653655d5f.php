<?php

/* CmsWebSiteBundle:WebSite/default/settings:newPage.html.twig */
class __TwigTemplate_c39856116155b3811611c719c8ec9d79be4183b06faceec48c9180e653655d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::settings.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "\t<h1 class=\"editable\">bla</h1>
\t<form method=\"POST\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<ul>
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "varList"));
        foreach ($context['_seq'] as $context["_key"] => $context["var"]) {
            // line 8
            echo "\t\t<li>
\t\t\t";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), 'row');
            echo "
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>
\t
\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row');
        echo "
\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preview"), 'row');
        echo "
\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/settings:newPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 27,  76 => 17,  77 => 18,  65 => 4,  113 => 56,  90 => 4,  84 => 15,  58 => 32,  34 => 5,  114 => 34,  110 => 35,  104 => 8,  81 => 14,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 29,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 8,  67 => 16,  63 => 15,  59 => 14,  38 => 6,  94 => 30,  89 => 24,  85 => 22,  75 => 17,  68 => 17,  56 => 23,  87 => 25,  21 => 2,  26 => 3,  93 => 25,  88 => 17,  78 => 13,  46 => 9,  27 => 4,  44 => 13,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 32,  142 => 59,  138 => 39,  136 => 30,  121 => 46,  117 => 44,  105 => 40,  91 => 18,  62 => 23,  49 => 17,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 15,  69 => 7,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 21,  96 => 6,  83 => 25,  74 => 9,  66 => 16,  55 => 12,  52 => 21,  50 => 10,  43 => 8,  41 => 21,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 33,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 26,  106 => 25,  103 => 24,  99 => 7,  95 => 20,  92 => 29,  86 => 64,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 7,  57 => 6,  54 => 20,  51 => 19,  48 => 4,  45 => 16,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 5,);
    }
}
