<?php

/* @SgDatatables/Column/column.html.twig */
class __TwigTemplate_2fdd767ce590f8d893344548c1165c59c64a23ab348490ff97c2f9d6fe3768f7 extends Twig_Template
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
        $__internal_961c49aba8b06d5e52c7fdd11cceea86cdb0645c8e7b186971ebe06897111861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961c49aba8b06d5e52c7fdd11cceea86cdb0645c8e7b186971ebe06897111861->enter($__internal_961c49aba8b06d5e52c7fdd11cceea86cdb0645c8e7b186971ebe06897111861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/column.html.twig"));

        $__internal_4f92b3865af05af66670ee28da5737cc01436ee5bbd21a59dce4ee7fb87411e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f92b3865af05af66670ee28da5737cc01436ee5bbd21a59dce4ee7fb87411e7->enter($__internal_4f92b3865af05af66670ee28da5737cc01436ee5bbd21a59dce4ee7fb87411e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/column.html.twig"));

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
        
        $__internal_961c49aba8b06d5e52c7fdd11cceea86cdb0645c8e7b186971ebe06897111861->leave($__internal_961c49aba8b06d5e52c7fdd11cceea86cdb0645c8e7b186971ebe06897111861_prof);

        
        $__internal_4f92b3865af05af66670ee28da5737cc01436ee5bbd21a59dce4ee7fb87411e7->leave($__internal_4f92b3865af05af66670ee28da5737cc01436ee5bbd21a59dce4ee7fb87411e7_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_863f1c1aa8296d58e72413421fdc682e79148d7fe18e38bd9d8975858c079ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863f1c1aa8296d58e72413421fdc682e79148d7fe18e38bd9d8975858c079ff7->enter($__internal_863f1c1aa8296d58e72413421fdc682e79148d7fe18e38bd9d8975858c079ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_dcf7d6a858361fc00435324233942703b9bb448e498b4980f9d7a01ba4b91026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf7d6a858361fc00435324233942703b9bb448e498b4980f9d7a01ba4b91026->enter($__internal_dcf7d6a858361fc00435324233942703b9bb448e498b4980f9d7a01ba4b91026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_dcf7d6a858361fc00435324233942703b9bb448e498b4980f9d7a01ba4b91026->leave($__internal_dcf7d6a858361fc00435324233942703b9bb448e498b4980f9d7a01ba4b91026_prof);

        
        $__internal_863f1c1aa8296d58e72413421fdc682e79148d7fe18e38bd9d8975858c079ff7->leave($__internal_863f1c1aa8296d58e72413421fdc682e79148d7fe18e38bd9d8975858c079ff7_prof);

    }

    // line 41
    public function block_data($context, array $blocks = array())
    {
        $__internal_581fde2bf73cf8f3fc8bcba5593c0638a816db35d2f365c9b0ab64a5c1ad384d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581fde2bf73cf8f3fc8bcba5593c0638a816db35d2f365c9b0ab64a5c1ad384d->enter($__internal_581fde2bf73cf8f3fc8bcba5593c0638a816db35d2f365c9b0ab64a5c1ad384d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_c8ab334a696f4be3d852a3e497a6b49f6583d5c81209b3e8b71916808a191a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ab334a696f4be3d852a3e497a6b49f6583d5c81209b3e8b71916808a191a04->enter($__internal_c8ab334a696f4be3d852a3e497a6b49f6583d5c81209b3e8b71916808a191a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_c8ab334a696f4be3d852a3e497a6b49f6583d5c81209b3e8b71916808a191a04->leave($__internal_c8ab334a696f4be3d852a3e497a6b49f6583d5c81209b3e8b71916808a191a04_prof);

        
        $__internal_581fde2bf73cf8f3fc8bcba5593c0638a816db35d2f365c9b0ab64a5c1ad384d->leave($__internal_581fde2bf73cf8f3fc8bcba5593c0638a816db35d2f365c9b0ab64a5c1ad384d_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/column.html.twig";
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
", "@SgDatatables/Column/column.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\column.html.twig");
    }
}
