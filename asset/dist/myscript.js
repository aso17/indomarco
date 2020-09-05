const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Data' + flashData,
        text: 'berhasil',
        type: 'success'
    });
}

function set_url(url) {
    $('#btn-yes').attr('href', url);
}
$(document).ready(function () {
    $('#daftarpersonil').DataTable();
});
$(document).ready(function () {
    $('#claster_brg').DataTable();
});
$(document).ready(function () {
    $('#claster').DataTable();
});
$(document).ready(function () {
    $('#Datatabel').DataTable();
});
