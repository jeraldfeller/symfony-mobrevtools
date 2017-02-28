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
        $__internal_6f2e1d90bfc66f5ba5a666369dc177df235aacc094bae11a5be909d5037e0642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2e1d90bfc66f5ba5a666369dc177df235aacc094bae11a5be909d5037e0642->enter($__internal_6f2e1d90bfc66f5ba5a666369dc177df235aacc094bae11a5be909d5037e0642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6fa946cf99da5e95f4652aa2000b238408cf18f2b91770ca601ca50a54c999bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa946cf99da5e95f4652aa2000b238408cf18f2b91770ca601ca50a54c999bb->enter($__internal_6fa946cf99da5e95f4652aa2000b238408cf18f2b91770ca601ca50a54c999bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6f2e1d90bfc66f5ba5a666369dc177df235aacc094bae11a5be909d5037e0642->leave($__internal_6f2e1d90bfc66f5ba5a666369dc177df235aacc094bae11a5be909d5037e0642_prof);

        
        $__internal_6fa946cf99da5e95f4652aa2000b238408cf18f2b91770ca601ca50a54c999bb->leave($__internal_6fa946cf99da5e95f4652aa2000b238408cf18f2b91770ca601ca50a54c999bb_prof);

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
