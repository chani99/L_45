<html>
<head>
</head>
<body>
    <script>
     var wallet = {
            tax: 17,
            smartphone: 849,
            accessorie: 39,
            getwallet: parseFloat(prompt("Please enter your ammount of money")).toFixed(2),
            smartphoneAmmunt: 0,
            accessorieAmmunt: 0
     }  
     var originalammount = wallet.getwallet;


while (wallet.getwallet >= (wallet.smartphone/100)*(100+wallet.tax)){
wallet.smartphoneAmmunt+=1;
wallet.getwallet -= (wallet.smartphone/100)*(100+wallet.tax);
}
while ((wallet.getwallet >= (wallet.accessorie/100)*(100+wallet.tax)) && (wallet.getwallet < (wallet.smartphone/100)*(100+wallet.tax)) ){
wallet.accessorieAmmunt+=1;
wallet.getwallet -= (wallet.accessorie/100)*(100+wallet.tax);

}


   console.log("You can purchase "+ wallet.smartphoneAmmunt+ " smartphones and " + wallet.accessorieAmmunt + " accessories with total cost of "+ originalammount +" NIS.");
   alert("You can purchase "+ wallet.smartphoneAmmunt+ " smartphones and " + wallet.accessorieAmmunt + " accessories with total cost of "+ originalammount +" NIS.");



    </script>
</body>
</html>