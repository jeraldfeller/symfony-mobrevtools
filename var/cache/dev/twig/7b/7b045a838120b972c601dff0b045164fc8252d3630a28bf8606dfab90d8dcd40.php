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
        $__internal_fc5c5513d92508d52cebb1e51dcdb3de8a8fdbf21cbc5ad677aa4ee1632984fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5c5513d92508d52cebb1e51dcdb3de8a8fdbf21cbc5ad677aa4ee1632984fb->enter($__internal_fc5c5513d92508d52cebb1e51dcdb3de8a8fdbf21cbc5ad677aa4ee1632984fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_07b3e51dd708a3081de71ad8ccf468f7b511591e000a009db7e47aa88f7cd3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b3e51dd708a3081de71ad8ccf468f7b511591e000a009db7e47aa88f7cd3da->enter($__internal_07b3e51dd708a3081de71ad8ccf468f7b511591e000a009db7e47aa88f7cd3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fc5c5513d92508d52cebb1e51dcdb3de8a8fdbf21cbc5ad677aa4ee1632984fb->leave($__internal_fc5c5513d92508d52cebb1e51dcdb3de8a8fdbf21cbc5ad677aa4ee1632984fb_prof);

        
        $__internal_07b3e51dd708a3081de71ad8ccf468f7b511591e000a009db7e47aa88f7cd3da->leave($__internal_07b3e51dd708a3081de71ad8ccf468f7b511591e000a009db7e47aa88f7cd3da_prof);

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
