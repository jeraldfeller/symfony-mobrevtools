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
        $__internal_1329e74149183a97750bb70f11690f6cf2d8fd02d259062592431862d08b6c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1329e74149183a97750bb70f11690f6cf2d8fd02d259062592431862d08b6c86->enter($__internal_1329e74149183a97750bb70f11690f6cf2d8fd02d259062592431862d08b6c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fc6d016448e156fc9314fcfdb7d856b8e8f3014b2ab22fbd21680d949200e8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6d016448e156fc9314fcfdb7d856b8e8f3014b2ab22fbd21680d949200e8a7->enter($__internal_fc6d016448e156fc9314fcfdb7d856b8e8f3014b2ab22fbd21680d949200e8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1329e74149183a97750bb70f11690f6cf2d8fd02d259062592431862d08b6c86->leave($__internal_1329e74149183a97750bb70f11690f6cf2d8fd02d259062592431862d08b6c86_prof);

        
        $__internal_fc6d016448e156fc9314fcfdb7d856b8e8f3014b2ab22fbd21680d949200e8a7->leave($__internal_fc6d016448e156fc9314fcfdb7d856b8e8f3014b2ab22fbd21680d949200e8a7_prof);

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
