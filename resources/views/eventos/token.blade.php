<!DOCTYPE html>
<html lang="en">

<head>
    <title>Send Web Notification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<body>
    
    <h5 id="token"></h5>
    

    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js"></script>

    <script>
        $(function() {
            const firebaseConfig = {
                apiKey: "AIzaSyCIrQIBNxwDtx1ZPzEmZnOIlBONUeCtReg",
                authDomain: "primerparcial-347021.firebaseapp.com",
                projectId: "primerparcial-347021",
                storageBucket: "primerparcial-347021.appspot.com",
                messagingSenderId: "422014919648",
                appId: "1:422014919648:web:112edd02a40cf1775fc185"
            };

            firebase.initializeApp(firebaseConfig);
            const messaging = firebase.messaging();
            messaging.requestPermission().then(function() {
                        return messaging.getToken()
                    }).then(function(response) {
                       console.log(response);
                       $('#token').text(response);

                    }).catch(function(error) {
                        alert(error);
                    });

            
        });
    </script>
</body>

</html>