<?php include './include/include_head.php'; ?>
<!DOCTYPE html>
<html>
<body>
	<?php include 'nav_bar.php'; ?>
<div class="container">
		
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input type="Username" class="form-control" id="exampleInputUsername" placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="text-right">
				<div class="form-check">
					<label>
						<a href="">		
							<span>ลืมรหัสผ่าน ?</span>
						</a>
					</label>
				</div>
				<!-- del ?? class = "form-check-label" -->
				<!-- del ?? class = "form-check-input" -->
					<label class="form-check-label custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input form-check-input" required> 
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">จดจำรหัสผ่าน</span>
					</label>
					<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			<!-- <div class="row">
				<hr class="col">
				<span class="col">หรือเข้าสู่ระบบโดย</span> 
				<hr class="col">
			</div> -->
		</form>

</div>





<!-- username : <input type="text" name="username">


----------------php------------
$username = username

insert into tableName(username) values($username) -->




















</body>
</html>
