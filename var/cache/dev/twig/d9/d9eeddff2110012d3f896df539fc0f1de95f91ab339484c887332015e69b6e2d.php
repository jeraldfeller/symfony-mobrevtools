<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d84ab11d9749d206cfccebc2ebfa6ea9a9d1f6b85375187e04981374d991f96 extends Twig_Template
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
        $__internal_50d08a478f64cfd60de5086c0ea856082369837025572908523a3a8b2a1394cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d08a478f64cfd60de5086c0ea856082369837025572908523a3a8b2a1394cd->enter($__internal_50d08a478f64cfd60de5086c0ea856082369837025572908523a3a8b2a1394cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d7a2564944392671ed574d2d6c0548a078795f0b61cce7af1bdac5c79447f8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a2564944392671ed574d2d6c0548a078795f0b61cce7af1bdac5c79447f8af->enter($__internal_d7a2564944392671ed574d2d6c0548a078795f0b61cce7af1bdac5c79447f8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_50d08a478f64cfd60de5086c0ea856082369837025572908523a3a8b2a1394cd->leave($__internal_50d08a478f64cfd60de5086c0ea856082369837025572908523a3a8b2a1394cd_prof);

        
        $__internal_d7a2564944392671ed574d2d6c0548a078795f0b61cce7af1bdac5c79447f8af->leave($__internal_d7a2564944392671ed574d2d6c0548a078795f0b61cce7af1bdac5c79447f8af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
