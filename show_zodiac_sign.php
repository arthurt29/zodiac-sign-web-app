<?php
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $birthdate = $_POST["birthdate"];
    $month = date("m", strtotime($birthdate));
    $day = date("d", strtotime($birthdate));

    $xml = simplexml_load_file("signos.xml");

    $signFound = false;

    foreach ($xml->signo as $sign) {

        $start = explode("-", $sign->dataInicio);
        $end = explode("-", $sign->dataFim);

        $startMonth = $start[0];
        $startDay = $start[1];

        $endMonth = $end[0];
        $endDay = $end[1];

        if (
            ($month == $startMonth && $day >= $startDay) ||
            ($month == $endMonth && $day <= $endDay)
        ) {

            echo '<div class="container mt-5">';
            echo '<div class="card p-4 shadow text-center">';
            echo '<h2 class="mb-3">' . $sign->nome . '</h2>';
            echo '<p>' . $sign->descricao . '</p>';
            echo '<a href="index.php" class="btn btn-secondary mt-3">Voltar</a>';
            echo '</div>';
            echo '</div>';

            $signFound = true;
            break;
        }
    }

    if (!$signFound) {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Signo não encontrado.</div></div>";
    }

} else {
    header("Location: index.php");
}
?>

</body>
</html>
