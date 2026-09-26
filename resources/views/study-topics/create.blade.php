<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Study Topic</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Add Study Topic</h1>
        </div>

        <div class="card">
            <form action="{{ route('study-topics.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject"
                           value="{{ old('subject') }}" required>
                </div>

                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" id="topic" name="topic"
                           value="{{ old('topic') }}" required>
                </div>

                <div class="form-group">
                    <label for="study_date">Study Date</label>
                    <input type="date" id="study_date" name="study_date"
                           value="{{ old('study_date') }}" required>
                </div>

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select id="priority" name="priority" required>
                        <option value="">Select priority</option>
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-primary">
                        Add Topic
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