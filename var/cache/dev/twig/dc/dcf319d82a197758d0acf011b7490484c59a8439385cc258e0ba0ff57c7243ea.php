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
        $__internal_93019986df3725c343c74efb08126d0f36319082bafbf8d68ef26d9f908a9641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93019986df3725c343c74efb08126d0f36319082bafbf8d68ef26d9f908a9641->enter($__internal_93019986df3725c343c74efb08126d0f36319082bafbf8d68ef26d9f908a9641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_88ee1a0c777cd57519c237fe39e4f6a21b152905130c6683c7a6f4ebc815e117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ee1a0c777cd57519c237fe39e4f6a21b152905130c6683c7a6f4ebc815e117->enter($__internal_88ee1a0c777cd57519c237fe39e4f6a21b152905130c6683c7a6f4ebc815e117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_93019986df3725c343c74efb08126d0f36319082bafbf8d68ef26d9f908a9641->leave($__internal_93019986df3725c343c74efb08126d0f36319082bafbf8d68ef26d9f908a9641_prof);

        
        $__internal_88ee1a0c777cd57519c237fe39e4f6a21b152905130c6683c7a6f4ebc815e117->leave($__internal_88ee1a0c777cd57519c237fe39e4f6a21b152905130c6683c7a6f4ebc815e117_prof);

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
