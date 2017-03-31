<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bd1c7b2500f34d04f02f729190dc97c56081869ac1fa7ae0c96545d50fac483a extends Twig_Template
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
        $__internal_ab06ba44668af342e32a08a82e56e82001c16f6e5d589001628aa77f1e57dc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab06ba44668af342e32a08a82e56e82001c16f6e5d589001628aa77f1e57dc6b->enter($__internal_ab06ba44668af342e32a08a82e56e82001c16f6e5d589001628aa77f1e57dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f4160f64eba223a30789ef049dcdda1e2d8998affe6ee03c8f159df414f908ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4160f64eba223a30789ef049dcdda1e2d8998affe6ee03c8f159df414f908ca->enter($__internal_f4160f64eba223a30789ef049dcdda1e2d8998affe6ee03c8f159df414f908ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ab06ba44668af342e32a08a82e56e82001c16f6e5d589001628aa77f1e57dc6b->leave($__internal_ab06ba44668af342e32a08a82e56e82001c16f6e5d589001628aa77f1e57dc6b_prof);

        
        $__internal_f4160f64eba223a30789ef049dcdda1e2d8998affe6ee03c8f159df414f908ca->leave($__internal_f4160f64eba223a30789ef049dcdda1e2d8998affe6ee03c8f159df414f908ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
