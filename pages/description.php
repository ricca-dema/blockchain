<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Riferimenti BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Riferimenti a file locali -->
    <link href="\assets\css\global.css" rel="stylesheet">
    <link rel="icon" href="\assets\media\nlogo2.png">

    <title>Slides</title>
</head>

<!--onload="fadeinOnLoad();"-->

<body class="wallpaperAnimation text-center text-black">
    <div class="container d-flex h-100 mx-auto flex-column">

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/components/jumbotron.php"; ?>

        <div class="flex-column p-3 bg-white rounded border">
            <div class="row">
                <div class="col">
                    <p class="text-center">
                        <b>Blockchain cos'è ?</b>
                        <br>
                        In realtà non c’è una vera e propria definizione di blockchain, ma possiamo pensarla a come una sottofamiglia di tecnologie il cui registro
                        è una catena blocchi contenenti le transazioni in cui esiste una validazione affidata a un meccanismo di consenso, presente sui diversi nodi
                        della rete (Blockchain permissioned).
                        <br>
                    </p>
                </div>
            </div>

            <br><br>
            <b>Ecco alcune caratteristiche :</b>
            <br><br>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                        <b>Decentralizzazione</b>
                        <br>
                        Permette di garantire la stessa funzionalità nella gestione dei Ledger, ma senza dover fare riferimento a una struttura centralizzata,
                        senza cioè che sia necessario che una autorità centrale verifichi, controlli e autorizzi la legittimità di una transazione, di uno scambio,
                        di un passaggio. Ma come si fa ? Mentre prima il Libro Mastro era univoco, uno solo e stava in capo all’autorità centrale, adesso il Libro Mastro
                        è di tutti, ovvero tutti gli utenti ne hanno una copia e tutti possono controllarlo, visionarlo e, a fronte di regole che vanno a comporre
                        la Governance della blockchain, possono modificarlo.
                        <br>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                        <b>Trasparenza</b>
                        <br>
                        Le transazioni effettuate attraverso la blockchain sono visibili a tutti i partecipanti, garantendo così trasparenza nelle operazioni.
                        Si possono conferire dati e informazioni e controllare, con la massima trasparenza, i dati di tutti gli altri attori.
                        La trasparenza collegata agli smart contracts automatizzati consente la creazione di conti di garanzia per gestione di fondi collegati
                        al riconoscimento di valori che vengono attivati solo al raggiungimento, verificato e controllato automaticamente dagli smart contracts, di determinati obiettivi.
                        <br>
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                        <b>Sicurezza</b>
                        <br>
                        Le transazioni contengono informazioni relative all’indirizzo pubblico del ricevente, le caratteristiche della transazione e la firma crittografica
                        che garantisce sicurezza e autenticità della transazione. Inoltre per cambiare o danneggiare o distruggere un Central Ledger – Libro mastro centralizzato –
                        è necessario violare l’autorità centrale che lo gestisce, nel caso della blockchain è invece impossibile in quanto sarebbe necessario violare tutte le copie del libro mastro
                        possedute da tutti i partecipanti della blockchain e occorrerebbe farlo simultaneamente.
                        La Marca Temporale(codice univoco che rappresenta una data) impedisce anche che l’operazione, una volta eseguita, venga alterata o annullata.
                        La caratteristica principale del modello, dunque, è che il funzionamento non è garantito da un ente centrale, ma ogni singola transazione è validata dall’interazione di tutti i nodi.
                        La Marca Temporale consente di associare una data e un’ora certe e legalmente valide a un documento informatico. In altre parole, la Marca Temporale consente di definire una validazione temporale che può essere opponibile a terzi.
                        <br>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                        <b>Immutabilità</b>
                        <br>
                        Dato che il Database è una sorta di Database strutturato in blocchi che contiene transazioni, ognuna deve essere dall’analisi di ciascun nodo.
                        Un nodo quindi è chiamato a Vedere, Controllare e Approvare le transazioni. Ecco che ciascun nodo è anche un archivio che contiene lo storico delle transazioni
                        le quali possono essere modificate solo con l’approvazione di tutti i nodi. Praticamente una transazione è immodificabile.
                        La blockchain è un nuovo paradigma per la gestione delle informazioni che permette di garantire la reale immutabilità dei dati perché in grado di garantire
                        e certificare la storia completa di tutti i dati e di tutte le operazioni collegate a ciascuna transazione.
                        <br>
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                        <b>Consenso</b>
                        <br>
                        Il processo di validazione della blockchain prevede una fase di verifica e di approvazione basata su risorse di calcolo che vengono messe a disposizione
                        dai partecipanti alla blockchain e che sono finalizzate alla risoluzione di problemi complessi o puzzle crittografici e che permettono di disporre di un
                        Consenso Distribuito e non più di un consenso basato su un intermediario terzo o su un ente o istituzione centralizzata.
                        Coloro che partecipano alla risoluzione del problema e che dunque concorrono alla validazione del processo e della transazione sono chiamati Miner e il loro intervento,
                        che necessita per essere svolto di importanti risorse, viene remunerato attraverso l’emissione di una moneta virtuale o cryptocurrency.
                        <br>
                    </p>
                </div>
            </div>

            <br><br>
            <b>Usi del blockchain(ambiti)</b>
            <br><br>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                        <b>Blockchain 1.0</b>
                        <br>
                        Il primo utilizzo della blockchain riguarda tutte le applicazioni di carattere finanziario per la gestione di criptovalute a partire dalla storica 
                        (e che attualmente detiene ancora la leadership delle criptovalute) Bitcoin. 
                        In pratica, i bitcoin sono file che possono essere salvati nel wallet digitale di ogni utente. 
                        Ogni indirizzo bitcoin presente nel wallet può essere associato a un numero variabile di bitcoin. 
                        E a ogni indirizzo (chiave pubblica), viene associata una firma digitale (chiave privata), per assicurarsi che solo il proprietario di un certo 
                        indirizzo possa avviare una transazione a esso legata.
                        <br>
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                        <b>Blockchain 2.0</b>
                        <br>
                        Il secondo tipo di blockchain si estende a settori diversi dal finanziario grazie all’implementazione degli smart contract
                        Lo smart contract non è altro che un contratto sotto forma di codice il quale rimanda l’esecuzione delle clausole a un software.
                        <br>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-left">
                        <b>Blockchain 3.0</b>
                        <br>
                        Il futuro della blockchain con la diffusione delle Dapp (decentralized applications): un futuro in cui tutti noi utilizzeremo 
                        le tecnologie blockchain, probabilmente senza neanche rendercene conto, perché incapsulate nelle “cose” connesse tra loro, senza intervento umano.
                        <br>
                    </p>
                </div>
                <div class="col">
                    <p class="text-right">
                    </p>
                </div>
            </div>

        </div>


        <?php require $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php"; ?>

    </div>
</body>