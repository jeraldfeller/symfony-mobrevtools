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
        $__internal_93fdb8eba0f0210f8b42dd250374d4e302932fccee90a2136e1f15f55be798dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fdb8eba0f0210f8b42dd250374d4e302932fccee90a2136e1f15f55be798dc->enter($__internal_93fdb8eba0f0210f8b42dd250374d4e302932fccee90a2136e1f15f55be798dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1e651ce41c30b1101426a2e277332857b6bb7c07d76263867a543e3ca5390605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e651ce41c30b1101426a2e277332857b6bb7c07d76263867a543e3ca5390605->enter($__internal_1e651ce41c30b1101426a2e277332857b6bb7c07d76263867a543e3ca5390605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_93fdb8eba0f0210f8b42dd250374d4e302932fccee90a2136e1f15f55be798dc->leave($__internal_93fdb8eba0f0210f8b42dd250374d4e302932fccee90a2136e1f15f55be798dc_prof);

        
        $__internal_1e651ce41c30b1101426a2e277332857b6bb7c07d76263867a543e3ca5390605->leave($__internal_1e651ce41c30b1101426a2e277332857b6bb7c07d76263867a543e3ca5390605_prof);

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
