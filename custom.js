// Vanilla.JS severiz

// Yapışık Navbar
window.onscroll = function () {
  var navbar = document.getElementById('navbar')
  var navLinks = document.querySelectorAll('.collapse ul li a')
  var logo = document.querySelector('.navbar-brand img')
  if (window.pageYOffset > 0) {
    navbar.style.backgroundColor = 'white'
    navbar.style.transition = 'background-color 0.5s ease, color 0.5s ease'
    navbar.classList.add('sticky')
    logo.src = 'assets/img/PNG.png'
    for (var i = 0; i < navLinks.length; i++) {
      navLinks[i].style.color = 'black'
    }
  } else {
    navbar.style.removeProperty('background-color')
    navbar.style.removeProperty('color')
    navbar.classList.remove('sticky')
    logo.src = 'assets/img/PNG.png'
    for (var i = 0; i < navLinks.length; i++) {
      // navLinks[i].style.transition = "color 0.5s ease";
      navLinks[i].style.removeProperty('color')
    }
  }
}

const tabContents = document.querySelectorAll('.tab-content .tab-pane')
const progressBar = document.querySelector('.progress-bar')
const nextButtons = document.querySelectorAll('.next')
const prevButtons = document.querySelectorAll('.prev')
const stepCounter = document.querySelector('.step-counter')
let currentTab = 0
const selectedValues = []
const transitionContainers = document.querySelectorAll('.transition-container')
const firstStepId = 'wizard-step-99'
const secondStepId = 'step22'
// İleri butonu click yönetimi
nextButtons.forEach((nextButton) => {
  nextButton.addEventListener('click', () => {
    if (validateInputs()) {
      saveSelectedValue()
      if (currentTab < tabContents.length - 1) {
        if (tabContents[currentTab].id === firstStepId) {
          // İlk adımın geçiş efektini uygula
          var nameInput = document.getElementById('name')
          var phoneInput = document.getElementById('phone')
          var citySelect = document.querySelector('select')
          var checkBoxInput = document.getElementById('vehicle1')
          var checkBoxInputSec = document.getElementById('vehicle2')

          // Input alanlarını kontrol edin
          if (
            nameInput.value.trim() === '' ||
            phoneInput.value.trim() === '' ||
            citySelect.value === '0' ||
            !checkBoxInput.checked ||
            !checkBoxInputSec.checked
          ) {
            // Eğer bir alan boşsa veya checkbox'lar işaretlenmemişse, uyarı gösterin ve formu submit etmeyin
            e.preventDefault()
          } else {
            // İkinci adımı belirtilen süre (2 saniye) geciktir
            const delayTime = 2500

            setTimeout(() => {
              // Yeni adıma geçiş yap
              tabContents[currentTab].style.display = 'none'
              currentTab++
              tabContents[currentTab].style.display = 'block'

              updateProgressBar()
              restoreSelectedRadios()
            }, delayTime)
          }
        } else {
          tabContents[currentTab].style.display = 'none'
          currentTab++
          tabContents[currentTab].style.display = 'block'
          updateProgressBar()
          restoreSelectedRadios()
        }
      }
    }
  })
})

// Geri butonu click yönetimi
prevButtons.forEach((prevButton) => {
  prevButton.addEventListener('click', () => {
    saveSelectedValue()
    if (currentTab > 0) {
      tabContents[currentTab].style.display = 'none'
      currentTab--
      tabContents[currentTab].style.display = 'block'
      updateProgressBar()
      restoreSelectedRadios()
    }
  })
})

// Seçilen değeri kaydetme fonksiyonu
function saveSelectedValue() {
  const selectedRadio = tabContents[currentTab].querySelector(
    'input[type="radio"]:checked'
  )
  if (selectedRadio) {
    const value = selectedRadio.value
    selectedValues[currentTab] = value
  }
}

// Seçili butonları geri yükleme
function restoreSelectedRadios() {
  const radios = tabContents[currentTab].querySelectorAll('input[type="radio"]')
  radios.forEach((radio) => {
    const value = radio.value
    radio.checked = value === selectedValues[currentTab]
    radio.disabled = false
  })
}

// İlgili adım için input doğrulamasını kontrol et
function validateInputs() {
  const inputs = tabContents[currentTab].querySelectorAll(
    '.form-control, input[type="radio"]'
  )

  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i]
    if (input.id !== 'input-number-2' && input.id !== 'input-number-1') {
      if (input.tagName === 'INPUT' && input.type === 'radio') {
        const radioGroup = input.name
        const radioButtons = tabContents[currentTab].querySelectorAll(
          `input[name="${radioGroup}"]`
        )
        const isRadioButtonChecked = Array.from(radioButtons).some(
          (radioButton) => radioButton.checked
        )
        if (!isRadioButtonChecked) {
          return false
        }
      } else if (isEmpty(input.value)) {
        return false
      }
    }
  }
  return true
}
// Form required
document.addEventListener('DOMContentLoaded', function () {
  // Form submit olayını dinle
  document.querySelector('form').addEventListener('submit', function (e) {
    // Input alanlarını seç
    var nameInput = document.getElementById('name')
    var phoneInput = document.getElementById('phone')
    //var subjectInput = document.getElementById('subject')
    var citySelect = document.querySelector('select')
    var checkBoxInput = document.getElementById('vehicle1') // Checkbox input
    var checkBoxInputSec = document.getElementById('vehicle2') // Checkbox input

    // Hata mesajlarını sıfırla
    updateErrorMessage('name-error', '')
    updateErrorMessage('phone-error', '')
    //updateErrorMessage('subject-error', '')
    updateErrorMessage('city-error', '')
    updateErrorMessage('checkbox-error', '')
    updateErrorMessage('checkbox-error-sec', '')

    // Boş inputları kontrol et ve hata mesajlarını güncelle
    if (nameInput.value.trim() === '') {
      e.preventDefault()
      updateErrorMessage('name-error', 'Ad Soyad alanı boş bırakılamaz.')
    }

    if (phoneInput.value.trim() === '') {
      e.preventDefault()
      updateErrorMessage(
        'phone-error',
        'Telefon Numarası alanı boş bırakılamaz.'
      )
    }

    if (citySelect.value === '0') {
      e.preventDefault()
      updateErrorMessage('city-error', 'Yaşadığınız Şehir seçimi zorunludur.')
    }

    // Checkbox kontrolü
    if (!checkBoxInput.checked) {
      e.preventDefault()
      updateErrorMessage(
        'checkbox-error',
        'Hüküm ve koşulları kabul etmelisiniz.'
      ) // Checkbox hata mesajı
    }
    if (!checkBoxInputSec.checked) {
      e.preventDefault()
      updateErrorMessage(
        'checkbox-error-sec',
        'KVKK koşullarını kabul etmelisiniz.'
      ) // Checkbox hata mesajı
    }
  })

  // Hata mesajını güncelle
  function updateErrorMessage(errorId, message) {
    var errorMsg = document.getElementById(errorId)
    if (errorMsg) {
      errorMsg.textContent = message
    } else {
      // Hata mesajı yoksa yeni bir hata mesajı oluştur
      errorMsg = document.createElement('p')
      errorMsg.textContent = message
      errorMsg.style.color = 'red'
      errorMsg.id = errorId

      var lastFormStep = document.querySelector('.form-required .reInputFrst')
      if (errorId === 'phone-error') {
        lastFormStep = document.querySelector('.form-required .reInputSec')
      } else if (errorId === 'city-error') {
        lastFormStep = document.querySelector('.form-required .reInputThr')
      } else if (errorId === 'checkbox-error') {
        lastFormStep = document.querySelector('.form-required .reInputFour')
      } else if (errorId === 'checkbox-error-sec') {
        lastFormStep = document.querySelector('.form-required .reInputFifth')
      }

      lastFormStep.appendChild(errorMsg)
    }
  }

  var nameInput = document.getElementById('name')
  var phoneInput = document.getElementById('phone')
  // Ad Soyad input'u için sadece harf girişi
  nameInput.addEventListener('input', function (event) {
    var inputValue = event.target.value
    var sanitizedValue = sanitizeName(inputValue)
    event.target.value = sanitizedValue
  })

  // Ad Soyad input'u için metin/harf girişi sınırlandırması
  function sanitizeName(input) {
    return input.replace(/[^a-zA-ZğüşöçıİĞÜŞÖÇ\s]/g, '')
  }

  phoneInput.addEventListener('input', function (event) {
    var inputValue = event.target.value
    var formattedValue = formatPhoneNumber(inputValue)
    event.target.value = formattedValue
  })

  function formatPhoneNumber(input) {
    // Sadece sayı girişi
    var numericValue = input.replace(/\D/g, '')

    // Uzunluk sınırı (11 karakter)
    if (numericValue.length > 11) {
      numericValue = numericValue.slice(0, 11)
    }

    // Numaranın başına "0" ekle
    if (numericValue.length > 0 && numericValue.charAt(0) !== '0') {
      numericValue = '0' + numericValue
    }

    // Boşluklar ve parantezleri ekle
    var formattedNumber = numericValue.replace(
      /(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/,
      '0($2) $3 $4 $5'
    )

    return formattedNumber
  }
})

// İlerleme çubuğunu güncelleme
function updateProgressBar() {
  progressBar.style.width = ((currentTab + 1) / tabContents.length) * 100 + '%'
}

// Yardımcı fonksiyon: Boş değer kontrolü
function isEmpty(str) {
  return !str.trim().length
}

// Başlangıç ayarları
tabContents[currentTab].style.display = 'block'
updateProgressBar()
restoreSelectedRadios()

// Input Sayı Formatı ve Basamaklama:
var inputBasamak = document.querySelector('.form-control')
var inputsAll = document.querySelectorAll('.form-control')

for (var i = 0; i < inputsAll.length; i++) {
  var currentValue

  inputsAll[i].addEventListener('input', function (event) {
    if (event.target.type !== 'date') {
      var inputBasamak = event.target
      var cursorPosition = getCaretPosition(inputBasamak)
      var valueBefore = inputBasamak.value
      var lengthBefore = inputBasamak.value.length
      var specialCharsBefore = getSpecialCharsOnSides(inputBasamak.value)
      var number = removeThousandSeparators(inputBasamak.value)

      if (inputBasamak.value == '') {
        return
      }

      // Invalid karakter kontrolü
      if (isNaN(number)) {
        inputBasamak.value = ''
        return
      }

      inputBasamak.value = formatNumber(
        number.replace(getCommaSeparator(), '.')
      )

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
        )
        cursorPosition--
      }

      // Binlik ayırıcı eklendiyse veya kaldırıldıysa imleci doğru şekilde hareket ettir.
      var specialCharsAfter = getSpecialCharsOnSides(inputBasamak.value)
      if (specialCharsBefore[0] < specialCharsAfter[0]) {
        cursorPosition += specialCharsAfter[0] - specialCharsBefore[0]
      } else if (specialCharsBefore[0] > specialCharsAfter[0]) {
        cursorPosition -= specialCharsBefore[0] - specialCharsAfter[0]
      }
      setCaretPosition(inputBasamak, cursorPosition)

      currentValue = inputBasamak.value
    }
  })
}

