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
        $__internal_21c91ece54e8e1a20190e03d81ae1d2f1c3b477e9304e49c22ccb2f59416a1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c91ece54e8e1a20190e03d81ae1d2f1c3b477e9304e49c22ccb2f59416a1c9->enter($__internal_21c91ece54e8e1a20190e03d81ae1d2f1c3b477e9304e49c22ccb2f59416a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9ab4f1c369e0a0fc2a4228ee472920543f4fb461082a2ae99ba9717c6e865ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab4f1c369e0a0fc2a4228ee472920543f4fb461082a2ae99ba9717c6e865ac2->enter($__internal_9ab4f1c369e0a0fc2a4228ee472920543f4fb461082a2ae99ba9717c6e865ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_21c91ece54e8e1a20190e03d81ae1d2f1c3b477e9304e49c22ccb2f59416a1c9->leave($__internal_21c91ece54e8e1a20190e03d81ae1d2f1c3b477e9304e49c22ccb2f59416a1c9_prof);

        
        $__internal_9ab4f1c369e0a0fc2a4228ee472920543f4fb461082a2ae99ba9717c6e865ac2->leave($__internal_9ab4f1c369e0a0fc2a4228ee472920543f4fb461082a2ae99ba9717c6e865ac2_prof);

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
