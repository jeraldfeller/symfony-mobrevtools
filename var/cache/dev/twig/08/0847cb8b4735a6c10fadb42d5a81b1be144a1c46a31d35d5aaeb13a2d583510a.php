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
        $__internal_54e00eaddae2e39be659bd74646179f9a916b15d092fcff78b9b0a56eead6ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e00eaddae2e39be659bd74646179f9a916b15d092fcff78b9b0a56eead6ba7->enter($__internal_54e00eaddae2e39be659bd74646179f9a916b15d092fcff78b9b0a56eead6ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2f9ff318d1ecc935f0b3895552d80dab34f4b556866dc0259f623af8e2991f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9ff318d1ecc935f0b3895552d80dab34f4b556866dc0259f623af8e2991f53->enter($__internal_2f9ff318d1ecc935f0b3895552d80dab34f4b556866dc0259f623af8e2991f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_54e00eaddae2e39be659bd74646179f9a916b15d092fcff78b9b0a56eead6ba7->leave($__internal_54e00eaddae2e39be659bd74646179f9a916b15d092fcff78b9b0a56eead6ba7_prof);

        
        $__internal_2f9ff318d1ecc935f0b3895552d80dab34f4b556866dc0259f623af8e2991f53->leave($__internal_2f9ff318d1ecc935f0b3895552d80dab34f4b556866dc0259f623af8e2991f53_prof);

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