// Yıl inputunu hariç tutma ve 4 hane sanırı
var yearInput = document.getElementById('year-input')
yearInput.addEventListener('input', function (event) {
  var number = removeThousandSeparators(event.target.value)
  if (isNaN(number) || number.length > 4) {
    event.target.value = ''
    return
  }
  event.target.value = number
})

// Hane sınırı validasyonu
//  var number = removeThousandSeparators(event.target.value);
// if (isNaN(number) || number.length > 4) {
//   inputBasamak.value = "";
//   return;
// }

function getSpecialCharsOnSides(x, cursorPosition) {
  var specialCharsLeft = x
    .substring(0, cursorPosition)
    .replace(/[0-9]/g, '').length
  var specialCharsRight = x
    .substring(cursorPosition)
    .replace(/[0-9]/g, '').length
  return [specialCharsLeft, specialCharsRight]
}

function formatNumber(x) {
  return getNumberFormat().format(x)
}

function removeThousandSeparators(x) {
  return x
    .toString()
    .replace(new RegExp(escapeRegExp(getThousandSeparator()), 'g'), '')
}

function getThousandSeparator() {
  return getNumberFormat().format('1000').replace(/[0-9]/g, '')[0]
}

function getCommaSeparator() {
  return getNumberFormat().format('0.01').replace(/[0-9]/g, '')[0]
}

function getNumberFormat() {
  return new Intl.NumberFormat()
}

function escapeRegExp(str) {
  return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, '\\$&')
}

/*
 ** Belirtilen metin alanının caret (imleç) konumunu döndürür.
 ** Dönüş değeri aralığı 0-oField.value.length'dir.
 */
function getCaretPosition(oField) {
  // Initialize
  var iCaretPos = 0

  // IE Support
  if (document.selection) {
    // Odağı öğeye ayarla.
    oField.focus()

    // İmleç konumunu almak için boş seçim aralığını al.
    var oSel = document.selection.createRange()

    // Seçim başlangıcını 0 konumuna taşı
    oSel.moveStart('character', -oField.value.length)

    // Caret konumu seçim uzunluğudur
    iCaretPos = oSel.text.length
  }

  // Firefox support
  else if (oField.selectionStart || oField.selectionStart == '0')
    iCaretPos = oField.selectionStart

  // Return results
  return iCaretPos
}

function setCaretPosition(elem, caretPos) {
  if (elem != null) {
    if (elem.createTextRange) {
      var range = elem.createTextRange()
      range.move('character', caretPos)
      range.select()
    } else {
      if (elem.selectionStart) {
        elem.focus()
        elem.setSelectionRange(caretPos, caretPos)
      } else elem.focus()
    }
  }
}

// Araç Değer Kaybı Tazminat Hesaplama:

// Veri/Değer Girişi Değişim Kontrol Tanımları
let inputChanged = false
let radioChanged = false

// Aşama 1

function saveStep1() {
  let firstStepInput
  let firstVariable
  firstStepInput = parseInt(
    document.getElementById('firstStepInput').value.replace(/[^\d]/g, '')
  )
  localStorage.setItem('firstStepInput', firstStepInput)
  firstVariable = parseFloat(firstStepInput * 0.19)
  localStorage.setItem('firstVariable', firstVariable)
}

// Aşama 2

function saveStep2() {
  let secondStepInput
  let secondVariable
  secondStepInput = parseInt(
    document.getElementById('secondStepInput').value.replace(/[^\d]/g, '')
  )
  if (secondStepInput >= 0 && secondStepInput <= 14999) {
    secondVariable = 0.9
  } else if (secondStepInput >= 15000 && secondStepInput <= 29999) {
    secondVariable = 0.8
  } else if (secondStepInput >= 30000 && secondStepInput <= 44999) {
    secondVariable = 0.6
  } else if (secondStepInput >= 45000 && secondStepInput <= 59999) {
    secondVariable = 0.4
  } else if (secondStepInput >= 60000 && secondStepInput <= 74999) {
    secondVariable = 0.3
  } else if (secondStepInput >= 75000 && secondStepInput <= 149999) {
    secondVariable = 0.2
  } else if (secondStepInput >= 150000) {
    secondVariable = 0.1
  }
  localStorage.setItem('secondVariable', secondVariable)
}

// Aşama 3
function saveStep3() {
  const A1 = 0.9
  const A2 = 0.75
  const A3 = 0.5
  const A4 = 0.25
  const firstStepInput = localStorage.getItem('firstStepInput')
  const thirdStepInput = parseInt(
    document.getElementById('thirdStepInput').value.replace(/[^\d]/g, '')
  )
  const percentage = (thirdStepInput / firstStepInput) * 100
  let thirdVariable = null

  if (firstStepInput >= 0 && firstStepInput <= 95000) {
    if (percentage >= 25.01) thirdVariable = A1
    if (percentage >= 15.01 && percentage <= 25) thirdVariable = A2
    if (percentage >= 5.01 && percentage <= 15) thirdVariable = A3
    if (percentage >= 0.1 && percentage <= 5) thirdVariable = A4
  }

  if (firstStepInput >= 95001 && firstStepInput <= 150000) {
    if (percentage >= 20.01) thirdVariable = A1
    if (percentage >= 12.01 && percentage <= 20) thirdVariable = A2
    if (percentage >= 4.01 && percentage <= 12) thirdVariable = A3
    if (percentage >= 0.1 && percentage <= 4) thirdVariable = A4
  }

  if (firstStepInput >= 150001 && firstStepInput <= 300000) {
    if (percentage >= 20.01) thirdVariable = A1
    if (percentage >= 10.01 && percentage <= 20) thirdVariable = A2
    if (percentage >= 3.01 && percentage <= 10) thirdVariable = A3
    if (percentage >= 0.1 && percentage <= 3) thirdVariable = A4
  }

  if (firstStepInput >= 300001) {
    if (percentage >= 20.01) thirdVariable = A1
    if (percentage >= 8.01 && percentage <= 20) thirdVariable = A2
    if (percentage >= 2.01 && percentage <= 8) thirdVariable = A3
    if (percentage >= 0.1 && percentage <= 2) thirdVariable = A4
  }

  localStorage.setItem('thirdVariable', thirdVariable)
}

