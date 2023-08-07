// JQuery function executes when PHP finishes loading
$(document).ready(function () {
    // Hides title then fades it
    $('.title').hide().fadeIn(1000);
    
    // Adds a bounce effect to the tiles when hovered
    $('.tile').hover(function () {
        // When hovered tile, move 10px up
        $(this).animate({ marginTop: '-10px' }, 200);
    }, function () {
        // When unhovered tile, go back to normal
        $(this).animate({ marginTop: '0px' }, 200);
    });
});
