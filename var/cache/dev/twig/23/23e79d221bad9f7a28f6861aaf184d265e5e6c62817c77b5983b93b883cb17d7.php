<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8bf7f61542f32de2f5f76e08119e4c0761be7fce7a49661d165bbb6a0527df8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4012ada05c4f1d131353fa2a1d43048b65aff10d783c0cfca1ae5b3c29025d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4012ada05c4f1d131353fa2a1d43048b65aff10d783c0cfca1ae5b3c29025d23->enter($__internal_4012ada05c4f1d131353fa2a1d43048b65aff10d783c0cfca1ae5b3c29025d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e13e1310e4a7acc9a1537ecb30f75f98cacb134e73a7bfa9375e20652244ae15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13e1310e4a7acc9a1537ecb30f75f98cacb134e73a7bfa9375e20652244ae15->enter($__internal_e13e1310e4a7acc9a1537ecb30f75f98cacb134e73a7bfa9375e20652244ae15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4012ada05c4f1d131353fa2a1d43048b65aff10d783c0cfca1ae5b3c29025d23->leave($__internal_4012ada05c4f1d131353fa2a1d43048b65aff10d783c0cfca1ae5b3c29025d23_prof);

        
        $__internal_e13e1310e4a7acc9a1537ecb30f75f98cacb134e73a7bfa9375e20652244ae15->leave($__internal_e13e1310e4a7acc9a1537ecb30f75f98cacb134e73a7bfa9375e20652244ae15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
