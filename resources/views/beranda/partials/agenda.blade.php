        <div class="agendahead">Agenda</div>
            <div class="agendahead2">Agenda Kegiatan Kampus</div>
            <div class="agendacontent">
                @foreach ($agendas as $agenda)
                    <div class="agendacard">
                        <div class="agendaimage">
                            <div class="agendamonth">{{ $agenda->formatted_month }}</div>
                            <div class="agendadate">{{$agenda->formatted_day}}</div>
                        </div>
                        <div class="agendato">{{$agenda->agenda_audiens}}</div>
                        <div class="agendatitle">{{$agenda->agenda_title}}</div>
                        <div class="agendatime"><i class="far fa-clock" style="margin-right: 10px" ></i>
                            {{$agenda->agenda_jam}}
                        </div>
                    </div>    
                @endforeach
                
            </div>
            <div class="agendamore"><a href="/agenda"><button> Agenda Lainnya</button></a></div>
        