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
        to: "paul.pius@crdbbank.co.tz", // list of receivers
        subject: "Certificate of Sales Agent Commision", // Subject line
        text: "Dear Kindly receive your Weekly Certificate of Commission ", // plain text body
        html: "Dear, Kindly receive your Weekly Certificate of Commission ", // html body
        attachments: [{
            filename: 'CommissionCert.pdf',
            path: 'C:/Users/ppius/Documents/test.pdf',
            contentType: 'application/pdf'
        }]
    });

    console.log("Message sent: %s", info.messageId);
    // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>

    // Preview only available when sending through an Ethereal account
    console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
    // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
}
module.exports = main;