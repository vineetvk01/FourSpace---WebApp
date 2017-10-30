<?php
require '../pages/bridge.php';
if(isset($_POST['search']) && !empty($_POST['search'])){
	$sql = 'SELECT `id`, `name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published` FROM `partner` WHERE name like "%'.$_POST['search'].'%"';
}else{
	$sql = 'SELECT `id`, `name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published` FROM `partner`';
}

?>
<div class="table-responsive">
			<table class="table">
					<thead>
							<tr>
									<th>#</th>
									<th>Name</th>
									<th>Username</th>
									<th>Phone</th>
									<th>Location</th>
									<th>options</th>
							</tr>
					</thead>
<tbody>
<?php
	$result = mysqli_query($db,$sql);
	$i=0;
			if(mysqli_num_rows($result) > 0 ){
					while($row = $result->fetch_object()){
?>
					<tr>
						<td><?php echo ++$i; ?></td>
						<td><?php echo $row->name; ?></td>
						<td><button class="btn btn-primary btn-sm ret" id="key" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#myModal">
									<i class="fa fa-users" aria-hidden="true"></i> | Allot
								</button>
						</td>
						<td><?php echo get_data('contact',$row->id); ?></td>
						<td><?php echo get_data('city',$row->id) ?></td>
						<td><button class="btn btn-primary btn-sm ret" id="key" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#myModal">
		<i class="fa fa-eye" aria-hidden="true"></i> view
		</button>
		<button class="btn btn-danger btn-sm delete" value="<?php echo $row->id; ?>"><i class="fa fa-trash" aria-hidden="true"></i> trash</button>
</td>
				 </tr>
<?php
					}
			}
?>


</tbody>
</table>
</div>
