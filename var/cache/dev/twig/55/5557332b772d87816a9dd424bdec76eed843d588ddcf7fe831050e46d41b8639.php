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
        $__internal_72da833088e0d04518318ed2867fd11f2451bcdce54fdb9d5890cde340b50081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72da833088e0d04518318ed2867fd11f2451bcdce54fdb9d5890cde340b50081->enter($__internal_72da833088e0d04518318ed2867fd11f2451bcdce54fdb9d5890cde340b50081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_732b18bb2d03a241675ea757ebce509e17fffa203d8e954a60319564e9306d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732b18bb2d03a241675ea757ebce509e17fffa203d8e954a60319564e9306d38->enter($__internal_732b18bb2d03a241675ea757ebce509e17fffa203d8e954a60319564e9306d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_72da833088e0d04518318ed2867fd11f2451bcdce54fdb9d5890cde340b50081->leave($__internal_72da833088e0d04518318ed2867fd11f2451bcdce54fdb9d5890cde340b50081_prof);

        
        $__internal_732b18bb2d03a241675ea757ebce509e17fffa203d8e954a60319564e9306d38->leave($__internal_732b18bb2d03a241675ea757ebce509e17fffa203d8e954a60319564e9306d38_prof);

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
