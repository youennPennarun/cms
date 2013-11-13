<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/manageTemplate.html.twig */
class __TwigTemplate_604de24a6d096411b71cb571286325100da49d523aba10d2bde09052181ac03c extends Twig_Template
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
        $context["i"] = 0;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")));
        foreach ($context['_seq'] as $context["_key"] => $context["tem"]) {
            // line 3
            echo "\t<div class=\"span4\">
\t\t<h3>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tem"]) ? $context["tem"] : $this->getContext($context, "tem")), "getName", array(), "method"), "html", null, true);
            echo "<h3>
\t\t<a class=\"btn btn-danger\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Settings-manageTemplates", array("action" => "delete", "id" => $this->getAttribute((isset($context["tem"]) ? $context["tem"] : $this->getContext($context, "tem")), "id"))), "html", null, true);
            echo "\" >delete</a>
\t\t";
            // line 6
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 7
            echo "\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  38 => 7,  36 => 6,  32 => 5,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
