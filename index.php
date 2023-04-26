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
                    <a class="navbar-brand navbar-brand-l" href="#">Settori d'intervento</a>
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

        <!------Home------->
        <div>
            <div class="divider">
                <center>
                <hr><div class="rotated" ></div></hr>
                </center>
            </div>
        </div>
        <!-----Maps------->
        <div class="maps">
            <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.0261087869676!2d11.227014400026817!3d43.81381784324639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a56e861b833f1%3A0x255c381929278c8c!2sBEBI%20SRL%20-%20Cooking%20Solutions!5e0!3m2!1sit!2sit!4v1682520146439!5m2!1sit!2sit" width="600" height="450" style="border:0;  border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </center>
        </div>
    </div>
    <script src="js/myjs.js"></script>
</body>

</html>