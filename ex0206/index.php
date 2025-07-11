<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <pre>
        <?php
            $arrA = [1, 2, 3];
            var_dump($arrA);
            echo "</br></br>";

            echo "<h3>Adicionar valores ao array</h3>";
            $arrayIndex = [
                "Brian",
                "Angus",
                "Maycon"
            ];
            var_dump($arrayIndex);
            echo "</br>";

            $arrayIndex[] = "Cliff";
            $arrayIndex[] = "Phill";
            var_dump($arrayIndex);
            echo "</br></br>";


            echo "<h3>Array Associativo</h3>";
            $arrayAssoc = [
                "vocal" => "Brian",
                "solo_guitar" => "Angus",
                "base_guitar" => "Maycon",
                "bass_guitar" => "Cliff"
            ];
            var_dump($arrayAssoc);
            echo "</br>";

            $arrayAssoc["drumps"] = "Phill";
            var_dump($arrayAssoc);
            echo "</br></br>";


            echo "<h3>Array Multidimensionais</h3>";
            $brian = ["Brian", "Mic"];
            $angus = ["name" => "Angus", "instrument" => "Guitar"];
            $instruments =[
                $brian,
                $angus
            ];
            var_dump($instruments);
            echo "</br>";

            var_dump([
                "brian" => $brian,
                "angus" => $angus
            ]);
            echo "</br></br>";
            

            echo "<h3>Acessando Array</h3>";
            $acdc = [
                "band" => "AC/DC",
                "vocal" => "Brian",
                "solo_guitar" => "Angus",
                "base_guitar" => "Maycon",
                "bass_guitar" => "Cliff"
            ];
            $pearl = [
                "band" => "Pearl Jam",
                "vocal" => "Eddie",
                "solo_guitar" => "Mike",
                "base_guitar" => "Stone",
                "bass_guitar" => "Jeff"
            ];
            $rockBands = [
                "acdc" => $acdc,
                "pearl" => $pearl
            ];
            echo "O vocal da banda é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]} fazem um show de rock!";
            var_dump($rockBands);
            echo "</br>";
            echo "<p>O vocal da Pearl é {$rockBands["pearl"]["vocal"]}</p>";

            foreach($pearl as $name) {
                echo "<p>$name</p>";
            }
            echo "</br></br>";


            echo "<h3>Chave e Valor</h3>";
            foreach($pearl as $key => $value) {
                echo "<p>$value é um $key da Banda!</p>";
            }
            
            foreach($rockBands as $rockBand) {
                var_dump($rockBand);
                $art = "<article><h4>%s</h4><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
                vprintf($art, $rockBand);
            }






        ?>
    </pre>
</body>
</html>