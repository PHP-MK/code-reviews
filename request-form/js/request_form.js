/**
 * Created by lukasz on 03/07/2017.
 */
$(document).ready(function(){
    "use strict";
    formSetup();
    searchFieldsSetup();

    validationForm(validationRules);

    $('#vacancy_type').on('change', function(){

        excludeContractorSection();

        if($(this).val() === '4' || $(this).val() === '5') {
            includeContractorSection();
        }

    }).change();

});


function includeContractorSection() {
    "use strict";
    var source = $('#js-contractor-section').html();
    var template = Handlebars.compile(source);
    var context = {};
    $('#js-contractor-section-container').html(template(context));

    var rules = $.extend(validationRules, additionalValidationRules);

    validationForm(rules);
    formSetup();
}

function excludeContractorSection() {
    "use strict";
    $('#js-contractor-section-container').html('');
    validationForm(validationRules);
}


function formSetup() {
    "use strict";

    $('.js-form-tooltip')
        .popup({
            inline     : true,
            hoverable  : true,
            exclusive:  true,
            boundary:   $('body'),
            // position   : 'top left',
            delay: {
                show: 300,
                hide: 800
            }
        })
    ;

    $('select.dropdown')
        .dropdown()
    ;


    $('#start_date_picker').calendar({
        type: 'date'
    });




}

function searchFieldsSetup(){
    "use strict";
    $('.js-search-cost_centre').search({
        apiSettings: {
            url: 'api?search=cost_centre&query={query}'
        },
        searchFullText: false,
        fields: {
            results : 'items',
            title   : 'costcentre',
            description : 'description',
            price   : 'function'
        },
        minCharacters : 3
    })
    ;



    $('.js-search-job_location').search({
        apiSettings: {
            url: 'api?search=job_location&query={query}'
        },
        searchFullText: false,
        fields: {
            results : 'items',
            title   : 'location',
            price   : 'postalcode',
            description : 'address'
        },
        minCharacters : 3
    })
    ;
}

function validationForm(rules){
    "use strict";
return true;

    $('.js-request-form')
        .form({
            on: 'blur',
            inline: true,
            fields: rules,
            onFailure: function(formErrors, fields) {
                // if (elem == null || elem.length == 0) {
                //     elem = $('.ui.red.prompt:first').parent().find('input');
                // }

                $.each(fields, function(e) {
                    var ele = $('#' + e);
                    var fail = (!ele.val() || ele.val().length === 0);
                    if (fail) {
                        ele.focus();
                        $('html,body').animate({
                            scrollTop: ele.offset().top - ($(window).height() - ele.outerHeight(true)) / 2
                        }, 200);
                        return false;
                    }
                });
                return false;
            }
        });
}


var validationRules = {
    vacancy_type: {
        identifier  : 'vacancy_type',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },
    hiring_manager: {
        identifier  : 'hiring_manager',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    hiring_type: {
        identifier  : 'hiring_type',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    upn: {
        identifier  : 'upn',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    job_title: {
        identifier  : 'job_title',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    company_function: {
        identifier  : 'company_function',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    work_status: {
        identifier  : 'work_status',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    job_band: {
        identifier  : 'job_band',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    job_location: {
        identifier  : 'job_location',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    safety_critical: {
        identifier  : 'safety_critical',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    statutory: {
        identifier  : 'statutory',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    headcount_impact: {
        identifier  : 'headcount_impact',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    headcount_impact_explanation: {
        identifier  : 'headcount_impact_explanation',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    cost_centre: {
        identifier  : 'cost_centre',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'integer',
                prompt : '{name} must be a number'
            }
        ]
    },

    operating_expense: {
        identifier  : 'operating_expense',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    founding_explain: {
        identifier  : 'founding_explain',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    reason_for_requirement: {
        identifier  : 'reason_for_requirement',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            }
        ]
    },

    reason_for_requirement_explain: {
        identifier  : 'reason_for_requirement_explain',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    relocating_work: {
        identifier  : 'relocating_work',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[200]',
                prompt : 'Please enter at most 200 characters'
            }
        ]
    },

    review_workload: {
        identifier  : 'review_workload',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[200]',
                prompt : 'Please enter at most 200 characters'
            }
        ]
    },

    secondment_placement: {
        identifier  : 'secondment_placement',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[200]',
                prompt : 'Please enter at most 200 characters'
            }
        ]
    },

    redeployment: {
        identifier  : 'redeployment',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[200]',
                prompt : 'Please enter at most 200 characters'
            }
        ]
    },

    role_explain: {
        identifier  : 'role_explain',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    safety_impact: {
        identifier  : 'safety_impact',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    performance: {
        identifier  : 'performance',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    team_impact: {
        identifier  : 'team_impact',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    reputation_impact: {
        identifier  : 'reputation_impact',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    },

    advertise_externally: {
        identifier  : 'advertise_externally',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    }
};

var additionalValidationRules = {
    start_date: {
        identifier: 'start_date',
        rules: [
            {
                type: 'empty',
                prompt: '{name} must have a value'
            }
        ]
    },
    contract_duration: {
        identifier: 'contract_duration',
        rules: [
            {
                type: 'empty',
                prompt: '{name} must have a value (number)'
            },
            {
                type   : 'number',
                prompt : 'Please enter a valid number'
            }
        ]
    },
    minimal_pay_rate: {
        identifier: 'minimal_pay_rate',
        rules: [
            {
                type: 'empty',
                prompt: '{name} must have a value'
            },
            {
                type   : 'decimal',
                prompt : 'Please enter a valid decimal'
            }
        ]
    },
    median_pay_rate: {
        identifier: 'median_pay_rate',
        rules: [
            {
                type: 'empty',
                prompt: '{name} must have a value'
            },
            {
                type   : 'decimal',
                prompt : 'Please enter a valid decimal'
            }
        ]
    },
    contractor_name: {
        identifier  : 'contractor_name',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[200]',
                prompt : 'Please enter at most 200 characters'
            }
        ]
    },
    contractor_experience_explain: {
        identifier  : 'contractor_experience_explain',
        rules: [
            {
                type   : 'empty',
                prompt : '{name} must have a value'
            },
            {
                type   : 'minLength[10]',
                prompt : 'Please enter at least 10 characters'
            },
            {
                type   : 'maxLength[2000]',
                prompt : 'Please enter at most 2000 characters'
            }
        ]
    }
};