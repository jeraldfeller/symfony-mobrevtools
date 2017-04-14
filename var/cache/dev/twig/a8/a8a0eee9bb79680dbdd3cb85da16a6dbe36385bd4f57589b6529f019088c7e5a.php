<?php

/* SgDatatablesBundle:Datatable:render_functions.js.twig */
class __TwigTemplate_76cae90d94019507b395bc36969282afcbc1adcdaeef713c8d187ca96508f585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'renderFunctions' => array($this, 'block_renderFunctions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c84a997606d71e10a7ddfb39272680841fd15e4786abead6ed336db2fe0333b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c84a997606d71e10a7ddfb39272680841fd15e4786abead6ed336db2fe0333b->enter($__internal_0c84a997606d71e10a7ddfb39272680841fd15e4786abead6ed336db2fe0333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:render_functions.js.twig"));

        $__internal_6650aed4065fa96b9ce66621b67c1f8c0cd9da4061932f767a73eafb606c3c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6650aed4065fa96b9ce66621b67c1f8c0cd9da4061932f767a73eafb606c3c75->enter($__internal_6650aed4065fa96b9ce66621b67c1f8c0cd9da4061932f767a73eafb606c3c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:render_functions.js.twig"));

        // line 9
        $this->displayBlock('renderFunctions', $context, $blocks);
        
        $__internal_0c84a997606d71e10a7ddfb39272680841fd15e4786abead6ed336db2fe0333b->leave($__internal_0c84a997606d71e10a7ddfb39272680841fd15e4786abead6ed336db2fe0333b_prof);

        
        $__internal_6650aed4065fa96b9ce66621b67c1f8c0cd9da4061932f767a73eafb606c3c75->leave($__internal_6650aed4065fa96b9ce66621b67c1f8c0cd9da4061932f767a73eafb606c3c75_prof);

    }

    public function block_renderFunctions($context, array $blocks = array())
    {
        $__internal_b20ef20403f86c210802c356895f60f3b999353e7f341e87e8b02b2db21054ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20ef20403f86c210802c356895f60f3b999353e7f341e87e8b02b2db21054ec->enter($__internal_b20ef20403f86c210802c356895f60f3b999353e7f341e87e8b02b2db21054ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "renderFunctions"));

        $__internal_9d4d54a8abd12aa01514d3e19af9ed072df137d4ebef83635063db6eba33a98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4d54a8abd12aa01514d3e19af9ed072df137d4ebef83635063db6eba33a98b->enter($__internal_9d4d54a8abd12aa01514d3e19af9ed072df137d4ebef83635063db6eba33a98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "renderFunctions"));

        // line 10
        echo "var renderFunctionsAlreadyLoaded = true;

function render_boolean(data, type, row, meta, trueIcon, falseIcon, trueLabel, falseLabel) {
    if (\"\" == trueIcon && \"\" == trueLabel) {
        trueLabel = \"true\";
    }

    if (\"\" == falseIcon && \"\" == falseLabel) {
        falseLabel = \"false\";
    }

    if (data == true) {
        return \"<span class='\" + trueIcon + \"'></span> \" + trueLabel;
    } else {
        return \"<span class='\" + falseIcon + \"'></span> \" + falseLabel;
    }
}

function render_datetime(data, type, row, meta, dateFormat) {
    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "js", null, true);
        echo "\");
        return moment.unix(data.timestamp).format(dateFormat);
    } else {
        return null;
    }
}

function render_timeago(data, type, row, meta) {
    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "js", null, true);
        echo "\");
        return moment.unix(data.timestamp).fromNow();
    } else {
        return null;
    }
}

function render_progress_bar(data, type, row, meta, barClasses, min, max, label, multi) {
    if (!data) {
        return '';
    }

    var valueNow = 'aria-valuenow=\"' + data + '\"';
    var valueMin = 'aria-valuemin=\"' + min + '\"';
    var valueMax = 'aria-valuemax=\"' + max + '\"';
    var intData = parseInt(data, 10);
    var size = (intData-min)*100/(max-min);
    var classNames = 'class=\"progress-bar ';

    if (true == multi) {
        if (size <= 35) {
            classNames += 'progress-bar-success' + '\"';
        }
        if (size > 35 && size <= 70) {
            classNames += 'progress-bar-warning' + '\"';
        }
        if (size > 70) {
            classNames += 'progress-bar-danger' + '\"';
        }
    } else {
        classNames += barClasses + '\"';
    }

    var style = 'style=\"width:' + size +  '%; color: black;\"';
    var result = '<div class=\"progress\">';
        result += '<div ' + classNames;
        result += 'role=\"progressbar\"' + valueNow + ' ' + valueMin + ' ' + valueMax + ' ' + style + '>';
        if (true == label) {
            result += data;
        }
        result += '</div></div>';

    return result;
}

function render_editable_text(data, type, row, meta, colData, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    var editText = null == data ? '' : data;
    var str = colData.split(\".\").join(\"_\");
    var spanClass = \"sg-editable-\" + str;
    var result = '<span class=\"' + spanClass + '\"';
    result += 'data-pk=\"' + row.id + '\"data-type=\"text\"' + '>' + editText + '</span>';

    return result;
}

function render_editable_datetime(data, type, row, meta, colData, dateFormat, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "js", null, true);
        echo "\");
        var spanClass = \"sg-editable-\" + colData;
        var result = '<span class=\"' + spanClass + '\"';
            result += 'data-pk=\"' + row.id + '\"data-type=\"combodate\"' + '>';
            result += moment.unix(data.timestamp).format(dateFormat);
            result += '</span>';

        return result;
    } else {
        return null;
    }
}

