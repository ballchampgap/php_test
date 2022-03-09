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
    var plantecoepidemicsObject = $('#plantecoepidemics');
    var dataepidemicsObject = $('#dataepidemics');
    // on change pest_epic
    plantecoepidemicsObject.on('change', function() {
        var plantecoepidemicsId = $(this).val();
        dataepidemicsObject.html('<option value=""></option>');
        $.get('get_dataepidemics.php?plantepidemic_id=' + plantecoepidemicsId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                dataepidemicsObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});