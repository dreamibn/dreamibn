<?php
										
										$sql = "SELECT * FROM ucapan000";
										$result = mysqli_query($conn, $sql);
										$results_per_pages = 10;
										$number_of_results = mysqli_num_rows($result);
										$number_of_pages = ceil($number_of_results/$results_per_pages);

										if(!isset($_GET['page'])) {
											$page = 1;
										} else {
											$page = $_GET['page'];
										}

									$this_page_first_result = ($page-1)*$results_per_pages;

									$sql = "SELECT * FROM ucapan000 LIMIT " . $this_page_first_result . ',' . $results_per_pages;
									$result=mysqli_query($conn, $sql);

									for ($page=1;$page<=$number_of_pages;$page++) {
										echo '<a href="index.php?page=' . $page . '"> ' . $page . '</a>';
									}

										if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											
									?>
									<div class="single-item">
										<h4><?php echo $row['name']; ?></h4>
										<p><?php echo $row['message']; ?></p>
									</div>
									<?php
										
										}
									}
									?>