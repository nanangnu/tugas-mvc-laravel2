<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        <h1>Buat Account Baru</h1>
        <h3>Signup Form</h3>

        <form action="/welcome" method="POST" >
            @csrf
            <label for="">First Name :</label><br>
            <input type="text" name="name1"><br>

            <label for="">Last Name :</label><br>
            <input type="text" name="name2"><br><br>

            <label for="">Gender</label> <br>
            <input type="radio" id="male" name="gender" value="Male"> <label for="">Male</label> <br>
            <input type="radio" id="female" name="gender" value="Female"> <label for="">Female</label> <br>
            <input type="radio" id="other" name="gender" value="Other"> <label for="">Other</label> <br><br>

            <label for="">Nationality :</label><br>
            <select name="nationality" id="" >
                <option value="blank">  </option>
                <option value="indonesia"> Indonesia </option>
                <option value="malaysia"> Malaysia </option>
                <option value="singapore"> Singapore </option>
            </select> <br><br>

            <label for="">Language Spoken :</label> <br>
            <input type="checkbox" name="language" value="indonesia"> <label for="">Bahasa Indonesia</label><br>
            <input type="checkbox" name="language" value="english"> <label for="english">English</label><br>
            <input type="checkbox" name="language" value="other"> <label for="other"> Other </label> <br><br>

            <label for="">Bio :</label><br>
            <textarea name="bio" id="" cols="30" rows="5"></textarea><br><br>

            <input type="submit" formtarget="_blank" value="Signup">
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>