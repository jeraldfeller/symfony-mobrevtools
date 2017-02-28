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
        $__internal_b0f482d5a652c86065d87348272f49eeddb114ba138b3fbdb02b6d5992a00d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f482d5a652c86065d87348272f49eeddb114ba138b3fbdb02b6d5992a00d21->enter($__internal_b0f482d5a652c86065d87348272f49eeddb114ba138b3fbdb02b6d5992a00d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6c49e5b173673ef7b8fe4a5661b998cb6f5903a4f32628607d1753d76e39d27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c49e5b173673ef7b8fe4a5661b998cb6f5903a4f32628607d1753d76e39d27b->enter($__internal_6c49e5b173673ef7b8fe4a5661b998cb6f5903a4f32628607d1753d76e39d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b0f482d5a652c86065d87348272f49eeddb114ba138b3fbdb02b6d5992a00d21->leave($__internal_b0f482d5a652c86065d87348272f49eeddb114ba138b3fbdb02b6d5992a00d21_prof);

        
        $__internal_6c49e5b173673ef7b8fe4a5661b998cb6f5903a4f32628607d1753d76e39d27b->leave($__internal_6c49e5b173673ef7b8fe4a5661b998cb6f5903a4f32628607d1753d76e39d27b_prof);

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
