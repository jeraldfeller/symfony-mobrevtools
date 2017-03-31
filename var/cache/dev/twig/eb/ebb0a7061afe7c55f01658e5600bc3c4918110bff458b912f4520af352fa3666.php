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
        $__internal_8a7d5befd180b0b85c37e662a6c3a122006ef3eca7891b915de477f53e2cb451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7d5befd180b0b85c37e662a6c3a122006ef3eca7891b915de477f53e2cb451->enter($__internal_8a7d5befd180b0b85c37e662a6c3a122006ef3eca7891b915de477f53e2cb451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_86edc0de32449dfeba01ec1d31f7df351d1b18b890d9af86d1ad399ccf7876b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86edc0de32449dfeba01ec1d31f7df351d1b18b890d9af86d1ad399ccf7876b1->enter($__internal_86edc0de32449dfeba01ec1d31f7df351d1b18b890d9af86d1ad399ccf7876b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8a7d5befd180b0b85c37e662a6c3a122006ef3eca7891b915de477f53e2cb451->leave($__internal_8a7d5befd180b0b85c37e662a6c3a122006ef3eca7891b915de477f53e2cb451_prof);

        
        $__internal_86edc0de32449dfeba01ec1d31f7df351d1b18b890d9af86d1ad399ccf7876b1->leave($__internal_86edc0de32449dfeba01ec1d31f7df351d1b18b890d9af86d1ad399ccf7876b1_prof);

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
