<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Study Topic</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Edit Study Topic</h1>

            <a href="{{ route('study-topics.index') }}"
               class="btn btn-secondary">
                Back
            </a>
        </div>

        <div class="card">
            <form action="{{ route('study-topics.update', $studyTopic) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject"
                           value="{{ old('subject', $studyTopic->subject) }}" required>
                </div>

                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" id="topic" name="topic"
                           value="{{ old('topic', $studyTopic->topic) }}" required>
                </div>

                <div class="form-group">
                    <label for="study_date">Study Date</label>
                    <input type="date" id="study_date" name="study_date"
                           value="{{ old('study_date', $studyTopic->study_date->format('Y-m-d')) }}" required>
                </div>

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
                        <option value="Low" {{ $studyTopic->priority === 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="Medium" {{ $studyTopic->priority === 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="High" {{ $studyTopic->priority === 'High' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" name="completed" value="1"
                            {{ $studyTopic->completed ? 'checked' : '' }}>
                        Completed
                    </label>
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-primary">
                        Update Topic
                    </button>

                    <a href="{{ route('study-topics.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>