<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_09daacb408027fe257ca809043d25ec4f3638762d4f70c3d6ed8d56fa3f43c91 extends Twig_Template
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
        $__internal_924a8aad018c37d6139d3945eba042a94ea5ea703c1f5c1a2968ccc790e6828e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924a8aad018c37d6139d3945eba042a94ea5ea703c1f5c1a2968ccc790e6828e->enter($__internal_924a8aad018c37d6139d3945eba042a94ea5ea703c1f5c1a2968ccc790e6828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2ad7cbfbf685777c10200e72ddfbc29cbcc8c811dfd9b6c946139097ea1c2cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7cbfbf685777c10200e72ddfbc29cbcc8c811dfd9b6c946139097ea1c2cd5->enter($__internal_2ad7cbfbf685777c10200e72ddfbc29cbcc8c811dfd9b6c946139097ea1c2cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_924a8aad018c37d6139d3945eba042a94ea5ea703c1f5c1a2968ccc790e6828e->leave($__internal_924a8aad018c37d6139d3945eba042a94ea5ea703c1f5c1a2968ccc790e6828e_prof);

        
        $__internal_2ad7cbfbf685777c10200e72ddfbc29cbcc8c811dfd9b6c946139097ea1c2cd5->leave($__internal_2ad7cbfbf685777c10200e72ddfbc29cbcc8c811dfd9b6c946139097ea1c2cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
