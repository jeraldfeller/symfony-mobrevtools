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
        $__internal_17dfc56fa162a151a12211492946bc8aef3f67b8ea328c6f83c3907029238a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dfc56fa162a151a12211492946bc8aef3f67b8ea328c6f83c3907029238a11->enter($__internal_17dfc56fa162a151a12211492946bc8aef3f67b8ea328c6f83c3907029238a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f3600e4990c8412315e42c2c1db99d316b4db1e6de8dd26d9fec566a1e26e12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3600e4990c8412315e42c2c1db99d316b4db1e6de8dd26d9fec566a1e26e12a->enter($__internal_f3600e4990c8412315e42c2c1db99d316b4db1e6de8dd26d9fec566a1e26e12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_17dfc56fa162a151a12211492946bc8aef3f67b8ea328c6f83c3907029238a11->leave($__internal_17dfc56fa162a151a12211492946bc8aef3f67b8ea328c6f83c3907029238a11_prof);

        
        $__internal_f3600e4990c8412315e42c2c1db99d316b4db1e6de8dd26d9fec566a1e26e12a->leave($__internal_f3600e4990c8412315e42c2c1db99d316b4db1e6de8dd26d9fec566a1e26e12a_prof);

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
