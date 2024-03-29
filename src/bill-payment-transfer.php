https://sandbox.bankmandiri.co.id/openapi/transactions/v2.0/transfer-va/payment-intrabank

{
"partnerServiceId":"50012",
"customerNo":"60004398552",
"virtualAccountNo":"124005900176133",
"language":"01",
"sourceAccountNo":"1150007482849",
"sourceAccountType":"S",
"partnerReferenceNo":"9138473847837",
"paidBills":"FFFFFF",
"trxDateTime":"2021-01-13T14:19:39+07:00",
"paidAmount":
{
"value":"20000",
"currency":"IDR"
}
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
partnerServiceId
5 digit company code + 3 space padding left
String(8)
Required
customerNo
Customer identifier
String (20)
Required
virtualAccountNo
partnerServiceId+customerNo
String(28)
Required
language
Billing language code, id or en
String(2)
Required
sourceAccountNo
Source Account
String(19)
Required
sourceAccountType
D = Current Account, S = Saving Account
String(1)
Required
partnerReferenceNo
Transaction identifier on service consumer system
String(19)
Optional
paidBills
Hexadecimal format of the binary bills selection. Sample case : if only billCode no 1 & 4 in billDetails object that have been paid, then the hexadecimal of the 1001 binary is 9000
String(6)
Optional
paidAmount
Sample format : { value:10000.00,currency:IDR }
Object, String(16,2) and String(3)
Required
trxDateTime
Transaction timestamp FORMAT: ?yyyy-MM-ddTHH:mm:ssTZD
String(25)
Required