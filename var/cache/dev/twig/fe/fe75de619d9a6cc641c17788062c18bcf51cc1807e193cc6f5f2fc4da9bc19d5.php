<?php

/* @SgDatatables/Datatable/columns.html.twig */
class __TwigTemplate_434289a66f87e3a441fc71b87bbd63d8354d944a25a8608bd0eeae7afbbb5d2d extends Twig_Template
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
        $__internal_b371f096d5c8580645bd4304f13b812246d8953c528643b04adf64374807d64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b371f096d5c8580645bd4304f13b812246d8953c528643b04adf64374807d64b->enter($__internal_b371f096d5c8580645bd4304f13b812246d8953c528643b04adf64374807d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/columns.html.twig"));

        $__internal_de08557fe893e61f1bab9d6808bc60d1668f0c88f9a33dfe6137445d9221edf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de08557fe893e61f1bab9d6808bc60d1668f0c88f9a33dfe6137445d9221edf5->enter($__internal_de08557fe893e61f1bab9d6808bc60d1668f0c88f9a33dfe6137445d9221edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/columns.html.twig"));

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
            $this->loadTemplate($this->getAttribute($context["column"], "getTemplate", array()), "@SgDatatables/Datatable/columns.html.twig", 11)->display($context);
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
        
        $__internal_b371f096d5c8580645bd4304f13b812246d8953c528643b04adf64374807d64b->leave($__internal_b371f096d5c8580645bd4304f13b812246d8953c528643b04adf64374807d64b_prof);

        
        $__internal_de08557fe893e61f1bab9d6808bc60d1668f0c88f9a33dfe6137445d9221edf5->leave($__internal_de08557fe893e61f1bab9d6808bc60d1668f0c88f9a33dfe6137445d9221edf5_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/columns.html.twig";
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
", "@SgDatatables/Datatable/columns.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\columns.html.twig");
    }
}
