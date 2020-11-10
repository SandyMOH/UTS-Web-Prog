<div class="mx-4">
    <div class="row mx-md-n5" style="background-color:#E8ECEF">
        <div class=" ml-3 mt-3 mb-3" style="background-color:#FDFDFD ">
            <div class=" border bg-light">
                
                <br>
                <div class="row mx-md-0">
    
                    @foreach ($movie as $movie)
                        <!--gambar-->
                    <div class="col px-md-auto">
                      <img src="{{ asset('img/' . $movie->movie_image) }}" alt="..." class="img-thumbnail">
                        </div>
                  
                  <!--judul dan des -->
                  <div class="col px-md-auto">
                      <div class="row">
                          <h2 class="title ">{{$movie['movie_title']}}</h2>
                          <p class="text-justify">{{$movie['movie_description']}}</p>
                          <br>
                          <br>
                          <p>Category: </p><a href=""> Drama </a>
                      </div>
                  </div>
                    @endforeach
                    
                    <div class="col px-md-auto">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Episode</th>
                                <th scope="col">Judul</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($episode as $episode)
                              <tr>
                                <th scope="row">{{$episode['episode_num']}}</th>
                                <td>{{$episode['episode_name']}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>

                          <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-left-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                                      </svg>
                                </a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item disabled">
                                <a class="page-link" href="#">2 </a>
                              </li>
                              <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                              <li class="page-item disabled">
                                <a class="page-link" href="#">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                      </svg>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </div>
                        
    
    
                  </div>
            </div>
        </div>
    </div>
    </div>