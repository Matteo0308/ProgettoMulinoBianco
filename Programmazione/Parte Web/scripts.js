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
