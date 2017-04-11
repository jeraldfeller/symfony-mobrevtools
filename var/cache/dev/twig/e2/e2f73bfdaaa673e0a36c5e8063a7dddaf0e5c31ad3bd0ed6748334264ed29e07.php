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
        $__internal_45504dbc4b22c777b1a08f45377d8e5a5865011b685acc3d6335e0c42ad5d9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45504dbc4b22c777b1a08f45377d8e5a5865011b685acc3d6335e0c42ad5d9dc->enter($__internal_45504dbc4b22c777b1a08f45377d8e5a5865011b685acc3d6335e0c42ad5d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_48ba2a6e8d8efb44981d79aac4fc27325158c6943a30ec1977ed9fb98a01f54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ba2a6e8d8efb44981d79aac4fc27325158c6943a30ec1977ed9fb98a01f54d->enter($__internal_48ba2a6e8d8efb44981d79aac4fc27325158c6943a30ec1977ed9fb98a01f54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_45504dbc4b22c777b1a08f45377d8e5a5865011b685acc3d6335e0c42ad5d9dc->leave($__internal_45504dbc4b22c777b1a08f45377d8e5a5865011b685acc3d6335e0c42ad5d9dc_prof);

        
        $__internal_48ba2a6e8d8efb44981d79aac4fc27325158c6943a30ec1977ed9fb98a01f54d->leave($__internal_48ba2a6e8d8efb44981d79aac4fc27325158c6943a30ec1977ed9fb98a01f54d_prof);

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
