<x-mail::message>
# Correo por aprobar
<x-mail::panel>
    Se ha creado un nuevo ost que necesita ser aprobado
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post->id)" color="success">
    Click aqui para aprobar
</x-mail::button>
</x-mail::message>
