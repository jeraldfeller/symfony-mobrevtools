<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_cd0c0d78286f5361bc0bac82df7ead44e66256666bc204ee0ccf335bc3256af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0c0d78286f5361bc0bac82df7ead44e66256666bc204ee0ccf335bc3256af3->enter($__internal_cd0c0d78286f5361bc0bac82df7ead44e66256666bc204ee0ccf335bc3256af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5540e4683d30456f20afd98855f73a0698ac8177c4634deabd1d38803db9b5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5540e4683d30456f20afd98855f73a0698ac8177c4634deabd1d38803db9b5e4->enter($__internal_5540e4683d30456f20afd98855f73a0698ac8177c4634deabd1d38803db9b5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cd0c0d78286f5361bc0bac82df7ead44e66256666bc204ee0ccf335bc3256af3->leave($__internal_cd0c0d78286f5361bc0bac82df7ead44e66256666bc204ee0ccf335bc3256af3_prof);

        
        $__internal_5540e4683d30456f20afd98855f73a0698ac8177c4634deabd1d38803db9b5e4->leave($__internal_5540e4683d30456f20afd98855f73a0698ac8177c4634deabd1d38803db9b5e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
