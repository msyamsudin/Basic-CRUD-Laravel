var minLengthNISN = 10;
var maxLengthNISN = 10;

var minNamaAlamat = 0;
var maxNamaAlamat = 100;

var minLahirHP = 0;
var maxLahirHP = 20;

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

      // Validasi form Nama dan Alamat
      $('.validasi-nama-alamat').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minNamaAlamat){
            $('p.validasi-alamat').text('Terlalu pendek, minimal '+minNamaAlamat+' karakter diperlukan.');
            $("#alamat").addClass('is-invalid');
        }else if(charLength > maxNamaAlamat){
            $(this).val(char.substring(0, maxNamaAlamat));
        }else{}
    });

    // Validasi form Lahir di dan Nomor Hp
    $('.validasi-lahir-hp').on('keydown keyup change', function(){
      var char = $(this).val();
      var charLength = $(this).val().length;
      if(charLength < minLahirHP){
          $('p.validasi-hp').text('Terlalu pendek, minimal '+minLahirHP+' karakter diperlukan.');
          $("#hp").addClass('is-invalid');
      }else if(charLength > maxLahirHP){
          $(this).val(char.substring(0, maxLahirHP));
      }else{}
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