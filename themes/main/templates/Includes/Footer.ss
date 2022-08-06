<% if ClassName != 'Page' %>
<div id="footer" class="ftr-frame bg-[#2a353b]">
	<div class="footer-wrapper px-4 lg:px-[120px] py-10">
		<div class="flex gap-10 justify-between flex-col lg:flex-row">
			<div class="lg:max-w-[642px">
				<a href="">
					<div class="flex gap-3 items-center mb-10 lg:mb-0">
						<div class="w-[70px] lg:w-[130px]">
							<img src="$ThemeDir/images/logo.png" alt="">
						</div>
						<div class="max-w-[500px]">
							<h1 class="text-2xl lg:text-[34px] font-secondary text-white tracking-widest">
								Maranat Environmental
								Society, Inc.
							</h1>
						</div>	
					</div>
				</a>
				<div class="pl-[63px] lg:pl-[142px] text-white">
					<div class="flex flex-col gap-2">
						<a class="text-xl" href="">Home</a>
						<a class="text-xl" href="">Who We Are</a>
						<a class="text-xl" href="">News & Events</a>
						<a class="text-xl" href="">Contact Us</a>
						<a class="font-bold text-xl" href="">Privacy Policy</a>
					</div>
				</div>
			</div>
			<div class="socials">
				<div class="header lg:text-center mb-6">
					<p class="text-white font-bold text-2xl">Connect With Us</p>
				</div>
				<div class="flex gap-5 lg:justify-between mb-10">
					<a href=""><img src="$ThemeDir/images/facebook.png" alt=""></a>
					<a href=""><img src="$ThemeDir/images/instagram.png" alt=""></a>
					<a href=""><img src="$ThemeDir/images/mail.png" alt=""></a>
					<a href=""><img src="$ThemeDir/images/phone.png" alt=""></a>
				</div>
				<div class="donate-btn w-fit lg:m-auto">
					<a href="">
						<button class="btn green">
							Donate
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ftr-frame__copyright text-center bg--primary text-white">
	<p>$Now.Year &copy; $SiteConfig.Title All Rights Reserved</p>
</div>
<% end_if %>