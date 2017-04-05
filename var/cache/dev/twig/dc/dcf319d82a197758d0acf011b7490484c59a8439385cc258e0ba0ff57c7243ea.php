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
        $__internal_998528e6b18a0497937b006e3d48bfb57345fd329f497ae1b1e0f30bef4c08c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998528e6b18a0497937b006e3d48bfb57345fd329f497ae1b1e0f30bef4c08c4->enter($__internal_998528e6b18a0497937b006e3d48bfb57345fd329f497ae1b1e0f30bef4c08c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c6a0a357b017344fb29f50bea061a2404d0ecfaba84a7b61862375c129c39b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a0a357b017344fb29f50bea061a2404d0ecfaba84a7b61862375c129c39b43->enter($__internal_c6a0a357b017344fb29f50bea061a2404d0ecfaba84a7b61862375c129c39b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_998528e6b18a0497937b006e3d48bfb57345fd329f497ae1b1e0f30bef4c08c4->leave($__internal_998528e6b18a0497937b006e3d48bfb57345fd329f497ae1b1e0f30bef4c08c4_prof);

        
        $__internal_c6a0a357b017344fb29f50bea061a2404d0ecfaba84a7b61862375c129c39b43->leave($__internal_c6a0a357b017344fb29f50bea061a2404d0ecfaba84a7b61862375c129c39b43_prof);

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
