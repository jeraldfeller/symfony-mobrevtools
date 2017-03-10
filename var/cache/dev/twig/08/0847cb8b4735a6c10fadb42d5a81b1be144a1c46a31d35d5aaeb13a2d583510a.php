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
        $__internal_21de8fb1c0018279a52f372763a82a4d6a4c51a01d26b813b3eb844585684b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21de8fb1c0018279a52f372763a82a4d6a4c51a01d26b813b3eb844585684b96->enter($__internal_21de8fb1c0018279a52f372763a82a4d6a4c51a01d26b813b3eb844585684b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8ad56bf46a3cd1ae9f30c66dfb6d837f596e84d7eb1098a1ef597e72b35a7909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad56bf46a3cd1ae9f30c66dfb6d837f596e84d7eb1098a1ef597e72b35a7909->enter($__internal_8ad56bf46a3cd1ae9f30c66dfb6d837f596e84d7eb1098a1ef597e72b35a7909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_21de8fb1c0018279a52f372763a82a4d6a4c51a01d26b813b3eb844585684b96->leave($__internal_21de8fb1c0018279a52f372763a82a4d6a4c51a01d26b813b3eb844585684b96_prof);

        
        $__internal_8ad56bf46a3cd1ae9f30c66dfb6d837f596e84d7eb1098a1ef597e72b35a7909->leave($__internal_8ad56bf46a3cd1ae9f30c66dfb6d837f596e84d7eb1098a1ef597e72b35a7909_prof);

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
