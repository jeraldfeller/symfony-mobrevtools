<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f65b22b222b4587006b29e47c0a12451f874f04c5b0970b7ccbac6f1ba651e2 extends Twig_Template
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
        $__internal_1fac10898394927ae05271a1ed755fc72fb94ba53bdbc625c54b652da2529cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fac10898394927ae05271a1ed755fc72fb94ba53bdbc625c54b652da2529cf6->enter($__internal_1fac10898394927ae05271a1ed755fc72fb94ba53bdbc625c54b652da2529cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f08a6d7b6fffc05eef5a42cb33b9ddd07d3534e7db947eac79d7bbdb67825082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08a6d7b6fffc05eef5a42cb33b9ddd07d3534e7db947eac79d7bbdb67825082->enter($__internal_f08a6d7b6fffc05eef5a42cb33b9ddd07d3534e7db947eac79d7bbdb67825082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1fac10898394927ae05271a1ed755fc72fb94ba53bdbc625c54b652da2529cf6->leave($__internal_1fac10898394927ae05271a1ed755fc72fb94ba53bdbc625c54b652da2529cf6_prof);

        
        $__internal_f08a6d7b6fffc05eef5a42cb33b9ddd07d3534e7db947eac79d7bbdb67825082->leave($__internal_f08a6d7b6fffc05eef5a42cb33b9ddd07d3534e7db947eac79d7bbdb67825082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
