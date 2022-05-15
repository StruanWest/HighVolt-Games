function processInput()
{
    //make sure we have more than 3 characters in first (otherwise it will just return too many results)
    var searchValue = document.getElementById("Username").value;
    if (searchValue.length > 3)
    {
        //start the search on the database
        // weblink
        var pageRequest = new XMLHttpRequest();
        pageRequest.onreadystatechange = function() {
            if (this.status == 200) {
                document.getElementById("output").innerHTML = pageRequest.responseText;
            }
        };

        pageRequest.open("GET","Logged_in.php?search="+searchValue,true);
        pageRequest.send();
    }
}