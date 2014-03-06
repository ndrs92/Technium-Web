<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
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

<body>
   <section class="topbar" id="pro-top">
      <div class="row collapse">
         <div class="three columns mobile-three">
            <div class="logo">
               <img id="logofloat" src="images/logotech1.png"  alt="Technium" />
            </div>
         </div>
         <div class="nine columns mobile-one">
            <a class="simple-menu top" style="float:right !important;" href="#sidr"><span class="ico-round white"><i class="icon-reorder"></i></span></a>
            <div class="text-right">
               <ul class="nav-list" id="nav-list">
                  <li><a href="foro/">Foro</a></li>
                  <li><a onclick="$('#pro-services').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Eventos</a></li>
                  <li><a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Torneos</a></li>
                  <li><a href="https://maps.google.es/maps?q=42.342909,-7.851457&num=1&t=h&z=19" target="_blank">Mapa</a></li>
                  <li><a onclick="$('.clients').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Fotos 2013</a></li>
               </ul>
               &nbsp; &nbsp; <a class="button" id="sign-up" onclick="$('.subscribe').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">¡Apúntate!</a>

            </div>
            <div id="sidr">
               <div class="sidr-gutter"></div>
               <ul>
                  <li>&nbsp;</li>
                  <li><a href="foro/">Foro</a></li>
                  <li><a onclick="$('#pro-services').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> Eventos</a></li>
                  <li><a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> Torneos</a></li>
                  <li><a href="https://maps.google.es/maps?q=42.342909,-7.851457&num=1&t=h&z=19"  target="_blank"><span class="badge"></i></span> Mapa</a></li>
                  <li><a onclick="$('.clients').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Fotos 2013</a></li>
                  <li><a onclick="$('.subscribe').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><span class="badge"></i></span> ¡Apúntate!</a></li>			   
               </ul>
            </div>
         </div>
      </div>
   </section>




   <section class="hero" >
      <video id="video" autoplay="autoplay" muted loop>
         <source src="vid.mp4" type="video/mp4" />
         <source src="vid.webm" type="video/webm" />

         Tu navegador no soporta video incrustado.
      </video>

      <div class="row" id="hovering">
         <div class="twelve text-center columns">
            <h3><small>Bienvenido... otra vez</small></h3>
            <h1>TECHNIUM LAN PARTY 2014</h1>
            <a href="#" onclick="$('.hero-base').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><img src="images/arrow_sans_down-512.png" width="30"/></a>
         </div>
      </div>   

   </section>




<!--

   <section class="hero">
      <div class="row">
         <div class="twelve text-center columns">
            <h3><small>Bienvenido... otra vez</small></h3>
            <h1>TECHNIUM LAN PARTY 2014</h1>
            <a href="#" onclick="$('.hero-base').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><img src="images/arrow_sans_down-512.png" width="30"/></a>
         </div>
      </div>
   </section>
-->




<section class="hero-base">
   <div class="row ">
      <div class="twelve columns text-center">
       <script type="text/javascript">
           //http://www.ricocheting.com/code/javascript/html-generator/countdown-timer
           dateFuture1 = new Date(2014,3,10,18,1,1);
           dateFuture2 = new Date(2014,3,3,18,1,1);
           function GetCount(ddate,iid){
            dateNow = new Date(); 
            amount = ddate.getTime() - dateNow.getTime(); 
            delete dateNow;

            if(amount < 0){
               document.getElementById(iid).innerHTML="¡En el Aire!";
            }

            else{
               days=0;hours=0;mins=0;secs=0;out="";

               amount = Math.floor(amount/1000);

               days=Math.floor(amount/86400);
               amount=amount%86400;

               hours=Math.floor(amount/3600);
               amount=amount%3600;

               mins=Math.floor(amount/60);
               amount=amount%60;

               secs=Math.floor(amount);

               if(days != 0){out += days +" "+((days==1)?"día":"días")+", ";}
               if(hours != 0){out += hours +" "+((hours==1)?"hora":"horas")+", ";}
               out += mins +" "+((mins==1)?"min":"mins")+", ";
               out += secs +" "+((secs==1)?"seg":"segs")+", ";
               out = out.substr(0,out.length-2);
               document.getElementById(iid).innerHTML=out;

               setTimeout(function(){GetCount(ddate,iid)}, 1000);
            }
         }

         window.onload=function(){
            GetCount(dateFuture1, 'countbox1');
            GetCount(dateFuture2, 'countbox2');
   //you can add additional countdowns here (just make sure you create dateFuture2 and countbox2 etc for each)
};
</script>
<h1 id="party">Ya queda menos: <h1 id="countbox1"></h1></h1><br/>
<h1 id="abierto">¡Inscripciones Abiertas! Precio de entrada al recinto durante 4 días: <h1 style="color:black;">15€</h1></h1><br/>
<h1 id="party">Las inscripciones cierran en: <h1 id="countbox2"></h1></h1>
</div>
</div>
</section>

