<x-layout>
    <x-slot:heading1>
        Home Page
    </x-slot:heading1>

    @foreach ($jobs as $job)
        <li><strong>{{$job['title']}}:</strong> pays {{$job['salary'] }} per year.</li>
    @endforeach

</x-layout>