window.onload = function(e) {
	fetch(
		'http://localhost:8080/TrabalhoFinal/BackEnd/temperatura', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(leitura => {  
			var table = document.getElementById("dadosLeitura");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var leituraColuna = row.insertCell(1); 
			var sensorColuna = row.insertCell(2); 
			var dataLeituraColuna = row.insertCell(3); 
			idColuna.innerHTML = leitura.id;
			leituraColuna.innerHTML = leitura.leitura;
			sensorColuna.innerHTML = leitura.sensorId;
			dataLeituraColuna.innerHTML = leitura.dataLeitura;
		})
	}).catch(error => console.error(error))
}