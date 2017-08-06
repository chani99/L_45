<html>
<head>
</head>
<body>
    <script>
        var a = '<?php echo '[{"name": "name1", "age":15},{"name": "sharlok", "age":45},{"name": "pnini", "age":27},{"name": "bertok", "age":67}]' ?>';
        var myarr =JSON.parse(a);
        var personArr=[];
        var obgPerson={};

                function person(FirstName, LastName, ID ){
                    this.FirstName = FirstName;
                    this.LastName = LastName;
                    this.ID =ID;
                    this.fullName = person.fullName;
                }
var p1 = new person('chani', 'avrahami', 4444444,);
            Object.defineProperty(p1, 'ID',{
                writable: false,
                configurable: false,
                enumerable: true
            });
     
                Object.defineProperty(p1, 'fullName',{
                    get: function() {return this.FirstName + " " + this.LastName;},
                    set: function(){}  
            });

        personArr.push();
   

   console.log(personArr);
   alert(JSON.stringify(p1));


        </script>

    </script>
</body>
</html>