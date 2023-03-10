// Vanilla.JS severiz

// Yapışık Navbar
window.onscroll = function () {
  var navbar = document.getElementById("navbar");
  var navLinks = document.querySelectorAll(".collapse ul li a");
  var logo = document.querySelector(".navbar-brand img");
  if (window.pageYOffset > 0) {
    navbar.style.backgroundColor = "white";
    navbar.style.transition = "background-color 0.5s ease, color 0.5s ease";
    navbar.classList.add("sticky");
    logo.src = "assets/img/PNG.png";
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].style.color = "black";
    }
  } else {
    navbar.style.removeProperty("background-color");
    navbar.style.removeProperty("color");
    navbar.classList.remove("sticky");
    logo.src = "assets/img/PNG.png";
    for (var i = 0; i < navLinks.length; i++) {
      // navLinks[i].style.transition = "color 0.5s ease";
      navLinks[i].style.removeProperty("color");
    }
  }
};

// Genel tanım zamazingoları
const tabContents = document.querySelectorAll(".tab-content .tab-pane");
const progressBar = document.querySelector(".progress-bar");
const nextButtons = document.querySelectorAll(".next");
const prevButtons = document.querySelectorAll(".prev");
//const stepCounter = document.querySelector(".step-counter");
let currentTab = 0;

// Progress bar, wizard content, counter ıvır zıvır tanımları
tabContents[currentTab].style.display = "block";
// stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
progressBar.style.width = (100 / tabContents.length) * (currentTab + 1) + "%";

// İleri butonu click yönetimi
for (let i = 0; i < nextButtons.length; i++) {
  nextButtons[i].addEventListener("click", function () {
    if (currentTab < tabContents.length - 1) {
      tabContents[currentTab].style.display = "none";
      currentTab++;
      tabContents[currentTab].style.display = "block";
      //stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
      progressBar.style.width =
        (100 / tabContents.length) * (currentTab + 1) + "%";
    }
    validateEntry();
  });
}

// Geri butonu click yönetimi
for (let i = 0; i < prevButtons.length; i++) {
  prevButtons[i].addEventListener("click", function () {
    if (currentTab > 0) {
      tabContents[currentTab].style.display = "none";
      currentTab--;
      tabContents[currentTab].style.display = "block";
      // stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
      progressBar.style.width =
        (100 / tabContents.length) * (currentTab + 1) + "%";
    }
    validateEntry();
  });
}

// Wizard boş değer form validasyonu

const isEmpty = (str) => !str.trim().length;
validateEntry();

function validateEntry() {
  let inputs = tabContents[currentTab].querySelectorAll(
    ".form-control, input[type='radio']"
  );

  // Başla, ancak ilerle butonu devre dışı.
  for (let i = 0; i < nextButtons.length; i++) {
    let button = nextButtons[i];
    button.setAttribute("disabled", true);
  }

  setButtonPermissions(inputs);

  inputs.forEach((input) => {
    input.addEventListener("input", () => setButtonPermissions(inputs));

    input.addEventListener("blur", () => setButtonPermissions(inputs));
  });
}

function setButtonPermissions(inputs) {
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].tagName === "INPUT" && inputs[i].type === "radio") {
      let radioGroup = inputs[i].name;
      let radioButtons = tabContents[currentTab].querySelectorAll(
        `input[name='${radioGroup}']`
      );
      let isRadioButtonChecked = false;
      radioButtons.forEach((radioButton) => {
        if (radioButton.checked) {
          isRadioButtonChecked = true;
        }
      });
      if (!isRadioButtonChecked) {
        for (let i = 0; i < nextButtons.length; i++) {
          let button = nextButtons[i];
          button.setAttribute("disabled", true);
        }
        return;
      }
    } else if (isEmpty(inputs[i].value)) {
      for (let i = 0; i < nextButtons.length; i++) {
        let button = nextButtons[i];
        button.setAttribute("disabled", true);
      }
      return;
    }
  }
  for (let i = 0; i < nextButtons.length; i++) {
    let button = nextButtons[i];
    button.removeAttribute("disabled");
  }
}

// Input Sayı Formatı ve Basamaklama:
var inputBasamak = document.querySelector(".form-control");
var inputsAll = document.querySelectorAll(".form-control");

