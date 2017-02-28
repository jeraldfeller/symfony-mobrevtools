<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1f3ad4fd9a56b1642971543b4eae08692cc0fe51218bc2df3825761dfc75366d extends Twig_Template
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
        $__internal_414b6c6a3746fac38bd252cbf417ef2bcc434542daf4a12cc24b1dc4566a9544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414b6c6a3746fac38bd252cbf417ef2bcc434542daf4a12cc24b1dc4566a9544->enter($__internal_414b6c6a3746fac38bd252cbf417ef2bcc434542daf4a12cc24b1dc4566a9544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_de441440c55d839a682fb156049181ab21c0c25763cec2eddc617da7667699ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de441440c55d839a682fb156049181ab21c0c25763cec2eddc617da7667699ec->enter($__internal_de441440c55d839a682fb156049181ab21c0c25763cec2eddc617da7667699ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_414b6c6a3746fac38bd252cbf417ef2bcc434542daf4a12cc24b1dc4566a9544->leave($__internal_414b6c6a3746fac38bd252cbf417ef2bcc434542daf4a12cc24b1dc4566a9544_prof);

        
        $__internal_de441440c55d839a682fb156049181ab21c0c25763cec2eddc617da7667699ec->leave($__internal_de441440c55d839a682fb156049181ab21c0c25763cec2eddc617da7667699ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
