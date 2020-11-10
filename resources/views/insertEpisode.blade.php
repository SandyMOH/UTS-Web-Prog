<!DOCTYPE html>
<html>
    <head>
        <title>Insert Genres</title>
     </head>
     <body>
         
             <form action="addepisode" method="POST">
                <table>
                    <tr>
                        
                        @csrf
                        <td>Movie ID:</td>
                        <td><input type="text" name="episode_id"></td>
                        <br>
                        <td>Episode Numer:</td>
                        <td><input type="text" name="episode_num"></td>
                        <br>
                        <td>Episode Name:</td>
                        <td><input type="text" name="episode_name"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
            </form>
         
     </body>
</html>
