<script type="text/javascript">
$(function(){

    $('.shop_check').change(function() {
        shopId = $(this).val();
        if ($(this).prop('checked')) {
            $('#date_' + shopId).show();
        } else {
            $('#date_' + shopId).hide();
        }
    });

    $('.close_button').click(function() {
        shopId = $(this).val();

        $('#shop_check_' + shopId).prop('checked', false).change();
    });

    $('.visit_date').change(function() {
        // 営業時間テーブル
        tt = [];
        @php $cnt = 0 @endphp
        @foreach ($shops as $s)
            tt[{{ $cnt++ }}] = {!! visit_time($s->id) !!};
        @endforeach

        cnt = parseInt($(this).attr('id').split('_')[2]);
        day_of_week = $(this).val().split('(')[1].split(')')[0];

        $visit_time = $('#visit_time_' + cnt);
        $visit_time.html('');
        idx = (day_of_week == '土' || day_of_week == '日') ? 1 : 2;
        for(i=0; i<tt[cnt][idx].length; i++) {
            $visit_time.append($('<option>').val(tt[cnt][0] + "|" + tt[cnt][idx][i]).text(tt[cnt][idx][i]));
        }
    });
    $('.visit_date').trigger('change');

    // Show fields if checked
    $('.shop_check').each(function(index, el) {
        shopId = $(el).val();
        if ($(el).prop('checked')) {
            $('#date_' + shopId).show();
        } else {
            $('#date_' + shopId).hide();
        }
    });

    // show more
    $('#more_button').click(function() {
        $(this).hide();
        $('.shop_detail').show();

    });

    // privacy policy
    $('#agree').change(function() {
        $('#submit').prop("disabled", !$(this).prop('checked'));
    });
    $('#agree').trigger('change');
});
</script>
