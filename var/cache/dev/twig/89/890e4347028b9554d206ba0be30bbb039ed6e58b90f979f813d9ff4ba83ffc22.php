<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f544f412f143d9c4dc7ec46d19891d06889329c7b23ede88ea98486e55801520 extends Twig_Template
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
        $__internal_a084c2a5dc52290c63e96743d6cd04c563ddafdc1181e49b38f6df88bcce534b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a084c2a5dc52290c63e96743d6cd04c563ddafdc1181e49b38f6df88bcce534b->enter($__internal_a084c2a5dc52290c63e96743d6cd04c563ddafdc1181e49b38f6df88bcce534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_10cbb78313979e68b2da487a33107ccb5a26001a8c9d54292dc255a1974ef24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cbb78313979e68b2da487a33107ccb5a26001a8c9d54292dc255a1974ef24a->enter($__internal_10cbb78313979e68b2da487a33107ccb5a26001a8c9d54292dc255a1974ef24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a084c2a5dc52290c63e96743d6cd04c563ddafdc1181e49b38f6df88bcce534b->leave($__internal_a084c2a5dc52290c63e96743d6cd04c563ddafdc1181e49b38f6df88bcce534b_prof);

        
        $__internal_10cbb78313979e68b2da487a33107ccb5a26001a8c9d54292dc255a1974ef24a->leave($__internal_10cbb78313979e68b2da487a33107ccb5a26001a8c9d54292dc255a1974ef24a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
