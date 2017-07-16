<?php

/* components/input_field_disabled.html */
class __TwigTemplate_a7834b83deb8888baf328bb8f8f8417db906ff23699349c30a0030383fcfac2b extends Twig_Template
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


<input class=\"disabled\"
       disabled=\"disabled\"
       type=\"text\"
       value=\"";
        // line 13
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array());
        echo " \"
       name=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"
       id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"
       placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "html", null, true);
        echo "\" title=\"\" >


";
    }

    public function getTemplateName()
    {
        return "components/input_field_disabled.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  53 => 15,  49 => 14,  45 => 13,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "components/input_field_disabled.html", "/var/www/rocap/views/components/input_field_disabled.html");
    }
}
