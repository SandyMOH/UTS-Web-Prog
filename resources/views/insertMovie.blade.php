<!DOCTYPE html>
<html>
    <head>
        <title>Insert Genres</title>
     </head>
     <body>
         
             <form action="addmovie" method="POST">
                <table>
                    <tr>
                        @csrf
                        <td>Genres ID:</td>
                        <td><input type="text" name="genres_id"></td>
                        <td>Movie Title:</td>
                        <td><input type="text" name="movie_title"></td>
                        <td>Movie Image:</td>
                        <td><input type="file" name="movie_image"></td>
                        <td>Movie Des:</td>
                        <td><input type="text" name="movie_description"></td>
                        <td>Movie Rating:</td>
                        <td><input type="text" name="rating"></td>
                    </tr>

                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
            </form>
         
     </body>
</html>
