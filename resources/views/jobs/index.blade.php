<x-layout>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
        @forelse($jobs as $job)
        <x-job-card :job="$job" />
        @empty
        <p>No jobs available</p>
        @endforelse
    </div>
</x-layout>

