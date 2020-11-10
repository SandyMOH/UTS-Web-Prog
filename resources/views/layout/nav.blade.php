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
            <button type="button" href="" class="btn btn-outline-dark">Lihat Semua Film</button>
          </div>
    </ul>
  
  </nav>
  <br>
  @extends('layout.genre1')
