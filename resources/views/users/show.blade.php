<x-app-layout>
    <div class="mx-4">
                @if ($user->role == 'platinum')
                    @include('users.partials.view-platinum')
                @else     
                    @include('users.partials.view-others')
                @endif
    </div>
</x-app-layout>