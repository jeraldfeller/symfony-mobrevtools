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
        $__internal_4fb2e905484c6112f3deb4b7d82e0a71f6147b4b134b38b43d315dc164e46c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb2e905484c6112f3deb4b7d82e0a71f6147b4b134b38b43d315dc164e46c99->enter($__internal_4fb2e905484c6112f3deb4b7d82e0a71f6147b4b134b38b43d315dc164e46c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4c446c835172cebdf1febe09803fce3ca4ea2f73713edb423abe3f36ccef209e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c446c835172cebdf1febe09803fce3ca4ea2f73713edb423abe3f36ccef209e->enter($__internal_4c446c835172cebdf1febe09803fce3ca4ea2f73713edb423abe3f36ccef209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4fb2e905484c6112f3deb4b7d82e0a71f6147b4b134b38b43d315dc164e46c99->leave($__internal_4fb2e905484c6112f3deb4b7d82e0a71f6147b4b134b38b43d315dc164e46c99_prof);

        
        $__internal_4c446c835172cebdf1febe09803fce3ca4ea2f73713edb423abe3f36ccef209e->leave($__internal_4c446c835172cebdf1febe09803fce3ca4ea2f73713edb423abe3f36ccef209e_prof);

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
