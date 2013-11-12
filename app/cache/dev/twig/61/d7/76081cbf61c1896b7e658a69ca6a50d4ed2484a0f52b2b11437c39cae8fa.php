<?php

/* CmsWebSiteBundle:WebSite/default/pages:index.html.twig */
class __TwigTemplate_61d776081cbf61c1896b7e658a69ca6a50d4ed2484a0f52b2b11437c39cae8fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 <!-- tr -->
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t
  </head>
  <body>
\t<div id=\"header\">
\t\t<div id=\"mainTitle\">Youenn PENNARUN</div>
\t\t<div id=\"subtitle\">quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis.</div>
\t</div>
\t<div id=\"separator-aoi\"></div>
\t<div id = \"block\">
\t\t<div id=\"content\">
\t\t\t<p>
\t\t\tHaec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est,
\t\t\tnon satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse deterritum.

\t\t\tQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito,
\t\t\teo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.

\t\t\tDumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes,
\t\t\tHerculanus advenit protector domesticus,Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti.
\t\t\tquo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.
\t\t\t  <br>
\t\t\t  <br>
\t\t\t  <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("Index");
        echo "\">test</a>
\t\t\t</p>
\t\t</div>
\t</div>
\t<div id=\"separator-beach-storm\"></div>
\t<div id = \"block\" class=\"b2\">
\t\t<div id=\"content\">
\t\t\t<p>
\t\t\tHaec igitur Epicuri non probo, inquam. De cetero vellem equidem aut ipse doctrinis fuisset instructior est enim, quod tibi ita videri necesse est,
\t\t\tnon satis politus iis artibus, quas qui tenent, eruditi appellantur aut ne deterruisset alios a studiis. quamquam te quidem video minime esse deterritum.

\t\t\tQuid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito,
\t\t\teo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.

\t\t\tDumque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes,
\t\t\tHerculanus advenit protector domesticus,Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti.
\t\t\tquo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.
\t\t\t  <br>
\t\t\t  <br>
\t\t\t</p>
\t\t</div>
\t</div>
  </body>
\t";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Youenn PENNARUN -Portfolio";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mainCss.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/separators.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cssEditor.js"), "html", null, true);
        echo "\"></script>
\t
\t<script>
\tsetBgColor(\"#block\",\"#F38630\");
\tsetBgColor(\"#block.b2\",\"#69D2E7\");
\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 56,  90 => 4,  84 => 55,  58 => 32,  34 => 10,  114 => 34,  110 => 55,  104 => 8,  81 => 21,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 30,  89 => 20,  85 => 25,  75 => 17,  68 => 17,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 39,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 8,  69 => 7,  47 => 10,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 6,  83 => 25,  74 => 18,  66 => 16,  55 => 6,  52 => 21,  50 => 10,  43 => 9,  41 => 21,  35 => 7,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 37,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 64,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 10,  51 => 5,  48 => 4,  45 => 17,  42 => 9,  39 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
