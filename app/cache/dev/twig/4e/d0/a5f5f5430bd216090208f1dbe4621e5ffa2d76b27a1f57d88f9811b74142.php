<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/selectTemplate.html.twig */
class __TwigTemplate_4ed0a5f5f5430bd216090208f1dbe4621e5ffa2d76b27a1f57d88f9811b74142 extends Twig_Template
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
        echo "
<form method=\"POST\"  enctype=\"multipart/form-data\">
\t";
        // line 3
        $context["i"] = 0;
        // line 4
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")));
        foreach ($context['_seq'] as $context["_key"] => $context["tem"]) {
            // line 5
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "checkBox"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget', array("attr" => array("class" => "checkbox")));
            echo "
\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tem"]) ? $context["tem"] : $this->getContext($context, "tem")), "getName", array(), "method"), "html", null, true);
            echo "
\t\t";
            // line 7
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 8
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row');
        echo "
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
 
 
<script>
\tjQuery(document).ready(function() {
\t\t\$('.checkbox').click(function(){
\t\t\t\$('.checkbox').each(function(){
\t\t\t\t\$(this).prop(\"checked\",false);
\t\t\t})
\t\t\t\$(this).prop(\"checked\", \"checked\");\t\t
\t\t})
\t});

</script>";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/templates/selectTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  47 => 9,  41 => 8,  39 => 7,  35 => 6,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
