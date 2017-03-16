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
        $__internal_a0b4230480790a5795918d7bf661124a2b2ff3e644ef8dfc2fa3e61dce7055c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b4230480790a5795918d7bf661124a2b2ff3e644ef8dfc2fa3e61dce7055c4->enter($__internal_a0b4230480790a5795918d7bf661124a2b2ff3e644ef8dfc2fa3e61dce7055c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_26e7365401d0978f55c55f3d5f37908cd3a34d1e00ed7864d5f1cd0c75f79cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7365401d0978f55c55f3d5f37908cd3a34d1e00ed7864d5f1cd0c75f79cfe->enter($__internal_26e7365401d0978f55c55f3d5f37908cd3a34d1e00ed7864d5f1cd0c75f79cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a0b4230480790a5795918d7bf661124a2b2ff3e644ef8dfc2fa3e61dce7055c4->leave($__internal_a0b4230480790a5795918d7bf661124a2b2ff3e644ef8dfc2fa3e61dce7055c4_prof);

        
        $__internal_26e7365401d0978f55c55f3d5f37908cd3a34d1e00ed7864d5f1cd0c75f79cfe->leave($__internal_26e7365401d0978f55c55f3d5f37908cd3a34d1e00ed7864d5f1cd0c75f79cfe_prof);

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
