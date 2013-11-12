<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_627633078b97a7e30656bdcae81dc20c8df06160469f18d6e6b66af27f1a43e9 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  161 => 63,  100 => 39,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  172 => 64,  165 => 60,  150 => 55,  134 => 54,  70 => 19,  286 => 112,  280 => 94,  272 => 90,  263 => 87,  259 => 86,  255 => 85,  250 => 84,  245 => 83,  234 => 80,  232 => 79,  223 => 76,  218 => 74,  202 => 70,  198 => 68,  195 => 67,  190 => 64,  178 => 66,  160 => 48,  153 => 56,  126 => 36,  118 => 49,  97 => 34,  127 => 27,  76 => 31,  77 => 18,  65 => 32,  113 => 48,  90 => 27,  84 => 24,  58 => 32,  34 => 5,  114 => 33,  110 => 35,  104 => 8,  81 => 23,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 89,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 73,  177 => 65,  169 => 60,  140 => 58,  132 => 38,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 82,  240 => 81,  238 => 85,  235 => 74,  230 => 82,  227 => 77,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 71,  179 => 69,  159 => 61,  143 => 42,  135 => 53,  119 => 40,  102 => 40,  71 => 18,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 30,  89 => 24,  85 => 24,  75 => 19,  68 => 33,  56 => 13,  87 => 34,  21 => 2,  26 => 3,  93 => 26,  88 => 23,  78 => 13,  46 => 13,  27 => 3,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 57,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 39,  136 => 30,  121 => 50,  117 => 44,  105 => 34,  91 => 18,  62 => 14,  49 => 14,  24 => 3,  25 => 1,  19 => 1,  79 => 20,  72 => 34,  69 => 18,  47 => 10,  40 => 6,  37 => 7,  22 => 2,  246 => 93,  157 => 47,  145 => 46,  139 => 40,  131 => 52,  123 => 42,  120 => 40,  115 => 43,  111 => 47,  108 => 36,  101 => 32,  98 => 28,  96 => 37,  83 => 33,  74 => 9,  66 => 16,  55 => 16,  52 => 24,  50 => 11,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 2,  209 => 72,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 52,  168 => 61,  164 => 49,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 35,  116 => 39,  112 => 42,  109 => 31,  106 => 25,  103 => 24,  99 => 31,  95 => 27,  92 => 31,  86 => 38,  82 => 21,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 14,  54 => 12,  51 => 11,  48 => 12,  45 => 10,  42 => 8,  39 => 9,  36 => 6,  33 => 4,  30 => 3,);
    }
}
