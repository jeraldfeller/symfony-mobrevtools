<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef67c3f1f8bf8fa76518e922d8091012422ba0ea790bed251fc56b01a7211327 extends Twig_Template
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
        $__internal_305de2184abae133879d9fa88fb709abf5bac040d464d735f1851298ce2ed32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305de2184abae133879d9fa88fb709abf5bac040d464d735f1851298ce2ed32f->enter($__internal_305de2184abae133879d9fa88fb709abf5bac040d464d735f1851298ce2ed32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_074b50ff3ed097526afb42d9e43118b57e0a45ef57cfca828cf937ec3721eb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074b50ff3ed097526afb42d9e43118b57e0a45ef57cfca828cf937ec3721eb0f->enter($__internal_074b50ff3ed097526afb42d9e43118b57e0a45ef57cfca828cf937ec3721eb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_305de2184abae133879d9fa88fb709abf5bac040d464d735f1851298ce2ed32f->leave($__internal_305de2184abae133879d9fa88fb709abf5bac040d464d735f1851298ce2ed32f_prof);

        
        $__internal_074b50ff3ed097526afb42d9e43118b57e0a45ef57cfca828cf937ec3721eb0f->leave($__internal_074b50ff3ed097526afb42d9e43118b57e0a45ef57cfca828cf937ec3721eb0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
