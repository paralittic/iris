<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<h2 style="text-transform: uppercase;">Issues</h2>
<hr />
<table id="content" class="table table-striped table-hover dataTable">
	<thead class="thead-inverse">
		<tr>
			<!--<th>ID</th>-->
			<th>Issue</th>
			<th>Item</th>
			<th>Category</th>
			<th>Description</th>
			<th>Reporter</th>
			<th>Assigned User</th>
			<th>Reported Date</th>
			<th>Resolution Date</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($issues as $issue) : ?>
			<tr>
                <!--<td><a href="<?php echo site_url('/issues/'. $issue['iss_id']); ?>"><?php echo $issue['iss_id']; ?></a></td>-->
                <td><a href="<?php echo site_url('/issues/view/'. $issue['iss_id']); ?>"><?php echo $issue['iss_title']; ?></a></td>
                <td><a href="<?php echo site_url('/equipment/view/'. $issue['eq_id']); ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $issue['eq_description']; ?>"><?php echo $issue['eq_name']; ?></a></td>
                <td><?php echo $issue['iss_type']; ?></td>
                <td><div data-toggle="tooltip" title="<?php echo $issue['iss_description']; ?>"><?php echo word_limiter($issue['iss_description'], 8); ?></div></td>
                <td><?php echo $issue['iss_reporter_id']; ?></td>
                <td><?php echo $issue['iss_assigned_user']; ?></td>
                <?php echo '<td><script type="text/javascript">var rp_date; $rp_date = moment(\''.$issue['iss_reported_date'].'\').format(\'DD-MM-YYYY\'); document.write($rp_date);</script></td>'; ?>
                <?php echo '<td><script type="text/javascript">var res_date; $res_date = moment(\''.$issue['iss_resolution_date'].'\').format(\'DD-MM-YYYY\'); document.write($res_date);</script></td>'; ?>
                <td><?php echo $issue['iss_status']; ?></td>
                <td><a class="btn btn-warning btn-sm" role="button" href="issues/edit/<?php echo $issue['iss_id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-primary" role="button" href="issues/create"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Create</a>

<script>
    document.body.innerHTML = document.body.innerHTML.replace(/Invalid date/g, '&nbsp;');
</script>