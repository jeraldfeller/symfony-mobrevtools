<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_344096aee71c7802bf4797171e5c69de2f77629f49f49570c9ff24a623530587 extends Twig_Template
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
        $__internal_c4a124dc66a5be083b47e7fa46039d006f6b6b9aac1035a6a69b197ec54b02a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a124dc66a5be083b47e7fa46039d006f6b6b9aac1035a6a69b197ec54b02a3->enter($__internal_c4a124dc66a5be083b47e7fa46039d006f6b6b9aac1035a6a69b197ec54b02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2100f41c7c910aa6452fc58614787ed3a18700a6c2d4e82572f9dea3392d4b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2100f41c7c910aa6452fc58614787ed3a18700a6c2d4e82572f9dea3392d4b63->enter($__internal_2100f41c7c910aa6452fc58614787ed3a18700a6c2d4e82572f9dea3392d4b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c4a124dc66a5be083b47e7fa46039d006f6b6b9aac1035a6a69b197ec54b02a3->leave($__internal_c4a124dc66a5be083b47e7fa46039d006f6b6b9aac1035a6a69b197ec54b02a3_prof);

        
        $__internal_2100f41c7c910aa6452fc58614787ed3a18700a6c2d4e82572f9dea3392d4b63->leave($__internal_2100f41c7c910aa6452fc58614787ed3a18700a6c2d4e82572f9dea3392d4b63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