for (var i = 0; i < inputsAll.length; i++) 
{
  var currentValue;


    inputsAll[i].addEventListener("input", function (event) {
      if (event.target.type !== "date") {
      var inputBasamak = event.target;
      var cursorPosition = getCaretPosition(inputBasamak);
      var valueBefore = inputBasamak.value;
      var lengthBefore = inputBasamak.value.length;
      var specialCharsBefore = getSpecialCharsOnSides(inputBasamak.value);
      var number = removeThousandSeparators(inputBasamak.value);
  
      if (inputBasamak.value == "") {
        return;
      }
  
      // Invalid karakter kontrolü
      if (isNaN(number)) {
        inputBasamak.value = "";
        return;
      }
  
      inputBasamak.value = formatNumber(number.replace(getCommaSeparator(), "."));
  
      // Virgül siliniyorsa, doğru şekilde sil.
      if (
        currentValue == inputBasamak.value &&
        currentValue ==
          valueBefore.substr(0, cursorPosition) +
            getThousandSeparator() +
            valueBefore.substr(cursorPosition)
      ) {
        inputBasamak.value = formatNumber(
          removeThousandSeparators(
            valueBefore.substr(0, cursorPosition - 1) +
              valueBefore.substr(cursorPosition)
          )
        );
        cursorPosition--;
      }
  
      // Binlik ayırıcı eklendiyse veya kaldırıldıysa imleci doğru şekilde hareket ettir.
      var specialCharsAfter = getSpecialCharsOnSides(inputBasamak.value);
      if (specialCharsBefore[0] < specialCharsAfter[0]) {
        cursorPosition += specialCharsAfter[0] - specialCharsBefore[0];
      } else if (specialCharsBefore[0] > specialCharsAfter[0]) {
        cursorPosition -= specialCharsBefore[0] - specialCharsAfter[0];
      }
      setCaretPosition(inputBasamak, cursorPosition);
  
      currentValue = inputBasamak.value;
    };
  })

}
// Yıl inputunu hariç tutma ve 4 hane sanırı
var yearInput = document.getElementById("year-input");
yearInput.addEventListener("input", function (event) {
  var number = removeThousandSeparators(event.target.value);
  if (isNaN(number) || number.length > 4) {
    event.target.value = "";
    return;
  }
  event.target.value = number;
});

// Hane sınırı validasyonu 
//  var number = removeThousandSeparators(event.target.value);
// if (isNaN(number) || number.length > 4) {
//   inputBasamak.value = "";
//   return;
// }


function getSpecialCharsOnSides(x, cursorPosition) {
  var specialCharsLeft = x
    .substring(0, cursorPosition)
    .replace(/[0-9]/g, "").length;
  var specialCharsRight = x
    .substring(cursorPosition)
    .replace(/[0-9]/g, "").length;
  return [specialCharsLeft, specialCharsRight];
}

function formatNumber(x) {
  return getNumberFormat().format(x);
}

function removeThousandSeparators(x) {
  return x
    .toString()
    .replace(new RegExp(escapeRegExp(getThousandSeparator()), "g"), "");
}

function getThousandSeparator() {
  return getNumberFormat().format("1000").replace(/[0-9]/g, "")[0];
}

function getCommaSeparator() {
  return getNumberFormat().format("0.01").replace(/[0-9]/g, "")[0];
}

function getNumberFormat() {
  return new Intl.NumberFormat();
}

function escapeRegExp(str) {
  return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
}

/*
 ** Belirtilen metin alanının caret (imleç) konumunu döndürür.
 ** Dönüş değeri aralığı 0-oField.value.length'dir.
 */
function getCaretPosition(oField) {
  // Initialize
  var iCaretPos = 0;

  // IE Support
  if (document.selection) {
    // Odağı öğeye ayarla.
    oField.focus();

    // İmleç konumunu almak için boş seçim aralığını al.
    var oSel = document.selection.createRange();

    // Seçim başlangıcını 0 konumuna taşı
    oSel.moveStart("character", -oField.value.length);

    // Caret konumu seçim uzunluğudur
    iCaretPos = oSel.text.length;
  }

  // Firefox support
  else if (oField.selectionStart || oField.selectionStart == "0")
    iCaretPos = oField.selectionStart;

  // Return results
  return iCaretPos;
}

function setCaretPosition(elem, caretPos) {
  if (elem != null) {
    if (elem.createTextRange) {
      var range = elem.createTextRange();
      range.move("character", caretPos);
      range.select();
    } else {
      if (elem.selectionStart) {
        elem.focus();
        elem.setSelectionRange(caretPos, caretPos);
      } else elem.focus();
    }
  }
}

