<?php

/* ::settings.html.twig */
class __TwigTemplate_cbacf2499b18a79bd7b5a461e30eda9c9487b75c43768eca30039103ae39890d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'includes' => array($this, 'block_includes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" ></script>
  <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
  <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t
  </head>
  <body>
\t";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo "\t
\t";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "  </body>
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "\t
\t";
        // line 24
        $this->displayBlock('includes', $context, $blocks);
        // line 34
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Youenn PENNARUN -Portfolio";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
        $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig")->display($context);
        // line 15
        echo "\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t
\t";
    }

    // line 24
    public function block_includes($context, array $blocks = array())
    {
        // line 25
        echo "\t";
        if (array_key_exists("includesPath", $context)) {
            // line 26
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["includesPath"]) ? $context["includesPath"] : null));
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
                // line 27
                echo "\t\t\t<li>
\t\t\t\t";
                // line 28
                $context["path"] = ("CmsWebSiteBundle:WebSite:" . (isset($context["include"]) ? $context["include"] : null));
                // line 29
                echo "\t\t\t\t";
                $template = $this->env->resolveTemplate((isset($context["path"]) ? $context["path"] : null));
                $template->display($context);
                // line 30
                echo "\t\t\t</li>
\t\t";
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
            // line 32
            echo "\t";
        }
        // line 33
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::settings.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 33,  151 => 32,  136 => 30,  132 => 29,  130 => 28,  127 => 27,  109 => 26,  106 => 25,  103 => 24,  98 => 21,  95 => 20,  91 => 18,  88 => 17,  84 => 15,  81 => 14,  78 => 13,  74 => 9,  71 => 8,  65 => 4,  61 => 34,  59 => 24,  56 => 23,  54 => 20,  51 => 19,  46 => 16,  44 => 13,  39 => 10,  30 => 4,  25 => 1,  62 => 14,  55 => 12,  53 => 11,  49 => 17,  45 => 9,  42 => 8,  37 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