function render_editable_boolean(data, type, row, meta, colData, trueLabel, falseLabel, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    if (\"\" == trueLabel) {
        trueLabel = \"true\";
    }

    if (\"\" == falseLabel) {
        falseLabel = \"false\";
    }

    var spanClass = \"sg-editable-\" + colData;
    var result = '<span class=\"' + spanClass + '\"';
        result += 'data-pk=\"' + row.id + '\"data-type=\"select\"' + 'data-value=\"' + data + '\"' + '>';

    if (data == true) {
        result += trueLabel;
    } else {
        result += falseLabel;
    }

    result += '</span>';

    return result;
}
";
        
        $__internal_9d4d54a8abd12aa01514d3e19af9ed072df137d4ebef83635063db6eba33a98b->leave($__internal_9d4d54a8abd12aa01514d3e19af9ed072df137d4ebef83635063db6eba33a98b_prof);

        
        $__internal_b20ef20403f86c210802c356895f60f3b999353e7f341e87e8b02b2db21054ec->leave($__internal_b20ef20403f86c210802c356895f60f3b999353e7f341e87e8b02b2db21054ec_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:render_functions.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 104,  78 => 39,  66 => 30,  44 => 10,  26 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% block renderFunctions %}
var renderFunctionsAlreadyLoaded = true;

function render_boolean(data, type, row, meta, trueIcon, falseIcon, trueLabel, falseLabel) {
    if (\"\" == trueIcon && \"\" == trueLabel) {
        trueLabel = \"true\";
    }

    if (\"\" == falseIcon && \"\" == falseLabel) {
        falseLabel = \"false\";
    }

    if (data == true) {
        return \"<span class='\" + trueIcon + \"'></span> \" + trueLabel;
    } else {
        return \"<span class='\" + falseIcon + \"'></span> \" + falseLabel;
    }
}

function render_datetime(data, type, row, meta, dateFormat) {
    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"{{ app.request.locale }}\");
        return moment.unix(data.timestamp).format(dateFormat);
    } else {
        return null;
    }
}

function render_timeago(data, type, row, meta) {
    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"{{ app.request.locale }}\");
        return moment.unix(data.timestamp).fromNow();
    } else {
        return null;
    }
}

function render_progress_bar(data, type, row, meta, barClasses, min, max, label, multi) {
    if (!data) {
        return '';
    }

    var valueNow = 'aria-valuenow=\"' + data + '\"';
    var valueMin = 'aria-valuemin=\"' + min + '\"';
    var valueMax = 'aria-valuemax=\"' + max + '\"';
    var intData = parseInt(data, 10);
    var size = (intData-min)*100/(max-min);
    var classNames = 'class=\"progress-bar ';

    if (true == multi) {
        if (size <= 35) {
            classNames += 'progress-bar-success' + '\"';
        }
        if (size > 35 && size <= 70) {
            classNames += 'progress-bar-warning' + '\"';
        }
        if (size > 70) {
            classNames += 'progress-bar-danger' + '\"';
        }
    } else {
        classNames += barClasses + '\"';
    }

    var style = 'style=\"width:' + size +  '%; color: black;\"';
    var result = '<div class=\"progress\">';
        result += '<div ' + classNames;
        result += 'role=\"progressbar\"' + valueNow + ' ' + valueMin + ' ' + valueMax + ' ' + style + '>';
        if (true == label) {
            result += data;
        }
        result += '</div></div>';

    return result;
}

function render_editable_text(data, type, row, meta, colData, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    var editText = null == data ? '' : data;
    var str = colData.split(\".\").join(\"_\");
    var spanClass = \"sg-editable-\" + str;
    var result = '<span class=\"' + spanClass + '\"';
    result += 'data-pk=\"' + row.id + '\"data-type=\"text\"' + '>' + editText + '</span>';

    return result;
}

function render_editable_datetime(data, type, row, meta, colData, dateFormat, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    if (data != null && typeof data.timestamp != \"undefined\") {
        moment.locale(\"{{ app.request.locale }}\");
        var spanClass = \"sg-editable-\" + colData;
        var result = '<span class=\"' + spanClass + '\"';
            result += 'data-pk=\"' + row.id + '\"data-type=\"combodate\"' + '>';
            result += moment.unix(data.timestamp).format(dateFormat);
            result += '</span>';

        return result;
    } else {
        return null;
    }
}

function render_editable_boolean(data, type, row, meta, colData, trueLabel, falseLabel, colIndex) {
    if (false == row.sg_datatables_editable[colIndex]) {
        return data;
    }

    if (\"\" == trueLabel) {
        trueLabel = \"true\";
    }

    if (\"\" == falseLabel) {
        falseLabel = \"false\";
    }

    var spanClass = \"sg-editable-\" + colData;
    var result = '<span class=\"' + spanClass + '\"';
        result += 'data-pk=\"' + row.id + '\"data-type=\"select\"' + 'data-value=\"' + data + '\"' + '>';

    if (data == true) {
        result += trueLabel;
    } else {
        result += falseLabel;
    }

    result += '</span>';

    return result;
}
{% endblock renderFunctions %}
", "SgDatatablesBundle:Datatable:render_functions.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/render_functions.js.twig");
    }
}
