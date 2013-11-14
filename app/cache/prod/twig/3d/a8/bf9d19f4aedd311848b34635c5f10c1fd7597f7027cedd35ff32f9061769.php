<?php

/* CmsWebSiteBundle:WebSite:default/settings/debug/getLog.html.twig */
class __TwigTemplate_3da8bf9d19f4aedd311848b34635c5f10c1fd7597f7027cedd35ff32f9061769 extends Twig_Template
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
        echo "<h1>Log</h1>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 3
            echo "\t";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "line");
            echo "<br>
\t<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/debug/getLog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
