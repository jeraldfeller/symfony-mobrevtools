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
        $__internal_6af69b6f4cabc46dc7a1dd7abe191d2f63b233ce75bb19f9108ee14b246d0acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af69b6f4cabc46dc7a1dd7abe191d2f63b233ce75bb19f9108ee14b246d0acb->enter($__internal_6af69b6f4cabc46dc7a1dd7abe191d2f63b233ce75bb19f9108ee14b246d0acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_682acfc8a9b2d3793613595cb4e175db150e58e65a9020d3252cf276fefa73af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682acfc8a9b2d3793613595cb4e175db150e58e65a9020d3252cf276fefa73af->enter($__internal_682acfc8a9b2d3793613595cb4e175db150e58e65a9020d3252cf276fefa73af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6af69b6f4cabc46dc7a1dd7abe191d2f63b233ce75bb19f9108ee14b246d0acb->leave($__internal_6af69b6f4cabc46dc7a1dd7abe191d2f63b233ce75bb19f9108ee14b246d0acb_prof);

        
        $__internal_682acfc8a9b2d3793613595cb4e175db150e58e65a9020d3252cf276fefa73af->leave($__internal_682acfc8a9b2d3793613595cb4e175db150e58e65a9020d3252cf276fefa73af_prof);

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
