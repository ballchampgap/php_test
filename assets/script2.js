//Get_GPS
window.onload = function() {
    var lat, lon = null;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            document.getElementsByName("lat")[0].value = lat;
            document.getElementsByName("lon")[0].value = lon;
            var elem = document.querySelector('.loading');
            elem.parentNode.removeChild(elem);
        });
    }



}
$(function() {
    var plantecopestsObject = $('#plantecopests');
    var datapestsObject = $('#datapests');
    // on change pest_epic
    plantecopestsObject.on('change', function() {
        var plantecopestsId = $(this).val();
        datapestsObject.html('<option value=""></option>');
        $.get('get_datapests.php?plantecopests_id=' + plantecopestsId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                datapestsObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});