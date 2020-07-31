<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo "Adicionar URL"; ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form name="form" role="form" class="form-horizontal form-groups-bordered" action="<?php echo base_url(); ?>index.php?cliente/profile/create" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="cliente_id" value="<?php echo $this->session->userdata('login_user_id'); ?>">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('URL'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="url" class="form-control" onBlur="validURL()" id="field-1" >
                            <p id="validURL" style="color:green; font-size: 20px; font-weight: bold;"></p>
                        </div>
                    </div>

                    

                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <input type="submit" id="btn" class="btn btn-success" value="Salvar">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="#myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">URL Inválida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>URL Inválida!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>