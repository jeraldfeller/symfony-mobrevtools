<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3b561f975f00eb3eb9c0ebcf1d9dc531557c2ed5a49d2ebddef592aad978d461 extends Twig_Template
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
        $__internal_3ae5436f38f5428ea4a72542078cc48e32ecf51a89d6d34986164b85a7f78eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae5436f38f5428ea4a72542078cc48e32ecf51a89d6d34986164b85a7f78eea->enter($__internal_3ae5436f38f5428ea4a72542078cc48e32ecf51a89d6d34986164b85a7f78eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dead065bc0c7e8db79d078565e9c0b7496b2a9dd6dca7dce56257982a282255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dead065bc0c7e8db79d078565e9c0b7496b2a9dd6dca7dce56257982a282255f->enter($__internal_dead065bc0c7e8db79d078565e9c0b7496b2a9dd6dca7dce56257982a282255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3ae5436f38f5428ea4a72542078cc48e32ecf51a89d6d34986164b85a7f78eea->leave($__internal_3ae5436f38f5428ea4a72542078cc48e32ecf51a89d6d34986164b85a7f78eea_prof);

        
        $__internal_dead065bc0c7e8db79d078565e9c0b7496b2a9dd6dca7dce56257982a282255f->leave($__internal_dead065bc0c7e8db79d078565e9c0b7496b2a9dd6dca7dce56257982a282255f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
