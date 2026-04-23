function selectEvent() {
    $.ajax({
        url: 'prcd/query_select.php',
        method: 'GET',
        dataType: 'html',
        success: function(response) {
            $('#pageSelector').html(response);
        },
        error: function() {
            alert('Error al cargar los eventos');
        }
    });
}

selectEvent() ;

function irEvento() {
    var eventoId = $('#pageSelector').val();
    if (eventoId) {
        window.location.href = 'escaner.php?id=' + eventoId;
    } else {
        alert('Por favor, selecciona un evento');
    }
}
