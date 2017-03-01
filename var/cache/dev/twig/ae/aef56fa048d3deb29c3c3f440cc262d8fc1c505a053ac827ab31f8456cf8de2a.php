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
        $__internal_2ff40d4973cc9a2e83d6798dd972057d5598713bbaa643294f605acf9eb42e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff40d4973cc9a2e83d6798dd972057d5598713bbaa643294f605acf9eb42e08->enter($__internal_2ff40d4973cc9a2e83d6798dd972057d5598713bbaa643294f605acf9eb42e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_19ba22c9f6245de38798086afb4729e541ab7318a43fa47b8dbff2d4ff5ec35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ba22c9f6245de38798086afb4729e541ab7318a43fa47b8dbff2d4ff5ec35c->enter($__internal_19ba22c9f6245de38798086afb4729e541ab7318a43fa47b8dbff2d4ff5ec35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_2ff40d4973cc9a2e83d6798dd972057d5598713bbaa643294f605acf9eb42e08->leave($__internal_2ff40d4973cc9a2e83d6798dd972057d5598713bbaa643294f605acf9eb42e08_prof);

        
        $__internal_19ba22c9f6245de38798086afb4729e541ab7318a43fa47b8dbff2d4ff5ec35c->leave($__internal_19ba22c9f6245de38798086afb4729e541ab7318a43fa47b8dbff2d4ff5ec35c_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_d7dd64db4b65b6f23a74dd44dea0d7a6609df773339405b6130c817d5c1ec473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dd64db4b65b6f23a74dd44dea0d7a6609df773339405b6130c817d5c1ec473->enter($__internal_d7dd64db4b65b6f23a74dd44dea0d7a6609df773339405b6130c817d5c1ec473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_0a69cf46e27ee309f93e6edfd9f05993148bcb06b78bda020e10c536fc3c083a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a69cf46e27ee309f93e6edfd9f05993148bcb06b78bda020e10c536fc3c083a->enter($__internal_0a69cf46e27ee309f93e6edfd9f05993148bcb06b78bda020e10c536fc3c083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_0a69cf46e27ee309f93e6edfd9f05993148bcb06b78bda020e10c536fc3c083a->leave($__internal_0a69cf46e27ee309f93e6edfd9f05993148bcb06b78bda020e10c536fc3c083a_prof);

        
        $__internal_d7dd64db4b65b6f23a74dd44dea0d7a6609df773339405b6130c817d5c1ec473->leave($__internal_d7dd64db4b65b6f23a74dd44dea0d7a6609df773339405b6130c817d5c1ec473_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_c7a0a6361bd848cf7e6cd48818be153398f0dd001e2176c8a71da13a15004a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a0a6361bd848cf7e6cd48818be153398f0dd001e2176c8a71da13a15004a26->enter($__internal_c7a0a6361bd848cf7e6cd48818be153398f0dd001e2176c8a71da13a15004a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_25f02328aa2bdc67f94c422b6cd9848cbb60afd4c252129fdf840fbe10514161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f02328aa2bdc67f94c422b6cd9848cbb60afd4c252129fdf840fbe10514161->enter($__internal_25f02328aa2bdc67f94c422b6cd9848cbb60afd4c252129fdf840fbe10514161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_25f02328aa2bdc67f94c422b6cd9848cbb60afd4c252129fdf840fbe10514161->leave($__internal_25f02328aa2bdc67f94c422b6cd9848cbb60afd4c252129fdf840fbe10514161_prof);

        
        $__internal_c7a0a6361bd848cf7e6cd48818be153398f0dd001e2176c8a71da13a15004a26->leave($__internal_c7a0a6361bd848cf7e6cd48818be153398f0dd001e2176c8a71da13a15004a26_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_13d7c5be95987608d9d863ccbb95fb168984c7ce3035c85887131e03edbfce9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d7c5be95987608d9d863ccbb95fb168984c7ce3035c85887131e03edbfce9f->enter($__internal_13d7c5be95987608d9d863ccbb95fb168984c7ce3035c85887131e03edbfce9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_a430091881fcda44257a3d656af050a320a292da38fc1d1ce2f7f54960b90f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a430091881fcda44257a3d656af050a320a292da38fc1d1ce2f7f54960b90f96->enter($__internal_a430091881fcda44257a3d656af050a320a292da38fc1d1ce2f7f54960b90f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_a430091881fcda44257a3d656af050a320a292da38fc1d1ce2f7f54960b90f96->leave($__internal_a430091881fcda44257a3d656af050a320a292da38fc1d1ce2f7f54960b90f96_prof);

        
        $__internal_13d7c5be95987608d9d863ccbb95fb168984c7ce3035c85887131e03edbfce9f->leave($__internal_13d7c5be95987608d9d863ccbb95fb168984c7ce3035c85887131e03edbfce9f_prof);

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
