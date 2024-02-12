https://sandbox.bankmandiri.co.id/openapi/onboarding/v1.0/registerAccountRDN

{
"refferenceId": "323243645551",
"nik": "3189450983214005",
"fullname": "Bambang Pamungkas",
"motherMaidenName": "Iyem",
"dob": "04061995",
"sid": "FDD280138386614",
"sre": "RO001SS7500128",
"participantId": "CC001",
"participantName": "PT. Mandiri Sekuritas",
"productType": "MTBINV-OL",
"branchCode": "99999",
"accountNo": "0040000044251",
"companyIDMCM": "BUDI123",
"accountGroupMCM":"accounting1;accounting2;accounting3;accounting4",
"selfiePhoto": "/9j/4AAQSkZJRgABAQEASABIAAD/"
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
customerNo
Current account number. Must be Number
String (13)
Required
nik
Customer Identity number (KTP) Must be Number
String(16)
Required
fullname
Customer fullname
String(140)
Required
motherMaidenName
Customer mother maiden name
String(140)
Required
dob
Customer date of birth in format : ddMMyyyy
String(8)
Required
sid
SID Numbe
String(15)
Required
sre
Sub Account Number
String(16)
Required
participantId
KSEI Participant Id (from KSEI Data)
String(5)
Required
participantName
Company Name (from KSEI data)
String(45)
Required
productType
Default value : MTBINV-OL
String(12)
Required
branchCode
Mandiri Branch Code, Must be Number
String(7)
Required
companyIDMCM
If CompanyIDMCM is filled, system will register the account to MCM application
String(10)
Optional
accountGroupMCM
If AccountGroupMCM is filled, system will register the account to Account Field Name Attrib. Type Comment Group MCM More than one account group must separate by semicolon (;)
String(100)
Optional
selfiePhoto
Base64 data from *.jpg file (below <200KB)
String(273000)
Required