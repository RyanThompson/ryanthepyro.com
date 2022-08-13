<div class="rn-portfolio-area rn-section-gap bg_color--1" id="portfolio">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title--3 text-center mb--30">
                    <h2 class="title">Projects</h2>
                    <p>These are things I am actively working on.</p>
                </div>
            </div>
        </div>

        <div class="row d-flex flex-row justify-content-center">

            @foreach (Streams::entries('projects')->get() as $project)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="portfolio text-center">
                    <div class="thumbnail-inner">
                        <div class="thumbnail image-8" style="background-image: url({!! $project->image ? img($project->image)->url() : null !!});"></div>
                    <div class="bg-blr-image image-8" onclick="window.open('{{ $project->url }}');"></div>
                    </div>
                    <div class="content">
                        <div class="inner">
                            <p>{{ $project->type }}</p>
                            <h4>
                                <a href="{{ $project->url }}" target="_blank">{{ $project->name }}</a>
                            </h4>
                            <p>{{ $project->description }}</p>
                            <div class="portfolio-button">
                                <a class="rn-btn" href="{{ $project->url }}" target="_blank">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="view-more-btn mt--60 mt_sm--30 text-center">
                    <a class="rn-button-style--2 btn_solid" href="#">View More</a>
                </div>
            </div>
        </div> --}}

    </div>
</div>
