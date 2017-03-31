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
        $__internal_c7f28664d45a515ba9a9c84d27d9a3525ec7177940df2f1c6e98d42f57699fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f28664d45a515ba9a9c84d27d9a3525ec7177940df2f1c6e98d42f57699fd3->enter($__internal_c7f28664d45a515ba9a9c84d27d9a3525ec7177940df2f1c6e98d42f57699fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3343242ab98fc474739d80ad13208012afcc24a70e0b234d929ef1d35a4a97ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3343242ab98fc474739d80ad13208012afcc24a70e0b234d929ef1d35a4a97ff->enter($__internal_3343242ab98fc474739d80ad13208012afcc24a70e0b234d929ef1d35a4a97ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c7f28664d45a515ba9a9c84d27d9a3525ec7177940df2f1c6e98d42f57699fd3->leave($__internal_c7f28664d45a515ba9a9c84d27d9a3525ec7177940df2f1c6e98d42f57699fd3_prof);

        
        $__internal_3343242ab98fc474739d80ad13208012afcc24a70e0b234d929ef1d35a4a97ff->leave($__internal_3343242ab98fc474739d80ad13208012afcc24a70e0b234d929ef1d35a4a97ff_prof);

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
