function init() {
    $navbarBtn.sideNav({
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on &lt;a&gt; clicks, useful for Angular/Meteor
        breakpoint: 1200 // Breakpoint for button collapse
    });
}
