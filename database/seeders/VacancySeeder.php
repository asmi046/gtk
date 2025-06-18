<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vacancies')->insert([
            'title'            => 'Инженер производственно-диспетчерского отдела',
            'company_name'     => 'ООО "Главтехконструкция"',
            'city'             => 'Курск',
            'description'      => '<h3>Обязанности:</h3><ul><li>Чтение чертежей и проектов</li><li>Работа со спецификацией отправочных марок</li><li>Раскрой материала</li><li>Сводная ведомость и заявки на материал</li><li>Выявление ошибок проекта и спецификаций отправочных марок</li></ul><h3>Требования:</h3><ul><li>Техническое образование</li><li>Опыт работы от 1 года</li></ul><h3>Условия:</h3><ul><li>5-дневная рабочая неделя с 8:30 до 17:00</li><li>Рабочее место находится в дер. Ворошнево</li><li>Доставка служебным транспортом</li></ul>',
            'employment_type'  => 'Полная занятость',
            'work_schedule'    => 'Полный день',
            'salary'           => "от 60 000 за месяц, до вычета налогов",
            'experience'       => 'от 3 до 6 лет',
            'education'        => 'Высшее образование',
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        DB::table('vacancies')->insert([
            'title'            => 'Менеджер по продажам',
            'company_name'     => 'ООО "Главтехконструкция"',
            'city'             => 'Курск',
            'description'      => '',
            'employment_type'  => 'Полная занятость',
            'work_schedule'    => 'Полный день',
            'salary'           => "от 57 000 до 150 000 ₽ за месяц, до вычета налогов",
            'experience'       => 'от 1 до 3 лет',
            'education'        => 'Высшее образование',
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);
    }
}
