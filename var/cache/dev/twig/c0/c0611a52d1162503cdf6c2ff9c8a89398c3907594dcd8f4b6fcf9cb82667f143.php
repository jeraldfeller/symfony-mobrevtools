<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b9caba2c069b40af3ba23b4263e79d5734663519325ee4eaa70ce7342815b5d2 extends Twig_Template
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
        $__internal_258de7de182db201d07b8291f4c4af6f4c4d4005185127a6702174b53adca134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258de7de182db201d07b8291f4c4af6f4c4d4005185127a6702174b53adca134->enter($__internal_258de7de182db201d07b8291f4c4af6f4c4d4005185127a6702174b53adca134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ccca158a88fc891d04b498200eb9b8bdaf5894362ac33789bbecfb41044bea6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccca158a88fc891d04b498200eb9b8bdaf5894362ac33789bbecfb41044bea6d->enter($__internal_ccca158a88fc891d04b498200eb9b8bdaf5894362ac33789bbecfb41044bea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_258de7de182db201d07b8291f4c4af6f4c4d4005185127a6702174b53adca134->leave($__internal_258de7de182db201d07b8291f4c4af6f4c4d4005185127a6702174b53adca134_prof);

        
        $__internal_ccca158a88fc891d04b498200eb9b8bdaf5894362ac33789bbecfb41044bea6d->leave($__internal_ccca158a88fc891d04b498200eb9b8bdaf5894362ac33789bbecfb41044bea6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
