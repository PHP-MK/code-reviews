<?php

/* components/form_label.html */
class __TwigTemplate_ca082de776f84b583d4feb644e0e91543ab4733831c99ccc392e3ada0e395f78 extends Twig_Template
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
            echo "\" data-variation=\"very wide small\"></i>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
        echo "
</label>";
    }

    public function getTemplateName()
    {
        return "components/form_label.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "components/form_label.html", "/var/www/rocap/views/components/form_label.html");
    }
}
