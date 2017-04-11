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
        $__internal_c7de5c52803c153f80896e847b0dbc065bf8b5ea83ac1b516004d83662db247b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7de5c52803c153f80896e847b0dbc065bf8b5ea83ac1b516004d83662db247b->enter($__internal_c7de5c52803c153f80896e847b0dbc065bf8b5ea83ac1b516004d83662db247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_658d27dccf53042f956875bd958c25ea946fa4b99649f7cec91a78902c8d3e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658d27dccf53042f956875bd958c25ea946fa4b99649f7cec91a78902c8d3e29->enter($__internal_658d27dccf53042f956875bd958c25ea946fa4b99649f7cec91a78902c8d3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c7de5c52803c153f80896e847b0dbc065bf8b5ea83ac1b516004d83662db247b->leave($__internal_c7de5c52803c153f80896e847b0dbc065bf8b5ea83ac1b516004d83662db247b_prof);

        
        $__internal_658d27dccf53042f956875bd958c25ea946fa4b99649f7cec91a78902c8d3e29->leave($__internal_658d27dccf53042f956875bd958c25ea946fa4b99649f7cec91a78902c8d3e29_prof);

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
