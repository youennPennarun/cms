<?php

/* CmsWebSiteBundle:WebSite:default/includes/menu/menuList.html.twig */
class __TwigTemplate_b5aafd695587454cfe40e628e2fb0378e0cb3eda7116e255d8b88f6355319b9a extends Twig_Template
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
        echo "<li class=\"nav-header\">Pages</li>
\t\t\t<li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("Settings-newPage");
        echo "\">New Page</a></li>
\t\t\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("Settings-browsePages");
        echo "\">Browse Pages</a></li>
            <li class=\"nav-header\">Images</li>
\t\t\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("Uploads-uploadImage");
        echo "\">Upload an image</a></li>
\t\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Uploads-browseImage");
        echo "\">Browse images</a></li>
            <li class=\"nav-header\">Templates</li>
\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Settings-GetTemplate");
        echo "\">Upload a Template</a></li>
\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("Settings-manageTemplates");
        echo "\">Browse Templates</a></li>";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/includes/menu/menuList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  35 => 6,  26 => 3,  22 => 2,  31 => 5,  29 => 8,  21 => 2,  19 => 1,);
    }
}
