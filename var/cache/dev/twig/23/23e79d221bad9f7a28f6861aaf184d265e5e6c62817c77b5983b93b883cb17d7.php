<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8bf7f61542f32de2f5f76e08119e4c0761be7fce7a49661d165bbb6a0527df8e extends Twig_Template
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
        $__internal_5a0b3712d2550b09d65945b38ba95cf33cbacffd30fb1f5c5672c893aa8437bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0b3712d2550b09d65945b38ba95cf33cbacffd30fb1f5c5672c893aa8437bf->enter($__internal_5a0b3712d2550b09d65945b38ba95cf33cbacffd30fb1f5c5672c893aa8437bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c80cd26b4786e0c4ba875f616bcfdb814b8efce367ecd9198a39d1449febaa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80cd26b4786e0c4ba875f616bcfdb814b8efce367ecd9198a39d1449febaa3a->enter($__internal_c80cd26b4786e0c4ba875f616bcfdb814b8efce367ecd9198a39d1449febaa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5a0b3712d2550b09d65945b38ba95cf33cbacffd30fb1f5c5672c893aa8437bf->leave($__internal_5a0b3712d2550b09d65945b38ba95cf33cbacffd30fb1f5c5672c893aa8437bf_prof);

        
        $__internal_c80cd26b4786e0c4ba875f616bcfdb814b8efce367ecd9198a39d1449febaa3a->leave($__internal_c80cd26b4786e0c4ba875f616bcfdb814b8efce367ecd9198a39d1449febaa3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
