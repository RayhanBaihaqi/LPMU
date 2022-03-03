// Call the dataTables jQuery plugin
$(document).ready(function() {

  var table = $('#dataTable').DataTable();

  $('.filter-satuan').change(function () {
    table.columns(1)
    .search( $(this).val() )
    .draw();
  });
  
});

$(document).ready(function() {
  var table = $('#dataTable2').DataTable();

  $('.filter-satuan').change(function () {
    table.columns(1)
    .search( $(this).val() )
    .draw();
  });
});

$(document).ready(function() {
  var table = $('#dataTable_rencana').DataTable();

  $('.filter-satuan').change(function () {
    table.columns(4)
    .search( $(this).val() )
    .draw();
  });
});

$(document).ready(function() {
  $('#dataTable3').DataTable({
    "searching": true
  });
});


    // $("document").ready(function () {

    //   $("#dataTable2").dataTable({
    //     "searching": true
    //   });

    //   //Get a reference to the new datatable
    //   var table = $('#dataTable2').DataTable();

    //   //Take the category filter drop down and append it to the datatables_filter div. 
    //   //You can use this same idea to move the filter anywhere withing the datatable that you want.
    //   $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
    //   //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
    //   //This tells datatables what column to filter on when a user selects a value from the dropdown.
    //   //https://clintmcmahon.com/add-a-custom-search-filter-to-datatables-header/
    //   //It's important that the text used here (Category) is the same for used in the header of the column to filter
    //   var categoryIndex = 0;
    //   $("#dataTable2 th").each(function (i) {
    //     if ($($(this)).html() == "ID KPI") {
    //       categoryIndex = i; return false;
    //     }
    //   });

    //   //Use the built in datatables API to filter the existing rows by the Category column
    //   $.fn.dataTable.ext.search.push(
    //     function (settings, data, dataIndex) {
    //       var selectedItem = $('#categoryFilter').val()
    //       var category = data[categoryIndex];
    //       if (selectedItem === "" || category.includes(selectedItem)) {
    //         return true;
    //       }
    //       return false;
    //     }
    //   );

    //   //Set the change event for the Category Filter dropdown to redraw the datatable each time
    //   //a user selects a new filter.
    //   $("#categoryFilter").change(function (e) {
    //     table.draw();
    //   });

    //   table.draw();
    // });