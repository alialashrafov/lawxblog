@component('mail::message')
# LawxBlog.com - dan Salamlar

Sizin mesajınız bizim üçün önəmlidir. Tezliklə sizinlə əlaqə saxlayacağıq.
Son məqalələrimizdən xəbərdar olmaq üçün:

@component('mail::button', ['url' => 'lawxblog.com'])
Daxil olun
@endcomponent

Təşəkkürlər. Hörmətlə,<br>
{{ config('app.name') }}
@endcomponent
