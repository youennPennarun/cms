<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/manageTemplate.html.twig */
class __TwigTemplate_0b3d1a0140aaa1ef246b993339b32e062bd5eeba2a0ae2cc655fa9052648d291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::settings.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::settings.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <p>templates<p>
\t<ul>
\t\t";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tem"]) {
            // line 8
            echo "\t\t\t<li>
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tem"]) ? $context["tem"] : null), "getName", array(), "method"), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Settings-manageTemplates", array("action" => "delete", "id" => $this->getAttribute((isset($context["tem"]) ? $context["tem"] : null), "id"))), "html", null, true);
            echo "\" >delete</a>
\t\t\t\t";
            // line 11
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 12
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
 
 
 ";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/templates/manageTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
