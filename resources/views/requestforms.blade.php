<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  background-image:url("/images/Bible-Study.jpg");
  background-size: cover;
  background-image: url("/image/bible2.png");
 
}

* {
  box-sizing: border-box;
}


.container {
  padding: 5px;
  background-color: white;
  text-align: center;
  width: 47%;
  margin-left: 27%;
  margin-top: 11%;
  opacity: 0.9;
  border-radius: 20px;
}


td {
  padding: 4%;
  border-radius: 20px;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #07A1FF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


#ourmanna-verse{
  background-image:url("/images/omega.png");
  background-color: #003556;
  text-align: center;
  font-weight: bold;
  background-size: cover;
  background-repeat:no-repeat;
  background-position: center;
  color: white;
  position: fixed;
  width: 100%;
  overflow: hidden;
  top: 0;
  z-index: 1;
}

</style>
</head>
<body>



<div id="ourmanna-verse">
            <div id="mannaverse-container">
                <p id="mannaverse">
                    For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.
                </p>
                <p id="mannaverse-reference">
                    John 3:16
                    <small id="mannaverse-version"><i>(NIV)</i></small>
                </p>
            </div>
        </div>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>

  <div class="container">
  
    
  <form action="/bible-study-create-form" method="POST" class="">
  @csrf                         

    <h1>Register</h1>
    <p>Please fill up the following form below for your request</p>
    <hr>
    {{ session('message') }}

    <br>
    <br>
    
    <input type="hidden" value="{{ $bstable->id }}" name="id" >
    
    <table>

    <tr>
    <td><label for="name"><b>Complete Name</b></label></td>
    <td><input type="text" value="{{ $bstable->name }}" placeholder="Complete Name" name="name" id="name" required></td>
    </tr>
    <tr>
    <td><label for="email"><b>Email Address</b></label></td>
    <td><input type="email" value="{{ $bstable->email }}" placeholder="Email Address" name="email" id="email" required></td>
    </tr>

    <tr>
    <td><label for="number"><b>Contact Number</b></label></td>
    <td><input type="number" value="{{ $bstable->number }}" placeholder="Contact Number" name="number" id="number" required><td>
    </tr>

    <tr>
    <td><label for="bdate"><b>Birthdate</b></label></td>
    <td><input type="date" value="{{ $bstable->bdate }}" placeholder="Birthdate" name="bdate" id="bdate" required></td>
    </tr>

    <tr>
    <td><label for="religion"><b>Religious Affiliation</b></label></td>
    <td><input type="text" value="{{ $bstable->religion }}" placeholder="Religious Affiliation" name="religion" id="religion" required></td>
    </tr>

    <tr>
    <td><label for="bsdate"><b>Bible Study Date</b></label></td>
    <td><input type="date" value="{{ $bstable->bsdate }}" placeholder="Bible Study Date" name="bsdate" id="bsdate" required></td>
    </tr>

    <tr>
    <td><label for="bstime"><b>Bible Study Time</b></label></td>
    <td><input type="time" value="{{ $bstable->bstime }}" placeholder="Bible Study Time" name="bstime" id="bstime" required></td>
    </tr>

    <tr>
    <td><label for="bslocation"><b>Bible Study Location / Address</b></label></td>
    <td><input type="text" value="{{ $bstable->bslocation }}" placeholder="Bible Study Location / Address" name="bslocation" id="bslocation" required></td>
    </tr>
    </table>
    <hr>
    <br>
    

    <button type="submit" value="saved" class="registerbtn"> Submit </button>
  
</form>
</div>
  </div>
</body>
</html>

