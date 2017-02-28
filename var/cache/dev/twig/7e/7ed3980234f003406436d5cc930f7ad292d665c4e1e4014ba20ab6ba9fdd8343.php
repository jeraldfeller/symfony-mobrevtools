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
        $__internal_eca761f22d8ead55b49efee3011531f6e301a8fe686706fe8dd6b3f72149e8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca761f22d8ead55b49efee3011531f6e301a8fe686706fe8dd6b3f72149e8cb->enter($__internal_eca761f22d8ead55b49efee3011531f6e301a8fe686706fe8dd6b3f72149e8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7827a220c80fb715be54236e949ec488c2fc3577b926281fa698d4949b03f24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7827a220c80fb715be54236e949ec488c2fc3577b926281fa698d4949b03f24b->enter($__internal_7827a220c80fb715be54236e949ec488c2fc3577b926281fa698d4949b03f24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eca761f22d8ead55b49efee3011531f6e301a8fe686706fe8dd6b3f72149e8cb->leave($__internal_eca761f22d8ead55b49efee3011531f6e301a8fe686706fe8dd6b3f72149e8cb_prof);

        
        $__internal_7827a220c80fb715be54236e949ec488c2fc3577b926281fa698d4949b03f24b->leave($__internal_7827a220c80fb715be54236e949ec488c2fc3577b926281fa698d4949b03f24b_prof);

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
