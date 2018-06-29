$(function() {
  $.ajax({
    type: "GET",
    url: "getDataCatering/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getDataCatering/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addCatering/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateCatering",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteCatering/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id",
          title: "Id Catering",
          type: "text",
          width: 50
        },
        {
          name: "nama",
          title: "Nama",
          type: "text",
          width: 150
        },
        {
          name: "pinjam",
          title: "Pinjam",
          type: "text",
          width: 50
        },
        {
          name: "tanggal",
          title: "Tanggal Pengembalian",
          type: "text",
          width: 50
        },
        {
          name: "jumlah",
          title: "Jumlah",
          type: "text",
          width: 50
        },

        {
          name: "harga",
          title: "harga",
          type: "text",
          width: 50
        },



        { type: "control" }
      ]
    });
  });
});
