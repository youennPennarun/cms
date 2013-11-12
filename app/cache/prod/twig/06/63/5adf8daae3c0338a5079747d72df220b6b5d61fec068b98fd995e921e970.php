<?php

/* CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig */
class __TwigTemplate_06635adf8daae3c0338a5079747d72df220b6b5d61fec068b98fd995e921e970 extends Twig_Template
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
        echo "\t<div id=\"settingsMenu\">
\t<hr>
\t<h3>menu</h3>
\t<ul>
\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Settings-newPage");
        echo "\">New Page</a></li>
\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Uploads-uploadImage");
        echo "\">Upload an image</a></li>
\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("Uploads-browseImage");
        echo "\">Browse images</a></li>
\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Settings-GetTemplate");
        echo "\">Upload a Template</a></li>
\t</ul>
\t<hr>
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
        return array (  47 => 10,  43 => 9,  29 => 3,  23 => 2,  20 => 1,  154 => 33,  151 => 32,  136 => 30,  132 => 29,  130 => 28,  127 => 27,  109 => 26,  106 => 25,  103 => 24,  98 => 21,  95 => 20,  91 => 18,  88 => 17,  84 => 15,  81 => 14,  78 => 13,  74 => 9,  71 => 8,  65 => 4,  61 => 34,  59 => 24,  56 => 23,  54 => 20,  51 => 19,  46 => 16,  44 => 13,  39 => 8,  30 => 4,  25 => 1,  62 => 14,  55 => 12,  53 => 11,  49 => 17,  45 => 9,  42 => 8,  37 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
