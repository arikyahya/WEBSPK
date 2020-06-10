<?php
// Bobot Topsis
$topsis_bobot1 = 30;
$topsis_bobot2 = 25;
$topsis_bobot3 = 20;
$topsis_bobot4 = 25;

// Skor tiap Alternatif (C1)
$c1_a1 = 3;
$c1_a2 = 4;
$c1_a3 = 5;

// Skor tiap Alternatif (C2)
$c2_a1 = 5;
$c2_a2 = 3;
$c2_a3 = 4;

// Skor tiap Alternatif (C3)
$c3_a1 = 3;
$c3_a2 = 2;
$c3_a3 = 5;

// Skor tiap Alternatif (C4)
$c4_a1 = 1;
$c4_a2 = 3;
$c4_a3 = 1;

// Pembobotan skor C1-C3
$skor_c1c3_1 = 1;
$skor_c1c3_2 = 2;
$skor_c1c3_3 = 3;
$skor_c1c3_4 = 4;
$skor_c1c3_5 = 5;

//Pembobotan skor C4
$skor_c4_1 = 1;
$skor_c4_2 = 1;
$skor_c4_3 = 2;

// Normalisasi Alternatif 1
$normalisasi_a1_1 = $c1_a1/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a1_2 = $c2_a1/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a1_3 = $c3_a1/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a1_4 =$c4_a1/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Alternatif 2
$normalisasi_a2_1 = $c1_a2/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a2_2 = $c2_a2/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a2_3 = $c3_a2/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a2_4 = $c4_a2/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Alternatif 3
$normalisasi_a3_1 = $c1_a3/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a3_2 = $c2_a3/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a3_3 = $c3_a3/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a3_4 = $c4_a3/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Terbobot Alternatif 1
$bobot_normalisasi_a1_1 = $normalisasi_a1_1 * $topsis_bobot1;
$bobot_normalisasi_a1_2 = $normalisasi_a1_2 * $topsis_bobot2;
$bobot_normalisasi_a1_3 = $normalisasi_a1_3 * $topsis_bobot3;
$bobot_normalisasi_a1_4 = $normalisasi_a1_4 * $topsis_bobot4;

// Normalisasi Terbobot Alternatif 2
$bobot_normalisasi_a2_1 = $normalisasi_a2_1 * $topsis_bobot1;
$bobot_normalisasi_a2_2 = $normalisasi_a2_2 * $topsis_bobot2;
$bobot_normalisasi_a2_3 = $normalisasi_a2_3 * $topsis_bobot3;
$bobot_normalisasi_a2_4 = $normalisasi_a2_4 * $topsis_bobot4;

// Normalisasi Terbobot Alternatif 3
$bobot_normalisasi_a3_1 = $normalisasi_a3_1 * $topsis_bobot1;
$bobot_normalisasi_a3_2 = $normalisasi_a3_2 * $topsis_bobot2;
$bobot_normalisasi_a3_3 = $normalisasi_a3_3 * $topsis_bobot3;
$bobot_normalisasi_a3_4 = $normalisasi_a3_4 * $topsis_bobot4;

// Menghitung Solusi Ideal Positif
$positif_1 = max($bobot_normalisasi_a1_1,$bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1);
$positif_2 = max($bobot_normalisasi_a1_2,$bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2);
$positif_3 = max($bobot_normalisasi_a1_3,$bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3);
$positif_4 = min($bobot_normalisasi_a1_4,$bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4);

// Menghitung Solusi Ideal Negatif
$negatif_1 = min($bobot_normalisasi_a1_1,$bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1);
$negatif_2 = min($bobot_normalisasi_a1_2,$bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2);
$negatif_3 = min($bobot_normalisasi_a1_3,$bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3);
$negatif_4 = max($bobot_normalisasi_a1_4,$bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4);

// Menghitung Jarak Ideal Positif
$ideal_pos_d1 = sqrt(pow(($positif_1-$bobot_normalisasi_a1_1),2)+pow(($positif_2-$bobot_normalisasi_a1_2),2)+pow(($positif_3-$bobot_normalisasi_a1_3),2)+pow(($positif_4-$bobot_normalisasi_a1_4),2));
$ideal_pos_d2 = sqrt(pow(($positif_1-$bobot_normalisasi_a2_1),2)+pow(($positif_2-$bobot_normalisasi_a2_2),2)+pow(($positif_3-$bobot_normalisasi_a2_3),2)+pow(($positif_4-$bobot_normalisasi_a2_4),2));
$ideal_pos_d3 = sqrt(pow(($positif_1-$bobot_normalisasi_a3_1),2)+pow(($positif_2-$bobot_normalisasi_a3_2),2)+pow(($positif_3-$bobot_normalisasi_a3_3),2)+pow(($positif_4-$bobot_normalisasi_a3_4),2)); 