// AŞAMA 5:
function saveStep5() {
  const value1 = 1
  const value2 = 0.75
  const value3 = 0.5
  const value4 = 0.25
  const value5 =
    'Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.'

  let checkedValue = document.querySelector('.btn-check:checked').value

  if (checkedValue === '%0') {
    localStorage.setItem('fourthVariable', value1)
  } else if (checkedValue === '%25') {
    localStorage.setItem('fourthVariable', value2)
  } else if (checkedValue === '%50') {
    localStorage.setItem('fourthVariable', value3)
  } else if (checkedValue === '%75') {
    localStorage.setItem('fourthVariable', value4)
  } else if (checkedValue === '%100') {
    alert(value5)
    localStorage.clear()
    window.location.reload()
    return
  } else {
    localStorage.setItem('fourthVariable', value1)
  }
}

// Adım 6
function saveStep6() {
  const varBtn = document.querySelector("input[value='Var']")
  const yokBtn = document.querySelector("input[value='Yok']")
  let firstVariable = localStorage.getItem('firstVariable')
  let secondVariable = localStorage.getItem('secondVariable')
  let thirdVariable = localStorage.getItem('thirdVariable')
  let fourthVariable = localStorage.getItem('fourthVariable')
  // let stepLast = document.querySelector('#wizard-step-99')
  console.log(thirdVariable)
  let sonuc = 1

  if (varBtn.checked) {
    alert('Üzgünüz, değer kaybı tazminatı konusunda size yardımcı olamıyoruz.')
    // stepLast.style.display = 'none'
    localStorage.clear()
    window.location.reload()
  } else if (yokBtn.checked) {
    sonuc = parseInt(
      Math.floor(
        sonuc * firstVariable * secondVariable * thirdVariable * fourthVariable
      )
    ).toLocaleString()
    document.getElementById('sonuc').innerHTML = sonuc + ' TL'
    var inputElement = document.getElementById('subject')
    inputElement.value = `Sonuç = ${sonuc}`
  }
}

// Wizard'ta geriye dönüldüğünde veri değişimi olup olmadığı hakkında tüm fonksiyonları dinamik olarak kontrol et, güncelle, çağır ve hesaplamaları yenile:
// document.getElementById('backButton').onclick = function () {
//   let inputChangedStep = []
//   for (let i = 1; i <= 5; i++) {
//     const inputData = document.getElementById(`${stepName(i)}Input`)
//     const radioButtons = document.querySelectorAll(
//       `input[type="radio"][name="step${i}Radio"]`
//     )
//     inputChangedStep[i] = false
//     inputData.addEventListener('change', function () {
//       inputChangedStep[i] = true
//     })
//     radioButtons.forEach(function (radioButton) {
//       radioButton.addEventListener('change', function () {
//         inputChangedStep[i] = true
//       })
//     })
//   }

//   for (let i = 1; i <= 5; i++) {
//     if (inputChangedStep[i]) {
//       window['saveStep' + i]()
//       inputChangedStep[i] = false
//     } else {
//       window['resetStep' + i]()
//     }
//   }

//   // Radyo button'ların seçili değerlerini depolamak için genel bir nesne
//   var radioButtonValues = {}

//   document
//     .querySelectorAll("input[type='radio']")
//     .forEach(function (radioButton) {
//       radioButton.addEventListener('change', function () {
//         radioButtonValues[radioButton.name] = radioButton.value
//       })
//     })

//   // Geri button tıklama
//   backButton.addEventListener('click', function () {
//     // Kayıtlı değerleri kullanarak radyo button'ların seçilen değerlerini ayarlama
//     document
//       .querySelectorAll("input[type='radio']")
//       .forEach(function (radioButton) {
//         if (radioButtonValues[radioButton.name] === radioButton.value) {
//           radioButton.checked = true
//         }
//       })
//   })
// }

// function stepName(step) {
//   switch (step) {
//     case 1:
//       return 'first'
//     case 2:
//       return 'second'
//     case 3:
//       return 'third'
//     default:
//       return ''
//   }
// }

// Fazla Çalışma Tazminatı Hesaplama

function mesaiStep1() {
  // Önce startDate ve endDate değerlerini alınır ve bunları JavaScript Date nesnelerine dönüştürülür.
  const date1 = new Date(document.querySelector('#startDate').value)
  const date2 = new Date(document.querySelector('#endDate').value)
  console.log(date1)
  console.log(date2)
  // Net sonuç için bu iki tarih arasındaki fark milisaniye cinsinden hesaplanır ve bu değeri ay cinsine dönüştürür.
  const diffTime1 = Math.abs(date2 - date1)
  const diffMonths = diffTime1 / (1000 * 60 * 60 * 24)
  // const diffMonthsRounded = Math.round((diffMonths + Number.EPSILON) * 10) / 10 // Virgülden sonraki 1 basamağı almak için yuvarlama işlemi yapılıyor
  console.log(diffMonths)
  localStorage.setItem('step1', diffMonths)
}

function mesaiStep2() {
  const inputNumber = document
    .getElementById('inputNumber')
    .value.replace(/[^\d]/g, '')

  const dividedNumber = inputNumber / 225
  const multipliedNumber = dividedNumber * 1.5
  console.log(multipliedNumber)
  localStorage.setItem('multipliedNumber', multipliedNumber)
}

function mesaiStep3() {
  const inputNumber = document
    .getElementById('inputNumberSecond')
    .value.replace(/[^\d]/g, '')
  console.log(inputNumber)
  if (inputNumber < 45) {
    alert(
      'Üzgünüz, fazla çalışma tazminatı hesaplama konusunda size yardımcı olamıyoruz.'
    )
    localStorage.clear()
    window.location.reload()
    return
  }

  const subtractedNumber = inputNumber - 45
  const totalMonths = localStorage.getItem('step1')
  const multipliedNumber = parseFloat(localStorage.getItem('multipliedNumber'))
  const finalResult = parseInt(
    Math.floor((subtractedNumber * multipliedNumber) / 7) * totalMonths
  ).toLocaleString()
  console.log(finalResult)
  localStorage.setItem('finalResult', finalResult)
  document.getElementById('sonuc').innerHTML = finalResult + ' TL'
  var inputElement = document.getElementById('subject')
  inputElement.value = `Sonuç = ${finalResult}`
}

// Kıdem Tazminatı Hesaplamaları

function kıdemStep1() {
  let startDate = document.querySelector('#start-date').value
  let endDate = document.querySelector('#end-date').value
  startDate = new Date(startDate)
  endDate = new Date(endDate)
  const diffTime2 = Math.abs(endDate - startDate)
  console.log(diffTime2)
  const diffDays = Math.ceil(diffTime2 / (1000 * 60 * 60 * 24))
  let resultdiffDays = diffDays / 365
  resultdiffDays = resultdiffDays.toFixed(3)
  resultdiffDays = Number(resultdiffDays)
  if (resultdiffDays < 1) {
    alert('Üzgünüz, kıdem tazminatı konusunda size yardımcı olamıyoruz.')
    localStorage.clear()
    window.location.reload()
    return
  }
  console.log(resultdiffDays)

  console.log(diffDays)
  localStorage.setItem('storedNumber', resultdiffDays)
}

function kıdemStep2() {
  const secondNumber = document
    .getElementById('input-number')
    .value.replace(/[^\d]/g, '')
  console.log(secondNumber)
  localStorage.setItem('kıdemSecond', secondNumber)
}

