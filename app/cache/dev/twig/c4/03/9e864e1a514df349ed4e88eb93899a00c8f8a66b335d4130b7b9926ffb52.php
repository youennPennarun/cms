<?php

/* CmsWebSiteBundle:WebSite/default/settings:imageList.html.twig */
class __TwigTemplate_c4039e864e1a514df349ed4e88eb93899a00c8f8a66b335d4130b7b9926ffb52 extends Twig_Template
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
        echo " <h1>Imga list</h1>
\t";
        // line 5
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "")) {
            // line 6
            echo "\t\t<ul>
\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["imgList"]) ? $context["imgList"] : $this->getContext($context, "imgList")));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 8
                echo "\t\t\t<li>
\t\t\t";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "path")), "html", null, true);
                echo "
\t\t\t\t<img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "path")), "html", null, true);
                echo "\" id=\"img-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "name"), "html", null, true);
                echo "
\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Uploads-browseImage", array("action" => "edit", "id" => $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"))), "html", null, true);
                echo "\" >edit</a>
\t\t\t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Uploads-browseImage", array("action" => "delete", "id" => $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"))), "html", null, true);
                echo "\" >delete</a>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</ul>
\t";
        }
        // line 17
        echo "\t

";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "\t<script   type=\"text/javascript\" >
\t\t
\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imgList"]) ? $context["imgList"] : $this->getContext($context, "imgList")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 25
            echo "\t\t\tvar img = \$('#img-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"), "html", null, true);
            echo "'); 
\t\t\t//or however you get a handle to the IMG
\t\t\tvar width = img.clientWidth;
\t\t\tvar height = img.clientHeight;

\t\t\tvar newWidth = 100;
\t\t\tvar newHeight = newWidth/width*height;

\t\t\timg.css({'width' : newWidth , newHeight : '700px'});
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/settings:imageList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  77 => 18,  65 => 8,  113 => 56,  90 => 4,  84 => 55,  58 => 32,  34 => 10,  114 => 34,  110 => 35,  104 => 8,  81 => 21,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 38,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 15,  63 => 12,  59 => 11,  38 => 6,  94 => 30,  89 => 24,  85 => 22,  75 => 17,  68 => 17,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 25,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 8,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 39,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 15,  69 => 7,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 6,  83 => 25,  74 => 17,  66 => 16,  55 => 6,  52 => 21,  50 => 10,  43 => 9,  41 => 21,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 37,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 64,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 7,  57 => 6,  54 => 10,  51 => 10,  48 => 4,  45 => 16,  42 => 9,  39 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
