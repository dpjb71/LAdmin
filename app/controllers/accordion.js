var accordion = ladmin.createController(ladmin.index, 'ladmin.accordion')
.onload(function() {
    Phink.Web.Object.getCSS('css/accordion.css');
    this.getScript('js/accordion.js', function() {
        $(".accordion").multiaccordion({defaultIcon: "ui-icon-plusthick", activeIcon: "ui-icon-minusthick"});
    });
});
