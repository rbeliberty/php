<html>
    
        <p>Le code testé :</p>
    <pre>
$json = '{"title":"code|design.fr"}s';

try {
    $title = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $exception) {
    echo $exception->getMessage();
}

?>
    </pre>

        <p>Résultat :</p>
<?php

$json = '{"title":"code|design.fr"}s';

try {
    $title = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
} catch (JsonException $exception) {
    echo $exception->getMessage();
}

?>

</html>