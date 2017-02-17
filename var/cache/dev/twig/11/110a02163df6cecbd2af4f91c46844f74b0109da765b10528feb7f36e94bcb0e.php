<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_9868de9f76804c8e33ef7e2283a4e40949a4795a7c13a554aeb91b32bbbf45a5 extends Twig_Template
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
        $__internal_f093ff636726fbc10a04e0ca4bdca0e13f1b59fe00fe35eac38b5f838c3b0fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f093ff636726fbc10a04e0ca4bdca0e13f1b59fe00fe35eac38b5f838c3b0fcb->enter($__internal_f093ff636726fbc10a04e0ca4bdca0e13f1b59fe00fe35eac38b5f838c3b0fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_411a68a0e921dc5bb2a865ecc9a093fa6b8dc2228d7e4cdb7af65d65ac683693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411a68a0e921dc5bb2a865ecc9a093fa6b8dc2228d7e4cdb7af65d65ac683693->enter($__internal_411a68a0e921dc5bb2a865ecc9a093fa6b8dc2228d7e4cdb7af65d65ac683693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_f093ff636726fbc10a04e0ca4bdca0e13f1b59fe00fe35eac38b5f838c3b0fcb->leave($__internal_f093ff636726fbc10a04e0ca4bdca0e13f1b59fe00fe35eac38b5f838c3b0fcb_prof);

        
        $__internal_411a68a0e921dc5bb2a865ecc9a093fa6b8dc2228d7e4cdb7af65d65ac683693->leave($__internal_411a68a0e921dc5bb2a865ecc9a093fa6b8dc2228d7e4cdb7af65d65ac683693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
