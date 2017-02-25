<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0dca6248d4d10e38be32c2ba6756f0ecd3d00f4c96798a46f21173e27c4aafa4 extends Twig_Template
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
        $__internal_ff00fbdee1f61ae41fe7aaa019c8467b97b75ffb6affb5ea4544f81ff72a9ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff00fbdee1f61ae41fe7aaa019c8467b97b75ffb6affb5ea4544f81ff72a9ff1->enter($__internal_ff00fbdee1f61ae41fe7aaa019c8467b97b75ffb6affb5ea4544f81ff72a9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_58c08fb788ac779ec1a7f0931d12129c9ac35fa11e7ced5d2ca850dfbf90c725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c08fb788ac779ec1a7f0931d12129c9ac35fa11e7ced5d2ca850dfbf90c725->enter($__internal_58c08fb788ac779ec1a7f0931d12129c9ac35fa11e7ced5d2ca850dfbf90c725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ff00fbdee1f61ae41fe7aaa019c8467b97b75ffb6affb5ea4544f81ff72a9ff1->leave($__internal_ff00fbdee1f61ae41fe7aaa019c8467b97b75ffb6affb5ea4544f81ff72a9ff1_prof);

        
        $__internal_58c08fb788ac779ec1a7f0931d12129c9ac35fa11e7ced5d2ca850dfbf90c725->leave($__internal_58c08fb788ac779ec1a7f0931d12129c9ac35fa11e7ced5d2ca850dfbf90c725_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
