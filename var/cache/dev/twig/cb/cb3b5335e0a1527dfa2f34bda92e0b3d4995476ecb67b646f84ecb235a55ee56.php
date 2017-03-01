<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f42332fc3c49f2e41acc9c203e898e802cb5cd366c04d4854764782e5e4d15ee extends Twig_Template
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
        $__internal_82bfb37a894d56b9f9bb74e49a6d306d22e5b88c51e093ee9b07bf5302ebf0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bfb37a894d56b9f9bb74e49a6d306d22e5b88c51e093ee9b07bf5302ebf0d2->enter($__internal_82bfb37a894d56b9f9bb74e49a6d306d22e5b88c51e093ee9b07bf5302ebf0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d6bfa7180e9e70584b0c48361c56ea523cf34cdf63979d88d73de11540f1247f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bfa7180e9e70584b0c48361c56ea523cf34cdf63979d88d73de11540f1247f->enter($__internal_d6bfa7180e9e70584b0c48361c56ea523cf34cdf63979d88d73de11540f1247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_82bfb37a894d56b9f9bb74e49a6d306d22e5b88c51e093ee9b07bf5302ebf0d2->leave($__internal_82bfb37a894d56b9f9bb74e49a6d306d22e5b88c51e093ee9b07bf5302ebf0d2_prof);

        
        $__internal_d6bfa7180e9e70584b0c48361c56ea523cf34cdf63979d88d73de11540f1247f->leave($__internal_d6bfa7180e9e70584b0c48361c56ea523cf34cdf63979d88d73de11540f1247f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
