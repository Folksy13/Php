$studente = ["nome" => "Luca", "cognome" => "Rossi", "eta" => 16];
foreach ($studente as $valore) {
    echo $valore . " ";
}
$auto = ["marca" => "Fiat", "modello" => "Panda", "anno" => 2020];
echo "La marca è: " . $auto["marca"];
$prodotto = ["nome" => "Tastiera", "prezzo" => 25, "quantita" => 5];
$prodotto["quantita"] = 10;
foreach ($prodotto as $chiave => $valore) {
    echo "$chiave: $valore <br>";
}
$libro = ["titolo" => "1984", "autore" => "Orwell"];
$libro["anno"] = 1949;
foreach ($libro as $k => $v) {
    echo "$k: $v <br>";
}
$docente = ["nome" => "Anna", "materia" => "Informatica", "email" => "anna@mail.it"];
echo "L'array contiene " . count($docente) . " elementi.";
$utente = ["username" => "mario", "password" => "1234", "ruolo" => "user"];
foreach ($utente as $chiave => $valore) {
    echo "Chiave: $chiave - Valore: $valore <br>";
}
$colori = ["c1" => "Rosso", "c2" => "Blu", "c3" => "Verde"];
foreach ($colori as $colore) {
    echo $colore . "<br>";
}
$spese = ["lunedì" => 12, "martedì" => 8, "mercoledì" => 5];
$totale = 0;
foreach ($spese as $spesa) {
    $totale += $spesa;
}
echo "La somma totale è: $totale";
$voti = ["ita" => 6, "mat" => 8, "ing" => 7];
$minimo = min($voti);
echo "Il voto minimo è: $minimo";
$prezzi = ["pane" => 2, "latte" => 1, "pizza" => 6, "acqua" => 1];
foreach ($prezzi as $prodotto => $prezzo) {
    if ($prezzo > 2) {
        echo "Prodotto: $prodotto ($prezzo €)<br>";
    }
}
$pc = ["cpu" => "i7", "ram" => "16GB", "ssd" => "1TB", "gpu" => "RTX"];
foreach ($pc as $chiave => $valore) {
    if ($chiave != "ram") {
        echo "$chiave: $valore <br>";
    }
}
$studenti = ["Luca" => 6, "Marco" => 9, "Sara" => 7];
foreach ($studenti as $nome => $voto) {
    if ($voto >= 7) {
        echo "Promosso: $nome con voto $voto <br>";
    }
}
$nazioni = ["Italia" => "Roma", "Germania" => "Berlino", "Spagna" => "Madrid"];
foreach ($nazioni as $nazione => $capitale) {
    echo "$nazione: $capitale <br>";
}
$classe = [
    "s1" => ["nome" => "Luca", "eta" => 16],
    "s2" => ["nome" => "Anna", "eta" => 17],
    "s3" => ["nome" => "Marco", "eta" => 15]
];
foreach ($classe as $studente) {
    echo "Studente: " . $studente["nome"] . " - Età: " . $studente["eta"] . "<br>";
}
$rubrica = [
    "Luca" => ["tel" => "123", "citta" => "Roma"],
    "Anna" => ["tel" => "456", "citta" => "Milano"],
    "Marco" => ["tel" => "789", "citta" => "Torino"]
];
foreach ($rubrica as $nome => $dati) {
    if ($dati["citta"] == "Roma") {
        echo "Trovato a Roma: $nome (Tel: " . $dati["tel"] . ")<br>";
    }
}
