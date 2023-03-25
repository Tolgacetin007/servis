<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	<div class="position-sticky pt-3 sidebar-sticky">
		<ul class="nav flex-column">
			<li class="nav-item">
				<div align="center">
					<img src="<?php echo $logoyolu; ?>" width="80%">
				</div>
			</li>
		</ul>
		<ul class="list-unstyled ps-0">
			<li class="border-top my-3"></li>
		</ul>
		<ul class="nav flex-column mb-2">
			<li class="nav-item">
				<a class="nav-link" aria-current="page">
					<span data-feather="list" class="align-text-bottom"></span>
					<span class="mtrenk">Döviz Kurları</span>
				</a>
				<span class="nav-link">
					<ul style="list-style-type: disc;">
						<?php include 'doviz.php'; ?>
						<li style="border-bottom: 1px solid #ccc;" class="mtrenk"><span class="temagri">USD Kuru :</span>   <span style="float:right;"><?php echo $usd_kuru; ?> <span class="temagri">₺</span></span></li>
						<li style="border-bottom: 1px solid #ccc;" class="mtrenk"><span class="temagri">Euro Kuru :</span>  <span style="float:right;"><?php echo $euro_kuru; ?> <span class="temagri">₺</span></span></li>
						<li style="border-bottom: 1px solid #ccc;" class="mtrenk"><span class="temagri">Usd Euro :</span>   <span style="float:right;"><?php echo $euro_usd;?> <span class="temagri">€</span></span></li>
						<li style="border-bottom: 1px solid #ccc;" class="mtrenk"><span class="temagri">Euro Usd :</span>   <span style="float:right;"><?php echo $usd_euro; ?> <span class="temagri">$</span></span></li>
					</ul>
				</span>
			</li>
		</ul>
		<ul class="list-unstyled ps-0">
			<li class="border-top my-3"></li>
		</ul>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="#">
					<span data-feather="home" class="align-text-bottom"></span>
					<span class="mtrenk">Güncel Durum</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#musteri-collapse" aria-expanded="false">
					<span data-feather="users" class="align-text-bottom"></span>
					<span class="mtrenk">Müşteriler</span>
				</a>
				<div class="collapse" id="musteri-collapse">
					<ul class="nav flex-column md-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="plus" class="align-text-bottom"></span>
								<span class="temagri">Kayıt</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="users" class="align-text-bottom"></span>
								<span class="temagri">Müşteriler</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#teknik-collapse" aria-expanded="false">
					<span data-feather="cpu" class="align-text-bottom"></span>
					<span class="mtrenk">Teknik Departman</span>
				</a>
				<div class="collapse" id="teknik-collapse">
					<ul class="nav flex-column md-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="settings" class="align-text-bottom"></span>
								<span class="temagri">Servis Kaydı</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="sliders" class="align-text-bottom"></span>
								<span class="temagri">Servis Listesi</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="tool" class="align-text-bottom"></span>
								<span class="temagri">Servis Formu</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#yonetim-collapse" aria-expanded="false">
					<span data-feather="command" class="align-text-bottom"></span>
					<span class="mtrenk">Yönetim Departman</span>
				</a>
				<div class="collapse" id="yonetim-collapse">
					<ul class="nav flex-column md-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="trending-up" class="align-text-bottom"></span>
								<span class="temagri">Bekleyen Formlar</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="wind" class="align-text-bottom"></span>
								<span class="temagri">İşlenen Formlar</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="trending-down" class="align-text-bottom"></span>
								<span class="temagri">Tamamlanan Servisler</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled ps-0">
			<li class="border-top my-3"></li>
		</ul>
		<ul class="nav flex-column mb-2">
			<li class="nav-item">
				<a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#sirket-collapse" aria-expanded="false">
					<span data-feather="command" class="align-text-bottom"></span>
					<span class="mtrenk">Şirket ve Departman Tanımları</span>
				</a>
				<div class="collapse" id="sirket-collapse">
					<ul class="nav flex-column md-2">
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="trending-up" class="align-text-bottom"></span>
								<span class="temagri">Şirket Tanımları</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="wind" class="align-text-bottom"></span>
								<span class="temagri">Departman Tanımları</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								&nbsp;
								<span data-feather="trending-down" class="align-text-bottom"></span>
								<span class="temagri">Personel Tanımları</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled ps-0">
			<li class="border-top my-3"></li>
		</ul>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link" href="#">
					<span data-feather="log-out" class="align-text-bottom"></span>
					<span class="text-danger">Çıkış Yap</span>
				</a>
			</li>
		</ul>
		<ul class="list-unstyled ps-0">
			<li class="border-top my-3"></li>
		</ul>
		<br>
	</div>
</nav>