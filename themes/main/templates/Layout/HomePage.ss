<section class="hm-frame1">
	<img class="w-full h-full object-cover absolute top-0 left-0" src="$F1BG.URL" alt="">
	<div class="overlay"></div>
	<div class="frm-cntnr">
		<div class="hm-frame1__content max-w-full lg:max-w-[1000px]">
			<div class="header mb-5">
				<h1 class="text-white font-main font-black text-3xl lg:text-7xl lg:leading-[90px] tracking-widest">
					$F1Header
				</h1>		
			</div>
			<div class="desc mb-10">
				<p class="text-white text-base lg:text-2xl tracking-widest">$F1Desc</p>
			</div>
			<div class="hm-frame1__btn w-fit">
				<a href="$F1BtnLink">
					<button class="btn btn-primary">$F1BtnText</button>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="hm-frame2">
	<img class="bg-overlay" src="$ThemeDir/images/bg-f2.png" alt="">
	<div class="frm-cntnr px-4 lg:px-[94px] py-[106px] flex gap-10 items-center lg:flex-row flex-col">
		<div class="w-full lg:w-[560px]">
			<div class="header mb-4">
				<h1 class="text-5xl font-extrabold text-white tracking-widest">$F2Header</h1>
			</div>
			<div class="desc lg:max-w-[560px] mb-[57px]">
				<p class="text-white text-lg tracking-widest">$F2Desc</p>
			</div>
			<div class="mb-[57px]">
				<div class="hm-frame2__item1 flex gap-8 items-center py-[18px] px-[40px] bg-white mb-6 justify-center">
					<img src="$ThemeDir/images/planted.png" alt="">
					<p class="text-base lg:text-2xl text-[#7EBC37] tracking-widest">$F2Count1 $F2CountDesc1</p>
				</div>
				<div class="hm-frame2__item2 flex gap-8 items-center py-[18px] px-[40px] bg-white justify-center">
					<img src="$ThemeDir/images/volunteer.png" alt="">
					<p class="text-base lg:text-2xl text-[#FFD957] tracking-widest">$F2Count2 $F2CountDesc2</p>
				</div>
			</div>
			<div class="button w-fit m-auto">
				<a href="$F2BtnLink">
					<button class="btn">$F2BtnText</button>
				</a>
			</div>
		</div>
		<div class="tree order-1">
			<% include Tree %>
		</div>
	</div>
</section>

<section class="hm-frame3">
	<div class="hm-frame3__bg">
		<img src="$F3BG.URL" alt="">
	</div>
	<div class="frm-cntnr max-w-[1366px] text-center text-white px-4 lg:px-[94px] py-20">
		<div class="header mb-6">
			<h1 class="text-3xl lg:text-7xl tracking-widest font-extrabold">$F3Header</h1>
		</div>
		<div class="desc max-w-[1231px] m-auto mb-16">
			<p class="text-base lg:text-2xl">$F3Desc</p>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-16 mb-20">
			<div class="hm-frame3__img">
				<img src="$ThemeDir/images/img1.png" alt="">
			</div>
			<div class="hm-frame3__img">
				<img src="$ThemeDir/images/img2.png" alt="">
			</div>
			<div class="hm-frame3__img">
				<img src="$ThemeDir/images/img3.png" alt="">
			</div>
			<div class="hm-frame3__img">
				<img src="$ThemeDir/images/img4.png" alt="">
			</div>
		</div>
		<div class="button w-fit m-auto">
			<a href="$F3BtnLink">
				<button class="btn">$F3BtnText</button>
			</a>
		</div>
	</div>
</section>
<% loop $AboutPage %>
<section class="hm-frame4">
	<div class="frm-cntnr max-w-[1366px] px-4 lg:px-[94px] py-20 pt-0 lg:py-[120px] flex flex-col gap-[100px]">
		<div class="flex gap-10 items-center justify-between flex-col lg:flex-row">
			<div class="content max-w-full lg:max-w-[496px]">
				<div class="flex gap-6 items-center justify-center lg:justify-start mb-6">
					<img class="w-[50px] h-[50px] md:w-[100px] md:h-[100px] object-cover" src="$VisionIcon.URL" alt="">
					<h2 class="text-2xl lg:text-6xl font-bold">$VisionText</h2>
				</div>
				<div class="desc mb-16 lg:text-left">
					<p class="text-base lg:text-3xl">
						$VisionDesc
					</p>
				</div>
				<div class="border-bottom w-1/2 h-6 bg--primary m-auto"></div>
			</div>
			<div class="content-img max-w-[550px] w-full">
				<div class="wrapper w-full">
					<img class="w-full h-full absolute top-0 left-0" src="$VisionImage.URL" alt="">
				</div>
			</div>
		</div>
		<div class="flex gap-10 items-center justify-between flex-col lg:flex-row">
			<div class="content-img max-w-[550px] w-full lg:order-1 order-2">
				<div class="wrapper w-full">
					<img class="w-full h-full absolute top-0 left-0" src="$MissionImage.URL" alt="">
				</div>
			</div>
			<div class="content max-w-full lg:max-w-[496px] order-1 lg:order-2">
				<div class="flex gap-6 items-center justify-center lg:justify-end mb-6">
					<h2 class="text-2xl lg:text-6xl font-bold">$MissionText</h2>
					<img class="w-[50px] h-[50px] md:w-[100px] md:h-[100px]" src="$MissionIcon.URL" alt="">
				</div>
				<div class="desc mb-16 lg:text-right">
					<p class="text-base lg:text-3xl">
						$MissionDesc
					</p>
				</div>
				<div class="border-bottom w-1/2 h-6 bg--primary m-auto"></div>
			</div>
		</div>
	</div>
