<?php

// Definisikan dataset dengan beberapa contoh data
$dataset = [
    ['Gejala 1' => 1, 'Gejala 2' => 1, 'Gejala 3' => 1, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 0, 'Gejala 7' => 0, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 0, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Karies Gigi'],
    ['Gejala 1' => 0, 'Gejala 2' => 0, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 1, 'Gejala 6' => 0, 'Gejala 7' => 0, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 0, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Abrasi Gigi'],
    ['Gejala 1' => 1, 'Gejala 2' => 1, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 1, 'Gejala 7' => 1, 'Gejala 8' => 1, 'Gejala 9' => 1, 'Gejala 10' => 1, 'Gejala 11' => 1, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 1, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 1, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Pulpitis'],
    ['Gejala 1' => 1, 'Gejala 2' => 1, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 1, 'Gejala 7' => 1, 'Gejala 8' => 1, 'Gejala 9' => 1, 'Gejala 10' => 1, 'Gejala 11' => 1, 'Gejala 12' => 1, 'Gejala 13' => 1, 'Gejala 14' => 1, 'Gejala 15' => 1, 'Gejala 16' => 1, 'Gejala 17' => 0, 'Gejala 18' => 0, 'Gejala 19' => 1, 'Gejala 20' => 0, 'Gejala 21' => 1, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Abses Gigi'],
    ['Gejala 1' => 1, 'Gejala 2' => 1, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 0, 'Gejala 7' => 1, 'Gejala 8' => 1, 'Gejala 9' => 0, 'Gejala 10' => 1, 'Gejala 11' => 1, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 1, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 1, 'Gejala 19' => 1, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 1, 'Gejala 25' => 1, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Impaksi Gigi'],
    ['Gejala 1' => 1, 'Gejala 2' => 0, 'Gejala 3' => 1, 'Gejala 4' => 1, 'Gejala 5' => 1, 'Gejala 6' => 0, 'Gejala 7' => 0, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 0, 'Gejala 19' => 0, 'Gejala 20' => 1, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Abfraksi Gigi'],
    ['Gejala 1' => 1, 'Gejala 2' => 1, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 0, 'Gejala 7' => 1, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 0, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 1, 'Gejala 22' => 1, 'Gejala 23' => 1, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'Nekrosis Pulpa'],
    ['Gejala 1' => 0, 'Gejala 2' => 0, 'Gejala 3' => 0, 'Gejala 4' => 1, 'Gejala 5' => 0, 'Gejala 6' => 1, 'Gejala 7' => 1, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 0, 'Gejala 18' => 1, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 1, 'Gejala 25' => 1, 'Gejala 26' => 0, 'Gejala 27' => 0, 'Jenis Penyakit' => 'PeriKoronitis'],
    ['Gejala 1' => 0, 'Gejala 2' => 0, 'Gejala 3' => 0, 'Gejala 4' => 0, 'Gejala 5' => 0, 'Gejala 6' => 0, 'Gejala 7' => 0, 'Gejala 8' => 0, 'Gejala 9' => 0, 'Gejala 10' => 0, 'Gejala 11' => 0, 'Gejala 12' => 0, 'Gejala 13' => 0, 'Gejala 14' => 0, 'Gejala 15' => 0, 'Gejala 16' => 0, 'Gejala 17' => 1, 'Gejala 18' => 0, 'Gejala 19' => 0, 'Gejala 20' => 0, 'Gejala 21' => 0, 'Gejala 22' => 0, 'Gejala 23' => 0, 'Gejala 24' => 0, 'Gejala 25' => 0, 'Gejala 26' => 1, 'Gejala 27' => 1, 'Jenis Penyakit' => 'Kalkulus Gigi'],
];

// Contoh gejala baru untuk prediksi
$gejalaBaru = [
    'Gejala 1' => 1,
    'Gejala 2' => 1,
    'Gejala 3' => 0,
    'Gejala 4' => 1,
    'Gejala 5' => 0,
    'Gejala 6' => 1,
    'Gejala 7' => 1,
    'Gejala 8' => 1,
    'Gejala 9' => 1,
    'Gejala 10' => 1,
    'Gejala 11' => 1,
    'Gejala 12' => 1,
    'Gejala 13' => 1,
    'Gejala 14' => 1,
    'Gejala 15' => 1,
    'Gejala 16' => 1,
    'Gejala 17' => 0,
    'Gejala 18' => 0,
    'Gejala 19' => 1,
    'Gejala 20' => 0,
    'Gejala 21' => 1,
    'Gejala 22' => 0,
    'Gejala 23' => 0,
    'Gejala 24' => 0,
    'Gejala 25' => 0,
    'Gejala 26' => 0,
    'Gejala 27' => 0,
];

function calculate_score($gejalaBaru, $record) {
    $score = 1.0; // Initialize score as 1.0 for multiplication

    foreach ($gejalaBaru as $key => $value) {
        if ($key != 'Jenis Penyakit') {
            // Multiply the score by the value of matching or non-matching
            if ($record[$key] == $value) {
                $score *= 0.111;
            } else {
                $score *= 0.107;
            }
        }
    }

    return $score;
}

$scores = [];

foreach ($dataset as $record) {
    $disease = $record['Jenis Penyakit'];
    $scores[$disease] = calculate_score($gejalaBaru, $record);
}

arsort($scores);
$predictedDisease = key($scores);

echo "Prediksi Jenis Penyakit: " . $predictedDisease . "\n";
echo "Skor: <br>";
print_r($scores);


// Menampilkan dataset untuk keperluan pengujian
// echo "Dataset: <br>";
// foreach ($dataset as $data) {
//     foreach ($data as $gejala => $nilai) {
//         echo $gejala . ": " . $nilai . ", ";
//     }
//     echo "<br>";
// }

// Contoh penggunaan gejala baru untuk prediksi
// echo "<br>Gejala Baru untuk Prediksi:<br>";
// foreach ($gejalaBaru as $gejala => $nilai) {
//     echo $gejala . ": " . $nilai . "<br>";
// }


// Melakukan prediksi
// $hasilPrediksi = prediksiKu($dataset, $gejalaBaru);
// echo "<br>";
// echo "Prediksi: " . $hasilPrediksi;

function prediksiNaiveBayes($dataset, $gejalaBaru) {
    $jumlahData = count($dataset);
    $kelasUnik = array_unique(array_column($dataset, 'Jenis Penyakit'));
    $jumlahKelas = count($kelasUnik);

    // Menghitung Probabilitas Kondisional P(Gejala|Jenis Penyakit)
    $probabilitasKondisional = [];
    // foreach ($kelasUnik as $kelas) {
        // jenis penyakit pertama karies gigi
        // looping jenis penyakit pertama
        // jika sama dengan nilai di gejala_baru maka masuk ke dalam kategori jensi karies gigi
        // jika tidak sama nilai gejalanya maka lanjut ke jenis penyakit yang lain
    // }

    // foreach ($dataset as $data) {
    //     echo "Jenis Penyakit: " . $data['Jenis Penyakit'] . "<br>";
    //     foreach ($data as $gejala => $nilai) {

    //         if ($gejala !== 'Jenis Penyakit') {
    //             echo $gejala . ": " . $nilai . "<br>";
    //         }
    //     }
    //     echo "<br>";
    // }
}

// $hasilPrediksi = prediksiNaiveBayes($dataset, $gejalaBaru);
// echo "Prediksi nyo  : " . $hasilPrediksi;






function prediksi($dataset, $gejalaBaru) {
    $kelasUnik = array_unique(array_column($dataset, 'Jenis Penyakit'));

    $hasilPrediksi = [];

    foreach ($kelasUnik as $kelas) {
        $probabilitas = hitungProbabilitasPrior($dataset, $kelas);
        
        echo "Prior untuk kelas $kelas: " . sprintf("%.9f", $probabilitas) . "<br>";
        
        foreach ($gejalaBaru as $gejala => $nilaiGejala) {
            $likelihood = hitungProbabilitasLikelihood($dataset, $gejala, $nilaiGejala, $kelas);
            echo "Likelihood untuk gejala $gejala: " . sprintf("%.9f", $likelihood) . "<br>";
            
            $probabilitas *= $likelihood;
        }
        
        $hasilPrediksi[$kelas] = sprintf("%.9f", $probabilitas);
        echo "Probabilitas untuk kelas $kelas setelah dikalikan likelihood: " . sprintf("%.9f", $probabilitas) . "<br><br>";
    }
    
    die();
    

    arsort($hasilPrediksi); // Mengurutkan probabilitas dari yang tertinggi
    $kelasPrediksi = key($hasilPrediksi); // Mengambil kelas dengan probabilitas tertinggi
    return $kelasPrediksi;
}

function hitungProbabilitasLikelihood($dataset, $gejala, $nilaiGejala, $kelas) {
    $datasetKelasIni = array_filter($dataset, function($data) use ($kelas) {
        return $data['Jenis Penyakit'] == $kelas;
    });

    $totalKelasIni = count($datasetKelasIni);
    $jumlahGejala = 0;
    foreach ($datasetKelasIni as $data) {
        if ($data[$gejala] == $nilaiGejala) {
            $jumlahGejala++;
        }
    }

    return ($jumlahGejala + 1) / ($totalKelasIni + 2); // Laplace smoothing
}

function hitungProbabilitasPrior($dataset, $kelas) {
    $totalData = count($dataset); // 9
    $jumlahKelas = array_count_values(array_column($dataset, 'Jenis Penyakit'));
    $jumlahKelasIni = $jumlahKelas[$kelas];  // 1
    return sprintf("%.3f", ($jumlahKelasIni / $totalData)); // 0.111
}

?>