let div = document.getElementById('display');
let img = document.getElementById('img');
// let btn = document.getElementById('btn');

// btn.addEventListener('click', ()=>{
// 	div.textContent = '';
// 	let reload = window.setTimeout(window.location.reload(true),200);

// 	clearInterval(reload);
// });


document.addEventListener('DOMContentLoaded', ()=>{
    fetch("http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=cher&api_key=b6c2f545dcece23ad5d29a5cd9b7e1cf&format=json")
.then(res => res.json())
.then(data => {
	let music = ``;	
	data.topalbums.album.map(ss => {
	
	music+=`
	<div class="cardp-2 p-3 m-4 shadowrise" style="width:300px">
	<img class="card-img-top" src="images/logos.jpg" alt="Card image">
	<div class="card-body">
	  <h4 class="card-title">${ss.name}</h4>
	  <p class="card-text">Some example text.</p>
	  <a href="${ss.url}" class="btn btn-primary">See Profile</a>
	</div>
  </div>
    `;
		})
	div.innerHTML=music;
})
.catch(err => {
	console.log(err);
});
})



    