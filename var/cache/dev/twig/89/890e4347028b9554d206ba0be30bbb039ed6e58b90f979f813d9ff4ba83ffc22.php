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
        $__internal_36677790d73f4f5649a128e7f6b6e05e2cfd873ae1c656d33fb8ae2c17d468a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36677790d73f4f5649a128e7f6b6e05e2cfd873ae1c656d33fb8ae2c17d468a3->enter($__internal_36677790d73f4f5649a128e7f6b6e05e2cfd873ae1c656d33fb8ae2c17d468a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f4e574074428b0b2fbb545cc5a3a8ef5d17aecd2ca736cbce9bd2ac598cf3d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e574074428b0b2fbb545cc5a3a8ef5d17aecd2ca736cbce9bd2ac598cf3d97->enter($__internal_f4e574074428b0b2fbb545cc5a3a8ef5d17aecd2ca736cbce9bd2ac598cf3d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_36677790d73f4f5649a128e7f6b6e05e2cfd873ae1c656d33fb8ae2c17d468a3->leave($__internal_36677790d73f4f5649a128e7f6b6e05e2cfd873ae1c656d33fb8ae2c17d468a3_prof);

        
        $__internal_f4e574074428b0b2fbb545cc5a3a8ef5d17aecd2ca736cbce9bd2ac598cf3d97->leave($__internal_f4e574074428b0b2fbb545cc5a3a8ef5d17aecd2ca736cbce9bd2ac598cf3d97_prof);

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
