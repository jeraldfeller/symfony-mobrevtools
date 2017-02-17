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
        $__internal_f442150509110dd2aaebc54b5ce86909ed95cad672d1c2898d6c7634484ffb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f442150509110dd2aaebc54b5ce86909ed95cad672d1c2898d6c7634484ffb96->enter($__internal_f442150509110dd2aaebc54b5ce86909ed95cad672d1c2898d6c7634484ffb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0822d5c081b9e25d156021346df086012af5fb2990d9916195d46ab4c2daf6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0822d5c081b9e25d156021346df086012af5fb2990d9916195d46ab4c2daf6e9->enter($__internal_0822d5c081b9e25d156021346df086012af5fb2990d9916195d46ab4c2daf6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f442150509110dd2aaebc54b5ce86909ed95cad672d1c2898d6c7634484ffb96->leave($__internal_f442150509110dd2aaebc54b5ce86909ed95cad672d1c2898d6c7634484ffb96_prof);

        
        $__internal_0822d5c081b9e25d156021346df086012af5fb2990d9916195d46ab4c2daf6e9->leave($__internal_0822d5c081b9e25d156021346df086012af5fb2990d9916195d46ab4c2daf6e9_prof);

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
