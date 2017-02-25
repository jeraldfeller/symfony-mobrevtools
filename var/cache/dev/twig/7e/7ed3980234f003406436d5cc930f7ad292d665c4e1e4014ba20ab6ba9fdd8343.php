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
        $__internal_ae57df120b9ba3d031f8e3e0488b0321f9a6a2e6bd75d388ad3b4b435250ade3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae57df120b9ba3d031f8e3e0488b0321f9a6a2e6bd75d388ad3b4b435250ade3->enter($__internal_ae57df120b9ba3d031f8e3e0488b0321f9a6a2e6bd75d388ad3b4b435250ade3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0be82fd2d0f8b9f6505d49d49326393ace3c40268bc31b9e651f3b6bba267d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be82fd2d0f8b9f6505d49d49326393ace3c40268bc31b9e651f3b6bba267d54->enter($__internal_0be82fd2d0f8b9f6505d49d49326393ace3c40268bc31b9e651f3b6bba267d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ae57df120b9ba3d031f8e3e0488b0321f9a6a2e6bd75d388ad3b4b435250ade3->leave($__internal_ae57df120b9ba3d031f8e3e0488b0321f9a6a2e6bd75d388ad3b4b435250ade3_prof);

        
        $__internal_0be82fd2d0f8b9f6505d49d49326393ace3c40268bc31b9e651f3b6bba267d54->leave($__internal_0be82fd2d0f8b9f6505d49d49326393ace3c40268bc31b9e651f3b6bba267d54_prof);

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
