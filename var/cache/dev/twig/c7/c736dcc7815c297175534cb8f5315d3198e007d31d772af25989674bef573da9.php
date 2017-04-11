<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fe7f0f7316395a6d425a1a49b98b007ff324fe05d111bc701e58a9e74dc62c34 extends Twig_Template
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
        $__internal_3bf4447395940a0a4da01785c41cf1f0b5f6306c03d5167f5ccc8ec731bc0fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf4447395940a0a4da01785c41cf1f0b5f6306c03d5167f5ccc8ec731bc0fef->enter($__internal_3bf4447395940a0a4da01785c41cf1f0b5f6306c03d5167f5ccc8ec731bc0fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f7761eee44d6eed4cd57a04636f28fd6a61587eabeb8e7ea240beaee293f4819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7761eee44d6eed4cd57a04636f28fd6a61587eabeb8e7ea240beaee293f4819->enter($__internal_f7761eee44d6eed4cd57a04636f28fd6a61587eabeb8e7ea240beaee293f4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3bf4447395940a0a4da01785c41cf1f0b5f6306c03d5167f5ccc8ec731bc0fef->leave($__internal_3bf4447395940a0a4da01785c41cf1f0b5f6306c03d5167f5ccc8ec731bc0fef_prof);

        
        $__internal_f7761eee44d6eed4cd57a04636f28fd6a61587eabeb8e7ea240beaee293f4819->leave($__internal_f7761eee44d6eed4cd57a04636f28fd6a61587eabeb8e7ea240beaee293f4819_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
