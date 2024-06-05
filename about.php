<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Enforcement Administration (DEA)</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <?php
        $agenzia = "Drug Enforcement Administration (DEA)";
        $descrizione = "
            La Drug Enforcement Administration (DEA) è un'agenzia federale degli Stati Uniti incaricata dell'applicazione delle leggi sugli stupefacenti. Fondata il 1 luglio 1973, la DEA opera sotto il Dipartimento di Giustizia degli Stati Uniti. 
            <br><br>
            La missione principale della DEA è quella di combattere il traffico di droga e ridurre la disponibilità di sostanze illecite all'interno degli Stati Uniti. Questo obiettivo viene perseguito attraverso un'ampia gamma di attività, tra cui:
            <ul>
                <li>Indagini sulle organizzazioni criminali nazionali e internazionali coinvolte nella produzione, distribuzione e vendita di droghe illegali.</li>
                <li>Coordinamento con altre agenzie federali, statali e locali per migliorare l'efficacia delle operazioni di contrasto al narcotraffico.</li>
                <li>Collaborazione con agenzie internazionali per bloccare il traffico di droga alle sue fonti, spesso situate al di fuori dei confini statunitensi.</li>
                <li>Iniziative di prevenzione e sensibilizzazione pubblica per ridurre la domanda di droghe illecite.</li>
            </ul>
            La DEA è composta da oltre 10.000 dipendenti, tra cui agenti speciali, analisti dell'intelligence, scienziati forensi e personale amministrativo. Gli agenti speciali della DEA sono addestrati per operare in condizioni pericolose e spesso lavorano sotto copertura per infiltrarsi nelle reti criminali.
            <br><br>
            Oltre alle operazioni di contrasto, la DEA gestisce anche programmi educativi e di prevenzione, come il National Red Ribbon Campaign, che mira a sensibilizzare l'opinione pubblica sui pericoli dell'uso di droghe. La DEA svolge un ruolo cruciale nella sicurezza nazionale e nella salute pubblica degli Stati Uniti, lavorando instancabilmente per proteggere le comunità dal flagello delle droghe illegali.
        ";
    ?>
    <div id="logoContainer">
        <a href="index.php">
            <img src="img/logo-alt.svg" alt="DEA Logo">
        </a>
    </div>
    <div class="content">
        <h1><?php echo $agenzia; ?></h1>
        <p><?php echo $descrizione; ?></p>
    </div>
    <script src="about.js"></script>
</body>
</html>
