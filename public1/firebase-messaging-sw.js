importScripts('https://www.gstatic.com/firebasejs/9.1.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.1.0/firebase-messaging-compat.js');

firebase.initializeApp({
    apiKey: "AIzaSyCIrQIBNxwDtx1ZPzEmZnOIlBONUeCtReg",
    authDomain: "primerparcial-347021.firebaseapp.com",
    projectId: "primerparcial-347021",
    storageBucket: "primerparcial-347021.appspot.com",
    messagingSenderId: "422014919648",
    appId: "1:422014919648:web:9f25d335fb7f606b5fc185",
    measurementId: "G-37KVCLBQV2",
});

const messaging = firebase.messaging();

// Aquí puedes agregar cualquier código adicional relacionado con la mensajería

self.addEventListener("push", (event) => {
    // Aquí puedes manejar las notificaciones push entrantes
});

self.addEventListener("notificationclick", (event) => {
    // Aquí puedes manejar el evento de clic en la notificación
});
