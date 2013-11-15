<?php

/* ::settings.html.twig */
class __TwigTemplate_b5d38c37b9c130518cc01ffd7f7fbde754c9593415322ce433c1c3f126b0d9fe extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css\" />
\t<script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/bootstrap/css/bootstrap-responsive.min.css\" />
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "/bootstrap/js/bootstrap.min.js\"></script>
\t
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t
  </head>
  <body>
\t<br>
\t
\t<div class=\"container-fluid\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span3\">
\t\t\t\t";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "\t\t\t</div>
\t\t\t<div class=\"span9\">
\t\t\t\t";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
  </body>
\t";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "\t
\t";
        // line 37
        $this->displayBlock('includes', $context, $blocks);
        // line 47
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Settings";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("CmsWebSiteBundle:WebSite:default/includes/menu/settingMenu.html.twig")->display($context);
        // line 24
        echo "\t\t\t\t";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "\t
\t";
    }

    // line 37
    public function block_includes($context, array $blocks = array())
    {
        // line 38
        echo "\t";
        if (array_key_exists("includesPath", $context)) {
            // line 39
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
                // line 40
                echo "\t\t\t<li>
\t\t\t\t";
                // line 41
                $context["path"] = ("CmsWebSiteBundle:WebSite:" . (isset($context["include"]) ? $context["include"] : null));
                // line 42
                echo "\t\t\t\t";
                $template = $this->env->resolveTemplate((isset($context["path"]) ? $context["path"] : null));
                $template->display($context);
                // line 43
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
            // line 45
            echo "\t";
        }
        // line 46
        echo "\t";
    }

    public function getTemplateName()
    {
        return "::settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 46,  173 => 45,  158 => 43,  154 => 42,  152 => 41,  149 => 40,  131 => 39,  128 => 38,  125 => 37,  120 => 34,  117 => 33,  113 => 28,  110 => 27,  106 => 24,  103 => 23,  100 => 22,  96 => 13,  93 => 12,  87 => 4,  81 => 37,  78 => 36,  76 => 33,  70 => 29,  68 => 27,  64 => 25,  62 => 22,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  30 => 4,  25 => 1,  92 => 23,  85 => 21,  83 => 47,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  60 => 14,  55 => 13,  52 => 14,  43 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
