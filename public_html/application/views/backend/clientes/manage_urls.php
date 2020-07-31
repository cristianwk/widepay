
<div class="container">
  <h2>Minhas de URLs</h2>
  <table class="table table-hover">
   <thead>
        <tr>
            <th><?php echo get_phrase('URL');?></th>
            <th><?php echo get_phrase('Status');?></th>
        </tr>
    </thead>

    <tbody>
        <?php
        //Controllers\Cliente.php
        // View URLs.
        //public function Visualizar_urls() {
         foreach ($select_urls_user as $row) { ?>   
            <tr>
                <td><?php echo $row['endereco']?></td>
                <td><?php echo $row['status']?></td>                
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div>



<script type="text/javascript">
    jQuery(window).load(function ()
    {
        var $ = jQuery;

        $("#table-2").dataTable({
            "sPaginationType": "bootstrap",
            "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>"
        });

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        // Highlighted rows
        $("#table-2 tbody input[type=checkbox]").each(function (i, el)
        {
            var $this = $(el),
                    $p = $this.closest('tr');

            $(el).on('change', function ()
            {
                var is_checked = $this.is(':checked');

                $p[is_checked ? 'addClass' : 'removeClass']('highlight');
            });
        });

        // Replace Checboxes
        $(".pagination a").click(function (ev)
        {
            replaceCheckboxes();
        });
    });
</script>