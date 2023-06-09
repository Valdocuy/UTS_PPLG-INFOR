 <?php
    $games = array(
        "Game Free fire" => 1,
        "Game Moba legends" => 1,
        "Game AOV" => 1,
        "Game PUBG" => 1
    );

    $totalJam = 0;

    foreach ($games as $game => $jam) {
        echo "Game: " . $game . "<br>";
        echo "Jam bermain: " . $jam . "<br>";
        $totalJam += $jam;
        echo "<br>";
    }

    if ($totalJam > 10) {
        $keterangan = "Kamu menghabiskan banyak waktu untuk bermain game!";
    } elseif ($totalJam > 5) {
        $keterangan = "Kamu memiliki waktu bermain game yang cukup banyak.";
    } else {
        $keterangan = "Kamu memiliki waktu bermain game yang baik.";
    }

    echo "Total jam bermain: " . $totalJam . "<br><br>";
    echo "<b>Peringatan: " . $keterangan . "</b>";
    ?>