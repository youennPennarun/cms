<?php

/* CmsWebSiteBundle:WebSite/default/settings:selectImage-wysiwyg.html.twig */
class __TwigTemplate_097c2f1addf8444ef2da4c6ff33ec439cb9408c49b40bf4ee1248db21081f470 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Select image</title>

\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" ></script>
\t<script type=\"text/javascript\">
\t";
        // line 10
        if (((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) == "imgVar")) {
            // line 11
            echo "\t\tfunction select_image(path) {
\t\t\tlocalStorage.setItem(\"path\",path);
\t\t\tlocalStorage.setItem(\"for\",localStorage.getItem(\"for\"));
\t\t\twindow.parent.opener.someFunctionToCallWhenPopUpCloses();
\t\t\tself.close();
\t\t}
\t";
        } else {
            // line 18
            echo "\t\tfunction select_image(path) {
\t\t\tvar CKEditorFuncNum = ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "get", array(0 => "CKEditorFuncNum"), "method"), "html", null, true);
            echo ";
\t\t\twindow.parent.opener.CKEDITOR.tools.callFunction( CKEditorFuncNum, path, '' );
\t\t\tself.close();
\t\t}
\t";
        }
        // line 24
        echo "\t</script>
\t

</head>
<body>
<h1>Imga list</h1>
\t\t<ul>
\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imgList"]) ? $context["imgList"] : $this->getContext($context, "imgList")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 32
            echo "\t\t\t<li>
\t\t\t\t<a href=\"javascript:select_image('";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "path"), "html", null, true);
            echo "');\">
\t\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "path")), "html", null, true);
            echo "\" id=\"img-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "name"), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</ul>

</body>
<script   type=\"text/javascript\" >
\t\t
\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imgList"]) ? $context["imgList"] : $this->getContext($context, "imgList")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 44
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
        // line 54
        echo "\t</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/settings:selectImage-wysiwyg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 44,  127 => 27,  76 => 17,  77 => 18,  65 => 32,  113 => 56,  90 => 4,  84 => 15,  58 => 32,  34 => 5,  114 => 54,  110 => 35,  104 => 8,  81 => 14,  53 => 12,  23 => 2,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 29,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 8,  67 => 16,  63 => 15,  59 => 14,  38 => 6,  94 => 30,  89 => 24,  85 => 22,  75 => 17,  68 => 33,  56 => 23,  87 => 25,  21 => 2,  26 => 3,  93 => 43,  88 => 17,  78 => 13,  46 => 9,  27 => 4,  44 => 19,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 32,  142 => 59,  138 => 39,  136 => 30,  121 => 46,  117 => 44,  105 => 40,  91 => 18,  62 => 23,  49 => 17,  24 => 3,  25 => 1,  19 => 1,  79 => 18,  72 => 34,  69 => 7,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 21,  96 => 6,  83 => 25,  74 => 9,  66 => 16,  55 => 12,  52 => 24,  50 => 10,  43 => 8,  41 => 18,  35 => 7,  32 => 11,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 33,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 44,  122 => 43,  116 => 57,  112 => 42,  109 => 26,  106 => 25,  103 => 24,  99 => 7,  95 => 20,  92 => 29,  86 => 38,  82 => 21,  80 => 19,  73 => 19,  64 => 17,  60 => 7,  57 => 6,  54 => 20,  51 => 19,  48 => 4,  45 => 16,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 10,);
    }
}
