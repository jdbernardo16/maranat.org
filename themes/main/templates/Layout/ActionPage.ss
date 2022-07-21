<section class="action-frame1">
	<img class="action-frame1__bg" src="$ThemeDir/images/action.png" alt="">
	<div class="frm-cntnr">
		<div class="action-frame1__content w-full">
			<h1 class="clr--primary font-black max-w-[1054px] m-auto text-3xl lg:text-6xl tracking-widest text-center leading-relaxed">What We Do</h1>
		</div>
	</div>
</section>
<section class="action-frame2">
	<div class="frm-cntnr max-w-[1140px] px-4 py-20">
		<div class="flex gap-10 lg:gap-[100px] justify-between items-center flex-col lg:flex-row">
			<div class="tree w-full lg:w-[553px]">
				<% include Tree %>
			</div>
			<div class="action-frame2__content text-center w-full lg:w-[458px]">
				<h3 class="font-black text-[#FF9900] text-2xl lg:text-[50px] tracking-widest mb-4 lg:mb-20">Tree Planting</h3>
				<h2 class="text-4xl lg:text-[72px] font-black text-[#65B331] tracking-widest mb-4 lg:mb-20">13,423</h2>
				<p class="text-base lg:text-2xl">Trees planted within the<br>coverage area</p>
			</div>
		</div>
	</div>
</section>
<section class="action-frame3">
	<div class="frm-cntnr max-w-[1140px] py-20 px-4">
		<div class="flex gap-10 lg:gap-[100px] justify-between items-center flex-col lg:flex-row">
			<div class="action-frame2__content text-center w-full lg:w-[458px] order-2 lg:order-1">
				<h3 class="font-black text-[#65B331] text-2xl lg:text-[50px] tracking-widest mb-4 lg:mb-20">Volunteerism</h3>
				<h2 class="text-4xl lg:text-[72px] font-black text-[#FF9900] tracking-widest mb-4 lg:mb-20">412</h2>
				<p class="text-base lg:text-2xl">Volunteers who plant and<br>monitor those trees</p>
			</div>
			<div class="tree w-full lg:w-[553px] order-1 lg:order-2">
				<% include Volunteer %>
			</div>
		</div>
	</div>
</section>
<section class="action-frame4">
	<div class="frm-cntnr max-w-[1440px] px-4 lg:px-[94px] py-20">
		<img class="w-[447px] lg:absolute lg:top-10 lg:right-10" src="$ThemeDir/images/hawk.png" alt="">
		<div class="flex items-end gap-10 flex-col lg:flex-row">
			<div class="w-full lg:w-9/12">
				<div class="text-center mb-20">
					<h1 class="text-3xl lg:text-[71px] font-black tracking-widest text-white">Project Gallery</h1>
				</div>
				<div class="relative">
					<div class="action-frame4__slider swiper w-full relative">
						<div class="swiper-wrapper">
							<div class="swiper-slide slider-item relative">
								<div class="relative pt-[100%]">
									<img class="w-full h-full absolute top-0 left-0 object-cover" src="$ThemeDir/images/news3.png" alt="">
								</div>
								<div class="text-center">
									<p class="text-xl font-black tracking-widest text-white">Clean up drive</p>
								</div>
							</div>	
							<div class="swiper-slide slider-item relative">
								<div class="w-full relative pt-[100%] mb-2">
									<img class="w-full h-full absolute top-0 left-0 object-cover" src="$ThemeDir/images/news3.png" alt="">
								</div>
								<div class="text-center">
									<p class="text-xl font-black tracking-widest text-white">Clean up drive</p>
								</div>
							</div>	
							<div class="swiper-slide slider-item relative">
								<div class="w-full relative pt-[100%]">
									<img class="w-full h-full absolute top-0 left-0 object-cover" src="$ThemeDir/images/news3.png" alt="">
								</div>
								<div class="text-center">
									<p class="text-xl font-black tracking-widest text-white">Clean up drive</p>
								</div>
							</div>	
							<div class="swiper-slide slider-item relative">
								<div class="w-full relative pt-[100%]">
									<img class="w-full h-full absolute top-0 left-0 object-cover" src="$ThemeDir/images/news3.png" alt="">
								</div>
								<div class="text-center">
									<p class="text-xl font-black tracking-widest text-white">Clean up drive</p>
								</div>
							</div>	
						</div>
					</div>
					<div class="arrow-right">
						<img src="$ThemeDir/images/arrow-right.svg" alt="">
					</div>
				</div>
			</div>
			<div class="w-full lg:w-3/12 align-bottom lg:text-left text-center">
				<p class="text-base lg:text-xl tracking-widest text-white">Photo gallery for every events and activities that we held.</p>
			</div>
		</div>
	</div>
</section>