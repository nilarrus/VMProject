/*
$( "#foo" ).on( "click", function( event ) {
    alert( "This will be displayed only once." );
    $( this ).off( event );
  });
*/

$("#show").on("click",function () {
    $("#formSpas").show();
    var random = Math.random()* (9999 - 1)+1;
    $("input[name=nsala]").val(random);
  });
    