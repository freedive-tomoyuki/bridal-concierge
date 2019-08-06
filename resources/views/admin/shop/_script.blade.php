<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    var areas = {!! json_encode(areas_array()) !!};
    $('#prefecture').change(function() {
        var prefectureId = $(this).val();
        set_area_options(prefectureId);
    });

    function set_area_options(prefectureId) {
        $('#area').html('');

        areas[prefectureId].forEach(function(area) {
            $('#area').append($('<option>').val(area[0]).text(area[1]));
        });
    }
    
    
    @if (isset($shop))
        set_area_options({{ $shop->area->prefecture_id }});
        $('#area').val({{ $shop->area->id }});
    @else
        set_area_options(13);
    @endif

});
</script>
