<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9b8b23f81fd6fb587813f16531618ed54cb93290ebe5fa30f1f74869504230ba extends Twig_Template
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
        $__internal_fd0307fb2b119496b706e5d5a1b73299d470600aa3b07cb5d515f6c38397b8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0307fb2b119496b706e5d5a1b73299d470600aa3b07cb5d515f6c38397b8c5->enter($__internal_fd0307fb2b119496b706e5d5a1b73299d470600aa3b07cb5d515f6c38397b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c79b7ebc916dcc520aab84186ba90b265b58dd2485272fe78b26f9c3bf7a7695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79b7ebc916dcc520aab84186ba90b265b58dd2485272fe78b26f9c3bf7a7695->enter($__internal_c79b7ebc916dcc520aab84186ba90b265b58dd2485272fe78b26f9c3bf7a7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fd0307fb2b119496b706e5d5a1b73299d470600aa3b07cb5d515f6c38397b8c5->leave($__internal_fd0307fb2b119496b706e5d5a1b73299d470600aa3b07cb5d515f6c38397b8c5_prof);

        
        $__internal_c79b7ebc916dcc520aab84186ba90b265b58dd2485272fe78b26f9c3bf7a7695->leave($__internal_c79b7ebc916dcc520aab84186ba90b265b58dd2485272fe78b26f9c3bf7a7695_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
