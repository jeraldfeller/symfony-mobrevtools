<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ce64365531bbbef9a4c60cfe1ebc12a3542615c3393dccf98a0a75f7d13adeda extends Twig_Template
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
        $__internal_1874b43289d4050bf5e9f24b0819b4b57c32db880e18f242a5af1e366faeaf80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1874b43289d4050bf5e9f24b0819b4b57c32db880e18f242a5af1e366faeaf80->enter($__internal_1874b43289d4050bf5e9f24b0819b4b57c32db880e18f242a5af1e366faeaf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_069aa59bc366ef3210973ba78eb002cd7337efa02d6674430ee1d351a90f0fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069aa59bc366ef3210973ba78eb002cd7337efa02d6674430ee1d351a90f0fae->enter($__internal_069aa59bc366ef3210973ba78eb002cd7337efa02d6674430ee1d351a90f0fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1874b43289d4050bf5e9f24b0819b4b57c32db880e18f242a5af1e366faeaf80->leave($__internal_1874b43289d4050bf5e9f24b0819b4b57c32db880e18f242a5af1e366faeaf80_prof);

        
        $__internal_069aa59bc366ef3210973ba78eb002cd7337efa02d6674430ee1d351a90f0fae->leave($__internal_069aa59bc366ef3210973ba78eb002cd7337efa02d6674430ee1d351a90f0fae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
