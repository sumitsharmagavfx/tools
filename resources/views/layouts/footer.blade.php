<div class="container">
	<div class="px-8">
			<span style="display:block; width:100%; border-top: 1px solid #ccc;"></span>
	</div>

<div class="footer py-4 d-flex flex-lg-column" style="padding-left:1rem; padding-right:1rem; " id="kt_footer">
	<!--begin::Container-->
	<!-- <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between pb-3">
        <div class="nav nav-dark">
							@if($local == 'id')
								<span class="font-weight-bold text-dark-50 pl-3">Indonesia</span>
							@else
							<span class="font-weight-bold text-dark-50 pl-3">English</span>
							@endif
        </div>
	</div> -->

	<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Nav-->
        <div class="nav nav-dark">
							@if($local == 'id')
								<a href="https://cmlabs.co/tentang-kami/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">Tentang CMLABS</a>
								<a href="https://cmlabs.co/ruang-pers/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">Ruang Pers</a>
								<a href="https://cmlabs.co/karir/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">Karir</a>
							@else
								<a href="https://cmlabs.co/en/about-us/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">About CMLABS</a>
								<a href="https://cmlabs.co/en/press-room/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">Press Release</a>
								<a href="https://cmlabs.co/en/career/" target="_blank" class="nav-link px-3 font-weight-bold text-dark-50">We are Hiring!!</a>
							@endif
        </div>
        <!--end::Nav-->
		<!--begin::Copyright-->
		<div class="text-dark font-weight-bold">
			<span class="text-muted font-weight-bold mr-2">©2020 - </span>
			@if($local == 'id')
				<a href="https://cmlabs.co" target="_blank" class="text-dark-50">Content Marketing Labs</a>
			@else
				<a href="https://cmlabs.co/en" target="_blank" class="text-dark-50">Content Marketing Labs</a>
			@endif
		</div>
		<!--end::Copyright-->
	</div>
	<!--end::Container-->
</div>
</div>
