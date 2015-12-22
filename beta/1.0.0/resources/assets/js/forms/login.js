jQuery( function ( $ ) {
    var toggled = false;
    $( "#oLinkPassword" ).click( function () {
        toggled = !toggled;
        $( "#password" ).attr( 'type', toggled ? "text" : "password" );
        $( "#oLinkPassword svg use" ).attr( 'xlink:href', toggled ? "#shape-unlocked" : "#shape-locked" );
    } );
} );