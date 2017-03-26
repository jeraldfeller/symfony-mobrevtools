<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_65bfc4a9a0bc488f281744b29523ec51b48d53ece84b5c098cd12d84506f5f7c extends Twig_Template
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
        $__internal_aea74fbe0f656abb5f45e1dc7afdb259225aa760d2578b98c2c879501bc80046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aea74fbe0f656abb5f45e1dc7afdb259225aa760d2578b98c2c879501bc80046->enter($__internal_aea74fbe0f656abb5f45e1dc7afdb259225aa760d2578b98c2c879501bc80046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cd7ebf1d259da523dc0ad8cb03e7aa0bc9f023d21d15cd6ee499acd72c8572a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7ebf1d259da523dc0ad8cb03e7aa0bc9f023d21d15cd6ee499acd72c8572a6->enter($__internal_cd7ebf1d259da523dc0ad8cb03e7aa0bc9f023d21d15cd6ee499acd72c8572a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aea74fbe0f656abb5f45e1dc7afdb259225aa760d2578b98c2c879501bc80046->leave($__internal_aea74fbe0f656abb5f45e1dc7afdb259225aa760d2578b98c2c879501bc80046_prof);

        
        $__internal_cd7ebf1d259da523dc0ad8cb03e7aa0bc9f023d21d15cd6ee499acd72c8572a6->leave($__internal_cd7ebf1d259da523dc0ad8cb03e7aa0bc9f023d21d15cd6ee499acd72c8572a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
