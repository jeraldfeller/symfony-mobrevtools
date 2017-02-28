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
        $__internal_6b4c499c51d43a63438bc18fb9081139c760624f382a61a9f7d47d17a01085f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4c499c51d43a63438bc18fb9081139c760624f382a61a9f7d47d17a01085f7->enter($__internal_6b4c499c51d43a63438bc18fb9081139c760624f382a61a9f7d47d17a01085f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c5f83f69d21b8b97416b285bd1cfc07e8958ef00ee7ede48ccc91f10d6d7df28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f83f69d21b8b97416b285bd1cfc07e8958ef00ee7ede48ccc91f10d6d7df28->enter($__internal_c5f83f69d21b8b97416b285bd1cfc07e8958ef00ee7ede48ccc91f10d6d7df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6b4c499c51d43a63438bc18fb9081139c760624f382a61a9f7d47d17a01085f7->leave($__internal_6b4c499c51d43a63438bc18fb9081139c760624f382a61a9f7d47d17a01085f7_prof);

        
        $__internal_c5f83f69d21b8b97416b285bd1cfc07e8958ef00ee7ede48ccc91f10d6d7df28->leave($__internal_c5f83f69d21b8b97416b285bd1cfc07e8958ef00ee7ede48ccc91f10d6d7df28_prof);

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
