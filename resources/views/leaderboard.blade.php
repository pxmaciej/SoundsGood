@include('layouts.app')
<main class="py-4">
    <div class="container justify-content-center">
        <table class="table table-bordered text-white text-center">
            <thead class="bg-success">
              <tr>
                <th scope="col">{{__('text.id')}}</th>
                <th scope="col">{{__('text.nick')}}</th>
                <th scope="col">{{__('text.points')}}</th>
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