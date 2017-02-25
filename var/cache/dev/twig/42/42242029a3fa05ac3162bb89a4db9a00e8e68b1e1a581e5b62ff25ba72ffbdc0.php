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
        $__internal_aa801f1132d3277aa7da4485d3d953d3ac8ce831316373542af87453d46e536a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa801f1132d3277aa7da4485d3d953d3ac8ce831316373542af87453d46e536a->enter($__internal_aa801f1132d3277aa7da4485d3d953d3ac8ce831316373542af87453d46e536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6f3d697cc2936d80569e22b497cfacae7db669507c47a88168858417215bd817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3d697cc2936d80569e22b497cfacae7db669507c47a88168858417215bd817->enter($__internal_6f3d697cc2936d80569e22b497cfacae7db669507c47a88168858417215bd817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa801f1132d3277aa7da4485d3d953d3ac8ce831316373542af87453d46e536a->leave($__internal_aa801f1132d3277aa7da4485d3d953d3ac8ce831316373542af87453d46e536a_prof);

        
        $__internal_6f3d697cc2936d80569e22b497cfacae7db669507c47a88168858417215bd817->leave($__internal_6f3d697cc2936d80569e22b497cfacae7db669507c47a88168858417215bd817_prof);

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
