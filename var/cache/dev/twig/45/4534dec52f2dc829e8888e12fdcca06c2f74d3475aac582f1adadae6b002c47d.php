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
        $__internal_22b0680b7d4134d541307db2c71eb3751bace8f1c7f7272f77997baa12c1365d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b0680b7d4134d541307db2c71eb3751bace8f1c7f7272f77997baa12c1365d->enter($__internal_22b0680b7d4134d541307db2c71eb3751bace8f1c7f7272f77997baa12c1365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7c338120bbac0c0f533487510e6b9e7fc08b7af57615832646ce63af16946a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c338120bbac0c0f533487510e6b9e7fc08b7af57615832646ce63af16946a90->enter($__internal_7c338120bbac0c0f533487510e6b9e7fc08b7af57615832646ce63af16946a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_22b0680b7d4134d541307db2c71eb3751bace8f1c7f7272f77997baa12c1365d->leave($__internal_22b0680b7d4134d541307db2c71eb3751bace8f1c7f7272f77997baa12c1365d_prof);

        
        $__internal_7c338120bbac0c0f533487510e6b9e7fc08b7af57615832646ce63af16946a90->leave($__internal_7c338120bbac0c0f533487510e6b9e7fc08b7af57615832646ce63af16946a90_prof);

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
