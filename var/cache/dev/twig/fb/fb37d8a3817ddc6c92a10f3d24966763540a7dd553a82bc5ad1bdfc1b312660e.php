<?php

/* SgDatatablesBundle:Datatable:datatable.html.twig */
class __TwigTemplate_96fe856a15ee3425c4d560f05347ec119541eb2424ad3676c8772eb22eb52950 extends Twig_Template
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
        $__internal_da344450a752048172ba74dbcf6aabb55656dbcb6166717e99160f825ab3af95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da344450a752048172ba74dbcf6aabb55656dbcb6166717e99160f825ab3af95->enter($__internal_da344450a752048172ba74dbcf6aabb55656dbcb6166717e99160f825ab3af95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_fa70745a25f682f8532018cd3fa6a268094e359abe46a4f75c46e64257974dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa70745a25f682f8532018cd3fa6a268094e359abe46a4f75c46e64257974dc4->enter($__internal_fa70745a25f682f8532018cd3fa6a268094e359abe46a4f75c46e64257974dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_da344450a752048172ba74dbcf6aabb55656dbcb6166717e99160f825ab3af95->leave($__internal_da344450a752048172ba74dbcf6aabb55656dbcb6166717e99160f825ab3af95_prof);

        
        $__internal_fa70745a25f682f8532018cd3fa6a268094e359abe46a4f75c46e64257974dc4->leave($__internal_fa70745a25f682f8532018cd3fa6a268094e359abe46a4f75c46e64257974dc4_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_302e8aefb8fe149b3661f8b1cefe6ed5e067cb4798f7fbb157e54fb19dd4fd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302e8aefb8fe149b3661f8b1cefe6ed5e067cb4798f7fbb157e54fb19dd4fd05->enter($__internal_302e8aefb8fe149b3661f8b1cefe6ed5e067cb4798f7fbb157e54fb19dd4fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_a355c6d1e5af87133a1d5d65d96d68a07c7ca5cf541e127d5069480b6ee514b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a355c6d1e5af87133a1d5d65d96d68a07c7ca5cf541e127d5069480b6ee514b1->enter($__internal_a355c6d1e5af87133a1d5d65d96d68a07c7ca5cf541e127d5069480b6ee514b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_a355c6d1e5af87133a1d5d65d96d68a07c7ca5cf541e127d5069480b6ee514b1->leave($__internal_a355c6d1e5af87133a1d5d65d96d68a07c7ca5cf541e127d5069480b6ee514b1_prof);

        
        $__internal_302e8aefb8fe149b3661f8b1cefe6ed5e067cb4798f7fbb157e54fb19dd4fd05->leave($__internal_302e8aefb8fe149b3661f8b1cefe6ed5e067cb4798f7fbb157e54fb19dd4fd05_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_1d803fd25e94a1704d5f6adb5ec6f735dea3613144d067997b18ec7b02160866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d803fd25e94a1704d5f6adb5ec6f735dea3613144d067997b18ec7b02160866->enter($__internal_1d803fd25e94a1704d5f6adb5ec6f735dea3613144d067997b18ec7b02160866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_f80acb129e06b2f014eabe0da35162c4e82adc8aa749c431301772a4503f42f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80acb129e06b2f014eabe0da35162c4e82adc8aa749c431301772a4503f42f6->enter($__internal_f80acb129e06b2f014eabe0da35162c4e82adc8aa749c431301772a4503f42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_f80acb129e06b2f014eabe0da35162c4e82adc8aa749c431301772a4503f42f6->leave($__internal_f80acb129e06b2f014eabe0da35162c4e82adc8aa749c431301772a4503f42f6_prof);

        
        $__internal_1d803fd25e94a1704d5f6adb5ec6f735dea3613144d067997b18ec7b02160866->leave($__internal_1d803fd25e94a1704d5f6adb5ec6f735dea3613144d067997b18ec7b02160866_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_105ad95a227e3430223452df6e0803df13562ba9fa091782e51f726a4d625e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105ad95a227e3430223452df6e0803df13562ba9fa091782e51f726a4d625e60->enter($__internal_105ad95a227e3430223452df6e0803df13562ba9fa091782e51f726a4d625e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_44b1520c3f960e0cf5932e84aac8c9ac2e78bcbc4fe003b95d29ee3d6ecfee97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b1520c3f960e0cf5932e84aac8c9ac2e78bcbc4fe003b95d29ee3d6ecfee97->enter($__internal_44b1520c3f960e0cf5932e84aac8c9ac2e78bcbc4fe003b95d29ee3d6ecfee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_44b1520c3f960e0cf5932e84aac8c9ac2e78bcbc4fe003b95d29ee3d6ecfee97->leave($__internal_44b1520c3f960e0cf5932e84aac8c9ac2e78bcbc4fe003b95d29ee3d6ecfee97_prof);

        
        $__internal_105ad95a227e3430223452df6e0803df13562ba9fa091782e51f726a4d625e60->leave($__internal_105ad95a227e3430223452df6e0803df13562ba9fa091782e51f726a4d625e60_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable.html.twig";
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
", "SgDatatablesBundle:Datatable:datatable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/datatable.html.twig");
    }
}
