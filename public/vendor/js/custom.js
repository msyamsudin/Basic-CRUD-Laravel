$(document).ready(function(){

      $(".btn-gender").click(function(){
        $(".gender").toggle(500);
        if($(".btn-gender").val() != "Batal")
        {
          $(".btn-gender").val("Batal");
        } else {
          $(".btn-gender").val("Ubah ?");
        }
      }); 

      $(".btn-agama").click(function(){
        $(".agama").toggle(500);
        if($(".btn-agama").val() != "Batal")
        {
          $(".btn-agama").val("Batal");
        } else {
          $(".btn-agama").val("Ubah ?");
        }
      }); 

      $( ".datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy'
      });


    // Konfirmasi hapus
    $('.btn-hapus').click( function(){
      var url = $(this).attr('data-url');
      // console.log(url);
      // $('#formHapusData input[name="id"]').val(url);
      $('#formHapusData').attr('action', url);
      
      // $("#modalKonfirmasiLabel").html('coba ubah');
    });
});