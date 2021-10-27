<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects</title>
</head>

<body>
    <script>
        const person = {
            name: ['Bob', 'Smith'],
            age: 32,
            gender: 'male',
            interests: ['music', 'skiing'],
            bio: function() {
                alert(this.name[0] + ' ' + this.name[1] + ' is ' + this.age + 'years old. He likes ' + this.interests[0] + ' ' + this.interests[1] + '.');
            },
            greeting: function() {
                alert('Hi! I\'m' + this.name[0] + '.');
            }
        };

        console.log(person.name)
        console.log(person.name[0])
        console.log(person.age)
        console.log(person.interests)
        console.log(person.bio)
        console.log(person.greeting)


        //Object Display 1

        const person1 = {
            name: "John",
            age: 30,
            city: "New York"
        };
        document.getElementById("demo").innerHTML = person1;
        person1.name+","+person1.age+","+person1.city;

        //object Display 2
        //display the object in a loop
        const person1 = {
            name: "John",
            age: 30,
            city: "New York"
        };

        let txt ="";
        for(let x in person1){
            txt+=person[x]+" ";
        };

        document.getElementById("demo").innerHTML = person1;

         //object display 3
        //using Object.values()
        
        const person1 = {
            name: "John",
            age: 30,
            city: "New York"
        };

        const myArray = Object.values(person1);
        document.getElementById("demo").innerHTML = person1;

        //object Display 4
        //using JSON.stringify()
        const person1 = {
            name: "John",
            age: 30,
            city: "New York"
        };
        let myString=JSON.stringify(person1);
        document.getElementById("demo").innerHTML = person1;



    </script>

</body>

</html>