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
        $__internal_7399e54e6e6f8a82a6068496b46edf951d4f867156536f628d3bbc527fc3daf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7399e54e6e6f8a82a6068496b46edf951d4f867156536f628d3bbc527fc3daf6->enter($__internal_7399e54e6e6f8a82a6068496b46edf951d4f867156536f628d3bbc527fc3daf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2ac3c8eab8cad47d52c94d08895c9575ffd3be443a2bb1b54570a436c3677e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac3c8eab8cad47d52c94d08895c9575ffd3be443a2bb1b54570a436c3677e63->enter($__internal_2ac3c8eab8cad47d52c94d08895c9575ffd3be443a2bb1b54570a436c3677e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7399e54e6e6f8a82a6068496b46edf951d4f867156536f628d3bbc527fc3daf6->leave($__internal_7399e54e6e6f8a82a6068496b46edf951d4f867156536f628d3bbc527fc3daf6_prof);

        
        $__internal_2ac3c8eab8cad47d52c94d08895c9575ffd3be443a2bb1b54570a436c3677e63->leave($__internal_2ac3c8eab8cad47d52c94d08895c9575ffd3be443a2bb1b54570a436c3677e63_prof);

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
