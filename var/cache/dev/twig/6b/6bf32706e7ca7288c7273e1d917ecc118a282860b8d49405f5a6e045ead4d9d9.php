<?php

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_0094472ffe52aaedb24cf24ae6ca0196a09915a9a01e4e5c31e61e29e9aeb648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d64790f49616c69d88404118aeee14252b1d4746e2f2a4758076cf70e60421a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64790f49616c69d88404118aeee14252b1d4746e2f2a4758076cf70e60421a8->enter($__internal_d64790f49616c69d88404118aeee14252b1d4746e2f2a4758076cf70e60421a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $__internal_b91e2265e9107808d6f59efbd3c18fd2ee2bab15487216731b2741446f75ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91e2265e9107808d6f59efbd3c18fd2ee2bab15487216731b2741446f75ae13->enter($__internal_b91e2265e9107808d6f59efbd3c18fd2ee2bab15487216731b2741446f75ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64790f49616c69d88404118aeee14252b1d4746e2f2a4758076cf70e60421a8->leave($__internal_d64790f49616c69d88404118aeee14252b1d4746e2f2a4758076cf70e60421a8_prof);

        
        $__internal_b91e2265e9107808d6f59efbd3c18fd2ee2bab15487216731b2741446f75ae13->leave($__internal_b91e2265e9107808d6f59efbd3c18fd2ee2bab15487216731b2741446f75ae13_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_85cdeb5a2a12d65d569cc3e9f4c479994d19bd147cb327060e9e76c2c61e725d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cdeb5a2a12d65d569cc3e9f4c479994d19bd147cb327060e9e76c2c61e725d->enter($__internal_85cdeb5a2a12d65d569cc3e9f4c479994d19bd147cb327060e9e76c2c61e725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3882fc708acb3fdb8d5b37e9451bd0a949ff352b488470011876e95aa697e727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3882fc708acb3fdb8d5b37e9451bd0a949ff352b488470011876e95aa697e727->enter($__internal_3882fc708acb3fdb8d5b37e9451bd0a949ff352b488470011876e95aa697e727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_3882fc708acb3fdb8d5b37e9451bd0a949ff352b488470011876e95aa697e727->leave($__internal_3882fc708acb3fdb8d5b37e9451bd0a949ff352b488470011876e95aa697e727_prof);

        
        $__internal_85cdeb5a2a12d65d569cc3e9f4c479994d19bd147cb327060e9e76c2c61e725d->leave($__internal_85cdeb5a2a12d65d569cc3e9f4c479994d19bd147cb327060e9e76c2c61e725d_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38d5f1a51c6385a5c9703168960ae3638cef336dccfe0924ae361f14ac5ec4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d5f1a51c6385a5c9703168960ae3638cef336dccfe0924ae361f14ac5ec4a3->enter($__internal_38d5f1a51c6385a5c9703168960ae3638cef336dccfe0924ae361f14ac5ec4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e10f7a316e7991f4ac7b12e61f9e956e55a0214f9bb755c48faa06ae91026386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10f7a316e7991f4ac7b12e61f9e956e55a0214f9bb755c48faa06ae91026386->enter($__internal_e10f7a316e7991f4ac7b12e61f9e956e55a0214f9bb755c48faa06ae91026386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, (((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) ? (twig_length_filter($this->env, (isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = ((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : (((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("ip" => $this->getAttribute($context["result"], "ip", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("method" => $this->getAttribute($context["result"], "method", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("url" => $this->getAttribute($context["result"], "url", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "token", array()), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_e10f7a316e7991f4ac7b12e61f9e956e55a0214f9bb755c48faa06ae91026386->leave($__internal_e10f7a316e7991f4ac7b12e61f9e956e55a0214f9bb755c48faa06ae91026386_prof);

        
        $__internal_38d5f1a51c6385a5c9703168960ae3638cef336dccfe0924ae361f14ac5ec4a3->leave($__internal_38d5f1a51c6385a5c9703168960ae3638cef336dccfe0924ae361f14ac5ec4a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 72,  225 => 68,  220 => 65,  201 => 62,  196 => 60,  192 => 59,  188 => 57,  182 => 54,  177 => 53,  175 => 52,  171 => 51,  167 => 49,  161 => 46,  156 => 45,  154 => 44,  150 => 43,  146 => 41,  140 => 38,  135 => 37,  133 => 36,  129 => 35,  121 => 32,  116 => 29,  113 => 28,  96 => 27,  82 => 15,  80 => 14,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

{% block summary %}
    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ tokens ? tokens|length : 'No' }} results found</h2>

    {% if tokens %}
        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                {% for result in tokens %}
                    {% set css_class = result.status_code|default(0) > 399 ? 'status-error' : result.status_code|default(0) > 299 ? 'status-warning' : 'status-success' %}

                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label {{ css_class }}\">{{ result.status_code|default('n/a') }}</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">{{ result.ip }}</span>
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'ip': result.ip, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td>
                            {{ result.method }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'method': result.method, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"break-long-words\">
                            {{ result.url }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'url': result.url, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">{{ result.time|date('d-M-Y') }}</span>
                            <span class=\"nowrap newline\">{{ result.time|date('H:i:s') }}</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"{{ path('_profiler', { token: result.token }) }}\">{{ result.token }}</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    {% endif %}

{% endblock %}
", "@WebProfiler/Profiler/results.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\results.html.twig");
    }
}
