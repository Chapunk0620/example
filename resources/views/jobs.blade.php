<x-layout>
    <x-slot:heading1>
        Job Listing
    </x-slot:heading1>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{$job['title']}}:</strong> pays {{$job['salary'] }} per year.
            </a>
        </li>
    @endforeach

</x-layout>