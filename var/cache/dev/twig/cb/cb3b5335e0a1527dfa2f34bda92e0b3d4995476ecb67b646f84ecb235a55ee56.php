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
        $__internal_fe260d5d2c0d1bdf65ac4c27d72aa63bf9b19e821fa9dd70cba67c55610054f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe260d5d2c0d1bdf65ac4c27d72aa63bf9b19e821fa9dd70cba67c55610054f9->enter($__internal_fe260d5d2c0d1bdf65ac4c27d72aa63bf9b19e821fa9dd70cba67c55610054f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_50560f29c0b066bf76bdbd471fd9e85e43803905155c4d7c2c32f24da481a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50560f29c0b066bf76bdbd471fd9e85e43803905155c4d7c2c32f24da481a8f1->enter($__internal_50560f29c0b066bf76bdbd471fd9e85e43803905155c4d7c2c32f24da481a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe260d5d2c0d1bdf65ac4c27d72aa63bf9b19e821fa9dd70cba67c55610054f9->leave($__internal_fe260d5d2c0d1bdf65ac4c27d72aa63bf9b19e821fa9dd70cba67c55610054f9_prof);

        
        $__internal_50560f29c0b066bf76bdbd471fd9e85e43803905155c4d7c2c32f24da481a8f1->leave($__internal_50560f29c0b066bf76bdbd471fd9e85e43803905155c4d7c2c32f24da481a8f1_prof);

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
