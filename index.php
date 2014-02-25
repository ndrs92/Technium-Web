<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
 <meta charset="utf-8" />
 <!-- Cambia el viewport dependiendo del dispositivo que se esté usando -->
 <meta name="viewport" content="width=device-width" />

 <title>10 a 13 de Abril - Technium 2014</title>

 <!-- CSS incluídos (Comprimido) -->
 <link rel="stylesheet" href="stylesheets/foundation.css">
 <link rel="stylesheet" href="stylesheets/design.css">
 <link rel="icon" type="image/png" href="/favico.ico">
 <script src="javascripts/jquery.js"></script>
 <script src="javascripts/jquery.scrollzip.js"></script>
 <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
 <script src="javascripts/gmap3.js"></script>
 <script src="javascripts/modernizr.foundation.js"></script>
 <script src="javascripts/load.js"></script>

</head>
<!-- Carga la localización y pone un marcador en las coordenadas que aparecen -->
<body onload='$("#mygmap").gmap3({
marker:{
latLng: [42.34288, -7.85144]
},
map:{
options:{
center: [42.34288, -7.85144],
zoom:17,
mapTypeId: google.maps.MapTypeId.ROADMAP,
mapTypeControl: true,
navigationControl: true,
scrollwheel: true,
streetViewControl: false
}
}
});'>
<section class="topbar" id="pro-top">
   <div class="row collapse">
      <div class="three columns mobile-three">
         <div class="logo">
            <img id="logofloat" src="images/logotech1.png"  alt="Flatline" />
         </div>
      </div>
      <div class="nine columns mobile-one">
         <a class="simple-menu top" style="float:right !important;" href="#sidr"><span class="ico-round white"><i class="icon-reorder"></i></span></a>
         <div class="text-right">
            <ul class="nav-list" id="nav-list">
               <li><a onclick="$('#pro-services').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Eventos</a></li>
               <li><a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Torneos</a></li>
               <li><a href="http://goo.gl/maps/Xcm2m">Mapa</a></li>
               <li><a onclick="$('.clients').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Fotos</a></li>
            </ul>
            &nbsp; &nbsp; <a class="button" id="sign-up" onclick="$('.subscribe').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">¡Apúntate!</a>

         </div>
         <div id="sidr">
            <div class="sidr-gutter"></div>
            <ul>
               <li>&nbsp;</li>
               <li><a onclick="$('#pro-services').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> Eventos</a></li>
               <li><a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> Torneos</a></li>
               <li><a onclick="$('#mygmap').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> Mapa</a></li>
               <li><a onclick="$('.subscribe').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> ¡Apúntate!</a></li>			   
            </ul>
         </div>
      </div>
   </div>
</section>







<section class="hero">
   <div class="row">
      <div class="twelve text-center columns">
         <h3><small>Bienvenido... otra vez</small></h3>
         <h1>TECHNIUM LAN PARTY 2014</h1>
         <a href="#" onclick="$('.hero-base').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><img src="images/arrow_sans_down-512.png" width="30"/></a>
      </div>
   </div>
</section>





<section class="hero-base">
   <div class="row ">
      <div class="twelve columns text-center">
         <h1>Del 10 al 13 de Abril de 2014</h1>
      </div>
   </div>
</section>





