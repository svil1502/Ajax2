function getdetails(){
    var result = $('#contact-form').serializeArray();
    $.ajax({
        type: "POST",
        url: "details.php",
        data: result,
        dataType : 'json',
        success : function (data) {
       $('#msg').append('<h3>' +data.name+"-"+ data.address + '</h3>');
        },
        error: function (){
            alert("Error");
        }

    });
}