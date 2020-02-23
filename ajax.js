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
	let array = Object.keys(data);
	
	let albumData = data[array].album;

	Object.keys(albumData).map((list)=>{
		let src = albumData[list].image[3];
		
		music+=`
		<div class="d-flex justify-content-center p-3 flex-wrap">

			<div class=" border p-3 bg-warning rounded-sm border-dark h-100 style='width:200px !important'">
				<div>
					<h1 class=''>Album: </br><a href='${albumData[list].url}'><span style="font-size:30px;color:blue" class=' line-height:'>${albumData[list].name}</span></a> </h1>

				</div>					<img src="${src}" style='width:100px, height:100px'/>
				<h6><span class="text-monospace">Artist</span> : <kbd>${albumData[list].artist.name}</kbd> | <span class="text-monospace">Played </span><kbd>${albumData[list].playcount}</kbd> times</h6>
				<a href='${albumData[list].url}'><button type="button" class="btn btn-outline-light btn-sm custom mt-1 rounded-pill">Play</button></a>
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



    