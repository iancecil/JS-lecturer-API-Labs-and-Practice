<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        let person = "Hohn Doe";

        let person = {
            firstName: "John",
            lastName: "Doe",
            age: 50,
            eyeColor: "blue"
        };

        const person = {
            name: ['Bob', 'Smith'],
            age: 32,
            gender: 'male',
            interests: ['music', 'skiing'],
            bio: function(){
                alert(this.name[0]+ ' '+this.name[1]+ ' is '+this.age +'years old. He likes ' + this.interests[0]+
                'and '+ this.interests[1]+ '.');
            },
            greeting: function(){
                alert('Hi! I\'m ' +this.name[0] +'.');

            }
        };
    </script>
</head>
<body>
    
</body>
</html>