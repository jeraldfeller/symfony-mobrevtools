<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4029cfb233d8391647a9444122003b2c081f25e83492db321998c012ca04b660 extends Twig_Template
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
        $__internal_32fce7e33d5683f18f364caabc13c39fed8b6f0caee4d0c680acec6c15e0bddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fce7e33d5683f18f364caabc13c39fed8b6f0caee4d0c680acec6c15e0bddc->enter($__internal_32fce7e33d5683f18f364caabc13c39fed8b6f0caee4d0c680acec6c15e0bddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_42303ec76e5ade1701afeb708cce403f6612fdfc09f0026a97c2edb8785fc5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42303ec76e5ade1701afeb708cce403f6612fdfc09f0026a97c2edb8785fc5ce->enter($__internal_42303ec76e5ade1701afeb708cce403f6612fdfc09f0026a97c2edb8785fc5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_32fce7e33d5683f18f364caabc13c39fed8b6f0caee4d0c680acec6c15e0bddc->leave($__internal_32fce7e33d5683f18f364caabc13c39fed8b6f0caee4d0c680acec6c15e0bddc_prof);

        
        $__internal_42303ec76e5ade1701afeb708cce403f6612fdfc09f0026a97c2edb8785fc5ce->leave($__internal_42303ec76e5ade1701afeb708cce403f6612fdfc09f0026a97c2edb8785fc5ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
