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
        $__internal_f46bd08a4998d2a9e97b8e21cfc2370068ce20d2077f7006bf92a466917cffff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46bd08a4998d2a9e97b8e21cfc2370068ce20d2077f7006bf92a466917cffff->enter($__internal_f46bd08a4998d2a9e97b8e21cfc2370068ce20d2077f7006bf92a466917cffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0e8fc1579e020cb7b20f6ca6528c455cc105c802f42581be99de16b2f8f753c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8fc1579e020cb7b20f6ca6528c455cc105c802f42581be99de16b2f8f753c0->enter($__internal_0e8fc1579e020cb7b20f6ca6528c455cc105c802f42581be99de16b2f8f753c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f46bd08a4998d2a9e97b8e21cfc2370068ce20d2077f7006bf92a466917cffff->leave($__internal_f46bd08a4998d2a9e97b8e21cfc2370068ce20d2077f7006bf92a466917cffff_prof);

        
        $__internal_0e8fc1579e020cb7b20f6ca6528c455cc105c802f42581be99de16b2f8f753c0->leave($__internal_0e8fc1579e020cb7b20f6ca6528c455cc105c802f42581be99de16b2f8f753c0_prof);

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
