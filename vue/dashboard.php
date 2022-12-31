<br><br>
<div class="sm-st clearfix" id="vue-ensamble">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <h4>Salut <?= $_SESSION['profil']->nom ?></h4>
            </div>
            <div class="col-md-2 col-sm-12" style="font-size: 18px;">

              <!-- <i class="fa fa-bell icon "></i><sup id="notify">3</sup>
              <i class="fas fa-cog icon "></i><sup id="notify">4</sup> -->
              
            </div>
          </div>
        </div>
</div>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="panel " id="color-filiere">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-receipt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                          
                                    </div>
                                    <div>Filieres</div>
                                </div>
                            </div>
                        </div>
                        <a href="app.php?view=filiere">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
          <div class="panel " id="color-specialite">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Specialites</div>
                                </div>
                            </div>
                        </div>
                        <a href="app.php?view=specialite">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
          </div>
    </div>

    <div class="col-md-3 col-sm-6">
       <div class="panel " id="color-niveau">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-recycle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Niveau</div>
                                </div>
                            </div>
                        </div>
                        <a href="app.php?view=niveau">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
       <div class="panel" id="color-salle">
                        <div class="panel-heading" >
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Matieres</div>
                                </div>
                            </div>
                        </div>
                        <a href="app.php?view=matiere">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
        </div>
    </div>

  </div>
</div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <?php  include 'user/index.php'   ;         ?> 
        </div>
        

      </div>
    </div>









Z6K4F835E7