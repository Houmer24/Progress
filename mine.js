 $("#sub").click( function() {
 $.post( $("#add_stude").attr("action"),
         $("#add_stude :input").serializeArray(),
         function(info){ $("#result").html(info);
   });
clearInput();
});
 
$("#add_stude").submit( function() {
  return false;
});
function clearInput() {
    $("#add_stude :input").each( function() {
       $(this).val('');
    });
} 