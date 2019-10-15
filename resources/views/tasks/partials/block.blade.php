<h1>All Tasks</h1>
<hr>
<ol>
	@foreach ($tasks as $task)
	<li>
		<a href="/tasks/{{ $task->id }} ">{{ $task->title }}</a>
	</li>
	@endforeach
</ol>