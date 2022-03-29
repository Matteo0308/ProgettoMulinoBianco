/*
$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "centrale.php",
    success: function (data) {
      console.log("Aggiornamento centrale");
    },
  });
});
*/
function ordina(id) {
  $.ajax({
    type: "GET",
    url: "ordina.php",
    data: {
      id: id,
    },
    success: function (data) {
      console.log(data);
    },
  });
}
