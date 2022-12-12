<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {box-sizing: border-box}


body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px 10px;
  font-size: 17px;
  width: 20%;
}

.tablink:hover {
  background-color: rgb(172, 134, 180);;
}


.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: rgb(172, 134, 180);}
#News {background-color: rgb(172, 134, 180);}
#Contact {background-color: rgb(172, 134, 180);}
#About {background-color: rgb(172, 134, 180);}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'rgb(172, 134, 180);')">Records</button>
<button class="tablink" onclick="openPage('News', this, 'rgb(172, 134, 180);')" id="defaultOpen">News</button>
<button class="tablink" onclick="openPage('Contact', this, 'rgb(172, 134, 180);')">Add Books</button>
<button class="tablink" onclick="openPage('About', this, 'rgb(172, 134, 180);')">About</button>
<button class="tablink"> Logout</button>

<div id="Home" class="tabcontent">
  <h3>Records</h3>
  <p>...</p>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Add Books</h3>
  <p>...</p>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}


.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: rgb(172, 134, 180);;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: rgb(172, 134, 180);;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="booktitle"><b>Book Title</b></label>
    <input type="text" placeholder="Book Title" name="booktitle" required>

    <label for="author"><b>Author</b></label>
    <input type="text" placeholder="Author" name="author" required>

    <label for="categpry"><b>Category</b></label>
    <input type="text" placeholder="Category" name="category" required>

    <label for="daterelease">Date Release:</label>
  <input type="date" id="daterelease" name="daterelease">

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

</div>

<div id="About" class="tabcontent">
  <h3>Description</h3>
  <p>The purpose of our software/system is that we want to minimize the job of librarians and to make
        it easier for QCU college students to borrow books. The Quezon City University Library System
        takes charge of the acquisition, collection, organization, distribution, and preservation of books.
        QCLS manages the dissemination of information through books.</p><br>

    <h3>Mission</h3>
    <p>To give college students the knowledge they need to learn better and assist them in
            developing the research skills needed for a blended learning environment and to assists
            students and admin staff. </p><br>

    <h3>Vision</h3>
    <p>The QCU library system is engaged in learning and discovery as essential participants in
        the educational community. We develop, organize, provide access to, and preserve
        materials to meet the needs of present and future generations of QCU students.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
