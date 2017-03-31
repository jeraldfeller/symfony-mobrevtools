<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_6f8b2c92d0ece8e1bfc20837df2c4f721aaed493d8112689c0ed9179c3f56d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8b2c92d0ece8e1bfc20837df2c4f721aaed493d8112689c0ed9179c3f56d69->enter($__internal_6f8b2c92d0ece8e1bfc20837df2c4f721aaed493d8112689c0ed9179c3f56d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0482db9e96613017b3cc5b8d63a04e0969ba1851a35a3adea5a13447caee0aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0482db9e96613017b3cc5b8d63a04e0969ba1851a35a3adea5a13447caee0aab->enter($__internal_0482db9e96613017b3cc5b8d63a04e0969ba1851a35a3adea5a13447caee0aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6f8b2c92d0ece8e1bfc20837df2c4f721aaed493d8112689c0ed9179c3f56d69->leave($__internal_6f8b2c92d0ece8e1bfc20837df2c4f721aaed493d8112689c0ed9179c3f56d69_prof);

        
        $__internal_0482db9e96613017b3cc5b8d63a04e0969ba1851a35a3adea5a13447caee0aab->leave($__internal_0482db9e96613017b3cc5b8d63a04e0969ba1851a35a3adea5a13447caee0aab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
