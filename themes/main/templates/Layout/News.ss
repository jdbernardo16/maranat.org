<section class="blog-frame bg-[#2a353b]">
    <div class="blog-cntnr max-w-[710px] pb-[123px] pt-[102px]">
        <div class="blog-img mb-10 grow-down">
            <img src="$IMG.URL" alt="">
        </div>
        <div class="blog-content text-white">
            <div class="blog-date mb-1 grow-up">
                <p class="text--gray--500 font--14">
                    $Date.Month $Date.Format('dd'), $Date.Year
                </p>
            </div>
            <div class="blog-title mb-10 grow-up">
                <h2 class="font-semibold text--gray--700">
                    $Title
                </h2>
            </div>
            <div class="blog-desc grow-up">
                $Desc
            </div>
            <div class="back-btn grow-up">
                <a href="$Parent.link">
                    <div class="flex gap-1 items-center">
                        <img src="{{ asset('images/right.png') }}" alt=""><small
                            class="font-semibold text--secondary uppercase">
                            Back to News
                        </small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="blog-frame2 related-blog bg-[#F6F6F6]">
    <div class="frm-cntnr px-16 py-[120px] max-w-[1366px]">
        <div class="related-blog__header mb-10 text-center grow-up">
            <h2 class="text--gold--500 font-semibold">
                Related News and Events
            </h2>
        </div>
        <div class="related-blogs grid grid-cols-3 gap-[33px]">
            <% loop $Parent.Children.limit(4) %>
            <% if isCurrent %>
            <% else %>
            <a href="$Link">
                <div class="blog-card bg--white">
                    <div class="blog-img">
                        <img src="$IMG.URL" alt="">
                    </div>
                    <div class="blog-details p-10">
                        <div class="blog-date mb-1">
                            <p class="font--14 text--gray--500">
                                $Date.Month $Date.Format('dd'), $Date.Year
                            </p>
                        </div>
                        <div class="blog-title mb-4">
                            <p class="font--24 font-semibold">
                                $Title
                            </p>
                        </div>
                        <div class="blog-excerpt text--gray--500">
                            <p class="text--gray--500 lineclamp-3">
                               $Excerpt
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <% end_if %>
            <% end_loop %>
        </div>
    </div>
</section>
