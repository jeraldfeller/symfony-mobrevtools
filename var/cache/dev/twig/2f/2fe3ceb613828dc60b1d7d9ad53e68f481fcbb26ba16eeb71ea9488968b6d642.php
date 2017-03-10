<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2311ac9497b4a74158ce5f6d84d0821c49a0032f82ac748f7254afc2ca9a4d20 extends Twig_Template
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
        $__internal_03a7ae457638d385d71460d7432f6b2753f2b91a938d35e7bbe3e83b399db527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a7ae457638d385d71460d7432f6b2753f2b91a938d35e7bbe3e83b399db527->enter($__internal_03a7ae457638d385d71460d7432f6b2753f2b91a938d35e7bbe3e83b399db527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a712f83d20a367a6b5b5a6db113e67d2e6aa60b1099de9590b832df1be14baca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a712f83d20a367a6b5b5a6db113e67d2e6aa60b1099de9590b832df1be14baca->enter($__internal_a712f83d20a367a6b5b5a6db113e67d2e6aa60b1099de9590b832df1be14baca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_03a7ae457638d385d71460d7432f6b2753f2b91a938d35e7bbe3e83b399db527->leave($__internal_03a7ae457638d385d71460d7432f6b2753f2b91a938d35e7bbe3e83b399db527_prof);

        
        $__internal_a712f83d20a367a6b5b5a6db113e67d2e6aa60b1099de9590b832df1be14baca->leave($__internal_a712f83d20a367a6b5b5a6db113e67d2e6aa60b1099de9590b832df1be14baca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
