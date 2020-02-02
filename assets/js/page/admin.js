var base_url = $('meta[name="base_url"]').attr('content');

$('body').delegate('#logout', 'click', function (event) {
  var id = $(this).data('id');
  window.location = base_url + 'logout/' + id;
});



function post_data(url, data_, table) {
  $.ajax({
    url: url,
    type: "POST",
    data: data_,
    success: function (result) {
      let response = JSON.parse(result);
      if (response.status = "sukses") {
        table.ajax.reload(null, false);
        toastr.success(response.pesan);
      }
    },
    error: function () {
      // alert("error");
      toastr.error('Error');
    }

  });
}

function input_validate(inp) {
  var u = "",
    b = "";
    // console.log(inp);
  for (let index = inp.length; index > 0; index--) {
    if (inp[index - 1].required == true && inp[index - 1].value.trim() == "") {
      b += "b";
      inp[index - 1].select();
    } else {
      b += "u";
    }
    u += "u";
  }
  if (u == b) {
    return true;
  } else {
    toastr.error("Isi semua field !");
    return false;
  }
}

function clear_input(inp) {
  for (let index = 0; index < inp.length; index++) {
    inp[index].value = "";
  }
}