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
        $__internal_ccc357d9d36568af8d473902bb3b35bede145c7c6b232e7e74c5c89aea8e328f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc357d9d36568af8d473902bb3b35bede145c7c6b232e7e74c5c89aea8e328f->enter($__internal_ccc357d9d36568af8d473902bb3b35bede145c7c6b232e7e74c5c89aea8e328f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_54bf5f3b7d6cf62ea9e5b114f93ea4761ad113bd2c12127a2d839856f294306d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bf5f3b7d6cf62ea9e5b114f93ea4761ad113bd2c12127a2d839856f294306d->enter($__internal_54bf5f3b7d6cf62ea9e5b114f93ea4761ad113bd2c12127a2d839856f294306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ccc357d9d36568af8d473902bb3b35bede145c7c6b232e7e74c5c89aea8e328f->leave($__internal_ccc357d9d36568af8d473902bb3b35bede145c7c6b232e7e74c5c89aea8e328f_prof);

        
        $__internal_54bf5f3b7d6cf62ea9e5b114f93ea4761ad113bd2c12127a2d839856f294306d->leave($__internal_54bf5f3b7d6cf62ea9e5b114f93ea4761ad113bd2c12127a2d839856f294306d_prof);

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
