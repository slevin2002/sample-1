   $("#btn").click(function(){
          
          for(let i=0;i<=5;i++){
            setTimeout(function(){
                $("#circle"+i).css("display","none")
            },2000*i);
        }
        });
   
        $("#btn1").click(function(){
     
        
          for(let i=5;i>=1;i--){
            setTimeout(function(){
                $("#circle"+i).css("display","block")
            },2000*i);
        }
        });
                   


    