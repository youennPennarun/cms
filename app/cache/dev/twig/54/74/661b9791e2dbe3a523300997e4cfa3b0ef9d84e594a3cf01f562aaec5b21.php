<?php

/* CmsWebSiteBundle:WebSite/default/includes:includes.html.twig */
class __TwigTemplate_5474661b9791e2dbe3a523300997e4cfa3b0ef9d84e594a3cf01f562aaec5b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'includes' => array($this, 'block_includes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t";
        $this->displayBlock('includes', $context, $blocks);
    }

    public function block_includes($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        if (array_key_exists("includesPath", $context)) {
            // line 3
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
                // line 4
                echo "\t\t\t\t";
                $context["path"] = ("CmsWebSiteBundle:WebSite:" . (isset($context["include"]) ? $context["include"] : $this->getContext($context, "include")));
                // line 5
                echo "\t\t\t\t";
                $template = $this->env->resolveTemplate((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")));
                $template->display($context);
                // line 6
                echo "\t\t";
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
            // line 7
            echo "\t";
        }
        // line 8
        echo "\t<script src=\"http://www.google.com/jsapi\"></script>
\t<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/base/jquery-ui.css\" />
\t<script>
\tgoogle.load(\"jquery\", \"1.3.2\");
\tgoogle.load(\"jqueryui\", \"1.7.2\");\t
\t\$(document).ready(function(){
\t\t\tlocalStorage.removeItem(\"for\");
\t\t\tlocalStorage.removeItem(\"path\");
\t\t\t\$(\"[ cmsClass='editable-img']\").click(function(){
\t\t\t\tlocalStorage.setItem(\"for\",\$(this).attr(\"cmsId\"));
\t\t\t\tlocalStorage.setItem(\"path\",\$(this).attr(\"src\"));
\t\t\t\tsetImage();
\t\t\t\t
\t\t\t});
\t\t}); 
\tfunction openBrowser(){
\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").attr(\"src\",localStorage.getItem(\"path\"));
\t\tvar left  = (\$(window).width()/2)-(900/2),
\t\t\t\t\ttop   = (\$(window).height()/2)-(600/2),
\t\t\t\t\tpopUp = window.open(\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("Uploads-selectImage-wysiwyg", array("from" => "imgVar"));
        echo "\", \"select image\", \"width=900, height=600, top=\"+top+\", left=\"+left);
\t}
\t
\t
\tfunction someFunctionToCallWhenPopUpCloses() {setImage();}
\t\tfunction setImage() {
\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").attr(\"src\",localStorage.getItem(\"path\"));
\t\t\t\tvar imgWidth = \$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").width();
\t\t\t\tvar imgHeight = \$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").height();
\t\t\t\tvar imgSrc = \$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").attr(\"src\");
\t\t\t\tvar str = \t'<div id=\"dialog\" title=\"Image settings\">'+
\t\t\t\t\t\t\t'<fieldset>'+
\t\t\t\t\t\t\t'\t<label for=\"url\">url</label>'+
\t\t\t\t\t\t\t'\t<input type=\"text\" name=\"url\" id=\"url\" class=\"text ui-widget-content ui-corner-all\" value=\"'+imgSrc+'\"/>'+
\t\t\t\t\t\t\t'\t<button name=\"browse\" id=\"browseImg\" class=\"text ui-widget-content ui-corner-all\">browse images</button>'+
\t\t\t\t\t\t\t'\t<label for=\"width\">width</label>'+
\t\t\t\t\t\t\t'\t<input type=\"text\" name=\"width\" id=\"width\" class=\"text ui-widget-content ui-corner-all\" value=\"'+imgWidth+'\"/>'+
\t\t\t\t\t\t\t'\t<label for=\"height\">height</label>'+
\t\t\t\t\t\t\t'\t<input type=\"text\" name=\"height\" id=\"height\" class=\"text ui-widget-content ui-corner-all\" value=\"'+imgHeight+'\"/>'+
\t\t\t\t\t\t\t'</fieldset>'+
\t\t\t\t\t\t\t'</div>';
\t\t\t\t\$(\"body\").append(str);
\t\t\t\t\$(\"#width\").bind(\"change paste keyup\", function() {
\t\t\t\t\timgWidth = parseFloat(\$(this).val());
\t\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").width(imgWidth);
\t\t\t\t});
\t\t\t\t\$(\"#height\").bind(\"change paste keyup\", function() {
\t\t\t\t\timgHeight = parseFloat(\$(this).val());
\t\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").height(imgHeight);
\t\t\t\t});
\t\t\t\t\$(\"#browseImg\").click(function(){
\t\t\t\t\topenBrowser();
\t\t\t\t\t\$( \"#dialog\" ).dialog( \"close\" );
\t\t\t\t\t\$(\"#dialog\").remove();
\t\t\t\t});
\t\t\t\t\t\$( \"#dialog\" ).dialog({
\t\t\t\t\t\t\tmodal: true,
\t\t\t\t\t\t\tbuttons: {
\t\t\t\t\t\t\t\"Set image\": function(){
\t\t\t\t\t\t\t\timgWidth = parseFloat(\$(\"#width\").val());
\t\t\t\t\t\t\t\timgHeight = parseFloat(\$(\"#height\").val());
\t\t\t\t\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").attr(\"src\",localStorage.getItem(\"path\"));
\t\t\t\t\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").width(imgWidth);
\t\t\t\t\t\t\t\t\$(\"[cmsId = '\"+localStorage.getItem(\"for\")+\"']\").height(imgHeight);
\t\t\t\t\t\t\t\t\$( this ).dialog( \"close\" );
\t\t\t\t\t\t\t\t\$(\"#dialog\").remove();
\t\t\t\t\t\t\t\t localStorage.removeItem(\"for\");
\t\t\t\t\t\t\t\t localStorage.removeItem(\"path\");
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tCancel: function() {
\t\t\t\t\t\t\t\t\t\$( this ).dialog( \"close\" );
\t\t\t\t\t\t\t\t\t\$(\"#dialog\").remove();
\t\t\t\t\t\t\t\t\t localStorage.removeItem(\"for\");
\t\t\t\t\t\t\t\t\t localStorage.removeItem(\"path\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t);
\t\t\t\t
\t\t\t\t
\t\t\t}
\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite/default/includes:includes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 21,  46 => 7,  27 => 2,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 8,  69 => 7,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 6,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 5,  48 => 4,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
