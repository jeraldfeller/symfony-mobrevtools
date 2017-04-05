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
        $__internal_e3f67a747cf8fa438279ae102efb4b2f37724f6e1bf7bcab2be375446019cf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f67a747cf8fa438279ae102efb4b2f37724f6e1bf7bcab2be375446019cf03->enter($__internal_e3f67a747cf8fa438279ae102efb4b2f37724f6e1bf7bcab2be375446019cf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_16dddddbcb682f2ade940ee9a0367b42048d9efd18416b93fbd557c261ceeda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16dddddbcb682f2ade940ee9a0367b42048d9efd18416b93fbd557c261ceeda3->enter($__internal_16dddddbcb682f2ade940ee9a0367b42048d9efd18416b93fbd557c261ceeda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e3f67a747cf8fa438279ae102efb4b2f37724f6e1bf7bcab2be375446019cf03->leave($__internal_e3f67a747cf8fa438279ae102efb4b2f37724f6e1bf7bcab2be375446019cf03_prof);

        
        $__internal_16dddddbcb682f2ade940ee9a0367b42048d9efd18416b93fbd557c261ceeda3->leave($__internal_16dddddbcb682f2ade940ee9a0367b42048d9efd18416b93fbd557c261ceeda3_prof);

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
