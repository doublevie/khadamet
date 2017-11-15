<?php
$services = [
array('Décoration','decoration.jpg'),
array('Etanchité','plombier.jpg'),
array('Réparation','reparation.jpg'),
array('PAINTER','painter.jpg'),
array('Jardinier','jardinier.jpg') ,
array('Maçonnerie','macon.jpg') ,
array('Electricien','electricien.jpg') ,
array('Soudeur','Soudeur.jpg') ,
array('Alucobond','aluco.jpg') ,
array('Transport et demenagement','transport.jpg') ,
array('Femme de menage','menage.jpg') ,
array(' Infirmière a domicile','infirmiere.jpg') ,
array('Nétoyage','netoyage.jpg') ,
array('Bricolage','')
];


function renderServices($x) {
  $res = '';
  for ($i=0; $i < count($x); $i++) {
    $res .= '<div class="col-md-3 col-sm-6 text-left"><div class="fdb-box serv" style="background:url(img/s/'.$x[$i][1].')"> <div class="ttl ca">'.$x[$i][0].'</div></div></div>';

  }
  return $res;
}
 ?>
<section class="" style="background: url(libs/froala/imgs/img_bg.jpg);padding-top:30px;padding-bottom:30px;">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h1 style="color:#FFFF00" class="ca">Les services</h1>
        </div>
      </div>
    </div>
  </section>




  <section  class="fdb-block" style="background:#EEEEEE">

  <div class="container-fluid">

  <div class="row">

<?php print renderServices($services); ?>


  </div>
</div>


</section>
