$(document).ready(function() {
    //triggers the function whenever the form is submitted
    $("form.ajax-form" ).submit(function(event) {
        //prevents the page to load 
        event.preventDefault();
        //getting the attributes in the form tag
        var jobForm = $(this), url = jobForm.attr('action'), type = jobForm.attr('method'), data = {};
        //finding all  elements with name attribute within the form and iterating each element
        jobForm.find('[name]').each(function(i, value){
            //saving all the values of the form in the data array
            var element = $(this), name = element.attr('name'), value = element.val();
            data[name] = value;
        });
        $.ajax({
            url : url, type: type, data : data, success: function(response){
                //logs what in the postajo.inc.php
                console.log(response);
            }
        });
      });
});