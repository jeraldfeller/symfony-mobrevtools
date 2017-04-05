<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b1cf9f61aab2f330a83e0f75ea5068d554685629589c7dcb818b3f84b4d2d8d3 extends Twig_Template
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
        $__internal_75d0ae92912c30f0562c490bceed803db112602a2545b79a553d8d48251619cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d0ae92912c30f0562c490bceed803db112602a2545b79a553d8d48251619cb->enter($__internal_75d0ae92912c30f0562c490bceed803db112602a2545b79a553d8d48251619cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e16aaca63540a73cd32a020dd30d9e2794529d0313f4ef88d67ff6aebac1d134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16aaca63540a73cd32a020dd30d9e2794529d0313f4ef88d67ff6aebac1d134->enter($__internal_e16aaca63540a73cd32a020dd30d9e2794529d0313f4ef88d67ff6aebac1d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_75d0ae92912c30f0562c490bceed803db112602a2545b79a553d8d48251619cb->leave($__internal_75d0ae92912c30f0562c490bceed803db112602a2545b79a553d8d48251619cb_prof);

        
        $__internal_e16aaca63540a73cd32a020dd30d9e2794529d0313f4ef88d67ff6aebac1d134->leave($__internal_e16aaca63540a73cd32a020dd30d9e2794529d0313f4ef88d67ff6aebac1d134_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