<!--
<section class="hero-base">
   <div class="row ">
      <div class="twelve columns text-center">
         <h1>Del 10 al 13 de Abril de 2014</h1>
      </div>
   </div>
</section>
-->












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
                  <a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><li>&nbsp; FIFA 2014</li></a>
                  <a onclick="$('#work').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});"><li>&nbsp; StarCraft II</li></a>
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
                                             <li></i> </li>

                                          </ul>
                                       </div>
                                       <div class="six mobile-two columns">
                                          <ul class="no-bullet">
                                             <li></li>

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



   <div class="row">
      <div class="three mobile-two columns">
         <figure class="project" id="project01">
            <div class="thumb">
               <a class="open-project" data-project="01" href="#project01"> <img src="images/lol500.png" alt="" />

               </div>
               <figcaption>
                  <h3>League Of Legends</h3>
                  <p>Technium 2014</p>
               </figcaption>
            </figure>
         </a>
         <div class="project-window" id="showcase01">
            <div class="row collapse content">
               <div class="twelve columns">
                  <header>
                     <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                     <h3>League Of Legends</h3>
                  </header>
                  <article class="">
                     <h1> Aún en desarrollo. Disculpad las molestias.</h1>
                  </article>
               </div>
            </div>
         </div>
      </div>



      <div class="three mobile-two columns">
         <figure class="project" id="project02">
            <div class="thumb">
               <a class="open-project" data-project="02" href="#project02"><img src="images/csgo500.png" alt="" />

               </div>
               <figcaption>
                  <h3>Counter Strike: Global Offensive</h3>
                  <p>Technium 2014</p>
               </figcaption>
            </a>
         </figure>
         <div class="project-window" id="showcase02">
            <div class="row collapse content">
               <div class="twelve columns">
                  <header>
                     <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                     <h3>Counter Strike: Global Offensive</h3>
                  </header>
                  <article class="">
                     <img src="images/csheader.png" alt="" style="margin: auto 230px;"/>
                     <hr><div style="text-align:left;">

                     <h1 style="text-align:center;"> Formato de Torneo </h1>
                     <h5 style="color:black;"><p>
                        1. Eliminatoria directa.<br/>
                        2. El número máximo de equipos inscritos serán 16.<br/>
                        3. El número mínimo para que se celebre el torneo será de 5 equipos.<br/>
                        4. Las partidas se jugarán en un servidor lan..<br/>
                        5. El map pool serán los siguientes: de_dust2, de_inferno, de_train, de_nuke,
                        de_season.  Los mapas se irán baneando hasta acordar 1.<br/>
                        6. Las partidas no pueden contar con ningún espectador ni ningún árbitro, tan solo los
                        jugadores que tienen que jugar esa ronda. (Salvo si se decide stremear los partidos en
                        el recinto,caso en el que podrá entrar el organizador para retransmitirlo).<br/>
                        7. Se habilitara un correo para el envío de capturas, en las que el capitán del equipo
                        ganador será el responsable de enviar la misma. Por otra parte será obligatorio el uso
                        de demos durante el partido.<br/>
                        8. En caso de tener algún problema técnico, se podrá pausar, notificándolo antes al
                        adversario y durante un tiempo máximo de 5 minutos.
                        9. Las rondas se jugarán a Bo1 , salvo semifinal y final, que se jugara a Bo3. Cada partido
                        será a MR15, esto quiere decir que cada 15 rondas se cambia de equipo, y el equipo que
                        llegue a 16 rondas será el ganador.  EJ: ( 16­14, 16­2, 12­16 etc).<br/>
                        10. En caso de empate habrá overtime con MR9 y 8000$ de inicio en el mismo mapa que
                        se dio el empate.<br/>
                        11. Los brackets se publicarán en el momento en el que se cierren inscripciones.<br/>
                        12. No se tolerará lenguaje obsceno.<br/>
                     </p>       </h5>

                  </article>
               </div>
            </div>
         </div>
      </div>




      <div class="three mobile-two columns">
         <figure class="project" id="project04">
            <div class="thumb">
               <a class="open-project" data-project="04" href="#project04"><img src="images/sc2500.png" alt="" />

               </div>
               <figcaption>
                  <h3>StarCraft II</h3>
                  <p>Technium 2014</p>
               </figcaption>
            </a>
         </figure>
         <div class="project-window" id="showcase04">
            <div class="row collapse content">
               <div class="twelve columns">
                  <header>
                     <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                     <h3>StarCraft II</h3>
                  </header>
                  <article class="">
                     <img src="images/sc2header.png" alt="" style="margin: auto 230px;"/>
                     <hr><div style="text-align:left;">

                     <h1 style="text-align:center;"> Formato de Torneo </h1>
                     <h5 style="color:black;"><p>
                        1. Eliminatoria directa.<br/>

                        2. El número máximo de jugadores inscritos serán 32.<br/>

                        3. El número mínimo para que se celebre el torneo será de 8 personas.<br/>

                        4. Se creara un canal en el juego para que los jugadores puedan hablar entre ellos.El 

                        canal será el punto de reunión en los que los jugadores que vayan a jugar deberán 

                        estar dentro antes de cada partido.<br/> 

                        5. El map pool serán los mapas de ladder. <br/>

                        6. Las partidas no pueden contar con ningún espectador ni ningún arbitro, tan solo los 

                        jugadores que tienen que jugar esa ronda. (Salvo si se decide stremear los partidos en 

                        el recinto,caso en el que podrá entrar el organizador para retransmitirlo)<br/>

                        7. Se habilitara un correo para el envío de capturas, en las que el ganador será el 

                        responsable de enviar la misma.<br/>

                        8. En caso de tener algún problema técnico, se podrá pausar, notificándolo antes al 

                        adversario y durante un tiempo máximo de 5 minutos.<br/>

                        9. Las rondas se jugaran a Bo3 , salvo semifinal y final, que se jugara a Bo5.<br/>

                        10. En caso de empate se hará re-match en el mismo mapa que se dio el empate.<br/>

                        11. Los brackets se publicaran en el momento en el que se cierren inscripciones.<br/>

                        12. No se tolerara lenguaje obsceno.<br/>
                     </p>       </h5>

                  </article>
               </div>
            </div>
         </div>
      </div>





      <div class="three mobile-two columns">
         <figure class="project" id="project03">
            <div class="thumb">
               <a class="open-project" data-project="03" href="#project03"><img src="images/fifa500.png" alt="" />

               </div>
               <figcaption>
                  <h3>FIFA 2014</h3>
                  <p>Technium 2014</p>
               </figcaption>
            </a>
         </figure>
         <div class="project-window" id="showcase03">
            <div class="row collapse content">
               <div class="twelve columns">
                  <header>
                     <a class="close-project-window" href="#work" title="close"><i><img src="images/close.png" /></i></a>
                     <h3>FIFA 2014</h3>
                  </header>
                  <article class="">
                     <div class="row collapse">
                        <img src="images/fifaheader.png" alt="" style="margin: auto 230px;"/>
                        <hr><div style="text-align:left;">
                        <h1 style="text-align:center;">Formato de Torneo</h1><br/>
                        <h5 style="color:black;">
                           <p>
                              1- La inscripción al torneo se hará el mismo día.<br/>

                              2- El torneo tendrá un límite de 64 participantes, con enfrentamientos de eliminación directa uno contra uno, quedando de la siguiente manera:<br/><br/>
                           </p>
                           <div style="text-align:center;">
                            <p>
                              Primera ronda: 64 jugadores<br/>
                              Segunda ronda: 32 jugadores<br/>
                              Octavos de final: 16 jugadores<br/>
                              Cuartos de final:  8 jugadores<br/>
                              Semifinal: 4 jugadores<br/>
                              Final: 2 jugadores<br/><br/>
                           </p>
                        </div>
                        <p>
                           3- El número mínimo de jugadores para la celebración del torneo será de 8. En caso de que el torneo cuente con menos jugadores no se realizará dicho torneo.<br/>

                           4- Se podrá escoger cualquier equipo, salvo selecciones nacionales, con las plantillas que vienen por defecto en el juego.<br/>

                           5- Los partidos durarán 6 minutos cada parte, exceptuando la final que se jugará a 9 minutos cada parte. En caso de empate se jugará una prórroga clásica. Si sigue el empate se decidirá en los penaltis.<br/>

                           6- Los participantes deberán respetar las fechas, previamente  determinadas, debiendo jugar en el día y dentro del horario preestablecido. <br/>

                           7- Ausencia de un Jugador: Si en la hora del partido, en el  período correspondiente al partido en cuestión, uno de sus jugadores se  encuentra presente, y el otro se ausenta y vence el plazo de espera (20  minutos), el jugador que expresó y demostró su intención de jugar el partido,  lo ganará con un resultado a favor de 3-0.<br/>

                           8- En caso de que ambos participantes no estén presentes, el partido  quedará como Partido No Jugado (PNJ).<br/>

                           9- En caso de abandono voluntario durante el partido, al jugador se le  dará por perdido el partido, sumando 3 goles en contra, más al resultado  parcial antes del abandono. <br/>
                           
                           10- En caso de conflicto , la organización tiene la última palabra , siendo esta definitiva e inapelable.<br/>
                           11- La organización se reserva el derecho de modificar la configuración de los partidos en función del número de participantes y otros motivos que crean convenientes . Sin embargo , se reserva el derecho de admisión y tomará decisiones en caso de cualquier polémica que pueda surgir .<br/>


                           <h3 style="color:black;">Normas del torneo</h3>
                           <p>
                              1- La configuración personal así como los botones, podrá ser variada por cada jugador al comienzo de cada partido, se dispondrá de hasta 5 minutos para hacerlo.<br/>
                              2- La cámara será " Televisión " por defecto. Aún así , si los jugadores se ponen de acuerdo, pueden cambiarla de mutuo acuerdo.<br/>
                              3- Se podrán realizar sustituciones cuando el jugador tenga la posesión y sólo a balón parado . Cada jugador tendrá un total de 3 pausas por partido, debiendo informar al jugador rival antes de efectuar dicha pausa.  El tiempo máximo para realizar cambios será de 60 segundos en la media parte y 45 segundos durante. <br/>
                              4- Si se registra una pausa que la organización considere que no está justificada y afecta directamente al rival, se penalizará con un gol en contra.<br/>
                              5- Cada uno podrá llevar su "mando" de casa para poder jugar los partidos. En caso de que no disponga de "mando" , la organización le facilitará uno .<br/>
                           </p>
                           <h3 style="color:black;">Configuración de los partidos</h3>
                        </p>
                        <p>
                           Duración cada parte: 6 minutos ( partido normal, 9 para la final )<br/>
                           Dificultad: Leyenda<br/>
                           Árbitro: Aleatorio<br/>
                           Momento del día: Aleatorio<br/>
                           Clima: Despejado<br/>
                           Desgaste del campo: Aleatorio<br/>
                           Velocidad: Normal<br/>
                           Lesiones: Si<br/>
                           Fueras de juego: Si<br/>
                           Tarjetas: Si<br/>
                           Número de Sustituciones: 3<br/>
                           Camara: Televisión<br/>
                           Manos: Si, salvo penalti.<br/>
                           Parametros Usuarios: predeterminados<br/>

                        </p>
                     </h5>
                  </div>

                  <hr>
                  <hr>

               </div>
            </article>
         </div>
      </div>
   </div>
