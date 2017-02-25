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
        $__internal_dd29091da22c980d2384ed65073ff11d6f3cdac101156fbcbbcb87ac55bb8ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd29091da22c980d2384ed65073ff11d6f3cdac101156fbcbbcb87ac55bb8ed2->enter($__internal_dd29091da22c980d2384ed65073ff11d6f3cdac101156fbcbbcb87ac55bb8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0f7459ad5b92aac9fff342855cde68d8b253a765e57a54c97d37d8ea5ecd8548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7459ad5b92aac9fff342855cde68d8b253a765e57a54c97d37d8ea5ecd8548->enter($__internal_0f7459ad5b92aac9fff342855cde68d8b253a765e57a54c97d37d8ea5ecd8548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dd29091da22c980d2384ed65073ff11d6f3cdac101156fbcbbcb87ac55bb8ed2->leave($__internal_dd29091da22c980d2384ed65073ff11d6f3cdac101156fbcbbcb87ac55bb8ed2_prof);

        
        $__internal_0f7459ad5b92aac9fff342855cde68d8b253a765e57a54c97d37d8ea5ecd8548->leave($__internal_0f7459ad5b92aac9fff342855cde68d8b253a765e57a54c97d37d8ea5ecd8548_prof);

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
