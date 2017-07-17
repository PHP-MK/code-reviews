<?php

/* components/search_field.html */
class __TwigTemplate_e66776d13edfcff33ad81b04667603642abd28e4deff961c5b6e0b05ffd003bb extends Twig_Template
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
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
        echo "
</label>


<div class=\"ui fluid category search js-search-";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\">
    <div class=\"ui icon input\">
        <input type=\"text\" value=\"";
        // line 12
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array());
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"  class=\"prompt\" placeholder=\"Search... (min 3 characters)\" >
        <i class=\"search icon\"></i>
    </div>
    <div class=\"results\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "components/search_field.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "components/search_field.html", "/var/www/rocap/views/components/search_field.html");
    }
}