// Araç Değer Kaybı Tazminat Hesaplama:

// Veri/Değer Girişi Değişim Kontrol Tanımları
let inputChanged = false;
let radioChanged = false;

// Aşama 1

function saveStep1() {
  let firstStepInput;
  let firstVariable;
  firstStepInput = parseInt(document.getElementById("firstStepInput").value.replace(/[^\d]/g, ""));
  localStorage.setItem("firstStepInput", firstStepInput);
  firstVariable = parseFloat(firstStepInput * 0.19);
  localStorage.setItem("firstVariable", firstVariable);
}

// Aşama 2

function saveStep2() {
  let secondStepInput;
  let secondVariable;
  secondStepInput = parseInt(document.getElementById("secondStepInput").value.replace(/[^\d]/g, ""));
  if (secondStepInput >= 0 && secondStepInput <= 15000) {
    secondVariable = 0.9;
  } else if (secondStepInput >= 15000 && secondStepInput <= 29999) {
    secondVariable = 0.8;
  } else if (secondStepInput >= 30000 && secondStepInput <= 44999) {
    secondVariable = 0.6;
  } else if (secondStepInput >= 45000 && secondStepInput <= 59999) {
    secondVariable = 0.4;
  } else if (secondStepInput >= 60000 && secondStepInput <= 74999) {
    secondVariable = 0.3;
  } else if (secondStepInput >= 75000 && secondStepInput <= 149999) {
    secondVariable = 0.2;
  } else if (secondStepInput >= 150000) {
    secondVariable = 0.1;
  }
  localStorage.setItem("secondVariable", secondVariable);
}

// Aşama 3
function saveStep3() {
  const A1 = 0.9;
  const A2 = 0.75;
  const A3 = 0.5;
  const A4 = 0.25;
  const firstStepInput = localStorage.getItem("firstStepInput");
  const thirdStepInput = parseInt(
    document.getElementById("thirdStepInput").value.replace(/[^\d]/g, "")
  );
  const percentage = (thirdStepInput / firstStepInput) * 100;
  let thirdVariable = null;

  if (firstStepInput >= 0 && firstStepInput <= 95000) {
    if (percentage >= 25.01) thirdVariable = A1;
    if (percentage >= 15.01 && percentage <= 25) thirdVariable = A2;
    if (percentage >= 5.01 && percentage <= 15) thirdVariable = A3;
    if (percentage >= 0.1 && percentage <= 5) thirdVariable = A4;
  }

  if (firstStepInput >= 95001 && firstStepInput <= 150000) {
    if (percentage >= 20.01) thirdVariable = A1;
    if (percentage >= 12.01 && percentage <= 20) thirdVariable = A2;
    if (percentage >= 4.01 && percentage <= 12) thirdVariable = A3;
    if (percentage >= 0.1 && percentage <= 4) thirdVariable = A4;
  }

  if (firstStepInput >= 150001 && firstStepInput <= 300000) {
    if (percentage >= 20.01) thirdVariable = A1;
    if (percentage >= 10.01 && percentage <= 20) thirdVariable = A2;
    if (percentage >= 3.01 && percentage <= 10) thirdVariable = A3;
    if (percentage >= 0.1 && percentage <= 3) thirdVariable = A4;
  }

  if (firstStepInput >= 300001) {
    if (percentage >= 20.01) thirdVariable = A1;
    if (percentage >= 8.01 && percentage <= 20) thirdVariable = A2;
    if (percentage >= 2.01 && percentage <= 8) thirdVariable = A3;
    if (percentage >= 0.1 && percentage <= 2) thirdVariable = A4;
  }

  localStorage.setItem("thirdVariable", thirdVariable);
}





// AŞAMA 5:
function saveStep5() {
  const value1 = 1;
  const value2 = 0.75;
  const value3 = 0.5;
  const value4 = 0.25;
  const value5 =
    "Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.";

  let checkedValue = document.querySelector(".btn-check:checked").value;

  if (checkedValue === "%0") {
    localStorage.setItem("fourthVariable", value1);
  } else if (checkedValue === "%25") {
    localStorage.setItem("fourthVariable", value2);
  } else if (checkedValue === "%50") {
    localStorage.setItem("fourthVariable", value3);
  } else if (checkedValue === "%75") {
    localStorage.setItem("fourthVariable", value4);
  } else if (checkedValue === "%100") {
    alert(value5);
    localStorage.clear();
    window.location.reload();
    return;
  } else {
    localStorage.setItem("fourthVariable", value1);
  }
}

