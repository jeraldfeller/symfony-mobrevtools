<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_5645cce8ba0d00066dccd2ddf99f5a1eb3a59395b4ab961c9b55b0a225d60eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5645cce8ba0d00066dccd2ddf99f5a1eb3a59395b4ab961c9b55b0a225d60eb9->enter($__internal_5645cce8ba0d00066dccd2ddf99f5a1eb3a59395b4ab961c9b55b0a225d60eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_66412bc4d62d7b8a57f4b0895df42ed034f2b2a3fe8e87114ce1970ffa939590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66412bc4d62d7b8a57f4b0895df42ed034f2b2a3fe8e87114ce1970ffa939590->enter($__internal_66412bc4d62d7b8a57f4b0895df42ed034f2b2a3fe8e87114ce1970ffa939590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5645cce8ba0d00066dccd2ddf99f5a1eb3a59395b4ab961c9b55b0a225d60eb9->leave($__internal_5645cce8ba0d00066dccd2ddf99f5a1eb3a59395b4ab961c9b55b0a225d60eb9_prof);

        
        $__internal_66412bc4d62d7b8a57f4b0895df42ed034f2b2a3fe8e87114ce1970ffa939590->leave($__internal_66412bc4d62d7b8a57f4b0895df42ed034f2b2a3fe8e87114ce1970ffa939590_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