<section class="service" id="pro-services">
   <div class="row ">
      <div class="twelve text-center columns">

         <h3><small>Gaming. Dev. Knowledge</small></h3>
         <h1>EVENTOS</h1>
         
      </div>
   </div>

   <div class="row">
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/service-1.jpg" alt="" />
            <div class="center-list mt30">
               <h4>Torneos</h4>
               <ul class="icocheck">
                  <a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><li>&nbsp; League Of Legends</li></a>
                  <a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><li>&nbsp; Counter Strike: Global Offensive</li></a>
                  
               </ul>
            </div>
            <!-- <a class="button blank lined dark large expand">Detalles</a> -->
         </div>
      </div>
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/service-3.jpg" alt="" />
            <div class="center-list mt30">
               <h4>Charlas</h4>
               <ul class="icocheck">
                  <li>&nbsp; Nada por aquí aún</li>
               </ul>
            </div>
            <!-- <a class="button blank lined dark large expand">Detalles</a> -->
         </div>
      </div>
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/service-2.jpg" alt="" />
            <div class="center-list mt30">
               <h4>Más</h4>
               <ul class="icocheck">


                  <a class="open-project" data-project="31" href="#project31"><li>&nbsp; Cafetería</li> </a>


                  <div class="project-window" id="showcase31">
                     <div class="row collapse content">
                        <div class="twelve columns">
                           <header>
                              <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                              <h3>Cafetería</h3>
                           </header>
                           <article class="">
                              <div class="row collapse">
                                 <div class="five columns p20">
                                    <hr>
                                    <div class="row collapse mt20">
                                       <p>Al igual que en el anterior evento, habrá un servicio de cafetería adjunto en el recinto del evento.</p>
                                       <p>A medida que tengamos información de los productos que habrá, se irá colocando la información del precio</p>
                                       <div class="six mobile-two columns">
                                          <ul class="no-bullet">
                                             <li></i> Buena intención </li>

                                          </ul>
                                       </div>
                                       <div class="six mobile-two columns">
                                          <ul class="no-bullet">
                                             <li>Muchos €</li>

                                          </ul>
                                       </div>
                                    </div>
                                    <hr>
                                 </div>
                                 <div class="seven columns text-center p20">
                                    <div class="cycle-slideshow animate"
                                    data-cycle-fx="scrollHorz"
                                    data-cycle-pause-on-hover="true"
                                    data-cycle-speed="1000"
                                    data-cycle-timeout="2000"
                                    data-cycle-prev=".prev" 
                                    data-cycle-next=".next" 
                                    data-cycle-easing="easeInExpo"
                                    >
                                    <img src="images/t2013_1.jpg" alt="" />
                                    
                                 </div>
                              </div>
                           </div>
                        </article>
                     </div>
                  </div>
                  <!-- END.INNER-->
               </div>



               <a class="open-project" data-project="32" href="#project32"><li>&nbsp; Miscelánea</li> </a>



               <div class="project-window" id="showcase32">
                  <div class="row collapse content">
                     <div class="twelve columns">
                        <header>
                           <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                           <h3>Miscelánea</h3>
                        </header>
                        <article class="">
                           <div class="row collapse">
                              <div class="five columns p20">
                                 <hr>
                                 <div class="row collapse mt20">
                                    <div class="six mobile-two columns">
                                       <p>Habrá una serie de actividades durante la realización del evento:</p>
                                       <ul class="no-bullet">
                                          <li>Taller de Hama Beads.</li>
                                          <li>Stand de prueba de Oculus Rift</li>

                                       </ul>
                                    </div>
                                    <!--<div class="six mobile-two columns">
                                       <ul class="no-bullet">
                                          <li>Con info</li>

                                       </ul>
                                    </div>-->
                                 </div>

                              </div>
                              <div class="seven columns text-center p20">
                                 <div class="cycle-slideshow animate"
                                 data-cycle-fx="scrollHorz"
                                 data-cycle-pause-on-hover="true"
                                 data-cycle-speed="1000"
                                 data-cycle-timeout="2000"
                                 data-cycle-prev=".prev" 
                                 data-cycle-next=".next" 
                                 data-cycle-easing="easeInExpo"
                                 >
                                 <a class="prev"><img height=64px width=64px src="images/arrow_left.png" /></a>
                                 <a class="next"><img height=64px width=64px src="images/arrow_right.png" /></a>
                                 <img src="images/oculus1.jpg" alt="" />
                                 <img src="images/hama1.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
               <!-- END.INNER-->
            </div>









            <a class="open-project" data-project="33" href="#project33"><li>&nbsp; Deporte</li> </a>


            <div class="project-window" id="showcase33">
               <div class="row collapse content">
                  <div class="twelve columns">
                     <header>
                        <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                        <h3>Deporte</h3>
                     </header>
                     <article class="">
                        <div class="row collapse">
                           <div class="five columns p20">
                              <hr>
                              <div class="row collapse mt20">
                                 <p>Como en la anterior edición, se organizará un concurso de lanzamiento de CD</p>
                                 <div class="six mobile-two columns">

                                    <ul class="no-bullet">
                                       <li></i> Rellenar </li>

                                    </ul>
                                 </div>
                                 <div class="six mobile-two columns">
                                    <ul class="no-bullet">
                                       <li>Con info</li>

                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="seven columns text-center p20">
                              <div class="cycle-slideshow animate"
                              data-cycle-fx="scrollHorz"
                              data-cycle-pause-on-hover="true"
                              data-cycle-speed="1000"
                              data-cycle-timeout="2000"
                              data-cycle-prev=".prev" 
                              data-cycle-next=".next" 
                              data-cycle-easing="easeInExpo"
                              >
                              <img src="images/lanzcd1.jpg" alt="" />
                           </div>
                        </div>
                     </div>
                  </article>
               </div>
            </div>
            <!-- END.INNER-->
         </div>








      </ul>
   </div>
   <!-- <a class="button blank lined dark large expand">Detalles</a> -->
