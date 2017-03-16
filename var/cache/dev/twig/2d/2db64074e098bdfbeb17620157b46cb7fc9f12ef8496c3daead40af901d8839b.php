<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_85cc88737432beff2edfa3a8c75fe32752a9f5d73459be98e794fc7f9e1e0764 extends Twig_Template
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
        $__internal_ee1b6f4047f29f11d85935f2f7af6cca45df40e4680cac74fcf9f35a1e598f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1b6f4047f29f11d85935f2f7af6cca45df40e4680cac74fcf9f35a1e598f3a->enter($__internal_ee1b6f4047f29f11d85935f2f7af6cca45df40e4680cac74fcf9f35a1e598f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2d4f97430aae36fff3f85fbbb24c3bc444fdc54f69cb12b42768af2c36982b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4f97430aae36fff3f85fbbb24c3bc444fdc54f69cb12b42768af2c36982b44->enter($__internal_2d4f97430aae36fff3f85fbbb24c3bc444fdc54f69cb12b42768af2c36982b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ee1b6f4047f29f11d85935f2f7af6cca45df40e4680cac74fcf9f35a1e598f3a->leave($__internal_ee1b6f4047f29f11d85935f2f7af6cca45df40e4680cac74fcf9f35a1e598f3a_prof);

        
        $__internal_2d4f97430aae36fff3f85fbbb24c3bc444fdc54f69cb12b42768af2c36982b44->leave($__internal_2d4f97430aae36fff3f85fbbb24c3bc444fdc54f69cb12b42768af2c36982b44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
