<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_01da7d793e8056e64914e9ce3ba5f91b52e64318dcb5d5904b5c8ddaee96f84f extends Twig_Template
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
        $__internal_23e80873f2c203d9e338c569a87672417e13bfaa7a51586c61744e0fb72a7a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e80873f2c203d9e338c569a87672417e13bfaa7a51586c61744e0fb72a7a0f->enter($__internal_23e80873f2c203d9e338c569a87672417e13bfaa7a51586c61744e0fb72a7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e0b9f19f6488e6d945f36696c81154b56bbee673c81cf5653df06ca75f166099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b9f19f6488e6d945f36696c81154b56bbee673c81cf5653df06ca75f166099->enter($__internal_e0b9f19f6488e6d945f36696c81154b56bbee673c81cf5653df06ca75f166099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_23e80873f2c203d9e338c569a87672417e13bfaa7a51586c61744e0fb72a7a0f->leave($__internal_23e80873f2c203d9e338c569a87672417e13bfaa7a51586c61744e0fb72a7a0f_prof);

        
        $__internal_e0b9f19f6488e6d945f36696c81154b56bbee673c81cf5653df06ca75f166099->leave($__internal_e0b9f19f6488e6d945f36696c81154b56bbee673c81cf5653df06ca75f166099_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
