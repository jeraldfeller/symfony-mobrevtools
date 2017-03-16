<?php

/* SgDatatablesBundle:Column:column.html.twig */
class __TwigTemplate_c2f06096c709b2efa93acfa6a3cdfe98e04d533c35cc03b1cf6945a7976e4825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abffa6ab5f54a78b002f7c8566cae3fa9242cf1fb083e94e723614c24f612f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abffa6ab5f54a78b002f7c8566cae3fa9242cf1fb083e94e723614c24f612f70->enter($__internal_abffa6ab5f54a78b002f7c8566cae3fa9242cf1fb083e94e723614c24f612f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:column.html.twig"));

        $__internal_9edea0ea9e21a0a6ed21d090cb5557091c5501420a290d09c83aaf7ef90d44f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edea0ea9e21a0a6ed21d090cb5557091c5501420a290d09c83aaf7ef90d44f5->enter($__internal_9edea0ea9e21a0a6ed21d090cb5557091c5501420a290d09c83aaf7ef90d44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:column.html.twig"));

        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('data', $context, $blocks);
        // line 63
        echo "},
";
        
        $__internal_abffa6ab5f54a78b002f7c8566cae3fa9242cf1fb083e94e723614c24f612f70->leave($__internal_abffa6ab5f54a78b002f7c8566cae3fa9242cf1fb083e94e723614c24f612f70_prof);

        
        $__internal_9edea0ea9e21a0a6ed21d090cb5557091c5501420a290d09c83aaf7ef90d44f5->leave($__internal_9edea0ea9e21a0a6ed21d090cb5557091c5501420a290d09c83aaf7ef90d44f5_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_f5505adf580cc2acd6fd2689ac157579c527496bad515a31a244a732533badea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5505adf580cc2acd6fd2689ac157579c527496bad515a31a244a732533badea->enter($__internal_f5505adf580cc2acd6fd2689ac157579c527496bad515a31a244a732533badea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_5dcd4d54a992ca1e199d310385d1dbef2d7eeb5fd6c2bceb6d21a4b02b97ff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd4d54a992ca1e199d310385d1dbef2d7eeb5fd6c2bceb6d21a4b02b97ff66->enter($__internal_5dcd4d54a992ca1e199d310385d1dbef2d7eeb5fd6c2bceb6d21a4b02b97ff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
        \"defaultContent\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
        \"name\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
        ";
        // line 14
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "orderable", array())) {
            // line 15
            echo "            \"orderable\": true,
            ";
            // line 16
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "orderSequence", array())) {
                // line 17
                echo "                \"orderSequence\": ";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "orderSequence", array()));
                echo ",
            ";
            }
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            \"orderable\": false,
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "searchable", array())) {
            // line 23
            echo "            \"searchable\": true,
        ";
        } else {
            // line 25
            echo "            \"searchable\": false,
        ";
        }
        // line 27
        echo "        \"title\": \"";
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
        ";
        // line 28
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 29
            echo "            \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 31
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 32
            echo "            \"visible\": true,
            \"className\": \"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
        ";
        } else {
            // line 35
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 38
        echo "        \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
    ";
        
        $__internal_5dcd4d54a992ca1e199d310385d1dbef2d7eeb5fd6c2bceb6d21a4b02b97ff66->leave($__internal_5dcd4d54a992ca1e199d310385d1dbef2d7eeb5fd6c2bceb6d21a4b02b97ff66_prof);

        
        $__internal_f5505adf580cc2acd6fd2689ac157579c527496bad515a31a244a732533badea->leave($__internal_f5505adf580cc2acd6fd2689ac157579c527496bad515a31a244a732533badea_prof);

    }

    // line 41
    public function block_data($context, array $blocks = array())
    {
        $__internal_14b9753c80a3a867e481d0a794f57a5c9959334d519c9576ba5ab962405cc78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b9753c80a3a867e481d0a794f57a5c9959334d519c9576ba5ab962405cc78c->enter($__internal_14b9753c80a3a867e481d0a794f57a5c9959334d519c9576ba5ab962405cc78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_03de3a561ba2dc1ba2a92067f61847fc1582e9589e080d3ccf69bb4db5d353fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03de3a561ba2dc1ba2a92067f61847fc1582e9589e080d3ccf69bb4db5d353fb->enter($__internal_03de3a561ba2dc1ba2a92067f61847fc1582e9589e080d3ccf69bb4db5d353fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 42
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
        ";
        // line 43
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 44
            echo "            \"render\": function(data) {
                if (\"\" == data) {
                    return \"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()), "html", null, true);
            echo "\";
                } else {
                    return data;
                }
            },
        ";
        }
        // line 52
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())) {
            // line 53
            echo "            \"render\": function(data, type, row, meta) {
                return ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta);
            },
        ";
        }
        // line 57
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 58
            echo "            \"render\": function(data, type, row, meta) {
                return render_editable_text(data, type, row, meta, '";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "index", array()), "html", null, true);
            echo "');
            },
        ";
        }
        // line 62
        echo "    ";
        
        $__internal_03de3a561ba2dc1ba2a92067f61847fc1582e9589e080d3ccf69bb4db5d353fb->leave($__internal_03de3a561ba2dc1ba2a92067f61847fc1582e9589e080d3ccf69bb4db5d353fb_prof);

        
        $__internal_14b9753c80a3a867e481d0a794f57a5c9959334d519c9576ba5ab962405cc78c->leave($__internal_14b9753c80a3a867e481d0a794f57a5c9959334d519c9576ba5ab962405cc78c_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 62,  193 => 59,  190 => 58,  187 => 57,  181 => 54,  178 => 53,  175 => 52,  166 => 46,  162 => 44,  160 => 43,  155 => 42,  146 => 41,  133 => 38,  128 => 36,  125 => 35,  120 => 33,  117 => 32,  114 => 31,  108 => 29,  106 => 28,  101 => 27,  97 => 25,  93 => 23,  90 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 11,  48 => 10,  37 => 63,  35 => 41,  32 => 40,  30 => 10,  27 => 9,);
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
{
    {% block common %}
        \"contentPadding\": \"{{ column.padding }}\",
        \"defaultContent\": \"{{ column.defaultContent }}\",
        \"name\": \"{{ column.name }}\",
        {% if column.orderable %}
            \"orderable\": true,
            {% if column.orderSequence %}
                \"orderSequence\": {{ column.orderSequence|json_encode|raw }},
            {% endif %}
        {% else %}
            \"orderable\": false,
        {% endif %}
        {% if column.searchable %}
            \"searchable\": true,
        {% else %}
            \"searchable\": false,
        {% endif %}
        \"title\": \"{{ column.title|raw }}\",
        {% if column.type %}
            \"type\": \"{{ column.type }}\",
        {% endif %}
        {% if column.visible %}
            \"visible\": true,
            \"className\": \"{{ column.class }}\",
        {% else %}
            \"visible\": false,
            \"className\": \"never {{ column.class }}\",
        {% endif %}
        \"width\": \"{{ column.width }}\",
    {% endblock %}

    {% block data %}
        \"data\": \"{{ column.data }}\",
        {% if column.default and column.render is null %}
            \"render\": function(data) {
                if (\"\" == data) {
                    return \"{{ column.default }}\";
                } else {
                    return data;
                }
            },
        {% endif %}
        {% if column.render %}
            \"render\": function(data, type, row, meta) {
                return {{ column.render }}(data, type, row, meta);
            },
        {% endif %}
        {% if column.editable %}
            \"render\": function(data, type, row, meta) {
                return render_editable_text(data, type, row, meta, '{{ column.data }}', '{{ column.index }}');
            },
        {% endif %}
    {% endblock %}
},
", "SgDatatablesBundle:Column:column.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/column.html.twig");
    }
}
