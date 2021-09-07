<html>
<head>
   <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></link>
   <!-- <script src="js/jquery-3.5.1.js"></script> -->
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
  <style>
  .liveSearchBar, .liveSearchBar li{
  margin:0;
  padding:0;
  list-style:none;
}
.liveSearchBar, .liveSearchBar li a{
  color:#fff;
  text-decoration:none;
}
body{
  margin:0;
  background: black;
  color:#fff;
  font-weight: 700;
  font-family: 'Brush Script MT', cursive;
  font-size: 20px;
}
#live-search fieldset{
  border:0;
  padding-left:0;
}
:focus{
  outline:none;
}
.text-input{
  height:30px;
  background: none;
  border:1px solid #fff;
  padding:5px ;
  font-family: 'Brush Script MT', cursive;
  font-size: 20px;
  color:#fff;
}
::-webkit-input-placeholder {
     color: #fff;
  }
  
  :-moz-placeholder { /* Firefox 18- */
     color: #fff;  
  }
  
  ::-moz-placeholder {  /* Firefox 19+ */
     color: #fff;  
  }
  
  :-ms-input-placeholder {  
     color: #fff;  
  }
</style>
</head><form id="live-search" action="" class="styled" method="post">
    <fieldset>
        <h1>Live Search</h1>
        <input type="text" class="text-input" id="filter" placeholder="search" />
        <span id="filter-count"></span>
    </fieldset>
</form>
<body class="liveSearchBar">
<nav>
    <ul >
        <li><a href="#">Jim James</a></li>
        <li><a href="#">Hello Bye</a></li>
        <li><a href="#">Wassup Food</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Bleep bloop</a></li>
        <li><a href="#">jQuery HTML</a></li>
        <li><a href="#">CSS HTML AJAX</a></li>
        <li><a href="#">HTML5 Net Set</a></li>
        <li><a href="#">Node Easy</a></li>
        <li><a href="#">Listing Bloop</a></li>
        <li><a href="#">Contact HTML5</a></li>
        <li><a href="#">CSS3 Ajax</a></li>
        <li><a href="#">ET</a></li>
    </ul>
</nav>





<script>
  $(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $("nav ul li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        $("#filter-count").text("Number of Filter = "+count);
    });
});
</script>
</body>
</html>



-> Discussion with team.
-> Error solving for getting city name in url.
-> Session management in add_theatre, add_movie page.
-> Try to solve error in search bar and tried to get the city name in url.(functionality stopped because of filtering movie as per city).
-> R&D about how to push data from local into git repository.
-> Solved error of maintaining url in all user-end pages when page changes.
-> Try to solve error of store last city name from database into session variable. 
