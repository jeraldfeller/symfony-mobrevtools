<?php

/* @SgDatatables/Datatable/datatable.html.twig */
class __TwigTemplate_9511773101718045658dd9534981ab7ddc98794244086f35ad8aec8eda486f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable' => array($this, 'block_sg_datatable'),
            'sg_datatable_html' => array($this, 'block_sg_datatable_html'),
            'sg_datatable_js' => array($this, 'block_sg_datatable_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32de7d34e659f5debb0a9d65b0311d7eac6fa3d5d3a247590053274af1c66874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32de7d34e659f5debb0a9d65b0311d7eac6fa3d5d3a247590053274af1c66874->enter($__internal_32de7d34e659f5debb0a9d65b0311d7eac6fa3d5d3a247590053274af1c66874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_549fe4e2a056945299b0f22413b1ebc57449ffc77b4671dd844fd263353b09df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549fe4e2a056945299b0f22413b1ebc57449ffc77b4671dd844fd263353b09df->enter($__internal_549fe4e2a056945299b0f22413b1ebc57449ffc77b4671dd844fd263353b09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_32de7d34e659f5debb0a9d65b0311d7eac6fa3d5d3a247590053274af1c66874->leave($__internal_32de7d34e659f5debb0a9d65b0311d7eac6fa3d5d3a247590053274af1c66874_prof);

        
        $__internal_549fe4e2a056945299b0f22413b1ebc57449ffc77b4671dd844fd263353b09df->leave($__internal_549fe4e2a056945299b0f22413b1ebc57449ffc77b4671dd844fd263353b09df_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_28b7cddbe35316a93b78aa9046541e1de6d70cad743e925426ffae5600a7423b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b7cddbe35316a93b78aa9046541e1de6d70cad743e925426ffae5600a7423b->enter($__internal_28b7cddbe35316a93b78aa9046541e1de6d70cad743e925426ffae5600a7423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_3ebd16c6531dba0be61b61f11d1190d764556902aa8efb066b449f1c8222159f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebd16c6531dba0be61b61f11d1190d764556902aa8efb066b449f1c8222159f->enter($__internal_3ebd16c6531dba0be61b61f11d1190d764556902aa8efb066b449f1c8222159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatable_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatable_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_3ebd16c6531dba0be61b61f11d1190d764556902aa8efb066b449f1c8222159f->leave($__internal_3ebd16c6531dba0be61b61f11d1190d764556902aa8efb066b449f1c8222159f_prof);

        
        $__internal_28b7cddbe35316a93b78aa9046541e1de6d70cad743e925426ffae5600a7423b->leave($__internal_28b7cddbe35316a93b78aa9046541e1de6d70cad743e925426ffae5600a7423b_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_f3a39224b8eb310eba1db072619900403688ac0b17f8973732549638b6409895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a39224b8eb310eba1db072619900403688ac0b17f8973732549638b6409895->enter($__internal_f3a39224b8eb310eba1db072619900403688ac0b17f8973732549638b6409895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_b8353b715c2a2b36e8bba4b674a637fa57a14e53d2fdb4f51336255f59e6606a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8353b715c2a2b36e8bba4b674a637fa57a14e53d2fdb4f51336255f59e6606a->enter($__internal_b8353b715c2a2b36e8bba4b674a637fa57a14e53d2fdb4f51336255f59e6606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_b8353b715c2a2b36e8bba4b674a637fa57a14e53d2fdb4f51336255f59e6606a->leave($__internal_b8353b715c2a2b36e8bba4b674a637fa57a14e53d2fdb4f51336255f59e6606a_prof);

        
        $__internal_f3a39224b8eb310eba1db072619900403688ac0b17f8973732549638b6409895->leave($__internal_f3a39224b8eb310eba1db072619900403688ac0b17f8973732549638b6409895_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_45e0bd97a5655577d3d9aab7234f605ed631eea6c1a5607e270b9680a23e6ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e0bd97a5655577d3d9aab7234f605ed631eea6c1a5607e270b9680a23e6ca7->enter($__internal_45e0bd97a5655577d3d9aab7234f605ed631eea6c1a5607e270b9680a23e6ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_cefe846b2717ab425e790f05921502b4047fdf081b8c2d068115cfbd63d61dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefe846b2717ab425e790f05921502b4047fdf081b8c2d068115cfbd63d61dac->enter($__internal_cefe846b2717ab425e790f05921502b4047fdf081b8c2d068115cfbd63d61dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_cefe846b2717ab425e790f05921502b4047fdf081b8c2d068115cfbd63d61dac->leave($__internal_cefe846b2717ab425e790f05921502b4047fdf081b8c2d068115cfbd63d61dac_prof);

        
        $__internal_45e0bd97a5655577d3d9aab7234f605ed631eea6c1a5607e270b9680a23e6ca7->leave($__internal_45e0bd97a5655577d3d9aab7234f605ed631eea6c1a5607e270b9680a23e6ca7_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
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
{% block sg_datatable %}

    {% block sg_datatable_html %}

        {% include \"SgDatatablesBundle:Datatable:datatable_html.html.twig\" %}

    {% endblock %}

    {% block sg_datatable_js %}

        {% include \"SgDatatablesBundle:Datatable:datatable_js.html.twig\" %}

    {% endblock %}

{% endblock  %}
", "@SgDatatables/Datatable/datatable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\datatable.html.twig");
    }
}
