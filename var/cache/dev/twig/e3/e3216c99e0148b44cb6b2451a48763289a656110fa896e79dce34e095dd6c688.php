<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4e19a8f4756a5d0eb0db6f699d77a0eb54e481e647a569bd8d066a9683a94b13 extends Twig_Template
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
        $__internal_0e11c28db5378112fad25b974efbe0beb0be22207669b109efc72e706b32cf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e11c28db5378112fad25b974efbe0beb0be22207669b109efc72e706b32cf28->enter($__internal_0e11c28db5378112fad25b974efbe0beb0be22207669b109efc72e706b32cf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_53800a4abcb77e3a0d8dc99fd24091d1c41ef8123fe16feb12ab4c6cd0ddd0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53800a4abcb77e3a0d8dc99fd24091d1c41ef8123fe16feb12ab4c6cd0ddd0ba->enter($__internal_53800a4abcb77e3a0d8dc99fd24091d1c41ef8123fe16feb12ab4c6cd0ddd0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0e11c28db5378112fad25b974efbe0beb0be22207669b109efc72e706b32cf28->leave($__internal_0e11c28db5378112fad25b974efbe0beb0be22207669b109efc72e706b32cf28_prof);

        
        $__internal_53800a4abcb77e3a0d8dc99fd24091d1c41ef8123fe16feb12ab4c6cd0ddd0ba->leave($__internal_53800a4abcb77e3a0d8dc99fd24091d1c41ef8123fe16feb12ab4c6cd0ddd0ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
