<?php

/* CmsWebSiteBundle:WebSite:default/settings/templates/initTemplate.html.twig */
class __TwigTemplate_39b1486e9e6b71de80ce632fbd85eadf74b2fe48a26ce7c54381635a4f0fefa2 extends Twig_Template
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
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"), 'label');
        echo "
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"), 'errors');
        echo "
\t\t
\t\t";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "\t\t<ul>
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assetsFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["assetsField"]) {
            // line 9
            echo "\t\t\t<li>
\t\t\t\t";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assets"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "assets"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["assetsField"]) ? $context["assetsField"] : $this->getContext($context, "assetsField")), 'errors');
            echo "
\t\t\t\t";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["assetsField"]) ? $context["assetsField"] : $this->getContext($context, "assetsField")), 'widget');
            echo "
\t\t\t\t";
            // line 14
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 15
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assetsField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</ul>
\t\t<hr>
\t\t<br>
\t\t";
        // line 20
        $context["i"] = 0;
        // line 21
        echo "\t\t<ul>
\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 23
            echo "\t\t\t<li>
\t\t\t\t";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t is variable : 
\t\t\t\t";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesIsVar"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'errors');
            echo "
\t\t\t\t";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesIsVar"), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i"))), 'widget');
            echo "
\t\t\t\t";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'errors');
            echo "
\t\t\t\t";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["imagesField"]) ? $context["imagesField"] : $this->getContext($context, "imagesField")), 'widget');
            echo "
\t\t\t\t";
            // line 31
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 32
            echo "\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</ul>
\t\t<hr>
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"), 'label');
        echo "
\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"), 'errors');
        echo "

\t\t<ul>
\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variable"));
        foreach ($context['_seq'] as $context["_key"] => $context["varField"]) {
            // line 41
            echo "\t\t\t<li>
\t\t\t\t";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varField"]) ? $context["varField"] : $this->getContext($context, "varField")), 'errors');
            echo "
\t\t\t\t";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["varField"]) ? $context["varField"] : $this->getContext($context, "varField")), 'widget');
            echo "
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['varField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</ul>
\t\t
\t\t
\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'widget');
        echo "
\t\t<hr>
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<hr>
\t</form>


";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "\t<script>
\t\$(document).ready(function(){
\t\t";
        // line 59
        $context["i"] = 0;
        // line 60
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 61
            echo "\t\t\tif (\$(\"#form_imagesIsVar_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('checked')){
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t\t\$(\"#form_images_";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t}else{
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t\t\$(\"#form_images_";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t}
\t\t\t";
            // line 68
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 69
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t
\t\t";
        // line 71
        $context["i"] = 0;
        // line 72
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagesFiles"));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesField"]) {
            // line 73
            echo "\t\t\$(\"#form_imagesIsVar_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").change(function(){
\t\t\tif (\$(\"#form_imagesIsVar_";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('checked')){
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t\t\$(\"#form_images_";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', true);
\t\t\t}else{
\t\t\t\t\$(\"#form_imagesFiles_";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t\t\$(\"#form_images_";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\").prop('disabled', false);
\t\t\t}
\t\t});
\t\t\t";
            // line 82
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 83
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagesField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "CmsWebSiteBundle:WebSite:default/settings/templates/initTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 84,  264 => 83,  262 => 82,  256 => 79,  252 => 78,  247 => 76,  243 => 75,  239 => 74,  234 => 73,  229 => 72,  227 => 71,  224 => 70,  218 => 69,  216 => 68,  211 => 66,  207 => 65,  202 => 63,  198 => 62,  193 => 61,  188 => 60,  186 => 59,  182 => 57,  176 => 56,  168 => 51,  163 => 49,  158 => 46,  149 => 43,  145 => 42,  142 => 41,  138 => 40,  132 => 37,  128 => 36,  124 => 34,  117 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  94 => 25,  90 => 24,  87 => 23,  83 => 22,  80 => 21,  78 => 20,  73 => 17,  66 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  45 => 9,  41 => 8,  38 => 7,  36 => 6,  31 => 4,  27 => 3,  23 => 2,  20 => 1,);
    }
}
