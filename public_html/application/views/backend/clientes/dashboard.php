<?php //echo"<pre>cliente";print_r($_SESSION);echo"</pre>";
$cliente_id = $this->session->userdata('login_user_id');
//echo "<br>id: ".$cliente_id;
//echo "<br>count:";echo $this->crud_model->count_urls($cliente_id);
?>
<button onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/add_url/');" 
    class="btn btn-primary pull-right">
        <?php echo "Adicionar URL"; ?>
</button>
<div style="clear:both;"></div>
<br>
<div class="row">

    <div class="col-sm-3">

        <!-- Rotas estao definidas em: \Controllers\Cliente.php -->
        <a href="<?php echo base_url(); ?>index.php?cliente/Visualizar_urls_user">
            <div class="tile-stats tile-white-gray">
                <div class="icon"><i class="fa fa-list-alt"></i></div>
                <div class="num" data-start="0" data-end="<?php echo $this->crud_model->count_urls($cliente_id); ?>"
                     data-duration="1500" data-delay="0">0 &pound;</div>
                <h3><?php echo get_phrase('Visualizar URLs') ?></h3>
            </div>
        </a>
    </div>
</div>