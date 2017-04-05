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
        $__internal_7197a960a3613ee0fcb0f38af6354f356e2ce5c485543a43fb485fe908f2ff10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7197a960a3613ee0fcb0f38af6354f356e2ce5c485543a43fb485fe908f2ff10->enter($__internal_7197a960a3613ee0fcb0f38af6354f356e2ce5c485543a43fb485fe908f2ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0cabc1a145f35531a3ac001184d80f3319d308e71b0d9fa36bbfbb11855bb7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cabc1a145f35531a3ac001184d80f3319d308e71b0d9fa36bbfbb11855bb7ab->enter($__internal_0cabc1a145f35531a3ac001184d80f3319d308e71b0d9fa36bbfbb11855bb7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7197a960a3613ee0fcb0f38af6354f356e2ce5c485543a43fb485fe908f2ff10->leave($__internal_7197a960a3613ee0fcb0f38af6354f356e2ce5c485543a43fb485fe908f2ff10_prof);

        
        $__internal_0cabc1a145f35531a3ac001184d80f3319d308e71b0d9fa36bbfbb11855bb7ab->leave($__internal_0cabc1a145f35531a3ac001184d80f3319d308e71b0d9fa36bbfbb11855bb7ab_prof);

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