</div>









</div>
</div>


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
         <p><a href="http://imgur.com/a/SbGcE"  target="_blank"> Pincha aquí para ver más</a></p>
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
      <p><a href="http://imgur.com/a/SbGcE"  target="_blank"> Pincha aquí para ver más</a></p>
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
               <h6>&ldquo;esmoris&rdquo;</h6>
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

<section class="subscribe" id="inscripcion">
   <div class="row">
      <div class="twelve columns text-center">
         <h1>¡APÚNTATE YA!</h1>
         <div class="spacer2"></div>
      </div>
   </div>
   <div class="row">
      <form action="inscripcion/DB.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate bg-light">
         <div class="four columns mobile-four">
            <input type="text" name="nombre" maxlength="100" class="oversize" placeholder="Nombre" />
         </div>

         <div class="four columns mobile-four">
            <input type="text" name="nick" maxlength="20" class="oversize" placeholder="Nick" />
         </div>
         <div class="four columns mobile-four">
            <input type="text" maxlength="9" name="telefono" class="oversize" placeholder="Teléfono" />
         </div>
         <br>
         <div class="four columns mobile-four">
            <input type="text" name="correo" maxlength="50" id="mce-EMAIL" class="oversize" placeholder="Correo" />
         </div>
         
         <div class="four columns mobile-four">
            <textarea id="equipo" name="potencia" id="mce-EMAIL" class="oversize" placeholder="Por favor, introduce datos sobre el equipo que vas a traer, para calcular su consumo. Agradecemos información sobre la fuente de alimentación, procesador y gráfica, fundamentalmente. Por favor, indica si vas a traer sobremesa, portátil, o ambos. Muchas gracias."></textarea>
         </div>
         

         <div >
            <input type="hidden" name="tipo" value="registrar" >
            <input type="submit" class="button large expand" id="mc-embedded-subscribe" name="subscribe" value="Registrarse">

         </div>
         <div class="four columns mobile-four">
            <input type="text" name="dni" maxlength="9" id="dni" class="oversize" placeholder="DNI" />
         </div>
      </form>
      <a href="normas.pdf"><input type="submit" class="button large expand" id="normas" value="[PDF] Normas"></a>
      <a href="cosas.pdf"><input type="submit" class="button large expand" id="cosas" value="[PDF] Cosas que debes traer"></a>
      <a href="auto.pdf"><input type="submit" class="button large expand" id="aut" value="[PDF] Autorización de menores"></a>
   </div>
