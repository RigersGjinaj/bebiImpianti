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
        <!-------Footer-------->
        <div class="footer">
            <div class="container">
                <div class="row">
                  <div class="col-4">
                    <h5>Bebi srl Società Unipersonale</h5>
                    <p>Via di Collodi 10/25, 50141 Firenze</p>
                    <p>info@bebiimpianti.it</p>
                    <p>+39 055412430</p>
                    <p>P.Iva 05759820482</p>
                  </div>
                  <div class="col-4">
                    <h5>Seguici:</h5>
                    <a href="https://www.facebook.com/bebisrl/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/bebi.srl/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/bebi-srl/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                    <a href="" target="_blank">Privacy Policy</a>
                  </div>
                  <div class="col-4">
                    <!-----Maps------->
                    <div class="maps-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.0261087869676!2d11.227014400026817!3d43.81381784324639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a56e861b833f1%3A0x255c381929278c8c!2sBEBI%20SRL%20-%20Cooking%20Solutions!5e0!3m2!1sit!2sit!4v1682520146439!5m2!1sit!2sit" width="600" height="450" style="border:0;  border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div>
            </div>
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