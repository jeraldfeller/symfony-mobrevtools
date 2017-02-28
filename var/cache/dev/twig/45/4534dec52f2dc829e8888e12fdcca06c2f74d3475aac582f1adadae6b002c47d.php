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
        $__internal_c76572c7d7723bb0137e6442c0f63cefedac943cae45168b0feede1efab5fdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76572c7d7723bb0137e6442c0f63cefedac943cae45168b0feede1efab5fdba->enter($__internal_c76572c7d7723bb0137e6442c0f63cefedac943cae45168b0feede1efab5fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1ad0a9bb739487a3d9efb743237e9425400f2712af6ebbc2aaec048642c51786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad0a9bb739487a3d9efb743237e9425400f2712af6ebbc2aaec048642c51786->enter($__internal_1ad0a9bb739487a3d9efb743237e9425400f2712af6ebbc2aaec048642c51786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c76572c7d7723bb0137e6442c0f63cefedac943cae45168b0feede1efab5fdba->leave($__internal_c76572c7d7723bb0137e6442c0f63cefedac943cae45168b0feede1efab5fdba_prof);

        
        $__internal_1ad0a9bb739487a3d9efb743237e9425400f2712af6ebbc2aaec048642c51786->leave($__internal_1ad0a9bb739487a3d9efb743237e9425400f2712af6ebbc2aaec048642c51786_prof);

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
