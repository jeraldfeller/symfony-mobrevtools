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
        $__internal_aca795086f4cb4e08ec819ff5fa322e31a69f37e92a36d5dead6c8937d044433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca795086f4cb4e08ec819ff5fa322e31a69f37e92a36d5dead6c8937d044433->enter($__internal_aca795086f4cb4e08ec819ff5fa322e31a69f37e92a36d5dead6c8937d044433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_45d6a919efe762e3a603bf5c785670c887dd39eebe8aaf88dc6e9f589cc1e958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d6a919efe762e3a603bf5c785670c887dd39eebe8aaf88dc6e9f589cc1e958->enter($__internal_45d6a919efe762e3a603bf5c785670c887dd39eebe8aaf88dc6e9f589cc1e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aca795086f4cb4e08ec819ff5fa322e31a69f37e92a36d5dead6c8937d044433->leave($__internal_aca795086f4cb4e08ec819ff5fa322e31a69f37e92a36d5dead6c8937d044433_prof);

        
        $__internal_45d6a919efe762e3a603bf5c785670c887dd39eebe8aaf88dc6e9f589cc1e958->leave($__internal_45d6a919efe762e3a603bf5c785670c887dd39eebe8aaf88dc6e9f589cc1e958_prof);

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
