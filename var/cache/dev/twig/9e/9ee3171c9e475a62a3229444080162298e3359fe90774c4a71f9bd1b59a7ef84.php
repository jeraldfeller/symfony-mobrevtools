<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fd6bfe607bcaadca8667cff5574af6ce13b34a3eb830306e96b43534707db778 extends Twig_Template
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
        $__internal_0bc5d9a728d7c5ebd0a49bd05252897b000e91ce55f74f3c484cefa3599abdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc5d9a728d7c5ebd0a49bd05252897b000e91ce55f74f3c484cefa3599abdb8->enter($__internal_0bc5d9a728d7c5ebd0a49bd05252897b000e91ce55f74f3c484cefa3599abdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f710b3503a7718792303345f884d0187fbcedc02a70eb8e97379efbed6591fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f710b3503a7718792303345f884d0187fbcedc02a70eb8e97379efbed6591fc3->enter($__internal_f710b3503a7718792303345f884d0187fbcedc02a70eb8e97379efbed6591fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0bc5d9a728d7c5ebd0a49bd05252897b000e91ce55f74f3c484cefa3599abdb8->leave($__internal_0bc5d9a728d7c5ebd0a49bd05252897b000e91ce55f74f3c484cefa3599abdb8_prof);

        
        $__internal_f710b3503a7718792303345f884d0187fbcedc02a70eb8e97379efbed6591fc3->leave($__internal_f710b3503a7718792303345f884d0187fbcedc02a70eb8e97379efbed6591fc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
