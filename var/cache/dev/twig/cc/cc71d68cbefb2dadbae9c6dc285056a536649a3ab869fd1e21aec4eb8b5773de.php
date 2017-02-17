<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e1cced7b91fe35b065f6175ec14bb7f49aff35c164bbe3d11d7392a7ea2630a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd5ff898cbc0907be1f1f791783a84db63f85410116d45999f3097079fd4e388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5ff898cbc0907be1f1f791783a84db63f85410116d45999f3097079fd4e388->enter($__internal_dd5ff898cbc0907be1f1f791783a84db63f85410116d45999f3097079fd4e388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2c976f78677029d3243a7f59a43c97753e9c88528f560b1b086d9326cfa5ebe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c976f78677029d3243a7f59a43c97753e9c88528f560b1b086d9326cfa5ebe6->enter($__internal_2c976f78677029d3243a7f59a43c97753e9c88528f560b1b086d9326cfa5ebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dd5ff898cbc0907be1f1f791783a84db63f85410116d45999f3097079fd4e388->leave($__internal_dd5ff898cbc0907be1f1f791783a84db63f85410116d45999f3097079fd4e388_prof);

        
        $__internal_2c976f78677029d3243a7f59a43c97753e9c88528f560b1b086d9326cfa5ebe6->leave($__internal_2c976f78677029d3243a7f59a43c97753e9c88528f560b1b086d9326cfa5ebe6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a47db57a898442f24a76039096b40d4c3ce906555e0fd45a7cb070908e0a75b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47db57a898442f24a76039096b40d4c3ce906555e0fd45a7cb070908e0a75b1->enter($__internal_a47db57a898442f24a76039096b40d4c3ce906555e0fd45a7cb070908e0a75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15a6e0e9290a7575ce2ca8f35a120f6f8abc5b424782d34a0a135ba92607870c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a6e0e9290a7575ce2ca8f35a120f6f8abc5b424782d34a0a135ba92607870c->enter($__internal_15a6e0e9290a7575ce2ca8f35a120f6f8abc5b424782d34a0a135ba92607870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15a6e0e9290a7575ce2ca8f35a120f6f8abc5b424782d34a0a135ba92607870c->leave($__internal_15a6e0e9290a7575ce2ca8f35a120f6f8abc5b424782d34a0a135ba92607870c_prof);

        
        $__internal_a47db57a898442f24a76039096b40d4c3ce906555e0fd45a7cb070908e0a75b1->leave($__internal_a47db57a898442f24a76039096b40d4c3ce906555e0fd45a7cb070908e0a75b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
