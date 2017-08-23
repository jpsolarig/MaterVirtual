$('#login').modal('show');
   
$(function()
{
   $(".modal").on('click', '.btn-login',function(e)
   {
      e.preventDefault();
      
      alert(baseURL);  
      
	var _this = $(this);
	var _form = _this.closest('.modal').find('form');
	$.ajax({
            //url: baseURL+'login',
            url: baseURL,
            type: 'POST',
            dataType: 'json',
            data: _form.serializeArray()
        }) 
	
        .done(function(response){
            if (Boolean(response.result)===true) 
            {
                $("#corusu").val("");
                $('#login').modal('hide');
                       
                var uno = 1000;
                setTimeout(function(){ window.location.href = "panel";}, uno);

            }
            else
            { 
                $('.errores').text(response.mensaje); 
            }
        })
	.fail(function(response){
		console.log("error",response);
        });
    });
});

