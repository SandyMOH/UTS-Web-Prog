<nav class="navbar navbar-light bg-light" style="background-color: #F8FAFC;">
    <h1>Beeflix</h1>
  </nav>
  <nav class="navbar navbar-light bg-light">
    <!-- Links -->
    <ul class="navbar-nav">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" onclick="goBack()" class="btn btn-dark">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
              Kembali</button>
              <script>
                function goBack() {
                  window.history.back();
                }
                </script>
            <a type="button" href="http://localhost/uts/public/" class="btn btn-outline-dark">Lihat Semua Film</a>
          </div>
    </ul>
  
  </nav>
  <br>
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
                
                    <div class="col px-md-1">
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
 