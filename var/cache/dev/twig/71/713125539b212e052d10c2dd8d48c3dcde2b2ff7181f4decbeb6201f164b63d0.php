<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_74ca6b613ccfa876b9d62dd3f844c46eab2729ccb66f8cb22e6cd8165859eb55 extends Twig_Template
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
        $__internal_b9b4dec6e307db1098b93461c5e3c482f14b2e2538a1fed65976333638c07ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b4dec6e307db1098b93461c5e3c482f14b2e2538a1fed65976333638c07ade->enter($__internal_b9b4dec6e307db1098b93461c5e3c482f14b2e2538a1fed65976333638c07ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_38836b55c829c9c88c3ce3bd25d81cb36b6b98bd75f191bbe626a10fee5359a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38836b55c829c9c88c3ce3bd25d81cb36b6b98bd75f191bbe626a10fee5359a3->enter($__internal_38836b55c829c9c88c3ce3bd25d81cb36b6b98bd75f191bbe626a10fee5359a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b9b4dec6e307db1098b93461c5e3c482f14b2e2538a1fed65976333638c07ade->leave($__internal_b9b4dec6e307db1098b93461c5e3c482f14b2e2538a1fed65976333638c07ade_prof);

        
        $__internal_38836b55c829c9c88c3ce3bd25d81cb36b6b98bd75f191bbe626a10fee5359a3->leave($__internal_38836b55c829c9c88c3ce3bd25d81cb36b6b98bd75f191bbe626a10fee5359a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
