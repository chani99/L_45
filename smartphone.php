<html>
<head>
</head>
<body>
    <script>
    var tax = 17;
    var smartphone = 849;
    var accessorie = 39;
    var wallet = parseFloat(prompt("Please enter your ammount of money")).toFixed(2);
    var originalammount = wallet;
    var smartphoneAmmunt = 0;
    var accessorieAmmunt = 0;


while (wallet >= (smartphone/100)*(100+tax)){
smartphoneAmmunt+=1;
wallet -= (smartphone/100)*(100+tax);
}
while ((wallet >= (accessorie/100)*(100+tax)) && (wallet < (smartphone/100)*(100+tax)) ){
accessorieAmmunt+=1;
wallet -= (accessorie/100)*(100+tax);

}
//                 function person(FirstName, LastName, ID ){
//                     this.FirstName = FirstName;
//                     this.LastName = LastName;
//                     this.ID =ID;
//                     this.fullName = person.fullName;
//                 }
// var p1 = new person('chani', 'avrahami', 4444444,);
//             Object.defineProperty(p1, 'ID',{
//                 writable: false,
//                 configurable: false,
//                 enumerable: true
//             });
     
//                 Object.defineProperty(p1, 'fullName',{
//                     get: function() {return this.FirstName + " " + this.LastName;},
//                     set: function(){}  
//             });

//         personArr.push();
   

   console.log("You can purchase "+ smartphoneAmmunt+ " smartphones and " + smartphoneAmmunt + " accessories with total cost of "+ originalammount +" NIS.");
   alert("You can purchase "+ smartphoneAmmunt+ " smartphones and " + smartphoneAmmunt + " accessories with total cost of "+ originalammount +" NIS.");



    </script>
</body>
</html>