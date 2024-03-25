
var count=1;

function Submit() {
  var dataEntered = retrieveData();
  var readData = readingDataFromLocalStorage(dataEntered);
  count++;
  if(dataEntered==false){
    alert("Please Fill in all required Fields")
  }
  else{
  insert(readData);
  alert("Appoitment has been sent")
  document.getElementById("form").reset();
  return count;
  }
}

function play() {
  alert(count)
}

function retrieveData() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var date = document.getElementById("date").value;
  var time = document.getElementById("time").value;
  var select = document.getElementById("select").value;

  var arr = [firstName, lastName, email, date, time, select];

  if (arr.includes("")) {
    return false;
  } else {
    return arr;
  }
}

function readingDataFromLocalStorage(dataEntered) {

  //storing data
  var first = localStorage.setItem("First Name", dataEntered[0]);
  var last = localStorage.setItem("Last Name", dataEntered[1]);
  var mail = localStorage.setItem("Email", dataEntered[2]);
  var dt = localStorage.setItem("Date", dataEntered[3]);
  var tm = localStorage.setItem("Time", dataEntered[4]);
  var slt = localStorage.setItem("Service", dataEntered[5]);
  //getting dataEntered
  var first1 = localStorage.getItem("First Name", first);
  var last1 = localStorage.getItem("Last Name", last);
  var mail1 = localStorage.getItem("Email", mail);
  var dt1 = localStorage.getItem("Date", dt);
  var tm1 = localStorage.getItem("Time", tm);
  var slt1 = localStorage.getItem("Service", slt);

  var arr = [first1, last1, mail1, dt1, tm1, slt1];
  return arr;
}

function insert(readData) {
  var row = table.insertRow();
  row.insertCell(0).innerHTML=readData[0];
  row.insertCell(1).innerHTML=readData[1];
  row.insertCell(2).innerHTML=readData[2];
  row.insertCell(3).innerHTML=readData[3];
  row.insertCell(4).innerHTML=readData[4];
  row.insertCell(5).innerHTML=readData[5];

  row.insertCell(6).innerHTML="<button onclick=cancel(this)>Cancel</button>";
}

function cancel(td) {
  var ans = confirm("Are you sure you want to delete this booking?");
  if (ans == true){
  var row = td.parentElement.parentElement;
  document.getElementById("table").deleteRow(row.rowIndex);
  }
}
