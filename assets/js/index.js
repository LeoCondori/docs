jQuery(function(t){
    
    //ALTA product to cart
    function addProduct(id_product,cant_product,precio_product,descripcion_produc){
        
        $.getJSON("module/cart/controller/", {route: 'addProduct', product_id: id_product, cant: cant_product, precio: precio_product, des: descripcion_produc}, AddProductGet, "json");
        
        function AddProductGet(Response){
            if(Response.addProductResult == 0){
                alertToCart('Agregado','Producto ('+ id_product +') agregado correctamente!','dark');
            }else{
                alertToCart('Agregado','Error, no se pudo agregar al carrito ('+ id_product +') !','dark',);
            }
        }        
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
              //$("#mensaje_login").html(data);
              console.log('OK...');
            }
        })
    
    }

});//Fin Jquery