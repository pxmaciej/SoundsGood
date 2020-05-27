@include('layouts.app')
<main class="py-4">
    <div class="container justify-content-center">
        <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nick</th>
                <th scope="col">Punkty</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($list as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->points}}</td>
              </tr>
            
              @endforeach
            </tbody>
          </table>
    </div>
</main>