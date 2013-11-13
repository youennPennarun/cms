<?php

/* CmsWebSiteBundle:WebSite:escalier.html.twig */
class __TwigTemplate_7f2e94a535fd5a9e002c703c589a80d331c04b3278576cfc74ddba03c0f29a57 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Escalier 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131022

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>

";
        // line 16
        $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/includes.html.twig")->display($context);
        // line 17
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title></title>
<meta name=\"keywords\" content=\"\" />
<meta name=\"description\" content=\"\" />
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../web/uploads/assets/escalier/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../web/uploads/assets/escalier/js/jquery.slidertron-1.3.js"), "html", null, true);
        echo "\"></script>
<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900\" rel=\"stylesheet\" />
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../web/uploads/assets/escalier/css/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../web/uploads/assets/escalier/css/fonts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!--[if IE 6]><link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../web/uploads/assets/escalier/css/default_ie6.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /><![endif]-->

</head>
<body>

";
        // line 32
        $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/menu/adminTopBar.html.twig")->display($context);
        echo "<div id=\"header-wrapper\">
\t<div id=\"header\" class=\"container\">
\t\t<div id=\"logo\">
\t\t\t<h1><a href=\"#\">Escalier</a></h1>
\t\t\t<span>By <a href=\"http://www.freecsstemplates.org/\">FreeCSSTemplates.org</a></span>
\t\t</div>
\t\t<div id=\"menu\">
\t\t\t<ul>
\t\t\t\t<li class=\"current_page_item\"><a href=\"#\" accesskey=\"1\" title=\"\">Homepage</a></li>
\t\t\t\t<li><a href=\"#\" accesskey=\"2\" title=\"\">Our Clients</a></li>
\t\t\t\t<li><a href=\"#\" accesskey=\"3\" title=\"\">About Us</a></li>
\t\t\t\t<li><a href=\"#\" accesskey=\"4\" title=\"\">Careers</a></li>
\t\t\t\t<li><a href=\"#\" accesskey=\"5\" title=\"\">Contact Us</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>
<div id=\"header-featured\"> </div>
<div id=\"banner-wrapper\">
\t<div id=\"banner\" class=\"container\">
\t\t<p>This is <strong>Escalier</strong>, a free, fully standards-compliant CSS template designed by <a href=\"http://www.freecsstemplates.org/\" rel=\"nofollow\">FreeCSSTemplates.org</a>. The photos in this template are from <a href=\"http://fotogrph.com/\"> Fotogrph</a>. This free template is released under a <a href=\"http://creativecommons.org/licenses/by/3.0/\">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
\t</div>
</div>
<div id=\"wrapper\">
\t<div id=\"featured-wrapper\">
\t\t<div id=\"featured\" class=\"container\">
\t\t\t<div class=\"column1\"> <span class=\"icon icon-key\"></span>
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>";
        // line 60
        echo (isset($context["title1"]) ? $context["title1"] : $this->getContext($context, "title1"));
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 62
        echo (isset($context["subtitle1"]) ? $context["subtitle1"] : $this->getContext($context, "subtitle1"));
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"column2\"> <span class=\"icon icon-legal\"></span>
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>";
        // line 66
        echo (isset($context["title2"]) ? $context["title2"] : $this->getContext($context, "title2"));
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 68
        echo (isset($context["subtitle2"]) ? $context["subtitle2"] : $this->getContext($context, "subtitle2"));
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"column3\"> <span class=\"icon icon-unlock\"></span>
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>";
        // line 72
        echo (isset($context["title3"]) ? $context["title3"] : $this->getContext($context, "title3"));
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 74
        echo (isset($context["subtitle3"]) ? $context["subtitle3"] : $this->getContext($context, "subtitle3"));
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"column4\"> <span class=\"icon icon-wrench\"></span>
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>";
        // line 78
        echo (isset($context["title4"]) ? $context["title4"] : $this->getContext($context, "title4"));
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 80
        echo (isset($context["subtitle4"]) ? $context["subtitle4"] : $this->getContext($context, "subtitle4"));
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"extra\" class=\"container\">
\t\t\t<h2>Maecenas vitae orci vitae tellus feugiat eleifend</h2>
\t\t\t<span>Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh</span> </div>
\t\t\t
\t\t<div id=\"extra2\" class=\"container\">
\t\t\t<div id=\"ebox1\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>";
        // line 90
        echo (isset($context["extra11"]) ? $context["extra11"] : $this->getContext($context, "extra11"));
        echo "</h2>
\t\t\t\t\t<span class=\"byline\">";
        // line 91
        echo (isset($context["extra12"]) ? $context["extra12"] : $this->getContext($context, "extra12"));
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<p>";
        // line 93
        echo (isset($context["extra13"]) ? $context["extra13"] : $this->getContext($context, "extra13"));
        echo "</p>
\t\t\t\t<a href=\"#\" class=\"button\">Etiam posuere</a>
\t\t\t</div>\t\t

\t\t\t<div id=\"ebox2\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Donec dictum metus</h2>
\t\t\t\t\t<span class=\"byline\">Integer sit amet pede vel arcu aliquet pretium</span>
\t\t\t\t</div>
\t\t\t\t<p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet.</p>
\t\t\t\t<a href=\"#\" class=\"button\">Etiam posuere</a>
\t\t\t</div>\t\t

\t\t</div>\t

\t</div>
</div>
<div id=\"copyright\" class=\"container\">
\t<p>Copyright (c) 2013 Sitename.com. All rights reserved. | Photos by <a href=\"http://fotogrph.com/\">Fotogrph</a> | Design by <a href=\"http://www.freecsstemplates.org/\" rel=\"nofollow\">FreeCSSTemplates.org</a>.</p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:escalier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 93,  159 => 91,  155 => 90,  142 => 80,  137 => 78,  130 => 74,  125 => 72,  118 => 68,  113 => 66,  106 => 62,  101 => 60,  70 => 32,  62 => 27,  57 => 25,  53 => 24,  48 => 22,  44 => 21,  38 => 17,  36 => 16,  19 => 1,);
    }
}
