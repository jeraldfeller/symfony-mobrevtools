<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_74ca6b613ccfa876b9d62dd3f844c46eab2729ccb66f8cb22e6cd8165859eb55 extends Twig_Template
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
        $__internal_08c1312b0f23e27f0ebfd7256bc5c31dbf56ba68f8d9634d5e813ef1f3a8df3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c1312b0f23e27f0ebfd7256bc5c31dbf56ba68f8d9634d5e813ef1f3a8df3e->enter($__internal_08c1312b0f23e27f0ebfd7256bc5c31dbf56ba68f8d9634d5e813ef1f3a8df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e5db3892e70be7e75d49b90eb2742f132cb323e8d95afaa23901a03d40ee1c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5db3892e70be7e75d49b90eb2742f132cb323e8d95afaa23901a03d40ee1c06->enter($__internal_e5db3892e70be7e75d49b90eb2742f132cb323e8d95afaa23901a03d40ee1c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_08c1312b0f23e27f0ebfd7256bc5c31dbf56ba68f8d9634d5e813ef1f3a8df3e->leave($__internal_08c1312b0f23e27f0ebfd7256bc5c31dbf56ba68f8d9634d5e813ef1f3a8df3e_prof);

        
        $__internal_e5db3892e70be7e75d49b90eb2742f132cb323e8d95afaa23901a03d40ee1c06->leave($__internal_e5db3892e70be7e75d49b90eb2742f132cb323e8d95afaa23901a03d40ee1c06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
