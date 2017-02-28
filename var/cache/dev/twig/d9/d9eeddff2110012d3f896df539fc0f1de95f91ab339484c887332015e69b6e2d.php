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
        $__internal_721af310bcc316f11e4f11ce44b70a5b9df17cfb41e6d27901148e90b4b5a647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721af310bcc316f11e4f11ce44b70a5b9df17cfb41e6d27901148e90b4b5a647->enter($__internal_721af310bcc316f11e4f11ce44b70a5b9df17cfb41e6d27901148e90b4b5a647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5132610ee3b52bc19c0bca6bdfbb7e2a15714699d76871da921f0f05207bd99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5132610ee3b52bc19c0bca6bdfbb7e2a15714699d76871da921f0f05207bd99d->enter($__internal_5132610ee3b52bc19c0bca6bdfbb7e2a15714699d76871da921f0f05207bd99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_721af310bcc316f11e4f11ce44b70a5b9df17cfb41e6d27901148e90b4b5a647->leave($__internal_721af310bcc316f11e4f11ce44b70a5b9df17cfb41e6d27901148e90b4b5a647_prof);

        
        $__internal_5132610ee3b52bc19c0bca6bdfbb7e2a15714699d76871da921f0f05207bd99d->leave($__internal_5132610ee3b52bc19c0bca6bdfbb7e2a15714699d76871da921f0f05207bd99d_prof);

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
