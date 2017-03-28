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
        $__internal_249efdc39722c73035e8e8e71b675a2e51bc986a54d43b54d7ca0b46b985eb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249efdc39722c73035e8e8e71b675a2e51bc986a54d43b54d7ca0b46b985eb97->enter($__internal_249efdc39722c73035e8e8e71b675a2e51bc986a54d43b54d7ca0b46b985eb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_13cd089c6fc592a52b56e30fd58b49d1b10a94d2cca42b989752f0905e4c618e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cd089c6fc592a52b56e30fd58b49d1b10a94d2cca42b989752f0905e4c618e->enter($__internal_13cd089c6fc592a52b56e30fd58b49d1b10a94d2cca42b989752f0905e4c618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_249efdc39722c73035e8e8e71b675a2e51bc986a54d43b54d7ca0b46b985eb97->leave($__internal_249efdc39722c73035e8e8e71b675a2e51bc986a54d43b54d7ca0b46b985eb97_prof);

        
        $__internal_13cd089c6fc592a52b56e30fd58b49d1b10a94d2cca42b989752f0905e4c618e->leave($__internal_13cd089c6fc592a52b56e30fd58b49d1b10a94d2cca42b989752f0905e4c618e_prof);

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
