// smtenga@crdbbank.co.tz
"use strict";
const nodemailer = require("nodemailer");

// async..await is not allowed in global scope, must use a wrapper
async function main() {
    // Generate test SMTP service account from ethereal.email
    // Only needed if you don't have a real mail account for testing
    let testAccount = await nodemailer.createTestAccount();

    // create reusable transporter object using the default SMTP transport
    let transporter = nodemailer.createTransport({
        host: "192.168.132.241",
        port: 25,
        secure: false, // true for 465, false for other ports
        auth: {
            user: testAccount.user, // generated ethereal user
            pass: testAccount.pass, // generated ethereal password
        },
    });

    // send mail with defined transport object
    let info = await transporter.sendMail({
        from: '"Paul Pius 👻" <company@system.com>', // sender address
        to: "paul.pius@crdbbank.co.tz", // list of receivers ,stephen.mtenga@crdbbank.co.tz
        subject: "Certificate of Sales Agent Commision", // Subject line
        text: "Dear Kindly receive your Weekly Certificate of Commission ", // plain text body
        html: "Dear, Kindly receive your Weekly Certificate of Commission ", // html body
        attachments: [{
            filename: 'CommissionCert.pdf',
            path: 'myDoc.pdf',
            contentType: 'application/pdf'
        }]
    });

    console.log("Message sent: %s", info.messageId);
    // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>

    // Preview only available when sending through an Ethereal account
    console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
    // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
}

async function mainRegister() {
    // Generate test SMTP service account from ethereal.email
    // Only needed if you don't have a real mail account for testing
    let testAccount = await nodemailer.createTestAccount();

    // create reusable transporter object using the default SMTP transport
    let transporter = nodemailer.createTransport({
        host: "192.168.132.241",
        port: 25,
        secure: false, // true for 465, false for other ports
        auth: {
            user: testAccount.user, // generated ethereal user
            pass: testAccount.pass, // generated ethereal password
        },
    });

    // send mail with defined transport object
    let info = await transporter.sendMail({
        from: '"Paul Pius 👻" <company@system.com>', // sender address
        to: "paul.pius@crdbbank.co.tz,aloyce.mwitwa@crdbbank.co.tz", // list of receivers ,stephen.mtenga@crdbbank.co.tz
        cc: "stephen.mtenga@crdbbank.co.tz",
        subject: "Successful Subscribed in Company System", // Subject line
        text: "Dear Kindly receive your Weekly Certificate of Commission ", // plain text body
        html: "Dear, Aloyce your successfull subscribed and approved by Company EMployee ", // html body
    });

    console.log("Message sent: %s", info.messageId);
    // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>

    // Preview only available when sending through an Ethereal account
    console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
    // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
}

// main().catch(console.error);

function gPDF() {
    const PDFGenerator = require('pdfkit')
    const fs = require('fs')

    // instantiate the library
    let theOutput = new PDFGenerator

    // pipe to a writable stream which would save the result into the same directory
    theOutput.pipe(fs.createWriteStream('myDoc.pdf'));
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    theOutput.text('Hello Agent, Your total commission for week 1 - 27th Sept 2021 is 40,000Tsh for 10 customers Date : ' + time)

    // write out file
    theOutput.end()
}


const express = require('express')
const app = express()
const port = 3050

app.get('/', (req, res) => {
    console.log('Request received');
    res.send('Hello World!')

})

app.get('/attachment', (req, res) => {
    gPDF();
    setTimeout(() => {
        main().catch(console.error);
        console.log('Email Sent');
        res.send('Email Sent')
    }, 3000);


})

app.get('/register', (req, res) => {
    mainRegister().catch(console.error);
    console.log('Email Sent');
    res.send('Email Sent')

})

app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`)
})