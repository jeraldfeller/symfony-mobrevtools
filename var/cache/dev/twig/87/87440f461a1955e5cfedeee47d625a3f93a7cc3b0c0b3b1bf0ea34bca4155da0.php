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
        $__internal_46dbdce214710bfba68daa85e04d4e362654f0aa3f6cfab6db094878d3e15bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dbdce214710bfba68daa85e04d4e362654f0aa3f6cfab6db094878d3e15bba->enter($__internal_46dbdce214710bfba68daa85e04d4e362654f0aa3f6cfab6db094878d3e15bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_27636b6e9119888809c343621e48defec16c3e37d206440be23906325871743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27636b6e9119888809c343621e48defec16c3e37d206440be23906325871743f->enter($__internal_27636b6e9119888809c343621e48defec16c3e37d206440be23906325871743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_46dbdce214710bfba68daa85e04d4e362654f0aa3f6cfab6db094878d3e15bba->leave($__internal_46dbdce214710bfba68daa85e04d4e362654f0aa3f6cfab6db094878d3e15bba_prof);

        
        $__internal_27636b6e9119888809c343621e48defec16c3e37d206440be23906325871743f->leave($__internal_27636b6e9119888809c343621e48defec16c3e37d206440be23906325871743f_prof);

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
