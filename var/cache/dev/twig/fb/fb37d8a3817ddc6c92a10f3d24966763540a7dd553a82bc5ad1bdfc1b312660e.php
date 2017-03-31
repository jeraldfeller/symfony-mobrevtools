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
        $__internal_07c61e567eb6221214a4cff902d0abeafdae33c179bbbde0c9761abc4961b88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c61e567eb6221214a4cff902d0abeafdae33c179bbbde0c9761abc4961b88f->enter($__internal_07c61e567eb6221214a4cff902d0abeafdae33c179bbbde0c9761abc4961b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_8b4e915491d3464696b8165cbdb02900dc6edb3168d8e327ea0193dd0926f515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4e915491d3464696b8165cbdb02900dc6edb3168d8e327ea0193dd0926f515->enter($__internal_8b4e915491d3464696b8165cbdb02900dc6edb3168d8e327ea0193dd0926f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_07c61e567eb6221214a4cff902d0abeafdae33c179bbbde0c9761abc4961b88f->leave($__internal_07c61e567eb6221214a4cff902d0abeafdae33c179bbbde0c9761abc4961b88f_prof);

        
        $__internal_8b4e915491d3464696b8165cbdb02900dc6edb3168d8e327ea0193dd0926f515->leave($__internal_8b4e915491d3464696b8165cbdb02900dc6edb3168d8e327ea0193dd0926f515_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_e078678eff06379a326ed919a0afb604c666c5ddde189db4d4c170b776935e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e078678eff06379a326ed919a0afb604c666c5ddde189db4d4c170b776935e61->enter($__internal_e078678eff06379a326ed919a0afb604c666c5ddde189db4d4c170b776935e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_a5bc50125ae604215b083bb2b16e4bb9601022dd0136c58eb8b03dfffcc911bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bc50125ae604215b083bb2b16e4bb9601022dd0136c58eb8b03dfffcc911bb->enter($__internal_a5bc50125ae604215b083bb2b16e4bb9601022dd0136c58eb8b03dfffcc911bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_a5bc50125ae604215b083bb2b16e4bb9601022dd0136c58eb8b03dfffcc911bb->leave($__internal_a5bc50125ae604215b083bb2b16e4bb9601022dd0136c58eb8b03dfffcc911bb_prof);

        
        $__internal_e078678eff06379a326ed919a0afb604c666c5ddde189db4d4c170b776935e61->leave($__internal_e078678eff06379a326ed919a0afb604c666c5ddde189db4d4c170b776935e61_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_243e705c7706376e6d75ad8d2165fb218e0855f7356d115a39e46ce3ac752b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243e705c7706376e6d75ad8d2165fb218e0855f7356d115a39e46ce3ac752b52->enter($__internal_243e705c7706376e6d75ad8d2165fb218e0855f7356d115a39e46ce3ac752b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_bc961a9e83a28e643a5e7c1fb69d563b592d8677d3313a65bafb9463e976ded1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc961a9e83a28e643a5e7c1fb69d563b592d8677d3313a65bafb9463e976ded1->enter($__internal_bc961a9e83a28e643a5e7c1fb69d563b592d8677d3313a65bafb9463e976ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_bc961a9e83a28e643a5e7c1fb69d563b592d8677d3313a65bafb9463e976ded1->leave($__internal_bc961a9e83a28e643a5e7c1fb69d563b592d8677d3313a65bafb9463e976ded1_prof);

        
        $__internal_243e705c7706376e6d75ad8d2165fb218e0855f7356d115a39e46ce3ac752b52->leave($__internal_243e705c7706376e6d75ad8d2165fb218e0855f7356d115a39e46ce3ac752b52_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_86cf2f2374cf0dc2d8cb1c9c4e7c5a9f2d657f23e504a228a09881077a9a7d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86cf2f2374cf0dc2d8cb1c9c4e7c5a9f2d657f23e504a228a09881077a9a7d6e->enter($__internal_86cf2f2374cf0dc2d8cb1c9c4e7c5a9f2d657f23e504a228a09881077a9a7d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_29b8bb36eed3c6ca80708256885ba9248ef668e72dc3b0cb830dafdf00a555db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b8bb36eed3c6ca80708256885ba9248ef668e72dc3b0cb830dafdf00a555db->enter($__internal_29b8bb36eed3c6ca80708256885ba9248ef668e72dc3b0cb830dafdf00a555db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_29b8bb36eed3c6ca80708256885ba9248ef668e72dc3b0cb830dafdf00a555db->leave($__internal_29b8bb36eed3c6ca80708256885ba9248ef668e72dc3b0cb830dafdf00a555db_prof);

        
        $__internal_86cf2f2374cf0dc2d8cb1c9c4e7c5a9f2d657f23e504a228a09881077a9a7d6e->leave($__internal_86cf2f2374cf0dc2d8cb1c9c4e7c5a9f2d657f23e504a228a09881077a9a7d6e_prof);

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
