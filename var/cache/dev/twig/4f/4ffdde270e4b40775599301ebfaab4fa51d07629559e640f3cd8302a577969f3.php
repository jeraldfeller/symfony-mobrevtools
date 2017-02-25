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
        $__internal_b2a295b45367e5fae0284e6da380cd63fbaa98d60d1e01cf851b33cb37be8a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a295b45367e5fae0284e6da380cd63fbaa98d60d1e01cf851b33cb37be8a33->enter($__internal_b2a295b45367e5fae0284e6da380cd63fbaa98d60d1e01cf851b33cb37be8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7fa5589468890450b9fae68a379d1c070e745ae63de6b30c44233c57511805c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa5589468890450b9fae68a379d1c070e745ae63de6b30c44233c57511805c1->enter($__internal_7fa5589468890450b9fae68a379d1c070e745ae63de6b30c44233c57511805c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b2a295b45367e5fae0284e6da380cd63fbaa98d60d1e01cf851b33cb37be8a33->leave($__internal_b2a295b45367e5fae0284e6da380cd63fbaa98d60d1e01cf851b33cb37be8a33_prof);

        
        $__internal_7fa5589468890450b9fae68a379d1c070e745ae63de6b30c44233c57511805c1->leave($__internal_7fa5589468890450b9fae68a379d1c070e745ae63de6b30c44233c57511805c1_prof);

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
