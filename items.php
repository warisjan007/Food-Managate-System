 <?php include 'dbconfig.php'?>
 <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	<div class="row no-gutters d-flex align-items-stretch">
	<?php
		if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
		$sql = "SELECT * FROM exsisting_items WHERE Category = 'Breakfast'";
		$result = $connect->query($sql);
		$counter = 0;
		while ($row = $result->fetch_assoc()) {
			if($counter%4 <2)
			{
										
	?>
		 <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
						<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
			else
			{
			?>
		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img order-md-last" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
							<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
			
			<?php											
			}
			$counter = $counter + 1;
			//echo $counter;
		} 
		//$connect->close();	
		?>
		
	</div>
	</div>
	<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	<div class="row no-gutters d-flex align-items-stretch">
	<?php
		if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
		$sql = "SELECT * FROM exsisting_items WHERE Category = 'lunch'";
		$result = $connect->query($sql);
		$counter = 0;
		while ($row = $result->fetch_assoc()) {
			if($counter%4 <2)
			{
										
	?>
		 <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
						<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
			else
			{
			?>
		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img order-md-last" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
							<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
			
			<?php											
			}
			$counter = $counter + 1;
			//echo $counter;
		} 
		//$connect->close();	
		?>
		
	</div>
	</div>
	<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	<div class="row no-gutters d-flex align-items-stretch">
	<?php
		if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
		$sql = "SELECT * FROM exsisting_items WHERE Category = 'dinner'";
		$result = $connect->query($sql);
		$counter = 0;
		while ($row = $result->fetch_assoc()) {
			if($counter%4 <2)
			{
										
	?>
		 <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
						<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
			else
			{
			?>
		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img order-md-last" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
							<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
			
			<?php											
			}
			$counter = $counter + 1;
			//echo $counter;
		} 
		//$connect->close();	
		?>
		
	</div>
	</div>
	<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	<div class="row no-gutters d-flex align-items-stretch">
	<?php
		if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
		$sql = "SELECT * FROM exsisting_items WHERE Category = 'drink'";
		$result = $connect->query($sql);
		$counter = 0;
		while ($row = $result->fetch_assoc()) {
			if($counter%4 <2)
			{
										
	?>
		 <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
						<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
			else
			{
			?>
		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img order-md-last" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
							<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
			
			<?php											
			}
			$counter = $counter + 1;
			//echo $counter;
		} 
		//$connect->close();	
		?>
		
	</div>
	</div>
	<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
	<div class="row no-gutters d-flex align-items-stretch">
	<?php
		if ($connect->connect_error) {
			die("Connection failed: " . $connect->connect_error);
		}
		$sql = "SELECT * FROM exsisting_items WHERE Category = 'dessert'";
		$result = $connect->query($sql);
		$counter = 0;
		while ($row = $result->fetch_assoc()) {
			if($counter%4 <2)
			{
										
	?>
		 <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
						<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
			else
			{
			?>
		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
			<div class="menus d-sm-flex ftco-animate align-items-stretch">
				<div class="menu-img img order-md-last" style="background-image: url(<?php echo $row['Photo']; ?>);"></div>
				<div class="text d-flex align-items-center">
					<div>
						<div class="d-flex">
							<div class="one-half">
								<h3><?php echo $row['Name']; ?></h3>
							</div>
							<div class="one-forth">
								<span class="price">$<?php echo $row['Price']; ?></span>
							</div>
						</div>
						<p>
							<?php echo $row['Description']; ?>
						</p>
						<p>
							<a href="#" data-name="<?php echo $row['Name']; ?>" data-price="<?php echo $row['Price']; ?>" class="add-to-cart btn btn-primary">Order now</a>
						</p>
					</div>
				</div>
			</div>
			</div>
			
			<?php											
			}
			$counter = $counter + 1;
			//echo $counter;
		} 
		$connect->close();	
		?>
		
	</div>
	</div>