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