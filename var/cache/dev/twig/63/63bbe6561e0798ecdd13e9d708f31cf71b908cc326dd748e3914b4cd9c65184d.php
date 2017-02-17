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
        $__internal_e49fd6e548d3c6b30fe5f7ed67ec37dc8ef5c409efac4d48779d6af8a4aea702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49fd6e548d3c6b30fe5f7ed67ec37dc8ef5c409efac4d48779d6af8a4aea702->enter($__internal_e49fd6e548d3c6b30fe5f7ed67ec37dc8ef5c409efac4d48779d6af8a4aea702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_da837bec0a29f1d0f01e1ed80440af8b618653458158ffc21047d23d038216b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da837bec0a29f1d0f01e1ed80440af8b618653458158ffc21047d23d038216b1->enter($__internal_da837bec0a29f1d0f01e1ed80440af8b618653458158ffc21047d23d038216b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e49fd6e548d3c6b30fe5f7ed67ec37dc8ef5c409efac4d48779d6af8a4aea702->leave($__internal_e49fd6e548d3c6b30fe5f7ed67ec37dc8ef5c409efac4d48779d6af8a4aea702_prof);

        
        $__internal_da837bec0a29f1d0f01e1ed80440af8b618653458158ffc21047d23d038216b1->leave($__internal_da837bec0a29f1d0f01e1ed80440af8b618653458158ffc21047d23d038216b1_prof);

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
