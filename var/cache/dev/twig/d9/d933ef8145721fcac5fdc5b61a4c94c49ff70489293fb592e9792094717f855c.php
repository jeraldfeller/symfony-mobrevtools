<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_07235cec271b0570e565d6c3b66e1b9e899d812868fcfb6bdc3d8d27c4a873c9 extends Twig_Template
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
        $__internal_4b260f8790b5da845523b752c88ad3d93cb4ea959ae30de2a5017a9da92dfb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b260f8790b5da845523b752c88ad3d93cb4ea959ae30de2a5017a9da92dfb3e->enter($__internal_4b260f8790b5da845523b752c88ad3d93cb4ea959ae30de2a5017a9da92dfb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_59856470e07978adb2685550eca3b43a924da21411957ea88bdcf2b05904bd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59856470e07978adb2685550eca3b43a924da21411957ea88bdcf2b05904bd5a->enter($__internal_59856470e07978adb2685550eca3b43a924da21411957ea88bdcf2b05904bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b260f8790b5da845523b752c88ad3d93cb4ea959ae30de2a5017a9da92dfb3e->leave($__internal_4b260f8790b5da845523b752c88ad3d93cb4ea959ae30de2a5017a9da92dfb3e_prof);

        
        $__internal_59856470e07978adb2685550eca3b43a924da21411957ea88bdcf2b05904bd5a->leave($__internal_59856470e07978adb2685550eca3b43a924da21411957ea88bdcf2b05904bd5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
