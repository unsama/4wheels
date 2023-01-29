<div class="user-stats-container bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="user-stats-row">
       <div class="stat present">
           <p class="heading">Present</p>
           <p class="count">10</p>
       </div>
        <div class="stat break">
            <p class="heading">OnBreak</p>
            <p class="count">5</p>
        </div>
        <div class="stat absent">
            <p class="heading">Absent</p>
            <p class="count">7</p>
        </div>
    </div>
    <div class="current-datetime">
        @php
            $date = Date("Y-m-d");
            $time = Date("h:i:s a");
            @endphp
        <p class="date">{{$date}}</p>
        <p class="time">{{$time}}</p>
    </div>
</div>
