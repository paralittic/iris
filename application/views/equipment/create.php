<head>
	<title>Create Equipment - Logi</title>
</head>

<!--<?php //echo validation_errors(); ?>-->
<?php $attributes = array('class' => 'form-horizontal'); ?>
<?php echo form_open('equipment/create', $attributes); ?>
<!--This form needs to be changed to be relevant for equipment, once its done it can be copied to the update page and modifed to pull in current data-->
	<div class="form-group">
		<label class="control-label col-sm-2">Equipment ID</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="equipmentID" placeholder="Eg. Axe">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="name" placeholder="Eg. Axe">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="description" placeholder="Eg. Large Red Felling Axe, wooden handle">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Size</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="size" placeholder="Eg.Large">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Brand</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="brand" placeholder="Eg. Husqvarna">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Supplier</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="supplier" placeholder="Eg. GMC Thornleigh">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Consumable</label>
		<div class="col-sm-10">
			<select id="consumable" name="consumable" class="form-control">
				<option disabled selected>Select</option>
				<option value="Yes">No</option>
				<option>Yes</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">In Service</label>
		<div class="col-sm-10">
			<select id="in_service" name="in_service" class="form-control">
				<option value="Yes">Yes</option>
				<option>No</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Inspection Frequency</label>
		<div class="col-sm-10">
			<select id="inspection_frequency" name="inspection_frequency" class="form-control">
				<option value="Weekly">Weekly</option>
				<option>Monthly</option>
				<option>Biannually</option>
				<option>Annually</option>
				<option>Biennial</option>
			</select>
		</div>
	</div>
    <div class="form-group">
		<label class="control-label col-sm-2">Date Purchased</label>
	        <div class='input-group date' id='date_purchased'>
	            <input type='text' class="form-control" name="date_purchased"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#date_purchased').datetimepicker({
            	useCurrent: true,
            	showTodayButton: true,
            	sideBySide: true,
            	format: 'YYYY-MM-DD',
            });
        });
    </script>
    <div class="form-group">
		<label class="control-label col-sm-2">End of Life date</label>
	        <div class='input-group date' id='endOfLife'>
	            <input type='text' class="form-control" name="endOfLife"/>
	            <span class="input-group-addon">
	                <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#endOfLife').datetimepicker({
            	useCurrent: true,
            	showTodayButton: true,
            	sideBySide: true,
            	format: 'YYYY-MM-DD',
            });
        });
    </script>
	<div class="form-group">
		<label class="control-label col-sm-2">Purchase Type</label>
		<div class="col-sm-10">
			<select id="inspection_frequency" name="purchase_type" class="form-control">
				<option value="Donation">Donation</option>
				<option>Unit Funds</option>
				<option>Region Funds</option>
				<option>SHQ Funds</option>
				<option>Emergency Order</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Asset Number</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="asset_number" placeholder="Eg. 34783698">
		</div>
	</div>		
	<div class="form-group">
		<label class="control-label col-sm-2">Category</label>
		<div class="col-sm-10">
			<select id="category" name="category" class="form-control">
				<option value="change me">CHANGE ME</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2">Assembly</label>
		<div class="col-sm-10">
			<select id="assembly" name="assembly" class="form-control">
				<option value="change me">CHANGE ME</option>
			</select>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Create</button>
</form>