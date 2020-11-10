<!DOCTYPE html>
<html>
    <head>
        <title>Insert Genres</title>
     </head>
     <body>
         
             <form action="addgenre" method="POST">
                <table>
                    <tr>
                        
                        @csrf
                        <td>Genres:</td>
                        <td><input type="text" name="genre_name"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
            </form>
         
     </body>
</html>