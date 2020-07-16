$(function() {

    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function(event, currentIndex, newIndex) {
            if (newIndex === 1) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }
            if (newIndex === 2) {
                if (validaCheckbox('.category1')) {
                    $('.steps ul').addClass('step-3');
                    return true;
                } else event.preventdefault();

            } else {
                $('.steps ul').removeClass('step-3');
            }

            if (newIndex === 3) {
                $('.steps ul').addClass('step-4');
                $('.actions ul').addClass('step-last');
            } else {
                $('.steps ul').removeClass('step-4');
                $('.actions ul').removeClass('step-last');
            }
            return true;
        },
        onFinishing: function(event, currentIndex) {
            if (validaCheckbox('.category2')) {
                document.getElementById("myForm").submit();
                return true;
            } else return event.preventdefault();
        },
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function() {

        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function() {

        return $("#wizard").steps('next');

    })
    $('.backward').click(function() {
            $("#wizard").steps('previous');
        })
        // Checkbox
    $('.checkbox-circle label').click(function() {
        $('.checkbox-circle label').removeClass('active');
        $(this).addClass('active');
    })
})

function validaCheckbox(category) {
    var frm = document.querySelectorAll(category + ' input');
    var qte_minima = 6;
    var count = 0;

    //Percorre os elementos do formulário 
    for (i = 0; i < frm.length; i++) {
        if (frm[i].checked) {
            count = count + 1;
        }
    }
    if (count > (qte_minima)) {
        return true;
    } else {
        alert("Selecione pelo menos " + qte_minima + " adjetivos. ");
        return false;
    }
}