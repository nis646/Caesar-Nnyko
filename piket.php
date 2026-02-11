<?php
$nama_kamu = "Nnyko";

$jadwal_piket = [
    "Senin" => ["Ahmad","Chayu","Ulhaq","Kynan","Zaidan","Alif","Vania","Dova"],
    "Selasa" => ["Anandira","Chessa","Finza","Tegar","Rania","Vanessa","Erel","-"],
    "Rabu" => ["Anggita","Dimas","Furan","Maharani","Silvia","Tiara","Athala","-"],
    "Kamis" => ["Aurel","Darius","Galuh","Aini","Aisyah","Zidan","Dzaky","-"],
    "Jumat" => ["Zahran","Azzahro","Nnyko","Destia","Keisha","Archuleta","Khayra","-"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Piket</title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 8px;
    text-align: center;
}
.highlight {
    background-color: yellow;
    font-weight: bold;
}
</style>
</head>
<body>

<h1>JADWAL PIKET</h1>

<table>
<tr>
    <th>Hari</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
</tr>

<?php
foreach ($jadwal_piket as $hari => $daftar_nama) {
    echo "<tr>";
    echo "<td>$hari</td>";

    foreach ($daftar_nama as $nama) {
        if ($nama == $nama_kamu) {
            echo "<td class='highlight'>$nama</td>";
        } else {
            echo "<td>$nama</td>";
        }
    }

    echo "</tr>";
}
?>

</table>

</body>
</html>
