<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_df3c923f0ea35f6e4ad7dae6359fb27a7ad3bab4477bf8ed12cd4b3ce4b4f04b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  253 => 100,  222 => 83,  210 => 77,  184 => 63,  170 => 56,  155 => 47,  152 => 46,  363 => 153,  357 => 123,  353 => 149,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  231 => 83,  212 => 78,  174 => 65,  175 => 58,  161 => 63,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  172 => 57,  165 => 60,  150 => 55,  134 => 39,  70 => 15,  286 => 112,  280 => 94,  272 => 90,  263 => 95,  259 => 103,  255 => 101,  250 => 84,  245 => 83,  234 => 80,  232 => 88,  223 => 76,  218 => 74,  202 => 77,  198 => 68,  195 => 67,  190 => 76,  178 => 59,  160 => 48,  153 => 56,  126 => 36,  118 => 49,  97 => 34,  127 => 35,  76 => 17,  77 => 18,  65 => 32,  113 => 48,  90 => 20,  84 => 24,  58 => 14,  34 => 5,  114 => 33,  110 => 35,  104 => 32,  81 => 23,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 89,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 73,  177 => 65,  169 => 60,  140 => 58,  132 => 38,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 81,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 71,  179 => 69,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 24,  71 => 18,  67 => 14,  63 => 18,  59 => 16,  38 => 7,  94 => 21,  89 => 24,  85 => 24,  75 => 19,  68 => 33,  56 => 13,  87 => 34,  21 => 2,  26 => 3,  93 => 26,  88 => 25,  78 => 13,  46 => 13,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 39,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 14,  49 => 14,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 6,  37 => 7,  22 => 2,  246 => 96,  157 => 47,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 36,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 9,  66 => 16,  55 => 9,  52 => 12,  50 => 11,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 2,  209 => 72,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 75,  182 => 66,  176 => 63,  173 => 52,  168 => 61,  164 => 49,  162 => 59,  154 => 60,  149 => 51,  147 => 43,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 25,  103 => 24,  99 => 23,  95 => 27,  92 => 27,  86 => 38,  82 => 19,  80 => 27,  73 => 16,  64 => 23,  60 => 15,  57 => 14,  54 => 12,  51 => 13,  48 => 12,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
