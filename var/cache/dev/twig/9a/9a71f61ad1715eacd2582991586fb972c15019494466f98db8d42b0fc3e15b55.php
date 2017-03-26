<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_212b7e99d915ebbc34e8f773293de755ba7bfefde7fb8c27716f508e48b67378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212b7e99d915ebbc34e8f773293de755ba7bfefde7fb8c27716f508e48b67378->enter($__internal_212b7e99d915ebbc34e8f773293de755ba7bfefde7fb8c27716f508e48b67378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_758c1060bf11f00b5ef7382cb3a8f9c2f5b486f98ccff4681d5aa6912a898598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758c1060bf11f00b5ef7382cb3a8f9c2f5b486f98ccff4681d5aa6912a898598->enter($__internal_758c1060bf11f00b5ef7382cb3a8f9c2f5b486f98ccff4681d5aa6912a898598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_212b7e99d915ebbc34e8f773293de755ba7bfefde7fb8c27716f508e48b67378->leave($__internal_212b7e99d915ebbc34e8f773293de755ba7bfefde7fb8c27716f508e48b67378_prof);

        
        $__internal_758c1060bf11f00b5ef7382cb3a8f9c2f5b486f98ccff4681d5aa6912a898598->leave($__internal_758c1060bf11f00b5ef7382cb3a8f9c2f5b486f98ccff4681d5aa6912a898598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
