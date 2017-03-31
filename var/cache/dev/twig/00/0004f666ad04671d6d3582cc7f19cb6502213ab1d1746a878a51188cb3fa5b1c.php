<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a9ad0697028605ad64fdcb631d112ea0b6e85094e74d41638cfba921eed923b8 extends Twig_Template
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
        $__internal_e16f373851f04feb2dcfc3c752bb2e0a699c02fb45bc00a8b3b52de4f649b0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16f373851f04feb2dcfc3c752bb2e0a699c02fb45bc00a8b3b52de4f649b0b8->enter($__internal_e16f373851f04feb2dcfc3c752bb2e0a699c02fb45bc00a8b3b52de4f649b0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0e3bd079c2127a5dc2da06c92fb1b930fa00e2cf27b3d2abe06a341f5990d7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3bd079c2127a5dc2da06c92fb1b930fa00e2cf27b3d2abe06a341f5990d7a0->enter($__internal_0e3bd079c2127a5dc2da06c92fb1b930fa00e2cf27b3d2abe06a341f5990d7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e16f373851f04feb2dcfc3c752bb2e0a699c02fb45bc00a8b3b52de4f649b0b8->leave($__internal_e16f373851f04feb2dcfc3c752bb2e0a699c02fb45bc00a8b3b52de4f649b0b8_prof);

        
        $__internal_0e3bd079c2127a5dc2da06c92fb1b930fa00e2cf27b3d2abe06a341f5990d7a0->leave($__internal_0e3bd079c2127a5dc2da06c92fb1b930fa00e2cf27b3d2abe06a341f5990d7a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
