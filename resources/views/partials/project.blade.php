<div class="card grey lighten-4">
    <div class="card-content">
        <span class="card-title black-text">{{ $project->title }}</span>
        <span class="badge red white-text z-depth-1">{{ ucfirst($project->category) }}</span>
        <p>{{ $project->description }}</p>
        <p>{{ $project->price_range }} budget</p>
    </div>
    @if(isset($owns) && $owns)
        <div class="card-action">
            <a class="btn waves-effect waves-light red white-text" href="{{ route('dashboard.projects.show', $project) }}">View</a>
            <a class="btn waves-effect waves-light red white-text" href="{{ route('dashboard.projects.edit', $project) }}">Edit</a>
        </div>
    @endif
</div>