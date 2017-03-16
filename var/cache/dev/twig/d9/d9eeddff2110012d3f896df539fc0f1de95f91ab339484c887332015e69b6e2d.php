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
        $__internal_2baed2a1521946e5584b30f9cc0659437a75b4b676305d72b3449b9e0913850c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baed2a1521946e5584b30f9cc0659437a75b4b676305d72b3449b9e0913850c->enter($__internal_2baed2a1521946e5584b30f9cc0659437a75b4b676305d72b3449b9e0913850c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e49ef3b1605e04bebf1b9a2c083b1d343538e82494ada059fd3eafb9ce80da13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49ef3b1605e04bebf1b9a2c083b1d343538e82494ada059fd3eafb9ce80da13->enter($__internal_e49ef3b1605e04bebf1b9a2c083b1d343538e82494ada059fd3eafb9ce80da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2baed2a1521946e5584b30f9cc0659437a75b4b676305d72b3449b9e0913850c->leave($__internal_2baed2a1521946e5584b30f9cc0659437a75b4b676305d72b3449b9e0913850c_prof);

        
        $__internal_e49ef3b1605e04bebf1b9a2c083b1d343538e82494ada059fd3eafb9ce80da13->leave($__internal_e49ef3b1605e04bebf1b9a2c083b1d343538e82494ada059fd3eafb9ce80da13_prof);

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
