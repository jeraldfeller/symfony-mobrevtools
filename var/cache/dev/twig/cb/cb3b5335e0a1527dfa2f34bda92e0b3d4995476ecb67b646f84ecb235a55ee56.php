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
        $__internal_2d97294bddf474d1e803c9d6f4d8ff1425324241af9b5724547a66af224a5bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d97294bddf474d1e803c9d6f4d8ff1425324241af9b5724547a66af224a5bcb->enter($__internal_2d97294bddf474d1e803c9d6f4d8ff1425324241af9b5724547a66af224a5bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_56d7d9604f1e74f678a5f37dccc287f7e21a6ab5bb14d0166f25b48f000984c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d7d9604f1e74f678a5f37dccc287f7e21a6ab5bb14d0166f25b48f000984c8->enter($__internal_56d7d9604f1e74f678a5f37dccc287f7e21a6ab5bb14d0166f25b48f000984c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2d97294bddf474d1e803c9d6f4d8ff1425324241af9b5724547a66af224a5bcb->leave($__internal_2d97294bddf474d1e803c9d6f4d8ff1425324241af9b5724547a66af224a5bcb_prof);

        
        $__internal_56d7d9604f1e74f678a5f37dccc287f7e21a6ab5bb14d0166f25b48f000984c8->leave($__internal_56d7d9604f1e74f678a5f37dccc287f7e21a6ab5bb14d0166f25b48f000984c8_prof);

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
