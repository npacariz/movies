<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      
      @foreach($sidebarQuery as $movie)

         <a href="/movies/{{$movie->id}}" class="list-group-item">{{$movie->title}}</a>

      @endforeach

    </div>
  </div><!--/span-->