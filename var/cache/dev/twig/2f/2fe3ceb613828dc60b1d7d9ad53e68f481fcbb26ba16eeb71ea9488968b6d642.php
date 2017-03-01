<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2311ac9497b4a74158ce5f6d84d0821c49a0032f82ac748f7254afc2ca9a4d20 extends Twig_Template
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
        $__internal_f58cbca2f5a7d96b8d1cab695ce733cfc12406f4198f0ef7b23a928fa3603880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58cbca2f5a7d96b8d1cab695ce733cfc12406f4198f0ef7b23a928fa3603880->enter($__internal_f58cbca2f5a7d96b8d1cab695ce733cfc12406f4198f0ef7b23a928fa3603880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_159ce1d82364cd42e914e8e21c5c8f0aae53b42f5c7baf8bc9c4abf8374e032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159ce1d82364cd42e914e8e21c5c8f0aae53b42f5c7baf8bc9c4abf8374e032f->enter($__internal_159ce1d82364cd42e914e8e21c5c8f0aae53b42f5c7baf8bc9c4abf8374e032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f58cbca2f5a7d96b8d1cab695ce733cfc12406f4198f0ef7b23a928fa3603880->leave($__internal_f58cbca2f5a7d96b8d1cab695ce733cfc12406f4198f0ef7b23a928fa3603880_prof);

        
        $__internal_159ce1d82364cd42e914e8e21c5c8f0aae53b42f5c7baf8bc9c4abf8374e032f->leave($__internal_159ce1d82364cd42e914e8e21c5c8f0aae53b42f5c7baf8bc9c4abf8374e032f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
