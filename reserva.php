<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="no-index"> <!-- Evitar Indexasion -->
    <title>Reserva Trail del viento</title>



    <link rel="stylesheet" href="style/global.css?asb">
    <link rel="stylesheet" href="style/reserva.css?abs">

    <script defer src="script/global.js?a"></script>
    <script defer src="script/reserva.js"></script>


    <!-- LOGOS -->
    <script defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- faviCon -->
    <link rel="shortcut icon" type="image/x-icon" href="../huighnanco/favi-con.ico" />
</head>

<body class="dark">

  
  <?php
include "components/header.php";
include "components/login.php";
  ?>


    <!-- ----------------------RESERVA---------------------- -->
    <form action="" id="form-Reserva">
        <div class="separador-header"></div>
        <div class="ctn-title">
            <h1 class="title-reserva">Elegi tu circuito!</h1>
        </div>

        <div class="ctn-reserva">
            <!-- 5km -->
            <div class="card-reserva">
                <div class="custom-shape-divider-top-1667010598">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
                <label for="5km" class="label-card"></label>
                <input type="radio" class="check-card-reserva" id="5km" name="reserva">

                <!--       <h2 class="km-reserva">5km</h2> -->
                <h2 class="km-reserva">5<span class="txt-km">km</span></h2>


                <div class="info-card-reserva">
                    <p> Dificultad baja <span class="symbol-info-reserva-yes">✔</span></p>

                    <p> Noob friendly
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p> Una manzana oxidada
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p> Apoyo moral
                        <span class="symbol-info-reserva-no">✘</span>
                    </p>
                </div>

                <div class="usd-reserva">
                    <p>Usd $25</p>
                </div>
            </div>

            <!-- 10km -->
            <div class="card-reserva">
                <div class="custom-shape-divider-top-1667010598">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
                <label for="10km" class="label-card"></label>
                <input type="radio" class="check-card-reserva" id="10km" name="reserva" required>
                <h2 class="km-reserva">10<span class="txt-km">km</span></h2>


                <div class="info-card-reserva">
                    <p class="txt-info-card-reserva">Dificultad Media<span class="symbol-info-reserva-yes">✔</span></p>

                    <p class="txt-info-card-reserva"> Una papaya
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p>Noob friendly
                        <span class="symbol-info-reserva-no">✘</span>
                    </p>

                    <p> Apoyo moral
                        <span class="symbol-info-reserva-no">✘</span>
                    </p>
                </div>
                <div class="usd-reserva">
                    <p>Usd $85</p>
                </div>
            </div>

            <!-- 25km -->
            <div class="card-reserva">
                <div class="custom-shape-divider-top-1667010598">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
                <label for="25km" class="label-card"></label>
                <input type="radio" class="check-card-reserva" id="25km" name="reserva">
                <h2 class="km-reserva">25<span class="txt-km">km</span></h2>




                <div class="info-card-reserva">
                    <p class="txt-info-card-reserva">Dificultad Alta
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p> Apoyo moral
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>
                    <p> Banana
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p> Noob friendly
                        <span class="symbol-info-reserva-no">✘</span>
                    </p>



                </div>
                <div class="usd-reserva">
                    <p>Usd $125</p>
                </div>

            </div>

            <!-- 50km -->
            <div class="card-reserva">
                <div class="custom-shape-divider-top-1667010598">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                        preserveAspectRatio="none">
                        <path
                            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                            class="shape-fill"></path>
                    </svg>
                </div>
                <label for="50km" class="label-card"></label>
                <input type="radio" class="check-card-reserva" id="50km" name="reserva">
                <h2 class="km-reserva">50<span class="txt-km">km</span></h2>





                <div class="info-card-reserva">

                    <p class="txt-info-card-reserva"> Dificultad Saitama<span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p> Apoyo moral<span class="symbol-info-reserva-yes">✔
                        </span> </p>

                    <p> Gloria y honor
                        <span class="symbol-info-reserva-yes">✔</span>
                    </p>

                    <p>Debiles e indecisos<span class="symbol-info-reserva-no">✘</span> </p>

                </div>



                <div class="usd-reserva">
                    <p>
                        Usd $199 <span class="precio-oferta-reserva">Usd $200</span>
                    </p>
                    
                </div>

            </div>



            <!-- endDescuentos -->



            <!-- ----------------------DESCUENTOS---------------------- -->
        </div>

        <div class="ctn-descuentos">
            <p class="dto-residentes">30% de descuento para residentes Argentinos!
            <p class="dto-extrangeros"> Si sos extrangero pagas un 180% más</p>
            </p>
        </div>



        <!-- ----------------------Formulario---------------------- -->

        <div class="form-reserva">
            <div class="ctn-form-reserva">
                <div class="ctn-form-doble" id="ctn-form-doble-nombre">


                    <div class="ctn-input">
                    
                    
                        <input type="text" class="input-form-reserva" required>
                        <span class="input-toolkit">Nombre<span class="required"> *</span></span>
                    </div>

                    <div class="ctn-input">
                 
                        <input type="text" class="input-form-reserva" required>
                        <span class="input-toolkit">Apellido<span class="required"> *</span></span>
                    </div>
                </div>

                <!-- email -->
                <div class="ctn-input" id="ctn-input-mail">
                    <input type="mail" class="input-form-reserva" id="mail-form-reserva" required
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" placeholder="eMail *">

                </div>

                <!-- pais -->
                <div class="ctn-form-doble">
                    <div class="ctn-label">
                        <label>País <span class="required"> *</span></label>
                        <select type="text" class="input-form-reserva" id="mySelect" required>
                            <option value="1">Argentina</option>
                            <option value="2">Extrangero</option>
                            <option value="3">Aguas Internacionales</option>
                        </select>
                    </div>
                </div>

                <div class="ctn-rights-reserva">
                    <input type="checkbox" id="rights" class="radioCheckStyle" required>
                    <label for="rights" class="label-rights">Aceptas entregar tu informacion para alimentar la base de
                        datos China? <span class="required">*</span></label>
                </div>
                <p id="txt-cod-descuento">codigo de descuento: Ciclista</p>
                <div class="ctn-cod-totalPagar">

                    <input autocomplete="off" id="cod-descuento-reserva" type="text" placeholder="Codigo de descuento">

                    <div class="ctn-TotalPagar-Reserva">
                        <p id="txtTotalPagar">Elegi un circuito!</p>
                    </div>
                </div>

                <div class="ctn-submit">
                    <input type="submit" id="btn-submit-reserva" title="Reservar" value="Reservar">

                </div>

            </div>


        </div>

        <!-- endForm -->

    </form>


<?php
include "components/footer.php";
?>


</body>
</html>