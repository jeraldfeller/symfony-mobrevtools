<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_09daacb408027fe257ca809043d25ec4f3638762d4f70c3d6ed8d56fa3f43c91 extends Twig_Template
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
        $__internal_4d580abaeb7e31b2ce4eefa808fd3552ca586f7d3c7e24ea09dc8bef2472fdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d580abaeb7e31b2ce4eefa808fd3552ca586f7d3c7e24ea09dc8bef2472fdbc->enter($__internal_4d580abaeb7e31b2ce4eefa808fd3552ca586f7d3c7e24ea09dc8bef2472fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18a1e954dae65fb4cb9d0ea010207d26501f6ef1d3c6ea9603befa8851bd91c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a1e954dae65fb4cb9d0ea010207d26501f6ef1d3c6ea9603befa8851bd91c7->enter($__internal_18a1e954dae65fb4cb9d0ea010207d26501f6ef1d3c6ea9603befa8851bd91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4d580abaeb7e31b2ce4eefa808fd3552ca586f7d3c7e24ea09dc8bef2472fdbc->leave($__internal_4d580abaeb7e31b2ce4eefa808fd3552ca586f7d3c7e24ea09dc8bef2472fdbc_prof);

        
        $__internal_18a1e954dae65fb4cb9d0ea010207d26501f6ef1d3c6ea9603befa8851bd91c7->leave($__internal_18a1e954dae65fb4cb9d0ea010207d26501f6ef1d3c6ea9603befa8851bd91c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
