	<div class="sidebar">
		<div class="scrollbar-inner sidebar-wrapper">
			<ul class="nav">
				<!-- Dashboard -->
				<li class="nav-item <?= is_active('dashboard') ?>">
					<a href="<?= base_url('dashboard') ?>">
						<i class="la la-dashboard"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<!-- Master Data -->
				<li class="nav-item <?= is_active('masterdata') ?>">
					<a href="<?= base_url('masterdata') ?>">
						<i class="la la-database"></i>
						<p>Kriteria</p>
					</a>
				</li>
				<!-- Alternatif -->
				<li class="nav-item <?= is_active('alternatif') ?>">
					<a href="<?= base_url('alternatif') ?>">
						<i class="la la-users"></i>
						<p>Alternatif</p>
					</a>
				</li>
				<!-- Kriteria -->
				<!-- <li class="nav-item <?= is_active('kriteria') ?>">
					<a href="<?= base_url('kriteria') ?>">
						<i class="la la-files-o"></i>
						<p>Kriteria</p>
					</a>
				</li> -->
				<!-- Perhitungan -->
				<li class="nav-item <?= is_active('hasil') ?>">
					<a href="<?= base_url('hasil') ?>">
						<i class="la la-leanpub"></i>
						<p>Hasil SAW</p>
					</a>
				</li>
		</div>
	</div>
	<div class="main-panel">
		<div class="content">
			<div class="container-fluid">