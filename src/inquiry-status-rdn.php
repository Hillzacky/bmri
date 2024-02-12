https://sandbox.bankmandiri.co.id/openapi/onboarding/v1.0/inquiryStatusRDN

{
"refferenceId": "323243645551",
"nik": "3189450983214005"
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
refferenceId
Customer reference number used for account registration
String(19)
Required
nik
Customer Identity number (KTP) Must be Number
String(16)
Required