</div>
</div>
</div>
</section>





<section class="fix-1"></section>





<section id="work">

   <div class="twelve text-center columns">
      <h1>TORNEOS</h1>
      <br/>
      <br/>
      <br/>
      <br/>

      <h1>En desarrollo... </h1>
   </div>
   <div class="row">
      <div class="twelve text-center columns">
         <h3><small></small></h3>
         <h1></h1>
         <div class="spacer6"></div>
      </div>
   </div>



   <!--
   <div class="row">
      <div class="three mobile-two columns">
         <figure class="project" id="project01">
            <div class="thumb">
               <a class="open-project" data-project="01" href="#project01"> <img src="images/feat-01.jpg" alt="" /></a>

            </div>
            <figcaption>
               <h3>League Of Legends</h3>
               <p>Technium 2014</p>
            </figcaption>
         </figure>

         <div class="project-window" id="showcase01">
            <div class="row collapse content">
               <div class="twelve columns">
                  <header>
                     <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                     <h3>League Of Legends</h3>
                  </header>
                  <article class="">
                     <div class="row collapse">
                        <div class="five columns p20">
                           <img src="images/html5.png" alt="" />
                           <hr>
                           <div class="row collapse mt20">
                              <div class="six mobile-two columns">
                                 <ul class="no-bullet">
                                    <li><i class="icon-angle-right"></i> Ya :</li>
                                    <li><i class="icon-angle-right"></i> Veré :</li>
                                    <li><i class="icon-angle-right"></i> Que :</li>
                                    <li><i class="icon-angle-right"></i> Pongo :</li>
                                    <li><i class="icon-angle-right"></i> Por :</li>
                                    <li><i class="icon-angle-right"></i> Aquí :</li>
                                    <li><i class="icon-angle-right"></i> Coleguilla :</li>
                                    <li><i class="icon-angle-right"></i> Chorbo :</li>
                                 </ul>
                              </div>
                              <div class="six mobile-two columns">
                                 <ul class="no-bullet">
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                    <li>test</li>
                                 </ul>
                              </div>
                           </div>
                           <hr>
                           <ul class="tags">
                              <li><i class="icon-tags"></i> Tags : </li>
                              <li><a href="#">Ya</a></li>
                              <li><a href="#">veremos</a></li>
                              <li><a href="#">que</a></li>
                              <li><a href="#">uso</a></li>
                              <li><a href="#">tienen</a></li>
                           </ul>
                           <hr>
                           <div class="text-center"><a class="button expand">Botonaco</a></div>
                        </div>
                        <div class="seven columns text-center p20">
                           <div class="cycle-slideshow animate"
                           data-cycle-fx="scrollHorz"
                           data-cycle-pause-on-hover="true"
                           data-cycle-speed="1000"
                           data-cycle-timeout="2000"
                           data-cycle-prev=".prev" 
                           data-cycle-next=".next" 
                           data-cycle-easing="easeInExpo"
                           >
                           <a class="prev"><img height=64px width=64px src="images/arrow_left.png" /></a>
                           <a class="next"><img height=64px width=64px src="images/arrow_right.png" /></a>
                           <img src="images/feat-lrg-01.jpg" alt="" />
                           <img src="images/feat-lrg-02.jpg" alt="" />
                           <img src="images/feat-lrg-03.jpg" alt="" />
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </div>



   <div class="three mobile-two columns">
      <figure class="project" id="project02">
         <div class="thumb">
            <a class="open-project" data-project="02" href="#project02"><img src="images/feat-02.jpg" alt="" /></a>

         </div>
         <figcaption>
            <h3>Counter Strike: Global Offensive</h3>
            <p>Technium 2014</p>
         </figcaption>
      </figure>
      <div class="project-window" id="showcase02">
         <div class="row collapse content">
            <div class="twelve columns">
               <header>
                  <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                  <h3>Counter Strike: Global Offensive</h3>
               </header>
               <article class="">
                  <div class="row collapse">
                     <div class="five columns p20">
                        <img src="images/html5.png" alt="" />
                        <hr>
                        <div class="row collapse mt20">
                           <div class="six mobile-two columns">
                              <ul class="no-bullet">
                                 <li><i class="icon-angle-right"></i> Ya :</li>
                                 <li><i class="icon-angle-right"></i> Veré :</li>
                                 <li><i class="icon-angle-right"></i> Que :</li>
                                 <li><i class="icon-angle-right"></i> Pongo :</li>
                                 <li><i class="icon-angle-right"></i> Por :</li>
                                 <li><i class="icon-angle-right"></i> Aquí :</li>
                                 <li><i class="icon-angle-right"></i> Coleguilla :</li>
                                 <li><i class="icon-angle-right"></i> Chorbo :</li>
                              </ul>
                           </div>
                           <div class="six mobile-two columns">
                              <ul class="no-bullet">
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                                 <li>test</li>
                              </ul>
                           </div>
                        </div>
                        <hr>
                        <ul class="tags">
                           <li><i class="icon-tags"></i> Tags : </li>
                           <li><a href="#">Ya</a></li>
                           <li><a href="#">veremos</a></li>
                           <li><a href="#">que</a></li>
                           <li><a href="#">uso</a></li>
                           <li><a href="#">tienen</a></li>
                        </ul>
                        <hr>
                        <div class="text-center"><a class="button expand">Botonaco</a></div>
                     </div>
                     <div class="seven columns text-center p20">
                        <div class="cycle-slideshow animate"
                        data-cycle-fx="scrollHorz"
                        data-cycle-pause-on-hover="true"
                        data-cycle-speed="1000"
                        data-cycle-timeout="2000"
                        data-cycle-prev=".prev" 
                        data-cycle-next=".next" 
                        data-cycle-easing="easeInExpo"
                        >
                        <a class="prev"><img height=64px width=64px src="images/arrow_left.png" /></a>
                        <a class="next"><img height=64px width=64px src="images/arrow_right.png" /></a>
                        <img src="images/feat-lrg-01.jpg" alt="" />
                        <img src="images/feat-lrg-02.jpg" alt="" />
                        <img src="images/feat-lrg-03.jpg" alt="" />
                     </div>
                  </div>
               </div>
            </article>
         </div>
      </div>
   </div>
