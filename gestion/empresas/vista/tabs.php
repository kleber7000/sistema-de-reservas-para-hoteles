<div>

  <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">        
                            <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <?php _t('Lista');?>
                                
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buscar" aria-controls="buscar" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-search"></span>
                                <?php _t('Buscar');?>
                            </a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="inicio"></div>
                        <div role="tabpanel" class="tab-pane" id="buscar">
                            <?php include "buscar_form.php"; ?>        
                        </div>        
                      </div>
                    </div>