function kıdemStep3() {
  const secondNumber = localStorage.getItem('kıdemSecond') || 0
  const dateResult = localStorage.getItem('storedNumber')
  const taxAmount = 0.00759
  const thirdNumber = document
    .getElementById('input-number-2')
    .value.replace(/[^\d]/g, '')
  const thirdNumberVal = thirdNumber ? Number(thirdNumber) : 0
  const resultFirst = Math.floor(
    (parseInt(secondNumber) + parseInt(thirdNumberVal)) * dateResult
  )
  console.log(resultFirst)
  const resultSecond = resultFirst * taxAmount
  console.log(resultSecond)
  const resultLast = resultFirst - resultSecond
  console.log(resultLast)
  document.getElementById('sonuc').innerHTML =
    resultLast.toLocaleString() + ' TL'
  var inputElement = document.getElementById('subject')
  inputElement.value = `Sonuç = ${resultLast.toLocaleString()}`
}

// Trafik Kazası Hesaplamaları

// Adım1
function handleStatusButton() {
  let kazaStatusRadio = document.querySelector('.status:checked').value
  localStorage.setItem('kazaStatusRadio', kazaStatusRadio)
  console.log('adım 1 ' + currentTab)

  console.log('adım 1 ' + tabContents)
  console.log(kazaStatusRadio)
  if (kazaStatusRadio === 'Ölümlü') {
    let captionChangeValidate = document.getElementById('caption-change')
    captionChangeValidate.textContent = 'Ölüm Yaşı:'
    captionChangeValidate.classList.add('form-label')
  }
}

// Adım2
function handleGenderButton() {
  const genderButtons = document.querySelector('.gender:checked').value
  localStorage.setItem('genderButtons', genderButtons)
  console.log(genderButtons)
  console.log('adım 2' + currentTab)
}

// Adım3
function handleBornButton() {
  const bornYearInput = document.getElementById('year-input')
  const inclusiveDiv = document.querySelector('#error-message')
  const bornYearString = bornYearInput.value.replace(/[^\d]/g, '')
  const bornYear = parseInt(bornYearString)

  console.log(bornYear)
  console.log(bornYear * 2)
  localStorage.setItem('bornYear', bornYear)
  console.log(typeof bornYear)
  let genderInfo = localStorage.getItem('genderButtons')

  //const nowDate = new Date().getFullYear()
  const minYear = 1
  const maxMaleYear = 65
  const maxFemaleYear = 60

  if (genderInfo === 'Erkek') {
    if (bornYear < minYear || bornYear > maxMaleYear) {
      bornYearInput.value = ''
      inclusiveDiv.style.gridTemplateColumns = 'repeat(2, 1fr)'
      bornYearInput.placeholder = `Lütfen ${minYear} ile ${maxMaleYear} aralığında bir yaş girin.`
      bornYearInput.classList.add('error')
      bornYearInput.style.border = '1px solid red'
      bornYearInput.style.backgroundColor = '#ffe6e6'
    } else {
      bornYearInput.classList.remove('error')
      bornYearInput.style.border = ''
      bornYearInput.style.backgroundColor = ''
      //let yas = nowDate - bornYear
      const retirementAge = genderInfo === 'Erkek' ? 65 : 60
      const x = retirementAge - bornYear
      localStorage.setItem('x', x)
    }
  } else {
    if (bornYear < minYear || bornYear > maxFemaleYear) {
      bornYearInput.value = ''
      inclusiveDiv.style.gridTemplateColumns = 'repeat(2, 1fr)'
      bornYearInput.placeholder = `Lütfen ${minYear} ile ${maxFemaleYear} aralığında bir yaş girin.`
      bornYearInput.classList.add('error')
      bornYearInput.style.border = '1px solid red'
      bornYearInput.style.backgroundColor = '#ffe6e6'
    } else {
      bornYearInput.classList.remove('error')
      bornYearInput.style.border = ''
      bornYearInput.style.backgroundColor = ''
      //let yas = nowDate - bornYear
      const retirementAge = genderInfo === 'Erkek' ? 65 : 60
      const x = retirementAge - bornYear
      localStorage.setItem('x', x)
    }
  }
}

// Adım4
function handlePriceStep() {
  // const kusurOrani = localStorage.getItem('radioButtons')
  const maasInput = document.getElementById('maasInput')
  const maasMiktari = maasInput.value.replace(/[^\d]/g, '')
  localStorage.setItem('maasMiktari', maasMiktari)
  console.log(maasMiktari)
  const maasYillik = maasMiktari * 12
  // const z = (maasMiktari - result) / 30
  localStorage.setItem('maasYillik', maasYillik)
  // console.log(z)
  //handleKusurOraniRadioButtons()
}

// Adım5
function handleKusurOraniRadioButtons() {
  const kusurOrani = document.querySelector('.kusurOrani:checked').value
  localStorage.setItem('kusurOrani', kusurOrani)
  console.log(kusurOrani)
  const kazaStatusRadio = localStorage.getItem('kazaStatusRadio')
  console.log('adım 5 ' + currentTab)
  console.log('adım 5 ' + tabContents)

  if (kazaStatusRadio === 'Ölümlü') {
    currentTab = 6 // Direkt olarak 7. adıma geç
    tabContents.forEach((content, index) => {
      if (index === currentTab) {
        content.style.display = 'block'
        console.log(content)
      } else {
        content.style.display = 'none'
        console.log(content)
      }
    })
    updateProgressBar()
  } else {
    // Diğer durumları işle
  }
}

// Adım Ek Validasyon

// Adım6
function handleDisabilityButton() {
  let disability = document.querySelector('.disability').value
  let percentage = disability / 100
  localStorage.setItem('disability', percentage)
  console.log('adım 6 ' + currentTab)
  console.log('adım 6 ' + tabContents)
}

// AdımSon
function handleLossSelect() {
  const valueInput = document.getElementById('maddiKayip')
  const value = valueInput.value.replace(/[^\d]/g, '')
  const updateValue = value ? Number(value) : 0
  const lossSelect = parseInt(updateValue, 10)
  console.log('adım 7 ' + currentTab)
  console.log('adım 7 ' + tabContents)

  if (isNaN(lossSelect)) {
    // Hatalı sayı formatı
  } else {
    // Geçerli sayı
  }

  localStorage.setItem('lossSelect', lossSelect)
  let kazaStatusRadio = localStorage.getItem('kazaStatusRadio')
  let disability = localStorage.getItem('disability')
  console.log(disability)
  let maasYillik = localStorage.getItem('maasYillik')
  console.log(maasYillik)
  let x = localStorage.getItem('x')
  console.log(x)
  let kusurOrani = localStorage.getItem('kusurOrani')
  if (kazaStatusRadio === 'Ölümlü') {
    if (kusurOrani === '100') {
      const result = lossSelect.toLocaleString()
      document.getElementById('sonuc').innerHTML = result + ' TL'

      var inputElement = document.getElementById('subject')
      inputElement.value = `Sonuç = ${result}`
    } else {
      disability = 100 / 100
      const islem = x * maasYillik * disability
      const islemİki = islem * (kusurOrani / 100)
      const result = (islem - islemİki + lossSelect).toLocaleString()

      document.getElementById('sonuc').innerHTML = result + ' TL'

      var inputElement = document.getElementById('subject')
      inputElement.value = `Sonuç = ${result}`
    }
  } else {
    if (kusurOrani === '100') {
      const result = lossSelect.toLocaleString()
      console.log('İKİNCİ ELSE İLK İF RESULT: ' + result)
      document.getElementById('sonuc').innerHTML = result + ' TL'

      var inputElement = document.getElementById('subject')
      inputElement.value = `Sonuç = ${result}`
    } else {
      const islem = x * maasYillik * disability
      console.log('SON ELSE İSLEM: ' + islem)
      const islemİki = islem * (kusurOrani / 100)
      console.log('SON ELSE İSLEMİKİ: ' + islemİki)
      const result = islem - islemİki
      const total = result + parseInt(lossSelect)
      console.log('SON ELSE RESULT: ' + total)
      console.log('SON ELSE lossSelect: ' + parseInt(lossSelect))
      document.getElementById('sonuc').innerHTML =
        total.toLocaleString() + ' TL'
      var inputElement = document.getElementById('subject')
      inputElement.value = `Sonuç = ${total.toLocaleString()}`
    }
  }
}

