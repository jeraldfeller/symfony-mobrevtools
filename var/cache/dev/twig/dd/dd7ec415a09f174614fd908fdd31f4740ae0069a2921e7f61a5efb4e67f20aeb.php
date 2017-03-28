<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_19179dba84515c3aecd4fa5465debba977ce4288173c33959909cc0261a69edb extends Twig_Template
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
        $__internal_cdda72384da839d03fa0b34039273498ab3d6045087007bd824fc9c1be672843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdda72384da839d03fa0b34039273498ab3d6045087007bd824fc9c1be672843->enter($__internal_cdda72384da839d03fa0b34039273498ab3d6045087007bd824fc9c1be672843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d147adf822c45dc465338b51011125c450912f35d9c5ac645fe8f7353c6b6ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d147adf822c45dc465338b51011125c450912f35d9c5ac645fe8f7353c6b6ab8->enter($__internal_d147adf822c45dc465338b51011125c450912f35d9c5ac645fe8f7353c6b6ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cdda72384da839d03fa0b34039273498ab3d6045087007bd824fc9c1be672843->leave($__internal_cdda72384da839d03fa0b34039273498ab3d6045087007bd824fc9c1be672843_prof);

        
        $__internal_d147adf822c45dc465338b51011125c450912f35d9c5ac645fe8f7353c6b6ab8->leave($__internal_d147adf822c45dc465338b51011125c450912f35d9c5ac645fe8f7353c6b6ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
