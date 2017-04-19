<head>
	<title>Issues - Logi</title>
</head>
<!--This table needs to be changed to be relevant for equipment, once its done it can be copied to any other relevant page that lists equipment-->

<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>Issue ID</th>
			<th>Equipment</th>
			<th>Title</th>	
			<th>Reporter</th>
			<th>Assigned User</th>
			<th>Reported Date</th>
			<th>Resolution Date</th>
			<th>Status</th>
			<th>Edit</th>
		</tr>
	</thead>
	<!--Fields must be added to this table if an extra field is added to the relevant table in the database-->
	<tbody>
		<?php foreach($issues as $issue) : ?>
			<tr>
					<td><a href="<?php echo site_url('/issues/'. $issue['issueID']); ?>"><?php echo $issue['issueID']; ?></a></td>
					<td><?php echo $issue['equipmentID']; ?></td>
					<td><?php echo $issue['title']; ?></td>
					<td><?php echo $issue['reporterID']; ?></td>
					<td><?php echo $issue['assigned_user']; ?></td>
					<td><?php echo $issue['reported_date']; ?></td>
					<td><?php echo $issue['resolution_date']; ?></td>
					<td><?php echo $issue['status']; ?></td>
					<td><a class="btn btn-primary btn-sm" role="button" href="issues/edit/<?php echo $issue['issueID']; ?>">Edit</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn btn-default" role="button" href="issues/create">Create Issue</a>
<a class="btn btn-info" role="button" href="issues/edit">Edit Issue</a>
<a class="btn btn-danger" role="button" href="issues/delete">Delete Issue</a>