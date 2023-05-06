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
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
    <title>Bebi</title>
</head>

<body>
    <div>
        <!------Header&Navbar------->
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto py-4 py-md-0">
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link" href="#sector"><button type="button" data-toggle="modal"  class="btn">Settore</button></a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link" href="#tech"><button type="button" data-toggle="modal"  class="btn">Tecnologie</button></a>
                        </li>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link" href="#brands"><button type="button" data-toggle="modal"  class="btn">Brands</button></a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link" href="#"><button type="button" data-toggle="modal"  class="btn" data-target="#myModal" id='contact' >Contattaci</button></a>
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
                                            <select name="regione" id="regione" require>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="provincia" class="col-form-label">Provincia:</label>
                                            <select name="provincia" id="provincia" disabled require>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="comune" class="col-form-label">Comune:</label>
                                            <select name="comune" id="comune" disabled require>
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
                        </li>
                      </ul>
                    </div>
                    <img src="./images/logo.png" class="logo">
                  </nav>    
                </div>
              </div>
            </div>
        </div>
        <!----Home---->
        <div class="info">
            <h1 class="title">Cucine industriali a Firenze: la nostra esperienza</h1>
            <hr class="text-divider">
            <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="info-text">
                        <p>Nati e cresciuti professionalmente negli anni ‘80, inizialmente come tecnici riparatori plurimarchio nel settore “Grandi Impianti Cucine”.</p>
                        <br>
                        <p>Dagli anni 2000, a seguito dell’esperienza maturata su apparecchiature plurimarchio, del consolidamento di rapporti commerciali con fornitori primari del settore , con la formazione ottenuta mediante corsi tecnici, commerciali e di marketing, Bebi Srl oggi è in grado di offrire un pacchetto completo di forniture e servizi.</p>
                        <br>
                        <p>Dalla Consulenza iniziale, sviluppiamo progetti e preventivi personalizzati, effettuiamo forniture complete, installazioni,  formazione del personale  ed assistenza tecnica post vendita anche con   contratti di manutenzione programmata.</p>
                        <br>
                        <p> Siamo in grado di personalizzare le nostre offerte , sviluppare progetti e proposte, con particolare attenzione ai concetti innovativi ed ecosostenibili , che permettono di ottenere benefici fiscali e risparmio energetico.</p>
                        <br>
                        <p>Supportiamo la nostra clientela con dedicati strumenti finanziari , in particolare con Noleggio Operativo.</p>
                        <br>
                        <p>A rafforzare l’organico di Bebi Srl e dare continuità aziendale, è operativa da anni una nuova generazione.</p>
                        <br>
                        <p>Esperienza ed Entusiasmo sono le peculiarità che Bebi srl mette a disposizione della propria clientela.</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-clock info-item" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                            <p class="info-icon-text">Puntualità nelle consegne</p>
                        </center>
                    </div>
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-check info-item" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <p class="info-icon-text">Assistenza tempestiva</p>
                        </center>
                    </div>
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square info-item" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            <p class="info-icon-text">Preventivi personalizzati</p>
                        </center>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                        <h1 class="right-text">HOME</h1>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!------Divider------->
        <hr class="center-diamond">
        <!------SettoriDiIntervanto------->
        <div class="info" id="sector">
            <h1 class="title">Consulenza, formazione, assistenza per il tuo impianto di ristorazione</h1>
            <hr class="text-divider">
            <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="info-text">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h3>Consulenza e Progettazione</h3>
                                    <hr class="sm-text-devider">
                                    <p>La Bebi è in grado si supportare il cliente fin dalle prime fasi consigliandolo nelle scelte di realizzazione in base alle reali esigenze lavorative (es. dimensionamento dell’impianto cucina e lavanderia professionale) e nel rispetto normative vigenti. Il nostro personale di vendita è aggiornato sulle normative in materia di igiene, prevenzione incendi e sicurezza sul lavoro, regolamento edilizio e norme UNI-CIG. L’ufficio tecnico esegue planimetrie complete di viste tridimensionali, rendering e piante esecutive per gli allacciamenti idraulici ed elettrici.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Formazione</h3>
                                    <hr class="sm-text-devider">
                                    <p>Negli ultimi anni le apparecchiature per la ristorazione hanno visto un notevole avanzamento tecnologico. Ecco perché il nostro personale è in grado di guidare e formare il cliente all'uso ottimale delle nuove attrezzature per la ristorazione.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Assistenza</h3>
                                    <hr class="sm-text-devider">
                                    <p>L'Assistenza Tecnica è uno dei punti di forza della nostra azienda e un aiuto indispensabile per il cliente. L’esperienza maturata da oltre trent'anni su impianti di cucina plurimarca ci ha permesso di sviluppare una notevole competenza che si traduce in un servizio attento al cliente. I nostri tecnici, altamente specializzati e aggiornati, sono in grado di risolvere con tempestività qualsiasi problema tecnicoriguardante il macchinario per la ristorazione o l’attrezzatura della lavanderia professionale. Ad oggi, è attivo anche il servizio di assistenza tecnica continua sette giorni su sette, che estende la reperibilità dei nostri tecnici anche alla domenica dalle 8.30 alle 13.00.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Servizi Finanziari</h3>
                                    <hr class="sm-text-devider">
                                    <p>Per agevolare i clienti nella parte economica della loro scelta, proponiamo loro diverse soluzioni, che vanno dalla nuovissima formula del noleggio operativo dell'impianto di ristorazione o del macchinario di cucina, dai finanziamenti al leasing.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>HACCP</h3>
                                    <hr class="sm-text-devider">
                                    <p>Elaborazione dei Piani di Autocontrollo per le attività di ristorazione, produzione pasti e attività di somministrazione di alimenti e bevande in generale. Somministrazione di corsi obbligatori per OSA e titolari di attività in materia di HACCP. Redazione del DVR secondo Decreto Legislativo 81 del 2008 e relativi corsi su prevenzione e sicurezza.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                        <h1 class="right-text">SECTOR</h1>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!------Divider------->
        <hr class="center-diamond">
        <!------Tecnologia----->
        <div class="info" id="tech">
            <h1 class="title">La Tecnologia Compone La Nostra Offerta</h1>
            <hr class="text-divider">
            <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="info-text">
                        <p>Le nostre cucine sono progettate per soddisfare le esigenze degli chef professionisti e delle aziende alimentari più esigenti.</p>

                        <p>La tecnologia che utilizziamo garantisce prestazioni eccezionali, massima efficienza e massimizzazione dei profitti. Con i nostri prodotti, potrete migliorare la produttività, la velocità e la qualità del vostro lavoro.</p>

                        <p>Le nostre cucine industriali sono dotate di tecnologie all'avanguardia come sensori di temperatura, sistemi di controllo avanzati e funzionalità di automazione per semplificare i processi di cottura e migliorare la precisione.</p>

                        <p>Inoltre, i nostri prodotti sono progettati per garantire la massima igiene e sicurezza alimentare, riducendo al minimo il rischio di contaminazione e assicurando la massima freschezza degli ingredienti.</p>

                        <p>Le nostre cucine industriali sono la scelta ideale per ristoranti, catene di fast food, alberghi, ospedali, scuole e altre aziende alimentari che cercano di migliorare la loro efficienza, la qualità del prodotto e di massimizzare i loro profitti.</p>

                        <p>Scegliete la tecnologia delle nostre cucine industriali e vedrete la differenza!
                    </div>
                  </div>
                  <div class="col">
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cpu info-item" viewBox="0 0 16 16">
                                <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0zm-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3h-7zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                            </svg>
                            <p class="info-icon-text">Velocità</p>
                        </center>
                    </div>
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg"fill="currentColor" class="bi bi-phone info-item" viewBox="0 0 16 16">
                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <p class="info-icon-text">Praticità d'uso</p>
                        </center>
                    </div>
                    <div class="info-icon">
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wifi info-item" viewBox="0 0 16 16">
                              <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                              <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                            </svg>
                            <p class="info-icon-text">Connettività</p>
                        </center>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                        <h1 class="right-text">TECH</h1>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!------Divider------->
        <hr class="center-diamond">
        <!----Brands---->
        <div id="brands" class="brands-container">
            <h1 class="right-text-brands">BRANDS</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 brands">
                        <a href="https://www.mareno.it/it" target="_blank"><img src="./images/mareno.png" alt=""></a>
                    </div>
                    <div class="col-6 brands">
                        <a href="https://www.rational-online.com/it_it/home/" target="_blank"><img src="./images/partner2.png" alt=""></a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-4 brands">
                        <a href="https://www.fimarspa.it" target="_blank"><img src="./images/partner3.png" alt=""></a>
                    </div>
                    <div class="col-4 brands">
                        <img src="./images/cropped-Progetto-senza-titolo.png" alt="" class="img-brands"></a>
                    </div>
                    <div class="col-4 brands">
                        <a href="https://home.liebherr.com/it/ita/home/homepage.html" target="_blank"><img src="./images/partner4.png" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 brands">
                        <a href="https://www.sagispa.it/it" target="_blank"><img src="./images/partner5.png" alt=""></a>
                    </div>
                    <div class="col-6 brands">
                        <a href="https://www.enofrigo.it" target="_blank"><img src="./images/partner6.png" alt=""></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 brands">
                        <a href="https://coldline.it/it" target="_blank"><img src="./images/partner7.png" alt=""></a>
                    </div>
                </div>
            </div>            
        </div>
        <!-------Footer--------->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col footer-col">
                        <center>
                            <h5>Bebi srl Società Unipersonale</h5>
                            <p>Via di Collodi 10/25, 50141 Firenze</p>
                            <p>info@bebiimpianti.it</p>
                            <p>+39 055412430</p>
                            <p>P.Iva 05759820482</p>
                            <a href="" target="_blank"><p>Privacy Policy</p></a>
                        </center>
                    </div>
                    <div class="col">
                        <div class="container-fluid">
                            <div class="row footer-icon">
                                <div class="col">
                                    <h3>Facebook</h3>
                                    <a href="https://www.facebook.com/bebisrl/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-facebook footer-item" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <h3>Instagram</h3>
                                    <a href="https://www.instagram.com/bebi.srl/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"   fill="currentColor" class="bi bi-instagram footer-item" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <h3>Linkedin</h3>
                                    <a href="https://www.linkedin.com/company/bebi-srl/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-linkedin footer-item" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.0261087869676!2d11.227014400026817!3d43.81381784324639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a56e861b833f1%3A0x255c381929278c8c!2sBEBI%20SRL%20-%20Cooking%20Solutions!5e0!3m2!1sit!2sit!4v1682520146439!5m2!1sit!2sit" class="maps" style="border:0;  border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/myjs.js"></script>
</body>
</html>