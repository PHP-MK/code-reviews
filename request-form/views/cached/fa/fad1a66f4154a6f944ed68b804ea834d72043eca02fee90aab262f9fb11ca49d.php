<?php

/* request_form.html */
class __TwigTemplate_af326748afc20fb5ca3c5b202c00f68dccbedd7d8e1a024edb096a82b5c661f1 extends Twig_Template
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
        echo "<div class=\"section\">
    <div class=\"inner\">



<div class=\"ui container clean-container\">


    <form class=\"ui small form js-request-form\" action=\"\" method=\"post\" >

        <h3 class=\"ui dividing header rs-header\">Submission Details </h3>
        <div class=\"fields three equal width \">

            <div class=\"field required\">
                ";
        // line 15
        $this->loadTemplate("components/select_field.html", "request_form.html", 15)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "vacancy_type", array()))));
        // line 16
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 19
        $this->loadTemplate("components/select_field.html", "request_form.html", 19)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "hiring_manager", array()))));
        // line 20
        echo "            </div>


            <div class=\"field required\">
                ";
        // line 24
        $this->loadTemplate("components/select_field.html", "request_form.html", 24)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "hiring_type", array()))));
        // line 25
        echo "            </div>

        </div>


        <h3 class=\"ui dividing header rs-header\">Post Details</h3>

            <div class=\"fields three equal width \">

                <div class=\"field required\">
                    ";
        // line 35
        $this->loadTemplate("components/select_field.html", "request_form.html", 35)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "upn", array()))));
        // line 36
        echo "                </div>

                <div class=\"field required\">
                    ";
        // line 39
        $this->loadTemplate("components/select_field.html", "request_form.html", 39)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "job_title", array()))));
        // line 40
        echo "                </div>

                <div class=\"field required\">
                    ";
        // line 43
        $this->loadTemplate("components/select_field.html", "request_form.html", 43)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "company_function", array()))));
        // line 44
        echo "                </div>

            </div>


            <div class=\"fields two equal width \">

                <div class=\"field required\">
                    ";
        // line 52
        $this->loadTemplate("components/select_field.html", "request_form.html", 52)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "work_status", array()))));
        // line 53
        echo "                </div>

                <div class=\"field required\">
                    ";
        // line 56
        $this->loadTemplate("components/select_field.html", "request_form.html", 56)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "job_band", array()))));
        // line 57
        echo "                </div>


                <div class=\"field required\">
                    ";
        // line 61
        $this->loadTemplate("components/search_field.html", "request_form.html", 61)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "job_location", array()))));
        // line 62
        echo "                </div>

            </div>


        <div class=\"fields three equal width \">

            <div class=\"field required\">
                    ";
        // line 70
        $this->loadTemplate("components/select_field.html", "request_form.html", 70)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "safety_critical", array()))));
        // line 71
        echo "            </div>

            <div class=\"field required\">
                    ";
        // line 74
        $this->loadTemplate("components/select_field.html", "request_form.html", 74)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "statutory", array()))));
        // line 75
        echo "            </div>


            <div class=\"field required\">
                    ";
        // line 79
        $this->loadTemplate("components/select_field.html", "request_form.html", 79)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "headcount_impact", array()))));
        // line 80
        echo "            </div>

        </div>


        <div class=\"fields \">
            <div class=\"field ten wide required\">
                ";
        // line 87
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 87)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "headcount_impact_explanation", array()))));
        // line 88
        echo "            </div>
        </div>



        <h3 class=\"ui dividing header rs-header\">Founding</h3>

        <div class=\"fields two equal width \">


            <div class=\"field required\">
                ";
        // line 99
        $this->loadTemplate("components/search_field.html", "request_form.html", 99)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "cost_centre", array()))));
        // line 100
        echo "            </div>


            <div class=\"field required\">
                ";
        // line 104
        $this->loadTemplate("components/select_field.html", "request_form.html", 104)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "operating_expense", array()))));
        // line 105
        echo "            </div>

        </div>


        <div class=\"fields \">
            <div class=\"field ten wide required\">

                ";
        // line 113
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 113)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "founding_explain", array()))));
        // line 114
        echo "
            </div>
        </div>


        <h3 class=\"ui dividing header rs-header\">Reason for requirement</h3>
        <div class=\"fields two equal width \">

            <div class=\"field required\">
                ";
        // line 123
        $this->loadTemplate("components/select_field.html", "request_form.html", 123)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "reason_for_requirement", array()))));
        // line 124
        echo "            </div>

            <div class=\"field\">
                ";
        // line 127
        $this->loadTemplate("components/input_field.html", "request_form.html", 127)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "person_replacing", array()))));
        // line 128
        echo "            </div>

        </div>


        <div class=\"fields \">
            <div class=\"field ten wide required\">
                ";
        // line 135
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 135)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "reason_for_requirement_explain", array()))));
        // line 136
        echo "            </div>
        </div>



