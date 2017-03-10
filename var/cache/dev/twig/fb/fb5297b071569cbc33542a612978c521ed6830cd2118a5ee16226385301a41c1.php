<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bd1c7b2500f34d04f02f729190dc97c56081869ac1fa7ae0c96545d50fac483a extends Twig_Template
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
        $__internal_3ce0f625bfd996af8a5b133c8456793f06e9e0691b8bcb12d302d4a39a3261c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce0f625bfd996af8a5b133c8456793f06e9e0691b8bcb12d302d4a39a3261c7->enter($__internal_3ce0f625bfd996af8a5b133c8456793f06e9e0691b8bcb12d302d4a39a3261c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_822b65b3650672fb5f81d8c654e805731bb7922ae7c64d5ce7babb9cb36d0b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822b65b3650672fb5f81d8c654e805731bb7922ae7c64d5ce7babb9cb36d0b82->enter($__internal_822b65b3650672fb5f81d8c654e805731bb7922ae7c64d5ce7babb9cb36d0b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3ce0f625bfd996af8a5b133c8456793f06e9e0691b8bcb12d302d4a39a3261c7->leave($__internal_3ce0f625bfd996af8a5b133c8456793f06e9e0691b8bcb12d302d4a39a3261c7_prof);

        
        $__internal_822b65b3650672fb5f81d8c654e805731bb7922ae7c64d5ce7babb9cb36d0b82->leave($__internal_822b65b3650672fb5f81d8c654e805731bb7922ae7c64d5ce7babb9cb36d0b82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
