<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2311ac9497b4a74158ce5f6d84d0821c49a0032f82ac748f7254afc2ca9a4d20 extends Twig_Template
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
        $__internal_b8202b338b863a4e24e58d62274d7396fc790dd287a7373a7658b2e46e3fbe98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8202b338b863a4e24e58d62274d7396fc790dd287a7373a7658b2e46e3fbe98->enter($__internal_b8202b338b863a4e24e58d62274d7396fc790dd287a7373a7658b2e46e3fbe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0fa8d84e82022e1c18092bacf2a064a42e0d56eca68065bd49ca2cd47ea89358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa8d84e82022e1c18092bacf2a064a42e0d56eca68065bd49ca2cd47ea89358->enter($__internal_0fa8d84e82022e1c18092bacf2a064a42e0d56eca68065bd49ca2cd47ea89358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b8202b338b863a4e24e58d62274d7396fc790dd287a7373a7658b2e46e3fbe98->leave($__internal_b8202b338b863a4e24e58d62274d7396fc790dd287a7373a7658b2e46e3fbe98_prof);

        
        $__internal_0fa8d84e82022e1c18092bacf2a064a42e0d56eca68065bd49ca2cd47ea89358->leave($__internal_0fa8d84e82022e1c18092bacf2a064a42e0d56eca68065bd49ca2cd47ea89358_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