// Menghitung Jarak Ideal Negatif
$ideal_neg_d1 = sqrt(pow(($negatif_1-$bobot_normalisasi_a1_1),2)+pow(($negatif_2-$bobot_normalisasi_a1_2),2)+pow(($negatif_3-$bobot_normalisasi_a1_3),2)+pow(($negatif_4-$bobot_normalisasi_a1_4),2));
$ideal_neg_d2 = sqrt(pow(($negatif_1-$bobot_normalisasi_a2_1),2)+pow(($negatif_2-$bobot_normalisasi_a2_2),2)+pow(($negatif_3-$bobot_normalisasi_a2_3),2)+pow(($negatif_4-$bobot_normalisasi_a2_4),2));
$ideal_neg_d3 = sqrt(pow(($negatif_1-$bobot_normalisasi_a3_1),2)+pow(($negatif_2-$bobot_normalisasi_a3_2),2)+pow(($negatif_3-$bobot_normalisasi_a3_3),2)+pow(($negatif_4-$bobot_normalisasi_a3_4),2));

// Menghitung skor akhir
$nilai_v1 = $ideal_neg_d1/($ideal_neg_d1+$ideal_pos_d1);
$nilai_v2 = $ideal_neg_d2/($ideal_neg_d2+$ideal_pos_d2);
$nilai_v3 = $ideal_neg_d3/($ideal_neg_d3+$ideal_pos_d3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOPSIS WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Soal dan Penyelesaian</h1>
  <p>TOPSIS</p> 
</div>
 
<div class="container">
  <a href="Home.php">
<button type="button" class="btn btn-primary btn-block">Home</button>
</a> 

  <div class="row">
    <div class="col-sm-4">
      <h3>Pembobotan Skor Kriteria C1,C2,C3</h3>
        <table class="table table-bordered">
                    <tr>
                        <td>Sangat Kurang</td>
                        <td><?php echo $skor_c1c3_1?></td>
                    </tr>
                    <tr>
                        <td>Kurang</td>
                        <td><?php echo $skor_c1c3_2?></td>
                    </tr>
                    <tr>
                        <td>Sedang</td>
                        <td><?php echo $skor_c1c3_3?></td>
                    </tr>
                    <tr>
                        <td>Baik</td>
                        <td><?php echo $skor_c1c3_4?></td>
                    </tr>
                    <tr>
                        <td>Sangat Baik</td>
                        <td><?php echo $skor_c1c3_5?></td>
                    </tr>
        </table>
    </div>
    <div class="col-sm-4">
      <h3>Pembobotan Skor Kriteria C4</h3>
        <table class="table table-bordered">
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Nilai</th>
                  </tr>
                <tr>
                        <td>Sangat Kurang</td>
                        <td><?php echo $topsis_bobot1?></td>
                    </tr>
                    <tr>
                        <td>Kurang</td>
                        <td><?php echo $topsis_bobot1?></td>
                    </tr>
                    <tr>
                        <td>Sedang</td>
                        <td><?php echo $topsis_bobot1?></td>
                    </tr>
                    <tr>
                        <td>Baik</td>
                        <td><?php echo $topsis_bobot1?></td>
                    </tr>
                    <tr>
                        <td>Sangat Baik</td>
                        <td><?php echo $skor_c1c3_5?></td>
                    </tr>
        </table>
      
    </div>
    <div class="col-sm-4">
      <h3>Pembobotan Skor Kriteria C1-C4</h3>
        <table class="table table-bordered">
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Nilai</th>
                  </tr>
                    <tr>
                        <td>Sangat Kurang</td>
                        <td><?php echo $topsis_bobot1?></td>
                    </tr>
                    <tr>
                        <td>Kurang</td>
                        <td><?php echo $topsis_bobot2?></td>
                    </tr>
                    <tr>
                        <td>Sedang</td>
                        <td><?php echo $topsis_bobot3?></td>
                    </tr>
                    <tr>
                        <td>Sedang</td>
                        <td><?php echo $topsis_bobot4?></td>
                    </tr>
        </table>
      
    </div>
  </div>
  <div class="row">
      <h3 class="text-center">Penyelesaian</h3>
      <h3>Normalisasi</h3>
        <table class="table table-bordered">
                    <tr class="text-center">
                        <th></th>
                        <th>Sepatu 1</th>
                        <th>Sepatu 2</th>
                        <th>Sepatu 3</th>
                    </tr>
                    <tr class="text-center">
                        <td>C1</td>
                        <td><?php echo $c1_a1?></td>
                        <td><?php echo $c1_a2?></td>
                        <td><?php echo $c1_a3?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C2</td>
                        <td><?php echo $c2_a1?></td>
                        <td><?php echo $c2_a2?></td>
                        <td><?php echo $c2_a3?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C3</td>
                        <td><?php echo $c3_a1?></td>
                        <td><?php echo $c3_a2?></td>
                        <td><?php echo $c3_a3?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C4</td>
                        <td><?php echo $c4_a1?></td>
                        <td><?php echo $c4_a2?></td>
                        <td><?php echo $c4_a3?></td>
                    </tr>              
        </table>
      <h3>Normalisasi Terbobot</h3>
        <table class="table table-bordered">
                    <tr class="text-center">
                        <th></th>
                        <th>Sepatu 1</th>
                        <th>Sepatu 2</th>
                        <th>Sepatu 3</th>
                    </tr>
                    <tr class="text-center">
                        <td>C1</td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_1)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_1)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_1)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C2</td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_2)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_2)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_2)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C3</td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_3)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_3)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_3)?></td>
                    </tr>
                    <tr class="text-center">
                        <td>C4</td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_4)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_4)?></td>
                        <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_4)?></td>
                    </tr>
        </table>
      <h3>Menentukan Solusi Ideal Positif & Negatif</h3>
        <table class="table table-bordered">
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Ideal Positif</th>
                    <th scope="col">Ideal Negatif</th>
                  </tr>
                <tr>
                        <td>C1</td>
                        <td><?php echo sprintf("%.3f", max($bobot_normalisasi_a1_1,
                        $bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1))?></td>
                        <td><?php echo sprintf("%.3f", min($bobot_normalisasi_a1_1,
                        $bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1))?></td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td><?php echo sprintf("%.3f", max($bobot_normalisasi_a1_2,
                        $bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2))?></td>
                        <td><?php echo sprintf("%.3f", min($bobot_normalisasi_a1_2,
                        $bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2))?></td>
                    </tr>
                    <tr>
                        <td>C3</td>
                        <td><?php echo sprintf("%.3f", max($bobot_normalisasi_a1_3,
                        $bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3))?></td>
                        <td><?php echo sprintf("%.3f", min($bobot_normalisasi_a1_3,
                        $bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3))?></td>
                    </tr>
                    <tr>
                        <td>C4</td>
                        <td><?php echo sprintf("%.3f", min($bobot_normalisasi_a1_4,
                        $bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4))?></td>
                        <td><?php echo sprintf("%.3f", max($bobot_normalisasi_a1_4,
                        $bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4))?></td>
                    </tr>
        </table>
      <h3>Menentukan Jarak Ideal Positif & Negatif</h3>
        <table class="table table-bordered">
                  <tr>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Jarak Ideal Positif</th>
                    <th scope="col">Jarak Ideal Negatif</th>
                  </tr>
                  <tr>
                    <td>D1</td>
                    <td><?php echo sprintf("%.3f", $ideal_pos_d1)?></td>
                    <td><?php echo sprintf("%.3f", $ideal_neg_d1)?></td>
                  </tr>
                  <tr>
                    <td>D2</td>
                    <td><?php echo sprintf("%.3f", $ideal_pos_d2)?></td>
                    <td><?php echo sprintf("%.3f", $ideal_neg_d2)?></td>
                  </tr>
                  <tr>
                    <td>D3</td>
                    <td><?php echo sprintf("%.3f", $ideal_pos_d3)?></td>
                    <td><?php echo sprintf("%.3f", $ideal_neg_d3)?></td>
                  </tr>
        </table>
      <h3>Menghitung Skor Akhir</h3>
        <table class="table table-bordered">
                  <tr>
                    <th scope="col">V</th>
                    <th scope="col">Nilai Akhir</th>
                  </tr>
                  <tr>
                    <td>V1</td>
                    <td><?php echo sprintf("%.3f", $nilai_v1)?></td>
                  </tr>
                  <tr>
                    <td>V2</td>
                    <td><?php echo sprintf("%.3f", $nilai_v2)?></td>
                  </tr>
                  <tr>
                    <td>V3</td>
                    <td style="background-color: red"><?php echo sprintf("%.3f", $nilai_v3)?></td>
                  </tr>
        </table>
  </div>
</div>
</body>
</html>