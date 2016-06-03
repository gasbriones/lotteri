$(document).ready(function () {
    $('.fancybox').fancybox({
        padding:'60px',
        helpers: {
            overlay: {
                locked: false
            },
            title: {
                type: 'inside'
            }
        },
        beforeLoad: function () {
            this.title = $(this.element).attr('data-caption');
        }
    });
});