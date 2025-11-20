<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p class="mb-10">This job pays {{ $job['salary'] }}$ per year</p>

    <x-button href='/jobs/{{ $job->id }}/edit'>Edit</x-button>
</x-layout>
