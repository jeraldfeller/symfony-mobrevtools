<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2d481a650911b2bcff592189240468d538b8d95c9771da246eb06edeaf5acea5 extends Twig_Template
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
        $__internal_26c3b578912d05684918f6201caab11ae62184dec0838e3c04c2d54327f00cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c3b578912d05684918f6201caab11ae62184dec0838e3c04c2d54327f00cb6->enter($__internal_26c3b578912d05684918f6201caab11ae62184dec0838e3c04c2d54327f00cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c721d03630617028c0b1be2a2863074ef92d1c9c298f3b0a0b5f1b973c397668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c721d03630617028c0b1be2a2863074ef92d1c9c298f3b0a0b5f1b973c397668->enter($__internal_c721d03630617028c0b1be2a2863074ef92d1c9c298f3b0a0b5f1b973c397668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_26c3b578912d05684918f6201caab11ae62184dec0838e3c04c2d54327f00cb6->leave($__internal_26c3b578912d05684918f6201caab11ae62184dec0838e3c04c2d54327f00cb6_prof);

        
        $__internal_c721d03630617028c0b1be2a2863074ef92d1c9c298f3b0a0b5f1b973c397668->leave($__internal_c721d03630617028c0b1be2a2863074ef92d1c9c298f3b0a0b5f1b973c397668_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
