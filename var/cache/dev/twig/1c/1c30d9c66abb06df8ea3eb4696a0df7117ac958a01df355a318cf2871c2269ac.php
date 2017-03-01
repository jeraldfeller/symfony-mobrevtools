<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f65b22b222b4587006b29e47c0a12451f874f04c5b0970b7ccbac6f1ba651e2 extends Twig_Template
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
        $__internal_e7d376c8c4c784cbde17206fe08f926b95189b7b51950b8d16cce19fd7b7118e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d376c8c4c784cbde17206fe08f926b95189b7b51950b8d16cce19fd7b7118e->enter($__internal_e7d376c8c4c784cbde17206fe08f926b95189b7b51950b8d16cce19fd7b7118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5ed075b32cfb741c4ea7c82e7e7c843960c0f3809f409c7dc3b8ea2e770f4f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed075b32cfb741c4ea7c82e7e7c843960c0f3809f409c7dc3b8ea2e770f4f0e->enter($__internal_5ed075b32cfb741c4ea7c82e7e7c843960c0f3809f409c7dc3b8ea2e770f4f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e7d376c8c4c784cbde17206fe08f926b95189b7b51950b8d16cce19fd7b7118e->leave($__internal_e7d376c8c4c784cbde17206fe08f926b95189b7b51950b8d16cce19fd7b7118e_prof);

        
        $__internal_5ed075b32cfb741c4ea7c82e7e7c843960c0f3809f409c7dc3b8ea2e770f4f0e->leave($__internal_5ed075b32cfb741c4ea7c82e7e7c843960c0f3809f409c7dc3b8ea2e770f4f0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
