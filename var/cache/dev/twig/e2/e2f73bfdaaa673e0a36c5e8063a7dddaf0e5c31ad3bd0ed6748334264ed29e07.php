<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73436ba810e44fa54b35dbdafdd8931743bb3418379962027e803f9c65a1b67b extends Twig_Template
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
        $__internal_44bc74f41466717adf9d4867e36f71c28a949c860f818d1cde701f241bc606e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bc74f41466717adf9d4867e36f71c28a949c860f818d1cde701f241bc606e2->enter($__internal_44bc74f41466717adf9d4867e36f71c28a949c860f818d1cde701f241bc606e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b648fce70fa64556b6c96640fd39233340304c5e91749c1fc05a3cc168ea80ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b648fce70fa64556b6c96640fd39233340304c5e91749c1fc05a3cc168ea80ed->enter($__internal_b648fce70fa64556b6c96640fd39233340304c5e91749c1fc05a3cc168ea80ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_44bc74f41466717adf9d4867e36f71c28a949c860f818d1cde701f241bc606e2->leave($__internal_44bc74f41466717adf9d4867e36f71c28a949c860f818d1cde701f241bc606e2_prof);

        
        $__internal_b648fce70fa64556b6c96640fd39233340304c5e91749c1fc05a3cc168ea80ed->leave($__internal_b648fce70fa64556b6c96640fd39233340304c5e91749c1fc05a3cc168ea80ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
