<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_65bfc4a9a0bc488f281744b29523ec51b48d53ece84b5c098cd12d84506f5f7c extends Twig_Template
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
        $__internal_af1fec3ef8911d07adf4bcb56a65635084b52309fa65e6aee85ab3cae38d0b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1fec3ef8911d07adf4bcb56a65635084b52309fa65e6aee85ab3cae38d0b77->enter($__internal_af1fec3ef8911d07adf4bcb56a65635084b52309fa65e6aee85ab3cae38d0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d19088cf0b57bb8842d48be1596c7603aa626123d454a6988873e0d2e5753bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19088cf0b57bb8842d48be1596c7603aa626123d454a6988873e0d2e5753bbb->enter($__internal_d19088cf0b57bb8842d48be1596c7603aa626123d454a6988873e0d2e5753bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_af1fec3ef8911d07adf4bcb56a65635084b52309fa65e6aee85ab3cae38d0b77->leave($__internal_af1fec3ef8911d07adf4bcb56a65635084b52309fa65e6aee85ab3cae38d0b77_prof);

        
        $__internal_d19088cf0b57bb8842d48be1596c7603aa626123d454a6988873e0d2e5753bbb->leave($__internal_d19088cf0b57bb8842d48be1596c7603aa626123d454a6988873e0d2e5753bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