</div>




</div>
</div>

-->

</section>





<section class="fix-2"></section>

<section class="clients" id="pro-work">
   <div class="row">
      <div class="six mobile-four text-center columns">
         <h3><small>AGRADECIMIENTOS</small></h3>
         <h1>PATROCINADORES</h1>
         <div class="spacer6"></div>
         <img src="images/client-list.png" alt="Proline" />
      </div>
      <div class="six mobile-four text-center columns">
         <h3><small>Un breve vistazo...</small></h3>
         <h1>TECHNIUM 2013</h1>
         <p><a href="http://imgur.com/a/SbGcE"> Pincha aquí para ver más</a></p>
         <div class="spacer6"></div>
         <!-- Start Cycle -->
         <div class="cycle-slideshow" data-cycle-caption-plugin='caption2' data-cycle-slides="li" data-cycle-fx='scrollHorz' data-cycle-speed='800' data-cycle-timeout='4000' data-cycle-pause-on-hover="true" data-cycle-prev=".prev" data-cycle-next=".next" data-cycle-overlay-template="<div class=banner-background style=background-image:url(images/{{background}})></div>">
         <ul>
            <li data-cycle-background="t2013sh1.jpg" />
            <li data-cycle-background="t2013sh2.jpg" />
            <li data-cycle-background="t2013sh3.jpg" />
            <li data-cycle-background="t2013sh4.jpg" />
            <li data-cycle-background="t2013sh5.jpg" />
         </ul>
         <a class="prev"><img height=64px width=64px src="images/arrow_left.png" /></i></a>
         <a class="next"><img height=64px width=64px src="images/arrow_right.png" /></i></a>
         <div class="cycle-overlay"></div>

      </div>
      <p><a href="http://imgur.com/a/SbGcE"> Pincha aquí para ver más</a></p>
      <!-- End Cycle -->
   </div>
