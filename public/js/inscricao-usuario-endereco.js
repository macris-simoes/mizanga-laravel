function exibir_ocultar(event){
    event.target.value    

         if(event.target.value == 'brasil'){
               $("#cidade").show();
               $("#estado").show();
               $("#pais").hide();
            } else {
               $("#cidade").hide();
               $("#estado").hide();
               $("#pais").show();
            }
        
        };
    
    