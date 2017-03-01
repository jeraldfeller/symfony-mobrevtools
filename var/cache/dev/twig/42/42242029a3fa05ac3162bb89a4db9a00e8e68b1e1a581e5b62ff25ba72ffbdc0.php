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
        $__internal_693b66820c7a59808a3f3a06fd11ae7c67d982d32a6fdeef71268e2c85525f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693b66820c7a59808a3f3a06fd11ae7c67d982d32a6fdeef71268e2c85525f11->enter($__internal_693b66820c7a59808a3f3a06fd11ae7c67d982d32a6fdeef71268e2c85525f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_45050cfa0f560f77155915bea1e00d5cbd247362ea8e7b1edaa037a66ca35a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45050cfa0f560f77155915bea1e00d5cbd247362ea8e7b1edaa037a66ca35a6a->enter($__internal_45050cfa0f560f77155915bea1e00d5cbd247362ea8e7b1edaa037a66ca35a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_693b66820c7a59808a3f3a06fd11ae7c67d982d32a6fdeef71268e2c85525f11->leave($__internal_693b66820c7a59808a3f3a06fd11ae7c67d982d32a6fdeef71268e2c85525f11_prof);

        
        $__internal_45050cfa0f560f77155915bea1e00d5cbd247362ea8e7b1edaa037a66ca35a6a->leave($__internal_45050cfa0f560f77155915bea1e00d5cbd247362ea8e7b1edaa037a66ca35a6a_prof);

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
