<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5d80faa5d0517b4c6eb562e3cb8eea063b9cac5e1ccf6df8d408273bac5e239b extends Twig_Template
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
        $__internal_db936efde415bd57ee1a0d63621c4ad4a9a261d166cc85bca7f2a2bcfc1a7dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db936efde415bd57ee1a0d63621c4ad4a9a261d166cc85bca7f2a2bcfc1a7dcc->enter($__internal_db936efde415bd57ee1a0d63621c4ad4a9a261d166cc85bca7f2a2bcfc1a7dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c6583370f76e5cfa7da55ca2517fe356ebbcf61f951adc984f08feec7c38adf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6583370f76e5cfa7da55ca2517fe356ebbcf61f951adc984f08feec7c38adf2->enter($__internal_c6583370f76e5cfa7da55ca2517fe356ebbcf61f951adc984f08feec7c38adf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_db936efde415bd57ee1a0d63621c4ad4a9a261d166cc85bca7f2a2bcfc1a7dcc->leave($__internal_db936efde415bd57ee1a0d63621c4ad4a9a261d166cc85bca7f2a2bcfc1a7dcc_prof);

        
        $__internal_c6583370f76e5cfa7da55ca2517fe356ebbcf61f951adc984f08feec7c38adf2->leave($__internal_c6583370f76e5cfa7da55ca2517fe356ebbcf61f951adc984f08feec7c38adf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
