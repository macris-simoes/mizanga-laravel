function ocultar(modality){
    console.log(modality);
    var posicao_selected=modality.target.selectedIndex;
       
    var mostrar_comprovante=modality.target.options[posicao_selected].getAttribute("data-comprovante") ;
         if(mostrar_comprovante == '1'){
               $("#comprovante").show();
               
            } else {
               $("#comprovante").hide();
               
            }
        
        };