<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b31faf33acb6580f2518af58e518959bf663ec64bf509e9f868a531ec7373308 extends Twig_Template
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
        $__internal_61a74b263bc562942114c50bad60d20012587ac96f54de3806fa9bdfe46e62bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a74b263bc562942114c50bad60d20012587ac96f54de3806fa9bdfe46e62bf->enter($__internal_61a74b263bc562942114c50bad60d20012587ac96f54de3806fa9bdfe46e62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b687e7a77551b9237cab7683c740358654391c25733dfb14acdd15df9d992a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b687e7a77551b9237cab7683c740358654391c25733dfb14acdd15df9d992a31->enter($__internal_b687e7a77551b9237cab7683c740358654391c25733dfb14acdd15df9d992a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_61a74b263bc562942114c50bad60d20012587ac96f54de3806fa9bdfe46e62bf->leave($__internal_61a74b263bc562942114c50bad60d20012587ac96f54de3806fa9bdfe46e62bf_prof);

        
        $__internal_b687e7a77551b9237cab7683c740358654391c25733dfb14acdd15df9d992a31->leave($__internal_b687e7a77551b9237cab7683c740358654391c25733dfb14acdd15df9d992a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
