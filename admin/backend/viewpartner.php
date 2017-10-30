<?php
require '../pages/bridge.php';
$id = $_POST['id_u'];
if(isset($_POST['delete']) && !empty($_POST['delete'])){
	mysqli_query($db,'DELETE FROM `partner` where id = '.$_POST['delete'].'');
	mysqli_query($db,'DELETE FROM `partner_details` where id = '.$_POST['delete'].'');

}
$result = mysqli_query($db,'SELECT `id`, `name`, `recommended`, `verified`, `popular`, `area`, `location`, `range_type`, `opening_time`, `closing_time`, `cover_img`, `created`, `last_edited`, `last_published` FROM `partner` WHERE id = '.$id.'');
if(mysqli_num_rows($result)>0){
		$data = $result->fetch_object();
}
?>

                             <div class="panel-heading">
                                   Details:
                             </div>
                             <div class="panel-body">
                                  <div class="row">
                                      <div class="col-lg-6">
                                         <form role="form">
                                              <div class="form-group">
                                                   <label>Name</label>
                                                   <input class="form-control" value="<?php echo $data->name; ?>">
                                                   <p class="help-block">The name of the partner.</p>
                                              </div>
                                              <div class="form-group">
                                                  <label>Username</label>
                                                  <input class="form-control" placeholder="Username">
                                              </div>
                                              <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control">
                                                    <p class="help-block">The name of the partner.</p>
                                              </div>
                                              <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" placeholder="Username">
                                               </div>
                                         </form>
                                      </div>
                                  </div>
                             </div>
