<x-layout>
<div>

    <h1>Sing up</h1>
    <form action="/register" method="POST">
        @csrf
    <div>
        <x-input titulo="Name" type="text" nombre="name"/>
    </div>

    <div>
        <x-input titulo="Email" type="text" nombre="email"/>
    </div>

    <div>
        <x-input titulo="password" type="password" nombre="password"/>
    </div>

    <div>
        <x-input titulo="Birthday" type="date" nombre="birthday"/>
    </div>

    <button type=submit>Submit</button>
    </form>

</div>
<x-layout/>
