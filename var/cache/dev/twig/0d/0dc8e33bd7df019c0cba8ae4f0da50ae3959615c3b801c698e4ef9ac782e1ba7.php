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
        $__internal_5adabfce0eafbea0ff3a91d8ac13a1615ff1688194cedde8ad0243a56f73d684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adabfce0eafbea0ff3a91d8ac13a1615ff1688194cedde8ad0243a56f73d684->enter($__internal_5adabfce0eafbea0ff3a91d8ac13a1615ff1688194cedde8ad0243a56f73d684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8607bdbe3fc53407a5730b17e2b1de05ef82fbfd3d93a076f96f788004c7961a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8607bdbe3fc53407a5730b17e2b1de05ef82fbfd3d93a076f96f788004c7961a->enter($__internal_8607bdbe3fc53407a5730b17e2b1de05ef82fbfd3d93a076f96f788004c7961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5adabfce0eafbea0ff3a91d8ac13a1615ff1688194cedde8ad0243a56f73d684->leave($__internal_5adabfce0eafbea0ff3a91d8ac13a1615ff1688194cedde8ad0243a56f73d684_prof);

        
        $__internal_8607bdbe3fc53407a5730b17e2b1de05ef82fbfd3d93a076f96f788004c7961a->leave($__internal_8607bdbe3fc53407a5730b17e2b1de05ef82fbfd3d93a076f96f788004c7961a_prof);

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
