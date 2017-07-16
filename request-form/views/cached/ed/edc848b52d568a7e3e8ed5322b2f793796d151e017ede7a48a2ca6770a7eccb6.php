<?php

/* components/select_field.html */
class __TwigTemplate_5e1c2408c35ff3437746b021559985aeec69036865d87d99496f621e11b636eb extends Twig_Template
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
        // line 1
        echo "<!--suppress XmlInvalidId -->
<label for=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\">
    ";
        // line 3
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tooltip_active", array()) == 1)) {
            // line 4
            echo "    <i class=\"circular info icon link js-form-tooltip\" data-content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tooltip", array()), "html", null, true);
            echo "\" data-variation=\"small\"></i>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
        echo "
</label>

<select name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\" title=\"\" class=\"ui fluid dropdown\">
    <option value=\"\">-- select --</option>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
            ";
            // line 14
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $context["key"])) {
                // line 15
                echo "            selected
            ";
            }
            // line 16
            echo ">
        ";
            // line 17
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "components/select_field.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  68 => 17,  65 => 16,  61 => 15,  59 => 14,  54 => 13,  50 => 12,  43 => 10,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "components/select_field.html", "/var/www/rocap/views/components/select_field.html");
    }
}
