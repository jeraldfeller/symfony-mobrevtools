<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2e0557381109275464dda13e3bca7456e491bafccb80d7f6989304463485d66d extends Twig_Template
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
        $__internal_a260350bd770dcddf42b4d9f5eb90cdaae1154359e374c9e598b5887388177b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a260350bd770dcddf42b4d9f5eb90cdaae1154359e374c9e598b5887388177b7->enter($__internal_a260350bd770dcddf42b4d9f5eb90cdaae1154359e374c9e598b5887388177b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f1ae76de59c8be7e727bcc0643d50e049eef587ec2f97eca74ee44662d215c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ae76de59c8be7e727bcc0643d50e049eef587ec2f97eca74ee44662d215c4b->enter($__internal_f1ae76de59c8be7e727bcc0643d50e049eef587ec2f97eca74ee44662d215c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a260350bd770dcddf42b4d9f5eb90cdaae1154359e374c9e598b5887388177b7->leave($__internal_a260350bd770dcddf42b4d9f5eb90cdaae1154359e374c9e598b5887388177b7_prof);

        
        $__internal_f1ae76de59c8be7e727bcc0643d50e049eef587ec2f97eca74ee44662d215c4b->leave($__internal_f1ae76de59c8be7e727bcc0643d50e049eef587ec2f97eca74ee44662d215c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
