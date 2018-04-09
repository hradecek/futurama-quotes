$(function() {
    var setCharacterImg = function (characterImgUri) {
        var headStyle = $('head style[data-class="character"]');
        var style = '<style data-class="character">.fq .deco:after{background-image: url(' + characterImgUri + ');}</style>';
        if (headStyle.length) {
            headStyle.replaceWith(style)
        } else {
            $('head').append(style);
        }
    };

    var addItem = function(slitslider) {
        $.ajax({ url: '/ajax',
            success: function(response) {
                var activeQuote = $('.sl-slide').last();
                var nextOrientation = (activeQuote.attr('data-orientation') === 'vertical' || activeQuote.length === 0) ? 'horizontal' : 'vertical';
                var nextBg = activeQuote.hasClass('bg-1') ? 'bg-2' : 'bg-1';
                var item = $(
                    '<div class="sl-slide ' + nextBg + '" data-orientation="' + nextOrientation + '" ' +
                        'data-slice1-rotation="-5" data-slice2-rotation="10"' +
                        'data-slice1-scale="2" data-slice2-scale="1">' +
                        '<div class="sl-slide-inner">' +
                            '<div class="deco"></div>' +
                            '<h2>Futurama Quotes</h2>' +
                            '<blockquote><p>' + response.quote + '</p></blockquote>' +
                        '</div>' +
                    '</div>');
                setCharacterImg(response.characterImgUri);
                slitslider.add(item);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            }
        });
    };


    var slitslider = $('#slider').slitslider({});
    var Page = (function() {
        var navArrows = $('#nav-arrows');
        var init = function() {
            initEvents();
        };
        var initEvents = function() {
            navArrows.children(':first').on('click', function() {
                addItem(slitslider);
                slitslider.next();
                return false;
            });
        };
        return { init : init };
    })();

    Page.init();
    addItem(slitslider);
});
