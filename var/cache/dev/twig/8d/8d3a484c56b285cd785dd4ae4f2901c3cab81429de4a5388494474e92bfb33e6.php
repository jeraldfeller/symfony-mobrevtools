<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_48ae2895c61845b2d88a64f807d00c5820ba5c1eed99bdb20ab46733445f8c35 extends Twig_Template
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
        $__internal_83683a3c24e72dc04ec6acf459468b48d646d2504cb294b54199c39dae4692e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83683a3c24e72dc04ec6acf459468b48d646d2504cb294b54199c39dae4692e0->enter($__internal_83683a3c24e72dc04ec6acf459468b48d646d2504cb294b54199c39dae4692e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_912605a35cbf693fb5fa42e0a72368dc7f300daf81b7884101cab8d50f00cd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912605a35cbf693fb5fa42e0a72368dc7f300daf81b7884101cab8d50f00cd32->enter($__internal_912605a35cbf693fb5fa42e0a72368dc7f300daf81b7884101cab8d50f00cd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_83683a3c24e72dc04ec6acf459468b48d646d2504cb294b54199c39dae4692e0->leave($__internal_83683a3c24e72dc04ec6acf459468b48d646d2504cb294b54199c39dae4692e0_prof);

        
        $__internal_912605a35cbf693fb5fa42e0a72368dc7f300daf81b7884101cab8d50f00cd32->leave($__internal_912605a35cbf693fb5fa42e0a72368dc7f300daf81b7884101cab8d50f00cd32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
