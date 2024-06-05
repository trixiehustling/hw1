<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unisciti alla DEA</title>
    <link rel="stylesheet" href="becomeDEA.css">
</head>
<body>
    <div class="header">
        <a href="index.php">
            <img src="img/dea-gold-logo.png" alt="DEA Logo" class="logo">
        </a>
        <h1>Unisciti alla Drug Enforcement Administration (DEA)</h1>
    </div>
    <div class="content">
        <?php
            $titolo = "Perché Unirsi alla DEA?";
            $testo = "
                La Drug Enforcement Administration (DEA) è molto più di un'agenzia di contrasto alla droga. È una comunità di professionisti dedicati a proteggere la nostra società dalle minacce delle droghe illecite e a garantire la sicurezza nazionale. Arruolarsi nella DEA offre un'opportunità unica per fare una differenza significativa nella vita delle persone e contribuire alla giustizia.

                <h2>La Missione della DEA</h2>
                <p>
                    La DEA lavora incessantemente per ridurre la disponibilità di droghe illegali attraverso indagini, interventi operativi e programmi di prevenzione. Ogni giorno, gli agenti della DEA combattono contro le organizzazioni criminali nazionali e internazionali che trafficano droghe, con l'obiettivo di smantellare queste reti e proteggere le nostre comunità.
                </p>

                <h2>Le Opportunità di Carriera</h2>
                <p>
                    Unirsi alla DEA non significa solo diventare un agente. L'agenzia offre una vasta gamma di opportunità di carriera, tra cui:
                    <ul>
                        <li>Analisti dell'intelligence, che lavorano per raccogliere e analizzare informazioni cruciali per le operazioni.</li>
                        <li>Scienziati forensi, che applicano la scienza per aiutare a risolvere crimini e portare i colpevoli alla giustizia.</li>
                        <li>Specialisti della tecnologia, che sviluppano e gestiscono sistemi avanzati per supportare le operazioni della DEA.</li>
                        <li>Professionisti amministrativi, che garantiscono il funzionamento efficiente dell'agenzia.</li>
                    </ul>
                </p>

                <h2>I Vantaggi di Unirsi alla DEA</h2>
                <p>
                    Arruolarsi nella DEA offre numerosi vantaggi, tra cui:
                    <ul>
                        <li>Un senso di orgoglio e soddisfazione nel servire il proprio paese e proteggere le comunità.</li>
                        <li>Formazione e sviluppo professionale continui, con opportunità di avanzamento di carriera.</li>
                        <li>Pacchetti retributivi competitivi, che includono salari, pensioni e benefici sanitari.</li>
                        <li>Un ambiente di lavoro dinamico e stimolante, dove ogni giorno presenta nuove sfide e opportunità.</li>
                    </ul>
                </p>

                <h2>Requisiti e Processo di Selezione</h2>
                <p>
                    La DEA cerca individui altamente motivati, con un forte senso di integrità e una dedizione alla giustizia. I requisiti di base includono:
                    <ul>
                        <li>Cittadinanza statunitense.</li>
                        <li>Età compresa tra i 21 e i 36 anni al momento della domanda.</li>
                        <li>Una laurea triennale o superiore in un campo rilevante.</li>
                        <li>Buone condizioni fisiche e mentali.</li>
                        <li>Assenza di precedenti penali.</li>
                    </ul>
                    Il processo di selezione prevede diverse fasi, tra cui test scritti, prove fisiche, colloqui e un'approfondita verifica dei precedenti.
                </p>

                <h2>Come Candidarsi</h2>
                <p>
                    Se sei pronto a fare la differenza e vuoi unirti alla DEA, visita il nostro sito web ufficiale per maggiori informazioni e per presentare la tua candidatura. Unisciti a noi nella lotta contro le droghe e aiuta a costruire un futuro più sicuro per tutti.
                </p>
            ";
        ?>
        <div class="text-content">
            <h2><?php echo $titolo; ?></h2>
            <p><?php echo $testo; ?></p>
        </div>
    </div>
    <script src="becomeDEA.js"></script>
</body>
</html>
