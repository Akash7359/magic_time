<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<form method="post" action='test' class="form-inline">
@csrf
    <label>Start Time</label>
    <input type="time" name="start_time" required step="1" class="form-control">
    <label>End Time</label>
    <input type="time" name='end_time' required step="1" class="form-control">
    <input type='submit' class='btn btn-info' name='submit'>
</form>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</html>