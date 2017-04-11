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
        $__internal_9c38d569a711333764b2333c6202fe305d2a57d3012b1849c2a3a40f740ef316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c38d569a711333764b2333c6202fe305d2a57d3012b1849c2a3a40f740ef316->enter($__internal_9c38d569a711333764b2333c6202fe305d2a57d3012b1849c2a3a40f740ef316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3b80919cec24d0be4da996af4e4c9ae3ec506eb9d0db025b1a96c40a3db23de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b80919cec24d0be4da996af4e4c9ae3ec506eb9d0db025b1a96c40a3db23de5->enter($__internal_3b80919cec24d0be4da996af4e4c9ae3ec506eb9d0db025b1a96c40a3db23de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c38d569a711333764b2333c6202fe305d2a57d3012b1849c2a3a40f740ef316->leave($__internal_9c38d569a711333764b2333c6202fe305d2a57d3012b1849c2a3a40f740ef316_prof);

        
        $__internal_3b80919cec24d0be4da996af4e4c9ae3ec506eb9d0db025b1a96c40a3db23de5->leave($__internal_3b80919cec24d0be4da996af4e4c9ae3ec506eb9d0db025b1a96c40a3db23de5_prof);

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