// Adım 6
function saveStep6() {
  const varBtn = document.querySelector("input[value='Var']");
  const yokBtn = document.querySelector("input[value='Yok']");
  let firstVariable = localStorage.getItem("firstVariable");
  let secondVariable = localStorage.getItem("secondVariable");
  let thirdVariable = localStorage.getItem("thirdVariable");
  console.log(thirdVariable);
  let sonuc = 1;

  if (varBtn.checked) {
    alert("Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.");
    localStorage.clear();
    window.location.reload();
  } else if (yokBtn.checked) {
    sonuc = sonuc * firstVariable * secondVariable * thirdVariable;
    document.getElementById("sonuc").innerHTML = sonuc;
  }
}

// Wizard'ta geriye dönüldüğünde veri değişimi olup olmadığı hakkında tüm fonksiyonları dinamik olarak kontrol et, güncelle, çağır ve hesaplamaları yenile:
document.getElementById("backButton").onclick = function () {
  let inputChangedStep = [];
  for (let i = 1; i <= 5; i++) {
    const inputData = document.getElementById(`${stepName(i)}Input`);
    const radioButtons = document.querySelectorAll(
      `input[type="radio"][name="step${i}Radio"]`
    );
    inputChangedStep[i] = false;
    inputData.addEventListener("change", function () {
      inputChangedStep[i] = true;
    });
    radioButtons.forEach(function (radioButton) {
      radioButton.addEventListener("change", function () {
        inputChangedStep[i] = true;
      });
    });
  }

  for (let i = 1; i <= 5; i++) {
    if (inputChangedStep[i]) {
      window["saveStep" + i]();
      inputChangedStep[i] = false;
    } else {
      window["resetStep" + i]();
    }
  }

  // Radyo button'ların seçili değerlerini depolamak için genel bir nesne
  var radioButtonValues = {};

  document
    .querySelectorAll("input[type='radio']")
    .forEach(function (radioButton) {
      radioButton.addEventListener("change", function () {
        radioButtonValues[radioButton.name] = radioButton.value;
      });
    });

  // Geri button tıklama
  backButton.addEventListener("click", function () {
    // Kayıtlı değerleri kullanarak radyo button'ların seçilen değerlerini ayarlama
    document
      .querySelectorAll("input[type='radio']")
      .forEach(function (radioButton) {
        if (radioButtonValues[radioButton.name] === radioButton.value) {
          radioButton.checked = true;
        }
      });
  });
};

function stepName(step) {
  switch (step) {
    case 1:
      return "first";
    case 2:
      return "second";
    case 3:
      return "third";
    default:
      return "";
  }
}


// Fazla Çalışma Tazminatı Hesaplama

function mesaiStep1() {
  // Önce startDate ve endDate değerlerini alınır ve bunları JavaScript Date nesnelerine dönüştürülür.
  const date1 = new Date(document.getElementById('startDate').value);
  const date2 = new Date(document.getElementById('endDate').value);
  console.log(date1)
  console.log(date2)
  // Net sonuç için bu iki tarih arasındaki fark milisaniye cinsinden hesaplanır ve bu değeri ay cinsine dönüştürür.
  const diffTime1 = Math.abs(date2 - date1);
  const diffMonths = diffTime1 / (1000 * 60 * 60 * 24 * 30.44);
  const diffMonthsRounded = Math.round((diffMonths + Number.EPSILON) * 10) / 10; // Virgülden sonraki 1 basamağı almak için yuvarlama işlemi yapılıyor
  console.log(diffMonthsRounded)
  localStorage.setItem('step1', diffMonthsRounded);
}

function mesaiStep2() {
  const inputNumber = document.getElementById("inputNumber").value.replace(/[^\d]/g, "");

  const dividedNumber = inputNumber / 225;
  const multipliedNumber = dividedNumber * 1.5;
  console.log(multipliedNumber)
  localStorage.setItem("multipliedNumber", multipliedNumber);
}

function mesaiStep3() {
  const inputNumber = document.getElementById("inputNumberSecond").value.replace(/[^\d]/g, "");
  console.log(inputNumber)
  if (inputNumber < 45) {
    alert("Üzgünüz, fazla çalışma tazminatı hesaplama konusunda size yardımcı olamıyoruz.");
    localStorage.clear();
    window.location.reload();
    return;

  }

  const subtractedNumber = (inputNumber - 45);
  const totalMonths = parseInt(localStorage.getItem("step1"));
  const multipliedNumber = parseFloat(localStorage.getItem("multipliedNumber"));
  const finalResult = (subtractedNumber * multipliedNumber) / 7;
  console.log(finalResult)
  localStorage.setItem("finalResult", finalResult);
  document.getElementById("sonuc").innerHTML = finalResult;
}

