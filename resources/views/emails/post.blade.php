@component('mail::message')
# Un nouvel article vient d’être publié :

@component('mail::panel')
    {{ $post->title }}
@endcomponent

@component('mail::button', ['url' => 'http://spereda.test/posts/'.$post->id])
    Lire l’article
@endcomponent

Bonne lecture,<br>
{{ config('app.name') }}<br><br>
<a href="mailto:admin@spereda.com?subject=Désinscription&amp;body=Merci%20de%20me%20désinscrire%20de%20la%20newsletter">Se désincrire</a>
@endcomponent
