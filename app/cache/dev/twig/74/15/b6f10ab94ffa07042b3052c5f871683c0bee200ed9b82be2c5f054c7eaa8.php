<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig */
class __TwigTemplate_7415b6f10ab94ffa07042b3052c5f871683c0bee200ed9b82be2c5f054c7eaa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::settings.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::settings.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["controller"] = $this->getAttribute(twig_split_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_controller"), "method"), "::"), 1, array(), "array");
        // line 4
        $context["cms_page_title"] = $this->getAttribute($this->getAttribute((isset($context["pageNames"]) ? $context["pageNames"] : $this->getContext($context, "pageNames")), (isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))), "pageName", array(), "array");
        // line 5
        $context["fileName"] = $this->getAttribute($this->getAttribute((isset($context["pageNames"]) ? $context["pageNames"] : $this->getContext($context, "pageNames")), (isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))), "fileName", array(), "array");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["cms_page_title"]) ? $context["cms_page_title"] : $this->getContext($context, "cms_page_title")), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"hero-unit\">
\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["cms_page_title"]) ? $context["cms_page_title"] : $this->getContext($context, "cms_page_title")), "html", null, true);
        echo "</h1>
\t</div>
\t<div class=\"row-fluid\">
\t\t";
        // line 13
        $template = $this->env->resolveTemplate((("CmsWebSiteBundle:WebSite:default/settings/templates/" . (isset($context["fileName"]) ? $context["fileName"] : $this->getContext($context, "fileName"))) . ".html.twig"));
        $template->display($context);
        echo "\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 10,  44 => 9,  41 => 8,  35 => 7,  30 => 5,  28 => 4,  26 => 3,);
    }
}
