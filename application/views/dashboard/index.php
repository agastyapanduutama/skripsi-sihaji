
<?php 
$query_kbih = $this->db->query("SELECT DISTINCT kbbih FROM pasien ORDER BY `pasien`.`kbbih` ASC");
$total_kbih = $this->db->query("SELECT kbbih, COUNT(*) duplikat FROM pasien GROUP BY kbbih HAVING duplikat");


$query_kloter = $this->db->query("SELECT DISTINCT kloter FROM pasien ORDER BY `pasien`.`kloter` ASC");
$total_kloter = $this->db->query("SELECT kloter, COUNT(*) duplikat FROM pasien GROUP BY kloter HAVING duplikat");

?>

<script src="<?= base_url()?>assets/chartjs/dist/chart.js"></script>

<div class="row">
	<div class="col-md-6">
	<div style="width: 350px;height: 350px">
		<h3>Berdasarkan Jenis Kelamin</h3>
			<canvas id="myChart"></canvas>
	</div>

		<script>
			var ctx = document.getElementById("myChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'pie',
					data: {
						labels: ["Wanita", "Pria"],
						datasets: [{
							label: '# of Votes',
							data: [
							<?php  
								$this->db->like('jenis_kelamin','0');
							    $this->db->from('pasien');
							    echo $this->db->count_all_results(); 
							?>,
							<?php  
								$this->db->like('jenis_kelamin','1');
							    $this->db->from('pasien');
							    echo $this->db->count_all_results(); 
							?>,
							],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
							],
							borderWidth: 2
						}]
					},
					options: {
						
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						
					}
				});
		</script>
		</div>


	<div class="col-md-6">
		<div style="width: 350px;height: 350px">
			<h3>Berdasarkan Kota</h3>
				<canvas id="kota"></canvas>
		</div>

		<script>
			var ctx = document.getElementById("kota").getContext('2d');
				var kota = new Chart(ctx, {
					type: 'pie',
					data: {
						labels: ["Kota Bandung", "Kab Bandung"],
						datasets: [{
							label: '# of Votes',
							data: [
							<?php  
								$this->db->like('kota','1');
							    $this->db->from('pasien');
							    echo $this->db->count_all_results(); 
							?>,
							<?php  
								$this->db->like('kota','2');
							    $this->db->from('pasien');
							    echo $this->db->count_all_results(); 
							?>,
							],
							backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
							],
							borderWidth: 2
						}]
					},
					options: {
						
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						
					}
				});
		</script>
	</div>




</div>






<div class="col-md-12">
		<div>
			<h3>Grafik Berdasarkan Kloter</h3>
				<canvas id="kloter"></canvas>
		</div>

		<script  type="text/javascript">

    	  var ctx = document.getElementById("kloter").getContext("2d");
    	  var data = {
    	            labels: [
    	            		<?php 
						   	foreach ($query_kloter->result() as $key) {
							echo "\"$key->kloter\", "; } 
							?>
    	            ],
    	            datasets: [
    	            {
    	              label: "Berdasarkan Kloter",
    	              data: [
    	              	 <?php 
						  	foreach ($total_kloter->result() as $key) {
								echo "$key->duplikat, ";
								}
						   ?>
    	              ],
                   
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>
	</div>



<div class="col-md-12">
		<div>
			<h3>Grafik Berdasarkan KBIH</h3>
				<canvas id="kbih"></canvas>
		</div>

		<script  type="text/javascript">

    	  var ctx = document.getElementById("kbih").getContext("2d");
    	  var data = {
    	            labels: [
    	            			<?php 
							   	foreach ($query_kbih->result() as $keyna) {
								echo "\"$keyna->kbbih\", "; } 
								?>
    	            ],
    	            datasets: [
    	            {
    	              label: "Berdasarkan Kloter",
    	              data: [
    	              	<?php 
						  	foreach ($total_kbih->result() as $key) {
								echo "$key->duplikat, ";
								}
						   ?>
    	              ],
                   
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>
	</div>
