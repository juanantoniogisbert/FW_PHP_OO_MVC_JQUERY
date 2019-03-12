var cart = [];
    $(function () {
        if (localStorage.cart){
            cart = JSON.parse(localStorage.cart);
            showCart();
        }
    });

    $(document).on('click','.addToCart',function () {
        var id = $(this).attr("id");
        console.log(id);
        $.get("module/cart/controller/controller_cart.php?&op=productes&id=" + id, function(data, status) {

                var list = JSON.parse(data);
                var marca = list['marca'];
                var modelo = list['modelo'];
                var precio = list['precio'];
                // var qty = $("#" + id + "qty").val();
                var unidades = "1";

                console.log(list);

                for (var i in cart) {
                if(cart[i].Marca == marca){
                        cart[i].unidades = unidades;
                        showCart();
                        saveCart();
                        return;
                    }
                }

                var item = {Marca: marca, Modelo: modelo, Precio: precio, Unidades: unidades, id: id};
                cart.push(item);
                showCart();
                saveCart();
        });
    });


    $("#pedro").click(function() {
        console.log("dentro");
        var info = JSON.stringify(cart)
              // exit();
          $.ajax({
                 type: "POST",
                 url: "module/cart/controller/controller_cart.php?op=checkout",
                 data: {data : info},
                 // data: $("#btn-check").serialize(),
                 success: function(data, status){
                   // alert(data);
                   var info = JSON.parse(data);
                   console.log(info);
                    if (info==="TODO_OK"){
                        alert("Todo ha salido correctamente");
                        localStorage.clear();
                    }else if(info==="errorlogin"){
                        window.location.href = "index.php?page=controller_login&op=viewlogin";
                    }else{
                        alert("Algo ha salido mal");
                       // window.location.href="index.php?page=controller_login&op=view";
                    };
                 }
          });
          
    });

    function showCart() {
        if (cart.length == 0) {
            $("#cart").css("visibility", "hidden");
            return;
        }
        
        $("#cart").css("visibility", "visible");
        $("#cartBody").empty();
        for (var i in cart) {
            var item = cart[i];
            var row = "<tr><td>" + item.Marca + "</td><td>" + item.Modelo + "</td><td>" + item.Precio +
                      "</td><td><select class='canCanti' id='qty" + item.Qty +"'></select></td><td>" + item.Unidades * item.Precio + "€" +
                      "</td><td>" + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
            $("#cartBody").append(row);

            for(j=1;j <= 10;j++){
                if (j === parseInt(item.qty)){
                    $( "#qty" + item.cref).append("<option value='" + j +"' selected>" + j +"</option>");
                }else{
                    $( "#qty" + item.cref).append("<option value='" + j +"'>" + j +"</option>");
                }
            }
        }
    }
    
    function deleteItem(index){
        cart.splice(index,1); // delete item at index
        showCart();
        saveCart();
    }
    
    function saveCart() {
        if ( window.localStorage){
            localStorage.cart = JSON.stringify(cart);
        }
    }