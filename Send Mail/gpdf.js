const PDFGenerator = require('pdfkit')
const fs = require('fs')

// instantiate the library
let theOutput = new PDFGenerator

// pipe to a writable stream which would save the result into the same directory
theOutput.pipe(fs.createWriteStream('myDoc.pdf'))
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
theOutput.text('Hello Agent, Your total commission for week 1 - 27th Sept 2021 is 40,000Tsh for 10 customers Date : ' + time)

// write out file
theOutput.end()