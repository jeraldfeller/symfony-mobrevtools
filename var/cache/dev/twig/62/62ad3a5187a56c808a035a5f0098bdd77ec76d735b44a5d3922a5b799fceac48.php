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
        $__internal_898cadd9c2e85f2881695642b10af903eba381edd8c6e844286abab541378175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898cadd9c2e85f2881695642b10af903eba381edd8c6e844286abab541378175->enter($__internal_898cadd9c2e85f2881695642b10af903eba381edd8c6e844286abab541378175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:icon.html.twig"));

        $__internal_9db910ee9fc0b342814c6f3d2afc9b0b80083bf62b97887ee35539e596770b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db910ee9fc0b342814c6f3d2afc9b0b80083bf62b97887ee35539e596770b6b->enter($__internal_9db910ee9fc0b342814c6f3d2afc9b0b80083bf62b97887ee35539e596770b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:icon.html.twig"));

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
        
        $__internal_898cadd9c2e85f2881695642b10af903eba381edd8c6e844286abab541378175->leave($__internal_898cadd9c2e85f2881695642b10af903eba381edd8c6e844286abab541378175_prof);

        
        $__internal_9db910ee9fc0b342814c6f3d2afc9b0b80083bf62b97887ee35539e596770b6b->leave($__internal_9db910ee9fc0b342814c6f3d2afc9b0b80083bf62b97887ee35539e596770b6b_prof);

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