// Kıdem Tazminatı Hesaplamaları 

function kıdemStep1() {
  const startDate = new Date(document.getElementById('start-date').value);
  const endDate = new Date(document.getElementById('end-date').value);
  const diffTime2 = Math.abs(endDate - startDate);
  const diffDays = Math.ceil(diffTime2 / (1000 * 60 * 60 * 24));
  console.log(diffDays)
  localStorage.setItem('storedNumber', diffDays);
}

function kıdemStep2() {
  const secondNumber = document.getElementById('input-number').value.replace(/[^\d]/g, "");
  console.log(secondNumber)
  localStorage.setItem('kıdemSecond', secondNumber);
}

function kıdemStep3() {
  const secondNumber = localStorage.getItem('kıdemSecond') || 0;
  const dateResult = localStorage.getItem('storedNumber');
  const thirdNumber = document.getElementById('input-number-2').value.replace(/[^\d]/g, "");
  const thirdNumberVal = thirdNumber ? Number(thirdNumber) : 0;
  const result = ((parseInt(secondNumber) + parseInt(thirdNumberVal)) / 30) * parseInt(dateResult);
  document.getElementById("sonuc").innerHTML = result;
}


// Trafik Kazası Hesaplamaları

// Adım1
function handleStatusButton() {
  let kazaStatusRadio = document.querySelector(".status:checked").value;
  localStorage.setItem('kazaStatusRadio', kazaStatusRadio);
  console.log(kazaStatusRadio)
}

// Adım2 
function handleRoleButton() {
  let roleRadio = document.querySelector(".role:checked").value;
  localStorage.setItem('roleRadio', roleRadio);

  const dateSelected = document.getElementById('accident-date');
  const dateRange = (localStorage.getItem('kazaStatusRadio') === 'Ölümlü') ? 15 : 7;
  const currentDate = new Date().getFullYear();
  for (let i = currentDate - dateRange; i <= currentDate; i++) {
    const option = document.createElement('option');
    option.value = i;
    option.textContent = i;
    dateSelected.appendChild(option);
  }
  console.log(roleRadio);
}

// Adım3
function handleAccidentDateSelect() {
  const dateSelected = document.getElementById('accident-date');
  localStorage.setItem('accidentDateSelect', dateSelected.value);
  console.log(dateSelected.value);
}


// Adım4
function handleKusurOraniRadioButtons() {
  const radioButtons = document.querySelector('.kusurOrani:checked').value;
  localStorage.setItem('radioButtons', radioButtons);
  console.log(radioButtons)

}

// Adım5
function handlePriceStep() {
  const kusurOrani = localStorage.getItem("radioButtons");
  const maasInput = document.getElementById("maasInput"); // Input elementine erişim
  const maasMiktari = maasInput.value.replace(/[^\d]/g, ""); // Kullanıcının girdiği maaş miktarını alma
  localStorage.setItem('maasMiktari', maasMiktari);
  console.log(maasMiktari)
  const result = ((maasMiktari * kusurOrani) / 100);
  const z = (maasMiktari - result) / 30;
  localStorage.setItem('z', z);
  console.log(z)
}

// Adım6
function handleGenderButton() {
  const genderButtons = document.querySelector('.gender').value;
  localStorage.setItem('genderButtons', genderButtons);
  console.log(genderButtons)
}

//Adım7 
function handleFinalStep() {
  const bornYear = document.getElementById("year-input").value.replace(/[^\d]/g, "");
  console.log(bornYear)
  console.log(bornYear * 2)
  let kazaTarihi = localStorage.getItem('accidentDateSelect');
  let z = localStorage.getItem('z');
  let genderInfo = localStorage.getItem('genderButtons');
  if (localStorage.getItem("kazaStatusRadio") === "Ölümlü") {
    let olumYasi = (kazaTarihi - bornYear);
    const retirementAge = (genderInfo === "Erkek") ? 60 : 58;
    const x = (retirementAge - olumYasi) * 365.25;
    const mainResult = z * x;
    document.getElementById("sonuc").innerHTML = mainResult;

  } else {
    const nowDate = new Date().getFullYear();
    let yas = (nowDate - bornYear);
    const retirementAge = (genderInfo === "Erkek") ? 60 : 58;
    const x2 = (retirementAge - yas) * 365.25;
    const mainResult = z * x2;
    document.getElementById("sonuc").innerHTML = mainResult;
  }

}


