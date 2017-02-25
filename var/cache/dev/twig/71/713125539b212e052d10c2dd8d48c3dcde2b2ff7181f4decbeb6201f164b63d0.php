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
        $__internal_c103ab0eaccdad9116d4f9e0972f6f1a1caa113c5de7173f9a68d784cdde320a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c103ab0eaccdad9116d4f9e0972f6f1a1caa113c5de7173f9a68d784cdde320a->enter($__internal_c103ab0eaccdad9116d4f9e0972f6f1a1caa113c5de7173f9a68d784cdde320a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2ca127a5aba8208b4e1a9572d802d3db8e4614414307e55f819ebb729cc52ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca127a5aba8208b4e1a9572d802d3db8e4614414307e55f819ebb729cc52ca5->enter($__internal_2ca127a5aba8208b4e1a9572d802d3db8e4614414307e55f819ebb729cc52ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c103ab0eaccdad9116d4f9e0972f6f1a1caa113c5de7173f9a68d784cdde320a->leave($__internal_c103ab0eaccdad9116d4f9e0972f6f1a1caa113c5de7173f9a68d784cdde320a_prof);

        
        $__internal_2ca127a5aba8208b4e1a9572d802d3db8e4614414307e55f819ebb729cc52ca5->leave($__internal_2ca127a5aba8208b4e1a9572d802d3db8e4614414307e55f819ebb729cc52ca5_prof);

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
