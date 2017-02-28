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
        $__internal_82004c07fb598a8446f55050c40f7fb1d4e765c107654c7ad3cb118124fb4acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82004c07fb598a8446f55050c40f7fb1d4e765c107654c7ad3cb118124fb4acb->enter($__internal_82004c07fb598a8446f55050c40f7fb1d4e765c107654c7ad3cb118124fb4acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_90950d0c465ff4d5d4b4cc738b5a24dc5ab58c786d48db8b5bd1a65855a3df3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90950d0c465ff4d5d4b4cc738b5a24dc5ab58c786d48db8b5bd1a65855a3df3b->enter($__internal_90950d0c465ff4d5d4b4cc738b5a24dc5ab58c786d48db8b5bd1a65855a3df3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82004c07fb598a8446f55050c40f7fb1d4e765c107654c7ad3cb118124fb4acb->leave($__internal_82004c07fb598a8446f55050c40f7fb1d4e765c107654c7ad3cb118124fb4acb_prof);

        
        $__internal_90950d0c465ff4d5d4b4cc738b5a24dc5ab58c786d48db8b5bd1a65855a3df3b->leave($__internal_90950d0c465ff4d5d4b4cc738b5a24dc5ab58c786d48db8b5bd1a65855a3df3b_prof);

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
