var minLengthNISN = 10;
var maxLengthNISN = 10;

var minLengthAlamat = 0;
var maxLengthAlamat = 100;

$(document).ready(function(){

      // Validasi form NISN
      $('#nis').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLengthNISN){
            $('p.validasi-nis').text('Terlalu pendek, minimal '+minLengthNISN+' karakter diperlukan.');
            $("#nis").addClass('is-invalid');
        }else if(charLength > maxLengthNISN){
            // $('p.validasi-nis').text('Terlalu panjang, maksimal '+maxLengthNISN+' karakter diperlukan.');
            // $("#nis").addClass('is-invalid');
            $(this).val(char.substring(0, maxLengthNISN));
        }else{
            $('p.validasi-nis').text('');
            $("#nis").removeClass('is-invalid');
        }
    });

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
        format: "dd/mm/yyyy"
      });

      // Validasi form Alamat
      $('#alamat').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLengthAlamat){
            $('p.validasi-alamat').text('Terlalu pendek, minimal '+minLengthAlamat+' karakter diperlukan.');
            $("#alamat").addClass('is-invalid');
        }else if(charLength > maxLengthAlamat){
            $(this).val(char.substring(0, maxLengthAlamat));
        }else{
            $('p.validasi-alamat').text('');
            $("#alamat").removeClass('is-invalid');
        }
    });


    // Konfirmasi hapus
    $('.btn-hapus').click( function(){
      var nis = $(this).attr('data-nis');
      var nama = $(this).attr('data-nama');
      var url = $(this).attr('data-url');
      // console.log(url);
      // $('#formHapusData input[name="id"]').val(url);
      $('#formHapusData').attr('action', url);
      $('#pesanHapusCustomJS').html('Anda akan menghapus nis '+nis+' atas nama '+nama+'. Lanjutkan ?')
      // $("#modalKonfirmasiLabel").html('coba ubah');
    });
});