<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Planner</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Study Planner</h1>
            <a href="{{ route('study-topics.create') }}" class="btn btn-primary">
                + Add Study Topic
            </a>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($studyTopics->isEmpty())
            <div class="card">
                <p>No study topics yet.</p>
            </div>
        @else
            @foreach ($studyTopics as $studyTopic)
                <div class="card">
                    <h2>{{ $studyTopic->topic }}</h2>

                    <p><strong>Subject:</strong> {{ $studyTopic->subject }}</p>
                    <p><strong>Study Date:</strong>
                        {{ $studyTopic->study_date->format('F d, Y') }}
                    </p>
                    <p class="priority">
                        <strong>Priority:</strong> {{ $studyTopic->priority }}
                    </p>
                    <p>
                        <strong>Status:</strong>
                        {{ $studyTopic->completed ? 'Completed' : 'Not completed' }}
                    </p>

                    <div class="actions">
                        <a href="{{ route('study-topics.show', $studyTopic) }}"
                           class="btn btn-secondary">View</a>

                        <a href="{{ route('study-topics.edit', $studyTopic) }}"
                           class="btn btn-primary">Edit</a>

                        <form action="{{ route('study-topics.destroy', $studyTopic) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>