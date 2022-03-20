<div {{ $attributes->merge(['class' => 'text-red-800']) }}>

    <p>{{ $title }}</p>
    <p>{{ $name }}</p>

    <ul>
        @foreach($list('Sugar') as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h1 class="text-3xl font-medium">{{ $heading }}</h1>

    {{ $slot }}

</div>
