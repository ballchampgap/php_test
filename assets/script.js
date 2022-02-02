$(function() {
    var pest_epicObject = $('#pest_epic');
    var plantecoObject = $('#planteco');
    var data_pest_epicObject = $('#data_pest_epic');
    // on change pest_epic
    pest_epicObject.on('change', function() {
        var pest_epicId = $(this).val();
        plantecoObject.html('<option value="">--choose2--</option>');
        data_pest_epicObject.html('<option value="">--choose3--</option>');
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
        data_pest_epicObject.html('<option value="">--choose3--</option>');
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