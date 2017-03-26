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
        $__internal_48b7846c1206f4c22c1e1558b648c50b13751b2c58cd5c66a4f83b2340acaa0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b7846c1206f4c22c1e1558b648c50b13751b2c58cd5c66a4f83b2340acaa0d->enter($__internal_48b7846c1206f4c22c1e1558b648c50b13751b2c58cd5c66a4f83b2340acaa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_aaf187291e89ddaccdb12dc004ee38c0f80cb9a239f08b299a6dc5c6b707f1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf187291e89ddaccdb12dc004ee38c0f80cb9a239f08b299a6dc5c6b707f1be->enter($__internal_aaf187291e89ddaccdb12dc004ee38c0f80cb9a239f08b299a6dc5c6b707f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_48b7846c1206f4c22c1e1558b648c50b13751b2c58cd5c66a4f83b2340acaa0d->leave($__internal_48b7846c1206f4c22c1e1558b648c50b13751b2c58cd5c66a4f83b2340acaa0d_prof);

        
        $__internal_aaf187291e89ddaccdb12dc004ee38c0f80cb9a239f08b299a6dc5c6b707f1be->leave($__internal_aaf187291e89ddaccdb12dc004ee38c0f80cb9a239f08b299a6dc5c6b707f1be_prof);

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
