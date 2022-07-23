<section class="frm-cntnr ss-frm">
	<div class="ss-frm__cntnr">
		<div class="ss-frm__left">
			<div class="ss-frm__header">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="frm-title ss-frm__title mb-0">
							<img src="$ThemeDir/images/praxxys-logo.png" alt="company_logo">
						</div>
					</div>
				</div>
			</div>
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<div class="nav-link active" id="colors-tab">
					<p>Color</p>
				</div>
				<div class="nav-link" id="typography-tab">
					<p>Typography</p>
				</div>
				<div class="nav-link" id="forms-tab">
					<p>Forms</p>
				</div>
				<div class="nav-link" id="buttons-tab">
					<p>Buttons</p>
				</div>
				<div class="nav-link" id="cards-tab">
					<p><a href="#cards">Cards</a></p>					
				</div>
			</div>
		</div>
		<div class="ss-frm__right">
			<div class="ss-frm__header">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="frm-title ss-frm__title mb-0">
							<% loop HeaderFooter %>
							<img src="$HeaderLogo.URL" alt="Client Logo">
							<% end_loop %>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane inlineBlock-parent show active" id="colors" data-target="colors-tab">
					<div class="ss-frm__col align-t width--65">
						<div class="s-margin-b ss-frm__subtitle">
							<p>STYLE GUIDE</p>
						</div>
						<div class="l-margin-b ss-frm__title">
							<p>Color Palette</p>
						</div>
						<% include ssColor %>
					</div
					><div class="ss-frm__snippet width--35">
						<div class="code--bg mb-3">
							<h3 class="clr--primary">
								Variables
							</h3>
							<code class="ss-snippet-block">
								<small>// Primary</small>
								<p>\$color--primary: #F5842A</p>
								<br>
								<small>// Neutral</small>
								<p>\$color--white: #FFFFFF;</p>
								<p>\$color--gray--400: #C4C4C4;</p>
								<p>\$color--gray--500: #9C9C9C;</p>
								<p>\$color--gray--700: #464646;</p>
								<p>\$color--black: #191919;</p>
							</code>
							<br>
							<br>
							<h3 class="clr--primary">
								Classes
							</h3>
							<code class="ss-snippet-block">
								<small>// Primary</small>
								<p>.clr--primary</p>
								<p>.bg--primary</p>
								<br>
								<small>// Neutral</small>
								<small>// White</small>
								<p>.clr--white</p>
								<p>.bg--white</p>
								<br>
								<small>// Gray 400</small>
								<p>.clr--gray--400</p>
								<p>.bg--gray--400</p>
								<br>
								<small>// Gray 500</small>
								<p>.clr--gray--500</p>
								<p>.bg--gray--500</p>
								<br>
								<small>// Gray 700</small>
								<p>.clr--gray--700</p>
								<p>.bg--gray--700</p>
								<br>
								<small>// Black</small>
								<p>.clr--black</p>
								<p>.bg--black</p>
							</code>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="typography" data-target="typography-tab">
					<div class="ss-frm__col align-t width--65">
						<div class="l-margin-b ss-frm__title">
							<p>Typography</p>
						</div>
						<% include ssTypography %>
					</div
					><div class="ss-frm__snippet width--35">
						<div class="code--bg mb-3">
							<h3 class="clr--primary">
								Variables
							</h3>
							<code class="ss-snippet-block">
								<small>//'Work Sans', sans-serif</small>
								<p>\$font--main</p>
								<br>
								<small>//1rem | 16px | Default</small>
								<p>\$font-size-default</p>
								<br>
								<small>//3rem | 36px | H2, Frame Title</small>
								<p>\$font-size-xxx-large</p>
								<br>
								<small>2.25rem | 36px | H2, Frame Title</small>
								<p>\$font-size-xx-large</p>
								<br>
								<small>1.5rem | 24px | H3, Label Title</small>
								<p>\$font-size-x-large</p>
								<br>
								<small>1.25rem | 20px | H4, Label Title</small>
								<p>\$font-size-large</p>
								<br>
								<small>1rem | 16px | H5,</small>
								<p>\$font-size-medium</p>
								<br>
								<small>0.875rem | 14px | H6, Buttons, Navigation</small>
								<p>\$font-size-small</p>
								<br>
								<small>0.75rem | 12px | Small, Footer Title</small>
								<p>\$font-size-x-small</p>
								<br>
								<small>0.625rem | 10px | Footer Text</small>
								<p>\$font-size-xx-small</p>
							</code>
							<br>
							<br>
							<h3 class="clr--primary">
								Classes
							</h3>
							<code class="ss-snippet-block">
								<small>//'Work Sans', sans-serif</small>
								<p>.font-1</p>
								<br>
								<small>//1rem | 16px | Default</small>
								<p>.font-size--default</p>
								<br>
								<small>//3rem | 48px | H1, Frame Title</small>
								<p>.font-size--xxx-large</p>
								<br>
								<small>2.25rem | 36px | H2, Frame Title</small>
								<p>.font-size--xx-large</p>
								<br>
								<small>1.5rem | 24px | H3, Label Title</small>
								<p>.font-size--x-large</p>
								<br>
								<small>1.25rem | 20px | H4, Label Title</small>
								<p>.font-size--large</p>
								<br>
								<small>1rem | 16px | H5,</small>
								<p>.font-size--medium</p>
								<br>
								<small>0.875rem | 14px | H6, Buttons, Navigation</small>
								<p>.font-size--small</p>
								<br>
								<small>0.75rem | 12px | Small, Footer Title</small>
								<p>.font-size--x-small</p>
								<br>
								<small>0.625rem | 10px | Footer Text</small>
								<p>.font-size--xx-small</p>
								<br>
								<small>Font-weight : Normal</small>
								<p>.font-weight--regular</p>
								<br>
								<small>Font-weight : Medium</small>
								<p>.font-weight--medium</p>
								<br>
								<small>Font-weight : Semi Bold</small>
								<p>.font-weight--semibold</p>
								<br>
								<small>Font-weight : Bold</small>
								<p>.font-weight--bold</p>
								<br>
								<small>Font-weight : Extra Bold</small>
								<p>.font-weight--extrabold</p>
							</code>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="forms" data-target="forms-tab">
					<div class="ss-frm__col align-t width--65">
						<div class="l-margin-b ss-frm__title">
							<p>Forms</p>
						</div>
						<% include ssForms %>
					</div
					><div class="ss-frm__snippet width--35">
						
					</div>
				</div>
				<div class="tab-pane" id="buttons" data-target="buttons-tab">
					<div class="ss-frm__col align-t width--65">
						<div class="l-margin-b ss-frm__title">
							<p>Buttons</p>
						</div>
						<% include ssButtons %>
					</div
					><div class="ss-frm__snippet width--35">
						
					</div>
				</div>
				<div class="tab-pane" id="cards" data-target="cards-tab">
					<div class="ss-frm__col align-t width--65">
						<div class="l-margin-b ss-frm__title">
							<p>Cards</p>
						</div>
						<% include ssCards %>
					</div
					><div class="ss-frm__snippet width--35">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>