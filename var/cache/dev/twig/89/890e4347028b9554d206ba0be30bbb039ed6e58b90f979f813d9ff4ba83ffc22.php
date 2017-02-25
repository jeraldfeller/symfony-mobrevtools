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
        $__internal_13a050fea3d3afdf4555bad06c9dcb3887321b07f82da15926366b4c3e8ba5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a050fea3d3afdf4555bad06c9dcb3887321b07f82da15926366b4c3e8ba5fe->enter($__internal_13a050fea3d3afdf4555bad06c9dcb3887321b07f82da15926366b4c3e8ba5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_8b1b1eb239cdcefafaa4e8ae3affa0e4d7ecb33827b5e51d9c2400aee2ea6e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1b1eb239cdcefafaa4e8ae3affa0e4d7ecb33827b5e51d9c2400aee2ea6e4a->enter($__internal_8b1b1eb239cdcefafaa4e8ae3affa0e4d7ecb33827b5e51d9c2400aee2ea6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_13a050fea3d3afdf4555bad06c9dcb3887321b07f82da15926366b4c3e8ba5fe->leave($__internal_13a050fea3d3afdf4555bad06c9dcb3887321b07f82da15926366b4c3e8ba5fe_prof);

        
        $__internal_8b1b1eb239cdcefafaa4e8ae3affa0e4d7ecb33827b5e51d9c2400aee2ea6e4a->leave($__internal_8b1b1eb239cdcefafaa4e8ae3affa0e4d7ecb33827b5e51d9c2400aee2ea6e4a_prof);

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
