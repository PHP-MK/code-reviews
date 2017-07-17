<?php

/* components/number_field.html */
class __TwigTemplate_a27ae53bf799c4e589e82d3cd897ecc1aa2a2a60f91a3f38a9c3f4db623aa729 extends Twig_Template
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


<input  value=\"";
        // line 10
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array());
        echo "\" type=\"number\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "html", null, true);
        echo "\" title=\"\" >


";
    }

    public function getTemplateName()
    {
        return "components/number_field.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "components/number_field.html", "/var/www/rocap/views/components/number_field.html");
    }
}
