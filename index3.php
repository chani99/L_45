<html>
<head>
</head>
<body>
    <script>
        var a = '<?php echo '[{"name": "name1", "age":15},{"name": "sharlok", "age":45},{"name": "pnini", "age":27},{"name": "bertok", "age":67}]' ?>';
        var myarr =JSON.parse(a);
        personArr=[];

        for(x=0; x<myarr.length; x++){
                function person(name){
                    this.name = name;
                }
     
        personArr.push(new person(myarr[x].name));
   }

   console.log(personArr);
   alert(JSON.stringify(personArr));


        </script>

    </script>
</body>
</html>