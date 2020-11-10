<div class="mx-4">
    <div class="row mx-md-n5" style="background-color:#E8ECEF">
        <div class=" ml-3 mt-3 mb-3" style="background-color:#FDFDFD ">
            <div class=" border bg-light">
                <div class="mt-2 ml-2">
                    <a href="genre" style="color: black">
                        <h3>Drama</h3></a>
                </div>
                <br>
                <div class="row mx-md-3">
                    @foreach($movie1 as $movie1)
                
                    <div class="col px-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/' . $movie1->movie_image) }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">    
                            <h5 class="card-title ">{{$movie1['movie_title']}}</h5>    
                            <a type="button" href="episode" class="btn btn-dark mx-auto">Lihat Film</a>  
                            </div>
                          </div>
                    </div>
                    @endforeach
    
                  </div>
    
            </div>
            
        
        </div>
        
    </div>
    </div>