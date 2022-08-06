    <section class="nws-frame1">
        <% loop $Children.limit(1) %>
        <div class="nws-bg">
            <img src="$IMG.URL" alt="">
            <div class="overlay"></div>
        </div>
        <div class="nws-frame1__content">
            <div class="frm-cntnr m-auto px-16">
                <div class="nws-details max-w-[560px]">
                    <div class="nws-date mb-1">
                        <p class="text-white grow-up">
                            $Date.Month $Date.Format('dd'), $Date.Year
                        </p>
                    </div>
                    <div class="nws-title mb-6">
                        <h3 class="text-white font-semibold grow-up text-4xl tracking-widest">
                            $Title
                        </h3>
                    </div>
                    <div class="nws-excerpt mb-10 text-white font--18 grow-up">
                        <p class="text-white font--18 grow-up lineclamp-2">
                           $Excerpt
                        </p>
                    </div>
                    <div class="nws-btn grow-up">
                        <a href="$Link">
                            <button class="btn btn-outline-primary">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <% end_loop %>
    </section>

    <section class="nws-frame2">
        <div class="frm-cntnr px-16 py-[120px]">
            <div class="nws-frame2__header mb-10">
                <h3 class="text--gold--500 font-semibold grow-up text-4xl">
                    News and Events
                </h3>
            </div>
            <div class="nws-wrapper flex flex-col gap-20">
                <% loop $Children.limit(999, 1) %>
                <a href="$Link">
                    <div class="news-card">
                        <div class="news-bg">
                            <img src="$IMG.URL" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="news-detail">
                            <div class="news-detail__wrapper">
                                <div class="nws-date">
                                    <p class="font--14 text-white">$Date.Month $Date.Format('dd'), $Date.Year</p>
                                </div>
                                <div class="nws-title">
                                    <p class="text-white font-semibold">$Excerpt
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <% end_loop %>
            </div>
    </section>