</section>
<section class="subscribe" id="inscripcion">
   <div class="row">
      <div class="twelve columns text-center">
         <h1>Comprueba tu inscripcion</h1>
         <div class="spacer2"></div>
      </div>
   </div>
   <div class="row">
      <form action="check.php" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate bg-light">
         <div class="four columns mobile-four">
            <input type="text" name="checkdni" maxlength="9" class="oversize" placeholder="Introduce tu DNI" />
         </div>
         <input type="submit" class="button large" id="mc-embedded-subscribe2" name="comprobar" value="Comprobar">
      </div>
   </form>
</div>
</section>


<section class="contact" id="pro-contact">
   <div class="row">
      <div class="twelve columns text-center">
         <h3><small>Contacto</small></h3>
         <h1>INFORMACIÓN</h1>
         <h3><small><small>Para cualquier duda, contacta con nosotros en <patata class="red-text">aseii@esei.uvigo.es</patata></small></small></h3>
      </div>
   </div>	

   <div class="spacer6"></div>

   <div class="row">
      <div class="three columns mobile-two"></div>
      <div class="three columns mobile-two">
         <h5>Asociación</h5>
         <ul class="no-bullet">
            <li><strong>ASEII</strong></li>
            <li>Asociación Sectorial de Estudiantes de Ingeniería Informática</li>
            <li>aseii.contacto@gmail.com</li>
         </ul>
      </div>
      <div class="three columns mobile-two">
         <h5>Posible gracias a...</h5>
         <ul class="no-bullet">
            <li><strong>Escola Superior de Enxeñería Informática</strong></li>
            <li>Campus de Ourense</li>
            <li>www.esei.uvigo.es</li>
         </ul>
      </div>
      <div class="three columns mobile-two"></div>
   </div>
</section>


<a href="https://maps.google.es/maps?q=42.342909,-7.851457&num=1&t=h&z=19"  target="_blank" >
   <div id="mapa"></div>
</a>

<section class="footer">
   <div class="row">
      <div class="twelve columns">
         <ul class="link-list">
            <li><a href="inscripcion/login.php">&copy; 2014 Technium</a></li>
            <!--<li><a href="#">Cosa A</a></li>
            <li><a href="#">Cosa B</a></li>
            <li><a href="#">Cosa C</a></li>-->
            <li><a href="https://github.com/ndrs92">Web: Andrés Vieira Vázquez</a> & Adolfo Álvarez López</li>
            <li><img src="http://simplehitcounter.com/hit.php?uid=1691344&f=16777215&b=0" height="16" width="83"/></li>


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
