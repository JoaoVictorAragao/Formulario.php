const cadForm = document.getElementById("cad_user_form")


cadForm.addEventListener("submit", async (e) =>{
    e.preventDefault();
   
    const dadosForm = new FormData(cadForm)
    dadosForm.append("add", 1)
    console.log(dadosForm)

   const dados = await fetch("cadastrar.php",{
        method:"POST",
        body: dadosForm,
    });

    const resposta = await dados.json()
    console.log(resposta);

});