// İş kazası Tazminatı
// Adım1
function handleWorkGenderButton() {
  const genderButtons = document.querySelector('.gender:checked').value
  localStorage.setItem('genderButtons', genderButtons)
  console.log(genderButtons)
}

// Adım2
function handleWorkBornButton() {
  const bornYearInput = document.getElementById('year-input')
  const inclusiveDiv = document.querySelector('#error-message')
  const bornYearString = bornYearInput.value.replace(/[^\d]/g, '')
  const bornYear = parseInt(bornYearString)
  //const nowDate = new Date().getFullYear()
  console.log(bornYear)
  console.log(bornYear * 2)
  localStorage.setItem('bornYear', bornYear)
  console.log(typeof bornYear)
  let genderInfo = localStorage.getItem('genderButtons')

  const minYear = 1
  const maxMaleYear = 65
  const maxFemaleYear = 60

  if (genderInfo === 'Erkek') {
    if (bornYear < minYear || bornYear > maxMaleYear) {
      bornYearInput.value = ''
      inclusiveDiv.style.gridTemplateColumns = 'repeat(2, 1fr)'
      bornYearInput.placeholder = `Geçersiz bir yaş girdiniz. Lütfen ${minYear} ile ${maxMaleYear} aralığında bir yaş girin.`
      bornYearInput.classList.add('error')
      bornYearInput.style.border = '1px solid red'
      bornYearInput.style.backgroundColor = '#ffe6e6'
    } else {
      bornYearInput.classList.remove('error')
      bornYearInput.style.border = ''
      bornYearInput.style.backgroundColor = ''
      //let yas = nowDate - bornYear
      const retirementAge = genderInfo === 'Erkek' ? 65 : 60
      const x = retirementAge - bornYear
      localStorage.setItem('x', x)
    }
  } else {
    if (bornYear < minYear || bornYear > maxFemaleYear) {
      bornYearInput.value = ''
      inclusiveDiv.style.gridTemplateColumns = 'repeat(2, 1fr)'
      bornYearInput.placeholder = `Lütfen ${minYear} ile ${maxFemaleYear} aralığında bir yaş girin.`
      bornYearInput.classList.add('error')
      bornYearInput.style.border = '1px solid red'
      bornYearInput.style.backgroundColor = '#ffe6e6'
    } else {
      bornYearInput.classList.remove('error')
      bornYearInput.style.border = ''
      bornYearInput.style.backgroundColor = ''
      //let yas = nowDate - bornYear
      const retirementAge = genderInfo === 'Erkek' ? 65 : 60
      const x = retirementAge - bornYear
      localStorage.setItem('x', x)
    }
  }

  /*if (
    (bornYear >= 65 && genderInfo === 'Erkek') ||
    (bornYear >= 60 && genderInfo === 'Kadın')
  ) {
    console.log(tabContents)
    currentTab = tabContents.length - 3
    console.log(currentTab)
    tabContents.forEach((content, index) => {
      if (index !== 4) {
        console.log(index)
        content.style.display = 'none'
        console.log(content)
      } else {
        content.style.display = 'block'
        console.log(content)
      }
    })
    progressBar.style.width =
      ((currentTab + 1) / tabContents.length) * 100 + '%'
  }*/
}

// Adım3
function handleWorkPriceStep() {
  // const kusurOrani = localStorage.getItem('radioButtons')
  const maasInput = document.getElementById('maasInput') // Input elementine erişim
  const maasMiktari = maasInput.value.replace(/[^\d]/g, '') // Kullanıcının girdiği maaş miktarını alma
  localStorage.setItem('maasMiktari', maasMiktari)
  console.log(maasMiktari)
  const maasYillik = maasMiktari * 12
  // const z = (maasMiktari - result) / 30
  localStorage.setItem('maasYillik', maasYillik)
  // console.log(z)
}
// Adım4
function handleWorkDisabilityButton() {
  let disability = document.querySelector('.disability').value
  let percentage = disability / 100
  localStorage.setItem('disability', percentage)
  console.log(disability)
  let maasYillik = localStorage.getItem('maasYillik')
  console.log(maasYillik)
  let x = localStorage.getItem('x')
  console.log(x)
  if (disability === null || disability == undefined) {
    disability = 100
    percentage = disability / 100
    console.log('pertencage check:', percentage)
    const result = x * maasYillik * percentage
    let formattedResult = result.toLocaleString() // Sonucu basamaklarına ayırarak biçimlendir
    document.getElementById('sonuc').innerHTML = formattedResult + ' TL'
    var inputElement = document.getElementById('subject')
    inputElement.value = `Sonuç = ${formattedResult}`
  } else {
    const result = x * maasYillik * percentage
    let formattedResult = result.toLocaleString() // Sonucu basamaklarına ayırarak biçimlendir
    document.getElementById('sonuc').innerHTML = formattedResult + ' TL'
    var inputElement = document.getElementById('subject')
    inputElement.value = `Sonuç = ${formattedResult}`
  }
}

// //Adım7
// function handleFinalStep() {
//   const bornYear = document
//     .getElementById('year-input')
//     .value.replace(/[^\d]/g, '')
//   console.log(bornYear)
//   console.log(bornYear * 2)
//   let kazaTarihi = localStorage.getItem('accidentDateSelect')
//   let z = localStorage.getItem('z')
//   let genderInfo = localStorage.getItem('genderButtons')
//   if (localStorage.getItem('kazaStatusRadio') === 'Ölümlü') {
//     let olumYasi = kazaTarihi - bornYear
//     const retirementAge = genderInfo === 'Erkek' ? 60 : 58
//     const x = (retirementAge - olumYasi) * 365.25
//     const mainResult = parseInt(Math.floor(z * x))
//     document.getElementById('sonuc').innerHTML = mainResult
//   } else {
//     const nowDate = new Date().getFullYear()
//     let yas = nowDate - bornYear
//     const retirementAge = genderInfo === 'Erkek' ? 60 : 58
//     const x2 = (retirementAge - yas) * 365.25
//     const mainResult = parseInt(Math.floor(z * x2))
//     document.getElementById('sonuc').innerHTML = mainResult
//   }
// }

// Miras Hesaplamaları
function controlTransition() {
  mirasStep1()
  mirasStep2()
  mirasStep3()
  mirasStep4()
  mirasStep5()
  mirasStep6()
  mirasStep7()
  mirasStep8()
  mirasStep9()
  let intermediateStepsPassed = false
  localStorage.setItem('intermediateStepsPassed', intermediateStepsPassed)
}

// Adım1
function mirasStep1() {
  let mirasStepOneRadio = document.querySelector('.mirasStepOne:checked').value
  localStorage.setItem('mirasStepOneRadio', mirasStepOneRadio)
  console.log('Birinci input veri:' + mirasStepOneRadio)
  if (mirasStepOneRadio === 'Var') {
    const submitButton = document.querySelector('.btn.btn-success.first')
    submitButton.textContent = 'Gönder'
    currentTab = tabContents.length - 3
    tabContents.forEach((content, index) => {
      if (index !== 9) {
        content.style.display = 'none'
      } else {
        content.style.display = 'block'
      }
    })
    // stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`
    progressBar.style.width = '100%'
    localStorage.setItem('currentStep', 10)
  }
}
// Adım2
function mirasStep2() {
  intermediateStepsPassed = true
  let mirasStepSecondRadio = document.querySelector(
    '.mirasStepTwo:checked'
  ).value
  console.log('İkinci input veri:' + mirasStepSecondRadio)
  localStorage.setItem('mirasStepSecondRadio', mirasStepSecondRadio)

  let mirasStepSecondValue = 0 // varsayılan değer
  if (mirasStepSecondRadio === 'Evet') {
    mirasStepSecondValue = 25
    localStorage.setItem('mirasStepSecondValue', mirasStepSecondValue)
  }

  console.log('İkinci değişkene ilk değer ataması2:' + mirasStepSecondValue)
  mirasStep3()
}

