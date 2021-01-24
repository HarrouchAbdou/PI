<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="icon.png" />
        <link rel="stylesheet" type="text/css" href="style_contact.css">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
      </head>  


    <body >
        <div class="container contact-form">
            <div class="contact-image">
                <img src="email.png" alt="rocket_contact"/>
            </div>
            <form id="contact-form">
                <h3>Ecrire votre message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Votre nom" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Votre Email " required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Votre Numero de telephone"  />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Votre objet" required />
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Votre message" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            (function () {
                emailjs.init('user_Sb2pegEk79sh9328O5PXk');
            })();
        </script>
        <script type="text/javascript">
        
        const input= document.getElementsByTagName('input')
            window.onload = function () {
                document.getElementById('contact-form').addEventListener('submit', function (event) {
                    event.preventDefault();
                    // generate a five digit number for the contact_number variable
                    // this.contact_number.value = Math.random() * 100000 | 0;
                    // these IDs from the previous steps
                    emailjs.sendForm('gmail','template_xlmqv2p',this)
                        .then(function () {
                            console.log('SUCCESS!');
                            alert('Votre Message est envoyé , Merci')
                            window.location.href='../index.php'
                        
    
                        }, function (error) {
                            console.log('FAILED...', error);
                        });
                });
            }
    
           
        </script>
    </body>
</html>