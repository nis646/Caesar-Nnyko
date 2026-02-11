<?php
$nama_lengkap   = "Caesar Nnyko Naya Iriawan";
$nama_panggilan = "Nnyko";
$agama          = "Islam";
$tempat_lahir   = "Semarang";
$tanggal_lahir  =16;
$bulan_lahir    = "May";
$tahun_lahir    = 2010;
$alamat         = "Lempongsari 2 Rt 1 Rw 2";
$hobi           = ["Bermain Game", "Masak", "Membaca Komik"];
$skills         = [
    "HTML/CSS" => 50,
    "PHP" => 25,
    "Desain Grafis" => 80
];
$gender         = "Laki-laki";
$kewarganegaraan = "Indonesia (WNI)";
$no_wa          = "082221666695";
$email          = "caesar.naya@gmail.com";
$makanan_fav    = ["Nasi Goreng", "Indomie", "Mie ayam"];
$minuman_fav    = ["Es Teh Manis", "Kopi", "Milo"];
$foto           = "c:\Users\Lenovo\Downloads\WhatsApp Image 2026-01-08 at 23.17.47.jpeg"; // Ganti dengan link fotomu atau nama file foto
$motto_hidup    = "Jangan memandang orang sebelah mata";

$riwayat_pendidikan = [
    ["SD", "SDN Lempongsari", "2016", "2022"],
    ["SMP", "SMPN 5 Semarang", "2022", "2025"],
    ["SMK", "SMKN 8 Semarang", "2025", "Sekarang"]
];

$tahun_sekarang = date("Y");
$umur_sekarang  = $tahun_sekarang - $tahun_lahir;
$tahun_depan_10 = $tahun_sekarang + 10;
$umur_depan_10  = $umur_sekarang + 10;


$profesi_impian = "pengacara";
$tujuan_ingin   = "memberikan keadilan kepada yang benar";
$rencana_tempuh = "belajar pasal pasal mulai sekarang";

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        
        .header { text-align: center; border-bottom: 2px solid #eee; padding-bottom: 20px; margin-bottom: 20px; }
        .foto-profil { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 4px solid #3498db; }
        
        h1 { color: #2c3e50; margin: 10px 0; }
        h2 { color: #3498db; border-left: 5px solid #2c3e50; padding-left: 10px; margin-top: 30px; }
        
        .grid-info { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .info-item { background: #f8f9fa; padding: 15px; border-radius: 8px; }
        
        
        .list-hobi { list-style-type: decimal; } /* 1, 2, 3 */
        .list-makanan { list-style-type: square; } /* Persegi */
        .list-minuman { list-style-type: upper-alpha; } /* A, B, C */
        
       
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #3498db; color: white; }
        
        
        .skill-box { margin-bottom: 10px; }
        .progress-bar { background: #ddd; height: 20px; border-radius: 10px; overflow: hidden; }
        .progress-fill { background: #2ecc71; height: 100%; text-align: right; padding-right: 10px; color: white; font-size: 12px; line-height: 20px; }
        
       
        .marquee-container { background: #2c3e50; color: white; padding: 10px; border-radius: 5px; margin-top: 20px; }
        
        .btn-link { display: inline-block; background: #e74c3c; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 20px; font-weight: bold; }
        .btn-link:hover { background: #c0392b; }

        .story-box { background-color: #e8f6f3; padding: 20px; border-radius: 10px; line-height: 1.6; border: 1px dashed #1abc9c; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="<?php echo $foto; ?>" alt="Foto Profil" class="foto-profil">
        <h1><?php echo $nama_lengkap; ?></h1>
        <p><i class="fas fa-map-marker-alt"></i> <?php echo $alamat; ?> | <i class="fas fa-envelope"></i> <?php echo $email; ?></p>
        <a href="jadwal.php" class="btn-link">LIHAT JADWAL PELAJARAN & PIKET <i class="fas fa-arrow-right"></i></a>
    </div>

    <div class="marquee-container">
        <marquee direction="right" scrollamount="8"><?php echo $motto_hidup; ?></marquee>
    </div>

    <div class="grid-info">
        <div class="info-item">
            <h3><i class="fas fa-user"></i> Data Diri</h3>
            <p><strong>Nama Panggilan:</strong> <?php echo $nama_panggilan; ?></p>
            <p><strong>TTL:</strong> <?php echo "$tempat_lahir, $tanggal_lahir $bulan_lahir $tahun_lahir"; ?></p>
            <p><strong>Umur:</strong> <?php echo $umur_sekarang; ?> Tahun</p>
            <p><strong>Agama:</strong> <?php echo $agama; ?></p>
            <p><strong>Gender:</strong> <?php echo $gender; ?></p>
            <p><strong>Kewarganegaraan:</strong> <?php echo $kewarganegaraan; ?></p>
            <p><strong>No WA:</strong> <?php echo $no_wa; ?></p>
        </div>
        
        <div class="info-item">
            <h3><i class="fas fa-star"></i> Skills (Range)</h3>
            <?php foreach($skills as $nama_skill => $nilai): ?>
                <div class="skill-box">
                    <span><?php echo $nama_skill; ?></span>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: <?php echo $nilai; ?>%"><?php echo $nilai; ?>%</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h2><i class="fas fa-clock"></i> Keinginan 10 Tahun Lagi</h2>
    <div class="story-box">
        Hai namaku <strong><?php echo $nama_panggilan; ?></strong>, saat ini tahun <strong><?php echo $tahun_sekarang; ?></strong>, 
        aku adalah seorang pelajar yang berumur <strong><?php echo $umur_sekarang; ?></strong> tahun, 
        10 tahun lagi di tahun <strong><?php echo $tahun_depan_10; ?></strong>, 
        di umur <strong><?php echo $umur_depan_10; ?></strong> aku adalah seorang <strong><?php echo $profesi_impian; ?></strong>. 
        Aku ingin <strong><?php echo $tujuan_ingin; ?></strong>. 
        Rencana yang akan aku tempuh <strong><?php echo $rencana_tempuh; ?></strong>.
    </div>

    <h2><i class="fas fa-graduation-cap"></i> Riwayat Pendidikan</h2>
    <table>
        <thead>
            <tr>
                <th>Tingkat</th>
                <th>Nama Sekolah</th>
                <th>Tahun Mulai</th>
                <th>Tahun Lulus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($riwayat_pendidikan as $sekolah): ?>
            <tr>
                <td><?php echo $sekolah[0]; ?></td>
                <td><?php echo $sekolah[1]; ?></td>
                <td><?php echo $sekolah[2]; ?></td>
                <td><?php echo $sekolah[3]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="grid-info" style="margin-top: 20px;">
        <div class="info-item">
            <h3>Hobi (123)</h3>
            <ol class="list-hobi">
                <?php foreach($hobi as $h) { echo "<li>$h</li>"; } ?>
            </ol>
        </div>
        <div class="info-item">
            <h3>Makanan Favorit (Persegi)</h3>
            <ul class="list-makanan">
                <?php foreach($makanan_fav as $m) { echo "<li>$m</li>"; } ?>
            </ul>
        </div>
        <div class="info-item">
            <h3>Minuman Favorit (ABC)</h3>
            <ol class="list-minuman">
                <?php foreach($minuman_fav as $min) { echo "<li>$min</li>"; } ?>
            </ol>
        </div>
    </div>

</div>

<script>
    console.log("Halaman Biodata Dimuat");
    console.log("Nama: <?php echo $nama_panggilan; ?>");
</script>

</body>
</html>
