<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2e19e4bfd8672deb9def05088e9007699ca0e397f9173b176435a32badaa5bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c6e03ffad5a54f0441b62277af666e723a8c5bd766c97099f967a20954495a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c6e03ffad5a54f0441b62277af666e723a8c5bd766c97099f967a20954495a->enter($__internal_f1c6e03ffad5a54f0441b62277af666e723a8c5bd766c97099f967a20954495a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_127849b31940007cde50138100e44dcbe3f2ebdc8a0cd7a0d462e1c103c5f477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127849b31940007cde50138100e44dcbe3f2ebdc8a0cd7a0d462e1c103c5f477->enter($__internal_127849b31940007cde50138100e44dcbe3f2ebdc8a0cd7a0d462e1c103c5f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c6e03ffad5a54f0441b62277af666e723a8c5bd766c97099f967a20954495a->leave($__internal_f1c6e03ffad5a54f0441b62277af666e723a8c5bd766c97099f967a20954495a_prof);

        
        $__internal_127849b31940007cde50138100e44dcbe3f2ebdc8a0cd7a0d462e1c103c5f477->leave($__internal_127849b31940007cde50138100e44dcbe3f2ebdc8a0cd7a0d462e1c103c5f477_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fc68a2c3881a2667dd4caf88266ecd7fd5fdc69f47c48e1a5d1f357aecf902b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc68a2c3881a2667dd4caf88266ecd7fd5fdc69f47c48e1a5d1f357aecf902b->enter($__internal_2fc68a2c3881a2667dd4caf88266ecd7fd5fdc69f47c48e1a5d1f357aecf902b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c81b2cf2d1e7eda53de52124d8a5fec0e1f40ab46d996ab72aeb1339e1ebb095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81b2cf2d1e7eda53de52124d8a5fec0e1f40ab46d996ab72aeb1339e1ebb095->enter($__internal_c81b2cf2d1e7eda53de52124d8a5fec0e1f40ab46d996ab72aeb1339e1ebb095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c81b2cf2d1e7eda53de52124d8a5fec0e1f40ab46d996ab72aeb1339e1ebb095->leave($__internal_c81b2cf2d1e7eda53de52124d8a5fec0e1f40ab46d996ab72aeb1339e1ebb095_prof);

        
        $__internal_2fc68a2c3881a2667dd4caf88266ecd7fd5fdc69f47c48e1a5d1f357aecf902b->leave($__internal_2fc68a2c3881a2667dd4caf88266ecd7fd5fdc69f47c48e1a5d1f357aecf902b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_815ab6c7783197960fcd3b2af7fb8693e60a5c4a75025ab0afcd241f7aae0ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815ab6c7783197960fcd3b2af7fb8693e60a5c4a75025ab0afcd241f7aae0ace->enter($__internal_815ab6c7783197960fcd3b2af7fb8693e60a5c4a75025ab0afcd241f7aae0ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97a2dc6a95360a492b16f852599f1fef78e5b04d57cf9ff7d530aea4216007ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a2dc6a95360a492b16f852599f1fef78e5b04d57cf9ff7d530aea4216007ad->enter($__internal_97a2dc6a95360a492b16f852599f1fef78e5b04d57cf9ff7d530aea4216007ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_97a2dc6a95360a492b16f852599f1fef78e5b04d57cf9ff7d530aea4216007ad->leave($__internal_97a2dc6a95360a492b16f852599f1fef78e5b04d57cf9ff7d530aea4216007ad_prof);

        
        $__internal_815ab6c7783197960fcd3b2af7fb8693e60a5c4a75025ab0afcd241f7aae0ace->leave($__internal_815ab6c7783197960fcd3b2af7fb8693e60a5c4a75025ab0afcd241f7aae0ace_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f30ed9ce799468b17b81e50b1c019912c5d268b05614d5b4a843a772e24f2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f30ed9ce799468b17b81e50b1c019912c5d268b05614d5b4a843a772e24f2ef->enter($__internal_2f30ed9ce799468b17b81e50b1c019912c5d268b05614d5b4a843a772e24f2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16f98252580526d1a67d0c5e41972286da51d193fe9a18724107b38400889b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f98252580526d1a67d0c5e41972286da51d193fe9a18724107b38400889b85->enter($__internal_16f98252580526d1a67d0c5e41972286da51d193fe9a18724107b38400889b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_16f98252580526d1a67d0c5e41972286da51d193fe9a18724107b38400889b85->leave($__internal_16f98252580526d1a67d0c5e41972286da51d193fe9a18724107b38400889b85_prof);

        
        $__internal_2f30ed9ce799468b17b81e50b1c019912c5d268b05614d5b4a843a772e24f2ef->leave($__internal_2f30ed9ce799468b17b81e50b1c019912c5d268b05614d5b4a843a772e24f2ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
