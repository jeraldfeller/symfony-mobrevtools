<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_62ba84fbffee5d4edb304b3e7c9fa7078751717d0c605da7bdcd132a61727148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
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
        $__internal_e29cd8e0c42e4e11a3b752a183ff021c8669c420b3e5afb5a10294fb0e7bb00a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29cd8e0c42e4e11a3b752a183ff021c8669c420b3e5afb5a10294fb0e7bb00a->enter($__internal_e29cd8e0c42e4e11a3b752a183ff021c8669c420b3e5afb5a10294fb0e7bb00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $__internal_353a1b9482e533eefa83213fc4e6662bc0b8963e14a6ca082745f3e3c949194d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a1b9482e533eefa83213fc4e6662bc0b8963e14a6ca082745f3e3c949194d->enter($__internal_353a1b9482e533eefa83213fc4e6662bc0b8963e14a6ca082745f3e3c949194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e29cd8e0c42e4e11a3b752a183ff021c8669c420b3e5afb5a10294fb0e7bb00a->leave($__internal_e29cd8e0c42e4e11a3b752a183ff021c8669c420b3e5afb5a10294fb0e7bb00a_prof);

        
        $__internal_353a1b9482e533eefa83213fc4e6662bc0b8963e14a6ca082745f3e3c949194d->leave($__internal_353a1b9482e533eefa83213fc4e6662bc0b8963e14a6ca082745f3e3c949194d_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_13e016b57876a6f992f1455687826c21e053a623d9b9ace2fddfa89a3bec58ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e016b57876a6f992f1455687826c21e053a623d9b9ace2fddfa89a3bec58ca->enter($__internal_13e016b57876a6f992f1455687826c21e053a623d9b9ace2fddfa89a3bec58ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_96201e9fff51cd54ac24317df013005ede4cb84b573539436fda3c060d6fc5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96201e9fff51cd54ac24317df013005ede4cb84b573539436fda3c060d6fc5c6->enter($__internal_96201e9fff51cd54ac24317df013005ede4cb84b573539436fda3c060d6fc5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_96201e9fff51cd54ac24317df013005ede4cb84b573539436fda3c060d6fc5c6->leave($__internal_96201e9fff51cd54ac24317df013005ede4cb84b573539436fda3c060d6fc5c6_prof);

        
        $__internal_13e016b57876a6f992f1455687826c21e053a623d9b9ace2fddfa89a3bec58ca->leave($__internal_13e016b57876a6f992f1455687826c21e053a623d9b9ace2fddfa89a3bec58ca_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00bfd88de6797152687233624df081afb0f81e6a3720b611cc4cb23c953cddb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bfd88de6797152687233624df081afb0f81e6a3720b611cc4cb23c953cddb2->enter($__internal_00bfd88de6797152687233624df081afb0f81e6a3720b611cc4cb23c953cddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c10e8d258dace8106b2ac6ae83f12409f6ba078492f1b1e330f9910741286a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c10e8d258dace8106b2ac6ae83f12409f6ba078492f1b1e330f9910741286a1->enter($__internal_5c10e8d258dace8106b2ac6ae83f12409f6ba078492f1b1e330f9910741286a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5c10e8d258dace8106b2ac6ae83f12409f6ba078492f1b1e330f9910741286a1->leave($__internal_5c10e8d258dace8106b2ac6ae83f12409f6ba078492f1b1e330f9910741286a1_prof);

        
        $__internal_00bfd88de6797152687233624df081afb0f81e6a3720b611cc4cb23c953cddb2->leave($__internal_00bfd88de6797152687233624df081afb0f81e6a3720b611cc4cb23c953cddb2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
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
", "WebProfilerBundle:Profiler:results.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/results.html.twig");
    }
}
