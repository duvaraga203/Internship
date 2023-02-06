var obj = {
  name: "Vicky",
  age: 22,
  location: "cbe",
  salary: "RS.30000",
  experienceInYears: 2,
};

var data = `Name of the employee is ${obj.name}, and his salary is ${obj.salary} in this year.`;

function insertData() {
  document.getElementById("myParagraph").innerHTML = data;
}

function myfunc() {
  document.getElementById("myParagraph").style.display = "none";
}

function myfunc1() {
  let myId = document.getElementById("myParagraph");
  myId.style.display = "block";
  myId.style.fontFamily = "'Courier New', Courier, monospace";
  myId.style.fontSize = "14px";
  document.body.style.background = "none";
}

function myfunc2() {
  let myId = document.getElementById("myParagraph");
  myId.style.fontFamily = "monospace";
  myId.style.fontSize = "20px";
}

function bgBtnColor() {
  document.body.style.background = "black";
}

function hey() {
  document.querySelector('#myParagraph').style.background = 'blue';
}