// Miras Hesaplamaları 

// Adım1 
function mirasStep1() {
  let mirasStepOneRadio = document.querySelector(".mirasStepOne:checked").value;
  localStorage.setItem('mirasStepOneRadio', mirasStepOneRadio);
  console.log("Birinci input veri:" + mirasStepOneRadio);

  if (mirasStepOneRadio === 'Var') {
    currentTab = tabContents.length - 1;
    tabContents.forEach((content, index) => {
      if (index !== currentTab) {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
    //stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
    progressBar.style.width = "100%";
  }

}

// Adım2 
function mirasStep2() {
  let mirasStepSecondRadio = document.querySelector(".mirasStepTwo:checked").value;
  console.log("İkinci input veri:" + mirasStepSecondRadio);
  localStorage.setItem('mirasStepSecondRadio', mirasStepSecondRadio);
  let mirasStepSecondValue = 0; // varsayılan değer
  if (mirasStepSecondRadio === 'Evet') {
    mirasStepSecondValue = 25;
    localStorage.setItem('mirasStepSecondValue', mirasStepSecondValue);

  }

  console.log("İkinci değişkene ilk değer ataması2:" + mirasStepSecondValue);
  mirasStep3();
}
// Adım 3
function mirasStep3() {
  const varButton = document.getElementById("success-5-outlined");
  const yokButton = document.getElementById("success-6-outlined");
  let flag = false; // flag değişkeni oluşturuldu
  varButton.addEventListener("click", () => {
    const thirdStep = "Var"; // Var butonunun değeri
    localStorage.setItem("mirasStepThirdRadio", thirdStep);
    console.log("3. adım radio button veri:" + thirdStep);
    if (!flag) { // flag değişkeni kontrol edildi
      flag = true;
      varButton.style.display = "none";
      yokButton.style.display = "none";
      const input = document.createElement("input");
      input.classList.add("input1", "form-control", "input-lg", "wizard-input");
      input.type = "number";
      input.placeholder = "Sayı giriniz";
      const stepContainer = document.querySelector(".stepContainer");
      stepContainer.appendChild(input);
      input.addEventListener("change", () => {
        const input1Value = input.value;
        localStorage.setItem("input1Value", input1Value);
        console.log("3. adım input veri (var seçilmişse):" + input1Value);
      });
    }
  });

  yokButton.addEventListener("click", () => {
    const thirdStep = "Yok";
    localStorage.setItem("mirasStepThirdRadio", thirdStep);
    console.log("3. adım radio button veri:" + thirdStep);

    const input = document.querySelector(".input1");
    if (input) {
      input.parentNode.removeChild(input);
      flag = false;
    }

    let mirasStepSecondValue = localStorage.getItem('mirasStepSecondValue');
    console.log("eski mirasStepSecondValue değeri:" + mirasStepSecondValue)
    const mirasStepSecondRadio = localStorage.getItem('mirasStepSecondRadio');
    console.log("mirasStepSecondRadio değeri:" + mirasStepSecondRadio);
    if (mirasStepSecondRadio === 'Evet') {
      mirasStepSecondValue = 50;
      console.log("mirasStepSecondValueNew değeri güncellendi:" + mirasStepSecondValue);
      localStorage.setItem('mirasStepSecondValue', mirasStepSecondValue);
    } else if (mirasStepSecondRadio === 'Hayır') {
      mirasStepSecondValue = null; // mirasStepSecondRadio 'Hayır' ise değeri null yap
    }
    console.log("mirasStepSecondRadio değeri:" + mirasStepSecondRadio);
    console.log("mirasStepSecondValueNew değeri:" + mirasStepSecondValue);
  });

}



// Adım 4
function mirasStep4() {
  let mirasStepFourthRadio = document.querySelector(".mirasStepFourth:checked").value;
  localStorage.setItem('mirasStepFourthRadio', mirasStepFourthRadio);
  console.log("Dördüncü input veri:" + mirasStepFourthRadio);

}

// Adım 5
function mirasStep5() {
  let mirasStepFifthRadio = document.querySelector(".mirasStepFifth:checked").value;
  localStorage.setItem('mirasStepFifthRadio', mirasStepFifthRadio);
  console.log("Beşinci input veri:" + mirasStepFifthRadio);

  mirasStep6();

}

// Adım 6
// function mirasStep6() {
//   const varButtonSixth = document.getElementById("success-11-outlined");
//   const yokButtonSixth = document.getElementById("success-12-outlined");
//   let flag = false; // flag değişkeni oluşturuldu

//   varButtonSixth.addEventListener("click", () => {
//     let sixthStep = localStorage.setItem("mirasStepSixthRadio", "Var");
//     console.log("6. adım radio button veri:" + sixthStep);
//     if (!flag) { // flag değişkeni kontrol edildi
//       flag = true;
//       varButtonSixth.style.display = "none";
//       yokButtonSixth.style.display = "none";
//       const input2 = document.createElement("input");
//       input2.classList.add("input2", "form-control", "input-lg");
//       input2.type = "number";
//       input2.placeholder = "Sayı giriniz";
//       const stepContainer2 = document.querySelector(".stepContainer2");
//       stepContainer2.appendChild(input2);
//       input2.addEventListener("change", () => {
//         const input2Value = input2.value;
//         localStorage.setItem("input2Value", input2Value);
//         console.log("6. adım input veri (var seçilmişse):" + input2Value)
//       });
//     }
//   });

//   yokButtonSixth.addEventListener("click", () => {
//     let sixthStep = localStorage.setItem("mirasStepSixthRadio", "Yok");
//     console.log("6. adım radio button veri:" + sixthStep);
//     const input2 = document.querySelector(".input2");
//     if (input2) {
//       input2.parentNode.removeChild(input2); // input kaldırıldı
//       flag = false; // flag değişkeni sıfırlandı
//     }
//   });
// }
function mirasStep6() {
  const varButtonSixth = document.getElementById("success-11-outlined");
  const yokButtonSixth = document.getElementById("success-12-outlined");
  let flag = false; // flag değişkeni oluşturuldu

  varButtonSixth.addEventListener("click", () => {
    const sixthStep = "Var"; // Var butonunun değeri
    localStorage.setItem("mirasStepSixthRadio", sixthStep);
    console.log("6. adım radio button veri:" + sixthStep);
    if (!flag) { // flag değişkeni kontrol edildi
      flag = true;
      varButtonSixth.style.display = "none";
      yokButtonSixth.style.display = "none";
      const input2 = document.createElement("input");
      input2.classList.add("input2", "form-control", "input-lg", "wizard-input");
      input2.type = "number";
      input2.placeholder = "Sayı giriniz";
      const stepContainer2 = document.querySelector(".stepContainer2");
      stepContainer2.appendChild(input2);
      input2.addEventListener("change", () => {
        const input2Value = input2.value;
        localStorage.setItem("input2Value", input2Value);
        console.log("6. adım input veri (var seçilmişse):" + input2Value)
      });
    }
  });

  yokButtonSixth.addEventListener("click", () => {
    const sixthStep = "Yok"; // Yok butonunun değeri
    localStorage.setItem("mirasStepSixthRadio", sixthStep);
    console.log("6. adım radio button veri:" + sixthStep);
    const input2 = document.querySelector(".input2");
    if (input2) {
      input2.parentNode.removeChild(input2); // input kaldırıldı
      flag = false; // flag değişkeni sıfırlandı
    }
  });
}




// Adım 7
function mirasStep7() {
  let mirasStepSeventhRadio = document.querySelector(".mirasStepSeventh:checked").value;
  localStorage.setItem('mirasStepSeventhRadio', mirasStepSeventhRadio);
  console.log("Yedinci input veri:" + mirasStepSeventhRadio)
}

// Adım 8 
function mirasStep8() {
  let mirasStepEighthRadio = document.querySelector(".mirasStepEighth:checked").value;
  localStorage.setItem('mirasStepEighthRadio', mirasStepEighthRadio);
  console.log("Sekizinci input veri:" + mirasStepEighthRadio);
  mirasStep9();
}

// Adım 9 
function mirasStep9() {
  // let mirasStepNinthRadio = document.querySelector(".mirasStepNinth:checked").value;
  const varButtonNinth = document.getElementById("success-17-outlined");
  const yokButtonNinth = document.getElementById("success-18-outlined");
  // if (mirasStepNinthRadio === "Yok") {
  //   alert("Üzgünüz, fazla çalışma tazminatı hesaplama konusunda size yardımcı olamıyoruz.");
  //   localStorage.clear();
  //   window.location.reload();
  //   return;
  // }
  // if (mirasStepNinthRadio === 'Yok') {
  //   alert("Üzgünüz, miras paylaşımı hesaplamasında size yardımcı olamıyoruz.");
  // }
  let flag = false; // flag değişkeni oluşturuldu

  varButtonNinth.addEventListener("click", () => {
    const nineStep = "Evet"; // Var butonunun değeri
    localStorage.setItem("mirasStepNinthRadio", nineStep);
    if (!flag) { // flag değişkeni kontrol edildi
      flag = true;
      varButtonNinth.style.display = "none";
      yokButtonNinth.style.display = "none";
      const input3 = document.createElement("input");
      input3.classList.add("input3", "form-control", "input-lg", "wizard-input");
      input3.type = "number";
      input3.placeholder = "Sayı giriniz";
      const stepContainer3 = document.querySelector(".stepContainer3");
      stepContainer3.appendChild(input3);
      input3.addEventListener("change", () => {
        const input3Value = input3.value;
        localStorage.setItem("input3Value", input3Value);
        console.log("9. adım input veri (var seçilmişse):" + input3Value)
      });
    }
  });

  yokButtonNinth.addEventListener("click", () => {
    const ninthStep = "Hayır"; // Yok butonunun değeri
    localStorage.setItem("mirasStepSixthRadio", ninthStep);
    const input3 = document.querySelector(".input3");
    if (input3) {
      input3.parentNode.removeChild(input3); // input kaldırıldı
      flag = false; // flag değişkeni sıfırlandı
    }
    alert("Üzgünüz, miras paylaşımı hesaplamasında size yardımcı olamıyoruz.");
    localStorage.clear();
    window.location.reload();
  });
  var firstStep = localStorage.getItem('mirasStepOneRadio');
  var secondStep = localStorage.getItem('mirasStepSecondRadio');
  var secondStepValue = localStorage.getItem('mirasStepSecondValue');
  var thirthStep = localStorage.getItem('mirasStepThirdRadio');
  var thirthStepValue = localStorage.getItem("input1Value");
  var fourthStep = localStorage.getItem('mirasStepFourthRadio');
  var fifthStep = localStorage.getItem('mirasStepFifthRadio');
  var sixthStepValue = localStorage.getItem('input2Value');
  var sixthStep = localStorage.getItem('mirasStepSixthRadio');
  // var seventhStep =   localStorage.getItem('mirasStepSeventhRadio');
  // var eighthStep =   localStorage.getItem('mirasStepEighthRadio');

  if (secondStep === 'Evet' && thirthStep === 'Var' && firstStep === 'Yok') {
    let a = (100 - secondStepValue);
    let Result = (a / thirthStepValue);
    let esPayi = secondStepValue;
    console.log("Genel hesaplama ilk if sonucu:" + Result);
    document.getElementById("sonuc").innerHTML = "&#37;" + Result;
    document.getElementById("sonuc2").innerHTML = "&#37;" + esPayi;
  } else if (secondStep === 'Hayır' && thirthStep === 'Var' && firstStep === 'Yok') {
    let Result = (100 / thirthStepValue);
    let esPayi = "Bulunmuyor";
    console.log("Genel hesaplama ikinci if sonucu:" + Result);
    document.getElementById("sonuc").innerHTML = "&#37;" + Result;
    document.getElementById("sonuc2").innerHTML = "&#37;" + esPayi;
  } else if (secondStep === 'Evet' && secondStepValue == 50 && firstStep === 'Yok' && fourthStep === 'Hayır' && fifthStep === 'Hayır' && sixthStep === 'Var') {
    let Result = (50 / sixthStepValue)
    let esPayi = secondStepValue;
    console.log("Genel hesaplama üçüncü if sonucu:" + Result);
    document.getElementById("sonuc").innerHTML = "&#37;" + Result;
    document.getElementById("sonuc2").innerHTML = "&#37;" + esPayi;
  } else if (firstStep === 'Yok' && secondStep === 'Hayır' && thirthStep === 'Yok' && fourthStep === 'Hayır' && fifthStep === 'Hayır' && sixthStep === 'Var') {
    let Result = (100 / sixthStepValue)
    let esPayi = "Bulunmuyor";
    console.log("Genel hesaplama dördüncü if sonucu:" + Result);
    document.getElementById("sonuc").innerHTML = "&#37;" + Result;
    document.getElementById("sonuc2").innerHTML = "&#37;" + esPayi;
  }

}