</div>
</section>




<section class="fix-3"></section>





<section class="team" id="pro-team">


   <div class="row">
      <div class="twelve text-center columns">
         <h3><small>No es cosa de uno solo...</small></h3>
         <h1>STAFF</h1>
         <div class="spacer6"></div>
         
      </div>
   </div>


   <div class="row">
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/staff1.jpg" alt="" />
            <div class="bg-pale">
               <h4>Andrés Vieira</h4>
               <h6>&ldquo;ndrs&rdquo;</h6>
            </div>

         </div>
      </div>
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/staff2.jpg" alt="" />
            <div class="bg-pale">
               <h4>Miguel Esmoris</h4>
               <h6>&ldquo;zupakode&rdquo;</h6>
            </div>

         </div>
      </div>
      <div class="four mobile-four columns text-center">
         <div class="pane">
            <img src="images/staff3.jpg" alt="" />
            <div class="bg-pale">
               <h4>Edgard Ruíz</h4>
               <h6>&ldquo;developergate&rdquo;</h6>
            </div>

         </div>
      </div>
   </div>
</section>






<section class="fix-4"></section>





<section class="subscribe" id="aunno">
   <div class="row">
      <div class="twelve columns text-center">
         <h1>¡APÚNTATE YA!</h1>
         <div class="spacer2"></div>
      </div>
   </div>
   <div class="row">
      <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate bg-light">
         <div class="four columns mobile-four">
            <input type="text" name="name" class="oversize" placeholder="Nombre" />
         </div>
         <div class="four columns mobile-four">
            <input type="text" name="name" class="oversize" placeholder="Nick" />
         </div>
         <div class="four columns mobile-four">
            <input type="text" name="name" class="oversize" placeholder="Teléfono" />
         </div>
         <br>
         <div class="four columns mobile-four">
            <input type="text" name="email" id="mce-EMAIL" class="oversize" placeholder="Correo" />
         </div>
         <div class="four columns mobile-four">
            <input type="submit" class="button large expand" id="mc-embedded-subscribe" name="subscribe" value="Registrarse">

         </div>
      </form>
   </div>
   <div class="row">
      <div class="twelve columns text-center">
       <a href="#lista" ><h4>Recuerda traer todo. Aquí tienes una lista</h4></a>

    </div>
 </div>
 <nod class="nodisp" style="opacity:1;"> No disponible por el momento </nod>
</section>



<!--


<section class="map">
   <div class="row">
      <div class="twelve columns">
         <div class="scale_block">
            <div class="btn_gmap"><a class="button" href="#"><i class="icon-map-marker"></i>&nbsp; Open Google Maps</a></div>
            <div class="scale"><a href="#"><img src="images/map.png" alt="" /></a></div>
         </div>
      </div>
   </div>
</section>


-->


