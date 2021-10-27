<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Object Properties</h2>
<p>Looping object property values:</p>

<p id="demo"></p>

<script>
const person = {
  firstname:"John",
  lastname:"Doe",
  age:25
}; 

let txt = "";
for (let x in person) {
  txt += person[x] + " ";
}

const array = Object.value(person);

//document.getElementById("demo").innerHTML = txt;
document.getElementById("demo").innerHTML = person;

</script>

</body>
</html>
