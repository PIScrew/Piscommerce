<div class="container-fluid" data-codepage="<?php echo $codepage ?>">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<!-- basic table -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row m-t-40">
						<!-- Column -->
						<div class="col-md-6 col-lg-3 col-xlg-3">
							<div class="card card-hover">
								<div class="box bg-info text-center">
									<h1 class="font-light text-white"><?php echo rupiah($totSell[0]['total_price'])?></h1>
									<h6 class="text-white">Total Penjualan (Rp)</h6>
								</div>
							</div>
						</div>
						<!-- Column -->
						<div class="col-md-6 col-lg-3 col-xlg-3">
							<div class="card card-hover">
								<div class="box bg-primary text-center">
									<h1 class="font-light text-white"><?php echo rupiah($totProduct[0]['qty'])?></h1>
									<h6 class="text-white">Total Produk Terjual</h6>
								</div>
							</div>
						</div>
						<!-- Column -->
						<div class="col-md-6 col-lg-3 col-xlg-3">
							<div class="card card-hover">
								<div class="box bg-success text-center">
									<h1 class="font-light text-white"><?php echo rupiah($totProfit)?></h1>
									<h6 class="text-white">Total Keuntungan bulanan (Rp)</h6>
								</div>
							</div>
						</div>
						<!-- Column -->
						<div class="col-md-6 col-lg-3 col-xlg-3">
							<div class="card card-hover">
								<div class="box bg-secondary text-center">
									<h1 class="font-light text-white"><?php echo rupiah($totAllProfit)?></h1>
									<h6 class="text-white">Total Seluruh Keuntungan (Rp)</h6>
								</div>
							</div>
						</div>
						
					</div>
					<hr>
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="true">Bulanan <span class="badge badge-light"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="false">Semua  <span class="badge badge-light"></span></a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
							<div class="table-responsive">
								<table id="listEarningMonth" class="table table-striped" style="width:100%">
									<thead>
										<tr>
											<th width="80%">Title</th>
											<th width="10%">Qty</th>
											<th>Nominal</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($earning as $e):?>
										<tr>
											<td>
												<?php echo $e['title_product']?>
											</td>
											<td>
												<?php echo $e['qty']?>
											</td>
											<td>
												<?php echo rupiah($e['total_price'])?>
											</td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
							<div class="table-responsive">
								<table id="listAlleraning" class="table table-striped" style="width:100%">
									<thead>
										<tr>
											<th width="80%">Title</th>
											<th width="10%">Qty</th>
											<th>Nominal</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($allearning as $e):?>
										<tr>
											<td>
												<?php echo $e['title_product']?>
											</td>
											<td>
												<?php echo $e['qty']?>
											</td>
											<td>
												<?php echo rupiah($e['total_price'])?>
											</td>
										</tr>
										<?php endforeach;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>