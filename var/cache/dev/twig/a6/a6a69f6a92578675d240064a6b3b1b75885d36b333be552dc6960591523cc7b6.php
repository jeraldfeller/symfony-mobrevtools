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
        $__internal_00d6f8357fb4daf7f76d44a319c1f72aa29f443a6846c81cf7d5694824e33179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d6f8357fb4daf7f76d44a319c1f72aa29f443a6846c81cf7d5694824e33179->enter($__internal_00d6f8357fb4daf7f76d44a319c1f72aa29f443a6846c81cf7d5694824e33179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9fa79a42ecd26c084d795676ff8d01f4d13e13e7b1754d1d74cb0ddec95d1d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa79a42ecd26c084d795676ff8d01f4d13e13e7b1754d1d74cb0ddec95d1d71->enter($__internal_9fa79a42ecd26c084d795676ff8d01f4d13e13e7b1754d1d74cb0ddec95d1d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_00d6f8357fb4daf7f76d44a319c1f72aa29f443a6846c81cf7d5694824e33179->leave($__internal_00d6f8357fb4daf7f76d44a319c1f72aa29f443a6846c81cf7d5694824e33179_prof);

        
        $__internal_9fa79a42ecd26c084d795676ff8d01f4d13e13e7b1754d1d74cb0ddec95d1d71->leave($__internal_9fa79a42ecd26c084d795676ff8d01f4d13e13e7b1754d1d74cb0ddec95d1d71_prof);

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
