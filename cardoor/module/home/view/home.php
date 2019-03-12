<div id="contenido">
<section id="home" class="text-center">

        <!--== Preloader Area Start ==-->
        <div class="preloader">
            <div class="preloader-spinner">
                <div class="loader-content">
                    <img src="view/assets/img/preloader.gif" alt="JSOFT">
                </div>
            </div>
        </div>
        <!--== Preloader Area End ==--> 

        <!--== Slider Area Start ==-->
        <section id="home-slider-area">
            <div class="home-slider-item slider-bg-1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slideshowcontent">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-slider-item slider-bg-2 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slideshowcontent">
                                <h1>SAVE YOUR MONEY</h1>
                                <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-slider-item slider-bg-3 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slideshowcontent">
                                <h1>ENJOY YOUR JOURNEY</h1>
                                <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Slider Area End ==-->

        <!--== Book A Car Area Start ==-->
        <div id="book-a-car">
            <div class="container" style="align: center;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="booka-car-content">
                            <form action="index3.html">
                                <div class="pick-location bookinput-item">
                                    <select class="custom-select" id="cboTipos">
                                        <option value="0">Seleccione un tipo</option>
                                    </select>
                                </div>

                                <div class="car-choose bookinput-item">
                                    <select class="custom-select" id="cboGamas">
                                        <option value="0">Seleccione una gama</option>
                                    </select>
                                </div>

                                <div class="contact-form">
                                    <form action="index.html">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="name-input">
                                                    <input type="text" id="service" name="service">
                                                    <div id="suggestions"></div>
                                                    <div id="vistaauto"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="bookcar-btn bookinput-item">
                                    <button type="submit" id="send">Book Car</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--== Book A Car Area End ==-->

        <!--== Our Cars Area Start ==-->
        <section id="our-cars" class="section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Nuestros coches</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Los coches mas votasdos por la gente</p>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
        </section>
        <section id="driver-page-wrap" class="section-padding">
            <div class="container">
                <div class="row">
                    <?php
                    if ($rdo->num_rows === 0){
                        print_r($rdo);
                                echo '<td align="center"  colspan="3">NO HAY NINGUN COCHE</td>';
                            }else{
                                foreach ($rdo as $row) {
                                echo '<div class="col-lg-4 col-md-6">';
                                    echo '<div class="single-driver-member">';
                                        echo '<img src="'.$row['imagen'].'" alt="" />';
                                        echo '<div class="driver-mem-info">';
                                        echo '<div class="driver-mem-sicons">';
                                            // echo '<a href="#"><i class="fa fa-eye"></i></a>';
                                        // print ("<div class='matricula btn btn-primary' id='".$row['matricula']."'>Mas Detalles</div>");
                                            // echo '<a id="'.$row['id'].'"><i class="fa fa-heart"></i></a>';
                                            echo '<a id="'.$row['id'].'" class="btn-details"><i class="fa fa-plus"></i></a>';
                                            echo '<a id="'.$row['id'].'" class="addToCart"><i class="fa fa-shopping-cart"></i></a>';
                                        echo '</div>';
                                            echo '<h4 id="marca">'.$row['marca'].' <span id="modelo"> '.$row['modelo'].' </span></h4>';
                                        echo '</div>';

                                        echo '<a>
                                                <div class="marca" id="'.$row['marca'].'" style="display: none;"></div>
                                                <div class="modelo" id="'.$row['modelo'].'" style="display: none;"></div>
                                                <div class="precio" id="'.$row['precio'].'" style="display: none;"></div></a>';
                                    echo '</div>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <section id="cars_modal">
                <div id="details_cars" style="display: none;">
                    <div id="details">
                        <div id="container">
                            <strong>Matricula: </strong><div id="matricula"></div></br>
                            <strong>Tipo: </strong><div id="tipo"></div></br>
                            <strong>Marca: </strong><div id="marca"></div></br>
                            <strong>Modelo: </strong><div id="modelo"></div></br>
                            <strong>Fabricante: </strong><div id="fabricante"></div></br>
                            <strong>Combustible: </strong><div id="combus"></div></br>
                            <strong>Extra: </strong><div id="extra"></div></br>
                            <strong>Color: </strong><div id="color"></div></br>
                            <strong>Puertas: </strong><div id="puertas"></div></br>
                            <strong>Caballos: </strong><div id="caballos"></div></br>
                            <strong>Marchas: </strong><div id="marchas"></div></br>
                            <strong>Velocidad: </strong><div id="velocidad"></div></br>
                            <strong>Motor: </strong><div id="motor"></div></br>
                            <strong>Fecha de fabricacion: </strong><div id="date_fabric"></div></br>
                            <strong>Precio: </strong><div id="precio"></div></br>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
</div>