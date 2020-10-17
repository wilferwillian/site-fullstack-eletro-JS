function abrirProduto(categoria){

    let elementos = document.getElementsByClassName('produto');

    for(let i=0; i<elementos.length; i++){
        if(categoria == elementos[i].id)
            elementos[i].style = 'display:inline-block';
        else
            elementos[i].style = 'display:none';
    }
}


function retornaTodos() {
   let elementos = document.getElementsByClassName('produto');
   for (let i = 0; i < elementos.length; i++) {
       elementos[i].style = 'display:inline-block';
    }
}

let amplia = (imagem) => {
    if(imagem.width === 205)
    imagem.style = 'width:400px'
    else
    imagem.style = 'width:205px'
}
