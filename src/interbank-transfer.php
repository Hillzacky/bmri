https://sandbox.bankmandiri.co.id/openapi/transactions/v2.0/transfer-interbank

{

"sourceAccountNo":"1150006391330",
"beneficiaryAccountNo":"3350022022",
"beneficiaryAccountName":"DIMAS",
"beneficiaryBankCode":"014",
"beneficiaryBankName":"BankBCA",
"amount":
{
"value":"15000",
"currency":"IDR"
},
"transactionDate":"2022-06-13T12:15:03+07:00",
"partnerReferenceNo":"20220624150032143",
"beneficiaryEmail":"sandbox_test@gmail.com",
"beneficiaryAddress":"Jakarta",
"additionalInfo":
{
"switcher":"ATMB"
},
"remark":""
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
CHANNEL-ID
Channel ID from partner
Number(5)
Required
Body Parameters
sourceAccountNo
Numeric string. registered partner account number
String(13)
Required
beneficiaryAccountNo
Numeric string. other bank destination account number
String(19)
Required
value
Applicable minimum transfer value of IDR 10000.00
Decimal (19,2)
Required
currency
Must be filled with IDR only
String(3)
Required
transactionDate
Current Date in yyyy-MM-ddTHH:mm:ssTZD
String(10)
Required
partnerReferenceNo
Unique transaction ID generated by partner. This value will be needed for transfer status inquiry along with X-EXTERNAL-ID
String (19)
Required
beneficiaryBankCode
Account Issuing Bank Code (11 digit SWIFT Bank Code or 3 Digit Bank Code)
String(11)
Required
beneficiaryBankName
Other bank destination bank name
String(60)
Required
beneficiaryAccountName
Other bank destination bank account name
String(70)
Required
beneficiaryEmail
Email address for sending email notifications to the beneficiary account owner
String (100)
Optional
switcher
Availbale value : PRIMA (Default) or ATMB.
String(7)
Optional