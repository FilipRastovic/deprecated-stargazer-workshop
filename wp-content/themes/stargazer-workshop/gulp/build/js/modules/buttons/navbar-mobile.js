/* Open */
$("#toggle-button").click(function() {
    console.log('testarino');
    $(".overlay").addClass("overlay-open");
});

/* Close */
$(".overlay-close").click(function() {
    $(".overlay").removeClass("overlay-open");
});