@extends('template')

<style>


.background-hero{
  background-image: url("/assets-become-a-host/header1-black.jpg");
  background-position: center center;
  background-size: cover;
  color: white;
  padding: 30px 0px;
}
.background-price{
  background: white;
  color: #484848;
  border-radius: 5px;
  padding: 20px 0px;
}
.background-price .price-banner{
  padding: 10px 25px;
  background: #FF5A5F;
  color: white;
  text-align: center;
}

.background-price .price-banner .container-img{
  max-width: 40px;
    width: 40px;
    height: 40px;
    max-height: 40px;
    overflow: hidden;
    margin: 0px;
    position: relative;
}

.background-price .price-banner .container-img img{
  top: -25px;
    height: 100px;
    width: 100px;
    left: -35px;
    position: absolute;
}


.background-price .price-banner h5{
  margin: 0px;
  line-height: 56px;
  height: 40px;
  margin: 0px;
  vertical-align: top;
}
.background-price .price-details{
  padding: 5px 25px;
  text-align: right;
}
.background-price table{
  width: 100%;
}
.background-price table tr:not(:last-child){
  border-bottom: solid 1px #9a96964a;
}
.background-price td{
  text-align: right;
  color: #FF5A5F;
  font-weight: bold;
  font-size:12px;
  padding-top: 7px;
  padding-bottom: 7px;
}
.background-price td.city{
  color: #484848;
  text-align: left;
}
.background-price td .price{
  display: inline-block;
  font-size:18px;
  width: 110px;
  text-align: right;
}

.background-price td .currency{
  display: inline-block;
  width: 50px;
  text-align: right;
}
.background-price .price-disclaimer{
  padding: 5px 25px;
  font-size: 9px;
  opacity: 0.5;
  line-height: 9px;
  text-align: center;
}

.hero-legend{
  align-self: flex-end;
}

.hero-legend h5{
  color: #fac60b;
}

.hero-legend h1{
  color: #ffffff;
  margin: 0px;
  font-weight: normal;
}

.hero-legend h1 strong{
  font-weight: bold;
}

.row.display-flex {
  display: flex;
  flex-wrap: wrap;
}
.row.display-flex > [class*='col-'] {
  display: flex;
  flex-direction: column;
}

.center-text{
  text-align:center;
}

.primary-color{
  color: #FF5A5F;
}

.secondary-color{
  color: #75d4b5;
}

.process hr{
  border-top: solid 1px #ff5a5f94;
}

.process .step{
  border-radius: 50px;
  height: 30px;
  font-weight: 600;
  height: 30px;
  width: 30px;
  font-size: 16px;
  background: white;
  margin: -28px auto 20px;
  color: #FF5A5F;
}

.process .description{
  
  max-width: 180px;
    margin: 0px auto;
}

.process-reserva{
  color: #484848;
  padding: 40px 100px;
  background: #ececec;
}

.process-reserva hr{
  border-top: solid 1px #fac60b;
}

.process-reserva .step{
  border-radius: 50px;
    height: 30px;
    font-weight: 600;
    height: 30px;
    width: 30px;
    font-size: 16px;
    margin: 10px auto 0px;
    color: #fac60b;
}

.process-reserva .mark{
  background-color: #fac60b;
}

.process-reserva .description{
  max-width: 180px;
  margin: 0px auto;
}

.m-bt-0{
  margin-bottom: 0px;
  margin-top: 0px;
}

.m-t-60{
  margin-top: 60px;
}

.m-t-40{
  margin-top: 40px;
}

.m-t-30{
  margin-top: 30px;
}

.m-t-20{
  margin-top: 20px;
}

.m-t-10{
  margin-top: 10px!important;
}

.m-b-20{
  margin-bottom: 20px;
}

.m-b-50{
  margin-bottom: 50px;
}

.process-faq{
  background-image: url("/assets-become-a-host/bk-faqs.png");
  background-position: center center;
  background-size: cover;
  padding-top:50px;
  padding-bottom: 50px;
}

.display-inline{
  display: inline-block;
}

.process-faq img{
  display: inline-block;
}

.process-faq h2{
  display: inline-block;
  font-weight: bold;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}

.panel {
  border-radius: 5px;
}

.panel-title{
  text-align: left;
  margin-top: 15px!important;
  margin-bottom: 15px!important;
  margin-left: 15px!important;
  margin-right: 15px!important;
}

