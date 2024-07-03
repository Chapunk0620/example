<x-layout>
    <x-slot:heading1>
        Job
    </x-slot:heading1>
    <h2  class="font-bold text-lg" > {{ $job['title'] }} </h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>