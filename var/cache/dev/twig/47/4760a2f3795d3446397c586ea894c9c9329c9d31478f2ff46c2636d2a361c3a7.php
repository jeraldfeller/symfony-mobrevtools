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
        $__internal_44dec928c00acd8a8f6a7eed811076d838b182748282981a724a8aa71c0d1b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dec928c00acd8a8f6a7eed811076d838b182748282981a724a8aa71c0d1b67->enter($__internal_44dec928c00acd8a8f6a7eed811076d838b182748282981a724a8aa71c0d1b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_658b8be278f795c53ef4300094eab5dfa9e65c5fcd7f1305e6b9022753ad1c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658b8be278f795c53ef4300094eab5dfa9e65c5fcd7f1305e6b9022753ad1c29->enter($__internal_658b8be278f795c53ef4300094eab5dfa9e65c5fcd7f1305e6b9022753ad1c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_44dec928c00acd8a8f6a7eed811076d838b182748282981a724a8aa71c0d1b67->leave($__internal_44dec928c00acd8a8f6a7eed811076d838b182748282981a724a8aa71c0d1b67_prof);

        
        $__internal_658b8be278f795c53ef4300094eab5dfa9e65c5fcd7f1305e6b9022753ad1c29->leave($__internal_658b8be278f795c53ef4300094eab5dfa9e65c5fcd7f1305e6b9022753ad1c29_prof);

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
