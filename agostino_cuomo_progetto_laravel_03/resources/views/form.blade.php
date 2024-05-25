<x-head></x-head>
<body>
<x-navbar></x-navbar>
<form method="post" action="{{route('save')}}">
    @csrf
<div class="mb-3">

    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"> Descrizione</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    <x-link></x-link>
</body>