// Adım 3
function mirasStep3() {
  // intermediateStepsPassed = true
  localStorage.setItem('currentStep', 3)
  const varButton = document.getElementById('success-5-outlined')
  const yokButton = document.getElementById('success-6-outlined')
  // let mirasStepThree = document.querySelector('.mirasStepThree:checked').value
  let flag = false // flag değişkeni oluşturuldu
  varButton.addEventListener('click', () => {
    const thirdStep = 'Var' // Var butonunun değeri
    let skipSteps = true
    skipSteps = false
    localStorage.setItem('thirdStep', thirdStep)
    console.log('3. adım radio button veri:' + thirdStep)

    if (!flag) {
      // flag değişkeni kontrol edildi
      flag = true
      varButton.style.display = 'none'
      yokButton.style.display = 'none'
      const input = document.createElement('input')
      input.classList.add('input1', 'form-control', 'input-lg')
      input.type = 'number'
      input.placeholder = 'Sayı giriniz'
      const stepContainer = document.querySelector('.stepContainer')
      stepContainer.appendChild(input)
      intermediateStepsPassed = true
      localStorage.setItem('intermediateStepsPassed', 'true')
      input.addEventListener('change', () => {
        const input1Value = input.value
        localStorage.setItem('input1Value', input1Value)
        console.log('3. adım input veri (var seçilmişse):' + input1Value)
        if (input1Value !== '') {
          const ileriButton = document.querySelector('.nextExtr')
          skipSteps = false
          ileriButton.addEventListener('click', () => {
            if (true) {
              skipSteps = true
              // Aradaki adımları atlayan işlemleri gerçekleştirin
              currentTab = tabContents.length - 2
              tabContents.forEach((content, index) => {
                if (index !== currentTab) {
                  content.style.display = 'none'
                } else {
                  content.style.display = 'block'
                }
              })
              // stepCounter.textContent = `Adım ${currentTab + 1} / ${
              //   tabContents.length
              // }`
              progressBar.style.width = '100%'
            }
            var firstStep = localStorage.getItem('mirasStepOneRadio')
            var secondStep = localStorage.getItem('mirasStepSecondRadio')
            var secondStepValue = localStorage.getItem('mirasStepSecondValue')
            var thirthStep = localStorage.getItem('thirdStep')
            var thirthStepValue = localStorage.getItem('input1Value')
            if (
              secondStep === 'Evet' &&
              thirthStep === 'Var' &&
              firstStep === 'Yok'
            ) {
              let a = 100 - secondStepValue
              let Result = a / thirthStepValue
              let esPayi = secondStepValue
              console.log('Genel hesaplama ilk if sonucu:' + Result)
              document.getElementById('sonuc').innerHTML =
                '&#37;' + Result.toFixed(3)
              document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
              var inputElement = document.getElementById('subject')
              inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
            } else if (
              secondStep === 'Hayır' &&
              thirthStep === 'Var' &&
              firstStep === 'Yok'
            ) {
              let Result = 100 / thirthStepValue
              let esPayi = 'Bulunmuyor'
              console.log('Genel hesaplama ikinci if sonucu:' + Result)
              document.getElementById('sonuc').innerHTML =
                '&#37;' + Result.toFixed(3)
              document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
              var inputElement = document.getElementById('subject')
              inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
            }
          })
        }
      })
    }
  })

  yokButton.addEventListener('click', () => {
    const thirdStep = 'Yok'
    localStorage.setItem('mirasStepThirdRadio', thirdStep)
    // console.log('3. adım radio button veri:' + thirdStep)
    varButtonSelected = false
    localStorage.setItem('varButtonSelected', varButtonSelected)
    const input = document.querySelector('.input1')
    if (input) {
      input.parentNode.removeChild(input)
      flag = false
    }

    let mirasStepSecondValue = localStorage.getItem('mirasStepSecondValue')
    console.log('eski mirasStepSecondValue değeri:' + mirasStepSecondValue)
    const mirasStepSecondRadio = localStorage.getItem('mirasStepSecondRadio')
    console.log('mirasStepSecondRadio değeri:' + mirasStepSecondRadio)
    if (mirasStepSecondRadio === 'Evet') {
      mirasStepSecondValue = 50
      console.log(
        'mirasStepSecondValueNew değeri güncellendi:' + mirasStepSecondValue
      )
      localStorage.setItem('mirasStepSecondValue', mirasStepSecondValue)
    } else if (mirasStepSecondRadio === 'Hayır') {
      mirasStepSecondValue = null // mirasStepSecondRadio 'Hayır' ise değeri null yap
    }
    console.log('mirasStepSecondRadio değeri:' + mirasStepSecondRadio)
    console.log('mirasStepSecondValueNew değeri:' + mirasStepSecondValue)
  })
}
// Adım 4
function mirasStep4() {
  intermediateStepsPassed = true
  let mirasStepFourthRadio = document.querySelector(
    '.mirasStepFourth:checked'
  ).value
  localStorage.setItem('mirasStepFourthRadio', mirasStepFourthRadio)
  console.log('Dördüncü input veri:' + mirasStepFourthRadio)
  mirasStep5()
}

