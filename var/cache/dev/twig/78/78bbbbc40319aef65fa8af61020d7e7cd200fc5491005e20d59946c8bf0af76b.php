<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c1fb3beb891c1f9ca13f76f5e73b3400697e2af0430cde522e36e1685e8e96e extends Twig_Template
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
        $__internal_79f78b8323c595f2caec9b57e0c4d71f79ef250a99958c2b8ad4916a259c2001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f78b8323c595f2caec9b57e0c4d71f79ef250a99958c2b8ad4916a259c2001->enter($__internal_79f78b8323c595f2caec9b57e0c4d71f79ef250a99958c2b8ad4916a259c2001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b446954f401cc1c7889c7519df4632e297a32c1368c6d3ca6f75497b3ea2ca94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b446954f401cc1c7889c7519df4632e297a32c1368c6d3ca6f75497b3ea2ca94->enter($__internal_b446954f401cc1c7889c7519df4632e297a32c1368c6d3ca6f75497b3ea2ca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79f78b8323c595f2caec9b57e0c4d71f79ef250a99958c2b8ad4916a259c2001->leave($__internal_79f78b8323c595f2caec9b57e0c4d71f79ef250a99958c2b8ad4916a259c2001_prof);

        
        $__internal_b446954f401cc1c7889c7519df4632e297a32c1368c6d3ca6f75497b3ea2ca94->leave($__internal_b446954f401cc1c7889c7519df4632e297a32c1368c6d3ca6f75497b3ea2ca94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
