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
        $__internal_f14603dbd73664e9e26a782a04cecbe416a19ef7163eec9e7d64acd4d0e8e018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14603dbd73664e9e26a782a04cecbe416a19ef7163eec9e7d64acd4d0e8e018->enter($__internal_f14603dbd73664e9e26a782a04cecbe416a19ef7163eec9e7d64acd4d0e8e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0db782122d97f813f83ec144698351fe56b619e15047528f08b9c26c168c8588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db782122d97f813f83ec144698351fe56b619e15047528f08b9c26c168c8588->enter($__internal_0db782122d97f813f83ec144698351fe56b619e15047528f08b9c26c168c8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f14603dbd73664e9e26a782a04cecbe416a19ef7163eec9e7d64acd4d0e8e018->leave($__internal_f14603dbd73664e9e26a782a04cecbe416a19ef7163eec9e7d64acd4d0e8e018_prof);

        
        $__internal_0db782122d97f813f83ec144698351fe56b619e15047528f08b9c26c168c8588->leave($__internal_0db782122d97f813f83ec144698351fe56b619e15047528f08b9c26c168c8588_prof);

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