</section>
<% end_loop %>
<section class="hm-frame5 bg-[#FFD957]">
	<div class="frm-cntnr max-w-[1366px] px-4 lg:px-[94px] py-20 pt-0 lg:py-[100px]">
		<div class="header text-white mb-10 lg:mb-20 text-center">
			<h1 class="text-3xl lg:text-5xl font-bold">$F5Header</h1>
		</div>
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
			<% loop $NewsPage %>
			<% loop $Children.limit(3) %>
			    <div class="news-card">
					<div class="news-img mb-6 overflow-hidden rounded-2xl">
						<img class="w-full h-full absolute top-0 left-0 object-cover" src="$IMG.URL" alt="">
					</div>
					<div class="news-title mb-6">
						<h3 class="text-lg lg:text-2xl font-bold lineclamp-2">
							$Title
						</h3>
					</div>
					<div class="read-more w-full flex justify-end">
						<a class="text-lg text-[#CA3105] flex items-center gap-2" href="$Link">Read More <img src="$ThemeDir/images/right-arrow.png" alt=""></a>
					</div>
				</div>
			<% end_loop %>
			<% end_loop %>
		</div>
	</div>
</section>
<section class="hm-frame6">
	<img class="overlay-bg" src="$F6BG.URL" alt="">
	<div class="frm-cntnr max-w-[1366px] px-4 lg:px-[94px] py-20">
		<div class="flex gap-10 justify-between flex-col lg:flex-row">
			<div class="contact-form text-white max-w-full lg:max-w-[543px]">
				<div class="header mb-10 lg:mb-0">
					<p class="text-lg lg:text-[32px] font-bold tracking-widest mb-5">$F6Header</p>
					<p class="text-3xl lg:text-[54px] font-bold tracking-widest mb-10">$F6Desc</p>
				</div>
				<form action="">
					<div class="flex flex-col gap-6">
						<div class="frm-input">
							<label for="fullname">Full Name</label>
							<input id="fullname" name="fullname" type="text" placeholder="Full Name" required>
						</div>
						<div class="frm-input">
							<label for="contact">Contact Number</label>
							<input id="contact" name="contact" type="text" placeholder="Contact Number" required>
						</div>
						<div class="frm-input">
							<label for="email">E-mail Address</label>
							<input id="email" name="email" type="e-mail" placeholder="E-mail Address" required>
						</div>
						<div class="frm-input">
							<label for="message">Message</label>
							<textarea id="message" name="message" placeholder="Message" required></textarea>
						</div>
						<div class="submit-btn w-fit m-auto">
							<button class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="contact-details max-w-full lg:max-w-[490px]">
				<img class="mb-10 w-full" src="$ThemeDir/images/contact.svg" alt="">
				<div class="flex flex-col gap-6 text-white justify-center items-center lg:items-start lg:justify-start">
					<a href="">
						<div class="flex gap-3">
							<img src="$ThemeDir/images/facebook.png" alt="">
							<p class="text-xl">MaranatEnvironmentalSociety</p>
						</div>
					</a>
					<a href="">
						<div class="flex gap-3">
							<img src="$ThemeDir/images/instagram.png" alt="">
							<p class="text-xl">MaranatEnvironmentalSociety</p>
						</div>
					</a>
					<a href="">
						<div class="flex gap-3">
							<img src="$ThemeDir/images/mail.png" alt="">
							<p class="text-xl">maranatenvisoc@gmail.com</p>
						</div>
					</a>
					<a href="">
						<div class="flex gap-3">
							<img src="$ThemeDir/images/phone.png" alt="">
							<p class="text-xl">0951 995 7083</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>