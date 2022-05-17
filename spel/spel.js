 var y = Math.floor(Math.random() * 4 + 1);
    var guess = 1;
    var points = 0;

    document.getElementById("submitguess").onclick = function(){
      
   // number guessed by user     
   var x = document.getElementById("guessField").value;
  
   if(x == y)
   {
       alert("top. plus punten voor jouw. dit kostte je wel "
               + guess + " pogingen dat moet wel echt beter ");
       points+=1;
       console.log(points)
       document.getElementById("points").innerHTML = points

   }
   else if(x > y)
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


