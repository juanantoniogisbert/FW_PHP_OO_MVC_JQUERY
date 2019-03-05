$(document).ready(function(){
    cart = [];
    $(function () {
      if (localStorage.cart){
          cart = JSON.parse(localStorage.cart);
          showCart();
      }
  });
    
    $(function () {
        if (localStorage.cart){
            $("#confpurch").hide();
            cart = JSON.parse(localStorage.cart);
            showCart();
            $("#numcarr").empty();
            $("#numcarr").append("(" + cart.length + ")");
            if (localStorage.cart === '[]') {
              $( "#butttram" ).hide();
              $("#emptypurch").append("El carrito esta vacio");
            }else{
              $( "#butttram" ).show();
              $("#emptypurch").hide();
            }
        }else{
          $("#confpurch").hide();
          $( "#butttram" ).hide();
          $("#emptypurch").append("El carrito esta vacio");
        }
    });
});