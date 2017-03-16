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
        $__internal_75d317b8e0dc53d82ebe0d1c29799abafdedfa93ed1b2a9b3021c554f6177576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d317b8e0dc53d82ebe0d1c29799abafdedfa93ed1b2a9b3021c554f6177576->enter($__internal_75d317b8e0dc53d82ebe0d1c29799abafdedfa93ed1b2a9b3021c554f6177576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3aa565a73afc2cc41ff1bf3bc9dffcf1965314bcb9b53af3573f2fa29f78cec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa565a73afc2cc41ff1bf3bc9dffcf1965314bcb9b53af3573f2fa29f78cec1->enter($__internal_3aa565a73afc2cc41ff1bf3bc9dffcf1965314bcb9b53af3573f2fa29f78cec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_75d317b8e0dc53d82ebe0d1c29799abafdedfa93ed1b2a9b3021c554f6177576->leave($__internal_75d317b8e0dc53d82ebe0d1c29799abafdedfa93ed1b2a9b3021c554f6177576_prof);

        
        $__internal_3aa565a73afc2cc41ff1bf3bc9dffcf1965314bcb9b53af3573f2fa29f78cec1->leave($__internal_3aa565a73afc2cc41ff1bf3bc9dffcf1965314bcb9b53af3573f2fa29f78cec1_prof);

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
