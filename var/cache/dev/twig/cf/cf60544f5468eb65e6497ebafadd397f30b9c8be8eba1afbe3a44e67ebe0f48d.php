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
        $__internal_b74d30bc7c11c7a2e61aed22d079236ff3db2ad607b636a4410e409d7a37948f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74d30bc7c11c7a2e61aed22d079236ff3db2ad607b636a4410e409d7a37948f->enter($__internal_b74d30bc7c11c7a2e61aed22d079236ff3db2ad607b636a4410e409d7a37948f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_94b4f2cf0a37ad8d3bbad61600afae2d45c3cb76772c7a32705658cb4d7cc680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b4f2cf0a37ad8d3bbad61600afae2d45c3cb76772c7a32705658cb4d7cc680->enter($__internal_94b4f2cf0a37ad8d3bbad61600afae2d45c3cb76772c7a32705658cb4d7cc680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b74d30bc7c11c7a2e61aed22d079236ff3db2ad607b636a4410e409d7a37948f->leave($__internal_b74d30bc7c11c7a2e61aed22d079236ff3db2ad607b636a4410e409d7a37948f_prof);

        
        $__internal_94b4f2cf0a37ad8d3bbad61600afae2d45c3cb76772c7a32705658cb4d7cc680->leave($__internal_94b4f2cf0a37ad8d3bbad61600afae2d45c3cb76772c7a32705658cb4d7cc680_prof);

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
