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
        $__internal_965abc5ea597a21e60c9446cdd031f349d9e2cebb90614f91e6b7757692bd396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965abc5ea597a21e60c9446cdd031f349d9e2cebb90614f91e6b7757692bd396->enter($__internal_965abc5ea597a21e60c9446cdd031f349d9e2cebb90614f91e6b7757692bd396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f3a05c1155fb5ff96040d9371b6a2ea1f7ecd736616c852466487840efdeba43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a05c1155fb5ff96040d9371b6a2ea1f7ecd736616c852466487840efdeba43->enter($__internal_f3a05c1155fb5ff96040d9371b6a2ea1f7ecd736616c852466487840efdeba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_965abc5ea597a21e60c9446cdd031f349d9e2cebb90614f91e6b7757692bd396->leave($__internal_965abc5ea597a21e60c9446cdd031f349d9e2cebb90614f91e6b7757692bd396_prof);

        
        $__internal_f3a05c1155fb5ff96040d9371b6a2ea1f7ecd736616c852466487840efdeba43->leave($__internal_f3a05c1155fb5ff96040d9371b6a2ea1f7ecd736616c852466487840efdeba43_prof);

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
