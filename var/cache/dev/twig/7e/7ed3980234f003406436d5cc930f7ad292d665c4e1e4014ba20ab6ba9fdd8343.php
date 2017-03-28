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
        $__internal_b5cd2c454bc4d6c826bfc0f09cd0c830b7dd9ea08ce1d27672307bcb2d07490d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cd2c454bc4d6c826bfc0f09cd0c830b7dd9ea08ce1d27672307bcb2d07490d->enter($__internal_b5cd2c454bc4d6c826bfc0f09cd0c830b7dd9ea08ce1d27672307bcb2d07490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_05e3635b6e84546c354a06675a6feaf23c4b58d7027daa1bd2c1b7666199ae00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e3635b6e84546c354a06675a6feaf23c4b58d7027daa1bd2c1b7666199ae00->enter($__internal_05e3635b6e84546c354a06675a6feaf23c4b58d7027daa1bd2c1b7666199ae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b5cd2c454bc4d6c826bfc0f09cd0c830b7dd9ea08ce1d27672307bcb2d07490d->leave($__internal_b5cd2c454bc4d6c826bfc0f09cd0c830b7dd9ea08ce1d27672307bcb2d07490d_prof);

        
        $__internal_05e3635b6e84546c354a06675a6feaf23c4b58d7027daa1bd2c1b7666199ae00->leave($__internal_05e3635b6e84546c354a06675a6feaf23c4b58d7027daa1bd2c1b7666199ae00_prof);

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
