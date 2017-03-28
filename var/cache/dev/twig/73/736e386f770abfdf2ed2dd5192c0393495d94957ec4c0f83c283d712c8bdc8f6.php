<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_344096aee71c7802bf4797171e5c69de2f77629f49f49570c9ff24a623530587 extends Twig_Template
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
        $__internal_f802c767ad0e84a6cd6116ef74f678584ce8c6e66fe4480c6862445fac2d471b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f802c767ad0e84a6cd6116ef74f678584ce8c6e66fe4480c6862445fac2d471b->enter($__internal_f802c767ad0e84a6cd6116ef74f678584ce8c6e66fe4480c6862445fac2d471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_494d9db087614e86b092ea1d7cce306cd0d2cea6296880b09ce8ce7a5e709648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494d9db087614e86b092ea1d7cce306cd0d2cea6296880b09ce8ce7a5e709648->enter($__internal_494d9db087614e86b092ea1d7cce306cd0d2cea6296880b09ce8ce7a5e709648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f802c767ad0e84a6cd6116ef74f678584ce8c6e66fe4480c6862445fac2d471b->leave($__internal_f802c767ad0e84a6cd6116ef74f678584ce8c6e66fe4480c6862445fac2d471b_prof);

        
        $__internal_494d9db087614e86b092ea1d7cce306cd0d2cea6296880b09ce8ce7a5e709648->leave($__internal_494d9db087614e86b092ea1d7cce306cd0d2cea6296880b09ce8ce7a5e709648_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
