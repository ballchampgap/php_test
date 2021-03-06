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
    // ไลน์ login & liff

    function runApp() {
        liff.getProfile().then(profile => {
            document.getElementById("pictureUrl").src = profile.pictureUrl;
            document.getElementById("displayName").innerHTML = '<b>ชื่อผู้แจ้ง:</b> ' + profile.displayName;
            document.getElementsByName("pname")[0].value = profile.displayName;
        }).catch(err => console.error(err));
    }
    liff.init({ liffId: "1656912027-kL299Wg7" }, () => {
        if (liff.isLoggedIn()) {
            runApp()
        } else {
            liff.login();
        }
    }, err => console.error(err.code, error.message));

}
$(function() {
    var pest_epicObject = $('#pest_epic');
    var plantecoObject = $('#planteco');
    var data_pest_epicObject = $('#data_pest_epic');
    // on change pest_epic
    pest_epicObject.on('change', function() {
        var pest_epicId = $(this).val();
        plantecoObject.html('<option value=""></option>');
        data_pest_epicObject.html('<option value=""></option>');
        $.get('get_planteco.php?pest_epic_id=' + pest_epicId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                plantecoObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
    // on change planteco
    plantecoObject.on('change', function() {
        var plantecoId = $(this).val();
        data_pest_epicObject.html('<option value=""></option>');
        $.get('get_data_pest_epic.php?planteco_id=' + plantecoId, function(data) {
            var result = JSON.parse(data);
            $.each(result, function(index, item) {
                data_pest_epicObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});