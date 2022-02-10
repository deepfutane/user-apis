var xhr = new XMLHttpRequest();
xhr.open("POST", '/submit', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
   if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
       // Request finished. Do processing here.
   }
}

git
xhr.send("name=Ketan&id=1");

const Http = new XMLHttpRequest();
const url='http://yourdomain.com/';
Http.open("GET", url);
Http.send();
Http.onreadystatechange=(e)=>{
console.log(Http.responseText)
}

fetch('https://www.yourdomain.com', {
        method: 'get'
    })
    .then(response => response.json())
    .then(jsonData => console.log(jsonData))
    .catch(err => {
            //error block
        }


        var url = 'https://www.yourdomain.com/updateProfile';
var data = {username: 'courseya'};
fetch(url, {
  method: 'POST', // or 'PUT'
  body: JSON.stringify(data), // data can be `string` or {object}!
  headers:{
    'Content-Type': 'application/json'
  }
}).then(res => res.json())
.then(response => console.log('Success:', JSON.stringify(response)))
.catch(error => console.error('Error:', error));