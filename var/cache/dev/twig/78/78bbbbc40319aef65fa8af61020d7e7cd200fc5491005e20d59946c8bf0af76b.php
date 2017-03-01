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
        $__internal_b6f4ec73d60b88af6eb36f13686ceaed3be98463c1b0eb101fb775ae439387c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f4ec73d60b88af6eb36f13686ceaed3be98463c1b0eb101fb775ae439387c2->enter($__internal_b6f4ec73d60b88af6eb36f13686ceaed3be98463c1b0eb101fb775ae439387c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_29ee3d8d470239cec36c6cde2e43e251b61713855335ab4a96ad8e3acc9cf44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ee3d8d470239cec36c6cde2e43e251b61713855335ab4a96ad8e3acc9cf44a->enter($__internal_29ee3d8d470239cec36c6cde2e43e251b61713855335ab4a96ad8e3acc9cf44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b6f4ec73d60b88af6eb36f13686ceaed3be98463c1b0eb101fb775ae439387c2->leave($__internal_b6f4ec73d60b88af6eb36f13686ceaed3be98463c1b0eb101fb775ae439387c2_prof);

        
        $__internal_29ee3d8d470239cec36c6cde2e43e251b61713855335ab4a96ad8e3acc9cf44a->leave($__internal_29ee3d8d470239cec36c6cde2e43e251b61713855335ab4a96ad8e3acc9cf44a_prof);

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
