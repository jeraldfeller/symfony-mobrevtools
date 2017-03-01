<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_75edd9b627585efef4dcacf2ffad5c5ee510795263fb1a1c966a3ba80d281314 extends Twig_Template
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
        $__internal_26c2e51e377d126ce025265fa41673e47a0012186eb7906decf176b04c80fdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c2e51e377d126ce025265fa41673e47a0012186eb7906decf176b04c80fdb0->enter($__internal_26c2e51e377d126ce025265fa41673e47a0012186eb7906decf176b04c80fdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6878ee6afcbd14d390f2dcbef52619ca5fcb745d145655b5f74e7f9126c0a8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6878ee6afcbd14d390f2dcbef52619ca5fcb745d145655b5f74e7f9126c0a8c3->enter($__internal_6878ee6afcbd14d390f2dcbef52619ca5fcb745d145655b5f74e7f9126c0a8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_26c2e51e377d126ce025265fa41673e47a0012186eb7906decf176b04c80fdb0->leave($__internal_26c2e51e377d126ce025265fa41673e47a0012186eb7906decf176b04c80fdb0_prof);

        
        $__internal_6878ee6afcbd14d390f2dcbef52619ca5fcb745d145655b5f74e7f9126c0a8c3->leave($__internal_6878ee6afcbd14d390f2dcbef52619ca5fcb745d145655b5f74e7f9126c0a8c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
