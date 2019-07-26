<?php 
include("inicio.php"); 
		
include("util.php");
		


?>
  

      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Usuários cadastrados</strong><span>Total</span>
                  <div class="count-number"><?php echo $total;?> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Produtos cadastrados</strong><span>Total</span>
                  <div class="count-number"><?php echo $total1;?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Usuários cadastrados</strong><span>nas últimas 24h</span>
                  <div class="count-number"><?php echo $total24Usuarios;?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Produtos cadastrados</strong><span>Nas últimas 24h</span>
                  <div class="count-number"><?php echo $total24Produtos;?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Usuários cadastrados</strong><span>Nos últimos 30 dias</span>
                  <div class="count-number"><?php echo $total30Usuarios;?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <div class="name"><strong class="text-uppercase">Produtos cadastrados</strong><span>Nos últimos 30 dias</span>
                  <div class="count-number"><?php echo $total30Produtos;?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     
  <?php include("fim.php"); ?>