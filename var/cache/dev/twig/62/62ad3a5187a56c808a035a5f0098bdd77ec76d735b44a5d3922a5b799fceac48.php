<?php

/* SgDatatablesBundle:Action:icon.html.twig */
class __TwigTemplate_751fc9bbb8d9a76d8a9482c9e2168d010ff9eaed0d3e45861c7efb2e4402b876 extends Twig_Template
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
        $__internal_2c24881062486d5cb7515f7d726d0d09783e8de3e44314b31b485709185d5dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c24881062486d5cb7515f7d726d0d09783e8de3e44314b31b485709185d5dba->enter($__internal_2c24881062486d5cb7515f7d726d0d09783e8de3e44314b31b485709185d5dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:icon.html.twig"));

        $__internal_acbfdaea58c99b5fbbd64efacbf4e1afffeaaa6db9bb4e7340e413eaa383d878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbfdaea58c99b5fbbd64efacbf4e1afffeaaa6db9bb4e7340e413eaa383d878->enter($__internal_acbfdaea58c99b5fbbd64efacbf4e1afffeaaa6db9bb4e7340e413eaa383d878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:icon.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c24881062486d5cb7515f7d726d0d09783e8de3e44314b31b485709185d5dba->leave($__internal_2c24881062486d5cb7515f7d726d0d09783e8de3e44314b31b485709185d5dba_prof);

        
        $__internal_acbfdaea58c99b5fbbd64efacbf4e1afffeaaa6db9bb4e7340e413eaa383d878->leave($__internal_acbfdaea58c99b5fbbd64efacbf4e1afffeaaa6db9bb4e7340e413eaa383d878_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% spaceless %}
    <i class=\"{{ icon }}\"></i> {{ label }}
{% endspaceless %}
", "SgDatatablesBundle:Action:icon.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Action/icon.html.twig");
    }
}
