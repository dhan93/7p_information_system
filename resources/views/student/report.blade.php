<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <title>Student Report Sekolah 7 Perempuan</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
  <!-- App css -->
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">

</head>

<body class="text-center text-secondary">    
      <div class="border-0 modal-header d-flex justify-content-between">
        <a href="{{route('dashboard')}}" type="button" class="btn btn-light ps-md-3 pe-md-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" class="align-bottom" fill="gray"><path d="M30.83 14.83L28 12 16 24l12 12 2.83-2.83L21.66 24z"/></svg>
          Back
        </a>
        <h5 class="modal-title fst-italic fs-4 fw-bold" id="previewModalLabel">{{$user->name}}</h5>
        <button type="button" id="pdfSaver" class="btn btn-primary px-md-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" class="align-bottom" fill="white"><path d="M38 18h-8V6H18v12h-8l14 14 14-14zM10 36v4h28v-4H10z"/></svg>
          Save
        </button>
        <button class="btn btn-primary px-md-4 d-none" id="pdfSaverLoading" type="button" disabled>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          <span>Save</span>
        </button>
      </div>
      <div class="flex-wrap modal-body d-flex justify-content-center">
        <div id="certificatePreview" class="studentReportPreview position-relative" style="font-family:femina">
          <span id="certificateReg" class="position-absolute text-start d-block">No. S7P-{{$report->course_id}}.10.{{str_pad($report->user_id,4,"0",STR_PAD_LEFT)}}</span>
          <span id="certificateName" class="text-center position-absolute d-block w-100">{{$user->name}}</span>
        </div>
        <div id="reportPreview" class="studentReportPreview position-relative" style="font-family:femina">
          <span id="reportReg" class="text-center position-absolute d-block">No. R7P-{{$report->course_id}}.10.{{str_pad($report->user_id,4,"0",STR_PAD_LEFT)}}</span>
          <span id="reportName" class="text-center position-absolute d-block">{{$user->name}}</span>
          <div id="reportScoreWrapper" class="position-absolute">
            <span id="reportScore" class="position-absolute">{{$report->grade}}</span>
          </div>
        </div>
      </div>

<!-- bs js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Supabase js -->
{{-- <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js"></script> --}}

<!-- jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="assets/js/femina-normal.js"></script>
<script src="assets/js/certificatebg.js"></script>
<script src="assets/js/reportbg.js"></script>
{{-- <script src="assets/js/certificate-mockup.js"></script>
<script src="assets/js/report-mockup.js"></script> --}}
<!-- <script src="assets/js/Roboto-Regular-normal.js"></script> -->
{{-- <script src="assets/js/passed.js"></script>
<script src="assets/js/failed.js"></script> --}}

<!-- App js -->
{{-- <script src="assets/js/index.js"></script> --}}

<script>
let studentData = {
  display_name: "{{$user->name}}",
  student_id: "{{str_pad($report->user_id,4,"0",STR_PAD_LEFT)}}",
  score:"{{$report->grade}}"
}

// let studentData = {
//   display_name: "Welly Nurliana",
//   student_id: "{{str_pad($report->user_id,4,"0",STR_PAD_LEFT)}}",
//   score:"A+"
// }

document.getElementById('pdfSaver').addEventListener('click', function() {
  savePDF(studentData), {once: true}
})
const { jsPDF } = window.jspdf;
function savePDF(data) {
  // disabling action button
  document.getElementById('pdfSaver').classList.add("d-none")
  document.getElementById('pdfSaverLoading').classList.remove("d-none")

  const doc = new jsPDF({
    unit: "mm",
    format: [210, 210]
  });
  // page 1
  doc.addImage(certificateBG, 'JPEG', 0, 0, 210, 210)
  // page 1 name
  doc.setFont('Femina', 'normal');
  doc.setTextColor(197, 88, 132)
  doc.setFontSize(50)
  doc.text(data.display_name, 105, 130, {
    align: 'center'
  });
  // page 1 reg number
  doc.setFont('Helvetica', 'bolditalic')
  doc.setTextColor(168, 129, 54)
  doc.setFontSize(11)
  doc.text('No. S7P-4.10.'+data.student_id, 20, 23)
  // page 2
  doc.addPage()
  doc.addImage(reportBG, 'PNG', 0, 0, 210, 210)
  // page 2 name
  doc.setFont('Femina', 'normal');
  doc.setTextColor(64, 64, 64)
  doc.setFontSize(40)
  doc.text(data.display_name, 61, 116.5, {
    align: 'center'
  });
  // page 2 grade
  doc.setFont('Helvetica', 'normal')
  doc.setTextColor(0, 0, 0)
  doc.setFontSize(13.5)
  doc.text(data.score, 82.0, 128.6, {
    align: 'left'
  });
  // if (passingGrade.includes(data.score)) {
  //   doc.addImage(textPassed, 'PNG', 28.4, 128.0, 65.7, 29.0)
  // } else {
  //   doc.addImage(textFailed, 'PNG', 28.4, 128.0, 65.7, 29.0)
  // }
  // page 2 reg number
  doc.setTextColor(255, 255, 255)
  doc.setFontSize(10.8)
  doc.text('No. R7P-4.10.'+data.student_id, 54.8, 62.7, {
    align: 'center'
  });
  doc.save("S7P_Season4_Study_Report.pdf");  

  // reenabling action button
  document.getElementById('pdfSaver').classList.remove("d-none")
  document.getElementById('pdfSaverLoading').classList.add("d-none")
}
</script>

</body>
</html>