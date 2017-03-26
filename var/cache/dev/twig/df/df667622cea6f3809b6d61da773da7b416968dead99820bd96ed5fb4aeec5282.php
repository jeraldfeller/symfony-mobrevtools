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
        $__internal_ef3eb21bf9a88035735209011c5a0f3d1607c3a8e9464e263e070a00543ad06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3eb21bf9a88035735209011c5a0f3d1607c3a8e9464e263e070a00543ad06a->enter($__internal_ef3eb21bf9a88035735209011c5a0f3d1607c3a8e9464e263e070a00543ad06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_14c457bca798aa3d07dd4fbf17a2be9a4bdb059b8152d28e7b10e07cfbdf394c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c457bca798aa3d07dd4fbf17a2be9a4bdb059b8152d28e7b10e07cfbdf394c->enter($__internal_14c457bca798aa3d07dd4fbf17a2be9a4bdb059b8152d28e7b10e07cfbdf394c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ef3eb21bf9a88035735209011c5a0f3d1607c3a8e9464e263e070a00543ad06a->leave($__internal_ef3eb21bf9a88035735209011c5a0f3d1607c3a8e9464e263e070a00543ad06a_prof);

        
        $__internal_14c457bca798aa3d07dd4fbf17a2be9a4bdb059b8152d28e7b10e07cfbdf394c->leave($__internal_14c457bca798aa3d07dd4fbf17a2be9a4bdb059b8152d28e7b10e07cfbdf394c_prof);

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
