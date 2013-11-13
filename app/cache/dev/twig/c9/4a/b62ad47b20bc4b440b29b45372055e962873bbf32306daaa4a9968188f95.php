<?php

/* CmsWebSiteBundle:WebSite:default/includes/menu/adminTopBar.html.twig */
class __TwigTemplate_c94ab62ad47b20bc4b440b29b45372055e962873bbf32306daaa4a9968188f95 extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 2
            echo "\t";
            $context["controller"] = $this->getAttribute(twig_split_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_controller"), "method"), "::"), 1, array(), "array");
            // line 3
            echo "\t";
            if (((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")) == "newPageAction")) {
                // line 4
                echo "\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <a class=\"brand\" href=\"./index.html\">Admin Pannel</a>
\t\t\t  <div class=\"nav-collapse collapse\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t";
                // line 10
                $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/newPageForm.html.twig")->display($context);
                // line 11
                echo "\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
            } else {
                // line 17
                echo "\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t  <div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t  <a class=\"brand\" href=\"./index.html\">Admin Pannel</a>
\t\t\t  <div class=\"nav-collapse collapse\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"";
                // line 23
                echo $this->env->getExtension('routing')->getPath("Settings-newPage");
                echo "\">New Page</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 24
                echo $this->env->getExtension('routing')->getPath("Settings-browsePages");
                echo "\">Browse Pages</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 25
                echo $this->env->getExtension('routing')->getPath("Uploads-uploadImage");
                echo "\">Upload an image</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 26
                echo $this->env->getExtension('routing')->getPath("Uploads-browseImage");
                echo "\">Browse images</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("Settings-GetTemplate");
                echo "\">Upload a Template</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 28
                echo $this->env->getExtension('routing')->getPath("Settings-manageTemplates");
                echo "\">Browse Templates</a></li>
\t\t\t\t</ul>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t";
            }
            // line 35
            echo "\t\t
\t


";
        }
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/includes/menu/adminTopBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  45 => 17,  37 => 11,  35 => 10,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
