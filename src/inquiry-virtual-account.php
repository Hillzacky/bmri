https://sandbox.bankmandiri.co.id/openapi/transaction/v1.0/transfer-va/inquiry-va
{
"partnerServiceId": "89661",
"customerNo": "8966112900000403",
"virtualAccountNo": "8966112900000403",
"trxId": "abcd12349"
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
trxId
Transaction ID in partner system, must be unique
String(50)
Required
