// Vanilla.JS severiz

// Yapışık Navbar 
window.onscroll = function () {
  var navbar = document.getElementById("navbar");
  if (window.pageYOffset > 0) {
    navbar.style.backgroundColor = "red";
    navbar.style.color = "white";
    navbar.style.transition = "background-color 0.5s ease, color 0.5s ease";
    navbar.classList.add("sticky");
  } else {
    navbar.style.backgroundColor = "";
    navbar.style.color = "";
    navbar.classList.remove("sticky");
  }
};

// Genel tanım zamazingoları
const tabContents = document.querySelectorAll(".tab-content .tab-pane");
const progressBar = document.querySelector(".progress-bar");
const nextButtons = document.querySelectorAll(".next");
const prevButtons = document.querySelectorAll(".prev");
const stepCounter = document.querySelector(".step-counter");
let currentTab = 0;

// Progress bar, wizard content, counter ıvır zıvır tanımları
tabContents[currentTab].style.display = "block";
stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
progressBar.style.width = (100 / tabContents.length) * (currentTab + 1) + "%";

// İleri butonu click yönetimi
for (let i = 0; i < nextButtons.length; i++) {
  nextButtons[i].addEventListener("click", function () {
    if (currentTab < tabContents.length - 1) {
      tabContents[currentTab].style.display = "none";
      currentTab++;
      tabContents[currentTab].style.display = "block";
      stepCounter.textContent = `Adım ${currentTab + 1} / ${
        tabContents.length
      }`;
      progressBar.style.width =
        (100 / tabContents.length) * (currentTab + 1) + "%";
    }
  });
}

// Geri butonu click yönetimi
for (let i = 0; i < prevButtons.length; i++) {
  prevButtons[i].addEventListener("click", function () {
    if (currentTab > 0) {
      tabContents[currentTab].style.display = "none";
      currentTab--;
      tabContents[currentTab].style.display = "block";
      stepCounter.textContent = `Adım ${currentTab + 1} / ${
        tabContents.length
      }`;
      progressBar.style.width =
        (100 / tabContents.length) * (currentTab + 1) + "%";
    }
  });
}

// Araç Değer Kaybı Tazminat Hesaplama:

// Aşama 1
function saveStep1() {
  let firstStepInput = document.getElementById("firstStepInput").value;
  let firstVariable = parseFloat(firstStepInput * 0.19);
  localStorage.setItem("firstVariable", firstVariable);
}

// Aşama 2
function saveStep2() {
  let secondStepInput = document.getElementById("secondStepInput").value;
  let secondVariable;
  if (secondStepInput >= 0 && secondStepInput <= 15000) {
    secondVariable = secondStepInput * 0.9;
  } else if (secondStepInput >= 15000 && secondStepInput <= 29999) {
    secondVariable = secondStepInput * 0.8;
  } else if (secondStepInput >= 30000 && secondStepInput <= 44999) {
    secondVariable = secondStepInput * 0.6;
  } else if (secondStepInput >= 45000 && secondStepInput <= 59999) {
    secondVariable = secondStepInput * 0.4;
  } else if (secondStepInput >= 60000 && secondStepInput <= 74999) {
    secondVariable = secondStepInput * 0.3;
  } else if (secondStepInput >= 75000 && secondStepInput <= 149999) {
    secondVariable = secondStepInput * 0.2;
  } else if (secondStepInput >= 150000) {
    secondVariable = secondStepInput * 0.1;
  }
  localStorage.setItem("secondVariable", secondVariable);
}

// Deneme: Local Storage ile çağırıp işleme sokma ve Test kodları:
// let firstVariable = localStorage.getItem("firstVariable");
// let secondVariable = localStorage.getItem("secondVariable");
// console.log(firstVariable * secondVariable);

