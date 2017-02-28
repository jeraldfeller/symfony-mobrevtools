<?php

/* @SgDatatables/Action/icon.html.twig */
class __TwigTemplate_839f34c678ceb2bf01bf4eed7caed79400edcf4b99a9b6c685400b638d3d9ca9 extends Twig_Template
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
        $__internal_24df83abec11446b6eaeaa31f14a01fefdd7eddf4c694fcd496790008671128b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24df83abec11446b6eaeaa31f14a01fefdd7eddf4c694fcd496790008671128b->enter($__internal_24df83abec11446b6eaeaa31f14a01fefdd7eddf4c694fcd496790008671128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/icon.html.twig"));

        $__internal_fd3c340268d8ac8165b2a6c07a15851583a8d4614cdfb1814d0c90c035bdd32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3c340268d8ac8165b2a6c07a15851583a8d4614cdfb1814d0c90c035bdd32e->enter($__internal_fd3c340268d8ac8165b2a6c07a15851583a8d4614cdfb1814d0c90c035bdd32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/icon.html.twig"));

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
        
        $__internal_24df83abec11446b6eaeaa31f14a01fefdd7eddf4c694fcd496790008671128b->leave($__internal_24df83abec11446b6eaeaa31f14a01fefdd7eddf4c694fcd496790008671128b_prof);

        
        $__internal_fd3c340268d8ac8165b2a6c07a15851583a8d4614cdfb1814d0c90c035bdd32e->leave($__internal_fd3c340268d8ac8165b2a6c07a15851583a8d4614cdfb1814d0c90c035bdd32e_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Action/icon.html.twig";
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
", "@SgDatatables/Action/icon.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Action\\icon.html.twig");
    }
}
