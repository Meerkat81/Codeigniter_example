/**********************
 Name: Casey Meurer
 Coding Final Project
 Purpose: Coding Final  Form Vin validation
 **********************/
"use strict";
$.fn.sendForm = function(){
    var vinInput = $('#vin').val().trim();
    var settings = {
        url: "https://vpic.nhtsa.dot.gov/api/vehicles/decodevin/"+ vinInput +"*BA?format=json",
        type: 'GET',
        dataType: 'json'
    }

    $.ajax(settings).done(function (response) {

        var breaktag = '<br>';
        var manu  = response.Results[7].Variable + ' : ' + response.Results[7].Value + breaktag;
        var model = response.Results[8].Variable + ' : ' + response.Results[8].Value + breaktag;
        var year  = response.Results[9].Variable + ' : ' + response.Results[9].Value + breaktag;
        var dis   = response.Results[73].Variable + ' : ' + response.Results[73].Value + breaktag;
        var hores = response.Results[76].Variable + ' : ' + response.Results[76].Value + breaktag;
        var outputvin = manu + model + year + dis + hores;

        $('#msg').html(outputvin);
        //console.log(outputvin)
    });
};

$.fn.clearForm =  function() {

    $('#msg').html( '<br>');
};

$.fn.validate = function() {
    var errorMessage = "";
    //get all form elements
    var vinInput = $('#vin').val().trim();


    //put input back into field for UX
    $('#vin').val(vinInput);


    //test the input string from form and store an error message
    if(vinInput === ""){
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
            $('#msg').html('Getting Vehicle Data......');
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