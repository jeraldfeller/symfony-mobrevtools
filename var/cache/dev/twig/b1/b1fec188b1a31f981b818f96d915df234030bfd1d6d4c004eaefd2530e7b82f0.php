<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_98dad417ff15f51596fd14acaf2e5bd624b0832f7483ba4c42d956d83269e32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4112c21102337ac4fb11c9f6a773511eb6e84682537d8cd42051b70ffaca7171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4112c21102337ac4fb11c9f6a773511eb6e84682537d8cd42051b70ffaca7171->enter($__internal_4112c21102337ac4fb11c9f6a773511eb6e84682537d8cd42051b70ffaca7171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e343ad55427f62782cc56d5274735daba3507c3e00aa09cf020f69bee25ca6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e343ad55427f62782cc56d5274735daba3507c3e00aa09cf020f69bee25ca6c7->enter($__internal_e343ad55427f62782cc56d5274735daba3507c3e00aa09cf020f69bee25ca6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4112c21102337ac4fb11c9f6a773511eb6e84682537d8cd42051b70ffaca7171->leave($__internal_4112c21102337ac4fb11c9f6a773511eb6e84682537d8cd42051b70ffaca7171_prof);

        
        $__internal_e343ad55427f62782cc56d5274735daba3507c3e00aa09cf020f69bee25ca6c7->leave($__internal_e343ad55427f62782cc56d5274735daba3507c3e00aa09cf020f69bee25ca6c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_966e6c96968b365416945db5ac389f31dda0f7e78032f2e07eb87ae57935f2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966e6c96968b365416945db5ac389f31dda0f7e78032f2e07eb87ae57935f2fb->enter($__internal_966e6c96968b365416945db5ac389f31dda0f7e78032f2e07eb87ae57935f2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21200c3e0901bbf4d544facff0aef1d852db7b082ca8e0aa5ba1a0cba4244926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21200c3e0901bbf4d544facff0aef1d852db7b082ca8e0aa5ba1a0cba4244926->enter($__internal_21200c3e0901bbf4d544facff0aef1d852db7b082ca8e0aa5ba1a0cba4244926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_21200c3e0901bbf4d544facff0aef1d852db7b082ca8e0aa5ba1a0cba4244926->leave($__internal_21200c3e0901bbf4d544facff0aef1d852db7b082ca8e0aa5ba1a0cba4244926_prof);

        
        $__internal_966e6c96968b365416945db5ac389f31dda0f7e78032f2e07eb87ae57935f2fb->leave($__internal_966e6c96968b365416945db5ac389f31dda0f7e78032f2e07eb87ae57935f2fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ed12983a70803178346d11fa1cf7cfb384c1e1c737d0ba3601fdcdc55ad3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ed12983a70803178346d11fa1cf7cfb384c1e1c737d0ba3601fdcdc55ad3a7->enter($__internal_b1ed12983a70803178346d11fa1cf7cfb384c1e1c737d0ba3601fdcdc55ad3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50ddbb12af259d549d2c2a3f05579458a1504b48af669d78716a5aeba8eb34bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ddbb12af259d549d2c2a3f05579458a1504b48af669d78716a5aeba8eb34bf->enter($__internal_50ddbb12af259d549d2c2a3f05579458a1504b48af669d78716a5aeba8eb34bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_50ddbb12af259d549d2c2a3f05579458a1504b48af669d78716a5aeba8eb34bf->leave($__internal_50ddbb12af259d549d2c2a3f05579458a1504b48af669d78716a5aeba8eb34bf_prof);

        
        $__internal_b1ed12983a70803178346d11fa1cf7cfb384c1e1c737d0ba3601fdcdc55ad3a7->leave($__internal_b1ed12983a70803178346d11fa1cf7cfb384c1e1c737d0ba3601fdcdc55ad3a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
