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
        $__internal_c7a814e03eef023f7a5de8a64dbe6766e16c2f14b7c4f538725dda9b9fc8c68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a814e03eef023f7a5de8a64dbe6766e16c2f14b7c4f538725dda9b9fc8c68c->enter($__internal_c7a814e03eef023f7a5de8a64dbe6766e16c2f14b7c4f538725dda9b9fc8c68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ec94700511132ba5218fa2822cae6145261d2930dd1504e3825a0eb84ea9f104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94700511132ba5218fa2822cae6145261d2930dd1504e3825a0eb84ea9f104->enter($__internal_ec94700511132ba5218fa2822cae6145261d2930dd1504e3825a0eb84ea9f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7a814e03eef023f7a5de8a64dbe6766e16c2f14b7c4f538725dda9b9fc8c68c->leave($__internal_c7a814e03eef023f7a5de8a64dbe6766e16c2f14b7c4f538725dda9b9fc8c68c_prof);

        
        $__internal_ec94700511132ba5218fa2822cae6145261d2930dd1504e3825a0eb84ea9f104->leave($__internal_ec94700511132ba5218fa2822cae6145261d2930dd1504e3825a0eb84ea9f104_prof);

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
