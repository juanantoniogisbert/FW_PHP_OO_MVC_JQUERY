$(document).ready(function(){
    if (document.getElementById('shop_api')) {
        $.get("module/shop/controller/controller_shop.php?&op=data_shop", function(data,status) {
            var json = JSON.parse(data);
               $.each(json, function(index, list) {
                //    console.log(list);
                var ElementDiv = document.createElement('div');
                ElementDiv.id = "list_shop";
                ElementDiv.innerHTML =  "<div class='row popular-car-gird'>"
                                            +"<div class='single-popular-car'>"
                                                +"<div class='p-car-thumbnails'>"
                                                    +"<a class='car-hover' href='"+list.imagen+"'>"
                                                    +"<img src='"+list.imagen+"' alt='JSOFT'>"
                                                +"</a>"
                                                +"</div>"
                                                +"<div class='p-car-content'>"
                                                    +"<h3>"
                                                        +"<a>" + list.marca + " " + list.modelo+"</a>"
                                                        +"<span class='price'><i class='fa fa-tag'></i>"+list.precio+"</span>"
                                                    +"</h3>"
                                                    +"<div class='p-car-feature'>"
                                                        +"<a>CV "+list.caballos+"</a>"
                                                        +"<a>"+list.matricula+"</a>"
                                                        +"<a>"+list.tipo+"</a>"
                                                        // +"<a><i class='fa fa-heart'></i></a>"
                                                        +"<a id='btn-cart'><i class='fa fa-heart'></i>"
                                                            +"<span class='glyphicon glyphicon-shopping-cart'></span>"
                                                            +"<div class='marca' id='.$row['marca'].' style='display: none;'></div>"
                                                            +"<div class='modelo' id='.$row['modelo'].' style='display: none;'></div>"
                                                            +"<div class='precio' id='.$row['precio'].' style='display: none;'></div></a>";
                                                    +"</div>"
                                                +"</div>"
                                            +"</div>"
                                        +"</div>"

                document.getElementById("list_cars").appendChild(ElementDiv);
          });
        });
    }

      $( "#btn-api" ).click(function() {
        var fideus = $('#fideus').val();
        function search(fideus) {
          return $.getJSON("https://api.fuelapi.com/v1/json/vehicle/M/?api_key=daefd14b-9f2b-4968-9e4d-9d4bb4af01d1&model".replace("M", fideus));
        }
        search($("#fideus").val())
          .done(function(fideus) {
            $("#api_container").empty();

            var $div = $("#api_container");
            $div.html("");  
            $.each(fideus, function(index, list) {
              console.log(fideus['products']['0']['productFormats']['1']['assets']['0']['url']);
              var $row = $('<div class="row popular-car-gird">'
                            +'<div class="single-popular-car">'
                                +'<div class="p-car-thumbnails">'
                                    +'<a class="car-hover" href="'+fideus['products']['0']['productFormats']['1']['assets']['0']['url']+'">'
                                    +'<img class="photo" src="'+fideus['products']['0']['productFormats']['1']['assets']['0']['url']+'" alt="JSOFT">'
                                +'</a>'
                                +'</div>'
                                +'<div class="p-car-content">'
                                    +'<h3>'
                                        +'<a>' +fideus['model']['make']['name']+ " " +fideus['model']['name']+'</a>'
                                    +'</h3>'
                                    +'<div class="p-car-feature">'
                                        +'<a>'+fideus['model']['year']+'</a>'
                                        +'<a>'+fideus['drivetrain']+'</a>'
                                        +'<a>'+fideus['bodytype']+'</a>'
                                        // +"<a><i class='fa fa-heart'></i></a>"
                                        +'<a id="btn-cart"><i class="fa fa-heart"></i></a>'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>').appendTo($div);
              $row.on("click", function() {
                document.location = list.links.web;
              });
            })
          });
        });
  });
  