var minLength = 10;
var maxLength = 10;

$(document).ready(function(){

      // autocomplete
      $('#search_name').keyup(function(){
        var query = $(this).val();
        if (query != '')
        {
          var _token = $('input[name="_token"]').val();
          $.ajax({
              url:"/siswa/fetch",
              method: "POST",
              data : {query:query, _token:_token},
              success : function(data)
              {
                $('#nameList').fadeIn();
                $('#nameList').html(data);
              }
          })
        }
      });

      $(document).on('click', 'li', function(){
        $('#search_name').val($(this).text());
        $('#nameList').fadeOut();
      });
      
      // Validasi form NISN
      $('#nis').on('keydown keyup change', function(){
        var char = $(this).val();
        var charLength = $(this).val().length;
        if(charLength < minLength){
            $('p.validasi-nis').text('Terlalu pendek, minimal '+minLength+' karakter diperlukan.');
            $("#nis").addClass('is-invalid');
        }else if(charLength > maxLength){
            $('p.validasi-nis').text('Terlalu panjang, maksimal '+maxLength+' karakter diperlukan.');
            $("#nis").addClass('is-invalid');
            // $(this).val(char.substring(0, maxLength));
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