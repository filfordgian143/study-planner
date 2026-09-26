<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Topic Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Study Topic Details</h1>

            <a href="{{ route('study-topics.index') }}"
               class="btn btn-secondary">
                Back
            </a>
        </div>

        <div class="card">
            <h2>{{ $studyTopic->topic }}</h2>

            <p><strong>Subject:</strong> {{ $studyTopic->subject }}</p>

            <p>
                <strong>Study Date:</strong>
                {{ $studyTopic->study_date->format('F d, Y') }}
            </p>

            <p>
                <strong>Priority:</strong>
                {{ $studyTopic->priority }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $studyTopic->completed ? 'Completed' : 'Not completed' }}
            </p>

            <div class="actions">
                <a href="{{ route('study-topics.edit', $studyTopic) }}"
                   class="btn btn-primary">
                    Edit Topic
                </a>

                <a href="{{ route('study-topics.index') }}"
                   class="btn btn-secondary">
                    Back to Planner
                </a>
            </div>
        </div>
    </div>
</body>
</html>