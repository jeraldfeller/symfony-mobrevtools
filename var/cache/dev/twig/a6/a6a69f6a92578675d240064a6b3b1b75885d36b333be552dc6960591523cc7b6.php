<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_413ed890f23ee8e56426582c09d114cb570bea315f70bde6d509bce804448684 extends Twig_Template
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
        $__internal_41f58414beaf51618488572538825a6e8277d33f017e38ad489c55d08ff46022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f58414beaf51618488572538825a6e8277d33f017e38ad489c55d08ff46022->enter($__internal_41f58414beaf51618488572538825a6e8277d33f017e38ad489c55d08ff46022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c8833d78b7a4465160f024ad96aa68975d63a87993c20bf96f4fcb90a96e60c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8833d78b7a4465160f024ad96aa68975d63a87993c20bf96f4fcb90a96e60c3->enter($__internal_c8833d78b7a4465160f024ad96aa68975d63a87993c20bf96f4fcb90a96e60c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_41f58414beaf51618488572538825a6e8277d33f017e38ad489c55d08ff46022->leave($__internal_41f58414beaf51618488572538825a6e8277d33f017e38ad489c55d08ff46022_prof);

        
        $__internal_c8833d78b7a4465160f024ad96aa68975d63a87993c20bf96f4fcb90a96e60c3->leave($__internal_c8833d78b7a4465160f024ad96aa68975d63a87993c20bf96f4fcb90a96e60c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
