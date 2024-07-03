<x-layout>
    <x-slot:heading1>
        Job Listing
    </x-slot:heading1>
    @foreach ($jobs as $job)
        <li>
            <strong>{{$job['title']}}:</strong> pays {{$job['salary'] }} per year.
        </li>
    @endforeach

</x-layout>