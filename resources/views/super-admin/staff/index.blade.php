
<ul>
@foreach ($staff as $item)
    <li>{{ $item->email }}</li>
@endforeach
</ul>