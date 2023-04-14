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
                    <button type="button" class="btn btn-outline-danger navbar-brand navbar-brand-r " data-toggle="modal" data-target="#myModal" id='contact'>Contattaci</button>
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
                            <form method="post" action="./pages/request.php">
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
                                <label for="recipient-name" class="col-form-label">Provincia:</label>
                                <select name="provincia" id="recipient-name" disabled>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Comune:</label>
                                <select name="comune" id="recipient-name" disabled>
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
                                <label for="recipient-name" class="col-form-label">Oggetto:</label>
                                <input type="text" class="form-control" id="recipient-name" name="object" require>
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Richiesta:</label>
                                <textarea class="form-control" id="message-text" name="request" require></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-outline-danger" value="Richiedi">
                          </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="logo">
            </div>
        </div>

        <!------Home------->
        <div>

        </div>
    </div>

    <script src="js/myjs.js"></script>
</body>
</html>