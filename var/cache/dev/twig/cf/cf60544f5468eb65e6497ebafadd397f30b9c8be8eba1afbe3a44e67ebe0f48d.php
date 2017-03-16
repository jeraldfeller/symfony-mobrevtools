<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ce64365531bbbef9a4c60cfe1ebc12a3542615c3393dccf98a0a75f7d13adeda extends Twig_Template
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
        $__internal_fb9247784d4b42dcb93e18f82cd0b3bd98246f66a3dc0d9065bfb5ed019f1ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9247784d4b42dcb93e18f82cd0b3bd98246f66a3dc0d9065bfb5ed019f1ea4->enter($__internal_fb9247784d4b42dcb93e18f82cd0b3bd98246f66a3dc0d9065bfb5ed019f1ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4377c130f770dbd94a49a45bce5a993f1a222cef6811f47c8528a7c269f14f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4377c130f770dbd94a49a45bce5a993f1a222cef6811f47c8528a7c269f14f4a->enter($__internal_4377c130f770dbd94a49a45bce5a993f1a222cef6811f47c8528a7c269f14f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fb9247784d4b42dcb93e18f82cd0b3bd98246f66a3dc0d9065bfb5ed019f1ea4->leave($__internal_fb9247784d4b42dcb93e18f82cd0b3bd98246f66a3dc0d9065bfb5ed019f1ea4_prof);

        
        $__internal_4377c130f770dbd94a49a45bce5a993f1a222cef6811f47c8528a7c269f14f4a->leave($__internal_4377c130f770dbd94a49a45bce5a993f1a222cef6811f47c8528a7c269f14f4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