<section id=\"js-contractor-section-container\" ></section>
        <script id=\"js-contractor-section\" type=\"text/x-handlebars-template\">
                <h3 class=\"ui dividing header rs-header\">Contractor and contractor extensions only (day rate)</h3>


                <div class=\"fields three equal width \">

                    <div class=\"field required\">
                        ";
        // line 149
        $this->loadTemplate("components/calendar_field.html", "request_form.html", 149)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "start_date", array()))));
        // line 150
        echo "                    </div>

                    <div class=\"field required\">
                        ";
        // line 153
        $this->loadTemplate("components/calendar_field.html", "request_form.html", 153)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "start_date", array()))));
        // line 154
        echo "                    </div>

                    <div class=\"field\">
                        ";
        // line 157
        $this->loadTemplate("components/input_field_disabled.html", "request_form.html", 157)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "contract_duration", array()))));
        // line 158
        echo "                    </div>

                </div>


                <div class=\"fields two equal width \">


                    <div class=\"field required\">
                        ";
        // line 167
        $this->loadTemplate("components/input_field.html", "request_form.html", 167)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "minimal_pay_rate", array()))));
        // line 168
        echo "
                    </div>

                    <div class=\"field\">
                        ";
        // line 172
        $this->loadTemplate("components/input_field.html", "request_form.html", 172)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "median_pay_rate", array()))));
        // line 173
        echo "                    </div>

                </div>


                <div class=\"fields \">
                    <div class=\"field ten wide required\">
                        ";
        // line 180
        $this->loadTemplate("components/input_field.html", "request_form.html", 180)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "contractor_name", array()))));
        // line 181
        echo "                    </div>
                </div>


                <div class=\"fields \">
                    <div class=\"field ten wide required\">
                        ";
        // line 187
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 187)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "contractor_experience_explain", array()))));
        // line 188
        echo "                    </div>
                </div>
        </script>


        <h3 class=\"ui dividing header rs-header\">Alternatives to recruitment considered</h3>
        <div class=\"fields two equal width \">

            <div class=\"field required\">
                ";
        // line 197
        $this->loadTemplate("components/input_field.html", "request_form.html", 197)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "relocating_work", array()))));
        // line 198
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 201
        $this->loadTemplate("components/input_field.html", "request_form.html", 201)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "review_workload", array()))));
        // line 202
        echo "            </div>

        </div>

        <div class=\"fields two equal width \">

            <div class=\"field required\">
                ";
        // line 209
        $this->loadTemplate("components/input_field.html", "request_form.html", 209)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "secondment_placement", array()))));
        // line 210
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 213
        $this->loadTemplate("components/input_field.html", "request_form.html", 213)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "redeployment", array()))));
        // line 214
        echo "            </div>

        </div>


        <h3 class=\"ui dividing header rs-header\">Business justification </h3>
        <div class=\"fields two equal width\">

            <div class=\"field required\">
                ";
        // line 223
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 223)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "role_explain", array()))));
        // line 224
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 227
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 227)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "safety_impact", array()))));
        // line 228
        echo "            </div>

        </div>

        <div class=\"fields two equal width\">

            <div class=\"field required\">
                ";
        // line 235
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 235)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "performance", array()))));
        // line 236
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 239
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 239)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "team_impact", array()))));
        // line 240
        echo "            </div>

        </div>


        <div class=\"fields two equal width\">

            <div class=\"field required\">
                ";
        // line 248
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 248)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "reputation_impact", array()))));
        // line 249
        echo "            </div>

            <div class=\"field required\">
                ";
        // line 252
        $this->loadTemplate("components/textarea_field.html", "request_form.html", 252)->display(array_merge($context, array("field" => $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "field", array()), "advertise_externally", array()))));
        // line 253
        echo "            </div>

        </div>

        <input type=\"hidden\" name=\"csr_token\" value=\" ";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "csr_token", array()), "value", array()), "html", null, true);
        echo " \" />


        <button class=\"ui button blue\" type=\"submit\">Submit</button>

        <div class=\"ui error message\"></div>
    </form>

</div>



</div>
</div>";
    }

    public function getTemplateName()
    {
        return "request_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 257,  379 => 253,  377 => 252,  372 => 249,  370 => 248,  360 => 240,  358 => 239,  353 => 236,  351 => 235,  342 => 228,  340 => 227,  335 => 224,  333 => 223,  322 => 214,  320 => 213,  315 => 210,  313 => 209,  304 => 202,  302 => 201,  297 => 198,  295 => 197,  284 => 188,  282 => 187,  274 => 181,  272 => 180,  263 => 173,  261 => 172,  255 => 168,  253 => 167,  242 => 158,  240 => 157,  235 => 154,  233 => 153,  228 => 150,  226 => 149,  211 => 136,  209 => 135,  200 => 128,  198 => 127,  193 => 124,  191 => 123,  180 => 114,  178 => 113,  168 => 105,  166 => 104,  160 => 100,  158 => 99,  145 => 88,  143 => 87,  134 => 80,  132 => 79,  126 => 75,  124 => 74,  119 => 71,  117 => 70,  107 => 62,  105 => 61,  99 => 57,  97 => 56,  92 => 53,  90 => 52,  80 => 44,  78 => 43,  73 => 40,  71 => 39,  66 => 36,  64 => 35,  52 => 25,  50 => 24,  44 => 20,  42 => 19,  37 => 16,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "request_form.html", "/var/www/rocap/views/request_form.html");
    }
}
