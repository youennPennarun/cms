<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/assets.html.twig */
class __TwigTemplate_60b2ac30f9a98605097a7b27afdbc11ca06e3e527ebd66e860bbbc4248f84f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form method=\"POST\"  enctype=\"multipart/form-data\">
\t<br>
\t";
        // line 3
        $context["i"] = 0;
        // line 4
        echo "\t\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 6
            echo "\t\t\t<li>
\t\t\t\t";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t";
            // line 9
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'errors');
            echo "
\t\t\t\t";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'widget');
            echo "
\t\t\t\t";
            // line 11
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 12
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
\t\t
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
\t\t<hr>
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<hr>
\t</form>\t

";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/templates/assets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  70 => 18,  65 => 16,  61 => 14,  54 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  20 => 1,);
    }
}