// Aşama 3
function saveStep3() {
  const A1 = 0.9;
  const A2 = 0.75;
  const A3 = 0.5;
  const A4 = 0.25;

  let firstVariable = localStorage.getItem("firstVariable");
  let thirdStepInput = document.getElementById("thirdStepInput").value;

  let percentage = (thirdStepInput / firstVariable) * 100;
  if (firstVariable >= 0 && firstVariable <= 95000) {
    if (percentage >= 25.01) return A1;
    if (percentage >= 15.01 && percentage <= 25) return A2;
    if (percentage >= 5.01 && percentage <= 15) return A3;
    if (percentage >= 0.1 && percentage <= 5) return A4;
  }
  if (firstVariable >= 95001 && firstVariable <= 150000) {
    if (percentage >= 20.01) return A1;
    if (percentage >= 12.01 && percentage <= 20) return A2;
    if (percentage >= 4.01 && percentage <= 12) return A3;
    if (percentage >= 0.1 && percentage <= 4) return A4;
  }
  if (firstVariable >= 150001 && firstVariable <= 300000) {
    if (percentage >= 20.01) return A1;
    if (percentage >= 10.01 && percentage <= 20) return A2;
    if (percentage >= 3.01 && percentage <= 10) return A3;
    if (percentage >= 0.1 && percentage <= 3) return A4;
  }
  if (firstVariable >= 300001) {
    if (percentage >= 20.01) return A1;
    if (percentage >= 8.01 && percentage <= 20) return A2;
    if (percentage >= 2.01 && percentage <= 8) return A3;
    if (percentage >= 0.1 && percentage <= 2) return A4;
  }
}
let thirdVariable = saveStep3();
localStorage.setItem("thirdVariable", thirdVariable);


// Aşama 5
function saveStep5() {
  const value1 = 1;
  const value2 = 0.75;
  const value3 = 0.5;
  const value4 = 0.25;
  const value5 =
    "Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.";

  let checkedValue;
  let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  if (checkboxes.length > 1) {
    alert("Lütfen bir adet seçenek seçin.");
    return;
  } else if (checkboxes.length == 1) {
    checkedValue = checkboxes[0].value;
  }

  if (checkedValue === "0%") {
    localStorage.setItem("fourthVariable", value1);
  } else if (checkedValue === "25%") {
    localStorage.setItem("fourthVariable", value2);
  } else if (checkedValue === "50%") {
    localStorage.setItem("fourthVariable", value3);
  } else if (checkedValue === "75%") {
    localStorage.setItem("fourthVariable", value4);
  } else if (checkedValue === "100%") {
    alert(value5);
    return;
  } else {
    localStorage.setItem("fourthVariable", value1);
  }
}

// Adım 5 YEDEK
// NOT: CSS/Bootstrap tarafında yalnızca bir buton seçmeye izin verdiğimizde bu fonksiyonda kullanılabilir olacaktır:

// function saveStep5() {
//     let zeroBtn = document.getElementById("zeroBtn");
//     let twentyFiveBtn = document.getElementById("twentyFiveBtn");
//     let fiftyBtn = document.getElementById("fiftyBtn");
//     let seventyFiveBtn = document.getElementById("seventyFiveBtn");
//     let hundredBtn = document.getElementById("hundredBtn");
//     let unknownBtn = document.getElementById("unknownBtn");

//     let fourthVariable = 1;

//     zeroBtn.addEventListener("click", function() {
//       fourthVariable = 1;
//       localStorage.setItem("fourthVariable", fourthVariable);
//     });

//     twentyFiveBtn.addEventListener("click", function() {
//       fourthVariable = 0.75;
//       localStorage.setItem("fourthVariable", fourthVariable);
//     });

//     fiftyBtn.addEventListener("click", function() {
//       fourthVariable = 0.5;
//       localStorage.setItem("fourthVariable", fourthVariable);
//     });

//     seventyFiveBtn.addEventListener("click", function() {
//       fourthVariable = 0.25;
//       localStorage.setItem("fourthVariable", fourthVariable);
//     });

//     hundredBtn.addEventListener("click", function() {
//       alert("Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.");
//       // wizard adım 1'e dönecektir
//     });

//     unknownBtn.addEventListener("click", function() {
//       fourthVariable = 1;
//       localStorage.setItem("fourthVariable", fourthVariable);
//     });
//   }


// Adım 6
function saveStep6() {
  const varBtn = document.querySelector("input[value='var']");
  const yokBtn = document.querySelector("input[value='yok']");

  varBtn.addEventListener("click", function () {
    if (varBtn.checked) {
      alert(
        "Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz."
      );
      localStorage.clear();
      window.location.reload();
    }
  });

  yokBtn.addEventListener("click", function () {
    let firstVariable = parseFloat(localStorage.getItem("firstVariable"));
    let secondVariable = parseFloat(localStorage.getItem("secondVariable"));
    let thirdVariable = parseFloat(localStorage.getItem("thirdVariable"));
    let sonuc = 1;
    sonuc = sonuc * firstVariable * secondVariable * thirdVariable;
    alert("Sonuç: " + sonuc);
  });
}
