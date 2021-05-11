function StartFunction() {
    $("#tempMis1").html("Yo");

    $("#tempMis2").html("testing");
}
$.ajax({
    url: "/mplsl",
    timeout : 3000
}).done(function()
{
    
    alert("donete");
}).fail(function(jqXHR, textStatus)
{
    if(textStatus === 'timeout')
    {
        alert('Failed from timeout');
    }else{
        alert(textStatus);
    }
});

