<h2 style="text-transform: uppercase;">Equipment</h2>
<div class="table-responsive">
    <table id="content" class="table table-striped table-hover logiTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Group</th>
                <th>Category</th>
                <th>Consumable</th>
                <th>Size</th>
                <th>Brand</th>
                <th>In Service</th>
                <th>Model</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($equipment as $equipment) : ?>
                <tr>
                        <td><a href="<?php echo site_url('/equipment/'. $equipment['eq_id']); ?>"><?php echo $equipment['eq_name']; ?></a></td>
                        <td><?php echo $equipment['eq_description']; ?></td>
                        <td><a href="<?php echo site_url('/equipment-groups/'. $equipment['eqgroup_id']); ?>"><?php echo $equipment['eqgroup_name']; ?></td>
                        <td><?php echo $equipment['eq_category']; ?></td>
                        <td><?php echo $equipment['eq_consumable']; ?></td>
                        <td><?php echo $equipment['eq_size']; ?></td>
                        <td><?php echo $equipment['eq_brand']; ?></td>
                        <td><?php echo $equipment['eq_in_service']; ?></td>
                        <td><?php echo $equipment['eq_model']; ?></td>
                        <td><button class="btn btn-outline-warning btn-sm" type="button" href="equipment/edit/<?php echo $equipment['eq_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<button class="btn btn-outline-primary" type="button" href="/equipment/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</button>
<!--<a class="btn btn-info" role="button" href="equipment/edit">Edit Equipment</a>-->
<!--<a class="btn btn-danger" role="button" href="equipment/delete">Delete Equipment</a> -->

</div>

<script>
	$(document).ready(function(){
		$('#content').dataTable( {
		  "columnDefs": [ {
		      "targets": [ -1, -2 ],
		      "orderable": false
		    } ],
          "pageLength": 25
		} );
	});
</script>