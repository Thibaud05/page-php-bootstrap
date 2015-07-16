$(function() {
    $(document).mousemove(function( event ) {
      var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
      $( "#customJs" ).html("( event.pageX, event.pageY ) : " + pageCoords );
    });
});