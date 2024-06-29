<!-- resources/views/pengumuman/show.blade.php -->

<div class="background-pengumuman mb-4">
    <div class="navigation">
        @include('pengumuman.partials.navbar')
    </div>
    <div class="desknav">
        {{ $news->news_title }}
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $news->news_image) }}" class="card-img-top berita-image" alt="{{ $news->news_title }}">
                <div class="card-body">
                    <h1 class="card-title">{{ $news->news_title }}</h1>
                    <p class="card-text">{!! $news->news_description !!}</p>
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">{{ $news->created_at->format('d M Y') }}</span>
                        <span class="text-muted">taufik</span>
                    </div>
                </div>
            </div>

            <div class="pagination mt-4">
                @if($previousNews)
                    <a href="{{ route('berita.show', $previousNews) }}" class="btn btn-outline-primary">
                        <div>Previous</div>
                        <div class="prev-title">{{ $previousNews->news_title }}</div>
                    </a>
                @endif

                @if($nextNews)
                    <a href="{{ route('berita.show', $nextNews) }}" class="btn btn-outline-primary">
                        <div>Next</div>
                        <div class="next-title">{{ $nextNews->news_title }}</div>
                    </a>
                @endif
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    Kategori
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="far fa-folder"></i> Pengumuman</li>
                        <li><i class="far fa-folder"></i> Berita</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Recent Posts
                </div>
                <div class="card-body">
                    @foreach($recentNewss as $recentNews)
                        <div class="media mb-3">
                            <img class="mr-3 recimage" src="{{ asset('storage/' . $recentNews->news_image) }}" alt="{{ $recentNews->news_title }}">
                            <div class="media-body">
                                <h5 class="mt-0"><a href="{{ route('berita.show', $recentNews) }}">{{ $recentNews->news_title }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Social Icon
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <a href="#" class="text-dark"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
