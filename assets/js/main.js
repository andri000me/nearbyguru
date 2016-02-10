$(document).ready(function ()
{
    $('#input').click(function () {
        var jumlah_baris = $('#sejarah tbody').attr('aria-data');
        var jenjang_pendidikan = $('#jenjang_pendidikan').val();
        var instansi_pendidikan = $('#instansi_pendidikan').val();
        var data =
                "<tr id='"+ instansi_pendidikan + "'>" +
                "<td><input type='text' name='jenjang_pendidikan[]' value='" + jenjang_pendidikan + "'/></td>" +
                "<td><input type='text' name='instansi_pendidikan[]' value='" + instansi_pendidikan + "'/></td>" +
                "<td><button type='button' onclick='$(this).parent().parent().remove()'>Hapus</button></td>" +
                "</tr>"
                ;
        if (jumlah_baris <= 0) {
            $('#sejarah tbody').html(data);
        } else {
            $('#sejarah tbody').append(data);
        }
        jumlah_baris++;
        $('#sejarah tbody').attr('aria-data',jumlah_baris);

    });
    $('#inputPengalaman').click(function () {
        var jumlah_baris_pengalaman = $('#pengalaman tbody').attr('aria-data');
        var nama_pengalaman = $('#nama_pengalaman').val();
        var data_pengalaman =
                "<tr id='"+ nama_pengalaman + "'>" +
                "<td><input type='text'   name='nama_pengalaman[]' value='" + nama_pengalaman + "'/></td>" +
                "<td><button type='button' onclick='$(this).parent().parent().remove()'>Hapus</button></td>" +
                "</tr>"
                ;
        if (jumlah_baris_pengalaman <= 0) {
            $('#pengalaman tbody').html(data_pengalaman);
        } else {
            $('#pengalaman tbody').append(data_pengalaman);
        }
        jumlah_baris_pengalaman++;
        $('#pengalaman tbody').attr('aria-data',jumlah_baris_pengalaman);

    });
    $('#inputKualifikasi').click(function () {
        var jumlah_baris_kualifikasi = $('#kualifikasi tbody').attr('aria-data');
        var nama_kualifikasi = $('#nama_kualifikasi').val();
        var tambahan_kualifikasi = $('#tambahan_kualifikasi').val();
        var data_kualifikasi =
                "<tr id='"+ nama_kualifikasi + "'>" +
                "<td><input type='text'   name='nama_kualifikasi[]' value='" + nama_kualifikasi + "'/></td>" +
                "<td><input type='text'   name='tambahan_kualifikasi[]' value='" + tambahan_kualifikasi + "'/></td>" +
                "<td><button type='button' onclick='$(this).parent().parent().remove()'>Hapus</button></td>" +
                "</tr>"
                ;
        if (jumlah_baris_kualifikasi <= 0) {
            $('#kualifikasi tbody').html(data_kualifikasi);
        } else {
            $('#kualifikasi tbody').append(data_kualifikasi);
        }
        jumlah_baris_kualifikasi++;
        $('#kualifikasi tbody').attr('aria-data',jumlah_baris_kualifikasi);

    });
    $('#inputJadwal').click(function () {
        var jumlah_baris_jadwal = $('#jadwal tbody').attr('aria-data');
        var hari_ketersediaan = $('#hari_ketersediaan').val();
        var waktu_ketersediaan = $('#waktu_ketersediaan').val();
        var data_jadwal =
                "<tr id='"+ hari_ketersediaan + "'>" +
                "<td><input type='text'   name='hari_ketersediaan[]' value='" + hari_ketersediaan + "'/></td>" +
                "<td><input type='time'   name='waktu_ketersediaan[]' value='" + waktu_ketersediaan + "'/></td>" +
                "<td><button type='button' onclick='$(this).parent().parent().remove()'>Hapus</button></td>" +
                "</tr>"
                ;
        if (jumlah_baris_jadwal <= 0) {
            $('#jadwal tbody').html(data_jadwal);
        } else {
            $('#jadwal tbody').append(data_jadwal);
        }
        jumlah_baris_jadwal++;
        $('#jadwal tbody').attr('aria-data',jumlah_baris_jadwal);

    });
     $('#inputHargaMentor').click(function () {
        var jumlah_baris_hargaMentor = $('#hargaMentor tbody').attr('aria-data');
        var  tingkat_mapel= $('#tingkat_mapel').val();
        var  nama_mapel= $('#nama_mapel').val();
        var  harga= $('#harga').val();
        var data =
                "<tr id='"+ tingkat_mapel + "'>" +
                "<td><input type='text' name='tingkat_mapel[]' value='" + tingkat_mapel + "'/></td>" +
                "<td><input type='text' name='nama_mapel[]' value='" + nama_mapel + "'/></td>" +
                "<td><input type='text' name='harga[]' value='" + harga + "'/></td>" +
                "<td><button type='button' onclick='$(this).parent().parent().remove()'>Hapus</button></td>" +
                "</tr>"
                ;
        if (jumlah_baris_hargaMentor <= 0) {
            $('#hargaMentor tbody').html(data);
        } else {
            $('#hargaMentor tbody').append(data);
        }
        jumlah_baris_hargaMentor++;
        $('#hargaMentor tbody').attr('aria-data',jumlah_baris_hargaMentor);

    });
});