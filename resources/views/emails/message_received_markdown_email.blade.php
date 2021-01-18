<!-- $subject       = 'Multumim pentru mesaj! Спасибо за Ваше сообщение!';
$receiverEmail = 'RECEIVER_EMAIL_ADDRESS';
$receiverData  = view('message_received_markdown_email');

Mail::send('email', $data, function($message) use ($to_name, $to_email)

Mail::to($receiverEmail)->send(new \App\Mail\MessageReceived($subject, $receiverData)); -->



@component('mail::message')
# Introduction

Va multumim pentru mesajul Dumneavoastra! 

In cel mai scurt timp vom reveni cu un raspuns. Daca aveti nevoie de o consultatie urgenta, apelati la +373 790 123 456.

Cu respect,<br>
Echipa {{ config('app.name') }}

***

Спасибо за Ваше сообщение! 

В близжайшие дни мы Вам ответим. Если Вам необходима консультация в срочном порядке, просим Вас позвонить на номер +373 790 123 456.

С уважением,<br>
Команда {{ config('app.name') }}

@component('mail::button', ['url' => '', 'color' => 'success'])
MVTextile
@endcomponent

@endcomponent
