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
        $__internal_961daba8991ec645e05d7e29ebbcb80be4c0b5cb4561860f160f3c7618b5897c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961daba8991ec645e05d7e29ebbcb80be4c0b5cb4561860f160f3c7618b5897c->enter($__internal_961daba8991ec645e05d7e29ebbcb80be4c0b5cb4561860f160f3c7618b5897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b223f66d810db71c044e179cfc8f74122e2ab561445d1c14570c2e879d1802be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b223f66d810db71c044e179cfc8f74122e2ab561445d1c14570c2e879d1802be->enter($__internal_b223f66d810db71c044e179cfc8f74122e2ab561445d1c14570c2e879d1802be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_961daba8991ec645e05d7e29ebbcb80be4c0b5cb4561860f160f3c7618b5897c->leave($__internal_961daba8991ec645e05d7e29ebbcb80be4c0b5cb4561860f160f3c7618b5897c_prof);

        
        $__internal_b223f66d810db71c044e179cfc8f74122e2ab561445d1c14570c2e879d1802be->leave($__internal_b223f66d810db71c044e179cfc8f74122e2ab561445d1c14570c2e879d1802be_prof);

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
