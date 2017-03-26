<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40e04ab35e201a050e0c92843a8e62800a6de49c6101e521cb09805916766f75 extends Twig_Template
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
        $__internal_a59c845dfc1b1cb80a14bf43d9e0333c519683728604172652888f7a065ab02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59c845dfc1b1cb80a14bf43d9e0333c519683728604172652888f7a065ab02a->enter($__internal_a59c845dfc1b1cb80a14bf43d9e0333c519683728604172652888f7a065ab02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_aa6ecbeacae908a1a17f8391e5794372624f03b58d5443987a64a4506ffe5118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6ecbeacae908a1a17f8391e5794372624f03b58d5443987a64a4506ffe5118->enter($__internal_aa6ecbeacae908a1a17f8391e5794372624f03b58d5443987a64a4506ffe5118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a59c845dfc1b1cb80a14bf43d9e0333c519683728604172652888f7a065ab02a->leave($__internal_a59c845dfc1b1cb80a14bf43d9e0333c519683728604172652888f7a065ab02a_prof);

        
        $__internal_aa6ecbeacae908a1a17f8391e5794372624f03b58d5443987a64a4506ffe5118->leave($__internal_aa6ecbeacae908a1a17f8391e5794372624f03b58d5443987a64a4506ffe5118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
