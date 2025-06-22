<div class="vacancy-item">
    <h3>{{ $item['title'] }}</h3>
    <p><strong>Компания:</strong> <span> {{ $item['company_name'] }} </span></p>
    <p><strong>Город:</strong> <span>{{ $item['city'] }}</span></p>
    <p><strong>Тип занятости:</strong> <span>{{ $item['employment_type'] }}</span></p>
    <p><strong>Расписание:</strong> <span>{{ $item['work_schedule'] }}</span></p>
    <p><strong>Заработная плата:</strong> <span>{{ $item['salary'] }}</span></p>
    <p><strong>Стаж:</strong> <span>{{ $item['experience'] }}</span></p>
    <p><strong>Образование:</strong> <span>{{ $item['education'] }}</span></p>
    <p><strong>Описание:</strong> </p>
    <div class="text_styles">
        {!! $item['description'] !!}
    </div>
</div>
