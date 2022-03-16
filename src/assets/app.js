/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

const $ = require('jquery');
require('bootstrap');

$(document).ready(function () {
    $(document).off("click", "#calculator_form_Reset").on("click", "#calculator_form_Reset", function (e) {
        $("#calculator_form_operand1").val("0");
        $("#calculator_form_operand2").val("0");
        $("#calculator_result").val("0");
        $("#calculator_form_operator option[value='+']").attr("selected", true);
    })
})