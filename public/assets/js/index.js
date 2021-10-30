// sign in form handler
var previewModal = new bootstrap.Modal(document.getElementById('previewModal'), {keyboard: false})
const passingGrade = ['A', 'B', 'C']

document.addEventListener('DOMContentLoaded', function (event) {
  var signInForm = document.querySelector('#log-in')
  signInForm.onsubmit = signInSubmitted.bind(signInForm)
})
const signInSubmitted = (event) => {
  event.preventDefault()
  const name = event.target[0].value
  const id = event.target[1].value
  document.getElementById("signinError").classList.add("d-none");
  document.getElementById('formSubmitter').classList.add("d-none")
  document.getElementById('formSubmitterLoading').classList.remove("d-none")
  getStudentData(id, name)
}

// get student data from supabase
var supabaseUrl = 'https://anjsnbxekrutmxaoimcf.supabase.co'
var supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyb2xlIjoiYW5vbiIsImlhdCI6MTYyMjIxMDQ3NiwiZXhwIjoxOTM3Nzg2NDc2fQ.itLV4MOggQL_8unyAyUa7zeJ90F3UqtbGcghw43R2rg'
var supabase = supabase.createClient(supabaseUrl, supabaseKey)
var error = ''
var studentData = {}
async function getStudentData(id, name) {
  try {
    studentData = await supabase
      .from('s3')
      .select('*')
      .ilike('id', id)
    document.getElementById('formSubmitter').classList.remove("d-none")
    document.getElementById('formSubmitterLoading').classList.add("d-none")       
    if ( studentData.data.length ) {
      // replace placeholder
      let valueObj = studentData.data[0]
      replacer('previewModalLabel', valueObj.full_name)
      replacer('certificateName', valueObj.display_name)
      replacer('reportName', valueObj.display_name)
      replacer('reportScore', valueObj.score)
      replacer('reportReg', 'No. S7P-3.08.'+ valueObj.student_id)
      replacer('certificateReg', 'No. S7P-3.08.'+ valueObj.student_id)
      if (passingGrade.includes(valueObj.score)) {
        document.getElementById('reportScoreWrapper').classList.add("isPass");
      } else {
        document.getElementById('reportScoreWrapper').classList.remove("isPass");
      }
      
      // activate modal
      previewModal.show()
      return false;
    } else {
      error = 'data tidak ditemukan, silakan cek kembali penulisan nama dan nomor WhatsApp anda'
      document.getElementById("signinError").classList.remove("d-none")
    }
  } catch (error) {
    document.getElementById('formSubmitter').classList.remove("d-none")
    document.getElementById('formSubmitterLoading').classList.add("d-none")
    document.getElementById("signinError").classList.remove("d-none")
    document.getElementById("signinError").innerHTML = error.message
  }
}

// PDF Generation
document.getElementById('pdfSaver').addEventListener('click', function() {
  savePDF(studentData.data[0]), {once: true}
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
  doc.text('No. S7P-3.08.'+data.student_id, 20, 23)
  // page 2
  doc.addPage()
  doc.addImage(reportBG, 'PNG', 0, 0, 210, 210)
  // page 2 name
  doc.setFont('Femina', 'normal');
  doc.setTextColor(90, 90, 90)
  doc.setFontSize(40)
  doc.text(data.display_name, 61, 121.3, {
    align: 'center'
  });
  // page 2 grade
  doc.setFont('Helvetica', 'bolditalic')
  doc.setTextColor(47, 47, 47)
  doc.setFontSize(14.7)
  doc.text(data.score, 72.0, 141.5, {
    align: 'left'
  });
  if (passingGrade.includes(data.score)) {
    doc.addImage(textPassed, 'PNG', 28.4, 128.0, 65.7, 29.0)
  } else {
    doc.addImage(textFailed, 'PNG', 28.4, 128.0, 65.7, 29.0)
  }
  // page 2 reg number
  doc.setTextColor(255, 255, 255)
  doc.setFontSize(10.8)
  doc.text('No. R7P-3.08.'+data.student_id, 54.8, 62.7, {
    align: 'center'
  });
  doc.save("S7P_Season3_Study_Report.pdf");  

  // reenabling action button
  document.getElementById('pdfSaver').classList.remove("d-none")
  document.getElementById('pdfSaverLoading').classList.add("d-none")
}    

// helper function
function replacer(targetId, value) {
  document.getElementById(targetId).innerHTML = value;
}