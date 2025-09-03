<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Actions\TelegramSendAction;

use App\Mail\Consultation\CalcMail;
use App\Mail\Consultation\TeamMail;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Consultation\ConsultMail;
use App\Http\Requests\Consultation\CalcFormRequest;
use App\Http\Requests\Consultation\TeamFormRequest;
use App\Http\Requests\Consultation\ConsultFormRequest;

class SenderConsultController extends Controller
{
    public function send_consultation(ConsultFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();


        $tmp = $tgsender->handle("<b>Консультация</b>\n\rТелефон: ".$data['phone']);


        Mail::to(explode(",",config('consultation.mailadresat')))->send(new ConsultMail($data));

        return true;
    }

    public function send_adv_form(CalcFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();
        $tmp = $tgsender->handle(
            "<b>Заявка на расчет</b>\n\rТелефон: " . $data['phone'] .
            "\n\rИмя: " . $data['name'] .
            "\n\rEmail: " . $data['email'] .
            "\n\rДетали: " . $data['details']
        );
        Mail::to(explode(",",config('consultation.mailadresat')))->send(new CalcMail($data));

        return redirect()->route('thencs_consult');
    }

    public function send_hh_form(TeamFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();
        $tmp = $tgsender->handle(
            "<b>Вакансия</b>\n\rТелефон: " . $data['phone'] .
            "\n\rИмя: " . $data['name']
        );
        Mail::to(explode(",",config('consultation.mailadresat_hh')))->send(new TeamMail($data));

        return redirect()->route('thencs_consult');
    }

    public function show_thencs() {
        return view('mail.consultation.thencs');
    }
}
