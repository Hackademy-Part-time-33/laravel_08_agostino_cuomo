<x-head></x-head>
<body>
<x-navbar></x-navbar>
<ul>
 @foreach ( $books as $book)
 <li> {{$book->name}}
     {{$book->descrizione}}
 </li>
</ul>
     
 @endforeach

    <x-link></x-link>
</body>

