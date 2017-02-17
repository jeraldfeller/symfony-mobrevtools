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
        $__internal_02b2a74eefda9a09ae49f89a2960c2d058cdbcb6af50c48519c6d7d287d61748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b2a74eefda9a09ae49f89a2960c2d058cdbcb6af50c48519c6d7d287d61748->enter($__internal_02b2a74eefda9a09ae49f89a2960c2d058cdbcb6af50c48519c6d7d287d61748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_52a816675ce01ebb831ede4528c3d9eb6f178eb5b8625b56b28b52e5bd1c7163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a816675ce01ebb831ede4528c3d9eb6f178eb5b8625b56b28b52e5bd1c7163->enter($__internal_52a816675ce01ebb831ede4528c3d9eb6f178eb5b8625b56b28b52e5bd1c7163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_02b2a74eefda9a09ae49f89a2960c2d058cdbcb6af50c48519c6d7d287d61748->leave($__internal_02b2a74eefda9a09ae49f89a2960c2d058cdbcb6af50c48519c6d7d287d61748_prof);

        
        $__internal_52a816675ce01ebb831ede4528c3d9eb6f178eb5b8625b56b28b52e5bd1c7163->leave($__internal_52a816675ce01ebb831ede4528c3d9eb6f178eb5b8625b56b28b52e5bd1c7163_prof);

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
