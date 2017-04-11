<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_cb9fde83974f858f6618f1e17d152eb69c654cb7cf4e68893c7b3adf51ecf4f3 extends Twig_Template
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
        $__internal_efb0cbc6c0d0634d3d4ab96727606e74dcaf1c63b9e1441eb67dd0f1cd21b2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb0cbc6c0d0634d3d4ab96727606e74dcaf1c63b9e1441eb67dd0f1cd21b2fd->enter($__internal_efb0cbc6c0d0634d3d4ab96727606e74dcaf1c63b9e1441eb67dd0f1cd21b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        $__internal_9ddfc8b44219aaaee52eb9e304e8d9d6574231d7b3f6a29da4186e97cf2e65ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddfc8b44219aaaee52eb9e304e8d9d6574231d7b3f6a29da4186e97cf2e65ec->enter($__internal_9ddfc8b44219aaaee52eb9e304e8d9d6574231d7b3f6a29da4186e97cf2e65ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            $this->loadTemplate("@Twig/Exception/traces.xml.twig", "TwigBundle:Exception:exception.xml.twig", 6)->display(array("exception" => $context["e"]));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_efb0cbc6c0d0634d3d4ab96727606e74dcaf1c63b9e1441eb67dd0f1cd21b2fd->leave($__internal_efb0cbc6c0d0634d3d4ab96727606e74dcaf1c63b9e1441eb67dd0f1cd21b2fd_prof);

        
        $__internal_9ddfc8b44219aaaee52eb9e304e8d9d6574231d7b3f6a29da4186e97cf2e65ec->leave($__internal_9ddfc8b44219aaaee52eb9e304e8d9d6574231d7b3f6a29da4186e97cf2e65ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  50 => 7,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
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

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{% include '@Twig/Exception/traces.xml.twig' with { 'exception': e } only %}
    </exception>
{% endfor %}
</error>
", "TwigBundle:Exception:exception.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.xml.twig");
    }
}
