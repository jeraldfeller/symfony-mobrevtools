<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7adcc7a2cf53352401e690d19af245fde27723fea9f7a3f3ebfce3b138297b32 extends Twig_Template
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
        $__internal_04ff9c3a66ea46f00f88208072c152305cf187a3251907065e8f2e23d91d7f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ff9c3a66ea46f00f88208072c152305cf187a3251907065e8f2e23d91d7f0d->enter($__internal_04ff9c3a66ea46f00f88208072c152305cf187a3251907065e8f2e23d91d7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7ad155d5236f1a14aa99990ecd1c6a5a06a01d2c21c22672bf4226928a261fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad155d5236f1a14aa99990ecd1c6a5a06a01d2c21c22672bf4226928a261fc5->enter($__internal_7ad155d5236f1a14aa99990ecd1c6a5a06a01d2c21c22672bf4226928a261fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_04ff9c3a66ea46f00f88208072c152305cf187a3251907065e8f2e23d91d7f0d->leave($__internal_04ff9c3a66ea46f00f88208072c152305cf187a3251907065e8f2e23d91d7f0d_prof);

        
        $__internal_7ad155d5236f1a14aa99990ecd1c6a5a06a01d2c21c22672bf4226928a261fc5->leave($__internal_7ad155d5236f1a14aa99990ecd1c6a5a06a01d2c21c22672bf4226928a261fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
