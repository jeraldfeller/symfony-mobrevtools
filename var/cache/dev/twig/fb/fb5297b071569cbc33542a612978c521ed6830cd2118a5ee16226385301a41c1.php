<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bd1c7b2500f34d04f02f729190dc97c56081869ac1fa7ae0c96545d50fac483a extends Twig_Template
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
        $__internal_7fcf0403aeeb0ea833a98f1d1ad9259d0de30e7415fcda93a8187893d6fb7978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcf0403aeeb0ea833a98f1d1ad9259d0de30e7415fcda93a8187893d6fb7978->enter($__internal_7fcf0403aeeb0ea833a98f1d1ad9259d0de30e7415fcda93a8187893d6fb7978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_38670ba5fb3c5d5b2e8e9f7c292dd06ca72bf882068abbc370ef1d0a13c6686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38670ba5fb3c5d5b2e8e9f7c292dd06ca72bf882068abbc370ef1d0a13c6686d->enter($__internal_38670ba5fb3c5d5b2e8e9f7c292dd06ca72bf882068abbc370ef1d0a13c6686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7fcf0403aeeb0ea833a98f1d1ad9259d0de30e7415fcda93a8187893d6fb7978->leave($__internal_7fcf0403aeeb0ea833a98f1d1ad9259d0de30e7415fcda93a8187893d6fb7978_prof);

        
        $__internal_38670ba5fb3c5d5b2e8e9f7c292dd06ca72bf882068abbc370ef1d0a13c6686d->leave($__internal_38670ba5fb3c5d5b2e8e9f7c292dd06ca72bf882068abbc370ef1d0a13c6686d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
