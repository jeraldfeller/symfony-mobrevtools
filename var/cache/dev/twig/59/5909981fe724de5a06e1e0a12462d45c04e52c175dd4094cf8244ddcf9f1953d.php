<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54f2ecb8b26fb31af53bf8bda321b62ca4fcf16a325915aa4386a91f691d9da4 extends Twig_Template
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
        $__internal_e9fc614416ec3c3a5b80056a77897adf8aed478a2f9e83c4003e021e64aaa02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fc614416ec3c3a5b80056a77897adf8aed478a2f9e83c4003e021e64aaa02e->enter($__internal_e9fc614416ec3c3a5b80056a77897adf8aed478a2f9e83c4003e021e64aaa02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7eca4dd715bd55cf38ebfff22ce260028fdb0e1705db28ac63cc1abbc3c33a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eca4dd715bd55cf38ebfff22ce260028fdb0e1705db28ac63cc1abbc3c33a7d->enter($__internal_7eca4dd715bd55cf38ebfff22ce260028fdb0e1705db28ac63cc1abbc3c33a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e9fc614416ec3c3a5b80056a77897adf8aed478a2f9e83c4003e021e64aaa02e->leave($__internal_e9fc614416ec3c3a5b80056a77897adf8aed478a2f9e83c4003e021e64aaa02e_prof);

        
        $__internal_7eca4dd715bd55cf38ebfff22ce260028fdb0e1705db28ac63cc1abbc3c33a7d->leave($__internal_7eca4dd715bd55cf38ebfff22ce260028fdb0e1705db28ac63cc1abbc3c33a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
