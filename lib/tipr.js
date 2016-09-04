/*
Tipr 2.0.2
Copyright (c) 2015 Tipue
Tipr is released under the MIT License
http://www.tipue.com/tipr
*/
(function($) {
    $.fn.tipr = function(options) {
        var set = $.extend( {
            'speed'        : 200,
            'mode'         : 'bottom',
            'anim'         : 'animated'
        }, options);
        return this.each(function() {
            var tipr_cont = '.tipr_container_' + set.mode;
            var tipr_anim = set.anim;
            console.log(tipr_cont, tipr_anim);
            $(this).hover(
                function () {
                    var d_m = set.mode;
                    console.log(d_m);
                    if ($(this).attr('data-mode')) {
                        console.log($(this));
                        d_m = $(this).attr('data-mode')
                        console.log(d_m);
                        tipr_cont = '.tipr_container_' + d_m;
                        console.log(tipr_cont);
                    }
                    if ($(this).attr('data-animated')) {
                        var go_anim = 'go';
                        console.log(go_anim);
                        console.log($(this));
                        d_a = $(this).attr('data-animated')
                        console.log(d_a);
                        add_class = d_a;
                    }
                    var out = '<div class="tipr_container_' + d_m + '"><div class="tipr_point_' + d_m + ' ' + tipr_anim + ' ' + d_a  + ' ' + go_anim + '"><div class="tipr_content">' + $(this).attr('data-tip') + '</div></div></div>';
                    $(this).append(out);
                    console.log(out);
                    var w_t = $(tipr_cont).outerWidth();
                    var w_e = $(this).width();
                    var m_l = (w_e / 2) - (w_t / 2);

                    console.log(w_t, w_e, m_l);

                    $(tipr_cont).css('margin-left', m_l + 'px');
                    console.log($(tipr_cont).css('margin-left', m_l + 'px'));

                    $(this).removeAttr('title alt');
                    console.log($(this).removeAttr('title alt'));

                    //$(tipr_cont).fadeIn(set.speed);
                    //console.log($(tipr_cont).fadeIn(set.speed));
                },
                function () {
                    $(tipr_cont).remove();
                }
            );
        });
    };
})(jQuery);