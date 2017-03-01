<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b4acb9cb541094e958246a4a248df9cee748a724cdbf1f8d584c5dd654ef781f extends Twig_Template
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
        $__internal_8961ed1cce39a9f925526a3a5b9af236ca7ab8b85330b6b43d8bf57765d32583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8961ed1cce39a9f925526a3a5b9af236ca7ab8b85330b6b43d8bf57765d32583->enter($__internal_8961ed1cce39a9f925526a3a5b9af236ca7ab8b85330b6b43d8bf57765d32583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_95d7044d97286597180807a9e7ae23563cc5ba6a0808af76edeb99a4c66f214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d7044d97286597180807a9e7ae23563cc5ba6a0808af76edeb99a4c66f214b->enter($__internal_95d7044d97286597180807a9e7ae23563cc5ba6a0808af76edeb99a4c66f214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8961ed1cce39a9f925526a3a5b9af236ca7ab8b85330b6b43d8bf57765d32583->leave($__internal_8961ed1cce39a9f925526a3a5b9af236ca7ab8b85330b6b43d8bf57765d32583_prof);

        
        $__internal_95d7044d97286597180807a9e7ae23563cc5ba6a0808af76edeb99a4c66f214b->leave($__internal_95d7044d97286597180807a9e7ae23563cc5ba6a0808af76edeb99a4c66f214b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
