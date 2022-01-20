
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/chart.js/chart.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/quill/quill.min.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script> -->
<script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script>
  // $('.time-picker').timepicker({
  //       showMeridian: false
  //   });

    function js_lapangan() {
      var x = document.getElementById("bl_pilih_lapangan");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    $('#lama_main').on('change', function(){
    // ambil data dari elemen option yang dipilih
    const sewa = $('#lama_main option:selected').data('sewa');
    const nominal_pembayaran = $('#nominal_pembayaran option:selected').data('sewa');

    // const discount = $('#package option:selected').data('discount');

    // kalkulasi total harga
    // const totalDiscount = (sewa * discount/100)
    // const total = sewa - totalDiscount;

    // tampilkan data ke element
    $('[name=sewa]').val(`Rp ${sewa}`);
    // $('[name=discount]').val(totalDiscount);

    // $('#sewa').text(`Rp ${sewa}`);
    });


</script>

</body>

</html>
