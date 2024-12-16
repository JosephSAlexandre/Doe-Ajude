const btnDeletar = document.getElementById("btnDeletar");
btnDeletar.addEventListener("click", (e) => {
   const frmDeletar = document.getElementById("frmDeletar");
   let formData = new FormData(frmDeletar);
   
   // as 2 linhas abaixo são no caso de uma alterção ou exclusão
   let jsonData = JSON.stringify(Object.fromEntries(formData));
   console.log(jsonData);

   let xhr = new XMLHttpRequest();
   xhr.onload = function() {
      if (xhr.status==200 && xhr.readyState==4) {
         console.log(xhr.responseText);
      }
      else {
         console.log("XMLHttpRequest Error");
      }
   }
   // troque o DELETE abaixo pelo método que vc precisa
   // GET, POST, PUT, DELETE
   // lembrando que no caso de consultas (GET), vc deve enviar os parâmetros diretamente no URL
   xhr.open("DELETE","form.php");
   // se for inclusão(POST) vc envia o formData
   // se for alteração ou exclusão (PUT ou DELETE) você envia o jsonData
   // se for uma consulta (GET), vc deve enviar os dados pelo URL, como mencionei acima
   xhr.send(jsonData);
})
