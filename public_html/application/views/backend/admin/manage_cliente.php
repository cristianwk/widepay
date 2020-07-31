
<button onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/add_clientes/');" 
    class="btn btn-primary pull-right">
        <?php echo "Adicionar Cliente"; ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('Foto');?></th>
            <th><?php echo get_phrase('Nome');?></th>
            <th><?php echo get_phrase('URL');?></th>
            <th><?php echo get_phrase('Status');?></th>
            <th><?php echo get_phrase('Opções');?></th>
        </tr>
    </thead>

    <tbody>
        <!-- cliente_info em /controllers/admin.php
          $data['cliente_info'] = $this->crud_model->select_cliente_info();
        -->
        <?php foreach ($cliente_info_url as $row) { ?>   
            <tr>
                <td><img src="<?php echo $this->crud_model->get_image_url('cliente' , $row['cliente_id']);?>" class="img-circle" width="40px" height="40px"></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['endereco']?></td>
                <td><?php echo $row['status']?></td>
                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/edit_cliente/<?php echo $row['cliente_id']?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            Editar
                    </a>
                    <a href="<?php echo base_url();?>index.php?admin/cliente/delete/<?php echo $row['cliente_id']?>" 
                        class="btn btn-danger btn-sm btn-icon icon-left" onclick="return checkDelete();">
                            <i class="entypo-cancel"></i>
                            Deletar
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
