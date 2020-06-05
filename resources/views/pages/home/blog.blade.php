<div class="rn-blog-area rn-section-gap bg_color--5" id="blog">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title--3 text-center mb--30">
                    <h2 class="title">Recent Thoughts</h2>
                    <p>That I have recently written down.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-row justify-content-center">

            @foreach (\Anomaly\Streams\Platform\Streams\Facades\Streams::make('posts')->repository()->all() as $item)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog blog-style--1">
                    <div class="thumbnail">
                        <a href="/post/{{ $item->id }}">
                            <img class="w-100" src="assets/images/blog/blog-01.jpg" alt="Blog Images" />
                        </a>
                    </div>
                    <div class="content">
                        <p class="blogtype">Development</p>
                        <h4 class="title"><a href="/post/{{ $item->id }}">Getting tickets to the big show</a>
                        </h4>
                        <div class="blog-btn">
                            <a class="rn-btn text-white" href="/post/{{ $item->id }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
