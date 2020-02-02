var table;
var base_url = $('meta[name="base_url"]').attr('content');
var token = $('meta[name="__token"]').attr('content');
var id = $("#idpasien").val();
$(document).ready(function () {

    //datatables
    table = $('#list_diagnosa').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": base_url + 'C_api/list_diagnosa/' + id ,
            "type": "POST"
        },

        "columnDefs": [{
                "sClass": "text-center",
                "targets": [0],
                "orderable": false
            },
            {
                "targets": [1],
                "orderable": true
            },
            {
                "sClass": "text-center",
                "targets": [2],
                "orderable": true
            },
        ],
    });
});


function tambah() {
    var allInputs = $("[id^=in_]");
    if (input_validate(allInputs) == true) {
        var data = {
            id_pasien: allInputs[0].value,
            kode_diagnosa: allInputs[1].value,
            deskripsi: allInputs[2].value,
            // instalasi: allInputs[3].value,
            status: allInputs[3].value,
            kasus: allInputs[4].value,
            // tanggal_diagnosa: allInputs[6].value,
            creator: allInputs[5].value,
            editor: allInputs[6].value,
        }
        post_data(base_url + "pemeriksaan/diagnosaadd", data, table);
        clear_input(allInputs);
        getdata();
    }
}

$('body').delegate('#btntambah', 'click', function (argument) {
    getdata();
})

function getdata(){
    var id = $("#idpasien").val();
    var creator = $("#creator").val();
    $("#in_idpasien").val(id);
    $("#in_creator").val(creator);
    // $("#in_editor").val(creator);
    // alert(creator);
}

function simpan() {
    var allInputs = $("input[id^=ed]");
    var id = $('#id_data').val();
    if (input_validate(allInputs) == true) {
        var data = {
            id: id,
            kode_diagnosa: allInputs[0].value,
            deskripsi: allInputs[1].value,
            // instalasi: allInputs[2].value,
            status: allInputs[2].value,
            kasus: allInputs[3].value,
            // tanggal_diagnosa: allInputs[5].value,
            creator: allInputs[4].value,
            editor: allInputs[5].value,
        }
        post_data(base_url + "pemeriksaan/diagnosaedit", data, table);
        $('#modal-edit').modal('hide');
        clear_input(allInputs);
    }
}

$('body').delegate('#hapus', 'click', function (event) {
    var id = $(this).data('id');
    var data = {
        id: id,
    }
    post_data(base_url + "pemeriksaan/diagnosadelete", data, table);
})

$('body').delegate('#edit', 'click', function (event) {
    var id = $(this).data('id');
    $.ajax({
        dataType: "json",
        url: base_url + "c_api/get_row/diagnosa/" + id,
        success: function (data) {
            $('#id_data').val(data.id);
            $('#ed_kode').val(data.kode_diagnosa);
            $('#ed_deskripsi').val(data.deskripsi);
            $('#ed_instalasi').val(data.instalasi);
            $('#ed_status').val(data.status);
            $('#ed_kasus').val(data.kasus);
            $('#ed_tanggal_diagnosa').val(data.tanggal_diagnosa);
            $('#ed_creator').val(data.creator);
            $('#ed_editor').val(data.editor);
        }
    })
    $('#modal-edit').modal('show');
    $('#ed_diagnosa').select();
})

$('body').delegate('#nempo', 'click', function (event) {
    var id = $(this).data('id');
    $("#gambarna").attr("src", id);
    $('#modal-nempogambar').modal('show');
})