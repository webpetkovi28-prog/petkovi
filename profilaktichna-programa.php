<?php
    // Дефинираме заглавието на страницата
    $pageTitle = "Профилактична програма | Ветеринарен център Петкови";

    include 'header.php'; // Включваме хедъра
?>
  <!-- Flatpickr CSS за избор на дати -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- Основен стил -->
  <link rel="stylesheet" href="css/style2.css" />
  <!-- Допълнителен стил за програмите -->
  <link rel="stylesheet" href="css/program-style.css" />
  <link rel="stylesheet" href="css/program-style-additions.css" />

  <!-- Основно съдържание -->
  <main class="main-content">
    <div class="container">
      <!-- Избор на програма (4 бутона) -->
      <section class="services-section program-selection" id="programSelection">
        <h2 class="section-title">Изготви си сам профилактична програма</h2>
        <div class="program-list">
          <a href="#" class="program-item program-item-1" data-program="dog-newborn">
            <div class="program-icon"><i class="fas fa-bone"></i></div>
            <h3>КУЧЕ НОВОРОДЕНО</h3>
          </a>
          <a href="#" class="program-item program-item-2" data-program="dog-adult">
            <div class="program-icon"><i class="fas fa-dog"></i></div>
            <h3>КУЧЕ ОТРАСНАЛО</h3>
          </a>
          <a href="#" class="program-item program-item-3" data-program="cat-newborn">
            <div class="program-icon"><i class="fas fa-paw"></i></div>
            <h3>КОТЕ НОВОРОДЕНО</h3>
          </a>
          <a href="#" class="program-item program-item-4" data-program="cat-adult">
            <div class="program-icon"><i class="fas fa-cat"></i></div>
            <h3>КОТЕ ОТРАСНАЛО</h3>
          </a>
        </div>
      </section>

      <!-- Контейнер за зареждане на избраната програма -->
      <div id="programContent"></div>

      <!-- Шаблон за КУЧЕ НОВОРОДЕНО -->
      <template id="template-dog-newborn">
        <section class="program-header">
          <h2 class="section-title">Профилактична програма за куче новородено</h2>
        </section>
        <section class="program-form" id="programForm">
          <div class="form-container">
            <div class="form-header">
              <div class="form-icon"><i class="fas fa-dog"></i></div>
              <div class="form-title">
                <h3>Въведете данните за вашето куче</h3>
                <p>За да изчислите профилактичната програма, изберете рождената дата на кучето.</p>
              </div>
            </div>
            <form id="prophylacticForm" class="prophylactic-form">
              <div class="form-group">
                <label for="fname">Вашите три имена:</label>
                <input type="text" id="fname" name="fname" placeholder="Въведете трите си имена">
              </div>
              <div class="form-group">
                <label for="animal">Порода на кучето:</label>
                <input type="text" id="animal" name="animal" placeholder="Въведете породата на кучето">
              </div>
              <div class="form-group">
                <label for="fav">Име на кучето:</label>
                <input type="text" id="fav" name="fav" placeholder="Въведете името на кучето">
              </div>
              <div class="form-group">
                <label for="pacn">Пациентски номер:</label>
                <input type="text" id="pacn" name="pacn" placeholder="Въведете пациентски номер">
              </div>
              <div class="form-group">
                <label for="date">Дата на раждане:</label>
                <input type="text" id="date" name="date" class="datepicker" placeholder="Изберете дата" required>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn-primary" id="calculateBtn">Изчисли</button>
              </div>
            </form>
          </div>
        </section>
        <section class="program-results" id="programResults">
          <div id="printArea">
            <!-- Лого за печат -->
            <div class="print-logo">
              <img src="images/logo.jpg" alt="Лого Ветеринарен център Петкови">
            </div>
            <!-- Заглавие -->
            <div class="results-header">
              <h3>Индивидуална профилактична програма</h3>
              <p class="results-timestamp" id="resultTimestamp"></p>
            </div>
            <!-- Данни на пациента -->
            <div class="patient-data">
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Стопанин:</span>
                  <span class="data-value" id="resultOwner"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Порода на кучето:</span>
                  <span class="data-value" id="resultBreed"></span>
                </div>
              </div>
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Име на кучето:</span>
                  <span class="data-value" id="resultName"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Пациентски номер:</span>
                  <span class="data-value" id="resultPatientNo"></span>
                </div>
              </div>
            </div>
            <!-- Timeline на програмата -->
            <div class="results-timeline">
              <div class="timeline-header">
                <h4>Препоръчителната едногодишна програма на новородено куче*</h4>
                <p class="birthdate-display"><strong>Рождена дата:</strong> <span id="resultBirthDate"></span></p>
              </div>
              <div class="timeline">
                <div class="timeline-items" id="timelineItems">
                  <!-- тук се генерират елементите на timeline -->
                </div>
              </div>
            </div>
            <!-- Бележки -->
            <div class="results-notes">
              <p><em>* Препоръчителната едногодишна програма на новородено куче</em></p>
            </div>
          </div>
          <!-- Бутони за действия -->
          <div class="results-actions">
            <button type="button" class="btn-outline" id="backBtn">Нови изчисления</button>
            <button type="button" class="btn-primary" id="savePdfBtn">
              <i class="fas fa-file-pdf"></i> Запази в PDF
            </button>
            <!-- Нов бутон за Google Calendar -->
            <button type="button" class="btn-primary" id="saveCalendarBtn">
              <i class="fas fa-calendar-check"></i> Запази в Google Calendar
            </button>
          </div>
        </section>
      </template>

      <!-- Шаблон за КУЧЕ ОТРАСНАЛО -->
      <template id="template-dog-adult">
        <section class="program-header">
          <h2 class="section-title">Профилактична програма за куче отраснало</h2>
        </section>
        <section class="program-form" id="programForm">
          <div class="form-container">
            <div class="form-header">
              <div class="form-icon"><i class="fas fa-dog"></i></div>
              <div class="form-title">
                <h3>Въведете данните за вашето куче</h3>
                <p>За да изчислите профилактичната програма, въведете датите в полетата за съответните ваксинации във формат: <b>дд.мм.гггг</b></p>
                <p><small>Ако нямате поставена ваксина, оставете полетата празни, системата автоматично ще ви предложи необходимите дати на липсващите ваксинации!</small></p>
              </div>
            </div>
            <form id="prophylacticForm" class="prophylactic-form">
              <div class="form-group">
                <label for="fname">Вашите три имена:</label>
                <input type="text" id="fname" name="fname" placeholder="Въведете трите си имена">
              </div>
              <div class="form-group">
                <label for="animal">Порода на кучето:</label>
                <input type="text" id="animal" name="animal" placeholder="Въведете породата на кучето">
              </div>
              <div class="form-group">
                <label for="fav">Име на кучето:</label>
                <input type="text" id="fav" name="fav" placeholder="Въведете името на кучето">
              </div>
              <div class="form-group">
                <label for="pacn">Пациентски номер:</label>
                <input type="text" id="pacn" name="pacn" placeholder="Въведете пациентски номер">
              </div>
              <div class="form-group required-field">
                <label for="date">Последното вътрешно обезпаразитяване:</label>
                <input type="text" id="date" name="date" class="datepicker" placeholder="Изберете дата (задължително)" required>
              </div>
              <div class="form-group">
                <label for="date1">Последната годишна ваксина:</label>
                <input type="text" id="date1" name="date1" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-group">
                <label for="date4">Кучешка кашлица (назална ваксина):</label>
                <input type="text" id="date4" name="date4" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-group">
                <label for="date2">Последната лаймска ваксина:</label>
                <input type="text" id="date2" name="date2" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-group">
                <label for="date3">Последната кожна ваксина:</label>
                <input type="text" id="date3" name="date3" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-actions">
                <button type="submit" class="btn-primary" id="calculateBtn">Изчисли</button>
              </div>
            </form>
          </div>
        </section>
        <section class="program-results" id="programResults">
          <div id="printArea">
            <div class="print-logo">
              <img src="images/logo.jpg" alt="Лого Ветеринарен център Петкови">
            </div>
            <div class="results-header">
              <h3>Индивидуална профилактична програма</h3>
              <p class="results-timestamp" id="resultTimestamp"></p>
            </div>
            <div class="patient-data">
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Стопанин:</span>
                  <span class="data-value" id="resultOwner"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Порода на кучето:</span>
                  <span class="data-value" id="resultBreed"></span>
                </div>
              </div>
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Име на кучето:</span>
                  <span class="data-value" id="resultName"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Пациентски номер:</span>
                  <span class="data-value" id="resultPatientNo"></span>
                </div>
              </div>
            </div>
            <div class="results-timeline">
              <div class="timeline-header">
                <h4>Препоръчителната програма за куче над една година*</h4>
              </div>
              <div class="timeline">
                <div class="timeline-items" id="timelineItems">
                  <!-- елементи на timeline -->
                </div>
              </div>
            </div>
            <div class="results-notes">
              <p><em>* Препоръчителната програма за куче над една година</em></p>
            </div>
          </div>
          <div class="results-actions">
            <button type="button" class="btn-outline" id="backBtn">Нови изчисления</button>
            <button type="button" class="btn-primary" id="savePdfBtn">
              <i class="fas fa-file-pdf"></i> Запази в PDF
            </button>
            <!-- Нов бутон за Google Calendar -->
            <button type="button" class="btn-primary" id="saveCalendarBtn">
              <i class="fas fa-calendar-check"></i> Запази в Google Calendar
            </button>
          </div>
        </section>
      </template>

      <!-- Шаблон за КОТЕ НОВОРОДЕНО -->
      <template id="template-cat-newborn">
        <section class="program-header">
          <h2 class="section-title">Профилактична програма за новородено коте</h2>
        </section>
        <section class="program-form" id="programForm">
          <div class="form-container">
            <div class="form-header">
              <div class="form-icon"><i class="fas fa-cat"></i></div>
              <div class="form-title">
                <h3>Въведете данните за вашето коте</h3>
                <p>За да изчислите профилактичната програма, въведете рождената дата във формат: <b>дд.мм.гггг</b></p>
              </div>
            </div>
            <form id="prophylacticForm" class="prophylactic-form">
              <div class="form-group">
                <label for="fname">Вашите три имена:</label>
                <input type="text" id="fname" name="fname" placeholder="Въведете трите си имена">
              </div>
              <div class="form-group">
                <label for="animal">Порода на котето:</label>
                <input type="text" id="animal" name="animal" placeholder="Въведете породата на котето">
              </div>
              <div class="form-group">
                <label for="fav">Име на котето:</label>
                <input type="text" id="fav" name="fav" placeholder="Въведете името на котето">
              </div>
              <div class="form-group">
                <label for="pacn">Пациентски номер:</label>
                <input type="text" id="pacn" name="pacn" placeholder="Въведете пациентски номер">
              </div>
              <div class="form-group required-field">
                <label for="date">Въведете дата на раждане на котето:</label>
                <input type="text" id="date" name="date" class="datepicker" placeholder="Изберете дата (задължително)" required>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn-primary" id="calculateBtn">Изчисли</button>
              </div>
            </form>
          </div>
        </section>
        <section class="program-results" id="programResults">
          <div id="printArea">
            <div class="print-logo">
              <img src="images/logo.jpg" alt="Лого Ветеринарен център Петкови">
            </div>
            <div class="results-header">
              <h3>Индивидуална профилактична програма</h3>
              <p class="results-timestamp" id="resultTimestamp"></p>
            </div>
            <div class="patient-data">
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Стопанин:</span>
                  <span class="data-value" id="resultOwner"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Порода на котето:</span>
                  <span class="data-value" id="resultBreed"></span>
                </div>
              </div>
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Име на котето:</span>
                  <span class="data-value" id="resultName"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Пациентски номер:</span>
                  <span class="data-value" id="resultPatientNo"></span>
                </div>
              </div>
            </div>
            <div class="results-timeline">
              <div class="timeline-header">
                <h4>Препоръчителната едногодишна програма за новородено коте*</h4>
              </div>
              <div class="timeline">
                <div class="timeline-items" id="timelineItems">
                  <!-- елементи на timeline -->
                </div>
              </div>
            </div>
            <div class="results-notes">
              <p><em>* Препоръчителната едногодишна програма за новородено коте</em></p>
            </div>
          </div>
          <div class="results-actions">
            <button type="button" class="btn-outline" id="backBtn">Нови изчисления</button>
            <button type="button" class="btn-primary" id="savePdfBtn">
              <i class="fas fa-file-pdf"></i> Запази в PDF
            </button>
            <!-- Нов бутон за Google Calendar -->
            <button type="button" class="btn-primary" id="saveCalendarBtn">
              <i class="fas fa-calendar-check"></i> Запази в Google Calendar
            </button>
          </div>
        </section>
      </template>

      <!-- Шаблон за КОТЕ ОТРАСНАЛО -->
      <template id="template-cat-adult">
        <section class="program-header">
          <h2 class="section-title">Профилактична програма за коте отраснало</h2>
        </section>
        <section class="program-form" id="programForm">
          <div class="form-container">
            <div class="form-header">
              <div class="form-icon"><i class="fas fa-cat"></i></div>
              <div class="form-title">
                <h3>Въведете данните за вашето коте</h3>
                <p>За да изчислите профилактичната програма, въведете датите в полетата за съответните ваксинации във формат: <b>дд.мм.гггг</b></p>
                <p><small>Ако нямате поставена ваксина, оставете полетата празни, системата автоматично ще ви предложи необходимите дати на липсващите ваксинации!</small></p>
              </div>
            </div>
            <form id="prophylacticForm" class="prophylactic-form">
              <div class="form-group">
                <label for="fname">Вашите три имена:</label>
                <input type="text" id="fname" name="fname" placeholder="Въведете трите си имена">
              </div>
              <div class="form-group">
                <label for="animal">Порода на котето:</label>
                <input type="text" id="animal" name="animal" placeholder="Въведете породата на котето">
              </div>
              <div class="form-group">
                <label for="fav">Име на котето:</label>
                <input type="text" id="fav" name="fav" placeholder="Въведете името на котето">
              </div>
              <div class="form-group">
                <label for="pacn">Пациентски номер:</label>
                <input type="text" id="pacn" name="pacn" placeholder="Въведете пациентски номер">
              </div>
              <div class="form-group required-field">
                <label for="date">Последното вътрешно обезпаразитяване:</label>
                <input type="text" id="date" name="date" class="datepicker" placeholder="Изберете дата (задължително)" required>
              </div>
              <div class="form-group">
                <label for="date1">Последната годишна ваксина:</label>
                <input type="text" id="date1" name="date1" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-group">
                <label for="date3">Последната кожна ваксина:</label>
                <input type="text" id="date3" name="date3" class="datepicker" placeholder="Изберете дата (незадължително)">
              </div>
              <div class="form-actions">
                <button type="submit" class="btn-primary" id="calculateBtn">Изчисли</button>
              </div>
            </form>
          </div>
        </section>
        <section class="program-results" id="programResults">
          <div id="printArea">
            <div class="print-logo">
              <img src="images/logo.jpg" alt="Лого Ветеринарен център Петкови">
            </div>
            <div class="results-header">
              <h3>Индивидуална профилактична програма</h3>
              <p class="results-timestamp" id="resultTimestamp"></p>
            </div>
            <div class="patient-data">
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Стопанин:</span>
                  <span class="data-value" id="resultOwner"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Порода на котето:</span>
                  <span class="data-value" id="resultBreed"></span>
                </div>
              </div>
              <div class="data-row">
                <div class="data-item">
                  <span class="data-label">Име на котето:</span>
                  <span class="data-value" id="resultName"></span>
                </div>
                <div class="data-item">
                  <span class="data-label">Пациентски номер:</span>
                  <span class="data-value" id="resultPatientNo"></span>
                </div>
              </div>
            </div>
            <div class="results-timeline">
              <div class="timeline-header">
                <h4>Препоръчителната програма за коте над една година*</h4>
              </div>
              <div class="timeline">
                <div class="timeline-items" id="timelineItems">
                  <!-- елементи на timeline -->
                </div>
              </div>
            </div>
            <div class="results-notes">
              <p><em>* Препоръчителната програма за коте над една година</em></p>
            </div>
          </div>
          <div class="results-actions">
            <button type="button" class="btn-outline" id="backBtn">Нови изчисления</button>
            <button type="button" class="btn-primary" id="savePdfBtn">
              <i class="fas fa-file-pdf"></i> Запази в PDF
            </button>
            <!-- Нов бутон за Google Calendar -->
            <button type="button" class="btn-primary" id="saveCalendarBtn">
              <i class="fas fa-calendar-check"></i> Запази в Google Calendar
            </button>
          </div>
        </section>
      </template>
    </div>
  </main>

  <!-- Външни библиотеки JS -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/bg.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  <!-- Главен скрипт за динамично зареждане на програмите -->
  <script>
    (() => {
      const scriptSrcMap = {
        "dog-newborn": "js/simple-program-script.js",
        "dog-adult": "js/adult-dog-script.js",
        "cat-newborn": "js/kote-newborn-script.js",
        "cat-adult": "js/kote-script.js"
      };
      window.currentProgram = null;
      window.initFunctions = {};

      document.querySelectorAll('.program-item').forEach(item => {
        item.addEventListener('click', (e) => {
          e.preventDefault();
          const programType = item.getAttribute('data-program');
          if (!programType) return;
          document.getElementById('programSelection').style.display = 'none';
          const contentContainer = document.getElementById('programContent');
          contentContainer.innerHTML = '';
          const template = document.getElementById('template-' + programType);
          if (template) {
            contentContainer.appendChild(template.content.cloneNode(true));
          }
          window.currentProgram = programType;

          // Зареждаме съответния js файл динамично, ако не е зареден преди
          if (!window.initFunctions[programType]) {
            const origAddEvent = document.addEventListener;
            let capturedFunc = null;
            document.addEventListener = function(type, listener, options) {
              if (type === 'DOMContentLoaded') {
                capturedFunc = listener;
              } else {
                origAddEvent.call(document, type, listener, options);
              }
            };
            const progScript = document.createElement('script');
            progScript.src = scriptSrcMap[programType];
            progScript.onload = () => {
              document.addEventListener = origAddEvent;
              if (capturedFunc) {
                window.initFunctions[programType] = capturedFunc;
                capturedFunc();
                const form = document.getElementById('prophylacticForm');
                if (form) {
                  form.addEventListener('submit', () => {
                    setTimeout(() => {
                      document.querySelectorAll('.timeline-item-note').forEach(note => {
                        note.textContent = note.textContent.replace(/^---\s*/, '');
                      });
                    }, 0);
                  });
                }
              }
            };
            document.body.appendChild(progScript);
          } else {
            // Ако вече е зареден
            window.initFunctions[programType]();
            const form = document.getElementById('prophylacticForm');
            if (form) {
              form.addEventListener('submit', () => {
                setTimeout(() => {
                  document.querySelectorAll('.timeline-item-note').forEach(note => {
                    note.textContent = note.textContent.replace(/^---\s*/, '');
                  });
                }, 0);
              });
            }
          }
        });
      });

      // "Нови изчисления"
      document.addEventListener('click', (e) => {
        if (e.target.id === 'backBtn') {
          document.getElementById('programContent').innerHTML = '';
          document.getElementById('programSelection').style.display = 'block';
          window.currentProgram = null;
        }
      });
    })();
  </script>

  <!-- Скрипт с обща функция generatePDF, ако използвате такава навсякъде -->
  <script>
    window.generatePDF = function() {
      const printLogo = document.querySelector('.print-logo');
      if (printLogo) printLogo.style.display = 'block';

      const { jsPDF } = window.jspdf;
      const timelineItems = document.querySelectorAll('.timeline-item');
      if (!timelineItems.length) {
        alert('Няма данни за генериране на PDF!');
        return;
      }

      // Събираме инфо
      const tableData = [];
      timelineItems.forEach(item => {
        const date = item.querySelector('.timeline-item-date').textContent;
        const title = item.querySelector('.timeline-item-title').textContent;
        let note = item.querySelector('.timeline-item-note')?.textContent || '';
        note = note.replace(/---/g, '').trim();
        tableData.push({ date, title, note });
      });

      const owner = document.getElementById('resultOwner').textContent;
      const breed = document.getElementById('resultBreed').textContent;
      const petName = document.getElementById('resultName').textContent;
      const patientNo = document.getElementById('resultPatientNo').textContent;

      // Текуща дата/час
      const now = new Date();
      const pad = num => String(num).padStart(2, '0');
      const currentDateTime = `${pad(now.getDate())}.${pad(now.getMonth()+1)}.${now.getFullYear()} / ${pad(now.getHours())}:${pad(now.getMinutes())}:${pad(now.getSeconds())}`;

      // Създаваме container за html2canvas
      const tableContainer = document.createElement('div');
      tableContainer.style.position = 'absolute';
      tableContainer.style.left = '-9999px';
      tableContainer.id = 'pdfTable';

      tableContainer.innerHTML = `
        <div style="font-family: Arial, sans-serif; max-width: 800px; padding: 20px;">
          <div style="text-align: center; margin-bottom: 20px;">
            <img src="images/logo.jpg" alt="Лого" style="height: 80px;">
            <h2 style="margin-top: 10px;">Индивидуална профилактична програма</h2>
            <p style="color: #777;">${currentDateTime}</p>
          </div>
          <div style="margin-bottom: 20px; padding: 15px; background-color: #f8f8f8; border-radius: 5px;">
            <div style="display: flex; margin-bottom: 10px;">
              <div style="flex: 1;"><strong>Стопанин:</strong> ${owner}</div>
              <div style="flex: 1;"><strong>Порода:</strong> ${breed}</div>
            </div>
            <div style="display: flex;">
              <div style="flex: 1;"><strong>Име:</strong> ${petName}</div>
              <div style="flex: 1;"><strong>Пациентски номер:</strong> ${patientNo}</div>
            </div>
          </div>
          <h3>Препоръчителна програма</h3>
          <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <thead>
              <tr style="background-color: #e9f4fc;">
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Дата</th>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Дейност</th>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left;">Забележка</th>
              </tr>
            </thead>
            <tbody>
              ${tableData.map(row => `
                <tr>
                  <td style="border: 1px solid #ddd; padding: 10px;">${row.date}</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">${row.title}</td>
                  <td style="border: 1px solid #ddd; padding: 10px;">${row.note}</td>
                </tr>
              `).join('')}
            </tbody>
          </table>
        </div>
      `;
      document.body.appendChild(tableContainer);

      html2canvas(tableContainer, { scale: 1, useCORS: true })
        .then(canvas => {
          const pdf = new jsPDF('p', 'mm', 'a4');
          const pageWidth = 210;  
          const pageHeight = 297; 

          let imgWidth = pageWidth;
          let imgHeight = canvas.height * imgWidth / canvas.width;

          if (imgHeight > pageHeight) {
            const scaleFactor = pageHeight / imgHeight;
            imgWidth *= scaleFactor;
            imgHeight *= scaleFactor;
          }

          pdf.addImage(canvas.toDataURL('image/jpeg', 1.0), 'JPEG', 0, 0, imgWidth, imgHeight);
          const pdfData = pdf.output('bloburl');
          window.open(pdfData, '_blank');

          document.body.removeChild(tableContainer);
          if (printLogo) printLogo.style.display = 'none';
        })
        .catch(err => {
          console.error("Грешка при PDF:", err);
          document.body.removeChild(tableContainer);
          if (printLogo) printLogo.style.display = 'none';
          alert("Възникна проблем при генерирането на PDF.");
        });
    };
  </script>

  <!-- Нов JS файл за Google Calendar -->
  <script src="js/calendar-utils.js"></script>


  <?php include 'footer.php'; ?>