.panel-title a:hover,
.panel-title a{
  text-decoration: none!important;
}

.custom-check div{
  margin-bottom: 15px;
}

.custom-check > div{
  display: flex;
}

.custom-check div.text-check{
  width: calc(100% - 30px);
}

.custom-check div.single-check
{
  background-image: url("/assets-become-a-host/check.png");
  background-position: center center;
  background-size: cover;
  width: 30px;
  height: 30px;
  margin-bottom: 25px;
}

.custom-check-button{
  text-align: left;
  margin: 0px auto;
  padding: 20px 30px;
  color: #e5ebbc;
  background-color: #8dc4b7;
  border-radius: 3px;
}

.custom-check-button {
    display: -ms-inline-flexbox;
    display: -webkit-inline-flex;
    display: inline-flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    }

.custom-check-button .custom-check-button-item {
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
    -webkit-flex: 0 1 auto;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    -webkit-align-self: auto;
    -ms-flex-item-align: auto;
    align-self: auto;
}

.custom-check-button img.custom-check-button-item{  
  width: 40px;
  margin-left: 20px;
}

.custom-check-button h5.custom-check-button-item{  
  margin: 0px;
}

.testimonio{
  background-color: #e7ecc1;
  height: 100%;
}

.testimonio img{
  width: 100%;
}

.testimonio p{
  margin: 15px;
  text-align: left;
}

.panel-body{
  text-align:left
}

#site-content{
  font-size: 16px;
}


</style>

