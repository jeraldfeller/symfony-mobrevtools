<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_c036091b90630787643bb2c1ea74d07ffec151cf0f82af59e9d79b801e8abc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c036091b90630787643bb2c1ea74d07ffec151cf0f82af59e9d79b801e8abc7e->enter($__internal_c036091b90630787643bb2c1ea74d07ffec151cf0f82af59e9d79b801e8abc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8c71da45907bbbbd3a7ba3991e736cbe51a77d1666f9a9a25bb276f9a7b2581d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71da45907bbbbd3a7ba3991e736cbe51a77d1666f9a9a25bb276f9a7b2581d->enter($__internal_8c71da45907bbbbd3a7ba3991e736cbe51a77d1666f9a9a25bb276f9a7b2581d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c036091b90630787643bb2c1ea74d07ffec151cf0f82af59e9d79b801e8abc7e->leave($__internal_c036091b90630787643bb2c1ea74d07ffec151cf0f82af59e9d79b801e8abc7e_prof);

        
        $__internal_8c71da45907bbbbd3a7ba3991e736cbe51a77d1666f9a9a25bb276f9a7b2581d->leave($__internal_8c71da45907bbbbd3a7ba3991e736cbe51a77d1666f9a9a25bb276f9a7b2581d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
