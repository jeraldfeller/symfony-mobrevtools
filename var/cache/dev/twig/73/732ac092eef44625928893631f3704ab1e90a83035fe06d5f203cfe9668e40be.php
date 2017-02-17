<?php

/* @SgDatatables/Datatable/features.html.twig */
class __TwigTemplate_c4e9c942513672280ea52ff703feb168cc1a8dc14015cf0acd306a43479a8683 extends Twig_Template
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
        $__internal_553166c2e9a0c1a3b13c31771061a50818db54c3a112b322b7384a1990ff88f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553166c2e9a0c1a3b13c31771061a50818db54c3a112b322b7384a1990ff88f5->enter($__internal_553166c2e9a0c1a3b13c31771061a50818db54c3a112b322b7384a1990ff88f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/features.html.twig"));

        $__internal_3358d284bbe58355ebbc5e85d4f5b51c50ca3718c7e14025b4825942dc2e5aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3358d284bbe58355ebbc5e85d4f5b51c50ca3718c7e14025b4825942dc2e5aa9->enter($__internal_3358d284bbe58355ebbc5e85d4f5b51c50ca3718c7e14025b4825942dc2e5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/features.html.twig"));

        // line 9
        echo "\"autoWidth\": ";
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "autoWidth", array())) ? ("true") : ("false"));
        echo ",
\"deferRender\": ";
        // line 10
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "deferRender", array())) ? ("true") : ("false"));
        echo ",
\"info\": ";
        // line 11
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "info", array())) ? ("true") : ("false"));
        echo ",
\"jQueryUI\": ";
        // line 12
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "jQueryUI", array())) ? ("true") : ("false"));
        echo ",
\"lengthChange\": ";
        // line 13
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "lengthChange", array())) ? ("true") : ("false"));
        echo ",
\"ordering\": ";
        // line 14
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "ordering", array())) ? ("true") : ("false"));
        echo ",
\"paging\": ";
        // line 15
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "paging", array())) ? ("true") : ("false"));
        echo ",
\"processing\": ";
        // line 16
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "processing", array())) ? ("true") : ("false"));
        echo ",
\"scrollX\": ";
        // line 17
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "scrollX", array())) ? ("true") : ("false"));
        echo ",
\"scrollY\": \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "scrollY", array()), "html", null, true);
        echo "\",
\"searching\": ";
        // line 19
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "searching", array())) ? ("true") : ("false"));
        echo ",

";
        // line 22
        echo "
\"stateSave\": ";
        // line 23
        echo (($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "stateSave", array())) ? ("true") : ("false"));
        echo ",
\"delay\": ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "delay", array()), "html", null, true);
        echo ",

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "extensions", array()));
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
        foreach ($context['_seq'] as $context["extension"] => $context["options"]) {
            // line 27
            echo "    ";
            if (("buttons" == $context["extension"])) {
                // line 28
                echo "        \"buttons\": [
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["options"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 30
                    echo "                ";
                    if ($this->getAttribute($context["option"], "action", array(), "any", true, true)) {
                        // line 31
                        echo "                {
                    \"text\": \"";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "text", array()), "html", null, true);
                        echo "\",
                    \"action\": ";
                        // line 33
                        echo twig_include($this->env, $context, $this->getAttribute($context["option"], "action", array()));
                        echo "
                },
                ";
                    } else {
                        // line 36
                        echo "                    ";
                        echo twig_jsonencode_filter($context["option"]);
                        echo ",
                ";
                    }
                    // line 38
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        ],
    ";
            } else {
                // line 41
                echo "        \"";
                echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                echo "\": ";
                echo twig_jsonencode_filter($context["options"]);
                echo ",
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['extension'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_553166c2e9a0c1a3b13c31771061a50818db54c3a112b322b7384a1990ff88f5->leave($__internal_553166c2e9a0c1a3b13c31771061a50818db54c3a112b322b7384a1990ff88f5_prof);

        
        $__internal_3358d284bbe58355ebbc5e85d4f5b51c50ca3718c7e14025b4825942dc2e5aa9->leave($__internal_3358d284bbe58355ebbc5e85d4f5b51c50ca3718c7e14025b4825942dc2e5aa9_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  159 => 39,  145 => 38,  139 => 36,  133 => 33,  129 => 32,  126 => 31,  123 => 30,  106 => 29,  103 => 28,  100 => 27,  83 => 26,  78 => 24,  74 => 23,  71 => 22,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  25 => 9,);
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
\"autoWidth\": {{ view_features.autoWidth ? 'true' : 'false' }},
\"deferRender\": {{ view_features.deferRender ? 'true' : 'false' }},
\"info\": {{ view_features.info ? 'true' : 'false' }},
\"jQueryUI\": {{ view_features.jQueryUI ? 'true' : 'false' }},
\"lengthChange\": {{ view_features.lengthChange ? 'true' : 'false' }},
\"ordering\": {{ view_features.ordering ? 'true' : 'false' }},
\"paging\": {{ view_features.paging ? 'true' : 'false' }},
\"processing\": {{ view_features.processing ? 'true' : 'false' }},
\"scrollX\": {{ view_features.scrollX ? 'true' : 'false' }},
\"scrollY\": \"{{ view_features.scrollY }}\",
\"searching\": {{ view_features.searching ? 'true' : 'false' }},

{# \"serverSide\" -> Ajax.html.twig #}

\"stateSave\": {{ view_features.stateSave ? 'true' : 'false' }},
\"delay\": {{ view_features.delay }},

{% for extension, options in view_features.extensions %}
    {% if 'buttons' == extension %}
        \"buttons\": [
            {% for option in options %}
                {% if option.action is defined %}
                {
                    \"text\": \"{{ option.text }}\",
                    \"action\": {{ include(option.action|raw) }}
                },
                {% else %}
                    {{ option|json_encode|raw }},
                {% endif %}
            {% endfor %}
        ],
    {% else %}
        \"{{ extension }}\": {{ options|json_encode|raw }},
    {% endif %}
{% endfor %}
", "@SgDatatables/Datatable/features.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\features.html.twig");
    }
}
