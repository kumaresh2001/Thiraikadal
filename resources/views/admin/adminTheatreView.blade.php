<x-app-layout>
    
    
</x-app-layout>

    <div class="navbar">
        <div class="option">
            <a href="" class="navOption">Home</a>
        </div>
        <div class="option">
            <a href="?option=theatreView" class="navOption">Theatre</a>
        </div>
    
    </div>


<h1>Hi Admin. Ithu thaan theatre View</h1>
<ol>    
    @foreach ($theatres as $theatre)
        <li>
            <a href="\theatre\{{$theatre->$theatre_id}}">
            {{ $theatre->theatre_name }}
            </a>
        </li>
    @endforeach
</ol>