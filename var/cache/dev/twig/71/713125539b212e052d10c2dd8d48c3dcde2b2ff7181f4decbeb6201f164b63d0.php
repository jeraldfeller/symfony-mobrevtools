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
        $__internal_cd81109d08be9370d40f46e00bd3be6e0c81c3bac77cce1215852cbd8a1394ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd81109d08be9370d40f46e00bd3be6e0c81c3bac77cce1215852cbd8a1394ba->enter($__internal_cd81109d08be9370d40f46e00bd3be6e0c81c3bac77cce1215852cbd8a1394ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5f2a505b6375ee088df9ee63ed0b95ae86755bc08554832553acd413ab79e813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2a505b6375ee088df9ee63ed0b95ae86755bc08554832553acd413ab79e813->enter($__internal_5f2a505b6375ee088df9ee63ed0b95ae86755bc08554832553acd413ab79e813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cd81109d08be9370d40f46e00bd3be6e0c81c3bac77cce1215852cbd8a1394ba->leave($__internal_cd81109d08be9370d40f46e00bd3be6e0c81c3bac77cce1215852cbd8a1394ba_prof);

        
        $__internal_5f2a505b6375ee088df9ee63ed0b95ae86755bc08554832553acd413ab79e813->leave($__internal_5f2a505b6375ee088df9ee63ed0b95ae86755bc08554832553acd413ab79e813_prof);

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
