<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8aca62dec61eb97bc00bf257f9163e2a2a2fd0ff96c4f4ca3558630e66cf6001 extends Twig_Template
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
        $__internal_60627b6219410b93303d0f9cd355e27db484947ca163b88a3c6ddaab7eac1806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60627b6219410b93303d0f9cd355e27db484947ca163b88a3c6ddaab7eac1806->enter($__internal_60627b6219410b93303d0f9cd355e27db484947ca163b88a3c6ddaab7eac1806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b9fdb66279c4323527c734ff1cad2bf5246104a1b8b57ba386ab9402466a6b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fdb66279c4323527c734ff1cad2bf5246104a1b8b57ba386ab9402466a6b14->enter($__internal_b9fdb66279c4323527c734ff1cad2bf5246104a1b8b57ba386ab9402466a6b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_60627b6219410b93303d0f9cd355e27db484947ca163b88a3c6ddaab7eac1806->leave($__internal_60627b6219410b93303d0f9cd355e27db484947ca163b88a3c6ddaab7eac1806_prof);

        
        $__internal_b9fdb66279c4323527c734ff1cad2bf5246104a1b8b57ba386ab9402466a6b14->leave($__internal_b9fdb66279c4323527c734ff1cad2bf5246104a1b8b57ba386ab9402466a6b14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
