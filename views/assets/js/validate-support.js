// cambios en el nombre
$("#name").change(() => {
  let name = $("#name").val();
  if (name) {
    $("#frm_name > input").removeClass("is-invalid");
  } else {
    $("#frm_name > input").addClass("is-invalid");
  }
});

// cambios en el establecimiento
$("#school").change(() => {
  let school = $("#school").val();
  if (school) {
    $("#frm_school > input").removeClass("is-invalid");
  } else {
    $("#frm_school > input").addClass("is-invalid");
  }
});

// cambios en el email
$("#email").change(() => {
  let email = $("#email").val();
  if (email) {
    $("#frm_email > input").removeClass("is-invalid");
  } else {
    $("#frm_email > input").addClass("is-invalid");
  }
});

// limpia los campos del formulario
function limpiar() {
  $("#name").val("");
  $("#school").val("");
  $("#email").val("");
  $("#asunto").val("");
  $("#mensaje").val("");
}

// validar campos vacios
function validar() {
  const expRegEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

  if ($("#name").val() == "") {
    $("#frm_name > input").addClass("is-invalid");
    $("#frm_name > div").html("El nombre es un campo requerido");
    $("#name").focus();

    return false;
  }

  if ($("#email").val() == "") {
    $("#frm_email > input").addClass("is-invalid");
    $("#frm_email > div").html("El email es un campo requerido");
    $("#email").focus();
    return false;
  } else if (!expRegEmail.exec($("#email").val())) {
    $("#frm_email > input").addClass("is-invalid");
    $("#frm_email > div").html("El formato del email es invalido");
    $("#email").focus();
    return false;
  }

  if ($("#school").val() == "") {
    $("#frm_school > input").addClass("is-invalid");
    $("#frm_school > div").html("El establecimiento es un campo requerido");
    $("#school").focus();

    return false;
  }

  return true;
}

// // función para enviar el formulario validado
function enviar() {
  if (validar()) {
    send();
  }
}

function send() {
  $.ajax({
    type: "POST",
    url: "./views/assets/contact.php",
    data: {
      name: $("#name").val(),
      school: $("#school").val(),
      email: $("#email").val(),
      asunto: $("#asunto").val(),
      mensaje: $("#mensaje").val(),
    },
    success: (result) => {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Gracias! Tu solicitud ha sido enviado.",
        showConfirmButton: false,
        timer: 1500,
      }).then(() => {
        limpiar();
      });
    },
  });
}
