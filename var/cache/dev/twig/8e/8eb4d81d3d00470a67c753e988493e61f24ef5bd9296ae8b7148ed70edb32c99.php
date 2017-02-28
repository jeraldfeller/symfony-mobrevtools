<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0050df91baea8b8ff649bdb3ae9c97137f39662a05a5bbbeaa12ca2f9686013f extends Twig_Template
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
        $__internal_2af1af73687334c143a875813b9ae6d5c800cb76c79b260ae00be34ee3283cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af1af73687334c143a875813b9ae6d5c800cb76c79b260ae00be34ee3283cb8->enter($__internal_2af1af73687334c143a875813b9ae6d5c800cb76c79b260ae00be34ee3283cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_98d25950dc0d98662bbf27aa21bd2ebfe5911c510582e45385b6e67f5d765fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d25950dc0d98662bbf27aa21bd2ebfe5911c510582e45385b6e67f5d765fb9->enter($__internal_98d25950dc0d98662bbf27aa21bd2ebfe5911c510582e45385b6e67f5d765fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2af1af73687334c143a875813b9ae6d5c800cb76c79b260ae00be34ee3283cb8->leave($__internal_2af1af73687334c143a875813b9ae6d5c800cb76c79b260ae00be34ee3283cb8_prof);

        
        $__internal_98d25950dc0d98662bbf27aa21bd2ebfe5911c510582e45385b6e67f5d765fb9->leave($__internal_98d25950dc0d98662bbf27aa21bd2ebfe5911c510582e45385b6e67f5d765fb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
