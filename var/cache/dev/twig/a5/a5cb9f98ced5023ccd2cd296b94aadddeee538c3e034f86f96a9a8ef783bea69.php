<?php

/* SgDatatablesBundle:Datatable:columns.html.twig */
class __TwigTemplate_77a41107a3ce9967692e43f623af30fbb1f761d0d4685a793441242a4b1a14c4 extends Twig_Template
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
        $__internal_06fa6654c03aa6af1f6d7c89215909d8142f19aad82de157bd49d94f18e7cd3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06fa6654c03aa6af1f6d7c89215909d8142f19aad82de157bd49d94f18e7cd3b->enter($__internal_06fa6654c03aa6af1f6d7c89215909d8142f19aad82de157bd49d94f18e7cd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:columns.html.twig"));

        $__internal_72f5325c3c79bd5eca45383660e1bfda0a0ddefa67a0b989126ac7958b53a2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f5325c3c79bd5eca45383660e1bfda0a0ddefa67a0b989126ac7958b53a2fb->enter($__internal_72f5325c3c79bd5eca45383660e1bfda0a0ddefa67a0b989126ac7958b53a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:columns.html.twig"));

        // line 9
        echo "\"columns\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            $this->loadTemplate($this->getAttribute($context["column"], "getTemplate", array()), "SgDatatablesBundle:Datatable:columns.html.twig", 11)->display($context);
            // line 12
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_06fa6654c03aa6af1f6d7c89215909d8142f19aad82de157bd49d94f18e7cd3b->leave($__internal_06fa6654c03aa6af1f6d7c89215909d8142f19aad82de157bd49d94f18e7cd3b_prof);

        
        $__internal_72f5325c3c79bd5eca45383660e1bfda0a0ddefa67a0b989126ac7958b53a2fb->leave($__internal_72f5325c3c79bd5eca45383660e1bfda0a0ddefa67a0b989126ac7958b53a2fb_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  48 => 12,  45 => 11,  28 => 10,  25 => 9,);
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
\"columns\": [
    {% for column in view_columns %}
        {% include column.getTemplate %}
    {% endfor %}
]
", "SgDatatablesBundle:Datatable:columns.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/columns.html.twig");
    }
}
