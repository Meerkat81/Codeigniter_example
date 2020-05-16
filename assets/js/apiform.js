/**********************
 Name: Casey Meurer
 Coding Final Project
 Purpose: Coding Final  Form Vin validation
 **********************/
"use strict";
$.fn.sendForm = function(){
    var formValues = $("form").serialize();
    var settings = {
        url: 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/1GNALDEK9FZ108495*BA?format=json',
        type: 'GET'
    }

    $.ajax(settings).done(function (response) {
        console.log(response);
    });
};

$.fn.clearForm =  function() {

    $('#vin').val ('');
    $('#msg').html( '<br>');
};

$.fn.validate = function() {
    var errorMessage = "";
    //get all form elements
    var nameInput = $('#vin').val().trim();


    //put input back into field for UX
    $('#vin').val(nameInput);


    //test the input string from form and store an error message
    if(vin === ""){
        errorMessage += "Vin cannot be empty. <br>";
    }

    return errorMessage;
}
//JQuary Send
$(document).ready(function () {
    $('#send').click(function () {
        var msgArea = $('#msg');
        var msg = $(this).validate();
        if (msg === ""){
            $('#msg').html('Sending......');
            $(this).sendForm();
            $(this).clearForm();
        } else {
            $('#msg').html(msg);
        }

    })
});



//JQuary Clear
$(document).ready(function () {
    $('#clear').click(function () {
        $(this).clearForm();
    })
});