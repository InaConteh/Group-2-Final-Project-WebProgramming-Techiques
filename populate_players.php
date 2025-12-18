<?php
include 'db_connect.php';

$players = [
    [
        'name' => 'Augustus Kargbo',
        'club' => 'Blackburn Rovers (EFL Championship)',
        'position' => 'Forward',
        'age' => 25,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Augustus_Kargbo_2021.jpg/220px-Augustus_Kargbo_2021.jpg',
        'intl_stats' => '~24 caps, ~5 goals'
    ],
    [
        'name' => 'Alhassan Koroma',
        'club' => 'Baniyas (UAE Pro League)',
        'position' => 'Winger',
        'age' => 24,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://img.relevo.com/relevo/2023/07/20/alhassan-koroma-sierra-leona-64b9101666e85c884803306d.jpg',
        'intl_stats' => '~22 caps, ~3 goals'
    ],
    [
        'name' => 'Mustapha Bundu',
        'club' => 'Hannover 96 (2.Bundesliga)',
        'position' => 'Forward',
        'age' => 27,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://img.uefa.com/imgml/TP/players/39/2020/324x324/250165487.jpg',
        'intl_stats' => '~22 caps, ~4 goals'
    ],
    [
        'name' => 'Amadou Bakayoko',
        'club' => 'Hokkaido Consadole Sapporo (J1 League)',
        'position' => 'Forward',
        'age' => 28,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://tmssl.akamaized.net/images/foto/galerie/amadou-bakayoko-bolton-wanderers-2022-1663152632-92736.jpg',
        'intl_stats' => '~16 caps, ~4 goals'
    ],
    [
        'name' => 'Ibrahim Sesay',
        'club' => 'Alashkert (Armenia)',
        'position' => 'Goalkeeper',
        'age' => 21,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/85338.jpg',
        'intl_stats' => 'Sierra Leone debut 2021'
    ],
    [
        'name' => 'Yusuf Sesay',
        'club' => 'Kelantan TRW (Malaysia Super League)',
        'position' => 'Centre-back',
        'age' => 24,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://i.ytimg.com/vi/6f5B5S7Xf1o/maxresdefault.jpg',
        'intl_stats' => '~3 caps'
    ],
    [
        'name' => 'Alusine Koroma',
        'club' => 'Orihuela (Spain)',
        'position' => 'Attacking Midfielder',
        'age' => 24,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.orihuelaclubdefutbol.com/wp-content/uploads/2023/08/ALUSINE-KOROMA.jpg',
        'intl_stats' => '~12 caps'
    ],
    [
        'name' => 'Emmanuel Samadia',
        'club' => 'Hartford Athletic (USL Championship)',
        'position' => 'Defender',
        'age' => 23,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.hartfordathletic.com/wp-content/uploads/sites/11/2024/01/Samadia_Emmanuel-1-scaled.jpg',
        'intl_stats' => '~6 caps'
    ],
    [
        'name' => 'Sullay Kaikai',
        'club' => 'Cambridge United (EFL League One)',
        'position' => 'Winger/Forward',
        'age' => 29,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://tmssl.akamaized.net/images/foto/galerie/sullay-kaikai-blackpool-fc-2021-1620743639-63300.jpg',
        'intl_stats' => 'Regular national call-ups'
    ],
    [
        'name' => 'Osman Kakay',
        'club' => 'FC Košice (Slovakia)',
        'position' => 'Right-back',
        'age' => 27,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://tmssl.akamaized.net/images/foto/galerie/osman-kakay-queens-park-rangers-2022-1663152594-92735.jpg',
        'intl_stats' => 'National team squad'
    ],
    [
        'name' => 'Nathaniel Jalloh',
        'club' => 'FC Kallon (Sierra Leone)',
        'position' => 'Right back',
        'age' => 22,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/88344.jpg',
        'intl_stats' => 'Intl appearances'
    ],
    [
        'name' => 'Momoh Kamara',
        'club' => 'Minnesota United 2 (MLS2)',
        'position' => 'Midfielder',
        'age' => 20,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.mnufc.com/wp-content/uploads/sites/12/2023/03/Kamara-Momoh.jpg',
        'intl_stats' => 'Intl appearances'
    ],
    [
        'name' => 'Abu “Diaby” Dumbuya',
        'club' => 'Żabbar St. Patrick (Malta)',
        'position' => 'Defensive Midfielder',
        'age' => 26,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/79184.jpg',
        'intl_stats' => 'Intl appearances'
    ],
    [
        'name' => 'Saidu Fofanah',
        'club' => 'Jetisu Taldykorgan (Kazakhstan)',
        'position' => 'Centre Midfield',
        'age' => 26,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/81934.jpg',
        'intl_stats' => 'Intl call-ups'
    ],
    [
        'name' => 'Alpha Turay',
        'club' => 'El Gouna FC (Egypt)',
        'position' => 'Defender',
        'age' => 22,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/88852.jpg',
        'intl_stats' => 'Intl caps'
    ],
    [
        'name' => 'John Bilili Sesay',
        'club' => 'Bhantal FC',
        'position' => 'Midfielder',
        'age' => 23,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/89654.jpg',
        'intl_stats' => 'Intl appearances'
    ],
    [
        'name' => 'Mohamed Kabba',
        'club' => 'East End Lions Freetown',
        'position' => 'Midfielder',
        'age' => 21,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/88343.jpg',
        'intl_stats' => 'Intl appearances'
    ],
    [
        'name' => 'Alie Conteh',
        'club' => 'East End Lions',
        'position' => 'Forward',
        'age' => 21,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/88342.jpg',
        'intl_stats' => 'Sierra Leone national team appearances'
    ],
    [
        'name' => 'Mohamed “Mo” Kamara',
        'club' => 'East End Lions',
        'position' => 'Goalkeeper',
        'age' => 25,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://www.national-football-teams.com/img/players/74324.jpg',
        'intl_stats' => 'Sierra Leone national team appearances'
    ],
    [
        'name' => 'Alex Bangura',
        'club' => 'Middlesbrough (EFL)',
        'position' => 'Left-back',
        'age' => 25,
        'nationality' => 'Sierra Leone',
        'image_url' => 'https://tmssl.akamaized.net/images/foto/galerie/alex-bangura-sc-cambuur-2022-1663152636-92737.jpg',
        'intl_stats' => 'Sierra Leone caps'
    ],
];

echo "Populating players...<br>";

foreach ($players as $p) {
    $stmt = $conn->prepare("INSERT INTO players (name, club, position, age, nationality, image_url, intl_stats, market_status, market_value, contract_start, contract_end) VALUES (?, ?, ?, ?, ?, ?, ?, 'For Sale', ?, '2024-01-01', '2026-06-30')");
    $value = rand(100000, 2000000); // Default market value
    $stmt->bind_param("sssisssi", $p['name'], $p['club'], $p['position'], $p['age'], $p['nationality'], $p['image_url'], $p['intl_stats'], $value);

    if ($stmt->execute()) {
        echo "Added: " . $p['name'] . "<br>";
    } else {
        echo "Error adding " . $p['name'] . ": " . $stmt->error . "<br>";
    }
    $stmt->close();
}

$conn->close();
?>