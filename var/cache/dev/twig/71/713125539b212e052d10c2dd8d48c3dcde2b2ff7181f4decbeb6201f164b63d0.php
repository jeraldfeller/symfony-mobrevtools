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
        $__internal_cc13ad6a7e01b23e87fcc5c2f6867720d8257f230cb789af891f893892387dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc13ad6a7e01b23e87fcc5c2f6867720d8257f230cb789af891f893892387dfd->enter($__internal_cc13ad6a7e01b23e87fcc5c2f6867720d8257f230cb789af891f893892387dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bb9f054c9bd894e587d851a9725e21cceb81c2d69e7c166a09fec2c697d82a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9f054c9bd894e587d851a9725e21cceb81c2d69e7c166a09fec2c697d82a87->enter($__internal_bb9f054c9bd894e587d851a9725e21cceb81c2d69e7c166a09fec2c697d82a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cc13ad6a7e01b23e87fcc5c2f6867720d8257f230cb789af891f893892387dfd->leave($__internal_cc13ad6a7e01b23e87fcc5c2f6867720d8257f230cb789af891f893892387dfd_prof);

        
        $__internal_bb9f054c9bd894e587d851a9725e21cceb81c2d69e7c166a09fec2c697d82a87->leave($__internal_bb9f054c9bd894e587d851a9725e21cceb81c2d69e7c166a09fec2c697d82a87_prof);

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
