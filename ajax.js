document.getElementById("button").addEventListener("click", getJokes, false); //create an eventlistener to call getUsers() function when button clicked

function getJokes() {
  const request = new XMLHttpRequest(); //create new request
  let url = 'http://api.serri.codefactory.live/random/';
  request.open("GET", url, true); //set request as a GET method connecting to users.php
  request.onload = function () {
    if (this.status == 200) {
      let jokes = JSON.parse(this.responseText); //data received is turned into JS objects
      console.log(jokes); //see the array of objects in your console
      let output = ""; //create container variable
      // users.forEach(user => {
      for (let i in jokes) {
        output += `<p>Joke of the day: ${jokes[i].joke} 
                    
        </p>`; //loop through each object and display their properties
      }

   

      document.getElementById("jokes").innerHTML = output; //output results in div#users
      // });
    }
  };
  request.send(); //send request
}
