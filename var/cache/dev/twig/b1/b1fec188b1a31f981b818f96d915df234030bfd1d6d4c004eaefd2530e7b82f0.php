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
        $__internal_22db4ba220b1befb72dff65a3246d0f25b7ef28967a510504a6ffee61ce54248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22db4ba220b1befb72dff65a3246d0f25b7ef28967a510504a6ffee61ce54248->enter($__internal_22db4ba220b1befb72dff65a3246d0f25b7ef28967a510504a6ffee61ce54248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ffcdbc7904acbf51365a6cb8c3539e656f8a845c296d4103174d8febe650482b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcdbc7904acbf51365a6cb8c3539e656f8a845c296d4103174d8febe650482b->enter($__internal_ffcdbc7904acbf51365a6cb8c3539e656f8a845c296d4103174d8febe650482b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22db4ba220b1befb72dff65a3246d0f25b7ef28967a510504a6ffee61ce54248->leave($__internal_22db4ba220b1befb72dff65a3246d0f25b7ef28967a510504a6ffee61ce54248_prof);

        
        $__internal_ffcdbc7904acbf51365a6cb8c3539e656f8a845c296d4103174d8febe650482b->leave($__internal_ffcdbc7904acbf51365a6cb8c3539e656f8a845c296d4103174d8febe650482b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c35d9c98447eeb1bb12ad3ee5b20cc41ede5adfc42a27e05eeb8c349c8237ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35d9c98447eeb1bb12ad3ee5b20cc41ede5adfc42a27e05eeb8c349c8237ac1->enter($__internal_c35d9c98447eeb1bb12ad3ee5b20cc41ede5adfc42a27e05eeb8c349c8237ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d05eb52f359b1fdd7783f9ea6cc92247246370ffc56d73338de96d22d7186aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d05eb52f359b1fdd7783f9ea6cc92247246370ffc56d73338de96d22d7186aa->enter($__internal_4d05eb52f359b1fdd7783f9ea6cc92247246370ffc56d73338de96d22d7186aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4d05eb52f359b1fdd7783f9ea6cc92247246370ffc56d73338de96d22d7186aa->leave($__internal_4d05eb52f359b1fdd7783f9ea6cc92247246370ffc56d73338de96d22d7186aa_prof);

        
        $__internal_c35d9c98447eeb1bb12ad3ee5b20cc41ede5adfc42a27e05eeb8c349c8237ac1->leave($__internal_c35d9c98447eeb1bb12ad3ee5b20cc41ede5adfc42a27e05eeb8c349c8237ac1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf94d0ed12b1f9b6a129be01f36e929d4d3ecad0f1a12931342d55581d9fe19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf94d0ed12b1f9b6a129be01f36e929d4d3ecad0f1a12931342d55581d9fe19d->enter($__internal_bf94d0ed12b1f9b6a129be01f36e929d4d3ecad0f1a12931342d55581d9fe19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_923afc3ecf33a01c36eb811a9338156aee7a97ee57210e009060dab2fa9df02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923afc3ecf33a01c36eb811a9338156aee7a97ee57210e009060dab2fa9df02c->enter($__internal_923afc3ecf33a01c36eb811a9338156aee7a97ee57210e009060dab2fa9df02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_923afc3ecf33a01c36eb811a9338156aee7a97ee57210e009060dab2fa9df02c->leave($__internal_923afc3ecf33a01c36eb811a9338156aee7a97ee57210e009060dab2fa9df02c_prof);

        
        $__internal_bf94d0ed12b1f9b6a129be01f36e929d4d3ecad0f1a12931342d55581d9fe19d->leave($__internal_bf94d0ed12b1f9b6a129be01f36e929d4d3ecad0f1a12931342d55581d9fe19d_prof);

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
