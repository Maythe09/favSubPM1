<x-layout>
    <div class="grid place-content-center h-screen">
        <h1>Log In</h1>

        <form action="/login" method="POST">
            @csrf

            <div class="my-2">
                <x-input titulo="Email" type="text" nombre="email" />
            </div>

            <div class="my-2">
                <x-input titulo="Password" type="password" nombre="password" />
            </div>

            <button type="submit">Log In</button>
        </form>
    </div>
</x-layout>
