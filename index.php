<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Neuton&family=Space+Mono&display=swap" rel="stylesheet">
    <title>Bebi</title>
</head>

<body>
    <div>
        <!------Header&Navbar------->
        <div class="header">
            <nav class=" navbar navbar-expand-lg navbar-light">
                <div class="nav-l">
                    <a class="navbar-brand navbar-brand-l" href="#sector">Settori d'intervento</a>
                    <a class="navbar-brand navbar-brand-l" href="#">Tecnologia</a>
                </div>
                <div class="nav-r">
                    <a class="navbar-brand navbar-brand-r" href="#">Referenze</a>
                    <button type="button" class="btn btn-outline-danger navbar-brand navbar-brand-r" data-toggle="modal"  data-target="#myModal" id='contact' >Contattaci</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Prenota un appuntamento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="./pages/request.php" id="siteInspection">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="email" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nome del locale:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="name" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="regione" class="col-form-label">Regione:</label>
                                            <select name="regione" id="regione">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="provincia" class="col-form-label">Provincia:</label>
                                            <select name="provincia" id="provincia" disabled>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="comune" class="col-form-label">Comune:</label>
                                            <select name="comune" id="comune" disabled>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Via:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="address" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Numero civico:</label>
                                            <input type="number" class="form-control" id="recipient-name" name="civilNumber" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Interno:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="internal" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Oggetto:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="object" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Richiesta:</label>
                                            <textarea class="form-control" id="message-text" name="request" require></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-outline-danger" id="end" value="Richiedi">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="logo">
                <img src="./images/logo.png" class="img-logo">
            </div>
        </div>
        <!------Deivider------->
        <div>
            <div class="divider">
                <center>
                <hr><div class="rotated" ></div>
                </center>
            </div>
        </div>
        <!------SettoriDiIntervanto------->
        <div class="sector" id="sector">
            <div class="container">
                <div class="row">
                  <div class="col-12 title-sector column-sector">
                    <h1>Consulenza, formazione, assistenza per il tuo impianto di ristorazione</h1>
                    <p>Bebi srl offre ai propri clienti alcuni importanti servizi come: consulenza e progettazione per la realizzazione di cucine e lavanderie professionali, la formazione al cliente, l'assistenza tecnica e varie soluzioni finanziarie.</p>
                  </div>
                  <div class="col-12 column-sector">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>Consulenza e Progettazione</h3>
                                <p>La Bebi è in grado si supportare il cliente fin dalle prime fasi consigliandolo nelle scelte di realizzazione in base alle reali esigenze lavorative (es. dimensionamento dell’impianto cucina e lavanderia professionale) e nel rispetto normative vigenti. Il nostro personale di vendita è aggiornato sulle normative in materia di igiene, prevenzione incendi e sicurezza sul lavoro, regolamento edilizio e norme UNI-CIG. L’ufficio tecnico esegue planimetrie complete di viste tridimensionali, rendering e piante esecutive per gli allacciamenti idraulici ed elettrici.</p>
                            </div>
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 column-sector">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>Formazione</h3>
                                <p>Negli ultimi anni le apparecchiature per la ristorazione hanno visto un notevole avanzamento tecnologico. Ecco perché il nostro personale è in grado di guidare e formare il cliente all'uso ottimale delle nuove attrezzature per la ristorazione.</p>
                            </div>
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 column-sector">
                  <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>Assistenza</h3>
                                <p>L'Assistenza Tecnica è uno dei punti di forza della nostra azienda e un aiuto indispensabile per il cliente. L’esperienza maturata da oltre trent'anni su impianti di cucina plurimarca ci ha permesso di sviluppare una notevole competenza che si traduce in un servizio attento al cliente. I nostri tecnici, altamente specializzati e aggiornati, sono in grado di risolvere con tempestività qualsiasi problema tecnicoriguardante il macchinario per la ristorazione o l’attrezzatura della lavanderia professionale. Ad oggi, è attivo anche il servizio di assistenza tecnica continua sette giorni su sette, che estende la reperibilità dei nostri tecnici anche alla domenica dalle 8.30 alle 13.00.</p>
                            </div>
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 column-sector">
                  <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>Servizi Finanziari</h3>
                                <p>Per agevolare i clienti nella parte economica della loro scelta, proponiamo loro diverse soluzioni, che vanno dalla nuovissima formula del noleggio operativo dell'impianto di ristorazione o del macchinario di cucina, dai finanziamenti al leasing.</p>
                            </div>
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-12 column-sector">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3>HACCP</h3>
                                <p>Elaborazione dei Piani di Autocontrollo per le attività di ristorazione, produzione pasti e attività di somministrazione di alimenti e bevande in generale. Somministrazione di corsi obbligatori per OSA e titolari di attività in materia di HACCP. Redazione del DVR secondo Decreto Legislativo 81 del 2008 e relativi corsi su prevenzione e sicurezza.</p>
                            </div>
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!------Deivider------->
        <div>
            <div class="divider">
                <center>
                <hr><div class="rotated" ></div>
                </center>
            </div>
        </div>
        <!-----Maps------->
        <div class="maps-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.0261087869676!2d11.227014400026817!3d43.81381784324639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a56e861b833f1%3A0x255c381929278c8c!2sBEBI%20SRL%20-%20Cooking%20Solutions!5e0!3m2!1sit!2sit!4v1682520146439!5m2!1sit!2sit" width="600" height="450" style="border:0;  border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-----OnTop----->
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
            </svg>
        </button>
    </div>
    <script src="js/myjs.js"></script>
</body>

</html>