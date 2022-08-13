<div class="rn-blog-area rn-section-gap bg_color--5" id="blog">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title--3 text-center mb--30">
                    <h2 class="title">Recent Writing</h2>
                    <p>Quick thoughts, longer articles, and some in between.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-row justify-content-center">

            @foreach (Streams::entries('posts')->orderBy('created_at', 'desc')->limit(6)->get() as $post)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="blog blog-style--1">
                    <div class="thumbnail">
                        <a href="/post/{{ $post->id }}">
                            {!! Images::make($post->poster)->fit(390, 532)->class('w-100') !!}
                        </a>
                    </div>
                    <div class="content">
                        <p class="blogtype">{{ $post->category }}</p>
                        <h4 class="title">
                            <a href="/post/{{ $post->id }}">{{ $post->title }}<br><small class="text-sm">{{ $post->subtitle }}</small></a>
                        </h4>
                        <div class="blog-btn">
                            <a class="rn-btn text-white" href="/post/{{ $post->id }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

        {{-- @if ($posts->total() > 6)
        <div class="row">
            <div class="col-lg-12">
                <div class="view-more-btn mt--60 mt_sm--30 text-center">
                    <a class="rn-button-style--2 btn_solid" href="#">View More</a>
                </div>
            </div>
        </div>
        @endif --}}
        
    </div>
</div>
