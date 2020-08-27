<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
	<!--begin::Container-->
	<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Nav-->
        <div class="nav nav-dark">
            <a href="" target="_blank" class="nav-link pl-0 pr-5 font-weight-bold">
							@if($local == 'id')
								<a href="https://cmlabs.co/tentang-kami/" class="text-dark-50">Tentang CMLABS</a>
							@else
								<a href="https://cmlabs.co/en/about-us/" class="text-dark-50">About CMLABS</a>
							@endif
						</a>
            <a href="" target="_blank" class="nav-link pl-0 pr-5 font-weight-bold">
							@if($local == 'id')
								<a href="" class="text-dark-50">Kontak Kami</a>
							@else
								<a href="" class="text-dark-50">Contact Us</a>
							@endif
						</a>
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
