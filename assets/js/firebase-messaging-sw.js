
    // Give the service worker access to Firebase Messaging.
    // Note that you can only use Firebase Messaging here, other Firebase libraries
    // are not available in the service worker.
    importScripts('https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js');
    importScripts('library/3.9.0.firebase-messaging.js');
    
    firebase.initializeApp({
        'messagingSenderId': '1077165521853'
      });
    
    var messaging = firebase.messaging();
