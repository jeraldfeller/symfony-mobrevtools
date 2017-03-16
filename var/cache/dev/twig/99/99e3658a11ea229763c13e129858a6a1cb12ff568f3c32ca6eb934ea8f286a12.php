<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_dfc2464ba9839bbf89a41765ba331a8335376b0f7aee41ec866ccf1d5cd96a92 extends Twig_Template
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
        $__internal_c21a02f328141497a451ffeacb44047c18829347b9fb73576e46526fa74d65b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21a02f328141497a451ffeacb44047c18829347b9fb73576e46526fa74d65b0->enter($__internal_c21a02f328141497a451ffeacb44047c18829347b9fb73576e46526fa74d65b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_87b21ca9cb3e5a85a6e321ffe1627809ac63c2c0bd86a00746f65bd3a4462ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b21ca9cb3e5a85a6e321ffe1627809ac63c2c0bd86a00746f65bd3a4462ec0->enter($__internal_87b21ca9cb3e5a85a6e321ffe1627809ac63c2c0bd86a00746f65bd3a4462ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c21a02f328141497a451ffeacb44047c18829347b9fb73576e46526fa74d65b0->leave($__internal_c21a02f328141497a451ffeacb44047c18829347b9fb73576e46526fa74d65b0_prof);

        
        $__internal_87b21ca9cb3e5a85a6e321ffe1627809ac63c2c0bd86a00746f65bd3a4462ec0->leave($__internal_87b21ca9cb3e5a85a6e321ffe1627809ac63c2c0bd86a00746f65bd3a4462ec0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
