                <div class="newshead">
                    Berita
                </div>
                <div class="newsparts">
                    @foreach ($newss as $news)
                        <div class="news">
                            <div class="newspicture">
                                <img class="pict" src={{ asset('storage/' . $news->news_image) }}>
                            </div>
                            <div class="newstitle">{{$news->news_title}}</div>
                            <div class="newsdate">{{ $news->created_at->format('d F Y') }}</div>
                            <div class="newsdesc">
                                {!! Str::limit(strip_tags($news->news_description), 150, '...') !!}
                            </div>
                                <div class="newsmore">
                                    <button><a href="/berita/detail/{{$news->id}}">Selengkapnya</a></button>
                                </div>
                        </div>    
                    @endforeach
                </div>
                <div class="newsall">
                    <button><a href="/berita">Semua Berita</a></button>
                </div>
    