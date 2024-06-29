<div>
    <div class="background-pengumuman">
        <div class="navigation">
            @include('pengumuman.partials.navbar')
        </div>
        <div class="desknav">
            Agenda
        </div>
    </div>

    <div class="pengumuman-container">
        <div class="pengumuman-content">
            @php $halfCount = ceil($agendas->count() / 2); @endphp
            @foreach ($agendas->take($halfCount) as $agenda)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $agenda->agenda_image) }} ">
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('kegiatan.show', $agenda) }}">{{ $agenda->agenda_title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $agenda->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($agenda->agenda_description)), 200) !!}                    
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pengumuman-content">
            @foreach ($agendas->skip($halfCount) as $agenda)
                <div class="content-box">
                    <div class="notice-image">
                        <img class="notice-gambar" src="{{ asset('storage/' . $agenda->agenda_image) }} ">
                    </div>
                    <div class="notice-title">
                        <a href="{{ route('pengumuman.show', $agenda) }}">{{ $agenda->agenda_title }}</a>
                    </div>
                    <div class="notice-info">
                        <div class="tanggal">{{ $agenda->created_at->format('d M Y') }}</div>
                        <div class="penulis">taufik</div>
                    </div>
                    <div class="notice-desc">
                        {!! Str::limit(strip_tags(nl2br($agenda->agenda_description)), 200) !!}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="paginasi">
            {{ $agendas->links('vendor.pagination') }}
        </div>
    </div>
</div>
