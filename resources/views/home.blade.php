
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <table class="table">
    <button type="button" class="class="btn btn-dark"><a href="{{url('/login')}}">Log in</button>
    @if (Auth::check())
      <br>
    @else
      <button type="button" class="class="btn btn-dark"><a href="{{url('/register')}}">Register</button>
    @endif

  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <td>{{$post->user->name}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>