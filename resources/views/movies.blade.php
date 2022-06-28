<h1>Lista film</h1>
<ul>
    @foreach ($movies as $item)
        <li>
            <h3> {{$item->title}} </h3>
            <h3> {{$item->original_title}} </h3>
            <h3> {{$item->nationality}} </h3>
            <h3> {{$item->date}} </h3>
            <h3> {{$item->vote}} </h3>
        </li>       
    @endforeach
</ul>