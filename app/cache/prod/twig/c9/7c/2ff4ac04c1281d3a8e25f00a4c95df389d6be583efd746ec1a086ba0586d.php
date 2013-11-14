<?php

/* CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig */
class __TwigTemplate_c97c2ff4ac04c1281d3a8e25f00a4c95df389d6be583efd746ec1a086ba0586d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t";
        // line 2
        $this->displayBlock('menu', $context, $blocks);
    }

    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"well sidebar-nav\">
\t\t<ul class=\"nav nav-list\">
            <li class=\"nav-header\">Pages</li>
\t\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Settings-newPage");
        echo "\">New Page</a></li>
\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Settings-browsePages");
        echo "\">Browse Pages</a></li>
            <li class=\"nav-header\">Images</li>
\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("Uploads-uploadImage");
        echo "\">Upload an image</a></li>
\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Uploads-browseImage");
        echo "\">Browse images</a></li>
            <li class=\"nav-header\">Templates</li>
\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("Settings-GetTemplate");
        echo "\">Upload a Template</a></li>
\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Settings-manageTemplates");
        echo "\">Browse Templates</a></li>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Settings-newMenu");
        echo "\">new menu</a></li>
\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("Settings-manageMenus");
        echo "\">manage menus</a></li>
            <li class=\"nav-header\">Debug</li>
\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("Settings-getLog");
        echo "\">logs</a></li>
\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("Settings-clearLog");
        echo "\">clear logs</a></li>
\t\t</ul>
\t</div>
\t
\t";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  60 => 14,  56 => 13,  47 => 10,  43 => 9,  38 => 7,  34 => 6,  29 => 3,  23 => 2,  20 => 1,  176 => 46,  173 => 45,  158 => 43,  154 => 42,  152 => 41,  149 => 40,  131 => 39,  128 => 38,  125 => 37,  120 => 34,  117 => 33,  113 => 28,  110 => 27,  106 => 24,  103 => 23,  100 => 22,  96 => 13,  93 => 12,  87 => 4,  83 => 47,  81 => 37,  78 => 36,  76 => 33,  70 => 29,  68 => 27,  64 => 15,  62 => 22,  52 => 12,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  30 => 4,  25 => 1,  31 => 4,  28 => 3,);
    }
}
