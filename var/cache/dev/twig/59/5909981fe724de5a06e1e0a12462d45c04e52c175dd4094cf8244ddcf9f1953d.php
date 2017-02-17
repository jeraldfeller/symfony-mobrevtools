<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54f2ecb8b26fb31af53bf8bda321b62ca4fcf16a325915aa4386a91f691d9da4 extends Twig_Template
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
        $__internal_89d4354fd7827be496c80539ab415bc775837de55cd4284a955b5a45587dd5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d4354fd7827be496c80539ab415bc775837de55cd4284a955b5a45587dd5c9->enter($__internal_89d4354fd7827be496c80539ab415bc775837de55cd4284a955b5a45587dd5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6c81017239f32e84aabec750dc2244f64fd2e6457c30c17ac03404441d7d2182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c81017239f32e84aabec750dc2244f64fd2e6457c30c17ac03404441d7d2182->enter($__internal_6c81017239f32e84aabec750dc2244f64fd2e6457c30c17ac03404441d7d2182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_89d4354fd7827be496c80539ab415bc775837de55cd4284a955b5a45587dd5c9->leave($__internal_89d4354fd7827be496c80539ab415bc775837de55cd4284a955b5a45587dd5c9_prof);

        
        $__internal_6c81017239f32e84aabec750dc2244f64fd2e6457c30c17ac03404441d7d2182->leave($__internal_6c81017239f32e84aabec750dc2244f64fd2e6457c30c17ac03404441d7d2182_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
