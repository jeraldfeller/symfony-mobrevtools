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
        $__internal_6fb727880bed20d9516c1ceb4d3884e98d75fcb9a2308bcc42342d212916ed9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb727880bed20d9516c1ceb4d3884e98d75fcb9a2308bcc42342d212916ed9b->enter($__internal_6fb727880bed20d9516c1ceb4d3884e98d75fcb9a2308bcc42342d212916ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_492f4ec2c6e12e264d371c4e22e5d1835bd9ba888a0d726aaee3a8dc04d9fd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492f4ec2c6e12e264d371c4e22e5d1835bd9ba888a0d726aaee3a8dc04d9fd7e->enter($__internal_492f4ec2c6e12e264d371c4e22e5d1835bd9ba888a0d726aaee3a8dc04d9fd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fb727880bed20d9516c1ceb4d3884e98d75fcb9a2308bcc42342d212916ed9b->leave($__internal_6fb727880bed20d9516c1ceb4d3884e98d75fcb9a2308bcc42342d212916ed9b_prof);

        
        $__internal_492f4ec2c6e12e264d371c4e22e5d1835bd9ba888a0d726aaee3a8dc04d9fd7e->leave($__internal_492f4ec2c6e12e264d371c4e22e5d1835bd9ba888a0d726aaee3a8dc04d9fd7e_prof);

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
