<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Consultation\ConsultMail;
use App\Actions\TelegramSendAction;

use App\Http\Requests\Consultation\ConsultFormRequest;

class SenderConsultController extends Controller
{
    public function send_consultation(ConsultFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();


        $tmp = $tgsender->handle("<b>Консультация</b>\n\rТелефон: ".$data['phone']);


        Mail::to(explode(",",config('consultation.mailadresat')))->send(new ConsultMail($data));

        return true;
    }

    public function show_thencs() {
        return view('mail.consultation.thencs');
    }
}
