<?php

/* @SgDatatables/Column/image.html.twig */
class __TwigTemplate_c4759359278d173f668354e28d71982e51066ef6deac95441b2d426739ccb912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/image.html.twig", 9);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4e2d596f67dcd797bc7075a12e55090deb8fe5619907fc606798ee594686b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e2d596f67dcd797bc7075a12e55090deb8fe5619907fc606798ee594686b3d->enter($__internal_b4e2d596f67dcd797bc7075a12e55090deb8fe5619907fc606798ee594686b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_a440575e647b402c21eda90f317d0e27756e3601f26b0f7c8966896876cc71a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a440575e647b402c21eda90f317d0e27756e3601f26b0f7c8966896876cc71a7->enter($__internal_a440575e647b402c21eda90f317d0e27756e3601f26b0f7c8966896876cc71a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4e2d596f67dcd797bc7075a12e55090deb8fe5619907fc606798ee594686b3d->leave($__internal_b4e2d596f67dcd797bc7075a12e55090deb8fe5619907fc606798ee594686b3d_prof);

        
        $__internal_a440575e647b402c21eda90f317d0e27756e3601f26b0f7c8966896876cc71a7->leave($__internal_a440575e647b402c21eda90f317d0e27756e3601f26b0f7c8966896876cc71a7_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_3eae5f357415a17ce4f84e197fa05969730bf0dba599241737b96bf4b6bb9298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eae5f357415a17ce4f84e197fa05969730bf0dba599241737b96bf4b6bb9298->enter($__internal_3eae5f357415a17ce4f84e197fa05969730bf0dba599241737b96bf4b6bb9298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ca22da1aa9dfe5f2e460e83f21afd3dd8073a279dbceee7ef884b440ec4ff68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca22da1aa9dfe5f2e460e83f21afd3dd8073a279dbceee7ef884b440ec4ff68f->enter($__internal_ca22da1aa9dfe5f2e460e83f21afd3dd8073a279dbceee7ef884b440ec4ff68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "isAssociation", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    ";
        }
        
        $__internal_ca22da1aa9dfe5f2e460e83f21afd3dd8073a279dbceee7ef884b440ec4ff68f->leave($__internal_ca22da1aa9dfe5f2e460e83f21afd3dd8073a279dbceee7ef884b440ec4ff68f_prof);

        
        $__internal_3eae5f357415a17ce4f84e197fa05969730bf0dba599241737b96bf4b6bb9298->leave($__internal_3eae5f357415a17ce4f84e197fa05969730bf0dba599241737b96bf4b6bb9298_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
{% extends 'SgDatatablesBundle:Column:column.html.twig' %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    {% if column.isAssociation %}
        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"{{ column.data }}\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\image.html.twig");
    }
}
