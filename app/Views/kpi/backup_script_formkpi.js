<script>
    $(document).ready(function() {
        $("#kriteria").change(function() {
            if ($(this).val() == "Visi Misi Tujuan dan Strategi") {
                $('#standar1Div').show();
                $('#standar1').attr('required', '');
                $('#standar1').attr('data-error', 'This field is required.');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "Tata Pamong, Tata Kelola, dan Kerjasama") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').show();
                $('#standar2').attr('required', '');
                $('#standar2').attr('data-error', 'This field is required.');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "Mahasiswa") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error')
                $('#standar3Div').show();
                $('#standar3').attr('required', '');
                $('#standar3').attr('data-error', 'This field is required.');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            } else if ($(this).val() == "Sumber Daya Manusia") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').show();
                $('#standar4').attr('required', '');
                $('#standar4').attr('data-error', 'This field is required.');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');

            } else if ($(this).val() == "Keuangan, Sarana dan Prasarana") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').show();
                $('#standar5').attr('required', '');
                $('#standar5').attr('data-error', 'This field is required.');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');

            } else if ($(this).val() == "Pendidikan") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').show();
                $('#standar6').attr('required', '');
                $('#standar6').attr('data-error', 'This field is required.');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');

            } else if ($(this).val() == "Penelitian") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').show();
                $('#standar7').attr('required', '');
                $('#standar7').attr('data-error', 'This field is required.');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');

            } else if ($(this).val() == "Pengabdian kepada Masyarakat (PkM)") {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').show();
                $('#standar8').attr('required', '');
                $('#standar8').attr('data-error', 'This field is required.');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').show();
                $('#pic').attr('required', '');
                $('#pic').attr('data-error', 'This field is required.');
                $('#nama_picDiv').show();
                $('#nama_pic').attr('required', '');
                $('#nama_pic').attr('data-error', 'This field is required.');
                $('#ketercapaianDiv').show();
                $('#ketercapaian').attr('required', '');
                $('#ketercapaian').attr('data-error', 'This field is required.');
                $('#skorDiv').show();
                $('#skor').attr('required', '');
                $('#skor').attr('data-error', 'This field is required.');
                $('#buktiDiv').show();
                $('#bukti').attr('required', '');
                $('#bukti').attr('data-error', 'This field is required.');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');

            } else {
                $('#standar1Div').hide();
                $('#standar1').removeAttr('required');
                $('#standar1').removeAttr('data-error');
                $('#standar2Div').hide();
                $('#standar2').removeAttr('required');
                $('#standar2').removeAttr('data-error');
                $('#standar3Div').hide();
                $('#standar3').removeAttr('required');
                $('#standar3').removeAttr('data-error');
                $('#standar4Div').hide();
                $('#standar4').removeAttr('required');
                $('#standar4').removeAttr('data-error');
                $('#standar5Div').hide();
                $('#standar5').removeAttr('required');
                $('#standar5').removeAttr('data-error');
                $('#standar6Div').hide();
                $('#standar6').removeAttr('required');
                $('#standar6').removeAttr('data-error');
                $('#standar7Div').hide();
                $('#standar7').removeAttr('required');
                $('#standar7').removeAttr('data-error');
                $('#standar8Div').hide();
                $('#standar8').removeAttr('required');
                $('#standar8').removeAttr('data-error');
                $('#standar9Div').hide();
                $('#standar9').removeAttr('required');
                $('#standar9').removeAttr('data-error');
                $('#picDiv').hide();
                $('#pic').removeAttr('required');
                $('#pic').removeAttr('data-error');
                $('#nama_picDiv').hide();
                $('#nama_pic').removeAttr('required');
                $('#nama_pic').removeAttr('data-error');
                $('#ketercapaianDiv').hide();
                $('#ketercapaian').removeAttr('required');
                $('#ketercapaian').removeAttr('data-error');
                $('#skorDiv').hide();
                $('#skor').removeAttr('required');
                $('#skor').removeAttr('data-error');
                $('#buktiDiv').hide();
                $('#bukti').removeAttr('required');
                $('#bukti').removeAttr('data-error');
                $('#standarDiv').hide();
                $('#standar').removeAttr('required');
                $('#standar').removeAttr('data-error');
            }
        });
        $("#kriteria").trigger("change");
    });
</script>