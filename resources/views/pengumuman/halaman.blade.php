<div>
    <div class="background-pengumuman">
        <div class="navigation">
            @include('pengumuman.partials.navbar')
        </div>
        <div class="desknav">
            Pengumuman
        </div>
    </div>

    <div class="pengumuman-container">
        <div class="pengumuman-content">
            @php $halfCount = ceil($notices->count() / 2); @endphp
            @foreach ($notices->take($halfCount) as $notice)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $notice->image) }}">
                        
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('pengumuman.show', $notice) }}">{{ $notice->title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $notice->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($notice->description)), 200) !!}                    
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pengumuman-content">
            @foreach ($notices->skip($halfCount) as $notice)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $notice->image) }}">
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('pengumuman.show', $notice) }}">{{ $notice->title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $notice->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($notice->description)), 200) !!}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="paginasi">
            {{ $notices->links('vendor.pagination') }}
        </div>
    </div>
</div>
