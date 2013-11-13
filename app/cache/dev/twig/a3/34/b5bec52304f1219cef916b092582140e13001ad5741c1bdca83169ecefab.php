<?php

/* CmsWebSiteBundle:WebSite:default/includes/js/ckeditor.html.twig */
class __TwigTemplate_a334b5bec52304f1219cef916b092582140e13001ad5741c1bdca83169ecefab extends Twig_Template
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
        echo "
<script  type=\"text/javascript\" >
\tvar imgUploadPath = \"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/\";
</script>
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/default/settings/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" ></script>
<script  type=\"text/javascript\" >
\$(document).ready(function(){
\tCKEDitor_loaded = false;
\t


\tCKEDITOR.on('instanceReady', function(){
\t\t\tvar selected = new Array();
\t\t\t\$(\"textarea\").each(function(){
\t\t\t//\$(\"#cke_\"+\$(this).attr(\"id\")).replaceWith(\$(\"<div class='editable'>\" + \$(\"textarea\").html() + '</div>'));
\t\t\t
\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"visibility\",\"hidden\");
\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"display\",\"none\");
\t\t\t\$(this).css(\"visibility\",\"visible\");
\t\t\t\$(this).css(\"display\",\"inherit\");
\t\t\t
\t\t\t\$(this).replaceWith(\$(\"<div class='\"+\$(this).attr('class')+\"' id='\"+\$(this).attr('id')+\"'>\" + \$(this).html() + '</div>'));
\t\t});
\t\tCKEditor_loaded = true;\t
\t\t
\t\t\$(\".ckeditor\").each(function(){
\t\t\t\$( this )
\t\t   .mouseenter(function() {
\t\t\t\$( this ).css(\"background-color\",\"#ffff00\");
\t\t\t})
\t\t\t.mouseleave(function() {
\t\t\t\$( this ).css(\"background-color\",\"#ffffff\");
\t\t\t});
\t\t});
\t\t
\t\t\$(\".ckeditor\").click(function onClick(){
\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"visibility\",\"visible\");
\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"display\",\"inherit\");
\t\t\t\$(this).css(\"visibility\",\"hidden\");
\t\t\t\$(this).css(\"display\",\"none\");
\t\t\t
\t\t\tselected.push(\$(this).attr(\"id\"));
\t\t});
\t\t\$(window).bind('click', function(ev) {
\t\t\tif (\$(ev.target).parents('.hideBox').length) {
\t\t\t} else{
\t\t\t\tvar error = false;
\t\t\t\t//alert(\"is child=\"\$(ev.target).is(\$('.hideBox').find('*')));
\t\t\t\t\$.each( selected, function(key,value){
\t\t\t\t\tif(\$(ev.target).attr(\"id\")){
\t\t\t\t\t\t//error = true;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(!error){
\t\t\t\t\t\$.each( selected, function(key,value){
\t\t\t\t\t\t\$(\"#cke_\"+value).css(\"visibility\",\"hidden\");
\t\t\t\t\t\t\$(\"#cke_\"+value).css(\"display\",\"none\");
\t\t\t\t\t\t\$(\"#\"+value).css(\"visibility\",\"visible\");
\t\t\t\t\t\t\$(\"#\"+value).css(\"display\",\"inherit\");
\t\t\t\t\t\t\$(\"#\"+value).replaceWith(\$(\"<div class='\"+\$(\"#\"+value).attr('class')+\"' id='\"+\$(\"#\"+value).attr('id')+\"'></div>\"));
\t\t\t\t\t\t\$(\"#\"+value ).append(CKEDITOR.instances[value].getData());
\t\t\t\t\t});
\t\t\t\t\tselected.splice(0, selected.length);
\t\t\t\t}
\t\t\t\t
\t\t\t\t\t
\t\t\t}
\t\t\t\$(\".ckeditor\").click(function onClick(){
\t\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"visibility\",\"visible\");
\t\t\t\t\$(\"#cke_\"+\$(this).attr(\"id\")).css(\"display\",\"inherit\");
\t\t\t\t\$(this).css(\"visibility\",\"hidden\");
\t\t\t\t\$(this).css(\"display\",\"none\");
\t\t\t\tselected.push(\$(this).attr(\"id\"));
\t\t\t});
\t\t\t
\t\t\t\$(\".ckeditor\").each(function(){
\t\t\t\t\$( this )
\t\t\t   .mouseenter(function() {
\t\t\t\t\$( this ).css(\"background-color\",\"#ffff00\");
\t\t\t\t})
\t\t\t\t.mouseleave(function() {
\t\t\t\t\$( this ).css(\"background-color\",\"#ffffff\");
\t\t\t\t});
\t\t\t});
\t\t
\t\t})
\t}); 
\t
\t
\t
\t
});
</script>";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/includes/js/ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  93 => 27,  72 => 8,  69 => 7,  55 => 6,  51 => 5,  30 => 3,  27 => 2,  20 => 1,  189 => 115,  185 => 113,  183 => 112,  160 => 92,  155 => 90,  151 => 89,  138 => 79,  133 => 77,  126 => 73,  121 => 71,  114 => 67,  109 => 65,  102 => 61,  97 => 59,  62 => 27,  57 => 25,  53 => 24,  48 => 4,  44 => 21,  38 => 17,  36 => 16,  19 => 1,);
    }
}
