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
        $__internal_307d32ab308a5323facc9c4a79e051f7bbaaff1faee5de6a5765638e91e65e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307d32ab308a5323facc9c4a79e051f7bbaaff1faee5de6a5765638e91e65e85->enter($__internal_307d32ab308a5323facc9c4a79e051f7bbaaff1faee5de6a5765638e91e65e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_ed9c65bbc84252358e34ffc110185658077ef283cd5ad9471ba77fc8e6e0cc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9c65bbc84252358e34ffc110185658077ef283cd5ad9471ba77fc8e6e0cc5c->enter($__internal_ed9c65bbc84252358e34ffc110185658077ef283cd5ad9471ba77fc8e6e0cc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_307d32ab308a5323facc9c4a79e051f7bbaaff1faee5de6a5765638e91e65e85->leave($__internal_307d32ab308a5323facc9c4a79e051f7bbaaff1faee5de6a5765638e91e65e85_prof);

        
        $__internal_ed9c65bbc84252358e34ffc110185658077ef283cd5ad9471ba77fc8e6e0cc5c->leave($__internal_ed9c65bbc84252358e34ffc110185658077ef283cd5ad9471ba77fc8e6e0cc5c_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_06e211492670bae6359538f50a6a957b48669096033a35e64eb975d332b40113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e211492670bae6359538f50a6a957b48669096033a35e64eb975d332b40113->enter($__internal_06e211492670bae6359538f50a6a957b48669096033a35e64eb975d332b40113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_8720dec01d2db13481fb31fb2f1ada507a8939e454ce8ccd42f0749344b7c05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8720dec01d2db13481fb31fb2f1ada507a8939e454ce8ccd42f0749344b7c05b->enter($__internal_8720dec01d2db13481fb31fb2f1ada507a8939e454ce8ccd42f0749344b7c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_8720dec01d2db13481fb31fb2f1ada507a8939e454ce8ccd42f0749344b7c05b->leave($__internal_8720dec01d2db13481fb31fb2f1ada507a8939e454ce8ccd42f0749344b7c05b_prof);

        
        $__internal_06e211492670bae6359538f50a6a957b48669096033a35e64eb975d332b40113->leave($__internal_06e211492670bae6359538f50a6a957b48669096033a35e64eb975d332b40113_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_05aeb04013ff0a83705fb4fc44dbd2603d7ff020f39d88838ba3ea4a98b02d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05aeb04013ff0a83705fb4fc44dbd2603d7ff020f39d88838ba3ea4a98b02d62->enter($__internal_05aeb04013ff0a83705fb4fc44dbd2603d7ff020f39d88838ba3ea4a98b02d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_8f91b83ce32872c767b439bf2b891bf4f69691c5c5b1a3391447327e49c1f743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f91b83ce32872c767b439bf2b891bf4f69691c5c5b1a3391447327e49c1f743->enter($__internal_8f91b83ce32872c767b439bf2b891bf4f69691c5c5b1a3391447327e49c1f743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_8f91b83ce32872c767b439bf2b891bf4f69691c5c5b1a3391447327e49c1f743->leave($__internal_8f91b83ce32872c767b439bf2b891bf4f69691c5c5b1a3391447327e49c1f743_prof);

        
        $__internal_05aeb04013ff0a83705fb4fc44dbd2603d7ff020f39d88838ba3ea4a98b02d62->leave($__internal_05aeb04013ff0a83705fb4fc44dbd2603d7ff020f39d88838ba3ea4a98b02d62_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_8afa26faf93e2cf72daae99ac295e77f1cad8aa410559e3a03a5eed19863e1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afa26faf93e2cf72daae99ac295e77f1cad8aa410559e3a03a5eed19863e1f9->enter($__internal_8afa26faf93e2cf72daae99ac295e77f1cad8aa410559e3a03a5eed19863e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_637a3815cd461da682f5ed8ff081572f135664ba7cba08d064db02cf39a3dd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637a3815cd461da682f5ed8ff081572f135664ba7cba08d064db02cf39a3dd64->enter($__internal_637a3815cd461da682f5ed8ff081572f135664ba7cba08d064db02cf39a3dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_637a3815cd461da682f5ed8ff081572f135664ba7cba08d064db02cf39a3dd64->leave($__internal_637a3815cd461da682f5ed8ff081572f135664ba7cba08d064db02cf39a3dd64_prof);

        
        $__internal_8afa26faf93e2cf72daae99ac295e77f1cad8aa410559e3a03a5eed19863e1f9->leave($__internal_8afa26faf93e2cf72daae99ac295e77f1cad8aa410559e3a03a5eed19863e1f9_prof);

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
