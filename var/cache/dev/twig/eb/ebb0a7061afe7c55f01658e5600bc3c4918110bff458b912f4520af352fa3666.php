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
        $__internal_7cb2dc902f6300771817ea58a6e8756d69fafa494d96b403714f4d5a0a4b4190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb2dc902f6300771817ea58a6e8756d69fafa494d96b403714f4d5a0a4b4190->enter($__internal_7cb2dc902f6300771817ea58a6e8756d69fafa494d96b403714f4d5a0a4b4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_54be62ef4d84ad9d366a35c47f37eff6fc2dae1c0c256bc6e828445c319488e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54be62ef4d84ad9d366a35c47f37eff6fc2dae1c0c256bc6e828445c319488e2->enter($__internal_54be62ef4d84ad9d366a35c47f37eff6fc2dae1c0c256bc6e828445c319488e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7cb2dc902f6300771817ea58a6e8756d69fafa494d96b403714f4d5a0a4b4190->leave($__internal_7cb2dc902f6300771817ea58a6e8756d69fafa494d96b403714f4d5a0a4b4190_prof);

        
        $__internal_54be62ef4d84ad9d366a35c47f37eff6fc2dae1c0c256bc6e828445c319488e2->leave($__internal_54be62ef4d84ad9d366a35c47f37eff6fc2dae1c0c256bc6e828445c319488e2_prof);

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
