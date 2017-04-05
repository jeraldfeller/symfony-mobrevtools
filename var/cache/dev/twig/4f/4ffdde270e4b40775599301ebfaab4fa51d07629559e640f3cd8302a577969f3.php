<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_10d2b1edc2ae529eb9dda1a95cda2e6b8e60d600e377108950c2618535fb5678 extends Twig_Template
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
        $__internal_efa62cf172a163467f1ab31d0db044216a675126d0de390067fd7137976f5c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa62cf172a163467f1ab31d0db044216a675126d0de390067fd7137976f5c28->enter($__internal_efa62cf172a163467f1ab31d0db044216a675126d0de390067fd7137976f5c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5115adad57cd99401452bd63040a3999dd5741e33c632eb4c266b3c638bd038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5115adad57cd99401452bd63040a3999dd5741e33c632eb4c266b3c638bd038c->enter($__internal_5115adad57cd99401452bd63040a3999dd5741e33c632eb4c266b3c638bd038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_efa62cf172a163467f1ab31d0db044216a675126d0de390067fd7137976f5c28->leave($__internal_efa62cf172a163467f1ab31d0db044216a675126d0de390067fd7137976f5c28_prof);

        
        $__internal_5115adad57cd99401452bd63040a3999dd5741e33c632eb4c266b3c638bd038c->leave($__internal_5115adad57cd99401452bd63040a3999dd5741e33c632eb4c266b3c638bd038c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
