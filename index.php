<?php
// MEMBUAT FUNCTION
// function penjumlahan
function penjumlahan($bil1, $bil2) // $bil1 dan $bil2 merupakan parameter untuk memasukkan sebuah nilai kedalam fungsi.
{
  $tambah = $bil1 + $bil2;
  return $tambah; // function penjumlahan akan mengembalikan sebuah nilai yaitu hasil dari penjumlahan
}

// function pengurangan
function pengurangan($bil1, $bil2) // $bil1 dan $bil2 merupakan parameter untuk memasukkan sebuah nilai kedalam fungsi.
{
  $kurang = $bil1 - $bil2;
  return $kurang; // function pengurangan akan mengembalikan sebuah nilai yaitu hasil dari pengurangan
}

// function perkalian
function perkalian($bil1, $bil2) // $bil1 dan $bil2 merupakan parameter untuk memasukkan sebuah nilai kedalam fungsi.
{
  $kali = $bil1 * $bil2;
  return $kali; // function perkalian akan mengembalikan sebuah nilai yaitu hasil dari perkalian
}

// function pembagian
function pembagian($bil1, $bil2) // $bil1 dan $bil2 merupakan parameter untuk memasukkan sebuah nilai kedalam fungsi.
{
  $bagi = $bil1 / $bil2;
  return $bagi; // function pembagian akan mengembalikan sebuah nilai yaitu hasil dari pembagian
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 6 - Wiwin Mafiroh</title>

  <!-- FILE CSS -->
  <link rel="stylesheet" href="Tugas6_WiwinMafiroh.css">
</head>

<body>
  <div class="kotak">
    <div class="kotak-judul">
      <h1>KALKULATOR SEDERHANA</h1>
    </div>

    <div class="kotak-form">
      <form action="" method="POST">
        <label for="bil1">Bilangan 1</label>
        <br>
        <input type="number" name="bil1" id="bil1" placeholder="Masukkan Bilangan 1">
        <br>
        <label for="bil2">Bilangan 2</label>
        <br>
        <input type="number" name="bil2" id="bil2" placeholder="Masukkan Bilangan 2">
        <br>
        <button type="submit" name="tambah">+</button>
        <button type="submit" name="kurang">-</button>
        <button type="submit" name="kali">*</button>
        <button type="submit" name="bagi">/</button>
        <button type="submit" name="reset">C</button>
        <br>
        <label for="hasil">Hasil</label>
        <br>
      </form>

      <?php
      // CEK APAKAH ADA NILAI YANG DIKIRIMKAN DARI FORM
      // apabila tombol tambah di klik
      if (isset($_POST["tambah"]) && $_POST["bil1"] && $_POST["bil2"]) {
        // ambil data yang dikirimkan menggunakan variabel Super Global $_POST dan simpan kedalam variabel
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        // tampilkan hasil penjumlahan
        echo "<input type='text' class='hasil' disabled value='" . penjumlahan($bil1, $bil2) . "'>";

        // apabila tombol kurang di klik
      } elseif (isset($_POST["kurang"]) && $_POST["bil1"] && $_POST["bil2"]) {
        // ambil data yang dikirimkan menggunakan variabel Super Global $_POST dan simpan kedalam variabel
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        // tampilkan hasil pengurangan
        echo "<input type='text' class='hasil' disabled value='" . pengurangan($bil1, $bil2) . "'>";

        // apabila tombol kali di klik
      } elseif (isset($_POST["kali"]) && $_POST["bil1"] && $_POST["bil2"]) {
        // ambil data yang dikirimkan menggunakan variabel Super Global $_POST dan simpan kedalam variabel
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        // tampilkan hasil perkalian
        echo "<input type='text' class='hasil' disabled value='" . perkalian($bil1, $bil2) . "'>";

        // apabila tombol bagi di klik
      } elseif (isset($_POST["bagi"]) && $_POST["bil1"] && $_POST["bil2"]) {
        // ambil data yang dikirimkan menggunakan variabel Super Global $_POST dan simpan kedalam variabel
        $bil1 = $_POST["bil1"];
        $bil2 = $_POST["bil2"];
        // tampilkan hasil pembagian
        echo "<input type='text' class='hasil' disabled value='" . pembagian($bil1, $bil2) . "'>";

        // apabila tombol reset di klik
      } elseif (isset($_POST["reset"])) {
        echo "<input type='text' class='hasil' disabled value='0'>";

        // selain dari perintah diatas
      } else {
        echo "<input type='text' class='hasil' disabled value='0'>";
      }
      ?>
    </div>
  </div>
</body>

</html>