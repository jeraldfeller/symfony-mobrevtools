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
        $__internal_4d455dfa718a6afd404f3d60019fe5b90e1f2c5744f6157fd52717bf9c143bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d455dfa718a6afd404f3d60019fe5b90e1f2c5744f6157fd52717bf9c143bd1->enter($__internal_4d455dfa718a6afd404f3d60019fe5b90e1f2c5744f6157fd52717bf9c143bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f23196d336a64252e5ab8352d3addd5c4738f97a8639aba80dcad14fe44952db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23196d336a64252e5ab8352d3addd5c4738f97a8639aba80dcad14fe44952db->enter($__internal_f23196d336a64252e5ab8352d3addd5c4738f97a8639aba80dcad14fe44952db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4d455dfa718a6afd404f3d60019fe5b90e1f2c5744f6157fd52717bf9c143bd1->leave($__internal_4d455dfa718a6afd404f3d60019fe5b90e1f2c5744f6157fd52717bf9c143bd1_prof);

        
        $__internal_f23196d336a64252e5ab8352d3addd5c4738f97a8639aba80dcad14fe44952db->leave($__internal_f23196d336a64252e5ab8352d3addd5c4738f97a8639aba80dcad14fe44952db_prof);

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
