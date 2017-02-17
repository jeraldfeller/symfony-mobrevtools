<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8bf7f61542f32de2f5f76e08119e4c0761be7fce7a49661d165bbb6a0527df8e extends Twig_Template
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
        $__internal_8dee18bd35192b3a71849474657a0ff590850120da30501044271125a0dfb604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dee18bd35192b3a71849474657a0ff590850120da30501044271125a0dfb604->enter($__internal_8dee18bd35192b3a71849474657a0ff590850120da30501044271125a0dfb604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_29b2d73ac7c1107d405490cab257d9e7cb73ba42f19426edd7580f4003d11249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b2d73ac7c1107d405490cab257d9e7cb73ba42f19426edd7580f4003d11249->enter($__internal_29b2d73ac7c1107d405490cab257d9e7cb73ba42f19426edd7580f4003d11249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8dee18bd35192b3a71849474657a0ff590850120da30501044271125a0dfb604->leave($__internal_8dee18bd35192b3a71849474657a0ff590850120da30501044271125a0dfb604_prof);

        
        $__internal_29b2d73ac7c1107d405490cab257d9e7cb73ba42f19426edd7580f4003d11249->leave($__internal_29b2d73ac7c1107d405490cab257d9e7cb73ba42f19426edd7580f4003d11249_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