<section class="contact" id="pro-contact">
   <div class="row">
      <div class="twelve columns text-center">
         <h3><small>Contacto</small></h3>
         <h1>INFORMACIÓN</h1>
         <h3><small><small>Para cualquier duda, contacta con nosotros en <patata class="red-text">aseii.contacto@gmail.com</patata></small></small></h3>
      </div>
   </div>	

   <!-- Formulario de contacto, se decidirá mas tarde si se pone -->
  <!-- <form class="bg-light" id="contactfrm" method="post" action="mail.php">
      <div class="row">
         <div class="six columns mobile-four">
            <input type="text" name="name" id="name" class="oversize" placeholder="Nombre" />
         </div>
         <div class="six columns mobile-four">
            <input type="text" name="email" id="email" class="oversize" placeholder="Email" />
         </div>
      </div>
      <div class="row">
         <div class="twelve columns mobile-four">
            <input type="text" name="budget" id="budget" class="oversize" placeholder="Asunto" />
         </div>
      </div>
      <div class="row">
         <div class="twelve columns mobile-four">
            <textarea placeholder="Contenido" class="oversize" name="message" id="message" style="height:300px;"></textarea>
         </div>
      </div>
      <div class="row">
         <div class="twelve columns mobile-four">
            <input type="submit" class="button large expand" value="Enviar Mensaje">
         </div>
      </div>
</form>
	
  <div id="loading">
<div class="text-center">
<img src="images/loader.gif" alt="" />
    <h3>Enviando tu mensaje....</h3>
</div>
  </div>
  <div id="success">
  </div>
-->



<div class="spacer6"></div>


<div class="row">
   <div class="three columns mobile-two"></div>
   <div class="three columns mobile-two">
      <h5>Asociación</h5>
      <ul class="no-bullet">
         <li><strong>ASEII</strong></li>
         <li>Asociación Sectorial de Estudiantes de Ingeniería Informática</li>
         <li>aseii.contacto@aseii.es</li>
      </ul>
   </div>
   <div class="three columns mobile-two">
      <h5>Posible gracias a...</h5>
      <ul class="no-bullet">
         <li><strong>Universidade de Vigo</strong></li>
         <li>Campus de Ourense</li>
         <li>www.uvigo.es</li>
      </ul>
   </div>
   <div class="three columns mobile-two"></div>


</div>
</section>


<a href="http://goo.gl/maps/Xcm2m" ><div id="mygmap" class="gmap3">
</div>
</a>

<section class="footer">
   <div class="row">
      <div class="twelve columns">
         <ul class="link-list">
            <li>&copy; 2014 Technium</li>
            <!--<li><a href="#">Cosa A</a></li>
            <li><a href="#">Cosa B</a></li>
            <li><a href="#">Cosa C</a></li>-->
            <li><a href="https://github.com/ndrs92">Web: Andrés Vieira Vázquez</a></li>
         </ul>
      </div>
   </div>
</section>





<div class="spacer6"></div>
<div id="nav-bottom">
   <ul class="nav-bottom-list">
      <li><a class="simple-menu" href="javascript:void(0)"><img src="images/menu.png" width="40"/></a></li>
      <li><a onclick="$('#pro-top').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><img src="images/home.png" width="40"/></a></li>
   </ul>
</div>






  <!-- JavaScript (Sin comprimir) 
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="javascripts/jquery.event.move.js"></script>
  <script src="javascripts/jquery.event.swipe.js"></script>
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  <script src="javascripts/jquery.placeholder.js"></script>
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  <script src="javascripts/jquery.foundation.topbar.js"></script>
-->


<!-- JavaScript (Comprimido) -->
<script src="javascripts/jquery.foundation.forms.js"></script>
<script src="javascripts/foundation.min.js"></script>

<!-- Inicialización de los plugins -->
<script src="javascripts/jquery.easing.1.3.js"></script>
<script src="javascripts/jquery.cycle2.all.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/animatescroll.js"></script>
<script src="javascripts/jquery.parallax.js"></script>
<script src="javascripts/app.js"></script>

</body>
</html>