// Adım 5
function mirasStep5() {
  intermediateStepsPassed = true
  let skipSteps = false
  const ileriButton = document.querySelector('.nextExtrSecond')
  const varButton = document.getElementById('success-9-outlined')
  const yokButton = document.getElementById('success-10-outlined')
  var secondStep = localStorage.getItem('mirasStepSecondRadio')
  var secondStepValue = localStorage.getItem('mirasStepSecondValue')
  var thirthStep = localStorage.getItem('mirasStepThirdRadio')
  var fourthStep = localStorage.getItem('mirasStepFourthRadio')

  varButton.addEventListener('click', () => {
    let mirasStepFifthRadio = document.querySelector(
      '.mirasStepFifth:checked'
    ).value
    localStorage.setItem('mirasStepFifthRadio', mirasStepFifthRadio)
    var fifthStep = mirasStepFifthRadio
    skipSteps = true
    ileriButton.addEventListener('click', () => {
      if (skipSteps) {
        // Aradaki adımları atlayan işlemleri gerçekleştirin
        currentTab = tabContents.length - 2
        tabContents.forEach((content, index) => {
          if (index !== currentTab) {
            content.style.display = 'none'
          } else {
            content.style.display = 'block'
          }
        })
        // stepCounter.textContent = `Adım ${currentTab + 1} / ${
        //   tabContents.length
        // }`
        progressBar.style.width = '100%'
      }
      if (
        secondStep === 'Evet' &&
        thirthStep === 'Yok' &&
        fourthStep === 'Evet' &&
        fifthStep === 'Evet'
      ) {
        let esPayi = secondStepValue
        let Result = (100 - secondStepValue) / 2
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result.toFixed(3)
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Evet' &&
        thirthStep === 'Yok' &&
        fourthStep === 'Hayır' &&
        fifthStep === 'Evet'
      ) {
        let esPayi = secondStepValue
        let Result = 100 - secondStepValue
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result.toFixed(3)
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Hayır' &&
        thirthStep === 'Yok' &&
        fourthStep === 'Hayır' &&
        fifthStep === 'Evet'
      ) {
        secondStepValue = 0
        let esPayi = secondStepValue
        let Result = 100 - secondStepValue
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result.toFixed(3)
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Hayır' &&
        thirthStep === 'Yok' &&
        fourthStep === 'Evet' &&
        fifthStep === 'Evet'
      ) {
        secondStepValue = 0
        let esPayi = secondStepValue
        let Result = (100 - secondStepValue) / 2
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result.toFixed(3)
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      }
    })
  })

  yokButton.addEventListener('click', () => {
    let mirasStepFifthRadio = document.querySelector(
      '.mirasStepFifth:checked'
    ).value
    localStorage.setItem('mirasStepFifthRadio', mirasStepFifthRadio)
    var fifthStep = mirasStepFifthRadio
    if (fourthStep === 'Evet') {
      ileriButton.addEventListener('click', () => {
        skipSteps = true
        if (skipSteps) {
          // Aradaki adımları atlayan işlemleri gerçekleştirin
          currentTab = tabContents.length - 2
          tabContents.forEach((content, index) => {
            if (index !== currentTab) {
              content.style.display = 'none'
            } else {
              content.style.display = 'block'
            }
          })
          // stepCounter.textContent = `Adım ${currentTab + 1} / ${
          //   tabContents.length
          // }`
          progressBar.style.width = '100%'
        }
        if (
          secondStep === 'Evet' &&
          thirthStep === 'Yok' &&
          fourthStep === 'Evet' &&
          fifthStep === 'Hayır'
        ) {
          let esPayi = secondStepValue
          let Result = 100 - secondStepValue
          console.log('Genel hesaplama ilk if 4 yok sonucu:' + Result)
          document.getElementById('sonuc').innerHTML =
            '&#37;' + Result.toFixed(3)
          document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
          var inputElement = document.getElementById('subject')
          inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
        } else if (
          secondStep === 'Hayır' &&
          thirthStep === 'Yok' &&
          fourthStep === 'Evet' &&
          fifthStep === 'Hayır'
        ) {
          secondStepValue = 0
          let esPayi = secondStepValue
          let Result = 100 - secondStepValue
          console.log('Genel hesaplama ilk if sonucu:' + Result)
          document.getElementById('sonuc').innerHTML =
            '&#37;' + Result.toFixed(3)
          document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
          var inputElement = document.getElementById('subject')
          inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
        }
      })
    }
    mirasStep6()
  })
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
  intermediateStepsPassed = true
  var firstStep = localStorage.getItem('mirasStepOneRadio')
  var secondStep = localStorage.getItem('mirasStepSecondRadio')
  var secondStepValue = localStorage.getItem('mirasStepSecondValue')
  console.log('KARDEŞLER 6. ADIMI:' + secondStepValue)
  var thirthStep = localStorage.getItem('mirasStepThirdRadio')
  var fourthStep = localStorage.getItem('mirasStepFourthRadio')
  var fifthStep = localStorage.getItem('mirasStepFifthRadio')

  const ileriButton = document.querySelector('.nextExtrThird')
  const varButtonSixth = document.getElementById('success-11-outlined')
  const yokButtonSixth = document.getElementById('success-12-outlined')
  let flag = false // flag değişkeni oluşturuldu
  let skipSteps = false
  varButtonSixth.addEventListener('click', () => {
    const sixthStep = 'Var' // Var butonunun değeri
    localStorage.setItem('mirasStepSixthRadio', sixthStep)
    console.log('6. adım radio button veri:' + sixthStep)
    if (!flag) {
      // flag değişkeni kontrol edildi
      flag = true
      varButtonSixth.style.display = 'none'
      yokButtonSixth.style.display = 'none'
      const input2 = document.createElement('input')
      input2.classList.add('input2', 'form-control', 'input-lg')
      input2.type = 'number'
      input2.placeholder = 'Sayı giriniz'
      const stepContainer2 = document.querySelector('.stepContainer2')
      stepContainer2.appendChild(input2)
      input2.addEventListener('change', () => {
        const input2Value = input2.value
        localStorage.setItem('input2Value', input2Value)
        console.log('6. adım input veri (var seçilmişse):' + input2Value)
        if (input2Value !== '') {
          var sixthStepValue = localStorage.getItem('input2Value')
          console.log('KARDEŞLER 6. ADIM İKİ: ' + sixthStepValue)
          skipSteps = true
          ileriButton.addEventListener('click', () => {
            if (skipSteps) {
              // Aradaki adımları atlayan işlemleri gerçekleştirin
              currentTab = tabContents.length - 2
              tabContents.forEach((content, index) => {
                if (index !== currentTab) {
                  content.style.display = 'none'
                } else {
                  content.style.display = 'block'
                }
              })
              // stepCounter.textContent = `Adım ${currentTab + 1} / ${
              //   tabContents.length
              // }`
              progressBar.style.width = '100%'
            }
            if (
              secondStep === 'Evet' &&
              thirthStep === 'Yok' &&
              firstStep === 'Yok' &&
              fourthStep === 'Hayır' &&
              fifthStep === 'Hayır'
            ) {
              let a = 100 - secondStepValue
              let Result = a / sixthStepValue
              let esPayi = secondStepValue
              console.log('Genel hesaplama ilk if sonucu:' + Result)
              document.getElementById('sonuc').innerHTML =
                '&#37;' + Result.toFixed(3)
              document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
              var inputElement = document.getElementById('subject')
              inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
            }
            if (
              secondStep === 'Hayır' &&
              thirthStep === 'Yok' &&
              firstStep === 'Yok' &&
              fourthStep === 'Hayır' &&
              fifthStep === 'Hayır'
            ) {
              secondStepValue = 0
              let a = 100 - secondStepValue
              let Result = a / sixthStepValue
              let esPayi = secondStepValue
              console.log('Genel hesaplama ilk if sonucu:' + Result)
              document.getElementById('sonuc').innerHTML =
                '&#37;' + Result.toFixed(3)
              document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
              var inputElement = document.getElementById('subject')
              inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
            }
          })
        }
      })
    }
  })

  yokButtonSixth.addEventListener('click', () => {
    const sixthStep = 'Yok' // Yok butonunun değeri
    localStorage.setItem('mirasStepSixthRadio', sixthStep)
    console.log('6. adım radio button veri:' + sixthStep)
    const input2 = document.querySelector('.input2')
    if (input2) {
      input2.parentNode.removeChild(input2) // input kaldırıldı
      flag = false // flag değişkeni sıfırlandı
    }
  })
}

// function mirasStep6() {
//   const varButtonSixth = document.getElementById('success-11-outlined')
//   const yokButtonSixth = document.getElementById('success-12-outlined')
//   let flag = false // flag değişkeni oluşturuldu

//   varButtonSixth.addEventListener('click', () => {
//     const sixthStep = 'Var' // Var butonunun değeri
//     localStorage.setItem('mirasStepSixthRadio', sixthStep)
//     console.log('6. adım radio button veri:' + sixthStep)
//     if (!flag) {
//       // flag değişkeni kontrol edildi
//       flag = true
//       varButtonSixth.style.display = 'none'
//       yokButtonSixth.style.display = 'none'
//       const input2 = document.createElement('input')
//       input2.classList.add('input2', 'form-control', 'input-lg')
//       input2.type = 'number'
//       input2.placeholder = 'Sayı giriniz'
//       const stepContainer2 = document.querySelector('.stepContainer2')
//       stepContainer2.appendChild(input2)
//       input2.addEventListener('change', () => {
//         const input2Value = input2.value
//         localStorage.setItem('input2Value', input2Value)
//         console.log('6. adım input veri (var seçilmişse):' + input2Value)
//       })
//     }
//   })

//   yokButtonSixth.addEventListener('click', () => {
//     const sixthStep = 'Yok' // Yok butonunun değeri
//     localStorage.setItem('mirasStepSixthRadio', sixthStep)
//     console.log('6. adım radio button veri:' + sixthStep)
//     const input2 = document.querySelector('.input2')
//     if (input2) {
//       input2.parentNode.removeChild(input2) // input kaldırıldı
//       flag = false // flag değişkeni sıfırlandı
//     }
//   })
// }

// Adım 7
function mirasStep7() {
  intermediateStepsPassed = true
  let mirasStepSeventhRadio = document.querySelector(
    '.mirasStepSeventh:checked'
  ).value
  localStorage.setItem('mirasStepSeventhRadio', mirasStepSeventhRadio)
  console.log('Yedinci input veri:' + mirasStepSeventhRadio)
  mirasStep8()
}