@section('main')
    <main id="site-content" role="main" >
      <div class="background-hero">
        <div class="page-container-responsive">
          <div class="row display-flex">
            <div class="col-md-8 hero-legend">
              <h5>¡CONVERTITE EN ANFITRIONA!</h5>
              <h1>Cada habitación es un <strong>emprendiemineto.</strong></h1>
              <p>¡Generá dinero extra con esa habitación libre que tenés en tu casa!</p>
            </div>
            <div class="col-md-4">
              <div class="background-price">
                <div class="price-banner">
                  <div class="display-inline container-img" >
                    <img src="/assets-become-a-host/ic-ubication.svg" alt="">
                  </div>
                  <h5 class="display-inline">Precios de referencia</h5>
                </div>
                <div class="price-details">
                  <div class="row">
                    <div class="col-md-12">
                      <table>
                        <tr>
                          <td class="city">Palermo</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">11.700/mes*</div></td> 
                        </tr>
                        <tr>
                          <td class="city">Recoleta</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">10.000/mes*</div></td> 
                        </tr>
                        <tr>
                          <td class="city">Retiro</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">9.300/mes*</div></td> 
                        </tr>
                        <tr>
                          <td class="city">Zona Norte</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">9.300/mes*</div></td> 
                        </tr>
                        <tr>
                          <td class="city">Zona Norte</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">9.300/mes*</div></td> 
                        </tr>
                        <tr>
                          <td class="city">Zona Norte</td>
                          <td><div class="currency">AR$</div>
                          <div class="price">9.300/mes*</div></td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="price-disclaimer">
                  *Son valores aproximados, sin ser definitivos. Los precios varían según: barrio, baño privado,
                  aire acondicionado, amenities del edificio, mantenimiento del departamente, comentarios de 
                  húespedes anteriores, etc
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="page-container-responsive">
          <div class="row center-text m-t-40">
            <h3 class="primary-color m-bt-0 ">¿Tenés una habitación libre?</h3>
            <h4 class="secondary-color m-t-10 m-bt-0">Ponela en alquiler de manera segura y generá ingresos propios</h4>
          </div>
          <div class="row center-text m-t-40 process">
            <div class="col-md-12">
              <hr>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3"> 
                  <div class="step">
                    1
                  </div>
                  <div>
                    <div class="description">
                      <img src="/assets-become-a-host/icono-1.png" alt="icon">
                    </div>
                    <h4><strong class="primary-color">Creá tu anuncio</strong></h3>
                    <p>Completá el formulario con los datos que necesitamos para ayudarte a plicar el alquiler.</p>
                    <strong>¡Es súper fácil!</strong>
                  </div>
                </div>
                <div class="col-md-3"> 
                  <div class="step">
                    2
                  </div>
                  <div>
                    <div class="description">
                      <img src="/assets-become-a-host/icono-2.png" alt="icon">
                    </div>
                    <h4><strong class="primary-color">Elegí las condiciones</strong></h3>
                    <p>Podés conocer el perfil de tu húesped antes de que ingrese. Vos elegís el precio de tu habitación y su disponibilidad.</p>
                    <strong>Si necesitas una mano, <br> ¡Nosotros te ayudamos!</strong>
                  </div>
                </div>
                <div class="col-md-3"> 
                  <div class="step">
                    3
                  </div>
                  <div>
                    <div class="description">
                      <img src="/assets-become-a-host/icono-3.png" alt="icon">
                    </div>
                    <h4><strong class="primary-color">Presentá tu habitación</strong></h3>
                    <p>Porque la primera impresión es la que cuenta, una fotógrafa te visita sin costo adicional para sacar fotos del lugar.</p>
                    <strong>¡Listo tu habitación ya se empieza a ofrecer!</strong>
                  </div>
                </div>
                <div class="col-md-3"> 
                  <div class="step">
                    4
                  </div>
                  <div>
                    <div class="description">
                      <img src="/assets-become-a-host/icono-4.png" alt="icon">
                    </div>
                    <h4><strong class="primary-color">Confiá en nuestra experiencia</strong></h4>
                    <p>Hace más de 10 años que trabajamos en el rubro.</p>
                    <strong>¡Estamos con vos para asesorarte!</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row center-text m-t-40 process-reserva">
            <div class="col-md-12 m-b-20">
              <h3 class="m-bt-0 ">¿Tenés una reserva?</h3>
              <h4 class="m-t-10 m-bt-0">Conocé a tu húesped, acordá los términos y empezá a generar ingresos propios.</h4>
            </div>
            <hr>
            <div class="col-md-4">
              <div class="description">
                <img src="/assets-become-a-host/icono-5.svg" alt="icon">
              </div>
              <div class="step">
                1
              </div>
              <div>
                <h4><strong class="m-b-20">Recibí solicitudes de reserva</strong></h3>
                <p>Cuando alguien esté interesado en tu habitación vas a recibir un email con su información y vas a tener la posibilidad de hacerle preguntas en nuestra plataforma.</p>
                <span class="mark"><strong>Tenés 24hs. para aceptar o rechazar la solicitud de reserva.</strong></span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="description">
                <img src="/assets-become-a-host/icono-6.svg" alt="icon">
              </div>
              <div class="step">
                2
              </div>
              <div>
                <h4><strong class="m-b-20">Recibí a tu nuevo huésped</strong></h3>
                <p>Cuando confirmes la reserva los pondremos en contacto. Luego, ambos firmarán el contrato. <br><br>La entrega de llaves coincide con el día de entrada al hogar.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="description">
                <img src="/assets-become-a-host/icono-7.svg" alt="icon">
              </div>
              <div class="step">
                3
              </div>
              <div>
                <h4><strong class="m-b-20">Comenzá a generar ingresos propios</strong></h4>
                <p>El día de ingreso del huésped recibirás el alquiler del primer mes y el deposito de garantía. <br><br> <strong>¡Listo! Ya creaste una nueva fuente de ingresos propios.</strong></p>
              </div>
            </div>
          </div> 
          <div class="row center-text process-faq">
              <div class="col-md-8 col-md-offset-2 text-left">
                <img src="/assets-become-a-host/icono-8.svg" alt="icon">
                <h2 class="primary-color">
                  Preguntas Frecuentes
                </h2>
              </div>
              <div class="col-md-8 col-md-offset-2">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          ¿Quiénes son nuestros huéspedes?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                      Son jóvenes estudiantes o profesionales que buscan una habitación para alquilar en una casa o departamento de familia, es decir donde viva el o la dueña. 
                      Vienen a pasar un periodo de su vida en Buenos Aires (mayor a un mes) por estudio, trabajo o vacaciones. 
                      Son extranjeros (principalmente de Europa, Norteamérica y Latinoamérica) o de otras provincias de Argentina.  
                      Eligen esta modalidad para alojarse, por cuestiones prácticas y porque buscan inmersión en la vida local y practicar el español (si son extranjeros). Son personas autónomas y responsables, que buscan tranquilidad y privacidad.
                      <br>
                      Buscan una habitación individual, en su mayoría piden un baño exclusivo (sabemos que eso es muy complicado en la mayoría de las casas). Quieren sentirse cómodos donde están. 
                      <br>
                      No buscan una madre ni una familia, solo quieren una habitación segura y confortable.

                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          ¿Qué tipo de habitaciones puedo ofrecer?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                      Tu vivienda debe tener como mínimo dos habitaciones, una que alquilas y una para vos. No aceptamos camas en el living.
                      Todas las habitaciones deben estar amuebladas. 
                      Para poder ser ingresadas a nuestra base las habitaciones tienen que ser habitables, es decir, estar en condiciones de higiene y limpieza. Durante la visita, nos preguntamos: ¿nosotros viviríamos ahí? Los huéspedes no buscan vivir en el hotel Hyatt, pero tampoco en un sofá cama en el living ;)
                      Visitamos y chequeamos cada una de las habitación que ofrecemos y exploramos la zona donde se encuentra ubicada. 
                      Es importante que sepas que nos reservamos el derecho de elegir las habitaciones que ofrecemos.

                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          ¿Qué espacios puede usar mi huésped?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">
                      Puede usar libremente su habitación y el baño privado o compartido y debe tener acceso a los espacios compartidos de la casa: cocina, living, comedor, etc. En caso de que fuera necesario se pueden acordar horarios de uso.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingSix">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          ¿Qué tengo que darle a mis huéspedes?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                      <div class="panel-body">
                        
                        <ul>
                          <li>Un juego de toallas y sábanas limpias una vez por semana. </li>
                          <li>La limpieza semanal de la habitación.</li>
                          <li>Las llaves del edificio y del departamento.</li>
                          <li>Las llaves de la habitación (en el caso de que la soliciten). </li>
                          <li>Liberarle los placares de la habitación. </li>
                          <li>Dejarle libre un estante en la alacena de la cocina y uno en la heladera. </li>
                        </ul>
                        <strong>
                        No hay que darles comidas!
                        <br>
                        Acordate que con el pago de su alquiler están incluidos todos los servicios de tu casa (WiFI, expensas, electricidad, gas, etc.)
                        </strong>
                       </div>
                    </div>
                  </div>
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          ¿Qué tipo de contrato respalda mi alquiler?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body">
                      Trabajamos con contratos de locación turística. 
                      Una vez que la reserva queda confirmada <strong> te pondremos en contacto con tu huésped para que combines el día y horario exacto de su llegada.</strong>
                      Además te enviaremos un <strong>contrato de locación turística que tendrás que firmar en versión online con tu huésped</strong> donde quedarán estipulados los derechos y compromisos de cada parte y las condiciones básicas del contrato, como el precio y el plazo. 

                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default m-t-20">
                    <div class="panel-heading" role="tab" id="headingFix">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFix" aria-expanded="false" aria-controls="collapseFix">
                          ¿Cuánto debo pedir de alquiler por la habitación?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFix">
                      <div class="panel-body">
                        Nosotras te podemos ayudar en este punto que muchas veces es el más complicado de resolver. 
                        Estos son los factores que te pueden ayudar para ponerle precio a tu habitación:
                        <ul>
                          <li><strong>Ubicación</strong>: algunas zonas son más requeridas que otras (por ejemplo, Palermo es el barrio más buscado, seguido por Recoleta y Belgrano).</li>
                          <li><strong>Comodidades de la habitación</strong>: contar <strong>con baño privado</strong> es un plus muy importante que muchos huéspedes buscan para mantener absoluta privacidad. </li>
                          <li>Otras comodidades que también marcan el valor del alquiler son las <strong>camas dobles y contar con aire acondicionado</strong>.</li>
                          <li>En el caso de las <strong>habitaciones de servicio</strong>, al tener dimensiones más chicas que lo habitual, el valor solicitado suele ser menor.</li>
                          <li><strong>Las características del edificio/casa</strong>: si el edificio cuenta con amenities o se trata de una casa con patio, jardín, parrilla o pileta, todos esos factores elevan el valor del alquiler. </li>
                        </ul>
                        <strong>Y uno de los factores más importantes son los comentarios de los huéspedes anteriores. Un lugar con buenas opiniones de sus inquilinos se alquila mucho más que uno que no tenga o tenga malas críticas. </strong>
                        <br>
                        Nuestra recomendación es empezar con un precio atractivo para ir generando buenas evaluaciones. 
                        
                        Para llegar a un <strong>precio justo y coherente</strong>, te recomendamos evaluar habitaciones similares a la tuya en nuestra plataforma y considerar los aspectos mencionados.

                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>  
          <div class="row center-text m-t-60">
            <div class="col-md-12">
              <h2 class="primary-color text-left">¿Por qué elegir <br> <strong> Spare Rooms Buenos Aires?</strong></h2>
            </div>
            <div class="col-md-6 text-left">
              <div class="custom-check">
                <div><div class="single-check"></div><div class="text-check">
                Estamos junto a vos en cada paso para acompañarte y asesorarte: <strong>te asesoramos sobre esta nueva modalidad</strong>. Desde cómo hospedar a un huésped, hasta cómo amueblar y preparar la habitación de la manera más práctica.

                </div></div>
                <div><div class="single-check"></div><div class="text-check">
                En caso de ser necesario actuamos como <strong>mediadores</strong> entre vos y tu inquilino.
                </div></div>
                <div><div class="single-check"></div><div class="text-check">
                Sabemos lo que hacemos porque estuvimos ahí. Comenzamos este emprendimiento hace más de 10 años, alojamos a más de 2145 personas y por las mismas necesidades que te llevaron a conocernos.

                </div></div>
                <div><div class="single-check"></div><div class="text-check">
                Nuestras exigencias son las tuyas. Por eso todos los acuerdos se realizan a través de un contrato de locación turística entre las partes. <strong>¡Seguridad primero! </strong>
                </div></div>
                <div><div class="single-check"></div><div class="text-check">
                Podrás generar una fuente de ingreso genuino a través de recursos propios (esa habitación vacía que tenés en tu casa), en pocas palabras: <strong>¡Te vas a convertir en una emprendedora!</strong>

                </div></div>
                <div><div class="single-check"></div><div class="text-check">
                Te ayudamos a que <strong>tu tiempo se optimice</strong> porque las solicitudes que recibís encajan con tus preferencias. Te ahorrás visitas y entrevistas cansadoras e incómodas. Vas a recibir emails solamente cuando haya una solicitud de reserva firme, con los datos sobre la reserva y el perfil del estudiante.

                </div></div>
              </div>
              <div class="center-text">
                  <a class="login_popup_open" href="{{ url('/') }}/rooms/new">
                  <div class="custom-check-button">
                    <h5 class="custom-check-button-item">¡QUIERO CONVERTIRME <br>EN ANFITRIONA!</h5>
                    <img class="custom-check-button-item" src="/assets-become-a-host/button-custom-check.svg" alt="">
                  </div>
                  </a>
              </div>
            </div>
            <div class="col-md-6">
              <img style="max-width: 100%;" src="/assets-become-a-host/elementos–4.jpg" alt="">
            </div>
          </div>  
          <div class="row center-text m-t-60 m-b-50">
              <div class="col-md-12">
                <img class="display-inline" src="/assets-become-a-host/icono-9.svg" alt="icon">
                <h2 class="primary-color display-inline">
                  Testimonios
                </h2>
              </div>
              <div class="col-md-12 m-t-40">
                <div class="row display-flex">
                  <div class="col-md-4 ">
                    <div class="testimonio">
                      <img src="/assets-become-a-host/testimonio_1-black.jpg" alt="">
                      <p>Una de las cosas que más me gusta de este emprendimiento es poder conocer personas, culturas y compartir experiencias. Más allá del dinero, que también es bueno, me siento empoderada, independiente y privilegiada de poder compartir mi espacio con otras personas. ¿Un consejo?: ¡Tener un emprendimiento es lo mejor que te puede pasar, a cualquier edad!</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="testimonio">
                      <img src="/assets-become-a-host/testimonio_2-black.jpg" alt="">
                      <p>Alquilar mi habitación con el apoyo de Spare Rooms Buenos Aires no solo me generó un beneficio económico sino también emocional. Además de darme mayor autonomía económica, este proyecto amplió mi mundo enormemente.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="testimonio">
                      <img src="/assets-become-a-host/testimonio_3-black.jpg" alt="">
                      <p>Aprendí que lo más importante para trabajar en turismo es conseguir que haya confianza entre todas las partes. ¡La gente es buena, hay que confiar más en el otro, pero no por eso olvidar las reglas de convivencia!</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>       
        </div>
      </div>
    </main>
 
@stop


