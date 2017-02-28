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
        $__internal_0ff5e45267740e7b4b8ee380006d78777cac5e5be5e0d3229f3361c4fc5566ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff5e45267740e7b4b8ee380006d78777cac5e5be5e0d3229f3361c4fc5566ad->enter($__internal_0ff5e45267740e7b4b8ee380006d78777cac5e5be5e0d3229f3361c4fc5566ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_92936a0b9b35880d115fecb2dc1a49595195cc41ef125762eea0c8889c644530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92936a0b9b35880d115fecb2dc1a49595195cc41ef125762eea0c8889c644530->enter($__internal_92936a0b9b35880d115fecb2dc1a49595195cc41ef125762eea0c8889c644530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0ff5e45267740e7b4b8ee380006d78777cac5e5be5e0d3229f3361c4fc5566ad->leave($__internal_0ff5e45267740e7b4b8ee380006d78777cac5e5be5e0d3229f3361c4fc5566ad_prof);

        
        $__internal_92936a0b9b35880d115fecb2dc1a49595195cc41ef125762eea0c8889c644530->leave($__internal_92936a0b9b35880d115fecb2dc1a49595195cc41ef125762eea0c8889c644530_prof);

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
