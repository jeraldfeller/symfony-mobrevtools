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
        $__internal_990d89929d6f435163871d9f81ab2fcad208fb88c7519afb699357faf2db37e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990d89929d6f435163871d9f81ab2fcad208fb88c7519afb699357faf2db37e7->enter($__internal_990d89929d6f435163871d9f81ab2fcad208fb88c7519afb699357faf2db37e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6bb1b3d8b955bc0a19497ca5de63c951b96386f779625f6d34466235685e2aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb1b3d8b955bc0a19497ca5de63c951b96386f779625f6d34466235685e2aae->enter($__internal_6bb1b3d8b955bc0a19497ca5de63c951b96386f779625f6d34466235685e2aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_990d89929d6f435163871d9f81ab2fcad208fb88c7519afb699357faf2db37e7->leave($__internal_990d89929d6f435163871d9f81ab2fcad208fb88c7519afb699357faf2db37e7_prof);

        
        $__internal_6bb1b3d8b955bc0a19497ca5de63c951b96386f779625f6d34466235685e2aae->leave($__internal_6bb1b3d8b955bc0a19497ca5de63c951b96386f779625f6d34466235685e2aae_prof);

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
