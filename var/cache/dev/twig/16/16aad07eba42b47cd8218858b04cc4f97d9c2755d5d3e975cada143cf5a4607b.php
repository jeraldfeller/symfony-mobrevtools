<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_14eb860ce8da5f00eb2fd68e45f7ddb6d5d08f1e0b771334149e8aceefbbcb61 extends Twig_Template
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
        $__internal_eaa1890ccaaace2aaa76dc8dc2dc3af8cfa5ad4c7082ff8e488ade5fd7508769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa1890ccaaace2aaa76dc8dc2dc3af8cfa5ad4c7082ff8e488ade5fd7508769->enter($__internal_eaa1890ccaaace2aaa76dc8dc2dc3af8cfa5ad4c7082ff8e488ade5fd7508769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_04c84f9350705408f609056c8243b67dc9dfc428c29e9aeb0ad806c42326ac14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c84f9350705408f609056c8243b67dc9dfc428c29e9aeb0ad806c42326ac14->enter($__internal_04c84f9350705408f609056c8243b67dc9dfc428c29e9aeb0ad806c42326ac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_eaa1890ccaaace2aaa76dc8dc2dc3af8cfa5ad4c7082ff8e488ade5fd7508769->leave($__internal_eaa1890ccaaace2aaa76dc8dc2dc3af8cfa5ad4c7082ff8e488ade5fd7508769_prof);

        
        $__internal_04c84f9350705408f609056c8243b67dc9dfc428c29e9aeb0ad806c42326ac14->leave($__internal_04c84f9350705408f609056c8243b67dc9dfc428c29e9aeb0ad806c42326ac14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
