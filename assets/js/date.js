$( ".checkin" ).change(function() {
  $(".checkout").val($( ".checkin" ).val()+1);
});