jQuery(function(t){
  getUser();


  
      /********************/
      //*** FCM SECTION ***/
      /********************/
      var messaging = firebase.messaging();
      var myToken = '';
  
      //Get browser notification permisson
      messaging.requestPermission()
      .then(function(){
      console.log('El permiso se ha concedido');
      return messaging.getToken();
      })
      .then(function(token){
      console.log(token);
      myToken = token;
      })
      .catch(function(error){
      console.log(error);
      });

    //Crear usuario
    $("#create-users").click(function() {
      $("#validateData").html('');
        var EmailAddress = $("#EmailAddress").val();
        var Password = $("#Password").val();
        var ConfirmPassword = $("#ConfirmPassword").val();

        //Alta de usuario. ANDA!!
        firebase.auth().createUserWithEmailAndPassword(EmailAddress,Password)
        .then(function (data) {
          console.log(data);
          $("#button-registered").removeClass('btn btn-success nav-btn');
          $("#button-registered").addClass('btn btn-danger nav-btn');
          $("#button-registered").val('Salir');
          sendMail();
        })
        .catch(function(error) {
            $("#create-users").removeAttr('class');
            $("#create-users").attr('class', 'btn btn-warning');
            $("#validateData").html(error.code + ' - ' + error.message);
          })  
        return false;
    });

//Enviar mail de confirmación.
    function sendMail(){
      var user = firebase.auth().currentUser;
      user.sendEmailVerification()
      .then(function(){
        console.log('El correo se envió');
      },function(error){
        console.log(error);
      })
    }

//Prepare to reset password.
    $("#recoveryUser").click(function(){
      $("#section-social-login").hide();
      $("#password").hide();
      $("#emailInput").removeClass( "col-md-6" );
      $("#emailInput").addClass( "col-md-12" );
      $("#resetPassInfo").html('<div class="alert alert-info" role="alert">Escriba su email y presione Recuperar cuenta</div>');
      $("#login-btn").val('Recuperar cuenta');
      var emailAddress = $("#email").val();
    });
//Send mail tu reset pass
    $("#login-btn").click(function(){      
      if($("#login-btn").val() == 'Recuperar cuenta'){      
        $("#recoveryUser").hide();
        $("#login-btn").hide();
        var emailAddress = $("#email").val();
        var auth = firebase.auth();
        auth.sendPasswordResetEmail(emailAddress)
          .then(function(){
            $("#resetPassInfo").html('<div class="alert alert-success" role="alert">Se ha enviado un correo a su cuenta. Por favor sigue los pasos indicados.</div>');
          },function(error){
            $("#resetPassInfo").html('<div class="alert alert-danger" role="alert">'+ error.message +'</div>');
            $("#login-btn").show();
          });
      }else{
        var email = $("#email").val();
        var pass = $("#password").val();
        firebase.auth().signInWithEmailAndPassword(email,pass)
        .catch(function (error){
          console.log(error);
        });
      }
    })

    function getUser(){
      firebase.auth().onAuthStateChanged(function (user) {
        
        if(user){
          console.log('armo la lógica de user logueado.');
          $("#button-registered").removeClass('btn btn-success nav-btn');
          $("#button-registered").addClass('btn btn-danger nav-btn');
          $("#button-registered").html('<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Salir');
          $("#menu-login").hide();
          createUserSessionJS(user.uid);
        }else{
          console.log('no hay nadie');
          signOutJS();
        }

      })

    }//end getUser

    $("#button-registered").click(function(){ 
      logOut();
    });

    function logOut(){
      firebase.auth().signOut()
      .then(function() {
        $("#menu-login").show();
        signOutJS();
      }, function(error) {
        console.log(error);
      });
    }

    function createUserSessionJS(firebaseUID){
      
      $(document).ajaxStart(function(){

      }).ajaxStop(function(){

      });    

      $.ajax({
          type: 'POST',
          url: 'assets/module/session.php',
          data: {route: 'startSession', uid: firebaseUID},
          success: function(data) {

          }
      })
          
    }

//Login con GitHub
$("#twitterLogin").click(function(){     
  var provider = new firebase.auth.TwitterAuthProvider();
  firebase.auth().signInWithPopup(provider)
  .then(function(result){
    console.log(result);
  },function(error){
    console.log(error);
  })
});

//Login con GitHub
$("#githubLogin").click(function(){     
  var provider = new firebase.auth.GithubAuthProvider();
  firebase.auth().signInWithPopup(provider)
  .then(function(result){
    console.log(result);
  },function(error){
    console.log(error);
  })
});

//Login con Google    
    $("#googleLogin").click(function(){     
      var provider = new firebase.auth.GoogleAuthProvider();
      firebase.auth().signInWithPopup(provider)
      .then(function(result){
        console.log(result);
      },function(error){
        console.log(error);
      })
    });

//Login con Facebook
    $("#fbLogin").click(function(){

      var provider = new firebase.auth.FacebookAuthProvider();
      firebase.auth().signInWithPopup(provider)
      .then(function(result){
        console.log(result);
      },function(error){
        console.log(error);
      })
    });

/*****************/
//***DATA BASE ***/
/*****************/
var db = firebase.database().ref('data/');

//GET ALL NO TOCAR ANDA!!!
/*db.on('value',function(snapshot){
  var datas = snapshot.val();
  $("#TableData tbody").empty();

  var row = '';
  for(data in datas){
  row += '<tr> ' +
            '<th scope="row"> '+ data +'</th> ' +
            '<td>'+ datas[data].Nombre +'</td> ' +
            '<td>'+ datas[data].Apellido +'</td> ' +
            '<td>'+ datas[data].Edad +'</td> ' +
            '<td>'+ datas[data].Nacion +'</td> ' +
          '</tr>'
  }
  $("#TableData tbody").append(row);
  row='';
},function(errorObjetc){
  console.log('The read failed: ' + errorObjetc.code);
}
)*/

//ALTA
  $("#pushDataInsert").click(function(){
    var Apellido = 'Rodriguez';

    var datos = {
      Nombre: 'Leo',
      Apellido: 'Rodriguez',
      Edad: 36,
      Nacion: 'Argentina'   
    }
    
    db.orderByChild('Apellido')
      .equalTo(Apellido)
      .once('value', function(snapshot) {
        if(snapshot.hasChildren()){
          alert('Ya esta registrado');
        }else{
          db.push().set(datos,function(error){
            if(error){
              console.log(error, 'La sincronización falló');
            }else{
              console.log(error, 'Sincronización exitosa.');
            }
          });
        }
      })
  });

  //Recibe mensajes
  messaging.onMessage(function (payload) {
    $("#modal-message").text(payload.notification.body);
    $("#myModal").modal('show');
    console.log(payload);
  });

  function sendMessages(nombre, apellido, edad, nacionalidad){
    var json = {
      notificacion:{
        "titulo":"Saludos dinamico",
        "body":"Hola, se agregó correctamente los datos",
        "icon":"u1.png"
      },
        "to":myToken
    }
  }

/*
curl -X POST -H "Authorization: key=AAAA-swRe70:APA91bHHApvqIsXeogoVPu1KXJDb8JKU51h0Jvqx-koDoQ7HLhilfp3ADBOGkTgeT80qiyqNryxD2DDrkID0ycM7Ot7CB9DwW6NAhEhgHupF0e4yV6-AQaVuv6HKvDvpg8Rv4u_PqHiA" -H "Content-Type: application/json" -d '{
"notification":{
"title": "Leo Condori",
"body": "Hola te doy la bienvenida a mi sitio Web",
"icon": "u1.png",
"click_action": "index.php"
},"to":"eBx_5SZv9es:APA91bGyZHp55oR49UJo3YFgs1WPea-uukGa6Gs_EkcajskpVUHuqr14bcj9o6q2ich-77J_F2oADSinRce1wAstT-6NP_J88WOEhf9uZElWYVF2wSo11XWsts4L8UAyoD8ENxkObO8A"
}' "http://fcm.googleapis.com/fcm/send"
*/
    //Salir
    function signOutJS(){
      $(document).ajaxStart(function(){
        
      }).ajaxStop(function(){
        
      });    
      
      $.ajax({
          type: 'POST',
          url: 'assets/module/session.php',
          data: {route: 'signOut'},
          success: function(data) {
            console.log('Saliendo.....');
            console.log(data);
            //window.location.href = "index.php?logout=on";
          }
      })      
    }
});//Fin Jquery