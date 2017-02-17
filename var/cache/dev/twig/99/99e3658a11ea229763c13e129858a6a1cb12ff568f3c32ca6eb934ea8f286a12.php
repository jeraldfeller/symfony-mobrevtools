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
        $__internal_9465aecf317b9af24c9602738bdc37c9d7eebf8da18b2d87a5c2f3355a321512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9465aecf317b9af24c9602738bdc37c9d7eebf8da18b2d87a5c2f3355a321512->enter($__internal_9465aecf317b9af24c9602738bdc37c9d7eebf8da18b2d87a5c2f3355a321512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_01103a4a41eff20d29fe8452da9e675df258428a1d4e4ae3adc1d0bbdd7b8dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01103a4a41eff20d29fe8452da9e675df258428a1d4e4ae3adc1d0bbdd7b8dc5->enter($__internal_01103a4a41eff20d29fe8452da9e675df258428a1d4e4ae3adc1d0bbdd7b8dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9465aecf317b9af24c9602738bdc37c9d7eebf8da18b2d87a5c2f3355a321512->leave($__internal_9465aecf317b9af24c9602738bdc37c9d7eebf8da18b2d87a5c2f3355a321512_prof);

        
        $__internal_01103a4a41eff20d29fe8452da9e675df258428a1d4e4ae3adc1d0bbdd7b8dc5->leave($__internal_01103a4a41eff20d29fe8452da9e675df258428a1d4e4ae3adc1d0bbdd7b8dc5_prof);

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
