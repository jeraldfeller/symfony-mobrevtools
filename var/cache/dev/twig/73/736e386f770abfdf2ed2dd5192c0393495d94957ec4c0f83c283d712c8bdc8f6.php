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
        $__internal_81e59cccb5282efc95bb8655a5678d4c91c1633dc89a7de281661048c78af73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e59cccb5282efc95bb8655a5678d4c91c1633dc89a7de281661048c78af73e->enter($__internal_81e59cccb5282efc95bb8655a5678d4c91c1633dc89a7de281661048c78af73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0b083bcc4c4532d7fc914f67bbe9068fe0ffa60e67d1b48a3c3f99c9e4c85b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b083bcc4c4532d7fc914f67bbe9068fe0ffa60e67d1b48a3c3f99c9e4c85b6e->enter($__internal_0b083bcc4c4532d7fc914f67bbe9068fe0ffa60e67d1b48a3c3f99c9e4c85b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_81e59cccb5282efc95bb8655a5678d4c91c1633dc89a7de281661048c78af73e->leave($__internal_81e59cccb5282efc95bb8655a5678d4c91c1633dc89a7de281661048c78af73e_prof);

        
        $__internal_0b083bcc4c4532d7fc914f67bbe9068fe0ffa60e67d1b48a3c3f99c9e4c85b6e->leave($__internal_0b083bcc4c4532d7fc914f67bbe9068fe0ffa60e67d1b48a3c3f99c9e4c85b6e_prof);

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
