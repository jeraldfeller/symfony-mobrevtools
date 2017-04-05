<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a2d971ed7eff3c35c9838493b82e679bb230b09122b36ee1ff07e3c550acd75a extends Twig_Template
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
        $__internal_4455392b8c57c11e8fe85d7c71339c8be4efe64f677bf1bb3afaa71e3c047b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4455392b8c57c11e8fe85d7c71339c8be4efe64f677bf1bb3afaa71e3c047b0f->enter($__internal_4455392b8c57c11e8fe85d7c71339c8be4efe64f677bf1bb3afaa71e3c047b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_09af7ce6bddcc8c6f76c3d0d6f98286fdfaf56cef9475d24952521a01af67ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09af7ce6bddcc8c6f76c3d0d6f98286fdfaf56cef9475d24952521a01af67ef4->enter($__internal_09af7ce6bddcc8c6f76c3d0d6f98286fdfaf56cef9475d24952521a01af67ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4455392b8c57c11e8fe85d7c71339c8be4efe64f677bf1bb3afaa71e3c047b0f->leave($__internal_4455392b8c57c11e8fe85d7c71339c8be4efe64f677bf1bb3afaa71e3c047b0f_prof);

        
        $__internal_09af7ce6bddcc8c6f76c3d0d6f98286fdfaf56cef9475d24952521a01af67ef4->leave($__internal_09af7ce6bddcc8c6f76c3d0d6f98286fdfaf56cef9475d24952521a01af67ef4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
