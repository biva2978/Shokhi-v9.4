function calculatePeriod() {
    var startDate = new Date(document.getElementById("start-date").value);
    var cycleLength = parseInt(document.getElementById("cycle-length").value);
  
    var endDate = new Date(startDate.getTime());
    endDate.setDate(startDate.getDate() + cycleLength);
  
    var result = "Your period will end on " + endDate.toDateString() + ".";
    document.getElementById("result").innerText = result;
  }
  