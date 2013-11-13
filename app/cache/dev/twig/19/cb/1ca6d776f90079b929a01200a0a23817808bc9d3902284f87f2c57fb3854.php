<?php

/* CmsWebSiteBundle:WebSite:default/includes/newPageForm.html.twig */
class __TwigTemplate_19cb1ca6d776f90079b929a01200a0a23817808bc9d3902284f87f2c57fb3854 extends Twig_Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            echo "\t
\t<form method=\"POST\" ";
            // line 3
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " id=\"form\" style=\"display:inline;\">
\t<li style=\"display:inline-block;>";
            // line 4
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageName"), 'row');
            echo "</li>
\t<li class = \"btn\" style=\"display:inline;>";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row', array("id" => "saveButton"));
            echo "</li>
\t
\t<div style=\"display: none; visibility:hidden;\">
\t\t<div id=\"var\">
\t\t\t";
            // line 9
            $context["i"] = 0;
            // line 10
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "varList"));
            foreach ($context['_seq'] as $context["_key"] => $context["varForm"]) {
                // line 11
                echo "\t\t\t-<br>
\t\t\t";
                // line 12
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'label');
                echo "
\t\t\t";
                // line 13
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'errors');
                echo "
\t\t\t";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varForm"]) ? $context["varForm"] : $this->getContext($context, "varForm")), 'widget', array("id" => ("form-" . (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), "class" => "variable"));
                echo "
\t\t\t--<br>
\t\t\t";
                // line 16
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 17
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\talert(\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\");
\t\t</div>
\t</div>\t
\t\t";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
\t</form>
\t<script>
\t\$(document).ready(function(){
\t\t\$( \"a\" ).click(function( event ) {
\t\t  event.preventDefault();
\t\t});
\t\t\$(\"#form\").submit(function(){
\t\t\t";
            // line 29
            $context["i"] = 0;
            // line 30
            echo "\t\t\t
\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "varList"));
            foreach ($context['_seq'] as $context["_key"] => $context["varForm"]) {
                // line 32
                echo "\t\t\t\t
\t\t\t\tif(\$(\"#val-";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").attr(\"class\") == \"ckeditor\"){
\t\t\t\t\t\$(\"#form-";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").val(CKEDITOR.instances['val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "'].getData());
\t\t\t\t\t
\t\t\t\t}else if(\$(\"#[cmsId = 'val-";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"cmsClass\") == \"editable-img\"){
\t\t\t\t\t\$(\"#form-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\").val(\"<img src=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"src\")+\" id=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"id\")+\" class=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"class\")+\" width=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"width\")+\" height=\"+\$(\"#[cmsId = 'val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "']\").attr(\"height\")+\"  cmsClass='editable-img' cmsId='val-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "' >\");
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t";
                // line 41
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 42
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t
\t\t\t});
\t\t});
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/includes/newPageForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  136 => 42,  134 => 41,  115 => 37,  111 => 36,  104 => 34,  100 => 33,  97 => 32,  93 => 31,  90 => 30,  88 => 29,  77 => 21,  70 => 18,  64 => 17,  62 => 16,  57 => 14,  53 => 13,  49 => 12,  46 => 11,  41 => 10,  39 => 9,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
