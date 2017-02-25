<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3b561f975f00eb3eb9c0ebcf1d9dc531557c2ed5a49d2ebddef592aad978d461 extends Twig_Template
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
        $__internal_c96c8cee60b56de803291d1dd356630bf8adc17734412bb45549e50ff5e53e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96c8cee60b56de803291d1dd356630bf8adc17734412bb45549e50ff5e53e16->enter($__internal_c96c8cee60b56de803291d1dd356630bf8adc17734412bb45549e50ff5e53e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_aaf63d6118c893cc98bec7e8823da4348251d124d1dcdd713e15c24861258ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf63d6118c893cc98bec7e8823da4348251d124d1dcdd713e15c24861258ab9->enter($__internal_aaf63d6118c893cc98bec7e8823da4348251d124d1dcdd713e15c24861258ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c96c8cee60b56de803291d1dd356630bf8adc17734412bb45549e50ff5e53e16->leave($__internal_c96c8cee60b56de803291d1dd356630bf8adc17734412bb45549e50ff5e53e16_prof);

        
        $__internal_aaf63d6118c893cc98bec7e8823da4348251d124d1dcdd713e15c24861258ab9->leave($__internal_aaf63d6118c893cc98bec7e8823da4348251d124d1dcdd713e15c24861258ab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
