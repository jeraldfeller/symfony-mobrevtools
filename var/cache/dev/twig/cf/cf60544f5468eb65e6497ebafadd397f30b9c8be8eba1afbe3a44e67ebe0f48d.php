<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ce64365531bbbef9a4c60cfe1ebc12a3542615c3393dccf98a0a75f7d13adeda extends Twig_Template
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
        $__internal_0fa07b7f258a7307ea804d2da5d301b5734432eda0ea206b87fca1fa75b6f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa07b7f258a7307ea804d2da5d301b5734432eda0ea206b87fca1fa75b6f4ec->enter($__internal_0fa07b7f258a7307ea804d2da5d301b5734432eda0ea206b87fca1fa75b6f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0b0945e19a1bd35bfec4e6eb713062d056474e04da1026dc62bfb4243303eb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0945e19a1bd35bfec4e6eb713062d056474e04da1026dc62bfb4243303eb82->enter($__internal_0b0945e19a1bd35bfec4e6eb713062d056474e04da1026dc62bfb4243303eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0fa07b7f258a7307ea804d2da5d301b5734432eda0ea206b87fca1fa75b6f4ec->leave($__internal_0fa07b7f258a7307ea804d2da5d301b5734432eda0ea206b87fca1fa75b6f4ec_prof);

        
        $__internal_0b0945e19a1bd35bfec4e6eb713062d056474e04da1026dc62bfb4243303eb82->leave($__internal_0b0945e19a1bd35bfec4e6eb713062d056474e04da1026dc62bfb4243303eb82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
