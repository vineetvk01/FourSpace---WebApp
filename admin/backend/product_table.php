<?php
require '../pages/bridge.php';
if(isset($_POST['search']) && !empty($_POST['search'])){
	$sql = 'SELECT `id`, `name`, `product_image`, `created`, `last_edited`, `cat_key`, `partner_key` FROM `products` WHERE name like "%'.$_POST['search'].'%"';
}else{
	$sql = 'SELECT `id`, `name`, `product_image`, `created`, `last_edited`, `cat_key`, `partner_key` FROM `products`';
}

?>
<div class="table-responsive">
			<table class="table">
					<thead>
							<tr>
									<th>#</th>
									<th>Name</th>
									<th>category</th>
									<th>Partner</th>
									<th>Created</th>
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
											<td><?php echo $row->cat_key; ?></td>
											<td><?php echo $row->partner_key; ?></td>
											<td><?php echo date('Y-m-d h:i a', strtotime($row->created)); ?></td>
											<td><button class="btn btn-primary btn-sm ret" id="key" value="<?php echo $row->id; ?>" data-toggle="modal" data-target="#myModal">
							<i class="fa fa-eye" aria-hidden="true"></i> details
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
