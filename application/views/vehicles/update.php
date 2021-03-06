<h2 style="text-transform: uppercase;">Edit Vehicle <?php echo strtoupper($vehicle['veh_name']); ?></h2>
<?php echo validation_errors(); ?>
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('vehicles/update', $attributes); ?>
	<div class="form-group">
		<input type="hidden" name="veh_id" value="<?php echo $vehicle['veh_id']; ?>">
		<label class="control-label col-sm-2">Vehicle Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_name" placeholder="Eg. HBY18" value="<?php echo strtoupper($vehicle['veh_name']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Vehicle Rego</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_rego" placeholder="Eg. BK95LD" value="<?php echo strtoupper($vehicle['veh_rego']); ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Make</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_make" placeholder="Eg. Mitsubishi" value="<?php echo $vehicle['veh_make']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Year</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_year" placeholder="Eg. 2007" value="<?php echo $vehicle['veh_year']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Model</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="veh_model" placeholder="Eg. Pajero" value="<?php echo $vehicle['veh_model']; ?>">
			</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Capacity</label>
		<div class="col-sm-10">
			<select id="veh_capacity" name="veh_capacity" class="form-control" >
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
			</select>
			<script>
				$(function() {
					$( '#veh_capacity' ).val('<?php echo $vehicle['veh_capacity']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="veh_category" name="veh_category" class="form-control" >
				<option>Light Storm</option>
				<option>Medium Storm</option>
				<option>Heavy Storm</option>
				<option>Light GLR</option>
				<option>Medium GLR</option>
				<option>Heavy GLR</option>
				<option>Recon</option>
				<option>Transport</option>
				<option>Flood Boat</option>
				<option>Trailer</option>
			</select>
			<script>
				$(function() {
					$( '#veh_category' ).val('<?php echo $vehicle['veh_category']; ?>'); 
				});
		    </script>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">License Type</label>
		<div class="col-sm-10">
			<select id="veh_license_type" name="veh_license_type" class="form-control" value="<?php echo $vehicle['veh_license_type']; ?>">
				<option>None</option>
				<option>C</option>
				<option>LR</option>
				<option>MR</option>
				<option>Boat</option>
			</select>
			<script>
				$(function() {
					$( '#veh_license_type' ).val('<?php echo $vehicle['veh_license_type']; ?>'); 
				});
		    </script>			
		</div>
	</div>
	<button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
	<a class="btn btn-outline-warning" role="button" href="/vehicles">Cancel</a>
</form>