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
        $__internal_2616324146c3c831a33cd53523007f38eff028cc4f10bf560bf23d0c285870b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2616324146c3c831a33cd53523007f38eff028cc4f10bf560bf23d0c285870b4->enter($__internal_2616324146c3c831a33cd53523007f38eff028cc4f10bf560bf23d0c285870b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5dbadd80396c9601e688009ebae2565268b969d76f785bd566fed03d8d545c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbadd80396c9601e688009ebae2565268b969d76f785bd566fed03d8d545c8a->enter($__internal_5dbadd80396c9601e688009ebae2565268b969d76f785bd566fed03d8d545c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2616324146c3c831a33cd53523007f38eff028cc4f10bf560bf23d0c285870b4->leave($__internal_2616324146c3c831a33cd53523007f38eff028cc4f10bf560bf23d0c285870b4_prof);

        
        $__internal_5dbadd80396c9601e688009ebae2565268b969d76f785bd566fed03d8d545c8a->leave($__internal_5dbadd80396c9601e688009ebae2565268b969d76f785bd566fed03d8d545c8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25b449b85aa8a958e09a5199a16726bfa62a2877218700628e94a2bad1ea6ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b449b85aa8a958e09a5199a16726bfa62a2877218700628e94a2bad1ea6ee3->enter($__internal_25b449b85aa8a958e09a5199a16726bfa62a2877218700628e94a2bad1ea6ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75c4041b28fb80a7fe35d54c411b2b03c6266d39e1ab26e40dc7ecc26e1bc51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c4041b28fb80a7fe35d54c411b2b03c6266d39e1ab26e40dc7ecc26e1bc51f->enter($__internal_75c4041b28fb80a7fe35d54c411b2b03c6266d39e1ab26e40dc7ecc26e1bc51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_75c4041b28fb80a7fe35d54c411b2b03c6266d39e1ab26e40dc7ecc26e1bc51f->leave($__internal_75c4041b28fb80a7fe35d54c411b2b03c6266d39e1ab26e40dc7ecc26e1bc51f_prof);

        
        $__internal_25b449b85aa8a958e09a5199a16726bfa62a2877218700628e94a2bad1ea6ee3->leave($__internal_25b449b85aa8a958e09a5199a16726bfa62a2877218700628e94a2bad1ea6ee3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8731f8b3adf1f49cf9cc7d649420afbefa25b243fdace2c2fc2885f9506fbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8731f8b3adf1f49cf9cc7d649420afbefa25b243fdace2c2fc2885f9506fbe0->enter($__internal_c8731f8b3adf1f49cf9cc7d649420afbefa25b243fdace2c2fc2885f9506fbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca68e1637ac47ba7927629892bdd1ff6c4515d3828135afee66f7f280da553a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca68e1637ac47ba7927629892bdd1ff6c4515d3828135afee66f7f280da553a->enter($__internal_eca68e1637ac47ba7927629892bdd1ff6c4515d3828135afee66f7f280da553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eca68e1637ac47ba7927629892bdd1ff6c4515d3828135afee66f7f280da553a->leave($__internal_eca68e1637ac47ba7927629892bdd1ff6c4515d3828135afee66f7f280da553a_prof);

        
        $__internal_c8731f8b3adf1f49cf9cc7d649420afbefa25b243fdace2c2fc2885f9506fbe0->leave($__internal_c8731f8b3adf1f49cf9cc7d649420afbefa25b243fdace2c2fc2885f9506fbe0_prof);

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
