<div {{ $attributes->merge(['class' => 'text-xl']) }}>

    <p>{{ $title }}</p>
    <p>{{ $name }}</p>

    <ul>
        @foreach($list('Sugar') as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    {{ $slot }}

</div>
