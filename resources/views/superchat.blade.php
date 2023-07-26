<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superchat demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <div>
      {{-- <a href="/superchat">Ke Input File</a> --}}
    </div>
    <div>
      <a href="/display-data">Data Member Hololive Production</a>
    </div>
    <h2>Kalkulator Prediksi Total Penghasilan dari Superchat</h2>
    <p>Cara menggunakan :</p>
    <ul class="list-group mx-auto" style="width: 50%;">
      <li class="list-group-item">1. Masukkan angka total view pada kolom total view</li>
      <li class="list-group-item">2. Masukkan angka ccv pada kolom ccv</li>
      <li class="list-group-item">3. Prediksi total superchat akan muncul</li>
    </ul>
    <p class="text-danger">CATATAN: Mohon isi total view dan ccv nya terlebih dahulu</p>
    <h3 class="mt-3 mb-3">
      Superchat = 3.062 x10<sup>8</sup> + totalview x 5.750 x 10<sup>1</sup> + ccv x 5.246 x 10<sup>5</sup>
    </h3>
    <div>
      <p>Superchat = 3.062 x10<sup>8</sup> +
        <input type='number' name='totalview' id="totalview" min="0" oninput="validity.valid||(value='');" onChange="hitungHasilSuperchat()" placeholder="masukkan total view" /> x 5.750 x 10<sup>1</sup> +
        <input type='number' name='ccv' id="ccv" min="0" oninput="validity.valid||(value='');" onChange="hitungHasilSuperchat()" placeholder="masukkan ccv" /> x 5.246 x 10<sup>5</sup>
      </p>
    </div>
    <div>
      <p>Hasil prediksi total superchat dari perhitungan model diatas adalah Rp. <input style="border: none; color: black; font-weight: bold" disabled type="text" name="hasil" id="hasilperkalian"></p>
      <p>Keterangan:</p>
      <ul class="list-group mx-auto" style="width: 50%">
        <li class="list-group-item">Superchat: hasil prediksi pendapatan superchat dalam satuan rupiah</li>
        <li class="list-group-item">Total View: total orang yang menonton vidio live Vtuber dalam satuan angka</li>
        <li class="list-group-item">CCV: Rata-rata penonton bersamaan yang menonton siaran langsung (live streaming) dari saluran ini.</li>
      </ul>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>

      function hitungHasilSuperchat() {
        var valueIntercept = 306200000;
        var multiplierTotalView = 57.5;
        var multiplierCCV = 524600;
        var valueInputTotalView = document.getElementById('totalview').value;
        var valueInputCCV = document.getElementById('ccv').value;
        var valueHasilSuperchat = document.getElementById('hasilperkalian');

        if(valueInputTotalView == "") {
            valueHasilSuperchat.value = "";
            return false;
        }
        if(valueInputCCV == "") {
            valueHasilSuperchat.value = "";
            return false;
        }

        var hasilSuperchat = valueIntercept + (multiplierTotalView * valueInputTotalView) + (multiplierCCV * valueInputCCV);

        valueHasilSuperchat.value = hasilSuperchat.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      }
    </script>

  </body>
</html>
