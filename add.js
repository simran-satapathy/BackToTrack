function SubForm (){
    $.ajax({
        url:'https://api.apispreadsheets.com/data/P8dBH7QX1HcvIyvF/',
        type:'post',
        data:$("#myform").serializeArray(),
        success: function(){
          alert("Form Data Submitted :)")
        },
        error: function(){
          alert("There was an error :(")
        }
    });
}
function add()
{
    window.alert("Form Submitted")
    return true;
}