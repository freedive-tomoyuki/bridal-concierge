<script type="text/javascript">
$(function(){

    var areas = {!! json_encode(areas_array()) !!};

    // --- change event of prefecture
    $('#prefecture').change(function() {
        set_area_options($(this).val(), $('#area'));
    });
    $('#prefecture2').change(function() {
        set_area_options($(this).val(), $('#area2'));
    });

    // --- areas will be changed 
    function set_area_options(prefectureId, $area) {
        $area.html('');
        areas[prefectureId].forEach(function(area) {
            $area.append($('<option>').val(area[0]).text(area[1]));
        });
    }
    // --- default set Tokyo
    set_area_options(13, $('#area'));
    set_area_options(13, $('#area2'));

    /*■■■■■■■■■■■■■■■■■■
    modal
    ■■■■■■■■■■■■■■■■■■*/
    var $blur = $('#wrapper');
    $('.modalTrigger').click(function () {
        init_modalview($(this).attr('group'));
        $('#modalArea').fadeIn();
        $blur.addClass('is-menu-open');
    });
    $('#closeModal , #modalBg').click(function () {
        $('#modalArea').fadeOut();
        $blur.removeClass('is-menu-open');
    });
    $(".tab_label").on("click", function () {
        var $th = $(this).index();
        $(".tab_label").removeClass("active");
        $(".tab_panel").removeClass("active");
        $(this).addClass("active");
        $(".tab_panel").eq($th).addClass("active");
    });

    function init_modalview(group) {
        
        var groups = JSON.parse({!! json_encode(prefecture_groups()) !!});
        g = groups[group];

        $('.modalContents h2').text(g['name']);
        $tab = $('.modalContents form div.tab');
        $tab.html('');
        

        idx = 1;
        Object.keys(g.prefectures).forEach(function(key) {
            prefecture = g.prefectures[key];

            idx2 = 1;
            $p = $('<p>');
            Object.keys(prefecture.areas).forEach(function(key) {
                area = prefecture.areas[key];
                id=idx+'_'+idx2;
                $p
                    .append('<input type="checkbox" id="'+id+'" name="areas[]" value="'+area['id']+'">')
                    .append('<label for="'+id+'" class="checkbox">'+area['name']+'</label>')
                    ;
                idx2++;
            });

            $panel = $('<div class="tab-panel">')
                .append($p)
                ;


            checked = (idx == 1) ? 'checked="checked"' : '';
            $tab
                .append('<input name="tabs" type="radio" id="tab-'+idx+'" '+checked+' class="tabs">')
                .append('<label for="tab-'+idx+'" class="tab-label">'+prefecture['name']+'</label>')
                .append($panel)
                ;
            idx++;
        });
    }
});
</script>
