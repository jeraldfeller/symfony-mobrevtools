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
        $__internal_af151a5ae7f8a09276f839e4a27fdda9df610acc55ae99735d86b53a3427a33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af151a5ae7f8a09276f839e4a27fdda9df610acc55ae99735d86b53a3427a33b->enter($__internal_af151a5ae7f8a09276f839e4a27fdda9df610acc55ae99735d86b53a3427a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e4c2e40a2db10dc3004835d200e8bf7b9acb1e1478764b0541145a5b5c20440e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c2e40a2db10dc3004835d200e8bf7b9acb1e1478764b0541145a5b5c20440e->enter($__internal_e4c2e40a2db10dc3004835d200e8bf7b9acb1e1478764b0541145a5b5c20440e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_af151a5ae7f8a09276f839e4a27fdda9df610acc55ae99735d86b53a3427a33b->leave($__internal_af151a5ae7f8a09276f839e4a27fdda9df610acc55ae99735d86b53a3427a33b_prof);

        
        $__internal_e4c2e40a2db10dc3004835d200e8bf7b9acb1e1478764b0541145a5b5c20440e->leave($__internal_e4c2e40a2db10dc3004835d200e8bf7b9acb1e1478764b0541145a5b5c20440e_prof);

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
