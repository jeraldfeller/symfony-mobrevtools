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
        $__internal_e5d1c13913ab0914ffa0f13d917cf07a51dc0bad1543d38f51e2561e8676715b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d1c13913ab0914ffa0f13d917cf07a51dc0bad1543d38f51e2561e8676715b->enter($__internal_e5d1c13913ab0914ffa0f13d917cf07a51dc0bad1543d38f51e2561e8676715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0b5f0e4a512121e96d09ba15d805dda1e42420443030cd78ad5a5654900088bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f0e4a512121e96d09ba15d805dda1e42420443030cd78ad5a5654900088bf->enter($__internal_0b5f0e4a512121e96d09ba15d805dda1e42420443030cd78ad5a5654900088bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_e5d1c13913ab0914ffa0f13d917cf07a51dc0bad1543d38f51e2561e8676715b->leave($__internal_e5d1c13913ab0914ffa0f13d917cf07a51dc0bad1543d38f51e2561e8676715b_prof);

        
        $__internal_0b5f0e4a512121e96d09ba15d805dda1e42420443030cd78ad5a5654900088bf->leave($__internal_0b5f0e4a512121e96d09ba15d805dda1e42420443030cd78ad5a5654900088bf_prof);

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
