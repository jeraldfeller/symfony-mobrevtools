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
        $__internal_24a79d5884812f17d1dc7504282b677bb3ef1dda76b1eb0378a9b5c00c63ab20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a79d5884812f17d1dc7504282b677bb3ef1dda76b1eb0378a9b5c00c63ab20->enter($__internal_24a79d5884812f17d1dc7504282b677bb3ef1dda76b1eb0378a9b5c00c63ab20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3555fc419a24621c0baa8aa7c9cd7111243d9ac15ddb9306fa1df64af55c50e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3555fc419a24621c0baa8aa7c9cd7111243d9ac15ddb9306fa1df64af55c50e7->enter($__internal_3555fc419a24621c0baa8aa7c9cd7111243d9ac15ddb9306fa1df64af55c50e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_24a79d5884812f17d1dc7504282b677bb3ef1dda76b1eb0378a9b5c00c63ab20->leave($__internal_24a79d5884812f17d1dc7504282b677bb3ef1dda76b1eb0378a9b5c00c63ab20_prof);

        
        $__internal_3555fc419a24621c0baa8aa7c9cd7111243d9ac15ddb9306fa1df64af55c50e7->leave($__internal_3555fc419a24621c0baa8aa7c9cd7111243d9ac15ddb9306fa1df64af55c50e7_prof);

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
