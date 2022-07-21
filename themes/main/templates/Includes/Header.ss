<% if ClassName != 'Page' %>
<div id="header" class="hdr-frame fixed w-full z-10">
	<div class="px-4 lg:px-[50px] flex items-center justify-between py-3">
		<div class="w-fit">
			<a href="$AbsoluteBaseURL">
				<div class="logo flex items-center">
					<div class="logo-img mr-[6px]">
						<img src="$ThemeDir/images/logo.png" alt="">
					</div>
					<h1 class="font-secondary clr--primary text-3xl lg:text-[50px]">MESInc</h1>
				</div>
			</a>
		</div>
		<div id="nav-icon">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<div class="nav-menu">
	<div class="wrapper py-[150px] flex flex-col gap-10 m-auto items-end px-[50px]">
		<% loop $menu(1) %>
	    		<a class="w-fit text-white font-black text-2xl lg:text-5xl tracking-widest hover:text-[#fc871b] transition $LinkingMode" href="$Link">$Title</a>
		<% end_loop %>
	</div>
</div>
<% end_if %>
