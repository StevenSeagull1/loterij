 var y = Math.floor(Math.random() * 20 + 1);
    var guess = 1;
    var points = 0;
    var plus = p;
      
    document.getElementById("submitguess").onclick = function(){
      
   // number guessed by user     
   var x = document.getElementById("guessField").value;
  
   if(x == y)
   {    
       alert("top. plus punten voor jouw. dit kostte je wel "
               + guess + " pogingen dat moet wel echt beter ");
       p = +1;
   }
   else if(x > y) /* if guessed number is greater
                   than actual number*/ 
   {    
       guess++;
       alert("dat is niet goed jij mislukkeling");
   }
   else
   {
       guess++;
       alert("dat is niet goed jij mislukkeling")
   }
}

console.log(points+plus)

 //aids
