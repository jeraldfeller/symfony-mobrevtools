<?php

/* @SgDatatables/Datatable/render_functions.js.twig */
class __TwigTemplate_124a75df4e8f5ed9fd913ff2bdd83d068a8256bfae68abd1ee688ec370004703 extends Twig_Template
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
        $__internal_e3af31d6ccfdf40b1163ac0042b2c7e220396bdaf1365ad0824c24bcf8306b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3af31d6ccfdf40b1163ac0042b2c7e220396bdaf1365ad0824c24bcf8306b47->enter($__internal_e3af31d6ccfdf40b1163ac0042b2c7e220396bdaf1365ad0824c24bcf8306b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/render_functions.js.twig"));

        $__internal_6a352ba5566881fbac51f592877d3cb862bbdd80bb40281d1ddefe2298f26d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a352ba5566881fbac51f592877d3cb862bbdd80bb40281d1ddefe2298f26d28->enter($__internal_6a352ba5566881fbac51f592877d3cb862bbdd80bb40281d1ddefe2298f26d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/render_functions.js.twig"));

        // line 9
        $this->displayBlock('renderFunctions', $context, $blocks);
        
        $__internal_e3af31d6ccfdf40b1163ac0042b2c7e220396bdaf1365ad0824c24bcf8306b47->leave($__internal_e3af31d6ccfdf40b1163ac0042b2c7e220396bdaf1365ad0824c24bcf8306b47_prof);

        
        $__internal_6a352ba5566881fbac51f592877d3cb862bbdd80bb40281d1ddefe2298f26d28->leave($__internal_6a352ba5566881fbac51f592877d3cb862bbdd80bb40281d1ddefe2298f26d28_prof);

    }

    public function block_renderFunctions($context, array $blocks = array())
    {
        $__internal_80706ffdb503d65566a91cbc888b7fa1e615fd017a2d7d4d7fb80875604a377b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80706ffdb503d65566a91cbc888b7fa1e615fd017a2d7d4d7fb80875604a377b->enter($__internal_80706ffdb503d65566a91cbc888b7fa1e615fd017a2d7d4d7fb80875604a377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "renderFunctions"));

        $__internal_500e335808dc3cc2e66a087b8aa7aa01f79183076d785622b00f2765f71b42b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500e335808dc3cc2e66a087b8aa7aa01f79183076d785622b00f2765f71b42b3->enter($__internal_500e335808dc3cc2e66a087b8aa7aa01f79183076d785622b00f2765f71b42b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "renderFunctions"));

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
        
        $__internal_500e335808dc3cc2e66a087b8aa7aa01f79183076d785622b00f2765f71b42b3->leave($__internal_500e335808dc3cc2e66a087b8aa7aa01f79183076d785622b00f2765f71b42b3_prof);

        
        $__internal_80706ffdb503d65566a91cbc888b7fa1e615fd017a2d7d4d7fb80875604a377b->leave($__internal_80706ffdb503d65566a91cbc888b7fa1e615fd017a2d7d4d7fb80875604a377b_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/render_functions.js.twig";
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
", "@SgDatatables/Datatable/render_functions.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\render_functions.js.twig");
    }
}
