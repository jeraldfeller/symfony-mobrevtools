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
        $__internal_eb1052b53e73a1ed0da019d07895d5f1336be267b04ed3c291ed5194cfe8771c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1052b53e73a1ed0da019d07895d5f1336be267b04ed3c291ed5194cfe8771c->enter($__internal_eb1052b53e73a1ed0da019d07895d5f1336be267b04ed3c291ed5194cfe8771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_825e8368fe2312dddc8c338eba86b9dfeb62022709ba87cda022e55d036e1584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825e8368fe2312dddc8c338eba86b9dfeb62022709ba87cda022e55d036e1584->enter($__internal_825e8368fe2312dddc8c338eba86b9dfeb62022709ba87cda022e55d036e1584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eb1052b53e73a1ed0da019d07895d5f1336be267b04ed3c291ed5194cfe8771c->leave($__internal_eb1052b53e73a1ed0da019d07895d5f1336be267b04ed3c291ed5194cfe8771c_prof);

        
        $__internal_825e8368fe2312dddc8c338eba86b9dfeb62022709ba87cda022e55d036e1584->leave($__internal_825e8368fe2312dddc8c338eba86b9dfeb62022709ba87cda022e55d036e1584_prof);

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
