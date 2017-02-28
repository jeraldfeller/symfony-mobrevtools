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
        $__internal_12b38d4380d010b89719ae762b40c3574b24d199d0616117ae708cf37a6500d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b38d4380d010b89719ae762b40c3574b24d199d0616117ae708cf37a6500d2->enter($__internal_12b38d4380d010b89719ae762b40c3574b24d199d0616117ae708cf37a6500d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_51845df7f6bf735e1d5781e6cda595a35a90ca3811d6c8f259561651966750ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51845df7f6bf735e1d5781e6cda595a35a90ca3811d6c8f259561651966750ce->enter($__internal_51845df7f6bf735e1d5781e6cda595a35a90ca3811d6c8f259561651966750ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_12b38d4380d010b89719ae762b40c3574b24d199d0616117ae708cf37a6500d2->leave($__internal_12b38d4380d010b89719ae762b40c3574b24d199d0616117ae708cf37a6500d2_prof);

        
        $__internal_51845df7f6bf735e1d5781e6cda595a35a90ca3811d6c8f259561651966750ce->leave($__internal_51845df7f6bf735e1d5781e6cda595a35a90ca3811d6c8f259561651966750ce_prof);

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
