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
        $__internal_aec71660dbaa9092fb93d426f7533fa7913534ae1d1aef403d68faf221588ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec71660dbaa9092fb93d426f7533fa7913534ae1d1aef403d68faf221588ab8->enter($__internal_aec71660dbaa9092fb93d426f7533fa7913534ae1d1aef403d68faf221588ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_e938d287e8559984235987f12fa702424e1a111442d4e1a642a2c048351f6e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e938d287e8559984235987f12fa702424e1a111442d4e1a642a2c048351f6e5e->enter($__internal_e938d287e8559984235987f12fa702424e1a111442d4e1a642a2c048351f6e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_aec71660dbaa9092fb93d426f7533fa7913534ae1d1aef403d68faf221588ab8->leave($__internal_aec71660dbaa9092fb93d426f7533fa7913534ae1d1aef403d68faf221588ab8_prof);

        
        $__internal_e938d287e8559984235987f12fa702424e1a111442d4e1a642a2c048351f6e5e->leave($__internal_e938d287e8559984235987f12fa702424e1a111442d4e1a642a2c048351f6e5e_prof);

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
