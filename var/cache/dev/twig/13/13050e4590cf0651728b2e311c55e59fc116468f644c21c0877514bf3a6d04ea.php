<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5ff1b3496291d2dbf91cb11b4d58b7ef993b8d46e2ce3a8a1e89cebbe4a98496 extends Twig_Template
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
        $__internal_271c7301f52ecc0af2559b9f5f00fa56aeb36185d8fde1441a84f484acb8570c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271c7301f52ecc0af2559b9f5f00fa56aeb36185d8fde1441a84f484acb8570c->enter($__internal_271c7301f52ecc0af2559b9f5f00fa56aeb36185d8fde1441a84f484acb8570c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_509b0ab85e3f523010a97dbed1d8ce95ed88b64a0ee198b14035e3a3b8ba1bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509b0ab85e3f523010a97dbed1d8ce95ed88b64a0ee198b14035e3a3b8ba1bec->enter($__internal_509b0ab85e3f523010a97dbed1d8ce95ed88b64a0ee198b14035e3a3b8ba1bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_271c7301f52ecc0af2559b9f5f00fa56aeb36185d8fde1441a84f484acb8570c->leave($__internal_271c7301f52ecc0af2559b9f5f00fa56aeb36185d8fde1441a84f484acb8570c_prof);

        
        $__internal_509b0ab85e3f523010a97dbed1d8ce95ed88b64a0ee198b14035e3a3b8ba1bec->leave($__internal_509b0ab85e3f523010a97dbed1d8ce95ed88b64a0ee198b14035e3a3b8ba1bec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
