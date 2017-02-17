<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a9ad0697028605ad64fdcb631d112ea0b6e85094e74d41638cfba921eed923b8 extends Twig_Template
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
        $__internal_07ff167f8561fd2f141fa415f4c7c6184743f96d3458dd09760d91bb485e719b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ff167f8561fd2f141fa415f4c7c6184743f96d3458dd09760d91bb485e719b->enter($__internal_07ff167f8561fd2f141fa415f4c7c6184743f96d3458dd09760d91bb485e719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6692fedab428324cb41a658d11a598c21c59dea17663f2b30233fdfca97635be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6692fedab428324cb41a658d11a598c21c59dea17663f2b30233fdfca97635be->enter($__internal_6692fedab428324cb41a658d11a598c21c59dea17663f2b30233fdfca97635be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_07ff167f8561fd2f141fa415f4c7c6184743f96d3458dd09760d91bb485e719b->leave($__internal_07ff167f8561fd2f141fa415f4c7c6184743f96d3458dd09760d91bb485e719b_prof);

        
        $__internal_6692fedab428324cb41a658d11a598c21c59dea17663f2b30233fdfca97635be->leave($__internal_6692fedab428324cb41a658d11a598c21c59dea17663f2b30233fdfca97635be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
