<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8aca62dec61eb97bc00bf257f9163e2a2a2fd0ff96c4f4ca3558630e66cf6001 extends Twig_Template
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
        $__internal_3907ca9fc9e4787b2d2f287eb0663689bef295c74dd97259c6a9f70cacc3e20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3907ca9fc9e4787b2d2f287eb0663689bef295c74dd97259c6a9f70cacc3e20b->enter($__internal_3907ca9fc9e4787b2d2f287eb0663689bef295c74dd97259c6a9f70cacc3e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c131b9fa4f8986f1eb89c02d1ab153035abf71c3450fa5ce7b99ccff49fef591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c131b9fa4f8986f1eb89c02d1ab153035abf71c3450fa5ce7b99ccff49fef591->enter($__internal_c131b9fa4f8986f1eb89c02d1ab153035abf71c3450fa5ce7b99ccff49fef591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3907ca9fc9e4787b2d2f287eb0663689bef295c74dd97259c6a9f70cacc3e20b->leave($__internal_3907ca9fc9e4787b2d2f287eb0663689bef295c74dd97259c6a9f70cacc3e20b_prof);

        
        $__internal_c131b9fa4f8986f1eb89c02d1ab153035abf71c3450fa5ce7b99ccff49fef591->leave($__internal_c131b9fa4f8986f1eb89c02d1ab153035abf71c3450fa5ce7b99ccff49fef591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
