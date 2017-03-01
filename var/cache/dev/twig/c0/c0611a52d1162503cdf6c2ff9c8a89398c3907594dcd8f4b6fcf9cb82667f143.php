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
        $__internal_845e8b0ec085f304b2a3beea64c5bd325f28e1d329b40f5386038cc29b4f9022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845e8b0ec085f304b2a3beea64c5bd325f28e1d329b40f5386038cc29b4f9022->enter($__internal_845e8b0ec085f304b2a3beea64c5bd325f28e1d329b40f5386038cc29b4f9022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d83d0bf03609dce707f07957f992de78271b4939ced4d23319f31f29d72d47c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83d0bf03609dce707f07957f992de78271b4939ced4d23319f31f29d72d47c8->enter($__internal_d83d0bf03609dce707f07957f992de78271b4939ced4d23319f31f29d72d47c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_845e8b0ec085f304b2a3beea64c5bd325f28e1d329b40f5386038cc29b4f9022->leave($__internal_845e8b0ec085f304b2a3beea64c5bd325f28e1d329b40f5386038cc29b4f9022_prof);

        
        $__internal_d83d0bf03609dce707f07957f992de78271b4939ced4d23319f31f29d72d47c8->leave($__internal_d83d0bf03609dce707f07957f992de78271b4939ced4d23319f31f29d72d47c8_prof);

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
