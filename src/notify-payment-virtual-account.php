https://sandbox.bankmandiri.co.id

{
"partnerServiceId": "89661",
"customerNo": "8966112922120144",
"virtualAccountNo": "8966112922120144",
"virtualAccountName": "JokulDoe",
"virtualAccountEmail": "jokul@email.com",
"virtualAccountPhone": "6281290405251",
"trxId": "302030468",
"paymentRequestId": "1216142730176166160385",
"hashedSourceAccountNo": "5db7120268c99f05a55f964d9a8b0fc6",
"paidAmount": {
"value": "75000",
"currency": "360"
},
"trxDateTime": "20221216T142730+0700"
}

Header Parameters
Authorization
Bearer < token >
String
Required
Content-Type
application/json
String
Required
X-TIMESTAMP
FORMAT: yyyy-MM-ddTHH:mm:ssTZD
String
Required
X-SIGNATURE
Transaction signature. Please refer to Transaction Signature section
String
Required
X-PARTNER-ID
Partner ID given by Mandiri upon onboarding process
String(16)
Required
X-EXTERNAL-ID
Numeric String. Unique ID per request generated by partner
String(19)
Required
Body Parameters
partnerServiceId
3 space padding left + 5 digit company code
String(8)
Required
customerNo
partnerServiceId+customerNo
String (20)
Required
virtualAccountNo
3 space padding left + 5 digit company code + VirtualAccountNo
String(28)
Required
virtualAccountName
Customer name
String(255)
Required
virtualAccountEmail
Customer email
String(50)
Optional
virtualAccountPhone
Customer phone's number (Format : 62xxxxxxxxxxx)
String(20)
Optional
trxId
Transaction ID in partner system, must be unique
String(50)
Optional
paymentRequestId
Payment Request ID
String(50)
Required
hashedSourceAccountNo
Hashed Source Account No
String(50)
Required
paidAmount
For close payment type, Biller must re- validate the amount
Object
Optional
value
Sample : 75000.00
String(16,2)
Required
currency
Sample : IDR
String(3)
Required
trxDateTime
Transaction timestamp FORMAT: 'yyyy-MM-dd'T'HH:mm:ssTZD'
String(25)
Required