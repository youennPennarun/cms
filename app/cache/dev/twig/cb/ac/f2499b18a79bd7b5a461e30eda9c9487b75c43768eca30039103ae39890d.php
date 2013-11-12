<?php

/* ::settings.html.twig */
class __TwigTemplate_cbacf2499b18a79bd7b5a461e30eda9c9487b75c43768eca30039103ae39890d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'includes' => array($this, 'block_includes'),
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
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" ></script>
  <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
  <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t
  </head>
  <body>
\t";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo "\t
\t";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "  </body>
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "\t
\t";
        // line 24
        $this->displayBlock('includes', $context, $blocks);
        // line 34
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Youenn PENNARUN -Portfolio";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
        $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig")->display($context);
        // line 15
        echo "\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t
\t";
    }

    // line 24
    public function block_includes($context, array $blocks = array())
    {
        // line 25
        echo "\t";
        if (array_key_exists("includesPath", $context)) {
            // line 26
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["includesPath"]) ? $context["includesPath"] : $this->getContext($context, "includesPath")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["include"]) {
                // line 27
                echo "\t\t\t<li>
\t\t\t\t";
                // line 28
                $context["path"] = ("CmsWebSiteBundle:WebSite:" . (isset($context["include"]) ? $context["include"] : $this->getContext($context, "include")));
                // line 29
                echo "\t\t\t\t";
                $template = $this->env->resolveTemplate((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")));
                $template->display($context);
                // line 30
                echo "\t\t\t</li>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['include'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t";
        }
        // line 33
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::settings.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 27,  76 => 17,  77 => 18,  65 => 4,  113 => 56,  90 => 4,  84 => 15,  58 => 32,  34 => 10,  114 => 34,  110 => 35,  104 => 8,  81 => 14,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 29,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 8,  67 => 15,  63 => 12,  59 => 24,  38 => 6,  94 => 30,  89 => 24,  85 => 22,  75 => 17,  68 => 17,  56 => 23,  87 => 25,  21 => 2,  26 => 6,  93 => 25,  88 => 17,  78 => 13,  46 => 16,  27 => 4,  44 => 13,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 32,  142 => 59,  138 => 39,  136 => 30,  121 => 46,  117 => 44,  105 => 40,  91 => 18,  62 => 23,  49 => 17,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 15,  69 => 7,  47 => 9,  40 => 7,  37 => 8,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 21,  96 => 6,  83 => 25,  74 => 9,  66 => 16,  55 => 6,  52 => 21,  50 => 10,  43 => 9,  41 => 21,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 33,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 26,  106 => 25,  103 => 24,  99 => 7,  95 => 20,  92 => 29,  86 => 64,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 7,  57 => 6,  54 => 20,  51 => 19,  48 => 4,  45 => 16,  42 => 9,  39 => 10,  36 => 6,  33 => 4,  30 => 4,);
    }
}
