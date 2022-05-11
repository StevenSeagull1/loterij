    // random value generated
    var y = Math.floor(Math.random() * 10 + 1);
      
    // counting the number of guesses
    // made for correct Guess
    var guess = 1;
      
    document.getElementById("submitguess").onclick = function(){
      
   // number guessed by user     
   var x = document.getElementById("guessField").value;
  
   if(x == y)
   {    
       alert("top. plus punten voor jouw. dit kostte je wel "
               + guess + " pogingen dat moet wel echt beter ");
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