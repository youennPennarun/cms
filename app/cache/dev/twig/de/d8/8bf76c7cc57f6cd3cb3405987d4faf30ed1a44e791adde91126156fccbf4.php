<?php

/* CmsWebSiteBundle:WebSite:default/includes/includes.html.twig */
class __TwigTemplate_ded88bf76c7cc57f6cd3cb3405987d4faf30ed1a44e791adde91126156fccbf4 extends Twig_Template
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
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/../bootstrap/css/bootstrap.min.css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/../bootstrap/css/bootstrap-responsive.min.css\" />
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/../bootstrap/js/bootstrap.min.js\"></script>
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
        // line 31
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
        return "CmsWebSiteBundle:WebSite:default/includes/includes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  85 => 13,  81 => 12,  77 => 11,  72 => 8,  69 => 7,  55 => 6,  51 => 5,  48 => 4,  30 => 3,  27 => 2,  20 => 1,);
    }
}
