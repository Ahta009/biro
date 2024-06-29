<div>
    <div class="background-pengumuman">
        <div class="navigation">
            @include('pengumuman.partials.navbar')
        </div>
        <div class="desknav">
            Berita
        </div>
    </div>

    <div class="pengumuman-container">
        <div class="pengumuman-content">
            @php $halfCount = ceil($newss->count() / 2); @endphp
            @foreach ($newss->take($halfCount) as $news)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $news->news_image) }} ">
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('berita.show', $news) }}">{{ $news->news_title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $news->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($news->news_description)), 200) !!}                    
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pengumuman-content">
            @foreach ($newss->skip($halfCount) as $news)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $news->news_image) }} ">
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('pengumuman.show', $news) }}">{{ $news->news_title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $news->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($news->news_description)), 200) !!}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="paginasi">
            {{ $newss->links('vendor.pagination') }}
        </div>
    </div>
</div>
