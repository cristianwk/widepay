
<div class="container">
  <h2>Relatório de URLs</h2>
  <table class="table table-hover">
   <thead>
        <tr>
            <th><?php echo get_phrase('Nome');?></th>
            <th><?php echo get_phrase('URL');?></th>
            <th><?php echo get_phrase('Status');?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($select_urls as $row) { 

            $info = parse_url($_SERVER["HTTP_REFERER"]);
            //echo"<pre><br>info: ";print_r($info);"</pre><br>";
            //echo"<br>host: ".$info['host'];
            //echo"<br>url: ".$row['endereco'];
            if(strpos($info['host'], $row['endereco']) !== false) {
                //echo"aqui1";
            } else {
               //echo"aqui2";
            }

            ?>   
            <tr>
                <td><?php echo $row['name']?></td>
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