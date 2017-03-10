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
        $__internal_9b1a054bfa8a538cda550ce755ceeac539fbd9bf2f57129d782130b0e0610335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1a054bfa8a538cda550ce755ceeac539fbd9bf2f57129d782130b0e0610335->enter($__internal_9b1a054bfa8a538cda550ce755ceeac539fbd9bf2f57129d782130b0e0610335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_95f271283fd1e2ecba9b01172285c22ce4c4bf4ad9ece22709db9dbe1b5123cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f271283fd1e2ecba9b01172285c22ce4c4bf4ad9ece22709db9dbe1b5123cb->enter($__internal_95f271283fd1e2ecba9b01172285c22ce4c4bf4ad9ece22709db9dbe1b5123cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9b1a054bfa8a538cda550ce755ceeac539fbd9bf2f57129d782130b0e0610335->leave($__internal_9b1a054bfa8a538cda550ce755ceeac539fbd9bf2f57129d782130b0e0610335_prof);

        
        $__internal_95f271283fd1e2ecba9b01172285c22ce4c4bf4ad9ece22709db9dbe1b5123cb->leave($__internal_95f271283fd1e2ecba9b01172285c22ce4c4bf4ad9ece22709db9dbe1b5123cb_prof);

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
