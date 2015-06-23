<div class="card blue-grey darken-1">
    <div class="card-content white-text">
        <span class="card-title">{{ $project->title }}</span>
        <span class="badge teal white-text">{{ ucfirst($project->category) }}</span>
        <p>{{ $project->description }}</p>
        <p>{{ $project->price_range }} budget</p>
    </div>
    @if(isset($owns) && $owns)
        <div class="card-action">
            <a href="{{ route('dashboard.projects.show', $project) }}">View</a>
            <a href="{{ route('dashboard.projects.edit', $project) }}">Edit</a>
        </div>
    @endif
</div>