// Adım 8
function mirasStep8() {
  intermediateStepsPassed = true
  let skipSteps = false
  const ileriButton = document.querySelector('.nextExtrFourth')
  const varButton = document.getElementById('success-15-outlined')
  const yokButton = document.getElementById('success-16-outlined')
  var secondStep = localStorage.getItem('mirasStepSecondRadio')
  var secondStepValue = localStorage.getItem('mirasStepSecondValue')
  var thirthStep = localStorage.getItem('mirasStepThirdRadio')
  var seventhStep = localStorage.getItem('mirasStepSeventhRadio')
  // var eightStep = localStorage.getItem('mirasStepEighthRadio')
  varButton.addEventListener('click', () => {
    let mirasStepEighthRadio = document.querySelector(
      '.mirasStepEighth:checked'
    ).value
    localStorage.setItem('mirasStepEighthRadio', mirasStepEighthRadio)
    console.log('Sekizinci input veri:' + mirasStepEighthRadio)
    skipSteps = true
    ileriButton.addEventListener('click', () => {
      if (skipSteps) {
        // Aradaki adımları atlayan işlemleri gerçekleştirin
        currentTab = tabContents.length - 2
        tabContents.forEach((content, index) => {
          if (index !== currentTab) {
            content.style.display = 'none'
          } else {
            content.style.display = 'block'
          }
        })
        // stepCounter.textContent = `Adım ${currentTab + 1} / ${
        //   tabContents.length
        // }`
        progressBar.style.width = '100%'
      }
      let eightStep = 'Evet'
      if (
        secondStep === 'Evet' &&
        thirthStep === 'Yok' &&
        seventhStep === 'Evet' &&
        eightStep === 'Evet'
      ) {
        secondStepValue = 75
        let esPayi = secondStepValue
        let Result = (100 - secondStepValue) / 2
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Evet' &&
        thirthStep === 'Yok' &&
        seventhStep === 'Hayır' &&
        eightStep === 'Evet'
      ) {
        secondStepValue = 75
        let esPayi = secondStepValue
        let Result = 100 - secondStepValue
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Hayır' &&
        thirthStep === 'Yok' &&
        seventhStep === 'Hayır' &&
        eightStep === 'Evet'
      ) {
        secondStepValue = 0
        let esPayi = secondStepValue
        let Result = 100 - secondStepValue
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      } else if (
        secondStep === 'Hayır' &&
        thirthStep === 'Yok' &&
        seventhStep === 'Evet' &&
        eightStep === 'Evet'
      ) {
        secondStepValue = 0
        let esPayi = secondStepValue
        let Result = (100 - secondStepValue) / 2
        console.log('Genel hesaplama ilk if sonucu:' + Result)
        document.getElementById('sonuc').innerHTML = '&#37;' + Result
        document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
        var inputElement = document.getElementById('subject')
        inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
      }
    })
  })

  yokButton.addEventListener('click', () => {
    let mirasStepEighthRadio = document.querySelector(
      '.mirasStepEighth:checked'
    ).value
    localStorage.setItem('mirasStepEighthRadio', mirasStepEighthRadio)
    console.log('Sekizinci input veri:' + mirasStepEighthRadio)
    if (seventhStep === 'Evet') {
      ileriButton.addEventListener('click', () => {
        skipSteps = true
        if (skipSteps) {
          // Aradaki adımları atlayan işlemleri gerçekleştirin
          currentTab = tabContents.length - 2
          tabContents.forEach((content, index) => {
            if (index !== currentTab) {
              content.style.display = 'none'
            } else {
              content.style.display = 'block'
            }
          })
          // stepCounter.textContent = `Adım ${currentTab + 1} / ${
          //   tabContents.length
          // }`
          progressBar.style.width = '100%'
        }
        let eightStep = 'Hayır'
        if (
          secondStep === 'Evet' &&
          thirthStep === 'Yok' &&
          seventhStep === 'Evet' &&
          eightStep === 'Hayır'
        ) {
          secondStepValue = 75
          let esPayi = secondStepValue
          let Result = 100 - secondStepValue
          console.log('Genel hesaplama ilk if sonucu:' + Result)
          document.getElementById('sonuc').innerHTML = '&#37;' + Result
          document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
          var inputElement = document.getElementById('subject')
          inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
        } else if (
          secondStep === 'Hayır' &&
          thirthStep === 'Yok' &&
          seventhStep === 'Evet' &&
          eightStep === 'Hayır'
        ) {
          secondStepValue = 0
          let esPayi = secondStepValue
          let Result = 100 - secondStepValue
          console.log('Genel hesaplama ilk if sonucu:' + Result)
          document.getElementById('sonuc').innerHTML = '&#37;' + Result
          document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
          var inputElement = document.getElementById('subject')
          inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
        }
      })
    }
    mirasStep9()
  })
}

// Adım 9
function mirasStep9() {
  intermediateStepsPassed = true
  console.log(currentTab)
  console.log('9.ADIM BOOLEAN: ' + intermediateStepsPassed)
  // let mirasStepNinthRadio = document.querySelector(".mirasStepNinth:checked").value;
  const varButtonNinth = document.getElementById('success-17-outlined')
  const yokButtonNinth = document.getElementById('success-18-outlined')
  // var ninthStepValue = localStorage.getItem('input3Value')
  let flag = false
  var secondStep = localStorage.getItem('mirasStepSecondRadio')
  var secondStepValue = localStorage.getItem('mirasStepSecondValue')
  varButtonNinth.addEventListener('click', () => {
    let mirasStepNinthRadio = 'Var'
    localStorage.setItem('mirasStepNinthRadio', mirasStepNinthRadio)
    let nineStep = mirasStepNinthRadio
    if (!flag) {
      // flag değişkeni kontrol edildi
      flag = true
      varButtonNinth.style.display = 'none'
      yokButtonNinth.style.display = 'none'
      const input3 = document.createElement('input')
      input3.classList.add('input3', 'form-control', 'input-lg')
      input3.type = 'number'
      input3.placeholder = 'Sayı giriniz'
      const stepContainer3 = document.querySelector('.stepContainer3')
      stepContainer3.appendChild(input3)
      console.log('AAAAAAA:' + stepContainer3.querySelector('input'))

      input3.addEventListener('change', () => {
        const input3Value = input3.value
        localStorage.setItem('input3Value', input3Value)
        console.log('6. adım input veri (var seçilmişse):' + input3Value)
      })
    }
    var ninthStepValue = localStorage.getItem('input3Value')
    if (nineStep === 'Var' && secondStep === 'Evet') {
      secondStepValue = 75
      let esPayi = secondStepValue
      let Result = (100 - secondStepValue) / ninthStepValue
      console.log('Genel hesaplama ilk if sonucu:' + Result)
      document.getElementById('sonuc').innerHTML = '&#37;' + Result
      document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
      var inputElement = document.getElementById('subject')
      inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
    } else if (nineStep === 'Var' && secondStep === 'Hayır') {
      secondStepValue = 0
      let esPayi = secondStepValue
      let Result = (100 - secondStepValue) / ninthStepValue
      console.log('Genel hesaplama ilk if sonucu 2:' + Result)
      document.getElementById('sonuc').innerHTML = '&#37;' + Result
      document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
      var inputElement = document.getElementById('subject')
      inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
    }
  })

  yokButtonNinth.addEventListener('click', () => {
    let mirasStepNinthRadio = 'Yok'
    localStorage.setItem('mirasStepNinthRadio', mirasStepNinthRadio)
    let nineStep = mirasStepNinthRadio
    if (nineStep === 'Yok' && secondStep === 'Evet') {
      secondStepValue = 100
      let esPayi = secondStepValue
      let Result = 100 - secondStepValue
      console.log('Genel hesaplama ilk if sonucu:' + Result)
      document.getElementById('sonuc').innerHTML = '&#37;' + Result
      document.getElementById('sonuc2').innerHTML = '&#37;' + esPayi
      var inputElement = document.getElementById('subject')
      inputElement.value = `Eş Payı = ${esPayi} | Mirasçı Payı = ${Result}`
    }
  })
}

function handleGeriButton() {
  const currentStep = localStorage.getItem('currentStep')

  if (currentStep === '10') {
    intermediateStepsPassed = false
    console.log(intermediateStepsPassed)

    if (intermediateStepsPassed === 'true') {
      // Kullanıcı 1. adımdan direkt geçmediği için geçtiği adımlara yönlendirme işlemleri burada yapılır
    } else {
      localStorage.setItem('currentStep', '1')
      currentTab = 0 // İlk adımın indeksi
      tabContents.forEach((content, index) => {
        if (index !== currentTab) {
          content.style.display = 'none'
        } else {
          content.style.display = 'block'
        }
      })
      // stepCounter.textContent = `Adım ${currentTab + 1} / ${tabContents.length}`;
      progressBar.style.width = '0%'
    }
  } else if (currentStep === '3') {
    // Kullanıcı 3. adımdan direkt geçtiği için form adımına (10. adım) yönlendirme işlemleri burada yapılır
    localStorage.setItem('currentStep', '10')
    currentTab = tabContents.length - 2
    tabContents.forEach((content, index) => {
      if (index !== currentTab) {
        content.style.display = 'none'
      } else {
        content.style.display = 'block'
      }
    })
    // stepCounter.textContent = `Adım ${currentTab + 1} / ${
    //   tabContents.length
    // }`
    progressBar.style.width = '100%'
  }
}

// Geri butonuna tıklandığında handleGeriButton fonksiyonunun çağrılması
const backButton = document.getElementById('geriButton')
backButton.addEventListener('click', handleGeriButton)
